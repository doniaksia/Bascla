<?php
//index.php




?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8" />
    <title>calendrier</title>
    <link rel="icon" type="image/png" sizes="16x16" href="Back/images/favicon.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="Back/images/favicon.png">

    <link href="Back/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="Back/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="Back/css/style.css" rel="stylesheet">


    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>

        </div>
    </div>
    <div id="main-wrapper" class="show menu-toggle">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="Back/images/logo.png" alt="">
                <img class="logo-compact" src="Back/images/logo-text.png" alt="">
                <img class="brand-title" src="Back/images/logo-text.png" alt="">

            </a>

            <div class="nav-control">
                <div class="hamburger">

                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                                class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--SIDE BAR MENU ADD YOUR PATH WITH PATH{{ 'name of the route in bascla bundle /routing.yml' }} --->
        <div class="quixnav">

            <ul class="metismenu" id="menu">
                <li class="nav-label first">Main Menu</li>
                <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                </li> -->
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    <ul aria-expanded="false">
                        <li><a href="index.html">Dashboard 1</a></li>
                    </ul>
                </li>

                <li class="nav-label">Gestion Employés</li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Employés</span></a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">ajouter</a></li>
                        <li><a href="app-profile.html">modifier</a></li>
                        <li><a href="app-profile.html">supprimer</a></li>
                        <li><a href="app-calender.html">afficher</a></li>
                    </ul>
                </li>

                <li class="nav-label">Gestion Evenement</li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-world-2"></i><span class="nav-text">Events</span></a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">ajouter</a></li>
                        <li><a href="app-profile.html">modifier</a></li>
                        <li><a href="app-profile.html">supprimer</a></li>
                        <li><a href="app-calender.html">confirmer demandes</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-plug"></i><span class="nav-text">Weekly Challenge</span></a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">ajouter</a></li>
                        <li><a href="app-profile.html">modifier</a></li>
                        <li><a href="app-profile.html">supprimer</a></li>
                        <li><a href="app-calender.html">confirmer demandes</a></li>
                    </ul>
                </li>



                <!--G PRODUITS TOUS LES PRODUITS -->
                <li class="nav-label">Gestion Produits</li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-form"></i><span class="nav-text">products</span></a>
                    <ul aria-expanded="false">

                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-form"></i><span class="nav-text">velo a vendre</span></a>
                            <ul aria-expanded="false">

                                <li><a href="/Bascla-master/web/app_dev.php/bascla/velovendre/new">ajouter</a></li>

                                <li><a href="/Bascla-master/web/app_dev.php/bascla/indexvelovendre">Editer</a></li>
                                <li><a href="/Bascla-master/web/app_dev.php/bascla/pie">statistique(piechart)</a></li>
                                <li><a href="/Bascla-master/web/app_dev.php/bascla/piebar">statistique(barchart)</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-form"></i><span class="nav-text">velo a louer</span></a>
                            <ul aria-expanded="false">

                                <li><a href="/Bascla-master/web/app_dev.php/bascla/velolouer/new">ajouter</a></li>
                                <li><a href="/Bascla-master/web/app_dev.php/bascla/indexvelolouer">Editer</a></li>


                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-form"></i><span class="nav-text">Gestion location</span></a>
                            <ul aria-expanded="false">


                                <li><a href="/Bascla-master/web/app_dev.php/bascla/location/">Editer</a></li>


                            </ul>
                        </li>

                    </ul>
                </li>

                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-form"></i><span class="nav-text">Charité</span></a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">ajouter</a></li>
                        <li><a href="app-profile.html">modifier</a></li>
                        <li><a href="app-profile.html">supprimer</a></li>
                        <li><a href="app-calender.html">confirmer demandes</a></li>

                    </ul>
                </li>

                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-form"></i><span class="nav-text">Recyclage</span></a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">ajouter</a></li>
                        <li><a href="app-profile.html">modifier</a></li>
                        <li><a href="app-profile.html">supprimer</a></li>
                        <li><a href="app-calender.html">confirmer demandes</a></li>

                    </ul>
                </li>


                <li class="nav-label">Gestion Formation</li>

                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">Formations</span></a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">ajouter</a></li>
                        <li><a href="app-profile.html">modifier</a></li>
                        <li><a href="app-profile.html">supprimer</a></li>
                        <li><a href="app-calender.html">confirmer participations</a></li>

                    </ul>
                </li>

                <li class="nav-label">Gestion AV</li>

                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-copy-06"></i><span class="nav-text">Reparation</span></a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">ajouter</a></li>
                        <li><a href="app-profile.html">modifier</a></li>
                        <li><a href="app-profile.html">supprimer</a></li>
                        <li><a href="app-calender.html">confirmer demandes</a></li>
                    </ul>
                </li>
                <li class="nav-label">Gestion Marketing</li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-world-2"></i><span class="nav-text">Forum</span></a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">ajouter</a></li>
                        <li><a href="app-profile.html">modifier</a></li>
                        <li><a href="app-profile.html">supprimer</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-plug"></i><span class="nav-text">Posts</span></a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">ajouter</a></li>
                        <li><a href="app-profile.html">modifier</a></li>
                        <li><a href="app-profile.html">supprimer</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="clearfix"></div>
    <br>

    <br>
    <br>
    <br>
    <br>
    <script src="Back/vendor/global/global.min.js"></script>
    <script src="Back/js/quixnav-init.js"></script>
    <script src="Back/js/custom.min.js"></script>

    <title>calendrier reservation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script>











        $(document).ready(function() {
            var calendar = $('#calendar').fullCalendar({
                editable:true,
                header:{
                    left:'prev,next today',
                    center:'title',
                    right:'month,agendaWeek,agendaDay'
                },
                events: 'load.php',
                selectable:true,
                selectHelper:true,
                select: function(start, end, allDay)
                {
                    var title = prompt("Enter Event Title");
                    if(title)
                    {
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url:"insert.php",
                            type:"POST",
                            data:{title:title, start:start, end:end},
                            success:function()
                            {
                                calendar.fullCalendar('refetchEvents');
                                alert("Added Successfully");
                            }
                        })
                    }
                },
                editable:true,
                eventResize:function(event)
                {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    var title = event.title;
                    var id = event.id;
                    $.ajax({
                        url:"update.php",
                        type:"POST",
                        data:{title:title, start:start, end:end, id:id},
                        success:function(){
                            calendar.fullCalendar('refetchEvents');
                            alert('Event Update');
                        }
                    })
                },

                eventDrop:function(event)
                {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    var title = event.title;
                    var id = event.id;
                    $.ajax({
                        url:"update.php",
                        type:"POST",
                        data:{title:title, start:start, end:end, id:id},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Updated");
                        }
                    });
                },

                eventClick:function(event)
                {
                    if(confirm("Are you sure you want to remove it?"))
                    {
                        var id = event.id;
                        $.ajax({
                            url:"delete.php",
                            type:"POST",
                            data:{id:id},
                            success:function()
                            {
                                calendar.fullCalendar('refetchEvents');
                                alert("Event Removed");
                            }
                        })
                    }
                },

            });
        });

    </script>
</head>

<body>











<br />
<h2 align="center"><a href="#">réservation  </a></h2>
<br />
<div class="container">


    <div id="calendar">



    </div>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>

</html>