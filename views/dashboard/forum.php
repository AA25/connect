<?php
    require './controllers/php/checkLoginController.php';
    $cookieJWT = new Jwt ($_COOKIE['JWT']);
    $userVerifiedData = $cookieJWT->getDataFromJWT($cookieJWT->token);
    if(!$cookieJWT->verifyJWT($cookieJWT->token)){
        //If the user is not an authenticated user then they will be redirected to the home page
        header('Location: http://localhost:8081/home');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connect Forum Page</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/connectStyle.css"/>
</head>
<body>

    <?php
        include('./includes/dashboardNavbar.inc.php');
    ?>

    <div class="padt-56 h-100p">
        <div class="section h-100p">
            <div class="row h-100p" style="">

                <!-- Left hand column -->
                <div id="dashboardSidebar" class="col-sm-12 col-md-5 col-lg-3 padb-20 padr-0 section sidebar-border-connect">

                    <div id="dashboardSidebarOptions" class="row padt-20 navbar-bg" style="border-bottom: 1px solid black;">
                        <div class="col-sm-12 padl-30 txt-ctr">
                            <h5 class="cl-blue-connect">
                                Proceed to the next stage
                            </h5>
                            <button class="btn cl-white bg-cl-blue-connect">Proceed</button>
                            <p class="cl-white padt-5">
                                To proceed forward ensure all the developers are ready, indicated by a 
                                <i class="fa fa-check cl-success" aria-hidden="true"></i>
                            </p>
                        </div>
                    </div>

                    <ul class="padl-0">
                        <li class="padl-20 padr-10 padt-10 padb-10 cl-black-connect" style="border-bottom: 1px solid black; list-style-type: none;">
                            Ademola Akingbade <i class="fa fa-check cl-success pull-right" aria-hidden="true"></i>
                        </li>
                        <li class="padl-20 padr-10 padt-10 padb-10 cl-black-connect" style="border-bottom: 1px solid black; list-style-type: none;">
                            Hichame Ouamer <i class="fa fa-check pull-right" aria-hidden="true"></i>
                        </li>
                    </ul>
                </div>

                <!-- Right hand column -->
                <div class="col-sm-12 col-md-7 col-lg-9 pad-30 section-alt" style="">
                    <h4 class="cl-blue-connect marb-20 txt-ctr">
                        Welcome to the message board
                        <i class="fa fa-refresh cl-blue-connect" aria-hidden="true"></i>
                    </h4>
                    <div id="renderOption" class="">
                        <!-- Messages -->
                        <div id="messages" class="scrollable row" style="height:550px">
                            <div class="col-sm-9 push-sm-1">
                                <p class="speech-bubble padl-20 padr-20 padt-10 padb-10">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    <br>
                                    <span class="txt-right cl-white fs-11">
                                        Ademola Akingbade 25th June 1994 10:50pm
                                    </span>
                                </p>
                                <p class="speech-bubble padl-20 padr-20 padt-10 padb-10">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    <br>
                                    <span class="txt-right cl-white fs-11">
                                        Ademola Akingbade 25th June 1994 10:50pm
                                    </span>
                                </p>
                                <p class="speech-bubble padl-20 padr-20 padt-10 padb-10">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    <br>
                                    <span class="txt-right cl-white fs-11">
                                        Ademola Akingbade 25th June 1994 10:50pm
                                    </span>
                                </p>
                            </div>
                        </div>
                        <!-- Input box -->
                        <div class="row mart-10">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-9">
                                        <form method="post" action="" id="messagePost">
                                            <div class="form-group">
                                                <textarea id="messageInputted" class="form-control" rows="5" placeholder="Enter a message" name="messageInputted" ></textarea>
                                                <div>
                                                    <span class="fs-14" id="projectBioCount"></spanh6>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-12 col-lg-2">
                                        <div class="txt-ctr">
                                            <button type="submit" class="btn cl-white bg-cl-blue-connect mart-30" style="">Post Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
    <script src="/controllers/js/jQuery/jquery.min.js"></script>
    <script src="/controllers/js/tether/tether.min.js"></script>
    <script src="/controllers/js/bootstrap/bootstrap.min.js"></script>
    <script src="/controllers/js/smoothScroll/smoothScroll.js"></script>
    <script src="/controllers/js/navbarController.js"></script>
    <script src="/controllers/js/messageboardController.js"></script>
</html>