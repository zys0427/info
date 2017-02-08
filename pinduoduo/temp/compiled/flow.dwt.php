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
<div class="container">

        <?php if ($this->_var['step'] == "consignee"): ?>
        
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
        
        <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
        <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
<div class="flowBox">
<h6><span><?php echo $this->_var['lang']['consignee_info']; ?></span></h6>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
  <?php if ($this->_var['real_goods_count'] > 0): ?>
  
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['country_province']; ?>:</td>
    <td colspan="3" bgcolor="#ffffff">
    <select name="country" id="selCountries_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 1, 'selProvinces_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
        <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
        <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['consignee']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <br />
      <select name="province" id="selProvinces_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 2, 'selCities_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
        <?php $_from = $this->_var['province_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
        <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <br />
      <select name="city" id="selCities_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 3, 'selDistricts_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
        <?php $_from = $this->_var['city_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
        <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
      <br />
      <select name="district" id="selDistricts_<?php echo $this->_var['sn']; ?>" <?php if (! $this->_var['district_list'][$this->_var['sn']]): ?>style="display:none"<?php endif; ?> style="border:1px solid #ccc;">
        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
        <?php $_from = $this->_var['district_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
        <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </select>
    <?php echo $this->_var['lang']['require_field']; ?> </td>
  </tr>
  <?php endif; ?>
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['consignee_name']; ?>:</td>
    <td bgcolor="#ffffff"><input name="consignee" type="text" class="inputBg" id="consignee_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>" />
    <?php echo $this->_var['lang']['require_field']; ?> </td>

  </tr>
  <?php if ($this->_var['real_goods_count'] > 0): ?>
  
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['detailed_address']; ?>:</td>
    <td bgcolor="#ffffff"><input name="address" type="text" class="inputBg"  id="address_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>" />
    <?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <?php endif; ?>
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['backup_phone']; ?>:</td>
    <td bgcolor="#ffffff"><input name="mobile" type="text" class="inputBg"  id="mobile_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?>" /></td>
  </tr>
  <tr>
    <td colspan="4" align="center" bgcolor="#ffffff">
    <input type="submit" name="Submit" class="bnt_blue_2" value="<?php echo $this->_var['lang']['shipping_address']; ?>" />
      <input type="hidden" name="step" value="consignee" />
      <input type="hidden" name="act" value="checkout" />
      <input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" />
      </td>
  </tr>
</table>
</div>
        </form>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>


<?php if ($this->_var['step'] == 'address_list'): ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,region.js,shopping_flow.js')); ?>
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
    
    <div class="wx_bar">
        <div class="wx_bar_back">
            <a id="listPageback" href="javascript:void(0);"></a>
        </div>
        <div class="wx_bar_act">
            <a href="javascript:void(0);" class="wx_bar_new" style="display: none;" id="_new"></a>
        </div>
    </div>
    <div class="wx_wrap">
        <div class="address_list" id="addressList">
            <div class="address">
                <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
                
                
                <ul <?php if ($this->_var['consignee']['address_id'] == $this->_var['default_address_id']): ?>class="selected"<?php endif; ?>>
                    <a href="flow.php?step=checkout&address_id=<?php echo $this->_var['consignee']['address_id']; ?>">
                    <li><span><?php echo htmlspecialchars($this->_var['consignee']['address']); ?></span></a></li>
                    <li><strong><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></strong><?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?></li>
                    </a>
                    <li><a class="edit" href="flow.php?step=edit_consignee&address_id=<?php echo $this->_var['consignee']['address_id']; ?>" >编辑</a></li>
                </ul>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>

            <div class="address_list_link"> 
                <a href="flow.php?step=edit_consignee&back_url=<?php echo $this->_var['forward']; ?>" class="item item_new">新增收货地址</a>
            </div>
            <div class="margin_footer"></div>
        </div>
    </div>
    <?php endif; ?>
    
    
    <?php if ($this->_var['step'] == "checkout"): ?>
    <form action="flow.php" method="post" name="theForm" id="theForm" >
    <script type="text/javascript">
        var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
    </script>
    <?php echo $this->fetch('library/consignee.lbi'); ?>
    <div class="order">
        <div class="order_bd">
            <div id="orderList" class="order_glist">
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                <div class="only">
                    <div class="order_goods">
                        <div class="order_goods_img">
                            <img alt="<?php echo $this->_var['goods']['goods_name']; ?>" src="<?php echo $this->_var['goods']['goods_thumb']; ?>">
                        </div>
                        <div class="order_goods_info">
                            <div class="order_goods_name"><span id="tuanLbl"></span><?php echo $this->_var['goods']['goods_name']; ?></div>
                            <div class="order_goods_attr">
                                <div class="order_goods_attr_item">
                                    <span class="order_goods_attr_tit">数量：</span>
                                    <div class="order_goods_num"><?php echo $this->_var['goods']['goods_number']; ?></div>
                                    <div id="goodsPrice" class="order_goods_price"><?php echo $this->_var['goods']['formated_goods_price']; ?><i>/件</i></div>
                                </div>
                                <p class="order_goods_attr_item"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

            </div>
        </div>
    </div>
	<script>
	
	function select_pay(thisobj,pay_id){
		$(thisobj).parent().children().removeClass('pay2_selected');
		$(thisobj).addClass('pay2_selected');
		$('#payment').val(pay_id);
	}

	function goods_cut(){
		var num_val=document.getElementById('number');
		var new_num=num_val.value;
		 if(isNaN(new_num)){alert('请输入数字');return false}
		var Num = parseInt(new_num);
		if(Num>1)Num=Num-1;
		num_val.value=Num;
		changeNum(<?php echo $this->_var['goods_list']['0']['goods_id']; ?>);
	}
	function goods_add(){
		var num_val=document.getElementById('number');
		var new_num=num_val.value;
		 if(isNaN(new_num)){alert('请输入数字');return false}
		var Num = parseInt(new_num);
		Num=Num+1;
		num_val.value=Num;
		changeNum(<?php echo $this->_var['goods_list']['0']['goods_id']; ?>);
	}

	/*修改数量*/
	function add_number()
	{
		document.getElementById("number").value++;
		var number = document.getElementById("number").value;
		Ajax.call('flow.php', 'step=update_cart&rec_id=<?php echo $this->_var['goods_list']['0']['rec_id']; ?>&number=' + number+'&goods_id=<?php echo $this->_var['goods_list']['0']['goods_id']; ?>' , changePriceResponse, 'GET', 'JSON');
		
	}
	function cut_number()
	{

		if (document.getElementById("number").value>1)
		{
			document.getElementById("number").value--;
		}
		var number = document.getElementById("number").value;
		Ajax.call('flow.php', 'step=update_cart&rec_id=<?php echo $this->_var['goods_list']['0']['rec_id']; ?>&number=' + number+'&goods_id=<?php echo $this->_var['goods_list']['0']['goods_id']; ?>' , changePriceResponse, 'GET', 'JSON');
	}  
	function changePriceResponse(res)
	{
		
		if(res.error==1)
		{
			alert(res.message);
			document.getElementById("number").value =res.number;
		}
		else
		{
			document.getElementById('content').innerHTML = res.content;//购物车商品价
		}
	
	}  
	</script>
    <div id="pay_area">
           <div class="makeorder_from">
               <div class="makeorder_from_num_box">
                   <li class="reduce" onclick="cut_number();"><a href="javascript:void(0);" >-</a></li>
                   <li class="in"><input id="number"  type="text" value="<?php echo $this->_var['goods_list']['0']['goods_number']; ?>" size="2" readonly="true">件</li>
                   <li class="add" onclick="add_number();"><a href="javascript:void(0);" >+</a></li>
               </div>
           	</div>
		<div id='content'>
        <?php echo $this->fetch('library/order_total.lbi'); ?>
        </div>
        <div class="pay2">
            <div class="pay2_hd">支付方式</div>
            <div id="payList" class="pay2_list">
            	<?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['payment']):
        $this->_foreach['name']['iteration']++;
?>
                
                <div onclick="select_pay(this,<?php echo $this->_var['payment']['pay_id']; ?>)" class="pay2_item <?php if ($this->_var['payment']['pay_code'] == 'wxpay'): ?> pay2_wx pay2_selected<?php elseif ($this->_var['payment']['pay_code'] == 'alipay'): ?> pay2_cft<?php endif; ?>">
                    <span class="pay2_item_state"></span>
                    <span class="pay2_item_ico"></span>
                    <span class="pay2_item_tit"><?php echo $this->_var['payment']['pay_name']; ?></span>
                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <input type="hidden" id="payment" name="payment" value="<?php echo $this->_var['default_pay_id']; ?>"  />
            </div>
            
            <input type='hidden' value="<?php echo $this->_var['mbonus_id']; ?>" name="bonus" id="HHS_BONUS" >
            <?php if ($this->_var['allow_use_bonus'] && $this->_var['bonus_list']): ?>
            <div class="pay3_list" >
                <div id="goTenPay" class="pay3_item pay2_wx pay2_selected" onclick="pack_up();changeBonus(0);">
                    <span class="pay2_item_state"></span>
                    <span class="pay3_item_ico"></span>
                    <span class="pay3_item_tit">优惠券</span>
                    <span class="pay3_display">
                    <img src="themes/haohaios/images/display_5a2b19a.jpg" class="basic">
                    </span>
                    <span class="pay3_item_price" id="pay3_item_price"><b></b></span>
                </div>
            </div>
            <div class="animate_set" style="height:auto;"  id="animate_set">
                <div class="line_coupon"><img src="themes/haohaios/images/line_836fc09.png"></div>
                <!-- 
                <select name="bonus" id="ECS_BONUS" style="border:1px solid #ccc;">
                </select> -->
                
                <?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['bonus']):
        $this->_foreach['name']['iteration']++;
?>
                  <div class="coupons" onclick="changeBonus(<?php echo $this->_var['bonus']['bonus_id']; ?>);" >
                    <div class="one_coupon">
                        <div><img src="<?php if ($this->_var['bonus']['bonus_id'] == $this->_var['mbonus_id']): ?>images/yellow_bd15f0c.png<?php else: ?>images/white_4bbd64b.png<?php endif; ?>" class="yellow_coupon" id="yellow_coupon<?php echo $this->_var['bonus']['bonus_id']; ?>"></div>
                       
                       <!--  <option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option> -->
                       <!-- <option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option> -->
                        <div>
                            <b class="pin1"><?php echo $this->_var['shop_name']; ?></b>
                        </div>
                        <div class="coup_text_left1">
                            <b><?php echo $this->_var['bonus']['bonus_money_formated']; ?>元代金券</b>
                            <div class="text_copus_desc1">优质水果，新鲜直送
                                <br>记得及时使用哦~ </div>
                        </div>
                        <div class="coup_time_right1">
                            <b>有效期</b>
                            <br>
                            <div class="text_copus_time1"> <?php echo $this->_var['bonus']['use_startdate']; ?>
                                <br>到 <?php echo $this->_var['bonus']['use_enddate']; ?></div>
                        </div>
                    </div>
                </div>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
			<?php endif; ?>
            <div>
                <input type="button" onclick="done(this);" value="立即支付" class="pay2_btn"/>
                <input type="hidden" name="step" value="done" />
            </div>
            
            <div>
            	<input type="hidden" name="lat" id="lat" value="<?php echo $this->_var['lat']; ?>" />
            	<input type="hidden" name="lng" id="lng" value="<?php echo $this->_var['lng']; ?>" />
                <input type="submit" name="share_pay"  id="share_pay"  value="找人代付" class="pay2_btn" /> 
            </div> 
        </div>
    </div>
    </form>
    <br/>
        <div class="step">
            <div class="step_hd">
                拼团玩法<a class="step_more" href="tuan_rule.php">查看详情</a>
            </div>
            <div class="step_list">
                <div class="step_item">
                    <div class="step_num">1</div>
                    <div class="step_detail">
                        <p class="step_tit">选择
                            <br>心仪商品</p>
                    </div>
                </div>
                <div class="step_item step_item_on">
                    <div class="step_num">2</div>
                    <div class="step_detail">
                        <p class="step_tit">支付开团
                            <br>或参团</p>
                    </div>
                </div>
                <div class="step_item">
                    <div class="step_num">3</div>
                    <div class="step_detail">
                        <p class="step_tit">等待好友
                            <br>参团支付</p>
                    </div>
                </div>
                <div class="step_item">
                    <div class="step_num">4</div>
                    <div class="step_detail">
                        <p class="step_tit">达到人数
                            <br>团购成功</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mod_footer">
            <div class="mod_footer_lk">
                <a class="on" href="index.php"><?php echo $this->_var['shop_name']; ?></a>
                <a href="user.php?act=team_list">我的团</a>

            </div>
            <div class="mod_footer_logo">
                <span><?php echo $this->_var['HTTP_HOST']; ?></span>
            </div>
        </div>
        
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
window.onload=function(){
	
	<?php if ($this->_var['bonus_list']): ?>
	changeBonus(<?php echo $this->_var['mbonus_id']; ?>);
	<?php endif; ?>
}

function done(thisObj){
	/*
	if(lat==null){
		return false;
	}*/
	//$_POST['how_oos'] = isset($_POST['how_oos']) ? intval($_POST['how_oos']) : 0;
    //$_POST['card_message'] = isset($_POST['card_message']) ? compile_str($_POST['card_message']) : '';
    //$_POST['inv_type'] = !empty($_POST['inv_type']) ? compile_str($_POST['inv_type']) : '';
    //$_POST['inv_payee'] = isset($_POST['inv_payee']) ? compile_str($_POST['inv_payee']) : '';
    //$_POST['inv_content'] = isset($_POST['inv_content']) ? compile_str($_POST['inv_content']) : '';
    //$_POST['postscript'] = isset($_POST['postscript']) ? compile_str($_POST['postscript']) : '';
   thisObj.value='正在支付 请稍候';
   var payment=document.forms[0].payment.value;
   var bonus=document.forms[0].bonus.value;
	Ajax.call('flow.php?step=json_done', 'payment='+payment+'&bonus='+bonus+"&lat=<?php echo $this->_var['lat']; ?>&lng=<?php echo $this->_var['lng']; ?>", done_response, 'POST', 'JSON');
}
//+"&lat="+lat+"&lng="+lng
function jsApiCall(code,returnrul){
	WeixinJSBridge.invoke('getBrandWCPayRequest',code,function(res){
			WeixinJSBridge.log(res.err_msg);
			//alert(res.err_code+'调试信息：'+res.err_desc+res.err_msg);		
			if(res.err_msg.indexOf('ok')>0){
				window.location.href=returnrul;
			}else{
				window.location.href=returnrul;
			}
		});
}

		function callpay(code,returnrul)
		{
			if (typeof WeixinJSBridge == "undefined"){
			    if( document.addEventListener ){
			        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
			    }else if (document.attachEvent){
			        document.attachEvent('WeixinJSBridgeReady', jsApiCall);
			        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
			    }
			}else{
			    jsApiCall(code,returnrul);
			}
		}
		

function done_response(result){
	if(result.error==0){
		if(result.pay_code=='wxpay'){
			callpay(result.content.jsApiParameters,result.content.returnrul);
		}
		else if(result.pay_code=='alipay'){
			window.location='toalipay.php?order_id='+result.order_id;
		}
	}else if(result.error==1){
		//alert(result.url);
		window.location=result.url;
	}else if(result.error==2){
		alert(result.message);
		
	}
	
}
/*
wx.config({
    debug: false,//这里是开启测试，如果设置为true，则打开每个步骤，都会有提示，是否成功或者失败
    appId: '<?php echo $this->_var['appid']; ?>',
    timestamp: '<?php echo $this->_var['timestamp']; ?>',//这个一定要与上面的php代码里的一样。
    nonceStr: '<?php echo $this->_var['timestamp']; ?>',//这个一定要与上面的php代码里的一样。
    signature: '<?php echo $this->_var['signature']; ?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
        'checkJsApi',
        'openLocation',
        'getLocation'
    ]
});

wx.ready(function () {
    
    wx.checkJsApi({
    	
        jsApiList: [
            'getLocation'
        ],
        success: function (res) {
             //alert(JSON.stringify(res));
            // alert(JSON.stringify(res.checkResult.getLocation));
            if (res.checkResult.getLocation == false) {
            	document.forms[0].share_pay.disabled=false;
                alert('你的微信版本太低，不支持微信JS接口，请升级到最新的微信版本！');
                return;
            }
        }
    });
    wx.getLocation({
        success: function (res) {
            var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
            var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
            var speed = res.speed; // 速度，以米/每秒计
            var accuracy = res.accuracy; // 位置精度
           
            document.forms[0].share_pay.disabled=false;
            //alert(document.getElementById("share_pay").style.disabled);
            lat=latitude;
            lng=longitude;
            
        },
        cancel: function (res) {
        	document.forms[0].share_pay.disabled=false;
            //alert('用户拒绝授权获取地理位置');
        }
    });
    
   
    
}); */

</script>
    <?php endif; ?>

    <?php if ($this->_var['step'] == "done"): ?>
    <div class="message">
        <h3>温馨提示</h3>
        <p>您的订单已提交成功!</p>
        <p><?php echo $this->_var['lang']['remember_order_number']; ?>: <font><?php echo $this->_var['order']['order_sn']; ?></font></p>
        <?php if ($this->_var['pay_online']): ?>
        
        <p><?php echo $this->_var['pay_online']; ?></p>
        <?php endif; ?>
        <!-- 
        <p><?php echo $this->_var['order_submit_back']; ?></p> -->
    </div>
    <?php endif; ?>
</div>
</body>

<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</html>
