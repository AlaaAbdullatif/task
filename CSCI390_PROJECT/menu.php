<?php include('header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Spago</title>

    <style>

        .wtxt{
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
            margin-top: 20px;
            margin-bottom: -1px;
        }

        /* Welcome to spago */
        .txt2{
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            font-family: verdana;
            color: #25292d;
            text-align: center;
           font-size: 28px;
        }

        .divtxt2{
            margin-top: 0.3%;
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
        .menu{         
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            padding-left:10px;
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
        
        .headerDinner{
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            padding-left:10px;
        }

        .headerLunch{
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            padding-left:10px;
        }


    </style>

</head>
<body>
    <div class="container">
<div class="wtxt">
    <p class="bcktxt">Our Menu</p>
    
    <div class="divtxt2">
    <h2 class="txt2">Tasty Dishes</h2>
    </div>
    
    </div>
 
<div class="divline1">
    <hr class="line1">
    </div>

    <!-- Menu -->

    
<div class="main">

    <!-- first menu -->
<h3 class="menu">Main Menu</h3>
<hr class="line1">

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

    
<div class="din">

    <h3 class="menu">Dinner</h3>
    
    <hr class="line1">
    
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
    <hr class="line1">
    
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
    <hr class="line1">
    
     <div class="M4">
     
    <div class="f1"><p>CORNISH-MACKEREL</p></div>
    <div class="d1"><p>CORNISH-MACKEREL</p></div>
    <div class="m1"><p>$15</p></div>
    
    <div class="f1"><p>ROASTED STEAK ROULADE</p></div>
    <div class="d1"><p>Parsley with apple cider vinegar, salt, sugar & spices</p></div>
    <div class="m1"><p>$35</p></div>
    
    <div class="f1"><p>“COUNTRY” BREAKFAST</p></div>
    <div class="d1"><p>Biscuits with fresh sausage patties & country grav</p></div>
    <div class="m1"><p>$23</p></div>
    
    <div class="f1"><p>SALT AND PEPPER CALAMAR</p></div>
    <div class="d1"><p>Rocket, lime, chipotle aioli</p></div>
    <div class="m1"><p>$19</p></div>
    
    <div class="f1"><p>WESTERN SUNRISE</p></div>
    <div class="d1"><p>Two fried eggs with cheese & two breakfast meats made to perfection</p></div>
    <div class="m1"><p>$23</p></div>
    
    </div>
    </div>
    </div>
    <?php include('footer.php');?>
</div>
</body>
</html>