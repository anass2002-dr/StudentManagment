@extends('teacher.layout')
@section('titel','Teacher absence')
@section('content')
<div class="container body_student">
    <div class="rounded row_content">
        <div class="rounded-top text-white row_titel d-flex position-relative">
            <h4>My Absences</h4>
            <div class="position-absolute end-0 m-2"><a href="{{route('home.manageAbsencesStudent')}}">Manage Absences</a></div>            
        </div>
        <div class="row m-3">
            <div class="col-lg-4">
                <p>Season</p>
                <form action="">
                    <select class="form-select" name="season" id="season">
                        <option value="1">2019/2020</option>
                        <option value="1">2020/2021</option>
                        <option value="1">2021/2022</option>
                        <option value="1">2022/2023</option>
                    </select>
                </form>
            </div>
            <div class="col-lg-4">
                <p>Month</p>

                <form action="">
                    <select class="form-select" name="mounth" id="mounth">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March	</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </form>
            </div>
            <div class="col-lg-4">
                <form action="">
                    <input type="submit" value="Search" class="btn btn-primary btn_search_grades">
                </form>
            </div>
        </div>
        
        <div class="table-responsive m-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="col">Season</th>
                        <th data-sortable="true" data-filed="name" class="col">Month</th>
                        <th class="col">Day</th>
                        <th class="col">Hour</th>
                        <th class="col">Observation</th>
                        <th class="col">Justified/Unjustified</th>
                        <th class="col">Number of hour</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col">2021/2022</td>
                        <td class="col">March</td>
                        <td class="col">Tursday</td>
                        <td class="col">08:00-10:00</td>
                        <td class="col">Nothing</td>
                        <td class="col text-danger">Unjustified</td>
                        <td class="col">2</td>
                    </tr>
                    <tr>
                        <td class="col">2021/2022</td>
                        <td class="col">February</td>
                        <td class="col">Monday</td>
                        <td class="col">14:00-18:00</td>
                        <td class="col">Nothing</td>
                        <td class="col text-success">justified</td>
                        <td class="col">4</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="6">Total of hour</th>
                        <th class="col">6</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
    
@endsection