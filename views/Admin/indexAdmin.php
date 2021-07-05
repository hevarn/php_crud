<table class="table ">
    <thead>
        <tr>
            <th>#</th>
            <th>name</th>
            <th>year</th>
            <th>grapes</th>
            <th>region</th>
            <th>country</th>
            <th>picture</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($params['reqs'] as $req) : ?>
            <tr>
                <th scope="row"><?= $req->id ?></th>
                <td><?= $req->name ?></td>
                <td><?= $req->year ?></td>
                <td><?= $req->grapes ?></td>
                <td><?= $req->region ?></td>
                <td><?= $req->country ?></td>

                <td><?= $req->picture ?></td>
                <td class="ligne">
                    <form action="/projetZero/admin/panel/delete/<?= $req->id ?>" method="POST" class="d-inline">
                        <button type="submit" class="btn btn-danger admin_btn"> effacer</button>
                    </form>
                    <a href="/projetZero/admin/panel/modify/<?= $req->id ?>" class="btn btn-warning admin_btn"> modifier</a>
                    <a href="/projetZero/admin/panel/create" class="btn btn-success">Céer une bouteille</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>