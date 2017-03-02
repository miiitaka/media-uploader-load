(function($) {
	$(function() {
		$("#media-upload").on("click", function(e) {
			e.preventDefault();
			tb_show(null, "media-upload.php?post_id=0&type=image&TB_iframe=true");

			window.send_to_editor = function(html) {
				var imgUrl = $("img", html).attr("src");

				if (imgUrl === undefined) {
					imgUrl = $(html).attr("src");
				}

				$("#image-url").val(imgUrl);
				$("#image-view").attr("src", imgUrl);
				tb_remove();
			};
		})
	});
})(jQuery);