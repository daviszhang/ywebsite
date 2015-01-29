<?php

class IndexController extends Controller
{     

    function actionIndex(){
        //         echo 'i want to login system';
        $this ->render("index");
    }
    
    public function actionView()
    {
    	$post=$this->loadModel();
    	$comment=$this->newComment($post);
    
    	$this->render('view',array(
    			'model'=>$post,
    			'comment'=>$comment,
    	));
    }
    
    protected function newComment($post)
    {
    	$comment=new Comment;
    	if(isset($_POST['Comment']))
    	{
    		$comment->attributes=$_POST['Comment'];
    		if($post->addComment($comment))
    		{
    			if($comment->status==Comment::STATUS_PENDING)
    				Yii::app()->user->setFlash('commentSubmitted','Thank you...');
    			$this->refresh();
    		}
    	}
    	return $comment;
    }
}