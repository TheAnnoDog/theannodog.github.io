(function(o,e,t){t.dialog={autoOpen:!0,dialogClass:'',buttonClass:'button',buttonPrimaryClass:'button--primary',close:function(o){e.dialog(o.target).close();e.detachBehaviors(o.target,null,'unload')}};e.dialog=function(n,r){var l,a=o(n),e={open:!1,returnValue:l};function i(n){n=o.extend({},t.dialog,r,n);o(window).trigger('dialog:beforecreate',[e,a,n]);a.dialog(n);e.open=!0;o(window).trigger('dialog:aftercreate',[e,a,n])};function d(t){o(window).trigger('dialog:beforeclose',[e,a]);a.dialog('close');e.returnValue=t;e.open=!1;o(window).trigger('dialog:afterclose',[e,a])};e.show=function(){i({modal:!1})};e.showModal=function(){i({modal:!0})};e.close=d;return e}})(jQuery,Drupal,drupalSettings);