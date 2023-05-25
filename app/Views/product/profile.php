<!DOCTYPE html>
<html>
<head>
    <title>Profil Pengguna</title>
</head>
<body>
    <h1>Profil Pengguna</h1>
    <?php if ($user): ?>
        <p>Nama: <?= $user['name']; ?></p>
        <p>Email: <?= $user['email']; ?></p>
        <?php if ($user['profile_picture']): ?>
            <img src="/uploads/profile_pictures/<?= $user['profile_picture']; ?>" alt="Foto Profil">
        <?php else: ?>
            <p>Foto profil tidak tersedia.</p>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data" action="/profile/updateProfilePicture">
            <input type="file" name="profile_picture">
            <button type="submit">Unggah Foto Profil</button>
        </form>
    <?php else: ?>
        <p>Pengguna tidak ditemukan.</p>
    <?php endif; ?>
</body>
</html>
