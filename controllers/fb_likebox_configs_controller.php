<?php
/**
 * Facebook LikeBoxプラグイン設定コントローラー
 *
 * @copyright		Copyright 2011 - 2012, materializing.
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			fb_likebox.controllers
 * @version			2.0.0
 * @license			MIT
 */
class FbLikeboxConfigsController extends AppController {
/**
 * コントローラー名
 * @var string
 * @access public
 */
	var $name = 'FbLikeboxConfigs';
/**
 * モデル
 * @var array
 * @access public
 */
	var $uses = array('Plugin', 'FbLikebox.FbLikeboxConfig');
/**
 * コンポーネント
 * @var     array
 * @access  public
 */
	var $components = array('BcAuth','Cookie','BcAuthConfigure');
/**
 * ヘルパー
 * 
 * @var array
 * @access public
 */
	var $helpers = array(BC_FORM_HELPER);
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
		array('name' => 'Facebook LikeBox管理', 'url' => array('plugin' => 'fb_likebox', 'controller' => 'fb_likebox_configs', 'action' => 'index'))
	);
/**
 * beforeFilter
 * @return	void
 * @access	public
 */
	function beforeFilter(){
		
		parent::beforeFilter();
		// 指定なしの場合、正常にユーザー制限が掛からないので注意
		// $this->BcAuth->allow();

	}
/**
 * Facebook LikeBoxプラグイン設定
 * @return void
 * @access public
 */
	function admin_index() {

		if(!$this->data) {

			$data = $this->FbLikeboxConfig->findExpanded();
			
			// 返ってくる値をチェックして、空文字、FALSE、NULLの場合は0を入れる
			$data['show_faces'] = $this->FbLikeboxConfig->checkEmpty($data['show_faces']);
			$data['stream'] = $this->FbLikeboxConfig->checkEmpty($data['stream']);
			$data['header'] = $this->FbLikeboxConfig->checkEmpty($data['header']);

			$this->data = array('FbLikeboxConfig' => $data);

		} else {

			$this->FbLikeboxConfig->set($this->data);
			if($this->FbLikeboxConfig->validates()) {

				if($this->FbLikeboxConfig->saveKeyValue($this->data)) {

					$this->Session->setFlash('保存しました。');
					$this->redirect(array('action' => 'index'));

				} else {

					$this->Session->setFlash('保存に失敗しました。');
					$this->redirect(array('action' => 'index'));
					
				}

			} else {

				$this->Session->setFlash('入力値にエラーがあります。');

			}
			
		}

		// 選択値の設定値を取得
		$this->set('show_faces', $this->FbLikeboxConfig->show_faces);
		$this->set('stream', $this->FbLikeboxConfig->stream);
		$this->set('header', $this->FbLikeboxConfig->header);
		$this->set('color_scheme', $this->FbLikeboxConfig->color_scheme);
		$this->set('language', $this->FbLikeboxConfig->language);

		$this->pageTitle = 'Facebook LikeBoxプラグイン設定';
		$this->help = 'fb_likebox_configs_index';
	}

}
?>