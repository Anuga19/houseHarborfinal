@extends('adminNav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-30">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->

                <br>
                <div class="container-fluid">
                    <div class="row">
                        <!-- Sidebar -->
                        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar side-menu">
                            <section class="sider-menu">
                                <img src="{{ asset('images/Profile-pic.png') }}" alt="Profile Picture" class="profile-pic">
                                <div class="profile-info">
                                    <p>Anuga</p>
                                    <p>anugak200@gmail.com</p>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item menu-item">
                                        <a class="nav-link active" href="#">Dashboard</a>
                                    </li>
                                    <li class="nav-item menu-item">
                                        <a class="nav-link" href="{{ url('/admin/properties') }}">Properties</a>
                                    </li>
                                    <li class="nav-item menu-item">
                                        <a class="nav-link" href="{{ url('/users') }}">Users Management</a>
                                    </li>
                                    <li class="nav-item menu-item">
                                        <a class="nav-link" href="{{ url('/admin/agents') }}">Agent Management</a>
                                    </li>
                                    <li class="nav-item menu-item">
                                        <a class="nav-link" href="{{ url('/analytics') }}">Profile</a>
                                    </li>
                                    <li class="nav-item menu-item">
                                        <a class="nav-link" href="{{ url('/analytics') }}">Chats</a>
                                    </li>
                                    <li class="nav-item menu-item">
                                        <a class="nav-link" href="{{ url('/analytics') }}">Other Services</a>
                                    </li>
                                </ul>
                            </section>
                        </nav>

                        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                            <div class="content" id="dashbtop">
                                <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                                    <div>
                                        <h1 class="h3 mb-1">
                                            Dashboard
                                        </h1>
                                        <p class="fw-medium mb-0 text-muted">
                                            Welcome, admin! You have <a class="fw-medium" href="javascript:void(0)">8 new notifications</a>.
                                        </p>
                                    </div>
                                    <div class="mt-4 mt-md-0">
                                        <a class="btn btn-sm btn-alt-primary" href="javascript:void(0)">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <div class="dropdown d-inline-block">
                                            <button type="button" class="btn btn-sm btn-alt-primary px-3" id="dropdown-analytics-overview" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Last 30 days <i class="fa fa-fw fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end fs-sm" aria-labelledby="dropdown-analytics-overview">
                                                <a class="dropdown-item" href="javascript:void(0)">This Week</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Previous Week</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">This Month</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Previous Month</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content">
                                <div class="row items-push">
                                    <div class="col-sm-6 col-xl-3" id="dashbg">
                                        <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                                            <div class="block-content block-content-full flex-grow-1">
                                                <div class="fs-1 fw-bold">
                                                    {{ \App\Models\Property::count() }}
                                                </div>
                                                <div class="text-muted mb-3">Total Properties</div>
                                            </div>
                                            <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                                                <a class="fw-medium" href="{{ url('/properties') }}">
                                                    View all properties
                                                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6 col-xl-3" id="dashbg">
                                        <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                                            <div class="block-content block-content-full flex-grow-1">
                                                <div class="fs-1 fw-bold">14.6%</div>
                                                <div class="text-muted mb-3">Total Agents</div>
                                            </div>
                                            <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                                                <a class="fw-medium" href="javascript:void(0)">
                                                    View all agents
                                                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-xl-3" id="dashbg">
                                        <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                                            <div class="block-content block-content-full flex-grow-1">
                                                <div class="fs-1 fw-bold">386</div>
                                                <div class="text-muted mb-3">New Messages</div>
                                            </div>
                                            <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                                                <a class="fw-medium" href="javascript:void(0)">
                                                    View new messages
                                                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <!-- <div class="block block-rounded" id="store-growth">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">
                                            Store Growth
                                        </h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                            <button type="button" class="btn-block-option">
                                                <i class="si si-wrench"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content block-content-full">
                                        <div class="row">
                                            <div class="col-md-5 col-xl-4 d-md-flex align-items-md-center">
                                                <div class="p-md-2 p-lg-3">
                                                    <div class="py-3">
                                                        <div class="fs-1 fw-bold">1,430</div>
                                                        <div class="fw-semibold">Your new website Customers</div>
                                                        <div class="py-3 d-flex align-items-center">
                                                            <div class="bg-success-light p-2 rounded me-3">
                                                                <i class="fa fa-fw fa-arrow-up text-success"></i>
                                                            </div>
                                                            <p class="mb-0">
                                                                You have a <span class="fw-semibold text-success">12% customer growth</span> in the last 30 days. This is amazing, keep it up!
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="py-3">
                                                        <div class="fs-1 fw-bold">65</div>
                                                        <div class="fw-semibold">New products added</div>
                                                        <div class="py-3 d-flex align-items-center">
                                                            <div class="bg-success-light p-2 rounded me-3">
                                                                <i class="fa fa-fw fa-arrow-up text-success"></i>
                                                            </div>
                                                            <p class="mb-0">
                                                                You’ve managed to add <span class="fw-semibold text-success">12% more products</span> in the last 30 days. Store’s portfolio is growing!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-xl-8 d-md-flex align-items-md-center">
                                                <div class="p-md-2 p-lg-3 w-100" style="height: 450px;">
                                                    <canvas id="js-chartjs-analytics-bars"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="block block-rounded block-mode-loading-refresh">
                                            <!-- <div class="block-header block-header-default">
                                                <h3 class="block-title">
                                                    Latest Orders
                                                </h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                        <i class="si si-refresh"></i>
                                                    </button>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="si si-chemistry"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="far fa-fw fa-dot-circle opacity-50 me-1"></i> Pending
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="far fa-fw fa-times-circle opacity-50 me-1"></i> Canceled
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="far fa-fw fa-check-circle opacity-50 me-1"></i> Completed
                                                            </a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="fa fa-fw fa-eye opacity-50 me-1"></i> View All
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <div class="block-content">
                                                <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th>Product</th>
                                                            <th class="d-none d-xl-table-cell">Date</th>
                                                            <th>Status</th>
                                                            <th class="d-none d-sm-table-cell text-end" style="width: 120px;">Price</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-semibold">B7,Panichankemi,Nuwara Eliya, Sri Lanka</span>
                                                            </td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <span class="fs-sm text-muted">today</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold text-warning">Pending..</span>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                                                $1199,99
                                                            </td>
                                                            <td class="text-center text-nowrap fw-medium">
                                                                <a href="javascript:void(0)">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-semibold">B7,Panichankemi,Nuwara Eliya, Sri Lanka</span>
                                                            </td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <span class="fs-sm text-muted">today</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold text-warning">Pending..</span>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                                                $2.299,00
                                                            </td>
                                                            <td class="text-center text-nowrap fw-medium">
                                                                <a href="javascript:void(0)">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-semibold">56 Paradise Lane, Galle</span>
                                                            </td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <span class="fs-sm text-muted">today</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold text-warning">Pending..</span>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                                                $1200,00
                                                            </td>
                                                            <td class="text-center text-nowrap fw-medium">
                                                                <a href="javascript:void(0)">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-semibold">B7,Panichankemi,Nuwara Eliya, Sri Lanka</span>
                                                            </td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <span class="fs-sm text-muted">today</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold text-danger">Canceled</span>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                                                $399,00
                                                            </td>
                                                            <td class="text-center text-nowrap fw-medium">
                                                                <a href="javascript:void(0)">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-semibold">B7,Panichankemi,Nuwara Eliya, Sri Lanka</span>
                                                            </td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <span class="fs-sm text-muted">yesterday</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold text-success">Completed</span>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                                                $349,00
                                                            </td>
                                                            <td class="text-center text-nowrap fw-medium">
                                                                <a href="javascript:void(0)">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-semibold">B7,Panichankemi,Nuwara Eliya, Sri Lanka</span>
                                                            </td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <span class="fs-sm text-muted">yesterday</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold text-success">Completed</span>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                                                $999,00
                                                            </td>
                                                            <td class="text-center text-nowrap fw-medium">
                                                                <a href="javascript:void(0)">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-semibold">B7,Panichankemi,Nuwara Eliya, Sri Lanka</span>
                                                            </td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <span class="fs-sm text-muted">yesterday</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold text-success">Completed</span>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                                                $39,99
                                                            </td>
                                                            <td class="text-center text-nowrap fw-medium">
                                                                <a href="javascript:void(0)">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-semibold">123 Palm Avenue, Colombo 5</span>
                                                            </td>
                                                            <td class="d-none d-xl-table-cell">
                                                                <span class="fs-sm text-muted">yesterday</span>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold text-success">Completed</span>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                                                $499,00
                                                            </td>
                                                            <td class="text-center text-nowrap fw-medium">
                                                                <a href="javascript:void(0)">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                                                <a class="fw-medium" href="javascript:void(0)">
                                                    View all orders
                                                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-4 d-flex flex-column">
                                        <div class="block block-rounded">
                                            <div class="block-content block-content-full d-flex justify-content-between align-items-center flex-grow-1">
                                                <div class="me-3">
                                                    <p class="fs-3 fw-bold mb-0">
                                                        35,698
                                                    </p>
                                                    <p class="text-muted mb-0">
                                                        Completed orders
                                                    </p>
                                                </div>
                                                <div class="item rounded-circle bg-body">
                                                    <i class="fa fa-check fa-lg text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                                                <a class="fw-medium" href="javascript:void(0)">
                                                    View Archive
                                                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="block block-rounded text-center d-flex flex-column flex-grow-1">
                                            <div class="block-content block-content-full d-flex align-items-center flex-grow-1">
                                                <div class="w-100">
                                                    <div class="item rounded-3 bg-body mx-auto my-3">
                                                        <i class="fa fa-archive fa-lg text-primary"></i>
                                                    </div>
                                                    <div class="fs-1 fw-bold">75</div>
                                                    <div class="text-muted mb-3">Products out of stock</div>
                                                    <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-warning bg-warning-light">
                                                        5% of portfolio
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                                                <a class="fw-medium" href="javascript:void(0)">
                                                    Order supplies
                                                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                        </main>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection