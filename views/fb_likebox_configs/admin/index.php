<?php
/**
 * [ADMIN] Facebook LikeBoxプラグイン設定画面
 *
 * @copyright		Copyright 2011 - 2012, materializing.
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			fb_likebox.views
 * @version			2.0.0
 * @license			MIT
 */
?>
<?php echo $formEx->create('FbLikeboxConfig', array('action' => 'index')) ?>
<table cellpadding="0" cellspacing="0" class="list-table" id="ListTable">
	<tr>
		<th class="col-head"><span class="required">*</span>&nbsp;
		<?php echo $formEx->label('FbLikeboxConfig.page_url', 'ページURL') ?></th>
		<td class="col-input">
			<?php echo $formEx->input('FbLikeboxConfig.page_url', array('type' => 'text', 'size' => '66')) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpPageUrl', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $formEx->error('FbLikeboxConfig.page_url') ?>
					<div id="helptextPageUrl" class="helptext">
						<ul>
							<li>リンク先となるFacebookページのURLを指定します。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th class="col-head">
		<?php echo $formEx->label('FbLikeboxConfig.width', '表示幅') ?></th>
		<td class="col-input">
			<?php echo $formEx->input('FbLikeboxConfig.width', array('type' => 'text', 'size' => '8')) ?> px
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpWidth', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $formEx->error('FbLikeboxConfig.width') ?>
					<div id="helptextWidth" class="helptext">
						<ul>
							<li>表示する幅をピクセル単位で指定します。</li>
							<li>初期表示、及び入力がない時の表示幅は292px(ピクセル)になります。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th class="col-head">
		<?php echo $formEx->label('FbLikeboxConfig.width', '表示高さ') ?></th>
		<td class="col-input">
			<?php echo $formEx->input('FbLikeboxConfig.height', array('type' => 'text', 'size' => '8')) ?> px
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpHeight', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $formEx->error('FbLikeboxConfig.height') ?>
					<div id="helptextHeight" class="helptext">
						<ul>
							<li>表示する高さをピクセル単位で指定します。</li>
							<li>初期表示、及び入力がない時の表示高さは427px(ピクセル)になります。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th class="col-head"><?php echo $formEx->label('FbLikeboxConfig.color_scheme', '色') ?></th>
		<td class="col-input">
			<?php echo $formEx->input('FbLikeboxConfig.color_scheme', array('type' => 'select', 'options' => $color_scheme)) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpColorScheme', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $formEx->error('FbLikeboxConfig.color_scheme') ?>
					<div id="helptextColorScheme" class="helptext">
						<ul>
							<li>表示する色を指定します。</li>
							<li>light：白(透明・背景色なし)、dark：黒</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th class="col-head"><?php echo $formEx->label('FbLikeboxConfig.show_faces', '顔アイコン') ?></th>
		<td class="col-input">
			<?php echo $formEx->input('FbLikeboxConfig.show_faces', array('type' => 'checkbox')) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpShowFaces', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $formEx->error('FbLikeboxConfig.show_faces') ?>
					<div id="helptextShowFaces" class="helptext">
						<ul>
							<li>プロフィールの写真を表示するかどうかを指定します。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th class="col-head"><?php echo $formEx->label('FbLikeboxConfig.stream', 'ストリーム') ?></th>
		<td class="col-input">
			<?php echo $formEx->input('FbLikeboxConfig.stream', array('type' => 'checkbox')) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpStream', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $formEx->error('FbLikeboxConfig.stream') ?>
					<div id="helptextStream" class="helptext">
						<ul>
							<li>ページのウォールから最新の記事(ストリーム)を表示するかどうかを指定します。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th class="col-head"><?php echo $formEx->label('FbLikeboxConfig.header', 'ヘッダー タイトル') ?></th>
		<td class="col-input">
			<?php echo $formEx->input('FbLikeboxConfig.header', array('type' => 'checkbox')) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpHeader', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $formEx->error('FbLikeboxConfig.header') ?>
					<div id="helptextHeader" class="helptext">
						<ul>
							<li>表示枠上部のヘッダー部分で、Facebook表示を行うかどうかを指定します。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th class="col-head">
		<?php echo $formEx->label('FbLikeboxConfig.border_color', '枠線の色') ?></th>
		<td class="col-input">
			<?php echo $formEx->input('FbLikeboxConfig.border_color', array('type' => 'text', 'size' => '8')) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpBorderColor', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $formEx->error('FbLikeboxConfig.border_color') ?>
					<div id="helptextBorderColor" class="helptext">
						<ul>
							<li>表示する枠線の色を、半角英字の色名で指定します。</li>
							<li>例：red、black、green　などなど。</li>
							<li>初期表示、及び入力がない時の色は薄い灰色になります。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th class="col-head"><?php echo $formEx->label('FbLikeboxConfig.language', '表示言語') ?></th>
		<td class="col-input">
			<?php echo $formEx->input('FbLikeboxConfig.language', array('type' => 'select', 'options' => $language)) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpLanguage', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $formEx->error('FbLikeboxConfig.language') ?>
					<div id="helptextLanguage" class="helptext">
						<ul>
							<li>表示する言語を指定します。</li>
							<li>「ja_JP」… 日本語</li>
							<li>「en_US」… 英語</li>
						</ul>
					</div>
		</td>
	</tr>
</table>

<div class="submit">
	<?php echo $formEx->submit('保　存', array('div' => false, 'class' => 'btn-orange button')) ?>
</div>

<?php echo $formEx->end() ?>

<br />
<h3>現在の表示状態</h3>

<div class="align-center">
<div id="fb-root"></div>
<script src="http://connect.facebook.net/<?php echo $language[$this->data['FbLikeboxConfig']['language']] ?>/all.js#xfbml=1"></script>
<fb:like-box href="<?php echo $this->data['FbLikeboxConfig']['page_url'] ?>" width="<?php echo $this->data['FbLikeboxConfig']['width'] ?>" height="<?php echo $this->data['FbLikeboxConfig']['height'] ?>" colorscheme="<?php echo $color_scheme[$this->data['FbLikeboxConfig']['color_scheme']] ?>" show_faces="<?php echo $show_faces[$this->data['FbLikeboxConfig']['show_faces']] ?>" stream="<?php echo $stream[$this->data['FbLikeboxConfig']['stream']] ?>" header="<?php echo $header[$this->data['FbLikeboxConfig']['header']] ?>" border_color="<?php echo $this->data['FbLikeboxConfig']['border_color'] ?>">
</fb:like-box>
</div>
