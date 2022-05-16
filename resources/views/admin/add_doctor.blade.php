<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
       <div class="container-fluid page-body-wrapper">
            <h1>Add Doctor</h1>
            <div class="w-75 text-center">
            <div class="mt-5">
                <label for="name">Name</label>
                <input style="color:black" type="text" name="name" id="">
            </div>
            <div class="mt-5">
                <label for="">Phone Number</label>
                <input style="color:black" type="number" name="phone" id="">
            </div>
            <div class="mt-5">
                <label for="">Speciality</label>
                <select style="color:black" name="speciality" id="">
                    <option value="select">select</option>
                    <option value="skin">skin</option>
                    <option value="head">head</option>
                    <option value="teeth">teeth</option>
                    <option value="body">body</option>
                </select>
            </div>
            <div class="mt-5">
                <label for="">Room no.</label>
                <input style="color:black" type="number" name="room" id="">
            </div>
            <div class="mt-5">
                <label for="">Doctor Image</label>
                <input style="color:black" type="file" name="file" id="">
            </div>

            <div class="">
                <a class="btn btn-primary" href="">Submit</a>
            </div>
            
        </div>
       </div>    
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
