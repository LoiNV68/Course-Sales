<!doctype html>
<html lang="en">
    
<!-- Mirrored from geeksui.codescandy.com/geeks/pages/instructor-quiz.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 14:59:12 GMT -->
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

        <link rel="canonical" href="instructor-quiz.html">
        <title>Quiz | Geeks - Bootstrap 5 Template</title>
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

        <!-- Page content -->
        <main>
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- User info -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <!-- Bg -->
                            <div class="rounded-top" style="background: url(../assets/images/background/profile-bg.jpg) no-repeat; background-size: cover; height: 100px"></div>
                            <div class="card px-4 pt-2 pb-4 shadow-sm rounded-top-0 rounded-bottom-0 rounded-bottom-md-2">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                            <img src="../assets/images/avatar/avatar-1.jpg" class="avatar-xl rounded-circle border border-4 border-white position-relative" alt="avatar">
                                            <a href="#" class="position-absolute top-0 end-0" data-bs-toggle="tooltip" data-placement="top" title="Verified">
                                                <img src="../assets/images/svg/checked-mark.svg" alt="checked" height="30" width="30">
                                            </a>
                                        </div>
                                        <div class="lh-1">
                                            <h2 class="mb-0">Jenny Wilson</h2>
                                            <p class="mb-0 d-block">@Jennywilson</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="add-course.html" class="btn btn-primary d-none d-md-block">Create New Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content -->

                    <div class="row mt-0 mt-md-4">
                        <div class="col-lg-3 col-md-4 col-12">
                            <!-- Side navbar -->
                            <nav class="navbar navbar-expand-md shadow-sm mb-4 mb-lg-0 sidenav">
                                <!-- Menu -->
                                <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
                                <!-- Button -->
                                <button
                                    class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#sidenav"
                                    aria-controls="sidenav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="fe fe-menu"></span>
                                </button>
                                <!-- Collapse navbar -->
                                <div class="collapse navbar-collapse" id="sidenav">
                                    <div class="navbar-nav flex-column">
                                        <span class="navbar-header">Dashboard</span>
                                        <ul class="list-unstyled ms-n2 mb-4">
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-instructor.html">
                                                    <i class="fe fe-home nav-icon"></i>
                                                    My Dashboard
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="instructor-courses.html">
                                                    <i class="fe fe-book nav-icon"></i>
                                                    My Courses
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="instructor-reviews.html">
                                                    <i class="fe fe-star nav-icon"></i>
                                                    Reviews
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="instructor-earning.html">
                                                    <i class="fe fe-pie-chart nav-icon"></i>
                                                    Earnings
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="instructor-order.html">
                                                    <i class="fe fe-shopping-bag nav-icon"></i>
                                                    Orders
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="instructor-students.html">
                                                    <i class="fe fe-users nav-icon"></i>
                                                    Students
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="instructor-payouts.html">
                                                    <i class="fe fe-dollar-sign nav-icon"></i>
                                                    Payouts
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item active">
                                                <a class="nav-link" href="instructor-quiz.html">
                                                    <i class="fe fe-help-circle nav-icon"></i>
                                                    Quiz
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="instructor-quiz-result.html">
                                                    <i class="fe fe-help-circle nav-icon"></i>
                                                    Quiz Result
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Navbar header -->
                                        <span class="navbar-header">Account Settings</span>
                                        <ul class="list-unstyled ms-n2 mb-0">
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="profile-edit.html">
                                                    <i class="fe fe-settings nav-icon"></i>
                                                    Edit Profile
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="security.html">
                                                    <i class="fe fe-user nav-icon"></i>
                                                    Security
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="social-profile.html">
                                                    <i class="fe fe-refresh-cw nav-icon"></i>
                                                    Social Profiles
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="notifications.html">
                                                    <i class="fe fe-bell nav-icon"></i>
                                                    Notifications
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="profile-privacy.html">
                                                    <i class="fe fe-lock nav-icon"></i>
                                                    Profile Privacy
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="delete-profile.html">
                                                    <i class="fe fe-trash nav-icon"></i>
                                                    Delete Profile
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="../index.html">
                                                    <i class="fe fe-power nav-icon"></i>
                                                    Sign Out
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <!-- Card header -->
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="mb-0">Quiz</h3>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-primary btn-sm">Add New Quiz</a>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-centered text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <!-- quiz img -->
                                                            <a href="#"><img src="../assets/images/course/course-javascript.jpg" alt="course" class="rounded img-4by3-lg"></a>
                                                            <!-- quiz content -->
                                                            <div class="ms-3">
                                                                <h4 class="mb-2"><a href="instructor-quiz-details.html" class="text-inherit">Javascript Basic Quiz</a></h4>
                                                                <div>
                                                                    <span>
                                                                        <span class="me-2 align-middle"><i class="fe fe-list"></i></span>
                                                                        15 Questions
                                                                    </span>
                                                                    <span class="ms-2">
                                                                        <span class="me-2 align-middle"><i class="fe fe-clock"></i></span>
                                                                        30 Minutes
                                                                    </span>
                                                                    <a href="instructor-quiz-result.html" class="ms-2 text-body">
                                                                        <span class="me-2 align-middle"><i class="fe fe-file-text"></i></span>
                                                                        Result
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <!-- icon -->
                                                        <div>
                                                            <a href="#" class="text-inherit"><i class="fe fe-settings"></i></a>
                                                            <a href="#" class="ms-2 link-danger"><i class="fe fe-trash-2"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <!-- quiz img -->
                                                            <a href="#"><img src="../assets/images/course/course-react.jpg" alt="course" class="rounded img-4by3-lg"></a>
                                                            <!-- quiz content -->
                                                            <div class="ms-3">
                                                                <h4 class="mb-2"><a href="instructor-quiz-details.html" class="text-inherit">React Basic Quiz</a></h4>
                                                                <div>
                                                                    <span>
                                                                        <span class="me-2 align-middle"><i class="fe fe-list"></i></span>
                                                                        20 Questions
                                                                    </span>
                                                                    <span class="ms-2">
                                                                        <span class="me-2 align-middle"><i class="fe fe-clock"></i></span>
                                                                        18 Minutes
                                                                    </span>
                                                                    <a href="instructor-quiz-result.html" class="ms-2 text-body">
                                                                        <span class="me-2 align-middle"><i class="fe fe-file-text"></i></span>
                                                                        Result
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <!-- icon -->
                                                        <div>
                                                            <a href="#" class="text-inherit"><i class="fe fe-settings"></i></a>
                                                            <a href="#" class="ms-2 link-danger"><i class="fe fe-trash-2"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <!-- quiz img -->
                                                            <a href="#"><img src="../assets/images/course/course-css.jpg" alt="course" class="rounded img-4by3-lg"></a>
                                                            <!-- quiz content -->
                                                            <div class="ms-3">
                                                                <h4 class="mb-2"><a href="instructor-quiz-details.html" class="text-inherit">CSS Beginner Quiz</a></h4>
                                                                <div>
                                                                    <span>
                                                                        <span class="me-2 align-middle"><i class="fe fe-list"></i></span>
                                                                        18 Questions
                                                                    </span>
                                                                    <span class="ms-2">
                                                                        <span class="me-2 align-middle"><i class="fe fe-clock"></i></span>
                                                                        15 Minutes
                                                                    </span>
                                                                    <a href="instructor-quiz-result.html" class="ms-2 text-body">
                                                                        <span class="me-2 align-middle"><i class="fe fe-file-text"></i></span>
                                                                        Result
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- icon -->
                                                    <td>
                                                        <div>
                                                            <a href="#" class="text-inherit"><i class="fe fe-settings"></i></a>
                                                            <a href="#" class="ms-2 link-danger"><i class="fe fe-trash-2"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <!-- quiz img -->
                                                            <a href="#"><img src="../assets/images/course/course-vue.jpg" alt="course" class="rounded img-4by3-lg"></a>
                                                            <!-- quiz content -->
                                                            <div class="ms-3">
                                                                <h4 class="mb-2"><a href="instructor-quiz-details.html" class="text-inherit">Vue.js Basic Quiz</a></h4>
                                                                <div>
                                                                    <span>
                                                                        <span class="me-2 align-middle"><i class="fe fe-list"></i></span>
                                                                        26 Questions
                                                                    </span>
                                                                    <span class="ms-2">
                                                                        <span class="me-2 align-middle"><i class="fe fe-clock"></i></span>
                                                                        35 Minutes
                                                                    </span>
                                                                    <a href="instructor-quiz-result.html" class="ms-2 text-body">
                                                                        <span class="me-2 align-middle"><i class="fe fe-file-text"></i></span>
                                                                        Result
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <!-- icon -->
                                                        <div>
                                                            <a href="#" class="text-inherit"><i class="fe fe-settings"></i></a>
                                                            <a href="#" class="ms-2 link-danger"><i class="fe fe-trash-2"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <!-- quiz img -->
                                                            <a href="#"><img src="../assets/images/course/course-html.jpg" alt="course" class="rounded img-4by3-lg"></a>
                                                            <!-- quiz content -->
                                                            <div class="ms-3">
                                                                <h4 class="mb-2"><a href="instructor-quiz-details.html" class="text-inherit">HTML 5 Basic Quiz</a></h4>
                                                                <div>
                                                                    <span>
                                                                        <span class="me-2 align-middle"><i class="fe fe-list"></i></span>
                                                                        15 Questions
                                                                    </span>
                                                                    <span class="ms-2">
                                                                        <span class="me-2 align-middle"><i class="fe fe-clock"></i></span>
                                                                        30 Minutes
                                                                    </span>
                                                                    <a href="instructor-quiz-result.html" class="ms-2 text-body">
                                                                        <span class="me-2 align-middle"><i class="fe fe-file-text"></i></span>
                                                                        Result
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <!-- icon -->
                                                        <div>
                                                            <a href="#" class="text-inherit"><i class="fe fe-settings"></i></a>
                                                            <a href="#" class="ms-2 link-danger"><i class="fe fe-trash-2"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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

<!-- Mirrored from geeksui.codescandy.com/geeks/pages/instructor-quiz.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 14:59:12 GMT -->
</html>
