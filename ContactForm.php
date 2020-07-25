<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BCB Contact Us</title>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="Validation.js" defer></script>
    <link rel="icon" href="image/BCBIcon.PNG">
    <style>
        form {
            float: right;
            border: 1px solid black;
            background-color: floralwhite;
            padding: 15px;
            display: grid;
            grid-template-rows: repeat(11, 4vh);
            grid-template-columns: repeat(4, 15vw);
            grid-gap: 30px;
        }

        .label {
            border: 1px solid black;
            padding: 5px;
            width: auto;
            font-weight: bold;
            background-color: white;
        }

        .input {
            width: auto;
            grid-column: span 3;
        }

        .contact {
            display: grid;
            grid-template-columns: 1fr;
        }

        .radio {
            grid-column: 2 / span 1;
        }

        .message {
            grid-column: 1 / span 4;
            grid-row: span 2;
        }

        .messageLabel {
            grid-column: 1 / span 4;
            border: 1px solid black;
            padding: 5px;
            width: auto;
            font-weight: bold;
            background-color: white;
        }

        .check {
            grid-column: 1 / span 2;
        }

        #error {
            color: red;
            grid-row: span 2;
            grid-column: span 2;
        }
        label{
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
    </style>
</head>
<body>
<div id="navBar"></div>
<div style="display: block;float:left;margin-left:150px;">
    <h1>Contact Us!</h1><br>
</div>
<img src="https://lh3.googleusercontent.com/proxy/5ZTXJU4wCWGJTPUqt4TjDZZwWhEOh2fLwl6mxcERwbNvgLnxk1zcj8ek9KPaSfBgsX
MqRCg5nS5Oj7j6K0HYkyZKQiXja6_sj2lJSkunj5lMv0UVXVvp7lysSpc8E9e_61w4QriABxMpsYk"
     alt="Breast Cancer Buddies Icon" style="float:left;width:400px;position:absolute;top:150px;left:37px;">
<?php
if (!(empty($_POST['name']))){
    echo '<h2 style="text-align:center;">Thanks for submitting!</h2>';
    if (!(empty($_POST['communication']))){
        echo '<h2 style="text-align:center;">Check your email for future updates!</h2>';
    }
    /*
    Could not figure out in time.

    $serv = mysqli_connect('127.0.0.1', 'root', '');

    if (!$serv){
        echo '<h2 style="text-align:center;">Not Connected To Server</h2>';
    }

    if (!mysqli_select_db($serv,'form_data')){
        echo '<h2 style="text-align:center;">Database Not Selected</h2>';
    }*/
}
else{
echo '<form action="ContactForm.php" method="POST" id="form">
        <label class="label" for="name">Name</label>
        <input class="input" type="text" name="name" id="name" placeholder="ex: John D. Doe or &#34;Anonymous&#34; if you would like">
        <label class="label" for="email">Email</label>
        <input class="input" type="text" name="email" id="email" placeholder="ex: youremail@example.com">
        <label class="label" for="name">You are a...</label>
        <div class="radio">
            <input type="checkbox" id="fighter" name="fighter">
            <label for="fighter">Current Fighter</label>
        </div>
        
        <label class="label" for="birthday">Birthday</label>
        <input type="date" name="birthday" id="birthday">


        <div class="radio">
            <input type="checkbox" id="survivor" name="survivor">
            <label for="survivor">Survivor</label>
        </div>
        <div class="radio">
            <input type="checkbox" id="staff" name="staff">
            <label for="staff">Medical Staff</label>
        </div>
        <div class="radio">
            <input type="checkbox" id="family" name="family">
            <label for="family">Family</label>
        </div>
        <label class="messageLabel" for="name">What would you like to tell us?</label>
        <textarea class="message" name="message" id="message" placeholder="Write a message to us!"></textarea>
        <div class="check">
            <input type="checkbox" id="communication" name="communication">
            <label for="communication">I would like to receive newsletters and communication emails.</label>
        </div>
        <div id="error"></div>
        <input type="button" value="Submit" id="button" onclick="validation()">
    </form>
</div>';
}
?>

<script>
    $.get("NavBar.html", function (data) {
        $("#navBar").replaceWith(data);
    })
</script>
</body>
</html>