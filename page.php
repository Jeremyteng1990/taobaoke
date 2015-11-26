<?php get_header(); ?>

<div id="container">
<div id="content">

	<!--post-->
	 <div class="post">
		<h2><?php the_title(); ?></h2>
		   <div class="postmeta">
		   <span>发布时间：<?php the_time('Y-m-d') ?></span>
                   <span>人气：<?php if(function_exists('the_views')) { the_views(); } ?></span>
                   <span>作者：<?php the_author() ?></span>
                   <span><?php comments_popup_link ('抢沙发','1条评论','%条评论'); ?></span>

                   <span><?php edit_post_link('编辑', ' [ ', ' ] '); ?></span>
		   </div>
		<div class="entry">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<p>  <?php the_content(); ?></p>
              <?php endwhile; ?>
              <?php endif; ?> 
                </div>
		
		<div class="tags">
				<p>本文标签：<?php the_tags(); ?></p>
				<p>文章链接： <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_permalink() ?></a></p>

		</div>
		<div class="post-nav">
<p>
<?php next_post_link($format='上一篇： %link', $link='%title', $in_same_cat = true, $excluded_categories = '') ?>  </p><br>
<p>
<?php previous_post_link($format='下一篇：  %link', $link='%title', $in_same_cat = true, $excluded_categories = '') ?></p>
		</div>
	</div>
	<!--post End-->

		<div class="related">
			<h3>相关文章</h3>
			<ul>
	    <?php $rand_posts=new WP_Query(); $rand_posts->query("showposts=10");?>
	<?php if($rand_posts->have_posts()): while($rand_posts->have_posts()): $rand_posts->the_post();?>
	<li><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></li>
	<?php endwhile; endif; wp_reset_postdata(); ?>
			</ul>
		</div>
		
		<div class="related">
			<h3>随机文章</h3>
			<ul>
	  <?php $rand_posts=new WP_Query(); $rand_posts->query("orderby=rand&showposts=10");?>
	<?php if($rand_posts->have_posts()): while($rand_posts->have_posts()): $rand_posts->the_post();?>
	<li><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></li>
         <?php endwhile; endif;wp_reset_postdata(); ?>								
			</ul>
		</div>
		
	</div>


<?php get_sidebar();?>
<?php get_footer(); ?>