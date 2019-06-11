<div id="add_mata_pelajaran" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ url('master_mata_pelajaran/add/') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama Pelajaran</label>
                            <input type="text" name="nama_pelajaran" class="form-control" id="inputEmail4" placeholder="Nama">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama Guru</label>
                            <input type="text" name="nama" class="form-control" id="inputEmail4" placeholder="Nama">
                        </div>

                    </div>



                        <div class="form-row">



                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" name="close" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
</div>
