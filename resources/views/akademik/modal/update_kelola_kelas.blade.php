<div id="update_kelola_kelas" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="akademik_kelola_kelas/update/" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama siswa/siswi</label>
                            <input type="text" name="nama_siswa" class="form-control" id="inputEmail4" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4">Nama kelas</label>
                            <input type="text" name="class_name" class="form-control" id="inputEmail4" placeholder="Kelas">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4">Guru/Wali</label>
                            <input type="text" name="nama_guru" class="form-control" id="inputEmail4" placeholder="Kelas">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress2">Tahun Ajaran</label>
                        <input type="text" name="tahun_ajaran" class="form-control" id="inputAddress2"
                            placeholder="2001">

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
