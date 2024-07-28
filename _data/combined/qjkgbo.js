/*BEGIN header */

/*BEGIN themes/modus/js/modus.async.js */
$("#albumActionsSwitcher").click(function(){var box=$(this).siblings(".categoryActions");if(box.is(":visible")){box.css("display","");}
else{$("#menubar,.switchBox").css("display","");box.css("left",Math.min($(this).position().left,$(window).width()-box.outerWidth(true)-5)).css("top",$(this).position().top+$(this).outerHeight(true)).css("display","block");}});if(!("ontouchstart"in document))
$(".categoryActions").on("mouseleave",function(){if($("#albumActionsSwitcher").is(":visible"))
$(this).css("display","");});$("#imageActionsSwitch").click(function(){var box=$(".actionButtons");if(box.is(":visible")){box.css("display","");}
else{$("#menubar,.switchBox").css("display","");box.css("left",Math.min($(this).position().left,$(window).width()-box.outerWidth(true)-5)).css("top",$(this).position().top+$(this).outerHeight(true)).css("display","block");}});if(!("ontouchstart"in document))
$(".actionButtons").on("mouseleave",function(){if($("#imageActionsSwitch").is(":visible"))
$(this).css("display","");});

/*BEGIN themes/default/js/switchbox.js */
(function(){var sbFunc=function(link,box){jQuery(link).click(function(){var elt=jQuery(box);elt.css("left",Math.min(jQuery(this).position().left,jQuery(window).width()-elt.outerWidth(true)-5)).css("top",jQuery(this).position().top+jQuery(this).outerHeight(true)).toggle();return false;});jQuery(box).on("mouseleave click",function(){jQuery(this).hide();});};if(window.SwitchBox){for(var i=0;i<SwitchBox.length;i+=2)
sbFunc(SwitchBox[i],SwitchBox[i+1]);}
window.SwitchBox={push:sbFunc}})();

/*BEGIN themes/modus/js/menuh.js */
$("#menuSwitcher").click(function(){var mb=$("#menubar");if(mb.is(":visible")){mb.css("display","");}
else{$(".categoryActions,.actionButtons,.switchBox").css("display","");mb.css("top",$(this).position().top+$(this).outerHeight(true)).css("display","block");}});$("#menubar DT").click(function(){var $this=$(this);if($this.css("display")!="block")
return;var dd=$this.siblings("DD");if(dd.length){if(dd.is(":visible"))
dd.css("display","");else
dd.css("display","block");}});

