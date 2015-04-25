<?php
/**
 * [ADMIN] Facebook LikeBoxプラグイン ajax用 表示画面
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			FbLikebox
 * @license			MIT
 */
$height = $this->request->data['FbLikeboxConfig']['height'];
if ($height) {
	$height = $height + 30;
	$height = $height .'px';
} else {
	$height = '570px';
}
?>
<div style="text-align: left; margin-left: 50px; height: <?php echo $height ?>">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $language[$this->request->data['FbLikeboxConfig']['language']] ?>/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" 
	 data-href="<?php echo $this->request->data['FbLikeboxConfig']['page_url'] ?>" 
	 data-width="<?php echo $this->request->data['FbLikeboxConfig']['width'] ?>" 
	 data-height="<?php echo $this->request->data['FbLikeboxConfig']['height'] ?>" 
	 data-show-faces="<?php echo $show_faces[$this->request->data['FbLikeboxConfig']['show_faces']] ?>" 
	 data-colorscheme="<?php echo $color_scheme[$this->request->data['FbLikeboxConfig']['color_scheme']] ?>" 
	 data-stream="<?php echo $stream[$this->request->data['FbLikeboxConfig']['stream']] ?>" 
	 data-header="<?php echo $header[$this->request->data['FbLikeboxConfig']['header']] ?>" 
	 data-border-color="<?php echo $this->request->data['FbLikeboxConfig']['border_color'] ?>">
</div>
</div>
