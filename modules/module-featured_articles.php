<!-- begin main wrapper for modules -->
 <div class="wrapper">
 <!-- header -->
	<header>
        <h1 class="module-header">
           <?php
                // populate the sub field
                the_sub_field("main_headline_copy");
            ?>
        </h1>
        <h3 class="vertcial_text">
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
        $color = get_sub_field('color');
        $text_color=get_sub_field('text_color');

        if(empty($text_color)) {
            $text_color = '#000';
        }
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
            <a href="#" class="read-more nodec"><?php echo $cta; ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="59.382" height="22.001" viewBox="0 0 59.382 22.001"><defs><style>.e{fill:<?php echo $text_color;?>;stroke-width: 2px;stroke: <?php echo $text_color;?>;}</style></defs><path class="e" d="M64.359,40.636h-53.8l7.646-7.646a1.033,1.033,0,1,0-1.461-1.461l-9.3,9.3a1.03,1.03,0,0,0-.439.843c0,.005,0,.01,0,.016s0,.022,0,.033a1.025,1.025,0,0,0,.056.289,1,1,0,0,0,.075.165,1.037,1.037,0,0,0,.088.132.97.97,0,0,0,.079.119l9.5,9.5a1.033,1.033,0,1,0,1.461-1.461L10.515,42.7H64.359a1.033,1.033,0,0,0,0-2.067Z" transform="translate(65.892 52.727) rotate(180)"/></svg>
            </a>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
