<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spago</title>
    <style>
         *{
            margin: 0;
            padding: 0; 
        }
        .name{
            padding-bottom: 10px;
            padding-top: 30px;
            padding-left: 40px;
            font-family: 'Lucida Sans';
            background-color: #f4f5f7;
            font-size: 25px;
        }
        .name a{
            text-decoration:none;
            color: black;
        }

        .nav{
            background-color: #f4f5f7;
            margin-top: 0px;
            padding: 50px;
            padding-top: 0px;
            padding-bottom: 70px;
            padding-top: 10px;
            margin-right: 5px;
        }

        .nav li{
            display: inline;
            color: black;
            margin-left: 10px;
            padding: 10px;
            float: right;
            justify-content: center;
            flex-direction: column;
            padding-right: 0px;
            padding-left: 0px;
            padding-bottom: 15px;
            padding-top: 20px;
            position: relative;
            width: 100px;
            min-height: 1px;
            font-size: 24px;
        }

        .nav a {
            text-decoration: none;
        }

        .nav li:hover{
            
            text-decoration: underline #53ae3b ;
        }
       
    </style>
</head>

<body>
    <div class="container">

    <h4 class="name"><a href="home.php">Spago</a> </h4>
    <div class="nav">
<ul>
       <a href="contact.php"><li>Contact</li></a>
       <a href="gallery.php"><li>Gallery</li></a> 
       <a href="menu.php"><li>Menu</li></a>
       <a href="about.php"><li>About</li></a> 
       <a href="home.php"><li>Home</li></a>
</ul>
</div>

</div>
</body>
</html>