@extends('layouts.admin.master')
@section('content')
<div class="container">
    <div class="table-title">
        <div class="pull-right">
            <button class="btn btn-default-btn-xs btn-success" data-toggle="modal" data-target="#modalAdd"><i
                    class="glyphicon glyphicon-plus"></i> New</button>
            <div class="row">
                <div class="col-6">
                    <div class="card mt-3 tab-card">
                        <div class="card-header tab-card-header">

                        </div>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active p-3" id="one" role="tabpanel"
                                aria-labelledby="one-tab">
                                <img src="https://img.lovepik.com/element/40034/9462.png_860.png" height="100">
                                <p class="card-text">Walas : <span>Sukirman</span></p>
                                <p class="card-text">Kelas : <span>Sukirman</span></p>
                                <p class="card-text">Tahun ajaran : <span>Sukirman</span></p>

                                <a href="{{url('nilai_tugas')}}" class="btn btn-primary">Go somewhere</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('akademik.modal.add_kelola_nilai')
    @include('akademik.modal.update_kelola_nilai')
    @endsection
