<?php require 'header.php'; ?>

<?php
    if(isset($_POST['add-discount'])){
        $code = $_POST['code'];
        $disAmount = $_POST['disAmount'];
        $disStatus = $_POST['disStatus'];
        
        $sql = "INSERT INTO discount(code, disAmount, disStatus) VALUES('$code', '$disAmount', '$disStatus')";
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

    <tr>
        <td>
           
        </td>
        <td>
            <input type="text" name="code" required>
        </td>
        <td>
           <input type="text" name="disAmount" required>
         </td>
        <td >
           <textarea name="disStatus" cols="30" rows="2" required ></textarea> 
        </td>
        
        <td>
           <input type="submit" name="add-discount" value="Add Offer" class="btn btn-success">
            
            
            
            
        </td>



    </tr>


</table>

</form>

</div>


<?php require 'footer.php'; ?>