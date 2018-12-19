<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="container-wrap">
			<div class="container container-message container-details">
					<div class="contar-wrap">
						<div class="item">
							<div class="item-box  layer-photos-demo1 layer-photos-demo">
								<h3>404 - <?php _e('页面没找到'); ?></h3>
								<p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
								<form method="post">
                <p><input type="text" name="s" class="text" autofocus /></p>
                <p><button type="submit" class="submit"><?php _e('搜索'); ?></button></p>
            </form>
								
							</div>
						</div>							
						
					</div>
			</div>
		</div>

	<?php $this->need('footer.php'); ?>
