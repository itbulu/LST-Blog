<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<blockquote class="layui-elem-quote layui-quote-nm"><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></blockquote>
   
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	 	<form method="post" action="<?php $this->commentUrl() ?>" class="layui-form layui-form-pane" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<blockquote class="layui-elem-quote layui-quote-nm topline"><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></blockquote>
            <?php else: ?>

   <div class="layui-form layui-form-pane">
       <div class="layui-form-item">
    <label for="author" class="layui-form-label"><?php _e('称呼'); ?></label>
    <div class="layui-input-block">
     <input type="text" name="author" id="author" class="layui-input" value="<?php $this->remember('author'); ?>" required/>
    </div></div>
 <div class="layui-form-item">
    <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="layui-form-label"<?php endif; ?>><?php _e('Email'); ?></label>
    <div class="layui-input-block"><input type="email" name="mail" id="mail" class="layui-input" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    </div>
  </div>                

<div class="layui-form-item">
    <label class="layui-form-label" for="url"<?php if ($this->options->commentsRequireURL): ?> <?php endif; ?>><?php _e('网站'); ?></label>
    <div class="layui-input-block"><input type="url" name="url" id="url" class="layui-input" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    </div>
  </div>
            <?php endif; ?>
            <div class="layui-form-item layui-form-text">
          <label for="textarea" class="layui-form-label"><?php _e('内容'); ?></label>
          <div class="layui-input-block">
            <textarea placeholder="请输入内容" class="layui-textarea" rows="5" cols="50" name="text" id="textarea" required><?php $this->remember('text'); ?></textarea>
          </div>
        </div>
       
<div class="layui-form-item">
          <button class="layui-btn layui-btn-normal" lay-submit lay-filter="formDemoPane" type="submit"><?php _e('提交评论'); ?></button>
        </div>
    		
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
