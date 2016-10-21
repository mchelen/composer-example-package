<?php
namespace Some\Example;

class Foo extends Base {
    
  public function bar($baz) {
      $this->logger->addDebug($baz);
  }
    
}
