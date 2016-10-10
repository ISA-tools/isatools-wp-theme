<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
</div>
	</div><!-- #main -->
<div class="clearfix"></div>


<div id="footer" class="centralPanel">

    <div id="footer_nav_wrapper">

        <div class="col col_wide">
			<img src="/wp-content/themes/isatools-wp-theme/img/footer_logo.svg" alt="ISA-Tools Logo" style="width: 30%; vertical-align: middle; padding-right: 30px;"/>
			<a href="http://www.elixir-uk.org/"><img src="/wp-content/uploads/2016/09/elixir-uk_transparent.png" alt="ELIXIR-UK Logo" style="width: 30%; vertical-align: middle"/></a>
        </div>

        <div class="col col_med">
            <h3>Related Links</h3>
            <ul>
                <li><a href="http://www.oerc.ox.ac.uk" target="_blank">Oxford e-Research Centre</a></li>
                <li><a href="http://www.ox.ac.uk" target="_blank">University of Oxford</a></li>
                <li><a href="http://www.biosharing.org" target="_blank">BioSharing</a></li>
            </ul>
        </div>

        <div class="col col_med">
            <h3>Resources</h3>
            <ul>
                <li><a href="http://www.github.com/ISA-tools" target="_blank">Code</a></li>
                <li><a href="mailto:isatools@googlegroups.com">Contact us</a></li>
                <li><?php wp_loginout(); ?></li>
                <li><?php wp_register('',''); ?></li>
            </ul>
        </div>


    </div>

    <div id="footer_fineprint" align="center">
        <br/>

        ©2014-Present ISA-Tools | Designed by <a href="http://www.antarctic-design.co.uk" target="_blank"> Antarctic Design</a>.
    </div>

</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>