function cBrow(){var e=!!window.opr&&!!opr.addons||!!window.opera||0<=navigator.userAgent.indexOf(" OPR/"),t="undefined"!=typeof InstallTrigger,n=(/constructor/i.test(window.HTMLElement)||(!window.safari||"undefined"!=typeof safari&&safari.pushNotification).toString(),document.documentMode||window.StyleMedia,!!window.chrome&&!!window.chrome.webstore);return(n||e)&&window.CSS,t||n||e}function parseURL(e){var t=document.createElement("a");return{href:t.href=e,protocol:t.protocol.replace(":",""),host:t.hostname,hostname:t.hostname,port:t.port,search:t.search,params:function(){for(var e,n={},o=t.search.replace(/^\?/,"").split("&"),r=o.length,a=0;a<r;a++)o[a]&&(n[(e=o[a].split("="))[0]]=e[1]);return n}(),file:(t.pathname.match(/\/([^\/?#]+)$/i)||[,""])[1],hash:t.hash.replace("#",""),pathname:t.pathname.replace(/^([^\/])/,"/$1"),relative:(t.href.match(/tps?:\/\/[^\/]+(.+)/)||[,""])[1],segments:t.pathname.replace(/^\//,"").split("/")}}function cIframe(){var e=rCookie("npfwg"),t=rCookie("npf_fx"),n=document.referrer,o=location.hostname,r=location.href,a=location.href,i="";lwm="",lwdc="",s=1,0<r.indexOf("utm_source")||0<r.indexOf("gclid")?s=0:""!=t&&(n=rCookie("npf_r"),o=rCookie("npf_l"),r=rCookie("npf_u")),""==e||0==s?(dco="localhost"==o?o:(o.match(/([^.]+)\.\w{2,3}(?:\.\w{2})?$/)||[])[0],document.cookie="npfwg=1;domain=."+dco+";expires=0; path=/",document.cookie="npf_r="+n+";domain=."+dco+";expires=0; path=/",document.cookie="npf_l="+o+";domain=."+dco+";expires=0; path=/",document.cookie="npf_u="+r+";domain=."+dco+";expires=0; path=/"):(n=rCookie("npf_r"),o=rCookie("npf_l"),r=rCookie("npf_u")),npf_m="undefined"!=typeof npf_m&&"preview"==npf_m?npf_m:"";var l="";if(cBrow())var c=new URL(r);else c=parseURL(r);var d=c.search.replace("?","").split("&"),m="";if(""!=d)for(w=0;w<d.length;w++){""!=m&&(m+="||");var p=d[w].split("=");m="utm_placement"==p[0].toLowerCase()||"utm_keyword"==p[0].toLowerCase()?m+p[0]+"@@"+d[w].replace(p[0]+"=",""):m+p[0]+"@@"+p[1]}var u=n;url_track="https://widgets.in5.nopaperforms.com/register?";var f="npf_wgts";null!=document.getElementsByClassName("npf_wgts2")&&document.getElementsByClassName("npf_wgts2").length>0&&(f="npf_wgts2",a="",null!=document.getElementById("Email")&&void 0!==document.getElementById("Email")&&(i="&lwe="+document.getElementById("Email").value),null!=document.getElementById("country_dial_codeMobile")&&void 0!==document.getElementById("country_dial_codeMobile")&&(lwdc="&lwdc="+document.getElementById("country_dial_codeMobile").value),null!=document.getElementById("Mobile")&&void 0!==document.getElementById("Mobile")&&(lwm="&lwm="+document.getElementById("Mobile").value));for(var h=document.getElementsByClassName(f),w=0;w<h.length;w++){if(g=h[w].getAttribute("data-height"),npf_w=h[w].getAttribute("data-w"),l=url_track+"&r="+u+"&q="+m+"&w="+npf_w+"&m="+npf_m+"&cu="+a+i+lwdc+lwm,"parent"==g){var g=document.getElementsByClassName(f)[0].parentElement.clientHeight;g+="px"}h[w].innerHTML="";var _=document.createElement("iframe");_.frameBorder=0,_.width="100%",_.height=g,_.setAttribute("sandbox","allow-top-navigation allow-scripts allow-same-origin allow-downloads"),_.setAttribute("src",l),h[w].appendChild(_)}}function rCookie(e){for(var t=e+"=",n=document.cookie.split(";"),o=0;o<n.length;o++){for(var r=n[o];" "==r.charAt(0);)r=r.substring(1,r.length);if(0==r.indexOf(t))return r.substring(t.length,r.length)}return""}cIframe();