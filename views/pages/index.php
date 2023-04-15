
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\index.css">
</head>
<body id="index-body">
    

<img id="banner" src="https://cms1.limelightplatform.com/binaries/original/content/gallery/publishing/gridimage/brands/475/sportscupspeed.png" alt="">

<header id="index-header">

<div id="home">
    <h1 id="index-h1"><?= $title ?? "Home" ?></h1>

 
</div>

</header>


<main id="index-main">
    <div id="index-car-images">
            <div class="card">
                <a  href="<?= ROOT_PATH ?>/options/new"><img src="https://files.porsche.com/filestore/image/multimedia/none/992-c2-modelimage-sideshot/thumbwhite/64a99f81-d97f-11eb-80d9-005056bbdc38;sI;twebp/porsche-thumbwhite.webp" alt=""></a>
                 <p>911</p>
                 <p>$112,000</p>
            </div>
       

       <div class="card">
       <a href="<?= ROOT_PATH ?>/options/new"><img src="https://files.porsche.com/filestore/image/multimedia/none/j1-taycan-4s-modelimage-sideshot/thumbwhite/01c0f8e7-fa54-11e9-80c6-005056bbdc38;sI;twebp/porsche-thumbwhite.webp" alt=""></a>
        <p>Taycan</p>
        <p>$120,999</p>
        </div>


        <div class="card">
        <a href="<?= ROOT_PATH ?>/options/new"><img src="https://files.porsche.com/filestore/image/multimedia/none/pa3-t-modelimage-sideshot/thumbwhite/8cecf74d-7868-11ec-80e7-005056bbdc38;sI;twebp/porsche-thumbwhite.webp" alt=""></a>
        <p>Macan</p>
        <p>$87,999</p>
        </div>
    </div>

    <!-- features list  -->
    <div id="index-features">
        <ul id="911-features">
        <li>3.0L twin-turbocharged flat-six engine
</li>
<li>8-speed PDK dual-clutch automatic transmission
</li>
<li>Rear-engine, rear-wheel drive layout
</li>
<li>Lightweight body construction
</li>
<li>Sport-tuned suspension system
</li>
<li>High-performance brakes
</li>
        </ul>
        <ul id="taycan-features">
  <li>Electric motor(s) producing up to 616 horsepower and 774 lb-ft of torque</li>
  <li>Two-speed transmission for the rear electric motor(s)</li>
  <li>All-wheel drive layout</li>
  <li>Lightweight body construction made of aluminum and high-strength steel</li>
  <li>Adaptive air suspension with Porsche Active Suspension Management (PASM)</li>
  <li>High-performance regenerative braking system</li>
</ul>
<ul id="macan-features">
  <li>2.0L turbocharged inline-four engine (base model)</li>
  <li>7-speed PDK dual-clutch automatic transmission</li>
  <li>All-wheel drive layout</li>
  <li>Lightweight body construction made of aluminum and high-strength steel</li>
  <li>MacPherson strut front suspension and multi-link rear suspension</li>
  <li>High-performance braking system with 4-piston monobloc calipers (base model)</li>
</ul>
      
    </div>


</main>

<footer id="index-footer">
    <div id="index-paragraph-wrapper">
        <h2>Driving Excellence: The Porsche Experience</h2>
        <p>
        Porsche is a world-renowned brand synonymous with luxury, style, and performance. Its distinctive design and engineering excellence have created a legacy of unparalleled power, precision, and speed. From the sleek lines of the 911 to the sporty versatility of the Cayenne, Porsche vehicles offer an unparalleled driving experience. With over 70 years of commitment to quality and innovation, each Porsche vehicle is crafted with precision and attention to detail, using cutting-edge technology and the highest quality materials. Porsche is also leading the way in electric and hybrid vehicles, as well as sustainable manufacturing practices and materials sourcing.
        </p>
    </div>

 

    <div id="index-social-wrapper">
        <h2>Our Social Links:</h2>
        <ul>
            <li><a href="https://www.instagram.com/porsche/">Instagram</a></li>          
            <li><a href="https://www.facebook.com/porsche/">Facebook</a></li>          
            <li><a href="https://twitter.com/Porsche">Twitter</a></li>          
            <li><a href="https://www.youtube.com/user/Porsche">YouTube</a></li>          
        </ul>
    </div>

</footer>



</body>
</html>