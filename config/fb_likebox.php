<?php
/**
 * [ADMIN] Facebook LikeBox
 *
 * @copyright		Copyright 2011 - 2012, materializing.
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			fb_likebox.config
 * @version			2.0.0
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
