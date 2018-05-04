<?php 
require_once 'config.php';
require_once 'connection.php';

$sql = "SELECT * FROM dnn_EasyDNNNews news LEFT JOIN dnn_EasyDNNNewsCategories cat ON cat.ArticleID = news.ArticleID
LEFT JOIN dnn_EasyDNNNewsCategoryList list ON list.CategoryID = cat.CategoryID
WHERE (cat.CategoryID = 13 OR cat.CategoryID = 5 OR cat.CategoryID = 4 OR cat.CategoryID = 39) AND Active = 1";
$stmt = $conn->prepare($sql);
$stmt->execute();

while($result = $stmt->fetch()){
	$sql_insert = "INSERT INTO dad_news"
	." SET ArticleID 	=	:articleid";
	// ." PortalID 			=	:portalid,"
	// ." UserID 			=	:userid,"
	// ." Title 			=	:title,"
	// ." SubTitle			=	:subtitle,"
	// ." Summary			=	:summary,"
	// ." Article			=	:article,"
	// ." ArticleImage		=	:articleimage,"
	// ." DateAdded			=	:dateadded,"
	// ." LastModified		=	:lastmodified,"
	// ." PublishDate		=	:publishdate,"
	// ." ExpireDate		=	:expiredate,"
	// ." NumberOfViews		= 	:numberofviews,"
	// ." RatingValue		=	:ratingvalue,"
	// ." RatingCount		=	:ratingcount,"
	// ." TitleLink			=	:titlelink,"
	// ." DetailType		=	:detailtype,"
	// ." DetailTypeData	=	:detailtypedata,"
	// ." DetailsTemplate	=	:detailstemplate,"
	// ." DetailTheme		=	:detailtheme,"
	// ." GalleryPosition	=	:galleryposition,"
	// ." GalleryDisplayType	=	:gallerydisplaytype,"
	// ." CommentsTheme		=	:commentstheme,"
	// ." ArticleImageFolder	=	:articleimagefolder,"
	// ." NumberOfComments	=	:numberofcomments,"
	// ." MetaDecription	=	:metadecription,"
	// ." MetaKeywords		=	:metakeywords,"
	// ." DisplayStyle		=	:displaystyle,"
	// ." DetailTarget		=	:detailtarget,"
	// ." CleanArticleData	=	:cleanarticledata,"
	// ." ArticleFromRSS	=	:articlefromrss,"
	// ." HasPermissions	=	:haspermissions,"
	// ." EventArticle		=	:eventarticle,"
	// ." DetailMediaType	=	:detailmediatype,"
	// ." DetailMediaData	=	:detailmediadata,"
	// ." AuthorAliasName	=	:authoraliasname,"
	// ." ShowGallery		=	:showgallery,"
	// ." ArticleGalleryID	=	:articlegalleryid,"
	// ." MainImageTitle	=	:mainimagetitle,"
	// ." MainImageDescription	=	:mainimagedescription,"
	// ." HideDefaultLocale	=	:hidedefaultlocale,"
	// ." Featured			=	:featured,"
	// ." Approved			=	:approved,"
	// ." AllowComments	=	=	:allowcomments,"
	// ." Active			=	:active,"
	// ." ShowMainImage		=	:showmainimage,"
	// ." ShowMainImageFront	=	:showmainimagefront,"
	// ." ArticleImageSet	=	:articleimageset,"
	// ." CFGroupeID		=	:cfgroupeid ";
	$conn_insert = $conn;
	$stmt_insert = $conn_insert->prepare($sql_insert);
	$stmt_insert->bindParam(':articleid',$result['ArticleID']);
	// $stmt_insert->bindParam(':portalid',$result['PortalID']);
	// $stmt_insert->bindParam(':userid',$result['UserID']);
	// $stmt_insert->bindParam(':title',$result['Title']);
	// $stmt_insert->bindParam(':subtitle',$result['SubTitle']);
	// $stmt_insert->bindParam(':summary',$result['Summary']);
	// $stmt_insert->bindParam(':article',$result['Article']);
	// $stmt_insert->bindParam(':articleimage',$result['ArtibleImage']);
	// $stmt_insert->bindParam(':dateadded',$result['DateAdded']);
	// $stmt_insert->bindParam(':lastmodified',$result['LastModified']);
	// $stmt_insert->bindParam(':publishdate',$result['PublishDate']);
	// $stmt_insert->bindParam(':expiredate',$result['ExpireDate']);
	// $stmt_insert->bindParam(':numberofview',$result['NumberOfViews']);
	// $stmt_insert->bindParam(':ratingvalue',$result['RatingValue']);
	// $stmt_insert->bindParam(':ratingcount',$result['RatingCount']);
	// $stmt_insert->bindParam(':titlelink',$result['TitleLink']);
	// $stmt_insert->bindParam(':detailtype',$result['DetailType']);
	// $stmt_insert->bindParam(':detailtypedata',$result['DetailTypeData']);
	// $stmt_insert->bindParam(':detailstemplate',$result['DetailsTemplate']);
	// $stmt_insert->bindParam(':detailtheme',$result['DetailTheme']);
	// $stmt_insert->bindParam(':galleryposition',$result['GalleryPosition']);
	// $stmt_insert->bindParam(':gallerydisplaytype',$result['GalleryDisplayType']);
	// $stmt_insert->bindParam(':commentstheme',$result['CommentsTheme']);
	// $stmt_insert->bindParam(':articleimagefolder',$result['ArticleImageFolder']);
	// $stmt_insert->bindParam(':numberofcomments',$result['NumberOfComments']);
	// $stmt_insert->bindParam(':metadecription',$result['MetaDecription']);
	// $stmt_insert->bindParam(':metakeywords',$result['MetaKeywords']);
	// $stmt_insert->bindParam(':displaystyle',$result['DisplayStyle']);
	// $stmt_insert->bindParam(':detailtarget',$result['DetailTarget']);
	// $stmt_insert->bindParam(':cleanarticledata',$result['CleanArticleData']);
	// $stmt_insert->bindParam(':articlefromrss',$result['ArticleFromRSS']);
	// $stmt_insert->bindParam(':haspermissions',$result['HasPermissions']);
	// $stmt_insert->bindParam(':eventarticle',$result['EventArticle']);
	// $stmt_insert->bindParam(':detailmediatype',$result['DetailMediaType']);
	// $stmt_insert->bindParam(':detailmediadata',$result['DetailMediaData']);
	// $stmt_insert->bindParam(':authoraliasname',$result['AuthorAliasName']);
	// $stmt_insert->bindParam(':showgallery',$result['ShowGallery']);
	// $stmt_insert->bindParam(':articlegalleryid',$result['ArticleGalleryID']);
	// $stmt_insert->bindParam(':mainimagetitle',$result['MainImageTitle']);
	// $stmt_insert->bindParam(':maininmagedescription',$result['MainImageDescription']);
	// $stmt_insert->bindParam(':hidedefaultlocale',$result['HideDefaultLocale']);
	// $stmt_insert->bindParam(':featured',$result['Featured']);
	// $stmt_insert->bindParam(':approved',$result['Approved']);
	// $stmt_insert->bindParam(':allowcomments',$result['AllowComments']);
	// $stmt_insert->bindParam(':active',$result['Active']);
	// $stmt_insert->bindParam(':showmainimage',$result['ShowMainImage']);
	// $stmt_insert->bindParam(':showmainimagefront',$result['ShowMainImageFront']);
	// $stmt_insert->bindParam(':articleimageset',$result['ArticleImageSet']);
	// $stmt_insert->bindParam(':cfgroupeid',$result['CFGroupeID']);
	$stmt_insert->execute();
}
?>