<?include('header.php');
 $SelectData = mysqli_query($conn,"SELECT * FROM `timesheet` join student ON student.id=timesheet.userID ORDER BY timesheet.userId DESC");?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">Timesheet</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item active">Timesheet
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><div class="row">
  <div class="col-12">
   
  </div>
</div>

<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            All Student Timesheet Detail
          </h4>
        </div>
        <div class="card-body card-dashboard">
         
          <div class="table-responsive">
            <table class="table table-striped dataex-html5-selectors">
              <thead>
                <tr>
                  <th>Sr.No</th>
                  <th>Student Name</th>
                     <th>Class</th>
                      <th>Email</th>
                         <th>Phone</th>
            
                  <th>Date</th>
                  <th>Time</th>
         
                 <!--  <th>Action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php
                $number = 1;
                while($DataFetch = mysqli_fetch_assoc($SelectData))
                {
                ?>
                <tr>
                  
                  <td><?=$number++; ?></td>
                  <td>
                    
                    <a href="viewDetail.php?id=<?=base64_encode($DataFetch['userID'])?>"><?=$DataFetch['name'];?> </a>
                  </td>
                     <td><?=$DataFetch['class']?></td>
                        <td><?=$DataFetch['email']?></td>
                              <td><?=$DataFetch['mobile']?></td>
                  <td><?=$DataFetch['start_time']?></td>
                  <td><?=$DataFetch['tim_time'];?></td>
               
                  <!-- <td ><a href="viewDetail.php?id=<?=base64_encode($DataFetch['userID'])?>">View  <i class="fa fa-eye"></a></td> -->
                </tr>
                <?}?>
    
            
              </tbody>
             
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->
<?include('footer.php')?>
<script type="text/javascript">
  var id = document.getElementByid('DataTables_Table_0_filter');
  
  if (id!='') {
    $("#DataTables_Table_0_filter").text('Filter');
  }
</script>