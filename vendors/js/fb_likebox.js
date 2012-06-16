$(function (){
/**
 * 
 */
	$("#FbLikeboxConfigWidth").change(function() {
		// URLを取得する
		var iframeUrl = $('.fb_iframe_widget iframe').attr('src');
		// var first = getUrlVars(iframeUrl)['width'];
alert(iframeUrl);
		// ベースとなるURLを取得する
		var baseUrl = getBaseUrl(iframeUrl)[0];

		// パラメータを取得する
		var param = getBaseUrl(iframeUrl)[1];
		var params = parseUrl(param);

		// 取得したURLの、差し替えたいパラメータ値を変更する

		// 差し替え後のURLを作成する
		// var params = getUrlVars(iframeUrl);
		var makeUrl = convertUrl(params, baseUrl);
alert(makeUrl);
		// iframeのsrcに差し替え後のURLを入れ込む
		$('.fb_iframe_widget iframe').attr('src', makeUrl);
		FB.XFBML.parse();

		/*
		$.ajax({
			type: 'POST',
			url: '/admin/fb_likebox/fb_likebox_configs/ajax_show',
			dataType: 'html',
			success: function(data){
				alert(data);
				if(data) {
					$("#dataTest").append(data);
					FB.XFBML.parse($('#dataTest')[0]);
				} else {
					alert('データが取得できませんでした');
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
				alert('処理に失敗しました');
			}
		});
		*/

	});
/**
 *
 */
	function convertUrl(params, baseUrl) {
		var _params = [];
		var connect = '&';

		for (var key in params) {

			if(params[key][0] == 'width') {
				var dataWidth = $('#FbLikeboxConfigWidth').val();
				params[key][1] = dataWidth;
				var style = $('.fb_iframe_widget span').attr('style');
				//$(style).html().replace(/width/, dataWidth);
				// alert(hoge);
			}
			//_params.push(key + '=' + params[key]);
			_params.push(params[key][0] + '=' + params[key][1]);
		}

		var makeUrl = baseUrl + connect + _params.join('&');
		return makeUrl;	
	}
/**
 *
 */
	function parseUrl(url) {
		var _url = url.split('&');

		//var params = {};
		var params = new Array();
		$(_url).each(function(){
			var param = this.split('=');
			//params[param[0]] = param[1];
			params.push(param);
		});

		return params;
	}
/**
 * ベースとなるURLを取得する
 */
	function getBaseUrl(url) {
		var hashes = url.split('?');
		return hashes;
	}
/**
 * URLのパラメータを取得する：配列キーにパラメータの、呼び出したいキーを指定する
 * 
 * @param string url
 */
	function getUrlVars(url) {
		var vars = [], hash;
		var hashes = url.split('&');
		// var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for(var i = 0; i < hashes.length; i++) {
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	}

});
