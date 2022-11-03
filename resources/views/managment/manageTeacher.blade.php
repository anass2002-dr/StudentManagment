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
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_add_user">
                    Add new Teacher</button>                {{-- <a href="#" class="position-absolute end-0">Create New Student User</a> --}}
             </div>
        </div>
        
        <div class="table-responsive m-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col"></th>
                        <th class="col">Teacher Code</th>
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
                                <input type="button" value="All Information" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal_add_user">
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
                                <input type="button" value="All Information" class="btn btn-info">
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
                                <input type="button" value="All Information" class="btn btn-info">
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
                                <input type="button" value="All Information" class="btn btn-info">
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
                                <input type="button" value="All Information" class="btn btn-info">
                            </td>
                        </form>
                    </tr>
                    
                </tbody>
             
            </table>
        </div>
        
    </div>
    <div class="modal fade" id="modal_add_user" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-titel" id="modal_add_user_lb">Add New Teacher User</h5>
                    <button  type="button" class="btn-close" data-bs-dismiss="modal" ></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('home.add_teacher')}}">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="last_name" class="form-control" required placeholder="Last Name">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone_number" id="" class="form-control" required placeholder="Phone Number">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="fax_number" id="" class="form-control" required placeholder="Fax Number">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="address" id="" class="form-control" required placeholder="Address">
                        </div>
                        <div class="from-check mb-3">
                            <label for="s" class="form-label">Sex :</label>
                            <input type="radio" name="sex" id="mal" class="form-check-input" checked>
                            <label for="male">male</label>
                            <input type="radio" name="sex" id="female" class="form-check-input">
                            <label for="female">female</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="brith_place" id="" class="form-control" required placeholder="Brith Place">
                        </div>
                        <div class="mb-3">
                            <input type="date" name="brith_date" id="" class="form-control" required placeholder="Brith date">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="instutiation" id="" class="form-control" required placeholder="Instutiation">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="country_origine" id="" class="form-control" required placeholder="Country origine">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="academy" id="" class="form-control" required placeholder="Academy">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="provinial_command" id="" class="form-control" required placeholder="Provinial command">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="id_card" id="" class="form-control" required placeholder="National ID card Number">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="email" id="" class="form-control" required placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" id="" class="form-control" required placeholder="Password">
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                        
                </div>
            </form>
            </div>
        </div>

    </div>
</div>
    
@endsection