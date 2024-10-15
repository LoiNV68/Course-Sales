@extends('layouts.user')
@section('tittle')
    {{ $title }}
@endsection
@section('content')
    <!-- Page header -->
    <section class="pt-lg-8 pb-8 bg-primary">
        <div class="container pb-lg-8">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div>
                        <h1 class="text-white display-4 fw-semibold">{{ $course->title }}</h1>
                        <p class="text-white mb-6 lead">
                            {{ $course->preview }}
                        </p>
                        <div class="d-flex align-items-center">
                            <a href="#" class="bookmark text-white">
                                <i class="fe fe-bookmark fs-4 me-2"></i>
                                Bookmark
                            </a>

                            <span class="text-white ms-3">
                                <i class="fe fe-user"></i>
                                {{ $course->sale_count }} Enrolled
                            </span>
                            <div>
                                <span class="fs-6 ms-4 align-text-top">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= floor($course->review_avg_rate))
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill text-warning"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                </path>
                                            </svg>
                                        @elseif ($i == ceil($course->review_avg_rate) && $course->review_avg_rate - floor($course->review_avg_rate) > 0)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-half text-warning"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8 .753a.75.75 0 0 1 .59.306l1.902 2.576 4.09.63a.75.75 0 0 1 .416 1.279l-3.045 3.032.719 4.192a.75.75 0 0 1-1.088.791L8 12.347l-3.766 1.98a.75.75 0 0 1-1.088-.79l.719-4.192L.502 5.548a.75.75 0 0 1 .416-1.28l4.09-.63L7.41 1.06a.75.75 0 0 1 .59-.307zm0 10.944l-2.573 1.353.488-2.845a.75.75 0 0 1 .218-.456l2.12-2.013-2.945-.454a.75.75 0 0 1-.563-.41L4.012 3.57 5.26 5.97a.75.75 0 0 1 .207.45l.528 2.88-2.3-1.207a.75.75 0 0 1-.26-.276L2.11 3.214 5.7 3.5a.75.75 0 0 1 .582.41l1.28 2.424 2.852.439a.75.75 0 0 1 .438 1.283l-2.068 2.068.488 2.846a.75.75 0 0 1-.218.456L8 11.697z">
                                                </path>
                                            </svg>
                                        @endif
                                    @endfor
                                </span>
                                <span class="text-white">({{ $course->review_count }})</span>
                            </div>
                            <span class="text-white ms-4 d-none d-md-block">
                                @if ($course->level == 'Beginner')
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#DBD8E9" />
                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                                    </svg>
                                @elseif ($course->level == 'Intermediate')
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#DBD8E9" />
                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                                    </svg>
                                @elseif ($course->level == 'Advance')
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#DBD8E9">
                                        </rect>
                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                        </rect>
                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                        </rect>
                                    </svg>
                                @endif
                                <span class="align-middle">{{ $course->level }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page content -->
    <section class="pb-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12 mt-n8 mb-4 mb-lg-0">
                    <!-- Card -->
                    <div class="card rounded-3">
                        <!-- Card header -->
                        <div class="card-header border-bottom-0 p-0">
                            <div>
                                <!-- Nav -->
                                <ul class="nav nav-lb-tab" id="tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="table-tab" data-bs-toggle="pill" href="#table"
                                            role="tab" aria-controls="table" aria-selected="true">Contents</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="description-tab" data-bs-toggle="pill" href="#description"
                                            role="tab" aria-controls="description" aria-selected="false">
                                            Description
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="review-tab" data-bs-toggle="pill" href="#review"
                                            role="tab" aria-controls="review" aria-selected="false">Reviews</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="faq-tab" data-bs-toggle="pill" href="#faq"
                                            role="tab" aria-controls="faq" aria-selected="false">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active" id="table" role="tabpanel"
                                    aria-labelledby="table-tab">
                                    <!-- Card -->
                                    <div class="accordion" id="courseAccordion">
                                        <div>
                                            <!-- List group -->
                                            <ul class="list-group list-group-flush">
                                                @if (!empty($course->section))
                                                    @foreach ($course->section as $section)
                                                        <li
                                                            class="list-group-item px-0 {{ $loop->first ? 'pt-0' : '' }} {{ $loop->last ? 'pb-0' : '' }}">
                                                            <!-- Toggle -->
                                                            <a class="h4 mb-0 d-flex align-items-center {{ $loop->first ? 'active collapsed' : '' }} "
                                                                data-bs-toggle="collapse"
                                                                href="#course{{ $loop->index }}"
                                                                aria-expanded="{{ $loop->first ? 'true' : '' }}"
                                                                aria-controls="course{{ $loop->index }}">
                                                                <div class="me-auto">{{ $section->name }}</div>
                                                                <!-- Chevron -->
                                                                <span class="chevron-arrow ms-4">
                                                                    <i class="fe fe-chevron-down fs-4"></i>
                                                                </span>
                                                            </a>
                                                            <!-- Row -->
                                                            <!-- Collapse -->
                                                            <div class="collapse {{ $loop->first ? 'show' : '' }}"
                                                                id="course{{ $loop->index }}"
                                                                data-bs-parent="#courseAccordion">
                                                                <div class="pt-3 pb-2">
                                                                    @foreach ($section->lecture as $lecture)
                                                                        <a href="{{ route('course-lecture', $course->id) }}"
                                                                            class="mb-2 d-flex justify-content-between align-items-center text-inherit">
                                                                            <div class="text-truncate">
                                                                                <span
                                                                                    class="icon-shape bg-light icon-sm rounded-circle me-2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="12" height="12"
                                                                                        fill="currentColor"
                                                                                        class="bi bi-play-fill"
                                                                                        viewBox="0 0 16 16">
                                                                                        <path
                                                                                            d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z">
                                                                                    </svg>
                                                                                </span>
                                                                                <span>{{ $lecture->name }}</span>
                                                                            </div>
                                                                            <div class="text-truncate">
                                                                                <span>1m 7s</span>
                                                                            </div>
                                                                        </a>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <h4>Something Wrong</h4>
                                                @endif


                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Description --}}
                                <div class="tab-pane fade" id="description" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <!-- Description -->
                                    {!! $course->description !!}
                                </div>
                                <!-- Reviews -->
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="mb-3">
                                        <h3 class="mb-4">How students rated this courses</h3>
                                        <div class="row align-items-center">
                                            <div class="col-auto text-center">
                                                <h3 class="display-2 fw-bold">
                                                    @if (floor($course->review_avg_rate) == $course->review_avg_rate)
                                                        {{ number_format($course->review_avg_rate, 0) }}
                                                    @else
                                                        {{ number_format($course->review_avg_rate, 1) }}
                                                    @endif
                                                </h3>
                                                <span class="fs-6">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= floor($course->review_avg_rate))
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg>
                                                        @elseif ($i == ceil($course->review_avg_rate) && $course->review_avg_rate - floor($course->review_avg_rate) > 0)
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-half text-warning" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 .753a.75.75 0 0 1 .59.306l1.902 2.576 4.09.63a.75.75 0 0 1 .416 1.279l-3.045 3.032.719 4.192a.75.75 0 0 1-1.088.791L8 12.347l-3.766 1.98a.75.75 0 0 1-1.088-.79l.719-4.192L.502 5.548a.75.75 0 0 1 .416-1.28l4.09-.63L7.41 1.06a.75.75 0 0 1 .59-.307zm0 10.944l-2.573 1.353.488-2.845a.75.75 0 0 1 .218-.456l2.12-2.013-2.945-.454a.75.75 0 0 1-.563-.41L4.012 3.57 5.26 5.97a.75.75 0 0 1 .207.45l.528 2.88-2.3-1.207a.75.75 0 0 1-.26-.276L2.11 3.214 5.7 3.5a.75.75 0 0 1 .582.41l1.28 2.424 2.852.439a.75.75 0 0 1 .438 1.283l-2.068 2.068.488 2.846a.75.75 0 0 1-.218.456L8 11.697z">
                                                                </path>
                                                            </svg>
                                                        @endif
                                                    @endfor
                                                </span>
                                                <p class="mb-0 fs-6">(Based on {{ $course->review_count }} reviews)</p>
                                            </div>

                                            <!-- Progress Bar -->
                                            <div class="col order-3 order-md-2">
                                                <div class="progress mb-3" style="height: 6px">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: {{ $course->review_count * 10 }}%"
                                                        aria-valuenow="{{ ($starCounts[4]->count / $course->review_count) * 100 }}"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                    {{-- Hiển thị số sao --}}
                                                    {{-- Ví dụ: 5 sao --}}
                                                </div>
                                                <!-- Các thanh tiến độ khác -->
                                                <div class="progress mb-3" style="height: 6px">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: {{ $course->review_count * 10 }}%"
                                                        aria-valuenow="{{ ($starCounts[3]->count / $course->review_count) * 100 }}"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                    {{-- 4 sao --}}
                                                </div>
                                                <div class="progress mb-3" style="height: 6px">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: {{ $course->review_count * 10 }}%"
                                                        aria-valuenow="{{ ($starCounts[2]->count / $course->review_count) * 100 }}"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                    {{-- 3 sao --}}
                                                </div>
                                                <div class="progress mb-3" style="height: 6px">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: {{ $course->review_count * 10 }}%"
                                                        aria-valuenow="{{ ($starCounts[1]->count / $course->review_count) * 100 }}"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                    {{-- 2 sao --}}
                                                </div>
                                                <div class="progress mb-0" style="height: 6px">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: {{ $course->review_count * 10 }}%"
                                                        aria-valuenow="{{ ($starCounts[0]->count / $course->review_count) * 100 }}"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                    {{-- 1 sao --}}
                                                </div>
                                            </div>

                                            <div class="col-md-auto col-6 order-2 order-md-3">
                                                <!-- Rating -->
                                                <div>
                                                    <span class="fs-6">
                                                        @for ($i = 0; $i < 5; $i++)
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" fill="currentColor"
                                                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                            </svg>
                                                        @endfor

                                                    </span>
                                                    <span
                                                        class="ms-1">{{ ($starCounts[4]->count / $course->review_count) * 100 }}%</span>
                                                </div>
                                                <div>
                                                    <span class="fs-6">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                    </span>
                                                    <span
                                                        class="ms-1">{{ ($starCounts[3]->count / $course->review_count) * 100 }}%</span>
                                                </div>
                                                <div>
                                                    <span class="fs-6">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                    </span>
                                                    <span
                                                        class="ms-1">{{ ($starCounts[2]->count / $course->review_count) * 100 }}%</span>
                                                </div>
                                                <div>
                                                    <span class="fs-6">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                    </span>
                                                    <span
                                                        class="ms-1">{{ ($starCounts[1]->count / $course->review_count) * 100 }}%</span>
                                                </div>
                                                <div>
                                                    <span class="fs-6">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                            height="12" fill="currentColor"
                                                            class="bi bi-star-fill text-light" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                        </svg>
                                                    </span>
                                                    <span
                                                        class="ms-1">{{ ($starCounts[0]->count / $course->review_count) * 100 }}%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-5">
                                    <div class="mb-3">
                                        <div class="d-lg-flex align-items-center justify-content-between mb-5">
                                            <!-- Reviews -->
                                            <div class="mb-3 mb-lg-0">
                                                <h3 class="mb-0">Reviews</h3>
                                            </div>
                                            <div>
                                                <form class="form-inline">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="position-absolute ps-3">
                                                            <i class="fe fe-search"></i>
                                                        </span>
                                                        <input type="search" class="form-control ps-6"
                                                            placeholder="Search Review">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Rating -->
                                        @if (!empty($reviews))
                                            @foreach ($reviews as $index => $review)
                                                <div class="d-flex align-items-start border-bottom pb-4 mb-4">
                                                    <img src="{{ asset('assets/images/avatar/' . $reviewUsers[$index]->avatar) }}"
                                                        alt="" class="rounded-circle avatar-lg">
                                                    <div class="ms-3">
                                                        <h4 class="mb-1">
                                                            {{ $reviewUsers[$index]->firstname }}
                                                            {{ $reviewUsers[$index]->lastname }}
                                                            <span class="ms-1 fs-6">{{ $review->created_at->diffForHumans() }}</span>
                                                        </h4>
                                                        <div class="mb-2">
                                                            <span class="fs-6">
                                                                @for ($i = 0; $i < $review->rate; $i++)
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                        height="12" fill="currentColor"
                                                                        class="bi bi-star-fill text-warning"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                        </path>
                                                                    </svg>
                                                                @endfor
                                                            </span>
                                                        </div>
                                                        <p>
                                                            {{ $review->content }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                            {{-- {{ $reviews->links() }} <!-- Hiển thị phân trang --> --}}
                                        @else
                                            <h4>No comments yet</h4>
                                        @endif


                                    </div>
                                </div>

                                <!-- Tab pane -->
                                <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                                    <!-- FAQ -->
                                    <div>
                                        <h3 class="mb-3">Course - Frequently Asked Questions</h3>
                                        <div class="mb-4">
                                            <h4>How this course help me to design layout?</h4>
                                            <p>
                                                My name is Jason Woo and I work as human duct tape at Gatsby, that
                                                means that I do a lot of different things. Everything from dev roll
                                                to
                                                writing content to writing code. And I used to work as an architect
                                                at IBM. I live in Portland, Oregon.
                                            </p>
                                        </div>
                                        <div class="mb-4">
                                            <h4>What is important of this course?</h4>
                                            <p>
                                                We'll dive into GraphQL, the fundamentals of GraphQL. We're only
                                                gonna use the pieces of it that we need to build in Gatsby. We're
                                                not gonna be
                                                doing a deep dive into what GraphQL is or the language specifics.
                                                We're also gonna get into MDX. MDX is a way to write React
                                                components in your
                                                markdown.
                                            </p>
                                        </div>
                                        <div class="mb-4">
                                            <h4>Why Take This Course?</h4>
                                            <p>
                                                We'll dive into GraphQL, the fundamentals of GraphQL. We're only
                                                gonna use the pieces of it that we need to build in Gatsby. We're
                                                not gonna be
                                                doing a deep dive into what GraphQL is or the language specifics.
                                                We're also gonna get into MDX. MDX is a way to write React
                                                components in your
                                                markdown.
                                            </p>
                                        </div>
                                        <div class="mb-4">
                                            <h4>Is able to create application after this course?</h4>
                                            <p>
                                                We'll dive into GraphQL, the fundamentals of GraphQL. We're only
                                                gonna use the pieces of it that we need to build in Gatsby. We're
                                                not gonna be
                                                doing a deep dive into what GraphQL is or the language specifics.
                                                We're also gonna get into MDX. MDX is a way to write React
                                                components in your
                                                markdown.
                                            </p>
                                            <p>
                                                We'll dive into GraphQL, the fundamentals of GraphQL. We're only
                                                gonna use the pieces of it that we need to build in Gatsby. We're
                                                not gonna be
                                                doing a deep dive into what GraphQL is or the language specifics.
                                                We're also gonna get into MDX. MDX is a way to write React
                                                components in your
                                                markdown.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 mt-lg-n8">
                    <!-- Card -->
                    <div class="card mb-3 mb-4">
                        <div class="p-1">
                            <div class="d-flex justify-content-center align-items-center rounded border-white border rounded-3 bg-cover"
                                style="background-image: url(../assets/images/course/course-javascript.jpg); height: 210px">
                                <a class="glightbox icon-shape rounded-circle btn-play icon-xl"
                                    href="https://www.youtube.com/watch?v=Nfzi7034Kbg">
                                    <i class="fe fe-play"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <!-- Price single page -->
                            <div class="mb-3">
                                <span class="text-dark fw-bold h2">$600</span>
                                <del class="fs-4">$750</del>
                            </div>
                            <div class="d-grid">
                                <a href="#" class="btn btn-primary mb-2">Start Free Month</a>
                                <a href="pricing.html" class="btn btn-outline-primary">Get Full Access</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card mb-4">
                        <div>
                            <!-- Card header -->
                            <div class="card-header">
                                <h4 class="mb-0">What’s included</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent">
                                    <i class="fe fe-play-circle align-middle me-2 text-primary"></i>
                                    12 hours video
                                </li>
                                <li class="list-group-item bg-transparent">
                                    <i class="fe fe-award me-2 align-middle text-success"></i>
                                    Certificate
                                </li>
                                <li class="list-group-item bg-transparent">
                                    <i class="fe fe-calendar align-middle me-2 text-info"></i>
                                    12 Article
                                </li>
                                <li class="list-group-item bg-transparent">
                                    <i class="fe fe-video align-middle me-2 text-secondary"></i>
                                    Watch Offline
                                </li>
                                <li class="list-group-item bg-transparent border-bottom-0">
                                    <i class="fe fe-clock align-middle me-2 text-warning"></i>
                                    Lifetime access
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="position-relative">
                                    <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar"
                                        class="rounded-circle avatar-xl">
                                    <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip"
                                        data-placement="top" title="Verifed">
                                        <img src="../assets/images/svg/checked-mark.svg" alt="checked-mark"
                                            height="30" width="30">
                                    </a>
                                </div>
                                <div class="ms-4">
                                    <h4 class="mb-0">Jenny Wilson</h4>
                                    <p class="mb-1 fs-6">Front-end Developer, Designer</p>
                                    <p class="fs-6 mb-1 d-flex align-items-center">
                                        <span class="text-warning">4.5</span>
                                        <span class="mx-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                fill="currentColor" class="bi bi-star-fill text-warning"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </svg>
                                        </span>
                                        Instructor Rating
                                    </p>
                                </div>
                            </div>
                            <div class="border-top row mt-3 border-bottom mb-3 g-0">
                                <div class="col">
                                    <div class="pe-1 ps-2 py-3">
                                        <h5 class="mb-0">11,604</h5>
                                        <span>Students</span>
                                    </div>
                                </div>
                                <div class="col border-start">
                                    <div class="pe-1 ps-3 py-3">
                                        <h5 class="mb-0">32</h5>
                                        <span>Courses</span>
                                    </div>
                                </div>
                                <div class="col border-start">
                                    <div class="pe-1 ps-3 py-3">
                                        <h5 class="mb-0">12,230</h5>
                                        <span>Reviews</span>
                                    </div>
                                </div>
                            </div>
                            <p>I am an Innovation designer focussing on UX/UI based in Berlin. As a creative
                                resident at Figma explored the city of the future and how new technologies.</p>
                            <a href="instructor-profile.html" class="btn btn-outline-secondary btn-sm">View
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <div class="pt-8 pb-3">
                <div class="row d-md-flex align-items-center mb-4">
                    <div class="col-12">
                        <h2 class="mb-0">Related Courses</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Card -->
                        <div class="card mb-4 card-hover">
                            <a href="course-single.html"><img src="../assets/images/course/course-react.jpg"
                                    alt="course" class="card-img-top"></a>
                            <!-- Card body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2">
                                    <a href="course-single.html" class="text-inherit">How to easily create a
                                        website
                                        with React</a>
                                </h4>
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-clock align-baseline"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                </path>
                                                <path
                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>3h 56m</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6" rx="1"
                                                fill="#754FFE"></rect>
                                            <rect x="7" y="5" width="2" height="9" rx="1"
                                                fill="#DBD8E9"></rect>
                                            <rect x="11" y="2" width="2" height="12" rx="1"
                                                fill="#DBD8E9"></rect>
                                        </svg>
                                        Beginner
                                    </li>
                                </ul>
                                <div class="mt-3 d-flex align-baseline lh-1">
                                    <span class="fs-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                    </span>
                                    <span class="text-warning mx-1">4.5</span>
                                    <span class="fs-6">(7.700)</span>
                                </div>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <div class="row align-items-center g-0">
                                    <div class="col-auto">
                                        <img src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs"
                                            alt="avatar">
                                    </div>
                                    <div class="col ms-2">
                                        <span>Morris Mccoy</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="text-reset bookmark">
                                            <i class="fe fe-bookmark fs-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Card -->
                        <div class="card mb-4 card-hover">
                            <a href="course-single.html"><img src="../assets/images/course/course-graphql.jpg"
                                    alt="course" class="card-img-top"></a>
                            <!-- Card body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2">
                                    <a href="course-single.html" class="text-inherit">GraphQL: introduction to
                                        graphQL for beginners</a>
                                </h4>
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-clock align-baseline"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                </path>
                                                <path
                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>2h 46m</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6" rx="1"
                                                fill="#754FFE"></rect>
                                            <rect x="7" y="5" width="2" height="9" rx="1"
                                                fill="#754FFE"></rect>
                                            <rect x="11" y="2" width="2" height="12" rx="1"
                                                fill="#754FFE"></rect>
                                        </svg>
                                        Advance
                                    </li>
                                </ul>
                                <div class="mt-3 d-flex align-baseline lh-1">
                                    <span class="fs-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
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
                                        <img src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-xs"
                                            alt="avatar">
                                    </div>
                                    <div class="col ms-2">
                                        <span>Ted Hawkins</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="text-reset bookmark">
                                            <i class="fe fe-bookmark fs-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Card -->
                        <div class="card mb-4 card-hover">
                            <a href="course-single.html"><img src="../assets/images/course/course-angular.jpg"
                                    alt="course" class="card-img-top"></a>
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2">
                                    <a href="course-single.html" class="text-inherit">Angular - the complete
                                        guide
                                        for beginner</a>
                                </h4>
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-clock align-baseline"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                </path>
                                                <path
                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>3h 56m</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6" rx="1"
                                                fill="#754FFE"></rect>
                                            <rect x="7" y="5" width="2" height="9" rx="1"
                                                fill="#DBD8E9"></rect>
                                            <rect x="11" y="2" width="2" height="12" rx="1"
                                                fill="#DBD8E9"></rect>
                                        </svg>
                                        Beginner
                                    </li>
                                </ul>
                                <div class="mt-3 d-flex align-baseline lh-1">
                                    <span class="fs-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                    </span>
                                    <span class="text-warning mx-1">4.5</span>
                                    <span class="fs-6">(8,890)</span>
                                </div>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <div class="row align-items-center g-0">
                                    <div class="col-auto">
                                        <img src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs"
                                            alt="avatar">
                                    </div>
                                    <div class="col ms-2">
                                        <span>Juanita Bell</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="text-reset bookmark">
                                            <i class="fe fe-bookmark fs-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card mb-4 card-hover">
                            <a href="course-single.html"><img src="../assets/images/course/course-python.jpg"
                                    alt="course" class="card-img-top"></a>
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2">
                                    <a href="course-single.html" class="text-inherit">The Python Course: build
                                        web
                                        application</a>
                                </h4>
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-clock align-baseline"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                </path>
                                                <path
                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>2h 30m</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6" rx="1"
                                                fill="#754FFE"></rect>
                                            <rect x="7" y="5" width="2" height="9" rx="1"
                                                fill="#754FFE"></rect>
                                            <rect x="11" y="2" width="2" height="12" rx="1"
                                                fill="#DBD8E9"></rect>
                                        </svg>
                                        Intermediate
                                    </li>
                                </ul>
                                <div class="mt-3 d-flex align-baseline lh-1">
                                    <span class="fs-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
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
                                        <img src="../assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs"
                                            alt="avatar">
                                    </div>
                                    <div class="col ms-2">
                                        <span>Claire Robertson</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="text-reset bookmark">
                                            <i class="fe fe-bookmark fs-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
