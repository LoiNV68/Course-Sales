<!doctype html>
<html lang="en">
    
<!-- Mirrored from geeksui.codescandy.com/geeks/pages/dashboard-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 14:59:13 GMT -->
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

        <link rel="canonical" href="dashboard-student.html">
        <title>Student Dashboard | Geeks - Bootstrap 5 Template</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg">
  <div class="container-fluid px-0">
    <a class="navbar-brand" href="../index.html"><img src="../assets/images/brand/logo/logo.svg" alt="Geeks" /></a>
    <!-- Mobile view nav wrap -->
    <div class="ms-auto d-flex align-items-center order-lg-3">
      <div class="dropdown">
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
      <ul class="navbar-nav navbar-right-wrap ms-2 flex-row d-none d-md-block">
        <li class="dropdown d-inline-block stopevent position-static">
          <a
            class="btn btn-light btn-icon rounded-circle indicator indicator-primary"
            href="#"
            role="button"
            id="dropdownNotificationSecond"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false">
            <i class="fe fe-bell"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg position-absolute mx-3 my-5" aria-labelledby="dropdownNotificationSecond">
            <div>
              <div class="border-bottom px-3 pb-3 d-flex align-items-center">
                <span class="h5 mb-0">Notifications</span>
                <a href="# ">
                  <span class="align-middle"><i class="fe fe-settings me-1"></i></span>
                </a>
              </div>
              <ul class="list-group list-group-flush" style="height: 300px" data-simplebar>
                <li class="list-group-item bg-light">
                  <div class="row">
                    <div class="col">
                      <a class="text-body" href="#">
                        <div class="d-flex">
                          <img src="../assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
                          <div class="ms-3">
                            <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                            <p class="mb-3 text-body">Krisitn Watsan like your comment on course Javascript Introduction!</p>
                            <span class="fs-6">
                              <span>
                                <span class="fe fe-thumbs-up text-success me-1"></span>
                                2 hours ago,
                              </span>
                              <span class="ms-1">2:19 PM</span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-auto text-center me-2">
                      <a href="#" class="badge-dot bg-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read"></a>
                      <div>
                        <a href="#" class="bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove">
                          <i class="fe fe-x"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col">
                      <a class="text-body" href="#">
                        <div class="d-flex">
                          <img src="../assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md rounded-circle" />
                          <div class="ms-3">
                            <h5 class="fw-bold mb-1">Brooklyn Simmons</h5>
                            <p class="mb-3 text-body">Just launched a new Courses React for Beginner.</p>
                            <span class="fs-6">
                              <span>
                                <span class="fe fe-thumbs-up text-success me-1"></span>
                                Oct 9,
                              </span>
                              <span class="ms-1">1:20 PM</span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-auto text-center me-2">
                      <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col">
                      <a class="text-body" href="#">
                        <div class="d-flex">
                          <img src="../assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md rounded-circle" />
                          <div class="ms-3">
                            <h5 class="fw-bold mb-1">Jenny Wilson</h5>
                            <p class="mb-3 text-body">Krisitn Watsan like your comment on course Javascript Introduction!</p>
                            <span class="fs-6">
                              <span>
                                <span class="fe fe-thumbs-up text-info me-1"></span>
                                Oct 9,
                              </span>
                              <span class="ms-1">1:56 PM</span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-auto text-center me-2">
                      <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col">
                      <a class="text-body" href="#">
                        <div class="d-flex">
                          <img src="../assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md rounded-circle" />
                          <div class="ms-3">
                            <h5 class="fw-bold mb-1">Sina Ray</h5>
                            <p class="mb-3 text-body">You earn new certificate for complete the Javascript Beginner course.</p>
                            <span class="fs-6">
                              <span>
                                <span class="fe fe-award text-warning me-1"></span>
                                Oct 9,
                              </span>
                              <span class="ms-1">1:56 PM</span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-auto text-center me-2">
                      <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="border-top px-3 pt-3 pb-0">
                <a href="notification-history.html" class="text-link fw-semibold">See all Notifications</a>
              </div>
            </div>
          </div>
        </li>

        <li class="dropdown ms-2 d-inline-block position-static">
          <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            <div class="avatar avatar-md avatar-indicators avatar-online">
              <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end position-absolute mx-3 my-5">
            <div class="dropdown-item">
              <div class="d-flex">
                <div class="avatar avatar-md avatar-indicators avatar-online">
                  <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                </div>
                <div class="ms-3 lh-1">
                  <h5 class="mb-1">Annette Black</h5>
                  <p class="mb-0">annette@geeksui.com</p>
                </div>
              </div>
            </div>
            <div class="dropdown-divider"></div>
            <ul class="list-unstyled">
              <li class="dropdown-submenu dropstart-lg">
                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                  <i class="fe fe-circle me-2"></i>
                  Status
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="badge-dot bg-success me-2"></span>
                      Online
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="badge-dot bg-secondary me-2"></span>
                      Offline
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="badge-dot bg-warning me-2"></span>
                      Away
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="badge-dot bg-danger me-2"></span>
                      Busy
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item" href="profile-edit.html">
                  <i class="fe fe-user me-2"></i>
                  Profile
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="student-subscriptions.html">
                  <i class="fe fe-star me-2"></i>
                  Subscription
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="fe fe-settings me-2"></i>
                  Settings
                </a>
              </li>
            </ul>
            <div class="dropdown-divider"></div>
            <ul class="list-unstyled">
              <li>
                <a class="dropdown-item" href="../index.html">
                  <i class="fe fe-power me-2"></i>
                  Sign Out
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
    <div>
      <!-- Button -->
      <button
        class="navbar-toggler collapsed ms-2"
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
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbar-default">
      <ul class="navbar-nav mt-3 mt-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarBrowse" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-display="static">Browse</a>
          <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarBrowse">
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Web Development</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="course-category.html">Bootstrap</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">React</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">GraphQl</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Gatsby</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Grunt</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Svelte</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Meteor</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">HTML5</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Angular</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Design</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="course-category.html">Graphic Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Illustrator</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">UX / UI Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Figma Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Adobe XD</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Sketch</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Icon Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Photoshop</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">Mobile App</a>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">IT Software</a>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">Marketing</a>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">Music</a>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">Life Style</a>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">Business</a>
            </li>
            <li>
              <a href="course-category.html" class="dropdown-item">Photography</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarLanding" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Landings</a>
          <ul class="dropdown-menu" aria-labelledby="navbarLanding">
            <li>
              <h4 class="dropdown-header">Landings</h4>
            </li>
            <li>
              <a href="../mentor/mentor.html" class="dropdown-item">
                <span>Mentor</span>
                <span class="badge bg-primary ms-2">New</span>
              </a>
            </li>
            <li>
              <a href="landings/landing-education.html" class="dropdown-item">Education</a>
            </li>
            <li>
              <a href="landings/home-academy.html" class="dropdown-item">Home Academy</a>
            </li>
            <li>
              <a href="landings/landing-courses.html" class="dropdown-item">Courses</a>
            </li>
            <li>
              <a href="landings/course-lead.html" class="dropdown-item">Lead Course</a>
            </li>
            <li>
              <a href="landings/request-access.html" class="dropdown-item">Request Access</a>
            </li>
            <li>
              <a href="landings/landing-sass.html" class="dropdown-item">SaaS</a>
            </li>

            <li>
              <a href="landings/landing-job.html" class="dropdown-item">Job Listing</a>
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
                  <a class="dropdown-item" href="course-single.html">Course Single</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-single-v2.html">Course Single v2</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-resume.html">Course Resume</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-category.html">Course Category</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-checkout.html">Course Checkout</a>
                </li>
                <li>
                  <a class="dropdown-item" href="course-filter-list.html">Course List/Grid</a>
                </li>
                <li>
                  <a class="dropdown-item" href="add-course.html">Add New Course</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Paths</a>
              <ul class="dropdown-menu">
                <li>
                  <a href="course-path.html" class="dropdown-item">Browse Path</a>
                </li>
                <li>
                  <a href="course-path-single.html" class="dropdown-item">Path Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Blog</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="blog.html">Listing</a>
                </li>
                <li>
                  <a class="dropdown-item" href="blog-single.html">Article</a>
                </li>
                <li>
                  <a class="dropdown-item" href="blog-category.html">Category</a>
                </li>
                <li>
                  <a class="dropdown-item" href="blog-sidebar.html">Sidebar</a>
                </li>
              </ul>
            </li>

            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Career</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="career.html">Overview</a>
                </li>
                <li>
                  <a class="dropdown-item" href="career-list.html">Listing</a>
                </li>
                <li>
                  <a class="dropdown-item" href="career-single.html">Opening</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Portfolio</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="portfolio.html">List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="portfolio-single.html">Single</a>
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
                  <a class="dropdown-item" href="../mentor/mentor.html">Home</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../mentor/mentor-list.html">List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../mentor/mentor-single.html">Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Job</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="landings/landing-job.html">Home</a>
                </li>
                <li>
                  <a class="dropdown-item" href="jobs/job-listing.html">List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="jobs/job-grid.html">Grid</a>
                </li>
                <li>
                  <a class="dropdown-item" href="jobs/job-single.html">Single</a>
                </li>
                <li>
                  <a class="dropdown-item" href="jobs/company-list.html">Company List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="jobs/company-about.html">Company Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Specialty</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                </li>
                <li>
                  <a class="dropdown-item" href="404-error.html">Error 404</a>
                </li>
                <li>
                  <a class="dropdown-item" href="maintenance-mode.html">Maintenance Mode</a>
                </li>
                <li>
                  <a class="dropdown-item" href="terms-condition-page.html">Terms & Conditions</a>
                </li>
              </ul>
            </li>
            <li>
              <hr class="mx-3" />
            </li>

            <li>
              <a class="dropdown-item" href="about.html">About</a>
            </li>

            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Help Center</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="help-center.html">Help Center</a>
                </li>
                <li>
                  <a class="dropdown-item" href="help-center-faq.html">FAQ's</a>
                </li>
                <li>
                  <a class="dropdown-item" href="help-center-guide.html">Guide</a>
                </li>
                <li>
                  <a class="dropdown-item" href="help-center-guide-single.html">Guide Single</a>
                </li>
                <li>
                  <a class="dropdown-item" href="help-center-support.html">Support</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropdown-item" href="pricing.html">Pricing</a>
            </li>
            <li>
              <a class="dropdown-item" href="compare-plan.html">Compare Plan</a>
            </li>

            <li>
              <a class="dropdown-item" href="contact.html">Contact</a>
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
                  <a class="dropdown-item" href="dashboard-instructor.html">Dashboard</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-profile.html">Profile</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-courses.html">My Courses</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-order.html">Orders</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-reviews.html">Reviews</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-students.html">Students</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-payouts.html">Payouts</a>
                </li>
                <li>
                  <a class="dropdown-item" href="instructor-earning.html">Earning</a>
                </li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Quiz</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="instructor-quiz.html">Quiz</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="instructor-quiz-details.html">Single</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="instructor-quiz-result.html">Result</a>
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
                  <a class="dropdown-item" href="dashboard-student.html">Dashboard</a>
                </li>
                <li>
                  <a class="dropdown-item" href="student-subscriptions.html">Subscriptions</a>
                </li>
                <li>
                  <a class="dropdown-item" href="payment-method.html">Payments</a>
                </li>
                <li>
                  <a class="dropdown-item" href="billing-info.html">Billing Info</a>
                </li>
                <li>
                  <a class="dropdown-item" href="invoice.html">Invoice</a>
                </li>
                <li>
                  <a class="dropdown-item" href="invoice-details.html">Invoice Details</a>
                </li>
                <li>
                  <a class="dropdown-item" href="dashboard-student.html">Bookmarked</a>
                </li>
                <li>
                  <a class="dropdown-item" href="dashboard-student.html">My Path</a>
                </li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Quiz</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="student-quiz.html">Quiz</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="student-quiz-attempt.html">Attempt</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="student-quiz-start.html">Start</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="student-quiz-result.html">Result</a>
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
                  <a href="dashboard/admin-dashboard.html" class="btn btn-sm btn-primary">Go to Dashboard</a>
                </li>
              </ul>
            </li>
            <li>
              <hr class="mx-3" />
            </li>
            <li>
              <a class="dropdown-item" href="sign-in.html">Sign In</a>
            </li>
            <li>
              <a class="dropdown-item" href="sign-up.html">Sign Up</a>
            </li>
            <li>
              <a class="dropdown-item" href="forget-password.html">Forgot Password</a>
            </li>
            <li>
              <a class="dropdown-item" href="profile-edit.html">Edit Profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="security.html">Security</a>
            </li>
            <li>
              <a class="dropdown-item" href="social-profile.html">Social Profiles</a>
            </li>
            <li>
              <a class="dropdown-item" href="notifications.html">Notifications</a>
            </li>
            <li>
              <a class="dropdown-item" href="profile-privacy.html">Privacy Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="delete-profile.html">Delete Profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="linked-accounts.html">Linked Accounts</a>
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
                      <span class="text-primary ms-1" id="changelog"></span>
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
      <form class="mt-3 mt-lg-0 ms-lg-3 d-flex align-items-center">
        <span class="position-absolute ps-3 search-icon">
          <i class="fe fe-search"></i>
        </span>
        <label for="search" class="visually-hidden"></label>
        <input type="search" id="search" class="form-control ps-6" placeholder="Search Courses" />
      </form>
    </div>
  </div>
</nav>

        <!-- Page Content -->
        <main>
            <section class="pt-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <!-- Bg -->
                            <div class="pt-8 rounded-top-md" style="background: url(../assets/images/background/profile-bg.jpg) no-repeat; background-size: cover; height: 100px"></div>
                            <div class="card rounded-0 rounded-bottom px-4 pt-2 pb-4">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                            <img src="../assets/images/avatar/avatar-3.jpg" class="avatar-xl rounded-circle border border-4 border-white" alt="avatar">
                                        </div>
                                        <div class="lh-1">
                                            <h2 class="mb-0">
                                                Stella Flores
                                                <a href="#"  data-bs-toggle="tooltip" data-placement="top" title="Beginner">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                                    </svg>
                                                </a>
                                            </h2>
                                            <p class="mb-0 d-block">@stellaflores</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="profile-edit.html" class="btn btn-primary btn-sm d-none d-md-block">Account Setting</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Content -->
            <section class="pb-5 py-md-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Side Navbar -->
                            <ul class="nav nav-lb-tab mb-6" id="tab" role="tablist">
                                <li class="nav-item ms-0" role="presentation">
                                    <a class="nav-link active" id="bookmarked-tab" data-bs-toggle="pill" href="#bookmarked" role="tab" aria-controls="bookmarked" aria-selected="true">Bookmarked</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="currentlyLearning-tab" data-bs-toggle="pill" href="#currentlyLearning" role="tab" aria-controls="currentlyLearning" aria-selected="false">
                                        Learning
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="path-tab" data-bs-toggle="pill" href="#path" role="tab" aria-controls="path" aria-selected="false">Path</a>
                                </li>
                            </ul>
                            <!-- Tab content -->
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active" id="bookmarked" role="tabpanel" aria-labelledby="bookmarked-tab">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Card -->
                                            <div class="card mb-4 card-hover">
                                                <a href="#"><img src="../assets/images/course/course-react.jpg" alt="course" class="card-img-top"></a>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">How to easily create a website with React</a></h3>
                                                    <!-- List inline -->
                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="align-middle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                                            </span>
                                                            <span>3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="mt-3 d-flex align-baseline lh-1">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-warning mx-1">4.5</span>
                                                        <span class="fs-6">(9,300)</span>
                                                    </div>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Morris Mccoy</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="removeBookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Card -->
                                            <div class="card mb-4 card-hover">
                                                <a href="#"><img src="../assets/images/course/course-graphql.jpg" alt="course" class="card-img-top"></a>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">GraphQL: introduction to graphQL for beginners</a></h3>
                                                    <!-- List inline -->
                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="align-middle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                                            </span>
                                                            <span>2h 46m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE"></rect>
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                    <div class="mt-3 d-flex align-baseline lh-1">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-warning mx-1">4.5</span>
                                                        <span class="fs-6">(7,800)</span>
                                                    </div>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Ted Hawkins</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="removeBookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Card -->
                                            <div class="card mb-4 card-hover">
                                                <a href="#"><img src="../assets/images/course/course-angular.jpg" alt="course" class="card-img-top"></a>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">Angular - the complete guide for beginner</a></h3>
                                                    <!-- List inline -->
                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="align-middle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                                            </span>
                                                            <span>1h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="mt-3 d-flex align-baseline lh-1">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-warning mx-1">4.5</span>
                                                        <span class="fs-6">(9,300)</span>
                                                    </div>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Juanita Bell</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="removeBookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Card -->
                                            <div class="card mb-4 card-hover">
                                                <a href="#"><img src="../assets/images/course/course-python.jpg" alt="course" class="card-img-top"></a>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">The Python Course: build web application</a></h3>
                                                    <!-- List inline -->
                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="align-middle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                                            </span>
                                                            <span>2h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                    <div class="mt-3 d-flex align-baseline lh-1">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-warning mx-1">4.5</span>
                                                        <span class="fs-6">(3,245)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-5.jpg" class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Claire Robertson</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="removeBookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Card -->
                                            <div class="card mb-4 card-hover">
                                                <a href="#"><img src="../assets/images/course/course-gatsby.jpg" alt="course" class="card-img-top"></a>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">Gatsby JS: build blog with GraphQL and React</a></h3>
                                                    <!-- List inline -->
                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="align-middle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                                            </span>
                                                            <span>3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="mt-3 d-flex align-baseline lh-1">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-warning mx-1">4.5</span>
                                                        <span class="fs-6">(5,300)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-5.jpg" class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Morris Mccoy</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="removeBookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Card -->
                                            <div class="card mb-4 card-hover">
                                                <a href="#"><img src="../assets/images/course/course-javascript.jpg" alt="course" class="card-img-top"></a>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">JavaScript: modern javaScript from the beginning</a></h3>
                                                    <!-- List inline -->
                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="align-middle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                                            </span>
                                                            <span>2h 46m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE">
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE">
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                    <div class="mt-3 d-flex align-baseline lh-1">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-warning mx-1">4.5</span>
                                                        <span class="fs-6">(9,300)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Ted Hawkins</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="removeBookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Card -->
                                            <div class="card mb-4 card-hover">
                                                <a href="#"><img src="../assets/images/course/course-css.jpg" alt="course" class="card-img-top"></a>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">CSS: ultimate CSS course from beginner to advanced</a></h3>
                                                    <!-- List inline -->
                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="align-middle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                                            </span>
                                                            <span>1h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="mt-3 d-flex align-baseline lh-1">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-warning mx-1">4.5</span>
                                                        <span class="fs-6">(5,586)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-7.jpg" class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Juanita Bell</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="removeBookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Card -->
                                            <div class="card mb-4 card-hover">
                                                <a href="#"><img src="../assets/images/course/course-wordpress.jpg" alt="course" class="card-img-top"></a>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">Wordpress: complete WordPress theme & plugin dvelopment course</a></h3>
                                                    <!-- List inline -->
                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="align-middle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                                            </span>
                                                            <span>2h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE">
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                    <div class="mt-3 d-flex align-baseline lh-1">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-warning mx-1">4.5</span>
                                                        <span class="fs-6">(6,245)</span>
                                                    </div>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-8.jpg" class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Claire Robertson</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="removeBookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="offset-lg-3 col-lg-6 col-md-12 col-12 text-center mt-5">
                                            <p>You’ve reached the end of the list</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="currentlyLearning" role="tabpanel" aria-labelledby="currentlyLearning-tab">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Card -->
                                            <div class="card mb-4 card-hover">
                                                <a href="#"><img src="../assets/images/course/course-react.jpg" alt="course" class="card-img-top"></a>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">How to easily create a website with React</a></h3>
                                                    <!-- List inline -->
                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="align-middle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                                            </span>
                                                            <span>3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="mt-3 d-flex align-baseline lh-1">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-warning mx-1">4.5</span>
                                                        <span class="fs-6">(6,300)</span>
                                                    </div>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Morris Mccoy</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="removeBookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-3" style="height: 5px">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Card -->
                                            <div class="card mb-4 card-hover">
                                                <a href="#"><img src="../assets/images/course/course-graphql.jpg" alt="course" class="card-img-top"></a>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">GraphQL: introduction to graphQL for beginners</a></h3>
                                                    <!-- List inline -->
                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="align-middle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                                            </span>
                                                            <span>2h 46m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE"></rect>
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                    <div class="mt-3 d-flex align-baseline lh-1">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-warning mx-1">4.5</span>
                                                        <span class="fs-6">(7,800)</span>
                                                    </div>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-7.jpg" class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Ted Hawkins</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="removeBookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-3" style="height: 5px">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Card -->
                                            <div class="card mb-4 card-hover">
                                                <a href="#"><img src="../assets/images/course/course-angular.jpg" alt="course" class="card-img-top"></a>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">Angular - the complete guide for beginner</a></h3>
                                                    <!-- List inline -->
                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="align-middle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                                            </span>
                                                            <span>1h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="mt-3 d-flex align-baseline lh-1">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-warning mx-1">4.5</span>
                                                        <span class="fs-6">(5,410)</span>
                                                    </div>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-8.jpg" class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Juanita Bell</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="removeBookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-3" style="height: 5px">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Card -->
                                            <div class="card mb-4 card-hover">
                                                <a href="#"><img src="../assets/images/course/course-python.jpg" alt="course" class="card-img-top"></a>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">The Python Course: build web application</a></h3>
                                                    <!-- List inline -->
                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="align-middle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                                            </span>
                                                            <span>2h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                    <div class="mt-3 d-flex align-baseline lh-1">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-warning mx-1">4.5</span>
                                                        <span class="fs-6">(9,300)</span>
                                                    </div>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-9.jpg" class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Claire Robertson</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="removeBookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-3" style="height: 5px">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Card -->
                                            <div class="card mb-4 card-hover">
                                                <a href="#"><img src="../assets/images/course/course-python.jpg" alt="course" class="card-img-top"></a>
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">The Python Course: build web application</a></h3>
                                                    <!-- List inline -->
                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="align-middle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                                            </span>
                                                            <span>2h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                    <div class="mt-3 d-flex align-baseline lh-1">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-warning mx-1">4.5</span>
                                                        <span class="fs-6">(13,245)</span>
                                                    </div>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-9.jpg" class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Claire Robertson</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="removeBookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="progress mt-3" style="height: 5px">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="offset-lg-3 col-lg-6 col-md-12 col-12 text-center mt-5">
                                            <p>You’ve reached the end of the list</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Path -->
                                <div class="tab-pane fade" id="path" role="tabpanel" aria-labelledby="path-tab">
                                    <div class="row d-flex justify-content-center text-center">
                                        <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                                            <div class="py-6">
                                                <img src="../assets/images/svg/path-img.svg" alt="path" class="img-fluid">
                                                <div class="mt-4">
                                                    <h2 class="display-4 fw-bold">Coming Soon</h2>
                                                    <p class="mb-5">The designer working on our design so for now we schedule it to come soon. we release it soon for you. Thank you for watching.</p>
                                                    <a href="../index.html" class="btn btn-primary">Back To Dashboard</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center g-0 border-top py-2">
            <!-- Desc -->
            <div class="col-md-6 col-12 text-center text-md-start">
                <span>
                    ©
                    <span id="copyright">
                        <script>
                            document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
                        </script>
                    </span>
                    Geeks. All Rights Reserved.
                </span>
            </div>
            <!-- Links -->
            <div class="col-12 col-md-6">
                <nav class="nav nav-footer justify-content-center justify-content-md-end">
                    <a class="nav-link active ps-0" href="#!">Privacy</a>
                    <a class="nav-link" href="#!">Terms</a>
                    <a class="nav-link" href="#!">Feedback</a>
                    <a class="nav-link" href="#!">Support</a>
                </nav>
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

    </body>

<!-- Mirrored from geeksui.codescandy.com/geeks/pages/dashboard-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 14:59:13 GMT -->
</html>