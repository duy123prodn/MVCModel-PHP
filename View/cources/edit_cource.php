<?php include_once 'permision_cource.php'; ?>	


<?php include_once 'header.php'; ?>

<body>
	<div class="content">
	<div class="dangkycource">
		<h3></h3>
		<form action="" method="POST">
			<table>
			<tr>
				<td colspan="2"><h3> EDIT COURCE</h3></td>
			</tr>	
			<tr>
				<td nowrap="nowrap">Title :</td>
				<td><input type="text" id="title" name="title" value="<?php echo $dataCourceID['title']; ?>"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Content :</td>
				<td><input name="content" rows="10" cols="150" value="<?php echo $dataCourceID['content']; ?>"></input></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Poster :</td>
				<td><input name="poster" type="text" value="<?php echo $dataCourceID['poster']; ?>"></input></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Post Date :</td>
				<td><input name="createdate" type="text" value="<?php echo $dataCourceID['createdate']; ?>"></input></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Public?:</td>
				<td><input type="Checkbox" id="is_public" name="is_public" value="1">Yes</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="update_cource" value="update_cource"></td>
			</tr>
 
		</table>
		</form>
	</div>
</div>
</body>

<?php include_once 'footer.php' ?>