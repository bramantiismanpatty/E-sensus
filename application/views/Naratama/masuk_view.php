<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>SHE||Login</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/kalisat.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <style>
        body.bg-theme {
            background-image: url('assets/images/RM.jpg');
            background-size: cover;
            background-position: center;          
        }

        form-control {
          font-weight: bold; /* untuk penebalan huruf */
          border: 5px solid #000; /* untuk kotak inputan */
          border-radius: 5px; /* untuk memberi sudut pada kotak inputan */
          padding: 5px; /* untuk memberi jarak antara teks dan tepi kotak inputan */
        }
        .text-blue {
          color: blue;
        }

        .text-green {
          color: green;
        }     
    </style>

</head>
<body class="bg-theme">   
  <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
    <div id="wrapper">
      <div class="card card-authentication1 mx-auto my-5">
        <div class="card-body border border-warning bg-success">
          <div class="card-content p-5">
              <div class="text-center mb-5">
                <img src="assets/images/kali.png" alt="logo icon">
              </div>
                   <h2 class="card-title text-uppercase text-center mb-3 font-weight-bold text-white">Login di sini!</h2>
                   <?php echo $this->session->flashdata('msg');?>
               <form method="POST" action="<?php echo site_url('masuk/autentikasi');?>">
                    <div class="form-group mb-3">
                        <label for="username" class="mb-1 font-weight-bold text-white">Username</label>
                        <input type="text" name="username" id="username" class="form-control border border-warning" placeholder="Masukkan Username" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="mb-1 font-weight-bold text-white">Password</label>
                        <input type="password" name="pass" id="password" class="form-control border border-warning" placeholder="Masukkan Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    
                    <div class="text-center mt-3">
                        <?php echo $this->session->flashdata('pesan');?>
                    </div>       
               </form>                           
                  <div class="text-center mt-3">
                        <a class="small font-weight-bold text-white" href="<?= base_url();?>Utama">Kembali ke Beranda</a>
                  </div> 
         </div>
       </div>      
	  </div>
  </div>
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
</body>
</html>