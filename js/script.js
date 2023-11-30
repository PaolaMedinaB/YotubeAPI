function searchYouTube() {
    var query = $("#search-input").val();

    $.ajax({
        url: "search.php",
        data: { query: query },
        success: function (data) {
            displayResults(JSON.parse(data));
        }
    });
}

function displayResults(results) {
    var container = $("#results-container");
    container.empty();

    results.items.forEach(function (item) {
        var videoId = item.id.videoId;
        var title = item.snippet.title;
        var rating = getVideoRating(videoId);

        var html = `
            <div class="video">
                <h2>${title}</h2>
                <p>Rating: ${rating}</p>
                <a href="https://www.youtube.com/watch?v=${videoId}" target="_blank">Watch on YouTube</a>
            </div>
        `;

        container.append(html);
    });
}

function getVideoRating(videoId) {
    
    return "Not implemented";
}
