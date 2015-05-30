<?php

class ServiceManager {

    protected static $instance;

    /**
     * Registered services and cached values
     *
     * @var array
     */
    protected $services = array();

    private function __construct() {}

    private function __clone() {}

    /**
     * @return ServiceManager
     */
    public static function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function get($name) {
        return self::getInstance()->getService($name);
    }

    public function getService($name) {
        if (array_key_exists($name, $this->services)) {
            return $this->services[$name];
        }
    }
}
