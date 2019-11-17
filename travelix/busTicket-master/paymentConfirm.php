<?php include 'header.php'; ?>
<?php
    if($_SESSION['cadminLog'] == false){
        header('Location: index.php');
    }


?>
<?php 

   

    if(isset($_POST['accept'])){
        
        
       $txnV = $_POST['txnv']; 
        $ticket = $_POST['ticket'];
        $amount = $_POST['amount'];
        $email = $_POST['email'];
        
        
        
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
        
        // code for discount system 
        
        
        $sql  = "SELECT tAmount FROM users where email = '$email'";
        $result_dis = mysqli_query($db, $sql);
        while($row = mysqli_fetch_assoc($result_dis)){
            
            $tAmount = $row['tAmount'];
        }
        
        $tAmount = $tAmount + $amount;
        if($tAmount<10000){
            
            
            $sql = "UPDATE users SET tAmount = '$tAmount' WHERE email = '$email'";
            mysqli_query($db, $sql);
            $sql = "UPDATE users SET disAmount = '0' WHERE email = '$email'";
            mysqli_query($db, $sql);
            
        }
        else{
            
            $sql = "UPDATE users SET disAmount = '20' WHERE email = '$email'";
            mysqli_query($db, $sql);
             $tAmount = $tAmount - 10000;
            $sql = "UPDATE users SET tAmount = '$tAmount' WHERE email = '$email'";
            mysqli_query($db, $sql);
            
            
        }

        // ac non-ac bus travel number count

        $bus_id = $_SESSION['busId'];
      
        $sql = "SELECT busType FROM bus WHERE id = '$bus_id' ";
        $r = mysqli_query($db, $sql);
        $busType = mysqli_fetch_assoc($r);
        $busType = $busType['busType'];

        $sql = "SELECT acBus, nonAcBus FROM users WHERE email = '$email' ";
       
        $res = mysqli_query($db, $sql);
        
        while($row = mysqli_fetch_assoc($res)){
            $acBus = $row['acBus'];
            $nonAcBus = $row['nonAcBus'];
            $acBus = (int)$acBus;
            $nonAcBus = (int)$nonAcBus;
        }
        if($busType == 'acBus'){
            $acBus = $acBus + 1;
            $tt = gettype($acBus);
            
        }
        else if($busType == 'nonAcBus'){
            $nonAcBus = $nonAcBus + 1;
        }
        $sql = "UPDATE users SET acBus='$acBus' WHERE email = '$email' ";
        mysqli_query($db, $sql);
        
        $sql = "UPDATE users SET nonAcBus='$nonAcBus' WHERE email = '$email' ";
        mysqli_query($db, $sql);
        

        
    }


    if(isset($_POST['reject'])){
        
        $txnV = $_POST['txnv']; 
                $ticket = $_POST['ticket'];

         $sql = "UPDATE seat SET val = 0 WHERE txnId='$txnV'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
        
         $sql = "DELETE FROM payment where txnId='$txnV'";
        
        if(mysqli_query($db, $sql)){
            echo "Ticket Rejected";
        }
        else{
            
            echo "Error updating record: " . mysqli_error($db);
        }
        
         $sql = "UPDATE report SET status = 'Rejected' WHERE ticket='$ticket'";
            mysqli_query($db, $sql);
        
        
        
        
        
    }

?>

<?php

$busId =  $_SESSION['idVal'];

$sql = "SELECT * FROM payment WHERE busId =  '$busId'";

$result = mysqli_query($db, $sql);


    
$bus_id = $_SESSION['busId'];


?>

<style>

    .submit{
        
        text-align: center;
        background-color: #2bd838;
        padding: 5px 10px;
        border-radius: 6px;
    }
    .reject{
        
        text-align: center;
        background-color: #ef1c1c;
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
    
    table{
        font-size: 120%;
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
                <td>
                    <?php echo $row['email']; ?>
                </td>
                <td>
                    <?php echo $row['phone']; ?>
                </td> <br>
                <td>
                    <?php echo $row['ticket']; ?>
                </td> <br>
                <td>
                    <?php echo $row['amount']; ?>
                </td> <br>
                <td>
                    <?php echo $row['txnId']; ?>
                </td> <br>
                <td><input type="text" name="txnv" value="<?php echo $row['txnId']; ?>" style="display:none" ;>
                    <input type="submit" value="Accept" name="accept" class="submit">
                    <input type="submit" value="Reject" name="reject" class="reject">
                </td>

                <input type="text" name="ticket" value="<?php echo $row['ticket']; ?>" style="display:none" ;>
                <input type="text" name="amount" value="<?php echo $row['amount']; ?>" style="display:none" ;>
                <input type="text" name="email" value="<?php echo $row['email']; ?>" style="display:none" ;>

            </tr>


        </table>

    </form>

    <?php endwhile; ?>

</div>


<?php include 'footer.php'; ?>