(function(t,e,n){var o={top:0,right:0,bottom:0,left:0};function c(o,a){var n=t(o),i=document.documentElement,e=0,c=a==='left'||a==='right',r=n.offset()[c?'left':'top'];r-=window['scroll'.concat(c?'X':'Y')]||document.documentElement['scroll'.concat(c?'Left':'Top')]||0;switch(a){case'top':e=r+n.outerHeight();break;case'left':e=r+n.outerWidth();break;case'bottom':e=i.clientHeight-r;break;case'right':e=i.clientWidth-r;break;default:e=0};return e};function r(t){var a=0,n=document.querySelectorAll('[data-offset-'.concat(t,']')),i=n.length;for(var r=0;r<i;r++){var o=n[r];if(o.style.display==='none'){continue};var e=parseInt(o.getAttribute('data-offset-'.concat(t)),10);if(isNaN(e)){e=c(o,t)};a=Math.max(a,e)};return a};function i(){return{top:r('top'),right:r('right'),bottom:r('bottom'),left:r('left')}};function a(r){o=i();e.displace.offsets=o;if(typeof r==='undefined'||r){t(document).trigger('drupalViewportOffsetChange',o)};return o};e.behaviors.drupalDisplace={attach:function(){if(this.displaceProcessed){return};this.displaceProcessed=!0;t(window).on('resize.drupalDisplace',n(a,200))}};e.displace=a;t.extend(e.displace,{offsets:o,calculateOffset:r})})(jQuery,Drupal,Drupal.debounce);