(function($) {
	$(function() {
		$("#media-upload").on("click", function() {
			window.send_to_editor = function(html) {
				var imgUrl = $(html).attr("src");
				$("#image-url").val(imgUrl);
				$("#image-view").attr("src", imgUrl);
				tb_remove();
			};
			tb_show(null, "media-upload.php?post_id=0&type=image&TB_iframe=true");
			return false;
		})
	});
})(jQuery);