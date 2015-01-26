<style>
input {
	width:335px;
	border-width:1px;
	color:white;
	font-family: Helvetica, Arial, sans-serif;
	font-weight:500;
	font-size: 18px;
	border-radius: 2px;
	line-height: 22px;
	background-color: transparent;
	padding: 13px 13px 13px 54px;
	margin-bottom: 10px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	border: 1px solid white;
}
input:focus {
	border-color:black;

}
#submit {
	background:#00c6ff;
	width: 100px;
	height:50px;
	padding:0;
	float:right;
	margin-right:10px;
	border:none;
}
font {
	color:white;
	font-family:'century gothic';
}
font.lk{
	font-size:35px;
	margin:20px;
}
font.k{
	font-size:25px;
}
#noatm{
	background-image: url(img/User-Profile.png);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#noatm:focus{
	background-image: url(img/User-Profile.png);
	background-size: 30px 30px;
	background-position: 8px 5px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}
#pin{
	background-image: url(img/pin.png);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#pin:focus{
	background-image: url(img/pin.png);
	background-size: 30px 30px;
	background-position: 8px 5px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}
</style>
<font class='lk'>Login Disini</font>
				<form method='post' action="login.php?op=in" style='padding:20px;'>
					<label for='noatm'><font class='k'>16 Digit No ATM Anda</font></label><br>
					<input name='noatm' id='noatm' placeholder='' required ></input><br>
					<label for='pin'><font class='k'>PIN ATM Anda</font></label><br>
					<input name='pin' id='pin' type='password' placeholder='' required ></input>
					<input name='submit' id='submit' type='submit' value='Login'></input>
</form>