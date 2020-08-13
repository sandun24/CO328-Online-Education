@extends('layouts.student')

@section('content')
    



<div class="mdk-drawer-layout__content page">





    <div class="container-fluid page__heading-container">
        <div class="page__heading d-flex align-items-center justify-content-between">
            <h1 class="m-0">Courses</h1>
            <a href="" class="btn btn-success ml-3">Go to Courses <i class="material-icons">arrow_forward</i></a>
        </div>
    </div>





    <div class="container-fluid page__container">
        <form action="#" class="">
            <div class="d-lg-flex">
                <div class="search-form mb-3 mr-3-lg search-form--light">
                    <input type="text" class="form-control" placeholder="Search courses" id="searchSample02">
                    <button class="btn" type="button"><i class="material-icons">search</i></button>
                </div>

                <div class="form-inline  mb-3 ml-auto">
                    <div class="form-group mr-3">
                        <label for="custom-select" class="form-label mr-1">Category</label>
                        <select id="custom-select" class="form-control custom-select" style="width: 200px;">
                            <option selected>All categories</option>
                            <option value="1">Vue.js</option>
                            <option value="2">Node.js</option>
                            <option value="3">GitHub</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="published01" class="form-label mr-1">Status</label>
                        <select id="published01" class="form-control custom-select" style="width: 200px;">
                            <option selected>All</option>
                            <option value="1">In Progress</option>
                            <option value="3">New Releases</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>

        <div class="row">

            @if(count($courses) > 1)
                @foreach($courses as $course)
                    <div class="col-md-3">
                        <div class="card card__course">
                            <div class="card-header card-header-large card-header-dark bg-dark d-flex justify-content-center">
                            <a class="card-header__title  justify-content-center align-self-center d-flex flex-column" href="/student_course/{{ $course->id}}">
                                    <span><img src="assets/images/logos/react.svg" class="mb-1" style="width:34px;" alt="logo"></span>
                                    <span class="course__title">{{ $course->name }}</span>
                                    <span class="course__subtitle">teacher name</span>
                                </a>
                            </div>
                            <div class="p-3">
                                <div class="mb-2">

                                </div>
                                <div class="d-flex align-items-center">
                                    <strong class="h4 m-0">$49</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p> No courses Found</p>
            @endif

        </div>
        <hr>

    </div>


</div>

@endsection