<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chinland Tech Academy</title>
  <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- icon link-->
    <link href="img/about.png" rel="icon">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-light">

<!-- Register form start -->
<div class="container ">
  <div class="wow fadeInUp " data-wow-delay="0.1s">
    <section id="register" class="vh-100 gradient-custom ">
      <div class="container py-5 h-100 ">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
              <div class="card-body p-4 p-md-5">
                <div class="text-end">
                  <h3><a href="/">X</a></h3>
                </div>
                <div class="text-center">
                  <img class="cllogo" src="img/about.png" alt="">
                  <h3 class="mb-4">Chinland Tech Academy</h3>
                </div>
                <h5 class="text-center mb-4">Student Admission</h5>
                
                <form id="registrationForm" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" action="{{ route('student.register') }}" >
                @csrf
                @method('post')

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="name">First Name:</label>
                        <input type="text" class="form-control" id="firstName" name="firstname" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="name">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" name="lastname" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="name">Age:</label>
                        <input type="number" class="form-control" id="age" name="age" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="name">Gender:</label><br>
                          <select id="gender" name="gender" required>
                            <option disabled>Select Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="name">Guardian Name:</label>
                        <input type="text" class="form-control" id="guardian" name="guardianname" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="phone">Your Phone Number:</label>
                        <input type="number" class="form-control" id="phoneno" name="phoneno" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="course">Select Course:</label>
                        <select class="form-control" id="course" name="course" required>
                            <option value="" disabled>Select a course</option>
                            <option value="HTML & CSS Fundamentals">Basic Computer Training</option>
                            <option value="JavaScript Basics">web Development Course</option>
                            <option value="Bootstrap Essentials">Video Editing Course</option>
                            <option value="PHP and MySQL Basics">Graphip Design Course</option>
                            <option value="Web Development Course">Web Development Course(with 4 courses)</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-group">
                          <label for="passportphoto">Upload Your Passsport size Photo</label>
                          <input type="file" id="profileimg" name="profileimg" class="form-control" required>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <p>This email will be Your login id to accessing the course in <a href="/">Chinland Tech Academy</a> website.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="email">Confirm password:</label>
                        <input type="password" class="form-control" name="confirm-password">
                      </div>
                    </div>
                  </div>
                  <div class="form-group mt-4 pt-2">
                    <input type="checkbox" value="" name="agree" required>
                    <label for="name">Acept the <a href="curriculum">Rules and Regulations.</a> </label>
                  </div>
                  <div class="row">
                    <div class="col-md-2 mt-4 pt-2 ">
                      <input data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit"/>
                    </div>
                    <div class="col-md-6 mt-5 pt-2">
                      <p>Already have registered? <a href="/">Go Back.</a></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
  </div>
</div>
  <!-- Register form end -->

  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
