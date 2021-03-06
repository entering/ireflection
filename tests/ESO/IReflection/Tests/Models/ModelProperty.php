<?php

/*
 * This file is a part of the IReflection library.
 *
 * (c) 2013 Eduardo Oliveira <entering@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ESO\IReflection\Tests\Models;

/**
 * ModelProperty, a model to test properties access.
 *
 * @author Eduardo Oliveira <entering@gmail.com>
 */
class ModelProperty
{
    public $prop1 = 5;
    protected $prop2 = 6;
    protected static $prop3 = 5;

    /**
     * @return int
     */
    public function getProp2()
    {
        return $this->prop2;
    }

    /**
     * @return int
     */
    public static function getProp3()
    {
        return self::$prop3;
    }
}
