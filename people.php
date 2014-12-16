<?php
/**
 * Template Name: People Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header(); ?>

	<div class="site-content" style="width:100%">
		<div id="content" role="main">


<div class="cf"></div>
<br/>
<div id="people">
<?php

$the_query = new WP_Query(array('post_type' => 'Person', 'posts_per_page' => -1, 'orderby' => 'id', 'order' =>'ASC'));

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) {
		$the_query->the_post();?>



                    <div id="<?php echo get_the_ID(); ?>" class="isatools-person">


                        <div class="person-image" style="background: url(<?php echo get_post_meta( get_the_ID(), 'person_info_profile_image', true );?>) no-repeat; background-size:100%" >
                            <div class="meta">
                                                        <div class="name"><a href="<?php echo the_permalink();?>"><?php echo the_title();?></a></div>
                                                        <div class="position"><?php echo get_post_meta( get_the_ID(), 'person_info_position', true );?></div>

                                                        <div class="links">
                                                            <?php
                                                                                                    if (get_post_meta( get_the_ID(), 'person_info_email', true ) != "") {
                                                                                                ?>
                                                                                                    <a href="mailto:<?php echo get_post_meta( get_the_ID(), 'person_info_email', true )?>"><i class="fa fa-envelope" style="font-size:1.6em"></i></a>

                                                                                                <?php
                                                                                                    }
                                                                                                ?>

                                                                                                <?php
                                                                                                    if (get_post_meta( get_the_ID(), 'person_info_website', true ) != "") {
                                                                                                ?>
                                                                                                    <a target="_blank" href="<?php echo get_post_meta( get_the_ID(), 'person_info_website', true )?>"><i class="fa fa-link" style="font-size:1.5em"></i></a>
                                                                                                <?php
                                                                                                    }
                                                                                                ?>

                                                                                                <?php
                                                                                                    if (get_post_meta( get_the_ID(), 'person_info_github', true ) != "") {
                                                                                                ?>
                                                                                                    <a target="_blank" style="width: 200px; overflow: scroll;" href="<?php echo get_post_meta( get_the_ID(), 'person_info_github', true )?>"><i class="fa fa-github-alt" style="font-size:1.6em"></i></a>
                                                                                                <?php
                                                                                                }
                                                                                                ?>

                                                                                                <?php
                                                                                                    if (get_post_meta( get_the_ID(), 'person_info_linkedin', true ) != "") {
                                                                                                ?>
                                                                                                    <a target="_blank" style="width: 200px; overflow: scroll;" href="<?php echo get_post_meta( get_the_ID(), 'person_info_linkedin', true )?>"><i class="fa fa-linkedin-square" style="font-size:1.6em"></i></a>
                                                                                                <?php } ?>

                                                                                                <?php
                                                                                                                                        if (get_post_meta( get_the_ID(), 'person_info_google_plus', true ) != "") {
                                                                                                                                    ?>
                                                                                                                                        <a target="_blank" style="width: 200px; overflow: scroll;" href="<?php echo get_post_meta( get_the_ID(), 'person_info_google_plus', true )?>"><i class="fa fa-google-plus-square" style="font-size:1.6em"></i></a>
                                                                                                                                    <?php } ?>
                                                        </div>
                                                    </div>
                        </div>


   </a>

                    </div>



<?php
	}

} else {
	echo '<p>Sorry, no people found...</p>';
}

/* Restore original Post Data */
wp_reset_postdata();
?>
</div>
<div class="cf"></div><br/>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>