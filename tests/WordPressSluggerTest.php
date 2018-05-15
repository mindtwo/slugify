<?php

use mindtwo\Slugify\WordPressSlugger;

class WordPressSluggerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function slugIsGeneratedCorrectlyTest() {
        $slugger = new WordPressSlugger();
        $this->assertEquals('over-and-out', $slugger->generate('over and out'), "Slug failed to generate correctly");
        $this->assertEquals('john-at-doe-com', $slugger->generate('john@doe.com'), "Slug failed to generate correctly");
        $this->assertEquals('john-doe', $slugger->generate('john/doe'), "Slug failed to generate correctly");
        $this->assertEquals('john-and-jane', $slugger->generate('john&jane'), "Slug failed to generate correctly");
        $this->assertEquals('ae-oe-ue-ss', $slugger->generate('ä-ö-ü-ß'), "Slug failed to generate correctly");
    }

    /**
     * @test
     */
    public function helperFunctionTest() {
        $this->assertEquals('over-and-out', slugify('over and out'), "Slug failed to generate correctly");
    }
}