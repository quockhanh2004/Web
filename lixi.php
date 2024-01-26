<?php
$name = ucfirst(substr($arr[0], 0, strlen($arr[0]) - 5));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta property="og:image" content="https://fileserver.199z.net/img/1704362246169-1.gif">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			background-color: #9e0b0f;
			background-image: url(https://fileserver.199z.net/img/1704362246169-1.gif);
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			background-position-y: bottom;
			margin: 0;
			padding: 0;
			font-family: 'Arial', sans-serif;
			color: #fff;
		}

.container {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    height: 100vh;
}

		.greeting {
			text-align: center;
			padding: 20px;
			margin: 6px;
			border-radius: 10px;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			background-color: white;
			box-shadow: 0 0 13px 1px #ff7373;
			max-width: 388px;
			color: #873737;
		}

		.buttons {
    margin-top: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
}
		button {
			padding: 12px 18px;
			margin: 0 10px;
			font-size: 16px;
			cursor: pointer;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			transition: transform 1s ease-in-out;
			text-align: center;
			border: 1px px solid white;
			box-shadow: 0 0 19px 9px white;
		}



		#noBtn {
			background-color: #120032;
		}
		@keyframes multiBlink {
			0% {
				color: #ff0000;
			}
			20% {
				color: #ff6600;
			}
			40% {
				color: #ffff00;
			}
			60% {
				color: #00ccff; 
			}
			80% {
				color: #00ff00;
			}
			100% {
				color: #ff0000; 
			}
		}

		h1 {
			font-size: 36px;
			text-align: center;
			margin: 50px 0;
			animation: multiBlink 1s infinite;
		}

	</style>
	<title>Quà Lì Xì Cho <?php echo $name ?></title>
</head>
<body>
    
	<div class="container">
	    <center style="display:none"><audio controls autoplay>
    <source src="/file/ngay-xuan-long-phung-sum-vay.mp3" >
</audio></center>
		<div class="greeting" id="main">
			<h1>Chào <span id="name"><?php echo $name ?></span>, đến năm mới rồi. <?php echo $name ?> có muốn nhận lì xì không?</h1>
			<div class="buttons">
				<button id="yesBtn">NHẬN LÌ XÌ</button>
				<button id="noBtn">KHÔNG NHẬN</button>
			</div>
		</div>
	</div>
	<script>
		document.getElementById('yesBtn').addEventListener('mouseenter', function() {
			moveButtonRandomly(this);
		});

		document.getElementById('yesBtn').addEventListener('click', function() {
			moveButtonRandomly(this);
		});
		document.getElementById('noBtn').addEventListener('click', function() {
			document.getElementById('main').innerHTML = "Dù rất muốn lì xì, nhưng ép nhiều quá thì ngượng ngùng đôi bên.<br><br>Nhân dịp năm mới, Chúc <?php echo $name ?> cùng gia đình nhiều sức khỏe, gặp may mắn trong cuộc sống, và thuận lợi trong công việc. <br><br>CHÚC MỪNG NĂM MỚI";
		});

		function moveButtonRandomly(button) {
			const newX = Math.random() * (window.innerWidth - button.clientWidth);
			const newY = Math.random() * (window.innerHeight - button.clientHeight);

			button.style.position = 'absolute';
			button.style.left = newX + 'px';
			button.style.top = newY + 'px';
		}

	</script>
</body>
</html>
	