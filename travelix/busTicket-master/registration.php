<?php include 'login_header.php'; ?>
<?php 
if(isset($_POST['reg-submit'])){
    
    $username = $_POST['username']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $address = $_POST['address']; 
    $password = $_POST['password1']; 
    $password2 = $_POST['password2']; 
    
    if($password != $password2){
        
        
        echo "Two password not match";
    }
    
    else{
        
        $sql = "select * from users where email='$email'";
        if(mysqli_num_rows(mysqli_query($db, $sql)) == 0){
            $sql = "INSERT INTO users(username,email,phone,address,password) VALUES('$username','$email','$phone','$address','$password')";
            if(mysqli_query($db, $sql)){
            ?><script>alert("Successfully Registerd"); window.location="../"</script><?php
            }
        }else{
            ?><script>alert("User already Registerd");</script><?php
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
      
}
}  
        }
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
  
  <h2 style="text-align:center;">Registration Form</h2>
  <br>
   
   <form action="" method="post">
   
   
   <table style="margin-left:320px;">
       <tr>
           <td><label for="">Name</label> </td>
           <td><input type="text" name="username" placeholder="Enter your Name" required></td>    
       </tr>
       
       
       <tr>
           <td><label for="">Email</label> </td>
           <td><input type="email" name="email" placeholder="Enter your email" required></td>   
       </tr>
       
       <tr>
           <td><label for="">Phone</label> </td>
           <td><input type="text" name="phone" placeholder="Enter your phone number" required></td>
       </tr>
       
         <tr>
           <td><label for="">National ID</label> </td>
           <td><input type="text" name="nid" placeholder="Enter your nid" required></td>
       </tr>
       
       <tr>
           <td><label for="">Address</label> </td>
           <td><input type="text" name="address" placeholder="Enter your address" required></td>
           
           
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
           <td><input type="submit" value="Submit" name="reg-submit"></td>
           
       </tr>
       
       
       
       
   </table>
    
    
    </form>
    
    
    
    
</div>
   
<?php include 'footer.php'; ?>