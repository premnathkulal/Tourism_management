<?php include 'header.php'; ?>
<?php

   if($_SESSION['cLog']==false){
       
       
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
        <table class="table">
       <tr>
                <td class="le">Cancel Ticket</td>
                <td><a href="cancel.php"><input type="button" value="Cancel Ticket"></a></td>
                
                
            </tr>
        
         
           
         <tr>
                <td class="le">Search Bus</td>
                <td><a href="search.php"><input type="button" value="Search Bus"></a></td>
                
                
            </tr>
            
              <tr>
                <td class="le">User Feedback</td>
                <td><a href="feedback.php"><input type="button" value="User Feedback"></a></td>
                
                
            </tr>
            
           
            
            
            
            
           
            
        </table>
        
        
        
        
    </div>



<?php include 'footer.php'; ?>