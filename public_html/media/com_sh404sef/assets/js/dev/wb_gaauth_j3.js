!function(t,a,e,n){"use strict";var o,i,s,u,h={};function r(){u.attr("disabled",!1),u.show(),s.css("display","block"),o.hide(),function(t){var e=.75*a.innerHeight,n=.75*a.innerWidth,o=a.open(t.targetUrl,t.windowName,t.windowFeatures+",width="+n+",height="+e);a.focus&&o.focus();return o}(h)}function w(){o.hide(),i.hide(),u.hide(),s.hide(),n(".wbga_auth_good").hide(),n("#jform_wbga_clearauthorization").val(1),n(".wbga_authclearhint").show()}h.windowName="wb_sh404sef_ga_auth_window",h.windowFeatures="menubar=no,location=yes,resizable=yes,scrollbars=yes,status=yes,toolbar=no,alwaysRaised=yes",n(e).ready(function(){try{h&&(u=n(".wbga_authinput"),s=n(".wbga_authinputhint"),(o=n(".wbga_authbutton")).on("click",r),(i=n(".wbga_clearauthbutton")).on("click",w))}catch(t){console.log("Error setting up Google authentication: "+t.message)}}),t.gaAuth={add:function(t){h=t}}}(window.sh404sefApp=window.sh404sefApp||{},window,document,jQuery);
//# sourceMappingURL=wb_gaauth_j3.js.map
