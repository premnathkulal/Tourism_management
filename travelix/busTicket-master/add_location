<?php include 'pro_header.php'; ?>

<link rel="stylesheet" href="css/style1.css">

<div class="wrapper">

    <form action="" method="post" enctype="multipart/form-data">

        <label for="busname">Enter Restourent Name</label>
            <input type="text" name="name" required>

        <label style="padding-right:20px">Adress</label><br>
            <input type="text" name="adress" required>

        <label style="padding-right:20px">Lattitude</label><br>
            <input type="text" name="lat" required>

        <label style="padding-right:20px">Longitude</label><br>
            <input type="text" name="lon" required>

        <label style="padding-right:20px">Rate</label><br>
            <input type="text" name="rate" required>

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
        $rate = $_POST['rate'];
        $image = addslashes(file_get_contents($_FILES['img']['tmp_name']));
        require "../init.php";
        $sql = "insert into accomodation(name,adress,lat,lon,image,rate) values('$name','$adress','$lat','$lon','$image','$rate')";
        $resul = mysqli_query($con, $sql);
        if($resul){
            ?><script>alert("Successfully added");</script><?php
        }else{
            ?><script>alert("Error while adding");</script><?php
        }

    }
?>

<?php include 'footer.php'; ?>