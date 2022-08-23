'use strict';

const $ = require('jquery');

class App {

	constructor( options ) {

		$(function(){
			setTimeout(function(){
				$('body').add('page-ready');
			}, 400);
		});

		if ( ! ('ontouchstart' in window) ) {
			document.documentElement.classList.add('no-touch');
		}

		if ( 'ontouchstart' in window ) {
			document.documentElement.classList.add('is-touch');
		}

		if (document.documentMode || /Edge/.test(navigator.userAgent)) {
			if(navigator.appVersion.indexOf('Trident') === -1) {
				document.documentElement.classList.add('isEDGE');
			} else {
				$('html').addClass('isIE isIE11');
			}
		}

		var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification));

		if(isSafari){
			document.body.classList.add('browser-safari');
		}

		if(window.location.hostname == 'localhost' | window.location.hostname == '127.0.0.1'){
			document.body.classList.add('localhost');
		}

		if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
			document.body.classList.add('darkmode');
			document.getElementById('favicon').setAttribute('href', '/wp-content/themes/spacerace2021/build/images/favicons/favicon-light.png');
		}

		var links = $('.btn, .link');
		links.each(function(){
			if( $(this).text().indexOf('newsletter') >= 0 ) {
				console.log('here');
				$(this).attr('data-modal', 'signup-modal');
			}
		});

		var modalOpen = $('*[data-modal]');

		$(document).on('click', '*[data-modal]', function(event){
			event.preventDefault();
      let trigger = $(this).attr('data-modal');
      let target = $("#" + trigger);
      if( target.hasClass('is-active') ) {
        target.removeClass('is-active');
        $('body').removeClass('modal-is-active');
      } else {
        target.addClass('is-active');
        $('body').addClass('modal-is-active');
      }
		});

		$('.site-notice .close').click(function(){
			let par = $(this).parent('.site-notice');
			let elId = par.attr('id');
			localStorage.setItem(elId, 'closed');
			par.slideUp(400);
		});

		var notice = $('.site-notice');

		notice.each(function(){
			let el = $(this);
			let elId = el.attr('id');
			if ( localStorage.getItem(elId) != 'closed' ) {
				el.show();
			}
		});

		// equal height items
		$(window).load(function(){
			if( $('.row--images .rte').length ) {
				var maxHeight = 0;
				$('.row--images ').each(function(){
					var kids = $(this).find('.rte');
					kids.each(function(){
						if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
						$(this).css('min-height', maxHeight);
					});
				});
			}
		});

	}

}

module.exports = App;
