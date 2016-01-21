<?php 

/*Template Name: Gift-Vouchers Page*/

get_header(); ?>

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">
	
				<section class="page-content page-sidebar sidebar-content clearfix">
					<div class="page-sidebar-inner clearfix">
						<?php get_template_part('partials/only-text-sidebar'); ?>
						<div class="page-sidebar-article">
							<?php get_template_part('partials/only-text-loop'); ?>

							<iframe id="vch" src="https://vouchers.giftvouchersolutions.com/VoucherSales/default.aspx?c=551" width="100%" height="2000">&lt;p&gt;Your browser does not support iframes.&lt;/p&gt;
							</iframe>
							
						</div>
				    </div>
				</section> <!-- end article section -->

			

	</div><!-- .content-inner -->
</div><!-- .content -->

<?php get_footer(); ?>