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
<script type="text/javascript">
$(window).load(function() {
	$("#FbLikeboxConfigPageUrl").focus();
});
</script>

<?php echo $bcForm->create('FbLikeboxConfig', array('action' => 'index')) ?>
<table cellpadding="0" cellspacing="0" class="list-table" id="ListTable">
	<tr>
		<th><span class="required">*</span>&nbsp;<?php echo $bcForm->label('FbLikeboxConfig.page_url', 'ページURL') ?></th>
		<td>
			<?php echo $bcForm->input('FbLikeboxConfig.page_url', array('type' => 'text', 'size' => '66')) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpPageUrl', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $bcForm->error('FbLikeboxConfig.page_url') ?>
					<div id="helptextPageUrl" class="helptext">
						<ul>
							<li>リンク先となるFacebookページのURLを指定します。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th><?php echo $bcForm->label('FbLikeboxConfig.width', '横幅サイズ') ?></th>
		<td>
			<?php echo $bcForm->input('FbLikeboxConfig.width', array('type' => 'text', 'size' => '8')) ?> px
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpWidth', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $bcForm->error('FbLikeboxConfig.width') ?>
					<div id="helptextWidth" class="helptext">
						<ul>
							<li>表示する幅をピクセル単位で指定します。</li>
							<li>初期表示、及び入力がない時の表示幅は292px(ピクセル)になります。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th><?php echo $bcForm->label('FbLikeboxConfig.width', '高さサイズ') ?></th>
		<td>
			<?php echo $bcForm->input('FbLikeboxConfig.height', array('type' => 'text', 'size' => '8')) ?> px
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpHeight', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $bcForm->error('FbLikeboxConfig.height') ?>
					<div id="helptextHeight" class="helptext">
						<ul>
							<li>表示する高さをピクセル単位で指定します。</li>
							<li>初期表示、及び入力がない時の表示高さは427px(ピクセル)になります。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th><?php echo $bcForm->label('FbLikeboxConfig.color_scheme', '色の指定') ?></th>
		<td>
			<?php echo $bcForm->input('FbLikeboxConfig.color_scheme', array('type' => 'select', 'options' => $color_scheme)) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpColorScheme', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $bcForm->error('FbLikeboxConfig.color_scheme') ?>
					<div id="helptextColorScheme" class="helptext">
						<ul>
							<li>表示する色を指定します。</li>
							<li>light：白(透明・背景色なし)、dark：黒</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th><?php echo $bcForm->label('FbLikeboxConfig.border_color', '枠線の色') ?></th>
		<td>
			<?php echo $bcForm->input('FbLikeboxConfig.border_color', array('type' => 'text', 'size' => '8')) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpBorderColor', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $bcForm->error('FbLikeboxConfig.border_color') ?>
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
		<th><?php echo $bcForm->label('FbLikeboxConfig.show_faces', '顔アイコン') ?></th>
		<td>
			<?php echo $bcForm->input('FbLikeboxConfig.show_faces', array('type' => 'checkbox')) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpShowFaces', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $bcForm->error('FbLikeboxConfig.show_faces') ?>
					<div id="helptextShowFaces" class="helptext">
						<ul>
							<li>プロフィールの写真を表示するかどうかを指定します。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th><?php echo $bcForm->label('FbLikeboxConfig.stream', 'ストリーム') ?></th>
		<td>
			<?php echo $bcForm->input('FbLikeboxConfig.stream', array('type' => 'checkbox')) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpStream', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $bcForm->error('FbLikeboxConfig.stream') ?>
					<div id="helptextStream" class="helptext">
						<ul>
							<li>ページのウォールから最新の記事(ストリーム)を表示するかどうかを指定します。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th><?php echo $bcForm->label('FbLikeboxConfig.header', 'ヘッダー タイトル') ?></th>
		<td>
			<?php echo $bcForm->input('FbLikeboxConfig.header', array('type' => 'checkbox')) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpHeader', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $bcForm->error('FbLikeboxConfig.header') ?>
					<div id="helptextHeader" class="helptext">
						<ul>
							<li>表示枠上部のヘッダー部分で、Facebook表示を行うかどうかを指定します。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th><?php echo $bcForm->label('FbLikeboxConfig.language', '表示言語') ?></th>
		<td>
			<?php echo $bcForm->input('FbLikeboxConfig.language', array('type' => 'select', 'options' => $language)) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpLanguage', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $bcForm->error('FbLikeboxConfig.language') ?>
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
	<?php echo $bcForm->submit('保　存', array('div' => false, 'class' => 'button')) ?>
</div>

<?php echo $bcForm->end() ?>


<h3>現在の表示状態</h3>

<div class="align-center">
	<div id="DataList"><?php $bcBaser->element('fb_likebox_configs/index_list') ?></div>
</div>
