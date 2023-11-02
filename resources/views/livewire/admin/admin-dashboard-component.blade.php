<div class="container-fluid">
    <style>
    .icon-stat {
        display: block;
        overflow: hidden;
        position: relative;
        padding: 15px;
        margin-bottom: 1em;
        background-color: #fff;
        border-radius: 4px;
        border: 1px solid #ddd;
    }
    .icon-stat-label {
        display: block;
        color: #999;
        font-size: 13px;
    }
    .icon-stat-value {
        display: block;
        font-size: 28px;
        font-weight: 600;
    }
    .icon-stat-visual {
        position: relative;
        top: 22px;
        display: inline-block;
        width: 32px;
        height: 32px;
        border-radius: 4px;
        text-align: center;
        font-size: 16px;
        line-height: 30px;
    }
    .bg-primary {
        color: #fff;
        background: #d74b4b;
    }
    .bg-secondary {
        color: #fff;
        background: #6685a4;
    }
    
    .icon-stat-footer {
        padding: 10px 0 0;
        margin-top: 10px;
        color: #aaa;
        font-size: 12px;
        border-top: 1px solid #eee;
    }
</style>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <h3>Dashboard</h3>
        </div>
    </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">    
          <div class="icon-stat">    
            <div class="row">
              <div class="col-md-8 text-left">
                <span class="icon-stat-label">Total Revenue</span>
                <span class="icon-stat-value">{{ $totalRevenue}} FCFA</span>
              </div>   
              <div class="col-md-4 text-center">
                <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
              </div>
            </div>    
            <div class="icon-stat-footer">
              <i class="fa fa-clock-o"></i> Updated Now
            </div>    
          </div>    
        </div>    
        <div class="col-md-3 col-sm-6">    
          <div class="icon-stat">    
            <div class="row">
              <div class="col-md-8 text-left">
                <span class="icon-stat-label">Total Sales</span>
                <span class="icon-stat-value">{{ $totalSales }}</span>
              </div>    
              <div class="col-md-4 text-center">
                <i class="ti ti-article icon-stat-visual bg-secondary"></i>
              </div>
            </div>    
            <div class="icon-stat-footer">
              <i class="fa fa-clock-o"></i> Updated Now
            </div>   
          </div>
        </div>
        <div class="col-md-3 col-sm-6">    
          <div class="icon-stat">    
            <div class="row">
              <div class="col-md-8 text-left">
                <span class="icon-stat-label">Today Revenue</span>
                <span class="icon-stat-value">{{ $todayRevenue}} FCFA</span>
              </div>    
              <div class="col-md-4 text-center">
                <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
              </div>
            </div>    
            <div class="icon-stat-footer">
              <i class="fa fa-clock-o"></i> Updated Now
            </div>
          </div>    
        </div>    
        <div class="col-md-3 col-sm-6">    
          <div class="icon-stat">    
            <div class="row">
              <div class="col-md-8 text-left">
                <span class="icon-stat-label">Today Sales</span>
                <span class="icon-stat-value">{{ $todaySales}}</span>
              </div>    
              <div class="col-md-4 text-center">
                <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
              </div>
            </div>    
            <div class="icon-stat-footer">
              <i class="fa fa-clock-o"></i> Updated Now
            </div>    
          </div>    
        </div>    
      </div>    

      <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                   <div class="row">
                        <div class="col-md-6">
                            <h3 class="fw-semibold mb-3">Derniéres Commandes</h3>
                        </div>
                        <div class="col-md-6 text-end">
                            
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>OrderID</th>
                                <th>SubTotal</th>
                                <th>Discount</th>
                                <th>Tax</th>
                                <th>Total</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Zipcode</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td class="align-middle">{{ $order->id }}</td>
                                <td class="align-middle">{{ $order->subtotal }} FCFA</td>
                                <td class="align-middle">{{ $order->discount }}</td>
                                <td class="align-middle">{{ $order->tax}} FCFA</td>
                                <td class="align-middle">{{ $order->total }} FCFA</td>
                                <td class="align-middle">{{ $order->firstname }}</td>
                                <td class="align-middle">{{ $order->lastname }}</td>
                                <td class="align-middle">{{ $order->mobile }}</td>
                                <td class="align-middle">{{ $order->email }}</td>
                                <td class="align-middle">{{ $order->zipcode }}</td>
                                <td class="align-middle">{{ $order->status }}</td>
                                <td class="align-middle">{{ $order->created_at }}</td>
                                <td class="align-middle">
                                    <a href="{{ route('admin.orderdetails', ['order_id'=>$order->id])}}" class="btn btn-info btn-sm">Détails</a>
                                </td>
                               
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    
</div>
