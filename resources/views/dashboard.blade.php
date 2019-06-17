@extends('layouts.master')
@section('content')

<div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
<div class="row match-height">
    <div class="col-xl-4 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="pink">15</h3>
                            <span>Types of Health Fascility </span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-home pink font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="col-xl-4 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="deep-orange">175</h3>
                            <span>Total Health Fascilities <small class='text-muted'>   (SHD to RHC level)</small></span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-building deep-orange font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-4 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="teal">1780</h3>
                            <span>Employees  <small class='text-muted'> (2018 August Data)</small></span>
                            
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-user1 teal font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</div>
<!-- ////emp///////// -->

<div class="row">
    <div class="col-xl-8 col-lg-12">
        <div class="card card bg-light">
            <div class="card-header bg-dark text-dark"> Employment and Health Fascility Status  </div>
            <div class="card-body">
                <div >
                    <canvas id="emp-chart"   class="height-400"></canvas>
                </div>
            </div>
            <!-- <div class="card-footer">
             
            </div> -->
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card card bg-secondary">
        <div class="card-header bg-secondary text-dark"> Distribution of Health Fascilities Employees  </div>
            <div class="card-body">
                <div class="position-relative">
                    <div class="chart-title position-absolute mt-2 ml-2 white">
                        <!-- <h1 class="display-4">0.12%</h1>
                        <span>among Pregnant Mothers</span> -->
                    </div>
                    <canvas id="emp-pie" class="height-400 block"></canvas>
                    <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">
                    <!-- <i class="icon-stats-bars"></i>  Target - 1% of Population -->
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
</div>

<!--/ stats -->
<!--/ project charts -->



 <div class="col-xl-12 col-lg-12 col-xs-12 bg-info">
        <div class="card bg-info">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 >National Tuberculosis Program</h3>
                            <span>  <div class="row">
                    <div class="col-xs-6 ">
                        <span class="text-muted">CNR-Bact Confirm Target</span>
                        <h2 class="block font-weight-normal">120</h2>
                        <progress class="progress progress-xs mt-2 progress-warning" value="70" max="100"></progress>
                    </div>
                    <div class="col-xs-6 text-xs-center">
                        <span class="text-muted">CNR-All Forms Target</span>
                        <h2 class="block font-weight-normal">292</h2>
                        <progress class="progress progress-xs mt-2 progress-success" value="40" max="100"></progress>
                    </div> </span>
                        </div>
                        <div class="media-right media-middle">
                            <!-- <i class="icon-ios-bacteria cyan font-large-2 float-xs-right"></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="row">
    <!-- <div class="col-xl-4 col-lg-12">
        <div class="card bg-info">
            <div class="card-header"> TB: Case Notification Rate </div>
            <div class="card-body">
                <ul class="list-inline text-xs-center pt-2 m-0">
                    <li class="mr-1">
                        <h6><i class="icon-circle warning"></i> <span class="grey darken-1">Bact Confirm</span></h6>
                    </li>
                    <li class="mr-1">
                        <h6><i class="icon-circle success"></i> <span class="grey darken-1">All Forms</span></h6>
                    </li>
                </ul>
                <div >
                    <canvas id="tb-cnr-line"class="height-400 " ></canvas>
                </div>
         
            </div>
        </div>
    </div> -->

        <div class="col-xl-4 col-lg-12">
        <div class="card card-inverse bg-info">
        <div class="card-header "> TB: Presumptive TB Examination Rate </div>
            <div class="card-body">
                <div class="position-relative">
                    <div class="chart-title position-absolute mt-2 ml-2 white">
                        <h1 class="display-4">245</h1>
                        <span>Per 100,000 Pop</span>
                    </div>
                    <canvas id="tb-presumptive-line" class="height-400 block"></canvas>
                    <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">
                    <i class="icon-stats-bars"></i>  Target - 1% of Population
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-4 col-lg-12">
        <div class="card card-inverse bg-info">
        <div class="card-header "> TB: Case Notification Rate </div>
            <div class="card-body">
                <div class="position-relative">
                    <div class="chart-title position-absolute mt-2 ml-2 white">
                    <ul class="list-inline text-xs-center pt-3 m-0">
                    <li class="mr-1">
                        <h6><i class="icon-circle success"></i> <span class="grey darken-1">All Forms</span></h6>
                    </li>
                    <li class="mr-1">
                        <h6><i class="icon-circle " style ="color: #FF6E40"></i> <span class="grey darken-1">Bact Confirm</span></h6>
                    </li>
                    </ul>
                    </div>
                    <canvas id="tb-cnr-line" class="height-400 block"></canvas>
                    <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">
                    <!-- <i class="icon-stats-bars"></i>  Target - 1% of Population -->
                    </div>
                </div>
            </div>
        </div>
    </div>

  <div class="col-xl-4 col-lg-12">
        <div class="card card-inverse bg-info">
        <div class="card-header"> TB: Treatment Success Rate  </div>
            <div class="card-body">
                <div class="position-relative">
                    <div class="chart-title position-absolute position-right-0 white">
                        <h1 class="display-4 ">86% </h1>
                      
                    </div>
                    <canvas id="tb-tsr-line" class="height-400 block"></canvas>
                    <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">
                    <i class="icon-stats-bars"></i>   Target - 85% or More 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="clearfix"> .</div>
<!-- // NAP Charts -->

 <div class="col-xl-12 col-lg-12 col-xs-12 bg-success">
        <div class="card bg-transparent">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 >National HIV/AIDS Program</h3>
                            <span>  <div class="row">
                    <!-- <div class="col-xs-6 text-xs-center">
                        <span class="text-muted">CNR-Bact Confirm Target</span>
                        <h2 class="block font-weight-normal">292</h2>
                        <progress class="progress progress-xs mt-2 progress-warning" value="70" max="100"></progress>
                    </div>
                    <div class="col-xs-6 text-xs-center">
                        <span class="text-muted">CNR-All Forms Target</span>
                        <h2 class="block font-weight-normal">125</h2>
                        <progress class="progress progress-xs mt-2 progress-infot" value="40" max="100"></progress>
                    </div> </span>
                        </div>
                        <div class="media-right media-middle">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>




<div class="row">
    <div class="col-xl-4 col-lg-12">
        <div class="card card-inverse bg-light">
            <div class="card-header bg-success"> HIV: PMCT Testing and Positive  </div>
            <div class="card-body">
                <div >
                    <canvas id="hiv-pmct-line"   class="height-400"></canvas>
                </div>
            </div>
            <!-- <div class="card-footer">
             
            </div> -->
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card card-inverse bg-light">
        <div class="card-header bg-success"> HIV Prevalence in Pregnant Mothers  </div>
            <div class="card-body">
                <div class="position-relative">
                    <div class="chart-title position-absolute mt-2 ml-2 white">
                        <h1 class="display-4">0.12%</h1>
                        <span>among Pregnant Mothers</span>
                    </div>
                    <canvas id="hiv-pmct-bar" class="height-400 block"></canvas>
                    <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">
                    <!-- <i class="icon-stats-bars"></i>  Target - 1% of Population -->
                    </div>
                </div>
            </div>
        </div>
    </div>

  <div class="col-xl-4 col-lg-12">
        <div class="card card-inverse bg-light ">
        <div class="card-header bg-success"> No of People Living with HIV on ART  </div>
            <div class="card-body">
                <div class="position-relative">
                <div class="chart-title position-absolute mt-2 ml-2 success">
                        <h1 class="display-4 "> 2984 </h1>
                        <span>at the end of <strong> 2017</strong> </span>
                    </div>
                    <canvas id="hiv-art-line" class="height-400 block"></canvas>
                    <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">
                    <!-- <i class="icon-stats-bars"></i>   Target - 85% or More  -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
</div>


<!-- // NAP Charts -->


<div class="clearfix"> .</div>

<!-- // NMCP Charts -->


 <div class="col-xl-12 col-lg-12 col-xs-12 bg-primary">
        <div class="card bg-primary">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 >National Malaria Control Program</h3>
                            <span>  <div class="row">
                    <!-- <div class="col-xs-6 text-xs-center">
                        <span class="text-muted">CNR-Bact Confirm Target</span>
                        <h2 class="block font-weight-normal">292</h2>
                        <progress class="progress progress-xs mt-2 progress-warning" value="70" max="100"></progress>
                    </div>
                    <div class="col-xs-6 text-xs-center">
                        <span class="text-muted">CNR-All Forms Target</span>
                        <h2 class="block font-weight-normal">125</h2>
                        <progress class="progress progress-xs mt-2 progress-success" value="40" max="100"></progress>
                    </div> </span>
                        </div>
                        <div class="media-right media-middle"> -->
                            <!-- <i class="icon-ios-bacteria cyan font-large-2 float-xs-right"></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="row">

    <div class="col-xl-6 col-lg-12">
        <div class="card card-inverse bg-light">
        <div class="card-header bg-primary"> Malaria Morbidity and Mortality </div>
            <div class="card-body">
                <div class="position-relative">
                <div class="chart-title position-absolute position-right-0 primary ">
                        <h1 class="display-5">0 Death</h1>
                        <span>Since 2016</span>
                    </div>
                    <canvas id="malaria-chart" class="height-400 block"></canvas>
                    <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">
                    <!-- <i class="icon-stats-bars"></i>  Target - 1% of Population -->
                    </div>
                </div>
            </div>
        </div>
    </div>

 <div class="col-xl-6 col-lg-12">
            <div class="card card-inverse bg-light">
                <div class="card-header bg-primary"> DHF Morbidity and Mortality </div>
                    <div class="card-body">
                        <div class="position-relative">
                            <div class="chart-title position-absolute mt-2 ml-2 white">
                                <!-- <h1 class="display-4"></h1>
                                <span>among Pregnant Mothers</span> -->
                            </div>
                            <canvas id="dhf-chart" class="height-400 block"></canvas>
                                <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">
                                <!-- <i class="icon-stats-bars"></i>  Target - 1% of Population -->
                                </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>








<!-- // NMCP Charts -->



<!--/ project charts -->
<!-- Recent invoice with Statistics -->
<!-- <div class="row match-height">
    <div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-deep-orange media-left media-middle">
                        <i class="icon-user1 font-large-2 white"></i>
                    </div>
                    <div class="p-2 media-body">
                        <h5 class="deep-orange">New Employees</h5>
                        <h5 class="text-bold-400">10</h5>
                        <progress class="progress progress-sm progress-deep-orange mt-1 mb-0" value="45" max="100"></progress>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-cyan media-left media-middle">
                        <i class="icon-camera7 font-large-2 white"></i>
                    </div>
                    <div class="p-2 media-body">
                        <h5>New Products</h5>
                        <h5 class="text-bold-400">28</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 media-body text-xs-left">
                        <h5>New Users</h5>
                        <h5 class="text-bold-400">1,22,356</h5>
                    </div>
                    <div class="p-2 text-xs-center bg-teal media-right media-middle">
                        <i class="icon-user1 font-large-2 white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Invoices</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="card-block">
                    <p>Total paid invoices 240, unpaid 150. <span class="float-xs-right"><a href="#">Invoice Summary <i class="icon-arrow-right2"></i></a></span></p>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Invoice#</th>
                                <th>Customer Name</th>
                                <th>Status</th>
                                <th>Due</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-truncate"><a href="#">INV-001001</a></td>
                                <td class="text-truncate">Elizabeth W.</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                <td class="text-truncate">10/05/2016</td>
                                <td class="text-truncate">$ 1200.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><a href="#">INV-001012</a></td>
                                <td class="text-truncate">Andrew D.</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                <td class="text-truncate">20/07/2016</td>
                                <td class="text-truncate">$ 152.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><a href="#">INV-001401</a></td>
                                <td class="text-truncate">Megan S.</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                <td class="text-truncate">16/11/2016</td>
                                <td class="text-truncate">$ 1450.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><a href="#">INV-01112</a></td>
                                <td class="text-truncate">Doris R.</td>
                                <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                                <td class="text-truncate">11/12/2016</td>
                                <td class="text-truncate">$ 5685.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><a href="#">INV-008101</a></td>
                                <td class="text-truncate">Walter R.</td>
                                <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                                <td class="text-truncate">18/05/2016</td>
                                <td class="text-truncate">$ 685.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Recent invoice with Statistics -->
<!-- <div class="row match-height">
    <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card" style="height: 440px;">
            <div class="card-body">
                <img class="card-img-top img-fluid" src="../../app-assets/images/carousel/05.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Basic</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-pink">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card" style="height: 440px;">
            <div class="card-body">
                <div class="card-block">
                    <h4 class="card-title">List Group</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-primary float-xs-right">4</span> Cras justo odio
                    </li>
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-info float-xs-right">2</span> Dapibus ac facilisis in
                    </li>
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-warning float-xs-right">1</span> Morbi leo risus
                    </li>
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-success float-xs-right">3</span> Porta ac consectetur ac
                    </li>
                    <li class="list-group-item">
                        <span class="tag tag-default tag-pill bg-danger float-xs-right">8</span> Vestibulum at eros
                    </li>
                </ul>
                <div class="card-block">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12 col-sm-12">
        <div class="card" style="height: 440px;">
            <div class="card-body">
                <div class="card-block">
                    <h4 class="card-title">Carousel</h4>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                </div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <img src="../../app-assets/images/carousel/02.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item active">
                            <img src="../../app-assets/images/carousel/03.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img src="../../app-assets/images/carousel/01.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-block">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

        </div>
      </div>

@endsection 
