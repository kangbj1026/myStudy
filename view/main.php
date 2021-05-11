<?php include("../lib/dbconn.php");  // DB연결을 위한 같은 경로의 dbconn.php를 인클루드합니다.
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<title> Main </title>
</head>
<body>
<div id="main">
<a href="../view/main.php" class="main"> main </a>
<a href="../view/login.php" class="login"> login </a>
</div>
<div class="page_container">
		<div class="community">
			<div class="community_lists">
			<h1> Community </h1>
			<form action="../view/read.php" method="GET">
				<table class="community_table">
					<thead>
						<tr>
							<th> 번호 </th>
							<th> 제목 </th>
							<!-- <th> 내용 </th> -->
							<th> ID </th>
							<th> 날짜 </th>
						</tr>
					</thead>
					<tbody>
						<?php
						$sql = " SELECT * FROM board";
						$result = mysqli_query($conn, $sql);
						mysqli_close($conn); // 데이터베이스 접속 종료
						
						while ($mb = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<th><?php echo $mb['board_no'] ?></th>
							<th> <button class="board_no" type="submit" name="board_no" value="<?php echo $mb['board_no'] ?>"><?php echo $mb['subject'] ?></button></th>
							<!-- <th> <?php echo $mb['contents'] ?> </th> -->
							<th> <?php echo $mb['member_id'] ?> </th>
							<th> <?php echo $mb['reg_date'] ?> </th>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</form>
			</div>
			<button type="submit" class="write_btn"><a href="../view/write.php"> 글쓰기 </a></button>
		</div>
	</div>
</body>
</html>