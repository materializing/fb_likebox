<?php
/**
 * [PUBLISH][SMARTPHONE] Facebook LikeBoxウィジェット
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			FbLikebox
 * @license			MIT
 */
$data = $this->FbLikebox->getFbLikebox();
?>
<div class="widget widget-fb_likebox widget-fb_likebox-<?php echo $id ?>">
<?php if($name && $use_title): ?>
<h2><?php echo $name ?></h2>
<?php endif ?>
	<?php if($data) : ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $data['FbLikebox']['language'] ?>/sdk.js#xfbml=1&version=<?php echo h(Configure::read('FbLikebox.sdk_version')) ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" 
	 data-href="<?php echo $data['FbLikebox']['page_url'] ?>" 
	 data-width="<?php echo $data['FbLikebox']['width'] ?>" 
	 data-height="<?php echo $data['FbLikebox']['height'] ?>" 
	 data-hide-cover="<?php echo $data['FbLikebox']['header'] ?>" 
	 data-show-facepile="<?php echo $data['FbLikebox']['show_faces'] ?>" 
	 data-show-posts="<?php echo $data['FbLikebox']['stream'] ?>">
	<div class="fb-xfbml-parse-ignore">
		<blockquote cite="<?php echo $data['FbLikebox']['page_url'] ?>">
			<a href="<?php echo $data['FbLikebox']['page_url'] ?>"><?php echo $data['FbLikebox']['title'] ?></a>
		</blockquote>
	</div>
</div>
	<?php endif ?>
</div>
