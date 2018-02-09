<?php

namespace Faker\Tests\Provider;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\Youtube;
use PHPUnit\Framework\TestCase;

class YoutubeTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = Factory::create();
        $faker->addProvider(new Youtube($faker));
        $this->faker = $faker;
    }

    public function testYoutubeUri()
    {
        $this->assertRegExp('#(http(s)??\:\/\/)?(www\.)?(youtube\.com\/watch\?v=)(.+)#', $this->faker->youtubeUri());
    }

    public function testYoutubeShortUri()
    {
        $this->assertRegExp('#(http(s)??\:\/\/)?(www\.)?(youtu.be\/)(.+)#', $this->faker->youtubeShortUri());
    }

    public function testYoutubeEmbedUri()
    {
        $this->assertRegExp('#(http(s)??\:\/\/)?(www\.)?(youtube\.com\/embed\/)(.+)#', $this->faker->youtubeEmbedUri());
    }

    public function testYoutubeEmbedCode()
    {
        $this->assertRegExp('#<iframe width="(\d+)" height="(\d+)" src="((http(s)??\:\/\/)?(www\.)?(youtube\.com\/embed\/)(.+))" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen><\/iframe>#', $this->faker->youtubeEmbedCode());
    }
}