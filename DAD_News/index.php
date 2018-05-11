<?php 
session_start();
require_once 'config.php';
require_once 'connection.php'; 

$sql = "SELECT * FROM news LEFT JOIN file ON news.ArticleID = file.ArticleID
WHERE news.CategoryID = 4 AND Active = 1
GROUP BY news.ArticleID
ORDER BY news.PublishDate DESC";

$stmt = $conn->prepare($sql);
$stmt->execute();
$total_rows = $stmt->rowCount();

$page = isset($_GET['page']) ? intval($_GET['page']) : 1; 
$perpage = 10;
$record_num = ($perpage * $page) - $perpage;

$sql = "SELECT * FROM news LEFT JOIN file ON news.ArticleID = file.ArticleID
WHERE news.CategoryID = 4 AND Active = 1
GROUP BY news.ArticleID
ORDER BY news.PublishDate DESC LIMIT $record_num,$perpage";

$stmt = $conn->prepare($sql);
$stmt->execute();
$num_record = $stmt->rowCount();

?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ประกาศ</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <!-- ==================================================================== Search Result ==================================================================== -->
                        <?php while($result = $stmt->fetch()){ ?>           
                        <div class="hr-line-dashed"></div>
                        <div class="search-result">
                            <h3><a href="detail.php?ID=<?=$result['ArticleID']?>"><?=$result['Title'] ?></a></h3>
                            <p><?=$result['SubTitle'] ?></p>
                        </div>
                        <?php } ?>
                        <!-- ==================================================================== Search Result ==================================================================== -->

                        <?php 
                        $total_pages = intval(ceil($total_rows / $perpage));
                        if($num_record > 0 && $total_pages > 1){} 
                            ?>
                        <div class="hr-line-dashed"></div>
                        <div class="text-center">
                            <div class="btn-group">
                                <?php if($page > 1){ ?>
                                <a href="index.php?&page=1" class="btn btn-white"><i class="fa fa-fast-backward"></i></a>
                                <a href="index.php?&page=<?=$page-1?>" class="btn btn-white"><i class="fa fa-step-backward"></i></a>
                                <?php } ?>
                                <?php 
                                $range = 2;
                                $initial_num = $page - $range;
                                $condition_limit_num = ($page + $range)  + 1;

                                for ($x=$initial_num; $x<$condition_limit_num; $x++) {
                                    if (($x > 0) && ($x <= $total_pages)) {
                                                                // current page
                                        if ($x == $page) {
                                            echo '<a class="btn btn-white active" href="index.php?&page='.$x.'">'.$x.'</a>';
                                        } 
                                                                // not current page
                                        else {
                                            echo '<a class="btn btn-white" href="index.php?&page='.$x.'">'.$x.'</a>';
                                        }
                                    }
                                }
                                ?>

                                <?php if($page < $total_pages){ ?>
                                <a href="index.php?&page=<?=$page+1?>" class="btn btn-white"><i class="fa fa-step-forward"></i></a>
                                <a href="index.php?&page=<?=$total_pages?>" class="btn btn-white"><i class="fa fa-fast-forward"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--     <div class="footer">
        <div class="pull-right">
            10GB of <strong>250GB</strong> Free.
        </div>
        <div>
            <strong>Copyright</strong> Example Company &copy; 2014-2017
        </div>
    </div> -->

</div>
</div>


<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>


</body>

</html>
