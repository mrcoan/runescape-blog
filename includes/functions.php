<?php

function agruparPosts($array1, $array2) {
    $array_geral = array_merge($array1, $array2);
    return $array_geral;
}

function mostrarPostsRecentes($array) {
    $posts_recentes = array_slice($array, 0, 3);
    return $posts_recentes;
}