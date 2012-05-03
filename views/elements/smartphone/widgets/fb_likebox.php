<?php
/**
 * [PUBLISH][SMARTPHONE] Facebook LikeBoxウィジェット
 *
 * @copyright		Copyright 2011 - 2012, materializing.
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			fb_likebox.views
 * @version			2.0.0
 * @license			MIT
 */
$FbLikeboxConfig = ClassRegistry::init('FbLikebox.FbLikeboxConfig');
$url = '/fb_likebox/fb_likebox/get_fb_likebox';
$data = $this->requestAction($url);
?>
<div class="widget widget-fb_likebox widget-fb_likebox-<?php echo $id ?>">
<?php if($name && $use_title): ?>
<h2><?php echo $name ?></h2>
<?php endif ?>
<div id="fb-root"></div>
<script src="http://connect.facebook.net/<?php echo $data['language'] ?>/all.js#xfbml=1"></script>
<fb:like-box href="<?php echo $data['page_url'] ?>" 
			 width="<?php echo $data['width'] ?>" 
			 height="<?php echo $data['height'] ?>" 
			 colorscheme="<?php echo $data['color_scheme'] ?>" 
			 show_faces="<?php echo $data['show_faces'] ?>" 
			 stream="<?php echo $data['stream'] ?>" 
			 header="<?php echo $data['header'] ?>" 
			 border_color="<?php echo $data['border_color'] ?>">
</fb:like-box>
</div>
