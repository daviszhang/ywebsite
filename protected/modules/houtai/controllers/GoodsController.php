<?php

class GoodsController extends Controller
{     

    function actionGoods(){
        //         echo 'i want to login system';
        $this ->render("index");
    }
    
    function actionFind(){
        //         echo 'i want to login system';
        $sql = "select * from {{goods}} limit 10";        
        $goods_model = Goods::model();
        $goods_info= $goods_model->findAllBySql($sql);
        var_dump($goods_info);
    }
}