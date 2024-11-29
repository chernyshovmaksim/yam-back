<?php

namespace EvolutionCMS\Main\Controllers;

class CatalogController extends BaseController
{
    public function setData()
    {
        $this->data['products'] = $this->getProducts();
        return $this->data;
    }
    public function getProducts()
    {
        $products = evo()->runSnippet("DocLister", [
            'api' => 1,
            'JSONformat' => 'new',
            'tvPrefix' => '',
            'tvList' => 'image, price',
            'prepare' => ['EvolutionCMS\Main\Controllers\CatalogController::getProductThumb']
        ]);

        return json_decode($products);
    }

    public static function getProductThumb($data)
    {
        $data['thumb'] = evo()->runSnippet('phpthumb', [
            'input' => $data['image'],
            'options' => 'w=264,h=320,zc=1,q=100',
            'webp' => 1
        ]);
        return $data;
    }
}
