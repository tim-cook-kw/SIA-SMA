<div id="update_absen" class="modal fade" role="dialog">
    <div class="modal-dialog">

       <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
                @foreach($absen as $k)
            <form action="master_absen/update/{{ $k->id }}" method="POST">
                @endforeach
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nama siswa</label>
                        <input type="text" name="nama_siswa" class="form-control" id="inputEmail4" placeholder="Nama">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" class="form-control" id="inputEmail4" placeholder="Nama">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Waktu</label>
                        <input type="text" name="waktu" class="form-control" id="inputEmail4" placeholder="Nama">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="inputEmail4" placeholder="Nama">
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
