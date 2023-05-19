<html>
    <head>
<<<<<<< HEAD
        <?= $this->include('layouts/head') ?>
    </head>
    <body>
        <?= $this->include('layouts/navbar') ?>

        <main role="main " class="container">

            <?= $this->renderSection('content') ?>
        </main>
        <?= $this->include('layouts/footer') ?>

        <?= $this->include('layouts/scripts') ?>
=======
        <?= $this->include('layout/head') ?>
    </head>
    <body>
        <?= $this->include('layout/navbar') ?>

        <main role="main " class="container">
            <?= $this->include('layout/header') ?>

            <?= $this->renderSection('content') ?>
        </main>
        <?= $this->include('layout/footer') ?>

        <?= $this->include('layout/script') ?>
>>>>>>> 499d2465ef258e68fa13ad5937916d9f7db06d21
    </body>
</html>