<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chinland Tech Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- icon link-->
    <link href="img/about.png" rel="icon">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-light shadow sticky-top p-0">
        
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            
            <h2 class="m-0 text-primary"><img src="img/about.png" alt="Chinland Tech logo" class="cllogo" >CHINLAND TECH ACADEMY</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class=" {{ '/' == request()->path() ? 'active' : ''}} nav-item nav-link">Home</a>
                <a href="/about" class=" {{ 'about' == request()->path() ? 'active' : ''}} nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class=" {{ '' == request()->path() ? 'active' : ''}} nav-link dropdown-toggle" data-bs-toggle="dropdown">Library</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="/library" class=" {{ 'library' == request()->path() ? 'active' : ''}} dropdown-item">E-Books</a>
                        <a href="/blogs" class="{{ 'blogs' == request()->path() ? 'active' : ''}} dropdown-item">Blogs</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class=" {{ '' == request()->path() ? 'active' : ''}} nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="/webdevelopment" class=" {{ 'webdevelopment' == request()->path() ? 'active' : ''}} dropdown-item">Web Development</a>
                        <a href="/basicComputing" class="{{ 'basicComputing' == request()->path() ? 'active' : ''}} dropdown-item">Basic Computing</a>
                        <a href="/videoEditing" class="{{ 'videoEditing' == request()->path() ? 'active' : ''}} dropdown-item">Video Editing</a>
                        <a href="/graphicDesign" class="{{ 'graphicDesign' == request()->path() ? 'active' : ''}} dropdown-item">Graphic Design</a>
                        <a href="/freecourse" class="{{ 'freecourse' == request()->path() ? 'active' : ''}} dropdown-item">Free Courses</a>
                    </div>
                </div>
                <a href="/contact" class=" {{ 'contact' == request()->path() ? 'active' : ''}} nav-item nav-link">Contact</a>
            </div>
            <a href="/admin/login" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Sign in <i class="fa-sharp fa-solid fa-right-to-bracket"></i></a>
        </div>
    </nav>
<!-- Navbar End -->