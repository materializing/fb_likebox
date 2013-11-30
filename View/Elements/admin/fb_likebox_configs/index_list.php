<?php
/**
 * [ADMIN] Facebook LikeBoxプラグイン表示画面
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			fb_likebox
 * @license			MIT
 */
?>
<div id="fb-root"></div>
<script src="http://connect.facebook.net/<?php echo $language[$this->request->data['FbLikeboxConfig']['language']] ?>/all.js#xfbml=1"></script>
<fb:like-box href="<?php echo $this->request->data['FbLikeboxConfig']['page_url'] ?>" 
			 width="<?php echo $this->request->data['FbLikeboxConfig']['width'] ?>" 
			 height="<?php echo $this->request->data['FbLikeboxConfig']['height'] ?>" 
			 colorscheme="<?php echo $color_scheme[$this->request->data['FbLikeboxConfig']['color_scheme']] ?>" 
			 show_faces="<?php echo $show_faces[$this->request->data['FbLikeboxConfig']['show_faces']] ?>" 
			 stream="<?php echo $stream[$this->request->data['FbLikeboxConfig']['stream']] ?>" 
			 header="<?php echo $header[$this->request->data['FbLikeboxConfig']['header']] ?>" 
			 border_color="<?php echo $this->request->data['FbLikeboxConfig']['border_color'] ?>">
</fb:like-box>
