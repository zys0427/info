<!doctype html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="haohaios v1.0" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>
<link rel="shortcut icon" href="favicon.ico" />
<link href="<?php echo $this->_var['hhs_css_path']; ?>/haohaios.css" rel="stylesheet" />

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js,haohaios.js,shopping_flow.js,region.js')); ?>
</head>
<body>
        
        <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?>
        <script type="text/javascript">
          region.isAdmin = false;
          <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          
          onload = function() {
            if (!document.all)
            {
              document.forms['theForm'].reset();
            }
          }
          
        </script>
        
       
        <form action="<?php echo $this->_var['back_url']; ?>" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">

<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>

 <div class="mod_container">
        <div class="wx_bar">
            <div class="wx_bar_back">
                <a id="back" href="javascript:void(0);"></a>
            </div>
            <div class="wx_bar_tit">收货地址</div>
        </div>
        <div class="wx_wrap">
            <div class="address_new">
                <input id="address_regionId" value="" type="hidden">
                <input id="adid" value="" type="hidden">
                <p>
                    <label for="name"><span class="tit">收货人</span>
                        <input name="consignee" type="text" class="inputBg" id="consignee_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>" placeholder="姓名"/>
                        <span id="updateTip1" style="color: red; display: none;">请填写姓名</span>
                    </label> 
                </p>
                <p>
                    <label for="mobile"><span class="tit">电话</span>
                        <input name="mobile" type="text" class="inputBg"  id="mobile_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?>" placeholder="电话"/>
                        <span id="updateTip2" style="color: red; display: none;">请填写正确的电话</span>
                    </label>
                </p>
                <?php if (0): ?>
                 <p>
                    <label for="provinceId"><span class="tit">国家</span>
       <select name="country" id="selCountries" onchange="region.changed(this, 1, 'selProvinces')" >
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
        <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
        <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['consignee']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
       <span id="updateTip3" style="color: red; display: none;">请选择国家</span>
                    </label>
                </p> 
                 <?php endif; ?>
                <p>
                    <label for="provinceId"><span class="tit">省份</span>
                        
         <select name="province" id="selProvinces" onchange="region.changed(this, 2, 'selCities')" style="border:1px solid #ccc;">
	        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
	        <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
	        <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
	        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <span id="updateTip3" style="color: red; display: none;">请选择省</span>
                    </label>
                </p>
                <p>
                    <label for="cityId"><span class="tit">市</span>
      <select name="city" id="selCities" onchange="region.changed(this, 3, 'selDistricts')" style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
        <?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
        <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
       <span id="updateTip4" style="color: red; display: none;">请选择市</span>
                    </label>
                </p>
                
                <p id="areaSelP" >
                    <label for="areaId"><span class="tit">区/县</span>   
        <select name="district" id="selDistricts"  style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
        <?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
        <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
        </select> 
         <span id="updateTip5" style="color: red; display: none;">请选择区/县</span></label>
                </p>
                
               <p>
                    <label for="adinfo"><span class="tit">地址类别</span>
        <select name="address_type" id="address_type"  style="border:1px solid #ccc;">
        <option value="0">-选择家庭/公司-</option>
        <option value="1" <?php if ($this->_var['consignee']['address_type'] == 1): ?>selected<?php endif; ?>>家庭</option>
        <option value="2" <?php if ($this->_var['consignee']['address_type'] == 2): ?>selected<?php endif; ?>>公司</option>
        </select> 
   
                    </label>
                </p>
                <p>
                    <label for="adinfo"><span class="tit">详细地址</span>
                        <input name="address" type="text" class="inputBg"  id="address_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>" placeholder="详细地址" />
                        <span id="updateTip6" style="color: red; display: none;">请填写详细地址</span>
                    </label>
                </p>
                <p class="action">
                	<input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" />
                	<input type="hidden" name="act" value="act_edit_consignee" />
                	
                    <button class="submit" id="add">确认</button>
                    <button class="submit" type="button" style="background-color: red;<?php if ($this->_var['consignee']['address_id']): ?><?php else: ?>display:none<?php endif; ?>" onclick="window.location='<?php echo $this->_var['back_url']; ?>?act=drop_consignee&id=<?php echo $this->_var['consignee']['address_id']; ?>';" id="deletes">删除</button>
                </p>
            </div>
        </div>
    </div>
  </form>   

</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var country_not_null='国家不能为空';
var province_not_null='省份不能为空';
var city_not_null='城市不能为空';
var district_not_null='区域不能为空';
var consignee_not_null='收货人不能为空';
var address_not_null='详细地址不能为空';

var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</html>
