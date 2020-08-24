@extends('layouts.student')


@section('content')
<div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex align-items-center justify-content-between">
                            <h1 class="m-0">Create Course</h1>
                        </div>
                    </div>





                    <div class="container-fluid page__container">
                        <div class="row">
                            <div class="col-md-8">
                            <form action="{{action('TeacherCourseController@store')}}" method="post" >
                                {{ csrf_field()}}

                                <div class="card">
                                    <div class="card-form__body card-body">
                    
                                        <div class="form-group">
                                            <label for="course_code">Course Code</label>
                                            <input name="course_code" type="text" class="form-control" placeholder="Title goes here" value="Course title is editable here">
                                        </div>

                                        <div class="form-group">
                                            <label for="fname">Title</label>
                                            <input name="name" type="text" class="form-control" placeholder="Title goes here" value="Course title is editable here">
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" rows="4" class="form-control" placeholder="Please enter a description"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="course_id">course_id</label>
                                            <textarea name="course_id" rows="4" class="form-control" placeholder="Please enter a description"></textarea>
                                        </div>


                                    </div>
                                    <div class="card-body text-center">

                                        <button type="submit" class="btn btn-success">Save Changes</button>
                                    </div>

                                </div>
                            </form>
                            </div>
                            <div class="col-md-4">

                                <!-- Lessons -->
                                <div class="card">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">
                                        <div class="flex">
                                            <h4 class="card-header__title">Lessons</h4>
                                            <div class="card-subtitle text-muted">Manage Lessons</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="student-courses.html" class="btn btn-primary">New <i class="material-icons">add</i></a>
                                        </div>
                                    </div>


                                    <ul class="list-group list-group-fit">
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <i class="material-icons text-light-gray">list</i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Overview</a>
                                                </div>
                                                <div class="media-right">
                                                    <small class="text-muted">3:33</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <i class="material-icons text-light-gray">list</i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Asset Pipeline</a>
                                                </div>
                                                <div class="media-right">
                                                    <small>18:43</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <i class="material-icons text-light-gray">list</i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Getting Started</a>
                                                    <small class="badge badge-soft-success ">FREE</small>
                                                </div>
                                                <div class="media-right">
                                                    <small class="text-muted">5:21</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <i class="material-icons text-light-gray">list</i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Advanced Workflows</a>
                                                    <small class="badge badge-soft-warning ">PRO</small>
                                                </div>
                                                <div class="media-right">
                                                    <small class="text-muted">5:24</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <i class="material-icons text-light-gray">list</i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Tips & Tricks</a>
                                                    <small class="badge badge-soft-warning ">PRO</small>
                                                </div>
                                                <div class="media-right">
                                                    <small class="text-muted">11:38</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <i class="material-icons text-light-gray">list</i>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Final Quiz</a>
                                                </div>
                                                <div class="media-right">
                                                    <small class="badge badge-soft-primary ">QUIZ</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

@endsection