@extends('managment.layout')
@section('titel','User Managment')
@section('content')
<div class="container" >    
    <div class="rounded row_content">
        <div class="rounded-top text-white row_titel">
            <h4>My information</h4>
        </div>
        <div class="row_inside">    
           
            <div class="row content">
                <div class="col-sm-12 position-relative">
                    <button class="btn btn-primary position-absolute end-0 mx-2" data-bs-toggle="modal" data-bs-target="#modal_changeInfo">
                        Edit My Information</button>
                </div>
                <div class="col-sm-7 d-flex">
                    <div class="col">
                        <div class="type_titel">Managment code</div>
                    </div>
                    <div class="col">
                        <div>1594654</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex">
                    <div class="col">
                        <div class="type_titel">First Name</div>
                    </div>
                    <div class="col">
                        <div>Anass</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Last Name</div>
                    </div>
                    <div class="col">
                        <div>Dermaj</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Phone number </div>
                    </div>
                    <div class="col">
                        <div>+212 6522589175</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Fax number </div>
                    </div>
                    <div class="col">
                        <div>+212 5822486175</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Address</div>
                    </div>
                    <div class="col">
                        <div>Ouazzane</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Sex</div>
                    </div>
                    <div class="col">
                        <div>male</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Birth place </div>
                    </div>
                    <div class="col">
                        <div>Ouazzane</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Birth Date </div>
                    </div>
                    <div class="col">
                        <div>21/07/2022</div>
                    </div>
                </div>
                
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Institution </div>
                    </div>
                    <div class="col">
                        <div>LYCEE QUALIFIANT MOULAY ABDELLAH CHRIF</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Country origin </div>
                    </div>
                    <div class="col">
                        <div>Morocco</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Academy  </div>
                    </div>
                    <div class="col">
                        <div>Tanger-Tetouan-Al Hoceima</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Provincial Command</div>
                    </div>
                    <div class="col">
                        <div>Province: Ouezzane</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">National ID card number</div>
                    </div>
                    <div class="col">
                        <div>GM229495</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Email</div>
                    </div>
                    <div class="col">
                        <div>Anassdermaj163@gmail.com</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Passowrd</div>
                    </div>
                    <div class="col">
                        <form action="">
                            <input type="password" name="pass" id="pass" value="123456" class="form-control border-0" disabled>

                        </form>
                    </div>
                    

                </div>
                <div class="col-sm-6 d-flex">
                    <div class="col">
                        
                        <button type="button" class="btn btn-primary" id="md" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Change Password
                        </button>
                        
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="alert">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <input type="text" name="" id="" class="form-control" placeholder="Old password">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="" id="" class="form-control" placeholder="New password">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="" id="" class="form-control" placeholder="confirm password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form action="">
                <input type="submit" value="Save Changes" class="btn btn-primary">
            </form>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="modal_changeInfo" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-titel" id="modal_changeinfo_lb">Edit My information</h5>
                    <button  type="button" class="btn-close" data-bs-dismiss="modal" ></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="First Name">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="Fax Number">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="Brith Place">
                        </div>
                        <div class="from-check mb-3">
                            <label for="s" class="form-label">Sex :</label>
                            <input type="radio" name="sex" id="mal" class="form-check-input" checked>
                            <label for="male">male</label>
                            <input type="radio" name="sex" id="female" class="form-check-input">
                            <label for="female">female</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="instutiation">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="Country origine">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="Academy">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="Provinial command">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="National ID card Number">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="Email">
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection