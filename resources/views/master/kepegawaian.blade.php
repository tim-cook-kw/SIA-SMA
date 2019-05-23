@extends('layouts.admin.master')
@section('content')
<div class="table-wrapper">
            <div class="table-title">
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
						<h2 class="text-center">Master <b>Kepegawaian</b></h2>
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
                        <th>Nip <i class="fa fa-sort"></i></th>
                        <th>Nama</th>
                        <th>T.Tgl lahir<i class="fa fa-sort"></i></th>
                        <th>Alamat</th>
                        <th>Telp <i class="fa fa-sort"></i></th>
                        <th>Foto <i class="fa fa-sort"></i></th>
                        <th>Hak Akses <i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>00010010000</td>
                        <td>Thomas Hardy<</td>
                        <td>Jakarta 11-05-01</td>
                        <td>Cideng tn abang</td>
                        <td>085921580500</td>
                        <td> <img src="https://www.w3schools.com/bootstrap/cinqueterre.jpg" class="ch-item ch-img-2" width="90" height="60"> </td>
                        <td>Admin</td>
                        <td>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
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