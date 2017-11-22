<?php
  namespace JansenFelipe\CepGratis\Tests;
  use JansenFelipe\CepGratis\CepGratis;
  use PHPUnit_Framework_TestCase;
class CepGratisTest extends PHPUnit_Framework_TestCase
{
    public function testSearch()
    {
        $address = CepGratis::search('29107400');
        
        $this->assertEquals('Rua Alvarenga', $address->street);
        $this->assertEquals('Praia da Costa', $address->neighborhood);
        $this->assertEquals('Vila Velha', $address->city);
        $this->assertEquals('29107400', $address->zipcode);
        $this->assertEquals('ES', $address->state);
    }
}
