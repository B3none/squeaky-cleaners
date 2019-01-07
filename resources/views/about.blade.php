<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Squeaky Cleaners</title>

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet" type="text/css">

    <style>
        .content{padding-top:80px; padding-bottom:80px;}
        .mb40{margin-bottom:40px;}
        .team-block { margin-bottom: 20px; }
        .team-content { position: absolute; background-color: rgba(17, 24, 31, 0.8); bottom: 0; display: inline-block; width: 100%; color: #fff; padding: 30px; left: 0;}
        .team-img { position: relative; }
        .team-img img { width: 100%; }
        .team-title { }
        .team-meta { color: #9da4aa; font-weight: 400; font-size: 16px; }
        .overlay { border-radius: 0px; position: absolute; top: 0; bottom: 0; left: 0; right: 0; height: 100%; width: 100%; opacity: 0; transition: 1s ease; background-color: #11181f; }
        .team-img:hover .overlay { opacity: .8; }
        .team-img:hover .team-content { opacity: 0; }
        .text { color: #fff; position: absolute; top: 30%; left: 30%; transform: translate(-26%, -26%); -ms-transform: translate(-26%, -26%); right: 0; font-weight: 400; font-size: 16px; }
    </style>
</head>
<body>
@include('partials/navbar')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb40 text-center">
                <h1>Staff List</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- team-img -->
                <div class="team-block">
                    <div class="team-img">
                        <img src="https://easetemplate.com/free-website-templates/motion/images/team_member_1.jpg" alt="">
                        <div class="team-content">
                            <h4 class="text-white mb0">Eliza Simon</h4>
                            <p class="team-meta">- Producer</p>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h4 class="mb0 text-white">Eliza Simon</h4>
                                <p class="mb30 team-meta">- Producer</p>
                                <p>Mauris tincidunt dolor eget diam dapibus vitae finibusnisl friuisque pretiuam egete euismod justam ac temlibern rutrum nisli in mi rhoncac pharetra odioacin ntesque dictum vel risus quis egeaecenas necese purus quaroin tincidunt neque malesuda vulputate lecton pretiume.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.team-img -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- team-img -->
                <div class="team-block">
                    <div class="team-img">
                        <img src="https://easetemplate.com/free-website-templates/motion/images/team_member_2.jpg" alt="">
                        <div class="team-content">
                            <h4 class="text-white mb0">Gerald Ferguson</h4>
                            <p class="team-meta">- Creative Director</p>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h4 class="mb0 text-white">Gerald Ferguson</h4>
                                <p class="mb30 team-meta">- Creative Director</p>
                                <p>Mauris tincidunt dolor eget diam dapibus vitae finibusnisl friuisque pretiuam egete euismod justam ac temlibern rutrum nisli in mi rhoncac pharetra odioacin ntesque dictum vel risus quis egeaecenas necese purus quaroin tincidunt neque malesuda vulputate lecton pretiume.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.team-img -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- team-img -->
                <div class="team-block">
                    <div class="team-img">
                        <img src="https://easetemplate.com/free-website-templates/motion/images/team_member_3.jpg" alt="" class="img-fluid">
                        <div class="team-content">
                            <h4 class="text-white mb0">William Murphy</h4>
                            <p class="team-meta">- Project Manager</p>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h4 class="mb0 text-white">William Murphy</h4>
                                <p class="mb30 team-meta">- Project Manager</p>
                                <p>Mauris tincidunt dolor eget diam dapibus vitae finibusnisl friuisque pretiuam egete euismod justam ac temlibern rutrum nisli in mi rhoncac pharetra odioacin ntesque dictum vel risus quis egeaecenas necese purus quaroin tincidunt neque malesuda vulputate lecton pretiume.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.team-img -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- team-img -->
                <div class="team-block">
                    <div class="team-img">
                        <img src="https://easetemplate.com/free-website-templates/motion/images/team_member_4.jpg" alt="" class="img-fluid">
                        <div class="team-content">
                            <h4 class="text-white mb0">Barbara Cook</h4>
                            <p class="team-meta">- Producer</p>
                        </div>
                        <div class="overlay">
                            <div class="text">

                                <h4 class="text-white mb0">Barbara Cook</h4>
                                <p class="mb30 team-meta">- Producer</p>
                                <p>Mauris tincidunt dolor eget diam dapibus vitae finibusnisl friuisque pretiuam egete euismod justam ac temlibern rutrum nisli in mi rhoncac pharetra odioacin ntesque dictum vel risus quis egeaecenas necese purus quaroin tincidunt neque malesuda vulputate lecton pretiume.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.team-img -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- team-img -->
                <div class="team-block">
                    <div class="team-img">
                        <img src="https://easetemplate.com/free-website-templates/motion/images/team_member_5.jpg" alt="" class="img-fluid">
                        <div class="team-content">
                            <h4 class="text-white mb0">Derek Bybee</h4>
                            <p class=" mb30 team-meta">- Creative Director</p>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h4 class="text-white mb0">Derek Bybee</h4>
                                <p class=" mb30 team-meta">- Creative Director</p>
                                <p>Mauris tincidunt dolor eget diam dapibus vitae finibusnisl friuisque pretiuam egete euismod justam ac temlibern rutrum nisli in mi rhoncac pharetra odioacin ntesque dictum vel risus quis egeaecenas necese purus quaroin tincidunt neque malesuda vulputate lecton pretiume.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.team-img -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- team-img -->
                <div class="team-block">
                    <div class="team-img">
                        <img src="https://easetemplate.com/free-website-templates/motion/images/team_member_6.jpg" alt="" class="img-fluid">
                        <div class="team-content">
                            <h4 class="text-white mb0">Lucille Webster</h4>
                            <p class=" mb30 team-meta">- Cinematographer + Steadicam Operator</p>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h4 class="text-white mb0">Lucille Webster</h4>
                                <p class="team-meta">- Cinematographer + Steadicam Operator</p>
                                <p>Mauris tincidunt dolor eget diam dapibus vitae finibusnisl friuisque pretiuam egete euismod justam ac temlibern rutrum nisli in mi rhoncac pharetra odioacin ntesque dictum vel risus quis egeaecenas necese purus quaroin tincidunt neque malesuda vulputate lecton pretiume.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.team-img -->
        </div>
    </div>
</div>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="js/app.js"></script>
</body>
</html>
