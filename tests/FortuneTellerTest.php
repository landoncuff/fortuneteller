<?php
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/FortuneTeller.php";

class FortuneTellerTest extends TestCase {


   public function testRelationshipPrediction_WithDefaultEntries_ReturnsNotNull() {
    $fort = new FortuneTeller();
    $this->assertNotNull( $fort->getRelationshipPrediction() );
   }

   public function testMoneyArray_WithDefaultEntires_ReturnsCountOf3() {

    $fort = new FortuneTeller();
    $this->assertCount(3, $fort->money_array );

   }

   
}
