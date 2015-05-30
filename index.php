<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤
 * 
 * @package My Theme 
 * @author stu
 * @version 0.1
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>


	
<article class="content">
		
	<?php while($this->next()): ?>
<article class='post'>
	<a href="<?php $this->permalink(); ?>"  >
	<div class='img-thumbnail'>
		<img src="" class="post-img" alt="<?php $this->title() ?>" />
	</div>
	</a>
												
	<h2 class='post-title entry-title'>
		<a href="<?php $this->permalink(); ?>" title='<?php $this->title() ?>'>
		<?php $this->title() ?>
		</a>
	</h2>
	<div class='post-info'>
		<span class='author-info'>
		<?php _e('作者: '); $this->author(); ?>
		</span>

		<span class='time-info'>
		<?php _e('时间: ');  $this->date('F j, Y'); ?>
		</span>

		<span class='comment-info'>
															
			<?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?>
															
		</span>
	</div>

	<p class='post-body entry-content' id='post-body-688'>
		<?php $this->excerpt(60, '.....');  ?>								
		
	</p>

	<a class='read-more' href="<?php $this->permalink(); ?>"   title='Social Media Validation Tools'> Read More </a>
	<div style='clear:both'></div>
										

</article>
<div class="hh"></div>
<?php endwhile; ?>

    <?php $this->pageNav('&laquo;', '&raquo;'); ?>

    <!-- end .content --></article>
  
			 
  
<?php $this->need('sidebar.php'); ?>
<div style="clear: both;">&nbsp;</div>
<!-- end .container --></div>

<?php $this->need('footer.php'); ?>
