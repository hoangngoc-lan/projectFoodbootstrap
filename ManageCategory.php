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
	
		

		<div class="row " style="border-bottom:1px solid #000000; background-color:white;">
			
			
			<div class="col-md-12 col-sm-6 col-xs-6">
				<ul class="nav justify-content-center ">
  <li class="nav-item">
    <a class="nav-link active  menu" aria-current="page" href="index.php"><b>Home</b></a>
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
    <a class="nav-link disabled menu" href="ManageOder.php" ><b>Oder</b></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link disabled menu"  ><b>Logout</b></a>
  </li>
</ul>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-1"></div>
			
			<div class="col-md-8" >
				<h2><b>Manage Category</b></h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<a href="#" class="btn btn-primary" style="border-radius:0;">Add Category</a>
			</div>
		</div>
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
      <th scope="col">Image</th>
      <th scope="col">Featured</th>
      <th scope="col">Active</th>
      <th>Actions</th>

   
     
      
       
       
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><p style="margin-top:35px;">1</p></th>
      <td><p >Pizza</p></td>
      <td class="image">
       
            <img src="img/pizza.jpg">
        
      </td>
      <td><p>Yes</p></td>
       <td><p>Yes</p></td>
       <td colspan="2">
      <button  style="width:140px;heigh:80px!important;background-color:#58FA82;color: black;"><b>Update Category</b></button>
    <button  style="width:140px; background-color:#FE2E9A;">Delete Category</button></td>
      
    </tr>
    <tr>
      <th scope="row"><p style="margin-top:35px;">2</p></th>
      <td><p >Buger</p></td>
       <td class="image">
       
            <img src="img/burger.jpg">
        
      </td>
       <td><p>Yes</p></td>
        <td><p>Yes</p></td>
        <td colspan="2">
      <button  style="width:140px;heigh:80px!important;background-color:#58FA82;color: black;"><b>Update Category</b></button>
    <button  style="width:140px; background-color:#FE2E9A;">Delete Category</button></td>

     
    </tr>
    <tr>
      <th scope="row"><p style="margin-top:35px;">3</p></th>
      <td><p >MoMo</p></td>
      <td class="image">
       
            <img src="img/momo.jpg">
        
      </td>
      <td><p>Yes</p></td>
        <td><p>Yes</p></td>
        <td colspan="2">
      <button  style="width:140px;heigh:80px!important;background-color:#58FA82;color: black;"><b>Update Category</b></button>
    <button  style="width:140px; background-color:#FE2E9A;">Delete Category</button></td>
      
    </tr>
    <tr>
      <th scope="row"><p style="margin-top:15px;">4</p></th>
        <td><p  style="margin-top:15px;">Quia est ipsum id id</p></td>
     <td class="images">
       
            <img src="img/food-oder.jpg">
        
      </td>
      <td><p>No</p></td>
        <td><p>Yes</p></td>
        <td colspan="2">
      <button  style="width:140px;heigh:80px!important;background-color:#58FA82;color: black;"><b>Update Category</b></button>
    <button  style="width:140px; background-color:#FE2E9A;">Delete Category</button></td>
      
    </tr>
    
  </tbody>
  </table>
</div>
    </div>
    
    
    
 

			<div class="col-md-1"></div>

		
	</div>
	<div class="row mt-5" style="background-color:#FF0040;">
		<div class="col-md-12">
			<p style="text-align:center;margin-top:5px;color: white;">2020 All right reserved,Food House.Develop By-<a href="">CSE485</a></p>
			
		</div>
	
	</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>