<?php
/**
 * Facebook LikeBoxプラグイン表示コントローラー
 *
 * @copyright		Copyright 2011 - 2012, materializing.
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			fb_likebox.controllers
 * @version			2.0.0
 * @license			MIT
 */
class FbLikeboxController extends AppController {
/**
 * コントローラー名
 * @var string
 * @access public
 */
	var $name = 'FbLikebox';
/**
 * モデル
 * @var array
 * @access public
 */
	var $uses = array('Plugin', 'FbLikebox.FbLikeboxConfig');
/**
 * サブメニューエレメント
 *
 * @var array
 * @access public
 */
	var $subMenuElements = array('fb_likebox');
/**
 * ぱんくずナビ
 *
 * @var string
 * @access public
 */
	var $crumbs = array(
		array('name' => 'プラグイン管理', 'url' => array('plugin' => '', 'controller' => 'plugins', 'action' => 'index')),
		array('name' => 'Facebook LikeBox管理', 'url' => array('plugin' => 'fb_likebox', 'controller' => 'fb_likebox', 'action' => 'index'))
	);
/**
 * Facebook LikeBoxプラグイン表示
 *
 * @return void
 * @access public
 */
	function  admin_index() {

		$data = $this->FbLikeboxConfig->findExpanded();

		// 返ってくる値をチェックして、空文字、FALSE、NULLの場合は0を入れる
		$data['show_faces'] = $this->FbLikeboxConfig->checkEmpty($data['show_faces']);
		$data['stream'] = $this->FbLikeboxConfig->checkEmpty($data['stream']);
		$data['header'] = $this->FbLikeboxConfig->checkEmpty($data['header']);

		// 選択値の設定値を取得
		$this->set('show_faces', $this->FbLikeboxConfig->show_faces);
		$this->set('stream', $this->FbLikeboxConfig->stream);
		$this->set('header', $this->FbLikeboxConfig->header);
		$this->set('color_scheme', $this->FbLikeboxConfig->color_scheme);
		$this->set('language', $this->FbLikeboxConfig->language);

		$this->data = array('FbLikeboxConfig' => $data);

		$this->pageTitle = 'Facebook LikeBoxプラグイン';
		// $this->help = 'fb_likebox_index';

	}

}
?>