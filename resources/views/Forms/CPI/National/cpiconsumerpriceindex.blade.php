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
                       
     
                              <h5><center>CPI Consumer Price Index</center></h5>
                              <br />
                              <button class="btn btn-danger" onclick="add()"><i class="glyphicon glyphicon-plus"></i> Add New Record</button>
                              <br /> 
                              <br />
                              <table id="table_id" class="table table-striped table-bordered" cellspacing="0"       width="100%">
                                      <thead>
                                        <tr>
                                         
                                           <th>ID</th>                                          
                                           <th>Month</th>
                                           
                                            <th>Group</th>
                                            <th>Food and Non Alcoholic Beverages</th>
                                            <th>Alcoholic Beverages Tobacco Narcotics</th>
                                            <th>Clothing and Footwear</th>
                                            <th>Housing Water Electricity Gas And Other Fuels</th>
                                            <th>Furnishings Household Equipment Routine Household Maintenance</th>
                                            <th>Health</th>
                                            <th>Transport</th>
                                            <th>Communication</th>
                                            <th>Recreation and Culture</th>
                                            <th>Education</th>
                                            <th>Restaurant and Hotels</th>
                                            <th>Miscellaneous Goods and Services</th>
                                            <th>Total</th>
                                           
                                           <th>Year</th>
                                           <th style="width:85px;">Action
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach($post as $post){?>
                                             <tr>
                                              <td>{{$post->cpi_retail_price_id}}</td>
                                              <td>{{$post->month}}</td>
                                              <td>{{$post->group}}</td>
                                              <td>{{$post->food_and_non_alcoholic_beverages}}</td>
                                              <td>{{$post->alcoholic_beverages_tobacco_narcotics}}</td>                                                                    <td>{{$post->clothing_and_footwear}}</td> 
                                              <td>{{$post->housing_water_electricity_gas_and_other_fuels}}</td> 
                                              <td>{{$post->furnishings_household_equipment_routine_household_maintenance}}</td> 
                                              <td>{{$post->health}}</td> 
                                              <td>{{$post->transport}}</td> 
                                              <td>{{$post->communication}}</td> 
                                              <td>{{$post->recreation_and_culture}}</td> 
                                              <td>{{$post->education}}</td> 
                                              <td>{{$post->restaurant_and_hotels}}</td> 
                                              <td>{{$post->miscellaneous_goods_and_services}}</td> 
                                              <td>{{$post->total}}</td> 
                                          
                                              <td>{{$post->year}}</td> 
                                                <td>
                                                  <button class="btn btn-success" onclick="edit(<?php echo $post->cpi_retail_price_id;?>)">Update Record</button>
                                               
                                                </td>
                                              </tr>
                                             <?php }?>



                                      </tbody>

                                      <tfoot>
                                        <tr>
                                          
                                           <th>ID</th>                                          
                                           <th>Month</th>
                                           
                                            <th>Group</th>
                                            <th>Food and Non Alcoholic Beverages</th>
                                            <th>Alcoholic Beverages Tobacco Narcotics</th>
                                            <th>Clothing and Footwear</th>
                                            <th>Housing Water Electricity Gas And Other Fuels</th>
                                            <th>Furnishings Household Equipment Routine Household Maintainance</th>
                                            <th>Health</th>
                                            <th>Transport</th>
                                            <th>Communication</th>
                                            <th>Recreation and Culture</th>
                                            <th>Education</th>
                                            <th>Restaurant and Hotels</th>
                                            <th>Miscellaneous Goods and Services</th>
                                            <th>Total</th>
                                           
                                           <th>Year</th>
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
                      $(document).ready( function () {

                        $('#form').bootstrapValidator({
                                      feedbackIcons: {
                                          valid: 'glyphicon glyphicon-ok',
                                          invalid: 'glyphicon glyphicon-remove',
                                          validating: 'glyphicon glyphicon-refresh'
                                      },
                                      fields: {
                                          month: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a letter '
                                                  },
                                                   alpha_dash: {                                                    
                                                    message: 'Must be a letter'
                                                }
                                              }
                                          },
                                          group: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a letter '
                                                  },
                                                   alpha_dash : {                                                    
                                                    message: 'Must be a letter'
                                                }
                                              }
                                          },

                                           food_and_non_alcoholic_beverages: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric : {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                         
                                         alcoholic_beverages_tobacco_narcotics: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric : {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
 clothing_and_footwear: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric : {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
 housing_water_electricity_gas_and_other_fuels: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric : {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
 furnishings_household_equipment_routine_household_maintenance: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric : {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
 health: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric : {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
 transport: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric : {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
 communication: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric : {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
 recreation_and_culture: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric : {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
 education: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric : {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
 restaurant_and_hotels: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric : {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
 miscellaneous_goods_and_services: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric : {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
 total: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric : {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
 
                                           
                                      }
                                  });
                          $('#table_id').DataTable();
                      } );
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
                        var url = '{{ route("fetchcpi", ":id") }}';
                        
                        save_method = 'update';
                        $('#form')[0].reset(); // reset form on modals

                        //Ajax Load data from ajax
                        $.ajax({
                          url : url.replace(':id', id),
                          type: "GET",
                          dataType: "JSON",
                          success: function(data)
                          {

                              $('[name="id"]').val(data.cpi_retail_price_id);
                              $('[name="month"]').val(data.month);
                              $('[name="group"]').val(data.group);
                              $('[name="food_and_non_alcoholic_beverages"]').val(data.food_and_non_alcoholic_beverages);
                              $('[name="alcoholic_beverages_tobacco_narcotics"]').val(data.alcoholic_beverages_tobacco_narcotics);
                              $('[name="clothing_and_footwear"]').val(data.clothing_and_footwear);
                              $('[name="housing_water_electricity_gas_and_other_fuels"]').val(data.housing_water_electricity_gas_and_other_fuels);
                              $('[name="furnishings_household_equipment_routine_household_maintenance"]').val(data.furnishings_household_equipment_routine_household_maintenance);
                              $('[name="health"]').val(data.health);
                              $('[name="transport"]').val(data.transport);
                              $('[name="communication"]').val(data.communication);
                              $('[name="recreation_and_culture"]').val(data.recreation_and_culture); 
                              $('[name="education"]').val(data.education);
                              $('[name="restaurant_and_hotels"]').val(data.restaurant_and_hotels);
                              $('[name="miscellaneous_goods_and_services"]').val(data.miscellaneous_goods_and_services);
                              $('[name="total"]').val(data.total);  
                              $('[name="year"]').val(data.year);                                         
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
                            url = "{{ route('storecpi') }}";

                        }
                        else
                        {
                           
                          //  url = '{{ route("updateSugar", ":id") }}';
                          // url=url.replace(':id', $('[name="id"]').val(data.area_id));
                          url = "{{ route('updatecpi') }}";
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
                        <div class="alert alert-danger" style="display:none"></div>
                            <input type="hidden" value="" name="id"/>
                            <div class="form-body">
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">Month</label>
                                <div class="col-md-9">
                                 
                                 <input name="month" class="form-control" type="text">
                                  @if ($errors->has('month'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('month') }}</strong>
                                    </span>
                                @endif
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Group</label>
                                <div class="col-md-9">
                                  <input name="group"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Food and Non Alcoholic Beverages</label>
                                <div class="col-md-9">
                                  <input name="food_and_non_alcoholic_beverages"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Alcoholic Beverages Tobacco Narcotics</label>
                                <div class="col-md-9">
                                  <input name="alcoholic_beverages_tobacco_narcotics"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Clothing And Footwear</label>
                                <div class="col-md-9">
                                  <input name="clothing_and_footwear"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Housing Water Electricity Gas And Other Fuels</label>
                                <div class="col-md-9">
                                  <input name="housing_water_electricity_gas_and_other_fuels"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Furnishings Household Equipment Routine Household Maintainance</label>
                                <div class="col-md-9">
                                  <input name="furnishings_household_equipment_routine_household_maintenance"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Health</label>
                                <div class="col-md-9">
                                  <input name="health"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Transport</label>
                                <div class="col-md-9">
                                  <input name="transport"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Communication</label>
                                <div class="col-md-9">
                                  <input name="communication"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Recreation And Culture</label>
                                <div class="col-md-9">
                                  <input name="recreation_and_culture"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Education</label>
                                <div class="col-md-9">
                                  <input name="education"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Restaurant And Hotels</label>
                                <div class="col-md-9">
                                  <input name="restaurant_and_hotels"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Miscellaneous Goods And Services</label>
                                <div class="col-md-9">
                                  <input name="miscellaneous_goods_and_services"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Total</label>
                                <div class="col-md-9">
                                  <input name="total"  class="form-control" type="text">
                                </div>
                              </div>
                            
                              </div>
                                  
                            
                              
                              
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">Year</label>
                                <div class="col-md-9">
                                  <select class="form-control" id="year" name="year">
                                    <option value="">please select</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                  </select>
                                </div>
                              </div>

                              

                              

                            
                      </form>
                  

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