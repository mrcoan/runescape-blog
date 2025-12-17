<?php
include_once('templates/header.php');

$cat = $_GET['cat'];

if ($cat == 'rs') {
    include_once('data/rs/posts.php');
    $titulo_cat = 'RuneScape';
} elseif ($cat == 'dw') {
    include_once('data/dw/posts.php');
    $titulo_cat = 'DragonWilds';
} else {
    echo "Página não encontrada";
    include_once('templates/footer.php');
    exit();
}

?>

<main>

    <h2><?= $titulo_cat ?></h2>

    <div class="posts">
        <?php foreach ($posts as $post): ?>
            <article class="post-card">
                <img src="<?= $post['imagem'] ?>" alt="<?= $post['titulo'] ?>">
                <h3><?= $post['titulo'] ?></h3>
                <p><?= $post['resumo'] ?></p>
                <small>Publicação: <?= $post['data'] ?></small>
                <a href="<?= $BASE_URL ?>/post.php?cat=<?= $post['categoria'] ?>&id=<?= $post['id'] ?>" class="link-botao">Ler mais</a>
            </article>
        <?php endforeach; ?>
    </div>

</main>

<aside>
    <h3>Mais Lidas</h3>
    <p>em desenvolvimento</p>

    <h3>Tags</h3>
    <p>em desenvolvimento</p>
</aside>

<?php
include_once('templates/footer.php');
?>