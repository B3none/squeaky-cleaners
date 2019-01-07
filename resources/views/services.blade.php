<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Squeaky Cleaners</title>

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <style>
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        section{
            padding: 60px 0;
        }
        section .section-title{
            text-align:center;
            color:#007b5e;
            margin-bottom:50px;
            text-transform:uppercase;
        }
        #services .card{
            padding: 1rem!important;
            border: none;
            margin-bottom:1rem;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }
        #services .card:hover{
            -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        }
        #services .card .card-block{
            padding-left: 50px;
            position: relative;
        }
        #services .card .card-block a{
            color: #007b5e !important;
            font-weight:700;
            text-decoration:none;
        }
        #services .card .card-block a i{
            display:none;

        }
        #services .card:hover .card-block a i{
            display:inline-block;
            font-weight:700;

        }
        #services .card .card-block:before{
            font-family: FontAwesome;
            position: absolute;
            font-size: 39px;
            color: #007b5e;
            left: 0;
            -webkit-transition: -webkit-transform .2s ease-in-out;
            transition:transform .2s ease-in-out;
        }
        #services .card .block-1:before{
            content: "\f0e7";
            color: #00c1c7;
        }
        #services .card .block-2:before{
            content: "\f0eb";
            color: #00c1c7;
        }
        #services .card .block-3:before{
            content: "\f00c";
            color: #00c1c7;
        }
        #services .card .block-4:before{
            content: "\f209";
            color: #00c1c7;
        }
        #services .card .block-5:before{
            content: "\f0a1";
            color: #00c1c7;
        }
        #services .card .block-6:before{
            content: "\f218";
            color: #00c1c7;
        }
        #services .card:hover .card-block:before{
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }
    </style>
</head>
<body>
@include('partials/navbar')

<!-- Services section -->
<section id="services">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb40 text-center">
                <h1>Services</h1>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-block block-1">
                        <h3 class="card-title">Special title</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-block block-2">
                        <h3 class="card-title">Special title</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-block block-3">
                        <h3 class="card-title">Special title</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-block block-4">
                        <h3 class="card-title">Special title</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-block block-5">
                        <h3 class="card-title">Special title</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-block block-6">
                        <h3 class="card-title">Special title</h3>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Services section -->

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="js/app.js"></script>
</body>
</html>
