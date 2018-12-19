<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="footer">
			<p>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.</p>			
		</div>
	<script src="<?php $this->options->themeUrl('layus/layui.js'); ?>"></script>
	
<?php $this->footer(); ?>
</body>
</html>
