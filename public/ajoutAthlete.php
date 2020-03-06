<?php
require_once '../header.php';
?>
<section class="form-elegant pt-10 col-12 d-flex justify-content-center">

  <!-- Grid row -->
  <div class="">

    <!-- Grid column -->
    <div class="col-md-9 col-lg-12 col-xl-12">

      <!--Form without header-->
      <div class="card">

        <div class="card-body mx-4">

          <!--Header-->
          <div class="text-center">
            <h3 class="dark-grey-text mb-5"><strong>Sign up</strong></h3>
          </div>

          <!--Body-->
          <div class="md-form">
            <input type="text" id="Form-email1" class="form-control">
            <label for="Form-email1">Your email</label>
          </div>

          <div class="md-form">
            <input type="password" id="Form-pass1" class="form-control">
            <label for="Form-pass1">Your password</label>
          </div>

          <div class="md-form pb-3">
            <input type="search" id="form-autocomplete-1" class="form-control mdb-autocomplete">
            <button class="mdb-autocomplete-clear">
              <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="https://www.w3.org/2000/svg">
                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                <path d="M0 0h24v24H0z" fill="none" />
              </svg>
            </button>
            <label for="form-autocomplete-1" class="active">Your country</label>
          </div>

          <div class="text-center mb-3">
            <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign up</button>
          </div>
          <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign up
            with:</p>

          <div class="row my-3 d-flex justify-content-center">
            <!--Facebook-->
            <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f blue-text text-center"></i></button>
            <!--Twitter-->
            <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter blue-text"></i></button>
            <!--Google +-->
            <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g blue-text"></i></button>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer mx-5 pt-3 mb-1">
          <p class="font-small grey-text d-flex justify-content-end">Already a member? <a href="#" class="blue-text ml-1">
              Sign In</a></p>
        </div>

      </div>
      <!--/Form without header-->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>


<?php require_once'../footer.php'?>