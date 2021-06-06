<?php     

Include('connect.php')
/
 $fname = $_POST['fname'];
    
	$pnumber = $_POST['pnumber'];
	
    $email = $_POST['email'];
    
	
     $password = $_POST['password'];
     
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['fname']=='' || $_REQUEST['pnumber']=='' || $_REQUEST['email']==''|| $_REQUEST['password']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into `signin`(fname,pnumber,email,password) values('".$_REQUEST['fname']."', '".$_REQUEST['pnumber']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>