<?php
/**
 * [PUBLISH][SMARTPHONE] Facebook LikeBoxウィジェット
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			fb_likebox
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
	<?php if($data) : ?>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/<?php echo $data['language'] ?>/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div class="fb-like-box" 
		 data-href="<?php echo $data['page_url'] ?>" 
		 data-width="<?php echo $data['width'] ?>" 
		 data-height="<?php echo $data['height'] ?>" 
		 data-show-faces="<?php echo $data['show_faces'] ?>" 
		 data-colorscheme="<?php echo $data['color_scheme'] ?>" 
		 data-stream="<?php echo $data['stream'] ?>" 
		 data-header="<?php echo $data['header'] ?>" 
		 data-border-color="<?php echo $data['border_color'] ?>">
	</div>
	<?php endif ?>
</div>
