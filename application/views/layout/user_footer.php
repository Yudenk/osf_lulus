<footer class="text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row my-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
            <img src="<?php echo base_url('assets2/assets/images/osf/logo_footer.png')?>" alt=""loading="lazy" />
          </div>

          <p class="text-center">One Street Food</p>

          <ul class="list-unstyled d-flex flex-row justify-content-center">
            <li>
              <a class="text-white px-2" href="https://www.facebook.com/osf.id">
                <i class="fab fa-facebook-square"></i>
              </a>
            </li>
            <li>
              <a class="text-white px-2" href="https://www.instagram.com/osf_id/">
                <i class="fab fa-instagram"></i>
              </a>
            </li>   
            <li>
            <a class="text-white px-2" href='https://www.free-counters.org/'>Free-Counters</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=53d12f04d04b4f9fc1856bd498717a32183e6c8f'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/1053239/t/4"></script>
            </li>          
          </ul>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Tenants</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="<?= site_url('User_FB')?>" class="text-white"><i class="fa-solid fa-shop fa-bounce"></i> Tenants Food & Beverages</a>
            </li>
            <li class="mb-2">
              <a href="<?= site_url('User_Fashion')?>" class="text-white"><i class="fa-solid fa-shop fa-bounce"></i> Tenants Fashion</a>
            </li>
            <li class="mb-2">
              <a href="<?= site_url('User_Fantasy')?>" class="text-white"><i class="fa-solid fa-shop fa-bounce"></i> Tenants Fantasy</a>
            </li>            
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Others</h5>

          <ul class="list-unstyled">
          <li class="mb-2">
              <a href="<?= site_url('User_Home/about')?>" class="text-white"><i class="fa-solid fa-building fa-bounce"></i> About Us</a>
            </li>
            <li class="mb-2">
              <a href="<?= site_url('User_Event')?>" class="text-white"><i class="fa-brands fa-envira fa-bounce"></i> Galery</a>
            </li>
            <li class="mb-2">
              <a href="<?= site_url('User_Daftar')?>" class="text-white"><i class="fa-solid fa-right-to-bracket fa-bounce"></i> Gabung Tenants</a>
            </li>            
          </ul>
        </div>
        <!--Grid column-->

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Contact</h5>

          <ul class="list-unstyled">
          <li class="mb-2">
              <a href="#!" class="text-white"><i class="fa-solid fa-map fa-bounce"></i> Jl. Pemuda, Komplek Pemuda City Walk</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fa-solid fa-phone-volume fa-bounce"></i> +62 852-7193-5233</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fa-solid fa-inbox fa-bounce"></i> osf@hopecompanygroup.com</a>
            </li>  
          </ul>
        </div>        
        <!--Grid column-->
        
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    Copyright © 2023 OneStreetFood., Ltd. All Rights Reserved.         
    </div>
    <!-- Copyright -->
  </footer>
<!-- End of .container -->


  <!-- Scripts -->
  <script>
        // Fungsi untuk menutup popup
        function closePopup() {
            var popupContainer = document.querySelector('.popup-container');
            popupContainer.style.display = 'none';
        }
    </script>
    <script src="https://kit.fontawesome.com/a41afa4626.js" crossorigin="anonymous"></script>
  <script src=<?php echo base_url('assets2/vendor/jquery/jquery.min.js')?>></script>
  <script src=<?php echo base_url('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js')?>></script>
  <script src=<?php echo base_url('assets2/assets/js/owl-carousel.js')?>></script>
  <script src=<?php echo base_url('assets2/assets/js/animation.js')?>></script>
  <script src=<?php echo base_url('assets2/assets/js/imagesloaded.js')?>></script>
  <script src=<?php echo base_url('assets2/assets/js/custom.js')?>></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
  <script>
$(document).ready(function() {
  // Menggunakan delegasi event untuk mengikat event handler pada form
  $('body').on('submit', '#member_form', function(e) {
    e.preventDefault();
    var memberID = $('#member_id').val();
    
    $.ajax({
      type: 'POST',
      url: '<?php echo base_url('User_home/getMemberDetails'); ?>',
      data: { member_id: memberID },
      success: function(response) {
        // Memasukkan detail member ke dalam modal
        $('#member_details').html(response);
        $('#member_modal').modal('show');
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  });
});
</script>
</body>
</html>