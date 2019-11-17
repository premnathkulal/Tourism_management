<?php include 'login_header.php'; ?>
<?php 

    $logValid = "";

if(isset($_POST['login-submit'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if($email=='prem@gmail.com' && $password=='123456'){
        
         $_SESSION['adminLog'] = true; 
         $_SESSION['cadminLog'] = false;
         $_SESSION['cLog'] = false;
         $_SESSION['isLogged'] = false;
        
        header('Location:admin.php');
        
    }
        
    // counter admin 
    $sql = "SELECT * FROM counteradmin WHERE email = '$email'";
        
    $result = mysqli_query($db, $sql);
    
    while($row = mysqli_fetch_assoc($result)){
        
      
            
           
        if($password == $row['password']){
        
        echo "You are logged";
            
            
            
         $_SESSION['adminLog'] = false; 
         $_SESSION['cadminLog'] = true;
         $_SESSION['cLog'] = false;
         $_SESSION['isLogged'] = false;
            
        $_SESSION['email'] = $email;
            
            header('Location: counteradmin.php');
            
            
        }
        
        else{
            
            
            $logValid = "You email or password wrong";
        
           // header('Location: login.php');
            
            
            
        }
         
        }
    
    // counter
    $sql = "SELECT * FROM counter WHERE email = '$email'";
        
    $result = mysqli_query($db, $sql);
    
    while($row = mysqli_fetch_assoc($result)){
        
      
            
           
        if($password == $row['password']){
        
        echo "You are logged";
            
         $_SESSION['adminLog'] = false; 
         $_SESSION['cadminLog'] = false;
         $_SESSION['cLog'] = true;
         $_SESSION['isLogged'] = false;
         $_SESSION['email'] = $email;
            
            header('Location: counter.php');
            
            
        }
        
        else{
            
            
            $logValid = "You email or password wrong";
        
           // header('Location: login.php');
            
            
            
        }
         
        }
    
    
    // normal users
    $sql = "SELECT * FROM users WHERE email = '$email'";
        
    $result = mysqli_query($db, $sql);
    
    while($row = mysqli_fetch_assoc($result)){
        
      
            
           
        if($password == $row['password']){
        
        echo "You are logged";
            
            
             $_SESSION['adminLog'] = false; 
         $_SESSION['cadminLog'] = false;
         $_SESSION['cLog'] = false;
        
            $_SESSION['isLogged'] = true;
            $_SESSION['email'] = $email;
            
            header('Location: ../index.php');
            
            
        }
        
        else{
            
            
            $logValid = "You email or password wrong";
        
           // header('Location: login.php');
            
            
            
        }
         
        }
        
        
        
        
    
    echo $logValid;
        
    }
    
    




?>



<style>


input[type=text] {
    width: 130%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
    input[type=password] {
    width: 130%;
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
  
  <h2 style="text-align:center;">Login Form</h2>
  <br>
   
   <form action="login.php" method="post">
       
       <table style="margin-left:320px;">
       <tr>
           <td><label for="">Email</label> </td>
           <td><input type="text" name="email" placeholder="Enter your email" required></td>
           
           
       </tr>
       
        <tr>
           <td><label for="" style="margin-right:20px;">Password</label> </td>
           <td><input type="password" name="password" placeholder="Enter your password" required></td>
           
           
       </tr>
       
       <tr>
           <td></td>
           <td><input type="submit" value="Submit" name="login-submit"></td>
           
       </tr>
       
       <tr>
           <td></td>
           
           
           <td><label style="font-size:100%;">Don't have an account<a href="registration.php" style="margin-left:10px;">Create Account</a></label></td>
           
       </tr>
       
       
       
       
   </table>
    
       
       
   </form>
    
    
    
    
    
    
</div>
   
<?php include 'footer.php'; ?>