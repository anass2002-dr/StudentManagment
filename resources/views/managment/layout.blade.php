<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>@yield('titel')</title>

    <link href="/assets/img/school_icon.png" rel="icon">
    <link href="/assets/img/school_icons.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/assets/css/style2.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="d-flex" style="margin-right: 10px">
                <div class="dropdown">
                    <button class="btn dropdown-toggle text-muted" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Anass Dermaj
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                  <img src="/assets/img/student/student1.jpg" alt="" class="rounded-circle" width="40" height="40">
            </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="{{route('home.homeManagment')}}" class="nav_logo">
                         <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">My Schoole</span>
                    </a>
                    <div class="nav_list">
                        <a href="{{route('home.userManagment')}}" class="nav_link active">
                            <i class='bx bx-user nav_icon'></i> <span class="nav_name">User</span>
                       </a> 
                        <a href="{{route('home.calendarManagment')}}" class="nav_link"> 
                            <i class='bi-calendar-range'></i><span class="nav_name">Manages Calendar</span>
                        </a>
                        <a href="{{route('home.gradesManagment')}}" class="nav_link" title="student grades"> 
                            <i class='bi bi-card-checklist nav_icon'></i> <span class="nav_name">Students grades</span>
                        </a>
                        <a href="{{route('home.manageStudent')}}" class="nav_link">
                            <img src="/assets/img/graduated2.png" class="" alt="">
                            <span class="nav_name">Manages Student</span> 
                        </a>
                        <a href="{{route('home.manageTeacher')}}" class="nav_link">
                            <img src="/assets/img/teacher.png" class="" alt="">
                            <span class="nav_name">Manages Teacher</span> 
                        </a>
                        <a href="{{route('home.manageClass')}}" class="nav_link">
                            <img src="/assets/img/classroom.png" class="" alt="">
                            <span class="nav_name">Manages Class</span> 
                        </a>
                        <a href="{{route('home.manageAbsencesManagment')}}" class="nav_link">
                            <i class='bi bi-x-circle nav_icon'></i> <span class="nav_name">Manages Absences</span> 
                        </a> 
                        <a href="{{route('home.helpManagment')}}" class="nav_link">
                            <i class='bi bi-info-square nav_icon'></i> <span class="nav_name">help</span> 
                        </a>
                    </div>
                </div> 
                <a href="{{route('home.login')}}" class="nav_link"> 
                    <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> 
                </a>
            </nav>
        </div>
        <!--Container Main start-->
        <div class="bg-light">
            @yield('content')
        </div>
        <!--Container Main end-->
        <script src="/assets/js/assest.js"></script>
        <script src="/assets/js/MyBootstrap.bundle.min.js"></script>
        <script>
            // $(document).ready(function(){
            //     $('#btn_cc').click(function(){
            //         alert('ok');
            //     })
            // });
            
        </script>
</body>
</html>