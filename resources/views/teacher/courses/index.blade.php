@extends('layouts.student')

@section('content')

    <div class="container-fluid page__heading-container">
        <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
            <h1 class="m-lg-0">Instructor Courses</h1>
            <a href="instructor-course-edit.html" class="btn btn-success ml-lg-3">New Course <i class="material-icons">add</i></a>
        </div>
    </div>

    <div class="container-fluid page__container">


<form action="#" class="mb-2">
    <div class="d-flex">
        <div class="search-form mr-3 search-form--light">
            <input type="text" class="form-control" placeholder="Filter by name" id="searchSample02">
            <button class="btn" type="button"><i class="material-icons">search</i></button>
        </div>

        <div class="form-inline ml-auto">
            <div class="form-group mr-3">
                <label for="custom-select" class="form-label mr-1">Sort</label>
                <select id="custom-select" class="form-control custom-select" style="width: 200px;">
                    <option selected>Name</option>
                    <option value="2">Created Date</option>
                    <option value="1">Earnings</option>
                </select>
            </div>
            <div class="form-group">
                <label for="published01" class="form-label mr-1">Status</label>
                <select id="published01" class="form-control custom-select" style="width: 200px;">
                    <option selected>Published</option>
                    <option value="1">Draft</option>
                    <option value="3">All</option>
                </select>
            </div>
        </div>
    </div>
</form>


    @if (count ($courses)> 0)
        @foreach ($courses as $course)

        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex flex-column flex-sm-row">
                            <a href="#" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
                                <img src="assets/images/logos/vuejs.svg" alt="Card image cap" class="avatar-course-img">
                            </a>
                            <div class="flex" style="min-width: 200px;">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="card-title mb-1"><a href="instructor-course-edit.html">{{ $course->name }}</a></h4>
                                        <p class="text-muted"> {{ $course->description }} </p>
                                    </div>
                                    <div class="dropdown ml-auto">
                                        <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="instructor-course-edit.html">Edit Course</a>
                                            <a class="dropdown-item" href="#">Statistics</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#">Archive</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div class="d-flex flex flex-column mr-3">
                                        <div class="d-flex align-items-center py-2 border-bottom">
                                            <span class="mr-2">&dollar;1,230/mo</span>
                                            <small class="text-muted ml-auto">34 SALES</small>
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span class="badge badge-vuejs mr-2">VUEJS</span>
                                            <span class="badge badge-soft-secondary">INTERMEDIATE</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        @endforeach
    @else
        <p>No Courses Found<p>
    @endif


</div>

@endsection