﻿<?php 
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    $order69= TRUE;
} else{
	$order69= FALSE;
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
<?php
$page_name = 'About';
include_once('bj.php')
?>
	  <style>
a.download:link,
 a.download:visited {
  background-color: rgb(125, 45, 235);
  background-color: rgba(125, 45, 235, 0.8);
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius:5px;
}

a.download:hover,
 a.download:active {
   background-color: rgb(80, 30, 155);
   background-color: rgba(80, 30, 155, 0.8);
}

.dark-mode-checkbox:checked ~ .theme-container a.download:link,
.dark-mode-checkbox:checked ~ .theme-container a.download:visited {
     color: #222;
	 background-color: rgb(105, 25, 215);
}
 .dark-mode-checkbox:checked ~ .theme-container a.download:hover,
 .dark-mode-checkbox:checked ~ .theme-container a.download:active {     
	 background-color: rgb(125, 45, 235);
	 
}
      </style>
   </head>
   <body><a id="top"></a>
   <input id="dark-mode" class="dark-mode-checkbox visually-hidden" type="checkbox">
<div class="theme-container grow">
      
      <div class="header">
	  <label class="dark-mode-label" for="dark-mode" style="float:right">
	Dark mode
  </label>
         <h1>Joe-abdo</h1>
         <p>The world's best site, <span style="text-decoration:line-through;">my</span> our website.</p>
      </div>
      <div class="topnav" id="myTopnav">
         <a href="<?php echo $tld?>/" ><i class="fas fa-home"></i><span class="hide"> Home</span></a>
         <a href="/p"><i class="fas fa-user"></i><span class="hide"> Profile</span></a>
        <!-- <a href="#contact"><i class="far fa-address-card"></i><span class="hide"> Contact</span></a>-->
         <a href="#top" class="active"><i class="fas fa-info-circle"></i><span class="hide"> About</span></a>
		 <!-- <a ><i class="fas fa-cogs"></i><span class="hide"> Settings</span></a>-->
		 <a href="/logout.php" <?php echo "".($order69 == TRUE? 'style="display:none;"' : 'style="float:right"' )."" ?>><i class="fas fa-sign-out-alt"></i><span class="hide"> Log out</span></a>
      </div>
      <div class="row">
         <div class="leftcolumn">
            <div class='card'>
               <img src="https://i.imgur.com/utOGiXI.jpg" alt="Image" style="float:left;max-width: 100%;max-height:300px;" loading="lazy">
               <h1 style="font-size:30px">Joe-abdo <sub style="font-size:20px; color:gray">(2002-???)</sub></h1>
               <p>| Painter | Comedian | Politician | Web developer |</p>
               <p  style="font-size:15px">Joe-abdo was born on July 11, 2002. He was a comedian, a painter, a politician and a web developer, known for joking and painting, mostly in class, and last but not least creating websites. He probably is still alive.<br /><br /><b style="color:gray;">Born:</b> July 11, 2002<br /><br /><b style="color:gray;">Died:</b>???</p>
            </div>
            <div class='card'>
               <h1 style="font-size:30px"><img src="/favicon.png" alt="Image" style="float:left;max-width: 100%;max-height:200px;" loading="lazy">Joe-abdo<sub style="font-size:20px; color:gray">(2018-&infin;)</sub></h1>
               <p>| Website | <?php echo $tld?> |</p>
               <p  style="font-size:15px">Joe-abdo(the website) is a social media platform owned, run, managed, administrated...etc., all by Joe-abdo(the person), and is constantly being worked on, in order to improve and provide a richer user experience.<br /><br /><b style="color:gray;">Started:</b>November 6, 2018</p>
            </div>
         </div>
         <div class="rightcolumn">
            <div class="card">
               <h2>&lt;&sol;Source_code&gt;</h2>
               <p><a href='https://github.com/Joe-abdo/website_files.git' target="_blank" class='download' ><b>Download here</b></a></p>
            </div>
            <div class="card">
               <h3>Website version</h3>
               <p><?php echo $ver?></p>
            </div>
         </div>
      </div>
      <div class="footer">
         <h2>&copy;Copyright Joe-abdo technologies.co.ltd <?php echo date("Y"); ?></h2>
      </div>
	  </div>
      <?php echo $closing_body_tag?>
</html>