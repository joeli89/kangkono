<?php 
 include('inc/videos.php');
?>
<?php
$pageTitle = "Sport | Kangkono";
$video = "sport";
include('assets/inc/header.php');

?>



		<!-- WORK -->
		<section id="work" class="alternate">
			<div class="container">
				<header class="text-center">
					<h1>Sport</h1>
				</header>

				<div class="divider"><!-- lines divider --></div>

				<div id="portfolio" class="text-center animate_fade_in">


					
					<div class="row">

						<ul class="sort-destination isotope" data-sort-id="isotope-list">

							<?php foreach(array_reverse($videos) as $video) { ; ?>
								
							<li class='isotope-item col-sm-6 col-md-4 <?php echo $video["type"]; ?>' 
								style='<?php if($video["type"] == "life") { echo "display:none;";}
											 if($video["type"] == "business") { echo "display:none;";} 
									   ?>'
							><!-- item -->


								<a class="popup-video" href='<?php echo $video["video"]; ?>'>
									<img src='<?php echo $video["img"]; ?>' class="img-responsive" data-src="holder.js/#676767:#555555/auto/" alt="img" />
									<div class="caption">
									
										<h3><?php echo $video["name"]; ?></h3>
										<p><?php echo $video["type"]; ?></p>
									</div>
								</a>
							</li>

							<?php } ?>






							<!-- <li class="isotope-item col-sm-6 col-md-4 sport" --><!-- item -->
							<!-- 	<a class="popup-video" href="http://vimeo.com/23630702">
									<img src="assets/images/1x1.png" class="img-responsive" data-src="holder.js/360x360/#676767:#555555/auto/" alt="img" />
									<div class="caption">
									
										
									</div>
								</a>
							</li> -->



							<!-- <li class="isotope-item col-sm-6 col-md-4 brand"><!-- item -->
								<!-- <a class="external ajax-project" href="project-external-3.html">
									<img src="assets/images/1x1.png" class="img-responsive" data-src="holder.js/360x360/#676767:#555555/auto/" alt="img" />
									<div class="caption">
										<i class="rounded fa fa-link"></i>
										<h3>PROJECT TITLE</h3>
										<p>External Project 3</p>
									</div>
								</a>
							</li> -->

						</ul>
					</div>

				</div>
				</div>

			
			</div>
		</section>
		<!-- /WORK -->



		<!-- QUOTE -->
<!-- 		<section class="cover" style="background-image:url('assets/images/preview/slider/clouds.jpg')">
			<span class="overlay"></span>
			<div class="container text-center" data-animation="bounceIn">
				<q>We can't solve problems by using the same kind of thinking we used when we created them.</q>
				<cite>Albert Einstein</cite>
			</div>
		</section> -->
		<!-- /QUOTE -->






		<!-- CONTACT -->
<!-- 		<section id="contact">
			<div class="container">
				<header class="text-center">
					<h1>CONTACT</h1>
				</header>

				<div class="divider"></div>

				<article>
					<p class="text-center big-paragraph">
						Drop us a line or just say <strong><em>Hello!</em></strong>
						<small class="fsize15 block">
							Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. <br />
							Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.
						</small>
					</p>
				</article>

				<article>

					
					<div id="_sent_ok_" class="alert alert-success fade in fsize16 hide">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<span id="_msg_txt_"><strong>Thank You!</strong> Your message successfully sent!</span>
					</div>

					<form id="contactForm" method="post" action="php/contact.php" class="white block form-inline">
						<div class="row">
							<div class="col-md-4"><input required class="fullwidth" type="text" name="contact_name" id="contact_name" value="" placeholder="NAME *" title="Name" /></div>
							<div class="col-md-4"><input required class="fullwidth" type="email" name="contact_email" id="contact_email" value="" placeholder="EMAIL *" title="Email" /></div>
							<div class="col-md-4"><input class="fullwidth" type="text" name="contact_subject" id="contact_subject" value="" placeholder="SUBJECT" title="subject" /></div>
						</div>

						<div class="row">
							<div class="col-md-12"><textarea required class="fullwidth" rows="5" name="contact_comment" id="contact_comment" placeholder="MESSAGE *"></textarea></div>
							<div class="col-md-12">
								<input type="hidden" name="captcha" id="captcha" value="" />
								<button id="contact_submit" class="btn btn-default">SEND MESSAGE</button>
							</div>
						</div>
					</form>

				</article>

			</div>
		</section> -->
		<!-- /CONTACT -->



<?php 
include("assets/inc/footer.php");
?>