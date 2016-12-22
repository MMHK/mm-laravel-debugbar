<?php
namespace MMHK\Debugbar;


class LaravelDebugbar extends \Barryvdh\Debugbar\LaravelDebugbar {


    /**
     * 重写 getJavascriptRenderer 返回修改过的 JavascriptRenderer
     * @param null $baseUrl
     * @param null $basePath
     * @return \Barryvdh\Debugbar\JavascriptRenderer|JavascriptRenderer
     */
    public function getJavascriptRenderer($baseUrl = null, $basePath = null)
    {
        if ($this->jsRenderer === null) {
            $this->jsRenderer = new JavascriptRenderer($this, $baseUrl, $basePath);
        }
        return $this->jsRenderer;
    }


} 