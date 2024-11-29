<?php

namespace EvolutionCMS\Main\Controllers;

class ProductController extends BaseController
{
    public function setData()
    {
        $this->data['images'] = $this->getGallery();
        return $this->data;
    }

    public function getGallery()
    {
        $images = evo()->runSnippet('multiTV', [
            'tvName' => 'images',
            'docid' => evo()->documentIdentifier,
            'toJson' => 1,
            'prepare' => ['EvolutionCMS\Main\Controllers\ProductController::prepareProducts']
        ]);

        return json_decode($images);
    }

    public static function prepareProducts($data, $modx, $_multiTV)
    {
        $data['thumb'] = evo()->runSnippet('phpthumb', [
            'input' => $data['image'],
            'options' => 'w=720,h=1280,zc=1,q=100',
            'webp' => 1
        ]);

        return $data;
    }
}
