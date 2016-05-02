<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Prechu - A Temporary Solution</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="../bower_components/slick-carousel/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="../bower_components/slick-carousel/slick/slick-theme.css"/>
  <link href="assets/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	
	<!-- Data -->
<?php $json = json_decode(file_get_contents('http://localhost:8888/Palmetto/palmetto/assets/data/features.json'), true); ?>
</head>
<body>
  <nav class="white z-depth-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img alt="Prechu" src="assets/img/logo.png"></a>
      <ul class="right tabs hide-on-med-and-down">
        <li class="tab"><a href="#">Home</a></li>
        <li class="tab"><a href="#">Product</a></li>
        <li class="tab"><a href="#">Services</a></li>
        <li class="tab"><a href="#">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-top" id="index-banner">
			<div class="slider-bg">
				<div class="container lazy-slider">
    <div><img class="hide-on-small-only" data-lazy="assets/img/ipad-big.png"/> <div class="slide-caption"><h1>Lorum Ipsum</h1><p class="flow-text">dummy text of the 
printing & typesetting</p>
					<a class="waves-effect waves-light btn z-depth-1"><i class="material-icons left">check_circle</i><span class="valign">Sign up now</span></a>
					</div>
					</div>
					<div><img class="hide-on-small-only" data-lazy="assets/img/iphone-big.png"/> <div class="slide-caption"><h1>Lorum Ipsum</h1><p class="flow-text">dummy text of the 
printing & typesetting</p>
					<a class="waves-effect waves-light btn z-depth-1"><i class="material-icons left">check_circle</i><span class="valign">Sign up now</span></a>
					</div>
					</div>
			</div>
  </div>
	</div>
  <div class="container">
					<?php if(!empty($json)) { //check for featured data ?>
      <div class="row">
      <!--   Featured Section   -->
					<?php foreach ($json["features"] as $feature): ?>
        <div class="col s12 m4">
          <div class="icon-block center section">
            <img src="assets/img/<?php echo $feature["img"]; ?>">
            <?php if(!empty($feature["caption"])){ ?>
											<h5 class="center"><?php echo $feature["title"]; ?></h5>
											<?php } ?>

            <span class="light">Lorem Ipsum is not simply random text. It has roots in a piece </span>
          </div>
        </div>
							<?php endforeach; ?>
					</div>
					<?php } ?>

    <div class="row">
					<div class=" col s12">
						<h2>The Shopping Cart</h2>
					</div>
					<div class=" col s12 m6">
					<img src="assets/img/basket-big.png">
					</div>
					<div class=" col s12 m6">
						
						<h4>Some Bullet text here</h4>
													<ul>
														<li>Lorem Ipsum is simply dummy text of the printing and typesetting 
<li>Lorem Ipsum has been the industry's standard dummy text ever 
<li>When an unknown printer took a galley of type and scrambled 
<li>It to make a type specimen book. It has survived not only five centuries
<li>But also the leap into electronic typesetting,
<li>Remaining essentially unchanged. It was popularised 
<li>The release of Letraset sheets containing Lorem Ipsum passages
						</ul>
					</div>
										</div>
    </div>
<div class="divider"></div>
  <footer class="section transparent">
    <div class="footer-copyright transparent center">
      <div class="container">
            <p>Copyright © 2012-2013 cssauthor.com</p>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
	  <script type="text/javascript" src="../bower_components/slick-carousel/slick/slick.min.js"></script>
  <script src="assets/js/init.js"></script>

  </body>
</html>
