<?php defined('IN_IA') or exit('Access Denied');?><div class="iintoban-body">
    <div class="iintoban-box">
        <div class="iadl">
            <div class="isearch">
                <form action='<?php  echo url('public/search');?>' method="post" name="searchform" id="searchform" target="_parent" onsubmit="if(document.getElementById('keyboard').value == '' || document.getElementById('keyboard').value == '请输入关键字查询'){alert('请输入关键字');document.getElementById('keyboard').value='';document.getElementById('keyboard').focus();return false;};" >
                    <input name="key" type="text" id="keyboard" class="nsearchw " title="isea" onblur="if(this.value == '')this.value='请输入关键字查询';" onclick="if(this.value == '请输入关键字查询')this.value='';" value="请输入关键字查询" placeholder="请输入关键字查询" />
                    <input name="submit_key" type="submit" id="keyboard" class="ninp_a" value=" " />
                </form>
            </div>
            <div class="idao ">微信公众号导航</div>
        </div>
        <div class="iadr"><a><img src="./resource/images/banner-common.jpg" width="980" height="90" alt="微信公众号导航" title="微信公众号导航" /></a></div>
    </div>
</div>
