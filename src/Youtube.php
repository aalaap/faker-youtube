<?php

namespace Faker\Provider;

class Youtube extends Base
{
    public function youtubeId()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
            . 'abcdefghijklmnopqrstuvwxyz_-';

        $id = substr($this->shuffle($characters), 0, 11);

        return $this->generator->parse($id);
    }

    public function youtubeUri()
    {
        return 'https://www.youtube.com/watch?v=' . $this->youtubeId();
    }

    public function youtubeShortUri()
    {
        return 'https://youtu.be/' . $this->youtubeId();
    }

    public function youtubeEmbedUri()
    {
        return 'https://www.youtube.com/embed/' . $this->youtubeId();
    }

    public function youtubeEmbedCode()
    {
        return '<iframe width="560" height="315" src="' . $this->youtubeEmbedUri()
            . '" frameborder="0" gesture="media" allow="encrypted-media"'
            . ' allowfullscreen></iframe>';
    }

    public function youtubeRandomUri()
    {
        switch (mt_rand(1,3)) {
            case 1:
                return $this->youtubeUri();

                break;

            case 1:
                return $this->youtubeShortUri();

                break;

            case 1:
                return $this->youtubeEmbedUri();

                break;
        }
    }
}
