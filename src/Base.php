<?php
namespace Some\Example;

abstract class Base {

  protected $logger;
  
  public function __construct(\Psr\Log\LoggerInterface $logger) {
      $this->logger = $logger;
  }

}
