<?php
    include "../connect/connect.php";

    if(isset($_GET['category'])){
        $category = $_GET['category'];
    }

    $categorySql = "SELECT * FROM blog WHERE blogDelete = 0 AND blogCategory = '$category' ORDER BY blogView DESC LIMIT 4";
    $categoryResult = $connect -> query($categorySql);
    $categoryInfo = $categoryResult -> fetch_array(MYSQLI_ASSOC);
    $categoryCount = $categoryResult -> num_rows;
?>
<div class="share">
    <div class="container">
        <div class="share__inner">
            <h4><a href="../blog/blog.php">운동 방법 공유</a></h4>
            <div class="cards__inner col4 line1">
<?php foreach($categoryResult as $blog){ ?>
                <div class="card">
                    <figure class="card__img">
                        <a href="../blog/blogView.php?blogID=<?= $blog['blogID']?>&category=<?= $blog['blogCategory']?>">
                            <img src="../assets/blog/<?= $blog['blogImgFile'] ?>" alt="<?= $blog['blogTitle'] ?>">
                        </a>
                    </figure>
                    <div class="card__title">
                        <h3><?= $blog['blogTitle'] ?></h3>
                    </div>      
                    <div class="card__info">
                        <span class="author"><?= $blog['blogAuthor']?></span>
                        <span class="like">조회수 : <?= $blog['blogView']?></span>
                        <span class="date"><?= date('Y-m-d', $blog['blogRegTime'])?></span>
                        <a href="#" class="more">열람</a>
                    </div>   
                </div>
<?php } ?>
            </div>
        </div>
    </div>
</div>
