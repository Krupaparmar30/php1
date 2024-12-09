<?php 

include("config.php");
$c1=new Config();

$is_btn_set=isset($_POST['button']);
if($is_btn_set)
{
    $name= $_POST['name'];
    // $id=$_POST['id'];
    $age=$_POST['age'];
    $course= $_POST['course'];
    $phone=$_POST['phone'];
  
  $c1->insert($name,$age,$course,$phone);
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <style>
        .box1{
            padding: 20px;
          
            /* width: 100;
            height: 220; */

            height: 320px;
            width: 300px;
            background-color: white;
            text-align: center;
            border-radius: 20px;
            box-shadow: 50pt;
            
            

        }
    </style>
</head>

<body>


   

    
  
  <center>
  <h1>
            Student Registration Form
        </h1>
        
        <div class="box1">
     
      
      <form method="POST">
     
 
            Name :
            <input placeholder="Name" name="name"><br><br>
            <!-- Roll Number :
            <input type="number" placeholder="Roll Number" name="id"><br><br> -->
            Course :
            <input placeholder="Course" name="course"><br><br>
           Stu Age :
            <input placeholder="Age" name="age"><br><br>
            Phone :
            <input placeholder="Phone" name="phone"><br><br>
           <button name="button" type="submit">Submit</button> 


        </form>
    
 
            
        </div>

 
      
  </center>

 
   

</body>

</html>