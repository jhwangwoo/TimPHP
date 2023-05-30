<?php
  include "../connect/connect.php";
  include "../connect/session.php";
//   echo $_SESSION['adminMemberID'], $_SESSION['adminEmail'], $_SESSION['adminName'];
  // echo "<pre>";
  // var_dump($_SESSION);
  // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인 페이지</title>
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
                    <form action="blogSearch.php" name="blogSearch" method="get">
                        <fieldset>
                            <legend class="blind">게시판 검색 영역</legend>
                            <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력하세요!">
                            <select name="searchOption" id="searchOption">
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
                        <li><a href="blogCate.php?category=all">All</a></li>  |&nbsp;&nbsp;
                        <li><a href="blogCate.php?category=cehst">가슴(Chest)</a></li>  |&nbsp;&nbsp;
                        <li><a href="blogCate.php?category=back">등(Back)</a></li>  |&nbsp;&nbsp;  
                        <li><a href="blogCate.php?category=shoulder">어깨(Shoulder)</a></li>  |&nbsp;&nbsp;  
                        <li><a href="blogCate.php?category=leg">하체(Leg)</a></li>  |&nbsp;&nbsp;  
                        <li><a href="blogCate.php?category=arm">팔(Arm)</a></li>  |&nbsp;&nbsp;  
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
<?php
if(isset($_GET['page'])){
    $page = (int) $_GET['page']; // (int)를 적어서 타입(type)을 명시함
} else {
    $page = 1;
}

$viewNum = 12; // 한 페이지에 보여줄 개시글 개수
$viewLimit = ($viewNum * $page) - $viewNum;
$sql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC LIMIT {$viewLimit}, {$viewNum}";
$result = $connect->query($sql);

if ($result && $result -> num_rows > 0) {
    while ($blog = $result->fetch_array(MYSQLI_ASSOC)) {
        ?>
        <div class="card">
            <figure class="card__img">
                <a href="blogView.php?blogID=<?= $blog['blogID']?>">
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
        <?php
    }
} else {
    echo "게시글이 없습니다.";
}
?>
                        </div>
                    </div>
                </div>
                <div class="board__pages">
                    <ul>
<?php
    // 게시글이 총 개수?
    // 몇 페이지 나옴?

    $sql = "SELECT count(blogID) FROM blog";
    $result = $connect -> query($sql);

    $blogTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
    $blogTotalCount = $blogTotalCount['count(blogID)'];

    // 총 페이지 개수
    $blogTotalCount = ceil($blogTotalCount / $viewNum);

        // 1 2 3 4 5 [6] 7 8 9 10 11 ... $blogTotalCount 까지 하면 너무 많이 나옴 ㅠㅠ
    $pageView = 4; // 그래서 기준 페이지 앞뒤로 만들 페이지 개수 설정함
    $startPage = $page - $pageView;
    $endPage = $page + $pageView;

    // 처음 페이지 + 마지막 페이지 초기화
    if($startPage < 1) $startPage = 1;
    if($endPage >= $blogTotalCount) $endPage = $blogTotalCount;

    // 처음으로 + 이전
    if($page != 1){
        $prevPage = $page - 1;
        echo "<li><a href='blog.php?page=1'>처음으로</a></li>";
        echo "<li><a href='blog.php?page={$prevPage}'>이전</a></li>";
    }

    // 페이지
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active"; // 보고 있는 페이지가 같으면 active라는 문자열 추가

        echo "<li class='{$active}'><a href='blog.php?page={$i}'>{$i}</a></li>";
    }

    // 다음
    // if($page != $blogTotalCount){
    //     $nextPage = $page + 1; 
    //     echo "<li><a href='blog.php?page={$nextPage}'>다음</a></li>";
    //     echo "<li><a href='blog.php?page={$blogTotalCount}'>마지막으로</a></li>";
    // }

    if($page > 0 && $page < $blogTotalCount){
        $nextPage = $page + 1;
        echo "<li><a href='blog.php?page={$nextPage}'>다음</a></li>";
        echo "<li><a href='blog.php?page={$blogTotalCount}'>마지막으로</a></li>";
    }

    // 게시글이 없을 때?
    // if($page > $blogTotalCount || $page <= 0){
    //     echo "<script>alert('게시글이 없습니다.');location.href = 'blog.php';</script>";
    // }
?>
                    </ul>
                </div>
            </div>
        </main>
        <?php include "../include/footer.php"; ?>
    </div>
</body>
</html>