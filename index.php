<!DOCTYPE html>
<html>
	<head>
		<title>canvas test</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<canvas id="main_canvas" width="800px" height="500px"></canvas>
		<!-- <canvas id="main_canvas" width="191px" height="161px"></canvas> -->
		<script type="text/javascript">
			const canvas = document.getElementById('main_canvas');
			const ctx = canvas.getContext('2d');
			const dragon = new Image();
			dragon.src = 'images/flying_dragon-red-RGB.png';
			console.log(window.innerWidth);
			console.log(window.innerHeight);


			

// ctx.drawImage(dragon, 0, 161, 100, 100, 21, 20, 161, 191);
			dragon.onload = function(){

				let sx = 0;
				let sy = 161;
				let sWidth = 191;
				let sHeight = 161;
				let dx = 20;
				let dy = 20;
				let dWidth = 191;
				// let dWidth = this.naturalWidth/3;
				let dHeight = 161;
				// let dHeight = this.naturalHeight/3;

            	// ctx.drawImage(dragon, 0, 0);
            	
            	// function animate(){
				setInterval(function(){ 
					ctx.clearRect(dx, dy, dWidth, dHeight);
					ctx.drawImage(dragon, sx, sy, sWidth, sHeight, dx, dy, dWidth, dHeight);
					if(sx < 382){
						sx += 191;
					} else {
						sx = 0;
					}
				}, 300);

            	document.onclick = function(e){
            		let mouseX = e.clientX;
            		let mouseY = e.clientY;
            		console.log(e.clientX);
            		console.log(e.clientY);
            		moveDragon(mouseX, mouseY);
            	}
				function moveDragon(mouseX, mouseY){
					setInterval(function(){ 
						ctx.clearRect(dx, dy, dWidth, dHeight);
						if(dx < mouseX && dx !== mouseX){
							sy = 161;
							dx += 5;
						} else if (dx > mouseX){
							dx -= 5;
							sy = 483;
						}
						if(dy < mouseY){
							dy += 5;
						} else if (dy > mouseY){
							dy -= 5;
						}
						ctx.drawImage(dragon, sx, sy, sWidth, sHeight, dx, dy, dWidth, dHeight);
					}, 16);
				}
			// }
			}

			
		</script>
	</body>
</html>