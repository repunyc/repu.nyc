function trim(e){return e.replace(/^\s+/g,"").replace(/\s+$/g,"")}function getURLParameter(e){return decodeURI((RegExp(e+"=(.+?)(&|$)").exec(location.search)||[,null])[1])}function addError(e){var r=new Array;r[0]=e,addMsg("error",r)}function addNotice(e){var r=new Array;r[0]=e,addMsg("update",r)}function addMsg(e,r){jQuery(".wysija-msg.ajax").html('<div class="allmsgs"></div>'),jQuery(".wysija-msg.ajax .allmsgs ."+e+" ul").length||jQuery(".wysija-msg.ajax .allmsgs").append('<div class="'+e+'"><ul></ul></div>'),jQuery.each(r,function(r,s){jQuery(".wysija-msg.ajax .allmsgs ."+e+" ul").append("<li>"+s+"</li>")})}jQuery(function(e){e(document).ready(function(){if("undefined"!=typeof wysijaAJAX&&void 0!==wysijaAJAX.pluginurl){var r=wysijaAJAX.pluginurl.replace("plugins/wysija-newsletters","themes"),s=wysijaAJAX.pluginurl.replace("wysija-newsletters",""),a="";e('script[src^="'+r+'"]').each(function(){a+="<li>"+e(this).attr("src")+"</li>"}),e('script[src^="'+s+'"]').each(function(){e(this).attr('src:notcontains("wysija-newsletters")')&&(a+="<li>"+e(this).attr("src")+"</li>")}),""!==a&&(e(".wysija-footer").append('<div class="expandquer"><h2 class="errors">WYSIJA POSSIBLE 3rd PARTY CONFLICTS</h2><pre><ol>'+a+"</ol></pre></div>"),e(".wysija-footer pre").hide())}e("#wysija-app").siblings("div.updated, div.error").hide()}),e(document).on("click",".showerrors",function(){return e(".xdetailed-errors").toggle(),!1}),e(document).on("click",".shownotices",function(){return e(".xdetailed-updated").toggle(),!1})});