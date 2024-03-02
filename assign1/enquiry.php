<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Contact Us" />
    <meta name="keywords" content="Group Activity" />
    <meta name="author" content="Dilmin Rashmika" />
    <link rel="stylesheet" href="styles/enquiry.css">
   

    <title>CONTACT US</title>
</head>

<body>

<?php include('topnav.php'); ?>

    <img class="fmoving" c id="img1" src="images/anim1.png" alt="animation" height="100px" width="100px">
    <img class="rmoving" id="img2" src="images/anim1.png" alt="animation" height="100px" width="100px">
    <img class="fmoving" id="img3" src="images/anim1.png" alt="animation" height="100px" width="100px">
    <img class="rmoving" id="img4" src="images/anim1.png" alt="animation" height="100px" width="100px">
    <img class="fmoving" id="img5" src="images/anim1.png" alt="animation" height="100px" width="100px">
    <img class="rmoving" id="img6" src="images/anim1.png" alt="animation" height="100px" width="100px">
    <img class="fmoving" id="img7" src="images/anim1.png" alt="animation" height="100px" width="100px">


    <div class="ing">
        <form action="https://mercury.swin.edu.au/it000000/formtest.php" method="post">




            <!--<a href="imsert the link here"-->
            <centre>
                <header>
                    <h1 id="hi">CONTACT US</h1>
                </header>
            </centre>
            <!--
         <div class="imgedit">
            <img id="img1" src="anim1.png" alt="animation">
            <img id="img2" src="anim2.png "  alt="animation">
         </div>  
        -->
            <div class="details">
                <fieldset>
                    <div class="container">
                        <!--name-->
                        <legend id="legend_details">Details</legend>



                        <label for="First_name">First name</label>
                        <input type="text" name="First name" maxlength="25" pattern="[a-zA-Z]{0,25}"
                            required="required" />&nbsp;&nbsp;&nbsp;

                        <label for="Last_name">Last name</label>
                        <input type="text" name="Last name" maxlength="25" pattern="[a-zA-Z]{0,15}"
                            required="required" />
                        <br><br>
                        <!--email-->
                        <label for="email">Email</label>
                        <input type="email" name="email" required="required" />
                        <br><br>





                        <fieldset>
                            <div class="adress">

                                <label for="Street_Adresss">Street_Adresss</label>
                                <input type="text" name="Street_Adresss" maxlength="40" size="40" required="required" />
                                <br><br>
                                <label for="Suburb/town">Suburb/town</label>
                                <input type="text" name="Suburb/town" maxlength="20" size="20" required="required" />
                                <br><br>
                                <label for="Districts">District</label>
                                <select  class="font" name="Districts" id="Districts" required="required">
                                    <option value="Please select" selected="selected">Please select</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Kalutara">Kalutara</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Hambantota">Hambantota</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Mullaitivu">Mullaitivu</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Batticaloa">Batticaloa</option>
                                    <option value="Ampara">Ampara</option>

                                </select>
                                <br><br>
                                <label for="post_code">Post code</label>
                                <input type="text" name="post code" id="post_code" size="4" maxlength="4"
                                    pattern="\d{4}" required="required">
                            </div>
                        </fieldset>
                        <br>
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" maxlength="12" size="12" placeholder="###-###-####"
                            pattern="\d{3}.\d{3}.\d{4}" required="required">
                        <br><br>
                        <label for="contact">Preferred Contact</label>
                        <br>
                        <label><input type="checkbox" name=" Preferred Contact[]" id="contact">E-mail</label>
                        <label><input type="checkbox" name=" Preferred Contact[]" id="contact">Post</label>
                        <label><input type="checkbox" name=" Preferred Contact[]" id="contact">Phone</label>
                        <br><br>
                        <label for="products">Products : </label>
                        
                          <select name="Sony" class="font" required="required">
                            <option value="category1">Soni</option >
                            <option value ="XY7Z-GEN" >XY7Z-GEN 1</option>
                            <option value ="XY7R-LK" >XYZR-LK</option>
                            <option value="AN4-GLOBAL">AN4-GLOBAL</option>
                            <option value="no product selected">unselect product</option>
                          </select>
                          
                          <select name="Taple" class="font" required="required">
                            <option value="category2">Taple</option>
                            <option value="TAPLE-CLASSIC">TAPLE-CLASSIC</option>
                            <option value="TAPLE-Genz">TAPLE-Genz</option>
                            <option value="TAPLE-NW-02">TAPLE-NW-02</option>
                            <option value="no product selected">unselect product</option>
                          </select>
                          
                        
                          
                        <br> <br>

                        <label for="pfeatures">Product features : </label>
                        <br>
                        
                        <input type="checkbox" name="product features[]" id="pfeatures" value="Storage Capacity"
                            required="required">Storage Capacity
                        <input type="checkbox" name="product features[]" id="pfeatures" value="Water resistance"
                            >Water Resistance
                        <input type="checkbox" name="product features[]" id="pfeatures" value="Software Compatibility"
                            >Software Compatibility
                            <br>
                        <input type="checkbox" name="product features[]" id="pfeatures" value="User interface/Display"
                            >User Interface/Display
                        <br><br>
                        <label for="comments">Comments</label>
                        <br><br>
                        <textarea name="Comments" id="comments" cols="70" rows="10"
                        placeholder=
                        "Feel free to inquire about product details. We are here to assist with any questions you may have regarding our MP3 players. Your satisfaction is our priority!"></textarea>

                            <img id="gif" src ="images/gif.gif" alt="gif">
                    
                            

                    </div>


                    <!-- submit and reset -->

                    <div class="center">
                        <button class="format0" type="submit" value="Book">Submit</button><br><br>
                        <button class="format1" type="reset" value="Reset">Reset</button>

                    </div>
            </div>
            </fieldset>
        </form>
        <?php include('footer.php'); ?>

</body>

</html>