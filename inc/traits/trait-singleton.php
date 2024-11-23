<?php
/**
 * Singleton trait which implements Singleton pattern in any class in which this trait is used.
 *
 * Using the singleton pattern in WordPress is an easy way to protect against
 * mistakes caused by creating multiple objects or multiple initialization
 * of classes which need to be initialized only once.
 *
 * With complex plugins, there are many cases where multiple copies of
 * the plugin would load, and action hooks would load (and trigger) multiple
 * times.
 *
 * If you're planning on using a global variable, then you should implement
 * this trait. Singletons are a way to safely use globals; they let you
 * access and set the global from anywhere, without risk of collision.
 *
 * If any method in a class needs to be aware of "state", then you should
 * implement this trait in that class.
 *
 * If any method in the class need to "talk" to another or be aware of what
 * another method has done, then you should implement this trait in that class.
 *
 * If you specifically need multiple objects, then use a normal class.
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc\Traits;

trait Singleton {

    /**
	 * This method returns new or existing Singleton instance
	 * of the class for which it is called. This method is set
	 * as final intentionally, it is not meant to be overridden.
	 *
	 * @return object Singleton instance of the class.
	 */

    protected function __construct(){
        
    }
    final public static function getInstance() {
        static $instances = [];

        $called_class=get_called_class();
        if(!isset($istances[$called_class]))
        {
            $instances[$called_class] = new $called_class();
        }

        return $instances[$called_class];
    }



};
//End Trait