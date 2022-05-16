<div class="col-md-12">
    <h3>Daftar Matakuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $nomor = 1;
            foreach ($matakuliah as $matkul) {
            ?>
                <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $matkul -> id ?> </td>
                <td><?php echo $matkul -> nama ?></td>
                <td><?php echo $matkul -> sks ?></td>
                <td><?php echo $matkul -> kode ?></td>
                </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>

    </table>
</div>