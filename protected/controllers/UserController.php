<?php

/**
 * user controller
 * @author davis
 *
 */
class UserController extends Controller
{
    function actionLogin(){
//         echo 'i want to login system';
//         $this ->renderPartial("login");
        var_dump(Yii::app()->db);
    }
    
    function actionRegister(){
        //         echo 'i want to login system';
        $this ->render("register");
    }
}