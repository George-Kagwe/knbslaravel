<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KNBS </title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
     <meta name="csrf-token" content="{{ csrf_token() }}">

         <style>

                  #snackbar {
                      visibility: hidden;
                      min-width: 250px;
                      margin-left: -125px;
                      background-color: #560027;
                      color: #fff;
                      text-align: center;
                      border-radius: 2px;
                      padding: 16px;
                      position: fixed;
                      z-index: 1;
                      left: 50%;
                      top: 30px;
                      font-size: 17px;
                  }

                  #snackbar.show {
                      visibility: visible;
                      -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
                      animation: fadein 0.5s, fadeout 0.5s 2.5s;
                  }

                  @-webkit-keyframes fadein {
                      from {top: : 0; opacity: 0;} 
                      to {top: 30px; opacity: 1;}
                  }

                  @keyframes fadein {
                      from {top: 0; opacity: 0;}
                      to {top: 30px; opacity: 1;}
                  }

                  @-webkit-keyframes fadeout {
                      from {top: 30px; opacity: 1;} 
                      to {top: 0; opacity: 0;}
                  }

                  @keyframes fadeout {
                      from {top: 30px; opacity: 1;}
                      to {top: 0; opacity: 0;}
                  }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>KNBS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <!-- <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div> -->
              <div class="profile_info">
                <span>Welcome,</span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               
                <ul class="nav side-menu">
                    <li><a href="{{ route('Finance/home') }}"><i class="fa fa-money"></i>Public Finance</a></li>
                    <li><a href="{{ route('Education/home') }}"><i class="fa fa-money"></i>Education</a></li>
                    <li><a href="{{ route('Health/home') }}"><i class="fa fa-money"></i>Public Health</a></li>
                     <li><a href="{{ route('Agriculture/home') }}"><i class="fa fa-money"></i>Agriculture</a></li>
                    <li><a href="{{ route('Population/home') }}"><i class="fa fa-money"></i>Population</a></li>
                    <li><a href="{{ route('Governance/home') }}"><i class="fa fa-money"></i>Governance</a></li>
                    <li><a href="{{ route('ICT/home') }}"><i class="fa fa-money"></i>ICT</a></li>
                     <li><a href="{{ route('Environment/home') }}"><i class="fa fa-money"></i>Environment And <br>Natural Resources</a></li>
                    <li><a href="{{ route('Manufacturing/home') }}"><i class="fa fa-money"></i>Manufacturng</a></li>
                    <li><a href="{{ route('Energy/home') }}"><i class="fa fa-money"></i>Energy</a></li>
                     <li><a href="{{ route('Labour/home') }}"><i class="fa fa-money"></i>Labour</a></li>
                    <li><a href="{{ route('CPI/home') }}"><i class="fa fa-money"></i>Consumer Price Index</a></li>
                    <li><a href="{{ route('Administrative/home') }}"><i class="fa fa-money"></i>Administrative and Political</a></li>
                     <li><a href="{{ route('Trade/home') }}"><i class="fa fa-money"></i>Trade</a></li>
                    <li><a href="{{ route('Tourism/home') }}"><i class="fa fa-money"></i>Tourism</a></li>
                    <li><a href="{{ route('Building/home') }}"><i class="fa fa-money"></i>Building and Construction</a></li>
                    <li><a href="{{ route('Money/home') }}"><i class="fa fa-money"></i>Money and Banking</a></li>
                     <li><a href="{{ route('Transport/home') }}"><i class="fa fa-money"></i>Transport</a></li>
                     <li><a href="{{ route('Poverty/home') }}"><i class="fa fa-money"></i>Poverty</a></li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   <!--  <li><a href="javascript:;"> Profile</a></li> -->
                   <!--  <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li> -->
                    <li><a href="javascript:;">Help</a></li>
                   
                     <li> <a href=""
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pull-right"></i>
                                    </a>


                      <form id="logout-form" action="" method="POST" style="display: none;">
                                        @csrf
                      </form>
                    </li>
                  </ul>
                </li>

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

 <!-- page content -->
    
 <!-- page content -->
    <div class="right_col" role="main">
            <div class="container main"> 
              

                                
                                
                <div class="container" style="background:#ffffff">
                  <div id="snackbar">Success</div>

                  <div class="row">
                     <div class="col-lg-12">
                       
     
                              <h5><center>population that did not use internet and their reason</center></h5>
                              <br />
                              <button class="btn btn-danger" onclick="add()"><i class="glyphicon glyphicon-plus"></i> Add New Record</button>
                              <br />
                              <br />
                              <table id="table_id" class="table table-striped table-bordered" cellspacing="0"       width="100%">
                                      <thead>
                                        <tr>
                                           <th>ID</th>                                          
                                           <th>County Name</th>
                                           <th>Too Young</th>                     
                                           <th>Make App</th>
                                           <th>get Info</th>
                                           <th>newspaper</th>
                                           <th>selling</th>
                                           <th>banking</th>
                                           <th>voip</th>
                                           <th>ordering</th>
                                           <th>other</th>
                                           <th>course</th>
                                           <th>informative</th>
                                           <th>social net</th>
                                           <th>movie</th>
                                           <th>search work</th>
                                           <th>write article</th>
                                           <th>Population</th>
                                           <th style="width:85px;">Action
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach($net_purposes as $net){?>
                                             <tr>
                                                <td>{{$net->distribution_id}}</td>
                                                <td>{{$net->county_name}}</td>
                                                <td>{{$net->seek_info}}</td>
                                                <td>{{$net->make_app}}</td>
                                                <td>{{$net->get_info}}</td>
                                                <td>{{$net->newspaper}}</td>
                                                <td>{{$net->selling}}</td>
                                                <td>{{$net->banking}}</td>
                                                <td>{{$net->voip}}</td>
                                                <td>{{$net->ordering}}</td>
                                                <td>{{$net->other}}</td>
                                                <td>{{$net->course}}</td>
                                                <td>{{$net->informative}}</td>
                                                <td>{{$net->social_nets}}</td>
                                                <td>{{$net->movie}}</td>
                                                <td>{{$net->search_work}}</td>
                                                <td>{{$net->write_article}}</td>
                                                <td>{{$net->population}}</td>
                                                <td>
                                                  <button class="btn btn-success" onclick="edit(<?php echo $net->distribution_id;?>)">Update Record</button>
                                                </td>
                                              </tr>
                                             <?php }?>
                                       </tbody>
                                      <tfoot>
                                        <tr>
                                           <th>ID</th>                                          
                                           <th>County Name</th>
                                           <th>Too Young</th>                      
                                           <th>Make App</th>
                                           <th>get Info</th>
                                           <th>newspaper</th>
                                           <th>selling</th>
                                           <th>banking</th>
                                           <th>voip</th>
                                           <th>ordering</th>
                                           <th>other</th>
                                           <th>course</th>
                                           <th>informative</th>
                                           <th>social net</th>
                                           <th>movie</th>
                                           <th>search work</th>
                                           <th>write article</th>
                                           <th>Population</th>
                                           <th style="width:85px;">Action
                                          </th>
                                         
                                        </tr>
                                      </tfoot>
                              </table>
                 
                      </div>
                                 
                  </div>
                                    
                </div>
                        
            </div>

          
              <script type="text/javascript" src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
              <script type="text/javascript" src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
              <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
              <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
              <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>

            <!-- Sian starts here -->
            <script type="text/javascript">
                      //$(document).ready( function () {
                     //      $(function() {
                    //$('select[name=counties]').change(function() {
                     

                     //   var urls = '{{ route("fetchCounties", ":id") }}'; 
                       // var id =$(this).val();
                        //var  url =urls.replace(':id', id);

//                        $.get(url, function(data) {
  //                          var select = $('form select[name=seek_info]');
                            
    //                        select.empty();

      //                      $.each(JSON.parse(data),function(key,value) {
                              
        //                         select.append('<option value=' + value.subcounty_id + '>' +value.seek_info+ '</option>');
          //                  });
            //            });
              //      });
                //        });
$(document).ready( function () {
                        $('#form').bootstrapValidator({
                                      feedbackIcons: {
                                          valid: 'glyphicon glyphicon-ok',
                                          invalid: 'glyphicon glyphicon-remove',
                                          validating: 'glyphicon glyphicon-refresh'
                                      },
                                      fields: {
                                          research: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of research '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          seek_info: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that seek info'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          make_app: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that Make App'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          get_info: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those that get info '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          newspaper: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those that cite its newspaper '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           selling: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that cite selling '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          banking: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that banking '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          voip: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that say voip '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          ordering: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that cite ordering '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                         
                                          other: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that cite other reasons '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           course: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that have no reasons '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           population: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of Population '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           
                                            informative: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that say informative '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          social_nets: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that cite social nets '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                         
                                          write_article: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that cite write article  '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           movie: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that cite movie '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           search_work: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of search work '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                      }
                                  });
                          $('#table_id').DataTable();
                      });
                      var save_method; //for save method string
                      var table;


                      function add()
                      {
                        save_method = 'add';
                        $('#form')[0].reset(); // reset form on modals
                        $('#modal_form').modal('show'); // show bootstrap modal
                      //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
                      }

                      function edit(id)
                      {
                        var url = '{{ route("fetchPopNoNetByPurpose", ":id") }}';
                        
                        save_method = 'update';
                        $('#form')[0].reset(); // reset form on modals

                        //Ajax Load data from ajax
                        $.ajax({
                          url : url.replace(':id', id),
                          type: "GET",
                          dataType: "JSON",
                          success: function(data)
                          {

                              $('[name="id"]').val(data.distribution_id);
                              $('[name="county_name"]').val(data.county_id);
                              $('[name="research"]').val(data.research);
                              $('[name="seek_info"]').val(data.seek_info);  
                              $('[name="make_app"]').val(data.make_app);
                              $('[name="get_info"]').val(data.get_info);
                              $('[name="newspaper"]').val(data.newspaper);
                              $('[name="selling"]').val(data.selling);
                              $('[name="banking"]').val(data.banking);
                              $('[name="voip"]').val(data.voip);
                              $('[name="ordering"]').val(data.ordering);
                              $('[name="other"]').val(data.other);
                              $('[name="course"]').val(data.course);
                              $('[name="population"]').val(data.population);
                              $('[name="informative"]').val(data.informative);
                              $('[name="write_article"]').val(data.write_article);
                              $('[name="social_nets"]').val(data.social_nets);
                              $('[name="movie"]').val(data.movie);
                              $('[name="search_work"]').val(data.search_work);
                              $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                              $('.modal-title').text('Edit  details'); // Set title to Bootstrap modal title

                          },
                          error: function (jqXHR, textStatus, errorThrown)
                          {
                              alert('Error get data from ajax');
                          }
                      });
                      }

 
 
                      function save()
                      {
                        var url;

                        if(save_method == 'add')
                        {
                            url = "{{ route('storePopNoNetByPurpose') }}";

                        }
                        else
                        {
                           
                          //  url = '{{ route("updateSugar", ":id") }}';
                          // url=url.replace(':id', $('[name="id"]').val(data.area_id));
                          url = "{{ route('updatePopNoNetByPurpose') }}";
                        }
                          
                      
                         // ajax adding data to database
                         var data = $("#form").serialize();
                         console.log(data);

                            $.ajax({
                              headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                  },
                              url : url,
                              type: "POST",
                              data: data,
                              dataType: "JSON",
                              success: function(result)
                              {
                       
                              if(result.errors)
                                  {
                        jQuery('.alert-danger').html('');

                        jQuery.each(result.errors, function(key, value){
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append('<li>'+value+'</li>');
                        });
                    }
                    else
                    {
                        jQuery('.alert-danger').hide();
                         $('#open').hide();
                         $('#myModal').modal('hide');
                         $('#modal_form').modal('hide');
                         location.reload();// for reload a page
                         myFunction();
                    }


                          
                          }});}

                     

                      function myFunction() {
                              var x = document.getElementById("snackbar");
                              x.className = "show";
                              setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
                       }

            </script>

              <!-- Bootstrap modal -->
              <div class="modal fade" id="modal_form" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Add New Record</h3>
                  </div>
                  <div class="modal-body form">
                      <form action="#" id="form" class="form-horizontal">
                        <div class="alert alert-danger" style="display:none;"></div>
                            <input type="hidden" value="" name="id"/>
                            <div class="form-body">

                              <div class="form-group">
                                <label class="control-label col-md-3">County</label>
                                <div class="col-md-9">
                                  <select class="form-control" id="county_name" name="county_name">
                                    <option value="">please select</option>
                                        <?php foreach($counties as $counties){?>
                                            <option value="{{$counties->county_id}}">{{$counties->county_name}}</option>
                                        <?php }?>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3">research</label>
                                <div class="col-md-9">
                                  <input name="research"  class="form-control" type="text">
                                </div>
                              </div>
                           
                              <div class="form-group">
                                <label class="control-label col-md-3">Seek Info</label>
                                <div class="col-md-9">
                                  <input name="seek_info"  class="form-control" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">Make App</label>
                                <div class="col-md-9">
                                  <input name="make_app"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">get Info</label>
                                <div class="col-md-9">
                                  <input name="get_info"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">newspaper</label>
                                <div class="col-md-9">
                                  <input name="newspaper"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">banking</label>
                                <div class="col-md-9">
                                  <input name="banking"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">selling</label>
                                <div class="col-md-9">
                                  <input name="selling"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">voip</label>
                                <div class="col-md-9">
                                  <input name="voip"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">ordering</label>
                                <div class="col-md-9">
                                  <input name="ordering"  class="form-control" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">other</label>
                                <div class="col-md-9">
                                  <input name="other"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">course</label>
                                <div class="col-md-9">
                                  <input name="course"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Population</label>
                                <div class="col-md-9">
                                  <input name="population"  class="form-control" type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3">informative</label>
                                <div class="col-md-9">
                                  <input name="informative"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">write_article</label>
                                <div class="col-md-9">
                                  <input name="write_article"  class="form-control" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">social_nets</label>
                                <div class="col-md-9">
                                  <input name="social_nets"  class="form-control" type="text">
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-md-3">search_work</label>
                                <div class="col-md-9">
                                  <input name="search_work"  class="form-control" type="text">
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-md-3">movie</label>
                                <div class="col-md-9">
                                  <input name="movie"  class="form-control" type="text">
                                </div>
                      </form>
                  </div>
                      <div class="modal-footer">
                        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
              <!-- End Bootstrap modal -->

            <!-- Siana ends here -->
        
   </div>
  <!-- page content -->   

  <!-- page content -->
   


 <!-- footer content -->
        <footer>
         <!--  <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div> -->
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
   <!-- <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script> --> -->
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{asset('vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('vendors/DateJS/build/date.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{asset('build/js/custom.min.js')}}"></script>
  </body>
</html>