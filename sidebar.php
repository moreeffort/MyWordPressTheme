<div id="sidebar">
	<?php wp_reset_query();if ( is_home() ){ ?>
	<?php if (get_option('swt_tab') == '关闭') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/tab_h.php'); } ?>
	<?php } ?>

	<?php wp_reset_query();if (is_single() || is_page() || is_archive() || is_search() || is_404()) { ?>
	<?php if (get_option('swt_tab') == '关闭') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/tab.php'); } ?>
	<?php } ?>
	<?php wp_reset_query();if ( is_home()){ ?>
	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('首页小工具1') ) : ?>
		<?php endif; ?>
	</div>
	<?php } ?>

	<?php wp_reset_query();if (is_single() || is_page() || is_archive() || is_search() || is_404()) { ?>
	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('其它页面小工具1') ) : ?>
		<?php endif; ?>
	</div>
	<?php } ?>
	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('全部页面小工具') ) : ?>
		<?php endif; ?>
	</div>

	<?php if (get_option('swt_mimg') == '显示') { ?>
	<?php include('includes/mimg.php'); ?>
	<?php } else { } ?>

	<?php if (get_option('swt_mcat') == '显示') { ?>
	<?php wp_reset_query();if (is_single()) { ?>
		<?php include('includes/mcat.php'); ?>
	<?php } ?>
	<?php } else { } ?>

	<?php if (get_option('swt_wallreaders') == '关闭') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/top_comment.php'); } ?>

	<div class="widget">
		<?php wp_reset_query();if ( is_home() ){ ?>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('首页小工具2') ) : ?>
		<?php endif; ?>
		<?php } ?>
	</div>

	<?php wp_reset_query();if (is_single() || is_page() || is_archive() || is_search() || is_404()) { ?>
	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('其它页面小工具2') ) : ?>
		<?php endif; ?>
	</div>
	<?php } ?>

	<?php if (get_option('swt_statistics') == '关闭') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/statistics.php'); } ?>
	<div class="clear"></div>

	<?php wp_reset_query();if (is_single() || is_page() || is_archive() || is_search() || is_404()) { ?>
	<?php if (function_exists('zg_recently_viewed')): if (isset($_COOKIE["WP-LastViewedPosts"])) { ?>
	<?php if (get_option('swt_recently') == '关闭') { ?>
	<?php { echo ''; } ?>
	<?php } else { include('includes/history.php'); } ?>
	<?php } endif; ?>
	<?php } ?>
	
	<?php if(is_user_logged_in()){?>
	<div id="clustrmaps-widget"></div><script type="text/javascript">var _clustrmaps = {'url' : 'http://xinpeng.me', 'user' : 1144836, 'server' : '3', 'id' : 'clustrmaps-widget', 'version' : 1, 'date' : '2014-05-30', 'lang' : 'zh', 'corners' : 'square' };(function (){ var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'http://www3.clustrmaps.com/counter/map.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);})();</script><noscript><a href="http://www3.clustrmaps.com/user/a61117804"><img src="http://www3.clustrmaps.com/stats/maps-no_clusters/xinpeng.me-thumb.jpg" alt="Locations of visitors to this page" /></a></noscript>
	<?php }?>

</div>