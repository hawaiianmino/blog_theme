
<div class="floating">
<a href="#"><i class="fas fa-chevron-up"></i></a>
</div>

	<!-- footer-menu -->
	<div id="footer-menu">
		<div class="inner">
			<div class="footer-logo"><a href="/"><?php bloginfo('name'); ?></a></div><!-- /footer-logo -->
			<div class="footer-sub"><?php bloginfo('description'); ?></div><!-- /footer-sub -->

			<nav class="footer-nav">
                <?php
                    wp_nav_menu(
                    //.header-listを置き換えて、PC用メニューを動的に表示する
                    array(
                    'depth' => 1,
                    'theme_location' => 'footer', //グローバルメニューをここに表示すると指定
                    'container' => false,
                    'menu_class' => 'footer-list',
                    )
                    );
                ?>
			</nav>

		</div><!-- /inner -->
	</div><!-- /footer-menu -->



	<!-- footer -->
	<footer id="footer">
		<div class="inner">
			<div class="copy">&copy; 50storm WordPress theme All rights reserved.</div><!-- /copy -->
			<div class="by">Presented by <a href="https://ownedmedianoie.com" rel="noopener" target="_blank">Minoru Igarashi</a>
			</div><!-- /by -->

		</div><!-- /inner -->
    </footer><!-- /footer -->
    
<!-- ここからが追記部分 
------------------------------------------------------------------->
<?php get_template_part('template-parts/footersns'); ?>
<!-- ここまで追記部分 
------------------------------------------------------------------->

	<div class="floating">
		<a href="#"><i class="fas fa-chevron-up"></i></a>
	</div>

<?php wp_footer(); ?>
</body>
</html>