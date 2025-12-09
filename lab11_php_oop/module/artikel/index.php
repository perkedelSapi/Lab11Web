<?php
$db = new Database();
$query = $db->query("SELECT * FROM artikel");
?>

<h3>Data Artikel</h3>
<a href="/lab11_php_oop/artikel/tambah">Tambah Artikel</a>
<table border="1" width="100%" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>

    <?php while ($row = $query->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['isi'] ?></td>
            <td>
                <a href="/lab11_php_oop/artikel/ubah?id=<?= $row['id'] ?>">Ubah</a>
            </td>
        </tr>
    <?php } ?>
</table>
