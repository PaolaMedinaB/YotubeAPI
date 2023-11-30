<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Search</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="search-container">
        <input type="text" id="search-input" placeholder="Search for videos">
        <button onclick="searchYouTube()">Search</button>
    </div>
    
    <div id="results-container"></div>

    <div id="pagination-container"></div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
