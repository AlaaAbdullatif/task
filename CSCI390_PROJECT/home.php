<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spago</title>

    <style>
        *{
            margin: 0;
            padding: 0; 
            /* box-sizing: border-box; */
        }

        .container{ 
        display: grid;
        grid-template-areas:
        'name nav nav nav'
        'on on on on'
        'wtxt wtxt wtxt wtxt'
        'M1 M1 M1 M1'
        'din din pic3 pic3'
        'pic4 pic5 pic6 ' 
        '2Menu 2Menu 2Menu 2Menu'
        'fword fword fword fword'
        'video video video video'
        'footer footer footer footer'
        'copyr copyr copyr copyr';
        }
        

        .name{
            padding-bottom: 10px;
            padding-top: 30px;
            padding-left: 40px;
            font-family: 'Lucida Sans';
            background-color: #f4f5f7;
            font-size: 28px;
        
        }
        .name a{
            text-decoration:none;
            color: black;
        }

        .nav{
            background-color: #f4f5f7;
            margin-top: 0px;
            padding: 0px;
            
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
            font-size: 25px;
        }

        .nav a {
            text-decoration: none;
        }

        .nav li:hover{
            text-decoration: underline #53ae3b;
            
        }

        /* link on backgd img */
         .cntct-box{
            color: white;
            background-color: #53ae3b;
            color: white;
            font-size: 14px;
            padding: 14px;
            font-family: sans-serif;
            font-weight: 500;
            border-color: transparent;
            text-align: center;
            line-height: 14px;
            border: 2px solid;
            border-radius: 6px;
            letter-spacing: 0.50px;
            display: inline-block;
            margin-top: 0px;
            margin-right: 250px;
            position: relative;
            top: 65%;
            left: 8%;
            transform: translate(-50%, -50%);
        } 

        /* link on backgd img */
        .firstLink{ 
            padding: 14px;
            text-align: center;
            line-height: 14px;
            letter-spacing: 0.50px;
            display: inline-block;
            margin-top: 0px;
            margin-right: 90px;
            position: relative;
            top: 65%;
            left: 15%;
            transform: translate(-50%, -50%); 
        }

        .firstLink a{
            text-decoration: none;
        }
        .firstLink a:hover{
            background-color: #25292d;
        }

        /* background image */
        .bckimg{
            background-image: url();
            width: 50%;
            margin-right:90px;
            float: right;
        }

        /* text on image */
        .teImg{
            left: 16px;
            position: absolute;
            transform: translate(-50% , -50%);
            left: 10%;
            top: 50%;
            font-size: 70px;
            line-height: 1;
            font-weight: 300;
            font-style: normal;
            font-family: 'Rubik', sans-serif ;
            color: #25292d;
        }

        /* back img with txt and link */
        .on{
            background-color: #f4f5f7;
        }

        /* welcome to spago back */
        .bcktxt{
            text-align: center;
            font-size: 35px;
            line-height: 0.5;
            letter-spacing: 1px;
            opacity: 0.7;
            color: #e4e7ec;
            margin-top: 10px;
        }

        /* Welcome to spago */
        .txt2{
            font-weight: 400;
            font-style: normal;
            font-family: verdana;
            color: #25292d;
            text-align: center;
            font-size: 24px;
        }

        .divtxt2{
            margin-top: -0.5%;
        }

        /*  first line */
        .line1{
            max-width: 100%;
            width: 10%;
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

        /* welcome text */
        .weltxt{
            text-align: center;
            font-size: 16px;
            line-height: 1.4;
            letter-spacing: 0px;
            font-weight: 400;
            font-style: normal;
            font-family: 'Open Sans' , sans-serif;
            color: #7b7e81;
        }

        /* Main Menu */
        .menu{         
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            font-size:22px;
            padding-left:10px;
        }

        /* line down th Main Menu */
        .line2{
            max-width: 100%;
            width: 16%;
            border-top-width: 2px;
            border-top-style: solid;
            border-top-color: #53ae3b;
            margin-top: 1;
            display: inline-block; 
        }

        /* food on menu */
        .f1{
            font-size: 12px;
            line-height: 1.6;
            letter-spacing: 0px;
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            color: #25292d;
            font-size: 15px;
            line-height: 1.5;
            letter-spacing: 0px;
            margin-top: 0;
            padding-left:10px;
        }

        /* food details */
        .d1{
            font-size: 12px;
            line-height: 1;
            letter-spacing: 0px;
            font-weight: 400;
            font-style: normal;
            font-family: 'Open Sans', sans-serif;
            color: #7b7e81;
            margin-top: 0;
            padding-left:10px;
        }

        /* food price */
        .m1{
            text-align: center;
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            color: #25292d;
            font-size: 12px;
            line-height: 1;
            letter-spacing: 0px;
            margin-top: 0;
        }


        /* plate rigth screen */
        .pimg{
            float: right;
            width: 30%;
            height: 30%;
            margin-top: 0%;
            margin-bottom: 2%;
        }

        /* plate center screen */
        .nimg{
            float: left;
            width: 30%;
            height: 30%;
            margin-top: 1%;
            margin-bottom: 2%;
        }

        /* plate left screen */
        .mimg{
            float: left; 
            margin-left: 5%;
            width: 30%;
            height: 30%;
            margin-top: 2%;
            margin-bottom: 2%;
        }

        /* Dinner  menu */
        .mdinner{
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            font-size:22px;
            padding-left:10px;
        }

         .line3{
            max-width: 100%;
            width: 16%;
            border-top-width: 2px;
            border-top-style: solid;
            border-top-color: #53ae3b;
            margin-top: 1;
            display: inline-block;  
        } 

        .pic3{
            float: right;
            width: 30%;
            height: 30%;
            margin-top: 1%;
        }

        .npic3{
            float: left;
            width: 30%;
            height: 30%;
            margin-top: 1%;
        }

        .mpic3{
            float: left; 
            margin-left: 5%;
            width: 30%;
            height: 30%;
            margin-top: 1%;
        }

        .line4{
            max-width: 100%;
            width: 16%;
            border-top-width: 2px;
            border-top-style: solid;
            border-top-color: #53ae3b;
            margin-top: 1;
            display: inline-block;
            /* text-align: center; */
        }

        .f2{
            font-size: 12px;
            line-height: 1.6;
            letter-spacing: 0px;
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            color: #25292d;
            font-size: 15px;
            line-height: 1.5;
            letter-spacing: 0px;
            margin-top: 0;
            padding-left:10px;
         
        }

        .d2{
            font-size: 12px;
            line-height: 1;
            letter-spacing: 0px;
            font-weight: 400;
            font-style: normal;
            font-family: 'Open Sans', sans-serif;
            color: #7b7e81;
            margin-top: 0;  
            padding-left:10px;   
        }

        .m2{
            text-align: center;
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            color: #25292d;
            font-size: 12px;
            line-height: 1;
            letter-spacing: 0px;
            margin-top: 0;
           
        }

        .headerDinner{
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            font-size:22px;
            padding-left:10px;
        }

        .headerLunch{
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            font-size:22px;
            padding-left:10px;
        }

         .vmenu{ 
            text-align: center;
            margin-top: 3%;
        } 

        .vmenu a{
            text-decoration: none;
        }

        .vmenu a:hover{
            background-color: #53ae3b;
        }

        .txtView{
            background-color: #25292d;
            border-color: transparent;
            font-family: 'Rubik', sans-serif;
            font-weight: 500;
            font-style: normal;
            color: #ffffff;
            font-size: 14px;
            padding: 19px 40px 18px;
            text-align: center;
            position: relative;
            z-index: 1;
            transition: .3s;
            line-height: 14px;
            border: 2px solid;
            border-radius: 6px;
            letter-spacing: 0.50px;
            display: inline-block;
            cursor: pointer;
        }

        .divWarm{
           margin-top: -0.5%;
        }

        .Warm{
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            font-family: verdana;
            color: #25292d;
            text-align: center;
           font-size: 30px;
        }
       
        /* opacity our gallery txt */
        .divOpa{
            text-align: center;
            font-size: 45px;
            line-height: 0.5;
            letter-spacing: 1px;
            font-family: 'Kaushan Script', 'handwriting';
            opacity: 1;
            color: #e4e7ec;
            margin-top: 10px;
        }
     
        .divgallery{
            float: right;
            
        }
        .gallery1{
            margin-left: 10%;
        }
        .divgallery2{
            float: right;
        }
        .gallery3{
         margin-left: 10%;
        }
        .video{
            height: 100%; 
            text-align: center;
             width: 100%; 
           
        }
        .galleryView{
            background-color: #25292d;
            border-color: transparent;
            font-family: 'Rubik', sans-serif;
            font-weight: 500;
            font-style: normal;
            color: #ffffff;
            font-size: 14px;
            padding: 19px 40px 18px;
            text-align: center;
            position: relative;
            z-index: 1;
            transition: .3s;
            line-height: 14px;
            border: 2px solid;
            border-radius: 6px;
            letter-spacing: 0.50px;
            display: inline-block;
            cursor: pointer;
            
        }
        .vgallery{ 
            text-align: center;
            margin-top: 3%;
            margin-bottom: 3%;
        } 

        .vgallery a{
            text-decoration: none;
            
        }

        .vgallery a:hover{
            background-color: #53ae3b;
        }

        .footer{
            padding-top: 20px;
            background-color: #25292d;
            margin: 0;
            padding-bottom: 5%;
            float: right;
           
        }
        .footer li{
            display: inline;
            text-decoration: none;
            color: #ffffff;
            font-family: 'Rubik', sans-serif;
            font-size: 17px;
            line-height: 1.4;
            letter-spacing: 0px;
            font-weight: 400;
            font-style: normal;
            margin-right: 26%;
            margin-top: 0%;
           
        }

        .address{
           color: #ffffff;
           /* text-align: center; */
           font-family: 'Rubik', sans-serif;
           font-size: 19px;
           line-height: 1.4;
           letter-spacing: 0px;
            font-weight: 400;
            font-style: normal;
            
        }
        .divAddress{
            float:left;
            margin-left:5%;
        }
        .location{
            font-weight: 400;
            font-style: normal;
            font-family: 'Open Sans', sans-serif;
            color: #97999b;
            font-size: 13px;
            line-height: 1.4;
            letter-spacing: 0px;
        }
        .follow{
            color: #ffffff;
           /* text-align: center; */
            font-family: 'Rubik', sans-serif;
            font-size: 19px;
            line-height: 1.4;
            letter-spacing: 0px;
            font-weight: 400;
            font-style: normal;
        }
        .divFollow{
            /* text-align: center; */
            float: left;
            margin-left: 36%;
        }
        .fb{
            font-weight: 400;
            font-style: normal;
            font-family: 'Open Sans', sans-serif;
            color: #97999b;
            font-size: 13px;
            line-height: 1.4;
            letter-spacing: 0px;
            /* text-align: center; */
            text-decoration: none;
        }
        .insta{
            font-weight: 400;
            font-style: normal;
            font-family: 'Open Sans', sans-serif;
            color: #97999b;
            font-size: 13px;
            line-height: 1.4;
            letter-spacing: 0px;
            /* text-align: center; */
            text-decoration: none;
        }
       
        
        .contact{
            color: #ffffff;
            font-family: 'Rubik', sans-serif;
            font-size: 19px;
            line-height: 1.4;
            letter-spacing: 0px;
            font-weight: 400;
            font-style: normal;
            
        }
        .divContact{
            float:right;
            margin-right:5%;
        }
        .divContact{
            font-weight: 400;
            font-style: normal;
            font-family: 'Open Sans', sans-serif;
            color: #97999b;
            font-size: 13px;
            line-height: 1.4;
            letter-spacing: 0px;
        }
        .email{
            font-weight: 400;
            font-style: normal;
            font-family: 'Open Sans', sans-serif;
            color: #97999b;
            font-size: 11px;
            line-height: 1.4;
            letter-spacing: 0px;
            text-decoration: none;
        }
        .copyName{
            margin-left: 5%;
            font-size: 12px;
            line-height: 1.4;
            background-color: #25292d;
            
        }
        .copyr{
            color: #97999b;
            margin-bottom: 0%;
            text-align: center;
            background-color: #25292d;
            font-size: 12px;
            line-height: 1.4;   
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

<div class="on">

<p class="teImg">Don't <br> Eat Less <br> Just <br> Eat Real.</p>

<img src="./picture/chickenPlate.png" alt="" class="bckimg">
<!-- <img src="./picture/pizza.png" alt="" class="bckimg" style="width: 40%;"> -->

<div class="firstLink">
<a href="contact.php" class="cntct-box">Contact US</a>
</div>

</div>

<div class="wtxt">
<p class="bcktxt">Welcome To Spago</p>

<div class="divtxt2">
<h2 class="txt2">Welcome To Spago</h2>
</div>

</div>

<div class="divline1">
<hr class="line1">
</div>

<p class="weltxt">We welcome you to a delicious feast of exquisite dishes in Spago. With a wide range of world cuisines to choose <br> from, we guarantee you a sumptuous feast experience in our restaurant!  Here you will dive into a friendly and romantic <br> atmosphere and enjoy our haute cuisine. With our great selection of dishes from all over the world you can feel yourself <br> as a traveler and true gourmet!</p>

<div class="main">

    <!-- first menu -->
<h3 class="menu">Main Menu</h3>
<hr class="line2">

<div class="M1">

<div class="f1"><p> GARLIC SHRIMP & TONNARELLI PASTA</p></div>
<div class="d1"><p>Serrano ham, spinach, roasted red peppers, tomato, pil pil sauce</p></div>
<div class="m1"><p>$19.99</p></div>

<div class="f1"><p>GRILLED HANGER STEAK</p></div>
<div class="d1"><p>Serrano ham, spinach, roasted red peppers, tomato, pil pil sauce</p></div>
<div class="m1"><p>$24.99</p></div>

<div class="f1">PAN ROASTED ‘FLORIDA KEYS’ MAHI MAHI</div>
<div class="d1">Serrano ham, spinach, roasted red peppers, tomato, pil pil sauce</div>
<div class="m1">$15.5</div>

<div class="f1">GRILLED FREE RANGE CHICKEN SALAD</div>
<div class="d1">Mesclun greens, pepperjack cheese, bacon, avocado, corn, tomato, cucumbers</div>
<div class="m1">$19.9</div>

<div class="f1">GRILLED BBQ BABY BACK RIBS</div>
<div class="d1">Hibiscus sweet ranch coleslaw, hand cut frie</div>
<div class="m1">$23.00</div>

</div>
</div>

<!-- second menu -->

<div class="din">

<h3 class="mdinner">Dinner</h3>

<hr class="line3">

<div class="M2">

<div class="f1"><p>CHICKEN LIVER PARFAIT</p></div>
<div class="d1"><p>Chicken, onion, vegetable oil, Sour cream sauce, pepper, sal</p></div>
<div class="m1"><p>$25.5</p></div>

<div class="f1"><p>ITALIAN TASTING PLATTER</p></div>
<div class="d1"><p>Three Italian Favorites: Baked Clams, Fried Calamari and Stuffed Shrimp</p></div>
<div class="m1"><p>$25</p></div>

<div class="f1"><p>PAN ROASTED ‘FLORIDA KEYS’ MAHI MAHI</p></div>
<div class="d1"><p>Serrano ham, spinach, roasted red peppers, tomato, pil pil sauce</p></div>
<div class="m1"><p>$15.5</p></div>

<div class="f1"><p>CRAB CONGEE</p></div>
<div class="d1"><p>Biscuits with fresh sausage patties & country gravy</p></div>
<div class="m1"><p>$19</p></div>

<div class="f1"><p>SALT AND PEPPER CALAMARI</p></div>
<div class="d1"><p>Rocket, lime, chipotle aioli</p></div>
<div class="m1"><p>$23</p></div>


<img src="./picture/chick_kre.png" alt="" class="pimg" style="width: 30%;">
<img src="./picture/Salad_Plate.png" alt="" class="nimg" style="width: 31%;">
<img src="./picture/Rise_plate.png" alt="" class="mimg" style="width: 33% ;">
</div>
</div>

<!-- 3rd menu -->

<div class="2Menu">

<h3 class="headerDinner">Dinner</h3>
<hr class="line2">

<div class="M3">

<div class="f1"><p>WESTERN SUNRISE</p></div>
<div class="d1"><p>Two fried eggs with cheese & two breakfast meats made to perfection</p></div>
<div class="m1"><p>$23</p></div>

<div class="f1"><p>CORNISH-MACKEREL</p></div>
<div class="d1"><p>CORNISH-MACKEREL</p></div>
<div class="m1"><p>$15</p></div>

<div class="f1"><p>ROASTED STEAK ROULADE</p></div>
<div class="d1"><p>Parsley with apple cider vinegar, salt, sugar & spices</p></div>
<div class="m1"><p>$35</p></div>

<div class="f1"><p>“COUNTRY” BREAKFAST</p></div>
<div class="d1"><p>Biscuits with fresh sausage patties & country grav</p></div>
<div class="m1"><p>$19</p></div>

<div class="f1"><p>SALT AND PEPPER CALAMARI</p></div>
<div class="d1"><p>Rocket, lime, chipotle aioli</p></div>
<div class="m1"><p>$23</p></div>

</div>
</div>

<!-- 4 menu -->

<div class="Lun">
<h3 class="headerLunch">Lunch</h3>
<hr class="line4">

 <div class="M4">
 
<div class="f2"><p>CORNISH-MACKEREL</p></div>
<div class="d2"><p>CORNISH-MACKEREL</p></div>
<div class="m2"><p>$15</p></div>

<div class="f2"><p>ROASTED STEAK ROULADE</p></div>
<div class="d2"><p>Parsley with apple cider vinegar, salt, sugar & spices</p></div>
<div class="m2"><p>$35</p></div>

<div class="f2"><p>“COUNTRY” BREAKFAST</p></div>
<div class="d2"><p>Biscuits with fresh sausage patties & country grav</p></div>
<div class="m2"><p>$23</p></div>

<div class="f2"><p>SALT AND PEPPER CALAMAR</p></div>
<div class="d2"><p>Rocket, lime, chipotle aioli</p></div>
<div class="m2"><p>$19</p></div>

<div class="f2"><p>WESTERN SUNRISE</p></div>
<div class="d2"><p>Two fried eggs with cheese & two breakfast meats made to perfection</p></div>
<div class="m2"><p>$23</p></div>

<div class="vmenu">
<a href="menu.php" class="txtView">View All Menu</a>
</div>

</div>
</div>

<div class="fword">

<div class="divOpa">
<p>Our Gallery</p>
</div>

<div class="divWarm">
<h2 class="Warm"> Warm Atmoshpere</h2>
</div>


<div class="divline1">
<hr class="line1">
</div>


</div>

    <div class="divgallery">
    <img src=".//picture/gal1.jpg "alt="" style="width: 40%;" class="gallery1">
    <img src=".//picture/gal2.jpg " alt="" style="width: 40%;" class="gallery2">
</div>
<div class="divgallery2">
    <img src=".//picture/gal3.jpg " alt="" width="40%" class="gallery3">
    <img src=".//picture/gal4.jpg " alt="" width="40%" class="gallery4">
</div>


<div class="video">
    <video width="1400" height="400" controls>
        <source src="./picture/spagoVideo.mp4" type="video/mp4">
      </video>
<div class="vgallery">
      <a href="gallery.php" class="galleryView">View All Gallery</a>
    </div>
    </div>


<div class="footer">
    <div class="divAddress">
    <p class="address">Address</p>
    <p class="location">Beirut - lebanon <br> kraytim, Near LIU <br> street 201 </p>
</div>


<div class="divFollow">
    <p class="follow">Follow US</p>
   <a href="#"class="fb"> facebook </a>
   <a href="#" class="insta"> instagram </a>
</div>


<div class="divContact">
    <p class="contact">contact us</p>
    <p class="phnb">+961 76920450<br> +961 71546278 <br> 01 446 224 <br> <a href="" class="email"> spago@hotmail.com</a></p>
</div>

</div>

<div class="copyr">
    <div class="copyName"></div>
    <p>Developed by Alaa Abdullatif</p>
    <p>&copy copyright 2022-26</p>
    </div>
    
</div>
</body>
</html>