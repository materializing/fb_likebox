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
class FbLikeboxController extends BaserPluginAppController {
/**
 * コントローラー名
 * 
 * @var string
 * @access public
 */
	var $name = 'FbLikebox';
/**
 * モデル
 * 
 * @var array
 * @access public
 */
	var $uses = array('FbLikebox.FbLikeboxConfig');
/**
 * コンポーネント
 * 
 * @var     array
 * @access  public
 */
	var $components = array('BcAuth','Cookie','BcAuthConfigure');
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
 * beforeFilter
 * 
 * @return void
 * @access public
 */
	function beforeFilter(){

		parent::beforeFilter();
		$this->BcAuth->allow('get_fb_likebox');

	}
/**
 * Facebook LikeBox を表示する
 * 
 * @return array
 * @access public 
 */
	function get_fb_likebox () {

		$data = $this->FbLikeboxConfig->findExpanded();

		// 返ってくる値をチェックして、空文字、FALSE、NULLの場合は0を入れる
		$data['show_faces'] = $this->FbLikeboxConfig->checkEmpty($data['show_faces']);
		$data['stream'] = $this->FbLikeboxConfig->checkEmpty($data['stream']);
		$data['header'] = $this->FbLikeboxConfig->checkEmpty($data['header']);

		$show_faces = $this->FbLikeboxConfig->show_faces;
		$stream = $this->FbLikeboxConfig->stream;
		$header = $this->FbLikeboxConfig->header;
		$color_scheme = $this->FbLikeboxConfig->color_scheme;
		$language = $this->FbLikeboxConfig->language;

		$data['show_faces'] = $show_faces[$data['show_faces']];
		$data['stream'] = $stream[$data['stream']];
		$data['header'] = $header[$data['header']];
		$data['color_scheme'] = $color_scheme[$data['color_scheme']];
		$data['language'] = $language[$data['language']];
		
		return $data;

	}

}
