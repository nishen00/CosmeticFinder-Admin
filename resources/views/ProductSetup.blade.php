<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    @include('view.sidebar')
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Company Details</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Company Details</h4>
                  <p class="card-category"> Add Products for company and Edit</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="companyDetails">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Registered Number
                        </th>
                        <th>
                          Tel 1
                        </th>
                        <th>
                          Tel 2
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Actions
                        </th>
                      </thead>
                      <tbody>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
            </div>
          </div>
        </div>
      </div>
  </div>

  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Product</h4>
      </div>
      <div class="modal-body">
      <form onsubmit="return false;">
      <input type="hidden" class="form-control" id="comname" >
      <input type="hidden" class="form-control" id="urlget" >
      <img src="" class="rounded" alt="" id="showpimg" width="100px" height="100px">
      <div>
          Step - 1
      <input type="file" class="form-control" accept="image/*" id="productimg" >
      </div>

      <div id = "step2">
          Step - 2
          <div class="form-group">
             <label class="bmd-label-floating">Product Category </label>
          <select class="form-control" id="category">
           
          </select>
          </div>

          <div class="form-group">
             <label class="bmd-label-floating">Skin Type </label>
          <select class="form-control" id="skintype">
          <option value=""> </option>
           <option value="Black Brown">Black Brown</option>
           <option value="Brown">Brown</option>
           <option value="Fair">Fair</option>
           <option value="Light Brown">Light Brown</option>
           <option value="Olive">Olive</option>
           <option value="Pimple">Pimple</option>
          </select>
          </div>

          <div class="form-group">
             <label class="bmd-label-floating">Product </label>
             <input type="text" class="form-control" id="product" >
          </div>
          <div class="form-group">
             <label class="bmd-label-floating">Price </label>
             <input type="number" class="form-control" id="price" >
          </div>
          <div class="form-group">
             <label class="bmd-label-floating">Company Name </label>
             <input type="text" class="form-control" id="companyName" >
          </div>
          <div class="form-group">
             <label class="bmd-label-floating">Safe Certificate Key </label>
             <input type="text" class="form-control" id="safeKey" >
          </div>
          <div class="form-group">
          <label>Description</label>
            <div class="form-group">
                <label class="bmd-label-floating"> Enter information about Product.</label>
                <textarea class="form-control" rows="5" id="pabount"></textarea>
            </div>
         </div>

         <div class="form-group">
          <label>Directions for use</label>
            <div class="form-group">
                <label class="bmd-label-floating"> Enter Direction for use Product.</label>
                <textarea class="form-control" rows="5" id="direction"></textarea>
            </div>
         </div>

         <div class="form-group">
          <label>Caution</label>
            <div class="form-group">
                <label class="bmd-label-floating"> Enter Direction for use Product.</label>
                <textarea class="form-control" rows="5" id="caution"></textarea>
            </div>
         </div>

         <div class="form-group">
          <label>Ingredients</label>
            <div class="form-group">
                <label class="bmd-label-floating"> Enter Product Ingredients.</label>
                <textarea class="form-control" rows="5" id="ingredients"></textarea>
            </div>
         </div>
         <button type="button" class="btn btn-primary"  id="saveproduct">Save</button>
      </div>
      </form>
      </div>
      <div class="modal-footer">
      <table class="table table-bordered" id="producttable">
    <thead>
      <tr>
        <th>Name</th>
        <th>Safety Certidicate Key</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id="probody">
      
    </tbody>
  </table>
      
      
  
      </div>
    </div>

  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js"></script>
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap-material-design.min.js"></script>
  <script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="demo/demo.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-storage.js"></script>

  <script>
    var firebaseConfig = {
    apiKey: "AIzaSyDkqvqyCWIn56241mq5RXY6FFh2HY-jYt4",
    authDomain: "cosmeticfinder-712ae.firebaseapp.com",
    projectId: "cosmeticfinder-712ae",
    storageBucket: "cosmeticfinder-712ae.appspot.com",
    messagingSenderId: "1056180639483",
    appId: "1:1056180639483:web:d121be7f141a8f0eac025e"
  };
  // Initialize Firebase
  var app = firebase.initializeApp(firebaseConfig);
  const db = firebase.firestore(app);
  
    $(document).ready(function() {
        $("#error22").hide();
        $('#done').hide();
        $('#step2').hide();
        getcompany();

        let fileUpload = document.getElementById("productimg");

  fileUpload.addEventListener('change', function(evt) {
    var storage = firebase.storage().ref('Products/'+$('#comname').val()+'_'+Date.now());
      let firstFile = evt.target.files[0] ;// upload the first file only
      let uploadTask = storage.put(firstFile);

      uploadTask.on(firebase.storage.TaskEvent.STATE_CHANGED, // or 'state_changed'
  (snapshot) => {
    // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
    var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
    console.log('Upload is ' + progress + '% done');
    switch (snapshot.state) {
      case firebase.storage.TaskState.PAUSED: // or 'paused'
        console.log('Upload is paused');
        break;
      case firebase.storage.TaskState.RUNNING: // or 'running'
        console.log('Upload is running');
        break;
    }
  }, 
  (error) => {
    // A full list of error codes is available at
    // https://firebase.google.com/docs/storage/web/handle-errors
    switch (error.code) {
      case 'storage/unauthorized':
        // User doesn't have permission to access the object
        break;
      case 'storage/canceled':
        // User canceled the upload
        break;

      // ...

      case 'storage/unknown':
        // Unknown error occurred, inspect error.serverResponse
        break;
    }
  }, 
  () => {
    // Upload completed successfully, now we can get the download URL
    uploadTask.snapshot.ref.getDownloadURL().then((downloadURL) => {
      console.log('File available at', downloadURL);
           $("#showpimg").attr("src",downloadURL);
      $("#urlget").val(downloadURL);
      $('#step2').show(1000);
    });
  }
);

    //   uploadTask.snapshot.ref.getDownloadURL().then((downloadURL) => {
    //   console.log('File available at', downloadURL);
 
      
    //   });
      
  })

        function getcompany() {
            var count = 1;
            db.collection("Companies").get().then((querySnapshot) => {
    querySnapshot.forEach((doc) => {
        
        // doc.data() is never undefined for query doc snapshots
        $('#companyDetails').append('<tr><td>'+count+'</td><td class='+doc.id+'>'+doc.data().name+'</td><td>'+doc.data().regnumber+'</td><td>'+doc.data().telephone1+'</td><td>'+doc.data().telephone2+'</td><td>'+doc.data().Adminemail+'</td><td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" value='+doc.id+' id="addmodle">Add Products</button><button class="btn btn-success btn-sm">Edit</button><button class="btn btn-Danger btn-sm">Delete</button></td></tr>');
       
        
        count++
    });
   }); 

        }

        $(document).on("click", "#addmodle",function() {
            
             $('#companyName').val($('.'+$(this).val()).text());
            $('#comname').val($(this).val());
            $('#category').append('<option value="">Select Category</option>');
             	
           
            db.collection("productCategory").get().then((querySnapshot) => {
    querySnapshot.forEach((doc) => {

        
        
        // doc.data() is never undefined for query doc snapshots
        $('#category').append('<option value='+doc.id+'>'+doc.data().Name+'</option>');
        
        
    });

   }); 

   getproducts();

        });


        function getproducts()
        {
          $( "#probody" ).empty();
          db.collection("Products").where("ComID", "==", $('#comname').val())
    .get()
    .then((querySnapshot) => {
        querySnapshot.forEach((doc) => {
            // doc.data() is never undefined for query doc snapshots
            // console.log(doc.id, " => ", doc.data());
            $('#producttable').append('<tr><td>'+doc.data().Name+'</td><td >'+doc.data().Safekey+'</td><td>'+doc.data().ProductAbout+'</td><td><button class="btn btn-primary btn-sm"  value='+doc.id+' id="banned">Banned Product</button><button class="btn btn-success btn-sm">Edit</button><button class="btn btn-Danger btn-sm">Delete</button></td></tr>');
            
        });
    })
    .catch((error) => {
        console.log("Error getting documents: ", error);
    });
        }
        
        $(document).on("click", "#banned",function() {
      
          var productapprove = db.collection("Products").doc($(this).attr("value"));
          

// Set the "capital" field of the city 'DC'
 productapprove.update({
    safe: 2,
})
.then(() => {
  batch($(this).attr("value"));
})
.catch((error) => {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
});


 
          
        })

        function batch(id)
        {
          alert(id);
          const ORDER_ITEMS = firebase.firestore().collection('ProductsBatch');

ORDER_ITEMS.where('productdocid', '==', id)
  .get()
  .then(snapshots => {
    if (snapshots.size > 0) {
      snapshots.forEach(orderItem => {
        ORDER_ITEMS.doc(orderItem.id).update({ safe: 2 })
      })
    }
  })
       

        }
        
        $(document).on("click", "#saveproduct",function() {
            
           if($('#category').val() == "" || $('#skintype').val() == "" ||$('#product').val() == "" || $('#price').val() == "" || $('#companyName').val() == "" || $('#safeKey').val() == "" || $('#pabout').val() == "" || $('#direction').val() == "" || $('#caution').val() == "" || $('#ingredients').val() == "")
           {
            alert("Please check the form again")
           }
           else
           {
            db.collection("Products").add({
               Name: $('#product').val(),
               Price: $('#price').val(),
               Company:$('#companyName').val(),
               Safekey:$('#safeKey').val(),
               ProductAbout:$('#pabount').val(),
               Direction:$('#direction').val(),
               Coution:$('#caution').val(),
               Ingredients:$('#ingredients').val(),
               ComID: $('#comname').val(),
               Url: $('#urlget').val(),
               categoryid:$('#category').val(),
               safe:1,
               suggestion:$('#skintype').val(),
               categoryName:$('#category option:selected').text(),
            })
             .then((docRef) => {
            console.log("Document written with ID: ", docRef.id);
            alert("Successfully Updated");
            getproducts();
            $('#step2').hide();
            $('#product').val("");
               $('#price').val("");
               
              $('#safeKey').val("");
              $('#pabount').val("");
               $('#direction').val("");
               $('#caution').val("");
               $('#ingredients').val("");
               
               
               
            })
            .catch((error) => {
             console.error("Error adding document: ", error);
             });
           }

            
        });

        
    
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>