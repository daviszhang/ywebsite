<?php
/**
 * 
 */
class ManagerController extends Controller
{
    /**
     * backend login module
     */
    public function actionLogin()
    {
//         if (!\Yii::$app->user->isGuest) {
//             return $this->goHome();
//         }

//         $model = new LoginForm();
//         if ($model->load(Yii::$app->request->post()) && $model->login()) {
//             return $this->goBack();
//         } else {
//             return $this->render('login', [
//                 'model' => $model,
//             ]);
//         }
    }
    function actionCat(){
       $sql="select * from {{goods}}";
       //create DAO object
       $connection=Yii::app()->db;
       $command=$connection->createCommand($sql);        
       $data_obj = $command->query();
       
       var_dump($data_obj);
    }
}