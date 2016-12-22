# mm-laravel-debugbar

修改 [laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) 使其支持 `requireJS` 的`AMD`方式加载，
防止debuger 引入的依赖影响页面其他部分的js运行。

> PS:
> 由于不想fork `laravel-debugbar`， 因为修改了他的一些主要流程，所以选择了基于 `laravel-debugbar` 覆盖了它的一些方法实现了。
> `laravel-debugbar` 是基于 `php-debugbar` 编写的。而 `php-debugbar` 是支持`requireJS`的,
> 只是他们实现的时候绕过了 `php-debugbar` 对 `requireJS` 部分。