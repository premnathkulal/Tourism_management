<?php require 'header.php'; ?>
<?php
if(isset($_GET['id'])){
    
    $id = $_GET['id'];

}
    
    $sql = "SELECT * FROM discount WHERE id = '$id'";
    $result = mysqli_query($db, $sql);
        
    
 if(isset($_POST['update-discount'])){
        $code = $_POST['code'];
        $disAmount = $_POST['disAmount'];
        $disStatus = $_POST['disStatus'];
        
        $sql = "UPDATE discount SET code='$code', disAmount = '$disAmount', disStatus = '$disStatus' WHERE id = '$id'";
        mysqli_query($db, $sql);
        header('Location: index.php');
        exit();
        
        
    }



?>

<style>
    td,th{
        
        text-align: center;
    }
    input[type=text]{
        
        text-align: center;
        padding: 5px;
    }
    textarea{
        padding: 4px;
    }


</style>

<div class="container">

<form action="" method="post">

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Code</th>
        <th>Amount</th>
        <th>Status</th>
        <th>Action</th>

    </tr>
    <?php while($row=mysqli_fetch_assoc($result)): ?>

    <tr>
        <td>
            <?php echo $row['id']; ?>
        </td>
        <td>
            <input type="text" name="code" value="<?php echo $row['code']; ?>">
        </td>
        <td>
           <input type="text" name="disAmount" value="<?php echo $row['disAmount']; ?>">
         </td>
        <td >
           <textarea name="disStatus" id="" cols="30" rows="2" ><?php echo $row['disStatus']; ?></textarea> 
        </td>
        
        <td>
           <input type="submit" name="update-discount" value="Update" class="btn btn-success">
            
            
            
            
        </td>



    </tr>
    <?php endwhile; ?>


</table>

</form>

</div>


<?php require 'footer.php'; ?>