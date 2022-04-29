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
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">Profile Info</li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Profile Info</h1>
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
                                src="/storage/app/{{$member->photo }}"></div>
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
            <!-- Toolbar-->
            <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
                <h6 class="fs-base text-light mb-0">Update you profile details below:</h6><a
                    class="btn btn-primary btn-sm" href="/member/logout"><i class="ci-sign-out me-2"></i>Sign out</a>
            </div>
            <!-- Profile form-->
            <form action="{{ route('member.update.submit', $member->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            @method('PUT')
                <div class="bg-secondary rounded-3 p-4 mb-4">
                    <div class="d-flex align-items-center"><img class="rounded" src="/storage/app/{{$member->photo }}" width="90">
                        <div class="ps-3 mg-13">
                            <div class="upload-btn-wrapper">
                                <button class="btn btn-light btn-shadow btn-sm mb-2 text-file"><i
                                        class="ci-loading me-2"></i>Change avatar</button>
                                <input type="file" name="photo" id="photo" />
                            </div>



                            <div class="p mb-0 fs-ms text-muted-upload">Upload JPG, GIF or PNG image. 300 x 300 required.</div>
                        </div>
                    </div>
                </div>
                <div class="row gx-4 gy-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="account-fn">First Name</label>
                        <input class="form-control" type="text" name="firstname" id="firstname" value="{{$member->firstname}}">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="account-ln">Last Name</label>
                        <input class="form-control" type="text" name="lastname" id="lastname" value="{{$member->lastname}}">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="account-email">Email Address</label>
                        <input class="form-control" type="email" id="email" name="email"  value="{{$member->email}}"
                            disabled="">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="account-phone">Phone Number</label>
                        <input class="form-control" type="text" id="phone" name="phone" value="{{$member->phone}}"
                            required="">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="account-pass">New Password</label>
                        <div class="password-toggle">
                            <input class="form-control" type="password" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="account-confirm-pass">Confirm Password</label>
                        <div class="password-toggle">
                            <input class="form-control" type="password" id="account-confirm-pass" required>

                        </div>
                    </div>
                    <div class="col-12">
                        <hr class="mt-2 mb-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <input  type="hidden" id="id" name="id" value="{{$member->id}}">
                        <input class="btn btn-primary mt-3 mt-sm-0" type="submit" value="Update profile">
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>
@endsection