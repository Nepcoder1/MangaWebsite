<?php
if (isset($_GET['manga_url'])) {
    $manga_url = urlencode($_GET['manga_url']);
    $api_url = "https://hello-worldhena.apinepdev.workers.dev/?chap=$manga_url";
    $response = file_get_contents($api_url);
    $data = json_decode($response, true);

    $chapter_links = $data['links'] ?? [];

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manga Viewer - View Chapters</title>
        <style>
            body {
                font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #000;
                animation: hackerTwinkling 1s infinite;
            }

            @keyframes hackerTwinkling {
                0% {
                    background-color: #000;
                    box-shadow: 0 0 10px #00FFFF, 0 0 20px #00FFFF, 0 0 30px #00FFFF;
                }
                50% {
                    background-color: #000;
                    box-shadow: 0 0 20px #00FFFF, 0 0 40px #00FFFF, 0 0 60px #00FFFF;
                }
                100% {
                    background-color: #000;
                    box-shadow: 0 0 10px #00FFFF, 0 0 20px #00FFFF, 0 0 30px #00FFFF;
                }
            }

            .channel-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-evenly;
                margin-top: 20px;
            }

            .channel-box {
                background-color: #4CAF50;
                color: white;
                border: 1px solid #ddd;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                margin: 10px;
                padding: 15px;
                width: calc(33.33% - 20px);
                text-align: center;
                position: relative;
                transition: transform 0.3s ease-in-out;
                animation: hackerTwinkling 1s infinite;
            }

            .channel-box:hover {
                transform: scale(1.05);
            }

            .channel-box h3 {
                margin: 10px 0;
                font-size: 1.5em;
            }

            .channel-box img {
                max-width: 100%;
                height: auto;
                border-radius: 5px;
                margin-bottom: 10px;
                animation: hackerTwinkling 1s infinite;
            }

            .watch-now-btn {
                display: inline-block;
                padding: 15px;
                background-color: #4CAF50;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                margin-top: 10px;
                transition: background-color 0.3s ease-in-out;
                font-size: 1.2em;
                animation: hackerTwinkling 1s infinite;
            }

            .watch-now-btn:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>';

    // Default image URL
    $defaultImageUrl = "https://graph.org/file/d760bd219d4a5a52b06c9.jpg";
    // Allow users to input a custom image URL
    $customImageUrl = isset($_GET['image_url']) ? $_GET['image_url'] : $defaultImageUrl;

    if (!empty($chapter_links)) {
        echo '<div class="channel-container">';
        // Reverse the order of chapters
        $chapter_links = array_reverse($chapter_links);

        foreach ($chapter_links as $index => $chapter_link) {
            echo "<div class='channel-box'>";
            echo "<img src='$customImageUrl' alt='Default Image'>";
            echo "<h3>Chapter " . ($index + 1) . "</h3>";
            echo "<a href='view_chapter.php?chapter_url=$chapter_link' class='watch-now-btn'>View Chapter</a>";
            echo "</div>";
        }
        
        echo '</div>';
    } else {
        echo "<p>No chapters found for this manga.</p>";
    }

    echo '</body>
    </html>';
}
?>
