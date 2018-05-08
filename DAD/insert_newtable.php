<?php 
require_once 'config.php';
require_once 'connection.php';

$sql = "SELECT * FROM dad_news news LEFT JOIN dnn_EasyDNNNewsCategories cat ON cat.ArticleID = news.ArticleID
LEFT JOIN dnn_EasyDNNNewsCategoryList list ON list.CategoryID = cat.CategoryID
WHERE cat.CategoryID = 13 AND Active = 1
ORDER BY news.PublishDate DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();

while($result = $stmt->fetch()){
	$sql_insert = "INSERT INTO news"
	." SET ArticleID 	=	:articleid,"
	." PortalID 			=	:portalid,"
	." UserID 			=	:userid,"
	." Title 			=	:title,"
	." SubTitle			=	:subtitle,"
	." Summary			=	:summary,"
	." Article			=	:article,"
	." ArticleImage		=	:articleimage,"
	." DateAdded			=	:dateadded,"
	." LastModified		=	:lastmodified,"
	." PublishDate		=	:publishdate,"
	." ExpireDate		=	:expiredate,"
	." NumberOfViews		= 	:numberofviews,"
	." RatingValue		=	:ratingvalue,"
	." RatingCount		=	:ratingcount,"
	." TitleLink			=	:titlelink,"
	." DetailType		=	:detailtype,"
	." DetailTypeData	=	:detailtypedata,"
	." ArticleImageFolder	=	:articleimagefolder,"
	." DetailTarget		=	:detailtarget,"
	." CleanArticleData	=	:cleanarticledata,"
	." DetailMediaType	=	:detailmediatype,"
	." DetailMediaData	=	:detailmediadata,"
	." Active			=	:active,"
	." CategoryID		=	:categoryid,"
	." CategoryName		=	:categoryname,"
	." Content_Status 	=	:content_status";

	$conn_insert = $conn;
	$stmt_insert = $conn_insert->prepare($sql_insert);
	$stmt_insert->bindParam(':articleid',$result['ArticleID']);
	$stmt_insert->bindParam(':portalid',$result['PortalID']);
	$stmt_insert->bindParam(':userid',$result['UserID']);
	$stmt_insert->bindParam(':title',$result['Title']);
	$stmt_insert->bindParam(':subtitle',$result['SubTitle']);
	$stmt_insert->bindParam(':summary',$result['Summary']);
	$stmt_insert->bindParam(':article',$result['Article']);
	$stmt_insert->bindParam(':articleimage',$result['ArticleImage']);
	$stmt_insert->bindParam(':dateadded',$result['DateAdded']);
	$stmt_insert->bindParam(':lastmodified',$result['LastModified']);
	$stmt_insert->bindParam(':publishdate',$result['PublishDate']);
	$stmt_insert->bindParam(':expiredate',$result['ExpireDate']);
	$stmt_insert->bindParam(':numberofviews',$result['NumberOfViews']);
	$stmt_insert->bindParam(':ratingvalue',$result['RatingValue']);
	$stmt_insert->bindParam(':ratingcount',$result['RatingCount']);
	$stmt_insert->bindParam(':titlelink',$result['TitleLink']);
	$stmt_insert->bindParam(':detailtype',$result['DetailType']);
	$stmt_insert->bindParam(':detailtypedata',$result['DetailTypeData']);
	$stmt_insert->bindParam(':articleimagefolder',$result['ArticleImageFolder']);
	$stmt_insert->bindParam(':detailtarget',$result['DetailTarget']);
	$stmt_insert->bindParam(':cleanarticledata',$result['CleanArticleData']);
	$stmt_insert->bindParam(':detailmediatype',$result['DetailMediaType']);
	$stmt_insert->bindParam(':detailmediadata',$result['DetailMediaData']);
	$stmt_insert->bindParam(':active',$result['Active']);
	$stmt_insert->bindParam(':categoryid',$result['CategoryID']);
	$stmt_insert->bindParam(':categoryname',$result['CategoryName']);
	$stmt_insert->bindParam(':content_status',$result['Content_Status']);
	$stmt_insert->execute();
}
?>