(function(t,e,o){function r(e){var o=e.attr('data-editor-for');return t('#'.concat(o)).get(0)};function a(o,r,i,a){if(r.editor.isXssSafe){a(o,r)}
else{t.ajax({url:e.url('editor/filter_xss/'.concat(r.format)),type:'POST',data:{value:o.value,original_format_id:i},dataType:'json',success:function(t){if(t!==!1){o.value=t};a(o,r)}})}};function i(r,i){var n=r.getAttribute('data-editor-active-text-format');if(o.editor.formats[n]){e.editorDetach(r,o.editor.formats[n])}
else{t(r).off('.editor')};if(o.editor.formats[i]){var d=o.editor.formats[i];a(r,d,n,e.editorAttach)};r.setAttribute('data-editor-active-text-format',i)};function n(r){var f=r.target,n=r.data.field,c=n.getAttribute('data-editor-active-text-format'),a=f.value;if(a===c){return};var u=o.editor.formats[a]&&o.editor.formats[a].editorSupportsContentFiltering,l=n.value!=='';if(l&&u){var s=e.t('Changing the text format to %text_format will permanently remove content that is not allowed in that text format.<br><br>Save your changes before switching the text format to avoid losing data.',{'%text_format':t(f).find('option:selected')[0].textContent});var d=e.dialog('<div>'.concat(s,'</div>'),{title:e.t('Change text format?'),dialogClass:'editor-change-text-format-modal',resizable:!1,buttons:[{text:e.t('Continue'),class:'button button--primary',click:function(){i(n,a);d.close()}},{text:e.t('Cancel'),class:'button',click:function(){f.value=c;d.close()}}],closeOnEscape:!1,create:function(){t(this).parent().find('.ui-dialog-titlebar-close').remove()},beforeClose:!1,close:function(e){t(e.target).remove()}});d.showModal()}
else{i(n,a)}};e.editors={};e.behaviors.editor={attach:function(o,i){if(!i.editor){return};once('editor','[data-editor-for]',o).forEach(function(o){var f=t(o),a=r(f);if(!a){return};var d=o.value;a.setAttribute('data-editor-active-text-format',d);if(i.editor.formats[d]){e.editorAttach(a,i.editor.formats[d])};t(a).on('change.editor keypress.editor',function(){a.setAttribute('data-editor-value-is-changed','true');t(a).off('.editor')});if(f.is('select')){f.on('change.editorAttach',{field:a},n)};f.parents('form').on('submit',function(t){if(t.isDefaultPrevented()){return};if(i.editor.formats[d]){e.editorDetach(a,i.editor.formats[d],'serialize')}})})},detach:function(o,i,a){var n;if(a==='serialize'){n=once.filter('editor','[data-editor-for]',o)}
else{n=once.remove('editor','[data-editor-for]',o)};n.forEach(function(o){var f=t(o),n=o.value,d=r(f);if(d&&n in i.editor.formats){e.editorDetach(d,i.editor.formats[n],a)}})}};e.editorAttach=function(o,r){if(r.editor){e.editors[r.editor].attach(o,r);e.editors[r.editor].onChange(o,function(){t(o).trigger('formUpdated');o.setAttribute('data-editor-value-is-changed','true')})}};e.editorDetach=function(t,o,r){if(o.editor){e.editors[o.editor].detach(t,o,r);if(t.getAttribute('data-editor-value-is-changed')==='false'){t.value=t.getAttribute('data-editor-value-original')}}}})(jQuery,Drupal,drupalSettings);