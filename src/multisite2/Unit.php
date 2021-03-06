<?php


namespace multisite2;

use yii\base\Object;

/**
 * Multisite unit
 */
class Unit extends Object
{
    /**
     * @var Manager
     */
    public $manager;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string type name
     */
    public $type;

    /**
     * @var array
     */
    public $attributes = array();

    public function __construct($manager, $config = [])
    {
        $this->manager = $manager;

        parent::__construct($config);
    }


    /**
     * Init unit instance
     */
    public function init()
    {}
}