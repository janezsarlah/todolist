<<<<<<< HEAD
<?php 

require_once 'app/init.php';

$itemsQuery = $db->prepare("SELECT id, name, done FROM items WHERE user = :user AND visible = 1");// Place holder to prevente SQL injection

$itemsQuery->execute(['user' => $_SESSION['user_id']]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>To do list</title>

	<!-- Google fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">

	<!-- Awsome icon -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom css -->
	<link rel="stylesheet" type="text/css" href="css/styles.css" content="width=device-width initial-scale=1.0">
</head>
<body>
	<div class="list">
		<h1 class="header">ToDo list:</h1>

		<?php if(!empty($items)): ?>
			<ul class="items">
				<?php foreach ($items as $item): ?>
					<li>
						<span class="item<?php echo $item['done'] ? ' done' : ''; ?>"><?php echo $item['name']; ?></span>
						<?php if(!$item['done']): ?>
							<div class="done-button">Done</div><div class="id"><?php echo $item['id'] ?></div>
						<?php else: ?>
							<div class="fa fa-close"></div><div class="id"><?php echo $item['id'] ?></div>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php else: ?>
			<p>You haven't added any items yet.</p>
		<?php endif; ?>

		<form class="item-add" action="add.php" method="post">
			<input type="text" name="name" placeholder="Type item" class="input" autocompleat="off" >
			<input type="button" value="Add" class="submit">
		</form>
	</div>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
</body>
=======
<?php 

require_once 'app/init.php';

$itemsQuery = $db->prepare("SELECT id, name, done FROM items WHERE user = :user AND visible = 1");// Place holder to prevente SQL injection

$itemsQuery->execute(['user' => $_SESSION['user_id']]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>To do list</title>

	<!-- Google fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">

	<!-- Awsome icon -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom css -->
	<link rel="stylesheet" type="text/css" href="css/styles.css" content="width=device-width initial-scale=1.0">
</head>
<body>
	<div class="list">
		<h1 class="header">ToDo list:</h1>

		<?php if(!empty($items)): ?>
			<ul class="items">
				<?php foreach ($items as $item): ?>
					<li>
						<span class="item<?php echo $item['done'] ? ' done' : ''; ?>"><?php echo $item['name']; ?></span>
						<?php if(!$item['done']): ?>
							<div class="done-button">Done</div><div class="id"><?php echo $item['id'] ?></div>
						<?php else: ?>
							<div class="fa fa-close"></div><div class="id"><?php echo $item['id'] ?></div>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php else: ?>
			<p>You haven't added any items yet.</p>
		<?php endif; ?>

		<form class="item-add" action="add.php" method="post">
			<input type="text" name="name" placeholder="Type item" class="input" autocompleat="off" >
			<input type="button" value="Add" class="submit">
		</form>
	</div>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
</body>
>>>>>>> 4ac698664c7c3e11e883ecb078c93e9011ea240a
</html>