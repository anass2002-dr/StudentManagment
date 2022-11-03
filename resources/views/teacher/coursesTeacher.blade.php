@extends('teacher.layout')
@section('titel','Manages Courses Teacher')
@section('content')
<div class="container body_student">
    <div class="rounded row_content">
        <div class="rounded-top text-white row_titel">
            <h4>Mange courses</h4>            
        </div>
        <div>
            <div class="position-relative py-3 m-2">
                <button class="btn btn-primary position-absolute end-0"data-bs-toggle="modal" data-bs-target="#add_new">Add New Courses</button>
                <br>
            </div>
            <div class="table-responsive m-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="col">Name Courses</th>
                            <th class="col">File Name</th>
                            <th class="col">Date Upload</th>
                            <th class="col">Category</th>
                            <th class="col" colspan="2">Manages</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col">algebra</td>
                            <td class="col"><a href="#">math1.pdf</a></td>
                            <td class="col">22-10-2020-10:00:00</td>
                            <td class="col">math</td>
                            <td class="col">
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit_courses">
                                     Edit
                                </button>

                            </td>
                            <td class="col">
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_courses">
                                    Delete
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="col">algebra</td>
                            <td class="col"><a href="#">math1.pdf</a></td>
                            <td class="col">22-10-2020-10:00:00</td>
                            <td class="col">math</td>
                            <td class="col">
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit_courses">
                                     Edit
                                </button>

                            </td>
                            <td class="col">
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_courses">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="col">algebra</td>
                            <td class="col"><a href="#">math1.pdf</a></td>
                            <td class="col">22-10-2020-10:00:00</td>
                            <td class="col">math</td>
                            <td class="col">
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit_courses">
                                     Edit
                                </button>

                            </td>
                            <td class="col">
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_courses">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{--modal add new --}}
    <div class="modal" id="add_new" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="alert">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Courses</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <input type="text" name="" id="" class="form-control" placeholder="Name Courses">
                    </div>
                    <div class="mb-3">
                        <label for="fileName" class="form-label">Upload your file</label>
                        <input class="form-control" type="file" id="fileName" multiple>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="" id="" class="form-control" value="{{ date('Y-m-d H:i:s') }}" disabled>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="" id="" class="form-control" value="math" disabled>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form action="">
                <input type="submit" value="Add" class="btn btn-primary">
            </form>
            </div>
        </div>
        </div>
    </div>
        {{--modal update --}}
        <div class="modal" id="edit_courses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="alert">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Courses</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="Name Courses">
                        </div>
                        <div class="mb-3">
                            <label for="fileName" class="form-label">Upload your file</label>
                            <input class="form-control" type="file" id="fileName" multiple>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" value="{{ date('Y-m-d H:i:s') }}" disabled>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" value="math" disabled>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="">
                    <input type="submit" value="Save" class="btn btn-primary">
                </form>
                </div>
            </div>
            </div>
        </div>

        {{--modal delete --}}
        <div class="modal" id="delete_courses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="alert">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Courses</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-warning">
                    do you really want to delete this course ?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="">
                    <input type="submit" value="Confirm" class="btn btn-danger">
                </form>
                </div>
            </div>
            </div>
        </div>
</div>
    
@endsection