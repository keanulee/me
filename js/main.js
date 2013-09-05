$(document).ready(function() {
	$("footer .social-icons a").tooltip();

	$(window).scroll(function () {
    $(".splash").css("background-position", "right " + ($(this).scrollTop() / 2) + "px");
	});

	// $(document).on("touchmove", function (e) {
	// 	e.preventDefault();
	// 	$(document).scrollTop($(this).scrollTop()+1);
	// });

	// document.addEventListener("touchmove", function () {
 //    $(".splash").css("background-position", "right " + ( / 2) + "px");
	// }, false);
});
