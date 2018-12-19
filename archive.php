<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="container-wrap">
			<div class="container">
					<div class="contar-wrap">
						<h4 class="item-title">
							<p><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></p>
                        </h4>
                    <?php if ($this->have()): ?>
					<?php while($this->next()): ?>
						<div class="item">
							<div class="item-box  layer-photos-demo1 layer-photos-demo">
								<h3><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
								<h5>发布于：<span><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span></h5>
								<p><?php $this->content('- 阅读剩余部分 -'); ?></p>
								</div>
							<div class="comment count">
								<a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
								<?php $this->category(','); ?>
							</div>
						</div>
					<?php endwhile; ?>	
					<?php else: ?>
           <div class="item-box  layer-photos-demo1 layer-photos-demo">
                <h3><?php _e('没有找到内容'); ?></h3>
            </div>
        <?php endif; ?>
					</div>
					<?php $this->pageNav('前一页', '后一页'); ?>
			</div>
		</div>
	<?php $this->need('footer.php'); ?>
