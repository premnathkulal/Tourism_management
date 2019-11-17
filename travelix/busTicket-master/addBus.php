<?php include 'header.php'; ?>


<link rel="stylesheet" href="css/style1.css">



<div class="wrapper">

    <form action="addedBus.php" method="post">


        <label for="busname">Enter Your Bus Name</label>
        <input type="text" name="busName" required>
        
        <?php 
            
            $sql = "SELECT DISTINCT cityF FROM place";
            $result = mysqli_query($db, $sql);
        
        
        ?>
       
       
        <label>FROM</label>
        <select name="from">
           <?php while($row = mysqli_fetch_assoc($result)): ?>
           
            <option value="<?php echo $row['cityF']; ?>" name="<?php echo $row['cityF']; ?>"><?php echo $row['cityF']; ?></option>
            
            <?php endwhile; ?>
        </select>

            <?php 
            
            $sql = "SELECT DISTINCT cityT FROM place";
            $results = mysqli_query($db, $sql);
        
         ?>
       

        <label style="padding-right:20px">TO</label>
        <select name="to">
            
           <?php while($rows = mysqli_fetch_assoc($results)): ?>
            <option value="<?php echo $rows['cityT']; ?>" name="<?php echo $rows['cityT']; ?>"><?php echo $rows['cityT']; ?></option>
            
            <?php endwhile; ?>

        </select>
        <label for="">Bus Type</label>
        <select name="busType" id="">
        <option value="AC">AC Bus</option>
        <option value="NAC">Non AC Bus</option>
        </select>

        <label for="ldate" style="margin-top:20px;">SELECT DATE</label><br>
        <input type="date" data-date-inline-picker="true" name="busDate"  required style="margin-right: 30px;">





        <label for="time" style="margin-right:10px;">SELECT TIME</label>
        <input type="radio" name="busTime" value="6.00 AM" required>6.00 AM
        <input type="radio" name="busTime" value="7.00 AM">7.00 AM
        <input type="radio" name="busTime" value="8.00 AM">8.00 AM

        <br><br>

        <input type="submit" value="Add Bus" name="submit">


    </form>
</div>



<?php include 'footer.php'; ?>