<?php 
// require __DIR__."/includes/init.inc.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connect Homepage</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/connectStyle.css"/>
    <!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
</head>

<body id="top">

    <?php include('./includes/navBar.inc.php')?>

    <div id="registerContent" class="padt-56">

        <div class="section-alt padb-40">
            <div class="container">
                <div class="padt-40 padb-60">
                    <div class="padb-20">
                        <h5 class="cl-blue-connect">
                            Register Your Business 
                        </h5>
                        <h6>
                            And be one step closer to listing your project on the marketplace
                        </h6>
                    </div>
                    <form method="post" action="" id="registerBusForm" class="">
                        <div class="pad-30 marb-30 bg-cl-white bord-rd" style="border-style: solid; border-width:1px; border-color:#1a1a1a;">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" placeholder="Enter your username" name="username" maxlength="100" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="firstName">First Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter your name" name="firstName" maxlength="56" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="lastName">Last Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter your last name" name="lastName" maxlength="56" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="password">password:</label>
                                    <input type="password" class="form-control" placeholder="Enter password" name="password" maxlength="500" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="email">email:</label>
                                    <input type="email" class="form-control" placeholder="Enter email" name="email" maxlength="56" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="phone">Phone number:</label><br>
                                    <input type="phone" class="form-control" placeholder="Enter phone number" name="phone" maxlength="45" required>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="pad-30 marb-20 bg-cl-white bord-rd" style="border-style: solid; border-width:1px; border-color:#1a1a1a;">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="busName">Company Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter your companies name" name="busName" maxlength="56" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="busIndustry">Industry:</label>
                                    <!-- <input type="text" class="form-control" placeholder="Your companies industry" name="busIndustry" > -->
                                    <select class="form-control" name="busIndustry" required>
                                        <option selected disabled>Your companies industry</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Sales">Sales</option>
                                        <option value="Advertising">Advertising</option>
                                        <option value="Insurance">Insurance</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Consultant">Consultant</option>
                                        <option value="Communication">Communication</option>
                                        <option value="Food Produce">Food Produce</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label for="busBio">Companies Bio:</label>
                                    <textarea id="busBio" class="form-control" rows="8" placeholder="Enter a description of your company" name="busBio" maxlength="500" required></textarea>
                                    <div>
                                        <span class="fs-14" id="busBioCount"></spanh6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn cl-white bg-cl-blue-connect pull-right pointer">Register Your Business</button>
                    </form>
                </div>
            </div>
        </div>

        <div id="alertContainer" class="alertPosition disp-none">
            <div class="alert alert-warning alert-dismissible fade show alertError disp-none" role="alert">
                <button type="button" class="close cl-white" data-dismiss="alert" aria-label="Close">
                    <span class="alertClose" aria-hidden="true">&times;</span>
                </button>
                <strong>Error</strong>
                <p class="marb-0">
                </p>
            </div>
            <div class="alert alert-success alert-dismissible fade show alertSuccess disp-none" role="alert">
                <button type="button" class="close cl-white pointer" data-dismiss="alert" aria-label="Close">
                    <span class="alertClose" aria-hidden="true">&times;</span>
                </button>
                <strong>Success</strong>
                <p class="marb-0">
                </p>
            </div>
        </div>

    </div>

    <div id="successfulReg" class="padt-56 disp-none">
        <div class="section-alt padb-40">
            <div class="container">
                <div class="padt-40 padb-60 min-h-770">
                    <div class="txt-ctr">
                        <h3 class="cl-blue-connect">
                            Successful Registeration
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </h3>
                        <p>
                            Your account has been successfully registered.
                        </p>
                        <p>
                            You can now log into your account using the navigation bar at the top.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('./includes/footer.inc.php')?>

</body>

<script src="../controllers/js/jQuery/jquery.min.js"></script>
<script src="../controllers/js/tether/tether.min.js"></script>
<script src="../controllers/js/bootstrap/bootstrap.min.js"></script>
<script src="../controllers/js/smoothScroll/smoothScroll.js"></script>
<script src="../controllers/js/navbarController.js"></script>
<script src="../controllers/js/registerController.js"></script>
</html>