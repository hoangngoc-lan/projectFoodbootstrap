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
  <link rel="stylesheet" type="text/css" href="ManageCategory.css">
</head>
<body>

<div class="container-fuld" style="background-color:#D8D8D8;">
	<div class="row"></div>
	
		<!-- phần menu-->

		<div class="row " style="border-bottom:1px solid #000000; background-color:white;">
			
			
			<div class="col-md-12 col-sm-6 col-xs-6">
				<ul class="nav justify-content-center ">
  <li class="nav-item">
    <a class="nav-link active  menu" aria-current="page" href="#"><b>Home</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link menu"   href="ManageUsers.php" ><b>Admin</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link menu"   href="ManageCategory.php" ><b>Categories</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link menu " href="ManageFood.php"><b>Foods</b></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link  menu" href="ManageOder.php" ><b>Oder</b></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link disabled menu"  ><b>Logout</b></a>
  </li>
</ul>
			</div>
		</div>
    <!-- phần manage Food-->
		<div class="row mt-5">
			<div class="col-md-1"></div>
			
			<div class="col-md-8" >
				<h2><b>Manage Food</b></h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<a href="#" class="btn btn-primary" style="border-radius:0;">Add Food</a>
			</div>
		</div>
    <!-- phần table-->
		<div class="row mt-5" style="font-size:15px;">
			
			<div class="col-md-1">
			</div>
			
    <div class="col-md ">
    	<div class="table-responsive">
  <table class="table">
    <thead>
    <tr class="topic">
      <th scope="col">S.N.</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Featured</th>
      <th scope="col">Active</th>
      <th scope="col">Actions</th>
       <th scope="col"></th>
        <th scope="col"></th>
      
      

   
     
      
       
       
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><p style="margin-top:35px;">1</p></th>
      <td><p >Dumplings Specials</p></td>
      <td><p>$5.00</p></td>
      <td class="image">
       
            <img src="img/menu-momo.jpg">
        
      </td>
      <td><p>Yes</p></td>
       <td><p>Yes</p></td>
       <td colspan="3">
      <button  style="width:100px;heigh:80px!important;background-color:#58FA82;color: black;"><b>Update Food</b></button>
    <button  style="width:100px; background-color:#FE2E9A;color: white;">Delete Food</button></td>
      
    </tr>
    <tr>
      <th scope="row"><p style="margin-top:35px;">2</p></th>
      <td><p >Best Buger</p></td>
      <td><p >$4.00</p></td>
       <td class="image">
       
            <img src="img/menu-burger.jpg">
        
      </td>
       <td><p>Yes</p></td>
        <td><p>Yes</p></td>
        <td colspan="2">
      <button  style="width:100px;heigh:80px!important;background-color:#58FA82;color: black;"><b>Update Food</b></button>
    <button  style="width:100px; background-color:#FE2E9A;color: white;">Delete Food</button></td>

     
    </tr>
    <tr>
      <th scope="row"><p style="margin-top:35px;">3</p></th>
      <td><p >Smoky BBQ Pizza</p></td>
      <td><p >$6.00</p></td>
      <td class="image">
       
            <img src="img/menu-pizza.jpg">
        
      </td>
      <td><p>Yes</p></td>
        <td><p>Yes</p></td>
        <td colspan="2">
      <button  style="width:100px;heigh:80px!important;background-color:#58FA82;color: black;"><b>Update Food</b></button>
    <button  style="width:100px; background-color:#FE2E9A;color: white;">Delete Food</button></td>
      
    </tr>
    <tr>
      <th scope="row"><p style="margin-top:35px;">4</p></th>
      <td><p >Sadeko Momo</p></td>
      <td><p >$6.00</p></td>
      <td class="image">
       
            <img src="img/menu-momo.jpg">
        
      </td>
      <td><p>No</p></td>
        <td><p>Yes</p></td>
        <td colspan="2">
      <button  style="width:100px;heigh:80px!important;background-color:#58FA82;color: black;"><b>Update Food</b></button>
    <button  style="width:100px; background-color:#FE2E9A;color:white;">Delete Food</button></td>
      
    </tr>
    <tr>
      <th scope="row"><p style="margin-top:35px;">5</p></th>
      <td><p >Mixed Pizza</p></td>
      <td><p >$10.00</p></td>
      <td class="image">
       
            <img src="img/menu-pizza.jpg">
        
      </td>
      <td><p>Yes</p></td>
        <td><p>Yes</p></td>
        <td colspan="2">
      <button  style="width:100px;heigh:80px!important;background-color:#58FA82;color: black;"><b>Update Food</b></button>
    <button  style="width:100px; background-color:#FE2E9A;color:white;">Delete Food</button></td>
      
    </tr>
    <tr>
      <th scope="row"><p >6</p></th>
      <td><p style="margin-top:0;">Sed ipsum cillum in</p></td>
      <td><p style="margin-top:0;">$52.00</p></td>
      <td >
       <a href="" style="text-decoration: none; color:red;">Image not Added</a>
        
      </td>
      <td><p style="margin-top:0;">No</p></td>
        <td><p style="margin-top:0;">No</p></td>
        <td colspan="2">
      <button  style="width:100px;heigh:80px!important;background-color:#58FA82;color: black;margin-top:0;"><b>Update Food</b></button>
    <button  style="width:100px; background-color:#FE2E9A;color:white;margin-top:0;">Delete Food</button></td>
      
    </tr>

    
  </tbody>
  </table>
</div>
    </div>
    
    
    
 

			<div class="col-md-1"></div>

		
	</div>
  <!--- phần footer-->
	<div class="row mt-5" style="background-color:#FF0040;">
		<div class="col-md-12">
			<p style="text-align:center;margin-top:5px;color: white;">2020 All right reserved,Food House.Develop By-<a href="">CSE485</a></p>
			
		</div>
	
	</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>