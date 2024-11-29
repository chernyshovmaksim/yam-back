<?php

namespace EvolutionCMS\Main\Controllers;

class HomeController extends BaseController
{

    public function setData()
    {
        $this->data['advantages'] = $this->getAdvantages();
        $this->data['new_products'] = $this->getNewProducts();
    }

    public function getAdvantages()
    {
        $advantages = evo()->runSnippet('multiTV', [
            'tvName' => 'advantages',
            'docid' => evo()->documentIdentifier,
            'toJson' => 1,
            'prepare' => ['EvolutionCMS\Main\Controllers\HomeController::getThumbAdvantage']
        ]);

        return json_decode($advantages, true);
    }

    public function getNewProducts()
    {
        $new_products = evo()->runSnippet('DocLister', [
            'parents' => 0,
            'api' => 1,
            'JSONformat' => 'new',
            'addWhereList' => 'c.template IN (5)',
            'depth' => 10,
            'display' => 8,
            'tvPrefix' => '',
            'tvList' => 'image, price',
            'prepare' => ['EvolutionCMS\Main\Controllers\HomeController::getThumbProduct']
        ]);


        return json_decode($new_products);
    }

    public static function getThumbProduct($data)
    {
        $data['thumb'] = evo()->runSnippet('phpthumb', [
            'input' => $data['image'],
            'options' => 'w=264,h=320,zc=1,q=100',
            'webp' => 1
        ]);

        return $data;
    }
    public static function getThumbAdvantage($data, $modx, $_multiTV)
    {
        $data['thumb'] = evo()->runSnippet('phpthumb', [
            'input' => $data['image'],
            'options' => 'w=155,h=202,zc=1,q=100',
            'webp' => 1
        ]);

        return $data;
    }
}
