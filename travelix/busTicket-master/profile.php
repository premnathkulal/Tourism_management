<?php include 'pro_header.php'; ?>
<?php 
    
    if(!isset($_GET['id'])){
        $_GET['id'] = '';

    }
    else{
         $id = $_GET['id'];

        $sql = "DELETE FROM report WHERE id = '$id'";

        mysqli_query($db, $sql);

}
    if(isset($_POST['discount-submit'])){
        
        $code = $_POST['code'];
        require_once('function.php');
        
       $disAmount = discount($code);
        $disStatus = status($code);
        $email = $_SESSION['email'];
        
        $sql = "UPDATE users SET disAmount = '$disAmount', disStatus = '$disStatus' WHERE email = '$email'";
        mysqli_query($db, $sql);
        
        
        
    }
        
  require_once('function.php');
  $status = Ustatus();
    



?>

<style>

    
    
    tr:nth-child(odd) {
        
    background-color: #8aaca1;
    
   font-size: 140%;
    
    }
    tr:nth-child(even) {background-color: #b0c4c3;
    
    font-size: 140%;
    
    }


</style>




<div class="container" >
    <?php
    $email =  $_SESSION['email'];
    
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($db, $sql);
    
    
    ?>
    
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    
    <table class="table">
        <tr>
            <td>Name</td>
            <td><?php echo $row['username']; ?></td>
            
        </tr>
        
        
        <tr>
            <td>Email</td>
            <td><?php echo $row['email']; ?></td>
            
        </tr>
        <tr>
            <td>Phone</td>
            <td><?php echo $row['phone']; ?></td>
            
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $row['address']; ?></td>
            
        </tr>
        
        <?php endwhile; ?>
        
    </table>
        <center>
            <button onclick="room();">Room booking Info</button>
            <button onclick="bus();">Bus Ticket booking Info</button><br><br>
        <center>
        <?php 
        
            $email = $_SESSION['email'];
        
            $sql = "SELECT * FROM report WHERE email = '$email'";
            $result = mysqli_query($db, $sql);
            $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
    <center>
    <div id="bus" style="display:none;">
   <table class="table" >
        <?php foreach($result as $row){ ?>
                <tr>
                    <td><label for="">Your Ticket Status</label></td>
                    <td><?php echo $row['status']; ?></td>
                    
                </tr>
                
                <tr>
                    <td><label for="">Bus Date</label></td>
                    <td><?php echo $row['busDate']; ?></td>
                    
                </tr>
                
                <tr>
                    <td><label for="">Bus Time</label></td>
                    <td><?php echo $row['busTime']; ?></td>
                    
                </tr>
                
                <tr>
                    <td><label for="">Bus From</label></td>
                    <td><?php echo $row['busDesA']; ?></td>
                    
                </tr>
                <tr>
                    <td><label for="">Bus To</label></td>
                    <td><?php echo $row['busDesB']; ?></td>
                    
                </tr>
                
                <tr>
                    <td><label for="">Your Ticket</label></td>
                    <td><?php echo $row['ticket']; ?></td>             
                </tr>

                <tr>
                    <td>               
                        <a href="profile.php?id=<?php echo $row['id']; ?>"><input type="submit" class="btn btn-danger align-center" value="Delete" name="delete-report"></a>
                    </td>
                </tr>  
        <?php } ?>
        
    </table>
    </div>
    <div id="room" style="display:none;">
    <table class="table" >
        <tr style="color:red;">
            <td>Check In</td>
            <td>Check Out</td>
            <td>Room Adress</td>
            <td>Option</td>
        </tr>  
        <?php 
            require "../init.php";
            $lu = $_SESSION['email'];
            $sql = "select c_in,c_out,adress,rb.id as rid from room_book as rb, accomodation as ac where rb.r_id = ac.id and u_id = '$lu'";
            $result = mysqli_query($con, $sql);
            $d = mysqli_fetch_all($result,MYSQLI_ASSOC);
            foreach($d as $row){ ?>
                 <tr>
                    <td><?php echo $row['c_in']; ?></td>
                    <td><?php echo $row['c_out']; ?></td>
                    <td><?php echo $row['adress']; ?></td>
                    <form action="" method="GET">
                        <input type="hidden" name="d_id" value="<?php echo $row['rid']; ?>" readonly>
                        <td><input type="submit" name="submit_d" value="delete"></td>
                    </form>
                </tr> 
         <?php  
             }
         ?>
    </table>
    </div>
</div>

<?php
 if(!isset($_GET['submit_d'])){
        
    }
    else{
        $id = $_GET['d_id'];
        require "../init.php";
        $sql = "DELETE FROM room_book WHERE id = '$id'";
        mysqli_query($con, $sql);
        ?><script>window.location="profile.php"</script><?php
}
?>
<?php include 'footer.php'; ?>

<script>
    function room(){
        document.getElementById('room').style.display = 'block';
        document.getElementById('bus').style.display = 'none';
    }
    function bus(){
        document.getElementById('room').style.display = 'none';
        document.getElementById('bus').style.display = 'block';
    }
</script>
