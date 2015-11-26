<?php get_header(); ?>


<div id="S_mainbox2" class="w980">
<div class="S_mainleft">
		<!-- <p class="breadcrumb">当前位置：<a href="<?php// bloginfo('siteurl');?>">首页</a> > <?php// the_category(’, ‘) ?> > 正文 </p>   -->
           <h2 class="S_post_title"><?php the_title(); ?></h2>

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<div class="S_post_meta">
<span>网址：<a href="<?php bloginfo('siteurl');?>">www.babseat.com</a></span>
<span>来源于：<a href="<?php bloginfo('siteurl');?>">爱宝贝-儿童安全座椅</a></span>
<span>作者：<a href="<?php bloginfo('siteurl');?>" title="由 feixin 发布" rel="author">爱宝贝</a></span>
<span>发布日期：<?php the_time('Y-m-d') ?></span>
</div>

<div class="S_post_entry">
<?php the_content(); ?>  
       </div>

<?php endwhile; ?>
<?php endif; ?>  

<!--
<div class="S_post_tag">
          转载请保留出处：<strong> <?php //the_permalink() ?> </strong><br/>
	  文章标签： <?php //the_tags('', ', ', ''); ?>
</div>   
-->

<div class="S_next_pre">
<?php previous_post_link('上一篇：%link') ?> 
</div>  
<div class="S_next_pre">
<?php next_post_link('下一篇：%link') ?>
</div>

	<div class="S_next_pre"><span class="S_post_rela_body">

<!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
<a class="bds_qzone"></a>
<a class="bds_tsina"></a>
<a class="bds_tqq"></a>
<a class="bds_renren"></a>
<span class="bds_more"></span>
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=0" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END -->

       </span> </div>
<?php comments_template(); ?>
			
 	<div class="S_post_rela_title"><span>相</span>关文章</div>
            <div class="S_next_pre"><span class="S_post_rela_body">
<?php wp_related_posts()?>

               </span> </div>
			  



	</div><!-- #mainleft -->
	
	



<?php get_sidebar();?>
<?php get_footer(); ?>