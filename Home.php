<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIES</title>
    <style>
        /* Reset some default styles for better consistency */
        body, h1, h2, ul {
            margin: 0;
            padding: 0;
        }

        /* Style the navigation bar */
        .navbar {
            background-color: #59ac0c; /* Background color */
            overflow: hidden; /* Hide overflowing content */
           
        }

        /* Style the navigation links */
        .navbar a {
            float: left; /* Float the links to the left */
            display: block; /* Display links as block elements */
            color: white; /* Text color */
            text-align: center; /* Center-align text */
            padding: 14px 16px; /* Padding around text */
            text-decoration: none; /* Remove underlines from links */
        }

        /* Change color on hover */
        .navbar a:hover {
            background-color: #8ac662; /* Background color on hover */
            color: rgb(241, 242, 240); /* Text color on hover */
        }

        /* Style the page content */
        .content {
            padding: 80px; /* Add some space around content */
            text-align: center;

        }
        .dropdown{
            float:left;
            overflow:hidden;
        }
        .dropdown .dropbtn{
            font-size: 10px;
            border:none;
            outline:none;
            color:#59ac0c
            padding:14px 16px;
            background-color:inherit;
            font-family:inherit;
            margin:0;
        }
        .navbar a:hover, .dropdown:hover .dropbtn{
            background: #59ac0c;
        }
        .dropdown-content{
            display:none;
            position:absolute;
            background-color: #59ac0c;
            min-width: 160px;
            z-index: 1;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }
        .dropdown-content a{
            float:none;
            color:#59ac0c;
            padding: 12px 16px;
            text-decoration: none;
            display:block;
            text-align: left;
        }
        .dropdown-content a:hover{
            background-color: #59ac0c;
        }
        .dropdown:hover.dropdown-content{
            display:block;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="signup.php">Signup</a>
        <a href="login.php">Login</a>
        <a href="#contact">Contact</a>
    </div>

    <div class="content">
        <h1>Welcome to Movie reccomendation station</h1>
        <p>Lets search for your favorite movie according to your mood</p>
        <p>Let's login/register first</p>
    </div>
</body>
</html>
