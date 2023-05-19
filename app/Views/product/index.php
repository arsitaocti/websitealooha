<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Activity</h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">ID</th>
                        <th scope="col ">Status</th>
                        <th scope="col ">Profil</th>
                        <th scope="col ">Category</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($story as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['link'] ?></td>
                        <td><?= $item['status'] ?></td>
                        <td><?= $item['photo'] ?></td>
                        <td>
                        <div class="btn-group " role="group " aria-label="Basic example ">
                                <form action="/product/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
                                    <a href="/product/<?= $item['id'] ?>/edit" class="btn btn-info text-white "><i class='bx bx-pencil'></i></a>
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger text-white" type="submit">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        </div class="col-12">
              
</div>
</div> 
        </div>
                    </div>
<?= $this->endSection() ?>