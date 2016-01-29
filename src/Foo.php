<?php
namespace Some\Example;

class Foo {

  private $logger;
    
  public function __construct(\Psr\Log\LoggerInterface $logger) {
      $this->logger = $logger;
  }
  public function bar($baz) {
      if (strlen($baz)<1) {
        throw new \Exception("string is insufficient length");
      }
      $this->logger->addNotice($baz);
  }
    
}
