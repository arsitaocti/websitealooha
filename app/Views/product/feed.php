<!DOCTYPE html>
<html>
<head>
    <title>Feed</title>
</head>
<body>
    <h1>Feed</h1>

    <form method="post" enctype="multipart/form-data" action="/feed/createPost">
        <textarea name="status" placeholder="Tulis status Anda"></textarea>
        <input type="file" name="photo">
        <button type="submit">Post</button>
    </form>

    <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <div class="post">
                <p><?= $post['status']; ?></p>
                <?php if ($post['photo']): ?>
                    <img src="<?= base_url('uploads/posts/' . $post['photo']); ?>" alt="Foto Postingan">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Tidak ada postingan.</p>
    <?php endif; ?>
</body>
</html>