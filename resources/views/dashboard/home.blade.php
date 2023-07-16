@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
  <section class="section">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-stats">
            <div class="card-stats-title">Order Statistics -
              <div class="dropdown d-inline">
                <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                <ul class="dropdown-menu dropdown-menu-sm">
                  <li class="dropdown-title">Select Month</li>
                  <li><a href="#" class="dropdown-item">January</a></li>
                  <li><a href="#" class="dropdown-item">February</a></li>
                  <li><a href="#" class="dropdown-item">March</a></li>
                  <li><a href="#" class="dropdown-item">April</a></li>
                  <li><a href="#" class="dropdown-item">May</a></li>
                  <li><a href="#" class="dropdown-item">June</a></li>
                  <li><a href="#" class="dropdown-item">July</a></li>
                  <li><a href="#" class="dropdown-item active">August</a></li>
                  <li><a href="#" class="dropdown-item">September</a></li>
                  <li><a href="#" class="dropdown-item">October</a></li>
                  <li><a href="#" class="dropdown-item">November</a></li>
                  <li><a href="#" class="dropdown-item">December</a></li>
                </ul>
              </div>
            </div>
            <div class="card-stats-items">
              <div class="card-stats-item">
                <div class="card-stats-item-count">24</div>
                <div class="card-stats-item-label">Pending</div>
              </div>
              <div class="card-stats-item">
                <div class="card-stats-item-count">12</div>
                <div class="card-stats-item-label">Shipping</div>
              </div>
              <div class="card-stats-item">
                <div class="card-stats-item-count">23</div>
                <div class="card-stats-item-label">Completed</div>
              </div>
            </div>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-archive"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Orders</h4>
            </div>
            <div class="card-body">
              59
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-stats">
            <div class="card-stats-title">Order Statistics -
              <div class="dropdown d-inline">
                <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                <ul class="dropdown-menu dropdown-menu-sm">
                  <li class="dropdown-title">Select Month</li>
                  <li><a href="#" class="dropdown-item">January</a></li>
                  <li><a href="#" class="dropdown-item">February</a></li>
                  <li><a href="#" class="dropdown-item">March</a></li>
                  <li><a href="#" class="dropdown-item">April</a></li>
                  <li><a href="#" class="dropdown-item">May</a></li>
                  <li><a href="#" class="dropdown-item">June</a></li>
                  <li><a href="#" class="dropdown-item">July</a></li>
                  <li><a href="#" class="dropdown-item active">August</a></li>
                  <li><a href="#" class="dropdown-item">September</a></li>
                  <li><a href="#" class="dropdown-item">October</a></li>
                  <li><a href="#" class="dropdown-item">November</a></li>
                  <li><a href="#" class="dropdown-item">December</a></li>
                </ul>
              </div>
            </div>
            <div class="card-stats-items">
              <div class="card-stats-item">
                <div class="card-stats-item-count">24</div>
                <div class="card-stats-item-label">Pending</div>
              </div>
              <div class="card-stats-item">
                <div class="card-stats-item-count">12</div>
                <div class="card-stats-item-label">Shipping</div>
              </div>
              <div class="card-stats-item">
                <div class="card-stats-item-count">23</div>
                <div class="card-stats-item-label">Completed</div>
              </div>
            </div>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Balance</h4>
            </div>
            <div class="card-body">
              $187,13
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-stats">
            <div class="card-stats-title">Order Statistics -
              <div class="dropdown d-inline">
                <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                <ul class="dropdown-menu dropdown-menu-sm">
                  <li class="dropdown-title">Select Month</li>
                  <li><a href="#" class="dropdown-item">January</a></li>
                  <li><a href="#" class="dropdown-item">February</a></li>
                  <li><a href="#" class="dropdown-item">March</a></li>
                  <li><a href="#" class="dropdown-item">April</a></li>
                  <li><a href="#" class="dropdown-item">May</a></li>
                  <li><a href="#" class="dropdown-item">June</a></li>
                  <li><a href="#" class="dropdown-item">July</a></li>
                  <li><a href="#" class="dropdown-item active">August</a></li>
                  <li><a href="#" class="dropdown-item">September</a></li>
                  <li><a href="#" class="dropdown-item">October</a></li>
                  <li><a href="#" class="dropdown-item">November</a></li>
                  <li><a href="#" class="dropdown-item">December</a></li>
                </ul>
              </div>
            </div>
            <div class="card-stats-items">
              <div class="card-stats-item">
                <div class="card-stats-item-count">24</div>
                <div class="card-stats-item-label">Pending</div>
              </div>
              <div class="card-stats-item">
                <div class="card-stats-item-count">12</div>
                <div class="card-stats-item-label">Shipping</div>
              </div>
              <div class="card-stats-item">
                <div class="card-stats-item-count">23</div>
                <div class="card-stats-item-label">Completed</div>
              </div>
            </div>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-shopping-bag"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Sales</h4>
            </div>
            <div class="card-body">
              4,732
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="card" style="height: 442px">
          <div class="card-header">
            <h4>Referral URL</h4>
          </div>
          <div class="card-body">
            <div class="mb-4">
              <div class="text-small float-right font-weight-bold text-muted">2,100</div>
              <div class="font-weight-bold mb-1">Google</div>
              <div class="progress" data-height="3">
                <div class="progress-bar" role="progressbar" data-width="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="mb-4">
              <div class="text-small float-right font-weight-bold text-muted">1,880</div>
              <div class="font-weight-bold mb-1">Facebook</div>
              <div class="progress" data-height="3">
                <div class="progress-bar" role="progressbar" data-width="67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="mb-4">
              <div class="text-small float-right font-weight-bold text-muted">1,521</div>
              <div class="font-weight-bold mb-1">Bing</div>
              <div class="progress" data-height="3">
                <div class="progress-bar" role="progressbar" data-width="58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="mb-4">
              <div class="text-small float-right font-weight-bold text-muted">884</div>
              <div class="font-weight-bold mb-1">Yahoo</div>
              <div class="progress" data-height="3">
                <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="mb-4">
              <div class="text-small float-right font-weight-bold text-muted">473</div>
              <div class="font-weight-bold mb-1">Kodinger</div>
              <div class="progress" data-height="3">
                <div class="progress-bar" role="progressbar" data-width="28%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="mb-4">
              <div class="text-small float-right font-weight-bold text-muted">418</div>
              <div class="font-weight-bold mb-1">Multinity</div>
              <div class="progress" data-height="3">
                <div class="progress-bar" role="progressbar" data-width="20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card gradient-bottom">
          <div class="card-header">
            <h4>Top 5 Products</h4>
            <div class="card-header-action dropdown">
              <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Month</a>
              <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <li class="dropdown-title">Select Period</li>
                <li><a href="#" class="dropdown-item">Today</a></li>
                <li><a href="#" class="dropdown-item">Week</a></li>
                <li><a href="#" class="dropdown-item active">Month</a></li>
                <li><a href="#" class="dropdown-item">This Year</a></li>
              </ul>
            </div>
          </div>
          <div class="card-body" id="top-5-scroll">
            <ul class="list-unstyled list-unstyled-border">
              <li class="media">
                <img class="mr-3 rounded" width="55" src="../assets/img/products/product-3-50.png" alt="product">
                <div class="media-body">
                  <div class="float-right"><div class="font-weight-600 text-muted text-small">86 Sales</div></div>
                  <div class="media-title">oPhone S9 Limited</div>
                  <div class="mt-1">
                    <div class="budget-price">
                      <div class="budget-price-square bg-primary" data-width="64%"></div>
                      <div class="budget-price-label">$68,714</div>
                    </div>
                    <div class="budget-price">
                      <div class="budget-price-square bg-danger" data-width="43%"></div>
                      <div class="budget-price-label">$38,700</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="media">
                <img class="mr-3 rounded" width="55" src="../assets/img/products/product-4-50.png" alt="product">
                <div class="media-body">
                  <div class="float-right"><div class="font-weight-600 text-muted text-small">67 Sales</div></div>
                  <div class="media-title">iBook Pro 2018</div>
                  <div class="mt-1">
                    <div class="budget-price">
                      <div class="budget-price-square bg-primary" data-width="84%"></div>
                      <div class="budget-price-label">$107,133</div>
                    </div>
                    <div class="budget-price">
                      <div class="budget-price-square bg-danger" data-width="60%"></div>
                      <div class="budget-price-label">$91,455</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="media">
                <img class="mr-3 rounded" width="55" src="../assets/img/products/product-1-50.png" alt="product">
                <div class="media-body">
                  <div class="float-right"><div class="font-weight-600 text-muted text-small">63 Sales</div></div>
                  <div class="media-title">Headphone Blitz</div>
                  <div class="mt-1">
                    <div class="budget-price">
                      <div class="budget-price-square bg-primary" data-width="34%"></div>
                      <div class="budget-price-label">$3,717</div>
                    </div>
                    <div class="budget-price">
                      <div class="budget-price-square bg-danger" data-width="28%"></div>
                      <div class="budget-price-label">$2,835</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="media">
                <img class="mr-3 rounded" width="55" src="../assets/img/products/product-3-50.png" alt="product">
                <div class="media-body">
                  <div class="float-right"><div class="font-weight-600 text-muted text-small">28 Sales</div></div>
                  <div class="media-title">oPhone X Lite</div>
                  <div class="mt-1">
                    <div class="budget-price">
                      <div class="budget-price-square bg-primary" data-width="45%"></div>
                      <div class="budget-price-label">$13,972</div>
                    </div>
                    <div class="budget-price">
                      <div class="budget-price-square bg-danger" data-width="30%"></div>
                      <div class="budget-price-label">$9,660</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="media">
                <img class="mr-3 rounded" width="55" src="../assets/img/products/product-5-50.png" alt="product">
                <div class="media-body">
                  <div class="float-right"><div class="font-weight-600 text-muted text-small">19 Sales</div></div>
                  <div class="media-title">Old Camera</div>
                  <div class="mt-1">
                    <div class="budget-price">
                      <div class="budget-price-square bg-primary" data-width="35%"></div>
                      <div class="budget-price-label">$7,391</div>
                    </div>
                    <div class="budget-price">
                      <div class="budget-price-square bg-danger" data-width="28%"></div>
                      <div class="budget-price-label">$5,472</div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="card-footer pt-3 d-flex justify-content-center">
            <div class="budget-price justify-content-center">
              <div class="budget-price-square bg-primary" data-width="20"></div>
              <div class="budget-price-label">Selling Price</div>
            </div>
            <div class="budget-price justify-content-center">
              <div class="budget-price-square bg-danger" data-width="20"></div>
              <div class="budget-price-label">Budget Price</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="d-inline">Tasks</h4>
            <div class="card-header-action">
              <a href="#" class="btn btn-primary">View All</a>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-unstyled list-unstyled-border">
              <li class="media">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cbx-1">
                  <label class="custom-control-label" for="cbx-1"></label>
                </div>
                <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png" alt="avatar">
                <div class="media-body">
                  <div class="badge badge-pill badge-danger mb-1 float-right">Not Finished</div>
                  <h6 class="media-title"><a href="#">Redesign header</a></h6>
                  <div class="text-small text-muted">Alfa Zulkarnain <div class="bullet"></div> <span class="text-primary">Now</span></div>
                </div>
              </li>
              <li class="media">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cbx-2" checked="">
                  <label class="custom-control-label" for="cbx-2"></label>
                </div>
                <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-5.png" alt="avatar">
                <div class="media-body">
                  <div class="badge badge-pill badge-primary mb-1 float-right">Completed</div>
                  <h6 class="media-title"><a href="#">Add a new component</a></h6>
                  <div class="text-small text-muted">Serj Tankian <div class="bullet"></div> 4 Min</div>
                </div>
              </li>
              <li class="media">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cbx-3" >
                  <label class="custom-control-label" for="cbx-3"></label>
                </div>
                <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
                <div class="media-body">
                  <div class="badge badge-pill badge-warning mb-1 float-right">Progress</div>
                  <h6 class="media-title"><a href="#">Fix modal window</a></h6>
                  <div class="text-small text-muted">Ujang Maman <div class="bullet"></div> 8 Min</div>
                </div>
              </li>
              <li class="media">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cbx-4">
                  <label class="custom-control-label" for="cbx-4"></label>
                </div>
                <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
                <div class="media-body">
                  <div class="badge badge-pill badge-danger mb-1 float-right">Not Finished</div>
                  <h6 class="media-title"><a href="#">Remove unwanted classes</a></h6>
                  <div class="text-small text-muted">Farhan A Mujib <div class="bullet"></div> 21 Min</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
</div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Top Countries</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="text-title mb-2">July</div>
                <ul class="list-unstyled list-unstyled-border list-unstyled-noborder mb-0">
                  <li class="media">
                    <img class="img-fluid mt-1 img-shadow" src="../node_modules/flag-icon-css/flags/4x3/id.svg" alt="image" width="40">
                    <div class="media-body ml-3">
                      <div class="media-title">Indonesia</div>
                      <div class="text-small text-muted">3,282 <i class="fas fa-caret-down text-danger"></i></div>
                    </div>
                  </li>
                  <li class="media">
                    <img class="img-fluid mt-1 img-shadow" src="../node_modules/flag-icon-css/flags/4x3/my.svg" alt="image" width="40">
                    <div class="media-body ml-3">
                      <div class="media-title">Malaysia</div>
                      <div class="text-small text-muted">2,976 <i class="fas fa-caret-down text-danger"></i></div>
                    </div>
                  </li>
                  <li class="media">
                    <img class="img-fluid mt-1 img-shadow" src="../node_modules/flag-icon-css/flags/4x3/us.svg" alt="image" width="40">
                    <div class="media-body ml-3">
                      <div class="media-title">United States</div>
                      <div class="text-small text-muted">1,576 <i class="fas fa-caret-up text-success"></i></div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-sm-6 mt-sm-0 mt-4">
                <div class="text-title mb-2">August</div>
                <ul class="list-unstyled list-unstyled-border list-unstyled-noborder mb-0">
                  <li class="media">
                    <img class="img-fluid mt-1 img-shadow" src="../node_modules/flag-icon-css/flags/4x3/id.svg" alt="image" width="40">
                    <div class="media-body ml-3">
                      <div class="media-title">Indonesia</div>
                      <div class="text-small text-muted">3,486 <i class="fas fa-caret-up text-success"></i></div>
                    </div>
                  </li>
                  <li class="media">
                    <img class="img-fluid mt-1 img-shadow" src="../node_modules/flag-icon-css/flags/4x3/ps.svg" alt="image" width="40">
                    <div class="media-body ml-3">
                      <div class="media-title">Palestine</div>
                      <div class="text-small text-muted">3,182 <i class="fas fa-caret-up text-success"></i></div>
                    </div>
                  </li>
                  <li class="media">
                    <img class="img-fluid mt-1 img-shadow" src="../node_modules/flag-icon-css/flags/4x3/de.svg" alt="image" width="40">
                    <div class="media-body ml-3">
                      <div class="media-title">Germany</div>
                      <div class="text-small text-muted">2,317 <i class="fas fa-caret-down text-danger"></i></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h4>Invoices</h4>
            <div class="card-header-action">
              <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive table-invoice">
              <table class="table table-striped">
                <tr>
                  <th>Invoice ID</th>
                  <th>Customer</th>
                  <th>Status</th>
                  <th>Due Date</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td><a href="#">INV-87239</a></td>
                  <td class="font-weight-600">Kusnadi</td>
                  <td><div class="badge badge-warning">Unpaid</div></td>
                  <td>July 19, 2018</td>
                  <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td><a href="#">INV-48574</a></td>
                  <td class="font-weight-600">Hasan Basri</td>
                  <td><div class="badge badge-success">Paid</div></td>
                  <td>July 21, 2018</td>
                  <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td><a href="#">INV-76824</a></td>
                  <td class="font-weight-600">Muhamad Nuruzzaki</td>
                  <td><div class="badge badge-warning">Unpaid</div></td>
                  <td>July 22, 2018</td>
                  <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td><a href="#">INV-84990</a></td>
                  <td class="font-weight-600">Agung Ardiansyah</td>
                  <td><div class="badge badge-warning">Unpaid</div></td>
                  <td>July 22, 2018</td>
                  <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td><a href="#">INV-87320</a></td>
                  <td class="font-weight-600">Ardian Rahardiansyah</td>
                  <td><div class="badge badge-success">Paid</div></td>
                  <td>July 28, 2018</td>
                  <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-hero">
          <div class="card-header">
            <div class="card-icon">
              <i class="far fa-question-circle"></i>
            </div>
            <h4>14</h4>
            <div class="card-description">Customers need help</div>
          </div>
          <div class="card-body p-0">
            <div class="tickets-list">
              <a href="#" class="ticket-item">
                <div class="ticket-title">
                  <h4>My order hasn't arrived yet</h4>
                </div>
                <div class="ticket-info">
                  <div>Laila Tazkiah</div>
                  <div class="bullet"></div>
                  <div class="text-primary">1 min ago</div>
                </div>
              </a>
              <a href="#" class="ticket-item">
                <div class="ticket-title">
                  <h4>Please cancel my order</h4>
                </div>
                <div class="ticket-info">
                  <div>Rizal Fakhri</div>
                  <div class="bullet"></div>
                  <div>2 hours ago</div>
                </div>
              </a>
              <a href="#" class="ticket-item">
                <div class="ticket-title">
                  <h4>Do you see my mother?</h4>
                </div>
                <div class="ticket-info">
                  <div>Syahdan Ubaidillah</div>
                  <div class="bullet"></div>
                  <div>6 hours ago</div>
                </div>
              </a>
              <a href="features-tickets.html" class="ticket-item ticket-more">
                View All <i class="fas fa-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('sidebar')
    @parent
    {{-- <ul class="sidebar-menu">
        <li class="menu-header">Starter</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>Layout</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
            </ul>
        </li>
    </ul> --}}
@endsection