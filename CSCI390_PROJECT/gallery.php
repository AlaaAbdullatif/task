<?php include('header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spago</title>
    <style>
        *{
           margin: 0;
           padding: 0;
           box-sizing: border-box;
       }
      
       
       .locatBckgd{
           margin-top: 3%;
       }

       .bcktxt{
        text-align: center;
        font-size: 60px;
            line-height: 0.5;
            letter-spacing: 1px;
            font-family:cursive;
            opacity: 0.7;
            color: #e4e7ec;
            margin-top: 10px;
       }

       .txt2{
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            font-family: verdana;
            color: #25292d;
            text-align: center;
            font-size: 28px;
        }

        .divCon{
            margin-top: 0%;
        }

        .line1{
            max-width: 100%;
            width: 9%;
            border-top-width: 2px;
            border-top-style: solid;
            border-top-color: #53ae3b;
            margin-top: 2;
            display: inline-block;
            text-align: center;
        }

        .divline1{
            text-align: center;
        }

        .images{
            text-align: center;
            
        }

        .img1{
            margin: 2%;
        }

        .img2{
            margin: 2%;
        }

        .img3{
            margin: 2%;
        }

        .img4{
            margin: 2%;
        }

        .div-wp{
            text-align: center;
            margin-bottom: 3%;
        }

        .wp{
            font-weight: 400;
            font-style: normal;
            font-family: 'Open Sans', sans-serif;
            color: #7b7e81;
            font-size: 17px;
            line-height: 1.6;
            letter-spacing: 0px;
        }

    </style>
</head>
<body>

    <div class="container ">

<div class="locatBckgd">
    <p class="bcktxt">Gallery</p>
    <div class="divCon">
    <h2 class="txt2">About Gallery</h2>
    </div>
    </div>
    
    <div class="divline1">
    <hr class="line1">
    </div>


    <div class="images">
        <img src="./picture/gal1.jpg" alt="" class="img1" style="width: 40%;">
        <img src="./picture/gal2.jpg" alt="" class="img2" style="width: 40%;">
        <img src="./picture/gallery3.jpg" alt="" class="img3" style="width: 40.2%;">
        <img src="./picture/gallery4.jpg" alt="" class="img4" style="width: 40%;">

    </div>

    
<div class="locatBckgd">
    <p class="bcktxt">Welcome to Spago</p>
    <div class="divCon">
    <h2 class="txt2">Welcome to Spago</h2>
    </div>
    </div>
    
    <div class="divline1">
    <hr class="line1">
    </div>

    <div class="div-wp">
        <p class="wp">We welcome you to a delicious feast of exquisite dishes in Spago. With a wide range of world cuisines to choose from, <br> we guarantee you a sumptuous feast experience in our restaurant!  Here you will dive into a friendly and romantic <br> atmosphere and enjoy our haute cuisine. With our great selection of dishes from all over the world you can feel yourself as <br> a traveler and true gourmet!</p>
    </div>

    <?php include('footer.php');?>
    </div>

</body>
</html>