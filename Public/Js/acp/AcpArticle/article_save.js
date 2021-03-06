/** by zhengzhen */
var ajaxLoading = $('#J_AjaxLoading');
var preview = $('#J_Preview');

/*function upload_file(div_id)
{
	// ajax上传图片
	new AjaxUpload("#" + div_id + "_uploader", {
		action: "/AcpArticleAjax/uploadHandler",
		name: "imgFile",
		responseType: "json",
		onSubmit: function(){
			//alert('正在上传');
			//preview处的图片改为loading图片
			$('#' + div_id).find('.preview').removeClass('hide');
		},
		onChange: function(file, extension){
			if (extension && /^(jpg|png|jpeg|gif)$/.test(extension)) {
				return true;
			}
			else {
				alert('暂不支持该图片格式！');
				return false;
			}
		},
		onComplete: function(file, response){
			console.log(response);
			if (response.status === 0) {
				alert(response.msg);
			}
			else if (response.status === 1) {
				$('#' + div_id).find('#J_Preview').attr('src', response.img_url);
				$('#' + div_id).find('.preview').show();
				$('#' + div_id).find('#J_ImgUrl').val(response.img_url);
				$('#' + div_id).find('#add_li').hide();
			}
		}
	});
}
*/
function delImage() {
	var param = {};
	var _id = $('#J_ImgUrl').data('id');
	var imgUrl = $('#J_ImgUrl').val();
	
	if (_id != '') {
		param.id = _id;
	}
	if (imgUrl != '') {
		param.img_url = imgUrl;
	}
	$.ajax({
		url: '/AcpArticleAjax/delImage',
		type: 'post',
		data: param,
		dataType: 'json',
		beforeSend: function(){
			ajaxLoading.show();
		},
		success: function(data){
		//	console.log(data);
			if (data.status === 1) {
				$('#J_ImgUrl').attr('data-id', '').val(null);
				$('#J_Del').off('click', delImage);
				preview.removeAttr('src').parent().parent().addClass('hide');
				$('#J_Uploader').parent().removeClass('hide');
			}
			ajaxLoading.fadeOut();
		}
	});
}

/*KindEditor.ready( function (K) {
	var editor = K.create( 'textarea[name="contents"]' , {
		uploadJson : '/Acp/uploadHandler' ,
		width : '500px' ,
		height : '300px' ,
		minWidth : '500px' ,
		minHeight : '300px' ,
		fillDescAfterUploadImage : false,
		allowFileManager : false,
		items : [ 'bold' , 'italic' , 'underline' , '|' , 'insertorderedlist' , 'insertunorderedlist' , 'image' , 'multiimage' , 'link' , '|' , 'unlink' , 'removeformat' , 'forecolor' , 'hilitecolor' , 'fullscreen' ],
		afterCreate : function () {
			var self = this;
			K.ctrl(document, 13 , function () {
				self.sync();
				K( '#J_FormArticle' )[ 0 ].submit();
			});
			K.ctrl(self.edit.doc, 13 , function () {
				self.sync();
				K( '#J_FormArticle' )[ 0 ].submit();
			});
		},
		afterUpload : function(url) {
			$('#J_KindEditor').append('<input type="hidden" name="article_txt_images[]" value="' + url + '" />');
		}
	});
});
*/

$(function(){
	var imgUrl = $('#J_ImgUrl').val();
	if ('' != imgUrl) {
		ajaxLoading.show().parent().removeClass('hide');
		preview.attr('src', imgUrl);
		if (preview.prop('complete')) {
			_emuMaxWidth(preview);
			ajaxLoading.fadeOut();
			$('#J_Del').on('click', delImage);
			preview.fadeIn().parent().parent().hover(
				function(){
					if ($.browser.msie) {
						$('#J_Mask').show();
					}
					else {
						$('#J_Mask').fadeIn(300);
					}
				}, function(){
					if ($.browser.msie) {
						$('#J_Mask').hide();
					}
					else {
						$('#J_Mask').fadeOut(300);
					}
				}
			);
		}
		else {
			preview.on({
				'load': function(){
					_emuMaxWidth($(this));
					ajaxLoading.fadeOut();
					$('#J_Del').on('click', delImage);
					preview.fadeIn().parent().parent().hover(
						function(){
							if ($.browser.msie) {
								$('#J_Mask').show();
							}
							else {
								$('#J_Mask').fadeIn(300);
							}
						}, function(){
							if ($.browser.msie) {
								$('#J_Mask').hide();
							}
							else {
								$('#J_Mask').fadeOut(300);
							}
						}
					);
				},
				'error': function(){
					ajaxLoading.fadeOut();
				}
			});
		}
	}
	
	$("#J_FormArticle").validate({
		rules: {
			title: {
				required: true
			},
			sort_id: {
				equal_select: true
			},
			serial: {
				digits: true
			}
		},
		messages: {
			title: {
				required: "请输入标题"
			},
			sort_id: {
				equal_select: "请选择所属栏目"
			},
			serial: {
				digits: "请输入纯数字的排序号"
			}
		},
		errorPlacement: acp.form_ShowError,//显示出错信息(这段代码必须加)
		success:acp.form_HideError//验证成功隐藏错误信息(这段代码必须加)
	});
	
	// ajax上传图片
	new AjaxUpload("#J_Uploader", {
		action: "/AcpArticleAjax/uploadHandler",
		name: "imgFile",
		responseType: "json",
		onSubmit: function(){
			ajaxLoading.show().parent().removeClass('hide');
			$('#J_Uploader').parent().addClass('hide');
		},
		onChange: function(file, extension){
			if (extension && /^(jpg|png|jpeg|gif)$/.test(extension)) {
				return true;
			}
			else {
				$.jPops.alert({
					title:"提示",
					content:'暂不支持该图片格式！',
					okBtnTxt:"确定",
					callback:function(){
						return true;
					}
				});
				return false;
			}
		},
		onComplete: function(file, response){
		//	console.log(response);
			if (response.status === 0) {
				$.jPops.alert({
					title:"提示",
					content:response.msg,
					okBtnTxt:"确定",
					callback:function(){
						return true;
					}
				});
				ajaxLoading.parent().addClass('hide');
				$('#J_Uploader').parent().removeClass('hide');
			}
			else if (response.status === 1) {
				$('#J_ImgUrl').val(response.img_url);
				preview.attr('src', response.img_url);
				//等待图片加载完成
				preview.on({
					'load': function(){
						_emuMaxWidth($(this));
						ajaxLoading.fadeOut();
						$('#J_Del').on('click', delImage);
						preview.fadeIn().parent().parent().hover(
							function(){
								if ($.browser.msie) {
									$('#J_Mask').show();
								}
								else {
									$('#J_Mask').fadeIn(300);
								}
							}, function(){
								if ($.browser.msie) {
									$('#J_Mask').hide();
								}
								else {
									$('#J_Mask').fadeOut(300);
								}
							}
						);
					},
					'error': function(){
						ajaxLoading.fadeOut();
					}
				});
			}
		}
	});
	
	function _emuMaxWidth(_this) {
		//IE6,7,8不支持CSS的max-width属性的临时解决办法--!
		if ($.browser.msie) {
			var width = _this.width();
			var height = _this.height();
			var pWidth = _this.parent().width();
			var pHeight = _this.parent().height();
			
			if (width / height > pWidth / pHeight) {
				_this.css('width', _this.css('max-width'));
			}
			else {
				_this.css('width', '');
			}
		}
	}
});
