<?php require('includes/config.php'); 


$stmt = $db->prepare('SELECT postID, postTitle,postDesc, postCont, postDate, postTags FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();



//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
<?php
$page = 'blog';
$message_title = 'Akin\'s Blog';
$message = 'I write tutorials,case studies and opinion of things here';
 include('head.html'); ?>
		<!-- Banner -->
			<section>
	<div class="col-md-2"> </div>		
	<div class="col-md-8 blogpage" style="margin: 0% 1% 5% 2%;">
		<hr />
		<?php		
					echo '<div class="bloglist">';
				echo '<h1>'.$row['postTitle'].'</h1>';

				echo '<p class="blogdate">Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<div class="blogtext">'.$row['postCont'].'</div>';				
			echo '</div>';
			include('email.php');
		?>

	</div>
	
	<!---<div class="col-md-3 blogpage" style="margin: 0% 1% 5% 2%;height: 30%;"> <a href="http://<?=$site_address?>/blog.html" style="margin: 2% 0 3% 6%;" class="btn btn-default btn-lg">BACK TO BLOG LIST</a> 
    <br/>
	<?php  
	/* echo '<span class="sidetitle"> Blog List</a>';
	echo '<ul class="sidelist">';
	foreach ( $bloglist as $b )
	{
	 echo '<li><a class="sidelist" href="'.$b['url'].'">'.$b['title'].'</a></li>';
	}
	echo '</ul>';
	
	
	 */
	?>
	</div> --->
		</section>
  <?php include('foot.html'); ?>