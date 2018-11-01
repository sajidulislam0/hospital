@extends('master.master')
@section('main_content')

<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Dashboard</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- start widget -->
    <div class="state-overview">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-white">
                    <span class="info-box-icon push-bottom bg-primary"><i class="material-icons">group</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Appointments</span>
                        <span class="info-box-number">450</span>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 45%"></div>
                        </div>
                        <span class="progress-description">
                            45% Increase in 28 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-white">
                    <span class="info-box-icon push-bottom bg-warning"><i class="material-icons">person</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">New Patients</span>
                        <span class="info-box-number">155</span>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 40%"></div>
                        </div>
                        <span class="progress-description">
                            40% Increase in 28 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-white">
                    <span class="info-box-icon push-bottom bg-success"><i class="material-icons">content_cut</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Operations</span>
                        <span class="info-box-number">52</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 85%"></div>
                        </div>
                        <span class="progress-description">
                            85% Increase in 28 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-white">
                    <span class="info-box-icon push-bottom bg-info"><i class="material-icons">monetization_on</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Hospital Earning</span>
                        <span class="info-box-number">13,921</span><span>$</span>
                        <div class="progress">
                            <div class="progress-bar bg-info" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                            50% Increase in 28 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- end widget -->
 
   
    <!-- start new patient list -->
    <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>New Patients List</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table display product-overview mb-30" id="support_table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Assigned Doctor</th>
                                        <th>Diseases</th>
                                        <th>Room No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Jens Brincker</td>
                                        <td>Dr.Kenny Josh</td>
                                        <td>
                                            <span class="label label-sm label-success">Influenza</span>
                                        </td>
                                        <td>101</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mark Hay</td>
                                        <td>Dr. Mark</td>
                                        <td>
                                            <span class="label label-sm label-warning"> Cholera </span>
                                        </td>
                                        <td>105</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>David Perry</td>
                                        <td>Dr.Felix </td>
                                        <td>
                                            <span class="label label-sm label-danger">Jaundice</span>
                                        </td>
                                        <td>105</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Anthony Davie</td>
                                        <td>Dr.Beryl</td>
                                        <td>
                                            <span class="label label-sm label-success ">Leptospirosis</span>
                                        </td>
                                        <td>102</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Mark Hay</td>
                                        <td>Dr.Jayesh</td>
                                        <td>
                                            <span class="label label-sm label-success ">Typhoid</span>
                                        </td>
                                        <td>107</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Sue Woodger</td>
                                        <td>Dr.Sharma</td>
                                        <td>
                                            <span class="label label-sm label-danger">Malaria</span>
                                        </td>
                                        <td>108</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>	
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Doctors List</header>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <ul id="homeDoctorList" class="docListWindow small-slimscroll-style">
                            <li>
                                <div class="prog-avatar">
                                    <img src="../assets/img/doc/doc1.jpg" alt="" width="40" height="40">
                                </div>
                                <div class="details">
                                    <div class="title">
                                        <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                                    </div>
                                    <div>
                                        <span class="clsAvailable">Available</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="prog-avatar">
                                    <img src="../assets/img/doc/doc2.jpg" alt="" width="40" height="40">
                                </div>
                                <div class="details">
                                    <div class="title">
                                        <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                    </div>
                                    <div>
                                        <span class="clsAvailable">Available</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="prog-avatar">
                                    <img src="../assets/img/doc/doc3.jpg" alt="" width="40" height="40">
                                </div>
                                <div class="details">
                                    <div class="title">
                                        <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                    </div>
                                    <div>
                                        <span class="clsNotAvailable">Not Available</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="prog-avatar">
                                    <img src="../assets/img/doc/doc4.jpg" alt="" width="40" height="40">
                                </div>
                                <div class="details">
                                    <div class="title">
                                        <a href="#">Dr.Jay Soni</a> - (BHMS)
                                    </div>
                                    <div>
                                        <span class="clsOnLeave">On Leave</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="prog-avatar">
                                    <img src="../assets/img/doc/doc5.jpg" alt="" width="40" height="40">
                                </div>
                                <div class="details">
                                    <div class="title">
                                        <a href="#">Dr.Jacob Ryan</a> - (MBBS,MS)
                                    </div>
                                    <div>
                                        <span class="clsNotAvailable">Not Available</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="prog-avatar">
                                    <img src="../assets/img/doc/doc6.jpg" alt="" width="40" height="40">
                                </div>
                                <div class="details">
                                    <div class="title">
                                        <a href="#">Dr.Megha Trivedi</a> - (MBBS,MS)
                                    </div>
                                    <div>
                                        <span class="clsAvailable">Available</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="prog-avatar">
                                    <img src="../assets/img/doc/doc1.jpg" alt="" width="40" height="40">
                                </div>
                                <div class="details">
                                    <div class="title">
                                        <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                                    </div>
                                    <div>
                                        <span class="clsAvailable">Available</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="prog-avatar">
                                    <img src="../assets/img/doc/doc2.jpg" alt="" width="40" height="40">
                                </div>
                                <div class="details">
                                    <div class="title">
                                        <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                    </div>
                                    <div>
                                        <span class="clsAvailable">Available</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="prog-avatar">
                                    <img src="../assets/img/doc/doc3.jpg" alt="" width="40" height="40">
                                </div>
                                <div class="details">
                                    <div class="title">
                                        <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                    </div>
                                    <div>
                                        <span class="clsNotAvailable">Not Available</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center full-width">
                            <a href="#">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end new patient list -->
</div>

@endsection