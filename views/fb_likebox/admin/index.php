<?php
/**
 * [ADMIN] Facebook LikeBoxプラグイン表示画面
 *
 * @copyright		Copyright 2011 - 2012, materializing.
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			fb_likebox.views
 * @version			2.0.0
 * @license			MIT
 */
?>
<div class="align-center">
<div id="fb-root"></div>
<script src="http://connect.facebook.net/<?php echo $language[$this->data['FbLikeboxConfig']['language']] ?>/all.js#xfbml=1"></script>
<fb:like-box href="<?php echo $this->data['FbLikeboxConfig']['page_url'] ?>" width="<?php echo $this->data['FbLikeboxConfig']['width'] ?>" height="<?php echo $this->data['FbLikeboxConfig']['height'] ?>" colorscheme="<?php echo $color_scheme[$this->data['FbLikeboxConfig']['color_scheme']] ?>" show_faces="<?php echo $show_faces[$this->data['FbLikeboxConfig']['show_faces']] ?>" stream="<?php echo $stream[$this->data['FbLikeboxConfig']['stream']] ?>" header="<?php echo $header[$this->data['FbLikeboxConfig']['header']] ?>" border_color="<?php echo $this->data['FbLikeboxConfig']['border_color'] ?>">
</fb:like-box>
</div>
