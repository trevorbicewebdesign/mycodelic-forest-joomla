/**
 * @package    AcyMailing for Joomla!
 * @version    5.9.6
 * @author     acyba.com
 * @copyright  (C) 2009-2018 ACYBA S.A.R.L. All rights reserved.
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

!function(e,t){"use strict";var n;if("object"==typeof exports){try{n=require("moment")}catch(e){}module.exports=t(n)}else"function"==typeof define&&define.amd?define(function(e){try{n=e("moment")}catch(e){}return t(n)}):e.Pikaday=t(e.moment)}(this,function(e){"use strict";var t=!!window.addEventListener,n=window.document,a=window.setTimeout,i=function(e,n,a,i){t?e.addEventListener(n,a,!!i):e.attachEvent("on"+n,a)},s=function(e,n,a,i){t?e.removeEventListener(n,a,!!i):e.detachEvent("on"+n,a)},o=function(e,t,a){var i;n.createEvent?((i=n.createEvent("HTMLEvents")).initEvent(t,!0,!1),i=D(i,a),e.dispatchEvent(i)):n.createEventObject&&(i=n.createEventObject(),i=D(i,a),e.fireEvent("on"+t,i))},r=function(e){return e.trim?e.trim():e.replace(/^\s+|\s+$/g,"")},h=function(e,t){return-1!==(" "+e.className+" ").indexOf(" "+t+" ")},l=function(e,t){h(e,t)||(e.className=""===e.className?t:e.className+" "+t)},d=function(e,t){e.className=r((" "+e.className+" ").replace(" "+t+" "," "))},u=function(e){return/Array/.test(Object.prototype.toString.call(e))},c=function(e){return/Date/.test(Object.prototype.toString.call(e))&&!isNaN(e.getTime())},f=function(e){var t=e.getDay();return 0===t||6===t},g=function(e){return e%4==0&&e%100!=0||e%400==0},m=function(e,t){return[31,g(e)?29:28,31,30,31,30,31,31,30,31,30,31][t]},p=function(e){c(e)&&e.setHours(0,0,0,0)},y=function(e,t){return e.getTime()===t.getTime()},D=function(e,t,n){var a,i;for(a in t)(i=void 0!==e[a])&&"object"==typeof t[a]&&null!==t[a]&&void 0===t[a].nodeName?c(t[a])?n&&(e[a]=new Date(t[a].getTime())):u(t[a])?n&&(e[a]=t[a].slice(0)):e[a]=D({},t[a],n):!n&&i||(e[a]=t[a]);return e},_=function(e){return e.month<0&&(e.year-=Math.ceil(Math.abs(e.month)/12),e.month+=12),e.month>11&&(e.year+=Math.floor(Math.abs(e.month)/12),e.month-=12),e},v={field:null,bound:void 0,position:"bottom left",reposition:!0,format:"%Y-%m-%d",defaultDate:null,setDefaultDate:!1,firstDay:0,formatStrict:!1,minDate:null,maxDate:null,yearRange:10,showWeekNumber:!1,pickWholeWeek:!1,minYear:0,maxYear:9999,minMonth:void 0,maxMonth:void 0,startRange:null,endRange:null,isRTL:!1,yearSuffix:"",showMonthAfterYear:!1,showDaysInNextAndPreviousMonths:!1,numberOfMonths:1,mainCalendar:"left",container:void 0,blurFieldOnSelect:!0,i18n:{previousMonth:"Previous Month",nextMonth:"Next Month",months:["January","February","March","April","May","June","July","August","September","October","November","December"],weekdays:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]},theme:null,events:[],onSelect:null,onOpen:null,onClose:null,onDraw:null},b=function(e,t,n){for(t+=e.firstDay;t>=7;)t-=7;return n?e.i18n.weekdays[t].substr(0,3):e.i18n.weekdays[t]},w=function(e){var t=[],n="false";if(e.isEmpty){if(!e.showDaysInNextAndPreviousMonths)return'<td class="is-empty"></td>';t.push("is-outside-current-month")}return e.isDisabled&&t.push("is-disabled"),e.isToday&&t.push("is-today"),e.isSelected&&(t.push("is-selected"),n="true"),e.hasEvent&&t.push("has-event"),e.isInRange&&t.push("is-inrange"),e.isStartRange&&t.push("is-startrange"),e.isEndRange&&t.push("is-endrange"),'<td data-day="'+e.day+'" class="'+t.join(" ")+'" aria-selected="'+n+'"><button class="pika-button pika-day" type="button" data-pika-year="'+e.year+'" data-pika-month="'+e.month+'" data-pika-day="'+e.day+'">'+e.day+"</button></td>"},M=function(e,t,n){var a=new Date(n,0,1);return'<td class="pika-week">'+Math.ceil(((new Date(n,t,e)-a)/864e5+a.getDay()+1)/7)+"</td>"},k=function(e,t,n,a){return'<tr class="pika-row'+(n?" pick-whole-week":"")+(a?" is-selected":"")+'">'+(t?e.reverse():e).join("")+"</tr>"},x=function(e){return"<tbody>"+e.join("")+"</tbody>"},R=function(e){var t,n=[];for(e.showWeekNumber&&n.push("<th></th>"),t=0;t<7;t++)n.push('<th scope="col"><abbr title="'+b(e,t)+'">'+b(e,t,!0)+"</abbr></th>");return"<thead><tr>"+(e.isRTL?n.reverse():n).join("")+"</tr></thead>"},N=function(e,t,n,a,i,s){var o,r,h,l,d,c=e._o,f=n===c.minYear,g=n===c.maxYear,m='<div id="'+s+'" class="pika-title" role="heading" aria-live="assertive">',p=!0,y=!0;for(h=[],o=0;o<12;o++)h.push('<option value="'+(n===i?o-t:12+o-t)+'"'+(o===a?' selected="selected"':"")+(f&&o<c.minMonth||g&&o>c.maxMonth?'disabled="disabled"':"")+">"+c.i18n.months[o]+"</option>");for(l='<div class="pika-label">'+c.i18n.months[a]+'<select class="pika-select pika-select-month" tabindex="-1">'+h.join("")+"</select></div>",u(c.yearRange)?(o=c.yearRange[0],r=c.yearRange[1]+1):(o=n-c.yearRange,r=1+n+c.yearRange),h=[];o<r&&o<=c.maxYear;o++)o>=c.minYear&&h.push('<option value="'+o+'"'+(o===n?' selected="selected"':"")+">"+o+"</option>");return d='<div class="pika-label">'+n+c.yearSuffix+'<select class="pika-select pika-select-year" tabindex="-1">'+h.join("")+"</select></div>",c.showMonthAfterYear?m+=d+l:m+=l+d,f&&(0===a||c.minMonth>=a)&&(p=!1),g&&(11===a||c.maxMonth<=a)&&(y=!1),0===t&&(m+='<button class="pika-prev'+(p?"":" is-disabled")+'" type="button">'+c.i18n.previousMonth+"</button>"),t===e._o.numberOfMonths-1&&(m+='<button class="pika-next'+(y?"":" is-disabled")+'" type="button">'+c.i18n.nextMonth+"</button>"),m+="</div>"},C=function(e,t,n){return'<table cellpadding="0" cellspacing="0" class="pika-table" role="grid" aria-labelledby="'+n+'">'+R(e)+x(t)+"</table>"},E=function(e){var s=this,o=s.config(e);s._onMouseDown=function(e){if(s._v){var t=(e=e||window.event).target||e.srcElement;if(t)if(h(t,"is-disabled")||(!h(t,"pika-button")||h(t,"is-empty")||h(t.parentNode,"is-disabled")?h(t,"pika-prev")?s.prevMonth():h(t,"pika-next")&&s.nextMonth():(s.setDate(new Date(t.getAttribute("data-pika-year"),t.getAttribute("data-pika-month"),t.getAttribute("data-pika-day"))),o.bound&&a(function(){s.hide(),o.blurFieldOnSelect&&o.field&&o.field.blur()},100))),h(t,"pika-select"))s._c=!0;else{if(!e.preventDefault)return e.returnValue=!1,!1;e.preventDefault()}}},s._onChange=function(e){var t=(e=e||window.event).target||e.srcElement;t&&(h(t,"pika-select-month")?s.gotoMonth(t.value):h(t,"pika-select-year")&&s.gotoYear(t.value))},s._onKeyChange=function(e){if(e=e||window.event,s.isVisible())switch(e.keyCode){case 13:case 27:o.field&&o.field.blur();break;case 37:e.preventDefault(),s.adjustDate("subtract",1);break;case 38:s.adjustDate("subtract",7);break;case 39:s.adjustDate("add",1);break;case 40:s.adjustDate("add",7)}},s._onInputChange=function(e){var t;e.firedBy!==s&&(t=new Date(Date.parse(o.field.value)),c(t)&&s.setDate(t),s._v||s.show())},s._onInputFocus=function(){s.show()},s._onInputClick=function(){s.show()},s._onInputBlur=function(){var e=n.activeElement;do{if(h(e,"pika-single"))return}while(e=e.parentNode);s._c||(s._b=a(function(){s.hide()},50)),s._c=!1},s._onClick=function(e){var n=(e=e||window.event).target||e.srcElement,a=n;if(n){!t&&h(n,"pika-select")&&(n.onchange||(n.setAttribute("onchange","return;"),i(n,"change",s._onChange)));do{if(h(a,"pika-single")||a===o.trigger)return}while(a=a.parentNode);s._v&&n!==o.trigger&&a!==o.trigger&&s.hide()}},s.el=n.createElement("div"),s.el.className="pika-single"+(o.isRTL?" is-rtl":"")+(o.theme?" "+o.theme:""),i(s.el,"mousedown",s._onMouseDown,!0),i(s.el,"touchend",s._onMouseDown,!0),i(s.el,"change",s._onChange),i(n,"keydown",s._onKeyChange),o.field&&(o.container?o.container.appendChild(s.el):o.bound?n.body.appendChild(s.el):o.field.parentNode.insertBefore(s.el,o.field.nextSibling),i(o.field,"change",s._onInputChange),o.defaultDate||(o.defaultDate=new Date(Date.parse(o.field.value)),o.setDefaultDate=!0));var r=o.defaultDate;c(r)?o.setDefaultDate?s.setDate(r,!0):s.gotoDate(r):s.gotoDate(new Date),o.bound?(this.hide(),s.el.className+=" is-bound",i(o.trigger,"click",s._onInputClick),i(o.trigger,"focus",s._onInputFocus),i(o.trigger,"blur",s._onInputBlur)):this.show()};return E.prototype={config:function(e){this._o||(this._o=D({},v,!0));var t=D(this._o,e,!0);t.isRTL=!!t.isRTL,t.field=t.field&&t.field.nodeName?t.field:null,t.theme="string"==typeof t.theme&&t.theme?t.theme:null,t.bound=!!(void 0!==t.bound?t.field&&t.bound:t.field),t.trigger=t.trigger&&t.trigger.nodeName?t.trigger:t.field,t.disableWeekends=!!t.disableWeekends,t.disableDayFn="function"==typeof t.disableDayFn?t.disableDayFn:null;var n=parseInt(t.numberOfMonths,10)||1;if(t.numberOfMonths=n>4?4:n,c(t.minDate)||(t.minDate=!1),c(t.maxDate)||(t.maxDate=!1),t.minDate&&t.maxDate&&t.maxDate<t.minDate&&(t.maxDate=t.minDate=!1),t.minDate&&this.setMinDate(t.minDate),t.maxDate&&this.setMaxDate(t.maxDate),u(t.yearRange)){var a=(new Date).getFullYear()-10;t.yearRange[0]=parseInt(t.yearRange[0],10)||a,t.yearRange[1]=parseInt(t.yearRange[1],10)||a}else t.yearRange=Math.abs(parseInt(t.yearRange,10))||v.yearRange,t.yearRange>100&&(t.yearRange=100);return t},toString:function(e){var t="";return c(this._d)&&(t=this._o.format.replace("%Y",this._d.getFullYear()).replace("%m",this._d.getMonth()+1).replace("%d",this._d.getDate()).replace("%H",this._d.getHours()).replace("%M",this._d.getMinutes()).replace("%s",this._d.getSeconds())),t},getMoment:function(){return null},setMoment:function(e,t){},getDate:function(){return c(this._d)?new Date(this._d.getTime()):null},setDate:function(e,t){if(!e)return this._d=null,this._o.field&&(this._o.field.value="",o(this._o.field,"change",{firedBy:this})),this.draw();if("string"==typeof e&&(e=new Date(Date.parse(e))),c(e)){var n=this._o.minDate,a=this._o.maxDate;c(n)&&e<n?e=n:c(a)&&e>a&&(e=a),this._d=new Date(e.getTime()),p(this._d),this.gotoDate(this._d),this._o.field&&(this._o.field.value=this.toString(),o(this._o.field,"change",{firedBy:this})),t||"function"!=typeof this._o.onSelect||this._o.onSelect.call(this,this.getDate())}},gotoDate:function(e){var t=!0;if(c(e)){if(this.calendars){var n=new Date(this.calendars[0].year,this.calendars[0].month,1),a=new Date(this.calendars[this.calendars.length-1].year,this.calendars[this.calendars.length-1].month,1),i=e.getTime();a.setMonth(a.getMonth()+1),a.setDate(a.getDate()-1),t=i<n.getTime()||a.getTime()<i}t&&(this.calendars=[{month:e.getMonth(),year:e.getFullYear()}],"right"===this._o.mainCalendar&&(this.calendars[0].month+=1-this._o.numberOfMonths)),this.adjustCalendars()}},adjustDate:function(e,t){var n,a=this.getDate()||new Date,i=24*parseInt(t)*60*60*1e3;"add"===e?n=new Date(a.valueOf()+i):"subtract"===e&&(n=new Date(a.valueOf()-i)),this.setDate(n)},adjustCalendars:function(){this.calendars[0]=_(this.calendars[0]);for(var e=1;e<this._o.numberOfMonths;e++)this.calendars[e]=_({month:this.calendars[0].month+e,year:this.calendars[0].year});this.draw()},gotoToday:function(){this.gotoDate(new Date)},gotoMonth:function(e){isNaN(e)||(this.calendars[0].month=parseInt(e,10),this.adjustCalendars())},nextMonth:function(){this.calendars[0].month++,this.adjustCalendars()},prevMonth:function(){this.calendars[0].month--,this.adjustCalendars()},gotoYear:function(e){isNaN(e)||(this.calendars[0].year=parseInt(e,10),this.adjustCalendars())},setMinDate:function(e){e instanceof Date?(p(e),this._o.minDate=e,this._o.minYear=e.getFullYear(),this._o.minMonth=e.getMonth()):(this._o.minDate=v.minDate,this._o.minYear=v.minYear,this._o.minMonth=v.minMonth,this._o.startRange=v.startRange),this.draw()},setMaxDate:function(e){e instanceof Date?(p(e),this._o.maxDate=e,this._o.maxYear=e.getFullYear(),this._o.maxMonth=e.getMonth()):(this._o.maxDate=v.maxDate,this._o.maxYear=v.maxYear,this._o.maxMonth=v.maxMonth,this._o.endRange=v.endRange),this.draw()},setStartRange:function(e){this._o.startRange=e},setEndRange:function(e){this._o.endRange=e},draw:function(e){if(this._v||e){var t,n=this._o,i=n.minYear,s=n.maxYear,o=n.minMonth,r=n.maxMonth,h="";this._y<=i&&(this._y=i,!isNaN(o)&&this._m<o&&(this._m=o)),this._y>=s&&(this._y=s,!isNaN(r)&&this._m>r&&(this._m=r)),t="pika-title-"+Math.random().toString(36).replace(/[^a-z]+/g,"").substr(0,2);for(var l=0;l<n.numberOfMonths;l++)h+='<div class="pika-lendar">'+N(this,l,this.calendars[l].year,this.calendars[l].month,this.calendars[0].year,t)+this.render(this.calendars[l].year,this.calendars[l].month,t)+"</div>";this.el.innerHTML=h,n.bound&&"hidden"!==n.field.type&&a(function(){n.trigger.focus()},1),"function"==typeof this._o.onDraw&&this._o.onDraw(this),n.bound&&n.field.setAttribute("aria-label","Use the arrow keys to pick a date")}},adjustPosition:function(){var e,t,a,i,s,o,r,h,l,d;if(!this._o.container){if(this.el.style.position="absolute",e=this._o.trigger,t=e,a=this.el.offsetWidth,i=this.el.offsetHeight,s=window.innerWidth||n.documentElement.clientWidth,o=window.innerHeight||n.documentElement.clientHeight,r=window.pageYOffset||n.body.scrollTop||n.documentElement.scrollTop,"function"==typeof e.getBoundingClientRect)h=(d=e.getBoundingClientRect()).left+window.pageXOffset,l=d.bottom+window.pageYOffset;else for(h=t.offsetLeft,l=t.offsetTop+t.offsetHeight;t=t.offsetParent;)h+=t.offsetLeft,l+=t.offsetTop;(this._o.reposition&&h+a>s||this._o.position.indexOf("right")>-1&&h-a+e.offsetWidth>0)&&(h=h-a+e.offsetWidth),(this._o.reposition&&l+i>o+r||this._o.position.indexOf("top")>-1&&l-i-e.offsetHeight>0)&&(l=l-i-e.offsetHeight),this.el.style.left=h+"px",this.el.style.top=l+"px"}},render:function(e,t,n){var a=this._o,i=new Date,s=m(e,t),o=new Date(e,t,1).getDay(),r=[],h=[];p(i),a.firstDay>0&&(o-=a.firstDay)<0&&(o+=7);for(var l=0===t?11:t-1,d=11===t?0:t+1,u=0===t?e-1:e,g=11===t?e+1:e,D=m(u,l),_=s+o,v=_;v>7;)v-=7;_+=7-v;for(var b=!1,x=0,R=0;x<_;x++){var N=new Date(e,t,x-o+1),E=!!c(this._d)&&y(N,this._d),T=y(N,i),Y=-1!==a.events.indexOf(N.toDateString()),O=x<o||x>=s+o,j=x-o+1,I=t,S=e,W=a.startRange&&y(a.startRange,N),F=a.endRange&&y(a.endRange,N),A=a.startRange&&a.endRange&&a.startRange<N&&N<a.endRange,L=a.minDate&&N<a.minDate||a.maxDate&&N>a.maxDate||a.disableWeekends&&f(N)||a.disableDayFn&&a.disableDayFn(N);O&&(x<o?(j=D+j,I=l,S=u):(j-=s,I=d,S=g));var H={day:j,month:I,year:S,hasEvent:Y,isSelected:E,isToday:T,isDisabled:L,isEmpty:O,isStartRange:W,isEndRange:F,isInRange:A,showDaysInNextAndPreviousMonths:a.showDaysInNextAndPreviousMonths};a.pickWholeWeek&&E&&(b=!0),h.push(w(H)),7==++R&&(a.showWeekNumber&&h.unshift(M(x-o,t,e)),r.push(k(h,a.isRTL,a.pickWholeWeek,b)),h=[],R=0,b=!1)}return C(a,r,n)},isVisible:function(){return this._v},show:function(){this.isVisible()||(this._v=!0,this.draw(),this._o.bound&&(i(n,"click",this._onClick),this.adjustPosition()),d(this.el,"is-hidden"),"function"==typeof this._o.onOpen&&this._o.onOpen.call(this))},hide:function(){var e=this._v;!1!==e&&(this._o.bound&&s(n,"click",this._onClick),this.el.style.position="static",this.el.style.left="auto",this.el.style.top="auto",l(this.el,"is-hidden"),this._v=!1,void 0!==e&&"function"==typeof this._o.onClose&&this._o.onClose.call(this))},destroy:function(){this.hide(),s(this.el,"mousedown",this._onMouseDown,!0),s(this.el,"touchend",this._onMouseDown,!0),s(this.el,"change",this._onChange),this._o.field&&(s(this._o.field,"change",this._onInputChange),this._o.bound&&(s(this._o.trigger,"click",this._onInputClick),s(this._o.trigger,"focus",this._onInputFocus),s(this._o.trigger,"blur",this._onInputBlur))),this.el.parentNode&&this.el.parentNode.removeChild(this.el)}},E});
