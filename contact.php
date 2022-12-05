<!DOCTYPE html>
<html lang="en"><head>
  <title>May's Contact Form</title>
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/tables.css" />
  <link rel="stylesheet" href="css/big.css" />
 </head>
 <body>
 <header>
    <h1>May's IT161 Website</h1>
      <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Welcome</a>
       <a href="elements.html">HTML Elements</a>
       <a href="aia.html">AIA</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="flowchart.html">Flowchart</a>
       <a href="fp/template.html">Final Project</a>
       <a href="contact.php">Contact May</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      </nav>
  </header>
     
   <div class="wrapper">  
       <h2 class="subheader">Contact</h2>
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
     <footer>
      <p><small>© 2022 by HyeyeonKim
          <a href="contact.php">May</a>, All Rights Reserved ~ 
          <a id="html-checker" href="https://validator.w3.org/nu/?doc=http://web-students.net/site46/it161/contact.php">Check HTML</a> ~ 
          <a id="css-checker" href="https://jigsaw.w3.org/css-validator/validator?uri=http://web-students.net/site46/it161/contact.php">Check CSS</a></small>
     </p>
    </footer>
    </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
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
     
 
</body>
</html>