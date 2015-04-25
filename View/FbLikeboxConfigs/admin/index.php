<?php
/**
 * [ADMIN] Facebook LikeBoxプラグイン設定画面
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			FbLikebox
 * @license			MIT
 */
?>
<script type="text/javascript">
$(window).load(function() {
	$("#FbLikeboxConfigPageUrl").focus();
});

$(function() {
	$.ajax({
		type: "GET",
		url: $("#AjaxShowUrl").html(),
		dataType: "html",
		cache: false,
		success: function(result) {
			if (!result) {
				result = '取得できませんでした。';
			}
			$("#DataList").html(result);
		}
	});
});
</script>

<div class="display-none">
	<div id="AjaxShowUrl"><?php $this->BcBaser->url(array('action' => 'ajax_show')) ?></div>
</div>

<?php echo $this->BcForm->create('FbLikeboxConfig', array('action' => 'index')) ?>
<table cellpadding="0" cellspacing="0" class="list-table" id="ListTable">
	<tr>
		<th><?php echo $this->BcForm->label('FbLikeboxConfig.page_url', 'ページURL') ?>&nbsp;<span class="required">*</span></th>
		<td colspan="3">
			<?php echo $this->BcForm->input('FbLikeboxConfig.page_url', array('type' => 'text', 'size' => '66')) ?>
				<?php echo $this->Html->image('admin/icn_help.png', array('id' => 'helpPageUrl', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $this->BcForm->error('FbLikeboxConfig.page_url') ?>
					<div id="helptextPageUrl" class="helptext">
						<ul>
							<li>リンク先となるFacebookページのURLを指定します。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th><?php echo $this->BcForm->label('FbLikeboxConfig.title', 'ページ名') ?></th>
		<td colspan="3">
			<?php echo $this->BcForm->input('FbLikeboxConfig.title', array('type' => 'text', 'size' => '66', 'placeholder' => 'Facebook')) ?>
			<?php echo $this->BcBaser->img('admin/icn_help.png', array('id' => 'helpTitle', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
			<?php echo $this->BcForm->error('FbLikeboxConfig.title') ?>
			<div id="helptextTitle" class="helptext">
				<ul>
					<li>Facebookがダウンしている等、なんらかの理由によりPagePluginが表示できない場合に表示するテキストリンク用のテキストを指定できます。</li>
				</ul>
			</div>
		</td>
	</tr>
	<tr>
		<th><?php echo $this->BcForm->label('FbLikeboxConfig.width', '横幅サイズ') ?></th>
		<td>
			<?php echo $this->BcForm->input('FbLikeboxConfig.width', array('type' => 'text', 'size' => '8')) ?> px
				<?php echo $this->Html->image('admin/icn_help.png', array('id' => 'helpWidth', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $this->BcForm->error('FbLikeboxConfig.width') ?>
					<div id="helptextWidth" class="helptext">
						<ul>
							<li>表示する幅をピクセル単位で指定します。</li>
							<li>初期表示、及び入力がない時の表示幅は292px(ピクセル)になります。</li>
						</ul>
					</div>
		</td>
		<th><?php echo $this->BcForm->label('FbLikeboxConfig.width', '高さサイズ') ?></th>
		<td>
			<?php echo $this->BcForm->input('FbLikeboxConfig.height', array('type' => 'text', 'size' => '8')) ?> px
				<?php echo $this->Html->image('admin/icn_help.png', array('id' => 'helpHeight', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $this->BcForm->error('FbLikeboxConfig.height') ?>
					<div id="helptextHeight" class="helptext">
						<ul>
							<li>表示する高さをピクセル単位で指定します。</li>
							<li>初期表示、及び入力がない時の表示高さは427px(ピクセル)になります。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th><?php echo $this->BcForm->label('FbLikeboxConfig.show_faces', '顔アイコンの表示') ?></th>
		<td>
			<?php echo $this->BcForm->input('FbLikeboxConfig.show_faces', array('type' => 'checkbox')) ?>
				<?php echo $this->Html->image('admin/icn_help.png', array('id' => 'helpShowFaces', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $this->BcForm->error('FbLikeboxConfig.show_faces') ?>
					<div id="helptextShowFaces" class="helptext">
						<ul>
							<li>プロフィールの写真を表示するかどうかを指定します。</li>
						</ul>
					</div>
		</td>
		<th><?php echo $this->BcForm->label('FbLikeboxConfig.stream', 'ストリームの表示') ?></th>
		<td>
			<?php echo $this->BcForm->input('FbLikeboxConfig.stream', array('type' => 'checkbox')) ?>
				<?php echo $this->Html->image('admin/icn_help.png', array('id' => 'helpStream', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $this->BcForm->error('FbLikeboxConfig.stream') ?>
					<div id="helptextStream" class="helptext">
						<ul>
							<li>ページのウォールから最新の記事(ストリーム)を表示するかどうかを指定します。</li>
						</ul>
					</div>
		</td>
	</tr>
	<tr>
		<th><?php echo $this->BcForm->label('FbLikeboxConfig.header', 'ヘッダー タイトルの表示') ?></th>
		<td>
			<?php echo $this->BcForm->input('FbLikeboxConfig.header', array('type' => 'checkbox')) ?>
				<?php echo $this->Html->image('admin/icn_help.png', array('id' => 'helpHeader', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $this->BcForm->error('FbLikeboxConfig.header') ?>
					<div id="helptextHeader" class="helptext">
						<ul>
							<li>表示枠上部のヘッダー部分で、Facebook表示を行うかどうかを指定します。</li>
						</ul>
					</div>
		</td>
		<th><?php echo $this->BcForm->label('FbLikeboxConfig.language', '表示言語') ?></th>
		<td>
			<?php echo $this->BcForm->input('FbLikeboxConfig.language', array('type' => 'select', 'options' => $language)) ?>
				<?php echo $this->Html->image('admin/icn_help.png', array('id' => 'helpLanguage', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
					<?php echo $this->BcForm->error('FbLikeboxConfig.language') ?>
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
	<?php echo $this->BcForm->submit('保　存', array('div' => false, 'class' => 'button')) ?>
</div>
<?php echo $this->BcForm->end() ?>


<h3>現在の表示状態</h3>
<div class="align-center">
	<div id="DataList"></div>
</div>
