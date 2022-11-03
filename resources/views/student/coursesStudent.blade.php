@extends('student.layout')
@section('titel','Courses Student')
@section('content')
<div class="container body_student">
    <div class="rounded row_content">
        <div class="rounded-top text-white row_titel">
            <h4>My Grades</h4>            
        </div>
        <div class="row m-3">
            <div class="col-12 col-xxl-4 col-md-6 col-sm-12 py-3">
                <div class="card" style="width: 18rem; max-height: 500px">
                    <img src="/assets/img/student/mathematics.svg" class="card-img-top"  height="250px" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Mathematics</h5>
                      <p class="card-text">Get Math courses from this card and download it in your divce.</p>
                      <br>
                      <a href="{{route('home.get_courses')}}" class="btn btn-primary">Get</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xxl-4 col-md-6 col-sm-12 py-3">
                <div class="card" style="width: 18rem;  max-height: 500px">
                    <img src="/assets/img/student/svt.svg" class="card-img-top"  height="250px" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">SVT</h5>
                      <p class="card-text">Get Svt courses from this card and download it in your divce.</p>
                      <br>
                      <a href="{{route('home.get_courses')}}" class="btn btn-primary">Get</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xxl-4 col-md-6 col-sm-12 py-3">
                <div class="card" style="width: 18rem;  max-height: 500px">
                    <img src="/assets/img/student/islamic.svg" class="card-img-top" height="250px" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Islamic Education</h5>
                      <p class="card-text">Get Islamic Education courses from this card and download it in your divce.</p>
                      <a href="{{route('home.get_courses')}}" class="btn btn-primary">Get</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xxl-4 col-md-6 col-sm-12 py-3">
                <div class="card" style="width: 18rem;  max-height: 500px">
                    <img src="/assets/img/student/physices.svg" class="card-img-top"  height="250px" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Chemical Physics</h5>
                      <p class="card-text">Get Chemical Physics courses from this card and download it in your divce.</p>
                      <a href="{{route('home.get_courses')}}" class="btn btn-primary">Get</a>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</div>
    
@endsection