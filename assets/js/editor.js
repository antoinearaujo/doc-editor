(function () {

	$("#textarea-doc").on("change, keyup", function () {
		writeTextFile("README.md", $(this).val());
		$("#test")[0].contentWindow.location.reload(true);
	});

	$("#big-edit-doc").on("click", function () {
		bigEditDoc($(this));
	});

	/**
	 * @param filename
	 * @param output
	 */
	function writeTextFile(filename, output) {

		$.ajax({
			method: "POST",
			url: "../controllers/write.php",
			data: {filename: filename, content: output}
		})
		.done(function (msg) {

			var success = JSON.parse(msg);

			if (success) {
				console.log('Data saved.')
			} else {
				console.error('Error in ajax request.')
			}

		})
		.fail(function (msg) {
			console.error(msg)
		});
	}

	/**
	 * @param $this
	 */
	function bigEditDoc($this) {

		var previewDoc = $('#preview-doc');
		var editDoc    = $('#edit-doc');

		if ($this.data('state') === 0) {
			$this.text('Réduire');
			previewDoc.hide();
			editDoc.removeClass().addClass('col-12');
			$this.data('state', 1);
		} else {
			$this.text('Agrandir');
			previewDoc.show();
			editDoc.removeClass().addClass('col-6');
			$this.data('state', 0);
		}
	}
})();