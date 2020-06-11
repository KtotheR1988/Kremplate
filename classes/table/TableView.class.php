<?php
/**
 *
 */
class TableView extends TableModel {

	public function showTable($where) {
		$results = $this->getTable($where);

		foreach ($results as $get) {
			$get = array_values($get);
			$countColumns = count($get);
			echo '<tr>';

			for ($i=0; $i < $countColumns; $i++) {
				echo '<td>' . $get[$i] . '</td>';
			}
			echo '</tr>';
		}
	}

}
