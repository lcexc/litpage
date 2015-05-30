<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>        
<div style="clear: both;">&nbsp;</div>
<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由<a href="http://www.typecho.org">Typecho</a>强力驱动'); ?>.
</footer><!-- end #footer -->
<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('js/blog.js'); ?>"></script>
</body>
</html>
