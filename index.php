<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
			font-family: 'poppins', sans-serif;
			color: whitesmoke;
		}
		.main{
			position: relative;
			height: 600px;
			width: 450px;
			border-radius: 18px;
			background: #566573;
			overflow: hidden;
		}
		body{
			min-height: 100vh;
			background: #1C2833;
			display: grid;
			place-items: center;
		}
		.main .topbar .option{
			display: flex;
			align-items: center;
			justify-content: center;
			transform: translateY(-70px);
			transition: 0.5s;
		}
		.main .topbar .active2{
			transform: translateY(0px);
		}
		.main .topbar .option button{
			margin: 0 10px;
			height: 40px;
			width: 40px;
			font-size: 25px;
		}
		.main .topbar{
			width: 100%;
			padding: 10px 20px;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		.main .topbar  button{
			z-index: 20;
			height: 45px;
			width: 45px;
			border-radius: 50%;
			font-size: 25px;
			border: none;
			outline: none;
			cursor: pointer;
			display: flex;
			align-items: center;
			justify-content: center;
			background: rgba(0, 0, 0,0.08);
			box-shadow: 0.1px 8px 8px 2px rgba(0,0,0,0.2);
		}
		.main .topbar button:hover, .main .controlpart .controlbutton .btn button:hover{
			background: linear-gradient(to right, #FF5722,#FF7043);
			box-shadow: 0.1px 8px 8px 2 px rgba(0, 0, 0, 0.2) inset,0.1px 8px 8px 2 px rgba(0, 0, 0, 0.2);
		}
		.main .playpart{
			margin-top:20px ;
			position: relative;
			width: 100%;
			display: flex;
			align-items: center;
			flex-direction: column;
		}
		.main .playpart .img img{
			height: 100%;
			width: 100%;
			object-fit: cover;
		}
		.main .controlpart{
			width: 100%;
			display: flex;
			align-items: center;
			flex-direction: column;
		}
		.main .controlpart .songtitle{
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;

		}
		.main .controlpart .songtitle p{
			font-size: 22px;
		}
		.main .controlpart .songtitle p:first-child{
			font-size: 26px;
			text-transform: capitalize;
		}
		.main .controlpart .controlbutton{
			margin-top: 50px;
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;

		}
		.main .controlpart .controlbutton .mainbtn{
			display: flex;
			align-items: center;
			justify-content: center;
			margin-top: 30px;
		}
		.main .controlpart .controlbutton .mainbtn button{
			height: 55px;
			width: 55px;
			border-radius: 50%;
			font-size: 30px;
			border: none;
			outline: none;
			cursor: pointer;
			display: flex;
			align-items: center;
			justify-content: center;
			margin: 0 12px;
			background: #1C2833;
			box-shadow: 0.1px 8px 8px 2px rgba(0, 0, 0, 0.2);
			color: whitesmoke;
		}
		.main .controlpart .controlbutton .mainbtn .btnplay{
			background: linear-gradient(to right , #FF5722,#FF7043);
			box-shadow: 0.1px 8px 8px 2 px rgba(0, 0, 0, 0.2) inset,0.1px 8px 8px 2 px rgba(0, 0, 0, 0.2) ;
		}
		.playlist{
			bottom: 0;
			z-index: 10;
			width: 100%;
			height: 100%;
			background: #F66F73;
			max-height: 0px;
			overflow: hidden;
			transition: 0.5s;
			align-items: center;
			flex-direction: column;
			position: absolute;
			display: flex;
		}


		.playlist .playsong{
			margin: 2px;
			position: relative;
			width: 80%;
			display: flex;
			align-items: center;
			justify-content: center;
			border-radius: 10px;
			transition: 0.5s;
			cursor: pointer;
			padding: 12px 12px 20px 12px;
			box-shadow: 0.1px 8px 8px 2px rgba(0, 0, 0, 0.2);

		}
		.playlist .playsong .p_title{
			font-size: 20px;
		}
		.main .active .playlist .playsong .p_artist{
			position: absolute;
			bottom: 6px;
			left: 15px;
			font-size: 12px;
		}
		.playlist .playsong button{
			height: 35px;
			width: 35px;
			border-radius: 50%;
			font-size: 18px;
			border: none;
			outline: none;
			cursor: pointer;
			display: flex;
			transition: 0.5s;
			margin: 0  18px;
			align-items: center;
			justify-content: center;
			background: rgba(0, 0, 0,.08);
			box-shadow: 0.1px 8px 8px 2px rgba(0,0,0,0.2);
		}
		.playlist .playsong:hover{
			background: #1C2833;
		}
		.playlist .playsong:hover button{
			background: #FF5722;
		}
		.main .activebtn{
			background: #1C2833;
			box-shadow: none;
		}
		.playlist .activebtn button{
			background: linear-gradient(to right , #FF5722,#FF7043);
			box-shadow: 0.1px 8px 8px 2 px rgba(0, 0, 0, 0.2) inset,0.1px 8px 8px 2 px rgba(0, 0, 0, 0.2) ;
		}
		.rangeslider{
			width: 60%;
			position: relative;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		.rangeslider p{
			font-size: 22px;
		}
		.main .controlpart .slider{
			outline: none;
			-webkit-appearance:none;
			width: 85%;
			height: 4px;
			cursor: pointer;
			position: relative;
			border-radius: 3px;
		}
		input[type=range]::-webkit-slider-thumb{
			-webkit-appearance:none;
			height: 20px;
			width: 20px;
			border-radius: 50%;
			cursor: pointer;
			z-index: 10;
			background: linear-gradient(to right , #FF5722,#FF7043);
			box-shadow: 0.1px 8px 8px 2 px rgba(0, 0, 0, 0.2) inset,0.1px 8px 8px 2 px rgba(0, 0, 0, 0.2) ;
		}
	</style>
	<!-- Bootstrap Icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
	<div class="container-fluid">
		<!-- <div class="main d-flex text-center justify-content-center"> -->
			<div class="main">
				<!-- top bar -->
				<div class="topbar ">
					<button onclick="sidebar()"><i class="bi bi-chevron-right"></i></button>
					<div class="option">
						<button ><i class="bi bi-music-note-beamed"></i></button>
						<button ><i class="bi bi-volume-up"></i></button>
						<button ><i class="bi bi-pencil-square"></i></button>
					</div>
					<button onclick="open_p()"><i class="bi bi-list"></i></button>
				</div>
				<div class="playpart">
					<div class="img">
						<img src="https://consideringapple.com/wp-content/uploads/2021/04/Music-icon-aesthetic-pink-1.jpg">
					</div>
				</div>

				<!-- control part -->
				<div class="controlpart">
					<div class="songtitle">
						<p>song title</p>
						<p>artist name</p>
					</div>
					<div class="controlbutton">
						<div class="rangeslider">
							<input type="range" min="0" max="100" class="slider" name="">
							<p>3:00</p>
						</div>

						<div class="mainbtn">
							<button class=" btnprevious"><i class="bi bi-chevron-bar-left"></i></button>
							<button class=" btnplay"><i class="bi bi-play-circle"></i></button>
							<button class=" btnnext"><i class="bi bi-chevron-bar-right"></i></button>
						</div>
					</div>
				</div>

				<!-- playlist song -->
				<div class="playlist">
					<div class="playsong">
						<p class="p_title">song name</p>
						<p class="p_artist">aritst name</p>
						<button><i class="bi bi-play "></i></button>
					</div>
					<div class="playsong activebtn">
						<p class="p_title">song name</p>
						<p class="p_artist">aritst name</p>
						<button class="activebtn "><i class="bi bi-play"></i></button>
					</div>
					<div class="playsong">
						<p class="p_title">song name</p>
						<p class="p_artist">aritst name</p>
						<button><i class="bi bi-play "></i></button>
					</div>
					<div class="playsong">
						<p class="p_title">song name</p>
						<p class="p_artist">aritst name</p>
						<button><i class="bi bi-play"></i></button>
					</div>
				</div>
			</div>
		</div>
		<script>
			let playlist = document.querySelector('.playlist');
			let option = document.querySelector('.option');
			function open_p(){
				document.getElementById('active');
			}
			function sidebar(){
				document.getElementById('active2');
			}

		</script>
	</body>
	</html>