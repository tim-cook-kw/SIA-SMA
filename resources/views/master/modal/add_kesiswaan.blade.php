<div id="tmbh_kesiswaan" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form action="{{ url('master_kesiswaan/add/') }}" method="POST">
            @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nama Siswa</label>
            <input type="text" name="nama" class="form-control" id="inputEmail4" placeholder="Nama">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Nisn</label>
            <input type="text" name="nisn" class="form-control" id="inputPassword4" placeholder="Nip">
          </div>

        </div>
        <div class="form-group ">
                <label for="inputPassword4">Nama Orang tua</label>
                  <input type="text" name="country_name" id="country_name" class="form-control input-lg" placeholder="Nama Orang tua" />
                <div id="countryList">
                     </div>
                        </div>
        <div class="form-group">
          <label for="inputAddress2">Tahun Masuk</label>
          <input type="text" name="birth_date" class="form-control" id="inputAddress2" placeholder="11-05-2001">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Asal Sekolah</label>
            <input type="text" name="nama" class="form-control" id="inputEmail4" placeholder="Nama">
          </div>

        <div class="form-group">
          <label for="inputAddress2">Jenis Kelamin</label>
          <select name="gender" id="inputState" class="form-control">
              <option value="pria">laki-laki</option>
              <option value="perempuan">perempuan</option>
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
