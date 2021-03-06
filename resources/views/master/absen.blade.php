@extends('layouts.admin.master')
@section('content')
<div class="table-wrapper">
    <div class="table-title">
        <div class="pull-right">
            <button class="btn btn-default-btn-xs btn-success" data-toggle="modal" data-target="#add_absen"><i
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
                    <h2 class="text-center"><b> Absensi Siswa </h2></b>
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
            <th>kode absensi<i class="fa fa-sort"></i></th>
            <th>Nama siswa</th>
            <th>Waktu
            <th>Keterangan<i class="fa fa-sort"></i></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($absen as $k)

        <tr>
            <td>1</td>
            <td>00010010000</td>
            <td>{{ $k->nama_siswa }}</td>
            <td>{{ $k->waktu }}</td>
            <td>{{ $k->keterangan }}</td>
            <td>
                    <button data-toggle="modal" data-target="#update_absen class="edit" title="Edit"><i
                        class="material-icons">&#xE254;</i></button>
                <a href="master_absen/{{ $k->id }}" class="delete" title="Delete" data-toggle="tooltip"><i
                    class="material-icons">&#xE872;</i></a>
            </td>
        @endforeach
    </tr>
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
@include('master.modal.add_absen')
@include('master.modal.update_absen')
@endsection
