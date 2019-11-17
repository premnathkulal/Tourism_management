<?php include 'pro_header.php'; ?>

<link rel="stylesheet" href="css/style1.css">

<div class="wrapper">

    <form action="" method="post" enctype="multipart/form-data">

        <label for="busname">Enter Restourent Name</label>
            <input type="text" name="name" required>

        <label style="padding-right:20px">Adress</label><br>
            <input type="text" name="adress" required>

        <label style="padding-right:20px">Mobile  number</label><br>
            <input type="text" name="ph_no" required>

        <label style="padding-right:20px">Lattitude</label><br>
            <input type="text" name="lat" required>

        <label style="padding-right:20px">Longitude</label><br>
            <input type="text" name="lon" required>

        <label style="padding-right:20px">Image</label><br>
            <input type="file" name="img" required>
        <br><br>

        <input type="submit" value="Add Restourent" name="submit">
    </form>

</div>

<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $adress = $_POST['adress'];
        $lat = $_POST['lat'];
        $lon = $_POST['lon'];
        $ph_no = $_POST['ph_no'];
        $image = addslashes(file_get_contents($_FILES['img']['tmp_name']));
        require "../init.php";
        $sql = "insert into tour_guid(name,ph_no,adress,lat,lon,image) values('$name',$ph_no,'$adress','$lat','$lon','$image')";
        $resul = mysqli_query($con, $sql);
        if($resul){
            ?><script>alert("Successfully added");</script><?php
        }else{
            ?><script>alert("Error while adding");</script><?php
        }

    }
?>

<?php include 'footer.php'; ?>