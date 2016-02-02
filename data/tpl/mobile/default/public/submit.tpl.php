<?php defined('IN_IA') or exit('Access Denied');?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<meta content="微信生意通" name="apple-mobile-web-app-title">
<meta name="description" content="">
<meta name="keywords" content="微信,微信公众平台,微信推广,微信公众号,微信生意通,微信导航">
<title>微信生意通-微信公众导航-微信公众推广</title>
<script src="./resource/js/require.js"></script>
<script src="./resource/js/app/config.js"></script>
<script src="./resource/js/lib/jquery-1.11.1.min.js"></script>
<link href="./resource/css/bootstrap.min.css" rel="stylesheet">
<link href="./resource/css/base.css" rel="stylesheet" type="text/css" />
<link href="./resource/css/model.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="./resource/css/index.css">
</head>
<body id="xtopjsinfo">
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('comm/header', TEMPLATE_INCLUDEPATH)) : (include template('comm/header', TEMPLATE_INCLUDEPATH));?>
<div class="concom">
    <form action="" method="post"  class="form-horizontal" role="form" enctype="multipart/form-data" id="form1">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align:center">
                欢迎您提交微信公众号，请您认真且详细填写信息，有利于通过审核和增加粉丝！
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信公众号</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="account" value="" class="form-control" id="account" autocomplete="off" placeholder="如：rmrbwx" onkeyup="this.value=this.value.replace(/[\u4E00-\u9FA5]/g,'');" >
                        <span class="help-block">微信公众号是用户可以关注的公众号。</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号名称</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="name" value="" class="form-control" id="name" autocomplete="off" placeholder="如：人民日报" >
                        <span class="help-block">名称为了方便标识此公众号的作用及身份。</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号描述</label>
                    <div class="col-sm-9 col-xs-12">
                        <textarea style="height: 80px;" class="form-control" name="description" id="description" placeholder="如：该公众号主要用于......" ></textarea>
                        <span class="help-block">用于说明此公众号的功能及用途,越详细越能打动用户。</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号地区</label>
                    <div class="col-sm-9 col-xs-12">
                        <?php  echo tpl_form_field_district('dis', array('province' => '', 'city' => '', 'district' => '' ))?>
                        <span class="help-block">用于说明此公众号所在的省市。</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号行业</label>
                    <div class="col-sm-9 col-xs-12">
                        <?php  echo tpl_form_field_industry('industry', '', '')?>
                        <span class="help-block">用于说明此公众号的所属行业。</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">公众二维码</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="file" name="qrcode" value="<?php  echo $item['qrcode'];?>">
                        <span class="help-block">只支持JPG图片，用户扫描即可关注该公众号。</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号头像</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="file" name="headimg" value="<?php  echo $item['headimg'];?>">
                        <span class="help-block">只支持JPG图片，头像能给用户一个好的印象。</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号认证</label>
                    <div class="col-sm-9 col-xs-12">
                        <textarea style="height: 80px;" class="form-control" name="wxrenzheng" placeholder="腾讯认证/微信认证/微博认证/空间认证"></textarea>
                        <span class="help-block">用于说明此公众号的认证信息，有认证信息更加有可信度。</span>
                    </div>
                </div>
                <div class="form-group" >
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                    <div class="col-sm-12 col-sm-offset-5" style="text-align:center;">
                        <input name="token" type="hidden" value="<?php  echo md5('lg'.$_W['token'].time())?>"/>
                        <input name="times" type="hidden" value="<?php  echo time()?>"/>
                        <input name="submit" type="submit" value="提交" id="submit" class="btn btn-primary col-lg-1"  />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="zwword">
<h4><b>微信公众号入驻微信生意通能得到什么？</b></h4>
<div class="content">
    <div class="concom">
        <p>1、微信生意通有大量寻找微信公众号的粉丝，百度排名靠前，日流量大，粉丝转化率very very高。<br />
        2、微信生意通提供免费的微信编辑器，微信小游戏，微信后台管理让你轻松推广运营您的公众号。<br />
        3、微信生意通会收集经典微信营销文章，让您能在营销推广的时候如虎添翼。微信营销不在难。<br />
        4、微信生意通同时还能开发微信应用，如微网站，如您有这方面需要，微信生意通是您不错的选择。</p>
    </div>
</div>
<h4><b>微信生意通审核公众账号要多长的时间？</b></h4>
<div class="content">
    <div class="concom">
        <p>1、公众账号审核的时间一般1-2天内完成。审核通过后您可以在微信生意通网站上搜索您提交的微信公众号<br />
        2、如果没通过审核可以重发一个新的申请。（未审核通过原因：微信公众账号、二维码、头像等信息不匹配）</p>
    </div>
</div>
<h4><b>微信公众号付费推广和免费合作</b></h4>
<div class="content">
    <div class="concom">
        <p>1、微信生意通最新推出的微信公众号付费推广服务，尽在首页位置推送，详情点击&nbsp;&nbsp;<a href="<?php  echo url('public/advert');?>" target="_blank" title="微信付费推广服务" style="background:#82B440;color:#fff">微信推广</a></p>
        <p>2、如果您有自己的网站或者博客，可以与微信生意通互换链接，即可获得微信生意通首页推荐位置。</p>
        <p>3、微信生意通合作qq-3111319984 非诚勿扰。</p>
    </div>
</div>
</div>
<script type="text/javascript">
    require(['jquery', 'util', 'filestyle'], function($, u){
            $(function(){
                $('p.form-control-static a').each(function(){
                    u.clip(this, $(this).text());
                    });


                $(".form-group").find(':file').filestyle({buttonText: '上传图片'});

                $('div[id^="panel"]').hide();
                //$('#panel_'+$('input:radio[name="type"]:checked').val()).show();
                $("input[name='type']").click(function(){
                    $('div[id^="panel"]').hide();
                    $('#panel_'+$(this).val()).show();
                    });
                $("input[name='submit']").click(function(){
                    if($("input[name='account']").val()==""){
                    $("input[name='account']").next().html('<font color="red">微信公众号不能为空</font>');
                    $("input[name='account']").focus();
                    return false;
                    }
                    if($("input[name='name']").val()==""){
                    $("input[name='name']").next().html('<font color="red">公众号名称不能为空</font>');
                    $("input[name='name']").focus();
                    return false;
                    }
                    if($("input[name='name']").val()==""){
                    $("input[name='name']").next().html('<font color="red">公众号名称不能为空</font>');
                    $("input[name='name']").focus();
                    return false;
                    }
                    if($("textarea[name='description']").val()==""){
                    $("textarea[name='description']").next().html('<font color="red">公众号描述不能为空</font>');
                    $("textarea[name='description']").focus();
                    return false;
                    }
                    if($("input[name='qrcode']").val()==""){
                        $("input[name='qrcode']").next().next().html('<font color="red">公众号二维码不能为空</font>');
                        return false;
                    }
                    if($("input[name='headimg']").val()==""){
                        $("input[name='headimg']").next().next().html('<font color="red">公众号头像不能为空</font>');
                        return false;
                    }
                });
                $("input[name='account']").keydown(function(){
                        $(this).next().html('微信公众号是用户可以关注的公众号。');
                        });
                $("input[name='name']").keydown(function(){
                        $(this).next().html('名称为了方便标识此公众号的作用及身份。');
                        });
                $("textarea[name='description']").keydown(function(){
                        $(this).next().html('用于说明此公众号的功能及用途,越详细越能打动用户。');
                        });
                $("input[name='qrcode']").click(function(){
                        $(this).next().next().html('只支持JPG图片，用户扫描即可关注该公众号。');
                        });
                $("input[name='headimg']").click(function(){
                        $(this).next().next().html('只支持JPG图片，头像能给用户一个好的印象。');
                        });

                $("input[name='account']").blur(function(){
                        var account = $(this).val();
                        $.get("<?php  echo url('public/ajax/ajax')?>account="+account,function(data){
                            if('1' == data){
                            $("input[name='account']").focus();
                            $("input[name='account']").next().html('<font color="red">该微信公众号已存在</font>');
                            }
                            });        
                        });

                <?php  echo $script;?>
            });
    });
</script>
<a href="#" rel="rs-dialog" data-target="myModal1"></a>
<div class="rs-dialog" id="myModal1">
    <div class="rs-dialog-box">
        <div class="rs-dialog-header">
            <h3><?php  echo $result;?></h3>
        </div>
        <div class="rs-dialog-body">
            <img src="./resource/images/api.png">
            <p>获取更多信息请扫描二维码关注微信生意通</p>
        </div>
        <div class="rs-dialog-footer">
            <a href="index.php" class="close" >点击前往首页>></a>
        </div>
    </div>	
</div>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('comm/footer', TEMPLATE_INCLUDEPATH)) : (include template('comm/footer', TEMPLATE_INCLUDEPATH));?>
     </body>
 </html>
