<div class="container mt-5">

  <!-- flasher -->
  <div class="row">
      <div class="col-lg-6">
          <?php Flasher::flash(); ?>
      </div>
  </div>
  <!-- akhir -->

  <div class="container mt-5" >
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
  Tambah data
</button>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulLabelModal">Tambah Data Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Method Baseurl/fhizyel/insert yaitu function tambahData()-->
                <form action="<?= BASEURL; ?>/fhizyel/insert" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="number" class="form-control" id="npm" name="npm">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>

        </div>
    </div>
</div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NPM</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>

    <?php $i = 1; ?>
    <?php foreach($data['orang'] as $orang) :?>
      
      <tr>
        <th><?= $i; ?></th>
        <td><?=  $orang['nama']  ?></td>
        <td><?=  $orang['npm']  ?></td>
        <td><?=  $orang['email']  ?></td>
      </tr>

      <?php $i++ ?>
    <?php endforeach; ?>
    
    </tbody>

  </table>

</div>