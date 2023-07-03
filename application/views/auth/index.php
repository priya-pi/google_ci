<?php

include APPPATH . 'views/auth/header.php'; ?>

<style>
.fa-google {
    background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    -webkit-text-fill-color: transparent;
    margin-right:20px;
  }

</style>

<div class="container">
   <br />
   <h2 align="center">Login using Google Account with Codeigniter</h2>
   <br />
   
</div>

   <?php if (!isset($login_button)) {
       $user_data = $this->session->userdata('user_data');
       echo '<div class="container">Welcome User</div><div class="container">';
       echo '<h3><b>Name : </b>' . $user_data['name'] . '</h3>';
       echo '<h3><b>Email :</b> ' . $user_data['email'] . '</h3>';
       echo '<h3><a href="' . base_url() . 'google_login/logout" class="btn btn-danger">Logout</h3></div>';
   } else {
       echo '<div align="center">' . $login_button . '</div>';
   } ?>
