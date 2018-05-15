<?php

namespace mindtwo\Slugify;

use \Illuminate\Support\Facades\Facade as ParentFacade;

class Facade extends ParentFacade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return SluggerInterface::class;
    }
}