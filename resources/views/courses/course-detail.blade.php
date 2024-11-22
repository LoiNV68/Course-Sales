@extends('layouts.user')

@section('title')
    {{ $title }}
@endsection

@php
    $footer = true;
@endphp

@section('content')
    <section class="mt-6 course-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content content" id="course-tabContent">
                        <div class="tab-pane fade show active" id="course-intro" role="tabpanel"
                            aria-labelledby="course-intro-tab">
                            <div class="embed-responsive position-relative w-100 d-block overflow-hidden p-0"
                                style="height: 600px">
                                <video id="lecture-video"
                                    class="position-absolute top-0 end-0 start-0 end-0 bottom-0 h-100 w-100" width="560"
                                    height="315" controls
                                    poster="{{ asset('storage/upload/images/course/' . $course->image) }}">
                                    @if ($lectureNow !== $firstLecture)
                                        <source src="{{ asset('storage/upload/videos/' . $lectureNow->video) }}"
                                            type="video/mp4">
                                    @else
                                        <source src="{{ asset('storage/upload/videos/' . $firstLecture->video) }}"
                                            type="video/mp4">
                                    @endif
                                    Trình duyệt của bạn không hỗ trợ video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="card course-sidebar" id="courseAccordion">
        <ul class="list-group list-group-flush" style="height: 850px" data-simplebar>
            <li class="list-group-item">
                <h4 class="mb-0">Table of Content</h4>
            </li>
            @if ($sections)
                @foreach ($sections as $section)
                    <li class="list-group-item">
                        <!-- Toggle -->
                        <a class="d-flex align-items-center h4 mb-0" data-bs-toggle="collapse" href="#courseTwo" role="button" aria-expanded="false" aria-controls="courseTwo">
                            <div class="me-auto">Introduction to JavaScript</div>
                            <!-- Chevron -->
                            <span class="chevron-arrow ms-4">
                                <i class="fe fe-chevron-down fs-4"></i>
                            </span>
                        </a>
                        <!-- Row -->
                        <!-- Collapse -->
                        <div class="collapse show" id="courseTwo" data-bs-parent="#courseAccordion">
                            <div class="py-4 nav" id="course-tabOne" role="tablist" aria-orientation="vertical" style="display: inherit">
                                <a
                                    class="mb-2 d-flex justify-content-between align-items-center"
                                    id="course-intro-tab"
                                    data-bs-toggle="pill"
                                    href="#course-intro"
                                    role="tab"
                                    aria-controls="course-intro"
                                    aria-selected="true">
                                    <div class="text-truncate">
                                        <span class="icon-shape bg-light text-primary icon-sm rounded-circle me-2"><i class="fe fe-play fs-6"></i></span>
                                        <span>Introduction</span>
                                    </div>
                                    <div class="text-truncate">
                                        <span>1m 7s</span>
                                    </div>
                                </a>
                                <a
                                    class="mb-2 d-flex justify-content-between align-items-center text-inherit"
                                    id="course-development-tab"
                                    data-bs-toggle="pill"
                                    href="#course-development"
                                    role="tab"
                                    aria-controls="course-development"
                                    aria-selected="false">
                                    <div class="text-truncate">
                                        <span class="icon-shape bg-light text-primary icon-sm rounded-circle me-2"><i class="fe fe-play fs-6"></i></span>
                                        <span>Installing Development Software</span>
                                    </div>
                                    <div class="text-truncate">
                                        <span>3m 11s</span>
                                    </div>
                                </a>
                                <a
                                    class="mb-2 d-flex justify-content-between align-items-center text-inherit"
                                    id="course-project-tab"
                                    data-bs-toggle="pill"
                                    href="#course-project"
                                    role="tab"
                                    aria-controls="course-project"
                                    aria-selected="false">
                                    <div class="text-truncate">
                                        <span class="icon-shape bg-light text-primary icon-sm rounded-circle me-2"><i class="fe fe-play fs-6"></i></span>
                                        <span>Hello World Project from GitHub</span>
                                    </div>
                                    <div class="text-truncate">
                                        <span>2m 33s</span>
                                    </div>
                                </a>
                                <a
                                    class="d-flex justify-content-between align-items-center text-inherit"
                                    id="course-website-tab"
                                    data-bs-toggle="pill"
                                    href="#course-website"
                                    role="tab"
                                    aria-controls="course-website"
                                    aria-selected="false">
                                    <div class="text-truncate">
                                        <span class="icon-shape bg-light text-primary icon-sm rounded-circle me-2"><i class="fe fe-play fs-6"></i></span>
                                        <span>Our Sample Website</span>
                                    </div>
                                    <div class="text-truncate">
                                        <span>2m 15s</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <!-- List group item -->
                    <li class="list-group-item">
                        <!-- Toggle -->
                        <a class="d-flex align-items-center h4 mb-0" data-bs-toggle="collapse" href="#courseThree" role="button" aria-expanded="false" aria-controls="courseThree">
                            <div class="me-auto">
                                <!-- Title -->
                                JavaScript Beginning
                            </div>
                            <!-- Chevron -->
                            <span class="chevron-arrow ms-4">
                                <i class="fe fe-chevron-down fs-4"></i>
                            </span>
                        </a>
                        <!-- Row -->
                        <!-- Collapse -->
                        <div class="collapse" id="courseThree" data-bs-parent="#courseAccordion">
                            <div class="py-4 nav" id="course-tabTwo" role="tablist" aria-orientation="vertical" style="display: inherit">
                                <a
                                    class="mb-2 d-flex justify-content-between align-items-center text-inherit disableClick"
                                    id="course-intro-tab2"
                                    data-bs-toggle="pill"
                                    href="#"
                                    role="tab"
                                    aria-controls="course-intro"
                                    aria-selected="true">
                                    <div class="text-truncate">
                                        <span class="icon-shape bg-light text-secondary icon-sm rounded-circle me-2"><i class="fe fe-lock fs-6"></i></span>
                                        <span>Introduction</span>
                                    </div>
                                    <div class="text-truncate">
                                        <span>1m 41s</span>
                                    </div>
                                </a>
                                <a
                                    class="mb-2 d-flex justify-content-between align-items-center text-inherit disableClick"
                                    id="course-development-tab2"
                                    data-bs-toggle="pill"
                                    href="#"
                                    role="tab"
                                    aria-controls="course-development"
                                    aria-selected="false">
                                    <div class="text-truncate">
                                        <span class="icon-shape bg-light text-secondary icon-sm rounded-circle me-2"><i class="fe fe-lock fs-6"></i></span>
                                        <span>Adding JavaScript Code to a Web Page</span>
                                    </div>
                                    <div class="text-truncate">
                                        <span>3m 39s</span>
                                    </div>
                                </a>
                                <a
                                    class="mb-2 d-flex justify-content-between align-items-center text-inherit disableClick"
                                    id="course-project-tab2"
                                    data-bs-toggle="pill"
                                    href="#"
                                    role="tab"
                                    aria-controls="course-project"
                                    aria-selected="false">
                                    <div class="text-truncate">
                                        <span class="icon-shape bg-light text-secondary icon-sm rounded-circle me-2"><i class="fe fe-lock fs-6"></i></span>
                                        <span>Working with JavaScript Files</span>
                                    </div>
                                    <div class="text-truncate">
                                        <span>6m 18s</span>
                                    </div>
                                </a>
                                <a
                                    class="mb-2 d-flex justify-content-between align-items-center text-inherit disableClick"
                                    id="course-website-tab2"
                                    data-bs-toggle="pill"
                                    href="#"
                                    role="tab"
                                    aria-controls="course-website"
                                    aria-selected="false">
                                    <div class="text-truncate">
                                        <span class="icon-shape bg-light text-secondary icon-sm rounded-circle me-2"><i class="fe fe-lock fs-6"></i></span>
                                        <span>Formatting Code</span>
                                    </div>
                                    <div class="text-truncate">
                                        <span>2m 18s</span>
                                    </div>
                                </a>
                                <a
                                    class="mb-2 d-flex justify-content-between align-items-center text-inherit disableClick"
                                    id="course-project-tab3"
                                    data-bs-toggle="pill"
                                    href="#"
                                    role="tab"
                                    aria-controls="course-project"
                                    aria-selected="false">
                                    <div class="text-truncate">
                                        <span class="icon-shape bg-light text-secondary icon-sm rounded-circle me-2"><i class="fe fe-lock fs-6"></i></span>
                                        <span>Detecting and Fixing Errors</span>
                                    </div>
                                    <div class="text-truncate">
                                        <span>3m 14s</span>
                                    </div>
                                </a>
                                <a
                                    class="mb-2 d-flex justify-content-between align-items-center text-inherit disableClick"
                                    id="course-website-tab3"
                                    data-bs-toggle="pill"
                                    href="#"
                                    role="tab"
                                    aria-controls="course-website"
                                    aria-selected="false">
                                    <div class="text-truncate">
                                        <span class="icon-shape bg-light text-secondary icon-sm rounded-circle me-2"><i class="fe fe-lock fs-6"></i></span>
                                        <span>Case Sensitivity</span>
                                    </div>
                                    <div class="text-truncate">
                                        <span>1m 48s</span>
                                    </div>
                                </a>
                                <a
                                    class="mb-2 d-flex justify-content-between align-items-center text-inherit disableClick"
                                    id="course-development-tab3"
                                    data-bs-toggle="pill"
                                    href="#"
                                    role="tab"
                                    aria-controls="course-development"
                                    aria-selected="false">
                                    <div class="text-truncate">
                                        <span class="icon-shape bg-light text-secondary icon-sm rounded-circle me-2"><i class="fe fe-lock fs-6"></i></span>
                                        <span>Commenting Code</span>
                                    </div>
                                    <div class="text-truncate">
                                        <span>2m 24s</span>
                                    </div>
                                </a>
                                <a
                                    class="mb-0 d-flex justify-content-between align-items-center text-inherit disableClick"
                                    id="course-intro-tab3"
                                    data-bs-toggle="pill"
                                    href="#"
                                    role="tab"
                                    aria-controls="course-intro"
                                    aria-selected="false">
                                    <div class="text-truncate">
                                        <span class="icon-shape bg-light text-secondary icon-sm rounded-circle me-2"><i class="fe fe-lock fs-6"></i></span>
                                        <span>Summary</span>
                                    </div>
                                    <div class="text-truncate">
                                        <span>2m 14s</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                @endforeach
            @endif

        </ul>
    </section>


@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const videoElement = document.getElementById('lecture-video');
        let lectureId = "{{ $lectureIdNow }}";
        const studentId = "{{ $studentId }}";

        document.querySelectorAll('[data-video-src]').forEach(link => {
            link.addEventListener('click', function(event) {
                if (!this.classList.contains('text-inherit')) {
                    event.preventDefault();
                    const newVideoSrc = this.getAttribute('data-video-src');
                    lectureId = this.getAttribute('data-lecture-id');
                    const sourceElement = videoElement.querySelector('source');
                    sourceElement.setAttribute('src', newVideoSrc);
                    videoElement.load();
                }
            });

            link.addEventListener('mouseenter', function() {
                if (!this.classList.contains('text-inherit')) {
                    this.style.cursor = 'pointer';
                }
            });

            link.addEventListener('mouseleave', function() {
                this.style.cursor = 'auto';
            });
        });

        videoElement.addEventListener('ended', function() {
            document.querySelectorAll('[data-video-src]').forEach(link => {
                if (!link.classList.contains('text-inherit')) {
                    lectureId = link.getAttribute(
                        'data-lecture-id'); // Lấy lectureId từ data-lecture-id của link
                }
            });

            const data = {
                student_id: studentId,
                lecture_id: lectureId,

            };

            $.ajax({
                type: 'POST',
                url: '/update-progress',
                data: data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log('Progress updated successfully:', response);
                    // localStorage.setItem('viewed_' + lectureId, 'true');
                    unlockNextLecture(lectureId);
                },
                error: function(error) {
                    console.error('Error updating progress:', error);
                }
            });
        });

        function unlockNextLecture(currentLectureId) {
            const allLinks = document.querySelectorAll('[data-video-src]');
            let foundCurrent = false;

            allLinks.forEach(link => {
                if (foundCurrent && !link.classList.contains('text-inherit')) {
                    link.onclick = function(event) {
                        event.preventDefault();
                        const newVideoSrc = this.getAttribute('data-video-src');
                        lectureId = this.getAttribute('data-lecture-id');
                        const sourceElement = videoElement.querySelector('source');
                        sourceElement.setAttribute('src', newVideoSrc);
                        videoElement.load();
                    };
                    link.style.cursor = 'pointer';
                    foundCurrent = true;
                    return;
                }

                if (link.getAttribute('data-lecture-id') == currentLectureId) {
                    foundCurrent = true;
                }
            });

            // Find the next lecture id to unlock
            let nextLectureId = Number(currentLectureId) + 1;

            // Check if there is a link with the next lecture id
            let nextLink = document.querySelector(`[data-lecture-id="${nextLectureId}"]`);
            if (nextLink) {

                const newVideoSrc = nextLink.getAttribute('data-video-src');
                lectureId = nextLink.getAttribute('data-lecture-id');
                const sourceElement = videoElement.querySelector('source');
                sourceElement.setAttribute('src', newVideoSrc);
                videoElement.load();

                nextLink.style.cursor = 'pointer';

                // Update icon and text color for the unlocked lecture
                nextLink.classList.remove('text-inherit');
                nextLink.querySelector('.icon-shape i').classList.remove('text-secondary');
                nextLink.querySelector('.icon-shape i').classList.add('text-primary');
                nextLink.querySelector('.icon-shape i').classList.remove('fe-lock');
                nextLink.querySelector('.icon-shape i').classList.add('fe-play');
            }
        }
    });
</script>
