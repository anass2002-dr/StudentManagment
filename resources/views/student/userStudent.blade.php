@extends('student.layout')
@section('titel','User Student')
@section('content')
<div class="container" >    
    <div class="rounded row_content">
        {{-- <p id="msg_request">{{session()->get('opertion')}}</p> --}}
        <div class="rounded-top text-white row_titel">
            <h4>My information</h4>
        </div>
        <div class="row_inside">    
           
            <div class="row content">
                <div class="col-sm-7 d-flex">
                    <div class="col">
                        <div class="type_titel">Student code</div>
                    </div>
                    <div class="col">
                        <div>{{$data->S_code}}</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex">
                    <div class="col">
                        <div class="type_titel">First Name</div>
                    </div>
                    <div class="col">
                        <div>{{$data->First_name}}</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Last Name</div>
                    </div>
                    <div class="col">
                        <div>{{$data->Last_name}}</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Phone number </div>
                    </div>
                    <div class="col">
                        <div>{{$data->Phone_number}}</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Fax number </div>
                    </div>
                    <div class="col">
                        <div>{{$data->Fax_number}}</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Address</div>
                    </div>
                    <div class="col">
                        <div>{{$data->Address}}</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Sex</div>
                    </div>
                    <div class="col">
                        @if($data->Sex==1)
                            <div>female</div>
                        @else
                            <div>male</div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Birth place </div>
                    </div>
                    <div class="col">
                        <div>{{$data->Birth_place}}</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Birth Date </div>
                    </div>
                    <div class="col">
                        <div>{{$data->Birth_date}}</div>
                    </div>
                </div>
                
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Institution </div>
                    </div>
                    <div class="col">
                        <div>{{$data->Institution}}</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Country origin </div>
                    </div>
                    <div class="col">
                        <div>{{$data->Country_origin}}</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Academy  </div>
                    </div>
                    <div class="col">
                        <div>{{$data->Academy}}</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Provincial Command</div>
                    </div>
                    <div class="col">
                        <div>{{$data->Provincial_command}}</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">National ID card number</div>
                    </div>
                    <div class="col">
                        <div>{{$data->ID_card_S}}</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Email</div>
                    </div>
                    <div class="col">
                        <div>{{$data->Email}}</div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex" >
                    <div class="col">
                        <div class="type_titel">Passowrd</div>
                    </div>
                    <div class="col">
                        <form action="">
                            <input type="password" name="pass" id="pass" value="{{$data->Password}}" class="form-control border-0" disabled>

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
@include('modal')
@endsection