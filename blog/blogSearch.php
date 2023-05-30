<?php
  include "../connect/connect.php";
  include "../connect/session.php";
//   echo $_SESSION['adminMemberID'], $_SESSION['adminEmail'], $_SESSION['adminName'];
  // echo "<pre>";
  // var_dump($_SESSION);
  // echo "</pre>";

    if(isset($_GET['page'])){
        $page = (int) $_GET['page']; // (int)를 적어서 타입(type)을 명시함
    } else {
        $page = 1;
    }
    $searchKeyword = $_GET ['searchKeyword'];
    $searchOption = $_GET ['searchOption'];

    $searchKeyword = $connect -> real_escape_string(trim($searchKeyword));
    $searchOption = $connect -> real_escape_string(trim($searchOption));

    $sql = "SELECT * FROM blog ";

    switch($searchOption){
        case "title":
            $sql .= "WHERE blogTitle LIKE '%{$searchKeyword}%' ORDER BY blogID DESC ";
            break;
        case "content":
            $sql .= "WHERE blogContents LIKE '%{$searchKeyword}%' ORDER BY blogID DESC ";
            break;
        case "name":
            $sql .= "WHERE blogAuthor LIKE '%{$searchKeyword}%' ORDER BY blogID DESC ";
            break;
    }
    $result = $connect -> query($sql);
    // echo "<pre>";
    // var_dump($info);
    // echo "</pre>";
    $totalCount = $result -> num_rows;
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
                        
<?php
    $viewNum = 12; // 한 페이지에 보여줄 개시글 개수
    $viewLimit = ($viewNum * $page) - $viewNum;

    $sql .= "LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;

        if($count > 0){
            for($i=0; $i<$count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC); ?>
                <div class="card">
                    <figure class="card__img">
                        <a href="blogView.php?blogID=<?= $info['blogID']?>">
                            <img src="../assets/blog/<?= $info['blogImgFile'] ?>" alt="<?= $info['blogTitle'] ?>">
                        </a>
                    </figure>
                    <div class="card__title">
                        <h3><?= $info['blogTitle'] ?></h3>
                    </div>      
                    <div class="card__info">
                        <span class="author"><?= $info['blogAuthor']?></span>
                        <span class="like">조회수 : <?= $info['blogView']?></span>
                        <span class="date"><?= date('Y-m-d', $info['blogRegTime'])?></span>
                        <a href="#" class="more">열람</a>
                    </div>   
                </div>
            <?php }
        } else {
            echo "게시글이 없습니다.";
        }
    }
?>
                        </div>
                    </div>
                </div>
                <div class="board__pages">
                    <ul>
                        <!-- <li><a href="#">처음으로</a></li>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">&gt;</a></li>
                        <li><a href="#">마지막으로</a></li> -->
<?php
    // 게시글이 총 개수?
    // 몇 페이지 나옴?

    $sql = "SELECT count(blogID) FROM blog";
    $result = $connect -> query($sql);

    $blogTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
    $blogTotalCount = $blogTotalCount['count(blogID)'];

    // 총 페이지 개수
    $blogTotalCount = ceil($totalCount / $viewNum);

        // 1 2 3 4 5 [6] 7 8 9 10 11 ... $blogTotalCount 까지 하면 너무 많이 나옴 ㅠㅠ
    $pageView = 4; // 그래서 기준 페이지 앞뒤로 만들 페이지 개수 설정함
    $startPage = $page - $pageView;
    $endPage = $page + $pageView;

    // 처음 페이지 + 마지막 페이지 초기화
    if($startPage < 1) $startPage = 1;
    if($endPage >= $blogTotalCount) $endPage = $blogTotalCount;

    // 처음으로, 이전
    if($page !== 1 && $page <= $blogTotalCount){
        echo "<li><a href='blogSearch.php?searchKeyword={$searchKeyword}&searchOption={$searchOption}&page=1'>처음으로</a></li>";
        echo "<li><a href='blogSearch.php?searchKeyword={$searchKeyword}&searchOption={$searchOption}&page={$prevPage}'>이전</a></li>";
        $prevPage = $page - 1;
    }

    // 페이지
    for($i=$startPage; $i<=$endPage; $i++){
        if($page > 0 && $page <= $blogTotalCount){
            $active = "";
            if($i == $page) $active = "active";
            echo "<li class='{$active}'><a href='blog.php?searchKeyword={$searchKeyword}&searchOption={$searchOption}&page={$i}'>{$i}</a></li>";
        }        
    }

    // 다음, 마지막으로
    if($page !== $blogTotalCount && $page < $blogTotalCount){
        $nextPage = $page + 1;
        echo "<li><a href='blogSearch.php?searchKeyword={$searchKeyword}&searchOption={$searchOption}&page={$nextPage}'>다음</a></li>";
        echo "<li><a href='blogSearch.php?searchKeyword={$searchKeyword}&searchOption={$searchOption}&page={$boardTotalCount}'>마지막으로</a></li>";
    }
?>
                    </ul>
                </div>
            </div>
        </main>
        <?php include "../include/footer.php"; ?>
    </div>
</body>
</html>