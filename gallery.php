<?php
if ($_COOKIE['username']==null||$_COOKIE['psw']==null){
    echo <<<eof
<script>
alert("请先登录！");
window.location.href="index.html";
</script>
eof;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- menu -->
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //menu -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- fonts -->
<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<style type="text/css">
        .p_info{
            color: grey;
            font-weight: bolder;
            font-size: 25px;
        }
	</style>
<!-- //fonts -->
</head>
<body class="cbp-spmenu-push">
	 <!--top-header-->
		<!--bottom-->
		 
<!-- banner -->
<div class="w3layouts-banner1">
	<div class="container">
		<div class="wthree-header">
			<div class="w3l-logo">
				<h1><a href="index.html">Elucidation</a></h1>
				<p class="p_info">
                    欢迎
                        <?php
                        echo $_COOKIE['username'];
                        ?>
                    加入
                </p>
			</div>
			<div class="agileinfo-tleft">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
								<h3>Menu</h3>
								<a href="index.html" class="active">首页</a>
								<a href="about.html">关于我们</a>
								<a href="gallery.html">校园二次元</a>
								<a href="icons.html">开发素材</a>
								<a href="contact.html">联系我们</a>
							</nav>
							<div class="main buttonset">	
									<!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
									<button id="showRightPush"><img src="images/menu.png" alt=""/></button>
									<!--<span class="menu"></span>-->
							</div>
							<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
							<script src="js/classie.js"></script>
							<script>
								var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
								showRightPush = document.getElementById( 'showRightPush' ),
								body = document.body;

								showRightPush.onclick = function() {
									classie.toggle( this, 'active' );
									classie.toggle( body, 'cbp-spmenu-push-toleft' );
									classie.toggle( menuRight, 'cbp-spmenu-open' );
									disableOther( 'showRightPush' );
								};

								function disableOther( button ) {
									if( button !== 'showRightPush' ) {
										classie.toggle( showRightPush, 'disabled' );
									}
								}
							</script>
							<!-- /script-for-menu -->
			</div>
			<div class="clearfix"></div>			
		</div>
	</div>
</div>
<!-- //banner -->
<!-- gallery -->
<!-- gallery -->
	<div class="gallery-w3ls">
		<div class="container">
			<h2 class="agile">Gallery</h2>
			
			<div class="w3layouts_gallery_grids">
				<ul class="w3l_gallery_grid" id="lightGallery">
					<li data-title="Elucidation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/4.jpg" data-responsive-src="images/4.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/4.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Elucidation </h4>
									<p class="tagline overtext"> Fusce venenatis sem nec justo dapibus finibus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Elucidation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/5.jpg" data-responsive-src="images/5.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Elucidation </h4>
									<p class="tagline overtext"> Fusce venenatis sem nec justo dapibus finibus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Elucidation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/6.jpg" data-responsive-src="images/6.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/6.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Elucidation </h4>
									<p class="tagline overtext"> Fusce venenatis sem nec justo dapibus finibus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Elucidation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/7.jpg" data-responsive-src="images/7.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/7.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Elucidation </h4>
									<p class="tagline overtext"> Fusce venenatis sem nec justo dapibus finibus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Elucidation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/8.jpg" data-responsive-src="images/8.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/8.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Elucidation </h4>
									<p class="tagline overtext"> Fusce venenatis sem nec justo dapibus finibus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Elucidation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/9.jpg" data-responsive-src="images/9.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/9.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Elucidation </h4>
									<p class="tagline overtext"> Fusce venenatis sem nec justo dapibus finibus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Elucidation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/10.jpg" data-responsive-src="images/10.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/10.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Elucidation </h4>
									<p class="tagline overtext"> Fusce venenatis sem nec justo dapibus finibus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Elucidation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/11.jpg" data-responsive-src="images/11.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/11.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"> Elucidation</h4>
									<p class="tagline overtext"> Fusce venenatis sem nec justo dapibus finibus. </p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Elucidation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/12.jpg" data-responsive-src="images/12.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/12.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext">Elucidation </h4>
									<p class="tagline overtext"> Fusce venenatis sem nec justo dapibus finibus. </p>
								</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<script src="js/lightGallery.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script>
<!-- //gallery -->

<!-- //gallery -->
<!-- newsletter -->
	   <div class="newsletter">
		<div class="container">
			<div class="col-md-8 agileits-w3layouts_newsletter_left">
				<h3>Stay informed <br>with our Newsletter</br></h3>
				<p>Donec porta lacus vitae urna placerat, vitae dapibus nulla eleifend. 
					Donec aliquam neque quis felis viverra pulvinar. Aliquam erat volutpat. 
					Nam enim metus, faucibus non porttitor id, laoreet quis sapien.</p>
				<form action="#" method="post">
					<input class="email" type="email" placeholder="Your email..." required="">
					<input type="submit" value="Subscribe">
				</form>
			</div>
			<div class="col-md-4 agileits-w3layouts_newsletter_right">
				<h4>you think we're cool ? let's work together</h4>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<div class="agileinfo_footer_bottom">
			<div class="container">
				<div class="col-md-3 agileinfo_footer_bottom_grid">
					<h3>About Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque 
						id arcu neque, at convallis est felis.</p>
					
				</div>
				<div class="col-md-3 agileinfo_footer_bottom_grid">
					<h3>Our links</h3>
					<div class="w3-agile-foot">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="icons.html">Icons</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
						
					</div>
				</div>
				<div class="col-md-3 agileinfo_footer_bottom_grid">
					<h3>Latest Tweets</h3>
					<ul class="twi agileits_twitter">
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Praesent imperdiet diam sagittis, egestas augue id <a href="#" class="mail">
						@http:example.com</a> <span>ABOUT 15 MINS</span></li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Mauris tristique, dolor vel iaculis vestibulum<a href="#" class="mail">
						@http:example.com</a> <span>ABOUT 2 HOURS AGO</span></li>
					</ul>
				</div>
				<div class="col-md-3 agileinfo_footer_bottom_grid">
					<h3>Flickr Feed</h3>
					<div class="flickr-grids">
						<div class="flickr-grid agileits_w3layouts_flickr">
							<a href="#"><img src="images/5.jpg" alt=" " class="img-responsive"></a>
						</div>
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="#"><img src="images/6.jpg" alt=" " class="img-responsive"></a>
						</div>
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="#"><img src="images/7.jpg" alt=" " class="img-responsive"></a>
						</div>
						<div class="clearfix"> </div>
						
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="#"><img src="images/8.jpg" alt=" " class="img-responsive"></a>
						</div>
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="#"><img src="images/9.jpg" alt=" " class="img-responsive"></a>
						</div>
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="#"><img src="images/10.jpg" alt=" " class="img-responsive"></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- copy-right -->
	 <div class="w3ls-copy-right">
		 <div class="container">
			 <p>Copyright &copy; 2020.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">蚌埠学院</a></p>
		 </div>
	 </div>
<!-- //copy-right -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->


</body>
</html>