# mm-laravel-debugbar

修改 [laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) 使其支持 `requireJS` 的`AMD`方式加载，
防止debuger 引入的依赖影响页面其他部分的js运行。

> PS:
> 由于不想fork `laravel-debugbar`， 因为修改了他的一些主要流程，所以选择了基于 `laravel-debugbar` 覆盖了它的一些方法实现了。
> `laravel-debugbar` 是基于 `php-debugbar` 编写的。而 `php-debugbar` 是支持`requireJS`的,
> 只是他们实现的时候绕过了 `php-debugbar` 对 `requireJS` 部分。


## 配置

项目重新启动了 `php-debugbar` 的配置参数。在 debugbar 配置下的 `jsrender` 节点。

```
    'jsrender' => [
        'use_requirejs' => true, //是否使用了requireJS
        'enable_jquery_noconflict' => false, 
    ]
```

## Composer

此项目已经提交到 [packagist](https://packagist.org/packages/mmhk/mm-laravel-debugbar) 可以使用 `composer` 引入到项目中。
注意使用的时候需要确定全局空间引入了 `requireJS` 才开启 `use_requirejs`。

composer 引入命名：
```
composer require mmhk/mm-laravel-debugbar
```
