<?php
    $xml = file_get_contents($_GET["url"]);
    header("Content-type: application/xml; charset=UTF-8");
    print $xml;
