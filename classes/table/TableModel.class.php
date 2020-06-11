<?php
/**
 *
 */
class TableModel extends ConnectDatabase{

  protected function setTable($values) {
      $sql = "INSERT INTO Specialist VALUES ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$values]);
      $results = $stmt->fetchAll();
      return $results;
	}

  protected function getTable($where) {
      $sql = "SELECT * FROM Specialist WHERE SpecialistID = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$where]);
      $results = $stmt->fetchAll();
      return $results;
	}
}
