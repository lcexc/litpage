<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('sidebar.php'); ?>
    <article class="content">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <div class="post">
        <div class="tit s"><a itemtype="url" href="<?php $this->permalink(); ?>"><?php $this->title() ?></a></div>
            <div class="text s">
                <?php $this->excerpt(200, '.....');  ?>
                 
            </div>
            <div class="">
                <a href="<?php $this->permalink();  ?>">阅读剩余部分 </a>
                <span><?php _e('作者: '); $this->author(); ?><?php _e('时间: ');  $this->date('F j, Y'); ?>
                <?php _e('分类: '); ?><?php $this->category(','); ?>
                <?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?><span>
            </div>
        </div>
        <div class="hh"></div>
        <?php endwhile; ?>
        <?php else: ?>
            <article class="">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </article>
    </div><!-- end #main -->

	
	<?php $this->need('footer.php'); ?>
