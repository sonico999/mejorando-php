<?php

class ErrorController
{
    public function indexAction()
    {
        return new View('error', [
            'title' => 'Page not found',
            'firstDescription' => '{404} <br/> La pagina no existe!'
        ]);
    }
}
