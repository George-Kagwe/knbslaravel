fet<!DOCTYPE html>
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
                       
     
                                 <h5><center>Value of Agricultural Inputs</center></h5>
                              <br />
                              <button class="btn btn-danger" onclick="add()"><i class="glyphicon glyphicon-plus"></i> Add New Record</button>
                              <br />
                              <br />
                              <table id="table_id" class="table table-striped table-bordered" cellspacing="0"       width="150%">
                                      <thead>
                                        <tr>
                                         
                                           <th>ID</th>                                          
                                           <th>Accounting ,Secretarial and Auditing Services</th>
                                           <th>Aerial Spraying</th>
                                           <th>Artificial Insemination</th>
                                            <th>Bags</th>
                                           <th>Farm planning and Survey Services</th>
                                           <th>Fertilizers</th>
                                           <th>Fuel </th>
                                           <th>Government Seed Inspection Services</th>
                                           <th>Government Veterinary Inoculation Services</th>
                                           <th>Livestock Drugs and Medicines</th>
                                           <th>Manufactured Feeds
                                           </th>
                                           <th>Marketing Research and Publicity</th>
                                            <th>Office Expenses</th>
                                            <th>Other</th>
                                            <th>Other Material Inputs</th>
                                            <th>Other Agricultural Chemicals</th>
                                            <th>Power</th>
                                            <th>Private Vetinary Services</th>
                                            <th>Seeds</th>
                                            <th>Small Implements</th>
                                            <th>Spares and Maintenance of Machinery</th>

                                           <th>Tractor Services</th>
                                           <th>Transportation</th>
                                           <th>Year</th>
                                           <th style="width:85px;">Action
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach($post as $post){?>
                                             <tr>
                                                <td>{{$post->value_of_agricultural_inputs_id}}</td>
                                                <td>{{$post->accounting_secretarial_and_auditing_services}}</td>
                                                <td>{{$post->aerial_spraying}}</td>
                                                <td>{{$post->artificial_insemination}}</td>
                                                <td>{{$post->bags}}</td>
                                                <td>{{$post->farm_planning_and_survey_services}}</td>
                                                <td>{{$post->fertilizers}}</td>
                                               <td>{{$post->fuel}}</td>
                                                <td>{{$post->government_seed_inspection_services}}</td>
                                                <td>{{$post->government_veterinary_inoculation_services}}</td>
                                               <td>{{$post->livestock_drugs_and_medicines}}</td>
                                                <td>{{$post->manufactured_feeds}}</td>
                                               <td>{{$post->marketing_research_and_publicity}}</td>
                                                <td>{{$post->office_expenses}}</td>
                                                <td>{{$post->other}}</td>
                                                <td>{{$post->other_material_inputs}}</td>
                                                <td>{{$post->other_agricultural_chemicals}}</td>  
                                                <td>{{$post->power}}</td>
                                                <td>{{$post->private_veterinary_services}}</td>
                                                <td>{{$post->seeds}}</td>
                                                <td>{{$post->small_implements}}</td>
                                                <td>{{$post->spares_and_maintenance_of_machinery}}</td>
                                                <td>{{$post->tractor_services}}</td>
                                                <td>{{$post->transportation}}</td>       
                                                <td>{{$post->year}}</td>                                  

                                                <td>
                                                  <button class="btn btn-success" onclick="edit(<?php echo $post->value_of_agricultural_inputs_id;?>)">Update Record</button>
                                               
                                                </td>
                                              </tr>
                                             <?php }?>



                                      </tbody>

                                      <tfoot>
                                        <tr>
                                           <th>ID</th>                                          
                                           <th>Accounting ,Secretarial and Auditing Services</th>
                                           <th>Aerial Spraying</th>
                                           <th>Artificial Insemination</th>
                                            <th>Bags</th>
                                           <th>Farm planning and Survey Services</th>
                                           <th>Fertilizers</th>
                                           <th>Fuel </th>
                                           <th>Government Seed Inspection Services</th>
                                           <th>Government Veterinary Inoculation Services</th>
                                           <th>Livestock Drugs and Medicines</th>
                                           <th>Manufactured Feeds
                                           </th>
                                           <th>Marketing Research and Publicity</th>
                                            <th>Office Expenses</th>
                                            <th>Other</th>
                                            <th>Other Material Inputs</th>
                                            <th>Other Agricultural Chemicals</th>
                                            <th>Power</th>
                                            <th>Private Vetinary Services</th>
                                            <th>Seeds</th>
                                            <th>Small Implements</th>
                                            <th>Spares and Maintenance of Machinery</th>

                                           <th>Tractor Services</th>
                                           <th>Transportation</th>
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
                                          accounting_secretarial_and_auditing_services: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          aerial_spraying: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          artificial_insemination: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                             bags: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          farm_planning_and_survey_services: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          fertilizers: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                              fuel: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          government_seed_inspection_services: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          government_veterinary_inoculation_services: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                             insurance: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          livestock_drugs_and_medicines: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                            manufactured_feeds: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          marketing_research_and_publicity: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          office_expenses: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                             other: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          other_material_inputs: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                         other_agricultural_chemicals: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },


                                            power: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },

                                            private_veterinary_services: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },

                                            seeds: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },

                                            small_implements: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },

                                            spares_and_maintenance_of_machinery: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },

                                            tractor_services: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           transportation: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          }

                                          
                                          
                                          
                                           
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
                        var url = '{{ route("fetchInputs", ":id") }}';
                        
                        save_method = 'update';
                        $('#form')[0].reset(); // reset form on modals

                        //Ajax Load data from ajax
                        $.ajax({
                          url : url.replace(':id', id),
                          type: "GET",
                          dataType: "JSON",
                          success: function(data)
                          {

                              $('[name="id"]').val(data.value_of_agricultural_inputs_id);
                              $('[name="accounting_secretarial_and_auditing_services"]').val(data.accounting_secretarial_and_auditing_services);
                              $('[name="aerial_spraying"]').val(data.aerial_spraying);
                              $('[name="artificial_insemination"]').val(data.artificial_insemination);
                              $('[name="bags"]').val(data.bags);
                              $('[name="farm_planning_and_survey_services"]').val(data.farm_planning_and_survey_services);
                              $('[name="fertilizers"]').val(data.fertilizers);
                              $('[name="fuel"]').val(data.fuel);
                              $('[name="government_seed_inspection_services"]').val(data.government_seed_inspection_services);
                              $('[name="government_veterinary_inoculation_services"]').val(data.government_veterinary_inoculation_services);
                              
                              
                              $('[name="government_veterinary_inoculation_services"]').val(data.government_veterinary_inoculation_services);
                              $('[name="insurance"]').val(data.insurance);

                             $('[name="livestock_drugs_and_medicines"]').val(data.livestock_drugs_and_medicines);
                              $('[name="manufactured_feeds"]').val(data.manufactured_feeds);

                               $('[name="marketing_research_and_publicity"]').val(data.marketing_research_and_publicity);
                              $('[name="office_expenses"]').val(data.office_expenses);
                              $('[name="other"]').val(data.other);
                              $('[name="other_material_inputs"]').val(data.other_material_inputs);

                              $('[name="other_agricultural_chemicals"]').val(data.other_agricultural_chemicals);

                              $('[name="power"]').val(data.power);

                              $('[name="private_veterinary_services"]').val(data.private_veterinary_services);

                              $('[name="seeds"]').val(data.seeds);

                              $('[name="small_implements"]').val(data.small_implements );

                              $('[name="spares_and_maintenance_of_machinery"]').val(data.spares_and_maintenance_of_machinery);

                              $('[name="tractor_services"]').val(data.tractor_services);

                              $('[name="transportation"]').val(data.transportation);


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
                            url = "{{ route('storeInputs') }}";

                        }
                        else
                        {
                           
                  
                          url = "{{ route('updateInputs') }}";
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
                                <label class="control-label col-md-3">Accounting Secretarial and Auditing Services</label>
                                <div class="col-md-9">
                                 
                                 <input name="accounting_secretarial_and_auditing_services" class="form-control" type="text">
                                  @if ($errors->has('accounting_secretarial_and_auditing_services'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('accounting_secretarial_and_auditing_services') }}</strong>
                                    </span>
                                @endif
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Aerial Spraying</label>
                                <div class="col-md-9">
                                  <input name="aerial_spraying"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Artificial Insemination</label>
                                <div class="col-md-9">
                                  <input name="artificial_insemination"  class="form-control" type="text">
                                </div>
                              </div>
                              
                                    <div class="form-group">
                                <label class="control-label col-md-3">Bags</label>
                                <div class="col-md-9">
                                  <input name="bags"  class="form-control" type="text">
                                </div>
                              </div>
                                    <div class="form-group">
                                <label class="control-label col-md-3">Farm Planning and Survey Services</label>
                                <div class="col-md-9">
                                  <input name="farm_planning_and_survey_services"  class="form-control" type="text">
                                </div>
                              </div>

                                    <div class="form-group">
                                <label class="control-label col-md-3">Fertilizers</label>
                                <div class="col-md-9">
                                  <input name="fertilizers"  class="form-control" type="text">
                                </div>
                              </div>


                                    <div class="form-group">
                                <label class="control-label col-md-3">Fuel  </label>
                                <div class="col-md-9">
                                  <input name="fuel"  class="form-control" type="text">
                                </div>
                              </div>

                                    <div class="form-group">
                                <label class="control-label col-md-3">Government Seed Inspection Services</label>
                                <div class="col-md-9">
                                  <input name="government_seed_inspection_services"  class="form-control" type="text">
                                </div>
                              </div>


                                    <div class="form-group">
                                <label class="control-label col-md-3">Government Veterinary Inoculation Services</label>
                                <div class="col-md-9">
                                  <input name="government_veterinary_inoculation_services"  class="form-control" type="text">
                                </div>
                              </div>

                                    <div class="form-group">
                                <label class="control-label col-md-3">Insuarance</label>
                                <div class="col-md-9">
                                  <input name="insurance"  class="form-control" type="text">
                                </div>
                              </div>
                              
                                
                                    <div class="form-group">
                                <label class="control-label col-md-3">Livestock Drugs and Medicines</label>
                                <div class="col-md-9">
                                  <input name="livestock_drugs_and_medicines"  class="form-control" type="text">
                                </div>
                              </div>


                              <div class="form-group">
                                <label class="control-label col-md-3">Manufactured Feeds</label>
                                <div class="col-md-9">
                                  <input name="manufactured_feeds"  class="form-control" type="text">
                                </div>
                              </div>
                                <div class="form-group">
                                <label class="control-label col-md-3">Marketing Research and Publicity</label>
                                <div class="col-md-9">
                                  <input name="marketing_research_and_publicity"  class="form-control" type="text">
                                </div>
                              </div>



                                    <div class="form-group">
                                <label class="control-label col-md-3">Office Expenses</label>
                                <div class="col-md-9">
                                  <input name="office_expenses"  class="form-control" type="text">
                                </div>
                              </div>



                         
                                <div class="form-group">
                                <label class="control-label col-md-3">Other</label>
                                <div class="col-md-9">
                                  <input name="other"  class="form-control" type="text">
                                </div>
                              </div>

                                <div class="form-group">
                                <label class="control-label col-md-3">Other Material Inputs</label>
                                <div class="col-md-9">
                                  <input name="other_material_inputs"  class="form-control" type="text">
                                </div>
                              </div>


                                    <div class="form-group">
                                <label class="control-label col-md-3">Other Agricultural Chemicals</label>
                                <div class="col-md-9">
                                  <input name="other_agricultural_chemicals"  class="form-control" type="text">
                                </div>
                              </div>


                                        <div class="form-group">
                                <label class="control-label col-md-3">Power</label>
                                <div class="col-md-9">
                                  <input name="power"  class="form-control" type="text">
                                </div>
                              </div>


                               <div class="form-group">
                                <label class="control-label col-md-3">Private Vetinary Services</label>
                                <div class="col-md-9">
                                  <input name="private_veterinary_services"  class="form-control" type="text">
                                </div>
                              </div>

                                        <div class="form-group">
                                <label class="control-label col-md-3">Seeds</label>
                                <div class="col-md-9">
                                  <input name="seeds"  class="form-control" type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3">Small Implements</label>
                                <div class="col-md-9">
                                  <input name="small_implements"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Spares and Maintenance of Machinery</label>
                                <div class="col-md-9">
                                  <input name="spares_and_maintenance_of_machinery"  class="form-control" type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3">Tractor Services</label>
                                <div class="col-md-9">
                                  <input name="tractor_services"  class="form-control" type="text">
                                </div>
                              </div>
                        <div class="form-group">
                                <label class="control-label col-md-3">Transportation</label>
                                <div class="col-md-9">
                                  <input name="transportation"  class="form-control" type="text">
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
                                    <option value="2015">2015</option>
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