<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration Info</title>
        
    </head>
    <body>
        <?php
        require_once 'functions.php';
        if($_POST){
            $rollno=fix_rollno($_POST['rollno']);
            $name=fix_name($_POST['name']);
            $gender=$_POST['gender'];
            $address=fix_address($_POST['address']);
            $dob=$_POST['dob'];
            $sem=$_POST['sem'];
            $email=  fix_email($_POST[email]);
            $dept=$_POST['dept'];
            $batch=$_POST['batch'];
            echo "$rollno-$name-$gender-$address-$dept-$dob-$sem-$batch-$email";
            if(!empty($rollno)&&!empty($name)&&!empty($gender)&&!empty($address)&&!empty($dob)&&!empty($sem)&&!empty($email)&&!empty($dept)&&!empty($batch)){
               $link=mysqli_connect('localhost','root','root','AIKTC');
               if(!$link){
                   echo '<br>Unable to connect to the database.'
                   .mysqli_connect_error();
               }
               $query="Insert into Students values ('$rollno','$name','$gender','$address','$dob','$sem','$email','$dept','$batch')";
               $result=mysqli_query($link,$query);
               if(!$result){
                   echo "<br>".mysqli_error($link);
               }
               else{
                   echo '<br><h4>Your Data has been Inserted Successfully</h4>';
               }
               $query="Select * from Students";
               $result=mysqli_query($link,$query);
               if(!$result){
                  echo "<br>".mysqli_error($link);
               }
               else{
                ?>
        <table>
            <?php
            while($row=mysqli_fetch_array($result)){
                ?>
            
            <tr>
                <td>Roll No</td>
                <td><?php echo $row[rollno];?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo $row[name];?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo $row[gender];?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $row[address];?></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><?php echo $row[dob];?></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><?php echo $row[sem];?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $row[email];?></td>
            </tr>
            <tr>
                <td>Department</td>
                <td><?php echo $row[dept];?></td>
            </tr>
            <tr>
                <td>Batch</td>
                <td><?php echo $row[batch];?></td>
            </tr>
           <?php  } ?>
        </table>
        <?php
               }
            }
            else{
                echo "<span>Something is Missing!</span>";
               // header('Refresh:2,url=register.html');
            }
        }
        else{
            //header('Refresh:0,url=register.html');
        
        }
        ?>
            
            
        
        
    </body>
    
</html>

