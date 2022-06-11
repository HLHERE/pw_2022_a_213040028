<?php
require '../functions.php';
$keyword = $_GET['keyword'];

$query = "SELECT * FROM hospital_info
WHERE 
Ambulance LIKE '%$keyword%' OR
Domisili LIKE '%$keyword%' OR 
Tempat LIKE '%$keyword%'
";
$hospital = query($query);
?>



<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Ambulance</th>
      <th scope="col">Domisili</th>
      <th scope="col">Tempat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
  <?php foreach($hospital as $hl) {?>
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>
      <td>
      <img src="img/<?php echo $hl["Gambar"]?>" width=150>
      </td>
      <td><?php echo $hl["Ambulance"]?></td>
      <td><?php echo $hl["Domisili"]?></td>
      <td><?php echo $hl["Tempat"]?></td>
      <td>
          <a href="ubah.php?id=<?php echo $hl["id"]?>" class="btn badge bg-warning">Ubah</a>
          <a href="hapus.php?id=<?php echo $hl["id"]?>" class="btn badge bg-danger" onclick="return confirm('Ingin tetap menghapus data?');">Hapus</a>
        </td>
    </tr>
    <?php }?>
  </tbody>
</table>