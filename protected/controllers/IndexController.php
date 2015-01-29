<?php

class IndexController extends Controller
{     

    function actionIndex(){
        //         echo 'i want to login system';
        $this ->render("index");
    }
    
    public function actionEntry()
    {
    	$model = new EntryForm;
    
    	if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    		// 验证 $model 收到的数据
    
    		// 做些有意义的事 ...
    
    		//return $this->render('entry-confirm', ['model' => $model]);
    	} else {
    		// 无论是初始化显示还是数据验证错误
    		//return $this->render('entry', ['model' => $model]);
    	}
    	
    	 
    }
}