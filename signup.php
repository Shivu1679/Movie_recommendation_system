<?php 
$insert = false;

if(isset($_POST['name'])){
 $server = 'localhost';
 $username='root';
 $password='';

 $con = mysqli_connect ($server, $username, $password);
  if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
  }
  //echo"successfully connected to the db";

  $Name= $_POST['name'];
  $Phone=$_POST['number'];
  $Email=$_POST['email'];
  $Password=$_POST['psw'];
  $Password2 = $_POST['psw-repeat'];
  $Repeat_Password=$_POST['psw-repeat'];

  if($Password != $Password2){
    echo'<script>alert("Wrong confirm passowrd enterd!");</script>';
    
  } 
  else
  {
    $sql="INSERT INTO `sign_movie`.`recommend_movie` (`Name`, `Phone`, `Email`, `Password`, `Repeat_Password`) VALUES ('$Name', '$Phone', '$Email', '$Password', '$Repeat_Password'); ";
    //echo "$sql";
    $con->autocommit(FALSE);
    if($con->query($sql))
    {
      $insert=true;
    }
  else 
  {
      echo "Error: $sql <br> $con->error";
  }
  
  if(!$con->commit())
  {
      echo 'Commit failed';
  }
  }
 

$con->close();

}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet"type="css"href="style.css">
        <style>
            body{
                background: #91a716;
                display:flex;
                justify-content:center;
                align-items:center;
                height:100vh
                flex direction:column;
            }
            *{
                font-family:cursive;
                box-sizing:padding-box;
            }
            form{
                widht:100px;
                border:3px solid rgb(177,142,12);
                padding:20px;
                background:rgb(85,54,54);
                border-radius:20px;
            }
            h2{
                text-align:center;
                margin-button:40px;
            }
            input{
                display:block;
                border:2px solid #ccc;
                width:95%;
                padding:10px;
                margin:10px auto;
                border-radius:5px;
            }
            label{
                color:#888;
                font-size:18px;
                padding:10px;
            }
            button{
                float:right;
                background:rgb(35,174,202);
                padding:10px 15px;
                color:#fff;
                border-radius:5px;
                margin-right:10px;
                border:none;
            }
            a{

                float:right;
                background:rgb(35,174,202);
                padding:10px 15px;
                color:#fff;
                border-radius:5px;
                margin-right:10px;
                border:none;
            }   
            
            button:hover{
                opacity:.10;
            }
            .error{
                backgorund:#F2DEDE;
                color:#0c0101;
                padding:10px
                width:95%;
                border-radius:5px;
                margin:20px auto;
            }
            h1{
                text-align:center;
                collor:rgb(134,3,3);
            }
           
            </style>

           
</head>
<body>
<form action="signup.php" method="post">
        <?php if(isset($_GET['error'])){?>
        
            <p class="error">
                <?php
                echo $_GET['error'];?></p>
                <?php
        }?>
  <div class="container">
    <p style="color: green; font-weight: bold;">
        <?php
        if($insert== false) echo'Please fill in this form to create an account.';
        else echo 'Congrats! Successfully Registed, login and enjoy';
        ?>
    </p>
    
    <?php
    
    if($insert==false)
    {
        echo '<label for="email"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>
    
        <label for="email"><b>Phone</b></label>
        <input type="Phone" placeholder="Number" name="number" required>
    
    
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
    
        <label for="psw"><b>Password</b></label>
        <input type="password" id="psw1" placeholder="Enter Password" name="psw" required>
    
        <label for="psw-repeat"><b>Confirm password</b></label>
        <input type="password" id = "psw2" placeholder="Repeat Password" name="psw-repeat" required>
    
        
         <div class="btnContainer">
          <button type="submit" class="signupbtn">Sign Up</button>
          
        </div>';

    }
    else
    {
          echo '<div class="btnContainer">
          <a href="login.php" class="signupbtn">Login</a>
        </div>';
    }

    
    
    ?>

    
  </div>
</form>
    </body>
</html>