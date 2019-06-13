@extends('layouts.admin.master')
@section('content')
<div class="table-wrapper">
    <div class="table-title">
        <div class="pull-right">
            <button class="btn btn-default-btn-xs btn-success" data-toggle="modal" data-target="#add_parent"><i
                    class="glyphicon glyphicon-plus"></i> New</button>
            <div class="row">
                <div class="col-sm-4">
                    <div class="show-entries">
                        <span>Show</span>
                        <select>
                            <option>5</option>
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                        </select>
                        <span>entries</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h2 class="text-center">Master <b>Parents</b></h2>
                </div>
                <div class="col-sm-4">
                    <div class="search-box">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama ayah </th>
            <th>Nama ibu</th>
            <th>Agama ayah</th>
            <th>Agama Ibu</th>
            <th>Pendidikan Terakhir Ayah</th>
            <th>Pendidikan Terakhir Ibu</th>
            <th>Pekerjaan Ayah</th>
            <th>Pekerjaan Ibu</th>
            <th>Email</th>

            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($parent as $k)
        <tr>

            <td>1</td>
            <td>{{ $k->name_father }}</td>
            <td>{{ $k->name_mother }}</td>
            <td>{{ $k->religion_father }}</td>
            <td>{{ $k->religion_mother }}</td>
            <td>{{ $k->last_education_father }}</td>
            <td>{{ $k->last_education_mother }}</td>
            <td>{{ $k->job_father }}</td>
            <td>{{ $k->job_mother }}</td>
            <td>{{ $k->email }}</td>

            <td>
                    <button data-toggle="modal" data-target="#update_parents" class="edit" title="Edit"><i
                        class="material-icons">&#xE254;</i></button>
                        <a href="master_parent/del{{ $k->id }}" class="delete" title="Delete" data-toggle="tooltip"><i
                            class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="clearfix">
    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
    <ul class="pagination">
        <li class="page-item disabled"><a href="#">Previous</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item active"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
    </ul>
</div>
</div>
</div>
@include('master.modal.add_parent')
@include('master.modal.update_parent')

@endsection

