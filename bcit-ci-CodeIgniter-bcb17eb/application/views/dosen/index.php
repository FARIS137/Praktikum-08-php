<div class="col-md-12">
 <h3>
 Daftar Dosen
 </h3>
 <table border="1" width="100%">
 <thead>
 <tr>
 <th>no</th><th>Nama</th><th>Gender</th>
<th>NIDN</th><th>Pendidikan</th><th>Matkul</th><th>sks</th>
<th>kode</th>
 </tr>
 </thead>
 <tbody>
     <?php

 $nomor=1;
 foreach($list_dsn as $dsn){
 ?>
 <tr>
 <td><?=$nomor?></td>
 <td><?=$dsn->nama?></td>
 <td><?=$dsn->gender?></td>
 <td><?=$dsn->nidn?></td>
<td><?=$dsn->pendidikan?></td>
 <td><?=$dsn->kode?></td>
 <td><?=$dsn->sks?></td>
<td><?=$dsn->namam?></td>


 </tr>
 <?php
 $nomor++;
 }
 ?>
 </tbody>
 </table>
</div>
    