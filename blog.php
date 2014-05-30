<?php get_header(); ?>
<div id="post">
	<!-- menu -->
	<div id="map">
		<div class="browse">现在位置： <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a></div>
		<div id="feed"><?php include(TEMPLATEPATH . '/includes/weibo2.php'); ?></div>
	</div>
	<!-- end: menu -->
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<div class="entry_box">
				<div class="box_entry">
					<div class="box_entry_title">
						<div class="ico"><?php if (get_option('swt_ico') == '显示') { ?><?php include('includes/cat_ico.php'); ?><?php } else { } ?></div>
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"><?php the_title(); ?></a><span class="new"><?php include('includes/new.php'); ?></span></h2>
						<div class="info">
							<span class="date"><?php the_time('Y年m月d日') ?></span>
							<span class="category"> &#8260; <?php the_category(', ') ?></span>&nbsp
							<?php include('includes/source.php'); ?>
							&#8260; <?php echo count_words ($text); ?>
							<span class="comment"> &#8260; <?php comments_popup_link('暂无评论', '评论 1 条', '评论 % 条'); ?></span>
							<?php if(function_exists('the_views')) { print ' &#8260; 阅读 '; the_views(); print ' 次';  } ?>
							<span class="edit"><?php edit_post_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '  ', '  '); ?></span>
						</div>
					</div>
					<?php if (is_sticky()) {echo '<div class="sticky-post"></div>';} ?>
					<div class="clear"></div>
					<!-- thumbnail -->
					<div class="thumbnail_box">
						<?php include('includes/thumbnail.php'); ?>
					</div>
					<div class="post_entry">
						<?php if (has_excerpt()){ ?><?php the_excerpt() ?><?php } else { echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 400,"..."); } ?>
						<div class="clear"></div>
						<span class="posttag"><?php the_tags('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ', ', ', ''); ?></span><span class="archive_more"><a href="<?php the_permalink() ?>" title="详细阅读 <?php the_title(); ?>" rel="bookmark" class="title">阅读全文</a></span>
						<div class="clear"></div>
					</div>
				</div>
				<i class="lt"></i>
				<i class="rt"></i>
			</div>	
			<div class="entry_box_b">
				<i class="lb"></i>
				<i class="rb"></i>
			</div>
		<!-- end: entry_box -->
		</div>
		<!-- ad -->
		<?php if ($wp_query->current_post == 0) : ?>
		<?php if (get_option('swt_adh') == '关闭') { ?>
		<?php { echo ''; } ?>
		<?php } else { include(TEMPLATEPATH . '/includes/ad_h.php'); } ?>
		<?php endif; ?>	
		<!-- end: ad -->
		<?php endwhile; ?>
		<?php endif; ?>
	<div id="pagenavi"><?php pagenavi(); ?></div>
	<div class="clear"></div>
</div>
<!-- end: post -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
