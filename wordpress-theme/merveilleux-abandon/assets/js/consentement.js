(function () {
	var KEY = 'ma_consent', box = document.querySelector('.ma-cookies');
	function read() {
		var m = document.cookie.match(/(?:^|; )ma_consent=([^;]+)/);
		return m ? m[1] : null;
	}
	function save(v) {
		document.cookie = KEY + '=' + v + '; Max-Age=' + (60 * 60 * 24 * 182) + '; Path=/; SameSite=Lax; Secure';
	}
	function loadTrackers() {
		if (window.MA_CONSENT && MA_CONSENT.ga && !window.gtag) {
			var s = document.createElement('script');
			s.async = true; s.src = 'https://www.googletagmanager.com/gtag/js?id=' + MA_CONSENT.ga;
			document.head.appendChild(s);
			window.dataLayer = window.dataLayer || [];
			window.gtag = function () { dataLayer.push(arguments); };
			gtag('js', new Date()); gtag('config', MA_CONSENT.ga, { anonymize_ip: true });
		}
		if (window.MA_CONSENT && MA_CONSENT.pixel && !window.fbq) {
			!function (f, b, e, v, n, t, s) { if (f.fbq) return; n = f.fbq = function () { n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments) }; if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0; t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s) }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', MA_CONSENT.pixel); fbq('track', 'PageView');
		}
	}
	function loadFrames() {
		document.querySelectorAll('iframe[data-ma-src]').forEach(function (f) {
			f.src = f.getAttribute('data-ma-src'); f.removeAttribute('data-ma-src');
			var w = f.closest('.ma-iframe-attente'); if (w) w.classList.add('ma-iframe-ok');
		});
	}
	function apply(v) {
		if (v === 'all') { loadTrackers(); loadFrames(); }
	}
	function choose(v) {
		var was = read(); save(v); if (box) box.hidden = true;
		if (was === 'all' && v === 'none') { location.reload(); return; }
		apply(v);
	}
	document.addEventListener('click', function (e) {
		var b = e.target.closest('[data-ma-consent]');
		if (b) { choose(b.getAttribute('data-ma-consent')); return; }
		if (e.target.closest('.ma-iframe-accord')) { choose('all'); return; }
		var a = e.target.closest('a[href$="#gerer-cookies"]');
		if (a) { e.preventDefault(); if (box) box.hidden = false; }
	});
	var v = read();
	if (v) apply(v); else if (box) box.hidden = false;
})();
