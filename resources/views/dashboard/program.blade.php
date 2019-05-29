@extends('layouts.admin.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>


<div class="container">
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

<div class="container">
    <div class="row">


        <div class="col-md-12">
            <h4>Program Extrakulikuler | <button type="submit" class='btn btn-success mb-1 btn-sm'> Tambah </button></h4>
            <div class="table-responsive">


                <table id="mytable" class="table table-bordred table-striped">

                    <thead>

                        <th><input type="checkbox" id="checkall" /></th>
                        <th>Sales ID</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Email</th>
                        <th>Mobile Numberl</th>
                        <th>Update</th>
                        <th>  Delete </th>
                    </thead>
                    <tbody>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Mohsin</td>
                            <td>Irshad</td>
                            <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                            <td>isometric.mohsin@gmail.com</td>
                            <td>+923335586757</td>
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                        class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                        data-target="#edit"><span class="fas fa-user-plus"></span></button></p>
                            </td>
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                        class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                        data-target="#delete"><span class="fas fa-trash"></span></button></p>
                            </td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Mohsin</td>
                            <td>Irshad</td>
                            <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                            <td>isometric.mohsin@gmail.com</td>
                            <td>+923335586757</td>
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                        class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                        data-target="#edit"><span class="fas fa-user-plus"></span></button></p>
                            </td>
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                        class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                        data-target="#delete"><span class="fas fa-trash"></span></button></p>
                            </td>
                        </tr>


                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Mohsin</td>
                            <td>Irshad</td>
                            <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                            <td>isometric.mohsin@gmail.com</td>
                            <td>+923335586757</td>
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                        class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                        data-target="#edit"><span class="fas fa-user-plus"></span></button></p>
                            </td>
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                        class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                        data-target="#delete"><span class="fas fa-trash"></span></button></p>
                            </td>
                        </tr>



                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Mohsin</td>
                            <td>Irshad</td>
                            <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                            <td>isometric.mohsin@gmail.com</td>
                            <td>+923335586757</td>
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                        class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                        data-target="#edit"><span class="fas fa-user-plus"></span></button></p>
                            </td>
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                        class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                        data-target="#delete"><span class="fas fa-trash"></span></button></p>
                            </td>
                        </tr>


                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Mohsin</td>
                            <td>Irshad</td>
                            <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                            <td>isometric.mohsin@gmail.com</td>
                            <td>+923335586757</td>
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                        class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                        data-target="#edit"><span class="fas fa-user-plus"></span></button></p>
                            </td>
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                        class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                        data-target="#delete"><span class="fas fa-trash"></span></button></p>
                            </td>
                        </tr>





                    </tbody>

                </table>
        </div>
    </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                        class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Mohsin">
                </div>
                <div class="form-group">

                    <input class="form-control " type="text" placeholder="Irshad">
                </div>
                <div class="form-group">
                    <textarea rows="2" class="form-control"
                        placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span
                        class="far fa-trash-alt"></span> Update</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                        class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you
                    want to delete this Record?</div>

            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-success"><span
                        class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
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

@endsection
