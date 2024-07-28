/*BEGIN header */

/*BEGIN admin/themes/default/js/common.js */
jQuery.fn.fontCheckbox=function(){this.find('input[type=checkbox]').each(function(){if(!jQuery(this).is(':checked')){jQuery(this).prev().toggleClass('icon-check icon-check-empty');}});this.find('input[type=checkbox]').on('change',function(){jQuery(this).prev().removeClass();if(!jQuery(this).is(':checked')){jQuery(this).prev().addClass('icon-check-empty');}
else{jQuery(this).prev().addClass('icon-check');}});this.find('input[type=radio]').each(function(){if(!jQuery(this).is(':checked')){jQuery(this).prev().toggleClass('icon-dot-circled icon-circle-empty');}
else{jQuery(this).closest('label').addClass('selected');}});this.find('input[type=radio]').on('change',function(){jQuery('.font-checkbox input[type=radio][name="'+jQuery(this).attr('name')+'"]').each(function(){jQuery(this).prev().removeClass();jQuery(this).closest('label').removeClass('selected');if(!jQuery(this).is(':checked')){jQuery(this).prev().addClass('icon-circle-empty');}
else{jQuery(this).prev().addClass('icon-dot-circled');jQuery(this).closest('label').addClass('selected');}})});};jQuery('.font-checkbox').fontCheckbox();function array_delete(arr,item){var i=arr.indexOf(item);if(i!=-1)arr.splice(i,1);}
function str_repeat(i,m){for(var o=[];m>0;o[--m]=i);return o.join('');}
if(!Array.prototype.indexOf){Array.prototype.indexOf=function(elt){var len=this.length;var from=Number(arguments[1])||0;from=(from<0)?Math.ceil(from):Math.floor(from);if(from<0)
from+=len;for(;from<len;from++){if(from in this&&this[from]===elt)
return from;}
return-1;};}
function getRandomInt(min,max){min=Math.ceil(min);max=Math.floor(max);return Math.floor(Math.random()*(max-min))+min;}
function sprintf(){var i=0,a,f=arguments[i++],o=[],m,p,c,x,s='';while(f){if(m=/^[^\x25]+/.exec(f)){o.push(m[0]);}
else if(m=/^\x25{2}/.exec(f)){o.push('%');}
else if(m=/^\x25(?:(\d+)\$)?(\+)?(0|'[^$])?(-)?(\d+)?(?:\.(\d+))?([b-fosuxX])/.exec(f)){if(((a=arguments[m[1]||i++])==null)||(a==undefined)){throw('Too few arguments.');}
if(/[^s]/.test(m[7])&&(typeof(a)!='number')){throw('Expecting number but found '+typeof(a));}
switch(m[7]){case'b':a=a.toString(2);break;case'c':a=String.fromCharCode(a);break;case'd':a=parseInt(a);break;case'e':a=m[6]?a.toExponential(m[6]):a.toExponential();break;case'f':a=m[6]?parseFloat(a).toFixed(m[6]):parseFloat(a);break;case'o':a=a.toString(8);break;case's':a=((a=String(a))&&m[6]?a.substring(0,m[6]):a);break;case'u':a=Math.abs(a);break;case'x':a=a.toString(16);break;case'X':a=a.toString(16).toUpperCase();break;}
a=(/[def]/.test(m[7])&&m[2]&&a>=0?'+'+a:a);c=m[3]?m[3]=='0'?'0':m[3].charAt(1):' ';x=m[5]-String(a).length-s.length;p=m[5]?str_repeat(c,x):'';o.push(s+(m[4]?a+p:p+a));}
else{throw('Huh ?!');}
f=f.substring(m[0].length);}
return o.join('');}
$('.search-cancel').on('click',function(){$('.search-input').val('');$('.search-input').trigger("input");})
$('.search-input').on('input',function(){if($('.search-input').val()==''){$('.search-cancel').hide();}else{$('.search-cancel').show();}})
class TemporaryState{constructor(){this.attrChanges=[];this.classChanges=[];this.htmlChanges=[];}
changeAttribute(obj,attr,tempVal){for(let i=0;i<obj.length;i++){this.attrChanges.push({object:$(obj[i]),attribute:attr,value:$(obj[i]).attr(attr)})}
obj.attr(attr,tempVal)}
changeClass(obj,st,tempclass){for(let i=0;i<obj.length;i++){if(!($(obj[i]).hasClass(tempclass)&&st)){this.classChanges.push({object:$(obj[i]),state:!st,class:tempclass})
if(st)
$(obj[i]).addClass(tempclass)
else
$(obj[i]).removeClass(tempclass)}}}
addClass(obj,tempclass){this.changeClass(obj,true,tempclass);}
removeClass(obj,tempclass){this.changeClass(obj,false,tempclass);}
changeHTML(obj,temphtml){for(let i=0;i<obj.length;i++){this.htmlChanges.push({object:$(obj[i]),html:$(obj[i]).html()})}
obj.html(temphtml);}
reverse(){this.attrChanges.forEach(function(change){if(change.value==undefined){change.object.removeAttr(change.attribute);}else{change.object.attr(change.attribute,change.value)}})
this.classChanges.forEach(function(change){if(change.state)
change.object.addClass(change.class)
else
change.object.removeClass(change.class)})
this.htmlChanges.forEach(function(change){change.object.html(change.html);})
this.attrChanges=[];this.classChanges=[];this.htmlChanges=[];}}
const jConfirm_alert_options={icon:'icon-ok',titleClass:"jconfirmAlert",theme:"modern",closeIcon:true,draggable:false,animation:"zoom",boxWidth:'20%',useBootstrap:false,backgroundDismiss:true,animateFromElement:false,typeAnimated:false,}
const jConfirm_confirm_options={draggable:false,titleClass:"jconfirmDeleteConfirm",theme:"modern",animation:"zoom",boxWidth:'40%',useBootstrap:false,type:'red',animateFromElement:false,backgroundDismiss:true,typeAnimated:false,}
const jConfirm_warning_options={icon:"icon-attention",draggable:false,titleClass:"jconfirmWarning jconfirmAlert",theme:"modern",type:'orange',closeIcon:true,draggable:false,animation:"zoom",boxWidth:'20%',useBootstrap:false,backgroundDismiss:true,animateFromElement:false,typeAnimated:false,}
const jConfirm_confirm_with_content_options={draggable:false,theme:"modern",animation:"zoom",boxWidth:'40%',useBootstrap:false,type:'red',animateFromElement:false,backgroundDismiss:true,typeAnimated:false,}
jQuery.fn.pwg_jconfirm_follow_href=function({alert_title="TITLE",alert_confirm="CONFIRM",alert_cancel="CANCEL",alert_content=""}={}){let button_href=$(this).attr('href');const options=alert_content===""?jConfirm_confirm_options:jConfirm_confirm_with_content_options
$(this).click(function(){$.confirm({content:alert_content,title:alert_title,buttons:{confirm:{text:alert_confirm,btnClass:'btn-red',action:function(){window.location.href=button_href;}},cancel:{text:alert_cancel}},...options});return(false);});};

/*BEGIN themes/default/js/plugins/jquery.tipTip.minified.js */
/*
 * TipTip
 * Copyright 2010 Drew Wilson
 * www.drewwilson.com
 * code.drewwilson.com/entry/tiptip-jquery-plugin
 *
 * Version 1.3   -   Updated: Mar. 23, 2010
 *
 * This Plug-In will create a custom tooltip to replace the default
 * browser tooltip. It is extremely lightweight and very smart in
 * that it detects the edges of the browser window and will make sure
 * the tooltip stays within the current window size. As a result the
 * tooltip will adjust itself to be displayed above, below, to the left 
 * or to the right depending on what is necessary to stay within the
 * browser window. It is completely customizable as well via CSS.
 *
 * This TipTip jQuery plug-in is dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */
(function($){$.fn.tipTip=function(options){var defaults={activation:"hover",keepAlive:false,maxWidth:"200px",edgeOffset:3,defaultPosition:"bottom",delay:400,fadeIn:200,fadeOut:200,attribute:"title",content:false,enter:function(){},exit:function(){}};var opts=$.extend(defaults,options);if($("#tiptip_holder").length<=0){var tiptip_holder=$('<div id="tiptip_holder" style="max-width:'+opts.maxWidth+';"></div>');var tiptip_content=$('<div id="tiptip_content"></div>');var tiptip_arrow=$('<div id="tiptip_arrow"></div>');$("body").append(tiptip_holder.html(tiptip_content).prepend(tiptip_arrow.html('<div id="tiptip_arrow_inner"></div>')))}else{var tiptip_holder=$("#tiptip_holder");var tiptip_content=$("#tiptip_content");var tiptip_arrow=$("#tiptip_arrow")}return this.each(function(){var org_elem=$(this);if(opts.content){var org_title=opts.content}else{var org_title=org_elem.attr(opts.attribute)}if(org_title!=""){if(!opts.content){org_elem.removeAttr(opts.attribute)}var timeout=false;if(opts.activation=="hover"){org_elem.hover(function(){active_tiptip()},function(){if(!opts.keepAlive){deactive_tiptip()}});if(opts.keepAlive){tiptip_holder.hover(function(){},function(){deactive_tiptip()})}}else if(opts.activation=="focus"){org_elem.focus(function(){active_tiptip()}).blur(function(){deactive_tiptip()})}else if(opts.activation=="click"){org_elem.click(function(){active_tiptip();return false}).hover(function(){},function(){if(!opts.keepAlive){deactive_tiptip()}});if(opts.keepAlive){tiptip_holder.hover(function(){},function(){deactive_tiptip()})}}function active_tiptip(){opts.enter.call(this);tiptip_content.html(org_title);tiptip_holder.hide().removeAttr("class").css("margin","0").css("max-width",opts.maxWidth);tiptip_arrow.removeAttr("style");var top=parseInt(org_elem.offset()['top']);var left=parseInt(org_elem.offset()['left']);var org_width=parseInt(org_elem.outerWidth());var org_height=parseInt(org_elem.outerHeight());var tip_w=tiptip_holder.outerWidth();var tip_h=tiptip_holder.outerHeight();var w_compare=Math.round((org_width-tip_w)/2);var h_compare=Math.round((org_height-tip_h)/2);var marg_left=Math.round(left+w_compare);var marg_top=Math.round(top+org_height+opts.edgeOffset);var t_class="";var arrow_top="";var arrow_left=Math.round(tip_w-12)/2;if(opts.defaultPosition=="bottom"){t_class="_bottom"}else if(opts.defaultPosition=="top"){t_class="_top"}else if(opts.defaultPosition=="left"){t_class="_left"}else if(opts.defaultPosition=="right"){t_class="_right"}var right_compare=(w_compare+left)<parseInt($(window).scrollLeft());var left_compare=(tip_w+left)>parseInt($(window).width());if((right_compare&&w_compare<0)||(t_class=="_right"&&!left_compare)||(t_class=="_left"&&left<(tip_w+opts.edgeOffset+5))){t_class="_right";arrow_top=Math.round(tip_h-13)/2;arrow_left=-12;marg_left=Math.round(left+org_width+opts.edgeOffset);marg_top=Math.round(top+h_compare)}else if((left_compare&&w_compare<0)||(t_class=="_left"&&!right_compare)){t_class="_left";arrow_top=Math.round(tip_h-13)/2;arrow_left=Math.round(tip_w);marg_left=Math.round(left-(tip_w+opts.edgeOffset+5));marg_top=Math.round(top+h_compare)}var top_compare=(top+org_height+opts.edgeOffset+tip_h+8)>parseInt($(window).height()+$(window).scrollTop());var bottom_compare=((top+org_height)-(opts.edgeOffset+tip_h+8))<0;if(top_compare||(t_class=="_bottom"&&top_compare)||(t_class=="_top"&&!bottom_compare)){if(t_class=="_top"||t_class=="_bottom"){t_class="_top"}else{t_class=t_class+"_top"}arrow_top=tip_h;marg_top=Math.round(top-(tip_h+5+opts.edgeOffset))}else if(bottom_compare|(t_class=="_top"&&bottom_compare)||(t_class=="_bottom"&&!top_compare)){if(t_class=="_top"||t_class=="_bottom"){t_class="_bottom"}else{t_class=t_class+"_bottom"}arrow_top=-12;marg_top=Math.round(top+org_height+opts.edgeOffset)}if(t_class=="_right_top"||t_class=="_left_top"){marg_top=marg_top+5}else if(t_class=="_right_bottom"||t_class=="_left_bottom"){marg_top=marg_top-5}if(t_class=="_left_top"||t_class=="_left_bottom"){marg_left=marg_left+5}tiptip_arrow.css({"margin-left":arrow_left+"px","margin-top":arrow_top+"px"});tiptip_holder.css({"margin-left":marg_left+"px","margin-top":marg_top+"px"}).attr("class","tip"+t_class);if(timeout){clearTimeout(timeout)}timeout=setTimeout(function(){tiptip_holder.stop(true,true).fadeIn(opts.fadeIn)},opts.delay)}function deactive_tiptip(){opts.exit.call(this);if(timeout){clearTimeout(timeout)}tiptip_holder.fadeOut(opts.fadeOut)}}})}})(jQuery);

