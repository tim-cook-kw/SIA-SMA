<div id="modalAdd" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ url('akademik_kelola_kelas/add/') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama Siswa/Siswi</label>
                            <input type="text" name="nama_siswa" class="form-control" id="inputEmail4" placeholder="Nama Siswa/Siswi">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama Kelas</label>
                            <input type="text" name="class_name" class="form-control" id="inputEmail4" placeholder="Nama Kelas">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Guru/WaliKelas</label>
                            <input type="text" name="nama_guru" class="form-control" id="inputEmail4" placeholder="Guru/Walikelas">
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputAddress2">Tahun Ajaran</label>
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
