<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<div class="container">
		
		<div class="menu">
			<ul>
				<li><a href="file:///E:/Website%201633/index.html">Home</a></li>
				<li><a href="file:///E:/Website%201633/category.html">Products</a></li>
				<li><a href="#">More</a></li>
				<a href="#"><img src="images/logo2.png" alt="" style="width:95px;height:95px;"></a>
				<li><a href="#">Reviews</a></li>
				<li><a href="file:///E:/Website%201633/login&register.html">Log In</a></li>
				<li><a href="file:///E:/Website%201633/cart.html">My Cart</a></li>
			</ul>
		</div>
<!--------------------------cart--------------------------->
<section class="cart">
    <div class="container">
        <div class="cart-top-wrap">
            <div class="cart-top">
                <div class="cart-top-cart cart-top-item">
                    <i class="fas fa-shopping-cart "></i>
                </div>
                <div class="cart-top-adress cart-top-item">
                    <i class="fas fa-map-marker-alt "></i>
                </div>
                <div class="cart-top-payment cart-top-item">
                    <i class="fas fa-money-check-alt "></i>
                </div>
            </div>
        </div> 
    </div>
    <div class="container">
        <div class="cart-content row">
            <div class="cart-content-left">
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Product's name</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Delete</th>
                    </tr>
                    <tr>
                        <td><img src="images/item_1.jpg" alt=""></td>
                        <td><p>Tacori Engagement Rings</p></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><p>$4.00</p></td>
                        <td><span>X</span></td>
                    </tr>
                    <tr>
                        <td><img src="images/item_12.jpg" alt=""></td>
                        <td><p>Jennifer Silver Earrings</p></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><p>$4.70</p></td>
                        <td><span>X</span></td>
                    </tr>
                </table>
            </div>
            <div class="cart-content-right">
                <table>
                    <tr>
                        <th colspan="2">TOTAL AMOUNT OF SHOPPING CART</th>
                    </tr>
                    <tr>
                        <td>GROSS PRODUCTS</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>TOTAL PRODUCTS AMOUNT</td>
                        <td><p>$4.00</p></td>
                    </tr>
                    <tr>
                        <td>PROVISIONAL MONEY</td>
                        <td><p style="color: black; font-weight: bold;">$4.00</p></td>
                    </tr>
                </table>
                <div class="cart-content-right-text">
                    <p>You will get free shipping when your order total value over $10</p>
                    <p style="color: red; font-weight: bold;">Buy extra <span style="font-size: 18px;">$6.00 </span>for free SHIPPING</p>
                </div>
                <div class="cart-content-right-button">
                    <button>KEEP SHOPPING</button>
                    <button>PAY THE BILL</button>
                </div>
                <div class="cart-content-right-login">
                    <p>FLORA JEWELRY ACCOUNT</p> <br>
                    <p>Please login your account to earn membership points</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------footer---------------------->
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
</html>