<?php
namespace Example;

class Foo {

  private $logger;
    
  public function __construct(Psr\Log\LoggerInterface $logger) {
      $this->logger = $logger;
  }
  public function bar($baz) {
      $this->logger->addDebug($baz);
  }
    
}
