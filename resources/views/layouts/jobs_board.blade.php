<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Admin Dashboard</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/portal/theme-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/portal/theme-assets/images/ico/favicon.ico') }}">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/portal/theme-assets/css/vendors.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/portal/theme-assets/css/app-lite.css') }}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/portal/theme-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/portal/theme-assets/css/core/colors/palette-gradient.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <style>
        button.btn.btn-light.dropdown-toggle {
    margin-top: 1.5rem;
    padding: 0.4rem;
    font-size: 0.8rem;
    margin-right: 3rem;
}
ul.dropdown-menu.dropdown-menu-right.show {
    width: 7rem;
    margin-left: -5rem;
}
    </style>
    
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-bs-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a></div>
                </div>
              </li>

              <!-- <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-bs-toggle="dropdown">             <span class="avatar avatar-online"><img src="{{ asset('assets/portal/theme-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="{{ asset('assets/portal/theme-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li> -->

              <br>
            <li>
            <div class="btn-group shadow-0">
            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a></li>
              <li><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a></li>
              <li><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a></li>
              <li><hr class="dropdown-divider" /></li>

              <form method="POST" action="{{ route('logout')}}">
                @csrf
                <button class="dropdown-item text-danger"><i class="ft-power"></i> Logout</button>
              </form>

              <!-- <li><a  href="#"></a></li> -->
            </ul>
            </div>
            </li>

            </ul>
          </div>
        </div>
      </div>
    </nav>
   
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="/home"><img class="brand-logo" alt="Chameleon admin logo" src="{{ asset('assets/portal/theme-assets/images/logo/logo.png')}}"/>
              <h3 class="brand-text">Chameleon</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="/home"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li class=" nav-item"><a href="/company"><i class="fa-solid fa-address-book"></i><span class="menu-title" data-i18n="">Companies</span></a>
          </li>
          <li class="active"><a href="/jobs_board"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Jobs Portal</span></a>
          </li>
          <li class=" nav-item "><a href="/scholarships"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n=""> Scholarships </span></a>
          </li>
          <li class="nav-item"><a href="/charts"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Charts</span></a>
          </li>
          <!-- <li class=" nav-item"><a href="icons.html"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Icons</span></a>
          </li>
          <li class=" nav-item"><a href="cards.html"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Cards</span></a>
          </li>
          <li class=" nav-item"><a href="buttons.html"><i class="ft-box"></i><span class="menu-title" data-i18n="">Buttons</span></a> -->
          </li>
          <li class=" nav-item"><a href="/typography"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Typography</span></a>
          </li>
          <li class=" nav-item"><a href="/tables"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a>
          </li>
          <!-- <li class=" nav-item"><a href="form-elements.html"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Form Elements</span></a>
          </li>
          <li class=" nav-item"><a href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a>
          </li>
        </ul> -->
      </div><a class="" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"></a>
      <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Admin Panel</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Job Board
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
<!-- Bar charts section start -->

<section id="chartjs-bar-charts">
    <!-- Column Chart -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header" style="padding-bottom: 0rem;">
                        <h5><b>Jobs Management</b></h5> 
                        <!-- <h2 style="text-align: center;">Add User Data</h2> -->
                    </div>
                    <div class="card-body">

                    
                    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif 

@if(Session::has('delete'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('delete')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif 

@if(Session::has('edit'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('edit')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif 


                        <a href="{{ url('/add-job') }}" class="btn btn-primary btn-sm" title="Add New Record" style="margin-left: 53.5rem;" >
                            <i class="fa fa-plus"  aria-hidden="true"></i> Create New Job  </a>
                        <br/>
                        <br/>
                        <!--******************************** Search Button ********************************-->
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." >
                        <div class="flex">

                        <!--******************************** Header Button ********************************-->

                        <button type="button" style=" margin-left: 55.4rem; margin-top: -3.4rem;" class="btn btn-danger btn-sm" onclick="onBulk()"
                        data-bs-toggle="modal" data-bs-target="#bulk" ><i class="fa-solid fa-trash-can"></i> Bulk Delete </button>

                        <!-- <button type="button"  style=" margin-left: 58rem; margin-top: -3.4rem;" class=" delete btn btn-danger btn-sm" onclick="onBulk()"
                        data-bs-toggle="modal" data-bs-target="#bulk" ><i class="fa-solid fa-trash-can"></i> Bulk Delete </button> -->

                        </div>

                        <!--******************************** Main Table ********************************-->

                        <div class="table-responsive" >
                            <table class="table" id="myTable">
                                <thead class="table-light" >
                                    <tr>
                                        <th scope="col">
                                        <div class="form-check">
                                        <input type="checkbox" id="delete" class="check1" >
                                        <!-- <input type="checkbox" onclick="selectAll()" id="delete" class="check1" > -->
                                        </div> 
                                        </th>
                                        <th>#</th>
                                        <th>Company Name</th>
                                        <th>Locatiom</th>
                                        <th>Position Title</th>
                                        <th>Action</th>
                                        <!-- <th>Password</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($apps as $item)
                                <tr>
                                        <td>
                                        <div class="form-check">
                                        <input type="checkbox" class="check" name="del[]" value="<?= $item->id; ?>">
                                        </div> 
                                        </td>

                                        <!-- <td>{{ $loop->iteration }}</td> -->
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->company }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->title }}</td>
                                        <!-- <td>{{ $item->category}}</td> -->
                                        <!-- <td>{{ $item->password }}</td> -->
                                        <td>
                                        <button type="button" value="{{ $item->id }}" class="btn btn-info btn-sm view" title="Add New Record" >
                                        <i class="fas fa-eye"></i> View </button>
                                        
                                        <button type="button" value="{{ $item->id }}" class="btn btn-warning btn-sm edit" title="Add New Record" >
                                        <i class='fa fa-edit'></i> Edit </button>
                                        
                                        <button type="button" value="{{ $item->id }}" class="btn btn-danger btn-sm delete" title="Add New Record" >
                                        <i class="fa-solid fa-trash-can" aria-hidden="true"></i> Delete </button>

                                            <!-- <a href="{{ url('/job/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/job/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/job' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete user" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa-solid fa-trash-can" aria-hidden="true"></i> Delete</button>
                                            </form> -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

<!--******************************** Bulk Delete Check box Modal ********************************-->
     
<div class="modal fade" id="bulk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bulk delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form action="{{ url('/delete-selected-job') }}" method="POST">
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
        @csrf
      <input type="hidden" name="iddel" id="bulkid" class="form-control"  /><br />
        <label for="" id="bulky">Are you sure you want to delete?</label>
      </div>

      <div class="modal-footer">
      <!-- <a href="{{ url('/user/' . $item->id) }}" title="delete Student"><button class="btn btn-danger btn-sm"><i class="bi bi-trash text-light"></i> Delete </button></a> -->
      <button type='submit' class='btn btn-danger' name='bulkdelete'><i class="bi bi-trash text-light"></i> Delete</button>
     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</form>
      </div>
    </div>
  </div>
</div>

 <!--******************************** Delete Modal ********************************-->

<div class="modal fade" id="deletemodal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ url('/delete-job') }}" method="POST">
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
      <input type="hidden" name="delete_id" id="id3" class="form-control"  /><br />
        <label for="">Are you sure you want to delete this?</label>
        <div class="modal-footer">
        <button type='submit' class='btn btn-danger'><i class="bi bi-trash text-light"></i><i class="fa-solid fa-trash-can"></i> Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
     </form>
        </div>

    </div>
  </div>
</div>

  <!--******************************** Edit Modal ********************************-->

     <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card" style="">
  <div class="card-header"><h5>Edit Job </h5></div>
  <div class="card-body">
      
  <form action="{{ url('/update-job') }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="editid" id="jobid" value=""  />

       <div class="row">
       <div class="col-4 col-md-4">
  
        <label>Company Name</label></br>
        <input type="text" name="company" id="company2" class="form-control" require></br>
        <label>Locatiom</label></br>
        <input type="text" name="location" id="location2" class="form-control" require></br>
        <label>Position Title</label></br>
        <input type="text" name="title" id="title2" class="form-control" require></br>
        <label>Category</label></br>
        <input type="text" name="category" id="category2" class="form-control" require></br>

       </div>

        <div class="col-4 col-md-4">

        <label>Job Description</label></br>
        <textarea name="jobd" id="jobd2" class="form-control" require></textarea></br>
        <label>Qualification/Experience</label></br>
        <textarea name="qf" id="qf2" class="form-control" require></textarea></br>
        <label>Job Type</label></br>

        <select class="form-select" name="jobt" id="jobt2" aria-label="Default select example">
        <option selected>Select Type</option>
        <option value="Part-Time">Part-Time</option>
        <option value="Full-Time">Full-Time</option>
        </select><br>

        <label>Gender</label></br>
        <select class="form-select" name="gender" id="gender2" aria-label="Default select example">
        <option selected>Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option></br> 
        </select><br>
        </div>

        <!-- <label>Job Status</label></br>
        <input type="text" name="js" id="js" class="form-control" require></br> -->

        <div class="col-4 col-md-4">
          
        <label>Vacancy</label></br>
        <input type="text" name="vacancy" id="vacancy2" class="form-control" require></br>
        <label>Salary</label></br>
        <input type="text" name="salary" id="salary2" class="form-control" require></br>
        <label>Application Deadline</label></br>
        <input type="text" name="ad" id="ad2" class="form-control" require></br>
        <label>Joining Date</label></br>
        <input type="text" name="joind" id="joind2" class="form-control" require></br>
        </div>
        <br>
      </div>
      <!-- <input type="submit" value="Save" class="btn btn-success" style="margin-left: 24rem; width: 20rem;"></br> -->
    </div>
</div>
</div>
      <div class="modal-footer">
      <!-- <button type="submit" class="btn btn-success"> Save </button> -->
      <input type="submit" value="Update" class="btn btn-success"></br>
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

      </form>
    </div>
  </div>
</div>

<!--******************************** View Modal ********************************-->

<div class="modal fade" id="viewmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card" style="">
  <div class="card-header"><h5> View User Data </h5></div>
  <div class="card-body">

      <ol class="list-group list-group-numbered">

        <li class="list-group-item" id="company1" > hii </li>
        <li class="list-group-item" id="location1" >  </li>
        <li class="list-group-item" id="title1" >   </li>
        <li class="list-group-item" id="category1" >   </li>

        <li class="list-group-item" id="jobd1" >  </li>
        <li class="list-group-item" id="qf1" >  </li>
        <li class="list-group-item" id="jobt1" >   </li>
        <li class="list-group-item" id="gender1" >   </li>

        <li class="list-group-item" id="vacancy1" >  </li>
        <li class="list-group-item" id="salary1" >  </li>
        <li class="list-group-item" id="ad1" >   </li>
        <li class="list-group-item" id="joind1" >   </li>

      </ol>
  
  </div>
</div>
</div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



  <!--******************************** All Modals Script ********************************-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
  
  $(document).ready(function()
    {

      // // View
      $(document).on('click', '.view', function()
      {
        var userid= $(this).val();
        //alert(userid);
        $('#viewmodal').modal('show');

        $.ajax({
          type : "GET",
          url : "/view-job/"+userid,
          success : function(response){
             console.log(response);
             console.log(response.jobsboards.userid);
            // $('#userid').val(userid);
             document.getElementById("company1").innerHTML = response.jobsboards.company;
             document.getElementById("location1").innerHTML = response.jobsboards.location;
             document.getElementById("title1").innerHTML = response.jobsboards.title;
             document.getElementById("category1").innerHTML = response.jobsboards.category;

             document.getElementById("jobd1").innerHTML = response.jobsboards.jobd;
             document.getElementById("qf1").innerHTML = response.jobsboards.qf;
             document.getElementById("jobt1").innerHTML = response.jobsboards.jobt;
             document.getElementById("gender1").innerHTML = response.jobsboards.gender;

             document.getElementById("vacancy1").innerHTML = response.jobsboards.vacancy;
             document.getElementById("salary1").innerHTML = response.jobsboards.salary;
             document.getElementById("ad1").innerHTML = response.jobsboards.ad;
             document.getElementById("joind1").innerHTML = response.jobsboards.joind;
             //$('#viewname').val(response.users.name);
            // $('#viewemail').val(response.users.viewemail);
            // $('#viewpass').val(response.users.viewpass);
            // $('#view-admin').val(response.users.view-admin);

          }
        });

      });


      // // Edit
      $(document).on('click', '.edit', function()
      {
        var jobid= $(this).val();
        // alert(jobid);
        $('#editmodal').modal('show');

        $.ajax({
          type : "GET",
          url : "/edit-job/"+jobid,
          success : function(response){
            console.log(response);
             console.log(response.jobsboards.jobid);
            $('#jobid').val(jobid);
            $('#company2').val(response.jobsboards.company);
            $('#location2').val(response.jobsboards.location);
            $('#title2').val(response.jobsboards.title);
            $('#category2').val(response.jobsboards.category);

            $('#jobd2').val(response.jobsboards.jobd);
            $('#qf2').val(response.jobsboards.qf);
            $('#jobt2').val(response.jobsboards.jobt);
            $('#gender2').val(response.jobsboards.gender);

            $('#vacancy2').val(response.jobsboards.vacancy);
            $('#salary2').val(response.jobsboards.salary);
            $('#ad2').val(response.jobsboards.ad);
            $('#joind2').val(response.jobsboards.joind);


          }
        });

      });

       // Delete
       $(document).on('click', '.delete', function()
      {
        var userid= $(this).val();
        // alert(userid);
        $('#deletemodal').modal('show');
        $('#id3').val(userid);
        console.log(userid);
      });

    });
</script>

<!--******************************** Bulk Delete Script ********************************-->

<script>
function onBulk(){

var x= document.getElementsByName('del[]');
 console.log(x);

 var values = [];
      // looping through all checkboxes
      for (var i = 0; i < x.length; i++) {
if (x[i].checked == true) {
    values.push(x[i].value);
 }
 }
      console.log(values);
      document.getElementById("bulkid").value=values;
      // $('#bulkid').val(values);
      // console.log(y);   <input type="hidden" name="iddel" id="bulkid" class="form-control"  /><br />

  }

</script>

 <!--******************************** Sort table Script ********************************-->

 <script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
    
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
     
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
     
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

<!--******************************** Select all table Script ********************************-->

<!-- <script src="jquery-3.6.0.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
  $("#delete").change(function()
  {
  $("input:checkbox").prop("checked", $(this).prop("checked")) 
   })
</script>

 <!--******************************** Search table Script ********************************-->
 <script type= "text/javascript" >

  $(document).ready(function()
  {
    setTimeout(function() 
    {
      $("div.alert1")->remove();
    }, 5000);
  });

 </script>


<!--******************************** Search table Script ********************************-->

<script>
  function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, td1,td2,td3, i;
            input = document.getElementById("myInput");
            filter = input.value;
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                td1 = tr[i].getElementsByTagName("td")[2];
                td2 = tr[i].getElementsByTagName("td")[3];
                td3 = tr[i].getElementsByTagName("td")[4];

                if(td && td1 && td2 && td3)
                {
                var id = td.textContent || td.innerHTML;
                var price = td1.textContent || td1.innerHTML;
                var row = td2.textContent || td2.innerHTML;
                var plot = td3.textContent || td3.innerHTML;

                if((id.indexOf(filter) > -1) || (price.indexOf(filter) > -1) || (row.indexOf(filter) > -1) || (plot.indexOf(filter) > -1)){
                    tr[i].style.display = ""; // show
                }else{
                    tr[i].style.display = "none"; // hide
                }
            }
        }
      }

</script> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
        </ul>
      </div>
    </footer> -->

    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="theme-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="theme-assets/js/scripts/charts/chartjs/bar/column.js" type="text/javascript"></script>
    <script src="theme-assets/js/scripts/charts/chartjs/bar/bar.js" type="text/javascript"></script>
    <script src="theme-assets/js/scripts/charts/chartjs/line/line.js" type="text/javascript"></script>
    <script src="theme-assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.js" type="text/javascript"></script>
    <script src="theme-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>