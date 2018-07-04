//发送请求
function sendRequest(url) {
    var xmlhttp = null;
    if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  
    if (xmlhttp!=null) {
        xmlhttp.open( "GET", url, false );
        xmlhttp.send( null );
        return xmlhttp.responseText
    } else {
        alert("Your browser does not support XMLHTTP.");
        return '';
    }
}




var Ossuploader = function() {	
	//更新列表（排序）
	function updatelist($dom) {
		var $list = $dom.find("ul.img-list");
		$list.sortable('destroy')
		if( $list.children().length>1 ){
			$list.sortable().bind('sortupdate', $dom, updateinput);
		}
		updateinput({data:$dom});

		$dom.find('.close').click(function(){
			$(this).parent().remove();
			updatelist($dom);
		});
	}
	
	//更新列表的数据(排序)
	function updateinput(event) {
		var arr = [];
		event.data.find("ul.img-list > li").each(function(){
			arr.push( $(this).data('src') );
		});
		event.data.find('input.ossuploader-input').val( arr.join(',') );
	}
	
	//设置上传的参数
	function setUploadParam(apiPath) {
		//可以判断当前expire是否超过了当前时间,如果超过了当前时间,就重新取一下.3s 做为缓冲
    	var obj = eval ("(" + sendRequest(apiPath) + ")");
        return {
        	'path': obj.data['accessHost'] + '/' + obj.data['dir'],
            'url': obj.data['uploadUrl'],
            'multipart_params': {
	            'key' : obj.data['dir'],
	            'policy': obj.data['policy'],
	            'OSSAccessKeyId': obj.data['accessid'], 
	            'success_action_status' : '200', //让服务端返回200,不然，默认会返回204
	            'signature': obj.data['signature'],
	        }
        };
	}
	
	//默认
	var configs = {
		plupload_path : '',	//插件路径
		api_path: '',		//服务器路径
	};
	
	//上传类型
	var mime_types = {
		image: { title: "Image files", extensions: "jpg,gif,png" },
		docs: { title: "Docs files", extensions: "txt,doc,docx" },
		compressed: { title: "Compressed files", extensions: "zip,rar" },
		mapp: { title: "App files", extensions: "apk,ipa" }
	};
	
	return {
        init: function(settings) {
        	configs = $.extend( configs, settings );
        	
        	var $doms = $('.ossuploader').each(function(){
        		var $this = $(this),
        			uptype = $this.data('uptype'),
        			mimes = $this.data('mimes');
        		if( typeof(mimes) != 'undefined' || mimes ){
        			 mimes = mimes.split(',');
        		}else{
        			mimes = '';
        		}
        		
        		switch( uptype ){
	        		case 'oneimg':
	        			if( !mimes ) mimes = ['image'];
	        			break;
	        			
	        		case 'multimg':
	        			if( !mimes ) mimes = ['image'];
	        			break;
	        			
	        		case 'onefile':
	        			if( !mimes ) mimes = ['image', 'docs', 'compressed', 'mapp'];
	        			break;
	        			
	        		case 'multfile':
	        			if( !mimes ) mimes = ['image', 'docs', 'compressed'];
	        			break;
	        		
	        		default:
	        			return;
        		}

        		//排序
        		if( uptype == 'multimg' ){
        			updatelist($this);
        		}        		
        		
        		//上传
        		Ossuploader.initloader($this, uptype, mimes);
        	});
        },
        initloader: function($container, uptype, mimearr) {
        	//文件类型
        	var mimes = [];
        	for( var i=0; i<mimearr.length; i++ ){
        		if( mime_types.hasOwnProperty(mimearr[i]) ){
        			mimes.push( mime_types[mimearr[i]] );
        		}
        	}
        	//服务器路径
        	var api_path = $container.data('api_path');
        	if( !api_path ) api_path = configs.api_path;
        	        	
        	//上传控件
        	var uploader = new plupload.Uploader({
        		runtimes : 'html5,flash,silverlight,html4',
        		browse_button : $container.find('.ossuploader-browse').get(0), 
        		container: $container.find('.li-add').get(0),
        		flash_swf_url : configs.plupload_path+'/Moxie.swf',
        		silverlight_xap_url : configs.plupload_path+'/Moxie.xap',
        	    url : 'http://oss.aliyuncs.com',
        	    multi_selection: true,
        	    filters: {
        	    	mime_types : mimes
        	    },
        		init: {
        			PostInit: function() {
        				$container.find('.ossfiles').html('');
        			},

        			FilesAdded: function(up, files) {
        				plupload.each(files, function(file) {
																		  
							file.path = 'eee';
        					var $ossfiles = $container.find('.ossfiles');
        					if( $ossfiles ){
        						$ossfiles.html( $ossfiles.html() + '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ')<b></b>'
        	        				+'<div class="progress progress-mini"><div class="progress-bar progress-bar-success" style="width: 0%"></div></div>'
        	        				+'</div>' );
        					}
							/*
							var filename = file.name;
							var arrayfile = filename.split(".");
							var conf = setUploadParam(api_path+"?suffix="+arrayfile.pop());
							console.log(conf);
							if( !conf ){
							 	return alert('err');
							}        				 
							file.path = conf.path;
							//uploader.addFile(conf);
							uploader.setOption(conf);
							uploader.start();*/
        					
        				});
						/*
						var filename = files[0].name;
        				var arrayfile = filename.split(".");
        				var conf = setUploadParam(api_path+"?suffix="+arrayfile.pop());
        				if( !conf ){
        				 return alert('err');
        				}        				 
        				files[0].path = conf.path;
        				uploader.setOption(conf);*/
        		        uploader.start();
        			},
					
					BeforeUpload: function(up, file){
						var filename = file.name;
						var arrayfile = filename.split(".");
						var conf = setUploadParam(api_path+"?suffix="+arrayfile.pop());
						console.log(conf);
						if( !conf ){
							return alert('err');
						}        				 
						file.path = conf.path;
						//uploader.addFile(conf);
						up.setOption(conf);
					},

        			UploadProgress: function(up, file) {
        				var d = document.getElementById(file.id);
        				d.getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
        	            
        	            var prog = d.getElementsByTagName('div')[0];
        				var progBar = prog.getElementsByTagName('div')[0]
        				progBar.style.width= file.percent+'%';
        				progBar.setAttribute('aria-valuenow', file.percent);
        			},

        			FileUploaded: function(up, file, info) {
        	            console.log('uploaded')
        	            console.log(info.status)
        	            if (info.status >= 200 || info.status < 200){
        	                //document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = 'success';
        	            	$('#'+file.id).delay(1000).fadeOut();
        	            	var filepath = file.path;
							console.log(filepath);
        	            	if( uptype == 'oneimg' ){
        	            		$container.find('.img-a').attr('href', filepath);
        	            		$container.find('img').attr('src', filepath);
        	            		$container.find('.ossinput').val(filepath);
        	            	}
        	            	else if( uptype == 'multimg' ){
        	            		$container.find('.img-list').append('<li data-src="'+filepath+'">'
        				            	+ '<span class="close">&times;</span>'
        				            	+ '<div class="img"><img src="'+filepath+'"></div>'
        				            	+ '</li>');
        	            		updatelist($container);
        	            	}
							else if( uptype == 'onefile' )
							{
								$container.find('#download_url').val(filepath);
							}
        	            } else {
        	                document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = info.response;
        	            }
        			},

        			Error: function(up, err) {
        	            alert('错误：' + err.response);
        			}
        		}
        	});
        	uploader.init();
        }
    };
}();

function ossupfile(api_path, file, handler) {
	console.log(api_path);
	$.ajax({
		url: api_path,
		cache: false,
		dataType: 'json',
		error: function(){
			handler(false);	
		},
		success: function(data){
			var expire = parseInt(data.data['expire']);
			var formData = new FormData();
			formData.append('name', file.name);
			formData.append('key', data.data['dir']);
			formData.append('policy', data.data['policy']);
			formData.append('OSSAccessKeyId', data.data['accessid']);
			formData.append('success_action_status', '200');
			formData.append('signature', data.data['signature']);
			formData.append('file', file);
			
			var filepath = data.data['accessHost'] + '/' + data.data['dir'];// + file.name
			
			$.ajax({
				url: data.data['uploadUrl'],
				data: formData,
				type: 'POST',
				cache: false,
				contentType: false,
				processData: false,
				success: function (reJson) {
					handler(true, filepath);
				},
				error: function (err) {
					handler(false);
				}
			});
		}
	});
}