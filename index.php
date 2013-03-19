<?php 
	   require_once("db.php");
	   require_once("UserModel.php");
	   require_once("UsersView.php");
	   $model = new UserModel(MY_DSN, MY_USER, MY_PASS);
	   $rows = $model->getLatestUsers();
	   $view = new UsersView();
	   $view->showHeader('All Users List');
	   $view->showUsers($rows);
	   $view->showFooter();
		   
