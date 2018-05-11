<?php
/**
 * 单例模式：在整个程序的运行过程中，保证一个类只有一个实例
 * 有三种使用方式：懒汉式、饿汉式、登记式
 * 单例模式是一种常见的设计模式，在线程池、缓存、日志对象、数据库操作等常常被设计成单例模式
 * 使用原因：防止系统和内存浪费
 */

/**
 * 特点一：只能有一个实例
 * 特点二：必须自行创建这个单例
 * 特点三：提供使用接口
 */
class Singleton {
    //静态私有变量保存全局实例
    private static $_instance = null;

    //构造函数，防止外界私有化对象实例
    private function __construct() {}

    //静态公开方法，提供统一入口
    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}
?>