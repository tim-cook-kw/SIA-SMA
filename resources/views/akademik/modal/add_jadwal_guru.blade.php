<div id="modalAdd" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('akademik_jadwal_guru/add/') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nama</label>
                                <input type="text" name="nama" class="form-control" id="inputEmail4" placeholder="Nama">
                            </div>

                        <div class="form-group">
                            <label for="inputAddress2">Input Tanggal</label>
                            <input type="text" name="birth_date" class="form-control" id="inputAddress2"
                                placeholder="11-05-2001">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nama Pelajaran</label>
                                <input type="text" name="nama" class="form-control" id="inputEmail4" placeholder="Nama Pelajaran">
                            </div>

                                <div class="form-group col-md-4">
                                    <label for="inputState">Hak akses</label>
                                    <select name="hak_akses" id="inputState" class="form-control">
                                        <option value="1" selected>Admin</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" name="close" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                <button type="submit" class="btn btn-primary col-md-2">Submit</button>
            </div>

        </div>
    </div>
    </div>
    </div>
