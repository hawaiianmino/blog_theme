<?php
/*
Template Name:お問い合わせページ
*/
?>

<!-- ヘッダー -->
<?php get_header(); ?>
	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary" style="width:100%;">

			<?php if(function_exists('bcn_display')): ?>
				<!-- breadcrumb -->
				<div class="breadcrumb">
					<?php bcn_display(); ?>
				</div><!-- /breadcrumb -->
			<?php endif;?>

			<?php
				if(have_posts()):
					while(have_posts()):the_post();
			?>

				<!-- entry -->
				<article class="entry">

					<!-- entry-header -->
					<div class="entry-header">
						<?php
						$category = get_the_category();
						$cat_name = $category[0]->cat_name;
						$cat_id = $category[0]->cat_ID;
						$cat_link = get_category_link($cat_id);
						?>
						<div class="entry-label"><a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a></div><!-- /entry-item-tag -->
						<h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

						<!-- entry-meta -->
						
						<!-- <div class="entry-meta">
							<time class="entry-published" datetime="<?php the_time('c'); ?>">公開日 <?php the_time('Y/n/j'); ?></time>
						<?php if(get_the_modified_time('Y-m-d') !== get_the_time('Y-m-d')): ?>
							<time class="entry-updated" datetime="<?php the_time('Y/n/j'); ?>">最終更新日 <?php the_modified_time('Y/n/j'); ?></time>
						<?php endif;?>
						</div> -->
						
						<!-- /entry-meta -->

						<!-- entry-img -->
						<div class="entry-img">
							<?php if(has_post_thumbnail()){
								the_post_thumbnail('large');
							}
							?>
						</div><!-- /entry-img -->
					</div><!-- /entry-header -->

					<!-- entry-body -->
					<div class="entry-body">
						<?php the_content(); ?>
						<?php
							//改ページを有効にするための記述
							wp_link_pages(array(
								'before' => '<nav class="entry-links">',
								'after' => '</nav>',
								'link_before' => '',
								'link_after' => '',
								'next_or_number' => 'number',
								'separator' => '',
							));
						?>
					</div><!-- /entry-body -->

				</article> <!-- /entry -->
				<?php
					endwhile;
					endif;
				?>				
			</main><!-- /primary -->

			<!-- secondary -->


		</div><!-- /inner -->
	</div><!-- /content -->

	<!-- footer-menu -->
	<?php get_footer(); ?>