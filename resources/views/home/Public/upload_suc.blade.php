<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>上传成功！</div>
        <input type="hidden" value="{$paths}" name="paths" id="paths" />
        <script src="/frontend/js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $('#paths', parent.document).val($("#paths").val()); 
            });
        </script>
    </body>
</html>
