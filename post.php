<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('sidebar.php'); ?>

   <article class="content">
    <div class="crumbs_patch">
            <a href="<?php $this->options->siteUrl(); ?>">Home</a> &raquo;</li>
            <?php if ($this->is('index')): ?><!-- 页面为首页时 -->
                Latest Post
            <?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
                <?php $this->category(); ?> &raquo; <?php $this->title() ?>
            <?php else: ?><!-- 页面为其他页时 -->
                <?php $this->archiveTitle(' &raquo; ','',''); ?>
            <?php endif; ?>
        </div>
    <div class="post_read">
        <h2 ><?php $this->title() ?></h2>
        <div class="post_info">
            <span>
                <?php _e('作者: '); $this->author(); ?>&nbsp;&nbsp;
                <?php _e('时间: ');  $this->date('F j, Y'); ?>&nbsp;&nbsp;
                <?php _e('分类: '); ?><?php $this->category(','); ?>
            </span>
        </div>
        <div class="post_content">
            <?php $this->content(); ?>
        </div>
        
   
            
        <ul class="post-near">
            <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
            <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
        </ul>
        <div class="hh"></div>
        <?php $this->need('comments.php'); ?>

      </div>   
    </article>

    

    
</div><!-- end #main-->


<?php $this->need('footer.php'); ?>
