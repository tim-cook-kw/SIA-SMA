<div id="news" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ url('dashboard_news/add/') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">nama</label>
                            <input type="text" name="nama" class="form-control" id="inputEmail4" placeholder="Nama">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">description</label>
                            <input type="text" name="description" class="form-control" id="inputEmail4"
                                placeholder="Nama">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlFile1">Masukan Foto 3x4</label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">

                            </div>

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
