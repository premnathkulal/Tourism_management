<?php include 'header.php'; ?>
<?php
    if($_SESSION['cLog'] == false){
        header('Location: index.php');
    }


?>
<?php 

   

   /*  if(isset($_POST['accept'])){
        
       echo "accepted";
        
       $txnV = $_POST['txnv']; 
        $ticket = $_POST['ticket'];
        
        echo $txnV;
        
        $sql = "DELETE FROM payment where txnId='$txnV'";
        
        if(mysqli_query($db, $sql)){
            echo "Ticket Accepted";
        }
        else{
            
            echo "Error updating record: " . mysqli_error($db);
        }
        
        // status pending accepted rejected
        
        $sql = "SELECT * FROM report";
        $results = mysqli_query($db, $sql);
        
        
        $sql = "UPDATE report SET status = 'Accepted' WHERE ticket='$ticket'";
            mysqli_query($db, $sql);
        
        
    }*/


    if(isset($_POST['cancel'])){
        
        $txnV = $_POST['txnv']; 
                $ticket = $_POST['ticket'];

        
         $sql = "UPDATE seat SET val = 0 WHERE txnId='$txnV'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
        
         $sql = "DELETE FROM cancel where txnId='$txnV'";
        
        if(mysqli_query($db, $sql)){
            //echo "Ticket Cancel";
        }
        else{
            
            echo "Error updating record: " . mysqli_error($db);
        }
        
        
        // remove item from payment when cancel ticket
        
        $sql = "DELETE FROM payment where txnId='$txnV'";
        
        if(mysqli_query($db, $sql)){
            //echo "Ticket Accepted";
        }
        else{
            
            echo "Error updating record: " . mysqli_error($db);
        }
        
        
    }

?>

<?php

$busId =  $_SESSION['idVal'];

$sql = "SELECT * FROM cancel WHERE busId =  '$busId'";

$result = mysqli_query($db, $sql);


    


?>

<style>
   
    .submit{
        
        text-align: center;
        background-color: #2bd838;
        padding: 5px 10px;
        border-radius: 6px;
    }
    
    
    table th{
        
        background-color: #65a7a7;
        text-align: center;
    }
table tr:nth-child(even){background-color: #f2f2f2;
    text-align: center;
    }
    
  


</style>


<div class="container">
    
    
    


<?php while($row = mysqli_fetch_assoc($result)): ?>
    
    <form action="" method="post">
        
        
    
    <table class="table">
       
       <tr>
          
          
          <th>Email</th>
           <th>User phone</th>
           <th>User ticket</th>
           <th>User amount</th>
           <th>User TxnId</th>
           <th>Status</th>
           
           
       </tr>
        <tr>
    <td> <?php echo $row['email']; ?> </td> 
    <td> <?php echo $row['phone']; ?></td> <br>
    <td> <?php echo $row['ticket']; ?></td> <br>
    <td> <?php echo $row['amount']; ?></td> <br>
    <td> <?php echo $row['txnId']; ?></td> <br>
    <td><input type="text" name="txnv" value="<?php echo $row['txnId']; ?>" style="display:none";>
          <input type="submit" value="Cancel" name="cancel" class="submit">
           
           </td>
            
                <input type="text" name="ticket" value="<?php echo $row['ticket']; ?>" style="display:none";>

        </tr>
        
        
    </table>

   </form>

<?php endwhile; ?>

</div>


<?php include 'footer.php'; ?>
