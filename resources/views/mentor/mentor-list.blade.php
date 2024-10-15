<!doctype html>
<html lang="en">
  
<!-- Mirrored from geeksui.codescandy.com/geeks/mentor/mentor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 14:58:58 GMT -->
<head>
    <link rel="stylesheet" href="../assets/libs/nouislider/dist/nouislider.min.css" />
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


    <title>Mentor List | Geeks - Bootstrap 5 Template</title>
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
      <!--hero section-->
      <section class="pt-xl-8 pt-6" style="background-image: url(../assets/images/mentor/mentor-glow.svg); background-repeat: no-repeat; background-size: cover">
        <div class="container">
          <!--row-->
          <div class="row my-4">
            <div class="col-xxl-6 offset-xxl-3 col-md-8 offset-md-2 col-12">
              <div class="text-center mb-3">
                <div class="d-flex flex-column gap-3">
                  <!--heading-->
                  <h1 class="display-4 mb-0">
                    Book a
                    <span class="text-primary">mentor</span>
                    of your choice
                  </h1>
                  <!--form-->
                  <form class="form-inline px-xl-8 mx-xl-8">
                    <div class="d-flex align-items-center">
                      <span class="position-absolute ps-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                          <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                      </span>
                      <input type="search" class="form-control ps-6 form-control-lg" value="Engineering" placeholder="Search by company, skills or role" />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--search mentor-->
          <div class="offcanvas-xl offcanvas-bottom h-auto start-0 mx-2 mb-2 rounded-3 bottom-md-50" tabindex="-1" id="searchbar" aria-labelledby="searchbar">
            <div class="offcanvas-header pb-0">
              <h3 class="offcanvas-title" id="searchbar">Search Mentors</h3>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#searchbar"></button>
            </div>
            <div class="offcanvas-body d-grid">
              <div class="row align-items-center g-3">
                <div class="col-12 col-xl-3">
                  <div class="dropdown d-grid">
                    <button class="btn btn-outline-white dropdown-toggle text-start" type="button" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">Skills</button>
                    <div class="dropdown-menu p-4 w-100 dropdown-stick">
                      <div class="mb-4">
                        <label for="searchFormControlInput" class="form-label visually-hidden">Search</label>
                        <input type="search" class="form-control" id="searchFormControlInput" placeholder="Search" />
                      </div>

                      <ul class="list-unstyled" data-simplebar="" style="height: 250px">
                        <!--list-->
                        <li class="mb-3">
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="uiCheckChecked" checked />
                              <label class="form-check-label" for="uiCheckChecked">UI Design</label>
                            </div>
                          </div>
                        </li>
                        <!--list-->
                        <li class="mb-3">
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="uxCheckChecked" />
                              <label class="form-check-label" for="uxCheckChecked">UX Design</label>
                            </div>
                          </div>
                        </li>
                        <!--list-->
                        <li class="mb-3">
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="softwareCheckChecked" />
                              <label class="form-check-label" for="softwareCheckChecked">Software Engineering</label>
                            </div>
                          </div>
                        </li>
                        <!--list-->
                        <li class="mb-3">
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="leaderCheckChecked" />
                              <label class="form-check-label" for="leaderCheckChecked">Leadership</label>
                            </div>
                          </div>
                        </li>
                        <!--list-->
                        <li class="mb-3">
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="productCheckChecked" />
                              <label class="form-check-label" for="productCheckChecked">Product Management</label>
                            </div>
                          </div>
                        </li>
                        <!--list-->
                        <li class="mb-3">
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="reactCheckChecked" />
                              <label class="form-check-label" for="reactCheckChecked">React js</label>
                            </div>
                          </div>
                        </li>
                        <!--list-->
                        <li class="mb-3">
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="nextCheckChecked" />
                              <label class="form-check-label" for="nextCheckChecked">Next.Js</label>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="awsCheckChecked" />
                              <label class="form-check-label" for="awsCheckChecked">Aws</label>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-3">
                  <div class="dropdown d-grid">
                    <button class="btn btn-outline-white dropdown-toggle text-start" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Price</button>

                    <ul class="dropdown-menu p-4 w-100 dropdown-stick">
                      <!--list-->
                      <li>
                        <div>
                          <div id="priceRange" class="mb-3"></div>

                          <span id="priceRange-value"></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-xl-3">
                  <div class="dropdown d-grid">
                    <button class="btn btn-outline-white dropdown-toggle text-start" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Experience</button>

                    <ul class="dropdown-menu p-4 w-100 dropdown-stick">
                      <!--list-->
                      <li>
                        <div>
                          <div id="expRange" class="mb-3"></div>
                          <span id="expRange-value"></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="col-12 col-xl-3">
                  <div class="d-flex align-items-center">
                    <!--button-->
                    <button type="reset" value="reset" class="btn btn-outline-white">
                      <span class="me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                          <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                        </svg>
                      </span>
                      Reset all filters
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--search mentor-->
        </div>
      </section>

      <!--hero section-->
      <div>
        <div class="container">
          <hr class="my-5" />
        </div>
      </div>
      <!--mentors-->
      <section class="pb-xl-8 pb-6">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="mb-4"><h2 class="mb-0 h5">3 mentors found</h2></div>
            </div>
          </div>

          <div class="col-lg-12">
            <!--row-->
            <div class="row border rounded-3 g-0 mb-3">
              <div class="col-xxl-9 col-xl-8 col-12">
                <div class="row p-lg-5 p-4 gy-5">
                  <!--img-->
                  <div class="col-xl-3 col-md-3">
                    <div>
                      <a href="mentor-single.html">
                        <img src="../assets/images/mentor/mentors-1.jpg" alt="mentor 1" class="img-fluid w-100 rounded-3" />
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-9 col-md-9">
                    <div class="d-flex flex-column gap-4">
                      <div>
                        <div class="d-flex flex-row align-items-center gap-2">
                          <!--heading-->
                          <h3 class="mb-0 h2">
                            <a href="mentor-single.html" class="text-reset">Akshay Sharma</a>
                          </h3>
                          <!--icon-->
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                              <path
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                          </span>
                        </div>
                        <span class="fw-medium">Software Engineer</span>
                      </div>
                      <!--content-->
                      <div>
                        <span>@ Microsoft</span>
                        <div class="vr mx-2 text-gray-200"></div>
                        <span>5yrs Exp.</span>
                      </div>
                      <div class="d-none d-md-block">
                        <!--para-->
                        <p class="mb-0 pe-xl-5 pe-xxl-8">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ligula magna, gravida id suscipit vitae, condimentum ac mauris. Mauris nibh leo, aliquet vel turpiscing elit. Nam
                          ligula magcing elit. Nam ligula magcing elit. Nam ligula mag eget, tempus faucibus felis...
                        </p>
                      </div>
                      <!--badge-->
                      <div class="gap-2 d-flex flex-wrap">
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Frontend</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Devops</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">UI/UX designer</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Data Science</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Full Stack</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Backend</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Data Analyst</a>
                      </div>

                      <div class="d-flex flex-row align-items-center gap-4">
                        <!--icon-->
                        <div class="d-flex flex-row gap-2 lh-1 align-items-center">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
                              <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                          </span>
                          <!--text-->
                          <span>
                            <span class="text-dark fw-bold">5.0 </span>
                            (16 Reviews)
                          </span>
                        </div>
                        <div class="d-flex flex-row gap-2 lh-1 align-items-center">
                          <!--icon-->
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-people-fill text-primary align-baseline" viewBox="0 0 16 16">
                              <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            </svg>
                          </span>
                          <!--text-->
                          <span>
                            <span class="text-dark fw-bold">40+ </span>
                            Mentees
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-12">
                <div class="p-lg-5 p-4 bg-light d-flex flex-column gap-3 rounded-end-xl-3 rounded-bottom-xl-0 rounded-bottom-md-3 h-100">
                  <!--content-->
                  <div class="d-flex flex-column gap-3">
                    <div class="d-flex flex-column gap-1">
                      <span>Starting from</span>
                      <div class="d-flex flex-row align-items-center gap-1">
                        <h3 class="mb-0 h2">$125.00</h3>
                        <small>/ Month</small>
                      </div>
                    </div>
                    <!--button-->
                    <div class="d-flex d-xl-grid gap-2">
                      <a href="#!" data-bs-toggle="modal" data-bs-target="#signupModal" class="btn btn-outline-primary w-50 w-xl-100">Book a Free Trial</a>

                      <a href="mentor-single.html" class="btn btn-outline-secondary w-50 w-xl-100">View Profile</a>
                    </div>
                    <div>
                      <span class="text-success fw-medium">Next Available: Tuesday June 05 2025</span>
                    </div>
                  </div>
                  <div class="d-flex flex-column gap-2">
                    <!--heading-->
                    <div>
                      <h4 class="mb-0">Every Month Of Mentorship</h4>
                    </div>
                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                      <!--list-->
                      <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video" viewBox="0 0 16 16">
                            <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            <path
                              d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z" />
                          </svg>
                        </span>
                        <span>1 session/week (1:1 Sessions)</span>
                      </li>
                      <!--list-->
                      <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                            <path
                              d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                          </svg>
                        </span>
                        <span>Within 12hours (Chat Support)</span>
                      </li>
                      <!--list-->
                      <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z" />
                            <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z" />
                            <path
                              fill-rule="evenodd"
                              d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z" />
                          </svg>
                        </span>
                        <span>Everyday (Tasks & Followup)</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border rounded-3 g-0 mb-3">
              <div class="col-xxl-9 col-xl-8 col-12">
                <div class="row p-lg-5 p-4 gy-5">
                  <!--img-->
                  <div class="col-xl-3 col-md-3">
                    <div>
                      <a href="mentor-single.html">
                        <img src="../assets/images/mentor/mentor-img-2.jpg" alt="mentor 2" class="img-fluid w-100 rounded-3" />
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-9 col-md-9">
                    <div class="d-flex flex-column gap-4">
                      <div>
                        <!--heading-->
                        <div class="d-flex flex-row align-items-center gap-2">
                          <h3 class="mb-0 h2">
                            <a href="mentor-single.html" class="text-reset">Cathy Diehl</a>
                          </h3>
                          <!--icon-->
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                              <path
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                          </span>
                        </div>
                        <span class="fw-medium">UI/UX Designer</span>
                      </div>
                      <!--content-->
                      <div>
                        <span>@ Microsoft</span>
                        <div class="vr mx-2 text-gray-200"></div>
                        <span>3yrs Exp.</span>
                      </div>
                      <div class="d-none d-md-block">
                        <!--para-->
                        <p class="mb-0 pe-xl-5 pe-xxl-8">
                          Consectetur adipiscing elit. Nam ligula magna, gravida id suscipit vitae, condimentum ac mauris. Mauris nibh leo, aliquet vel turpiscing elit. Nam ligula magcing elit. Nam
                          ligula magcing elit. Nam ligula mag eget, tempus faucibus felis...
                        </p>
                      </div>
                      <!--badge-->
                      <div class="gap-2 d-flex flex-wrap">
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Full Stack</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Backend</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Data Science</a>

                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Data Analyst</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">UI/UX designer</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Devops</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Frontend</a>
                      </div>
                      <div class="d-flex flex-row align-items-center gap-4">
                        <!--icon-->
                        <div class="d-flex flex-row gap-2 lh-1 align-items-center">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
                              <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                          </span>
                          <!--text-->
                          <span>
                            <span class="text-dark fw-bold">3.0 </span>
                            (10 Reviews)
                          </span>
                        </div>
                        <div class="d-flex flex-row gap-2 lh-1 align-items-center">
                          <!--icon-->
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-people-fill text-primary align-baseline" viewBox="0 0 16 16">
                              <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            </svg>
                          </span>
                          <!--text-->
                          <span>
                            <span class="text-dark fw-bold">20+ </span>
                            Mentees
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-12">
                <div class="p-lg-5 p-4 bg-light d-flex flex-column gap-3 rounded-end-xl-3 rounded-bottom-xl-0 rounded-bottom-md-3 h-100">
                  <!--content-->
                  <div class="d-flex flex-column gap-3">
                    <div class="d-flex flex-column gap-1">
                      <span>Starting from</span>
                      <div class="d-flex flex-row align-items-center gap-1">
                        <h3 class="mb-0 h2">$110.00</h3>
                        <small>/ Month</small>
                      </div>
                    </div>
                    <!--buttons-->
                    <div class="d-grid flex-column gap-2">
                      <div class="d-flex d-xl-grid gap-2">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#signupModal" class="btn btn-outline-primary w-50 w-xl-100">Book a Free Trial</a>

                        <a href="mentor-single.html" class="btn btn-outline-secondary w-50 w-xl-100">View Profile</a>
                      </div>
                    </div>
                    <div>
                      <span class="text-success fw-medium">Next Available: Tuesday June 05 2025</span>
                    </div>
                  </div>
                  <div class="d-flex flex-column gap-2">
                    <!--heading-->
                    <div>
                      <h4 class="mb-0">Every Month Of Mentorship</h4>
                    </div>
                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                      <!--list-->
                      <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video" viewBox="0 0 16 16">
                            <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            <path
                              d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z" />
                          </svg>
                        </span>
                        <span>2 session/week (1:1 Sessions)</span>
                      </li>
                      <!--list-->
                      <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                            <path
                              d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                          </svg>
                        </span>
                        <span>Within 12hours (Chat Support)</span>
                      </li>
                      <!--list-->
                      <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z" />
                            <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z" />
                            <path
                              fill-rule="evenodd"
                              d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z" />
                          </svg>
                        </span>
                        <span>Everyday (Tasks & Followup)</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border rounded-3 g-0 mb-3">
              <div class="col-xxl-9 col-xl-8 col-12">
                <div class="row p-lg-5 p-4 gy-5">
                  <!--img-->
                  <div class="col-xl-3 col-md-3">
                    <div>
                      <a href="mentor-single.html">
                        <img src="../assets/images/mentor/mentor-img-3.jpg" alt="mentor 3" class="img-fluid w-100 rounded-3" />
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-9 col-md-9">
                    <div class="d-flex flex-column gap-4">
                      <div>
                        <!--heading-->
                        <div class="d-flex flex-row align-items-center gap-2">
                          <h3 class="mb-0 h2">
                            <a href="mentor-single.html" class="text-reset">Andrew Lupien</a>
                          </h3>
                          <!--icon-->
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                              <path
                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                          </span>
                        </div>
                        <span class="fw-medium">Senior Data Engineer</span>
                      </div>
                      <!--content-->
                      <div>
                        <span>@ Microsoft</span>
                        <div class="vr mx-2 text-gray-200"></div>
                        <span>6yrs Exp.</span>
                      </div>
                      <div class="d-none d-md-block">
                        <!--para-->
                        <p class="mb-0 pe-xl-5 pe-xxl-8">
                          Consectetur adipiscing elit. Nam ligula magna, gravida id suscipit vitae, condimentum ac mauris. Mauris nibh leo, aliquet vel turpiscing elit. Nam ligula magcing elit. Nam
                          ligula magcing elit. Nam ligula mag eget, tempus faucibus felis...
                        </p>
                      </div>
                      <!--badges-->
                      <div class="gap-2 d-flex flex-wrap">
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">UI/UX designer</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Data Analyst</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Devops</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Backend</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Full Stack</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Frontend</a>
                        <a href="mentor-list.html" class="btn btn-tag btn-sm">Data Science</a>
                      </div>
                      <div class="d-flex flex-row align-items-center gap-4">
                        <div class="d-flex flex-row gap-2 lh-1 align-items-center">
                          <!--icon-->
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
                              <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                          </span>
                          <!--text-->
                          <span>
                            <span class="text-dark fw-bold">6.0 </span>
                            (10 Reviews)
                          </span>
                        </div>
                        <div class="d-flex flex-row gap-2 lh-1 align-items-center">
                          <!--icon-->
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-people-fill text-primary align-baseline" viewBox="0 0 16 16">
                              <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            </svg>
                          </span>
                          <!--text-->
                          <span>
                            <span class="text-dark fw-bold">50+ </span>
                            Mentees
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-12">
                <div class="p-lg-5 p-4 bg-light d-flex flex-column gap-3 rounded-end-xl-3 rounded-bottom-xl-0 rounded-bottom-md-3 h-100">
                  <!--content-->
                  <div class="d-flex flex-column gap-3">
                    <div class="d-flex flex-column gap-1">
                      <span>Starting from</span>
                      <div class="d-flex flex-row align-items-center gap-1">
                        <h3 class="mb-0 h2">$150.00</h3>
                        <small>/ Month</small>
                      </div>
                    </div>
                    <!--buttons-->
                    <div class="d-grid flex-column gap-2">
                      <div class="d-flex d-xl-grid gap-2">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#signupModal" class="btn btn-outline-primary w-50 w-xl-100">Book a Free Trial</a>

                        <a href="mentor-single.html" class="btn btn-outline-secondary w-50 w-xl-100">View Profile</a>
                      </div>
                    </div>
                    <div>
                      <span class="text-success fw-medium">Next Available: Tuesday June 05 2025</span>
                    </div>
                  </div>
                  <div class="d-flex flex-column gap-2">
                    <!--heading-->
                    <div>
                      <h4 class="mb-0">Every Month Of Mentorship</h4>
                    </div>
                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                      <!--list-->
                      <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video" viewBox="0 0 16 16">
                            <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            <path
                              d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z" />
                          </svg>
                        </span>
                        <span>2 session/week (1:1 Sessions)</span>
                      </li>
                      <!--list-->
                      <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                            <path
                              d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                          </svg>
                        </span>
                        <span>Within 12hours (Chat Support)</span>
                      </li>
                      <!--list-->
                      <li class="d-flex flex-row gap-2 lh-1 align-items-center">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z" />
                            <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z" />
                            <path
                              fill-rule="evenodd"
                              d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z" />
                          </svg>
                        </span>
                        <span>Everyday (Tasks & Followup)</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 d-xl-none d-block">
            <div class="position-fixed start-0 m-3 bottom-0">
              <a class="btn btn-dark" data-bs-toggle="offcanvas" href="#searchbar" aria-controls="searchbar">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders text-white me-2" viewBox="0 0 16 16">
                    <path
                      fill-rule="evenodd"
                      d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z" />
                  </svg>
                </span>
                Filters
              </a>
            </div>
          </div>
        </div>
      </section>
      <!--mentors-->
    </main>
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
                <div class="d-flex flex-row gap-2 lh-1 align-items-center align-items-center">
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

    <script src="../assets/libs/nouislider/dist/nouislider.min.js"></script>
    <script src="../assets/libs/wnumb/wNumb.min.js"></script>

    <!-- Libs JS -->
<script src="../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>


    <script src="../assets/libs/typed.js/dist/typed.umd.js"></script>
    <script src="../assets/js/vendors/typed.js"></script>
  </body>

<!-- Mirrored from geeksui.codescandy.com/geeks/mentor/mentor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 14:58:59 GMT -->
</html>