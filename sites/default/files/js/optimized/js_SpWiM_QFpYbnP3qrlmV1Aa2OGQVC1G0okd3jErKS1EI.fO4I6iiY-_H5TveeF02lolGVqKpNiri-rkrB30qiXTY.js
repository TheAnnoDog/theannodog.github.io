!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],t):t(jQuery)}((function(t){"use strict";return t.fn.labels=function(){var s,i,n,e,a;return this.length?this[0].labels&&this[0].labels.length?this.pushStack(this[0].labels):(e=this.eq(0).parents("label"),(n=this.attr("id"))&&(a=(s=this.eq(0).parents().last()).add(s.length?s.siblings():this.siblings()),i="label[for='"+t.escapeSelector(n)+"']",e=e.add(a.find(i).addBack(i))),this.pushStack(e)):this.pushStack([])}}));