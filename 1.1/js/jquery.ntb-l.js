function getObj(a){document.getElementById?(this.obj=document.getElementById(a),this.style=document.getElementById(a).style):document.all?(this.obj=document.all[a],this.style=document.all[a].style):document.layers&&(this.obj=document.layers[a],this.style=document.layers[a])}function divScrollerNTB(a,b,c,d){if(document.getElementById){var e=new getObj(a);e.style.position="relative",e.style.overflow="hidden",e.obj.innerHTML='<div id="'+a+'_inner">'+e.obj.innerHTML+"</div>";var f=new getObj(a+"_inner");if(f.style.position="absolute",f.style.left=parseInt(e.style.width)+"px",f.style.top=parseInt(e.style.height)+"px","ntb-hor"==b||"horizontal"==b){if(e.obj.onmouseover=function(){divScroll_onMouseOver(a)},e.obj.onmouseout=function(){divScroll_onMouseOut(a)},fxpatch=navigator.userAgent.indexOf("Firefox")>-1?" left: -9000px;":"",spanContent='<span id="'+a+'_widthEval" style="visibility: hidden; position: absolute; top: -100px; left: -1px; z-index: -10; white-space: nowrap;'+fxpatch+'"><nobr>'+f.obj.innerHTML+"</nobr></span>",document.createElement){var g=document.createElement("span");g.innerHTML=spanContent,e.obj.appendChild(g)}else document.write(spanContent);var h=new getObj(a+"_widthEval");f.style.top="0px",f.style.whiteSpace="nowrap",f.style.width=h.obj.offsetWidth+"px",limit=parseInt(f.style.width),setTimeout('divScrollHelperH("'+a+'", '+limit+", "+c+", "+d+")",parseInt(c))}else("v"==b||"vertical"==b)&&(f.style.left="0px",f.style.width=parseInt(e.style.width)+"px",limit=f.obj.getElementsByTagName("div").length*parseInt(e.style.height),setTimeout('divScrollHelperV("'+a+'", '+limit+", "+c+", "+d+")",parseInt(c)))}}function divScrollHelperH(a,b,c,d){if(document.getElementById){var e=new getObj(a),f=new getObj(a+"_inner");nextTick=c,f.style.left||(f.style.left="0px"),parseInt(f.style.left)<-b?f.style.left="500px":e.obj.pause&&0!=e.obj.pause||(f.style.left=parseInt(f.style.left)-1+"px"),setTimeout('divScrollHelperH("'+a+'", '+b+", "+c+", "+d+")",parseInt(nextTick))}}function divScrollHelperV(a,b,c,d){var e=new getObj(a),f=new getObj(a+"_inner");nextTick=c,f.style.top||(f.style.top="0px"),f.style.top=parseInt(f.style.top)<-b?parseInt(e.style.height)+"px":parseInt(f.style.top)-1+"px",parseInt(f.style.top)!=parseInt(e.style.height)&&parseInt(f.style.top)!=-b&&parseInt(f.style.top)%parseInt(e.style.height)==0&&(nextTick=d),setTimeout('divScrollHelperV("'+a+'", '+b+", "+c+", "+d+")",parseInt(nextTick))}function divScroll_onMouseOver(a){var b=new getObj(a);b.obj.pause=!0}function divScroll_onMouseOut(a){var b=new getObj(a);b.obj.pause=!1}function divScrollItemsStyler(a){var b=new getObj(a),c=new getObj(a+"_inner");elements=c.obj.getElementsByTagName("div");for(var d=0;d<elements.length;d++){var e=elements.item(d);e.style.width=b.style.width}}