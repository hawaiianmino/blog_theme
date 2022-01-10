<!-- secondary -->
<aside id="secondary">
    <div class="widget widget_text widget_custom_html">
        <div class="widget-title">プロフィール</div>

        <div class="wprofile">
            <div class="wprofile-img"><img src="<?php echo get_template_directory_uri(); ?>/img/profile.jpg" alt=""></div>
            <div class="wprofile-content">
                <p>
                    自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。自己紹介文が入ります。
                </p>
            </div>
            <!-- /wprofile-content -->
            <nav class="wprofile-sns">
                <div class="wprofile-sns-item m_twitter"><a href="" rel="noopener noreferrer" target="_blank"><i
                            class="fab fa-twitter"></i></a></div>
                <div class="wprofile-sns-item m_facebook"><a href="" rel="noopener noreferrer" target="_blank"><i
                            class="fab fa-facebook-f"></i></a></div>
                <div class="wprofile-sns-item m_instagram"><a href="" rel="noopener noreferrer" target="_blank"><i
                            class="fab fa-instagram"></i></a></div>
            </nav>
        </div><!-- /wprofile -->
    </div><!-- /widget -->
<?php if(is_active_sidebar('sidebar')): ?>
    <?php dynamic_sidebar('sidebar'); ?>
<?php endif; ?>
<!-- Twitter timeline -->
<!-- <a class="twitter-timeline" data-lang="ja" data-height="400" data-theme="light" href="https://twitter.com/Hawaiianmino?ref_src=twsrc%5Etfw">Tweets by Hawaiianmino</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
</aside><!-- secondary -->