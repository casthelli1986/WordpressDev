<?php // Abre a tag PHP

function phototricks_setup_theme() { // Minha função personalizada
    $supports = [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ]; // Array com algumas tags do html 5 que eu quero que o meu tema tenha suporte
    add_theme_support('html5', $supports); // Suporte para html 5
    add_theme_support('title-tag'); // Quero usar a tag title no título das páginas do site (dentro da <head>)
    add_theme_support('post-thumbnails'); // Suporte para adicionar imagens de capa nas páginas e posts
    add_theme_support('automatic-feed-links'); // Geração automática de links para leitores de Feed RSS

    $GLOBALS['content_width'] = 1130; // Largura total do conteúdo, para o ajuste de imagens e vídeos incorporados

    load_theme_textdomain( 'phototricks', get_template_directory() . '/languages' ); // Aponta para a pasta de traduções do tema
}

add_action('after_setup_theme', 'phototricks_setup_theme'); // Chamada da função personalizada com as configurações de suporte do tema

function phototricks_enqueue_scripts() {
    wp_enqueue_style('phototricks-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css'); // Adição dinâmica da folha de estilo personalizada do tema
}

add_action('wp_enqueue_scripts', 'phototricks_enqueue_scripts'); // Chamada para a função de configuração da folha de estilo personalizada