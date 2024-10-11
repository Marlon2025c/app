<h2>Liste des utilisateurs</h2>
<ul>
    <?php foreach($users as $user): ?>
        <li><?= esc($user['username']) ?> - <?= esc($user['email']) ?></li>
    <?php endforeach; ?>
</ul>
