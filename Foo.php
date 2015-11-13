<?php

class Foo {

  private $logger;
    
  public function __construct(PsrLogLoggerInterface $logger) {
      $this->logger = $logger;
  }
  public function bar($baz) {
      $this->logger->addDebug($baz);
  }
    
}
