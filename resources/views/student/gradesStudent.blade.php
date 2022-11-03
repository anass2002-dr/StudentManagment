@extends('student.layout')
@section('titel','Grades Student')
@section('content')
<div class="container body_student">
    <div class="rounded row_content">
        <div class="rounded-top text-white row_titel">
            <h4>My Grades</h4>            
        </div>
        <div class="row m-3">
            <div class="col-lg-3">
                <p>Subject</p>

                <form action="">
                    <select class="form-select" name="subject" id="subject">
                        <option value="1">math</option>
                        <option value="1">chemical Physics</option>
                        <option value="1">islamic education</option>
                        <option value="1">svt</option>
                    </select>
                </form>
                
            </div>
            <div class="col-lg-3">
                <p>Year</p>
                <form action="">
                    <select class="form-select" name="Year" id="Year">
                        <option value="1">2019</option>
                        <option value="1">2020</option>
                        <option value="1">2021</option>
                        <option value="1">2022</option>
                    </select>
                </form>
                
            </div>
            <div class="col-lg-3">
                <p>Season</p>
                <form action="">
                    <div class="d-flex">
                        <div class="form-check m-2">
                            <input class="form-check-input" type="radio" name="season" id="season1" checked>
                            <label class="form-check-label" for="season1">
                            Season 1
                            </label>
                        </div>
                        <div class="form-check m-2">
                            <input class="form-check-input" type="radio" name="season" id="season2">
                            <label class="form-check-label" for="season2">
                            Season 2
                            </label>
                        </div>
                    </div>
                </form>
                
                
            </div>
            <div class="col-lg-3">
                <form action="">
                    <input type="submit" value="Search" class="btn btn-primary btn_search_grades">
                </form>
            </div>
        </div>
        
        <div class="table-responsive m-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col">Subject</th>
                        <th class="col">Year</th>
                        <th class="col">Season</th>
                        <th class="col">Teacher</th>
                        <th class="col">control</th>
                        <th class="col">Degres</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="col">Math</th>
                        <td class="col">2022</td>
                        <td class="col">2</td>
                        <td class="col">ahmed zelzoli</td>
                        <td class="col">1</td>
                        <td class="col">18.95</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection