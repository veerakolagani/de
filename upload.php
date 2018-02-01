<input type="file" id="fileUpload" />
<input type="button" id="upload" value="Upload" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#upload").bind("click", function () {
            if (typeof ($("#fileUpload")[0].files) != "undefined") {
                var size = parseFloat($("#fileUpload")[0].files[0].size / 1024).toFixed(2);
                alert(size + " KB.");
				if(size>"1700.50")
				{
					alert("size is grate");
				}
            } else {
                alert("This browser does not support HTML5.");
            }
        });
    });
</script>