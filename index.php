<?php
include_once('data/dw/posts.php');
$posts_dw = $posts;
include_once('data/rs/posts.php');
$posts_rs = $posts;
include_once('templates/header.php');

$todos_posts = agruparPosts($posts_dw, $posts_rs);
$posts_recentes_gerais = mostrarPostsRecentes($todos_posts);
$posts_recentes_rs = mostrarPostsRecentes($posts_rs);
$posts_recentes_dw = mostrarPostsRecentes($posts_dw);
?>

<main>

    <h2>Últimas Notícias</h2>

    <div class="posts">
        <?php foreach ($posts_recentes_gerais as $post): ?>
            <article class="post-card">
                <img src="<?= $post['imagem'] ?>" alt="<?= $post['titulo'] ?>">
                <h3><?= $post['titulo'] ?></h3>
                <p><?= $post['resumo'] ?></p>
                <small>Publicação: <?= $post['data'] ?></small>
                <a href="<?= $BASE_URL ?>/post.php?cat=<?= $post['categoria'] ?>&id=<?= $post['id'] ?>" class="link-botao">Ler mais</a>
            </article>
        <?php endforeach; ?>
    </div>

    <hr>

    <h2>Mais Sobre RuneScape</h2>

    <div class="posts">
        <?php foreach ($posts_recentes_rs as $post): ?>
            <article class="post-card">
                <img src="<?= $post['imagem'] ?>" alt="<?= $post['titulo'] ?>">
                <h3><?= $post['titulo'] ?></h3>
                <p><?= $post['resumo'] ?></p>
                <small>Publicação: <?= $post['data'] ?></small>
                <a href="<?= $BASE_URL ?>/post.php?cat=rs&id=<?= $post['id'] ?>" class="link-botao">Ler mais</a>
            </article>
        <?php endforeach; ?>

        <a href="<?= $BASE_URL ?>/categoria.php?cat=rs" class="link-botao">Ver mais</a>
    </div>

    <hr>

    <h2>Mais Sobre DragonWilds</h2>

    <div class="posts">
        <?php foreach ($posts_recentes_dw as $post): ?>
            <article class="post-card">
                <img src="<?= $post['imagem'] ?>" alt="<?= $post['titulo'] ?>">
                <h3><?= $post['titulo'] ?></h3>
                <p><?= $post['resumo'] ?></p>
                <small>Publicação: <?= $post['data'] ?></small>
                <a href="<?= $BASE_URL ?>/post.php?cat=dw&id=<?= $post['id'] ?>" class="link-botao">Ler mais</a>
            </article>
        <?php endforeach; ?>

        <a href="<?= $BASE_URL ?>/categoria.php?cat=dw" class="link-botao">Ver mais</a>
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