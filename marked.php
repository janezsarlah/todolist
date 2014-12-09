<<<<<<< HEAD
<?php 

require_once 'app/init.php';

if(isset($_POST['as']) || $_POST['item']) {
	$as = $_POST['as'];
	$item = $_POST['item'];

	switch ($as) {
		case 'done':
			$doneQuery = $db->prepare("UPDATE items SET done = 1 WHERE id = :item AND user = :user");
			$doneQuery->execute([
				'item' => $item,
				'user' => $_SESSION['user_id']
			]);

			$doneQuery = $db->prepare("SELECT name FROM items WHERE id = :item AND user = :user");
			$doneQuery->execute([
				'item' => $item,
				'user' => $_SESSION['user_id']
			]);	

			$items = $doneQuery->rowCount() ? $doneQuery : [];

			foreach ($items as $item) { echo json_encode($item['name']); }

		break;
		case 'visible':
			$doneQuery = $db->prepare("UPDATE items SET visible = 0 WHERE id = :item AND user = :user");
			$doneQuery->execute([
				'item' => $item,
				'user' => $_SESSION['user_id']
			]);

			echo json_encode("work");
		break;
	}


}
=======
<?php 

require_once 'app/init.php';

if(isset($_POST['as']) || $_POST['item']) {
	$as = $_POST['as'];
	$item = $_POST['item'];

	switch ($as) {
		case 'done':
			$doneQuery = $db->prepare("UPDATE items SET done = 1 WHERE id = :item AND user = :user");
			$doneQuery->execute([
				'item' => $item,
				'user' => $_SESSION['user_id']
			]);

			$doneQuery = $db->prepare("SELECT name FROM items WHERE id = :item AND user = :user");
			$doneQuery->execute([
				'item' => $item,
				'user' => $_SESSION['user_id']
			]);	

			$items = $doneQuery->rowCount() ? $doneQuery : [];

			foreach ($items as $item) { echo json_encode($item['name']); }

		break;
		case 'visible':
			$doneQuery = $db->prepare("UPDATE items SET visible = 0 WHERE id = :item AND user = :user");
			$doneQuery->execute([
				'item' => $item,
				'user' => $_SESSION['user_id']
			]);

			echo json_encode("work");
		break;
	}


}
>>>>>>> 4ac698664c7c3e11e883ecb078c93e9011ea240a
