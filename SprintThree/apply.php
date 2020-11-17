<?php
include ('head.html');
?>

<body>

<div class="container" id="main">
    <div id="coloring" class="jumbotron">
        <h5 id="text"> <a href="index.html"> Home</a> </h5>
        <h3 id = "time"> You can apply by call or filling out the form below:</h3>
        <h3 id = "hour"> Call: 253-852-4100 </h3><br>
        <!--h3 id = "call" > OUT OF HOURS DEMO </h3--><br>
        <div id ="checkText" class="checkbox">
            <label><input type="checkbox" id="notresident" value="notresident" name="notresident"> I am currently without resident</label>
        </div>

        <div id = "zip" class = zipdiv>

            <input type="text"  name="zipcode"  id="zip-text" placeholder="Enter Zip Code">
           <br>
            <br>


            <button id = "zip-btn" type="button" class="btn btn-secondary btn-xs">check zipcode</button>

            <span class="err" id="errZip"></span>
        </div>




    </div>

    <form id="validationform" class = "validationform" method="post" action="thank.php">
        <fieldset class="form-group border p-2">
            <legend>What assistance are you seeking?</legend>


            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name='toppings[]' id="utility" value="utility">
                <label class="custom-control-label" for="utility">Utilities (electricity or water)</label>
                <span class="d-none" id="utilityInfo"><p>-1 time per calendar year<br>
-Person seeking help must also be name on bill<br>
-must have urgent or shut-off notice
                <label class = "coloring"> Optional (include picture of current bill showing name/address; Urgent/Final notice AND account #)</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile1">
                <label class="custom-file-label" for="customFile1">Choose file </label>
            </div>
                    </p></span>

            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="rent" name='toppings[]' value="rent">
                <label class="custom-control-label" for="rent">Rent</label>
                <span class="d-none" id="rentInfo"><p>-1 time per calendar year<br>
-Person seeking help must also be name on bill<br>
-must have urgent or shut-off notice<br>
                <label class = "coloring"> Optional (include an eviction notice)</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id = "customFile" >
                <label class="custom-file-label" for="customFile">Choose file </label>
            </div>
                    </p></span>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name='toppings[]' id="gas" value="gas">
                <label class="custom-control-label" for="gas">Gas</label>
                <span class="d-none" id="gasInfo"><p>-Every six months<br>
-Must have a valid/current Driver’s license not an ID card<br>
                <label class = "coloring"> Optional (Include picture of DL)</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" >
                <label class="custom-file-label" for="customFile">Choose file </label>
            </div>

                    </p></span>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input"  name='toppings[]' id="clothing" value="clothing">
                <label class="custom-control-label" for="clothing">Clothing & household items</label>
                <span class="d-none" id="clothingInfo"><p>-Every six months<br>
Good for clothing items and small household items
Thrift stores hours tba
</p></span>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input"  name='toppings[]' id="id" value="driver license">
                <label class="custom-control-label" for="id">ID or Driver’s License</label>
                <span class="d-none" id="idInfo"><p>-If seeking an ID card,
                check with DSHS to see if you qualify for a voucher, we’ll cover the difference<br>
                An appointment will be scheduled to meet with you at the <a href="https://goo.gl/maps/Ai6qcZA18oRXRw6U7">Dept of Licensing in Kent</a><br>


</p></span>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name='toppings[]' id="food" value="food">
                <label class="custom-control-label" for="food">Food</label>
            </div>
            <div class="d-none" id="foodInfo">
                <label>-Once per month</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name='toppings[]' id="other" value="other">
                <label class="custom-control-label" for="other">Other (please specify)</label>

                <input type="text" class="form-control d-none" id="otherInfo" name='otherInfo'  placeholder="Other">
                <span class="err" id="errothers"></span>

            </div>

            <span class="err" id="errToppings"></span>
        </fieldset>

        <br>
        <fieldset class="form-group border p-2">
            <legend>Your info</legend>
            <div class="form-group">
                <!-- bootstrap name -->
                <label for="name"> Enter your full name</label>

                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                <span class="err" id="errName"></span>
            </div>

            <!-- bootstrap email -->

            <div class="form-group">
                <label for="email">Enter a email address</label>
                <input type="text" class="form-control" id="email" name="email"  placeholder="Enter your email">
                <span class="err" id="errEmail" ></span>
            </div>
            <h5> or </h5>


            <div class="form-group">
                <label for="phone">Enter a phone number:</label>
                <input type="tel"  class="form-control" id="phone" name="phone" placeholder="123-45-678" >

            </div>

            <div class="address-field" id="address-section">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                    <span class="errAddress" id="errAddress"></span>

                </div>
            </div>

        </fieldset>
        <input type="submit" value="Submit your request">


    </form>
    <br>
    <br>

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="scripts/script.js"></script>

</body>
</html>