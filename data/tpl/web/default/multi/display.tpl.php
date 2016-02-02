<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
	<?php  if($do == 'display') { ?>
	<li class="active"><a href="<?php  echo url('site/multi/display');?>">微站管理</a></li>
	<li><a href="<?php  echo url('site/multi/post')?>">添加微站</a></li>
	<?php  } ?>
	<?php  if($do == 'template') { ?><li class="active"><a href="<?php  echo url('site/template');?>">模板管理</a></li><?php  } ?>
	<?php  if($do == 'designer') { ?><li class="active"><a href="<?php  echo url('site/style/designer', array('templateid' => $templateid));?>">设计风格</a></li><?php  } ?>
</ul>
<?php  if($do == 'display') { ?>
<div class="clearfix template">
	<div class="panel panel-default">
		<div class="panel-heading">
			可用的微站
		</div>
		<div class="table-responsive panel-body">
			<table class="table table-hover">
				<thead class="navbar-inner">
					<tr>
						<th style="width:100px;">微站名称</th>
						<th style="width:210px;">模板风格</th>
						<th class="text-right" style=width:330px;">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php  if(is_array($multis)) { foreach($multis as $item) { ?>
					<tr>
						<td style="vertical-align:middle;"><?php  echo $item['title'];?></td>
						<td style="vertical-align:middle;">
							<?php  if($item['styleid']) { ?><?php  echo $item['style']['name'];?><?php  } else { ?><span class="label label-danger">未设置</span><?php  } ?>
							<?php  if($default_site == $item['id']) { ?><span class="label label-success">默认微站</span><?php  } ?>
						</td>
						<td class="text-right">
							<!--<a href="<?php  echo url('site/multi/default', array('multiid' => $item['id']))?>" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="设为默认微站"><i class="fa fa-life-bouy"></i> </a>-->
							<a href="<?php  echo url('site/nav/shortcut', array('mtid' => $item['id'], 'f' => 'multi'))?>" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="快捷菜单" ><i class="fa fa-puzzle-piece"></i> </a>
							<a href="<?php  echo url('site/multi/post', array('multiid' => $item['id']))?>" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="微站信息"><i class="fa fa-exclamation"></i> </a>
							<a href="<?php  echo url('site/nav/home', array('mtid' => $item['id'], 'f' => 'multi'))?>" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="导航链接"><i class="fa fa-link"></i> </a>
							<a href="<?php  echo url('site/multi/copy', array('multiid' => $item['id']))?>" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="复制微站"><i class="fa fa-copy"></i> </a>
							<a href="<?php  echo url('platform/cover/site/', array('multiid' => $item['id']))?>" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="访问入口"><i class="fa fa-paper-plane"></i> </a>
							<a href="<?php  echo url('site/slide/', array('mtid' => $item['id'], 'f' => 'multi'))?>" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="幻灯片"><i class="fa fa-image"></i> </a>
							<a href="javascript:;" onclick="preview('<?php  echo $item['styleid'];?>', '<?php  echo $item['id'];?>');return false;" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="预览"><i class="fa fa-search"></i> </a>
							<?php  if($default_site != $item['id']) { ?><a onclick="if(!confirm('删除后将不可恢复,确定删除吗?')) return false;" href="<?php  echo url('site/multi/del', array('id' => $item['id']))?>" class="btn btn-default btn-danger" data-toggle="tooltip" data-placement="top" title="删除"><i class="fa fa-times"></i> </a><?php  } ?>
						</td>
					</tr>
					<?php  } } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<style>
	.template i{display:inline-block; width:15px; height:15px; font-size:15px;}
</style>
<script type="text/javascript">
	function preview(styleid, $multiid) {
		require(['jquery', 'util'], function($, u){
			var content = '<iframe width="320" scrolling="yes" height="480" frameborder="0" src="about:blank"></iframe>';
			var footer =
					'			<a href="<?php  echo url('site/style/designer');?>styleid=' + styleid + '" class="btn btn-primary">设计风格</a>' +
					'			<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>';
			var dialog = u.dialog('预览模板', content, footer);
			dialog.find('iframe').on('load', function(){
				$('a', this.contentWindow.document.body).each(function(){
					var href = $(this).attr('href');
					if(href && href[0] != '#') {
						var arr = href.split(/#/g);
						var url = arr[0];
						if (url.substr(0, 3) == 'www') {
							url = 'http://' + url;
						}
						if(arr[1]) {
							url += ('#' + arr[1]);
						}
						if (url.substr(0, 10) == 'javascript') {
							url = url.substr(0, url.lastIndexOf('&'));
						}
						$(this).attr('href', url);
					}
				});
			});
			var url = '../app/<?php  echo murl('home')?>&s=' + styleid + '&t=' + $multiid;
			dialog.find('iframe').attr('src', url);
			dialog.find('.modal-dialog').css({'width': '322px'});
			dialog.find('.modal-body').css({'padding': '0', 'height': '480px'});
			dialog.modal('show');
		});
	}

	require(['bootstrap'],function($){
		$('.btn').hover(function(){
			$(this).tooltip('show');
		},function(){
			$(this).tooltip('hide');
		});
	});
</script>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
