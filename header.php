<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    
    <meta name="keywords" content="个人博客,浅笑博客,浅笑Blog,浅笑" />
    <meta name="description" content="浅笑blog http://stulinux.cn 是一个技术交流分享的个人博客,欢迎各位访问。" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

    <!-- 使用url函数转换相关路径 -->
  
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/po.css'); ?>">
    <link rel="icon" type="image/jpg" href="<?php $this->options->themeUrl('images/444.jpg'); ?>">
    
    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?php //$this->header(); 
            $this->header('keywords=&description=&rss1=&rss2=&atom=&generator=&template=&pingback=&xmlrpc=&wlw='); 
    ?>
    <style>
       
    </style>
    
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<div class="header">
        
        <div id="logo">
        <a href="http://stulinux.cn">浅笑blog</a><br>
        <div class="txt">
        真理惟一可靠的标准就是永远自相符合.
        </div>
        </div>
         <div class="search_bar">
            <form id="search" method="post" action="./" role="search">
                <input type="text" name="s" placeholder="输入关键字搜索"/>
                <input type="submit" id="searchbtn" value=""/>
            </form> 
         </div>  
         
         <nav id="navbar">
            <ul>
                <li><a<?php if($this->is('index')): ?> class="visted"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <li><a<?php if($this->is('page', $pages->slug)): ?> class="visted"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                    <?php endwhile; ?>
            </ul>
        </nav>
        
         
   <!-- end .header --></div>

            <div id="goTopBtn" style="display:none;">
            </div>
    <div class="container">