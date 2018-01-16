<?php
    function lapizzeria_styles(){ //Importante colocar o nome do projeto para não haver confusão no arquivo

        // adding stylesheets

        wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '6.0.0' );
        wp_register_style('style', get_template_directory_uri() . '/css/style.css', array('normalize'), '1.0' ); //Uma forma segura de registar um arquivo CSS

        // Enqueue the style
            wp_enqueue_style('normalize');
            wp_enqueue_style('style'); // Coloca na fila. Tem que ter o mesmo nome que o de cima

    }

    add_action('wp_enqueue_scripts', 'lapizzeria_styles'); //colocando scripts e styles em um gancho comunicando o WP