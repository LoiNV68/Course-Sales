@extends('layouts.user')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <style>
        .pagination {
            display: flex;
            list-style-type: none;
        }

        .pagination li {
            margin: 5px;
            cursor: pointer;
        }
    </style>
    <!-- Page header -->
    <section class="bg-primary py-4 py-lg-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div>
                        <h1 class="mb-0 text-white display-4"><a href="{{ route('course-category', 0) }}" class="nav-link">All
                                courses</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content -->
    <section class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                    <div class="row d-md-flex justify-content-between align-items-center">
                        <div class="col-md-6 col-lg-8 col-xl-9">
                            <h4 class="mb-3 mb-md-0">Displaying {{ $courses->count() }} out of {{ $totalCourse }} courses
                            </h4>
                        </div>
                        <div class="d-inline-flex col-md-6 col-lg-4 col-xl-3">

                            <!-- List  -->
                            <select id="sortCourses" class="form-select">
                                <option value="">Sort by</option>
                                <option value="newest" {{ $sort == 'newest' ? 'selected' : '' }}>Newest</option>
                                <option value="low_to_high" {{ $sort == 'low_to_high' ? 'selected' : '' }}>Price : Low to
                                    high</option>
                                <option value="high_to_low" {{ $sort == 'high_to_low' ? 'selected' : '' }}>Price : High to
                                    low</option>
                                <option value="highest_rated" {{ $sort == 'highest_rated' ? 'selected' : '' }}>Highest Rated
                                </option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-12 mb-4 mb-lg-0">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h4 class="mb-0">Filter</h4>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <span class="dropdown-header px-0 mb-2">Category</span>
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input course-category-checkbox" id="0"
                                    value="0" {{ $newCategory == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="0">All</label>
                            </div>
                            @if ($courseCate)
                                @foreach ($courseCate as $cate)
                                    <div class="form-check mb-1">
                                        <input type="checkbox" class="form-check-input" id="javascriptCheck">
                                        <label class="form-check-label" for="javascriptCheck">Javascript</label>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <!-- Card body -->
                        <div class="card-body border-top">
                            <span class="dropdown-header px-0 mb-2">Ratings</span>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" class="form-check-input" id="starRadio1" name="customRadio"
                                    value="5" {{ $newRate == '5' ? 'checked' : '' }}>
                                <label class="form-check-label" for="starRadio1">
                                    <span class="fs-6 align-top me-1">
                                        @for ($i = 0; $i < 5; $i++)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                fill="currentColor" class="bi bi-star-fill text-warning"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                </path>
                                            </svg>
                                        @endfor
                                    </span>
                                    <span class="fs-6">4.5 & UP</span>
                                </label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" class="form-check-input" id="starRadio2" name="customRadio"
                                    value="4" {{ $newRate == '4' ? 'checked' : '' }}>
                                <label class="form-check-label" for="starRadio2">
                                    <span class="fs-6 align-top me-1">
                                        @for ($i = 0; $i < 5; $i++)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                fill="currentColor" class="bi bi-star-fill text-warning"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                </path>
                                            </svg>
                                        @endfor
                                    </span>
                                    <span class="fs-6">4.0 & UP</span>
                                </label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" class="form-check-input" id="starRadio3" name="customRadio"
                                    value="3.5" {{ $newRate == '3.5' ? 'checked' : '' }}>
                                <label class="form-check-label" for="starRadio3">
                                    <span class="fs-6 align-top me-1">
                                        @for ($i = 0; $i < 5; $i++)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                fill="currentColor" class="bi bi-star-fill text-warning"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                </path>
                                            </svg>
                                        @endfor
                                    </span>
                                    <span class="fs-6">3.5 & UP</span>
                                </label>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body border-top">
                            <span class="dropdown-header px-0 mb-2">Level</span>
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input course-level-checkbox" name="course_level"
                                    id="Beginner" value="Beginner" {{ $newLevel == 'Beginner' ? 'checked' : '' }}>
                                <label class="form-check-label" for="Beginner">Beginner</label>
                            </div>
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input course-level-checkbox" name="course_level"
                                    id="Intermediate" value="Intermediate"
                                    {{ $newLevel == 'Intermediate' ? 'checked' : '' }}>
                                <label class="form-check-label" for="Intermediate">Intermediate</label>
                            </div>
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input course-level-checkbox" name="course_level"
                                    id="Advance" value="Advance" {{ $newLevel == 'Advance' ? 'checked' : '' }}>
                                <label class="form-check-label" for="Advance">Advance</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab content -->
                <div class="col-xl-9 col-lg-9 col-md-8 col-12">
                    <div class="tab-content">
                        <!-- Tab pane -->
                        <div class="tab-pane fade show active pb-4" id="tabPaneGrid" role="tabpanel"
                            aria-labelledby="tabPaneGrid">
                            <div class="row" id="course-container">

                                @foreach ($courses as $course)
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card mb-4 card-hover">
                                            <a href="{{ route('course-detail', $course->id) }}">
                                                <img src="{{ asset('storage/upload/images/course/' . $course->image) }}"
                                                    alt="course" class="card-img-top" />
                                            </a>
                                            <!-- Card Body -->
                                            <div class="card-body" style="height: 188px; width: 305px;">
                                                <h4 class="mb-2 text-truncate-line-2" style="height: 48px; width: 257px">
                                                    <a href="{{ route('course-detail', $course->id) }}"
                                                        class="text-inherit">{{ $course->title }}</a>
                                                </h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                                <path
                                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                            </svg>
                                                        </span>
                                                        <span>3h 56m</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        @if ($course->level == 'Beginner')
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6"
                                                                    rx="1" fill="#754FFE" />
                                                                <rect x="7" y="5" width="2" height="9"
                                                                    rx="1" fill="#DBD8E9" />
                                                                <rect x="11" y="2" width="2" height="12"
                                                                    rx="1" fill="#DBD8E9" />
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </svg>
                                                            </span>
                                                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(12,245)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <a
                                                            href="{{ route('instructor-profile', $course->instructor->id) }}">
                                                            <img src="{{ asset('storage/upload/images/avatar/' . $course->instructor->avatar) }}"
                                                                class="rounded-circle avatar-xs" alt="Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="col ms-2">
                                                        <a class="nav-link"
                                                            href="{{ route('instructor-profile', $course->instructor->id) }}">
                                                            <span>{{ $course->instructor->firstname }}
                                                                {{ $course->instructor->lastname }}</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-auto">
                                                        @if (Auth::check())
                                                            @if ($user->role == 0)
                                                                @if ($userDetail->id === null)
                                                                    <a href="{{ route('student-profile', $user->id) }}">
                                                                        <i class="fe fe-bookmark fs-4"></i>
                                                                    </a>
                                                                @elseif ($userDetail && $userDetail->id)
                                                                    <button type="button"
                                                                        class="text-reset bookmark-button btn-unstyled"
                                                                        data-course-id="{{ $course->id }}"
                                                                        student-id="{{ $userDetail->id }}"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top">
                                                                        <i
                                                                            class="fe fe-bookmark fs-4 {{ in_array($course->id, $bookmarkedCourseIds) ? 'bi-bookmark-fill' : '' }}"></i>
                                                                    </button>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                                {{ $courses->links() }}


                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>











@endsection
