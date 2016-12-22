<?php
namespace MMHK\Debugbar;


class JavascriptRenderer extends \Barryvdh\Debugbar\JavascriptRenderer {


    public function dumpAssetsToString($type)
    {
        $files = $this->getAssets($type);

        $content = '';
        foreach ($files as $file) {
            if ($type == 'js') {
                if ($this->isRequireJsUsed()) {
                    $content .= "define('debugbar', [], function(){\r\n" . $content . "\r\n return PhpDebugBar; \r\n});";
                    continue;
                }
            }
            $content .= file_get_contents($file) . "\n";
        }

        return $content;
    }


} 