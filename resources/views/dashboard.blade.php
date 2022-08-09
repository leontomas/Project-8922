<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
	<link rel="stylesheet" type="text/css" href="./css/dashboard.css">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
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

    <div class="mid-container">
        <h3 class="live-h3 mt-5 text-white text-center">Live Stream</h3>
        <div class="livestream">
            <video controls width="700">
                <source src="/media/cc0-videos/flower.webm"
                type="video/webm">
            </video>

            <video controls width="700">
                <source src="/media/cc0-videos/flower.webm"
                type="video/webm">
            </video>
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
            <a href=""><img src="./images/ambulance.jpg"></a>
            <a href=""><img src="./images/crawl.jpg"></a>
            <a href=""><img src="./images/dakota.jpg"></a>
            <a href=""><img src="./images/dark-phoenix.jpg"></a>
            <a href=""><img src="./images/coherence.jpg"></a>
        </div>
    </div>
    <div class="footer"></div>
	<!-----------Scripts------------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
 		
</body>
</html>
		 
