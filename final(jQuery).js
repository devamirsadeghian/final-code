//   $('p')       انتخاب <p>‌های موجود در DOM
//   $('<p>')     ساخت یک عنصر جدید با jQuery


var p = document.createElement('p');
var text = p.innerText = 'سلام دنیا';
p.appendChild(text);
document.getElementById("h1").appendChild(p);


var p = $('<p>').text('سلام دنیا');
$('body').append(p);
$('#h1').append(p);




-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
انتخاب عنصر با id               	document.getElementById('id')	                              $('#id')
انتخاب عنصر با class	            document.getElementsByClassName('class')	                  $('.class')
انتخاب همه عناصر با selector	    document.querySelectorAll('selector')	                      $('selector')
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
افزودن Event Listener	            element.addEventListener('click', fn)	                      $('#el').on('click', fn)
حذف Event Listener	              element.removeEventListener('click', fn)                  	$('#el').off('click', fn)
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Event کلیک	                      element.addEventListener('click', fn)                      	$('#el').click(fn)
Event hover	                      element.addEventListener('mouseenter', fn) / mouseleave	    $('#el').hover(fnIn, fnOut)
Event focus/blur	                element.addEventListener('focus', fn)	$('#el').focus(fn)    $('#el').blur(fn)
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Event input/change	              element.addEventListener('input', fn) / change            	$('#input').on('input', fn) / change
Event submit فرم	                form.addEventListener('submit', fn)                       	$('form').submit(fn)
Event page load                 	window.addEventListener('load', fn)                       	$(window).on('load', fn)
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
DOM ready	                        document.addEventListener('DOMContentLoaded', fn)	          $(document).ready(fn) یا $(fn)
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Delegated events                 	نیاز به event bubbling و manual                           	$(parent).on('click', 'child', fn)
Scroll event                    	window.addEventListener('scroll', fn)                     	$(window).scroll(fn)
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
جلوگیری از default              	e.preventDefault()                                         	e.preventDefault()
Stop propagation	                e.stopPropagation()	                                        e.stopPropagation()
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
////////////////////////-------------event JQuery (رویداد)------------///////////////////////////
////////////////////////-------------event JQuery (رویداد)------------///////////////////////////
////////////////////////-------------event JQuery (رویداد)------------///////////////////////////


((((((((((-------🖱️Mouse Events---------))))))))))

click	        el.addEventListener('click', fn)	       $(el).click(fn)
dblclick     	el.addEventListener('dblclick', fn)	     $(el).dblclick(fn)
mousedown	    el.addEventListener('mousedown', fn)	   $(el).mousedown(fn)
mouseup	      el.addEventListener('mouseup', fn)	     $(el).mouseup(fn)
mousemove	    el.addEventListener('mousemove', fn)    	$(el).mousemove(fn)
mouseenter	  el.addEventListener('mouseenter', fn)	   $(el).mouseenter(fn)
mouseleave	  el.addEventListener('mouseleave', fn)	   $(el).mouseleave(fn)
mouseover	    el.addEventListener('mouseover', fn)	   $(el).mouseover(fn)
mouseout	    el.addEventListener('mouseout', fn)	     $(el).mouseout(fn)
contextmenu	  el.addEventListener('contextmenu', fn)   $(el).contextmenu(fn)





((((((((((-------🖱️Mouse Events---------))))))))))

keydown	     el.addEventListener('keydown', fn)	      $(el).keydown(fn)
keyup	       el.addEventListener('keyup', fn)	        $(el).keyup(fn)
keypress   	el.addEventListener('keypress', fn)	      $(el).keypress(fn)





((((((((((-------🖱️Mouse Events---------))))))))))

submit	     form.addEventListener('submit', fn)   	$('form').submit(fn)
change	     el.addEventListener('change', fn)	    $(el).change(fn)
input	       el.addEventListener('input', fn)      	$(el).on('input', fn)
focus	       el.addEventListener('focus', fn)      	$(el).focus(fn)
blur	       el.addEventListener('blur', fn)      	$(el).blur(fn)
reset	       form.addEventListener('reset', fn)	    $('form').reset(fn)









