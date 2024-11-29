<?php

namespace EvolutionCMS\Main\Controllers;

class CallbackController
{
    function send()
    {
        $form = evo()->runSnippet('FormLister', [
            'formid' => 'callback',
            'api' => 2,
            'rules' => [
                'name' => [
                    'required' => 'Поле обязательно для заполнения.',
                    'min' => [
                        'params' => 2,
                        'message' => 'Поле должно содердать не менее двух символов.'
                    ]
                ],
                'phoneInput' => [
                    'required' => 'Поле обязательно для заполнения.',
                ]
            ],
            'prepareAfterProcess' => [
                'EvolutionCMS\Main\Controllers\CallbackController::sendToTelegram'
            ],
            'submitLimit' => 0,
            'protectSubmit' => 0,
        ]);

        return $form;
    }


    public static function sendToTelegram($modx, $data, $FormLister, $name)
    {

        $text = 'Клиент ' . $data['name'] . ' просит вас перезвонить ему по номеру: ' . $data['phoneInput'];

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
