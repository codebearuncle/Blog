/wwwroot/bootstrap/app.php

$app = new Illuminate\Foundation\Application(
    realpath(__DIR__.'/../')
);//追进去吧


/wwwroot/vendor/laravel/framework/src/Illuminate\Foundation\Application

    public function __construct($basePath = null)
    {
        $this->registerBaseBindings();//第一步

        $this->registerBaseServiceProviders();//第二步

        $this->registerCoreContainerAliases();

        if ($basePath) {
            $this->setBasePath($basePath);
        }
    }

   protected function registerBaseBindings()
    {
        static::setInstance($this);

        $this->instance('app', $this);//装载入$instances['app']
        $this->instance('Illuminate\Container\Container', $this);//装载入$instances['Illuminate\Container\Container']
    }

第一步结束,知道成员变量$instances装载了app 和 Illuminate\Container\Container两个Application类
第二步结束,知道
