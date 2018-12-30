$(document).ready(function(){
	$(".showfilter").click(function(){
		$(".actionbutton").css("top", "300px");
		$(".secondaryfilters").css("visibility", "visible");
		$(".showfilter").css("visibility", "hidden");
		$(".hidefilter").css("visibility", "visible");
	});

	$(".hidefilter").click(function(){
		$(".actionbutton").css("top", "0px");
		$(".secondaryfilters").css("visibility", "hidden");
		$(".showfilter").css("visibility", "visible");
		$(".hidefilter").css("visibility", "hidden");
	});

	// 1
	$(".des-edit-1").click(function(){
		$(".des-edit-1").addClass("hidden");
		$(".des-cancel-1").removeClass("hidden");

		$("#profile-p").addClass("hidden");
		$(".profile-des").removeClass("hidden");
		$(".btn-1").removeClass("hidden");
	});
	$(".des-cancel-1").click(function(){
		$(".des-edit-1").removeClass("hidden");
		$(".des-cancel-1").addClass("hidden");

		$("#profile-p").removeClass("hidden");
		$(".profile-des").addClass("hidden");
		$(".save-btn").addClass("hidden");
	});

	// 2

	$(".des-edit-2").click(function(){
		$(".des-cancel-2").removeClass("hidden");
		$(".des-edit-2").addClass("hidden");

		$(".no-edit-mode-1").addClass("hidden");
		$(".edit-mode-1").removeClass("hidden");
	});
	$(".des-cancel-2").click(function(){
		$(".des-edit-2").removeClass("hidden");
		$(".des-cancel-2").addClass("hidden");

		$(".no-edit-mode-1").removeClass("hidden");
		$(".edit-mode-1").addClass("hidden");
	});

	//3

	$(".des-edit-3").click(function(){
		$(".des-cancel-3").removeClass("hidden");
		$(".des-edit-3").addClass("hidden");

		$(".no-edit-mode-2").addClass("hidden");
		$(".edit-mode-2").removeClass("hidden");
	});
	$(".des-cancel-3").click(function(){
		$(".des-edit-3").removeClass("hidden");
		$(".des-cancel-3").addClass("hidden");

		$(".no-edit-mode-2").removeClass("hidden");
		$(".edit-mode-2").addClass("hidden");
	});

	//4
	$(".des-edit-4").click(function(){
		$(".des-cancel-4").removeClass("hidden");
		$(".des-edit-4").addClass("hidden");

		$(".no-edit-mode-3").addClass("hidden");
		$(".edit-mode-3").removeClass("hidden");
	});
	$(".des-cancel-4").click(function(){
		$(".des-edit-4").removeClass("hidden");
		$(".des-cancel-4").addClass("hidden");

		$(".no-edit-mode-3").removeClass("hidden");
		$(".edit-mode-3").addClass("hidden");
	});

});

