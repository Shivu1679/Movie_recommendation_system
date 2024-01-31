<?php 
$insert = 0;
if(isset($_POST['email'])){
 $server = 'localhost';
 $username='root';
 $password='';

 $con = mysqli_connect ($server, $username, $password);
  if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
  }
  //echo"successfully connected to the db";


  $Email=$_POST['email'];
  $Password=$_POST['psw'];

  $sql = "SELECT * FROM `sign_movie`.`recommend_movie` where `Email` = '$Email' and `Password` = '$Password' ";
 
  
  
  if($con->query($sql))
  {
    
  }
else 
{
    echo "Error: $sql <br> $con->error";
}
$result = mysqli_query($con,$sql);



if(mysqli_num_rows($result) > 0) $insert = 1;
else $insert = -1;


}



 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
                width: 300px;
                border:3px solid rgb(177,142,12);
                padding:20px;
                background:rgb(85,54,54);
                border-radius:20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;

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
            button:hover{
                cursor: pointer;
                
                
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
            a{
                float:right;
                background:rgb(183,225,233);
                padding:10px 15px;
                color:#fff 
                border-radius: 10px;
                margin: auto;
                

                text-decoration:none;
            }
            a:hover{
                cursor: pointer;
                
                
            }
            </style>
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <?php
        if($insert ==1)
        {
            echo '<p style="background-color: green; padding: 5px 3px; border-radius: 5px;"> Logged in Succesfully! Enjoy.</p>';
        }
        else if($insert == -1)
        {
            echo '<p style="background-color: red; padding: 5px 3px; border-radius: 5px;"> Incorrect Credentials!</p>';
        }
        ?>
        <?php if(isset($_GET['error'])){?>
        
            <p class="error">
                <?php
                echo $_GET['error'];?></p>
                <?php
        }?>
        
        

        <?php
        if($insert == 0 or $insert == -1)
        {
            echo '
            <div>
            <label>Email</label>
        <input type="text" name="email"placeholder="User Name"><br>
        </div>
        <div>
        <label>Password</label>
        <input type="Password"name="psw"placeholder="Password">
        </div><br>
            <button type="submit">Login
        
            </button>';
        }
        else
        {
            echo '<a href="Genre.html" style="border-radius: 5px;">Genre</a>';
        }
        ?>

        
    </form>
    </body>
    </html>