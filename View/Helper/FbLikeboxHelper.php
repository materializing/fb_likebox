<?php
/**
 * [Helper] FbLikebox
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			FbLikebox
 * @license			MIT
 */
class FbLikeboxHelper extends AppHelper {
/**
 * ヘルパー
 *
 * @var array
 */
	public $helpers = array('BcBaser');
	
/**
 * Facebook Page Plugin を表示する
 *
 * @param array $options
 */
	public function showFbLikebox($options = array()) {
		$_options = array(
			'template' => 'fb_likebox'
		);
		$options = Hash::merge($_options, $options);
		$data = $this->getFbLikebox($options);
		$this->BcBaser->element('FbLikebox.' . $options['template'], array('data' => $data));
	}
	
/**
 * Facebook Page Plugin データを取得する
 * 
 * @return array
 */
	public function getFbLikebox() {
		if (ClassRegistry::isKeySet('FbLikebox.FbLikeboxConfig')) {
			$this->FbLikeboxConfig = ClassRegistry::getObject('FbLikebox.FbLikeboxConfig');
		} else {
			$this->FbLikeboxConfig = ClassRegistry::init('FbLikebox.FbLikeboxConfig');
		}
		$data = $this->getData();
		return $data;
	}
	
/**
 * Facebook LikeBox を表示する
 * 
 * @return array
 */
	public function getData() {
		$data = $this->FbLikeboxConfig->findExpanded();
		
		// 返ってくる値をチェックして、空文字、FALSE、NULLの場合は0を入れる
		$data['show_faces'] = $this->FbLikeboxConfig->checkEmpty($data['show_faces']);
		$data['stream'] = $this->FbLikeboxConfig->checkEmpty($data['stream']);
		$data['header'] = $this->FbLikeboxConfig->checkEmpty($data['header']);
		
		$show_faces = $this->FbLikeboxConfig->show_faces;
		$stream = $this->FbLikeboxConfig->stream;
		$header = $this->FbLikeboxConfig->header;
		$language = $this->FbLikeboxConfig->language;
		
		$data['show_faces'] = $show_faces[$data['show_faces']];
		$data['stream'] = $stream[$data['stream']];
		$data['header'] = $header[$data['header']];
		$data['language'] = $language[$data['language']];
		
		$_data['FbLikebox'] = $data;
		$data = $_data;
		return $data;
	}
	
}
