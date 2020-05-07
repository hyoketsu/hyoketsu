<?php
    $url = [
        "https://headlines.yahoo.co.jp/rss/all-dom.xml",
        "https://headlines.yahoo.co.jp/rss/all-c_int.xml",
        "https://headlines.yahoo.co.jp/rss/all-bus.xml",
        "https://headlines.yahoo.co.jp/rss/all-c_ent.xml",
        "https://headlines.yahoo.co.jp/rss/all-c_spo.xml",
        "https://headlines.yahoo.co.jp/rss/all-c_sci.xml",
        "https://headlines.yahoo.co.jp/rss/all-c_life.xml",
        "https://headlines.yahoo.co.jp/rss/all-loc.xml",
        "https://news.yahoo.co.jp/polls/rss.xml",
        "https://news.yahoo.co.jp/byline/rss/all.xml",
        "https://b.hatena.ne.jp/hotentry.rss"
    ];
    $xml = file_get_contents($url[floor(rand() * count($url))]);
    header("Content-type: application/xml; charset=UTF-8");
    print $xml;
?>
