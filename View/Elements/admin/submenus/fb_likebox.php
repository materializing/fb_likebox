<?php
/**
 * [ADMIN] Facebook LikeBoxプラグイン 共通メニュー
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			FbLikebox
 * @license			MIT
 */
?>
<tr>
	<th>Facebook LikeBox管理メニュー</th>
	<td>
		<ul>
			<li><?php $this->BcBaser->link('Facebook LikeBoxプラグイン設定',array('controller' => 'fb_likebox_configs', 'action'=>'index')) ?></li>
		</ul>
	</td>
</tr>
