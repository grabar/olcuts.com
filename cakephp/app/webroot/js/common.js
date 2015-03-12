/* user script */

//ドメイン外リンクを「target="_blank"」
$(function () {
	$('a[href^=http]').not('[href*="' + location.hostname + '"]').attr('target', '_blank');
});


//スムーススクロール
$(function () {
	$('a[href^=#]').click(function () {
		var speed = 500,
			href = $(this).attr("href"),
			target = $(href === "#" || href === "" ? 'html' : href),
			position = target.offset().top;
		if (target.length === 0) {
			return;
		}
		$("html, body").animate({scrollTop: position}, speed, "swing");
		return false;
	});
});


/* Magnific Popup Option */
$(function () {
	$('.schedule_add').magnificPopup({
		type: 'inline',
		midClick: true,
	});
});


