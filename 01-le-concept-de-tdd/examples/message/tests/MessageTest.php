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
        $this->message = new Message($_ENV["LANGUAGE"]);
    }

    public function testOne()
    {
        if ($_ENV["LANGUAGE"] == "fr"){
            $this->assertSame("Bonjour les gens!", $this->message->get());

        } else if($_ENV["LANGUAGE"] == "en") {
            $this->assertSame("Hello World!", $this->message->get());
        } else {
            $this->fail("Problème");
        }
    }
}
