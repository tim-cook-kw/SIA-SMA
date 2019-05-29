@extends('layouts.admin.master')
@section('content')
<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col">
                    <div class="form-group">
                            <div class="form-group">
                                <label for="kodeKelas"> Kode Kelas </label>
                                <input type="text" class="form-control" name="kodeKelas" id="kodeKelas" disabled>
                            </div>
                            <div class="form-group">
                                <label for="kodeKelas"> Semester </label>
                                <input type="text" class="form-control" name="kodeKelas" id="kodeKelas" disabled>
                            </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                            <div class="form-group">
                                <label for="kodeKelas"> Mata Pelajaran </label>
                                <input type="text" class="form-control" name="kodeKelas" id="kodeKelas" disabled>
                            </div>
                            <div class="form-group">
                                <label for="kodeKelas"> Guru Pengajar </label>
                                <input type="text" class="form-control" name="kodeKelas" id="kodeKelas" disabled>
                            </div>
                    </div>
            </div>
        </div>
        <button class="btn btn-default-btn-xs btn-success" data-toggle="modal" data-target="#modalAdd"><i
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
                <h2 class="text-center">Form Nilai Siswa</h2>

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
                <th>Nis<i class="fa fa-sort"></i></th>
                <th>Nama Siswa<i class="fa fa-sort"></i></th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>000113212120</td>
                <td>Sudirman</td>
                <td><input class="form-control" type="number" value="80"></td>
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
@endsection
