<?php
/**
 * [ADMIN] Facebook LikeBoxプラグイン ajax用 表示画面
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			fb_likebox
 * @license			MIT
 */
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $language[$this->data['FbLikeboxConfig']['language']] ?>/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" 
	 data-href="<?php echo $this->data['FbLikeboxConfig']['page_url'] ?>" 
	 data-width="<?php echo $this->data['FbLikeboxConfig']['width'] ?>" 
	 data-height="<?php echo $this->data['FbLikeboxConfig']['height'] ?>" 
	 data-show-faces="<?php echo $show_faces[$this->data['FbLikeboxConfig']['show_faces']] ?>" 
	 data-colorscheme="<?php echo $color_scheme[$this->data['FbLikeboxConfig']['color_scheme']] ?>" 
	 data-stream="<?php echo $stream[$this->data['FbLikeboxConfig']['stream']] ?>" 
	 data-header="<?php echo $header[$this->data['FbLikeboxConfig']['header']] ?>" 
	 data-border-color="<?php echo $this->data['FbLikeboxConfig']['border_color'] ?>">
</div>
