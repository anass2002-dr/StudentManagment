@extends('managment.layout')
@section('titel','Manages Grades managment')
@section('content')
<div class="container body_student">
    <div class="rounded row_content">
        <div class="rounded-top text-white row_titel">
            <h4>Manage Grades of Students</h4>            
        </div>
        <div class="row m-3 border p-2 rounded bg-light py-3">
            <div class="col-lg-3">
                <p>Season number</p>

                <form action="">
                    <select class="form-select" name="Season" id="Season">
                        <option value="1">First Season</option>
                        <option value="2">Second Season</option>
                    </select>
                </form>
                
                
            </div>
            <div class="col-lg-3">
                <p>Class Room</p>

                <form action="">
                    <select class="form-select" name="ClassRoom" id="ClassRoom">
                        <option value="1">class1</option>
                        <option value="2">class2</option>
                    </select>
                </form>
                
                
            </div>
            <div class="col-lg-3">
                <p>Control number</p>

                <form action="">
                    <select class="form-select" name="subject" id="subject">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </form>
                
            </div>
           
           
            <div class="col-lg-3">
                <form action="">
                    <input type="submit" value="Refresh" class="btn btn-primary btn_search_grades">
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
                        <th class="col">Student</th>
                        <th class="col">control</th>
                        <th class="col">Degres</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="tr_grades">
                        <th class="col">Math</th>
                        <td class="col">2022</td>
                        <td class="col">2</td>
                        <td class="col">yassin kobli</td>
                        <td class="col">1</td>

                        <form action="">
                            @csrf
                            <td class="col">
                                <input type="text" name="gardes" id="gardes" value="17.25" class="form-control bg-transparent border-0" disabled>
                            </td>
                            <td class="col">
                                <input type="button" value="Edit" onclick="edit_grades(0)" class="edit_managment_calendar btn btn-warning">
                            </td>
                        </form>
                    </tr>
                    <tr class="tr_grades">
                        <th class="col">Math</th>
                        <td class="col">2022</td>
                        <td class="col">2</td>
                        <td class="col">bilal khalouki</td>
                        <td class="col">1</td>
                        <form action="">
                            @csrf
                            <td class="col">
                                <input type="text" name="gardes" id="gardes" value="17.25" class="form-control bg-transparent border-0" disabled>
                            </td>
                            <td class="col">
                                <input type="button" value="Edit" onclick="edit_grades(1)" class="edit_managment_calendar btn btn-warning">
                            </td>
                        </form>

                    </tr>
                    <tr class="tr_grades">
                        <th class="col">Math</th>
                        <td class="col">2022</td>
                        <td class="col">2</td>
                        <td class="col">zaid bakkali</td>
                        <td class="col">1</td>

                        <form action="">
                            @csrf
                            <td class="col">
                                <input type="text" name="gardes" id="gardes" value="17.25" class="form-control bg-transparent border-0" disabled>
                            </td>
                            <td class="col">
                                <input type="button" value="Edit" onclick="edit_grades(2)" class="edit_managment_calendar btn btn-warning">
                            </td>
                        </form>
                    </tr>
                    
                </tbody>
             
            </table>
        </div>
        <div class="row">
            <div class="col-sm-12 m-3 w-75">
                <form action="">
                    <input type="submit" value="Save" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection