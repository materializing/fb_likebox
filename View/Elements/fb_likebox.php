<?php
/**
 * [PUBLISH] Facebook LikeBox
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			FbLikebox
 * @license			MIT
 */
?>
<?php if($data) : ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $data['language'] ?>/sdk.js#xfbml=1&version=<?php echo h(Configure::read('FbLikebox.sdk_version')) ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" 
	 data-href="<?php echo $data['page_url'] ?>" 
	 data-width="<?php echo $data['width'] ?>" 
	 data-height="<?php echo $data['height'] ?>" 
	 data-hide-cover="<?php echo $data['header'] ?>" 
	 data-show-facepile="<?php echo $data['show_faces'] ?>" 
	 data-show-posts="<?php echo $data['stream'] ?>">
	<div class="fb-xfbml-parse-ignore">
		<blockquote cite="<?php echo $data['page_url'] ?>">
			<a href="<?php echo $data['page_url'] ?>">Facebook</a>
		</blockquote>
	</div>
</div>
<?php endif ?>
