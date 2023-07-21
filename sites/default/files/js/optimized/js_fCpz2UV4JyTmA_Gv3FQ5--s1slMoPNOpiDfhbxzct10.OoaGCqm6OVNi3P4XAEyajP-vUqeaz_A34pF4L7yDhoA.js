(function(e,a,n){a.behaviors.machineName={attach:function(n,t){var i=this,s=e(n),l=null,r=null;function c(e){var a=e.data;a.$wrapper.removeClass('visually-hidden');a.$target.trigger('focus');a.$suffix.hide();a.$source.off('.machineName')};function o(e){var n=e.data,a=n.options,t=e.target.value,c=new RegExp(a.replace_pattern,'g'),s=t.toLowerCase().replace(c,a.replace).substr(0,a.maxlength);if(r&&r.readystate!==4){r.abort();r=null};if(l){clearTimeout(l);l=null};if(t.toLowerCase()!==s){l=setTimeout(function(){r=i.transliterate(t,a).done(function(e){i.showMachineName(e.substr(0,a.maxlength),n)})},300)}
else{i.showMachineName(s,n)}};Object.keys(t.machineName).forEach(function(n){var r=t.machineName[n],u=e(once('machine-name',s.find(n).addClass('machine-name-source'))),l=s.find(r.target).addClass('machine-name-target'),f=s.find(r.suffix),m=l.closest('.js-form-item');if(!u.length||!l.length||!f.length||!m.length){return};if(l.hasClass('error')){return};r.maxlength=l.attr('maxlength');m.addClass('visually-hidden');var h=l[0].value,d=e('<span class="machine-name-value">'.concat(r.field_prefix).concat(a.checkPlain(h)).concat(r.field_suffix,'</span>'));f.empty();if(r.label){f.append('<span class="machine-name-label">'.concat(r.label,': </span>'))};f.append(d);if(l.is(':disabled')){return};var p={$source:u,$target:l,$suffix:f,$wrapper:m,$preview:d,options:r};if(h===''&&u[0].value!==''){i.transliterate(u[0].value,r).done(function(e){i.showMachineName(e.substr(0,r.maxlength),p)})};var g=e('<span class="admin-link"><button type="button" class="link">'.concat(a.t('Edit'),'</button></span>')).on('click',p,c);f.append(g);if(l[0].value===''){u.on('formUpdated.machineName',p,o).trigger('formUpdated.machineName')};l.on('invalid',p,c)})},showMachineName:function(e,n){var t=n.options;if(e!==''){if(e!==t.replace){n.$target[0].value=e;n.$preview.html(t.field_prefix+a.checkPlain(e)+t.field_suffix)};n.$suffix.show()}
else{n.$suffix.hide();n.$target[0].value=e;n.$preview.empty()}},transliterate:function(t,i){return e.get(a.url('machine_name/transliterate'),{text:t,langcode:n.langcode,replace_pattern:i.replace_pattern,replace_token:i.replace_token,replace:i.replace,lowercase:!0})}}})(jQuery,Drupal,drupalSettings);