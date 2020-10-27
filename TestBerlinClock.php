<?php


class TestBerlinClock
{

    public function testSeconds() {
        assertEquals("Y", berlinClock.getSeconds(0));
        assertEquals("O", berlinClock.getSeconds(1));
        assertEquals("Y", berlinClock.getSeconds(42));
        assertEquals("O", berlinClock.getSeconds(59));
    }

}