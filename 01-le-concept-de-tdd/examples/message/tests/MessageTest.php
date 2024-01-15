<?php

use PHPUnit\Framework\TestCase;
use App\Message;
use PHPUnit\Framework\Attributes;

#[Attributes\CoversClass(Message::class)]
class MessageTest extends TestCase
{

    protected Message $message;

    public function setUp(): void
    {
        $this->message = new Message('en');
    }

    public function testOne()
    {
        $this->assertSame("Hello World!", $this->message->get());
    }
}
