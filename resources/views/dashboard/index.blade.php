@extends('dashboard.layout.main')

@section('container')
 <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Welcome back {{ auth()->user()->name }}</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
  <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Penjualan</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->

         
            <section class="col-lg-12 connectedSortable">
             

                
                  <div class="col-md-12">
                    <div class="card" style="background-color:">
                      <div class="card-header">
        
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>

                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>

                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="row">
                          
                            
                              <div class="col-sm-3 col-6">

                                <img src="/img/Stempel PWM.png" style="padding: 50px" width="400px">
                              </div>

                              <div class="col-sm-3 col-6">

                                <img src="/img/Bambu Sungei 2.png" style="padding-left: 100px" width="250px">
                              </div>
                              
                              <div class="col-sm-3 col-6">

                                <img src="/img/LOGOdISTRI 2.png" style="padding: 50px" width="250px">
                              </div>

                              <div class="col-sm-3 col-6">

                                <img src="/img/logo.png" style="padding: 50px" width="250px">
                              </div>
                            
                          
                            <!-- /.chart-responsive -->
                          </div>
                          <!-- /.col -->
                         
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- ./card-body -->
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                              <h5 class="description-header">$35,210.43</h5>
                              <span class="description-text">TOTAL REVENUE</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                              <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                              <h5 class="description-header">$10,390.90</h5>
                              <span class="description-text">TOTAL COST</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                              <h5 class="description-header">$24,813.53</h5>
                              <span class="description-text">TOTAL PROFIT</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-3 col-6">
                            <div class="description-block">
                              <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                              <h5 class="description-header">1200</h5>
                              <span class="description-text">GOAL COMPLETIONS</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->


              
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
           
          
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



@endsection