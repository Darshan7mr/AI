<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AI</title>

    <!-- Bootstrap5 cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     
    <!-- FONTAWESOME ICON LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- BOOTSTRAP ICON LINK -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">   
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>

<style>

    ::-webkit-scrollbar{
        display: none;
    }

    /* to avoid border box onclick of input */
    input:focus,
    button:focus,
    option:focus,
    .form-control:focus{
        outline: none;
        box-shadow: none;
    }

    a{
        color:unset!important;
        text-decoration:none!important;
    }

    /* START NAVBAR STYLE  */
    /* Navbar toggle button */
    .custom-toggler .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 166, 0, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }
      
    .custom-toggler.navbar-toggler {
        border-color: rgba(255, 166, 0, 1);
    }

    @media only screen and (max-width: 767px){
    .navbar-nav {
        float: right;
        text-align: right;
        /* margin-top:20px; */
      }
      .navbarpadding{
        padding:15px !important;
      }
    }
 
    @media only screen and (min-width: 768px){
      .nav-item{
        margin-left:40px
      }
      .navbarpadding{
        padding:25px !important;
      }
    }
    /* END NAVBAR STYLE  */

    .dashboard {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .dashboard-app {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-flex: 2;
        -webkit-flex-grow: 2;
        -ms-flex-positive: 2;
        flex-grow: 2;
        /* height:100%; */
        margin-top:35px;
        /* overflow:scroll; */
    }

    .dashboard-content {
        -webkit-box-flex: 2;
        -webkit-flex-grow: 2;
        -ms-flex-positive: 2;
        flex-grow: 2;
    }

    .dashboard-nav {
        min-width: 210px;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        overflow: auto;
        background-image: linear-gradient(#5A65B0, #1DB099);
    }

    .dashboard-compact .dashboard-nav {
        display: none;
    }

    .dashboard-nav header {
        min-height: 84px;
        padding: 8px 27px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .dashboard-nav header .menu-toggle {
        display: none;
        margin-right: auto;
    }

    .dashboard-nav a {
        color:#FFF!important;
        font-size: 14px;
        letter-spacing: 0.56px;
        font-family:'Urbanist',sans-serif;
        font-weight:500;
       /*  margin-left: 10px;
        margin-right: 10px */
    }

    .logout{
        color: #FFFFFF;
        font-size: 14px;
        letter-spacing: 0.56px;
        /* font-family:'Urbanist',sans-serif; */
        cursor: pointer;
        background-color:#2163D3;
        border-radius: 8px;
        width: 100px;
        margin-left:10px;
        margin-top:50px;
        font-weight:100;
    }

    .dashboard-nav a:hover {
        text-decoration: none;
    }

    .dashboard-nav-list {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .dashboard-nav-item {
        /* min-height: 56px; */
        padding: 10px 0px 6px 20px;
        /* padding-left:40px; */
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        letter-spacing: 0.02em;
        transition: ease-out 0.5s;
        cursor:pointer;
    }

/* .active {
    background: rgba(0, 0, 0, 0.1);
} */

    .dashboard-nav-dropdown {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .dashboard-nav-dropdown.show {
        background: rgba(255, 255, 255, 0.04);
    }

    .dashboard-nav-dropdown.show > .dashboard-nav-dropdown-toggle {
        font-weight: bold;
    }

    .dashboard-nav-dropdown.show > .dashboard-nav-dropdown-toggle:after {
        -webkit-transform: none;
        -o-transform: none;
        transform: none;
    }

    .dashboard-nav-dropdown.show > .dashboard-nav-dropdown-menu {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .dashboard-nav-dropdown-toggle:after {
        content: "";
        margin-left: auto;
        display: inline-block;
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid rgba(81, 81, 81, 0.8);
        -webkit-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .dashboard-nav .dashboard-nav-dropdown-toggle:after {
        border-top-color: rgba(255, 255, 255, 0.72);
    }

    .dashboard-nav-dropdown-menu {
        display: none;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .dashboard-nav-dropdown-item {
        min-height: 40px;
        padding: 10px 20px 10px 70px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        transition: ease-out 0.5s;
    }

    .dashboard-nav-dropdown-item:hover {
        background: rgba(255, 255, 255, 0.04);
    }

    .menu-toggle {
        position: relative;
        width: 50px;
        height: 40px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #fff;
        font-size:large;
        background-color:#2163D3;
        border-radius:10px;
    }

    .menu-toggle:hover, .menu-toggle:active, .menu-toggle:focus {
        text-decoration: none;
        color: #fff;
    }
    /* 
    .menu-toggle i {
        font-size: 20px;
    } */

    .dashboard-toolbar {
        /* min-height: 84px; */
        background-color: #dfdfdf;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 8px 27px;
        /* position: fixed; */
        top: 10px;
        right: 0;
        left: 10px;
        z-index: 1000;
    }

    .flex-item {
        -webkit-flex: 0 1 auto;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
    }

    .nav-item-divider {
        height: 1px;
        margin: 1rem 0;
        overflow: hidden;
        background-color: rgba(236, 238, 239, 0.3);
    }

    @media (min-width: 768px) {
        .dashboard-app {
            margin-left: 210px;
            /* margin-top: 5px; */
        }
        .dashboard-compact .dashboard-app {
            margin-left: 0;
        }
    }
    @media (min-width: 768px) {
        .dashboard-toolbar {
            /* left: 238px; */
            display:none;
        }
        .dashboard-compact .dashboard-toolbar {
            left: 0;
        }
        .menu-toggle{
        display:none;
        }
    }

    @media (max-width: 767px) {
        .dashboard-content {
            padding: 15px 0px;
        }
    }

    @media (min-width: 768px) {
        .dashboard-nav {
           height:100%;
        }
    }

    @media (max-width: 767px) {
        .dashboard-nav {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            /* right: 30%;
            left: 30%; */
            bottom: 0;
            z-index: 1070;
            margin-bottom: 10%;
            margin-bottom:40px;
            margin-right:10px;
        }

        .dashboard-nav.mobile-show {
            display: block;
        }
    }

    @media (max-width: 767px) {
        .dashboard-nav header .menu-toggle {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
    }


    .dashboard-nav-item.dashboard-nav-item--active{
        background-color:#5A65B0;
    }

</style>

<body>
<div class="w-100" style="background-color: white;box-shadow: 0px 3px 6px #00000012;position:fixed;z-index: 1">
    <nav class="navbar navbar-expand " style="box-shadow: 0px 3px 6px #00000012;height:70px ">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a href="../index.html">
                    <img src="./images/Logo.png" alt="" style="width:100px;margin-left:60px;">
                </a>
            </div>
            <div class="navbar-nav">
                <button class="border-0 p-2" style="width:80px;background-color:#2163D3;color:white;border-radius: 8px;font-size: 11px;letter-spacing: 0.4px;font-family:'Urbanist',sans-serif;">
                    <i class="fa-regular fa-user"></i> Admin
                </button>
            </div>
        </div>
    </nav>
</div>

<div class='dashboard' style="">
    <div class="dashboard-nav py-3 text-white" style="margin-top:70px;position:fixed">      
        <nav class="dashboard-nav-list">
            <a onclick="movetoactive('Dashboard.php','1')" id="1" class="dashboard-nav-item">
                <i class="bi bi-columns-gap" style="margin-right:10px;"></i> Dashboard 
            </a>
            <a onclick="movetoactive('','2')" id="2" class="dashboard-nav-item"> 
                <i class="bi bi-list-ul" style="margin-right:10px;"></i> All
            </a>
        </nav>
        <nav class="dashboard-nav-list mt-5">
            <a onclick="movetoactive('','3')" id="3" class="dashboard-nav-item">
                <i class="bi bi-list-task" style="margin-right:10px;"></i>Project
            </a>
            <a onclick="movetoactive('','4')" id="4" class="dashboard-nav-item"> 
                <i class="bbi bi-collection" style="margin-right:10px;"></i>Library
                <!-- <i class="bi bi-collection"></i> -->
            </a>
            <a onclick="movetoactive('','5')" id="5" class="dashboard-nav-item">
                <i class="bi bi-calendar-check" style="margin-right:10px;"></i>Review
            </a>            
            <a onclick="movetoactive('','6')" id="6" class="dashboard-nav-item">
                <i class="bi bi-gear-fill" style="margin-right:10px;"></i>Setting 
            </a>
            <a onclick="movetoactive('','7')" id="7" class="dashboard-nav-item">
                <i class="bi bi-people" style="margin-right:10px;"></i>Admin
            </a>
        </nav>
        <nav class="dashboard-nav-list mt-5" style="padding:6px 0px 6px 20px;">
            <div>
                <h6 style="font-family:'Roboto',sans-serif;font-size:12px;font-weight:500;">Follow us</h6>
                <div style="display:flex;">
                    <a style="margin:5px"><i class="bi bi-linkedin"></i></a>
                    <a style="margin:5px"><i class="bi bi-facebook"></i></a>
                    <a style="margin:5px"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <div class="mt-4">
                <h6 style="font-family:'Roboto',sans-serif;font-size:12px;font-weight:500;">Call us</h6>
                <h6 style="font-family:'Roboto',sans-serif;font-size:12px;font-weight:500;">+91-9845543804</h6>                
            </div>
            <div class="mt-4">
                <h6 style="font-family:'Roboto',sans-serif;font-size:12px;font-weight:500;">Privacy Policy</h6>
                <h6 style="font-family:'Roboto',sans-serif;font-size:12px;font-weight:500;">© 2024 RightSense Technologies</h6>                
            </div>
        </nav>
    </div>

    <div class='dashboard-app'>
                  
    </div>

   
</div>
<div class="w-100" style="background-color: white;box-shadow: 0px 3px 6px #00000012;position:fixed;z-index: 1">
    <nav class="navbar navbar-expand " style="box-shadow: 0px 3px 6px #00000012;height:70px ">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a href="../index.html">
                    <img src="./images/Logo.png" alt="" style="width:100px;margin-left:60px;">
                </a>
            </div>
            <div class="navbar-nav">
                <button class="border-0 p-2" style="width:80px;background-color:#2163D3;color:white;border-radius: 8px;font-size: 11px;letter-spacing: 0.4px;font-family:'Urbanist',sans-serif;">
                    <i class="fa-regular fa-user"></i> Admin
                </button>
            </div>
        </div>
    </nav>
</div>

<div class='dashboard' style="">
    <div class="dashboard-nav py-3 text-white" style="margin-top:70px;position:fixed">      
        <nav class="dashboard-nav-list">
            <a onclick="movetoactive('Dashboard.php','1')" id="1" class="dashboard-nav-item">
                <i class="bi bi-columns-gap" style="margin-right:10px;"></i> Dashboard 
            </a>
            <a onclick="movetoactive('','2')" id="2" class="dashboard-nav-item"> 
                <i class="bi bi-list-ul" style="margin-right:10px;"></i> All
            </a>
        </nav>
        <nav class="dashboard-nav-list mt-5">
            <a onclick="movetoactive('','3')" id="3" class="dashboard-nav-item">
                <i class="bi bi-list-task" style="margin-right:10px;"></i>Project
            </a>
            <a onclick="movetoactive('','4')" id="4" class="dashboard-nav-item"> 
                <i class="bbi bi-collection" style="margin-right:10px;"></i>Library
                <!-- <i class="bi bi-collection"></i> -->
            </a>
            <a onclick="movetoactive('','5')" id="5" class="dashboard-nav-item">
                <i class="bi bi-calendar-check" style="margin-right:10px;"></i>Review
            </a>            
            <a onclick="movetoactive('','6')" id="6" class="dashboard-nav-item">
                <i class="bi bi-gear-fill" style="margin-right:10px;"></i>Setting 
            </a>
            <a onclick="movetoactive('','7')" id="7" class="dashboard-nav-item">
                <i class="bi bi-people" style="margin-right:10px;"></i>Admin
            </a>
        </nav>
        <nav class="dashboard-nav-list mt-5" style="padding:6px 0px 6px 20px;">
            <div>
                <h6 style="font-family:'Roboto',sans-serif;font-size:12px;font-weight:500;">Follow us</h6>
                <div style="display:flex;">
                    <a style="margin:5px"><i class="bi bi-linkedin"></i></a>
                    <a style="margin:5px"><i class="bi bi-facebook"></i></a>
                    <a style="margin:5px"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <div class="mt-4">
                <h6 style="font-family:'Roboto',sans-serif;font-size:12px;font-weight:500;">Call us</h6>
                <h6 style="font-family:'Roboto',sans-serif;font-size:12px;font-weight:500;">+91-9845543804</h6>                
            </div>
            <div class="mt-4">
                <h6 style="font-family:'Roboto',sans-serif;font-size:12px;font-weight:500;">Privacy Policy</h6>
                <h6 style="font-family:'Roboto',sans-serif;font-size:12px;font-weight:500;">© 2024 RightSense Technologies</h6>                
            </div>
        </nav>
    </div>


    <div class='dashboard-app'>
        <!-- <div class="main_div"> -->
        
        <!-- </div> -->            
    </div>

   
</div>

</body>
</html>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!-- Bootstrap tooltips -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
 <!-- Bootstrap core JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script>

    const mobileScreen = window.matchMedia("(max-width: 990px )");
    $(document).ready(function () {
        $(".dashboard-nav-dropdown-toggle").click(function () {
            $(this).closest(".dashboard-nav-dropdown")
                .toggleClass("show")
                .find(".dashboard-nav-dropdown")
                .removeClass("show");
            $(this).parent()
                .siblings()
                .removeClass("show");
        });
        $(".menu-toggle").click(function () {
            if (mobileScreen.matches) {
                $(".dashboard-nav").toggleClass("mobile-show");
            } else {
                $(".dashboard").toggleClass("dashboard-compact");
            }
        });
    });


    // change background color on click of sidemenu
    function logout() {
        localStorage.clear();
        window.location = 'index.html';
    }          
    if (localStorage.getItem("pagenavbarid") == "" || localStorage.getItem("pagenavbarid") == null || localStorage.getItem("pagenavbarid") == "null" || localStorage.getItem("pagenavbarid") == " ") {
        document.getElementById("1").classList.add("dashboard-nav-item--active")
    } else {
        var pagenavbarid = localStorage.getItem("pagenavbarid");
        $(".dashboard-nav-item").removeClass("dashboard-nav-item--active"); // This will remove active classes from all <li> tags
        document.getElementById(pagenavbarid).classList.add("dashboard-nav-item--active")
    }

    function movetoactive(path, id) {   
    localStorage.setItem("pagenavbarid", id)
    $(".dashboard-nav-item").removeClass("dashboard-nav-item--active"); // This will remove active classes from all <li> tags
    document.getElementById(id).classList.add("dashboard-nav-item--active")
    window.location = (path)
    }

</script>

