<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"/>
        <title> <?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="header"> 
            <div class="wrap"> 
                <h1><a href="<?= site_url(); ?>" title="<?php bloginfo('name'); ?>">VEJA AQUI</a></h1>
                <div class="infor">
                    <?php
                    $args = array('post_type' => 'page', 'pagename' => 'sobre');
                    $my_page = get_posts($args);

                    if ($my_page): foreach ($my_page as $post) : setup_postdata($post);
                            the_title();
                            the_content(); 
                            ?>
                            <a href="<?php the_permalink(); ?>" class="custom-botao">Leia mais</a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Nenhum conteúdo conteúdo inserido</p>
                    <?php endif; ?>

                </div>
            </div>
        </div>