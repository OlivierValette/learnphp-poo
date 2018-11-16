<h1>Default page</h1>
<ul>
    <?php /** @var \App\Entity\Utilisateur $user */; ?>
    <?php foreach($users as $user) : ?>
    <li>
        <!-- use magical method __get() -->
        <?= $user->fullname; ?>
    </li>
    <?php endforeach; ?>
</ul>
