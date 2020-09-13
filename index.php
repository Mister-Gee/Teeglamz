<?php include("includes/array.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="apple-mobile-web-status-bar-style" content="#000000">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Tee Glamz Makeup</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">BLOG</a></li>
                <li class="mobile"><a href="#">CONTÀCT</a></li>
                <li class="mobile"><a href="#">ÀBOUT US</a></li>
                <li class="logo"><a href="index.html">TEE GLÀMZ MÀKEUP</a></li>
                <li class="desktop"><a href="#">CONTÀCT</a></li>
                <li class="desktop"><a href="#">ÀBOUT US</a></li>
            </ul>

        </nav>
<div class="words">
<span class="text1">Welcome to</span>
<span class="text2">TeeGlamz Makeup</span>
</div>
    </header>
    <hr>
    <section class="philosophy">
        <h1>Tee Glamz's Philosophy of Exquisite Makeup</h1>
        <p>Here at Tee Glamz's, we know that good Makeup isn't just about how expensive it is. We're not pompous, we're proud. We're proud of our work, our quality, our environment, and our love for good makeup</p>
    </section>
    <hr>

    <section>
        <h1> Previous Works</h1>
        <div class="pic">
            <img src="img/c.png" width="240px" height="360">

            <img src="img/d.png" width="240px" height="360">

            <img src="img/e.png" width="240px" height="360">

            <img src="img/z.png" width="240px" height="360">
        </div>
        <hr>
        <div class="pic">
            <img src="img/f.png" width="240px" height="360">

            <img src="img/x.png" width="240px" height="360">
            <img src="img/y.png" width="240px" height="360">

            <img src="img/g.png" width="240px" height="360">
        </div>

    </section>
    <hr>
    <footer>
        <div class="bb">
            <div class="footer">
                <div class="gt three">
                    <strong> Phone Number </strong>
                    <p> +2348108272935</p>
                </div>
                <div class="gt three">
                    <strong> Location </strong>
                    <p>Akobo, Ibadan, Oyo State,
                        <br>Nigeria</p>
                </div>
                <div class="gt">
                    <strong> Services </strong><br>
                    <?php foreach($services as $service) { ?>
                    <ul>
                        <li>
                            <?php echo $service?>
                        </li>
                    </ul>
                    <?php }?>
                </div>
                <small>&copy <?php echo date('Y'); ?> -- Oladeji Tobi</small>
    </footer>
</body>

</html>