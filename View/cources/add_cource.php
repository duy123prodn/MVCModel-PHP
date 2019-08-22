<?php include_once 'permision_cource.php'; ?>	

<?php include_once 'header.php'; ?>

<body>
	<div class="content">
	<div class="dangkycource">
		<h3></h3>
		<form action="" method="POST">
			<table>
			<tr>
				<td colspan="2"><h3> ADD NEW COURCE</h3></td>
			</tr>	
			<tr>
				<td nowrap="nowrap">Title :</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Content :</td>
				<td><textarea name="content" rows="10" cols="150"></textarea></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Poster :</td>
				<td><textarea name="poster" type="text"></textarea></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Post Date :</td>
				<td><textarea name="createdate" type="text" placeholder="yyyy-mm-dd hh:mm:ss"></textarea></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Public?:</td>
				<td><input type="Checkbox" name="is_public" value="1">Yes</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="add_cource" value="ADD"></td>
			</tr>
 
		</table>
		</form>
	</div>
</div>
</body>

<?php include_once 'footer.php' ?>