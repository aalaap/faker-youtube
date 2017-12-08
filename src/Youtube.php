<?php namespace Faker\Provider;

class Youtube extends Base
{
    public function id()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
            . 'abcdefghijklmnopqrstuvwxyz_-';

        $id = substr(str_shuffle($characters), 0, 11);

        return $this->generator->parse($id);
    }

    public function uri()
    {
        return 'www.youtube.com/watch?v=' . $this->id();
    }

    public function shortUri()
    {
        return 'youtu.be/' . $this->id();
    }

    public function embedUri()
    {
        return 'www.youtube.com/embed/' . $this->id();
    }

    public function embedCode()
    {
        return '<iframe width="560" height="315" src="' . $this->embedUri()
            . '" frameborder="0" gesture="media" allow="encrypted-media"'
            . ' allowfullscreen></iframe>';
    }

    public function randomUri()
    {
        switch (mt_rand(1,3)) {
            case 1:
                return $this->uri();

                break;

            case 1:
                return $this->shortUri();

                break;

            case 1:
                return $this->embedUri();

                break;
        }
    }
}
