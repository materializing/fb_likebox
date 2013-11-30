<?php
/**
 * Facebook LikeBoxプラグイン表示コントローラー
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			fb_likebox
 * @license			MIT
 */
App::uses('BcPluginAppController', 'Controller');
class FbLikeboxController extends BcPluginAppController {
/**
 * コントローラー名
 * 
 * @var string
 */
	public $name = 'FbLikebox';
	
/**
 * モデル
 * 
 * @var array
 */
	public $uses = array('FbLikebox.FbLikeboxConfig');
	
/**
 * コンポーネント
 * 
 * @var     array
 */
	public $components = array('BcAuth','Cookie','BcAuthConfigure');
	
/**
 * サブメニューエレメント
 *
 * @var array
 */
	public $subMenuElements = array('fb_likebox');
	
/**
 * ぱんくずナビ
 *
 * @var string
 */
	public $crumbs = array(
		array('name' => 'プラグイン管理', 'url' => array('plugin' => '', 'controller' => 'plugins', 'action' => 'index')),
		array('name' => 'Facebook LikeBox管理', 'url' => array('plugin' => 'fb_likebox', 'controller' => 'fb_likebox', 'action' => 'index'))
	);
	
/**
 * beforeFilter
 * 
 * @return void
 */
	public function beforeFilter(){
		parent::beforeFilter();
		$this->BcAuth->allow('get_fb_likebox');
	}
	
/**
 * Facebook LikeBox を表示する
 * 
 * @return array
 */
	public function get_fb_likebox () {
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
