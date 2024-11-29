<?php

namespace EvolutionCMS\Main\Controllers;


class OrderController extends BaseController
{

    public function setData()
    {
        $this->data['form'] = evo()->runSnippet('Order', [
            'formTpl' => '@B_FILE:order.form',
            'templatePath' => 'views/',
            'submitLimit' => 0,
            'protectSubmit' => 0,
            'rules' => [
                'name' => [
                    'required' => 'Поле имя обязательно для заполнения',
                ],
                'email' => [
                    'required' => 'Поле email обязательно для заполнения',
                ],
                'phone' => [
                    'required' => 'Поле телефон обязательно для заполнения',
                ],
            ]
        ]);
        return $this->data;
    }
}
