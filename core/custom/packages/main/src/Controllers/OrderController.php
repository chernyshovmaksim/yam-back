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
            'redirectTo' => 1,
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
                'prepareAfterProcess' => [
                    'EvolutionCMS\Main\Controllers\OrderController::sendToTelegram'
                ],
            ]
        ]);
        return $this->data;
    }

    public static function sendToTelegram($modx, $data, $FormLister, $name)
    {

        $text = 'Клиент ' . $data['name'] . ' с номером: ' . $data['phone'] . ' сделал ЗАКАЗ. Пройдите в панель управления сайтом для детализации заказа.';

        $token = '7201176597:AAE0x9eipaFYpl0RqUJkMwL5lw4o9P8Fphs';

        $getQuery = array(
            "chat_id"     => '-1002266527014',
            "text"      => $text,
            "parse_mode" => "html"
        );
        $ch = curl_init("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($getQuery));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $resultQuery = curl_exec($ch);
        curl_close($ch);

        return $data;
    }
}
