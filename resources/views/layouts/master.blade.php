
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
    <style>

        footer {
            background-color: #f2f2f2;
            padding: 16px;
        }

        @media screen and (max-width: 768px){
            *[class*='col-xs']{
                padding:12px;
            }
        }

        .carousel-inner img {
            width: 100%; /* Set width to 100% */
            min-height: 200px;
        }

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
            }
        }

        .txtj {
            font: 14px "Montserrat", sans-serif;
            line-height: 1.8;
            color: #5d5d5d;
        }

        .full-width {
        // background-color: #2F4858; // #33658A; #D9F0FF;
        }

        .panel > .panel-heading {
            background-image: none;
            background-color: #2F4858;
            color: white;
        }

    </style>
</head>
<body style="font-family: Montserrat;">

<!-- Static navbar -->
@include('layouts.nav')

@yield('content')

<footer class="container-fluid text-center">
    Definitely NOT a product of ARE Event Productions, Inc.
</footer>

</body>
</html>
