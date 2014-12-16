<?php
/**
 * Template Name: Home Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header(); ?>

	<div class="site-content" style="width:100%">
		<div id="content" role="main">


            <div class="tweet-container" >
            <div id="twitter_icon" class="pull-left" style="padding-top: 15px; font-size: 1.5em">
                <i class="fa fa-twitter"></i>
            </div>



            <div class="tweet pull-left" id="twitter"><div class="spinner">
                                                        <div class="rect1"></div>
                                                        <div class="rect2"></div>
                                                        <div class="rect3"></div>
                                                        <div class="rect4"></div>
                                                        <div class="rect5"></div>
                                                      </div></div>
            <div class="cf"></div>
            </div>


<div class="latest-oupf-posts">


<hr/>
<h2 style="font-size:1.6em; font-weight: lighter; color: #aaa; text-align: center">Latest News</h2>
<br/>
<?php
$args = array(
	'showposts' => '4',
);
?>
<?php $the_query = new WP_Query( $args ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

<div class="blog-post">
<a href="<?php the_permalink() ?>">
<?php

$values= wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
$thumb = '';
if(count($values) > 0) {
   $thumb = $values['0'];
}
?>

<div class="picture_and_title" style="background: url(<?php echo $thumb; ?>) no-repeat; background-size: 100%;">
</div>
<div class="blog-post-item-content">
    <div class="date"><?php the_date(); ?></div>
        <div class="title"><?php the_title(); ?></div>

    </div>
</a>
</div>

<?php endwhile;?>

</div>

<div class="cf"></div>


</div>
<div class="cf"></div>



		</div><!-- #content -->
	</div><!-- #primary -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/wp-content/themes/isatools-wp-theme/assets/js/jquery.twitter.min.js"></script>

<script type="text/javascript">
    twitterFetcher.fetch('361827374599389184', 'twitter', 1, true, false, false);
</script>
<?php get_footer(); ?>