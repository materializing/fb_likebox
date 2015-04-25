<?php
/**
 * [ADMIN] Facebook LikeBox
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			FbLikebox
 * @license			MIT
 */
/**
 * システムナビ
 */
$config['BcApp.adminNavi.fb_likebox'] = array(
		'name'		=> 'facebook Likebox プラグイン',
		'contents'	=> array(
			array('name' => '表示設定', 
				'url' => array('admin' => true, 'plugin' => 'fb_likebox', 'controller' => 'fb_likebox_configs', 'action' => 'index'))
	)
);
