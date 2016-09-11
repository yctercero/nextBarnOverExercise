<?php
	if($_GET['p'] == "home"){
		$title = "Next Barn Over Farm";
		$id = "home";
		$class = "";
	} elseif($_GET['p'] == "offFarmShare"){
		$title = "Next Barn Over Farm - Off Farm Share";
		$class = "secondaryPage " . ($_GET['p']);
	} elseif($_GET['p'] == "onFarmShare"){
		$title = "Next Barn Over Farm - On Farm Share";
		$class = "secondaryPage " . ($_GET['p']);
	} elseif($_GET['p'] == "ourCrops"){
		$title = "Next Barn Over Farm - Our Crops";
		$class = "secondaryPage " . ($_GET['p']);
	} elseif($_GET['p'] == "localOrganizations") {
		$title = "Next Barn Over Farm - Local Organizations";
		$class = "secondaryPage " . ($_GET['p']);
	} elseif($_GET['p'] == "theFarm") {
		$title = "Next Barn Over Farm - The Farm";
		$class = "secondaryPage " . ($_GET['p']);
	} elseif($_GET['p'] == "thePeople") {
		$title = "Next Barn Over Farm - The People";
		$class = "secondaryPage " . ($_GET['p']);
	} elseif($_GET['p'] == "winterShare") {
		$title = "Next Barn Over Farm - Winter Share";
		$class = "secondaryPage " . ($_GET['p']);
	} elseif($_GET['p'] == "signUp") {
		$title = "Next Barn Over Farm - Sign Up";
		$class = "secondaryPage " . ($_GET['p']);
	} else {
		$title = "Next Barn Over Farm - " . ucfirst($_GET['p']);
		$class = "secondaryPage " . ($_GET['p']);
	}


?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>

		<!-- CSS Stylesheet -->
		<link rel="stylesheet" type="text/css" href="style.css">

		<!-- Meta Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<meta name="description" content="Next Barn Over Farm is a 34 acre mixed vegetable farm in Hadley, MA. We grow over forty different crops, primarily for our on-farm CSA, as well as for off-farm box-shares and a few grocery store and restaurants. ">
		<meta name="author" content="Yara Tercero-Parker">

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Rye' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css">

		<!-- Java Script Stopping Tablet Double Tap Zoom -->
		<script type="text/javascript">
			(function(doc) {

				var addEvent = 'addEventListener',
				    type = 'gesturestart',
				    qsa = 'querySelectorAll',
				    scales = [1, 1],
				    meta = qsa in doc ? doc[qsa]('meta[name=viewport]') : [];

				function fix() {
					meta.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
					doc.removeEventListener(type, fix, true);
				}

				if ((meta = meta[meta.length - 1]) && addEvent in doc) {
					fix();
					scales = [.25, 1.6];
					doc[addEvent](type, fix, true);
				}

			}(document));
		</script>
	</head>

	<body id="<?php echo $id; ?>" class="<?php echo $class; ?>">
		<header>
			<div class="wrapper clear">
				<div id="titleAndBurger" class="clear">
					<div class="button dropDownMobile">MENU
						<nav>
							<ul class="clear">
								<li><a href="index.php?p=theFarm">Who We Are</a>
								</li>
								<li><a href="index.php?p=onFarmShare">What We Offer</a>
								</li>
								<li><a href="index.php?p=producers">Our Resources</a>
								</li>
								<li><a href="index.php?p=events">Stay In Touch</a>
								</li>
								<li><a href="index.php?p=signUp">Sign Up Now</a></li>
								<li><a class="signUpButton" href="index.php?p=signUp">Sign Up</a></li>
							</ul>
						</nav>
					</div> <!-- END BUTTON DROPDOWNMOBILE -->
					<h1>
						<a href="index.php?p=home">Next Barn Over Farm</a>
					</h1>
					<a class="signUpButton" href="index.php?p=signUp">Sign Up</a>
					<div id="headerIcons">
						<a href="https://goo.gl/maps/eRH2SLrEnxx" target="_blank" class="toGoogleMap">
							<i class="fa fa-map-marker fa-2x">
							</i>
						</a>
						<a href="tel:+14134618444">
							<i class="fa fa-phone fa-2x">
							</i>
						</a>
					</div> <!-- END HEADERICONS -->
				</div> <!-- END TITLEANDBURGER -->
				<nav class="mainNav">
					<ul class="clear">
						<li><a href="index.php?p=theFarm">Who We Are</a>
							<ul>
								<li><a href="index.php?p=theFarm">The Farm</a></li>
								<li><a href="index.php?p=thePeople">The People</a></li>
								<li><a href="index.php?p=partners" >Partners</a></li>
								<li><a href="index.php?p=contact">Contact Us</a></li>
								<li><a href="index.php?p=jobs">Employment</a></li>
								<li><a href="index.php?p=faq">FAQ</a></li>
							</ul>
						</li>
						<li><a href="index.php?p=onFarmShare">What We Offer</a>
							<ul>
								<li><a href="index.php?p=onFarmShare">On-Farm Share</a></li>
								<li><a href="index.php?p=offFarmShare">Off-Farm Share</a></li>
								<li><a href="index.php?p=winterShare">Winter Share</a></li>
								<li><a href="index.php?p=ourCrops">Our Crops</a></li>
							</ul>
						</li>
						<li><a href="index.php?p=producers">Our Resources</a>
							<ul>
								<li><a href="index.php?p=producers" >Local Producers</a></li>
								<li><a href="index.php?p=localOrganizations">Local Organizations</a></li>
								<li><a href="index.php?p=farmResources">Farm Resources</a></li>
							</ul>
						</li>
						<li><a href="index.php?p=events">Stay In Touch</a>
							<ul>
								<li><a href="index.php?p=events">Events</a></li>
								<li><a href="index.php?p=newsletter">Newsletter</a></li>
							</ul>
						</li>
						<li>
							<a class="signUpButton" href="index.php?p=signUp">Sign Up</a>
						</li>
					</ul>
				</nav>
			</div> <!-- END WRAPPER -->
		</header>