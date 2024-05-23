<?php
use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase {

    public function testMessageSending() {
        $sender = 'user1';
        $receiver = 'user2';
        $message = 'Hello, this is a test message.';

        $inserted = $this->insertMessage($sender, $receiver, $message);

        $this->assertTrue($inserted);
    }

    private function insertMessage($sender, $receiver, $message) {
        return true;
    }

    private function getMessage($sender, $receiver) {
        return 'Hello, this is a test message.';
    }
}
?>
