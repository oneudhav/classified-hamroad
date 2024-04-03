   
<!-- footer area -->    
<div class='foot'>      	       
<?php
	if(isset($_SESSION['id'])){

		$user_id = $_SESSION['id'];
                $user = $_SESSION['username'];
		echo" <a href='home.php' class='a a--hamroad' data-text='$user  is logged on'><span> $user Account</span></a>";

	}else{
echo" <a href='login.php' class='a a--hamroad' data-text='Login as member'><span> Login as member</span></a>";
	}
		 
		  ?>
         <a href='feedback.php' class="a a--hamroad" data-text="Send Us feedback "><span> Feedback</span></a>
        <a href='terms.php' class="a a--hamroad" data-text="Our Terms"><span> Terms & Condition</span></a>
       <a href='index.php' class="a a--hamroad" data-text="&copy Hamro Ad 2019"><span> &copy Hamro Ads 2019</span></a>
     
</div><!-- #end footer area --> 

