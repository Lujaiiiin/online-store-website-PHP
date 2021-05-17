<!DOCTYPE html>
<html lang="en">
<head>
<title>Your website name</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

<style>

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}

https://epicbootstrap.com/snippets/footer-dark

.footer{
  color: black;
  text-align: left;
  padding: 12px;
  text-decoration: none;
  font-size: 17px;
  line-height: 25px;
  border-radius: 4px;
background-color: black;
margin-bottom:0px;
}


.box{
   width: 320px;
   margin: 100px auto;
   background: #fff;
   border-radius: 7px;
   box-shadow: 1px 2px 4px rgba(0,0,0,.3);
}

.box .heading{
   background:#F08080;
   border-radius: 7px 7px 0px 0px;
   padding: 10px;
   color: #fff;
   text-align: center;
   font-family: "Rubik";
}

.faqs{
   padding: 0px 20px 20px;
}

::-webkit-details-marker{
   float: right;
   margin-top: 3px;
}

details{
   background: #f6f6f6;
   padding: 10px 20px;
   border-radius: 7px;
   margin-top: 20px;
   font-family: "Rubik";
   font-size: 14px;
   letter-spacing: 1px;
   cursor: pointer;
}

details summary{
   outline: none;
}



</style>
</head>
<body>
<div class="header">
  <img src = "#" width="150" height="150">
  <h1> website name </h1>
</div>

<div class="topnav">
   <a href="index.php">Home </a>
  
     <?php if(!isset($_COOKIE['username'])){ ?>
     <a href="login.php">Log in </a>
     <?php }?>
                 
  <a href="FAQ.php">FAQ</a>
  <a href="ContactUs.php">Contact Us</a>
    <?php if(isset($_COOKIE['username']) && $_COOKIE['usertype']=="admin"){ ?>
   <a href="Products.php">Products</a>
  <a href="addProducts.php">Add Products</a>
  <?php }?>
  
   <?php if(isset($_COOKIE['username']) ){ ?>
  <div style="float: right;vertical-align: middle;"> <a style=" color: white;display: inline;float: left;vertical-align: middle;"><?= $_COOKIE['username']?></a>&nbsp;&nbsp;<a href="logoff.php" class="">Logoff</a></div>
  <?php }?>
</div>




<div class="box">
   <p class="heading">FAQs</p>
   <div class="faqs">
      <details>
         <summary>Write the Question</summary>
         <p class="text">Answer</p>
      </details>
	  
        <details>
         <summary>Write the Question</summary>
         <p class="text">Answer</p>
      </details>
	  
       <details>
         <summary>Write the Question</summary>
         <p class="text">Answer</p>
      </details>
	  
	     <details>
         <summary>Write the Question</summary>
         <p class="text">Answer</p>
      </details>
   </div>
</div>

<footer>
 <div class="footer-dark">
<footer>
 <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Quick links</h3>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="login.php">Log in</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3> website name </h3>
                        <p>  website Description </p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright"> website name © 2021</p>
            </div>
        
</footer>
</body>
</html>