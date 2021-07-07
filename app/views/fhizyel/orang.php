<div class="container mt-5">
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