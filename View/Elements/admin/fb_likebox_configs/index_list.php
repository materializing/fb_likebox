<?php
/**
 * [ADMIN] Facebook LikeBoxプラグイン表示画面
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			FbLikebox
 * @license			MIT
 */
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $language[$this->request->data['FbLikeboxConfig']['language']] ?>/sdk.js#xfbml=1&version=<?php echo h(Configure::read('FbLikebox.sdk_version')) ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" 
	 data-href="<?php echo $this->request->data['FbLikeboxConfig']['page_url'] ?>" 
	 data-width="<?php echo $this->request->data['FbLikeboxConfig']['width'] ?>" 
	 data-height="<?php echo $this->request->data['FbLikeboxConfig']['height'] ?>" 
	 data-hide-cover="<?php echo $header[$this->request->data['FbLikeboxConfig']['header']] ?>" 
	 data-show-facepile="<?php echo $show_faces[$this->request->data['FbLikeboxConfig']['show_faces']] ?>" 
	 data-show-posts="<?php echo $stream[$this->request->data['FbLikeboxConfig']['stream']] ?>">
	<div class="fb-xfbml-parse-ignore">
		<blockquote cite="<?php echo $this->request->data['FbLikeboxConfig']['page_url'] ?>">
			<a href="<?php echo $this->request->data['FbLikeboxConfig']['page_url'] ?>">$this->request->data['FbLikeboxConfig']['title']</a>
		</blockquote>
	</div>
</div>
