<?php
if (isset($_GET['chapter_url'])) {
    $chapter_url = urlencode($_GET['chapter_url']);
    $api_url = "https://hello-worldhena.apinepdev.workers.dev/?url=$chapter_url";
    $response = file_get_contents($api_url);
    $data = json_decode($response, true);

    $image_links = $data['image_links'] ?? [];

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manga Viewer - View Chapter</title>
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

            .chapter-images {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                margin-top: 20px;
            }

            .chapter-images img {
                max-width: 100%;
                height: auto;
                border: 1px solid #ddd;
                border-radius: 5px;
                margin: 10px;
                animation: hackerTwinkling 1s infinite;
            }
        </style>
    </head>
    <body>';

    if (!empty($image_links)) {
        echo '<div class="chapter-images">';
        foreach ($image_links as $image_link) {
            echo "<img src='$image_link' alt='Chapter Image'>";
        }
        echo '</div>';
    } else {
        echo "<p>No images found for this chapter.</p>";
    }

    echo '</body>
    </html>';
}
?>
