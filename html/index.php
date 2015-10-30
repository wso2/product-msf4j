<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
?>
<!--
~   Copyright (c) WSO2 Inc. (http://wso2.com) All Rights Reserved.
~
~   Licensed under the Apache License, Version 2.0 (the "License");
~   you may not use this file except in compliance with the License.
~   You may obtain a copy of the License at
~
~        http://www.apache.org/licenses/LICENSE-2.0
~
~   Unless required by applicable law or agreed to in writing, software
~   distributed under the License is distributed on an "AS IS" BASIS,
~   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
~   See the License for the specific language governing permissions and
~   limitations under the License.
-->

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WSO2 Pet Store - Administrator</title>

    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- Bootstrap CSS -->
    <link href="libs/bootstrap_3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome CSS -->
    <link href="libs/font-awesome_4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Font WSO2 CSS -->
    <link href="libs/font-wso2_1.2/css/font-wso2.css" rel="stylesheet" type="text/css" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="libs/html5shiv_3.7.2/html5shiv.min.js"></script>
    <script src="libs/respond_1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- header -->
<header class="header header-default">
    <div class="container-fluid">
        <div class="pull-left brand float-remove-xs text-center-xs">
            <a href="#">
                <img src="images/logo-inverse.svg" alt="wso2" title="wso2" class="logo">
                <h1>WSO2 Pet Store - backend</h1>
            </a>
        </div>
        <div class="pull-right auth float-remove-xs text-center-xs">
            <a href="#" class="dropdown" data-toggle="dropdown">
                <span class="hidden-xs add-padding-left-3x">administrator <span class="caret"></span></span>
               <span class="icon fw-stack fw-lg">
                   <i class="fw fw-user fw-stack-1x"></i>
               </span>
            </a>
            <ul class="dropdown-menu float-remove-xs position-static-xs text-center-xs remove-margin-xs slideInDown" role="menu">
                <li class="dropdown-header visible-xs">administrator <span class="caret"></span></li>
                <li class="divider visible-xs"></li>
                <li><a href="logout.php">Sign out</a></li>
            </ul>

        </div>
    </div>
</header>

<!-- navbar -->
<div class="navbar-wrapper">
    <nav class="navbar navbar-default" data-spy="affix" data-offset-top="50" data-offset-bottom="40">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-menu-toggle" data-toggle="dropdown">
                        <span class="icon fw-stack">
                            <i class="fw fw-tiles fw-stack-1x"></i>
                        </span>
                </a>
                <ul class="dropdown-menu tiles arrow dark add-margin-1x" role="menu">
                    <li>
                        <a href="#">
                            <i class="icon fa  fa-paw"></i>
                            <span class="name">Pet Type</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon fw fw-wsdl"></i>
                            <span class="name">Pets</span>
                        </a>
                    </li>
                </ul>
                <ol class="breadcrumb navbar-brand">
                    <li><a href="index.html"><i class="icon fw fw-home"></i></a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active"><a href="#">Data</a></li>
                </ol>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="layout.html">
                                <span class="icon fw-stack">
                                    <i class="fw fw-laptop fw-stack-1x"></i>
                                    <i class="fw fw-ring fw-stack-2x"></i>
                                </span>
                            Main Wrapper
                        </a>
                    </li>
                    <li>
                        <a href="details_layout.html">Details Layout</a>
                    </li>
                    <li class="active"><a href="#noiconlink">No Icon Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Quick Jump <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header">UI Components</li>
                            <li class="divider"></li>
                            <li><a href="#forms">Forms</a></li>
                            <li class="dropdown-submenu"><a href="#table">Table</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Data Table</a></li>
                                    <li><a href="#">Data List Table</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div><!--/.nav-collapse -->
        </div>
    </nav>
</div>

<!-- #page-content-wrapper -->
<div class="page-content-wrapper">

    <!-- page content -->
    <div class="container-fluid body-wrapper">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-xs-6 col-md-2">
                <a href="#" class="thumbnail thumbnail-overide">
                    <img data-src="holder.js/100%x180" alt="...">
                    <div class="caption">
                        <h3>Add Pet Types</h3>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
                <a href="#" class="thumbnail thumbnail-overide">
                    <img data-src="holder.js/100%x180" alt="...">
                    <div class="caption">
                        <h3>List Pet Types</h3>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
                <a href="#" class="thumbnail thumbnail-overide">
                    <img data-src="holder.js/100%x180" alt="...">
                    <div class="caption">
                        <h3>Add Pets</h3>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-md-2 ">
                <a href="#" class="thumbnail thumbnail-overide">
                    <img data-src="holder.js/100%x180" alt="...">
                    <div class="caption">
                        <h3>List Pets</h3>
                    </div>
                </a>
            </div>
        </div>

    </div>

</div><!-- /#page-content-wrapper -->


<!-- footer -->
<footer class="footer">
    <div class="container-fluid">
        <p>&copy; <script>document.write(new Date().getFullYear());</script> <a href="http://wso2.com/" target="_blank"><i class="icon fw fw-wso2"></i> Inc</a>. All Rights Reserved.</p>
    </div>
</footer>

<!-- Jquery/Jquery UI JS -->
<script src="libs/jquery_1.11.3/jquery-1.11.3.js"></script>
<!-- Bootstrap JS -->
<script src="libs/bootstrap_3.2.0/js/bootstrap.min.js"></script>

<!-- Noty JS -->
<script src="libs/noty_2.3.5/packaged/jquery.noty.packaged.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>