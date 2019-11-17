<?php include 'pro_header.php'; ?>
<?php

   if($_SESSION['adminLog']==false){
       
       
       header('Location: login.php');
   }

?>

<style>

    input[type=button]{
        
        color: white;
        font-size: 150%;
        background-color: #408965;
        padding: 5px 5px;
        width: 200px;
        
        
    }
    
    tr:nth-child(odd) {background-color: #8b8fe5;}
    tr:nth-child(even) {background-color: #32bdd8;}
    .le{
        
        font-size: 150%;
        font-weight: bold;
    }
    

</style>


<div class="container">
    
    <form action="" method="post">
        <table class="table">
            <tr>
                <td class="le">Want To Add New Place</td>
                <td><a href="add_location.php"><input type="button" value="Add Place"></a></td>
            </tr>
            
            <tr>
                <td class="le">Want To Add New Resturent</td>
                <td><a href="add_restourent.php"><input type="button" value="Add Resturent"></a></td>   
            </tr>
            <tr>
                <td class="le">Want To Add New Accomodation</td>
                <td><a href="add_room.php"><input type="button" value="Add Accomodation"></a></td>
            </tr>

            <tr>
                <td class="le">Want To Add New Guid Details</td>
                <td><a href="add_guid.php"><input type="button" value="Add Guid"></a></td>
            </tr>
            
            <tr>
                <td class="le">Want To Add New Bus</td>
                <td><a href="addBus.php"><input type="button" value="Add Bus"></a></td>
            </tr>
            
            <tr>
                <td class="le">Want To Add New Bus Route</td>
                <td><a href="addPlace.php"><input type="button" value="Add Route"></a></td>   
            </tr>
            
        </table>
    </form>  
</div>



<?php include 'footer.php'; ?>