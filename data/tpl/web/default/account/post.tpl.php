<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header-gw', TEMPLATE_INCLUDEPATH)) : (include template('common/header-gw', TEMPLATE_INCLUDEPATH));?>
<ol class="breadcrumb">
	<li><a href="./?refresh"><i class="fa fa-home"></i></a></li>
	<li><a href="<?php  echo url('account/display');?>">公众号列表</a></li>
	<li class="active">编辑主公众号</li>
</ol>
<ul class="nav nav-tabs">
	<li<?php  if($do == 'basic') { ?> class="active"<?php  } ?>><a href="<?php  echo url('account/post/basic', array('uniacid' => $uniacid));?>">账号基本信息</a></li>
	<?php  if(($do == 'basic' && !$uniacid)) { ?> 
	<?php  } else { ?>
		<?php  if($_W['isfounder']) { ?>
			<li<?php  if($do == 'permission') { ?> class="active"<?php  } ?>><a href="<?php  echo url('account/permission', array('uniacid' => $uniacid));?>">账号操作员列表</a></li>
		<?php  } ?>
		<li<?php  if($do == 'details') { ?> class="active"<?php  } ?>><a href="<?php  echo url('account/post/list', array('uniacid' => $uniacid));?>">子公众号列表</a></li>
		<li><a href="<?php  echo url('account/switch', array('uniacid' => $uniacid));?>" style="color:#d9534f;"><i class="fa fa-cog fa-spin fa-fw"></i> 管理此公众号功能</a></li>
	<?php  } ?>
</ul>

<div class="clearfix">
	<form action="" method="post"  class="form-horizontal" role="form" enctype="multipart/form-data" id="form1">
		<h5 class="page-header">基础信息</h5>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">名称</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" name="name" value="<?php  echo $account['name'];?>" class="form-control" autocomplete="off">
				<span class="help-block">名称为了方便标识此公众号的作用及身份。可以为商户、组织或是公司的名称。</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">描述</label>
			<div class="col-sm-9 col-xs-12">
				<textarea style="height: 80px;" class="form-control" name="description"><?php  echo $account['description'];?></textarea>
				<span class="help-block">用于说明此公众号的功能及用途,越详细越能打动用户。</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">地区</label>
			<div class="col-sm-9 col-xs-12">
                                <?php  echo tpl_form_field_district('dis', array('province' => $account['province'], 'city' => $account['city'], 'district' => $account['district'] ))?>
				<span class="help-block">用于说明此公众号所在的省市。</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">行业</label>
			<div class="col-sm-9 col-xs-12">
                                <?php  echo tpl_form_field_industry('industry', $account['industry_parent'], $account['industry_child'])?>
                            <span class="help-block">用于说明此公众号的类别,对用户精准营销。</span>
			</div>
		</div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">网站/网店网址</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="siteurl" value="<?php  echo $account['siteurl'];?>" class="form-control" autocomplete="off"  >
                        <span class="help-block">用于说明此公众号对应的微网站，也可以填其他的地址，比如网店网址，官网等等。</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">腾讯微博网址</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="tweibo" value="<?php  echo $account['tweibo'];?>" class="form-control" autocomplete="off"  >
                        <span class="help-block">用于说明此公众号对应的腾讯微博,也可以是其他的微博网址，比如公司微博等。</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">新浪微博网址</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="sweibo" value="<?php  echo $account['sweibo'];?>" class="form-control" autocomplete="off"  >
                        <span class="help-block">用于说明此公众号对应的新浪微博,也可以是其他的微博网址，比如公司微博等。</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">促销活动标题</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" name="title" value="<?php  echo $account['title'];?>" class="form-control" autocomplete="off"  >
                        <span class="help-block">促销活动标题，越吸引眼球越好</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">促销活动缩略图</label>
                    <div class="col-sm-8 col-xs-12">
                        <?php  echo tpl_form_field_image('thumb', $account['thumb'])?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                    <div class="col-sm-9 col-xs-12">
                        <label>
                            促销活动封面（大图片建议尺寸：360像素 * 200像素）如果没有，那么将从以下活动内容中提取
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"></label>
                    <div class="col-sm-8">
                        <div class="help-block"><label class="checkbox-inline"><input type="checkbox" name="autolitpic" value="1"<?php  if(empty($item['thumb'])) { ?> checked="true"<?php  } ?>>提取内容的第一个图片为缩略图</label></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">促销活动标详细内容</label>
                    <div class="col-sm-8 col-xs-12">
                        <textarea class="form-control richtext" name="content" rows="10"><?php  echo $account['content'];?></textarea>
                        <span class="help-block">用于说明此公众号要对应的促销活动,没有的话可以不填，后期可以增加。</span>
                    </div>
                </div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">当前用户浏览量</label>
			<div class="col-sm-9 col-xs-12">
                            <input type="text" name="scan_count" value="<?php  echo $account['scan_count'];?>" class="form-control" <?php echo $_W['uid'] == 1 ? '' : 'disabled'?> autocomplete="off">
                            <span class="help-block">用于说明此公众号被浏览的次数，可以作为排序参考依据(只能填入数字)。想要修改请联系管理员</span>
			</div>
		</div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">腾讯或微信认证</label>
                    <div class="col-sm-9 col-xs-12">
                        <textarea style="height: 80px;" class="form-control" name="wxrenzheng" ><?php  echo $account['wxrenzheng'];?></textarea>
                        <span class="help-block">用于说明此公众号的认证信息，有认证信息更加有可信度。</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号推广位置</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="position" value="<?php  echo $account['position'];?>" class="form-control" <?php echo $_W['uid'] == 1 ? '' : 'disabled'?> autocomplete="off">
                        <span class="help-block">用于说明此公众号在首页的显示位置，有0,1,2,3,4,5个位置，分别对应首页的 搜索栏，一，二，三，四，五,无表示首页没有位置,多个位置显示请用英文逗号隔开,想要修改请联系管理员</span>
                    </div>
                </div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">当前服务套餐</label>
			<div class="col-sm-9 col-xs-12">
				<select name="groupid" class="form-control">
					<option value="0" <?php  if($account['groupid'] == 0) { ?> selected<?php  } ?> >基础服务</option>
					<?php  if($_W['isfounder']) { ?>
						<option value="-1" <?php  if($account['groupid'] == -1) { ?> selected<?php  } ?>>所有服务</option>
					<?php  } ?>
					<?php  if(is_array($group['package'])) { foreach($group['package'] as $item) { ?>
					<option <?php  if($account['groupid'] == $item['id']) { ?> selected<?php  } ?> value="<?php  echo $item['id'];?>"><?php  echo $item['name'];?></option>
					<?php  } } ?>
				</select>
				<span class="help-block">指定公众号可使用的功能及权限。基础服务包含系统模块使用权限。所有服务则表示拥有系统中全部权限。</span>
			</div>
		</div>
	<?php  if($_W['isfounder']) { ?>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">[付费推广]服务过期时间</label>
			<div class="col-sm-9 col-xs-12">
				<label for="p_radio_1" class="radio-inline"><input type="radio" name="isexpire" id="p_radio_1" value="1" <?php  if($groupdata['isexpire'] == '1') { ?>checked<?php  } ?> onclick="$('#expirepanel').show();"/> 是</label>
				<label for="p_radio_2" class="radio-inline"><input type="radio" name="isexpire" id="p_radio_2" value="0" <?php  if($groupdata['isexpire'] == '0') { ?>checked<?php  } ?> onclick="$('#expirepanel').hide();"/> 否</label>
				<span class="help-block"></span>
			</div>
		</div>
		<div id="expirepanel" style="display:none">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">过期时间</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_date('endtime', date('Y-m-d H:i',$groupdata['endtime']), true)?>
					<span class="help-block">用户的使用时间过期时,只能使用'基础服务'服务套餐的功能。</span>
				</div>
			</div>
			<?php  if($groupdata['oldgroupid'] !== '') { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">过期前服务套餐</label>
					<div class="col-sm-9 col-xs-12">
						<?php  if($groupdata['oldgroupid'] == 0) { ?>
							<input type="text" value="基础服务" readonly class="form-control">
						<?php  } else if($groupdata['oldgroupid'] == -1) { ?>
							<input type="text" value="所有服务" readonly class="form-control">
						<?php  } else { ?>
						<?php  if(is_array($group['package'])) { foreach($group['package'] as $item) { ?>
							<?php  if($item['id'] == $groupdata['oldgroupid']) { ?>
							<input type="text" value="<?php  echo $item['name'];?>" readonly class="form-control">
							<?php  } ?>
						<?php  } } ?>
						<?php  } ?>
						<span class="help-block">过期服务套餐是当前服务套餐过期后，系统保存的当前服务套餐的名称。</span>
					</div>
					<input type="hidden" name='groupidhide' value="<?php  echo $account['groupid'];?>">
				</div>
			<?php  } ?>
		</div>
		<h5 class="page-header">短信参数</h5>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">短信剩余条数</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" name="balance" id="balance" value="<?php  echo $notify['sms']['balance'];?>" class="form-control" autocomplete="off">
				<span class="help-block">请填写短信剩余条数,必须为整数。</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">短信签名</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" name="signature" value="<?php  echo $notify['sms']['signature'];?>" class="form-control" autocomplete="off">		
				<span class="help-block">请填写短信签名。</span>
			</div>
		</div>
	<?php  } else if(!empty($notify['sms'])) { ?>
		<h5 class="page-header">短信参数</h5>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">短信剩余条数</label>
			<div class="col-sm-9 col-xs-12">
				<p class="form-control-static"><?php  echo $notify['sms']['balance'];?></p>
				<span class="help-block">短信剩余条数。</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">短信签名</label>
			<div class="col-sm-9 col-xs-12">
				<p class="form-control-static"><?php  echo $notify['sms']['signature'];?></p>
				<span class="help-block">短信签名。</span>
			</div>
		</div>
	<?php  } ?>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
		<div class="col-sm-9 col-xs-12">
			<input name="submit" type="submit" value="提交" class="btn btn-primary span2" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			<a href="<?php  echo url('account/post-acid', array('uniacid' => $account['uniacid']))?>" class="btn btn-default" style="margin-left:30px">添加子公众号</a>
		</div>
	</div>		
	</form>
</div>

<script type="text/javascript">
<!--
	require(['jquery', 'util'], function($, u){
                $(function(){
                    u.editor($('.richtext')[0]);
                });
		$('#form1').submit(function(){
			if($('input[name="isexpire"]:checked').val() == 1) {
				var time = $('input[name="endtime"]').val();
				var arr = time.split(' ');
				var arr1 = arr[0].split('-');
				var arr2 = arr[1].split(':');
				var date = new Date();
				date.setFullYear(arr1[0], arr1[1]-1, arr1[2]);
				date.setHours(arr2[0], arr2[1]);
				var timestamp = date.getTime();
				var now = new Date();
				var nowtime = now.getTime();
				if(timestamp <= nowtime) {
					u.message('服务套餐过期时间必须大于当前时间.', '', 'error');
					return false;
				}
			}
		});
	$('#expirepanel').css('display', $('input[name="isexpire"]:checked').val() == '1' ? '' : 'none');
	});
//-->
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer-gw', TEMPLATE_INCLUDEPATH)) : (include template('common/footer-gw', TEMPLATE_INCLUDEPATH));?>
