<?php
include "includes/session_include.php";
include "dbconnect.php";
include "pages.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ebook - Free Landing Page for Ebook</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="description" content="Book, Article & Papers reading site">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/sign-up.css">


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400&family=Merriweather:wght@300;400;700;900&display=swap"
          rel="stylesheet">

</head>
<body class="bg-body" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%"
      data-bs-smooth-scroll="true" tabindex="0">

<div class="main_body" id="main_body">

</div>


<!--JavaScript-->
<script src="js/jquery-3.7.1.min.js"></script>
<!--JavaScript End-->

</body>
</html>

<script>
    $(document).ready(() => {
        $.ajax({
            url: 'pages.php',
            type: 'POST',
            data: {action: "landingPage"},
            success: (response) => {
                console.log('Triggered')
                $('#main_body').html(response);
            },
            error: (response) => {
                $('#main_body').value = "<h1>Something Went Wrong</h1>";
            }
        })
    })

    $(document).on('click', '#user-login', (event) => {
        event.preventDefault();
        $.ajax({
            url: 'pages.php',
            type: 'POST',
            data: {action: "login"},
            success: (response) => {
                $('#main_body').html(response);
            },
            error: (response) => {
                $('#main_body').html("<h1>Something Went Wrong</h1>");
            }
        })
    })

    $(document).on('click', '#user-signup', (event) => {
        event.preventDefault();
        $.ajax({
            url: 'pages.php',
            type: 'POST',
            data: {action: "signup"},
            success: (response) => {
                $('#main_body').html(response);
            },
            error: (response) => {
                $('#main_body').html("<h1>Something Went Wrong</h1>");
            }
        })
    })
</script>