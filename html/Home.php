<?php 
 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | Copium</title>
        <link rel="stylesheet" href="/css/main.css">
        <link rel="favicon" href="/img/C.ico">
        <!--link favicon-->
        <link rel="shortcut icon" href="/img/C.ico" type="image/x-icon">
        <script src="/js/posts.js"></script>
    </head>
    <body>
        <header>
                <a href="" id="header_h1_home">COPIUM</a><br>
                <a href="" id="header_h1_subhome">A place to spread gossip</a><br>
                <div id="header_h2">
                    <a href="" id="header_h2_post">New Post</a>
                    <a href="" id="header_h2_contact">Contact</a>
                    <a href="" id="header_h2_login">Login</a>
                    <a href="" id="header_h2_signup">Sign Up</a>
                </div>
        </header>

        <div id="recentposts">
            <h2>Recent Posts</h2>
            <div id="recentposts_posts">
                $posts = getPosts();
                foreach($posts as $post) {
                    echo "<div class='post'>";
                    echo "<h3>".$post['title']."</h3>";
                    echo "<p>".$post['content']."</p>";
                    echo "<p>".$post['date']."</p>";
                    echo "</div>";
                }
            </div>
        </div>
    </body>
    </html>
?>