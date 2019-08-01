<?php
include('include/header.php');
include('include/db.php');
?>



<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT c.id, c.author as comment_author, c.text, p.id, p.title, p.body, p.author, p.created_at FROM posts as p INNER JOIN comments AS c ON p.id = c.post_id WHERE c.post_id = $id";

    $singlePost = database($sql, $connection, 'fetchAll');
    ?>

    <link rel="stylesheet" href="styles/blog.css" type="text/css">
    <link rel="stylesheet" href="styles/styles.css" type="text/css">
    <main role="main" class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">

                <div class="blog-post">
                    <a href="#"><h2 class="blog-post-title"><?php echo $singlePost[0]['title']; ?></h2></a>
                    <p class="blog-post-meta"><?php echo $singlePost[0]['created_at']. " "; ?> by <a href="#"><?php echo " " . $singlePost[0]['author']; ?></a></p>

                    <p><?php echo $singlePost[0]['body']; ?></p>
                    <hr>
                </div>




                <button id ="showHide" class="btn btn-default">Hide comments</button><br><br/>

                <div id ="showHideComm">

                    <h3>Comments</h3>
                    <?php
                    $comments = database($sql, $connection, 'fetchAll');
                    foreach ($comments as $comment) {
                        ?>

                        <p><?php echo $comment['comment_author'] ?><p>

                        <ul>
                            <li><?php echo $comment['text']; ?></li>
                        </ul>
                        <hr>

                    <?php } ?>
                </div><!-- blog. showHideComm-->

                <?php
                } else {
                    echo "post id is not passt by url";
                } ?>



            </div><!-- /.blog-main -->

            <?php
            //dodavanje sidebar-a
            include('include/sidebar.php');
            ?>

        </div><!-- /.row -->
    </main><!-- /.container -->

    <script src ='main.js'>
    </script>


<?php
//dodavanje footer-a
include('include/footer.php');
?>