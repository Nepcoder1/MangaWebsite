<?php
if (isset($_GET['search_term'])) {
    $search_term = urlencode($_GET['search_term']);
    $api_url = "https://hello-worldhena.apinepdev.workers.dev/?search=$search_term";
    $response = file_get_contents($api_url);
    $data = json_decode($response, true);

    $results = $data['results'] ?? [];

    if (!empty($results)) {
        echo '<div class="results-container">';
        foreach ($results as $result) {
            $title = $result['overview'] ?? '';
            $image = $result['image'] ?? '';
            $link = $result['link'] ?? '';

            echo "<div class='manga-box'>";
            echo "<img src='$image' alt='$title'>";
            echo "<h3>$title</h3>";
            echo "<a href='view_chapters.php?manga_url=$link' class='watch-now-btn'>View Chapters</a>";
            echo "</div>";
        }
        echo '</div>';
    } else {
        echo "<p>No manga found for the given search term. Please try a different one.</p>";
    }
}
?>
