<main>
	<h1>Table</h1>
	<form method="post">
		<input class="form-control" type="text" name="ID" placeholder="ID">
		<button type="submit" name="button">Zoeken</button>
		<table class="table table-striped">
			<?php
				if (isset($_POST['ID'])) {
					$ID = $_POST['ID'];
				} else {
					$ID = "%";
				}
				$tableView = new TableView();
				$tableView->showTable($ID);
			?>
		</table>
	</form>
</main>
