<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle('', '', '_'); ?><?php $this->options->title(); ?>
<?php if($this->is('index')): ?>_<?php $this->options->subtitle() ?><?php endif; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('layui/css/layui.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/mian.css'); ?>">
    <?php if($this->is('index')): ?>
	<meta name="description" content="<?php $this->options->description() ?>" />
	<meta name="keywords" content="<?php $this->options->keywords() ?>" />
   <?php else: ?>
   	<?php $this->header(); ?><?php endif; ?>
</head>
<body class="lay-blog">
		<div class="header">
			<div class="header-wrap">
				<h1 class="logo pull-left">
					<?php if ($this->options->logoUrl): ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                </a>
            <?php else: ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
        	    <p class="description"><?php $this->options->description() ?></p>
            <?php endif; ?>
				</h1>
				<form class="layui-form blog-seach pull-left" action="<?php $this->options->siteUrl(); ?>">
					<div class="layui-form-item blog-sewrap">
					    <div class="layui-input-block blog-sebox">
					      <i class="layui-icon layui-icon-search"></i>
					      <input type="text" id="s" name="s" name="title" lay-verify="title" autocomplete="off"  class="layui-input">
					    </div>
					</div>
                </form>
                
               <div class="blog-nav pull-right">
					<ul class="layui-nav pull-left">
                      <li class="layui-nav-item"><a<?php if($this->is('index')): ?> class="layui-this"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
                      <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                   <li class="layui-nav-item"> <a<?php if($this->is('page', $pages->slug)): ?> class="layui-this"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                    <?php endwhile; ?>
					</ul>
					
				</div>
				<div class="mobile-nav pull-right" id="mobile-nav">
					<a href="javascript:;">
						<i class="layui-icon layui-icon-more"></i>
					</a>
				</div>
			</div>
			<ul class="pop-nav" id="pop-nav">
				<li class="layui-nav-item"><a<?php if($this->is('index')): ?> class="layui-this"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
                      <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                   <li class="layui-nav-item"> <a<?php if($this->is('page', $pages->slug)): ?> class="layui-this"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                    <?php endwhile; ?>
			</ul>
        </div>