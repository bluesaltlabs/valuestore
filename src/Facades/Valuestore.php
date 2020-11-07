<?php

namespace BlueSaltLabs\Valuestore\Facades;

use BlueSaltLabs\Valuestore\Valuestore as ValuestoreManager;
use Illuminate\Support\Facades\Facade;

/**
 * Class Valuestore
 * @package BlueSaltLabs\Valuestore\Facades
 */
class Valuestore extends Facade
{
    /**
     * Get the name of the class registered in the Application container.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return ValuestoreManager::class;
    }
}
