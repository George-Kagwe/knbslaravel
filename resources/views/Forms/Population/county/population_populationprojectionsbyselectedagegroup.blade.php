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
              <a data-toggle="tooltip" data-plarange_5_9="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-plarange_5_9="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-plarange_5_9="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-plarange_5_9="top" title="Logout" href="login.html">
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
                       
     
                              <h5><center>Populaton Projection by Selected Age Group</center></h5>
                              <br />
                              <button class="btn btn-danger" onclick="add()"><i class="glyphicon glyphicon-plus"></i> Add New Record</button>
                              <br />
                              <br />
                              <table id="table_id" class="table table-striped table-bordered" cellspacing="0"       width="100%">
                                      <thead>
                                        <tr>
                                         
                                           <th>ID</th>                                          
                                           <th>County Name</th>
                                            <th>Range 0-4</th>
                                            <th>Range 5-9</th>                                        
                                            <th>Range 10-14</th>
                                            <th>Range 15-19</th>
                                            <th>Range 20-24</th>
                                     
                                            <th>Range 25-29</th>
                                          
                                            <th>Range 30-34</th>
                                            <th>Range 35-39</th> 
                                            <th>Range 40-44</th>
                                            <th>Range 45-49</th>
                                            <th>Range 50-54</th>

                                            <th>Range 55-59</th>

                                            <th>Range 60-64</th>

                                            <th>Range 65-69</th>

                                            <th>Range 70-74</th>
                                            <th>Range 75-79</th> 
                                           <th>Rang 80 Plus</th>

                                           <th>Gender</th>
                                           <th>Year</th>
                                           <th style="width:85px;">Action
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach($post as $post){?>
                                             <tr>
                                                <td>{{$post->population_projection_id}}</td>
                                                <td>{{$post->county_name}}</td>
                                                <td>{{$post->range_0_4}}</td>
                                                <td>{{$post->range_5_9}}</td>                                             
                                                <td>{{$post->range_10_14}}</td>   


                                                 <td>{{$post->range_15_19}}</td>
                                                <td>{{$post->range_20_24}}</td>
                                                <td>{{$post->range_25_29}}</td>                                             
                                           
                                               <td>{{$post->range_30_34}}</td>
                                                <td>{{$post->range_35_39}}</td>
                                                <td>{{$post->range_40_44}}</td>     
                                                <td>{{ $post->range_45_49}}</td>                                         
                                                <td>{{$post->range_50_54}}</td> 
                                                 <td>{{$post->range_55_59}}</td> 
                                                 <td>{{$post->range_60_64}}</td>  
                                                 <td>{{$post->range_65_69}}</td>
                                                    <td>{{$post->range_70_74}}</td>  
                                                 <td>{{$post->range_75_79}}</td>
                                                <td>{{$post->range_80_plus}}</td>  
                                    
                                                <td>{{$post->gender}}</td>     
                                                  <td>{{$post->year}}</td>              

                                                <td>
                                                  <button class="btn btn-success" onclick="edit(<?php echo $post->population_projection_id;?>)">Update Record</button>
                                               
                                                </td>
                                              </tr>
                                             <?php }?>



                                      </tbody>

                                      <tfoot>
                                        <tr>        <th>County Name</th>
                                            <th>Range 0-4</th>
                                            <th>Range 5-9</th>                                        
                                            <th>Range 10-14</th>
                                            <th>Range 15-19</th>
                                            <th>Range 20-24</th>
                                     
                                            <th>Range 25-29</th>
                                          
                                            <th>Range 30-34</th>
                                            <th>Range 35-39</th> 
                                            <th>Range 40-44</th>
                                            <th>Range 45-49</th>
                                            <th>Range 50-54</th>

                                            <th>Range 55-59</th>

                                            <th>Range 60-64</th>

                                            <th>Range 65-69</th>

                                            <th>Range 70-74</th>
                                            <th>Range 75-79</th> 
                                           <th>Rang 80 Plus</th>

                                           <th>Gender</th>
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
                           $(function() {
                    $('select[name=county_name]').change(function() {
                     

                        var urls = '{{ route("fetchCounties", ":id") }}'; 
                        var id =$(this).val();
                        var  url =urls.replace(':id', id);

                        $.get(url, function(data) {
                            var select = $('form select[name=temperatures]');
                            
                            select.empty();

                            $.each(JSON.parse(data),function(key,value) {
                              
                                 select.append('<option value=' + value.temperature_id + '>' +value.temperatures+ '</option>');
                            });
                        });
                    });
                        });

                        $('#form').bootstrapValidator({
                                      feedbackIcons: {
                                          valid: 'glyphicon glyphicon-ok',
                                          invalid: 'glyphicon glyphicon-remove',
                                          validating: 'glyphicon glyphicon-refresh'
                                      },
                                      fields: {
                                           county_name: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please Select a County '
                                                  },
                                               
                                              }
                                          },
                                          range_0_4: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          range_5_9: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          range_10_14: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          range_15_19: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           range_20_24: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                            range_25_29: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          
                                              range_30_34: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                              range_35_39 : {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },

                                               range_20_24 : {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },



                                            range_25_29 : {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter a number '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },



                                               range_50_54 : {
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
                        var url = '{{ route("fetchSelect", ":id") }}';
                        
                        save_method = 'update';
                        $('#form')[0].reset(); // reset form on modals

                        //Ajax Load data from ajax
                        $.ajax({
                          url : url.replace(':id', id),
                          type: "GET",
                          dataType: "JSON",
                          success: function(data)
                          {

                              $('[name="id"]').val(data.population_projection_id);
                              $('[name="county_id"]').val(data.county_id);
                              $('[name="range_0_4"]').val(data.range_0_4);
                              $('[name="range_5_9"]').val(data.range_5_9  );
                              $('[name="range_10_14"]').val(data.range_10_14);   
                              $('[name="range_15_19"]').val(data.range_15_19);
                              $('[name="range_20_24"]').val(data.range_20_24);
                        
                              $('[name="range_25_29"]').val(data.range_25_29);
                          
                              $('[name="range_30_34"]').val(data.range_30_34);    
                              $('[name="range_35_39"]').val(data.range_35_39);
                              $('[name="range_40_44"]').val(data.range_40_44);
                              $('[name="range_45_49"]').val(data.range_45_49);
                              $('[name="range_50_54"]').val(data.range_50_54);
                              $('[name="range_55_59"]').val(data.range_55_59);
                              $('[name="range_60_64"]').val(data.range_60_64);
                              $('[name="range_65_69"]').val(data.range_65_69);
                              $('[name="range_70_74"]').val(data.range_70_74);
                              $('[name="range_75_79"]').val(data.range_75_79);
                              $('[name="range_80_plus"]').val(data.range_80_plus);
                              $('[name="gender"]').val(data.gender);
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
                            url = "{{ route('storeSelect') }}";

                        }
                        else
                        {
                           
                          //  url = '{{ route("updateSugar", ":id") }}';
                          // url=url.replace(':id', $('[name="id"]').val(data.area_id));
                          url = "{{ route('updateSelect') }}";
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
                                <label class="control-label col-md-3">County</label>
                                <div class="col-md-9">
                                  <select class="form-control" id="county_id" name="county_id">
                                    <option value="">please select</option>
                                    

                                       <?php foreach($counties as $counties){?>
                                            
                                                 <option value="{{$counties->county_id}}">{{$counties->county_name}}</option>
                                               
                                               
                                            
                                             <?php }?>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Range 0-4 </label>
                                <div class="col-md-9">
                                  <input name="range_0_4"  class="form-control" type="text">
                                </div>
                              </div>


                              <div class="form-group">
                                <label class="control-label col-md-3">Range 5-9</label>
                                <div class="col-md-9">
                                  <input name="range_5_9"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Range 10-14</label>
                                <div class="col-md-9">
                                  <input name="range_10_14"  class="form-control" type="text">
                                </div>
                              </div>


                              <div class="form-group">
                                <label class="control-label col-md-3">Range 15-19</label>
                                <div class="col-md-9">
                                  <input name="range_15_19"  class="form-control" type="text">
                                </div>
                              </div>

                                 <div class="form-group">
                                <label class="control-label col-md-3">Range 20-24</label>
                                <div class="col-md-9">
                                  <input name="range_20_24"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Range 25-29</label>
                                <div class="col-md-9">
                                  <input name="range_25_29"  class="form-control" type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3">Range 30-34</label>
                                <div class="col-md-9">
                                  <input name="range_30_34"  class="form-control" type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3">Range 35-39</label>
                                <div class="col-md-9">
                                  <input name="range_35_39"  class="form-control" type="text">
                                </div>
                              </div>


                              <div class="form-group">
                                <label class="control-label col-md-3">Range 40-44</label>
                                <div class="col-md-9">
                                  <input name="range_40_44"  class="form-control" type="text">
                                </div>
                              </div>

      
                                       <div class="form-group">
                                <label class="control-label col-md-3">Range 45-49</label>
                                <div class="col-md-9">
                                  <input name="range_45_49"  class="form-control" type="text">
                                </div>
                              </div>

                         
                                <div class="form-group">
                                <label class="control-label col-md-3">Range 50-54</label>
                                <div class="col-md-9">
                                  <input name="range_50_54"  class="form-control" type="text">
                                </div>
                              </div>

                                       <div class="form-group">
                                <label class="control-label col-md-3">Range 55-59</label>
                                <div class="col-md-9">
                                  <input name="range_55_59"  class="form-control" type="text">
                                </div>
                              </div>
                                 <div class="form-group">
                                <label class="control-label col-md-3">Range 60-64</label>
                                <div class="col-md-9">
                                  <input name="range_60_64"  class="form-control" type="text">
                                </div>
                              </div>

                                       <div class="form-group">
                                <label class="control-label col-md-3">Range 65-69</label>
                                <div class="col-md-9">
                                  <input name="range_65_69"  class="form-control" type="text">
                                </div>
                              </div>


                                           <div class="form-group">
                                <label class="control-label col-md-3">Range 70-74</label>
                                <div class="col-md-9">
                                  <input name="range_70_74"  class="form-control" type="text">
                                </div>
                              </div>



                                <div class="form-group">
                                <label class="control-label col-md-3">Range 75-79</label>
                                <div class="col-md-9">
                                  <input name="range_75_79"  class="form-control" type="text">
                                </div>
                              </div>


                              <div class="form-group">
                                <label class="control-label col-md-3">Range 80 plus</label>
                                <div class="col-md-9">
                                  <input name="range_80_plus"  class="form-control" type="text">
                                </div>
                              </div>


                                 <div class="form-group">
                                <label class="control-label col-md-3">Gender</label>
                                <div class="col-md-9">
                                  <input name="gender"  class="form-control" type="text">
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