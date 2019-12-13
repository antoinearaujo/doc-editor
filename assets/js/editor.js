(function () {
	$("#textarea-doc").on("change, keyup", function () {
		writeTextFile("README.md", $(this).val());
		console.log($(this).val());
		$("#test")[0].contentWindow.location.reload(true);
	});

	function writeTextFile(filename, output) {
		$.ajax({
			method: "POST",
			url: "../controllers/write.php",
			data: {filename: filename, content: output}
		})
			.done(function (msg) {
				console.log("Data Saved: " + msg);
			});
	}
})();