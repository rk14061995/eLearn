<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Basic Page Needs
    ================================================== -->
    <title>Learn Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Learn">

    <!-- Favicon -->
    <link href="<?=base_url()?>assets/web/images/favicon.png" rel="icon" type="image/png">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url()?>assets/web/css/uikit.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/web/css/tailwind.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/web/css/style.css">

    <!-- icons
    ================================================== -->
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/web/css/icons.css">
</head>

<body>


    <div id="Wrapper">

        <header class="is-transparent is-dark border-b border-gray-400"
            uk-sticky="cls-inactive: is-dark is-transparent border-b"style="background: darkslateblue;">
            <div class="header_inner">
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="<?=base_url()?>">
                             <img src="<?=base_url()?>assets/web/images/logo.jpg" alt="">
                            <img src="<?=base_url()?>assets/web/images/logo.jpg" class="logo_inverse" alt="">
                            <img src="<?=base_url()?>assets/web/images/logo.jpg" class="logo_mobile" alt="">
                        </a>
                    </div>

                    <div class="triger" uk-toggle="target: .header_menu ; cls: is-visible" style="left:unset;right:1px; top:23px; color:white">
                        <i class="uil-bars"></i>
                    </div>

                    <ul class="header_menu">
                        <li><a href="<?=base_url()?>"> Home</a> </li>
                        <li><a href="#" class="active"> Subject </a>
                            <div uk-drop="mode: click" class="mdropdown">
                                
                                <ul class="grid md:grid-cols-2 gap-3 mb-2">
                                    <?php foreach($subject as $sub): ?>
                                    <li> <a href="<?=base_url('Subject/').$sub->id?>"><?=$sub->subject?></a></li>
                                    <?php endforeach;?>
                                   
                                </ul>
                            </div>
                        </li>
                        <li><a href="#" class="active"> Notes </a>
                            <div uk-drop="mode: click" class="mdropdown">
                                
                                <ul class="grid md:grid-cols-2 gap-3 mb-2">
                                    <?php foreach($subject as $sub): ?>
                                    <li> <a href="<?=base_url('Notes/viewNotes/').$sub->id?>"><?=$sub->subject?></a></li>
                                    <?php endforeach;?>
                                   
                                </ul>
                            </div>
                        </li>
                        <li><a href="<?=base_url('About')?>"> About </a> </li>
                        <li><a href="<?=base_url('Contact-Us')?>"> Contact Us </a> </li>
                        
                    </ul>

                    <div class="overly" uk-toggle="target: .header_menu ; cls: is-visible"></div>

                </div>
                <div class="right-side"> 
                     
                    
                    <?php if($this->session->userdata('studentSession')){ ?>
                        <a href="#" class="d-flex">
                           <img src="<?=base_url()?>assets/web/images/avatars/avatar-2.jpg" class="header-avatar " alt=""><span class="text-danger px-2">Rahul Kumar</span>
                        </a>
                        <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">
                            <ul>
                                <li><a href="<?=base_url('Student-Profile')?>" >Profile </a> </li>
                               
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
        <script>
            $(document).on('click','#student_',function(){
                $('#studentProfile').modal('show');
            });
            // $(document).on('click','#student_',function(){
            //     $('#studentProfile').modal('show');
            // });
        </script>

        <div id="studentProfile" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>

            </div>
            </div>