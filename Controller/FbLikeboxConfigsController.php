<?php
/**
 * Facebook LikeBoxプラグイン設定コントローラー
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			FbLikebox
 * @license			MIT
 */
App::uses('BcPluginAppController', 'Controller');
class FbLikeboxConfigsController extends BcPluginAppController {
/**
 * コントローラー名
 * 
 * @var string
 */
	public $name = 'FbLikeboxConfigs';
	
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
	public $components = array('BcAuth', 'Cookie', 'BcAuthConfigure', 'RequestHandler');
	
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
		array('name' => 'Facebook LikeBox管理', 'url' => array('plugin' => 'fb_likebox', 'controller' => 'fb_likebox_configs', 'action' => 'index'))
	);
	
/**
 * Facebook LikeBoxプラグイン設定
 * 
 * @return void
 */
	public function admin_index() {
		if(!$this->request->data) {
			$data = $this->FbLikeboxConfig->findExpanded();
			// 返ってくる値をチェックして、空文字、FALSE、NULLの場合は0を入れる
			$data['show_faces'] = $this->FbLikeboxConfig->checkEmpty($data['show_faces']);
			$data['stream'] = $this->FbLikeboxConfig->checkEmpty($data['stream']);
			$data['header'] = $this->FbLikeboxConfig->checkEmpty($data['header']);
			$this->request->data = array('FbLikeboxConfig' => $data);
		} else {
			if($this->request->data['FbLikeboxConfig']['width']) {
				$this->request->data['FbLikeboxConfig']['width'] = $this->FbLikeboxConfig->convertNumeric($this->request->data['FbLikeboxConfig']['width']);
			}
			if($this->request->data['FbLikeboxConfig']['height']) {
				$this->request->data['FbLikeboxConfig']['height'] = $this->FbLikeboxConfig->convertNumeric($this->request->data['FbLikeboxConfig']['height']);
			}
			$this->FbLikeboxConfig->set($this->request->data);
			if($this->FbLikeboxConfig->validates()) {
				if($this->FbLikeboxConfig->saveKeyValue($this->request->data)) {
					$message = '保存しました。';
					$this->setMessage($message);
					$this->redirect(array('action' => 'index'));
				} else {
					$message = '保存に失敗しました。';
					$this->setMessage($message, true);
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$message = '入力値にエラーがあります。';
				$this->setMessage($message, true);
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
	
/**
 * 設定変更中の状態をリアルタイムで確認する
 * ajaxで呼び出される関数
 * Ajax用のログインボックスはレイアウトを外す
 * 
 * @return void
 */
	public function admin_ajax_show() {
		Configure::write('debug', 0);
		$this->layout = 'empty';
		$datas = $this->FbLikeboxConfig->findExpanded();

		if(!$this->request->data) {
			// DBから取得したデータを値をチェックして、空文字、FALSE、NULLの場合は0を入れる
			$datas['show_faces'] = $this->FbLikeboxConfig->checkEmpty($datas['show_faces']);
			$datas['stream'] = $this->FbLikeboxConfig->checkEmpty($datas['stream']);
			$datas['header'] = $this->FbLikeboxConfig->checkEmpty($datas['header']);
		} else {
			if($this->request->data['FbLikeboxConfig']['page_url']) {
				$datas['page_url'] = $this->request->data['FbLikeboxConfig']['page_url'];
			}
			if($this->request->data['FbLikeboxConfig']['width']) {
				$datas['width'] = $this->FbLikeboxConfig->convertNumeric($this->request->data['FbLikeboxConfig']['width']);
			}
			if($this->request->data['FbLikeboxConfig']['height']) {
				$datas['height'] = $this->FbLikeboxConfig->convertNumeric($this->request->data['FbLikeboxConfig']['height']);
			}
			if($this->request->data['FbLikeboxConfig']['color_scheme']) {
				$datas['color_scheme'] = $this->FbLikeboxConfig->convertFormValue($this->request->data['FbLikeboxConfig']['color_scheme']);
			}
			if($this->request->data['FbLikeboxConfig']['border_color']) {
				$datas['border_color'] = $this->request->data['FbLikeboxConfig']['border_color'];
			}
			if($this->request->data['FbLikeboxConfig']['show_faces']) {
				$datas['show_faces'] = $this->FbLikeboxConfig->convertFormValue($this->request->data['FbLikeboxConfig']['show_faces']);
			}
			if($this->request->data['FbLikeboxConfig']['stream']) {
				$datas['stream'] = $this->FbLikeboxConfig->convertFormValue($this->request->data['FbLikeboxConfig']['stream']);
			}
			if($this->request->data['FbLikeboxConfig']['header']) {
				$datas['header'] = $this->FbLikeboxConfig->convertFormValue($this->request->data['FbLikeboxConfig']['header']);
			}
			if($this->request->data['FbLikeboxConfig']['language']) {
				$datas['language'] = $this->FbLikeboxConfig->convertFormValue($this->request->data['FbLikeboxConfig']['language']);
			}
		}
		$this->request->data = array('FbLikeboxConfig' => $datas);
		
		// 選択値の設定値を取得
		$this->set('show_faces', $this->FbLikeboxConfig->show_faces);
		$this->set('stream', $this->FbLikeboxConfig->stream);
		$this->set('header', $this->FbLikeboxConfig->header);
		$this->set('color_scheme', $this->FbLikeboxConfig->color_scheme);
		$this->set('language', $this->FbLikeboxConfig->language);
	}
	
}
