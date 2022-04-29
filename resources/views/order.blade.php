@extends('layouts.frontend')
@section('content')
<div class="page-title-overlap bg-dark pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a>
                    </li>
                    <li class="breadcrumb-item text-nowrap"><a href="#">Account</a>
                    </li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">Order</li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Order</h1>
        </div>
    </div>
</div>

<div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5">
            <div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
                <div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
                    <div class="d-md-flex align-items-center">
                        <div class="img-thumbnail rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0"
                            style="width: 6.375rem;"><span class="badge bg-warning position-absolute end-0 mt-n2"
                                data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Reward points">{{$member->point}}</span><img
                                class="rounded-circle"
                                src="{{asset('/avatar/')}}/{{$member->photo}}"></div>
                        <div class="ps-md-3">
                            <h3 class="fs-base mb-0">{{$member->firstname}} {{$member->lastname}}</h3><span
                                class="text-accent fs-sm">{{$member->email}}</span>
                        </div>
                    </div><a class="btn btn-primary d-lg-none mb-2 mt-3 mt-md-0" href="#account-menu"
                        data-bs-toggle="collapse" aria-expanded="true"><i class="ci-menu me-2"></i>Account menu</a>
                </div>
                <div class="collapse" id="account-menu" style="display:block">
                    <div class="bg-secondary px-4 py-3">
                        <h3 class="fs-sm mb-0 text-muted">Dashboard</h3>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                                href="/member/order"><i class="ci-bag opacity-60 me-2"></i>Orders</a></li>
                        <li class="border-bottom mb-0"><a
                                class="nav-link-style d-flex align-items-center px-4 py-3 active"
                                href="/member/profile"><i class="ci-user opacity-60 me-2"></i>Profile info</a></li>
                        <li class="d-lg-none border-top mb-0"><a
                                class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.html"><i
                                    class="ci-sign-out opacity-60 me-2"></i>Sign out</a></li>
                    </ul>
                </div>
            </div>
        </aside>
        <!-- Content  -->
        <section class="col-lg-8">
          @if(asset($order))
            <!-- Profile form-->
            <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.order.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.time') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.vourcher') }}
                        </th>
                      
                        <th>
                            {{ trans('cruds.order.fields.service') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order as $key =>  $item)
                    <tr data-entry-id="{{ $item->id }}">
                        <td>
                            <span>{{ ($key+1) }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->dateOrder }} {{ $item->timeOrder }}</span>
                        </td>
                        <td class="treeview">
                            <span>{{ $item->firstname . ' ' .$item->lastname  }}</span>
                        </td>
                        <td class="treeview">
                        <span>{{ isset($item->vourcher)?$item->vourcher->name :"N/A" }}</span>
                        </td>
                        
                        <td class="treeview">
                            <span>{{ $item->category->name }}</span>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
       @endif
        </section>
    </div>
</div>
@endsection