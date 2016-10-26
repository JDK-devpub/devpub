
<!DOCTYPE html>
<html lang="en">
<head>
            <meta name="robots" content="noodp,nodir,noydir">
        <meta name="keywords" content="Offshore outsourcing, Freelancers, India, Russia, Ukraine, php Programmers, Coders, Developers, Writers, Web Designers, Website Design, Technical Writers">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQIBUF5RGwICV1ZTAQAP"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(s){try{i("ierr",[s,(new Date).getTime(),!0])}catch(c){}}return"function"==typeof f&&f.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,(new Date).getTime()])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=window.onerror,u=!1,d=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),u=!0)}s.on("fn-start",function(t,e,n){u&&(d+=1)}),s.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),s.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),s.on("internal-error",function(t){i("ierr",[t,(new Date).getTime(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState";t("loader").features.stn=!0,t(6);var g=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof g&&(this.bstStart=Date.now())}),o.on(w,function(t,e){var n=t[0];n instanceof g&&i("bst",[n,e,this.bstStart,Date.now()])}),a.on(m,function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),a.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),this.bstType])}),s.on(m,function(){this.bstStart=Date.now()}),s.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=Date.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,!1),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t(17)(a),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){if(t[1]){var n=t[1];if("function"==typeof n){var r=c(n,"nr@wrapped",function(){return s(n,"fn-",null,n.name||"anonymous")});this.wrapped=t[1]=r}else"function"==typeof n.handleEvent&&s.inPlace(n,["handleEvent"],"fn-")}}),a.on(d+"-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{}],6:[function(t,e,n){var r=t("ee").get("history"),o=t(17)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,e,n){var r=t("ee").get("raf"),o=t(17)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(17)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,w,"fn-",s)}function i(t){v.push(t),h&&(g=-g,b.data=g)}function a(){for(var t=0;t<v.length;t++)r([],v[t]);v.length&&(v=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t(17)(u),l=NREUM.o,p=l.XHR,h=l.MO,m="readystatechange",w=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],v=[];e.exports=u;var y=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(m,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(p,y),y.prototype=p.prototype,d.inPlace(y.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var g=1,b=document.createTextNode(g);new h(a).observe(b,{characterData:!0})}else f.on("fn-end",function(t){t[0]&&t[0].type===m||a()})},{}],10:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!e.aborted){if(n.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var a=t.getResponseHeader("X-NewRelic-App-Data");a&&(e.cat=a.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return h(r)}function i(t,e){var n=c(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=h(r);i&&(n.txSize=i)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{f.emit("internal-error",[n])}catch(r){}}};for(var a=0;a<d;a++)e.addEventListener(u[a],this.listener,!1)}),f.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),f.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],e)}),f.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],e)}),f.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),f.on("fn-end",function(t,e){this.xhrCbStart&&f.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{}],11:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],12:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(s(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var u=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],d="api-",l=d+"ixn-";a(u,function(t,e){f[e]=o(d+e,!0,"api")}),f.addPageAction=o(d+"addPageAction",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var p=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){p[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],13:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],14:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],15:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],16:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],17:[function(t,e,n){function r(t){return!(t&&"function"==typeof t&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;e.exports=function(t){function e(t,e,n,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof n?n(r,a):n||{}}catch(u){d([u,"",[r,a,o],s])}f(e+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(l){throw f(e+"err",[r,a,l],s),l}finally{f(e+"end",[r,a,c],s)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,u(t,nrWrapper),nrWrapper)}function n(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function f(e,n,r){if(!c){c=!0;try{t.emit(e,n,r)}catch(o){d([o,e,n,r])}c=!1}}function u(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){d([r])}for(var o in t)s.call(t,o)&&(e[o]=t[o]);return e}function d(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),e.inPlace=n,e.flag=a,e}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),s=a.length,c=0;c<s;c++)a[c].apply(i,r);var u=f[w[n]];return u&&u.push([v,n,r,i]),i}function d(t,e){m[t]=l(t).concat(e)}function l(t){return m[t]||[]}function p(t){return u[t]=u[t]||o(n)}function h(t,e){c(t,function(t,n){e=e||"feature",w[n]=e,e in f||(f[e]=[])})}var m={},w={},v={on:d,emit:n,get:p,listeners:l,context:e,buffer:h};return v}function i(){return new r}var a="nr@context",s=t("gos"),c=t(15),f={},u={},d=e.exports=o();d.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!g++){var t=y.info=NREUM.info,e=u.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(w,function(e,n){t[e]||(t[e]=n)});var n="https"===m.split(":")[0]||t.sslForHttp;y.proto=n?"https://":"http://",s("mark",["onload",a()],null,"api");var r=u.createElement("script");r.src=y.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===u.readyState&&i()}function i(){s("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var s=t("handle"),c=t(15),f=window,u=f.document,d="addEventListener",l="attachEvent",p=f.XMLHttpRequest,h=p&&p.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:p,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(12);var m=""+location,w={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-974.min.js"},v=p&&h&&h[d]&&!/CriOS/.test(navigator.userAgent),y=e.exports={offset:a(),origin:m,features:{},xhrWrappable:v};u[d]?(u[d]("DOMContentLoaded",i,!1),f[d]("load",r,!1)):(u[l]("onreadystatechange",o),f[l]("onload",r)),s("mark",["firstbyte",a()],null,"api");var g=0},{}]},{},["loader",2,10,4,3]);</script>

    <title>Upwork Freelancer</title>

    <script type="text/javascript">
      function create_mark(name) {
        window.performance && window.performance.mark && window.performance.mark(name);
      }

      function remove_mark(name) {
        window.performance && window.performance.clearMarks && window.performance.clearMarks(name);
      }

      function create_measure(name, startMark, endMark) {
        window.performance && window.performance.measure && window.performance.measure(name, startMark, endMark);
      }

      function remove_measure(name) {
        window.performance && window.performance.clearMeasures && window.performance.clearMeasures(name);
      }
    </script>

                        <link rel="stylesheet" href="https://assets.static-upwork.com/components/1.8.3/air.global.1.8.3.min.css" onload="remove_mark('navCompRenderEnd');remove_measure('navCompRendered');create_mark('navCompRenderEnd');create_measure('navCompRendered', 'navigationStart', 'navCompRenderEnd');"/>
                    <link rel="stylesheet" href="https://assets.static-upwork.com/components/1.8.3/air.components.1.8.3.min.css" onload="remove_mark('navCompRenderEnd');remove_measure('navCompRendered');create_mark('navCompRenderEnd');create_measure('navCompRendered', 'navigationStart', 'navCompRenderEnd');"/>
                    <link rel="stylesheet" href="https://assets.static-upwork.com/fonts/1.10.0/fonts.gotham.1.10.0.css" onload="remove_mark('navCompRenderEnd');remove_measure('navCompRendered');create_mark('navCompRenderEnd');create_measure('navCompRendered', 'navigationStart', 'navCompRenderEnd');"/>
                    <link rel="stylesheet" href="https://assets.static-upwork.com/fonts/1.10.0/fonts.air-icons.1.10.0.css" onload="remove_mark('navCompRenderEnd');remove_measure('navCompRendered');create_mark('navCompRenderEnd');create_measure('navCompRendered', 'navigationStart', 'navCompRenderEnd');"/>
                    <link rel="stylesheet" href="https://assets.static-upwork.com/fe/release/fe.app.profile/rel201610110705/fe.app.profile.rel201610110705.min.css"/>
                        <link rel="icon" type="image/x-icon" href="/favicon.ico" />

                        <link rel="preload" href="https://assets.static-upwork.com/fonts/1.10.0/fonts.gotham-async.1.10.0.css" as="style" onload="this.rel='stylesheet'"  />
            <noscript><link rel="stylesheet" href="https://assets.static-upwork.com/fonts/1.10.0/fonts.gotham-async.1.10.0.css"  /></noscript>
                    <link rel="preload" href="https://assets.static-upwork.com/fonts/1.10.0/fonts.air-icons-async.1.10.0.css" as="style" onload="this.rel='stylesheet'"  />
            <noscript><link rel="stylesheet" href="https://assets.static-upwork.com/fonts/1.10.0/fonts.air-icons-async.1.10.0.css"  /></noscript>
                <script type="text/javascript">!function(a){var b=function(b,c,d){function j(a){return e.body?a():void setTimeout(function(){j(a)})}function l(){f.addEventListener&&f.removeEventListener("load",l),f.media=d||"all"}var g,e=a.document,f=e.createElement("link");if(c)g=c;else{var h=(e.body||e.getElementsByTagName("head")[0]).childNodes;g=h[h.length-1]}var i=e.styleSheets;f.rel="stylesheet",f.href=b,f.media="only x",j(function(){g.parentNode.insertBefore(f,c?g:g.nextSibling)});var k=function(a){for(var b=f.href,c=i.length;c--;)if(i[c].href===b)return a();setTimeout(function(){k(a)})};return f.addEventListener&&f.addEventListener("load",l),f.onloadcssdefined=k,k(l),f};"undefined"!=typeof exports?exports.loadCSS=b:a.loadCSS=b}("undefined"!=typeof global?global:this);</script>
        <script type="text/javascript">!function(a){if(a.loadCSS){var b=loadCSS.relpreload={};if(b.support=function(){try{return a.document.createElement("link").relList.supports("preload")}catch(b){return!1}},b.poly=function(){for(var b=a.document.getElementsByTagName("link"),c=0;c<b.length;c++){var d=b[c];"preload"===d.rel&&"style"===d.getAttribute("as")&&(a.loadCSS(d.href,d),d.rel=null)}},!b.support()){b.poly();var c=a.setInterval(b.poly,300);a.addEventListener&&a.addEventListener("load",function(){a.clearInterval(c)}),a.attachEvent&&a.attachEvent("onload",function(){a.clearInterval(c)})}}}(this);</script>

    <script type="text/javascript">
    // global Applet object
    var Applet = new function() {
        var basePath = '/freelancers';
        var phpVars = {"csrfTokenCookieName":"XSRF-TOKEN","csrfTokenHeaderName":"X-Odesk-Csrf-Token","runtime_id":"ed717229-e7f0-4632-8f4f-19d697e27f59","clientStatsDMetrics":true,"smfAjax":false,"pageSpeedMetrics":false,"pageId":"flProfile","scrubbingFlags":[],"profile":{"identity":{"userId":"d_tanugrah","ciphertext":"~013e93398845c05cf7","recno":9955308,"legacyCiphertext":"~~68daea48231b6680","uid":"674501273707720704","edcUserId":0},"profile":{"name":"David Tanugrah","shortName":"David Tanugrah","title":"Computer Science Student","description":"Currently studying in University of Wollongong (UOW) at INTI College University Malaysia.\nComputer Science Student.\n\nLooking up for a small C++ projects and English-Indonesian translator or vice versa as a part-time job.","location":{"country":"Malaysia","city":"Jakarta","state":null,"countryTimezone":"UTC+08:00 Krasnoyarsk","worldRegion":"Jakarta, Malaysia (UTC+08:00)","timezoneOffset":25200,"countryCode":"MYS"},"portrait":{"portrait":"https:\/\/odesk-prod-portraits.s3.amazonaws.com\/Users:d_tanugrah:PortraitUrl?AWSAccessKeyId=1XVAX3FNQZAFC9GJCFR2&Expires=2147483647&Signature=GdzDS1It8We2s7se4aGpPqTwpFI%3D&1449650041743285","bigPortrait":"https:\/\/odesk-prod-portraits.s3.amazonaws.com\/Users:d_tanugrah:PortraitUrl_100?AWSAccessKeyId=1XVAX3FNQZAFC9GJCFR2&Expires=2147483647&Signature=3lbQhxvKQX6fzros5djlubtU0wI%3D&1449650041743285","smallPortrait":"https:\/\/odesk-prod-portraits.s3.amazonaws.com\/Users:d_tanugrah:PortraitUrl_50?AWSAccessKeyId=1XVAX3FNQZAFC9GJCFR2&Expires=2147483647&Signature=dhiJbeZeKCemM5Ni3Cn7%2FHAd4hM%3D&1449650041743285","originalPortrait":"https:\/\/odesk-prod-portraits.s3.amazonaws.com\/Users:d_tanugrah:PortraitUrl_original?AWSAccessKeyId=1XVAX3FNQZAFC9GJCFR2&Expires=2147483647&Signature=3qnBh4Zs9gRzcfcU0AAKccjVy1I%3D&1449650041743285"},"skills":[{"name":"network-programming","prettyName":"Network Programming","active":true,"testsCount":0,"hasTests":false,"uid":"514995599618273280","rank":1,"description":"Computer network programming involves writing computer programs that enable processes to communicate with each other across a computer network.","externalUrl":"http:\/\/en.wikipedia.org\/wiki\/Computer_network_programming","tests":null,"certificates":null},{"name":"application-programming","prettyName":"Application Programming","active":true,"testsCount":0,"hasTests":false,"uid":"514995525718831104","rank":2,"description":"In computer programming, an application programming interface (API) specifies how some software components should interact with each other.","externalUrl":"http:\/\/en.wikipedia.org\/wiki\/Application_programming_interface","tests":null,"certificates":null},{"name":"network-security","prettyName":"Network Security","active":true,"testsCount":0,"hasTests":false,"uid":"475721704088174592","rank":3,"description":"Network security consists of the provisions and policies adopted by the network administrator to prevent and monitor unauthorized access, misuse, modification, or denial of the computer network and network-accessible resources.","externalUrl":"http:\/\/en.wikipedia.org\/wiki\/Network_security","tests":null,"certificates":null}],"visibility":1,"isDisabled":false,"affiliated":false,"isLooking":false,"isLookingWeek":false,"exposeFullName":true,"confidentialityBound":false,"isConsoleViewable":false,"isSearchable":false,"agencyRef":null,"idVerified":false,"exposeBillings":true,"pci":{"action":"experiences","actionCredit":30,"actual":60,"ts":"1449657180","display":40},"phoneVerified":false,"state":"Auto Accepted","hideAgencyEarnings":false,"contractorTier":1},"stats":{"totalHours":0,"totalHoursRecent":0,"totalFeedback":0,"totalFeedbackRecent":0,"totalJobsWorked":0,"totalJobsWorkedRecent":0,"rating":0,"ratingRecent":0,"hourlyRate":{"currencyCode":"USD","amount":3},"totalPortfolioItems":0,"englishLevel":3,"memberSince":"2015-12-09T00:00:00.000Z","lastWorkedOn":null,"hireAgainPercentage":0,"totalHourlyJobs":0,"totalHourlyJobsRecent":0,"totalFixedJobs":0,"totalFixedJobsRecent":0,"isRecommended":false,"responsiveState":"","privateFeedbackHireAgain":0,"scores":0,"totalRevenue":0,"skillTestsPassed":0,"activeInterviews":0,"activeAssignments":0,"nSS100BwScore":0,"topRatedStatus":"not_eligible","totalHoursActual":0,"edcAssignments":0},"video":null,"groups":null,"tests":null,"agencies":null,"portfolios":[],"competencies":null,"assignments":[],"availability":{"availabilityTs":null,"source":"onboarding","uid":"674507772112900096","personUid":"674501273707720704","capacity":{"nid":"notSure","name":"As Needed - Open to Offers"},"creationTs":"2015-12-09T08:35:59Z"},"clientRelationship":null,"languages":[{"uid":"674507757404045312","personRid":9955308,"language":{"iso639Code":"en","isActive":true,"englishName":"English","name":"English"},"proficiencyLevel":{"code":"flul","proficiencyTitle":"Fluent","rank":3,"isActive":true,"description":"I have complete command of this language with perfect grammar","type":"level"},"verified":false,"personUid":"674501273707720704","verifiedByCertificate":false,"verifiedByFeedback":false},{"uid":"674504845812326400","personRid":9955308,"language":{"iso639Code":"id","isActive":true,"englishName":"Indonesian","name":"Indonesian"},"proficiencyLevel":{"code":"natl","proficiencyTitle":"Native or Bilingual","rank":4,"isActive":true,"description":"I have complete command of this language, including breadth of vocabulary, idioms, and colloquialisms","type":"level"},"verified":false,"personUid":"674501273707720704","verifiedByCertificate":false,"verifiedByFeedback":false}],"certificates":null,"employmentHistory":null,"education":[{"uid":"674508452904443904","personUid":"674501273707720704","institutionName":"University of Wollongong at INTI College University","standardizedInstitutionUid":null,"areaOfStudy":"Computer science","standardizedAreaOfStudyUid":"482305184288899086","degree":"","standardizedDegreeUid":null,"dateStarted":"2014-01-01","dateEnded":"2015-12-01","comment":"Software Engineering and System Security"}],"otherExperiences":null,"esn":[{"esnName":"linkedin","esnId":"bm_4f2i55f","esnUserProfile":"https:\/\/www.linkedin.com\/in\/david-tanugrah-4683b0100","isPublic":true,"revokedOn":null}],"jobCategoriesV2":[{"groupUid":"531770282580668419","groupName":"IT & Networking","selectedCategories":[{"uid":"531770282589057033","name":"Database Administration"},{"uid":"531770282589057036","name":"Information Security"},{"uid":"531770282589057037","name":"Other - IT & Networking"}]}],"assignmentsInProgress":[],"assignmentsEnded":{"pageNumber":1,"itemsPerPage":10,"totalItems":0,"sortOrder":1,"assignments":[],"filterClientAssignments":false},"isACE":false},"userId":"674501273707720704","isOwner":true,"isViewAsOthers":false,"isFreelancer":true,"isClient":false,"isVisitor":false,"isOnboardingV2":false,"elanceOnboarding":false,"isAgency":false,"rateMinValue":3,"rateMaxValue":999,"facebookAppId":121633185800,"refererUrl":"https:\/\/www.upwork.com\/ab\/proposals\/","startInEditMode":false,"profileUrl":"http:\/\/www.upwork.com\/o\/profiles\/users\/_~013e93398845c05cf7\/","qualifiesForCustomUrl":false,"qt":{"FP2511_HideFreelancerBillings":"Control","FP7102_IdentifyContactInformation":"Control","FP6855_PSR":"Treatment"},"ff":{"ShowFreelancerTotalHoursUpdated":false,"showClientAssignmentsOnly":true,"FP6777FsHideEarnings":true,"FP7853ProfileInterviewWidget":true,"ResponsiveStatsFreelancerShorten":true},"isEnterprise":null,"isTopRated":false,"utimezoneOffset":25200,"isACE":false,"profileSettings":{"csrfTokenCookieName":"XSRF-TOKEN","csrfTokenHeaderName":"X-Odesk-Csrf-Token","runtime_id":"ed717229-e7f0-4632-8f4f-19d697e27f59","clientStatsDMetrics":true,"smfAjax":false,"pageSpeedMetrics":false,"pageId":"flProfile","scrubbingFlags":[],"profile":{"identity":{"userId":"d_tanugrah","ciphertext":"~013e93398845c05cf7","recno":9955308,"legacyCiphertext":"~~68daea48231b6680","uid":"674501273707720704","edcUserId":0},"profile":{"name":"David Tanugrah","shortName":"David Tanugrah","title":"Computer Science Student","description":"Currently studying in University of Wollongong (UOW) at INTI College University Malaysia.\nComputer Science Student.\n\nLooking up for a small C++ projects and English-Indonesian translator or vice versa as a part-time job.","location":{"country":"Malaysia","city":"Jakarta","state":null,"countryTimezone":"UTC+08:00 Krasnoyarsk","worldRegion":"Jakarta, Malaysia (UTC+08:00)","timezoneOffset":25200,"countryCode":"MYS"},"portrait":{"portrait":"https:\/\/odesk-prod-portraits.s3.amazonaws.com\/Users:d_tanugrah:PortraitUrl?AWSAccessKeyId=1XVAX3FNQZAFC9GJCFR2&Expires=2147483647&Signature=GdzDS1It8We2s7se4aGpPqTwpFI%3D&1449650041743285","bigPortrait":"https:\/\/odesk-prod-portraits.s3.amazonaws.com\/Users:d_tanugrah:PortraitUrl_100?AWSAccessKeyId=1XVAX3FNQZAFC9GJCFR2&Expires=2147483647&Signature=3lbQhxvKQX6fzros5djlubtU0wI%3D&1449650041743285","smallPortrait":"https:\/\/odesk-prod-portraits.s3.amazonaws.com\/Users:d_tanugrah:PortraitUrl_50?AWSAccessKeyId=1XVAX3FNQZAFC9GJCFR2&Expires=2147483647&Signature=dhiJbeZeKCemM5Ni3Cn7%2FHAd4hM%3D&1449650041743285","originalPortrait":"https:\/\/odesk-prod-portraits.s3.amazonaws.com\/Users:d_tanugrah:PortraitUrl_original?AWSAccessKeyId=1XVAX3FNQZAFC9GJCFR2&Expires=2147483647&Signature=3qnBh4Zs9gRzcfcU0AAKccjVy1I%3D&1449650041743285"},"skills":[{"name":"network-programming","prettyName":"Network Programming","active":true,"testsCount":0,"hasTests":false,"uid":"514995599618273280","rank":1,"description":"Computer network programming involves writing computer programs that enable processes to communicate with each other across a computer network.","externalUrl":"http:\/\/en.wikipedia.org\/wiki\/Computer_network_programming","tests":null,"certificates":null},{"name":"application-programming","prettyName":"Application Programming","active":true,"testsCount":0,"hasTests":false,"uid":"514995525718831104","rank":2,"description":"In computer programming, an application programming interface (API) specifies how some software components should interact with each other.","externalUrl":"http:\/\/en.wikipedia.org\/wiki\/Application_programming_interface","tests":null,"certificates":null},{"name":"network-security","prettyName":"Network Security","active":true,"testsCount":0,"hasTests":false,"uid":"475721704088174592","rank":3,"description":"Network security consists of the provisions and policies adopted by the network administrator to prevent and monitor unauthorized access, misuse, modification, or denial of the computer network and network-accessible resources.","externalUrl":"http:\/\/en.wikipedia.org\/wiki\/Network_security","tests":null,"certificates":null}],"visibility":1,"isDisabled":false,"affiliated":false,"isLooking":false,"isLookingWeek":false,"exposeFullName":true,"confidentialityBound":false,"isConsoleViewable":false,"isSearchable":false,"agencyRef":null,"idVerified":false,"exposeBillings":true,"pci":{"action":"experiences","actionCredit":30,"actual":60,"ts":"1449657180","display":40},"phoneVerified":false,"state":"Auto Accepted","hideAgencyEarnings":false,"contractorTier":1},"stats":{"totalHours":0,"totalHoursRecent":0,"totalFeedback":0,"totalFeedbackRecent":0,"totalJobsWorked":0,"totalJobsWorkedRecent":0,"rating":0,"ratingRecent":0,"hourlyRate":{"currencyCode":"USD","amount":3},"totalPortfolioItems":0,"englishLevel":3,"memberSince":"2015-12-09T00:00:00.000Z","lastWorkedOn":null,"hireAgainPercentage":0,"totalHourlyJobs":0,"totalHourlyJobsRecent":0,"totalFixedJobs":0,"totalFixedJobsRecent":0,"isRecommended":false,"responsiveState":"","privateFeedbackHireAgain":0,"scores":0,"totalRevenue":0,"skillTestsPassed":0,"activeInterviews":0,"activeAssignments":0,"nSS100BwScore":0,"topRatedStatus":"not_eligible","totalHoursActual":0,"edcAssignments":0},"video":null,"groups":null,"tests":null,"agencies":null,"portfolios":[],"competencies":null,"assignments":[],"availability":{"availabilityTs":null,"source":"onboarding","uid":"674507772112900096","personUid":"674501273707720704","capacity":{"nid":"notSure","name":"As Needed - Open to Offers"},"creationTs":"2015-12-09T08:35:59Z"},"clientRelationship":null,"languages":[{"uid":"674507757404045312","personRid":9955308,"language":{"iso639Code":"en","isActive":true,"englishName":"English","name":"English"},"proficiencyLevel":{"code":"flul","proficiencyTitle":"Fluent","rank":3,"isActive":true,"description":"I have complete command of this language with perfect grammar","type":"level"},"verified":false,"personUid":"674501273707720704","verifiedByCertificate":false,"verifiedByFeedback":false},{"uid":"674504845812326400","personRid":9955308,"language":{"iso639Code":"id","isActive":true,"englishName":"Indonesian","name":"Indonesian"},"proficiencyLevel":{"code":"natl","proficiencyTitle":"Native or Bilingual","rank":4,"isActive":true,"description":"I have complete command of this language, including breadth of vocabulary, idioms, and colloquialisms","type":"level"},"verified":false,"personUid":"674501273707720704","verifiedByCertificate":false,"verifiedByFeedback":false}],"certificates":null,"employmentHistory":null,"education":[{"uid":"674508452904443904","personUid":"674501273707720704","institutionName":"University of Wollongong at INTI College University","standardizedInstitutionUid":null,"areaOfStudy":"Computer science","standardizedAreaOfStudyUid":"482305184288899086","degree":"","standardizedDegreeUid":null,"dateStarted":"2014-01-01","dateEnded":"2015-12-01","comment":"Software Engineering and System Security"}],"otherExperiences":null,"esn":[{"esnName":"linkedin","esnId":"bm_4f2i55f","esnUserProfile":"https:\/\/www.linkedin.com\/in\/david-tanugrah-4683b0100","isPublic":true,"revokedOn":null}],"jobCategoriesV2":[{"groupUid":"531770282580668419","groupName":"IT & Networking","selectedCategories":[{"uid":"531770282589057033","name":"Database Administration"},{"uid":"531770282589057036","name":"Information Security"},{"uid":"531770282589057037","name":"Other - IT & Networking"}]}],"assignmentsInProgress":[],"assignmentsEnded":{"pageNumber":1,"itemsPerPage":10,"totalItems":0,"sortOrder":1,"assignments":[],"filterClientAssignments":false},"isACE":false},"userId":"674501273707720704","isOwner":true,"isViewAsOthers":false,"isFreelancer":true,"isClient":false,"isVisitor":false,"isOnboardingV2":false,"elanceOnboarding":false,"isAgency":false,"rateMinValue":3,"rateMaxValue":999,"facebookAppId":121633185800,"refererUrl":"https:\/\/www.upwork.com\/ab\/proposals\/","startInEditMode":false,"profileUrl":"http:\/\/www.upwork.com\/o\/profiles\/users\/_~013e93398845c05cf7\/","qualifiesForCustomUrl":false,"qt":{"FP2511_HideFreelancerBillings":"Control","FP7102_IdentifyContactInformation":"Control","FP6855_PSR":"Treatment"},"ff":{"ShowFreelancerTotalHoursUpdated":false,"showClientAssignmentsOnly":true,"FP6777FsHideEarnings":true,"FP7853ProfileInterviewWidget":true,"ResponsiveStatsFreelancerShorten":true},"isEnterprise":null,"isTopRated":false,"utimezoneOffset":25200,"isACE":false}};
        var angularCache = [];
        var assetsVersion = null;
        var instanceEnv = "prod";

        var bundleRegex = /^@([^\/]*)Bundle\/(.*)$/;

        this.getBasePath = function() {
            return basePath;
        };

        this.buildPath = function(path) {
            var matches = bundleRegex.exec(path);
            if (matches != null) {
                var baseUrl = basePath + '/bundles/' + matches[1].toLowerCase() + '/' + matches[2];
            }
            else {
                var baseUrl = basePath + path;
            }
            if (assetsVersion) {
                if (baseUrl.indexOf('?') < 0) {
                    return baseUrl + '?' + assetsVersion;
                } else {
                    return baseUrl + '&' + assetsVersion;
                }
            } else {
                return baseUrl;
            }
        };

        var visitorId = null;
                visitorId = "210.195.107.19.1477301019682635";

        this.getVisitorId = function() {
            return visitorId;
        };

        var visitorApiKey = null;
                    visitorApiKey = "afdea8f5845bc33b90d8366c8cb2754d";
                this.getVisitorApiKey = function() {
            return visitorApiKey;
        };


        var User = null;
                User = new function() {
            this.getUid = function() { return "674501273707720704"; };
            this.getRid = function() { return "9955308"; };
            this.getNid = function() { return "d_tanugrah"; };
        };

        this.getUser = function() {
            return User;
        };

        var Organization = null;
                Organization = new function() {
            this.getUid = function() { return "674501273808384002"; };
            this.getRid = function() { return ""; };
            this.isSoleProprietor = function() { return true; };
            this.isBusiness = function() { return false; };
            this.isClient = function() { return false; };
            this.isVendor = function() { return true; };
        };

        this.getOrganization = function() {
            return Organization;
        };

        this.getVar = function(key) {
            return phpVars[key];
        };

        this.getAngularCache = function() {
            return angularCache;
        };

        this.getInstanceEnv = function() {
            return instanceEnv;
        }
    };
</script>
                </head>
<body data-ng-app="fe.app.profile" class=" default-layout">

                    <script>
                dataLayer = [{"site":{"application":"UserProfileBinder","version":"4e7afe69eb23ef6b00840d8b4f6b379aac37f29b","environment":"prod"},"user":{"visitor_id":"210.195.107.19.1477301019682635","recognized":true,"internal":false,"loggedIn":true,"user_id":"674501273707720704","primary-type":"freelancer"}}];
            </script>

                    <!-- Google Tag Manager -->
            <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TC7GHX&amp;site.application=UserProfileBinder&amp;site.version=4e7afe69eb23ef6b00840d8b4f6b379aac37f29b&amp;site.environment=prod&amp;user.visitor_id=210.195.107.19.1477301019682635&amp;user.recognized=1&amp;user.internal=&amp;user.loggedIn=1&amp;user.user_id=674501273707720704&amp;user.primary-type=freelancer" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-TC7GHX');</script>
            <!-- End Google Tag Manager -->
                    <div id="layout">
                    <div data-o-smf data-o-smf-location="very_top"></div>
                    <header class="header-navbar-skinny" role="banner" data-ng-controller="skinnyHeaderController">


<nav role="navigation" class="primary-navbar navbar navbar-default navbar-condensed">
    <div class="container">
                <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#skinny-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                            <a href="/home/"
                   class="navbar-brand"
                   target="_self">Upwork</a>
                    </div>
                                <div class="collapse navbar-collapse" id="skinny-nav">
                            <ul class="nav navbar-nav" role="menu">
                                                                                                <li                                 class="active "
                                    >
                                <a href="/find-work-home/" target="_self">
                                    Find Work
                                                                    </a>
                            </li>
                                                    <li >
                                <a href="/d/home" target="_self">
                                    My Jobs
                                                                    </a>
                            </li>
                                                    <li >
                                <a href="/reports" target="_self">
                                    Reports
                                                                    </a>
                            </li>
                                                    <li                                 class=" messages"
                                    >
                                <a href="/messages/" target="_self">
                                    Messages
                                                                                        <span data-o-badges="dash" data-o-badges-port="674501273808384002"></span>
            <span data-o-badges="dash" data-o-badges-layout="ellipsis" data-o-badges-port="674501273808384002"
                  data-o-badges-key="unimportant" data-o-badges-exclusive="true"></span>

                                                                    </a>
                            </li>
                                                            </ul>
                        <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="javascript:" class="dropdown-toggle">
                        <span class="glyphicon air-icon-search"></span>
                    </a>

<div data-o-freelancer-search data-is-search-expanded="true">
    <div data-o-freelancer-search-option data-label="Jobs" data-url="/o/jobs/browse/" data-placeholder="Find Jobs" data-selected="true"></div>
    <div data-o-freelancer-search-option data-label="Freelancers" data-url="/o/profiles/browse/" data-placeholder="Find Freelancers"></div>
</div>                </li>

                                    <li data-dropdown class="dropdown" data-on-toggle="toggleHelp(open)">
                        <a data-dropdown-toggle href="javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon air-icon-question"></span><span data-ng-cloak data-ng-if="helpMenuUnread !== 0" class="badge badge-circle"></span></a>
                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                    <a href="https://support.upwork.com/login" target="_blank">
                                        <span>Help and Support</span>
                                                                            </a>
                                </li>
                                                            <li>
                                    <a href="http://community.upwork.com" target="_blank">
                                        <span>Community and Forums</span>
                                                                            </a>
                                </li>
                                                            <li>
                                    <a href="/disputes" target="_self">
                                        <span>Disputes</span>
                                                                                    <span data-o-badges="disputes" class="pull-right"></span>
                                                                            </a>
                                </li>
                                                            <li>
                                    <a href="/blog/" target="_blank">
                                        <span>New on Upwork!</span>
                                                                            </a>
                                </li>
                                                    </ul>
                    </li>

                                    <li data-dropdown class="dropdown" data-on-toggle="toggleNotifications(open)">
                        <a data-dropdown-toggle href="javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon air-icon-notifications"></span><span data-o-badges="notifications" data-o-badges-layout="circle"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li data-ng-repeat="notification in notifications | limitTo:5">
                                <a data-ng-href="{{notification.href}}" class="dismissable" target="_self">
                                    <button type="button" class="close" data-ng-click="$event.stopPropagation(); removeNotification($event, notification.thread_id)">
                                        <span aria-hidden="true">×</span>
                                        <span class="sr-only">Remove</span>
                                    </button>
                                    {{notification.subject}}
                                </a>
                            </li>
                            <li>
                                <a href="/notifications" target="_self">
                                    <mark><strong>See All Notifications</strong></mark>
                                </a>
                            </li>
                        </ul>
                    </li>

                <li data-dropdown class="dropdown account-dropdown">
                    <a data-dropdown-toggle href="javascript:" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="David Tanugrah"><img src="https://odesk-prod-portraits.s3.amazonaws.com/Users:d_tanugrah:PortraitUrl?AWSAccessKeyId=1XVAX3FNQZAFC9GJCFR2&amp;Expires=2147483647&amp;Signature=GdzDS1It8We2s7se4aGpPqTwpFI%3D&amp;1449650041743285" class="avatar avatar-xs"><span class="organization-selector">David Tanugrah</span><span data-ng-show="unreadIndicator" data-ng-cloak class="badge badge-circle"></span><span class="caret"></span></a>                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <div class="container">
                                <div class="form-group">
                                    <div class="btn-group btn-group-justified" data-ng-click="$event.stopPropagation()" eo-halt="check($event)">
                                        <label class="btn btn-default" data-ng-model="dash.visibility" data-ng-click="setVisibility('VISIBLE')" btn-radio="'VISIBLE'">Online</label>
                                        <label class="btn btn-default" data-ng-model="dash.visibility" data-ng-click="setVisibility('INVISIBLE')" btn-radio="'INVISIBLE'" title="Appear offline to other users">Invisible</label>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <ul class="nav dropdown-menu-inline company-list">
                                                                                                        <li data-company-uid="674501273808384002" class="active" title="David Tanugrah">
                                                                        <a href="javascript:">
                                        <div class="media">
                                                                                            <img src="https://odesk-prod-portraits.s3.amazonaws.com/Users:d_tanugrah:PortraitUrl?AWSAccessKeyId=1XVAX3FNQZAFC9GJCFR2&amp;Expires=2147483647&amp;Signature=GdzDS1It8We2s7se4aGpPqTwpFI%3D&amp;1449650041743285" class="avatar avatar-xs pull-left">
                                                                                        <span class="pull-right" data-o-badges="dash" data-o-badges-port="674501273808384002"></span>
                                            <span class="pull-right" data-o-badges="dash" data-o-badges-port="674501273808384002" data-o-badges-key="unimportant" data-o-badges-layout="ellipsis" data-o-badges-exclusive="true"></span>
                                            <div class="media-body">
                                                <span data-ng-bind="&quot;David Tanugrah&quot; | truncateByChars:22"></span>
                                                <small class="text-muted">
                                                                                                            Freelancer
                                                                                                    </small>
                                            </div>
                                        </div>
                                    </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                            <li>
                                <a href="/UserSettings/profile" target="_self">
                                    <span class="glyphicon air-icon-settings"></span>
                                    Settings
                                </a>
                            </li>

                        <li>
                            <a href="javascript:" data-ng-click="logout()">
                                <form id="nav-logout" method="post" action="/logout"></form>
                                <span class="glyphicon air-icon-remove"></span>
                                Logout
                                <span class="user-id pull-right">d_tanugrah</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
            <nav role="navigation" class="secondary-navbar navbar navbar-default" >
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                                                    <li>
                                <a href="/find-work-home/" target="_self">
                                                                            Find Jobs
                                                                    </a>
                            </li>
                                                    <li>
                                <a href="/jobs/saved" target="_self">
                                                                             <span data-o-badges="savedJobs" data-o-badges-layout="heart"></span>
                                        Saved Jobs
                                        <span data-o-badges="savedJobs" data-o-badges-layout="parens"></span>
                                                                    </a>
                            </li>
                                                    <li>
                                <a href="/ab/proposals/" target="_self">
                                                                            Proposals
                                                                    </a>
                            </li>
                                                    <li class="active">
                                <a href="/freelancers/~013e93398845c05cf7" target="_self">
                                                                            Profile
                                                                    </a>
                            </li>
                                                    <li>
                                <a href="/my-stats" target="_self">
                                                                            My Stats
                                                                    </a>
                            </li>
                                                    <li>
                                <a href="/tests/main" target="_self">
                                                                            Tests
                                                                    </a>
                            </li>
                                            </ul>
                </div>
            </div>
        </nav>
        </header>
         <script type="text/javascript">remove_mark('navCompRenderEnd');remove_measure('navCompRendered');create_mark('navCompRenderEnd');create_measure('navCompRendered', 'navigationStart', 'navCompRenderEnd');</script>


                    <div class="container">
            <div data-o-smf data-o-smf-location="top"></div>
<div data-ng-controller="fe.app.profile.ProfileDetailsCtrl as vm">
    <div>
        <section class="o-profile-section" ng-if="vm.error" ng-cloak>
            <article>
                <div class="alert alert-danger" role="alert">
                    Sorry, something went wrong. Please
                    <a href="https://support.upwork.com/anonymous_requests/new" target="_blank">
                        contact support
                    </a>.
                </div>
            </article>
        </section>

                    <div class=" " ng-if="vpd">
    <div class="">

                <div class="row" data-ng-if="vpd.ready && actor.isOwner()">
            <div class="col-md-3">
                                    <h1 class="m-0-top">My Profile</h1>
                            </div>
            <div class="col-md-9">
                <!-- placeholder for future upwork profile template view change -->
            </div>
        </div>

        <div id="oProfilePage" class="row o-profile clearfix">
            <div class="col-md-9" itemscope itemtype="http://schema.org/Person">
                <div id="optimizely-header-container-default"
                     class="m-0-top m-0-right media air-card ">
                    <div class="clearfix">
                        <div class="pull-left m-0">
                                                            <img id="userPortrait" src="https://odesk-prod-portraits.s3.amazonaws.com/Users:d_tanugrah:PortraitUrl_100?AWSAccessKeyId=1XVAX3FNQZAFC9GJCFR2&amp;Expires=2147483647&amp;Signature=3lbQhxvKQX6fzros5djlubtU0wI%3D&amp;1449650041743285" alt="David Tanugrah" class="avatar avatar-lg m-0-top m-0-left">
                                                    </div>

                        <div class="media-body up-active-container">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2 class="m-0-top m-md-bottom">
                                <span class="up-active-context up-active-context-title">
                                    <span itemprop="name" >
                                        David Tanugrah
                                    </span>
                                </span>
                                    </h2>
                                </div>
                                <div class="col-md-4 p-0-left">
                                    <h2 class="pull-right m-0-top-bottom up-active-context ">
                                                                                    <span class="pull-right">
                                    <span itemprop="pricerange">
                                                                                    $3.00
                                                                            </span>
                                    <span class="text-muted">&nbsp;/hr</span>
                                </span>
                                                                            </h2>
                                </div>
                            </div>
                            <h3 class="m-0-top m-sm-bottom" data-ng-click="openEditTitleModal()">
                        <span>
                            Computer Science Student
                        </span>
                            </h3>
                        </div>
                        <div class="media-body">
                            <span class="glyphicon glyphicon-md air-icon-location m-0-left-right"></span>
                        <span data-ng-if="vpd.profile.location.city">
                            <span itemprop="locality">Jakarta</span>,
                        </span>
                            <span itemprop="country-name">Malaysia</span>
                        </div>
                        <div class="media-body">
                            <div>
                                <div class="o-profile-skills m-sm-top" >
                                    <span class="up-active-context display-inline-block">
                                                                                    <small class="o-tag ng-binding m-0-right m-xs-left m-sm-top-bottom o-tag-certified ">
                                                Network Programming
                                            </small>
                                                                                    <small class="o-tag ng-binding m-0-right m-xs-left m-sm-top-bottom o-tag-certified ">
                                                Application Programming
                                            </small>
                                                                                    <small class="o-tag ng-binding m-0-right m-xs-left m-sm-top-bottom o-tag-certified ">
                                                Network Security
                                            </small>
                                                                            </span>
                                </div>
                            </div>
                        </div>

                        <hr class="m-sm-top">
                    </div>


                    <div class="up-active-container">
                        <h2 class="m-0-top m-md-bottom">
                            <div class="up-active-context display-inline-block">
                                <span ng-click="openEditOverviewDialog()">Overview</span>
                            </div>
                        </h2>

                                                    <section class="p-lg-right">
                                <p class="o-break-word o-white-space-pre-line up-active-context m-0-bottom"
                                   itemprop="description">Currently studying in University of Wollongong (UOW) at INTI College University Malaysia.
Computer Science Student.

Looking up for a small C++ projects and English-Indonesian translator or vice versa as a part-time job.
                                </p>
                            </section>
                                            </div>
                </div>

                            </div>

            <div class="col-md-3">
                                    <div class="text-center">
                        <a href="/profile/settings" class="btn btn-block btn-primary m-0-top m-md-bottom">Profile Settings</a>
                        <a href="/freelancers/~013e93398845c05cf7?viewMode=1">
                            <small>View my profile as others see it</small>
                        </a>
                    </div>






                                    <hr class="m-lg-top-bottom">
                            </div>
        </div>
    </div>
</div>

        <fe-profile ng-if="vm.isShowProfile()" fe-vpd="vm.overlay.vpd" fe-settings="vm.overlay.settings"></fe-profile>
    </div>
</div>
        </div>

        <div id="layout-footer"></div>
    </div>

        <footer class="footer-navbar-wrapper footer-default" role="contentinfo" data-ng-controller="footerController">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row links-section">
                                <div class="col-md-3">
                                                                        <p><a href="/info/about/" target="_self">About Us</a></p>
                                                                                                <p><a href="/blog/" target="_self">Blog</a></p>
                                                                                                <p data-ng-click="feedback()"><a href="javascript:">Feedback</a></p>
                                                            </div>
                                <div class="col-md-3">
                                                                        <p><a href="http://community.upwork.com" target="_self">Community</a></p>
                                                                                                <p><a href="/info/trust_and_safety/" target="_self">Trust &amp; Safety</a></p>
                                                                                                <p><a href="https://support.upwork.com/login" target="_self">Help &amp; Support</a></p>
                                                            </div>
                                <div class="col-md-3">
                                                                        <p><a href="/legal/terms/" target="_self">Terms of Service</a></p>
                                                                                                <p><a href="/legal/privacy/" target="_self">Privacy Policy</a></p>
                                                                                                <p><a href="/downloads?source=Footer" target="_self">Desktop App</a></p>
                                                            </div>
                                <div class="col-md-3">
                                                                        <p><a href="/info/terms/cookie-policy" target="_self">Cookie Policy</a></p>
                                                                                                <p><a href="/info/advisory/" target="_self">Enterprise Solutions</a></p>
                                                                                                <p><a href="/hiring" target="_self">Hiring Headquarters</a></p>
                                                                                                <p><a href="/mobile/" target="_self">Mobile</a></p>
                                                            </div>
                            </div>
            <div class="row service-code-section">
                <div class="col-md-3">
                    <div eo-service-code class="display-inline-block"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="social-icons-wrapper text-center">
                                    <a href="https://plus.google.com/107040851368295259701" target="_self"><i class="glyphicon glyphicon-lg air-icon-social-google-plus"></i></a>
                                    <a href="https://twitter.com/Upwork" target="_self"><i class="glyphicon glyphicon-lg air-icon-social-twitter"></i></a>
                                    <a href="https://www.facebook.com/upwork" target="_self"><i class="glyphicon glyphicon-lg air-icon-social-facebook"></i></a>
                                    <a href="https://www.linkedin.com/company/upwork" target="_self"><i class="glyphicon glyphicon-lg air-icon-social-linkedin"></i></a>
                            </div>
            <p class="text-center copyright">
                &copy; 2015 - 2016 Upwork Global Inc.
            </p>
        </div>
    </div>
</div>
    </footer>

                            <script src="https://assets.static-upwork.com/components/1.8.3/core.1.8.3.min.js"></script>
                    <script src="https://assets.static-upwork.com/components/1.8.3/components.1.8.3.min.js"></script>
                    <script src="https://assets.static-upwork.com/components/1.8.3/files.1.8.3.min.js"></script>
                    <script src="https://assets.static-upwork.com/components/1.8.3/uploading.1.8.3.min.js"></script>
                    <script src="https://assets.static-upwork.com/fe/release/fe.app.profile/rel201610110705/fe.app.profile.rel201610110705.min.js"></script>

    <!-- start Mixpanel --><script type="text/javascript">(function(f,b){if(!b.__SV){var a,e,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");
        for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=f.createElement("script");a.type="text/javascript";a.async=!0;a.src="//cdn.mxpnl.com/libs/mixpanel-2.2.min.js";e=f.getElementsByTagName("script")[0];e.parentNode.insertBefore(a,e)}})(document,window.mixpanel||[]);
    mixpanel.init("fdf88b8da1749bafc5f24aee259f5aa4");</script><!-- end Mixpanel -->
<script>
    angular.module('mixpanel', [])
            .service('mixpanel', function() {
                return {
                    track: function(title, parameters) {
                        mixpanel.track(title, parameters);
                    }
                };
            });
</script>

        <script src="//cdn.optimizely.com/js/2765661494.js" async></script>


<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"8e23a381b9","applicationID":"12371618","transactionName":"NVxRMRBYVhBXUhBQDAwWcgYWUFcNGUEWUBUDTVY6EktXBV9dAQ==","queueTime":0,"applicationTime":593,"atts":"GRtSR1hCRR4=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
