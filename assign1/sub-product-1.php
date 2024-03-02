<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Creating web applications - products pages" />
  <meta name="keywords" content="HTML, CSS" />
  <meta name="author" content="Udara Ishan" />
  <title> products </title>
  <link rel="stylesheet" href="styles/sub-product-1.css">
</head>

<body>

  <?php include('topnav.php'); ?>

  <div class="top">

    <div class="header">
      <img class="logo" src="images/soni.jpeg" alt="Soni logo">
      <h1 class="title-txt"> XY7Z - Gen 01 </h1>
    </div>

    <div class="main-area">
      <div class="about-item">
        <p class="txt"> XY7Z - Gen 01 is a premium Walkman designed for optimal sound quality. Feel every note and nuance
          with High-Resolution Audio and hear the difference in your music with balanced sound, anywhere you go.</p>
        <p class="txt">Elevating the high-resolution sound experience from one you listen to, to one you can feel.</p>
      </div>

      <div class="features">
        <h2 class="inside-heading-txt">Features</h2>
        <ul class="feature-list">
          <li class="item">High-Resolution Audio compatible</li>
          <li class="item">S-Master HX digital amplifier for pure sound quality</li>
          <li class="item">DSEE HX upscaling restores quality to compressed files</li>
          <li class="item">Balanced output for clear, natural sound</li>
          <li class="item">128GB capacity (up to 800 High-Resolution Audio tracks)</li>
        </ul>
      </div>

      <div class="item-image">
        <img class="product" src="images/XY7Z.jpg" alt="XY7Z - Gen 01">
      </div>
    </div>

    <p class="txt">Soni is committed not only to offering products, services and content that deliver exciting
      experiences but also to
      working towards our goal of a zero environmental footprint throughout our business activities. Learn more about
      Soni and the Environment</p>
      <br>

  </div>

  <div style="text-align: center;">
    <button onclick="location.href = 'payment.php'" type="submit" style="display: inline-block; border-radius: 4px; background-color: #000000; 
    border: none; color: #FFFFFF; text-align: center; font-size: 17px; padding: 10px; width: 180px; height: 50px; transition: all 0.5s; cursor: pointer; margin: 5px;">
        <span> Buy Now </span>
    </button>
  </div>



  <br><br>

  <footer>
    <div class="footer">
      <div class="col-1">
        <h3>Useful link</h3>
        <a href="index.html">Home</a>
        <a href="product.html">Product</a>
        <a href="enquiry.html">Enquiry</a>
        <a href="about.html">About</a>

      </div>
      <div class="col-2">
        <h3>NEWSLETTER</h3>
        <form>

          <input class="s1" type="email" placeholder="Your email address" required><br>

          <button class="pe2" type="submit">SUBSCRIBE NOW</button>

        </form>

      </div>
      <div class="col-3">
        <h3>Contact us</h3>
        <P>Ward Place,Colombo 03<br>Sri lanaka</P>

      </div>

    </div>

  </footer>

</body>

</html>