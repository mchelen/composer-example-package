class Foo {
private $logger;
    
    public function __construct(PsrLogLoggerInterface $logger) {
        $this->logger = $logger;
    }
    public function Bar($baz) {
        $this->logger->addNotice($baz);
    }
    
}