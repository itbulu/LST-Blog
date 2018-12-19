<?php
/**
 * 利用Layui轻博客模板整合至Typecho单栏博客主题。
 * 如果使用问题，可以到<a href="https://www.itbulu.com" target="_blank">www.itbulu.com</a>留言。或者关注微信公众号：itbulucom
 *
 * 免责声明：免费主题，我们没有义务和责任提供技术服务，需要用到正规网站，如果用于不良网站造成的后果我们不负责任。造成后果自行承担。
 *
 * @package Typecho Blog Theme 
 * @author 老蒋部落
 * @version 0.2
 * @link https://www.itbulu.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div class="container-wrap">
			<div class="container">
					<div class="contar-wrap">
						<h4 class="item-title">
							<p><i class="layui-icon layui-icon-speaker"></i>公告：<span><?php $this->options->notice() ?></span></p>
						</h4>
					<?php while($this->next()): ?>
						<div class="item">
							<div class="item-box  layer-photos-demo1 layer-photos-demo">
								<h2><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
								<h5>发布于：<span><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span></h5>
								<p><?php $this->content('- 阅读剩余部分 -'); ?></p>
								</div>
							<div class="comment count">
								<a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
								<?php $this->category(','); ?>
							</div>
						</div>
					<?php endwhile; ?>	
					
					</div>
					<?php $this->pageNav('前一页', '后一页'); ?>
			</div>
		</div>
<?php $this->need('footer.php'); ?>





