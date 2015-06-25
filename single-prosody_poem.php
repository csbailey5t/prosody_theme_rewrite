<?php get_header(); ?>

<?php
    $poem_args = array(
        'post_type' => 'prosody_poem',
        'category_name' => 'featured'
        );
    $poems = new WP_Query( $poem_args );
?>


<div id="main">
<div class="container">
<div class="row">
<div class="content poem-home col-lg-8 col-md-8 col-sm-8">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="scrollfix">
                        <?php the_content(); ?>
                    </div>
                    <div class="row" id="utils">
                        <div class="col-sm-4-offset-8 col-md-4-offset-8 col-lg-4-offset-8 inner-util">
                        Show
                        <span>Stress <input id="togglestress" class="on" name="togglestress" value="on" type="checkbox" checked="checked"/></span>
                        <span>&#160;&#160;&#160;Foot division <input id="togglefeet" class="on" name="togglefeet" value="on" type="checkbox" checked="checked"/></span>
                        <span>&#160;&#160;&#160;Caesura <input id="togglecaesura" class="on" name="togglecaesura" value="on" type="checkbox"/></span>
                        </div>
                    </div>


    <?php endwhile; else: ?>

                <h2>Getting Started</h2>
                <p>Select a poem to begin.</p>

    <?php endif; ?>
</div><!-- ends .content -->

<div class="col-lg-4 col-md-4 col-sm-4">
    <?php get_sidebar(); ?>
</div>

</div><!-- ends row -->
</div><!-- ends .container -->

</div><!-- ends .main -->

<?php get_footer(); ?>
