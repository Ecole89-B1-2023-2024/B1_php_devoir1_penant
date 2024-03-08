<?php
  require 'data.php';
    include 'header.php'; ?>
    <main>
        <section>
        <?php include 'templates/carousel.php' ?>
        </section>
        <section class="d-flex flex-wrap justify-content-around w-75 mx-auto my-5">
            <?php 
            foreach($posts as $key => $value) {
              include 'templates/article.php'; }?>
        </section>
    </main>
</body>
</html>