<?php get_header(); ?>
<div class="blog">
    <div class="wrap">
        <h2> BLOG </h2>
        <div class="box-liste-posts">
            <?php
            $arg = array('post_type' => 'post', 'showposts' => 2);
            $my_posts = get_posts($arg);
            $count = 1;
            if ($my_posts):foreach ($my_posts as $post) :setup_postdata($post);
                    ?>
                    <div class="liste-posts <?= ($count == 2) ? 'segundo-posts' : "" ;?>">

                        <?php the_post_thumbnail(); ?>
                        <div class="box-content-post">
                            <h2><?php the_title(); ?></h2>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="custom_botao">Leia mais</a>
                        </div>
                    </div>
                    <?php
                    $count++;
                endforeach;
            endif;
            ?>
        </div>
    </div>
</div>
<!--quebra de div--->
<div class="clear"></div>
<div class="galeria">
    <div class="wrap">
        <h2>title branch </h2>
        <p>crie um novo branch chamado "funcionalidade_x" e selecione-o usando</p>
    </div>
</div>
<?php get_footer(); ?>
