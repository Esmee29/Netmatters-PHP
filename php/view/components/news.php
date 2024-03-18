<?php
// Load environment variables
require_once __DIR__ . '/../../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, 'db.env');
$dotenv->load();
require_once 'php/controllers/DatabaseController.php';

try {
    // Provide the required database connection details
    $host = $_ENV['MySQL_DB_HOST'];
    $dbname = $_ENV['MySQL_DB_NAME'];
    $dbusername = $_ENV['MySQL_DB_USER_NAME'];
    $dbpassword = $_ENV['MySQL_DB_PASSWORD'];

    // Instantiate the DatabaseController with the provided details
    $db = new DatabaseController($host, $dbusername, $dbpassword, $dbname);

    // Connect to the database
    $db->connect();

    // Query the database to fetch news articles
    $news = $db->query("SELECT * FROM news ORDER BY date DESC LIMIT 3");

    // Disconnect from the database
    $db->disconnect();

    function articleContent($image, $imageAlt, $title, $readTime, $info, $type, $authorImage, $authorName, $date, $counter)
{
    return '
    <div class="block block-' . $counter . '">
        <a class="article-link" href ="#"></a>
        <div class="img-container">
            <a href="#" class="btn-tooltip btn-tooltip-' . $counter . '" title="View all: Digital Marketing / News">' . $type . '</a>
            <a class="article-img">
            <img src="' . $image . '" class ="img-responsive img-container" alt="' . $imageAlt . '">
            </a> 
        </div>
        <div class="block-content">
            <h3>
            <a href="#">' . $title  . '</a>
            <span class="readtime">' . $readTime . '</span>
            </h3>
            <p>' . $info . '</p>
            <div class="btn btn-news btn-news-' . $counter . '">Read More</div>
            
            <div class="user">
                <div class="avatar">
                    <img src="' . $authorImage . '" class="img-responsive" alt="Netmatters">
                </div>
                <div class="info">
                    <strong>' . $authorName . '</strong> <br>
                    ' . $date . '
                </div>
            </div>
        </div>
        
    </div>
    ';
}

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
<div class="article-content">
    <div class="article-blocks">
        <?php
        // Print or process the fetched news data
        if ($news) {
            foreach ($news as $article) {
                echo articleContent($article["image"],
                                    $article["image_alt"], 
                                    $article["title"], 
                                    $article["read_time"], 
                                    $article["info"],
                                    $article["type"], 
                                    $article["author_image"], 
                                    $article["author_name"], 
                                    $article["date"], 
                                    $article["counter"]);
            }
        } else {
            // Handle error if news retrieval failed
            echo "Failed to fetch news.";
        }
        ?>
    </div>
</div>
