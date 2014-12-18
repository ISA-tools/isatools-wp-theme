<?php
/**
 * Template Name: Home Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header(); ?>

	<div class="site-content" style="width:100%">
		<div id="content" role="main">


<div>
<br/>
<p style="font-weight: normal; color: #666; font-size:1.2em; line-height: 26px; text-rendering: optimizelegibility;">
        The <strong>open source ISA metadata tracking tools </strong>help to manage an increasingly diverse set of life science, environmental
        and biomedical experiments that employing one or a combination of technologies.<br/><br/>

        Built around the ‘<strong>I</strong>nvestigation’ (the project context), ‘<strong>S</strong>tudy’ (a unit of research) and ‘<strong>A</strong>ssay’ (analytical measurement)
        general-purpose <strong>Tab</strong>ular format, the ISA tools helps you to provide rich description of the experimental metadata (i.e. sample
        characteristics, technology and measurement types, sample-to-data relationships)
        so that the resulting data and discoveries are reproducible and reusable.</p>
</div>
<br/>
<div style="margin-top: 30px">

    <div class="features grid_5">

        <div class="image-container">
            <img src="/wp-content/themes/isatools-wp-theme/img/features/curate.png" alt="curate"/>
        </div>

        <div class="feature-content">
            <h2>collect and curate, following standards</h2>

            <p>Describe the experimental steps using community-defined minimum reporting requirements and ontologies,
                where
                possible.</p>
        </div>
    </div>


    <div class="features grid_5">
        <div class="image-container">
            <img src="/wp-content/themes/isatools-wp-theme/img/features/store-search.png" alt="store"/>
        </div>
        <div class="feature-content">
            <h2>store and browse, locally or publicly</h2>

            <p>create your own repository to search and browse the experimental description and associated data making
                it close or open.</p>
        </div>
    </div>


    <div class="features grid_5">
        <div class="image-container">
            <img src="/wp-content/themes/isatools-wp-theme/img/features/submit.png"/>
        </div>

        <div class="feature-content">
            <h2>submit to public repositories</h2>

            <p>when required, reformat the experiments for submission to supported public repositories or directly
                export to
                those already using ISA-Tab.</p>
        </div>
    </div>


    <div class="features grid_5">

        <div class="image-container">
            <img src="/wp-content/themes/isatools-wp-theme/img/features/analyse.png"/>
        </div>
        <div class="feature-content">
            <h2>analyse with existing tools</h2>

            <p>upload experimental description and associated data to a growing number of well-known analysis systems,
                ISA connects with.</p>
        </div>
    </div>


    <div class="features grid_5">
        <div class="image-container">
            <img src="/wp-content/themes/isatools-wp-theme/img/features/rdf.png"/>
        </div>
        <div class="feature-content">
            <h2>release, reason and nanopublish</h2>

            <p>explore how to reason over your experiments, open them to the linked data universe, or publish
                nano-statements of your discoveries.</p>
        </div>
    </div>


    <div class="features grid_5">

        <div class="image-container">
            <img src="/wp-content/themes/isatools-wp-theme/img/features/publish.png"/>
        </div>

        <div class="feature-content">
            <h2>publish data along your article</h2>

            <p>directly export your experiments to the new generation of data journals, accepting submission in
                ISA-Tab.</p>
        </div>
    </div>


    <div class="features grid_5">

        <div class="image-container">
            <img src="/wp-content/themes/isatools-wp-theme/img/features/publish.png"/>
        </div>

        <div class="feature-content">
            <h2>deposit to scidata</h2>

            <p>directly export your experiments to the Scientific Data</p>
        </div>
    </div>

</div>

<div class="cf"></div>

<div class="latest-oupf-posts">

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


<h2 style="font-size:1.6em; font-weight: lighter; color: #aaa; text-align: center; margin-top: 20px">Latest News</h2>
<br/>
<?php
$args = array(
	'showposts' => '3',
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