<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>La Pizzeria</title>
        <?php wp_head(); ?> <!-- Usado para chamar o stylesheet para o documento -->
    </head>

    <body>

    <header class="site-header">
        <div class="logo">
            <a href="<?php echo esc_url (home_url('/')) ?>"> <!-- Insere o link da home no logo esc_url() -->
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Logo" class="logoimage">
            </a>
        </div>
