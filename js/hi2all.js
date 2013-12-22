/**
 * Выполняется после загрузки странички
 */
$(function() {

	// Баним "плохие" браузеры
	$.reject(
	{
		reject: {all: false, msie5: true, msie6: true, msie7: true},
		display: ['firefox', 'chrome', 'msie', 'safari', 'opera', 'gcf'],
		header: 'Ваш браузер безнадёжно устарел!',
		paragraph1: 'Ваш браузер сильно устарел и поэтому не может корректно работать с данным сайтом. Список наиболее популярных современных браузеров приведён ниже.',
		paragraph2: 'Выберите любой из них и установите!',
		close: false,
		imagePath: '/img/reject/',
	});
});