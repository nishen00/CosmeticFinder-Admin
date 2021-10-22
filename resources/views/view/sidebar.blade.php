<div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          CosmeticFinder
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item   ">
            <a class="nav-link" href="/home">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item " id="companypro">
            <a class="nav-link" href="/companyProfile">
              <i class="material-icons">person</i>
              <p>Company Profile</p>
            </a>
          </li>
          <li class="nav-item " id="reppr">
            <a class="nav-link" href="/repaccount">
              <i class="material-icons">person</i>
              <p>Rep Profile</p>
            </a>
          </li>
          <li class="nav-item " id="prosetup">
            <a class="nav-link" href="/productsetup">
              <i class="material-icons">content_paste</i>
              <p>Products SetUp</p>
            </a>
          </li>
          <li class="nav-item " id="probatchapprove">
            <a class="nav-link" href="/probatchApprove">
              <i class="material-icons">content_paste</i>
              <p>Products Batch Approve</p>
            </a>
          </li>
          <li class="nav-item " id="prosetupbatch">
            <a class="nav-link" href="/productbatch">
              <i class="material-icons">content_paste</i>
              <p>Products Batch</p>
            </a>
          </li>
          
          
          
        </ul>
      </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script>
$(document).ready(function(){
    
  var userType = sessionStorage.getItem("Type");

 if(userType == 2) {
   $('#companypro').hide();
   $('#prosetup').hide();
   $('#probatchapprove').hide();
   
 }

 if(userType == 1) {
   $('#reppr').hide();
   $('#prosetupbatch').hide();
   
 }

})
    </script>