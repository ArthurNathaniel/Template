<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
	
<div class="content"-->








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Flower| Home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="index.php" class="logo">My flower<span>.</span></a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="#about">about</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
		<?php  if (isset($_SESSION['username'])) : ?>
    	<a href="index.php"> <strong><?php echo $_SESSION['username']; ?></strong></a>
		
    	
    <?php endif ?>
		<a href="index.php?logout='1'" style="color: red;">logout</a> 
    	
    </nav>


</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>fresh flowers</h3>
        <span> natural & beautiful flowers </span>
        <p>From next day flower delivery to letterbox flowers, we've got something for everyone,
             whatever the occasion! So, why not send an online flower delivery today and see if we can't put a smile on your face too..</p>
        <a href="#products" class="btn">shop now</a>
    </div>
    
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="video-container">
            <video src="images/about-vid.mp4" loop autoplay muted></video>
            <h3>best flower sales</h3>
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>
                The Flower Shop has been servicing the Fremont community for many years. We are a single-location, family-owned business.
                We are dedicated to providing the highest quality flower arrangements and gifts, as well as pleasant and timely service. Our expert staff is committed to making your experience as pleasant as possible because every customer is important to us.
                
                one that is enjoyable As a result, we always go above and beyond to ensure that your floral present is exquisite.
            </p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <div class="info">
            <h3>free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <div class="info">
            <h3>10 days returns</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-3.png" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>
    </div>
   
</section>

<!-- icons section ends -->

<!-- prodcuts section starts  -->

<section class="products" id="products">

    <h1 class="heading"> latest <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="images/img-1.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="pay.html" class="cart-btn">Buy Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Lilac Flower</h3>
                <div class="price"> $18.99 <span>$20.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="images/img-2.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="pay.html" class="cart-btn">Buy Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Lotus Flower</h3>
                <div class="price"> $17.99 <span>$20.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="images/img-3.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="pay.html" class="cart-btn">Buy Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Daffodil Flower</h3>
                <div class="price"> $11.99 <span>$15.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-50%</span>
            <div class="image">
                <img src="images/img-4.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="pay.html" class="cart-btn">Buy Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Tulip Flower</h3>
                <div class="price"> $25.99 <span>$50.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="images/img-5.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="pay.html" class="cart-btn">Buy Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Marigold Flower</h3>
                <div class="price"> $9.99 <span>$10.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-50%</span>
            <div class="image">
                <img src="images/img-6.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="pay.html" class="cart-btn">Buy Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Aster Flower</h3>
                <div class="price"> $15.99 <span>$30.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="images/img-7.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="pay.html" class="cart-btn">Buy Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Iris Flower</h3>
                <div class="price"> $13.99 <span>$15.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="images/img-8.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="pay.html" class="cart-btn">Buy Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Buttercup Flower</h3>
                <div class="price"> $13.99 <span>$15.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-50%</span>
            <div class="image">
                <img src="images/img-9.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="pay.html" class="cart-btn">Buy Now</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Jasmine Flower</h3>
                <div class="price"> $10.99 <span>$20.99</span> </div>
            </div>
        </div>

    </div>

</section>

<!-- prodcuts section ends -->

<!-- review section starts  -->

<section class="review" id="review">

<h1 class="heading"> customer's <span>review</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>
            Thank you so much the flowers they were beautiful and the service was exceptional.
             I can't thank you enough for the beatiful arrangement and care in delivery. 
             It made for a happy moment in a difficult day for my step grandmother.
            I will always use the concord flower shop for my business.
            Thank you    
        
        </p>
        <div class="user">
            <img src="images/pic-1.png" alt="">
            <div class="user-info">
                <h3>White Adams</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p> 
            I am back from my honeymoon and wanted to be sure and let you know how happy I am with the flowers you 
            did for my wedding. They far exceeded my expectations!In fact, they were the talk of the wedding.
             People were asking me all night if they could take a centerpiece home I have attached a picture of me and 
             the girls from my wedding party with the flowers
        </p>
        <div class="user">
            <img src="images/pic-3.png" alt="">
            <div class="user-info">
                <h3>Sancho Martin</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>
            I ordered something small for my husband, knowing it was last minute and you would use what you had on hand...
            you went above and beyond anything I could have imagined! The arrangement was so beautiful. Most of all, timing
             was so very important, and even though it was Valentine's Day,you made an arrangement and delivered in the same day.
              Thank you is not enough! You have a new returning customer! God Bless you and all you do!
        </p>
        <div class="user">
            <img src="images/pic-2.png" alt="">
            <div class="user-info">
                <h3>Rose Sanchez</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

</div>
    
</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="index.php">home</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </div>

        

       

        

    </div>

    <div class="credit">  <span>  </span>Copyright ©2014 | All Rights Reserved</div>

</section>

<!-- footer section ends -->
+

















    
</body>
</html>















  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <center>
		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
    	<h1>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>
		<br>
	<h2><i><a href="index.php?logout='1'" style="color: red;">logout </p></i></h2>
    	
    <?php endif ?>
</div>
<br>
<br>
	</center>

</body>
</html>