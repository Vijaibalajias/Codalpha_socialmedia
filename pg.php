<style>
.dbresult,.dbresult td,.dbresult th{
  border:1px solid black;
  border-collapse: collapse;
  padding= 8px;
  }
  .dbresult{
  width: 800px;
  margin: auto;
  }
  .dbresult tr:nth-child(odd){
  background-color:#b2d0d6;
  }
  .dbresult tr:nth-child(even){
  background-color: lightcyan;}
  </style>
  <?php
$n=$_POST['NAME'];
$s=$_POST['EMAIL'];
$con=mysqli_connect("localhost","root","","gk");
$sql="INSERT INTO its(NAME,EMAIL) values('$n','$s')";
$r=mysqli_query($con,$sql);
 

$query="SELECT NAME,EMAIL from krish";
$result=mysqli_query($con,$query);
$r=mysqli_num_rows($result);
if($r> 0){
	echo'<table class="dbresult">';
	echo'<tr>';
	echo'<th>NAME</th>';
	echo'<th>EMAIL</th>';

	echo'</tr>';
while($row=mysqli_fetch_assoc($result)){
	echo'</tr>';
	echo'<td>'.$row['NAME'].'</td>';
	echo'<td>'.$row['EMAIL'].'</td>';

}
echo'</table>';}
else{
echo"record not found";}

?>



?>