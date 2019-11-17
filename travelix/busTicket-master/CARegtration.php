<?php include 'header.php'; ?>
<?php 
if(isset($_POST['careg-submit'])){
    
    $location = $_POST['location']; 
    $email = $_POST['email']; 
    $password = $_POST['password1']; 
    $password2 = $_POST['password2']; 
    
    if($password != $password2){
        
        
        echo "Two password not match";
    }
    
    else{
        
        echo "Registration Successful";
        
        
        $sql = "INSERT INTO counteradmin(location,email,password) VALUES('$location','$email','$password')";
        
        if(mysqli_query($db, $sql)){
            
            echo "Data Updated";
            
            
        }
        
        
    }
    
    
}





?>

<style>


input[type=text], input[type=email] {
    width: 150%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
    input[type=password] {
    width: 150%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
    
    label{
        font-size: 150%;
    }



</style>

<div class="container">
  
  <h2 style="text-align:center;">Counter Admin Registration</h2>
  <br>
   
   <form action="" method="post">
   
   
   <table style="margin-left:320px;">
       <tr>
           <td><label for="">Counter Name</label> </td>
           <td><input type="text" name="location" placeholder="Counter Name" required></td>
           
           
       </tr>
       
       
       <tr>
           <td><label for="">Email</label> </td>
           <td><input type="email" name="email" placeholder="Enter email" required></td>
           
           
       </tr>
       
       
        <tr>
           <td><label for="" style="margin-right:20px;">Password</label> </td>
           <td><input type="password" name="password1" placeholder="Enter your password" required></td>
           
           
       </tr>
       
       <tr>
           <td><label for="" style="margin-right:20px;">Re-Enter Password</label> </td>
           <td><input type="password" name="password2" placeholder="Re-Enter your password" required></td>
           
           
       </tr>
       <tr>
           <td></td>
           <td><label style="font-size:100%;">All information is required</label></td>
           
       </tr>
       
       <tr>
           <td></td>
           <td><input type="submit" value="Submit" name="careg-submit"></td>
           
       </tr>
       
       
       
       
   </table>
    
    
    </form>
    
    
    
    
</div>
   
<?php include 'footer.php'; ?>