<?php

/**
 * user controller
 * @author davis
 *
 */
class AddressController extends Controller
{
    function actionLogin(){
//         echo 'i want to login system';
//         $this ->renderPartial("login");
//         var_dump(Yii::app()->db);
    }
    
    function actionIndex(){
        //         echo 'i want to login system';
        $this ->render("address");
    }
}