<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="cstyle.css">

</head>
<body>
<header class="header">

    <a href="login.php" class="logo">
        <img src="https://i.pinimg.com/474x/6c/24/db/6c24dbb19ec2c665d7ed97a8007554d8.jpg" alt="">
    </a>

    <nav class="navbar">
    <a href="Home.php">home</a>
        <a href="about.php">about</a>
        <a href="menu.php">menu</a>
        <a href="food.php">food</a>
        <a href="admin.php">logout</a>

    </nav>



</header>



</header>

<section class="about" id="menu">

    <h1 class="heading"> <span>Me</span>nu </h1>

    <div class="row">

        <div class="image">
            <img src="https://w0.peakpx.com/wallpaper/872/53/HD-wallpaper-cup-coffee-coffee-beans-splash-steam.jpg" alt="">
        </div>

        <div class="content">
            <h3>Coffee</h3>
            <p style=" color: white;" >
                    American <span style="float: right; ">&#8369 199.00</span>  <br>
                    Cappuccino<span style="float: right; ">&#8369 199.00</span> <br>
                    Caffee late<span style="float: right; ">&#8369 199.00</span>  <br>
                    Macchiato<span style="float: right; ">&#8369 199.00</span>  <br>
                    Caramel latte<span style="float: right; ">&#8369 199.00</span> <br>
                    Black tea<span style="float: right; ">&#8369 99.00</span><br>
                    Milk tea<span style="float: right; ">&#8369 99.00</span> <br>
                    Lychee tea<span style="float: right; ">&#8369 99.00</span> <br><br>
            </p>
            <h3>foods</h3>
            <p style="color: white;">
                    Cinnamon Danish<span style="float: right; ">&#8369 115</span> <br>
                    Banana Bread<span style="float: right; ">&#8369 85</span> <br>
                    Chocolate Cookie Sandwich<span style="float: right; ">&#8369 80</span> <br>
                    Triple Cheese Ensaymada<span style="float: right; ">&#8369 115</span> <br>
                    Sausage Roll<span style="float: right; ">&#8369 130</span> <br>
                    Dark Chocolate Macadamia Cookie<span style="float: right; ">&#8369 65</span> <br>
            </p>

        </div>

    </div>

</section>

<section class="report">
<form action="https://formsubmit.co/christopherrey.reyes@gmail.com" target="_blank" method="POST" />
    <div class="contact-box">
			<div class="left"></div>
			<div class="right">
                <form action="php/send.php" method="POST">
                <h2>ORDER NOW</h2>
                Email<input type="text" class="field" name="toemail" placeholder="Your Email">
				username<input type="text" class="field" name="fname" placeholder="Your Name">
				Message<textarea placeholder="Message" name="usermessage" class="field"></textarea>
				<button class="bts-btn" name="send">Send</button>
                </form>
			</div>
		</div>
    </form>
		
</section>

</body>
</html>