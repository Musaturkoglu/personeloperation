

<!DOCTYPE html>
<head><title>Site Haritası</title></head>
<?php include("navbar.php"); ?><br><br>
<html>
<head>
    <meta charset="UTF-8">
    <style>

    </style>
</head>
<?php include("../controller/rss_feed.php"); ?><br><br>

<body>
    <h1></h1>
    <div id="rss-feed"></div>

    <script>
        // RSS beslemesi için PHP dosyanızın URL'si
        const rssFeedUrl = 'rss_feed.php';

        // RSS beslemesi içeriğini çeken ve görüntüleyen fonksiyon
        function displayRSSFeed(feedData) {
            const feedContainer = document.getElementById('rss-feed');

            feedData.forEach(item => {
                const feedItemDiv = document.createElement('div');
                feedItemDiv.classList.add('feed-item');

                const feedTitle = document.createElement('div');
                feedTitle.classList.add('feed-title');
                feedTitle.innerHTML = `<a href="${item.link}" class="feed-link">${item.title}</a>`;

                const feedPubDate = document.createElement('div');
                feedPubDate.classList.add('feed-pubdate');
                feedPubDate.innerText = item.pubDate;

                feedItemDiv.appendChild(feedTitle);
                feedItemDiv.appendChild(feedPubDate);
                feedContainer.appendChild(feedItemDiv);
            });
        }

        // RSS beslemesi içeriğini çekmek için fetch kullanımı
        fetch(rssFeedUrl)
            .then(response => response.json())
            .then(data => displayRSSFeed(data))
            .catch(error => console.error('RSS feed çekme hatası:', error));
    </script>
</body>
</html>
