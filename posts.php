<?php
include ('include/header.php');
include ('include/db.php');

?>

    <?php
        $sql ="SELECT id, title, body, author, created_at FROM posts ORDER BY created_at DESC";

        $posts = database($sql, $connection, "fetchAll");
    ?>


    <link rel="stylesheet" href="styles/blog.css" type="text/css">
    <link rel="stylesheet" href="styles/styles.css" type="text/css">

    <main role="main" class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">


               <?php foreach ($posts as $post) { ?>

                <div class="blog-post">

                    <a href="single-post.php?post_id=<?php echo $post['id']; ?>">

                        <h2 class="blog-post-title"><?php echo $post['title'] ?></h2>

                    </a>

                    <p class="blog-post-meta"><?php echo $post['created_at'] . " "; ?> by <a href="#"><?php echo " " . $post['author']; ?></a></p>

                    <hr>

                    <p><?php echo $post['body']; ?></p>

                </div>

                <?php } ?>


                <div class="blog-post">
                    <a href "#"> <h2 class="blog-post-title">Sample blog post</h2></a>
                    <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

                    <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                    <hr>
                    <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>

                </div><!-- /.blog-post -->



                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>

            </div><!-- /.blog-main -->

<?php

include ('include/sidebar.php');
include ('include/footer.php');