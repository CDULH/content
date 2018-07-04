function ContentListSelect() {
    //删除单条
    function removeone($c, id){
        var data_removeurl = $c.data("removeurl"),
            data_baseurl = $c.data("baseurl"),
            data_keyname = $c.data("keyname"),
            url = data_removeurl ? data_removeurl : data_baseurl + "/remove",
            keyname = data_keyname ? data_keyname : "id"
        ajaxdata = {};

        ajaxdata[keyname] = id;

        $.ajax({
            url : url,
            data : ajaxdata,
            dataType: 'json',
            success : function(data){
                if( data && data.errcode==0 ){
                    $c.find(".item-row-"+id).remove();
                }
            },
            error : function(){}
        });
    }

    //删除多条
    function removemult($c, arr)
    {
        var data_removeurl = $c.data("removeurl"),
            data_baseurl = $c.data("baseurl"),
            data_keyname = $c.data("keyname"),
            url = data_removeurl ? data_removeurl : data_baseurl + "/remove",
            keyname = data_keyname ? data_keyname : "id"
        ajaxdata = {},
            i = 0;

        function r()
        {
            if( i >= arr.length ){
                window.location.reload();
                return;
            }
            ajaxdata[keyname] = arr[i];
            $.ajax({
                url : url,
                data : ajaxdata,
                dataType: 'json',
                success : function(data){
                    if( data && data.errcode==0 ){
                        i++;
                        r();
                    }
                },
                error : function(){
                    i++;
                    r();
                }
            });
        }

        r();
    }

    //选择了行
    function selectChange($c)
    {
        if( $c.find("input:checked.select-one").length > 0) {
            $c.find(".remove-mult").removeClass("disabled");
        }else{
            $c.find(".remove-mult").addClass("disabled");
        }
    }


    function Obj(){}
    Obj.prototype.init = function(){
        //全选
        $(".select-all").change(function(){
            var $c = $(this).parents(".content-list");
            if( this.checked ){
                var $lis = $c.find("input.select-one");
                $lis.each(function(){
                    this.checked = true;
                });
                if( $lis.length > 0 )
                    $c.find(".remove-mult").removeClass("disabled");
            }else{
                $c.find("input.select-one").attr("checked", false);
                $c.find(".remove-mult").addClass("disabled");
            }
        });

        //选择一行
        $(".select-one").change(function(){
            selectChange($(this).parents(".content-list"));
        });

        //删除多行
        $(".remove-mult").click(function(){
            var $c = $(this).parents(".content-list");
            var $list = $c.find("input:checked.select-one");
            var arr = [];
            $list.each(function(){
                arr.push( $(this).data("select") );
            });
            if( arr && confirm("您确定要删除该数据吗？") ){
                removemult($c, arr);
            }
        });

        //删除一行
        $(".remove-one").click(function(){
            var select = $(this).data('select');
            if( !select ){
                return;
            }
            var $c = $(this).parents(".content-list");
            var $select = $c.find("input[data-select='"+select+"'].select-one");
            var tipsText = "您确定要删除该数据吗？";
            var childrencount = $select.data('childrencount');
            if( $select.data('childrencount') ){
                tipsText += "此操作将会删除所有子级";
            }
            if( confirm(tipsText) ){
                removeone($c, select);
            }
        });

        //排序
        var sortValue = new Array(2);
        $("td.sort > input").focus(function(){
            sortValue[0] = $(this).data('select');
            sortValue[1] = $(this).val();
        }).blur(function(){
            if( !sortValue ){
                return;
            }
            var id = $(this).data('select');
            var sort = $(this).val();
            if( sortValue[0] !== id || sortValue[1] == sort ){
                return;
            }

            var $c = $(this).parents(".content-list");

            $.ajax({
                url : $c.data("sorturl") ? $c.data("sorturl") : $c.data("baseurl")+ "/sort",
                data : {id:id, sort:sort},
                success : function(data){
                    if( parseInt(data) > 0 ){
                        window.location.reload();
                    }
                },
                error : function(){}
            });
        });
    }

    return new Obj();
}
$(function () {
    window.contentListSelect = new ContentListSelect();
    window.contentListSelect.init();

    App.initHelpers('slick');
    $('.btn-confirm-popup').click(function(){
        var title = $(this).data("title"),
            url = $(this).data('url');
        if( !confirm('您确认要操作【'+title+'】按钮') ){
            return false;
        }
        
//        if( title == "取消" ){
//        	var newOpen = window.open( $('.btn-jump-url').data('hxloadingurl') );
//        }
        
        $.ajax({
            url: url,
            dataType: 'json',
            type: 'get',
            error: function(){
                if( title=="取消" ){
                	//newOpen.close();
                }
                alert('操作失败');
            },
            success: function(data){
                if( data.errcode!=0 ){
                	if( title=="取消" ){
                    	//newOpen.close();
                    }
                    return alert( data.errmsg ? data.errmsg : '操作失败' );
                }
                if( title=="取消" ){
                	//newOpen.location.href = $('.btn-jump-url').data('hxjumpurl');
                	alert('操作成功');
                    window.location.reload();
                }else{
                	alert('操作成功');
                    window.location.reload();
                }
            }
        });
        return false;
    });

    $(".table-hover > tbody > tr").on("click",function(){
        $this = $(this);
        $this.css("background-color","#FBE9AD").siblings().css("background-color","#fff");
    });

    //确认框弹窗
    window.promptAlert = function(msg, onHideHandler) {
        var $dom = $('<div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; background: #9999; padding-right: 17px;"><div class="modal-dialog" style="margin: 200px auto"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="block-header bg-primary-dark"><ul class="block-options"><li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li></ul><h3 class="block-title">Terms &amp; Conditions</h3></div><div class="block-content"><p id="modal-msg">Dolor posuere </p></div></div><div class="modal-footer"><button class="btn btn-sm btn-default btn-com" type="button" data-dismiss="modal">Close</button><button class="btn btn-sm btn-primary btn-com" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button></div></div></div>        </div>');
        $('body').append($dom);
        var $modal = $("#modal-fadein");
        $modal.css("display", 'block');
        $modal.attr("aria-hidden", 'false');
        $modal.addClass("in");

        $("#modal-msg").html(msg);
        $dom.find(".btn-com").on("click", function () {
            var $btn = $(this);
            setTimeout(function () {
                if( $btn.index() == 1 && typeof(onHideHandler) == 'function' ){
                    onHideHandler();
                }
            }, 200);
            $dom.remove();
        });
    }

});

//检查字符长度   中文算两个 英文算一个

function WidthCheck(str, maxLen){
    var w = 0;
    var tempCount = 0;
    for (var i=0; i<str.value.length; i++) {

        var c = str.value.charCodeAt(i);

        if ((c >= 0x0001 && c <= 0x007e) || (0xff60<=c && c<=0xff9f)) {
            w++;
        }
        else {
            w+=2;
        }
        if (w > maxLen) {
            str.value = str.value.substr(0,i);
            break;
        }
    }
}




