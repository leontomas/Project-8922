<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
	<link rel="stylesheet" type="text/css" href="./css/dashboard.css">
	
</head>
<body>

<nav class="navbar navbar-expand-lg">
        <div class="container-fluid" id="nav">
            <a class="navbar-brand" href="#">
				<img class="logo-brand" src="./images/logo2.png" alt="">
			</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-content collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Movies
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Comedy</a></li>
                        <li><a class="dropdown-item" href="#">Drama</a></li>
                        <li><a class="dropdown-item" href="#">Fantasy</a></li>
                        <li><a class="dropdown-item" href="#">Horror</a></li>
                        <li><a class="dropdown-item" href="#">Mystery</a></li>
                        <li><a class="dropdown-item" href="#">Romance</a></li>
                        <li><a class="dropdown-item" href="#">Thriller</a></li>
                        <li><a class="dropdown-item" href="#">Science Fiction</a></li>
                        <li><a class="dropdown-item" href="#">SciFi Fantasy</a></li>
                        </ul>
                    </li>
                </ul>
                
                <div class="icon">
                    <form action="" method="get" class="d-flex search-bar">
                    <input type="search" placeholder="Search" aria-label="Search">
                   <img class="btn-search">
                    </form>
                    
                </div>
				<!-- <div class="icon-item">
					<img class="btn-notif" src="./icons/notification.png">
					<img class="btn-user" src="./icons/user.png">
				</div> -->
            </div>
        </div>

		<div class="container-content collapse navbar-collapse" id="menuContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="menu-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="menuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="menuDropdown">
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            <form method="POST" action=" {{ url('logout') }}">
                            @csrf
                                <button type="submit" class="btn btn-light">Logout</button>
                            </form>
                        </ul>
                    </li>
                </ul>
			</div>
      </nav>

	  <div class="mid-container d-flex justify-content-center align-items-center ml-3">

		<div class="livestream">
			<div class="live1-container">
				<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js" type="text/javascript"></script>
				<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js" type="text/javascript"></script>
				<div id="oper "></div>
				<div id="vid1"></div>
				<script>
				player = new Clappr.Player({
				source: "https://hanflix-moviee.s3.ap-southeast-2.amazonaws.com/Doctor+Strange+In+The+Multiverse+Of+Madness+(2022)+%5B1080p%5D+%5BBluRay%5D+%5B5.1%5D+%5BYTS.MX%5D/output/Doctor.Strange.In.The.Multiverse.Of.Madness.2022.1080p.BluRay.x264.AAC5.1-%5BYTS.MX%5D.m3u8",
				mimeType: "application/x-mpegURL",
				autoPlay: true, 
				// height: "500",
				width: "500",
				plugins: {"core": [LevelSelector]}, 
				parentId: "#vid1"});
				</script>
				<span class="live-text1 text-white" style="margin-left: 40%; font-weight: bold;">Live Stream 1</span>
			</div>

		<div class="live2-container ml-5">
			<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js" type="text/javascript"></script>
			<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js" type="text/javascript"></script>
			<div id="oper2"></div> 
			<div id="vid2"></div>
			<script>
			player = new Clappr.Player({
			source: "https://hanflix-moviee.s3.ap-southeast-2.amazonaws.com/Fantastic+Beasts+The+Secrets+Of+Dumbledore+(2022)+%5B1080p%5D+%5BBluRay%5D+%5B5.1%5D+%5BYTS.MX%5D/output/Fantastic.Beasts.The.Secrets.Of.Dumbledore.2022.1080p.BluRay.x264.AAC5.1-%5BYTS.MX%5D.m3u8",
			autoPlay: true, 
			// height: "500",
			width: "500",
			plugins: {"core": [LevelSelector]}, 
			parentId: "#vid2"});
			</script>
			<span class="live-text2 text-white font-weight-bold" style="margin-left: 40%; font-weight: bold;">Live Stream 2</span>
		</div>

		<!-- <div class="live1-container d-flex justify-content-center align-items-center">
					<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js" type="text/javascript"></script>
					<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js" type="text/javascript"></script>
					<div id="oper"></div> 
					<div id="vid2"></div>
					<script>
					player = new Clappr.Player({
					source: "https://hanflix-moviee.s3.ap-southeast-2.amazonaws.com/Doctor+Strange+In+The+Multiverse+Of+Madness+(2022)+%5B1080p%5D+%5BBluRay%5D+%5B5.1%5D+%5BYTS.MX%5D/output/Doctor.Strange.In.The.Multiverse.Of.Madness.2022.1080p.BluRay.x264.AAC5.1-%5BYTS.MX%5D.m3u8",
					mimeType: "application/x-mpegURL",
					autoPlay: true, 
					// height: "500",
					width: "500",
					plugins: {"core": [LevelSelector]}, 
					parentId: "#vid2"});
					</script>
				</div> -->
	</div>
            
        </div>

        <hr class="new1">

    <div class="movies">
		<h4 class="recently text-white mt-3">Recently Added</h4>
		<a href=""><img src="./images/ambulance.jpg"></a>
		<a href=""><img src="./images/crawl.jpg"></a>
		<a href=""><img src="./images/dakota.jpg"></a>
		<a href=""><img src="./images/dark-phoenix.jpg"></a>
		<a href=""><img src="./images/coherence.jpg"></a>
	</div>

	<div class="movies">
		<h4 class="action text-white mt-3">Action</h4>
		<a href=""><img src="./images/spiderman-far-from-home.jpg"></a>
		<a href=""><img src="./images/silverston-siege.jpg"></a>
		<a href=""><img src="./images/the-commando.jpg"></a>
		<a href=""><img src="./images/the-northman.jpg"></a>
		<a href=""><img src="./images/fortress.jpg"></a>
	</div>

	<div class="movies">
		<h4 class="action text-white mt-3">Comedy</h4>
		<a href=""><img src="./images/jumanji2.jpg"></a>
		<a href=""><img src="./images/man-from-toronto.jpg"></a>
		<a href=""><img src="./images/zombie-land-2.jpg"></a>
		<a href=""><img src="./images/adam-project.jpg"></a>
		<a href=""><img src="./images/murder-mystery.jpg"></a>
	</div>


	<div class="movies">
		<h4 class="action text-white mt-3">Horror</h4>
		<a href=""><img src="./images/anabelle.jpg"></a>
		<a href=""><img src="./images/it-chaptertwo.jpg"></a>
		<a href=""><img src="./images/the-platform.jpg"></a>
		<a href=""><img src="./images/texas-chainsaw-massacre.jpg"></a>
		<a href=""><img src="./images/47-meters-down.jpg"></a>
	</div>

	<div class="movies">
		<h4 class="action text-white mt-3">Mystery</h4>
		<a href=""><img src="./images/uncharted.jpg"></a>
		<a href=""><img src="./images/mind-games.jpg"></a>
		<a href=""><img src="./images/memory.jpg"></a>
		<a href=""><img src="./images/knives-out.jpg"></a>
		<a href=""><img src="./images/take-the-night.jpg"></a>
	</div>


	<div class="movies">
		<h4 class="action text-white mt-3">Romance</h4>
		<a href=""><img src="./images/inbetween.jpg"></a>
		<a href=""><img src="./images/romance-to-the-rescue.jpg"></a>
		<a href=""><img src="./images/murder-mystery.jpg"></a>
		<a href=""><img src="./images/waves.jpg"></a>
		<a href=""><img src="./images/death-on-the-nile.jpg"></a>
	</div>

	<div class="movies">
		<h4 class="action text-white mt-3">Thriller</h4>
		<a href=""><img src="./images/exposure-36.jpg"></a>
		<a href=""><img src="./images/crawl.jpg"></a>
		<a href=""><img src="./images/escape-room.jpg"></a>
		<a href=""><img src="./images/men.jpg"></a>
		<a href=""><img src="./images/the-intruder.jpg"></a>
	</div>

	<div class="movies">
		<h4 class="action text-white mt-3">Science Fiction</h4>
		<a href=""><img src="./images/morbius.jpg"></a>
		<a href=""><img src="./images/moon-fall.jpg"></a>
		<a href=""><img src="./images/jurassic-world.jpg"></a>
		<a href=""><img src="./images/mib-international.jpg"></a>
		<a href=""><img src="./images/terminator-dark-fate.jpg"></a>
	</div>

	<div class="movies">
		<h4 class="action text-white mt-3">Fantasy</h4>
		<a href=""><img src="./images/adam-project.jpg"></a>
		<a href=""><img src="./images/the-lost-city.jpg"></a>
		<a href=""><img src="./images/the-lion-king.jpg"></a>
		<a href=""><img src="./images/dark-phoenix.jpg"></a>
		<a href=""><img src="./images/dr-strange-2.jpg"></a>
	</div>

	<!-----------Scripts------------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
 		
</body>
</html>
		 
