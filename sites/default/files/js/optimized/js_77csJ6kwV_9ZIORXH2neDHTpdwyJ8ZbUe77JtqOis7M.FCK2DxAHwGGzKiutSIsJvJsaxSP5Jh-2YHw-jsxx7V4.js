/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/libraries/codemirror/addon/display/placeholder.js. */
(function(e){if(typeof exports=='object'&&typeof module=='object')e(require('../../lib/codemirror'));else if(typeof define=='function'&&define.amd)define(['../../lib/codemirror'],e);else e(CodeMirror)})(function(e){e.defineOption('placeholder','',function(i,l,n){var c=n&&n!=e.Init;if(l&&!c){i.on('blur',t);i.on('change',o);i.on('swapDoc',o);o(i)}
else if(!l&&c){i.off('blur',t);i.off('change',o);i.off('swapDoc',o);r(i);var a=i.getWrapperElement();a.className=a.className.replace(' CodeMirror-empty','')};if(l&&!i.hasFocus())t(i)});function r(e){if(e.state.placeholder){e.state.placeholder.parentNode.removeChild(e.state.placeholder);e.state.placeholder=null}};function i(e){r(e);var o=e.state.placeholder=document.createElement('pre');o.style.cssText='height: 0; overflow: visible';o.style.direction=e.getOption('direction');o.className='CodeMirror-placeholder CodeMirror-line-like';var t=e.getOption('placeholder');if(typeof t=='string')t=document.createTextNode(t);o.appendChild(t);e.display.lineSpace.insertBefore(o,e.display.lineSpace.firstChild)};function t(e){if(l(e))i(e)};function o(e){var o=e.getWrapperElement(),t=l(e);o.className=o.className.replace(' CodeMirror-empty','')+(t?' CodeMirror-empty':'');if(t)i(e);else r(e)};function l(e){return(e.lineCount()===1)&&(e.getLine(0)==='')}});
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/libraries/codemirror/addon/display/placeholder.js. */