/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'Headsaflame\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-search' : '&#xe001;',
			'icon-user' : '&#xe002;',
			'icon-tv' : '&#xe003;',
			'icon-fire' : '&#xe004;',
			'icon-lab' : '&#xe005;',
			'icon-heart-stroke' : '&#xe006;',
			'icon-bubbles' : '&#xe007;',
			'icon-rocket' : '&#xe008;',
			'icon-left-quote' : '&#xe009;',
			'icon-image' : '&#xe00c;',
			'icon-reorder' : '&#xf0c9;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};