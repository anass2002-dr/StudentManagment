@extends('managment.layout')
@section('titel','Calendar Managment')
@section('content')
<div class="container body_student">
    <div class="rounded row_content">
        <div class="rounded-top text-white row_titel">
            <h4>My Clandare</h4>           
        </div>
        <div class="row m-3  border p-2 rounded bg-light py-3">
            <div class="col-md-4">
                <p>level of study</p>
                <form action="">
                    <select name="level" id="level" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </form>
            </div>
            <div class="col-md-4">
                <p>ClassRoom</p>
                <form action="">
                    <select name="ClassRoom" id="ClassRoom" class="form-control">
                        <option value="1">group1</option>
                        <option value="2">group2</option>
                        <option value="3">group3</option>
                        <option value="4">group4</option>
                    </select>
                </form>
            </div>
            
            <div class="col-md-4">
                 <form action="">
                    <input type="submit" class="btn btn-primary btn_search_grades" name="searche" id="searche" value="searche">
                 </form>
             </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col"></th>
                        <th class="col">Monday</th>
                        <th class="col">Tuesday</th>
                        <th class="col">Wednesday</th>
                        <th class="col">Thursday</th>
                        <th class="col">Friday</th>
                        <th class="col">Saturday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="par">
                        <th class="col">08:00-09:00</th>
                        <form action="" class="frm">
                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                           <td class="col"><input type="button" value="Edit" name="" onclick="add_calendar(0)" id="" class="edit_managment_calendar btn btn-warning"></td>
                        </form>

                    </tr>
                    <tr class="par">
                        <th class="col">09:00-10:00</th>
                        <form action="" class="frm">
                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>
                            <td class="col"><input type="button" value="Edit" name="" onclick="add_calendar(1)" id="" class="edit_managment_calendar btn btn-warning"></td>
                        </form>
                        
                    </tr>
                    <tr class="par">
                        <th class="col">10:00-11:00</th>
                       <form action="" class="frm">
                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>
                            <td class="col"><input type="button" value="Edit" name="" onclick="add_calendar(2)" id="" class="edit_managment_calendar btn btn-warning"></td>
                        </form>
                    </tr>
                    <tr class="par">
                        <th class="col">11:00-12:00</th>
                       <form action="" class="frm">
                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>
                            <td class="col"><input type="button" value="Edit" name="" onclick="add_calendar(3)" id="" class="edit_managment_calendar btn btn-warning"></td>
                        </form>
                    </tr>
                    <tr class="par">
                        <th class="col">14:00-15:00</th>
                       <form action="" class="frm">
                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>
                            <td class="col"><input type="button" value="Edit" name="" onclick="add_calendar(4)" id="" class="edit_managment_calendar btn btn-warning"></td>
                        </form>
                    </tr>
                    <tr class="par">
                        <th class="col">15:00-16:00</th>
                       <form action="" class="frm">
                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>
                            <td class="col"><input type="button" value="Edit" name="" onclick="add_calendar(5)" id="" class="edit_managment_calendar btn btn-warning"></td>
                        </form>
                    </tr>
                    <tr class="par">
                        <th class="col">16:00-17:00</th>
                       <form action="" class="frm">
                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>
                            <td class="col"><input type="button" value="Edit" name="" onclick="add_calendar(6)" id="" class="edit_managment_calendar btn btn-warning"></td>
                        </form>
                    </tr>
                    <tr class="par">
                        <th class="col">17:00-18:00</th>
                       <form action="" class="frm">
                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>

                            <td class="col">
                                <select name="" id="" class="form-control border-0 bg-transparent" disabled>
                                    <option value="1">math</option>
                                    <option value="2" selected>pyhsice</option>
                                    <option value="3">svt</option>
                                    <option value="3">islamice</option>
                                </select>
                            </td>
                            <td class="col"><input type="button" value="Edit" name="" onclick="add_calendar(7)" id="" class="edit_managment_calendar btn btn-warning"></td>
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
    <div class="modal fade" id="modal_create_calendar" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-titel" id="modal_changeinfo_lb">Create new Calendar</h5>
                    <input type="button" class="btn-close" data-bs-dismiss="modal">
                </div>
                <div class="modal-body">
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
    
@endsection