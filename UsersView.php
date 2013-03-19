<?php

class UsersView {
	
	public function showHeader($pageTitle = ''){									
		include("inc/header.inc");
	}
	
	public function showFooter(){
		include("inc/footer.inc");
	}
	
	public function showUsers($rows){
		include("inc/UserList.inc");
	}
	public function showUsers2($rows){
		include("inc/showUserView.inc");
	}
	public function showUser(){
		include("inc/UserView.inc");	
	}	
}