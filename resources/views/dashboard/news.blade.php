@extends('layouts.admin.master')
@section('content')
<div class="table-wrapper">
    <div class="table-title">
        <div class="pull-right">
            <button class="btn btn-default-btn-xs btn-success" data-toggle="modal" data-target="#news"><i
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
                    <h2 class="text-center">News</h2>
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
            <th>Judul <i class="fa fa-sort"></i></th>
            <th>Description</th>
            <th>Foto  </th>

            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($news as $k)
        <tr>
            <td>1</td>
            <td>{{$k->nama}}</td>
            <td>{{$k->description}}</td>
            <td>{{$k->image}}</td>

            <td> <img src="https://www.w3schools.com/bootstrap/cinqueterre.jpg" class="ch-item ch-img-2" width="90"
                height="60"> </td>
            <td>
                    <button data-toggle="modal" data-target="#update_news" class="edit" title="Edit"><i
                        class="material-icons">&#xE254;</i></button>
                        <a href="master_kesiswaan/" class="delete" title="Delete" data-toggle="tooltip"><i
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
@include('dashboard.modal.add_news')
@include('dashboard.modal.update_news')
@endsection
