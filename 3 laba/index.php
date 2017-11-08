<?php session_start();
if ((isset($_POST['contact']))and(!isset($_SESSION['contact']))){
	$_SESSION['contact']=session_id();
if (intval($_POST[md5('name').session_id()])>1) die();
	$headers = 'From: '.$_POST[md5('name').session_id()].' <'.$_POST[md5('email').session_id()].">\r\n" .
		'Reply-To: '.$_POST[md5('email').session_id()]. "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	if (strlen($_POST[md5('comment').session_id()])>1){
	mail('info@protomech.org','Contact form',$_POST[md5('comment').session_id()],$headers);}
	header('Location: /');
}





?>

<!DOCTYPE html>

<html>



<head>

	<meta charset="utf-8" />

	<title>Prototype Mechanics. Nixie Watch - Kickstarter Coming SOON</title>

	<link rel="shortcut icon" href="img/favicon.png" />

	<meta name="description" content="Prototype Mechanics. Nixiewatch home Prototype C" />

	<meta name="keywords" content="Prototype Mechanics. Nixiewatch home" />



	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no, shrink-to-fit=no">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">



	<link href="css/sans.css" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css" />

	<link rel="stylesheet" href="css/media.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>



<body>

	<section class="top">

		<div class="container">

			<ul class="present">

				<li>

					<h2>    Prototype</h2>

				</li>

				<li>

					<a href="">

						<img src="img/logo.jpg" alt="Prototype Mechanics">

					</a>

				</li>

				<li>

					<h2>    Mechanics</h2>

				</li>

			</ul>

		</div>

	</section>



	<section class="home">

		<div class="container">

			<div class="left">



				<img src="img/DSCF1649.png" alt="">

			</div>

			<div class="right">

				<h2 class="name">Nixie Watch Prototype C model FOR YOU</h2>

				<p class="text">

					Introducing Model C, Nixie Tube Watch from Prototype Mechanics. Model C uses past technology engineered for the present with carefully crafted design and salvaged nixie tubes. This watch recycles classic technology into eye-catching treasure for anyone who wears it. This watch is for people with timeless style. Each watch is hand built in a factory in Lviv, Ukraine. Three years in the making, the engineers are ready to take the final prototype into full production. Prototype Mechanics works responsibly in selecting parts for production, using only top of the line products to build a watch that will last.

					<!-- <a href="https://www.kickstarter.com/projects/byprototype/prototype-mechanics-model-c-nixie-watch" class="price">

						Support Us On

					</a> -->

				</p>

				<div class="text_wrap ">

					<p>Very soon <span>at</span></p>

				</div>

				<img src="img/kick_log.jpg" alt="">

				<div class="subscribe_form">

					<form action="">

						<div class="block_border">

							<p class="form_header">

								We are launching our Prototype Mechanics

								on October 20th. Subscribe to keep up to date.

							</p>

							<p class="form_header">

								Sign up to receive our newsletter,

								to get more exclusive info, special offers and more !

							</p>

						</div>

						



						<div class="wrap">

							<input type="text" class="save_it" placeholder="Write email here...">

							<button type="button" class="save_it">Send</button>

						</div>

					</form>

				</div>

			</div>

		</div>

	</section>



	<section class="about_us">

		<div class="container">

			<div class="left">

				<h2 class="title_block">about us</h2>

				<p>

				After much research in the market of pro-technology watches, co-creators Konstantin Khlevnoy and Alex Vyshnevkyy believe Model C’s unique style will rise to the top of the watch industry. Konstantin, based in San Diego, California and Alex is in Lviv,Ukraine. Both with a passion for old mechanics, and love for tech and design. We will keep backers up to date with production as goals are met. Prototype Mechanics believes in quality, handmade goods that gives a new life to old technology.             </p>

			</div>

			<div class="right">

				<img src="img/DSCF1645.jpg" alt="">

			</div>

		</div>

	</section>



	<section class="technical">

		<div class="container">

			<h2 class="title_block">Technical specification</h2>

			<div class="clock">

				<div class="top">

					<div></div>

				</div>

				<div class="center">

					<div class="up_block"></div>

					<div class="teh_description">

						<!--    <div class="line1 line"></div>

							<div class="line2 line"></div>

							<div class="line3 line"></div> -->

							<span class="spec1">In-16 Nixie Tubes </span>

							<span class="spec2">Func - Led / Minutes </span>

							<span class="spec3">Aluminium Casing </span>

							<span class="spec4">Func - Led / Hours(24H) </span>

							<span class="spec5">Leather Bracelet </span>

							<span class="spec6">Quartz Glass </span>

						</div>

					</div>

				</div>

				<div class="technical_list">

					<ul>

						<li><b>Power:</b> DC 3.7V rechargeable battery/ 2 batteries inside</li>

						<li><b>Charging:</b> 1-3 hours (Depending on the power source)</li>

						<li class="has_list"><b>Battery life:  </b>

							<ul>

								<li><b>Active mode:</b> Up to 1 week, presuming usage of 30-50 times per day.</li>

								<li><b>Passive mode:</b> Up to  7-14 days, presuming no active usage of the watch.</li>

							</ul>

						</li>

						<li><b>Features:</b> HH-MM / Change on - off / Charge left/ Backlight </li>

						<li><b>Dimensions:</b> Width 50mm x Depth 19mm </li>

						<li><b>Watch strap:</b> Genuine leather (Black color)</li>

						<li><b>Casing:</b>  Aluminum</li>

						<li><b>Glass:</b> High quality Quartz glass</li>

						<li><b>Adjustments:</b> Motion sensor</li>

						<li><b>Water resistance:</b> YES</li>

						<li><b>Battery:</b> Lithium-polymer, non-removable, 2 x 200mah Accuracy: +/- 1 second per month</li>

						<li><b>Operating Temperature:</b> -25 to +40°С / +12 to 105°F</li>

					</ul>

				</div>

				<div class="wrap_for_button_open">

					<button class="open_hidden_list">

						<i class="fa fa-angle-down"></i>

					</button>

				</div>

			</div>

		</section>



		<section class="our_product">

			<div class="container">

				<h2 class="title_block">our product </h2>



				<div class="block_gallery">

					<div class="col_1 ">

						<div>

							<span class="eclipse">

								<i class="fa fa-search-plus"></i>

							</span>

							<img src="img/q2.jpg" class="img" alt="">

						</div>



						<div>

							<span class="eclipse">

								<i class="fa fa-search-plus"></i>

							</span>

							<img src="img/q1.jpg" class="img" alt="">

						</div>

					</div>



					<div class="col_2">

						<div>

							<span class="eclipse">

								<i class="fa fa-search-plus"></i>

							</span>

							<img src="img/q3.jpg" class="img" alt="">

						</div>

						<div>

							<span class="eclipse">

								<i class="fa fa-search-plus"></i>

							</span>

							<img src="img/q4.jpg" class="img" alt="">

						</div>

						<div>

							<span class="eclipse">

								<i class="fa fa-search-plus"></i>

							</span>

							<img src="img/q9.jpg" class="img" alt="">

						</div>

					</div>





					<div class="col_3 ">

						<div>

							<span class="eclipse">

								<i class="fa fa-search-plus"></i>

							</span>

							<img src="img/q16.jpg" class="img" alt="">

						</div>

						<div>

							<span class="eclipse">

								<i class="fa fa-search-plus"></i>

							</span>

							<img src="img/q5.jpg" class="img" alt="">

						</div>

						<div>

							<span class="eclipse">

								<i class="fa fa-search-plus"></i>

							</span>

							<img src="img/q5a.jpg" class="img" alt="">

						</div>

					</div>

				</div>



				<div class="wrap_for_show">

					<button class="show_more">show more</button>

				</div>





















			</div>

		</section>





		<section class="present_video">

			<div class="container">

				<!-- <h2 class="title_block">promo video</h2> -->





				<div class="wrap_video">

					<img src="img/DSCF1646.jpg" class="first_kadr" alt="">



					<i class="fa fa-play-circle-o open_video"></i>

					<!-- <iframe  src="https://www.youtube.com/embed/vN7ZtxdL7zw" frameborder="0" allowfullscreen></iframe> -->

				</div>







			</div>

		</section>



		<section class="contact">

			<div class="container">

				<div class="right">

					<img src="img/contact_us.jpg" alt="">

				</div>



				<div class="left">

					<h2 class="title_block">CONTACT US</h2>

					<span class="after_contact_us">Whether you’re looking for answers on ANY question - feel FREE to ask</span>

					<form method="post" action="">

						<div>

							<input type="hidden" name="contact">

							<input type="text" name="<?=md5('name').session_id()?>" class="field" placeholder="Your name" required>

							<input type="text" name="<?=md5('email').session_id()?>" class="field" placeholder="Your email" required>

						</div>

						<textarea name="<?=md5('comment').session_id()?>" class="field" placeholder="Message" required></textarea>



						<div class="block_for_button">

							<button class="send" <?=(isset($_SESSION['contact']))?'disabled':''?>>sent message</button>

						</div>



					</form>

				</div>



			</div>

		</section>



		<div class="modal_box ">

			<div class="modal">

				<span class="close_modal">×</span>

				<img src="" alt="">

			</div>

			<div class="overlay"></div>

		</div>



		<footer>

			<div class="container">

				<p>Prototype mechanics © <?=date('Y')?>. All rights reserved<br>

					<a href="http://www.galaikonazar.com.ua/" target="_blank">

						<img src="img/Galaiko_Nazar.png" value='Галайко Назар' width="48" title="Galaiko Nazar" alt="Galaiko Nazar">

					</a>

				</p>







				<ul>

					<li>

						<a href="https://www.facebook.com/prototypemech/" target="_blank">

							<i class="fa fa-facebook"></i>

						</a>

					</li>

					<li>

						<a href="https://twitter.com/ProtoMechanics" target="_blank">

							<i class="fa fa-twitter"></i>

						</a>

					</li>

					<li>

						<a href="https://www.instagram.com/prototype.mechanics/" target="_blank">

							<i class="fa fa-instagram"></i>

						</a>

					</li>

				</ul>

			</div>

		</footer>











		<script src="js/jquery-1.12.2.min.js"></script>

		<script src="js/script00.js"></script>

	    <script>

		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		

		ga('create', 'UA-101938060-1', 'auto');

		ga('send', 'pageview');

$(document).ready(function(){
	$('button.save_it').click(function(){
			$.ajax({
				url: '/managerCabinet/Operator', // point to server-side PHP script
				dataType: 'JSON',  // what to expect back from the PHP script, if anything
				cache: false,
				data: {'action':'dropOperatorAvatar','id':<?=intval($arr['id'])?>},
				type: 'POST',
				success: function (res) {
					try {
						if (res.status == true) {
							$('.upload_block_photo').attr('src', res.data.file_name);

						}
					}
					catch (e) {}

				}
			});

	})
});

	</script>

</body>

</html>

