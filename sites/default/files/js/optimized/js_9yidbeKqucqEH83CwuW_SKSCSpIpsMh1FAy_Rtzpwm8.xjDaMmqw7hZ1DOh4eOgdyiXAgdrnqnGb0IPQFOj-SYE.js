(function(e,t,s){var a=s.path,n=sessionStorage.getItem('escapeAdminPath'),i=window.location;if(!a.currentPathIsAdmin&&!/destination=/.test(i.search)){sessionStorage.setItem('escapeAdminPath',i)};t.behaviors.escapeAdmin={attach:function(){var i=once('escapeAdmin','[data-toolbar-escape-admin]');if(i.length&&a.currentPathIsAdmin){if(n!==null){e(i).attr('href',n)}
else{i[0].textContent=t.t('Home')}}}}})(jQuery,Drupal,drupalSettings);