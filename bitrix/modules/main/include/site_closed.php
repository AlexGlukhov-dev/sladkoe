<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CHTTP::SetStatus("503 Service Temporarily Unavailable");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>503 Service Unavailable</title>
</head>
<body>
<div class="error" style="display: block;
                          margin-left: auto;
                          margin-right: auto;
                          width: 50%;">
    <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/close.jpg">
</div>
</body>
</html>