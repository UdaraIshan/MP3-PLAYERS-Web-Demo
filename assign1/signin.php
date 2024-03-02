<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Creating web applications - about page" />
    <meta name="keywords" content="HTML, CSS" />
    <meta name="author" content="lasith charuka"/>
    <link href="styles/signin.css" rel="stylesheet">
</head>

<body>
    <?php include('topnav.php'); ?>

    <main>
        <div class="ing">
            <img src="images/m.jpeg" height="100px" width="200px">

        </div>
    <form method="post" action="signin.html">
        <h1>Enter your email to join us or sign in </h1>
        <h3>Change : 
        <select name="country" id="country" required="required"></h3>
            <option value="o1" selected="selected">Sri Lanka</option>
            <option value="o2">india</option>
            <option value="o3">Pakistan</option>
            <option value="o4">bangladesh</option>
            <option value="o5">bhutan</option>
            <option value="o6">indonesia</option>
            <option value="o7">Australia</option>
            <option value="o8">new zearland</option>
            <option value="o9">Tasmania</option>
            <option value="o10">Maldives</option>
            <option value="o11">USA</option>
            <option value="o12">England</option>
            <option value="o13">Uganda</option>
            <option value="o14">South africa</option>
            <option value="o15">Canada</option>
            <option value="o16">Austria</option>
            <option value="o17">Nederland</option>
            <option value="o18">Scotland</option>
            <option value="o19">Ireland</option>
            <option value="o20">Italy</option>
            <option value="o21">Germany</option>
            <option value="022">France</option>
            <option value="o23">Uae</option>
            <option value="o24">Portugal</option>
            <option value="o25">Argentina</option>
            <option value="o26">Brazil</option>

        </select>
       
            <br>
            <h4>Email : <input type="email"name="email"required></h4>
            <h4 class="head">By continuing I agree mp3 player <u>privacy and policies </u> and <u>terms and conditions</u></h4>
            <div class="btn1">
             <button  type="submit" value="continue" a href="index.html"></a>Continue</button>
            </div>
        </main>
        


    </form>



</body>