<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">ADMIN</h5>

            <form action="/login" method="post">

                <div class="form-group">
                    <label for="example-product-name" class="label-center" >username</label>
                    <input name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp" 
                        placeholder="masukan username" required name="name">
                </div>

                <div class="form-group">
                    <label for="example-product-name"class="label-center" >password</label>
                    <input name="password" type="text" class="form-control" id="password" aria-describedby="emailHelp" 
                        placeholder="masukan password" required name="name">
                </div>

               

                <button type="submit" class="btn btn-primary">LOGIN</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
