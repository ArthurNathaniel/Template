<?php include('server.php') ?>
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


<header>

<input type="checkbox" name="" id="toggler">
<label for="toggler" class="fas fa-bars"></label>

<a href="index.php" class="logo">My flower<span>.</span></a>

<nav class="navbar">
	<a href="login.php">Login</a>
	<a href="register.php">Sign Up</a>
</nav>


</header>



  <section class="contact" id="contact">


<div class="row">

<form method="post" action="login.php">
<?php include('errors.php'); ?>
        <label>Username</label>
		<input type="text" name="username" placeholder="Enter your username" class="box">
		<label>Password</label>
		<input type="password" name="password" placeholder="Enter your password" class="box">
		
		<button type="submit" class="btn" name="login_user">Login</button>
		<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
	</form>

	

	<div class="image">
		<img src="images/contact-img.svg" alt="">
	</div>

</div>
</section>


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






























</body>
</html>