<?php
/**
 * @file Application.php
 * 程序主导类
 * 它负责接收请求, 协调路由, 分发, 执行, 输出
 * @author: dalong.jia
 * @date: 14-4-1
 * @time: 下午1:44
 */

final class Ltf_Application {
    /* properties */
    //全局配置实例
    protected $config = NULL;
    //Ltf_dispatcher 分发器实例
    protected $dispatcher = NULL;
    //本类的单例实例
    static protected $_app = NULL;
    //模块名
    protected $_modules = NULL;
    //bool 表示当前类是否运行
    protected $_running = "";
    //当前环境名 配置节的名字
    protected $_environ = "product";
    //错误代码号
    protected $_err_no = "0";
    //错误信息
    protected $_err_msg = "";

    /* methods */
    /**
     * 初始化环境配置
     * @param $config 配置文件的绝对路径 || 配置关联多维数组
     * @param null $envrion 配置节点名字
     */
    public function __construct($config, $envrion = NULL) {
        //初始化配置

        //初始化错误异常

        //初始化php 服务端配置


    }

    /**
     * 运行该类
     */
    public function run() {
    }

    /**
     * 运行回调函数
     * @param $entry
     * @param string $_
     */
    public function execute($entry, $_ = "...") {
    }

    /**
     * 获取当前类实例
     */
    public static function app() {
        return Ltf_Application::$_app;
    }

    /**
     * 获取当前app类的环境名
     */
    public function environ() {
    }

    /**
     * 运行引导文件Bootstrap类中所有_init开头的方法
     * @param null $bootstrap 引导文件路径
     */
    public function bootstrap($bootstrap = NULL) {
    }

    /**
     * 获取Ltf_Config_Abstract 实例
     */
    public function getConfig() {
    }
    public function getModules() {
    }
    public function getDispatcher() {
    }
    public function setAppDirectory($directory) {
    }
    public function getAppDirectory() {
    }
    public function getLastErrorNo() {
    }
    public function getLastErrorMsg() {
    }
    public function clearLastError() {
    }
    public function __destruct() {
    }
    private function __clone() {
    }
    private function __sleep() {
    }
    private function __wakeup() {
    }
}