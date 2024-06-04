@extends('layout.master')
@section('content')

<!-- Rules Start --->
    <div class="container mt-5">
    <div>
        <h1 class="text-center mb-5">Chinland Tech Academy</h1>
        <h2 class="text-center">Rules and Regulations</h2>
        <p>At Chinland Tech Academy, we prioritize creating a conducive learning environment for all students and staff. Please review our rules and regulations to ensure a positive and productive experience:</p>
        <h5>For the School:</h5>
        <ol>
          <li>Respectful and Inclusive Environment: All students and staff are expected to treat each other with respect regardless of background, gender, race, or beliefs.</li>
          <li>Academic Integrity: Plagiarism or cheating in any form is not tolerated.</li>
          <li>Attendance and Punctuality: Regular attendance and punctuality are essential for successful completion of courses.</li>
          <li>Safety: The school premises must be kept clean and safe at all times.</li>
          <li>Professional Conduct: Staff members must maintain professionalism in their interactions with students and colleagues.</li>
        </ol>
        <h5>For Students:</h5>
        <ol>
          <li>Attendance: Students must attend all classes regularly and arrive on time.</li>
          <li>Academic Honesty: Plagiarism or cheating will result in disciplinary action.</li>
          <li>Respectful Behavior: Students must treat instructors and fellow students with respect.</li>
          <li>Dress Code: Students should dress appropriately for a learning environment.</li>
          <li>Equipment Care: Students are responsible for the proper use and care of school equipment and facilities.</li>
          <li>Confidentiality: Any information shared in the course of classes should be kept confidential unless otherwise instructed.</li>
          <li>Compliance: Students are expected to comply with all school policies and regulations.
          </li>
        </ol>
        <p>These rules and regulations are designed to ensure a positive and productive learning environment for all students and staff at Chinland Tech Academy.</p>
      </div>
      <hr>
      <!-- Roles end --->
      <!-- Calender Start --->
        <h2 class="text-center mb-5"> School Calendar</h2>
        <p class="text-center">Welcome to Chinland Tech Academy! Our academy offers a diverse range of courses designed to equip you with the essential skills needed for today’s tech-driven world. Below is our detailed school calendar for the upcoming term, outlining the start dates, duration, and key milestones for each course.</p>
        
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Web Development Course
            </div>
            <div class="card-body">
                <p><strong>Overview:</strong> Dive into the world of web development with our comprehensive course designed to teach you the fundamentals of creating and maintaining websites.</p>
                <ul class="list-unstyled">
                    <li><strong>Start Date:</strong> September 1, 2024</li>
                    <li><strong>Duration:</strong> 12 Weeks</li>
                    <li><strong>Schedule:</strong> Mondays, Wednesdays, Fridays</li>
                    <li><strong>Class Time:</strong> 10:00 AM - 1:00 PM</li>
                </ul>
                <h5>Course Milestones:</h5>
                <ul>
                    <li>Week 1-2: HTML & CSS Basics</li>
                    <li>Week 3-4: JavaScript Essentials</li>
                    <li>Week 5-6: Responsive Design</li>
                    <li>Week 7-8: Server-Side Programming (Node.js)</li>
                    <li>Week 9-10: Database Integration (MongoDB)</li>
                    <li>Week 11-12: Final Project & Presentation</li>
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                Video Editing Course
            </div>
            <div class="card-body">
                <p><strong>Overview:</strong> Learn the art of video editing with our hands-on course, perfect for aspiring videographers and content creators.</p>
                <ul class="list-unstyled">
                    <li><strong>Start Date:</strong> September 5, 2024</li>
                    <li><strong>Duration:</strong> 10 Weeks</li>
                    <li><strong>Schedule:</strong> Tuesdays, Thursdays</li>
                    <li><strong>Class Time:</strong> 2:00 PM - 5:00 PM</li>
                </ul>
                <h5>Course Milestones:</h5>
                <ul>
                    <li>Week 1-2: Introduction to Video Editing Software (Adobe Premiere Pro)</li>
                    <li>Week 3-4: Cutting & Trimming Techniques</li>
                    <li>Week 5-6: Transitions and Effects</li>
                    <li>Week 7-8: Sound Editing</li>
                    <li>Week 9: Advanced Editing Techniques</li>
                    <li>Week 10: Final Project & Screening</li>
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-info text-white">
                Graphic Design Course
            </div>
            <div class="card-body">
                <p><strong>Overview:</strong> Unlock your creativity with our graphic design course, where you’ll learn to create visually appealing designs using industry-standard tools.</p>
                <ul class="list-unstyled">
                    <li><strong>Start Date:</strong> September 3, 2024</li>
                    <li><strong>Duration:</strong> 14 Weeks</li>
                    <li><strong>Schedule:</strong> Mondays, Wednesdays</li>
                    <li><strong>Class Time:</strong> 3:00 PM - 6:00 PM</li>
                </ul>
                <h5>Course Milestones:</h5>
                <ul>
                    <li>Week 1-2: Principles of Design</li>
                    <li>Week 3-4: Adobe Photoshop Basics</li>
                    <li>Week 5-6: Adobe Illustrator Techniques</li>
                    <li>Week 7-8: Typography</li>
                    <li>Week 9-10: Branding & Logo Design</li>
                    <li>Week 11-12: Digital Illustration</li>
                    <li>Week 13-14: Final Project & Portfolio Development</li>
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-warning text-white">
                Basic Computing Course
            </div>
            <div class="card-body">
                <p><strong>Overview:</strong> Our basic computing course is designed for beginners looking to gain fundamental computer skills essential for everyday tasks and professional environments.</p>
                <ul class="list-unstyled">
                    <li><strong>Start Date:</strong> September 10, 2024</li>
                    <li><strong>Duration:</strong> 8 Weeks</li>
                    <li><strong>Schedule:</strong> Saturdays</li>
                    <li><strong>Class Time:</strong> 9:00 AM - 12:00 PM</li>
                </ul>
                <h5>Course Milestones:</h5>
                <ul>
                    <li>Week 1: Introduction to Computers</li>
                    <li>Week 2: Operating Systems (Windows & macOS)</li>
                    <li>Week 3: Basic Internet Skills</li>
                    <li>Week 4: Email & Communication Tools</li>
                    <li>Week 5: Word Processing (Microsoft Word)</li>
                    <li>Week 6: Spreadsheets (Microsoft Excel)</li>
                    <li>Week 7: Presentation Tools (Microsoft PowerPoint)</li>
                    <li>Week 8: Practical Exam & Certificate Awarding</li>
                </ul>
            </div>
        </div>
<!-- Calender END --->
        <hr>
        
    </div>
    <!-- Curriculum start -->
    <section id="curriculum" >
        <div class="container">
          <h2 class="text-center mb-5">Curriculum OF Courses:</h2>
          
          <div class="row">
            <div class="col-md-6 course-box1 ">
              <h2>Web Development Course</h2>
                <ul>
                    <li>Introduction to HTML</li>
                    <li>CSS Fundamentals</li>
                    <li>Responsive Web Design</li>
                    <li>JavaScript Basics</li>
                    <li>DOM Manipulation</li>
                    <li>Frontend Frameworks</li>
                    <li>Backend Development</li>
                    <li>Database Management</li>
                    <li>Deployment and Hosting</li>
                </ul>
              <div>
              </div>
              <a class="btn btn-primary py-2 px-3 mt-1" href="/register">Join now</a>
            </div>
            <div class="col-md-6 course-box1">
              <h2>Video Editing Course</h2>
                <ul>
                    <li>Introduction to Video Editing Software</li>
                    <li>Understanding Video Formats and Codecs</li>
                    <li>Basic Editing Techniques</li>
                    <li>Transitions and Effects</li>
                    <li>Color Correction and Grading</li>
                    <li>Audio Editing and Mixing</li>
                    <li>Creating Titles and Graphics</li>
                    <li>Advanced Editing Techniques</li>
                    <li>Exporting and Publishing</li>
                </ul>
              <a class="btn btn-primary py-2 px-3 mt-1" href="/register">Join now</a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-6 course-box1">
              <h2>Graphic Design Course</h2>
                <ul>
                    <li>Introduction to Graphic Design Principles</li>
                    <li>Understanding Design Software (e.g., Adobe Photoshop, Illustrator)</li>
                    <li>Typography and Fonts</li>
                    <li>Color Theory and Color Palettes</li>
                    <li>Image Editing and Manipulation</li>
                    <li>Vector Graphics</li>
                    <li>Logo Design</li>
                    <li>Print Design</li>
                    <li>Web Design Basics</li>
                    <li>Portfolio Development</li>
                </ul>
              <a class="btn btn-primary py-2 px-3 mt-1" href="/register">Join now</a>
            </div>
            <div class="col-md-6 course-box1">
              <h2>Basic Computer Training Course</h2>
                <ul>
                    <li>Introduction to Computers</li>
                    <li>Operating Systems Basics</li>
                    <li>Using Word Processing Software</li>
                    <li>Understanding Spreadsheets</li>
                    <li>Introduction to Internet</li>
                    <li>Email Basics</li>
                    <li>Basic File Management</li>
                    <li>Computer Security Awareness</li>
                    <li>Troubleshooting Common Issues</li>
                    <li>Online Resources and Continuing Education</li>
                </ul>
              <a class="btn btn-primary py-2 px-3 mt-1" href="/register">Join now</a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-6 course-box1">
              <h4>Project Work</h4>
              <p>Hands-on projects to apply the skills learned throughout the course.</p>
              <a class="btn btn-primary py-2 px-3 mt-1" href="">Bonus</a>
            </div>
          </div>
          <hr>
          <div class="text-center mb-5">
                <p><strong>Registration Deadline:</strong> August 25, 2024</p>
                <p><strong>Contact Information:</strong> For further details and registration, please contact us at <a href="mailto:vsuihmung@gmail.com">info@chinlandtechacademy.com</a> or call us at <a href="callto:+959889915212"> +959889915212</a>.</p>
            </div>
        </div>
      </section>
<!-- Curriculum end -->

@endsection