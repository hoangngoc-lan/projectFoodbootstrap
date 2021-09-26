<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="ManageOder.css">
</head>
<body>
 <div class="container-fluid">

	<div class="row" ></div>
	
		<!--- phần menu-->

		<div class="row " style="border-bottom:1px solid #000000; background-color:white;">
			
			
			<div class="col-md-12 col-sm-6 col-xs-6" >
				<ul class="nav justify-content-center ">
  <li class="nav-item">
    <a class="nav-link active  menu" aria-current="page" href="index.php"><b>Home</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link menu"   href="ManageUsers.php" ><b>Admin</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link menu"   href="ManageCategory.php" ><b>Category</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link menu " href="ManageFood.php"><b>Foods</b></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link  menu" href="ManageOder.php"  ><b>Oder</b></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link disabled menu"  ><b>Logout</b></a>
  </li>
</ul>
			</div>
		</div>
    <!-- phần manage Food-->
		<div class="row mt-5 " >
			<div class="col-md-1"></div>
			
			<div class="col-md-8" >
				<h2><b>Manage Oder</b></h2>
			</div>
		</div>

		
		<!--- phần table-->
		<div class="row mt-5 " style="font-size:15px;">
			
			<div class="col-md-1">
			</div>
			
    <div class="col-md">
    	<div class="table-responsive">
  <table class="table" >
    <thead>
    <tr class="topic">
      <th scope="col">S.N. </th>
      <th>Food</th>
      
      <th scope="col">Price Qty.</th>
      <th>Total</th>
      <th> Oder Date</th>
      <th scope="col">Status</th>
      <th scope="col"><label style="margin-bottom:-50px;line-height:10px;" >Customer<p>Name</p></label></th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
       
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><p >1</p> </th>
      <td>Mixed<br>Pizza</td>
      <td><p>10.00 2</p></td>
      <td ><p >20.00</p></td>
      <td>2020-11-30<br>04:07:17</td>
      <td><p style="color:#298A08;">Delivered</p></td>
      <td><p>Jana Bush</p></td>
      <td>+1 (562)<br>101-2028</td>
      <td><p>tydujy@mailnator.com</p></td>
      <td>Minima iure<br>ducimus</td>
      <td><button style="background-color:#01DF01 ;"><b>Update</b></button><br><button style="background-color:#01DF01 ;"><b>Oder</b></button></td>
    </tr>
    <tr>
      <th scope="row"><p >2</p></th>
      <td>Best<br>Burger</td>
      <td><p>4.00 &nbsp; 4</p></td>
     <td ><p >20.00</p></td>
      <td>2020-11-30<br>04:07:17</td>
      <td><p style="color:#298A08;">Delivered</p></td>
       <td><p>Kelly Dilard</p></td>
        <td>+1 (908)<br>914-3106</td>
        <td><p>fexekihor@mailnator.com</p></td>
        <td>Incidunt ipsum<br>ad d</td>
         <td><button style="background-color:#01DF01 ;"><b>Update</b></button><br><button style="background-color:#01DF01 ;"><b>Oder</b></button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Sadeko<br>Momo</td>
      <td><p>4.00 &nbsp; 4</p></td>
      <td ><p >20.00</p></td>

      <td>2020-11-30<br>04:07:17</td>
      <td><p style="color:red;">Cancelled</p></td>
      <td><p>Bradley<br>Farrell</p></td>
      <td>+1 (576)<br>504-4657</td>
      <td><p>zuhafiq@mailnator.com</p></td>
      <td>Duis aliqua<br>Qui lor</td>
       <td><button style="background-color:#01DF01 ;"><b>Update</b></button><br><button style="background-color:#01DF01 ;"><b>Oder</b></button></td>
    </tr>
  
    
  </tbody>
  </table>
</div>
    </div>
    
    
    
 

			<div class="col-md-1"></div>

		
	</div>
  <!-- phần footer-->
	<div class="row mt-5 " style="background-color:#FF0040;">
		<div class="col-md-12">
			<p style="text-align:center;margin-top:5px;color: white;">2020 All right reserved,Food House.Develop By-<a href="">CSE485</a></p>
			
		</div>
	
	</div>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>