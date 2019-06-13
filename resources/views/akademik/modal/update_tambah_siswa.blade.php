<div id="update_tambah_siswa" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="akademik_tambah_siswa/update/" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama Siswa</label>
                            <input type="text" name="nama_siswa" class="form-control" id="inputEmail4" placeholder="Nama">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="inputEmail4">Nama kelas</label>
                                <input type="text" name="class_name" class="form-control" id="inputEmail4" placeholder="Nama">
                            </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nisn</label>
                            <input type="text" name="nis" class="form-control" id="inputPassword4" placeholder="Nip">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress2">Tahun ajaran</label>
                        <input type="text" name="tahun_ajaran" class="form-control" id="inputAddress2"
                            placeholder="2001">
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
</div>
