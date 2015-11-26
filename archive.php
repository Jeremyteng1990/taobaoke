<?php get_header(); ?>


<div id="S_mainbox2" class="w980">
	<div id="mainleft">
    	<!--<p class="breadcrumb">当前位置：<a href="<?php //bloginfo('siteurl');?>">首页</a> > 文章</p>-->
  
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>  	         
           <span class="wenzhang">
				<h1>
                	<p class="title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                    <p class="pinglun">发布日期：<?php the_time('Y-m-d') ?></p>
                </h1>

 
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php echo get_content_first_image(get_the_content());//echo catch_first_image() ?>" alt=""/></a>  
 



                <p class="zhaiyao">    
<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 400,"..."); ?>
<a href="<?php the_permalink(); ?>" rel="nofollow"> 阅读全文 &raquo;</a>
</p>
            </span>

<?php endwhile; ?>

<?php endif; ?>  
 	       	       
<span class="pagination"><div class='pagination'>

<?php if(function_exists('wp_pagenavi')){ wp_pagenavi(); } else { ?>
<div><?php next_posts_link( __( '下一页' ) ); ?></div>
<div><?php previous_posts_link( __( '上一页') ); ?></div>
<?php } ?>
</div>
</span>
	</div><!-- #mainleft -->

<?php get_sidebar();?>
<?php get_footer(); ?>
