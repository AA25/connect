<div class="container">
    <nav class="navbar fixed-top navbar-inverse navbar-toggleable-md navbar-bg">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="http://localhost:8081/home">
            <img src="/images/navBar/connect.png" width="180" height="35" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <?php
                include('./controllers/php/checkLoginController.php');
                if($loginStatus == false){
            ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link padb-0 padt-14" href="http://localhost:8081/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link padb-0 padt-14" href="http://localhost:8081/marketplace">Marketplace</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link padb-0 padt-14 disabled" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link padb-0 padt-14" data-toggle='popover' data-placement="bottom" data-trigger="focus" data-html="true" 
                        data-content='
                                <div>
                                    <i class="fa fa-user fa-1x cl-blue-connect" aria-hidden="true"></i>
                                    <a href="http://localhost:8081/register/business" class="fs-16">
                                        Register as a Business
                                    </a>
                                    <hr>
                                    <i class="fa fa-building cl-blue-connect" aria-hidden="true"></i>
                                    <a href="http://localhost:8081/register/developer" class="fs-16">
                                        Register as a Developer
                                    </a>
                                </div>'>
                            Register 
                        </a>
                    </li>
                    
                </ul>

                <form method="post" action="" id="loginForm" class="form-inline padt-5">
                    <i class="fa fa-user-circle cl-white marr-10" aria-hidden="true"></i>
                    <input class="form-control marr-10" type="email" placeholder="Email" name="email" style="max-width:150px; max-height:25px" required>
                    <input class="form-control marr-10" type="password" placeholder="Password" name="password" style="max-width:150px; max-height:25px" required>
                    <select class="custom-select marr-10 pointer" id="inlineFormCustomSelect" name="location" style="max-width:180px; max-height:25px; padding:0px; padding-left:5px; padding-right:25px" required>
                        <option value="businesses">business</option>
                        <option value="developers">developer</option>
                    </select>
                    <input type="submit" name="Submit" value="Log In" id="loginBtn" class="btn cl-white bg-cl-blue-connect pointer" style="width:60px; height:23px; padding:0px; padding-left: 5px; padding-right:5px; font-size:14px"></input>
                </form>
            <?php }else { ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link padb-0 padt-14" href="http://localhost:8081/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link padb-0 padt-14" href="http://localhost:8081/marketplace">Marketplace</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link padb-0 padt-14" href="http://localhost:8081/dashboard">Dashboard</a>
                    </li>
                </ul>

                <p class="navbar-text marb-0 padb-0 padt-13">
                    <i class="fa fa-user-circle cl-blue-connect marr-5" aria-hidden="true"></i> 
                    <span class="marr-10">
                        <a href="http://localhost:8081/dashboard" class="cl-white">
                            <?php echo 'Hi, '.$loginStatus['firstName'] ?>
                        </a>
                    </span>
                    <button type="button" class="btn cl-white bg-cl-blue-connect marr-10 pointer" onclick="logOut()" style="width:60px; height:23px; padding:0px; padding-left: 5px; padding-right:5px; font-size:14px">Logout</button>
                </p>
            <?php } ?>

        </div>
    </nav>
</div>