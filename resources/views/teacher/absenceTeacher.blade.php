@extends('teacher.layout')
@section('titel','Teacher absence')
@section('content')
<div class="container body_student">
    <div class="rounded row_content">
        <div class="rounded-top text-white row_titel d-flex position-relative">
            <h4>Mange Absences</h4>
            <div class="position-absolute end-0 m-2"><a href="{{route('home.manageAbsencesStudent')}}">See my Absences</a></div>            
        </div>
        <div class="row m-3">
            <div class="col-lg-4">
                <p>classroom</p>

                <form action="">
                    <select class="form-select" name="classroom" id="classroom">
                        <option value="1">class 1</option>
                        <option value="2">class 2</option>
                        <option value="3">class 3</option>
                        <option value="4">class 4</option>
                    </select>
                </form>
                
                
            </div>
            <div class="col-lg-4">
                <p>Hour</p>

                <form action="">
                    <select class="form-select" name="hour" id="hour">
                        <option value="1">08:00-09:00</option>
                        <option value="2">09:00-10:00</option>
                        <option value="3">10:00-11:00</option>
                        <option value="4">11:00-12:00</option>
                        <option value="5">14:00-15:00</option>
                        <option value="6">15:00-16:00</option>
                        <option value="7">16:00-17:00</option>
                        <option value="8">17:00-18:00</option>
                    </select>
                </form>
                
            </div>
           
           
            <div class="col-lg-4">
                <p>time</p>
                <form action="">
                    <input type="date" class="form-control" name="date" id="date" value="{{ date('Y-m-d') }}">
                </form>
            </div>
        </div>
        
        <div class="table-responsive m-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col">Student code</th>
                        <th class="col">First Name</th>
                        <th class="col">Last Name</th>
                        <th class="col">ClassRoom Name</th>
                        <th class="col">allow entry</th>
                        <th class="col">absence</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="col">94264</th>
                        <td class="col">ahmed</td>
                        <td class="col">azozi</td>
                        <td class="col">class 1</td>
                        <td class="col">yes</td>
                        <td class="col">
                            <form action="">
                                @csrf
                                <input type="checkbox" name="chk_absence" id="chk_absence" class="form-chek">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th class="col">94264</th>
                        <td class="col">ahmed</td>
                        <td class="col">azozi</td>
                        <td class="col">class 1</td>
                        <td class="col">yes</td>
                        <td class="col">
                            <form action="">
                                @csrf
                                <input type="checkbox" name="chk_absence" id="chk_absence" class="form-chek">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th class="col">94264</th>
                        <td class="col">ahmed</td>
                        <td class="col">azozi</td>
                        <td class="col">class 1</td>
                        <td class="col">yes</td>
                        <td class="col">
                            <form action="">
                                @csrf
                                <input type="checkbox" name="chk_absence" id="chk_absence" class="form-chek">
                            </form>
                        </td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="5" class="col">total</th>
                        <th class="col">8</th>
                    </tr>
                    <tr>
                        <th colspan="5" class="col"></th>
                        <th class="col">
                            <form action="">
                                <input type="submit" value="Save" class="btn btn-primary">
                            </form>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
    
@endsection