<!doctype html>
<html lang="en">
  
<!-- Mirrored from geeksui.codescandy.com/geeks/mentor/mentor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 14:57:34 GMT -->
<head>
    <!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="Codescandy" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico" />

<!-- darkmode js -->
<script src="../assets/js/vendors/darkMode.js"></script>

<!-- Libs CSS -->
<link href="../assets/fonts/feather/feather.css" rel="stylesheet" />
<link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
<link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

<!-- Theme CSS -->
<link rel="stylesheet" href="../assets/css/theme.min.css">


    <title>Mentor Home | Geeks - Bootstrap 5 Template</title>
  </head>

  <body class="bg-white">
    <!-- Navbar -->
    <!-- navbar mentor -->
<nav class="navbar navbar-expand-lg">
  <div class="container px-0">
    <a class="navbar-brand" href="../index.html"><img src="../assets/images/mentor/geeks-mentor.svg" alt="Geeks" /></a>
    <div class="d-flex align-items-center order-lg-3">
      <div class="d-flex align-items-center">
        <div class="dropdown me-2">
          <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <i class="bi theme-icon-active"></i>
            <span class="visually-hidden bs-theme-text">Toggle theme</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                <i class="bi theme-icon bi-sun-fill"></i>
                <span class="ms-2">Light</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                <i class="bi theme-icon bi-moon-stars-fill"></i>
                <span class="ms-2">Dark</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                <i class="bi theme-icon bi-circle-half"></i>
                <span class="ms-2">Auto</span>
              </button>
            </li>
          </ul>
        </div>
        <div class="d-none d-md-block me-2">
          <a href="#!" class="btn btn-outline-primary">Login</a>
          <a href="#!" class="btn btn-primary">Browse all mentor</a>
        </div>
      </div>
      <div>
        <button
          class="navbar-toggler collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbar-default"
          aria-controls="navbar-default"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="icon-bar top-bar mt-0"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
        </button>
      </div>
    </div>
    <!-- Button -->

    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbar-default">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarLanding" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Landings</a>
          <ul class="dropdown-menu" aria-labelledby="navbarLanding">
            <li>
              <h4 class="dropdown-header">Landings</h4>
            </li>
            <li>
              <a href="mentor.html" class="dropdown-item">
                <span>Mentor</span>
                <span class="badge bg-primary ms-2">New</span>
              </a>
            </li>
            <li>
              <a href="../pages/landings/landing-education.html" class="dropdown-item">Education</a>
            </li>
            <li>
              <a href="../pages/landings/home-academy.html" class="dropdown-item">Home Academy</a>
            </li>
            <li>
              <a href="../pages/landings/landing-courses.html" class="dropdown-item">Courses</a>
            </li>
            <li>
              <a href="../pages/landings/course-lead.html" class="dropdown-item">Lead Course</a>
            </li>
            <li>
              <a href="../pages/landings/request-access.html" class="dropdown-item">Request Access</a>
            </li>
            <li>
              <a href="../pages/landings/landing-sass.html" class="dropdown-item">SaaS</a>
            </li>

            <li>
              <a href="../pages/landings/landing-job.html" class="dropdown-item">Job Listing</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarPages" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
          <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarPages">
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Courses</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../pages/course-single.html">Course Single</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/course-single-v2.html">Course Single v2</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/course-resume.html">Course Resume</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/course-category.html">Course Category</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/course-checkout.html">Course Checkout</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/course-filter-list.html">Course List/Grid</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/add-course.html">Add New Course</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Paths</a>
              <ul class="dropdown-menu">
                <li>
                  <a href="../pages/course-path.html" class="dropdown-item">Browse Path</a>
                </li>
                <li>
                  <a href="../pages/course-path-single.html" class="dropdown-item">Path Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Blog</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../pages/blog.html">Listing</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/blog-single.html">Article</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/blog-category.html">Category</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/blog-sidebar.html">Sidebar</a>
                </li>
              </ul>
            </li>

            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Career</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../pages/career.html">Overview</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/career-list.html">Listing</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/career-single.html">Opening</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Portfolio</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../pages/portfolio.html">List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/portfolio-single.html">Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                <span>Mentor</span>
                <span class="badge bg-primary ms-2">New</span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="mentor.html">Home</a>
                </li>
                <li>
                  <a class="dropdown-item" href="mentor-list.html">List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="mentor-single.html">Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Job</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../pages/landings/landing-job.html">Home</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/jobs/job-listing.html">List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/jobs/job-grid.html">Grid</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/jobs/job-single.html">Single</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/jobs/company-list.html">Company List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/jobs/company-about.html">Company Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Specialty</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../pages/coming-soon.html">Coming Soon</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/404-error.html">Error 404</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/maintenance-mode.html">Maintenance Mode</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/terms-condition-page.html">Terms &amp; Conditions</a>
                </li>
              </ul>
            </li>
            <li>
              <hr class="mx-3" />
            </li>

            <li>
              <a class="dropdown-item" href="../pages/about.html">About</a>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Help Center</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../pages/help-center.html">Help Center</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/help-center-faq.html">FAQ's</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/help-center-guide.html">Guide</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/help-center-guide-single.html">Guide Single</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/help-center-support.html">Support</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropdown-item" href="../pages/pricing.html">Pricing</a>
            </li>
            <li>
              <a class="dropdown-item" href="../pages/compare-plan.html">Compare Plan</a>
            </li>

            <li>
              <a class="dropdown-item" href="../pages/contact.html">Contact</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarAccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
          <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarAccount">
            <li>
              <h4 class="dropdown-header">Accounts</h4>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Instructor</a>
              <ul class="dropdown-menu">
                <li class="text-wrap">
                  <h5 class="dropdown-header text-dark">Instructor</h5>
                  <p class="dropdown-text mb-0">Instructor dashboard for manage courses and earning.</p>
                </li>
                <li>
                  <hr class="mx-3" />
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/dashboard-instructor.html">Dashboard</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/instructor-profile.html">Profile</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/instructor-courses.html">My Courses</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/instructor-order.html">Orders</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/instructor-reviews.html">Reviews</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/instructor-students.html">Students</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/instructor-payouts.html">Payouts</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/instructor-earning.html">Earning</a>
                </li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Quiz</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="../pages/instructor-quiz.html">Quiz</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../pages/instructor-quiz-details.html">Single</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../pages/instructor-quiz-result.html">Result</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Students</a>
              <ul class="dropdown-menu">
                <li class="text-wrap">
                  <h5 class="dropdown-header text-dark">Students</h5>
                  <p class="dropdown-text mb-0">Students dashboard to manage your courses and subscriptions.</p>
                </li>
                <li>
                  <hr class="mx-3" />
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/dashboard-student.html">Dashboard</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/student-subscriptions.html">Subscriptions</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/payment-method.html">Payments</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/billing-info.html">Billing Info</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/invoice.html">Invoice</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/invoice-details.html">Invoice Details</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/dashboard-student.html">Bookmarked</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../pages/dashboard-student.html">My Path</a>
                </li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Quiz</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="../pages/student-quiz.html">Quiz</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../pages/student-quiz-attempt.html">Attempt</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../pages/student-quiz-start.html">Start</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../pages/student-quiz-result.html">Result</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Admin</a>
              <ul class="dropdown-menu">
                <li class="text-wrap">
                  <h5 class="dropdown-header text-dark">Master Admin</h5>
                  <p class="dropdown-text mb-0">Master admin dashboard to manage courses, user, site setting , and work with amazing apps.</p>
                </li>
                <li>
                  <hr class="mx-3" />
                </li>
                <li class="px-3 d-grid">
                  <a href="../pages/dashboard/admin-dashboard.html" class="btn btn-sm btn-primary">Go to Dashboard</a>
                </li>
              </ul>
            </li>
            <li>
              <hr class="mx-3" />
            </li>
            <li>
              <a class="dropdown-item" href="../pages/sign-in.html">Sign In</a>
            </li>
            <li>
              <a class="dropdown-item" href="../pages/sign-up.html">Sign Up</a>
            </li>
            <li>
              <a class="dropdown-item" href="../pages/forget-password.html">Forgot Password</a>
            </li>
            <li>
              <a class="dropdown-item" href="../pages/profile-edit.html">Edit Profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="../pages/security.html">Security</a>
            </li>
            <li>
              <a class="dropdown-item" href="../pages/social-profile.html">Social Profiles</a>
            </li>
            <li>
              <a class="dropdown-item" href="../pages/notifications.html">Notifications</a>
            </li>
            <li>
              <a class="dropdown-item" href="../pages/profile-privacy.html">Privacy Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="../pages/delete-profile.html">Delete Profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="../pages/linked-accounts.html">Linked Accounts</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fe fe-more-horizontal"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
            <div class="list-group">
              <a class="list-group-item list-group-item-action border-0" href="../docs/index.html">
                <div class="d-flex align-items-center">
                  <i class="fe fe-file-text fs-3 text-primary"></i>
                  <div class="ms-3">
                    <h5 class="mb-0">Documentations</h5>
                    <p class="mb-0 fs-6">Browse the all documentation</p>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action border-0" href="../docs/bootstrap-5-snippets.html">
                <div class="d-flex align-items-center">
                  <i class="bi bi-files fs-3 text-primary"></i>
                  <div class="ms-3">
                    <h5 class="mb-0">Snippet</h5>
                    <p class="mb-0 fs-6">Bunch of Snippet</p>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action border-0" href="../docs/changelog.html">
                <div class="d-flex align-items-center">
                  <i class="fe fe-layers fs-3 text-primary"></i>
                  <div class="ms-3">
                    <h5 class="mb-0">
                      Changelog
                      <span class="text-primary ms-1" id="changelog">v3.1.1</span>
                    </h5>
                    <p class="mb-0 fs-6">See what's new</p>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action border-0" href="../../geeks-rtl/index-2.html" target="_blank">
                <div class="d-flex align-items-center">
                  <i class="fe fe-toggle-right fs-3 text-primary"></i>
                  <div class="ms-3">
                    <h5 class="mb-0">RTL demo</h5>
                    <p class="mb-0 fs-6">RTL Pages</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Page Content -->
    <main>
      <!--Hero section-->
      <section class="py-md-8 py-6" style="background-image: url(../assets/images/mentor/mentor-glow.svg); background-repeat: no-repeat; background-size: contain">
        <div class="container py-lg-6">
          <!--row-->
          <div class="row align-items-center gy-4 justify-content-center">
            <div class="col-xxl-5 col-xl-6 col-md-10">
              <div class="d-flex flex-column gap-5 text-center">
                <div class="d-flex flex-column gap-2">
                  <span class="text-dark fs-5">Learn a new skill, launch a project, land your dream career.</span>
                  <!--heading-->
                  <h1 class="mb-0 display-2 fw-bold">
                    <span>1-on-1</span>
                    <span class="headingTyped text-primary" data-strings="Javascript, Startup, React, Marketing, Branding"></span>
                    <div>Mentorship</div>
                  </h1>
                </div>
                <div class="d-flex flex-column gap-3">
                  <!--form-->
                  <form>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="Search by Skills" aria-label="Search by Skills" aria-describedby="basic-addon2" />
                      <button class="btn btn-primary btn-lg" id="basic-addon2">Find mentors</button>
                    </div>
                  </form>

                  <div class="gap-2 d-flex flex-wrap justify-content-center">
                    <a href="mentor-list.html" class="btn btn-tag btn-sm">Frontend</a>
                    <a href="mentor-list.html" class="btn btn-tag btn-sm">Devops</a>
                    <a href="mentor-list.html" class="btn btn-tag btn-sm">UI/UX designer</a>
                    <a href="mentor-list.html" class="btn btn-tag btn-sm">Data Science</a>
                    <a href="mentor-list.html" class="btn btn-tag btn-sm">Full Stack</a>
                    <a href="mentor-list.html" class="btn btn-tag btn-sm">Backend</a>
                    <a href="mentor-list.html" class="btn btn-tag btn-sm">Data Analyst</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="position-relative d-flex overflow-x-hidden py-lg-4 pt-4">
            <div class="animate-marquee d-flex gap-3">
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-2.jpg" alt="mentor 1" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Andrew Lupien</h3>
                    <span class="text-gray-800">Quality Assurance Engineer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-3.jpg" alt="mentor 2" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Bernice Perry</h3>
                    <span class="text-gray-800">Senior Business Analyst</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-4.jpg" alt="mentor 3" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Patrice Long</h3>
                    <span class="text-gray-800">Senior Data Engineer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-5.jpg" alt="mentor 4" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Akshay Sharma</h3>
                    <span class="text-gray-800">Frontend Engineer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-6.jpg" alt="mentor 5" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Jessica Lupien</h3>
                    <span class="text-gray-800">UI/UX Designer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-7.jpg" alt="mentor 6" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Cathy Diehl</h3>
                    <span class="text-gray-800">Quality Assurance Engineer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-8.jpg" alt="mentor 7" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Patrice Long</h3>
                    <span class="text-gray-800">Software Engineer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-1.jpg" alt="mentor 8" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Akshay Sharma</h3>
                    <span class="text-gray-800">Frontend Engineer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-2.jpg" alt="mentor 9" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Jessica Lupien</h3>
                    <span class="text-gray-800">Quality Assurance Engineer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-3.jpg" alt="mentor 10" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Bernice Perry</h3>
                    <span class="text-gray-800">Senior Business Analyst</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-4.jpg" alt="mentor 11" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Patrice Long</h3>
                    <span class="text-gray-800">Senior Data Engineer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-5.jpg" alt="mentor 12" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Cathy Diehl</h3>
                    <span class="text-gray-800">Frontend Engineer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-6.jpg" alt="mentor 13" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Jessica Lupien</h3>
                    <span class="text-gray-800">UX/UI Designer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-7.jpg" alt="mentor 14" class="avatar avatar-xl rounded-circle" />
                  <!--ccontent-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Andrew Lupien</h3>
                    <span class="text-gray-800">Senior Business Analyst</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-8.jpg" alt="mentor 15" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Cathy Diehl</h3>
                    <span class="text-gray-800">Frontend Engineer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-1.jpg" alt="mentor 16" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">James Anderson</h3>
                    <span class="text-gray-800">UI/UX Designer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-2.jpg" alt="mentor 18" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Cathy Diehl</h3>
                    <span class="text-gray-800">Software Engineer</span>
                  </div>
                </div>
              </a>
              <a href="mentor-single.html" class="bg-white text-center shadow-sm text-wrap rounded-4 w-100 border card-lift border" style="width: 200px !important">
                <!--img-->
                <div class="p-3">
                  <img src="../assets/images/mentor/mentor-img-3.jpg" alt="mentor 19" class="avatar avatar-xl rounded-circle" />
                  <!--content-->
                  <div class="mt-3">
                    <h3 class="mb-0 h4">Akshay Sharma</h3>
                    <span class="text-gray-800">Frontend Engineers</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!--Hero section-->
      <!--Logo section-->
      <section class="py-lg-8 py-6">
        <div class="container py-lg-6">
          <!--row-->
          <div class="row">
            <div class="col-md-12">
              <!--text-->
              <div class="d-flex justify-content-center text-center mb-6">
                <h4 class="mb-0">Learn from founders/operators of top brands.</h4>
              </div>
            </div>
          </div>
          <!--row-->
          <div class="row row-cols-xl-7 gy-6">
            <!--logo-->
            <div class="border-end-0 border-end-md text-center col">
              <img src="../assets/images/mentor/brand-slack.svg" alt="logo 1" />
            </div>
            <!--logo-->
            <div class="border-end-0 border-end-md text-center col">
              <img src="../assets/images/mentor/brand-linkedin.svg" alt="logo 2" />
            </div>
            <!--logo-->
            <div class="border-end-0 border-end-md text-center col">
              <img src="../assets/images/mentor/brand-zoom.svg" alt="logo 3" />
            </div>
            <!--logo-->
            <div class="border-end-0 border-end-md text-center col">
              <img src="../assets/images/mentor/brand-nvidia.svg" alt="logo 4" />
            </div>
            <!--logo-->
            <div class="border-end-0 border-end-md text-center col">
              <img src="../assets/images/mentor/brand-microsoft.svg" alt="logo 5" />
            </div>
            <!--logo-->
            <div class="border-end-0 border-end-md text-center col">
              <img src="../assets/images/mentor/brand-google.svg" alt="logo 6" />
            </div>
            <!--logo-->
            <div class="text-center col">
              <img src="../assets/images/mentor/brand-netflix.svg" alt="logo 7" />
            </div>
          </div>
        </div>
      </section>
      <!--Logo section-->
      <!--Explore category-->
      <section class="py-lg-8 pb-6">
        <div class="container pb-lg-6">
          <!--row-->
          <div class="row">
            <div class="col-12">
              <div class="text-center mb-6">
                <!--heading-->
                <h2 class="mb-0 h1">Explore Mentors by Category</h2>
              </div>
            </div>
          </div>
          <!--row-->
          <div class="row gy-4">
            <div class="col-xxl-2 col-md-4 col-12">
              <!--card-->
              <a href="#!" class="card card-border-primary rounded-4">
                <!--card body-->
                <div class="card-body d-flex flex-column gap-4 text-center">
                  <div>
                    <!--icon-->
                    <div class="icon-shape icon-xxl bg-light-primary rounded-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear text-primary" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                        <path
                          d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                      </svg>
                    </div>
                  </div>
                  <!--content-->
                  <div>
                    <h3 class="mb-0">Engineering</h3>
                    <span>21 Mentors</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xxl-2 col-md-4 col-12">
              <!--card-->
              <a href="#!" class="card card-border-primary rounded-4">
                <!--card body-->
                <div class="card-body d-flex flex-column gap-4 text-center">
                  <div>
                    <!--icon-->
                    <div class="icon-shape icon-xxl bg-light-danger rounded-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-palette2 text-danger" viewBox="0 0 16 16">
                        <path
                          d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 .5.5v5.277l4.147-4.131a.5.5 0 0 1 .707 0l3.535 3.536a.5.5 0 0 1 0 .708L10.261 10H15.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5H3a3 3 0 0 1-2.121-.879A3 3 0 0 1 0 13.044m6-.21 7.328-7.3-2.829-2.828L6 7.188zM4.5 13a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0M15 15v-4H9.258l-4.015 4zM0 .5v12.495zm0 12.495V13z" />
                      </svg>
                    </div>
                  </div>
                  <!--content-->
                  <div>
                    <h3 class="mb-0">Design</h3>
                    <span>23 Mentors</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xxl-2 col-md-4 col-12">
              <!--card-->
              <a href="#!" class="card card-border-primary rounded-4">
                <!--card body-->
                <div class="card-body d-flex flex-column gap-4 text-center">
                  <div>
                    <!--icon-->
                    <div class="icon-shape icon-xxl bg-light-info rounded-circle">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M20.515 12.0001C23.5962 7.67381 25.1675 3.20256 22.9825 1.01756C20.7975 -1.16744 16.3262 0.403809 12 3.48506C7.67375 0.403809 3.2025 -1.16744 1.0175 1.01756C-1.1675 3.20256 0.403748 7.67381 3.485 12.0001C0.403748 16.3263 -1.1675 20.7976 1.0175 22.9826C1.72125 23.6863 2.66125 24.0001 3.75625 24.0001C6.06625 24.0001 9.06625 22.6038 12.0062 20.5151C14.9337 22.6038 17.9337 24.0001 20.25 24.0001C21.345 24.0001 22.2862 23.6851 22.9887 22.9826C25.1675 20.7976 23.5962 16.3263 20.515 12.0001ZM21.5687 2.43131C22.5237 3.38631 21.8787 6.48131 19.2537 10.3413C18.4233 9.31329 17.5392 8.32984 16.605 7.39506C15.6701 6.46218 14.6867 5.57929 13.6587 4.75006C17.5187 2.12506 20.6137 1.47506 21.5687 2.43131ZM18.0362 12.0001C17.1517 13.119 16.2017 14.1846 15.1912 15.1913C14.1846 16.2018 13.119 17.1518 12 18.0363C10.881 17.1518 9.81543 16.2018 8.80875 15.1913C7.79827 14.1846 6.84828 13.119 5.96375 12.0001C7.73838 9.76376 9.7637 7.73844 12 5.96381C13.119 6.84834 14.1846 7.79834 15.1912 8.80881C16.2017 9.81549 17.1517 10.8811 18.0362 12.0001ZM2.43125 2.43131C2.70625 2.15506 3.16 2.01256 3.75875 2.01256C5.23625 2.01256 7.595 2.87506 10.34 4.75006C9.31305 5.57996 8.33005 6.46283 7.395 7.39506C6.46212 8.32993 5.57923 9.31338 4.75 10.3413C2.125 6.48131 1.47625 3.38631 2.43125 2.43131ZM2.43125 21.5688C1.47625 20.6138 2.125 17.5188 4.75 13.6588C5.58044 14.6868 6.46459 15.6703 7.39875 16.6051C8.33301 17.5372 9.31518 18.4201 10.3412 19.2501C6.48125 21.8751 3.38625 22.5251 2.43125 21.5688ZM21.5687 21.5688C20.6137 22.5251 17.5187 21.8788 13.6587 19.2538C14.6862 18.4227 15.6696 17.5386 16.605 16.6051C17.5379 15.6702 18.4208 14.6867 19.25 13.6588C21.875 17.5188 22.5237 20.6138 21.5687 21.5688ZM13.5 12.0001C13.5 12.2967 13.412 12.5867 13.2472 12.8334C13.0824 13.0801 12.8481 13.2723 12.574 13.3859C12.2999 13.4994 11.9983 13.5291 11.7074 13.4712C11.4164 13.4134 11.1491 13.2705 10.9393 13.0607C10.7296 12.8509 10.5867 12.5837 10.5288 12.2927C10.4709 12.0017 10.5006 11.7001 10.6142 11.426C10.7277 11.1519 10.92 10.9177 11.1666 10.7529C11.4133 10.588 11.7033 10.5001 12 10.5001C12.3978 10.5001 12.7794 10.6581 13.0607 10.9394C13.342 11.2207 13.5 11.6022 13.5 12.0001Z"
                          fill="#0EA5E9" />
                      </svg>
                    </div>
                  </div>
                  <!--content-->
                  <div>
                    <h3 class="mb-0">Data Science</h3>
                    <span>42 Mentors</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xxl-2 col-md-4 col-12">
              <!--card-->
              <a href="#!" class="card card-border-primary rounded-4">
                <!--card body-->
                <div class="card-body d-flex flex-column gap-4 text-center">
                  <div>
                    <!--icon-->
                    <div class="icon-shape icon-xxl bg-light-success rounded-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-briefcase text-success" viewBox="0 0 16 16">
                        <path
                          d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5" />
                      </svg>
                    </div>
                  </div>
                  <!--content-->
                  <div>
                    <h3 class="mb-0">Business</h3>
                    <span>45 Mentors</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xxl-2 col-md-4 col-12">
              <!--card-->
              <a href="#!" class="card card-border-primary rounded-4">
                <!--card body-->
                <div class="card-body d-flex flex-column gap-4 text-center">
                  <div>
                    <!--icon-->
                    <div class="icon-shape icon-xxl bg-light-warning rounded-circle">
                      <svg width="24" height="24" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M21 14.6787V7.32125C21.0006 7.03737 20.9269 6.75828 20.7861 6.51177C20.6453 6.26526 20.4423 6.05994 20.1975 5.91625L13.78 2.21C13.5429 2.07308 13.2738 2.001 13 2.001C12.7262 2.001 12.4572 2.07308 12.22 2.21L5.80375 5.91625C5.55868 6.05978 5.35551 6.26503 5.21449 6.51155C5.07346 6.75807 4.99951 7.03724 5 7.32125V14.6787C4.99938 14.9626 5.07315 15.2417 5.21395 15.4882C5.35474 15.7347 5.55767 15.9401 5.8025 16.0837L12.22 19.79C12.4572 19.9268 12.7262 19.9988 13 19.9988C13.2738 19.9988 13.5428 19.9268 13.78 19.79L20.1963 16.0837C20.4413 15.9402 20.6445 15.735 20.7855 15.4884C20.9265 15.2419 21.0005 14.9628 21 14.6787ZM13 4.06875L18.0737 7L13 9.92875L7.92625 7L13 4.06875ZM7 8.77375L12 11.6612V17.3538L7 14.4662V8.77375ZM14 17.3538V11.6612L19 8.77375V14.4662L14 17.3538ZM26 1V6C26 6.26522 25.8946 6.51957 25.7071 6.70711C25.5196 6.89464 25.2652 7 25 7C24.7348 7 24.4804 6.89464 24.2929 6.70711C24.1054 6.51957 24 6.26522 24 6V2H20C19.7348 2 19.4804 1.89464 19.2929 1.70711C19.1054 1.51957 19 1.26522 19 1C19 0.734784 19.1054 0.48043 19.2929 0.292893C19.4804 0.105357 19.7348 0 20 0H25C25.2652 0 25.5196 0.105357 25.7071 0.292893C25.8946 0.48043 26 0.734784 26 1ZM7 21C7 21.2652 6.89464 21.5196 6.70711 21.7071C6.51957 21.8946 6.26522 22 6 22H1C0.734784 22 0.48043 21.8946 0.292893 21.7071C0.105357 21.5196 0 21.2652 0 21V16C0 15.7348 0.105357 15.4804 0.292893 15.2929C0.48043 15.1054 0.734784 15 1 15C1.26522 15 1.51957 15.1054 1.70711 15.2929C1.89464 15.4804 2 15.7348 2 16V20H6C6.26522 20 6.51957 20.1054 6.70711 20.2929C6.89464 20.4804 7 20.7348 7 21ZM26 16V21C26 21.2652 25.8946 21.5196 25.7071 21.7071C25.5196 21.8946 25.2652 22 25 22H20C19.7348 22 19.4804 21.8946 19.2929 21.7071C19.1054 21.5196 19 21.2652 19 21C19 20.7348 19.1054 20.4804 19.2929 20.2929C19.4804 20.1054 19.7348 20 20 20H24V16C24 15.7348 24.1054 15.4804 24.2929 15.2929C24.4804 15.1054 24.7348 15 25 15C25.2652 15 25.5196 15.1054 25.7071 15.2929C25.8946 15.4804 26 15.7348 26 16ZM0 6V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H6C6.26522 0 6.51957 0.105357 6.70711 0.292893C6.89464 0.48043 7 0.734784 7 1C7 1.26522 6.89464 1.51957 6.70711 1.70711C6.51957 1.89464 6.26522 2 6 2H2V6C2 6.26522 1.89464 6.51957 1.70711 6.70711C1.51957 6.89464 1.26522 7 1 7C0.734784 7 0.48043 6.89464 0.292893 6.70711C0.105357 6.51957 0 6.26522 0 6Z"
                          fill="#C28135" />
                      </svg>
                    </div>
                  </div>
                  <!--content-->
                  <div>
                    <h3 class="mb-0">Product</h3>
                    <span>56 Mentors</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xxl-2 col-md-4 col-12">
              <!--card-->
              <a href="#!" class="card card-border-primary rounded-4">
                <!--card body-->
                <div class="card-body d-flex flex-column gap-4 text-center">
                  <div>
                    <!--icon-->
                    <div class="icon-shape icon-xxl bg-light-primary rounded-circle">
                      <svg width="24" height="24" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M7.2925 13.2925L4 16.5863L1.7075 14.2925C1.56764 14.1525 1.38939 14.0571 1.19531 14.0185C1.00122 13.9798 0.800033 13.9996 0.61721 14.0754C0.434387 14.1511 0.278151 14.2794 0.16828 14.444C0.0584092 14.6086 -0.000155428 14.8021 3.09801e-07 15V21C3.09801e-07 21.2652 0.105357 21.5196 0.292894 21.7071C0.48043 21.8946 0.734784 22 1 22H7C7.1979 22.0002 7.39139 21.9416 7.55598 21.8317C7.72058 21.7218 7.84887 21.5656 7.92462 21.3828C8.00038 21.2 8.02018 20.9988 7.98153 20.8047C7.94288 20.6106 7.84751 20.4324 7.7075 20.2925L5.41375 18L8.7075 14.7075C8.89514 14.5199 9.00056 14.2654 9.00056 14C9.00056 13.7346 8.89514 13.4801 8.7075 13.2925C8.51986 13.1049 8.26536 12.9994 8 12.9994C7.73464 12.9994 7.48014 13.1049 7.2925 13.2925ZM2 20V17.4137L4.58625 20H2ZM5.41375 4L7.7075 1.7075C7.84751 1.56764 7.94288 1.38939 7.98153 1.19531C8.02018 1.00122 8.00038 0.800033 7.92462 0.61721C7.84887 0.434387 7.72058 0.278151 7.55598 0.16828C7.39139 0.0584092 7.1979 -0.000155428 7 3.09801e-07H1C0.734784 3.09801e-07 0.48043 0.105357 0.292894 0.292894C0.105357 0.48043 3.09801e-07 0.734784 3.09801e-07 1V7C-0.000155428 7.1979 0.0584092 7.39139 0.16828 7.55598C0.278151 7.72058 0.434387 7.84887 0.61721 7.92462C0.800033 8.00038 1.00122 8.02018 1.19531 7.98153C1.38939 7.94288 1.56764 7.84751 1.7075 7.7075L4 5.41375L7.2925 8.7075C7.48014 8.89514 7.73464 9.00056 8 9.00056C8.26536 9.00056 8.51986 8.89514 8.7075 8.7075C8.89514 8.51986 9.00056 8.26536 9.00056 8C9.00056 7.73464 8.89514 7.48014 8.7075 7.2925L5.41375 4ZM2 4.58625V2H4.58625L2 4.58625ZM21 3.09801e-07H15C14.8021 -0.000155428 14.6086 0.0584092 14.444 0.16828C14.2794 0.278151 14.1511 0.434387 14.0754 0.61721C13.9996 0.800033 13.9798 1.00122 14.0185 1.19531C14.0571 1.38939 14.1525 1.56764 14.2925 1.7075L16.5863 4L13.2925 7.2925C13.1049 7.48014 12.9994 7.73464 12.9994 8C12.9994 8.26536 13.1049 8.51986 13.2925 8.7075C13.4801 8.89514 13.7346 9.00056 14 9.00056C14.2654 9.00056 14.5199 8.89514 14.7075 8.7075L18 5.41375L20.2925 7.7075C20.4324 7.84751 20.6106 7.94288 20.8047 7.98153C20.9988 8.02018 21.2 8.00038 21.3828 7.92462C21.5656 7.84887 21.7218 7.72058 21.8317 7.55598C21.9416 7.39139 22.0002 7.1979 22 7V1C22 0.734784 21.8946 0.48043 21.7071 0.292894C21.5196 0.105357 21.2652 3.09801e-07 21 3.09801e-07ZM20 4.58625L17.4137 2H20V4.58625ZM21.3825 14.0763C21.1998 14.0005 20.9987 13.9805 20.8047 14.019C20.6107 14.0575 20.4324 14.1527 20.2925 14.2925L18 16.5863L14.7075 13.2925C14.5199 13.1049 14.2654 12.9994 14 12.9994C13.7346 12.9994 13.4801 13.1049 13.2925 13.2925C13.1049 13.4801 12.9994 13.7346 12.9994 14C12.9994 14.2654 13.1049 14.5199 13.2925 14.7075L16.5863 18L14.2925 20.2925C14.1525 20.4324 14.0571 20.6106 14.0185 20.8047C13.9798 20.9988 13.9996 21.2 14.0754 21.3828C14.1511 21.5656 14.2794 21.7218 14.444 21.8317C14.6086 21.9416 14.8021 22.0002 15 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V15C22 14.8022 21.9413 14.6089 21.8314 14.4445C21.7214 14.28 21.5652 14.1519 21.3825 14.0763ZM20 20H17.4137L20 17.4137V20Z"
                          fill="#754FFE" />
                      </svg>
                    </div>
                  </div>
                  <!--content-->
                  <div>
                    <h3 class="mb-0">Explore All</h3>
                    <span>700+ Mentors</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!--Explore category-->
      <!--Session away-->
      <section class="py-6 py-lg-8 bg-light">
        <div class="container py-lg-6">
          <!--row-->
          <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
              <div class="text-center mb-6 d-flex flex-column gap-2">
                <!--heading-->
                <h2 class="mb-0 mx-xl-8 h1">1,600+ mentors are just a Free Trial Session away</h2>
                <!--para-->
                <p class="mb-0">Choose your ideal mentor and get started with a FREE trial session</p>
              </div>
            </div>
          </div>
          <!--row-->
          <div class="row g-4">
            <div class="col-12">
              <div class="d-flex flex-md-row gap-2 flex-column justify-content-between">
                <!--form-->
                <form>
                  <label for="mentorInputSearch" class="form-label visually-hidden">Search</label>
                  <input type="search" class="form-control" id="mentorInputSearch" placeholder="Search by company, skills or role" />
                </form>
                <div class="d-grid d-md-flex">
                  <a href="mentor-list.html" class="btn btn-primary">Explore all mentors</a>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
              <!--card-->
              <div class="card rounded-4 card-bordered card-lift">
                <div class="p-3 d-flex flex-column gap-3">
                  <!--img-->
                  <a href="mentor-single.html">
                    <img src="../assets/images/mentor/mentor-img-1.jpg" alt="mentor 1" class="img-fluid w-100 rounded-4" />
                  </a>
                  <!--content-->
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <h3 class="mb-0">
                            <a href="mentor-single.html" class="text-reset">Akshay Sharma</a>
                          </h3>
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                              <path
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                          </span>
                        </div>
                        <span class="text-gray-800">Software Engineer</span>
                      </div>

                      <div class="d-flex align-items-center justify-content-between fs-6">
                        <div>
                          <span>@ Microsoft</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>5yrs Exp.</span>
                        </div>
                        <div class="d-flex gap-1 align-items-center lh-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                          </svg>

                          <span class="fw-bold text-dark">5.0</span>
                          <span>(12 Reviews)</span>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <span>Starting from</span>
                        <div class="d-flex flex-row gap-1 align-items-center">
                          <h4 class="mb-0">$25.00</h4>
                          <span class="fs-6">/ Month</span>
                        </div>
                      </div>
                      <div>
                        <a href="#!" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Book a Free Trial</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
              <!--card-->
              <div class="card rounded-4 card-bordered card-lift">
                <div class="p-3 d-flex flex-column gap-3">
                  <div class="position-relative">
                    <!--img-->
                    <a href="mentor-single.html">
                      <img src="../assets/images/mentor/mentor-img-2.jpg" alt="mentor 2" class="img-fluid w-100 rounded-4" />
                    </a>
                    <div class="position-absolute bottom-0 left-0 p-3">
                      <span class="badge text-bg-success">New Mentor</span>
                    </div>
                  </div>
                  <!--content-->
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <h3 class="mb-0"><a href="mentor-single.html" class="text-reset">Andrew Lupien</a></h3>
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                              <path
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                          </span>
                        </div>
                        <span class="text-gray-800">Quality Assurance Eng</span>
                      </div>
                      <div class="d-flex align-items-center justify-content-between fs-6">
                        <div>
                          <span>@ Amazon</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>3 yrs Exp.</span>
                        </div>
                        <div class="d-flex gap-1 align-items-center lh-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                          </svg>
                          <span class="fw-bold text-dark">0</span>
                          <span>(0 Reviews)</span>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <span>Starting from</span>
                        <div class="d-flex flex-row gap-1 align-items-center">
                          <h4 class="mb-0">$15.00</h4>
                          <span class="fs-6">/ Month</span>
                        </div>
                      </div>
                      <div>
                        <a href="#!" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#signupModal">Book Sessions</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
              <!--card-->
              <div class="card rounded-4 card-bordered card-lift">
                <div class="p-3 d-flex flex-column gap-3">
                  <!--img-->
                  <a href="mentor-single.html">
                    <img src="../assets/images/mentor/mentor-img-3.jpg" alt="mentor 3" class="img-fluid w-100 rounded-4" />
                  </a>
                  <!--content-->
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <h3 class="mb-0"><a href="mentor-single.html" class="text-reset">Bernice Perry</a></h3>
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                              <path
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                          </span>
                        </div>
                        <span class="text-gray-800">Senior Business Analyst</span>
                      </div>
                      <div class="d-flex align-items-center justify-content-between fs-6">
                        <div>
                          <span>@ InstaCart</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>3 yrs Exp.</span>
                        </div>
                        <div class="d-flex gap-1 align-items-center lh-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                          </svg>
                          <span class="fw-bold text-dark">5.0</span>
                          <span>(12 Reviews)</span>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <span>Starting from</span>
                        <div class="d-flex flex-row gap-1 align-items-center">
                          <h4 class="mb-0">$85.00</h4>
                          <span class="fs-6">/ Month</span>
                        </div>
                      </div>
                      <div>
                        <a href="#!" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#signupModal">Book Sessions</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
              <!--card-->
              <div class="card rounded-4 card-bordered card-lift">
                <div class="p-3 d-flex flex-column gap-3">
                  <!--img-->
                  <a href="mentor-single.html">
                    <img src="../assets/images/mentor/mentor-img-4.jpg" alt="mentor 4" class="img-fluid w-100 rounded-4" />
                  </a>
                  <!--content-->
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <h3 class="mb-0"><a href="mentor-single.html" class="text-reset">Patrice Long</a></h3>
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                              <path
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                          </span>
                        </div>
                        <span class="text-gray-800">Senior Data Engineer</span>
                      </div>
                      <div class="d-flex align-items-center justify-content-between fs-6">
                        <div>
                          <span>@ Zoom</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>7 yrs Exp.</span>
                        </div>
                        <div class="d-flex gap-1 align-items-center lh-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                          </svg>
                          <span class="fw-bold text-dark">5.0</span>
                          <span>(22 Reviews)</span>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <span>Starting from</span>
                        <div class="d-flex flex-row gap-1 align-items-center">
                          <h4 class="mb-0">$75.00</h4>
                          <span class="fs-6">/ Month</span>
                        </div>
                      </div>
                      <div>
                        <a href="#!" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#signupModal">Book Sessions</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
              <!--card-->
              <div class="card rounded-4 card-bordered card-lift">
                <div class="p-3 d-flex flex-column gap-3">
                  <!--img-->
                  <a href="mentor-single.html">
                    <img src="../assets/images/mentor/mentor-img-5.jpg" alt="mentor 5" class="img-fluid w-100 rounded-4" />
                  </a>
                  <!--content-->
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <h3 class="mb-0"><a href="mentor-single.html" class="text-reset">Cathy Diehl</a></h3>
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                              <path
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                          </span>
                        </div>
                        <span class="text-gray-800">Frontend Engineer</span>
                      </div>
                      <div class="d-flex align-items-center justify-content-between fs-6">
                        <div>
                          <span>@ Target</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>2 yrs Exp.</span>
                        </div>
                        <div class="d-flex gap-1 align-items-center lh-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                          </svg>
                          <span class="fw-bold text-dark">5.0</span>
                          <span>(34 Reviews)</span>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <span>Starting from</span>
                        <div class="d-flex flex-row gap-1 align-items-center">
                          <h4 class="mb-0">$65.00</h4>
                          <span class="fs-6">/ Month</span>
                        </div>
                      </div>
                      <div>
                        <a href="#!" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Book a Free Trial</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
              <!--card-->
              <div class="card rounded-4 card-bordered card-lift">
                <div class="p-3 d-flex flex-column gap-3">
                  <div class="position-relative">
                    <!--img-->
                    <a href="mentor-single.html">
                      <img src="../assets/images/mentor/mentor-img-6.jpg" alt="mentor 6" class="img-fluid w-100 rounded-4" />
                    </a>
                    <div class="position-absolute bottom-0 left-0 p-3">
                      <span class="badge text-bg-success">New Mentor</span>
                    </div>
                  </div>
                  <!--content-->
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <h3 class="mb-0"><a href="mentor-single.html" class="text-reset">James Anderson</a></h3>
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                              <path
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                          </span>
                        </div>
                        <span class="text-gray-800">UI/UX Designer</span>
                      </div>
                      <div class="d-flex align-items-center justify-content-between fs-6">
                        <div>
                          <span>@ Figma</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>3 yrs Exp.</span>
                        </div>
                        <div class="d-flex gap-1 align-items-center lh-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                          </svg>
                          <span class="fw-bold text-dark">4.5</span>
                          <span>(3 Reviews)</span>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <span>Starting from</span>
                        <div class="d-flex flex-row gap-1 align-items-center">
                          <h4 class="mb-0">$35.00</h4>
                          <span class="fs-6">/ Month</span>
                        </div>
                      </div>
                      <div>
                        <a href="#!" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#signupModal">Book Sessions</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
              <!--card-->
              <div class="card rounded-4 card-bordered card-lift">
                <div class="p-3 d-flex flex-column gap-3">
                  <!--img-->
                  <a href="mentor-single.html">
                    <img src="../assets/images/mentor/mentor-img-7.jpg" alt="mentor 7" class="img-fluid w-100 rounded-4" />
                  </a>
                  <!--content-->
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <h3 class="mb-0"><a href="mentor-single.html" class="text-reset">Cathy Diehl</a></h3>
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                              <path
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                          </span>
                        </div>
                        <span class="text-gray-800">Software Engineer</span>
                      </div>
                      <div class="d-flex align-items-center justify-content-between fs-6">
                        <div>
                          <span>@ Microsoft</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>5 yrs Exp.</span>
                        </div>
                        <div class="d-flex gap-1 align-items-center lh-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                          </svg>
                          <span class="fw-bold text-dark">5.0</span>
                          <span>(112 Reviews)</span>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <span>Starting from</span>
                        <div class="d-flex flex-row gap-1 align-items-center">
                          <h4 class="mb-0">$215.00</h4>
                          <span class="fs-6">/ Month</span>
                        </div>
                      </div>
                      <div>
                        <a href="#!" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#signupModal">Book Sessions</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
              <!--card-->
              <div class="card rounded-4 card-bordered card-lift">
                <div class="p-3 d-flex flex-column gap-3">
                  <!--img-->
                  <a href="mentor-single.html">
                    <img src="../assets/images/mentor/mentor-img-8.jpg" alt="mentor 8" class="img-fluid w-100 rounded-4" />
                  </a>
                  <!--content-->
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <div class="d-flex align-items-center gap-2">
                          <h3 class="mb-0"><a href="mentor-single.html" class="text-reset">Patrice Long</a></h3>
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                              <path
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                          </span>
                        </div>
                        <span class="text-gray-800">Software Engineer</span>
                      </div>
                      <div class="d-flex align-items-center justify-content-between fs-6">
                        <div>
                          <span>@ Microsoft</span>
                          <div class="vr mx-2 text-gray-200"></div>
                          <span>5 yrs Exp.</span>
                        </div>
                        <div class="d-flex gap-1 align-items-center lh-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                          </svg>
                          <span class="fw-bold text-dark">5.0</span>
                          <span>(434 Reviews)</span>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <span>Starting from</span>
                        <div class="d-flex flex-row gap-1 align-items-center">
                          <h4 class="mb-0">$25.00</h4>
                          <span class="fs-6">/ Month</span>
                        </div>
                      </div>
                      <div>
                        <a href="#!" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#signupModal">Book Sessions</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Session away-->
      <!--Easy steps-->
      <section class="py-lg-8 py-6">
        <div class="container py-lg-6">
          <!--row-->
          <div class="row mb-8">
            <div class="col-12">
              <div class="text-center d-flex flex-column gap-2">
                <!--heading-->
                <h2 class="mb-0 h1">Lets Get Started in 3 Easy Steps</h2>
                <!--para-->
                <p class="mb-0">Follow these three simple steps to get started with Long Term Mentorship</p>
              </div>
            </div>
          </div>
          <!--row-->
          <div class="row">
            <div class="col-12">
              <div class="row mb-8 align-items-center gy-4">
                <div class="col-md-6 offset-xxl-2 col-xxl-4 col-xl-5 offset-xl-1 mb-xxl-6">
                  <div class="d-flex flex-column gap-4">
                    <div class="border border-2 border-primary rounded-circle icon-shape icon-xl fs-3 text-primary">1</div>
                    <div class="d-flex flex-column gap-2">
                      <!--heading-->
                      <h3 class="mb-0 h2">Find Your Ideal Mentor</h3>
                      <!--para-->
                      <p class="mb-0 fs-3">Browse from 600+ vested mentors and choose your ideal mentor according to your preferences</p>
                    </div>
                    <div>
                      <a href="#!" class="btn btn-outline-secondary">Shortlist Mentor</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-5 col-xl-6 mb-xxl-6">
                  <!--img-->
                  <div>
                    <img src="../assets/images/mentor/mento-step-one.jpg" alt="stpes 1" class="img-fluid rounded-4 w-100" />
                  </div>
                </div>
              </div>
              <div class="row mb-8 align-items-center gy-4">
                <div class="col-md-6 col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 order-md-1 order-2 mb-xxl-6">
                  <!--img-->
                  <div>
                    <img src="../assets/images/mentor/mento-step-two.jpg" alt="stpes 2" class="img-fluid rounded-4 w-100" />
                  </div>
                </div>
                <div class="col-md-6 col-xxl-4 offset-xxl-1 col-xl-5 offset-xl-1 order-xl-2 order-1 mb-xxl-6">
                  <div class="d-flex flex-column gap-4">
                    <div class="border border-2 border-primary rounded-circle icon-shape icon-xl fs-3 text-primary">2</div>
                    <div class="d-flex flex-column gap-2">
                      <!--heading-->
                      <h3 class="mb-0 h2">Book a FREE Trial Session</h3>
                      <!--para-->
                      <p class="mb-0 fs-3">Connect with mentor and see how mentor will help you achieve your goal faster, avoid asking referrals etc.</p>
                    </div>
                    <div>
                      <a href="#!" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Book a Free Trial</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row align-items-center gy-4">
                <div class="col-md-6 offset-xxl-2 col-xxl-4 col-xl-5 offset-xl-1 mb-xxl-6">
                  <div class="d-flex flex-column gap-4">
                    <div class="border border-2 border-primary rounded-circle icon-shape icon-xl fs-3 text-primary">3</div>
                    <div class="d-flex flex-column gap-2">
                      <!--heading-->
                      <h3 class="mb-0 h2">Learn, chat, and have fun</h3>
                      <!--para-->
                      <p class="mb-0 fs-3">Bravo!! Get started with your personalised mentorship in the right direction with a mentor of your choice.</p>
                    </div>
                    <div>
                      <a href="#!" class="btn btn-outline-secondary">Meet the Mentor</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-5 col-xl-6 mb-xxl-6">
                  <!--img-->
                  <div>
                    <img src="../assets/images/mentor/mento-step-three.jpg" alt="stpes 3" class="img-fluid rounded-4 w-100" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Easy steps-->
      <!--Testimonials-->
      <section class="bg-dark-primary py-lg-8 py-6">
        <div class="container py-lg-6">
          <!--row-->
          <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2 col-12">
              <div class="text-center mb-6 d-flex flex-column gap-2">
                <!--heading-->
                <h2 class="mb-0 text-white h1">Love & Praise By The Mentees</h2>
                <!--para-->
                <p class="mb-0 text-white">
                  We’ve already delivered 1-on-1 mentorship to thousands of students, professionals, managers and executives. Even better, they’ve left an rating of 4.9 out of 5 for our mentors.
                </p>
              </div>
            </div>
          </div>
          <div class="row gy-4">
            <div class="col-lg-4 col-12 d-flex flex-column gap-4">
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!--card-->
                <div class="card card-light-primary rounded-4">
                  <!--card body-->
                  <div class="card-body d-flex flex-column gap-3">
                    <!--img-->
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar 1" class="avatar avatar-md rounded-circle" />
                      <h5 class="mb-0">John Deo</h5>
                    </div>
                    <div>
                      <!--para-->
                      <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                        “The generated lorem Ipsum is therefore always free from repetition,
                        <span class="text-primary">injected humour, or words etc generate</span>
                        lorem Ipsum which looks racteristic reasonable...”
                      </p>
                    </div>
                    <div class="d-flex flex-xl-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                      <!--avatar-->
                      <img src="../assets/images/avatar/avatar-10.jpg" alt="avatar 2" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block" />
                      <div>
                        <!--content-->
                        <div class="d-flex flex-row gap-2 align-items-center">
                          <h4 class="mb-0">Akshay sharma</h4>
                          <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                        </div>
                        <span class="fs-6">Software Engineer at Palantir</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!--card-->
                <div class="card card-light-primary rounded-4">
                  <!--card body-->
                  <div class="card-body d-flex flex-column gap-3">
                    <!--img-->
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <img src="../assets/images/avatar/avatar-7.jpg" alt="avatar 3" class="avatar avatar-md rounded-circle" />
                      <h5 class="mb-0">Gladys Colbert</h5>
                    </div>
                    <div>
                      <!--para-->
                      <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                        “Velit consectetur in adipisicing culpa eiusmod commodo eu ex dolore. Officia irure nisi dolor dolore velit fugiat. Aliqua sint aliqua aute elit eu sunt.”
                      </p>
                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                      <!--avatar-->
                      <img src="../assets/images/avatar/avatar-8.jpg" alt="avatar 4" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block" />
                      <div>
                        <!--content-->
                        <div class="d-flex flex-row gap-2 align-items-center">
                          <h4 class="mb-0">Jessica Lupien</h4>
                          <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                        </div>
                        <span class="fs-6">Senior Data Engineer at Zoom</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-12 d-flex flex-column gap-4">
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!--card-->
                <div class="card card-light-primary rounded-4">
                  <!--card body-->
                  <div class="card-body d-flex flex-column gap-3">
                    <!--img-->
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <img src="../assets/images/avatar/avatar-2.jpg" alt="avatar 5" class="avatar avatar-md rounded-circle" />
                      <h5 class="mb-0">Bev Robertson</h5>
                    </div>
                    <div>
                      <!--para-->
                      <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                        “Velit consectetur in adipisicing culpa eiusmod commodo eu ex dolore.
                        <span class="text-primary">Officia irure nisi dolor</span>
                        dolore velit fugiat. Aliqua sint aliqua aute elit eu sunt.”
                      </p>
                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                      <!--avatar-->
                      <img src="../assets/images/avatar/avatar-4.jpg" alt="avatar 6" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block" />
                      <div>
                        <!--content-->
                        <div class="d-flex flex-row gap-2 align-items-center">
                          <h4 class="mb-0">Andrew Lupien</h4>
                          <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                        </div>
                        <span class="fs-6">Quality Assurance Engineer at Amazon</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!--card-->
                <div class="card card-light-primary rounded-4">
                  <!--card body-->
                  <div class="card-body d-flex flex-column gap-3">
                    <!--img-->
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <img src="../assets/images/avatar/avatar-9.jpg" alt="avatar 7" class="avatar avatar-md rounded-circle" />
                      <h5 class="mb-0">Doris Esparza</h5>
                    </div>
                    <div>
                      <!--para-->
                      <p class="mb-0 fst-italic fs-4 pe-xxl-5">Proident quis deserunt qui ex exercitation veniam id Lorem est cupidatat ipsum irure aliquip ad.</p>
                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
                      <!--avatar-->
                      <img src="../assets/images/avatar/avatar-10.jpg" alt="avatar 8" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block" />
                      <div>
                        <!--content-->
                        <div class="d-flex flex-row gap-2 align-items-center">
                          <h4 class="mb-0">James Anderson</h4>
                          <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                        </div>
                        <span class="fs-6">UI/UX Designer at Figma</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-12 d-flex flex-column gap-4">
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!--card-->
                <div class="card card-light-primary rounded-4">
                  <!--card body-->
                  <div class="card-body d-flex flex-column gap-3">
                    <!--img-->
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <img src="../assets/images/avatar/avatar-5.jpg" alt="avatar 9" class="avatar avatar-md rounded-circle" />
                      <h5 class="mb-0">Marlene Turner</h5>
                    </div>
                    <div>
                      <!--para-->
                      <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                        Id duis velit enim officia ad nisi incididunt magna ex dolor minim deserunt dolor. Esse incididunt cillum nostrud esse do quis amet labore amet nulla eiusmod amet nulla Lorem.
                        Incididunt ex voluptate irure officia laboris ea proident est qui.
                      </p>
                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill py-2 px-3">
                      <!--avatar-->
                      <img src="../assets/images/avatar/avatar-6.jpg" alt="avatar 10" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block" />
                      <div>
                        <!--content-->
                        <div class="d-flex flex-row gap-2 align-items-center">
                          <h4 class="mb-0">Bernice Perry</h4>
                          <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                        </div>
                        <span class="fs-6">Senior business analyst at InstaCart</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <!--card-->
                <div class="card card-light-primary rounded-4">
                  <!--card body-->
                  <div class="card-body d-flex flex-column gap-3">
                    <!--img-->
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <img src="../assets/images/avatar/avatar-11.jpg" alt="avatar 11" class="avatar avatar-md rounded-circle" />
                      <h5 class="mb-0">Daniel Groleau</h5>
                    </div>
                    <div>
                      <!--para-->
                      <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                        “The generated lorem Ipsum is therefore always free from repetition, injected humour, or words etc generate lorem Ipsum which looks racteristic reasonable...”.
                      </p>
                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center bg-light rounded-pill py-2 px-3">
                      <!--avatar-->
                      <img src="../assets/images/avatar/avatar-12.jpg" alt="avatar 12" class="avatar avatar-md rounded-circle d-lg-none d-md-block d-xl-block" />
                      <div>
                        <!--content-->
                        <div class="d-flex flex-row gap-2 align-items-center">
                          <h4 class="mb-0">Patrice Long</h4>
                          <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                        </div>
                        <span class="fs-6">Software Engineer at Microsoft</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!--Testimonials-->
      <!--Call to action-->
      <section class="py-lg-8 py-6">
        <div class="container py-lg-8">
          <!--row-->
          <div class="row align-items-center">
            <div class="offset-xl-1 col-xl-4 col-lg-6 d-none d-lg-block">
              <!--img-->
              <div class="position-relative">
                <img src="../assets/images/mentor/become-mentor.jpg" alt="mentor img" class="img-fluid w-100 rounded-4" />

                <img src="../assets/images/mentor/schedule.svg" alt="schedule" class="position-absolute top-50 start-100 translate-middle mt-n8 d-xl-block d-none" />
                <img src="../assets/images/mentor/verify.svg" alt="verify" class="position-absolute top-50 start-0 translate-middle mt-n2 d-xl-block d-none" />

                <img src="../assets/images/mentor/card.svg" alt="card" class="position-absolute top-50 start-0 translate-middle mt-8 d-xl-block d-none" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-5 offset-lg-1 offset-xl-1">
              <div class="d-flex flex-column gap-6">
                <div class="d-flex flex-column gap-2">
                  <!--heading-->
                  <h2 class="mb-0 h1">Sign Up To Share Your Knowledge</h2>
                  <!--para-->
                  <p class="mb-0 fs-5">Follow these three simple steps to get started with Long Term Mentorship</p>
                </div>
                <div class="d-flex flex-column gap-8">
                  <div class="d-flex flex-column gap-5">
                    <div class="row gap-xxl-3 gap-0">
                      <div class="col-md-1 col-lg-2 col-xxl-1 col-2">
                        <!--svg-->
                        <div class="icon-shape icon-lg bg-danger-subtle rounded-4">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bullseye text-danger" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10m0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                            <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8" />
                            <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                          </svg>
                        </div>
                      </div>
                      <!--text-->
                      <div class="col-md-6 col-lg-10 col-xxl-6 col-10">
                        <h4 class="mb-0">You've invested a lot of time to learn your skill, craft, or expertise</h4>
                      </div>
                    </div>
                    <div class="row gap-xxl-3">
                      <div class="col-md-1 col-lg-2 col-xxl-1 col-2">
                        <!--svg-->
                        <div class="icon-shape icon-lg bg-warning-subtle rounded-4">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cash-stack text-warning" viewBox="0 0 16 16">
                            <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                            <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z" />
                          </svg>
                        </div>
                      </div>
                      <!--text-->
                      <div class="col-md-6 col-lg-10 col-xxl-6 col-10">
                        <h4 class="mb-0">Get paid for talking about the things you already know and love</h4>
                      </div>
                    </div>
                    <div class="row gap-xxl-3">
                      <div class="col-md-1 col-lg-2 col-xxl-1 col-2">
                        <!--svg-->
                        <div class="icon-shape icon-lg bg-success-subtle rounded-4">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-calendar-check text-success" viewBox="0 0 16 16">
                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                            <path
                              d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                          </svg>
                        </div>
                      </div>
                      <!--text-->
                      <div class="col-md-6 col-lg-10 col-xxl-6 col-10">
                        <h4 class="mb-0">Set your own availability and meet on your time</h4>
                      </div>
                    </div>
                  </div>
                  <div>
                    <a href="#!" class="btn btn-primary">Become a mentor</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Call to action-->
    </main>

    <!-- Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h3 class="fw-bold mb-0">Sign up</h3>
              <div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
            </div>
            <!-- Form -->
            <form class="needs-validation" novalidate="">
              <!-- Username -->
              <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" id="username" class="form-control" name="username" placeholder="User Name" required="" />
                <div class="invalid-feedback">Please enter valid username.</div>
              </div>
              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Email address here" required="" />
                <div class="invalid-feedback">Please enter valid Email.</div>
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required="" />
                <div class="invalid-feedback">Please enter valid password.</div>
              </div>
              <!-- Checkbox -->

              <div>
                <!-- Button -->
                <div>
                  <button type="submit" class="btn btn-primary">Create Free Account</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <div class="d-flex flex-row gap-3 align-items-center">
              <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
              <h5 class="mb-0">John Deo</h5>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-4">
              <p class="mb-0 fst-italic fs-4 pe-xxl-5">
                “The generated lorem Ipsum is therefore always free from repetition,
                <span class="text-primary">injected humour, or words etc generate</span>
                lorem Ipsum which looks racteristic reasonable...”
              </p>
            </div>
            <div class="d-flex flex-xl-row gap-2 align-items-center bg-light rounded-pill px-3 py-2">
              <img src="../assets/images/avatar/avatar-10.jpg" alt="avatar" class="avatar avatar-md rounded-circle d-none d-xl-block" />
              <div>
                <div class="d-flex flex-row gap-2 align-items-center">
                  <h4 class="mb-0">Akshay sharma</h4>
                  <span class="rounded-pill fs-6 px-2 text-success-emphasis bg-success-subtle border border-success">Mentor</span>
                </div>
                <span class="fs-6">Software Engineer at Palantir</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <!-- footer -->
<footer class="py-lg-8 py-5 footer footer-dark">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 col-12">
        <!-- about company -->
        <div class="d-flex flex-column gap-4">
          <div>
            <img src="../assets/images/mentor/geeks-mentor.svg" alt="Geeks" class="" />
          </div>
          <div>
            <p class="mb-0 txet-gray-500">Connecting founders and marketers with battle-hardened mentors that genuinely enjoy helping people.</p>
          </div>
          <!-- Instagram -->
          <div class="fs-4 d-flex flex-row gap-3">
            <a href="#!" class="text-reset">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                  d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
              </svg>
            </a>
            <!--Facebook-->
            <a href="#!" class="text-reset">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
              </svg>
            </a>
            <!--Twitter-->
            <a href="#!" class="text-reset">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
              </svg>
            </a>
            <!--youtube-->
            <a href="#!" class="text-reset">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                <path
                  d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-6">
        <div class="d-flex flex-column gap-2">
          <!-- list -->
          <h5 class="fw-bold text-white-50 text-uppercase mb-0">Platform</h5>
          <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
            <li><a href="#" class="nav-link">Browse Mentors</a></li>
            <li><a href="#" class="nav-link">Book a Session</a></li>
            <li><a href="#" class="nav-link">Become a Mentor</a></li>
            <li><a href="#" class="nav-link">Wall Of love</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-6">
        <div class="d-flex flex-column gap-2">
          <!-- list -->
          <h5 class="fw-bold text-white-50 text-uppercase mb-0">Resources</h5>
          <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
            <li><a href="#" class="nav-link">Newsletter</a></li>
            <li><a href="#" class="nav-link">Case Studies</a></li>
            <li><a href="#" class="nav-link">Books</a></li>
            <li><a href="#" class="nav-link">Templates</a></li>
            <li><a href="#" class="nav-link">Blog</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-6">
        <div class="d-flex flex-column gap-2">
          <!-- list -->
          <h5 class="fw-bold text-white-50 text-uppercase mb-0">Company</h5>
          <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
            <li><a href="#" class="nav-link">About</a></li>
            <li><a href="#" class="nav-link">Partner Program</a></li>
            <li><a href="#" class="nav-link">Privacy Policy</a></li>
            <li><a href="#" class="nav-link">Meet the Team</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-6">
        <div class="d-flex flex-column gap-2">
          <!-- list -->
          <h5 class="fw-bold text-white-50 text-uppercase mb-0">Support</h5>
          <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
            <li><a href="#" class="nav-link">FAQ</a></li>
            <li><a href="#" class="nav-link">Contact</a></li>
            <li><a href="#" class="nav-link">Help centre</a></li>
            <li><a href="#" class="nav-link">Join Community</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row mt-lg-7 mt-5">
      <!-- Desc -->
      <div class="col-lg-6 offset-lg-3 col-12">
        <span class="d-flex justify-content-center">
          ©
          <span id="copyright2" class="me-2">
            <script>
              document.getElementById("copyright2").appendChild(document.createTextNode(new Date().getFullYear()));
            </script>
          </span>
          Geeks-UI Mentor. All Rights Reserved.
        </span>
      </div>
    </div>
  </div>
</footer>

    <!-- Scroll top -->
    <div class="btn-scroll-top">
    <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
        <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
    </svg>
</div>

    <!-- Scripts -->
    <!-- Libs JS -->
<script src="../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>


    <script src="../assets/libs/typed.js/dist/typed.umd.js"></script>
    <script src="../assets/js/vendors/typed.js"></script>
  </body>

<!-- Mirrored from geeksui.codescandy.com/geeks/mentor/mentor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 14:57:51 GMT -->
</html>
