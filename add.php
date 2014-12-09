<?php 

require_once 'app/init.php';

if(isset($_POST['name'])) {
	$name = trim($_POST['name']);

	if(!empty($name)) {
		$addedQuery = $db->prepare("INSERT INTO items (name, user, done, visible, created) VALUES (:name, :user, 0, 1, NOW())");

		$addedQuery->execute([
			'name' => $name,
			'user' => $_SESSION['user_id']
		]);

		$doneQuery = $db->prepare("SELECT id, name FROM items WHERE user = :user AND id = (SELECT MAX(id) FROM items)");
		$doneQuery->execute(['user' => $_SESSION['user_id']]);	

		$items = $doneQuery->rowCount() ? $doneQuery : [];

		foreach ($items as $item) { echo json_encode($item); }
	}
}
