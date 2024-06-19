<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Manga Viewer</title>
    <style>
    	body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

header {
    background-color: #000;
    color: white;
    text-align: center;
    padding: 40px 0;
    animation: hackerTwinkling 1s infinite;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

form.search-form {
    text-align: center;
    margin-bottom: 20px;
}

form.search-form input[type="text"] {
    padding: 15px; /* Increase the padding */
    width: 60%; /* Adjust the width as needed */
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1.2em; /* Increase the font size */
    margin-right: 10px;
}

form.search-form button {
    padding: 15px; /* Increase the padding */
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-size: 1.2em; /* Increase the font size */
}

.channel-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
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
    font-size: 1.5em; /* Increase the font size */
}

.channel-box p {
    margin: 5px 0;
    font-size: 1.1em; /* Increase the font size */
}

.watch-now-btn {
    display: inline-block;
    padding: 15px; /* Increase the padding */
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 10px;
    transition: background-color 0.3s ease-in-out;
    font-size: 1.2em; /* Increase the font size */
    animation: hackerTwinkling 1s infinite;
}

.watch-now-btn:hover {
    background-color: #45a049;
}

/* Additional styles for manga results */
.results-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
}

.manga-box {
    background-color: #3498db;
    color: white;
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 10px;
    padding: 15px;
    width: calc(50% - 20px);
    text-align: center;
    position: relative;
    transition: transform 0.3s ease-in-out;
    animation: hackerTwinkling 1s infinite;
}

.manga-box:hover {
    transform: scale(1.05);
}

.manga-box h3 {
    margin: 10px 0;
    font-size: 1.5em; /* Increase the font size */
}

.manga-box img {
    max-width: 100%;
    height: auto;
}
.chapter-images {
    text-align: center;
    margin-top: 20px;
}

.chapter-images img {
    max-width: 100%;
    height: auto;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 10px;
    animation: hackerTwinkling 1s infinite;
}
    </style>
</head>
<body>
	
<header>
    <h1>Manga Reader </h1>
         <form class="search-form" action="index.php" method="GET">
            <input type="text" name="search_term" placeholder="Enter manga title" class="search-input">
            <button type="submit" class="search-button watch-now-btn">Search</button>
        </form>
</header>
   

        <!-- Display Manga Results Here -->
        <?php include('fetch_manga.php'); ?>

    </div>

    
    <footer style="bottom: 0; width: 100%; text-align: center; padding: 5px 0; background-color:hackerTwinkling 1s infinite;;  background-size: cover; color: #fff;">
        <a href="t.me/devsnp" style="text-decoration: none;">
            <button style="background-color: #FF0000; color: #fff; padding: 15px 30px; border-radius: 8px; border: none; cursor: pointer; font-weight: bold; transition: background-color 0.3s ease; text-transform: uppercase; letter-spacing: 1px;      animation: hackerTwinkling 1s infinite;">
               Made By Nepcoder
            </button>
        </a>
    </footer>
</body>
</html> 