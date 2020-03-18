<!DOCTYPE html>
<html>
<head>
	<title>DETAILS</title>
</head>
<body>
<style type="text/css">
body{
	background-color: cyan;
	font-size: 20px;
}


	input[type=button]  {
  background-color: #00fa;
  border: none;
  color: white;
  margin-top: 20px;
  text-decoration: none;
  
  cursor: pointer;
}
input[type=text],input[type=email] {
width:100%;
      box-sizing:border-box;
      background-color: #3CBC8D;
  color: white;
}


</style>


	<form action="details.html" method="POST" padding=5px;>
		
		Enrollment No. -<input type="text" name="en"><br>
		Name -<input type="text" name="name"><br>
		Age  -<input type="text" name="age"><br>
		Course -<input type="text" name="course"><br>
		Branch -<input type="text" name="branch"><br>
		Contact -<input type="text" name="contact"><br> 
		E-mail -<input type="email" name="email"><br>
		<input type="submit" name="btn">

	</form>

</body>
</html>