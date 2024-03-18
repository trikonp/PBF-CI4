<h1>Daftar Orang</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nama</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($orang as $k) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $k['nama']; ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>