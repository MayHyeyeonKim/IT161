<!DOCTYPE html>
<html lang="en">
<head>
    <title>services</title>
    <meta name="description" content="Seattle-based massage therapist trained in trauma work and bodywork.">
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="form.css" />
</head>

<body class="secondary-page">
    <!-- Navigation -->
    <header>
        <nav class="container-fluid clearfix">
          <div class="logo clearfix">
            <a class="logo-link" href="template.html">BOE</a>
          </div>
          <div class="nav-links clearfix">
            <a class="home active" href="template.html">Home</a>
            <a class="services" href="services.html">Levels</a>
            <a class="my_page" href="my_page.html">My Page</a>
            <a class="welcome" href="welcome.html">Welcome</a>
          </div>
        </nav>
    </header>

    <!-- Content -->
    <h2 class="subheader">Contact</h2>
    <span class="row1 clearfix">
<div class="box5 clearfix">
    <!-- <div class="wrapper"> -->
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "hyeyeon.kim@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "MayKim"; //place your client's name here
        $website = "Conact Form Test";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
            <!-- <div class="btn-wrapper"><a href="contact.php" class="button-17">BOOK TODAY</a></div> -->

   <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
</div>
   <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
<footer>
    <p><small>&copy; 2022 by 
        <a href="http://web-students.net/site44/it161/index.html">May</a>, All Rights Reserved ~ 
        <a id="html-checker" href="https://validator.w3.org/nu/?doc=">Check HTML</a> ~ 
        <a id="css-checker" href="https://jigsaw.w3.org/css-validator/validator?uri=">Check CSS</a></small>
    </p>
</footer>
</body>

</html>
