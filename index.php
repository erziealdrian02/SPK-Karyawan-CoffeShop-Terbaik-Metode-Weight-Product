<?php
session_start();
include './process/koneksi.php';

if (isset($_GET['id'])) {
   if ($_GET['id'] == 'false') {
      echo "<script>alert('username / password salah. Gagal masuk.')</script>";
      header("Location: index.php");
      exit;
   } else if ($_GET['id'] == 'out') {
      echo "<script>alert('Anda belum masuk, silahkan masuk.')</script>";
      header("Location: index.php");
      exit;
   } else {
      echo "<script>alert('Logout berhasil.')</script>";
      header("Location: index.php");
      exit;
   }
}

if (isset($_POST['submit'])) {
   $username = mysqli_real_escape_string($connect, $_POST['username']);
   $password = mysqli_real_escape_string($connect, $_POST['password']);

   $sqllogin = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
   $querylogin = mysqli_query($connect, $sqllogin);

   if (mysqli_num_rows($querylogin) > 0) {
      $row = mysqli_fetch_assoc($querylogin);
      $_SESSION['username'] = $username;
      $_SESSION['nama_pengguna'] = $row['nama_pengguna'];
      $_SESSION['profile'] = $row['profile'];
      $_SESSION['stat'] = 'masuk';
      echo "<script>alert('Berhasil masuk, selamat datang " . $row['nama_pengguna'] . "')</script>";
      header("Location: landing-page.php");
      exit;
   } else {
      echo "<script>alert('Username/password salah')</script>";
   }
}
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="./css/output.css" rel="stylesheet" />
</head>

<body>
   <section class="flex flex-col md:flex-row h-screen items-center">
      <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
         <img src="./images/login-image.jpg" alt="" class="w-full h-full object-cover" />
      </div>

      <div class="bg-slate-100 w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12 flex items-center justify-center">
         <div class="w-full h-100">
            <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12 text-center">
               Coffe Shop Hubb
            </h1>

            <form class="mt-6" action="#" method="POST">
               <div>
                  <input type="text" id="username" name="username" placeholder="Username" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required />
               </div>

               <div class="mt-4">
                  <input type="password" id="password" name="password" placeholder="Password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" required />
               </div>

               <!-- <div class="text-right mt-2">
                     <a
                        href="#"
                        class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700"
                        >Forgot Password?</a
                     >
                  </div> -->

               <button type="submit" name="submit" value="Masuk" class="w-full block bg-red-600 hover:bg-red-900 focus:bg-red-700 text-white font-semibold rounded-lg px-4 py-3 mt-6 ease-in-out transition">
                  Log In
               </button>
            </form>

            <hr class="my-6 border-gray-300 w-full" />
         </div>
      </div>
   </section>
</body>

</html>