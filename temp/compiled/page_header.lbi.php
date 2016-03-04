<link href="themes/ecmoban_mashamasuo/qq/images/qq.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>


 

<div class="top_nav">
	<script type="text/javascript">
          //初始化主菜单
            function sw_nav(obj,tag)
            {
     
            var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
                if(tag==1)
                {
                    DisSub.style.display = "block";
             
                    
                }
                else
                {
                    DisSub.style.display = "none";
                
                }
     
            }
     
    </script>
    <div class="block">     
    
        <ul class="top_bav_l">
        <li class="top_sc">
            <a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">收藏我们</a></li>
            <li>关注我们：</li>
            <li style="border:none" class="menuPopup"  onMouseOver="sw_nav(1,1);" onMouseOut="sw_nav(1,0);">
            <a id="HandleLI_1" href="javascript:;" title="微博" class="attention"></a> 
            <div id=DisSub_1 class="top_nav_box  top_weibo"> 
            <a href="http://e.weibo.com/ECMBT" target="_blank" title="新浪微博" class="top_weibo"></a>
            <a href="http://e.t.qq.com/ecmoban_com" target="_blank" title="QQ微博" class="top_qq"></a> 
            </div> 
            </li> 
            <li class="menuPopup" onMouseOver="sw_nav(2,1);" onMouseOut="sw_nav(2,0);">
            <a id="HandleLI_2" href="javascript:;" title="微信" class="top_weixin"></a> 
            <div id=DisSub_2 class="  weixinBox" style="display: none;"> 
            <img src="themes/ecmoban_mashamasuo/images/weixin.png"> 
            </div> 
            </li>
        </ul>
    
        <div class="header_r">
        <?php if ($this->_var['navigator_list']['top']): ?> 
        <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
        <font id="ECS_MEMBERZONE" ><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
        <?php endif; ?>
         <?php if ($this->_var['navigator_list']['top']): ?>
            <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
                   <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                    <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?>
                     |
                    <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
           <?php endif; ?>
         
        </div>
    </div>
</div>

<div style="height:112px;  border-top:1px solid #2b2b2b; background:#1e2023; width:100%;" class="clearfix"> 
    <div class="block header">
        
        <a href="index.php" ><img src="themes/kinpuistyle/images/logo.gif"></a>
        
        <div class="head_r"> 
        <div class="top_search"> 
        <script type="text/javascript">
            
            <!--
            function checkSearchForm()
            {
                if(document.getElementById('keyword').value)
                {
                    return true;
                }
                else
                {
                    alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
                    return false;
                }
            }
            -->
            
            </script>
          	<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  style="_position:relative; top:5px;">
            	<div class="header_search">
          			<div class="input_box"><input name="keywords" type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>"  /></div>
        			<div class="search1"><input value="" id="seachbtn" type="submit" class="btn_s"></div>
                </div> 
        	</form>
        
        </div> 
        
        <div class="top_shopCart clearfix"  >
           
            <span id="ECS_CARTINFO" style=" color:#ffffff">我的购物车（<?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>）</span>
            
            </div>
            
        <div style="clear:both"></div> 
        <?php if ($this->_var['searchkeywords']): ?>
            <div class="search_tig">
                <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" target="_blank" class="track"><?php echo $this->_var['val']; ?></a>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>    
        <?php endif; ?>
        </div> 
      
        </div>
        
    </div> 
</div>
<div style="clear:both"></div>
 
<div class="menu_box clearfix"> 
<div class="block"> 
<div class="menu">
	<ul class="menu_box_hot">
  		<li><a href="index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
  		<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
  		<li><a href="<?php echo $this->_var['nav']['url']; ?>" ><?php echo $this->_var['nav']['name']; ?></a></li>
 		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 	</ul>
</div> 
</div>
</div>
 
 

 


