<?php

/* confirmation.php

 * Gets data from apply.php

 * 10/26/2020

 */



// Turn on error reporting

ini_set('display_errors', 1);

error_reporting(E_ALL);
//redirect if the form has not been submited
if(empty($_POST)){
    header("location: apply.php");
}
date_default_timezone_set( 'America/Vancouver');
include ('head.html');
require ('dbcreds.php');
?>

<body>
<div class="container" id="main">



    <!-- Jumbotron header -->

    <div class="jumbotron">
        <h5 id="text"> <a href="index.html"> Home</a> </h5>

        <h1 class="display-4">Welcome to Outreach Kent</h1>

        <p class="lead">Serving the Kent community for more than 30 years!</p>

    </div>



    <h3>Thank you for your request, we will reach you soon!</h3>



    <h2>Info Summary</h2>



    <?php



    //Get data from POST array

    $lname = $_POST['name'];
    //$zipcode = $_POST['zipcode'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $otherRequest = $_POST['otherInfo'];


    $toppings = implode(", ", $_POST['toppings']);


    $fromName = $lname;

    $fromEmail = $email;


    //Print order summary
    if($address == "") {
        $address = "not currently permanent resident";
    }
    if($phone == "") {
        $phone = "not provided";
    }
    if($email == "") {
        $email = "not provided";
    }

//save request to database

    if($toppings == $otherRequest){
       $toppings.$otherRequest;
    }
    $sql = "INSERT INTO request(`name`,`email`,`phone`,`needs`) 
    VALUES ('$lname', '$email', '$phone', '$toppings $otherRequest')";
    $success = mysqli_query($cnxn, $sql);
    if(!$success){
        echo "<p> sorry... something went wrong</p>";
        return;
    }

    echo "<p>Name:  $lname</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Address: $address</p>";
   // echo "<p>zipcode: $zipcode</p>";
    echo "<p>Item requested: $toppings $otherRequest</p>";
    echo "<p>Phone: $phone</p>";

    //Send email

    $to = "smehri@mail.greenriver.edu";

    $subject = "Pizza Order Placed";

    $message = "Request from:  $lname\r\n";
    $message .= "Email Address:  $email\r\n";
    $message .= "Phone:  $phone\r\n";

    $message .= "Address: $address\r\n ";

    //$message .= "Zipcode:  $zipcode\r\n";

    $message .= "Item requested: $toppings $otherRequest\r\n";


    $headers = "Name: $fromName <$fromEmail>";



    $success = mail($to, $subject, $message, $headers);

    //Check success

    echo $success ? "<p>Your request has been placed.</p><br>" :

        "<p>Sorry... there was a problem.</p><br>";

    ?>

</div>

</body>
</html>
