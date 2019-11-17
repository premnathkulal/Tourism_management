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

        <label style="padding-right:20px">Description</label><br>
            <input type="text" name="desc" required>

        <label style="padding-right:20px">Details</label><br>
        <textarea rows="4" name="det" cols="50"></textarea>

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
        $desc = $_POST['desc'];

        $det = $_POST['det'];
        $image = addslashes(file_get_contents($_FILES['img']['tmp_name']));

        require "../init.php";
        $sql = "insert into locations(name,address,lat,lon,description) values('$name','$adress','$lat','$lon','$desc')";
        $resul = mysqli_query($con, $sql);

        $sql = "select max(id) as mid from locations";
        $resul = mysqli_query($con, $sql);
        $resul = mysqli_fetch_all($resul, MYSQLI_ASSOC);
        $i_id = $resul[0]['mid'];
        echo $mid;
        $sql = "insert into location_images(loc_id,images,details) values('$i_id','$image','$det')";
        $resul = mysqli_query($con, $sql);
        if($resul){
            ?><script>alert("Successfully added");</script><?php
        }else{
            ?><script>alert("Error while adding");</script><?php
        }

    }
?>

<?php include 'footer.php'; ?>