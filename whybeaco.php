<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'decoration.php'; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::beaco</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #00FFFF;
  font-size: 1em;
  padding: 8px 12px;
  position: absolute;
  bottom: 1px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 1em;
  width: 1em;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #7FFF00;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}



</style>
</head>

<body>
<table width="80%" border="0" align="center">
  <tr>
    <th height="120" scope="col">
          <?php include 'head.php'; ?>
   </th>
  </tr>
  <tr>
    <th height="51" scope="row">
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
     <li class="active"><a class="navbar-brand" href="index.php">Home</a></li>
      <li><a class="navbar-brand" href="whybeaco.php">Why Beaco</a></li>
      <li><a class="navbar-brand" href="hotelinfo.php">Hotel Info</a></li>
      <li><a class="navbar-brand" href="room.php">Rooms</a></li>
      <li><a class="navbar-brand" href="service.php">Services</a></li>
      <li><a class="navbar-brand" href="me.php">Meeting & Events</a></li>
    </ul>
  </div>
</nav>

    </th>
  </tr>
  <tr>
    <th height="410" scope="row">
            <div class="left">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 10</div>
  <img src="imeges/3.jpg" style="width:100%">
  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 10</div>
  <img src="imeges/4.jpg" style="width:100%">
  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 10</div>
  <img src="imeges/5.jpg" style="width:100%">
  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 10</div>
  <img src="imeges/8.jpg" style="width:100%">
  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 10</div>
  <img src="imeges/14.jpg" style="width:100%">
  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 10</div>
  <img src="imeges/3.jpg" style="width:100%">
  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">7 / 10</div>
  <img src="imeges/11.jpg" style="width:100%">
  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">8 / 10</div>
  <img src="imeges/15.jpg" style="width:100%">
  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">9 / 10</div>
  <img src="imeges/5.jpg" style="width:100%">
  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">10 / 10</div>
  <img src="imeges/13.jpg" style="width:100%">
  <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>

</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 5 seconds
}
</script>
              
            </div>
            <div class="right">
            <blockquote><header><p><h3>Dear Customer</h3> </header>
            <i>
              <h6>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </h6>
            </i>
            <a href="#"> <h5>Read more..!</h5></a>
</p></blockquote>
              <table height="3em" width="100%">
                <tr>
                  <th><div class="booking"><a href="#" class="btn btn-danger" role="button">Booking</a></div></th>
                  <th><div class="login"><a href="#" class="btn btn-danger" role="button">Login</a></div></th>
                </tr>
              </table>
            </div>

    </th>
  </tr>
  <tr>
    <th height="2061" bgcolor="#FFCE53" scope="row" align="center" valign="top" >
          <div class="content">
            Your Most Welcome For Our Better Services...!!
          </div>

           <div class="content2">
           <table height="100%" width="100%">
             <tr>
               <th>
                 <div class="image">
                 <h2>Dinning</h2>
                  <img src="imeges/dining.jpg" class="img-rounded" alt="Cinque Terre" width="100%" height="100%">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmotempor incididunt ut labore et dolore aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                </div>
               </th>
               <th>
                <div class="image">
                   <h2>Bar</h2>
                 <img src="imeges/bar.jpg" class="img-rounded" alt="Cinque Terre" width="100%" height="100%">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmotempor incididunt ut labore et dolore aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                 </div>
               </th>
             </tr>

             <tr>
               <th>
                 <div class="image">
                   <h2>Environment</h2>
                 <img src="imeges/12.jpg" class="img-rounded" alt="Cinque Terre" width="100%" height="100%">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmotempor incididunt ut labore et dolore aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                 </div>
               </th>
               <th>
                <div class="image">
                   <h2>Refreshment</h2>
                 <img src="imeges/env.jpg" class="img-rounded" alt="Cinque Terre" width="100%" height="100%">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmotempor incididunt ut labore et dolore aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                 </div>
               </th>
             </tr>


             <tr>
               <th>
                 <div class="image">
                   <h2>Reception</h2>
                 <img src="imeges/rec.jpg" class="img-rounded" alt="Cinque Terre" width="100%" height="100%">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmotempor incididunt ut labore et dolore aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                 </div>
               </th>
               <th>
                <div class="image">
                   <h2>Food</h2>
                 <img src="imeges/food.jpg" class="img-rounded" alt="Cinque Terre" width="100%" height="100%">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmotempor incididunt ut labore et dolore aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                 </div>
               </th>
             </tr>

             <tr>
               <th>
                 <div class="image">
                   <h2>Sports</h2>
                 <img src="imeges/sp.jpg" class="img-rounded" alt="Cinque Terre" width="100%" height="100%">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmotempor incididunt ut labore et dolore aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                 </div>
               </th>
               <th>
                <div class="image">
                   <h2>Beverage</h2>
                 <img src="imeges/bev.jpg" class="img-rounded" alt="Cinque Terre" width="100%" height="100%">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmotempor incididunt ut labore et dolore aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                 </div>
               </th>
             </tr>
           </table>
          </div>


    </th>
  </tr>
  <tr>
    <th scope="row" height="100" bgcolor="#E7CCAC">
    <div class="footer">
            <img src="imeges/footer.png" class="img-rounded" alt="Cinque Terre" width="100%" height="100%">
          </div>
          <div id="share-buttons">
    
    <!-- Buffer -->
    <a href="https://bufferapp.com/add?url=https://simplesharebuttons.com&amp;text=Simple Share Buttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/buffer.png" alt="Buffer" />
    </a>
    
    <!-- Digg -->
    <a href="http://www.digg.com/submit?url=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/diggit.png" alt="Digg" />
    </a>
    
    <!-- Email -->
    <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com">
        <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
    </a>
 
    <!-- Facebook -->
    <a href="http://www.mustnet.ac.tz/" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
    
    <!-- Google+ -->
    <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
    </a>
    
    <!-- LinkedIn -->
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
    </a>
    
    <!-- Pinterest -->
    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
        <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" />
    </a>
    
    <!-- Print -->
    <a href="javascript:;" onclick="window.print()">
        <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print" />
    </a>
    
    <!-- Reddit -->
    <a href="http://reddit.com/submit?url=https://simplesharebuttons.com&amp;title=Simple Share Buttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
    </a>
    
    <!-- StumbleUpon-->
    <a href="http://www.stumbleupon.com/submit?url=https://simplesharebuttons.com&amp;title=Simple Share Buttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/stumbleupon.png" alt="StumbleUpon" />
    </a>
    
    <!-- Tumblr-->
    <a href="http://www.tumblr.com/share/link?url=https://simplesharebuttons.com&amp;title=Simple Share Buttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/tumblr.png" alt="Tumblr" />
    </a>
     
    <!-- Twitter -->
    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>
    
    <!-- VK -->
    <a href="http://vkontakte.ru/share.php?url=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/vk.png" alt="VK" />
    </a>
    
    <!-- Yummly -->
    <a href="http://www.yummly.com/urb/verify?url=https://simplesharebuttons.com&amp;title=Simple Share Buttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/yummly.png" alt="Yummly" />
    </a>

</div>
    </th>
  </tr>
</table>
</body>
</html>
