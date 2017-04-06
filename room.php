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

/*mapicha ya class*/
@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}
* {
  box-sizing: border-box;
}
body, figure { 
  margin: 0; background: #E7CCAC;
  font-family: Istok Web, sans-serif;
  font-weight: 100;
}
div#captioned-gallery { 
  width: 100%; overflow: hidden; 
  float: center;
}
figure.slider { 
  position: relative; width: 400%;
  font-size: 0; animation: 30s slidy infinite; 
}
figure.slider figure { 
  width: 20%; height: auto;
  display: inline-block;  position: inherit; 
}
figure.slider img { width: 100%; height: auto; }
figure.slider figure figcaption { 
  position: absolute; bottom: 0;
  background: rgba(0,0,0,0.4);
  color: #fff; width: 100%;
  font-size: 2rem; padding: .6rem; 
}


</style>
</head>

<body>
<table width="88%" border="0" align="center">
  <tr>
    <th height="120" scope="col">
          <?php include 'head.php'; ?>
   </th>
  </tr>
  <tr>
    <th height="51" scope="row">
    <?php include 'nav.php'; ?>
     

    </th>
  </tr>
  
  <tr>
    <th height="3259" bgcolor="#FFCE53" scope="row" align="center" valign="top" >
         

           <div class="content2">
           <table height="100%" width="100%">
             <tr>
               <th>
                 <div class="room">
                 <h2> <strong>Standard Rooms </strong> USD 50</h2>
<div id="captioned-gallery">
  <figure class="slider">
    <figure>
      <img src="imeges/17.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="imeges/14.jpg" alt>
      <figcaption>Wanaka, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="imeges/9.jpg" alt>
      <figcaption>Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="imeges/15.jpg" alt>
      <figcaption>Bryce Canyon, Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="imeges/7.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
  </figure>
</div>
                </div>
               </th>
             </tr>

             <tr>
               <th>
                 <div class="room">
                 <h2> <strong>Delux Rooms  </strong>  USD 70</h2>
<div id="captioned-gallery">
  <figure class="slider">
    <figure>
      <img src="imeges/9.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="imeges/6.jpg" alt>
      <figcaption>Wanaka, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="imeges/3.jpg" alt>
      <figcaption>Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="imeges/15.jpg" alt>
      <figcaption>Bryce Canyon, Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="imeges/7.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
  </figure>
</div>
                </div>
               </th>
             </tr>


             <tr>
               <th>
                 <div class="room">
                 <h2><strong>Twin Rooms  </strong>  USD 70 </h2>
<div id="captioned-gallery">
  <figure class="slider">
    <figure>
      <img src="imeges/9.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="imeges/6.jpg" alt>
      <figcaption>Wanaka, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="imeges/3.jpg" alt>
      <figcaption>Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="imeges/15.jpg" alt>
      <figcaption>Bryce Canyon, Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="imeges/7.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
  </figure>
</div>
                </div>
               </th>
             </tr>

             <tr>
               <th>
                 <div class="room">
                 <h2><strong>Executive Rooms  </strong>  USD 80 </h2>
<div id="captioned-gallery">
  <figure class="slider">
    <figure>
      <img src="imeges/9.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="imeges/6.jpg" alt>
      <figcaption>Wanaka, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="imeges/3.jpg" alt>
      <figcaption>Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="imeges/15.jpg" alt>
      <figcaption>Bryce Canyon, Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="imeges/7.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
  </figure>
</div>
                </div>
               </th>
             </tr>
             <tr>
               <th>
                 <div class="room">
                 <h2><strong>Suite Rooms  </strong>  USD 100 </h2>
<div id="captioned-gallery">
  <figure class="slider">
    <figure>
      <img src="imeges/9.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="imeges/6.jpg" alt>
      <figcaption>Wanaka, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="imeges/3.jpg" alt>
      <figcaption>Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="imeges/15.jpg" alt>
      <figcaption>Bryce Canyon, Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="imeges/7.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
  </figure>
</div>
                </div>
               </th>
             </tr>
             <tr>
               <th>
                 <div class="room">
                 <h2><strong>Executive Suite Rooms  </strong>  USD 150 </h2>
<div id="captioned-gallery">
  <figure class="slider">
    <figure>
      <img src="imeges/9.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="imeges/6.jpg" alt>
      <figcaption>Wanaka, New Zealand</figcaption>
    </figure>
    <figure>
      <img src="imeges/3.jpg" alt>
      <figcaption>Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="imeges/15.jpg" alt>
      <figcaption>Bryce Canyon, Utah, United States</figcaption>
    </figure>
    <figure>
      <img src="imeges/7.jpg" alt>
      <figcaption>Hobbiton, New Zealand</figcaption>
    </figure>
  </figure>
</div>
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
          
    </th>
  </tr>
</table>
</body>
</html>
