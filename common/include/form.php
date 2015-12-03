<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="utf-8" />
		<title>美男美女用画像送信フォーム</title>
	</head>
	<body>
		<p>注意事項</p>
		<ul>
			<li>1回の投稿に用いる写真は全て男性、または全て女性としてください。</li>
			<li>画像を複数枚選択する際はCtrlキーを押下しながら画像をチェックしてください。</li>
			<li>他大生の場合、学部の欄には大学名を記入してください。</li>
		</ul>
		<form action="insert.php" method="post" enctype="multipart/form-data"><!--save.php-->
			<p>名前:<input type="text" name="name"></p><br>
			<p>学部:<input type="text" name="department"></p><br>
			<p>学年:<input type="text" name="grade"></p><br>
			<p>サークル名:<input type="text" name="circle"></p><br>
			<p>性別:<select name="gender" size="1">
				<option value="man">美男</option>
				<option value="woman">美女</option>
			</select></p><br>
			<p>画像選択:<input name="photo[]" type="file" multiple="multiple"/></p><br>
			<input type="submit" value="送信" />			
		</form>
	</body>
</html>