<html>
    <head>
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
    </body>
</html>