<div class="col-md-12">
 <h3>
 Daftar MataKuliah
 </h3>
 <table border="1" width="100%">
 <thead>
 <tr>
 <th>#</th><th>Nama</th><th>sks</th>
<th>kode</th>
 </tr>
 </thead>
 <tbody>
     <?php

 $nomor=1;
 foreach($list_matkul as $matkul){
 ?>
 <tr>
 <td><?=$nomor?></td>
 <td><?=$matkul->namam?></td>
 <td><?=$matkul->sks?></td>q
 <td><?=$matkul->kode?></td>
 

 </tr>
 <?php
 $nomor++;
 }
 ?>
 </tbody>
 </table>
</div>