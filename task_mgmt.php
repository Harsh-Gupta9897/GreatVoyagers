<?php

include('./includes/header.php');

?>
<body>
<div class="container-scroller">
  <!-- partial top nav-bar-->
  <?php

    include('./includes/nav.php');

  ?>
  <!-- partial -->

  <div class="container-fluid page-body-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <?php

      include('./includes/sidebar.php');

    ?>    
    <!-- partial -->

    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
              <i class="mdi mdi-chart-bar"></i>
            </span> Task Management </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>
        
        <div class="row">
          <?php
              include('./includes/taskmgmt/assign.php');
          ?>
        </div>
        <br>
        <center>
          <input type="submit" class="btn btn-gradient-success btn-lg mr-2" id="ass" name="assignment" value="View all assignment"/>
        </center>    
        <br>
        <div class="row assigned" style="display: none;">
          <div class="col-md-12">
              <?php 

                  //if(isset($_POST['assignment']))
                    include('includes/taskmgmt/table.php');
              ?>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->

      <!-- partial:partials/_footer.html -->
      <?php

        include('./includes/footer.php');

      ?>
      <!-- partial -->

    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
  <?php
    include('./includes/script.php');
  ?>
 <script type="text/javascript">
    $(document).ready(function(){
        $("#ass").click(function(){
            $("div.assigned").toggle("slow");
        });
    });
  </script>  
</body>
</html>