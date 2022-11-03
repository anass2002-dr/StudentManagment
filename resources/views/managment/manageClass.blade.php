@extends('managment.layout')
@section('titel','Manages Teacher User')
@section('content')
<div class="container body_student">
    <div class="rounded row_content">
        <div class="rounded-top text-white row_titel">
            <h4>Manage Teacher Users</h4>            
        </div>
        <div class="row m-3 border p-2 rounded bg-light py-3">
            <div class="col-lg-3">
                <p>Year</p>

                <form action="">
                    <select class="form-select" name="yaer" id="yaer">
                        <option value="1">2022</option>
                        <option value="2">2021</option>
                        <option value="3">2020</option>
                    </select>
                </form>
            </div>
            <div class="col-lg-2">
                <p>level</p>

                <form action="">
                    <select class="form-select" name="level" id="level">
                        <option value="1">level1</option>
                        <option value="2">level2</option>
                        <option value="3">level3</option>
                        <option value="4">level4</option>
                    </select>
                </form>
                
                
            </div>
            <div class="col-lg-3">
                <p>Class Room</p>

                <form action="">
                    <select class="form-select" name="ClassRoom" id="ClassRoom">
                        <option value="1">class1</option>
                        <option value="2">class2</option>
                        <option value="3">class3</option>
                        <option value="4">class4</option>
                    </select>
                </form>
                
            </div>
            
           
            <div class="col-lg-2">
                <form action="">
                    <input type="submit" value="Refresh" class="btn btn-primary btn_search_grades">
                </form>
            </div>
            <div class="col-lg-2" style="padding-top: 40px; ">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_add_class">
                    Add new class</button>
             </div>
        </div>
        <div class="row p-3">
            <div class="col-lg-3 d-flex">
                <div class="col type_titel">Code Teacher</div>
                <div class="col">962586</div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="col type_titel">First Name</div>
                <div class="col">Brahim</div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="col type_titel">Last Name</div>
                <div class="col">azizi</div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="col type_titel">Subject</div>
                <div class="col">Math</div>
            </div>
            {{-- svt --}}
            <div class="col-lg-3 d-flex">
                <div class="col type_titel">Code Teacher</div>
                <div class="col">275387</div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="col type_titel">First Name</div>
                <div class="col">youness</div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="col type_titel">Last Name</div>
                <div class="col">hamidi</div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="col type_titel">Subject</div>
                <div class="col">svt</div>
            </div>
        </div>
        <div class="table-responsive m-3">
            <table class="table table-striped">
                <thead>
                    
                    <tr>
                        <th class="col"></th>
                        <th class="col">Student Code</th>
                        <th class="col">First Name</th>
                        <th class="col">Last Name</th>
                        <th class="col">Level</th>
                        <th class="col">Class Room</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col"><img src="/assets/img/me2.jpg" alt="" class="rounded-circle" width="40" height="40"></td>
                        <td class="col">9161841</td>
                        <td class="col">Anass</td>
                        <td class="col">Dermaj</td>
                        <td class="col">3</td>
                        <td class="col">calss1</td>
                        <form action="">
                            <td class="col">
                                <input type="button" value="Remove" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal_delete">
                            </td>
                        </form>
                    </tr>
                    <tr>
                        <td class="col"><img src="/assets/img/me2.jpg" alt="" class="rounded-circle" width="40" height="40"></td>
                        <td class="col">9161841</td>
                        <td class="col">Anass</td>
                        <td class="col">Dermaj</td>
                        <td class="col">3</td>
                        <td class="col">calss1</td>
                        <form action="">
                            <td class="col">
                                <input type="button" value="Remove" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal_delete">
                            </td>
                        </form>
                    </tr>
                    <tr>
                        <td class="col"><img src="/assets/img/me2.jpg" alt="" class="rounded-circle" width="40" height="40"></td>
                        <td class="col">9161841</td>
                        <td class="col">Anass</td>
                        <td class="col">Dermaj</td>
                        <td class="col">3</td>
                        <td class="col">calss1</td>
                        <form action="">
                            <td class="col">
                                <input type="button" value="Remove" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal_delete">
                            </td>
                        </form>
                    </tr>
                    <tr>
                        <td class="col"><img src="/assets/img/me2.jpg" alt="" class="rounded-circle" width="40" height="40"></td>
                        <td class="col">9161841</td>
                        <td class="col">Anass</td>
                        <td class="col">Dermaj</td>
                        <td class="col">3</td>
                        <td class="col">calss1</td>
                        <form action="">
                            <td class="col">
                                <input type="button" value="Remove" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal_delete">
                            </td>
                        </form>
                    </tr>
                    <tr>
                        <td class="col"><img src="/assets/img/me2.jpg" alt="" class="rounded-circle" width="40" height="40"></td>
                        <td class="col">9161841</td>
                        <td class="col">Anass</td>
                        <td class="col">Dermaj</td>
                        <td class="col">3</td>
                        <td class="col">calss1</td>
                        <form action="">
                            <td class="col">
                                <input type="button" value="Remove" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal_delete">
                            </td>
                        </form>
                    </tr>
                    
                </tbody>
             
            </table>
        </div>
        
        <div class="col-sm-12 m-3">
            <form action="">
                <button type="button" class="btn btn-primary" data-bs-target="#modal_add_student" data-bs-toggle="modal">Add new Student</button>
            </form>
        </div>
    </div>
    <div class="modal fade" id="modal_delete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-titel">Warning!</h5>
                    <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                </div>
                <div class="modal-body">
                    <p>Do you realy want to delete this student from class</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                    <form action="">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_add_class" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-titel" id="modal_add_user_lb">Add New Teacher User</h5>
                    <button  type="button" class="btn-close" data-bs-dismiss="modal" ></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="Class Name">
                        </div>
                        <div class="mb-3">
                            <label for="level" class="form-label">Level</label>
                            <select name="" id="" class="form-control">
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="math" class="form-label">Math Teacher</label>
                            <select name="" id="" class="form-control">
                                <option value="1">driss jeloli</option>
                                <option value="1">aymane sabiri</option>
                                <option value="3">ahmed bendriss</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="svt" class="form-label">Svt Teacher</label>
                            <select name="" id="" class="form-control">
                                <option value="1">driss jeloli</option>
                                <option value="1">aymane sabiri</option>
                                <option value="3">ahmed bendriss</option>
                            </select>                        </div>
                        <div class="mb-3">
                            <label for="islamic" class="form-label">Islamic Teacher</label>
                            <select name="" id="" class="form-control">
                                <option value="1">driss jeloli</option>
                                <option value="1">aymane sabiri</option>
                                <option value="3">ahmed bendriss</option>
                            </select>
                        </div>
                        <div class="mb-3">
                           <input type="text" name="" id="" placeholder="Number of student" class="form-control">
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="">
                        <button type="submit" class="btn btn-primary">Create</button>
                        
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="modal_add_student" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-titel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <input type="text" name="" class="form-control" id="" placeholder="Student Code">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                    <form action="">
                        <button type="submit" class="btn btn-info">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection