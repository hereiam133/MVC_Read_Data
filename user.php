 <?php
	   require_once("db.php");
	   require_once("UserModel.php");
	   require_once("UsersView.php");
	   $model = new UserModel(MY_DSN, MY_USER, MY_PASS);
	   $rows = $model->getIndivUser();
	   $view = new UsersView();
	   $view->showHeader("User: ". $_GET['username']);
	   $view->showUsers2($rows);
	   $view->showUser();
	   $view->showFooter();
	   
	   
	 