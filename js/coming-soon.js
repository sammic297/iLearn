/*global $, jQuery*/

$(document).ready(function () {
	"use strict";
	
	// Init Material scripts for buttons ripples, inputs animations etc, more info on the next link https://github.com/FezVrasta/bootstrap-material-design#materialjs
	$.material.init();
	
	// ----------------------------
	// Countdown Timer
	// ----------------------------
    $('#timer').countdown('2016/12/31', function (event) {
		var format = '<div class="col-xs-6 col-md-3"><div class="tcard">%D <span>days</span></div></div> '
				+ '<div class="col-xs-6 col-md-3"><div class="tcard">%H <span>hours</span></div></div> '
				+ '<div class="col-xs-6 col-md-3"><div class="tcard">%M <span>minutes</span></div></div> '
				+ '<div class="col-xs-6 col-md-3"><div class="tcard">%S <span>seconds</span></div></div> ';
		$(this).html(event.strftime(format));
	});
	
	// ----------------------------
    // Progressbar
    // ----------------------------
	$(function () {
		var totalDays = 365, // 365 = 365 days = 1 year, set this value as interval length between start and end
			days = $('#timer').find('.tcard:first').text(),
			value = parseInt(days, 10),
			valueNow = totalDays - value;
		$('.progress-bar').css({
			"width": valueNow + 'px'
		}).attr({
			"aria-valuenow": valueNow,
			"aria-valuemax": totalDays
		});
	});
	
	// ----------------------------
    // Translate nav button
    // ----------------------------
	$(".footer-nav ul li").transition({ y: 0, delay: 1000}, 1200, "easeInCirc");
	
});