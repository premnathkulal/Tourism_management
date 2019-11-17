<?php require 'header.php'; ?>
<?php
    $sql = "SELECT * FROM discount";
    $result = mysqli_query($db, $sql);
        
    

?>

<style>
    td,th{
        
        text-align: center;
    }


</style>

<div class="container">
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
            <?php echo $row['code']; ?>
        </td>
        <td>
            <?php echo $row['disAmount']; ?>
        </td>
        <td class="text-center">
            <?php echo $row['disStatus']; ?>
        </td>
        
        <td>
           <a href="editDiscount.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a>
           <a href="" class="btn btn-danger">Delete</a>
            
            
            
            
        </td>



    </tr>
    <?php endwhile; ?>


</table>

<a href="newDiscount.php" class="btn btn-success">Add New Offer</a>

</div>


<?php require 'footer.php'; ?>