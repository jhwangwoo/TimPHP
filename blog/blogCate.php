<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    if(isset($_GET['category'])){
        $category = $_GET['category'];
    } else {
        Header("Location: blog.php");   
    }
    if($category == "all"){
        $categorySql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC";
    } else {
        $categorySql = "SELECT * FROM blog WHERE blogDelete = 0 AND blogCategory = '$category' ORDER BY blogID DESC";
    }
    $categoryResult = $connect -> query($categorySql);
    $categoryInfo = $categoryResult -> fetch_array(MYSQLI_ASSOC);
    $categoryCount = $categoryResult -> num_rows;
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <!-- SCRIPT -->
    <script defer src="assets/js/common.js"></script>

</head>
<body>
    <div id="wrap">
        <?php include "../include/skip.php"; ?>
        <!-- //SKIP -->
        <?php include "../include/header.php"; ?>
        <!-- //header -->
        <div class="slider__wrap">
            <div class="slider__img">
                <div class="slider">
                    <img src="../html/assets/img/slider_01.png" class="img__logo">
                </div>
            </div>
        </div>
        <!-- banner -->
        <main>
            <div class="board__inner">
                <h2>운동 방법 공유</h2>
                <div class="board__search">
                    <form action="#" name="#" method="#">
                        <fieldset>
                            <legend class="blind">게시판 검색 영역</legend>
                            <input type="search" placeholder="검색어를 입력하세요!">
                            <select name="#" id="#">
                                <option value="title">제목</option>
                                <option value="content">내용</option>
                                <option value="name">등록자</option>
                            </select>
                            <button type="submit" class="btnStyle4">검색</button>
                            <a href="blogWrite.php" class="btnStyle4">글쓰기</a>
                        </fieldset>
                    </form>
                </div>
                <div class="category">
                    <ul>
                        <li><a href="blogCate.php?category=all">All</a></li>
                        <li><a href="blogCate.php?category=chest">가슴(Chest)</a></li>
                        <li><a href="blogCate.php?category=back">등(Back)</a></li>
                        <li><a href="blogCate.php?category=shoulder">어깨(Shoulder)</a></li>
                        <li><a href="blogCate.php?category=leg">하체(Leg)</a></li>
                        <li><a href="blogCate.php?category=arm">팔(Arm)</a></li>
                        <li><a href="blogCate.php?category=abs">복근(Abs)</a></li>
                    </ul>
                </div>
                <div class="share">
                    <div class="share__inner">
                        <div class="cards__inner col4 line1">
                            <!-- <div class="card">
                                <figure class="card__img">
                                    <img src="../html/assets/img/logo3.png" alt="기본 이미지">
                                </figure>
                                <div class="card__title">
                                    <h5>제목제목제목제목제목제목제목제목</h5>
                                </div>                        
                                <div class="card__info">
                                    <span class="author">신동진</span>
                                    <span class="like">조회수 : 1</span>
                                    <span class="date">2023.05.17</span>
                                    <a href="#" class="more">열람</a href="#">
                                </div>
                            </div> -->

        <?php foreach($categoryResult as $blog){ ?>
            <div class="card">
                <figure class="card__img">
                    <a href="blogView.php?blogID=<?= $blog['blogID']?>&category=<?= $blog['blogCategory']?>">
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
                <!-- <div class="board__pages">
                    <ul>
                    </ul>
                </div> -->
            </div>
        </main>
        <?php include "../include/footer.php"; ?>
    </div>
    
</body>
</html>