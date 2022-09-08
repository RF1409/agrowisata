
@extends('dashboard.layout.main')

@section('container')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Detail Data User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Users</a></li>
                    <li class="breadcrumb-item active">Show</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

     <!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="/style/dist/img/p.png"
                        alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{ $user->username }}</h3>

                    <p class="text-muted text-center">Anggota Agrowisata</p>

                    <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <table>
                            <tr>
                                <th width="27%"><i class="fas fa-pencil-alt mr-1"></i> Nama Lengkap</th>
                                <td width="3%"></td>
                                <td width="3%">:</td>
                                <td class="text-muted">{!! $user->name !!}</td>
                            </tr>
                        </table>
                    
                    </li>
                    <li class="list-group-item">
                        <table>
                            <tr>
                                <th width="21%"><i class="fas fa-pencil-alt mr-1"></i> Username</th>
                                <td width="10%"></td>
                                <td width="3%">:</td>
                                <td class="text-muted">{!! $user->username !!}</td>
                            </tr>
                        </table>
                    
                    </li>

                    <li class="list-group-item">
                        <table>
                            <tr>
                                <th width="21%"><i class="fas fa-envelope mr-1"></i> Email</th>
                                <td width="25%"></td>
                                <td width="4%">:</td>
                                <td class="text-muted">{!! $user->email !!}</td>
                            </tr>
                        </table>
                    </li>

                    <li class="list-group-item">
                        <table>
                            <tr>
                                <th width="21%"><i class="fas fa-key mr-1"></i> Password</th>
                                <td width="11%"></td>
                                <td width="3%">:</td>
                                <td class="text-muted">{!! $user->confirm !!}</td>
                            </tr>
                        </table>
                    </li>

                    
                
                    </ul>

                    <a href="/dashboard/users/{{ $user->id }}/edit" class="btn btn-secondary btn-block"><b>Edit</b></a>

                    <a href="/dashboard/users" class="btn btn-success btn-block"><i class="bi bi-box-arrow-in-left"></i> Back to Data Users</a>

                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->

            
            </div>

            <div class="col-md-6">
                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Agriculture</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        
            
                        <strong>
                            <i class="fas fa-map-marker-alt mr-1"></i> Alamat Pertanian
                        </strong>
                       
                        <p class="text-muted">
                            {!! $user->pertanian !!} 
                        </p>

                        <hr>
            
                        <strong>
                            <i class="fas fa-map-marker-alt mr-1"></i> Provinsi
                        </strong>
                       
                        <p class="text-muted">
                            {!! $user->provinsi !!} 
                        </p>

                        <hr>
            
                        <strong>
                            <i class="fas fa-map-marker-alt mr-1"></i> Kota
                        </strong>
                       
                        <p class="text-muted">
                            {!! $user->kota !!} 
                        </p>
            
                        <hr>
            
                        <strong><i class="fas fa-phone mr-1"></i> No.Hp</strong>
            
                        <p class="text-muted">
                        {!! $user->nohp !!}
                        </p>
            
                        <hr>
            
                        <strong><i class="nav-icon far fa-image"></i> KTP</strong>
            
                        @if ($user->image)

                        <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}" class="img-fluid mt-1 col-sm-5 d-block">
                        </div>
                
                        @endif

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
        
          
        </div>
    </div>
</div>

 
@endsection