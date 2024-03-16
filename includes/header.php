<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Header New college</title>

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /* Googlefont Poppins CDN Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        min-height: 100vh;
    }

    nav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 90px;
        background: #c02633;
        /* background: #a366f1; */
        color: white;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        z-index: 99;
    }

    nav .navbar {
        height: 100%;
        max-width: 1250px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: auto;
        padding: 0 50px;
    }

    .navbar .logo a {
        font-size: 30px;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }

    nav .navbar .nav-links {
        line-height: 70px;
        height: 100%;
        position: relative;
        right: 0;
        left: auto;
    }

    nav .navbar .links {
        display: flex;
    }

    nav .navbar .links li {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        list-style: none;
        padding: 0 14px;
    }

    nav .navbar .links li a {
        height: 100%;
        text-decoration: none;
        white-space: nowrap;
        color: #fff;
        font-size: 15px;
        font-weight: 500;
    }

    /* .links li:hover .htmlcss-arrow,
    .links li:hover .js-arrow {
        transform: rotate(180deg);
    } */

    nav .navbar .links li .arrow {
        height: 100%;
        width: 22px;
        line-height: 70px;
        text-align: center;
        display: inline-block;
        color: #fff;
        transition: all 0.3s ease;
    }

    nav .navbar .links li .sub-menu {
        position: absolute;
        top: 70px;
        right: 0;
        line-height: 40px;
        background: #c02633;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        border-radius: 0 0 4px 4px;
        display: none;
        z-index: 2;
    }

    nav .navbar .links li:hover .htmlCss-sub-menu,
    nav .navbar .links li:hover .js-sub-menu {
        display: none;
    }

    .navbar .links li .sub-menu li {
        padding: 0 22px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        line-height:1rem;
    }

    .navbar .links li .sub-menu a {
        color: #fff;
        font-size: 15px;
        font-weight: 500;
       
    }

    .navbar .links li .sub-menu .more-arrow {
        line-height: 40px;
    }

    .navbar .links li .sub-menu .more-sub-menu {
        position: absolute;
        top: 0;
        left: 100%;
        border-radius: 0 4px 4px 4px;
        z-index: 1;
        display: none;
    }

    .links li .sub-menu .more:hover .more-sub-menu {
        display: none;
    }

    .navbar .nav-links .sidebar-logo {
        display: inline;
    }

    nav .navbar {
        max-width: 100%;
        padding: 0 25px;
    }

    nav .navbar .logo a {
        font-size: 27px;
    }

    nav .navbar .links li {
        padding: 0 10px;
        white-space: nowrap;
    }

    nav .navbar .links li a {
        font-size: 15px;
    }

    .navbar .bx-menu {
        display: inline;
        margin-right: 2rem;
        cursor: pointer;
        font-size: 2rem;
    }

    nav .navbar .nav-links {
        position: fixed;
        top: 0;
        right: -1000px;
        display: block;
        max-width: 400px;
        width: 100%;
        background: #c02633;
        line-height: 40px;
        padding: 20px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.5s ease;
        z-index: 1000;
        overflow-y: auto;
    }

    .navbar .nav-links .sidebar-logo {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 25rem;
        height: 10rem;
    }

    .sidebar-logo .logo-name {
        font-size: 25px;
        color: #fff;
    }

    .sidebar-logo i,
    .navbar .bx-menu {
        font-size: 25px;
        color: #fff;
    }

    nav .navbar .links {
        display: block;
        margin-top: 20px;
        height: 2.8rem;
    }

    nav .navbar .links li .arrow {
        line-height: 40px;
    }

    nav .navbar .links li {
        display: block;
        width: fit-content;
    }

    nav .navbar .links li .sub-menu {
        position: relative;
        top: 0;
        box-shadow: none;
        display: none;
    }

    nav .navbar .links li .sub-menu li {
        border-bottom: none;
    }

    .navbar .links li .sub-menu .more-sub-menu {
        display: none;
        position: relative;
        left: 0;
    }

    .navbar .links li .sub-menu .more-sub-menu li {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .links li:hover .htmlcss-arrow,
    .links li:hover .js-arrow {
        transform: rotate(0deg);
    }

    .navbar .links li .sub-menu .more-sub-menu {
        display: none;
    }

    .navbar .links li .sub-menu .more span {
        display: flex;
        align-items: center;
    }

    .navbar .links li .sub-menu {
        position: absolute;
        top: 70px;
        left: 0;
        line-height: 40px;
        background: #c02633;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        border-radius: 0 0 4px 4px;
        display: none;
        z-index: 2;
        overflow: hidden;
    }

    .navbar .nav-links.show1 .links .htmlCss-sub-menu,
    .navbar .nav-links.show3 .links .js-sub-menu,
    .navbar .nav-links.showsitsmenu .links .sitsmenu1,
    .navbar .nav-links.showacademicmenu .links .sitsmenu2,
    .navbar .nav-links.showdepartmentsmenu .links .sitsmenu3,
    .navbar .nav-links.showcampuslifemenu .links .sitsmenu4,
    .navbar .nav-links.showloginmenu .links .sitsmenu5 {
        display: block !important;
    }

    .navbar .nav-links.show1 .links .htmlcss-arrow,
    .navbar .nav-links.show3 .links .js-arrow,
    .navbar .nav-links.showsitsmenu .links .about-sitsmenu,
    .navbar .nav-links.showacademicmenu .links .academicsmenu,
    .navbar .nav-links.showdepartmentsmenu .links .departmentsmenu,
    .navbar .nav-links.showcampuslifemenu .links .campuslifemenu,
    .navbar .nav-links.showloginmenu .links .loginmenu {
        transform: rotate(180deg) !important;
    }

    .noti {
        width: auto;
        /* Allow the div to expand according to content */
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .divider_top_black {
        display: flex;
        align-items: center;
        width: 64rem;
        justify-content: end;
        margin-left: 1rem;
        background: transparent;
        color: #fff;
    }
    nav .navbar .links li .sub-menu li {
    border-bottom: none;
    line-height: 2rem !important;
}


@media screen and (max-width: 1024px) {
        .noti p {
                transform: translate(0px, -4px) !important;
        }

        .scrol-bar{
            padding-left: 0px !important;
        }
        
    }
    @media screen and (min-width:320px)and (max-width:480px) {

    
        .navbar .logo img {
            width: 12rem !important;
            height: 6rem !important;
        }

        .noti {
            color:  #dc3545;
            display: flex;
            margin-top: 1.1rem;
            margin-left: -3.1rem;

        }

        .noti p {
            font-size: 1.5rem;
            text-align: left;
            transform: translate(34px, -4px) !important;
        }

    

        .scrol-bar {
            margin-left: -4rem;
            margin-top: 1rem;
        }

        .bx-menu {
            transform: translate(265px, -135px);
        }

        .navbar .nav-links .sidebar-logo {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 22rem;
            height: 10rem;
        }
       
         .divider_top_black{
            background:white;
            margin-left:-2rem;
        }
        
    }
    
@media screen and (min-width:481px)and (max-width:765px) {

    
        .navbar .logo img {
            width: 12rem !important;
            height: 6rem !important;
        }

        .noti {
            color:  #dc3545;
            display: flex;
            margin-top: 1.1rem;
            margin-left: -3.1rem;

        }

        .noti p {
            font-size: 1.5rem;
            text-align: left;
            transform: translate(34px, -4px) !important;
        }

        .scrol-bar {
            margin-left: -4rem;
            margin-top: 1rem;
        }

        .bx-menu {
            transform: translate(37rem, -135px);
        }

        .navbar .nav-links .sidebar-logo {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 22rem;
            height: 10rem;
        }
        .divider_top_black{
            background:white;
            margin-left:-2rem;
        }
    }
    


    @media screen and (min-width:481px)and (max-width:600px) {
            .bx-menu{
                margin-left:-13rem !important;
            }
            .divider_top_black{
            background:white;
        }
    }

    /* @media screen and (min-width:320px)and (max-width:765px) {

    
.navbar .logo img {
    width: 12rem !important;
    height: 6rem !important;
}

.noti {
    color:  #dc3545;
    display: flex;
    margin-top: 1.1rem;
    margin-left: -3.1rem;

}

.noti p {
    font-size: 1.5rem;
    text-align: left;
}

.scrol-bar {
    margin-left: -4rem;
    margin-top: 1rem;
}

.bx-menu {
    transform: translate(265px, -135px);
}

.navbar .nav-links .sidebar-logo {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 22rem;
    height: 10rem;
}
} */

    @media screen and (min-width:767px) and (max-width:768px) {

        .navbar .logo img {
            width: 12rem !important;
            height: 6rem !important;
        }

        .noti {
            color: #dc3545;
            margin-left: -2.5rem;
            margin-top: 1.1rem;
        }

        .noti p {
            font-size: 1rem;
            color:#dc3545;
            transform: translate(14px, -4px) !important;
        }

        .divider_top_black {
            transform: translate(174px, -82px);
        }

        marquee {
            max-width: 33rem;
            transform: translate(-120px, 10px);

        }

        
        .notif-updates #fvNews_ctl05_Label3 {
            color: #dc3545;
        }

        .bx-menu {
            transform: translate(43rem, -10rem) !important;
            margin-top: 0.6rem !important;
        }

        .scrol-bar.col-lg-9 {
            max-width: 90% !important;
        }

        .divider_top_black {
            transform: translate(-13rem, 0) !important;
            width: 73rem !important;
            background:white;
        }

        .scrol-bar{
            margin-left: 23rem !important;
            transform: translate(-1rem, -3rem) !important;
        }
        .noti
        {
            transform: translate(7px, -7px) !important;
        }
        .navbar .nav-links .sidebar-logo {
            height: 3rem;

        }

        .navbar .nav-links .sidebar-logo span {
            display: none;

        }
    }


   


    @media screen and (min-width:991px) and (max-width:1024px) {
        nav .navbar .links .ssss:hover .sub-menu {
        display: block;
    }
    
    
        .divider_top_black {
            transform: translate(7rem, -3rem);
        }

        marquee {
            max-width: 37rem;
        }

        .notif-updates #fvNews_ctl05_Label3 {
            color: white;
        }

        .bx-menu {
            transform: translate(64rem, -5rem) !important;
            margin-top: -0.5rem !important;
        }


        .navbar .nav-links .sidebar-logo {
            height: 3rem;

        }

        .navbar .nav-links .sidebar-logo span {
            display: none;

        }
    }


    @media screen and (min-width:1025px) {
        nav .navbar .links .ssss:hover .sub-menu {
        display: block;
    }
        .divider_top_black {
            transform: translate(-5rem, 0);
            margin-right: -6rem;
        }

        .marquee {
            max-width: 49rem;
        }

        .notif-updates #fvNews_ctl05_Label3 {
            color: white;
        }

        .noti p {
            font-size: 1rem;
            transform: translate(-8px, 15px) !important;

        }

        .navbar .nav-links .sidebar-logo {
            height: 3rem;

        }

        .navbar .nav-links .sidebar-logo span {
            display: none;

        }

        .scrol-bar {

            margin-left: 14rem;
            transform: translate(12px, -8px) !important;

        }

        .bx-menu i {
            font-size: 90px;
        }

        .scrol-bar.col-lg-9 {
            /* max-width: 96% !important; */
            max-width: 87% !important;
            flex: 0 0 92%;
        }
    }
    
    @media screen and (min-width: 1200px) {
        nav .navbar .links .ssss:hover .sub-menu {
        display: block;
    }
        .scrol-bar.col-lg-9 {
            max-width: 81% !important;
        }
    }

    @media screen and (min-width: 1400px) {
        nav .navbar .links .ssss:hover .sub-menu {
        display: block;
    }
        
        .scrol-bar.col-lg-9 {
            max-width: 91% !important;
        }

        .divider_top_black {
            transform: translate(-9rem, 0) !important;
            width: 73rem !important;
        }

        .scrol-bar{
            margin-left: 15rem !important;
        }

    }



    @media screen and (min-width:768px) and (max-width:990px) {

.navbar .logo img {
    width: 12rem !important;
    height: 6rem !important;
}

.noti {
    color: #dc3545;
    margin-left: -2.5rem;
    margin-top: 1.1rem;
}

.noti p {
    font-size: 1rem;
    color:#dc3545;
    transform: translate(14px, -4px) !important;
}

.divider_top_black {
    transform: translate(174px, -82px);
}

marquee {
    max-width: 39rem;
    transform: translate(-120px, 10px);

}


.notif-updates #fvNews_ctl05_Label3 {
    color: #dc3545;
}

.bx-menu {
    transform: translate(47rem, -10rem) !important;
    margin-top: 0.6rem !important;
}

.scrol-bar.col-lg-9 {
    max-width: 90% !important;
}

.divider_top_black {
    transform: translate(-13rem, 0) !important;
    width: 73rem !important;
    background:white;
}

.scrol-bar{
    margin-left: 23rem !important;  
    transform: translate(-1rem, -3rem) !important;
}
.noti
{
    transform: translate(7px, -7px) !important;
}
.navbar .nav-links .sidebar-logo {
    height: 3rem;

}

.navbar .nav-links .sidebar-logo span {
    display: none;

}
}




    </style>
</head>

<body style="margin-bottom: 4rem;">
    <nav>
        <div class="navbar">
            <div class="logo">
                <a href="index.php">
                    <img src="images/sits_23.png" alt="" srcset="" style="display:inline;width:12rem;height:5rem">
                </a>
            </div>
            <div class="markquee">
                <div class="divider_top_black">
                    <div class="container">
                        <div class="not-flx">
                            <div class="col-lg-3 col-xs-12 noti ">
                                <p><i class="far fa-bell"></i>Latest Notifications:</p>
                            </div>
                            <div class="col-md-9 col-lg-9 col-xs-12 scrol-bar">
                                <marquee behavior='scroll' direction='left' scrollamount='19' onmouseover='this.stop()'
                                    onmouseout='this.start()'>
                                    <ul class="notif-updates">
                                        <li><a class="regul_txt"
                                                href="javascript:void(window.open( 'notifications/
										isro_visit.pdf','_blank','toolbar=no,status=no,menubar=no,scrollbars=yes,fullscreen=no,width=900,height=700,left=200,top=50'))"
                                                data-original-title="" title="FASC MAY 2023 ARREAR RESULTS - U20 BATCH">
                                                <span id="fvNews_ctl05_Label3"><img src="images/new.gif" alt="SITS"
                                                        class="new-pad0 s1" data-no-retina="">One Day Industrial Visit
                                                    To ISRO-National Remote Sensing Centere</span></a>
                                        </li>
                                        <li><a class="regul_txt"
                                                href="javascript:void(window.open( 'notifications/cc_srinivas.pdf','_blank','toolbar=no,status=no,menubar=no,scrollbars=yes,fullscreen=no,width=900,height=700,left=200,top=50'))"
                                                data-original-title=""
                                                title="Application of Molecular tools with special reference to Infectious Diseases">
                                                <span id="fvNews_ctl05_Label3"><img src="images/new.gif" alt="SITS"
                                                        class="new-pad0 s1" data-no-retina="">DR. SRINIVAS BACHU got
                                                    best Faculty Coordinator from AICTE</span></a>
                                        </li>
                                        <li><a class="regul_txt"
                                                href="javascript:void(window.open( 'notifications/host_college.pdf','_blank','toolbar=no,status=no,menubar=no,scrollbars=yes,fullscreen=no,width=900,height=700,left=200,top=50'))"
                                                data-original-title=""
                                                title="Application of Molecular tools with special reference to Infectious Diseases">
                                                <span id="fvNews_ctl05_Label3"><img src="images/new.gif" alt="SITS"
                                                        class="new-pad0 s1" data-no-retina="">SITS awarded with HOST
                                                    College by AICTE and Brain O Vision Solutions for National Level
                                                    faculty development program</span></a>
                                        </li>
                                        <li><a class="regul_txt"
                                                href="javascript:void(window.open( 'notifications/cc_srinivas.pdf','_blank','toolbar=no,status=no,menubar=no,scrollbars=yes,fullscreen=no,width=900,height=700,left=200,top=50'))"
                                                data-original-title=""
                                                title="Application of Molecular tools with special reference to Infectious Diseases">
                                                <span id="fvNews_ctl05_Label3"><img src="images/new.gif" alt="SITS"
                                                        class="new-pad0 s1" data-no-retina="">DR. SRINIVAS BACHU got
                                                    best Faculty Coordinator from AICTE</span></a>
                                        </li>

                                        <li><a class="regul_txt"
                                                href="javascript:void(window.open( 'notifications/cc_anil_kumar.pdf','_blank','toolbar=no,status=no,menubar=no,scrollbars=yes,fullscreen=no,width=900,height=700,left=200,top=50'))"
                                                data-original-title=""
                                                title="Application of Molecular tools with special reference to Infectious Diseases">
                                                <span id="fvNews_ctl05_Label3"><img src="images/new.gif" alt="SITS"
                                                        class="new-pad0 s1" data-no-retina="">DR. ANIL KUMAR SAHU got
                                                    best Faculty Coordinator from AICTE</span></a>
                                        </li>
                                        <li><a class="regul_txt" href="result/arts/index.php" target=""
                                                data-original-title="" title="FASC MAY 2023 ARREAR RESULTS - U20 BATCH">
                                                <span id="fvNews_ctl05_Label3"><img src="images/new.gif" alt="SITS"
                                                        class="new-pad0 s1" data-no-retina="">FASC PG MAY 23 ARREAR
                                                    RESULTS FOR P21 &amp; P22 Batch</span></a>
                                        </li>

                                    </ul>
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <i class='bx bx-menu'></i>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <span class="logo-name"><img src="images/sits_23.png" alt="" srcset=""></span>
                    <i class='bx bx-x'></i>
                </div>
                <ul class="links"> 

                    <!-- abou sits -->

                    <li class='ssss'>
                        <a href="javascript:void(0)" data-original-title="" title="">
                            <span class="scoop-mtext aboutmenu">About SITS</span>

                        </a>
                        <!-- Add the submenus for "CSE" and "ECE" -->
                        <i class='bx bxs-chevron-down about-sitsmenu arrow '></i>
                        <ul class="sitsmenu1 sub-menu">

                            <!-- 1 -->
                            <li>
                                <a href="who-we-are.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fa fa-eye"></i></span>
                                    <span class="scoop-mtext">Overview</span>
                                </a>
                            </li>

                            <li>
                                <a href="leadership.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-user-circle"></i></span>
                                    <span class="scoop-mtext">Leadership Team</span>
                                </a>
                            </li>

                            <li>
                                <a href="statutory_bodies.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-user-circle"></i></span>
                                    <span class="scoop-mtext">Governing Body</span>
                                </a>
                            </li>


                            <li>
                                <a href="organization.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog""></i></span>
              <span class=" scoop-mtext">Organization</span>
                                </a>
                            </li>

                            <li>
                                <a href="infrastructure.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog"></i></span>
                                    <span class="scoop-mtext">Infrastructure</span>
                                </a>
                            </li>

                            <li>
                                <a href="audit_statement.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog"></i></span>
                                    <span class="scoop-mtext">Audit Statement</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog"></i></span>
                                    <span class="scoop-mtext">Mandatory Disclosure</span>
                                </a>
                            </li>

                            <li>
                                <a href="hr_policy.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog"></i></span>
                                    <span class="scoop-mtext">HR Policy Manual</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog"></i></span>
                                    <span class="scoop-mtext">Administration</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog"></i></span>
                                    <span class="scoop-mtext">RTI</span>
                                </a>
                            </li>

                            <!-- 10 -->
                        </ul>
                    </li>


                    <!-- acwdemics -->
                    <li class='ssss'>
                        <a href="javascript:void(0)" data-original-title="" title="">
                            <span class="scoop-mtext academicmenu">Academics</span>

                        </a>
                        <!-- Add the submenus for "CSE" and "ECE" -->
                        <i class='bx bxs-chevron-down academicsmenu arrow '></i>
                        <ul class="sitsmenu2 sub-menu">

                            <!-- 1 -->
                            <li>
                                <a href="acadmic_calender.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fa fa-eye"></i></span>
                                    <span class="scoop-mtext">Academic Calender</span>
                                </a>
                            </li>

                            <li>
                                <a href="acadmic_council.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-user-circle"></i></span>
                                    <span class="scoop-mtext">Academic Council</span>
                                </a>
                            </li>

                            <li>
                                <a href="statutory_bodies.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-user-circle"></i></span>
                                    <span class="scoop-mtext">Statutory Bodies</span>
                                </a>
                            </li>


                            <li>
                                <a href="organization.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog""></i></span>
              <span class=" scoop-mtext">Board Of Studies</span>
                                </a>
                            </li>

                            <li>
                                <a href="acadmic_regulations.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog"></i></span>
                                    <span class="scoop-mtext">Academic Regulations</span>
                                </a>
                            </li>

                            <li>
                                <a href="course_structure.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog"></i></span>
                                    <span class="scoop-mtext">Course Structure</span>
                                </a>
                            </li>

                            <li>
                                <a href="syllabus.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog"></i></span>
                                    <span class="scoop-mtext">Syllabus</span>
                                </a>
                            </li>

                            <li>
                                <a href="holiday_list.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog"></i></span>
                                    <span class="scoop-mtext">Holidys List</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog"></i></span>
                                    <span class="scoop-mtext">Academic Downloads</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-users-cog"></i></span>
                                    <span class="scoop-mtext">RTI</span>
                                </a>
                            </li>

                            <!-- 10 -->
                        </ul>
                    </li>





                    <!-- Departments -->
                    <li class='ssss'>
                        <a href="javascript:void(0)" data-original-title="" title="">
                            <span class="scoop-mtext departmentmenu">Departments</span>

                        </a>
                        <!-- Add the submenus for "CSE" and "ECE" -->
                        <i class='bx bxs-chevron-down departmentsmenu arrow '></i>
                        <ul class="sitsmenu3 sub-menu">

                            <!-- 1 -->
                            <li>
                                <a href="electonic-comunication.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fa fa-microchip"></i></span>
                                    <span class="scoop-mtext dept">Department of Electronics <br> and
                                        Communication</span>
                                </a>
                            </li>

                            <li>
                                <a href="computing.php" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fa fa-desktop"></i></span>
                                    <span class="scoop-mtext dept">Department of Computer <br> Science</span>

                                </a>
                            </li>

                            <li>
                                <a href="Civil-Infra.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fa fa-building"></i></span>
                                    <span class="scoop-mtext dept">Department of Basic Sciences <br> and
                                        Humanities</span>
                                </a>
                            </li>


                            <li>
                                <a href="Electrical-Engin.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-plug"></i></span>
                                    <span class="scoop-mtext dept">Department of Electrical <br> Engineering</span>
                                </a>
                            </li>


                            <li>
                                <a href="Mechanical-Engin.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-cogs"></i></span>
                                    <span class="scoop-mtext dept">Department of Mechanical <br> Engineering</span>
                                </a>
                            </li>

                            <li>
                                <a href="Management-Commerce.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-chalkboard-teacher"></i></span>
                                    <span class="scoop-mtext dept">Department of Management <br> And Commerce</span>
                                </a>
                            </li>

                            <li>
                                <a href="Pharmacy.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-clinic-medical"></i></span>
                                    <span class="scoop-mtext dept">Department of Pharmacy</span>
                                </a>
                            </li>
                            <!-- 10 -->
                        </ul>
                    </li>
                    <li><a href="placements.php" data-original-title="" title="">
                            <span class="scoop-mtext">Placements</span>
                        </a>
                    </li>
                    <!-- new nav -->

                    <!-- Campus Life -->
                    <li class='ssss'>
                        <a href="javascript:void(0)" data-original-title="" title="">
                            <span class="scoop-mtext camplifemenu">Campus Life</span>

                        </a>
                        <!-- Add the submenus for "CSE" and "ECE" -->
                        <i class='bx bxs-chevron-down campuslifemenu arrow '></i>
                        <ul class="sitsmenu4 sub-menu">

                            <!-- 1 -->
                            <li>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfK_3gLJn5euBfGqIMY_MpoQE79s4VchF6vRS2jc2eyIrNNBA/viewform?usp=sf_link"
                                    data-original-title="" title="" target="_blank">
                                    <span class="scoop-micon"><i class="fa fa-tasks"></i></span>
                                    <span class="scoop-mtext dept">Leave Form</span>
                                </a>
                            </li>

                            <li>
                                <a href="ncc.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fa fa-podcast"></i></span>
                                    <span class="scoop-mtext dept">NCC</span>

                                </a>
                            </li>

                            <li>
                                <a href="nss.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-eye"></i></span>
                                    <span class="scoop-mtext dept">NSS</span>
                                </a>
                            </li>


                            <li>
                                <a href="rrc.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-ribbon"></i></span>
                                    <span class="scoop-mtext dept">RRC</span>
                                </a>
                            </li>


                            <li>
                                <a href="uba.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-eye"></i></span>
                                    <span class="scoop-mtext dept">UBA</span>
                                </a>
                            </li>

                            <li>
                                <a href="Online-fee.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fa fa-money-bill"></i></span>
                                    <span class="scoop-mtext dept">Online Fee payment</span>
                                </a>
                            </li>

                            <li>
                                <a href="merit-scholarship-scheme.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-ribbon"></i></span>
                                    <span class="scoop-mtext dept">Scholarship Schemes </span>
                                </a>
                            </li>
                            <!--  -->
                            <li>
                                <a href="library.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-edit"></i></span>
                                    <span class="scoop-mtext dept">Library</span>
                                </a>
                            </li>

                            <li>
                                <a href="Yoga.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fa fa-futbol"></i></span>
                                    <span class="scoop-mtext dept">Yoga</span>
                                </a>
                            </li>

                            <li>
                                <a href="Sports.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fa fa-futbol"></i></span>
                                    <span class="scoop-mtext dept">Sports </span>
                                </a>
                            </li>
                            <!--  -->
                            <li>
                                <a href="Hostel.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-hotel"></i></span>
                                    <span class="scoop-mtext dept">Hostels</span>
                                </a>
                            </li>

                            <li>
                                <a href="transport.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-bus"></i></span>
                                    <span class="scoop-mtext dept">Transport</span>
                                </a>
                            </li>

                            <li>
                                <a href="swacch.html" data-original-title="" title="" target="">
                                    <span class="scoop-micon"><i class="fas fa-tasks"></i></span>
                                    <span class="scoop-mtext dept">Swachh Bharat </span>
                                </a>
                            </li>
                            <!-- 10 -->
                        </ul>
                    </li>

                    <li><a href="#" data-original-title="" title="">
                            <span class="scoop-mtext">Alumni</span>
                            <span class="scoop-mcaret"></span>
                            <span class="scoop-micon"><i class="fas fa-university"></i></span>
                        </a>
                    </li>

                    <li><a href="iqac.php" data-original-title="" title="">
                            <span class="scoop-mtext">IQAC</span>
                            <span class="scoop-mcaret"></span>
                            <span class="scoop-micon"><i class="fas fa-university"></i></span>
                        </a>
                    </li>

                    <li><a href="#" data-original-title="" title="VFS Verification" target="">
                            <span class="scoop-mtext">Certificate Verification & WES</span>
                            <span class="scoop-mcaret"></span>
                            <span class="scoop-micon"><i class="fas fa-university"></i></span>
                        </a>
                    </li>

                    <li><a href="#" data-original-title="" title="">
                            <span class="scoop-mtext">MOU </span>
                            <span class="scoop-mcaret"></span>
                            <span class="scoop-micon"><i class="fas fa-university"></i></span>
                        </a>
                    </li>

                    <li><a href="#" data-original-title="" title="">
                            <span class="scoop-mtext">LMS</span>
                            <span class="scoop-mcaret"></span>
                            <span class="scoop-micon"><i class="fas fa-university"></i></span>
                        </a>
                    </li>

                    <li><a href="#" data-original-title="" title="Careers" target="">
                            <span class="scoop-micon"><img src="images/new.gif" data-no-retina=""
                                    alt="SITS Careers"></span>
                            <span class="scoop-mtext font-weight-600">Careers</span>
                            <span class="scoop-mcaret"></span>
                            <span class="scoop-micon"><i class="fas fa-university"></i></span>
                        </a>
                    </li>

                    <li><a href="https://admissions.siddhartha.co.in/" class="main-content1"></i>Admission</a>
                    </li>

                    <li class='ssss'>
                        <a href="#" class='mobilenadmenu'>NAD</a>
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                        <ul class="htmlCss-sub-menu sub-menu">
                            <li><a href="https://www.digilocker.gov.in/dashboard/" data-original-title="" title=""
                                    target="_blank">
                                    <span class="scoop-mtext">NAD Portal</span>
                                    <span class="scoop-mcaret"></span>
                                    <span class="scoop-micon"><i class="fas fa-user-graduate"></i></span>
                                </a></li>
                            <li><a href="esanad/index.php" data-original-title="" title="" target="">
                                    <span class="scoop-mtext">e-sanad Verification Payment</span>
                                    <span class="scoop-mcaret"></span>
                                    <span class="scoop-micon"><i class="fas fa-user-graduate"></i></span>
                                </a></li>

                            <li class="more">
                                <span style='display:none;'><a href="#">More</a>
                                    <i class='bx bxs-chevron-right arrow more-arrow'></i>
                                </span>

                            </li>
                        </ul>



                    </li>
                    <li  class='ssss'>
                        <a href="javascript:void(0)" data-original-title="" title="">
                            <span class="scoop-mtext mobileachievementmenu">Achievements </span>

                            <span class="scoop-micon"><i class="fas fa-school"></i></span>
                        </a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="Staff-Awards.html" data-original-title="" title="" target="">
                                    <span class="scoop-mtext">Staff Awards</span>
                                    <span class="scoop-micon"><i class="fas fa-user-graduate"></i></span>
                                </a></li>
                            <li><a href="student-achiv.html" data-original-title="" title="" target="">
                                    <span class="scoop-mtext">Student Awards</span>
                                    <span class="scoop-micon"><i class="fas fa-user-graduate"></i></span>
                                </a></li>
                        </ul>

                    </li>

                    <!-- LOGIN -->
                    <!-- acwdemics -->
                    <li class='ssss'>
                        <a href="javascript:void(0)" data-original-title="" title="">
                            <span class="scoop-mtext mobileloginmenu">Login</span>

                        </a>
                        <!-- Add the submenus for "CSE" and "ECE" -->
                        <i class='bx bxs-chevron-down loginmenu arrow '></i>
                        <ul class="sitsmenu5 sub-menu">

                            <!-- 1 -->
                            <li>
                                <a href="https://camu.in/" data-original-title="" title="" target="_blank">
                                    <span class="scoop-micon"><i class="fas fa-user-tie"></i></span>
                                    <span class="scoop-mtext">Staff Login</span>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.mycamu.co.in/#/" data-original-title="" title="" target="_blank">
                                    <span class="scoop-micon"><i class="fas fa-user-graduate"></i></span>
                                    <span class="scoop-mtext">Student Login</span>
                                </a>
                            </li>

                            <li>
                                <a href="https://alumni.siddhartha.co.in/" data-original-title="" title=""
                                    target="_blank">
                                    <span class="scoop-micon"><i class="fas fa-user-graduate"></i></span>
                                    <span class="scoop-mtext">Alumni Portal</span>
                                </a>
                            </li>



                            <!-- 10 -->
                        </ul>
                    </li>
                    <!-- END -->

                </ul>
            </div>




        </div>
    </nav>

    <script>
    // search-box open close js code
    let navbar = document.querySelector(".navbar");


    // sidebar open close js code
    let navLinks = document.querySelector(".nav-links");
    let menuOpenBtn = document.querySelector(".navbar .bx-menu");
    let menuCloseBtn = document.querySelector(".nav-links .bx-x");
    menuOpenBtn.onclick = function() {
        navLinks.style.right = "0";
    }
    menuCloseBtn.onclick = function() {
        navLinks.style.right = "-100%";
    }

    // sidebar submenu open close js code
    let htmlcssArrow = document.querySelector(".htmlcss-arrow");
    htmlcssArrow.onclick = function() {
        navLinks.classList.toggle("show1");
    }

    

    let moreArrow = document.querySelector(".more-arrow");
    moreArrow.onclick = function() {
        navLinks.classList.toggle("show2");
    }


    let jsArrow = document.querySelector(".js-arrow");
    jsArrow.onclick = function() {
        navLinks.classList.toggle("show3");
    }

// ############################################################################

    // aboutmenu for mobile
    let mobileaboutmenu = document.querySelector(".aboutmenu");
    mobileaboutmenu.onclick = function() {
        navLinks.classList.toggle("showsitsmenu");
    }

        // academicmenu for mobile
    let mobileacademicmenu = document.querySelector(".academicmenu");
        mobileacademicmenu.onclick = function() {
         navLinks.classList.toggle("showacademicmenu");
        }


    // departmenu for mobile
    let mobiledepartmenu = document.querySelector(".departmentmenu");
    mobiledepartmenu.onclick = function() {
        navLinks.classList.toggle("showdepartmentsmenu");
    }

    
    // Mobile Campus Life Menu
    let mobilecampmenu = document.querySelector(".camplifemenu");
    mobilecampmenu.onclick = function() {
        navLinks.classList.toggle("showcampuslifemenu");
    }

    // Mobile LOGIN Menu
    let mobilelogin = document.querySelector(".mobileloginmenu");
    mobilelogin.onclick = function() {
        navLinks.classList.toggle("showloginmenu");
    }
    // mobilenadmenu Menu
    let mobilenadmenu = document.querySelector(".mobilenadmenu");
    mobilenadmenu.onclick = function() {
        navLinks.classList.toggle("show1");
    } 
    // mobileachievementmenu Menu
    let mobileachievementmenu = document.querySelector(".mobileachievementmenu");
    mobileachievementmenu.onclick = function() {
        navLinks.classList.toggle("show3");
    } 

      
// ################################################################################

    let jsArrow1 = document.querySelector(".about-sitsmenu");
    jsArrow1.onclick = function() {
        navLinks.classList.toggle("showsitsmenu");
    }

    let jsArrow2 = document.querySelector(".academicsmenu");
    jsArrow2.onclick = function() {
        navLinks.classList.toggle("showacademicmenu");
    }
    let jsArrow3 = document.querySelector(".departmentsmenu");
    jsArrow3.onclick = function() {
        navLinks.classList.toggle("showdepartmentsmenu");
    }

    let jsArrow4 = document.querySelector(".campuslifemenu");
    jsArrow4.onclick = function() {
        navLinks.classList.toggle("showcampuslifemenu");
    }

    let jsArrow5 = document.querySelector(".loginmenu");
    jsArrow5.onclick = function() {
        navLinks.classList.toggle("showloginmenu");
    }
    </script>

</body>

</html>
