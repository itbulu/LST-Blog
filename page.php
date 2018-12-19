<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="container-wrap">
			<div class="container container-message container-details container-about">
					<div class="contar-wrap">
					<h4 class="item-title">
							<p><i class="layui-icon layui-icon-home"></i>
							<?php if($this->is('index')):?><!-- 页面首页时 -->
	<a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>">首页</a> &gt;	
	<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
		<a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>">首页</a> &gt; <?php $this->category(); ?> &gt; 
	<?php else: ?><!-- 页面为其他页时 -->
		<a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>">首页</a> &gt; <?php $this->archiveTitle(' &raquo; ','',''); ?>
	<?php endif; ?>
							</p>
						</h4>
						<div class="item">
							<div class="item-box">
								<h3><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
								<p><?php $this->content(); ?></p>
								<div class="count layui-clear">
									<span class="pull-left">阅读 <em><?php get_post_view($this) ?></em></span>
									
								</div>
							</div>
						</div>			
					</div>
			</div>
		</div>


<?php $this->need('footer.php'); ?>
