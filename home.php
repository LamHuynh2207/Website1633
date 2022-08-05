<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<div class="container">
		
		<div class="menu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="category.php">Category</a></li>
				<li><a href="#">More</a></li>
				<a href="#"><img src="images/logo2.png" alt="" style="width:95px;height:95px;"></a>
				<li><a href="cart.php">My Cart</a></li>
				<?php
					if(!isset($_SESSION['username']))
					{
					?> 
						<li><a href="login&register.php">Log In</a></li>
					<?php
					}
					else
					{
					?>
					    <li><a href="profile.php">Profile</a></li>
					    <li><a href="index.php">Log out</a></li>
					<?php
					}
				?>
				
			</ul>
		</div>
		
		<div class="slice">
			<div class="aspect-ratio-169">
				<div class="slide-1">
					<img src="images/slider_1.png" alt="">
					<div class="left">
						<p>Flora Jewelry specializes in selling quality jewelry and accessories imported from Thailand, Korea, China,... Available products. The new form of continuous weekly. Lowest prices in the market and many special offers for regular customers.</p>
						<button class="btn">View products</button>
					</div>
				</div>
				<img src="images/2.png" alt="">
				<img src="images/3.png" alt="">
				<img src="images/4.png" alt="">
				<img src="images/5.png" alt="">	
			</div>
			<div class="dot-container">
				<div class="dot active"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>

		<div class="banner">
			<a class="bannerLeft" href="#">
				<p class="textL">Summer <strong>Trending</strong></p>
				<p class="view1">view all</p>
			</a>
			<a class="bannerRight"  href="#">
				<p class="textR">Free <br/> <strong>Shipping</strong></p>
				<p class="view2">On all orders<br/>over $10!</p>
			</a>
		</div>

		<div class="content">
			<p id="title">Featured <strong>Products</strong></p>
			<div class="layer1">
				<a class="product" href="#">
					<img src="images/item.jpg" width="300" height="300" alt="">
				</a>
				<a class="product" href="#">
					<img src="images/item_5.jpg" width="300" height="300" alt="">
				</a>
				<a class="product" href="#">
					<img src="images/item_6.jpg" width="300" height="300" alt="">
				</a>
				<a class="product" href="#">
					<img src="images/item_7.jpg" width="300" height="300" alt="">
				</a>
			</div>
			<div class="layer2">
				<div class="name">
					<p>Twin-sided</p>
					<p>Titanium Earrings</p>
				</div>
				<div class="name">
					<p>Titanium Ring</p>
					<p>With Stone</p>
				</div>
				<div class="name">
					<p>Rubik's Silver</p>
					<p>Bracelet</p>
				</div>
				<div class="name">
					<p>Round Face</p>
					<p>Silver Necklace</p>
				</div>
			</div>
			<div class="layer3">
				<p class="price">$4.<span>00</span></p>
				<p class="price">$3.<span>50</span></p>
				<p class="price">$5.<span>00</span></p>
				<p class="price">$7.<span>00</span></p>
			</div>
			<div class="layer4">
				<div class="buy">
					<button class="btn">Buy now</button>
				</div>
				<div class="buy">
					<button class="btn">Buy now</button>
				</div>
				<div class="buy">
					<button class="btn">Buy now</button>
				</div>
				<div class="buy">
					<button class="btn">Buy now</button>
				</div>
			</div>
		</div>

		<div class="banner">
			<a id="banner1" href="#">
				<p class="textL2">Best <strong>Necklaces</strong></p>
				<p class="view3">view all</p>
			</a>
			<a id="banner2"  href="#">
				<p class="textR2">Top <br/> <strong>Earrings</strong></p>
				<p class="view4">view all</p>
			</a>
		</div>

		<div class="footer">
			<div class="about">
				<h2>About Us</h2>
				<a id="footerLeft" href="#"><img src="images/logo2.png" width="80px" alt=""></a>
				<p id="footerRight">Established in 2021, Flora Jewelry is an online store that sells personal ornaments for women ranging from earrings to necklaces.</p>
			</div>
			<div class="contact">
				<h2>Contacts</h2>
				<p><span>Email:</span> lamhuynh2207@gmail.com</p>
				<p><span>Phone:</span> 0918081811</p>
			</div>
			<div class="link">
				<p>Flora Jewelry &copy; All Right Reserved</p>
			</div>
		</div>

	</div>
</body>
<script>
	const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
	const imgContainer = document.querySelector('.aspect-ratio-169')
	const dotItem = document.querySelectorAll(".dot")
	let imgNumber = imgPosition.length
	let index = 0
	imgPosition.forEach(function(image,index){
		image.style.left = index*100 + "%"
		dotItem[index].addEventListener("click", function() {
		slider (index)
		})
	})
	function imgSlide() {
		index++;
		console.log(index)
		if (index>=imgNumber) {index=0}
		slider (index)	
	}
	function slider (index) {
		imgContainer.style.left = "-" +index*100+ "%"
		const dotActive = document.querySelector('.active')
		dotActive.classList.remove("active")
		dotItem[index].classList.add("active")
	}
	setInterval(imgSlide, 5000) 
</script>
</html>

