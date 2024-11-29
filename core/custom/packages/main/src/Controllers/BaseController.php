<?php

namespace EvolutionCMS\Main\Controllers;

class BaseController
{
    public $data = [];
    public function __construct()
    {
        $this->setData();
        $this->data['main_menu'] = $this->getMenu()[0];
        $this->sendToView();    //  отдать в шаблон
    }
    public function setData()
    {
        /**
         * этот метод будем вызывать в других контроллерах
         * и именно в нём будем задавать значения для 
         * переменной $data
         */
    }
    public function sendToView()
    {
        EvolutionCMS()->addDataToView($this->data);
        return $this;
    }

    public function getMenu()
    {
        $result = evo()->runSnippet('DLMenu', [
            'parents' => 0,
            'returnDLObject' => 1,
            'addWhereList' => 'c.template NOT IN (5) AND hidemenu = 0',
        ]);

        return $result->getMenu();
    }
}
