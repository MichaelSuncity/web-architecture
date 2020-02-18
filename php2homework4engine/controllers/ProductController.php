<?php

namespace app\controllers;

use app\models\Product;

class ProductController extends Controller
{

    public function actionIndex() {
        echo $this->render('index');
    }
/*
    public function actionCatalogLim() {
        $from = $_GET['from'];
        $to = $_GET['to'];
        $catalog = Product::getLimit($from, $to);
        echo $this->render('limit', ['catalog' => $catalog]);
    }
*/
    public function actionCatalog() {
        $catalog = Product::getAll();
        echo $this->render('catalog', ['catalog' => $catalog]);
    }
  
    public function actionCard() {
        $id = $_GET['id'];
        $product = Product::getOne($id);
        echo $this->render('card', ['product' => $product]);
    }

}