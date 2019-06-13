<div id="update_parent" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('master_parent/add/') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nama Ayah</label>
                                <input type="text" name="nama_ayah" class="form-control" id="inputEmail4" placeholder="Nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nama Ibu</label>
                                <input type="text" name="nama_ibu" class="form-control" id="inputEmail4" placeholder="Nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Agama Ayah</label>
                                <input type="text" name="agama_ayah" class="form-control" id="inputEmail4" placeholder="Nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Agama Ibu</label>
                                <input type="text" name="agama_ibu" class="form-control" id="inputEmail4" placeholder="Nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Pendidikan Terakhir Ayah</label>
                                <input type="text" name="pendidikan_terakhir_ayah" class="form-control" id="inputEmail4" placeholder="Nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Pendidikan Terakhir Ibu</label>
                                <input type="text" name="pendidikan_terakhir_ibu" class="form-control" id="inputEmail4" placeholder="Nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Pekerjaan Ayah</label>
                                <input type="text" name="pekerjaan_ayah" class="form-control" id="inputEmail4" placeholder="Nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Pekerjaan Ibu</label>
                                <input type="text" name="pekerjaan_ibu" class="form-control" id="inputEmail4" placeholder="Nama">
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="text" name="email" class="form-control" id="inputEmail4" placeholder="Nama">
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
