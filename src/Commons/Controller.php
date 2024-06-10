<?php
namespace Hung\OopMvc\Commons;

use eftec\bladeone\BladeOne;

class Controller 
{
    protected function renderViewClient($view , $data=[] ){
        $templatePath = __DIR__ . '/../Views/Client';
        $compoledPath = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath, $compoledPath);

        echo $blade->run($view,$data);

    }
    protected function renderViewAdmin($view, $data = []) {
        $templatePath = __DIR__ . '/../Views/Admin';
        $compiledPath = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath, $compiledPath);

        echo $blade->run($view, $data);
    }
}
