<?php
// Adım 1: RSS besleme içeriğini çekin
$url = 'http://www.saglik.gov.tr/rss?tip=2&Anah=96';
$xml = file_get_contents($url);

// Adım 2: SimpleXML ile XML içeriğini ayrıştırın
$rss = simplexml_load_string($xml);

// Adım 3: Öğeler üzerinde döngü yapın ve bunları görüntüleyin
foreach ($rss->channel->item as $item) {
    $title = $item->title;
    $link = $item->link;
    $pubDate = $item->pubDate;

    // Öğeyi bilgilerini görüntüleyin
    echo '<h2><a href="' . $link . '">' . $title . '</a></h2>';
    echo '<p>' . $pubDate . ' tarihinde yayınlandı.</p>';
}
?>
