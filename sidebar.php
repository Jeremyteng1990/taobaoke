	<div id="S_sidebar">

		<div class="S_sidebox">
<!--<script type="text/javascript">BAIDU_CLB_fillSlot("484787");</script>  -->
<IFRAME align=center marginWidth=0 vspace=-0 marginHeight=0 src="<?php bloginfo('template_directory'); ?>/ju.php" frameBorder=no width=960 scrolling=no height=260  ></IFRAME>
		</div>

		
		
 <style type="text/css">
.S_sidebox p {
  text-align:left;
  padding:5px;
  }
 .S_sidebox span{
  text-align:left;
  padding:5px;
  color:red;
  font-size:18px;
 }
 </style>

		
 
	<div class="S_sidebox" >
	<p>在线客服一：小米</p>
	<p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=865224098&amp;site=qq&amp;menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:865224098:44" alt="点击这里给我发消息" title="点击这里给我发消息"></a>：18588402840</p>
    <p>手机：18588402840</p>
	<p>Email：<a href="mailto:luoyuebing@bltauto.com">xiaomi@babseat.com</a></p>
		
	=========================================
	<p>在线客服二：小天</p>
	<p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2896943531&amp;site=qq&amp;menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2896943531:44" alt="点击这里给我发消息" title="点击这里给我发消息"></a>：13510174919</p>
    <p>手机：13510174919</p>  
     <p>Email：<a href="mailto:hr@bltauto.com">xiaotian@babseat.com</a></p>
	 <span>官方QQ交流群：300708112</span></br>
	 <span>官方论坛：bbs.babseat.com</span>
	 =========================================
   
	</div>
	
		
		
		<div class="S_sidebox">
			<h3>本周热门</h3>
			<ul class="S_arclist">
<?php $pop = $wpdb->get_results("SELECT id, post_title,SUBSTRING(post_title,1,30) AS title_excerpt,comment_count
FROM {$wpdb->prefix}posts
WHERE post_type='post' AND post_status='publish' AND post_password=''
ORDER BY comment_count DESC LIMIT 10"); ?>
<ul>
<?php foreach($pop as $post) : ?>
<li><a href="<?php echo get_permalink($post->id); ?>" title="<?php echo $post->post_title; ?>"><?php echo $post->title_excerpt; ?></a></li>
<?php endforeach; ?>

			</ul>
		</div>
		
  <!--      <div class="S_sidebox">
			<h3>随机文章</h3>
			<ul class="S_arclist">
			 
	  <?php// $rand_posts=new WP_Query(); $rand_posts->query("orderby=rand&showposts=10");?>
	<?php //if($rand_posts->have_posts()): while($rand_posts->have_posts()): $rand_posts->the_post();?>
	<li><a href="<?php// echo get_permalink($post->ID); ?>"><?php //echo $post->post_title; ?></a></li>
	<?php// endwhile; endif;wp_reset_postdata(); ?>
			</ul>
		</div>
-->

		 <div class="S_sidebox">
			<h3>最新发布</h3>
			<ul class="S_arclist">
<?php $posts = get_posts( "category=-1,-9&numberposts=10" ); ?><?php if( $posts ) : ?><ul><?php foreach( $posts as $post ) : setup_postdata( $post ); ?><li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li><?php endforeach; ?></ul><?php endif; ?>   
  
			</ul>
		</div>
		


		
</div> 
<!-- #S_sidebar -->

</div>



