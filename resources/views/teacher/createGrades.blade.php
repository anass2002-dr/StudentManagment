@extends('teacher.layout')
@section('titel','create Grades Teacher')
@section('content')
<div class="container body_student">
    <div class="rounded row_content">
        <div class="rounded-top text-white row_titel">
            <h4>Manage Grades of Students</h4>            
        </div>
        <div class="row m-3">
            <div class="col-lg-4">
                <p>Season number</p>

                <form action="">
                    <select class="form-select" name="Season" id="Season">
                        <option value="1">First Season</option>
                        <option value="2">Second Season</option>
                    </select>
                </form>
                
                
            </div>
            <div class="col-lg-4">
                <p>Control number</p>

                <form action="">
                    <select class="form-select" name="subject" id="subject">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </form>
                
            </div>
           
           
            <div class="col-lg-4">
                <form action="">
                    <input type="submit" value="create" class="btn btn-primary btn_search_grades">
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
                        <th class="col">Student code</th>
                        <th class="col">Student Name</th>
                        <th class="col">control</th>
                        <th class="col">Degres</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="col">Math</th>
                        <td class="col">2022</td>
                        <td class="col">2</td>
                        <td class="col">615981</td>
                        <td class="col">yassin kobli</td>
                        <td class="col">1</td>

                        <td class="col">
                            <form action="">
                                @csrf
                                <input type="text" name="gardes" id="gardes" placeholder="gardes/20" class="form-control mw-50">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th class="col">Math</th>
                        <td class="col">2022</td>
                        <td class="col">2</td>
                        <td class="col">615981</td>
                        <td class="col">bilal khalouki</td>
                        <td class="col">1</td>

                        <td class="col">
                            <form action="">
                                @csrf
                                <input type="text" name="gardes" id="gardes" placeholder="gardes/20" class="form-control mw-50">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th class="col">Math</th>
                        <td class="col">2022</td>
                        <td class="col">2</td>
                        <td class="col">615981</td>
                        <td class="col">zaid bakkali</td>
                        <td class="col">1</td>

                        <td class="col">
                            <form action="">
                                @csrf
                                <input type="text" name="gardes" id="gardes" placeholder="gardes/20" class="form-control">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th class="col">Math</th>
                        <td class="col">2022</td>
                        <td class="col">2</td>
                        <td class="col">615981</td>
                        <td class="col">zaid bakkali</td>
                        <td class="col">1</td>

                        <td class="col">
                            <form action="">
                                @csrf
                                <input type="text" name="gardes" id="gardes" placeholder="gardes/20" class="form-control">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th class="col">Math</th>
                        <td class="col">2022</td>
                        <td class="col">2</td>
                        <td class="col">615981</td>
                        <td class="col">zaid bakkali</td>
                        <td class="col">1</td>

                        <td class="col">
                            <form action="">
                                @csrf
                                <input type="text" name="gardes" id="gardes" placeholder="gardes/20" class="form-control">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th class="col">Math</th>
                        <td class="col">2022</td>
                        <td class="col">2</td>
                        <td class="col">615981</td>
                        <td class="col">zaid bakkali</td>
                        <td class="col">1</td>

                        <td class="col">
                            <form action="">
                                @csrf
                                <input type="text" name="gardes" id="gardes" placeholder="gardes/20" class="form-control">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th class="col">Math</th>
                        <td class="col">2022</td>
                        <td class="col">2</td>
                        <td class="col">615981</td>
                        <td class="col">zaid bakkali</td>
                        <td class="col">1</td>

                        <td class="col">
                            <form action="">
                                @csrf
                                <input type="text" name="gardes" id="gardes" placeholder="gardes/20" class="form-control">
                            </form>
                        </td>
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