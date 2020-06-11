<?php

require_once "include/testloader.inc.php";
use PHPUnit\Framework\TestCase;

class WebsiteData extends TestCase {

  public function testTitle() {

      $this->assertEquals($title, "Kremplate");

  }
}
