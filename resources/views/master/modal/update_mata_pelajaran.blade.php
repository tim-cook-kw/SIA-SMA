<div id="update_mata_pelajaran" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="master_kesiswaan/update/" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nama</label>
                                <input type="text" name="nama" class="form-control" id="inputEmail4" placeholder="Nama">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nisn</label>
                                <input type="text" name="nisn" class="form-control" id="inputPassword4" placeholder="Nip">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="inputAddress"
                                placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Tempat Tanggal Lahir</label>
                            <input type="text" name="birth_date" class="form-control" id="inputAddress2"
                                placeholder="Bekasi 11-05-2001">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Jenis Kelamimn</label>
                            <select name="gender" id="inputState" class="form-control">
                                <option value="pria">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Agama</label>
                            <select name="agama" id="inputState" class="form-control">
                                <option value="1">islam</option>
                                <option value="2">kristen</option>
                                <option value="3">hindu</option>
                                <option value="4">budha</option>
                                <option value="5">konghu cu</option>
                            </select>
                            <div class="form-group">
                                <label for="inputAddress2">Position</label>
                                <input type="text" name="position" class="form-control" id="inputAddress2"
                                    placeholder="position">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Telp</label>
                                    <input type="text" name="telp" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Hak akses</label>
                                    <select name="hak_akses" id="inputState" class="form-control">
                                        <option value="1" selected>Admin</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Masukan Foto 3x4</label>
                                    <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
                                </div>
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
