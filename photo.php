<html>
<body>
<script language="JavaScript">
function checkSize()
{
    im = new Image();
    im.src = document.Upload.submitfile.value;
if(!im.src)
    im.src = document.getElementById('submitfile').value;
    alert("image is uploaded successfully");


}
</script>
<form name="Upload" action="#" enctype="multipart/form-data" method="post">
   <p>Filename: <input type="file" name="submitfile" id="submitfile" />
   <input type="button" value="Send" onClick="checkSize();" />
</form>
</body>
</html>