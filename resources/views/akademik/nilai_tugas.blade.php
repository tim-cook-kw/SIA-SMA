@extends('layouts.admin.master')
@section('content')
<div class="table-wrapper">
    <div class="table-title">
        <div class="form-group row" >
            <label class="col-sm-2 col-form-label">Kode Pelajaran</label>
            <div class="col-sm-2">
                <input type="email" class="form-control" id="inputEmail3" placeholder="0001" disabled>
            </div>
            <label class="col-sm-2 col-form-label">Mata Pelajaran</label>
            <div class="col-sm-2">
                <select class="custom-select my-1 mr-sm-2"  disabled>
                    <option selected>MTK</option>
                </select>

            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Semester</label>
            <div class="col-sm-2">
            <select class="custom-select my-1 mr-sm-2"  disabled>
                    <option selected>Ganjil</option>
                </select>
            </div>
            <label class="col-sm-2 col-form-label">Guru Pengajar</label>
            <div class="col-sm-2">
            <select class="custom-select my-1 mr-sm-2"  disabled>
                    <option selected>Sukirman S.P.G</option>
                </select>            </div>
        </div>
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
