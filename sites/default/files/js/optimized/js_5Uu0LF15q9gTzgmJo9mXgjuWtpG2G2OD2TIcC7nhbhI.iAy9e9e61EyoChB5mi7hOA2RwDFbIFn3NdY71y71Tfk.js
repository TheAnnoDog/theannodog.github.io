(function(e,t){t.behaviors.tableSelect={attach:function(c,l){once('table-select',e(c).find('th.select-all').closest('table')).forEach(function(e){return t.tableSelect.call(e)})}};t.tableSelect=function(){if(e(this).find('td input[type="checkbox"]').length===0){return};var r=this,c,l,i=e(r),a={selectAll:t.t('Select all rows in this table'),selectNone:t.t('Deselect all rows in this table')};var n=function(t){i.prev('table.sticky-header').addBack().find('th.select-all input[type="checkbox"]').each(function(){var c=e(this),l=c.prop('checked')!==t;c.attr('title',t?a.selectNone:a.selectAll);if(l){c.prop('checked',t).trigger('change')}})};i.find('th.select-all').prepend(e(t.theme('checkbox')).attr('title',a.selectAll)).on('click',function(t){if(e(t.target).is('input[type="checkbox"]')){c.each(function(){var c=e(this),l=c.prop('checked')!==t.target.checked;if(l){c.prop('checked',t.target.checked).trigger('change')};c.closest('tr').toggleClass('selected',this.checked)});n(t.target.checked)}});c=i.find('td input[type="checkbox"]:enabled').on('click',function(i){e(this).closest('tr').toggleClass('selected',this.checked);if(i.shiftKey&&l&&l!==i.target){t.tableSelectRange(e(i.target).closest('tr')[0],e(l).closest('tr')[0],i.target.checked)};n(c.length===c.filter(':checked').length);l=i.target});n(c.length===c.filter(':checked').length)};t.tableSelectRange=function(t,l,n){var a=t.rowIndex>l.rowIndex?'previousSibling':'nextSibling';for(var c=t[a];c;c=c[a]){var i=e(c);if(c.nodeType!==1){continue};i.toggleClass('selected',n);i.find('input[type="checkbox"]').prop('checked',n);if(l.nodeType){if(c===l){break}}
else if(e.filter(l,[c]).r.length){break}}}})(jQuery,Drupal);