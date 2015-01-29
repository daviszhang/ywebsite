<?php

/**
 * user controller
 * @author davis
 *
 */
class UserController extends Controller
{
	public function actionLogin() {
		$form = new LoginForm;
		if (isset($_POST['LoginForm'])) {
			$form->attributes = $_POST['LoginForm'];
			if ($form->validate())
				$this->redirect(Yii::app()->user->returnUrl);
		}

		$this->pageTitle = 'Login';

		$this->render('login', array('user' => $form));
	}
    
	public function actionRegister() {
		$form = new User;
		if (isset($_POST['User'])) {
			$form->attributes = $_POST['User'];
			if ($form->save()) {
				$this->redirect(array('user/login'));
			}
		}

		$this->pageTitle = 'Register';

		$this->render('register', array('form' => $form));
	}
	
	public function actionLogout()  {
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->user->returnUrl);
	}
}