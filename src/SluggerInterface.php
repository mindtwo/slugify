<?php

namespace mindtwo\Slugify;

interface SluggerInterface
{
    /**
     * @param $string
     *
     * @return mixed
     */
    public function generate($string);
}
