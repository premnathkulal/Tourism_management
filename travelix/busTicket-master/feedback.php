<?php include 'header.php'; ?>
<?php

   if($_SESSION['cLog']==false){
       
       
       header('Location: login.php');
   }

?>

<?php 
    $sql = "SELECT * FROM contact ORDER BY id DESC";
    $result = mysqli_query($db, $sql);



?>

<style>

    tr:nth-child(odd) {background-color: #8b8fe5;}
    tr:nth-child(even) {background-color: #32bdd8;}
    table{
        
        font-size: 120%;
    }



</style>
<div class="container">
    <table class="table">
        
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Comment</th>
            
            
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>

        <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['website']; ?></td>
            <td><?php echo $row['comment']; ?></td>
            
        </tr>
        <?php endwhile; ?>
        
        
        
    </table>
    
    
    
    
</div>


<?php include 'footer.php'; ?>