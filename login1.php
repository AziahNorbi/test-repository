	<?php
	 $mat = $_POST['mat'];
	//sambung localhost	
	 $con=mysqli_connect("localhost","root","","surau") or die (mysql_error());
	 
	$query = "SELECT * FROM pelajar WHERE P_NoMatrik like \"$mat\" ";
	$result = mysqli_query($con,$query)
  	or die (mysql_error());
		//echo "huhuh..";								  
		$myrow=mysqli_fetch_array($result,MYSQLI_NUM)	
			or die (mysql_error());	
			header("Location:frameutamastudent.php?Fmatrik=$mat");																						
			 echo $query;			 					
?>
<script>
{
var x;
var r=confirm("Maaf.. No Matrik tiada dalam Simpanan Kami !!");
if (r==true)
  {
  x="Maaf.. No Matrik tiada dalam Simpanan Kami !!";
  }
document.getElementById("demo").innerHTML=x;
}
</script>