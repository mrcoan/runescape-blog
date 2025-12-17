<?php
include_once('templates/header.php');

$cat = $_GET['cat'];
$id = $_GET['id'];

if ($cat == 'rs') {
    include_once('data/rs/posts.php');
} elseif ($cat == 'dw') {
    include_once('data/dw/posts.php');
} else {
    echo "Post não encontrado";
    include_once('templates/footer.php');
    exit();
}

$post_encontrado = null;
foreach ($posts as $post) {
    if($post['id'] == $id) {
        $post_encontrado = $post;
        break;
    }
}

?>

<main>
    <article class="post-single">
        <h2><?= $post_encontrado['titulo'] ?></h2>
        <p><?= $post_encontrado['resumo'] ?></p>
        <img src="<?= $post_encontrado['imagem'] ?>" alt="<?= $post_encontrado['titulo'] ?>">
        <p><?= $post_encontrado['conteudo'] ?></p>
        <small>Publicação: <?= $post_encontrado['data'] ?></small>
    </article>

    <a href="<?= $BASE_URL ?>/categoria.php?cat=<?= $cat ?>" class="link-botao">Voltar</a>

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