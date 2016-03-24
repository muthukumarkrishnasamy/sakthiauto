
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sakthi Automobiles</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<script src="js/jquery-2.1.1.js"></script>
	<!--<script src="js/RotateBG.js"></script>-->
	<script>
	/* $.RotateBG({
		// An array of background images to rotate through
		Backgrounds:['https://unsplash.it/1800/900?image=1024', 'https://unsplash.it/1800/900?image=1023', 'https://unsplash.it/1800/900?image=1022'],

		// How many seconds to pause between rotations [Optional]
		Interval: 8,

		// An image that will be displayed while the first image is preoading [Optional]
		LoadingImg: "img/loader.gif",

		// if LoadingImg is set, this will be the background color behind the image [Optional]
		LoadingBGColor: "#2A2826",

		// Shuffle the Backgrounds array? [Optional]
		Shuffle: true,

		// A function to be executed when the first image is done loading [Optional]
		onLoaded: function(){ console.log("First image has loaded."); },

		// The speed of the crossfade. A number less than one. [Optional]
		FadeSpeed: 0.1
	}); */
	</script>
	<script src="js/jquery.mkinfinite.js"></script>
	<script>
		jQuery.noConflict();
		(function ($) {
			function readyFn() {
				$('body').mkinfinite({
				//maxZoom:       1.01,
				animationTime: 4000,
				//imagesRatio:   (960 / 720),
				//isFixedBG:     true,
				zoomIn:        true,
				imagesList:    new Array(
					'img/landing/audi___legend_perspective-wallpaper-1600x900.jpg',
					'img/landing/audi_r8_in_the_desert-wallpaper-1600x900.jpg'
				)
			});
			}

			$(document).ready(readyFn); 
		})(jQuery);

	</script>
	

</head>

<body class="gray-bg">


    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">SSA</h1>

            </div>
            <h3>Welcome to Sri Sakthi Automobiles</h3>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
