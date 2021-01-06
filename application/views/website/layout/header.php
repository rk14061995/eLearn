<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Basic Page Needs
    ================================================== -->
    <title>Courster Learning HTML Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Learn">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="assets/css/uikit.css">
    <link rel="stylesheet" href="assets/css/tailwind.css">
  <link rel="stylesheet" href="assets/css/style.css">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">
</head>

<body>


    <div id="Wrapper">

        <header class="is-transparent is-dark border-b border-gray-400"
            uk-sticky="cls-inactive: is-dark is-transparent border-b">
            <div class="header_inner">
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="home.html">
                             <img src="assets/images/logo.png" alt="">
                            <img src="assets/images/logo-light.png" class="logo_inverse" alt="">
                            <img src="assets/images/logo-mobile.png" class="logo_mobile" alt="">
                        </a>
                    </div>

                    <div class="triger" uk-toggle="target: .header_menu ; cls: is-visible">
                        <i class="uil-bars"></i>
                    </div>

                    <ul class="header_menu">
                        <li><a href="home.html"> Home</a> </li>
                        <li><a href="#" class="active"> Courses </a>
                            <div uk-drop="mode: click" class="mdropdown">
                                <div class="-mt-5 -mx-5 bg-gray-100 uk-visible@m p-6 rounded-r-md rounded-t-md relative z-10">
                                    <h3> Courses </h3>
                                   <p class="leading-6 mb-0 text-sm">  choose from +10.000 online video courses with new
                                        additions published every month. start leaning now. </p>
                                </div>
                                <div class="-mt-6 -mx-5 rotate-180 skew-y-3 transform uk-visible@m">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"
                                        class="text-gray-100 fill-current">
                                        <path d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z">
                                        </path>
                                    </svg>
                                </div>
                                <ul class="grid md:grid-cols-2 gap-3 mb-2">
                                    <li> <a href="courses.html">Web Development </a></li>
                                    <li> <a href="courses.html">Mobile App </a> </li>
                                    <li> <a href="courses.html">Business </a> </li>
                                    <li> <a href="courses.html"> IT Software </a> </li>
                                    <li> <a href="courses.html">Desings </a></li>
                                    <li> <a href="courses.html">Marketing </a></li>
                                    <li> <a href="courses.html">Life Style </a> </li>
                                    <li> <a href="courses.html">Photography </a> </li>
                                    <li> <a href="courses.html">Health Fitness </a> </li>
                                    <li> <a href="courses.html">Ecommerce </a></li>
                                    <li> <a href="courses.html">Food cooking </a></li>
                                    <li> <a href="courses.html">Teaching academy </a> </li>
                                    <li> <a href="courses.html">Marketing </a></li>
                                    <li> <a href="courses.html">Life Style </a> </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="books.html"> Book </a> </li>
                        <li><a href="blog.html"> Blog</a> </li>
                        <li><a href="#"> Pages</a>
                            <div uk-drop="mode: click" class="xdropdown">
                                <ul>
                                    <li> <a href="pages-about.html"> About </a></li>
                                    <li> <a href="pages-contact.html"> Contact us </a></li>
                                    <li> <a href="course-intro.html"> Course intro 1 </a></li>
                                    <li> <a href="course-intro-2.html"> Course intro 2 </a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <div class="overly" uk-toggle="target: .header_menu ; cls: is-visible"></div>

                </div>
                <div class="right-side"> 
                     
                    
                    <?php if($this->session->userdata('studentSession')){ ?>
                        <a href="#" class="d-flex">
                           <img src="assets/images/avatars/avatar-2.jpg" class="header-avatar " alt=""><span class="text-danger px-2">Rahul Kumar</span>
                        </a>
                        <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">
                            <ul>
                                <li><a href="#">Profile </a> </li>
                               
                                <li><a href="<?=base_url('Student-Logout')?>"> Log Out</a></li>
                            </ul>
                        </div>
                    <?php }else{ ?>
                        <a href="<?=base_url('Login')?>" class="px-1 text-warning">Sign In</a>
                        <a href="<?=base_url('Register')?>" class="px-1 text-warning">Sign Up</a>
                    <?php }?>
                </div>
            </div>
        </header>
