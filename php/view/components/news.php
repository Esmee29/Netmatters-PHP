
<?php

function getNews()
{
    include "dbConnection.php";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;", $username);
        $statement = $conn->query(
            '
            SELECT * FROM news
            ORDER BY date DESC
            LIMIT 3 
            '
        );
        //echo 'Query success';
        return $statement->fetchAll();
    }
    catch (PDOException $pe)
    {
        echo 'Database query failed: ' . $pe->getMessage();
        exit;
    }
}

function articleContent($image, $imageAlt, $title, $readTime, $info, $authorImage, $authorName, $date, $counter)
{
    return '
    <div class="block-' . $counter . '">
        <a class="article-link" href ="#"></a>
        <div class="img-container">
            <a href="#" class="btn-tooltip btn-tooltip-'. $counter .'" title="View all: Digital Marketing / News">News</a>
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
?>
<div class="latest-articles container center">
            <div class="container">
                        <div class="latest-articles">
                        <div class="headings-bar">
                            <h2 class="h1 float-left">
                                <strong>Latest News</strong>
                            </h2>
                            <h3 class="view-all view-all-top hidden-sm">
                                <a href="#">View All <span class="icon-arrow-right"></span></a>
                                <span class="icon-arrow-right2"></span>
                            </h3> 
                        </div>
                
                        <div class="article-content">
    <div class="article-blocks">
        <?php
            foreach(getNews() as $article)
            {
                echo articleContent($article["image"],
                                    $article["image_alt"], 
                                    $article["title"], 
                                    $article["read_time"], 
                                    $article["info"], 
                                    $article["author_image"], 
                                    $article["author_name"], 
                                    $article["date"], 
                                    $article["counter"]);
            }
        ?>
    </div>
</div>
                           
                            <h3 class="view-all view-all-mobile ">
                                <a href="#">View All <span class="icon-arrow-right"></span></a>
                                <span class="icon-arrow-right2"></span>
                            </h3> 
                            </div>
                            
                        
                    </div>
                    </div>
            </div>
         </div>