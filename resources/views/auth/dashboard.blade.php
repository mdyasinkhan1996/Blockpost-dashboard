@extends('layouts.auth')
@section('content')
    <div class="content">                
        <!-- Top Statistics -->
        <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
            <div class="card-header">
                <h2>{{$posts->count()}}</h2>
                {{-- <div class="dropdown">
                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> --}}
                <div class="sub-title">
                <span class="mr-1">Posts of this month</span> |
                <span class="mx-1">{{$posts->count()}}</span>
                <i class="mdi mdi-arrow-up-bold text-success"></i>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-wrapper">
                <div>
                    <div id="spline-area-1" data-monthcollp="{{$posts}}"></div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
            <div class="card-header">
                <h2>{{$categories->count()}}</h2>
                <div class="sub-title">
                <span class="mr-1">Total categories</span> |
                <span class="mx-1">{{$categories->count()}}</span>
                <i class="mdi mdi-arrow-up-bold text-success"></i>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-wrapper">
                <div>
                    <div id="spline-area-2" data-categorychart="{{$categories}}"></div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>{{$tags->count()}}</h2>
                    <div class="sub-title">
                    <span class="mr-1">Total tags</span> |
                    <span class="mx-1">{{$tags->count()}}</span>
                    <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                    <div>
                        <div id="spline-area-3" data-tagschart="{{$tags}}"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-default card-mini">
            <div class="card-header">
                <h2>{{$users->count()}}</h2>
                <div class="sub-title">
                <span class="mr-1">Active user</span> |
                <span class="mx-1">{{$users->count()}}</span>
                <i class="mdi mdi-arrow-up-bold text-success"></i>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-wrapper">
                <div>
                    <div id="spline-area-4" data-userschart="{{$usersChart}}"></div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>


        <div class="row">
            <div class="col-7">
            
            <!-- Income and Express -->
            <div class="card card-default">
                <div class="card-header">
                <h2>Income And Expenses</h2>
                </div>
                <div class="card-body">
                <div class="chart-wrapper">
                    <div id="mixed-chart-1"></div>
                </div>
                </div>

            </div>
            </div>
                <!-- Current Users  -->
            <div class="col-5">
                <div class="card card-default">
                    <div class="card-header">
                    <h2>Users Inventory</h2>
                    </div>
                    <div class="card-body">
                    <table id="productsTable" class="table table-hover table-product" style="width:100%">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roll</th>
                            </tr>
                        </thead>
                        <tbody class="my-3">
                            @forelse ($users as $user)
                                <tr class="py-3">
                                    <td class="py-0">
                                        <img src="{{asset('assets/auth/images/dummyUser.png')}}" alt="User Image">
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->is_admin == 1? 'Admin' : 'User'}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td>DATA NOT FOUND</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    </div>
                </div>
            </div>
        </div>


        
        <!-- Table Product -->
        {{-- <div class="row">
            <div class="col-6">
                <div class="card card-default">
                    <div class="card-header">
                    <h2>Users Inventory</h2>
                    </div>
                    <div class="card-body">
                    <table id="productsTable" class="table table-hover table-product" style="width:100%">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roll</th>
                            </tr>
                        </thead>
                        <tbody class="my-3">
                            @forelse ($users as $user)
                                <tr class="py-3">
                                    <td class="py-0">
                                        <img src="{{asset('assets/auth/images/user/user-xs-01.jpg')}}" alt="Product Image">
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->is_admin == 1? 'Admin' : 'User'}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td>DATA NOT FOUND</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    </div>
                </div>
            </div>
        </div> --}}


        {{-- <div class="row">
            <div class="col-xl-4">
            <!-- Top Customers -->
            <div class="card card-default">
                <div class="card-header">
                <h2>Top Customers</h2>
                </div>
                <div class="card-body">
                <table class="table table-borderless table-thead-border">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th class="text-right">Income</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-dark font-weight-bold">Gunter Reich</td>
                        <td class="text-right">$2,560</td>
                    </tr>
                    <tr>
                        <td class="text-dark font-weight-bold">Anke Kirsch</td>
                        <td class="text-right">$1,720</td>
                    </tr>
                    <tr>
                        <td class="text-dark font-weight-bold">Karolina Beer</td>
                        <td class="text-right">$1,230</td>
                    </tr>
                    <tr>
                        <td class="text-dark font-weight-bold">Lucia Christ</td>
                        <td class="text-right">$875</td>
                    </tr>
                    </tbody>
                    <tfoot class="border-top">
                    <tr>
                        <td><a href="#" class="text-uppercase">See All</a></td>
                    </tr>
                    </tfoot>
                </table>
                </div>
            </div>

            </div>
            <div class="col-xl-8">
            <div class="card card-default">
                <div class="card-header">
                <h2>Sales by Country</h2>
                <div id="country-sales-range" class="date-range">
                    <i class="mdi mdi-calendar"></i>&nbsp;
                    <span class="date-holder"></span>
                    <i class="mdi mdi-menu-down"></i>
                </div>
                </div>
                <div class="card-body py-0" >
                <div class="row pb-4">
                    <div class="col-lg-7 border-right-lg">
                    <div class="vec-map-wrapper" >
                        <div id="home-world" style="height: 100%; width: 100%;"></div>
                    </div>
                    </div>
                    <div class="col-lg-5">
                    <div class="chart-wrapper">
                        <div id="horizontal-bar-chart"></div>
                    </div>
                    </div>
                </div>

                </div>
            </div>
            </div>
        </div> --}}

        {{-- <div class="row">
        <div class="col-xl-8">
            
            <!-- Sales by Product -->
            <div class="card card-default">
                <div class="card-header align-items-center">
                <h2 class="">Sales by Product</h2>
                <a href="#" class="btn btn-primary btn-pill" data-toggle="modal" data-target="#modal-stock">Add Stock</a>
                </div>
                <div class="card-body">
                <div class="tab-content">
                    <table id="product-sale" class="table table-product " style="width:100%">
                    <thead>
                        <tr>
                        <th>Product Name</th>
                        <th>Unit</th>
                        <th>Amount</th>
                        <th>%sold</th>
                        <th class="th-width-250"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                        <td>Coach Swagger</td>
                        <td>134</td>
                        <td>$24541</td>
                        <td>35.28%</td>
                        <td>
                            <div class="progress progress-md rounded-0">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        </tr>

                        <tr>
                        <td>Toddler Shoes</td>
                        <td>119</td>
                        <td>$20225</td>
                        <td>27.05%</td>
                        <td>
                            <div class="progress progress-md rounded-0">
                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        </tr>

                        <tr>
                        <td>Hat Black Suits</td>
                        <td>101</td>
                        <td>$17,290</td>
                        <td>20.25%</td>
                        <td>
                            <div class="progress progress-md rounded-0">
                            <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        </tr>

                        <tr>
                        <td>Backpack Gents</td>
                        <td>59</td>
                        <td>$1150</td>
                        <td>12.50%</td>
                        <td>
                            <div class="progress progress-md rounded-0">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        </tr>

                        <tr>
                        <td>Speed 500 Ignite</td>
                        <td>25</td>
                        <td>$590</td>
                        <td>02.10%</td>
                        <td>
                            <div class="progress progress-md rounded-0">
                            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        </tr>

                        <tr>
                        <td>Earphone & Headphone</td>
                        <td>23</td>
                        <td>$450</td>
                        <td>02%</td>
                        <td>
                            <div class="progress progress-md rounded-0">
                            <div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8%" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                        </td>
                        </tr>

                        <tr>
                        <td>Gucci Watch</td>
                        <td>32</td>
                        <td>$554</td>
                        <td>8%</td>
                        <td>
                            <div class="progress progress-md rounded-0">
                            <div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8%" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>

        </div>
        <div class="col-xl-4">
            
                <!-- Chat -->
                <div class="card card-default chat">
                <div class="card-header">
                    <h2>Selena Wagner</h2>
                    <div class="dropdown dropdown-chat-state">
                    <button class="dropdown-toggle btn btn-primary btn-rounded-circle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="mdi mdi-account-alert"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <li>
                        <a href="#" class="user-link">
                            <img src="images/user/user-sm-01.jpg" alt="User Image">
                            <span class="username">anna patuary
                            <span class="badge badge-secondary">18</span>
                            </span>
                            <span class="state active">
                            <i class="mdi mdi-circle-medium"></i>
                            </span>
                        </a>
                        </li>
                        <li>
                        <a href="#" class="user-link">
                            <img src="images/user/user-sm-02.jpg" alt="User Image">
                            <span class="username">riman Ghose
                            <span class="badge badge-secondary">18</span>
                            </span>
                            <span class="state">
                            1hrs
                            </span>
                        </a>
                        </li>
                        <li>
                        <a href="#" class="user-link">
                            <img src="images/user/user-sm-03.jpg" alt="User Image">
                            <span class="username">riman Ghose
                            <span class="badge badge-secondary">18</span>
                            </span>
                            <span class="state">
                            1hrs
                            </span>
                        </a>
                        </li>
                        <li>
                        <a href="#" class="user-link">
                            <img src="images/user/user-sm-04.jpg" alt="User Image">
                            <span class="username">riman Ghose
                            <span class="badge badge-secondary">18</span>
                            </span>
                            <span class="state">
                            1hrs
                            </span>
                        </a>
                        </li>
                        <li>
                        <a href="#" class="user-link">
                            <img src="images/user/user-sm-05.jpg" alt="User Image">
                            <span class="username">riman Ghose</span>
                            <span class="state">15min</span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card-body pb-0" data-simplebar style="height: 363px;">
                    <!-- Media Chat Left -->
                    <div class="media media-chat">
                    <img src="images/user/user-sm-01.jpg" class="rounded-circle" alt="Avata Image">
                    <div class="media-body">
                        <div class="text-content">
                        <span class="message">Hello my name is anna.</span>
                        <time class="time">5 mins ago</time>
                        </div>
                    </div>
                    </div>

                    <!-- Media Chat Right -->
                    <div class="media media-chat media-chat-right">
                    <div class="media-body">
                        <div class="text-content">
                        <span class="message">Hello i am Riman.</span>
                        <time class="time">4 mins ago</time>
                        </div>
                        <div class="text-content">
                        <span class="message">I want to know about yourself</span>
                        <time class="time">3 mins ago</time>
                        </div>
                    </div>
                    <img src="images/user/user-sm-02.jpg" class="rounded-circle" alt="Avata Image">
                    </div>

                    <!-- Media Chat Left -->
                    <div class="media media-chat">
                    <img src="images/user/user-sm-01.jpg" class="rounded-circle" alt="Avata Image">
                    <div class="media-body">
                        <div class="text-content">
                        <span class="message">Its had resolving otherwise she contented therefore.</span>
                        <time class="time">1 mins ago</time>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="chat-footer">
                    <form>
                    <div class="input-group input-group-chat">
                        <div class="input-group-prepend">
                        <span class="emoticon-icon mdi mdi-emoticon-happy-outline"></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    </div>
                    </form>
                </div>
                </div>

        </div>
        </div> --}}

        <!-- Stock Modal -->
        {{-- <div class="modal fade modal-stock" id="modal-stock" aria-labelledby="modal-stock" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <form action="#">
            <div class="modal-content">
                <div class="modal-header align-items-center p3 p-md-5">
                <h2 class="modal-title" id="exampleModalGridTitle">Add Stock</h2>
                <div>
                    <button type="button" class="btn btn-light btn-pill mr-1 mr-md-2" data-dismiss="modal"> cancel </button>
                    <button type="submit" class="btn btn-primary  btn-pill" data-dismiss="modal"> save </button>
                </div>

                </div>
                <div class="modal-body p3 p-md-5">
                <div class="row">
                    <div class="col-lg-8">
                    <h3 class="h5 mb-5">Product Information</h3>
                    <div class="form-group mb-5">
                        <label for="new-product">Product Title</label>
                        <input type="text" class="form-control" id="new-product" placeholder="Add Product">
                    </div>
                    <div class="form-row mb-4">
                        <div class="col">
                        <label for="price">Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                            </div>
                            <input type="text" class="form-control" id="price" placeholder="Price" aria-label="Price"
                            aria-describedby="basic-addon1">
                        </div>
                        </div>
                        <div class="col">
                        <label for="sale-price">Sale Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">$</span>
                            </div>
                            <input type="text" class="form-control" id="sale-price" placeholder="Sale Price" aria-label="SalePrice"
                            aria-describedby="basic-addon1">
                        </div>
                        </div>
                    </div>

                    <div class="product-type mb-3 ">
                        <label class="d-block" for="sale-price">Product Type <i class="mdi mdi-help-circle-outline"></i> </label>
                        <div>

                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="checked">
                            <label class="custom-control-label" for="customRadio1">Physical Good</label>
                        </div>

                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Digital Good</label>
                        </div>

                        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3">Service</label>
                        </div>

                        </div>
                    </div>

                    <div class="editor">
                        <label class="d-block" for="sale-price">Description <i class="mdi mdi-help-circle-outline"></i></label>
                        <div id="standalone">
                        <div id="toolbar">
                            <span class="ql-formats">
                            <select class="ql-font"></select>
                            <select class="ql-size"></select>
                            </span>
                            <span class="ql-formats">
                            <button class="ql-bold"></button>
                            <button class="ql-italic"></button>
                            <button class="ql-underline"></button>
                            </span>
                            <span class="ql-formats">
                            <select class="ql-color"></select>
                            </span>
                            <span class="ql-formats">
                            <button class="ql-blockquote"></button>
                            </span>
                            <span class="ql-formats">
                            <button class="ql-list" value="ordered"></button>
                            <button class="ql-list" value="bullet"></button>
                            <button class="ql-indent" value="-1"></button>
                            <button class="ql-indent" value="+1"></button>
                            </span>
                            <span class="ql-formats">
                            <button class="ql-direction" value="rtl"></button>
                            <select class="ql-align"></select>
                            </span>
                        </div>
                        </div>
                        <div id="editor"></div>

                        <div class="custom-control custom-checkbox d-inline-block mt-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Hide product from published site</label>
                        </div>

                    </div>

                    </div>
                    <div class="col-lg-4">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" placeholder="please imgae here">
                        <span class="upload-image">Click here to <span class="text-primary">add product image.</span> </span>
                    </div>
                    </div>
                </div>
                </div>

            </div>
            </form>
        </div>
        </div> --}}
    </div>
@endsection