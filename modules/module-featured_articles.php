<!-- begin main wrapper for modules -->
 <div class="wrapper">
 <!-- header -->
	<header>
        <h1>
           <?php
                // populate the sub field
                the_sub_field("main_headline_copy");
            ?>
        </h1>
        <h3>
            <?php
                //
                the_sub_field("vertical_title");
            ?>
        </h3>
	</header>
 <!-- end header -->

 <?php

 if( have_rows('featured_articles') ): ?>
    <section class="columns">
        <?php while( have_rows('featured_articles') ): the_row();
        $category = get_sub_field('category');
        $subtitle = get_sub_field('subtitle');
        $cta = get_sub_field('cta');
        $image = get_sub_field('image');
        ?>
        <div class="column">
        <?php if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
            <a href="#" class="nodec"><p class="title-header-one"><?php echo $category; ?></p></a>
            <a href="#" class="nodec">
                <h2 class="title-header-two">
                    <?php echo $subtitle; ?>
                </h2>
            </a>
            <a href="#" class="read-more nodec"><?php echo $cta; ?><i class="arrow">→</i></a>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
