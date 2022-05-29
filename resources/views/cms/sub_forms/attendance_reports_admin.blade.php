@extends('layouts.cms')

@section('content')
<div class="content-wrapper" style="min-height: 2646.44px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                   <!-- <h1>Attendance Report</h1>   -->            
                </div>
                <div class="col-sm-6 ">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin"><b>Home</b></a></li>
                    <li class="breadcrumb-item"><a href="/total_leaves_taken"><b>Total-Leaves-Taken-sheet</b></a></li>
                    <li class="breadcrumb-item active"><b>Admin-Control-Panel</b></li>              
                    </ol>
                </div>
            </div>

            <div class="form-group">
                  <label>Select a Month</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="month" class="form-control float-right" id="reservation">
                  </div><!-- /.input group -->
                </div>

<!--drop down buttons for month and year---->
<!--
<div class="dropdown">
  <button type="button" class="btn btn-secondary dropdown-toggle " data-bs-toggle="dropdown">
    Month &nbsp;&nbsp;
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Link 1</a></li>
    <li><a class="dropdown-item" href="#">Link 2</a></li>
    <li><a class="dropdown-item" href="#">Link 3</a></li>
  </ul>
</div> <br>
<div class="dropdown">
  <button type="date" class="btn btn-secondary dropdown-toggle " data-bs-toggle="dropdown">
    Year &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Link 1</a></li>
    <li><a class="dropdown-item" href="#">Link 2</a></li>
    <li><a class="dropdown-item" href="#">Link 3</a></li> 
  </ul> 
</div> -->

        <!--drop down button ends---->
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Monthly Attendance report </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
                   <!-- <div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">
                         <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button">
                            <span>Copy</span></button> 
                            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                <span>CSV</span></button> 
                                <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                    <span>Excel</span>
                                </button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                    <span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button">
                                        <span>Print</span></button> 
                                        <div class="btn-group">
                                            <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true">
                                                <span>Column visibility</span><span class="dt-down-arrow"></span></button>
                                            </div> 
                                        </div>
                                    </div>   -->
                                                <div class="col-sm-12 col-md-6">
                                                    <div id="example1_filter" class="dataTables_filter">
                                                    <label>Search employee ID<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                                                </div>
                                            </div>
                                        </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                  <thead>
                  <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" >Date</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Employee_ID</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Attendance Status</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Check in time</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Check out time</th>
                  </tr> 
                  </thead>
                  <tbody>
<!--Table body starts -->
                  
                  <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="even">
                    <td class="dtr-control sorting_1" tabindex="0"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="even">
                    <td class="dtr-control sorting_1" tabindex="0"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="odd">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="even">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="odd">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="even">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="odd">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="even">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                    <tr class="even">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr></tbody>

                </table>
            </div>
        </div>
        <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing entries

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="example1_previous">
                                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                </li><li class="paginate_button page-item ">
                                    <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                </li>
                                
                                <li class="paginate_button page-item next" id="example1_next">
                                    <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                </li>
                            </ul>
                        </div></div></div></div>
              </div>
              <!-- /.card-body -->
            </div>
            <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button">
                            <span> Print </span></button> <br><br>

        </div><!-- /.container-fluid -->
    </section> <!-- /.content -->
</div>

@endsection







<!--certain changed item codes 
<form name="form1" id="form1" action="/action_page.php">
    <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" >
                  <thead>
                  <tr>
                      <th class="dateclass" tabindex="0" aria-controls="example1" rowspan="1" colspan="2" >Date </Label>
                          <select name="date" id="datevalue">
                         <option value="" selected="selected">  </option>
                          </select>
                      </th> 
                      <th class="dateclassmonth" tabindex="2" aria-controls="example2" rowspan="1" colspan="5" > Month 
                       <select name="month" id="monthvalue">
                         <option value="" selected="selected">  </option>
                        </select> 
                      </th>
                      <th class="year" tabindex="0" aria-controls="example3" rowspan="1" colspan="8" >Year 
                      <select name="chapter" id="chapter">
                        <option value="" selected="selected">  </option>
                      </select>
                      </th>
                  
                  </tr>  
                  </thead>
         </table> 
</form><br><br>
-->
<!--codes tried with other UI components -->
<!--
    <div class="card-header">
                <h3 class="card-title">Monthlyreport</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input disabled type="text" name="table_search" class="form-control float-right" placeholder="Employee_ID">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
-->
<!--codes tried with other UI components -->
<!--codes tried with other UI components -->                    
<!--  
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">Rendering engine</th>
            <th rowspan="1" colspan="1">Browser</th>
            <th rowspan="1" colspan="1">Platform(s)</th>
            <th rowspan="1" colspan="1">Engine version</th>
            <th rowspan="1" colspan="1" style="">CSS grade</th>
        </tr>
    </tfoot>
     -->
<!--codes tried with other UI components -->

<!--codes tried with other UI components -->
<!--
<div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>EmployeeName </th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><span class="tag tag-success"></span></td>
                      <td>.</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><span class="tag tag-success"></span></td>
                      <td>.</td>
                    </tr><tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><span class="tag tag-success"></span></td>
                      <td>.</td>
                    </tr>

                    </tbody>
                </table>
              </div>

-->             
<!--codes tried with other UI components -->
<!--codes tried with other UI components --><!--
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" >Employee_ID</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">DepartmentID</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Department Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Date</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Status</th>

-->