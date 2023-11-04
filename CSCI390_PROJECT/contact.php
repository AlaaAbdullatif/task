<!DOCTYPE html>
<html lang="en">
<head>
   <title>Spago</title>
   <style>
       *{
           margin: 0;
           padding: 0;
           
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

        .parking{
            float: left;
            padding-top: 3%;
            margin-left: 3%;
        }

        .carimg{
            text-align: center;
            margin-left: 42%;
            margin-bottom: 2%;
        }

        .parkinghead{
            text-align: center;
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            color: #25292d;
            font-size: 20px;
            line-height: 1;
            letter-spacing: 0px;
            margin: 0em 0;
            margin-bottom: 3%;
        }

        .parkingtxt{
            text-align: center;
            font-weight: 400;
            font-style: normal;
            font-family: 'Open Sans', sans-serif;
            color: #7b7e81;
            font-size: 17px;
            line-height: 1.6;
            letter-spacing: 0px;
        }

        .telephone{
            float: left;
            margin-left: 13%;
            padding-top: 4%;
        }

        .phoneimg{
            text-align: center;
            margin-left: 46%;
            margin-bottom: 3%;
        }

        .phonehead{
            text-align: center;
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            color: #25292d;
            font-size: 20px;
            line-height: 1;
            letter-spacing: 0px;
            margin-bottom: 3%;
        }

        .phonetxt{
            text-align: center;
            font-weight: 400;
            font-style: normal;
            font-family: 'Open Sans', sans-serif;
            color: #7b7e81;
            font-size: 17px;
            line-height: 1.6;
            letter-spacing: 0px;
        }

        .phnb{
            text-align: center;
            font-weight: 400;
            font-style: normal;
            font-family: 'Open Sans', sans-serif;
            color: #000000;
            font-size: 17px;
            line-height: 1.6;
            letter-spacing: 0px;
        }

        .email{
            float: right;
            padding-top: 3%;
            margin-right: 3%;
        }

        .emailimg{
            text-align: center;
            margin-left: 44%;
            margin-bottom: 3%;
        }

        .emailhead{
            text-align: center;
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            color: #25292d;
            font-size: 20px;
            line-height: 1;
            letter-spacing: 0px;
            margin: 0em 0;
            margin-bottom: 3%;
        }

        .emailtxt{
            text-align: center;
            font-weight: 400;
            font-style: normal;
            font-family: 'Open Sans', sans-serif;
            color: #7b7e81;
            font-size: 17px;
            line-height: 1.6;
            letter-spacing: 0px;
        }

        .emailLink{
            text-decoration: none;
            color: black;
            text-align: center;

        }

        .emailLink1{
            text-align: center;
        }

        .div-con2{
           margin-top: 20%;
       }

       .email-opa{
        text-align: center;
            font-size: 40px;
            line-height: 0.5;
            letter-spacing: 1px;
            font-family:cursive;
            opacity: 0.7;
            color: #e4e7ec;
            margin-top: 10px;
       }

       .contactF{
            font-weight: 400;
            font-style: normal;
            font-family: 'Rubik', sans-serif;
            font-family: verdana;
            color: #25292d;
            text-align: center;
           font-size: 24px;
        }

        .div-contact{
            margin-top: -0.1%;
            text-align: center;
        }

        .Form{
            margin-left: 20%;
        }

        .fname{
            color: #0a0606;
            background-color: transparent;
            font-style: normal;
            font-weight: 400;
            border-color: #ebeced;
            border: 1px solid;
            padding: 16px 18px;
            border: 1px solid;
            display: block;
            width: 70%;
    
        }

        .div-fname{
            text-align: center;
        }

        .lname{
            color: #0a0606;
            background-color: transparent;
            font-style: normal;
            font-weight: 400;
            border-color: #ebeced;
            border: 1px solid;
            padding: 16px 18px;
            border: 1px solid;
            display: block;
            width: 70%;
        }

        .email-form{
            color: #0a0606;
            background-color: transparent;
            font-style: normal;
            font-weight: 400;
            border-color: #ebeced;
            border: 1px solid;
            padding: 16px 18px;
            border: 1px solid;
            display: block;
            width: 70%;
        }

        .msg{
            color: #0a0606;
            background-color: transparent;
            font-style: normal;
            font-weight: 400;
            border-color: #ebeced;
            border: 1px solid;
            padding: 16px 18px;
            border: 1px solid;
            display: block;
            width: 70%;
        }

        .mmm{
            color: #0a0606;
            background-color: transparent;
            font-style: normal;
            font-weight: 400;
            border-color: #ebeced;
            border: 1px solid;
            padding: 40px 18px;
            border: 1px solid;
            display: block;
            width: 70%;
          

        }

        .div-submit{
            margin-left: 28%;
        }

        .submit{
            background-color: #53ae3b;
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
        
        .submit{ 
            text-align: center;
            margin-top: 3%;
            margin-bottom: 3%;
        } 

        .submit a{
            text-decoration: none;
            
        }

        .submit:hover{
            background-color: #25292d;
        }
 

   </style>

<?php include('header.php');?>
<div class="container">


<div class="locatBckgd">
<p class="bcktxt">Location</p>
<div class="divCon">
<h2 class="txt2">Contact US</h2>
</div>
</div>

<div class="divline1">
<hr class="line1">
</div>

<p class="weltxt">We are open to your feedback and your opinion about our restaurant. If you have any questions, suggestions or <br> commercial offers, please feel free to contact us any suitable way. Every guest can book a table or ask any question – <br> our representatives will reply and provide you will all necessary information. <br><br>
     We are looking forward hearing from you and seeing you as our guests!</p>


     <div class="details">

         <div class="parking">
         <img src="./picture/car.png" alt="" class="carimg" style="width:50px ;">
         <h2 class="parkinghead">Parking</h2>
         <p class="parkingtxt">We have a comfortable parking, so you can <br> leave your car and enjoy your meals without <br> any worries!</p>
        </div>

        <div class="telephone">
            <img src="./picture/phone.png" alt="" class="phoneimg" style="width:30px ;">
         <h2 class="phonehead">Telephone</h2>
         <p class="phonetxt">We are happy to answer your questions or give <br> you directions via phone. <br></p>
         <p class="phnb">+961 76920450</p>
        </div>

        <div class="email">
            <img src="./picture/email.png" alt="" class="emailimg" style="width:40px ;">
         <h2 class="emailhead">Email</h2>
         <p class="emailtxt">If you are on the go and still want to ask a question, <br> simply drop us an e-mail </p>
          <p class="emailLink1"> <a href="#" class="emailLink">spago@hotmail.com</a></p>
        </div>

     </div>

     
<div class="div-con2">
    <p class="email-opa">Email US</p>
    <div class="div-contact">
    <h2 class="ContactF">Contact Form</h2>
    </div>
    </div>
    
<div class="divline1">
    <hr class="line1">
    </div>

    <div class="Form">
    <form action="action_page.php" method="post">

          <div class="div-fname">  
        <label for="fname" > </label><br>
        <input type="text" id="fname" name="fname" value="" placeholder="First Name" class="fname"><br>
      </div> 

    <div class="div-lname">
        <label for="lname" > </label><br> 
        <input type="text" id="lname" name="lname" value=""  placeholder="Last Name" class="lname"><br> 
    </div>

    <div class="div-email">
        <label for="Email"> </label> <br>  
        <input type="email"  id="email_input" name="email" placeholder="Email" class="email-form"> <br> <br>
    </div>

        <div class="div-msg">
        <!-- <textarea name="Message" id="Message" cols="30" rows="5" name="msg" placeholder="Message" class="msg"></textarea> -->
        <input type="text" name= msg placeholder= "Message" class="mmm">
    </div>

    <div class="div-submit">
        <input type="submit" value="Send Message " class="submit">
    </div>

      </form> 
    </div>


    </div>
    <?php include('footer.php');?>
</body>
</html>
