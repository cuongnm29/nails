<div class="modal fade" id="signin-modal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Nav tabs -->
            <div class="modal-header bg-secondary">
                <ul class="nav nav-tabs card-header-tabs">
                   
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#signin"><i class="icon icon-lock"></i> Sign
                            in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#signup"><i class="icon icon-user"></i> Sign up</a>
                    </li>
                   
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span>
            </div>
            <!-- Tab panes -->
            <div class="tab-content py-4">

                <form id="signin" action="{{ route('member.login.submit') }}" method="POST" enctype="multipart/form-data" class="needs-validation tab-pane  container active" autocomplete="off" novalidate=""
                    id="signin-tab">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="si-email">Email address</label>
                        <input class="form-control" type="email" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="si-password">Password</label>
                        <div class="password-toggle">
                            <input class="form-control" type="password" id="password" name="password">
                        </div>
                    </div>
                    <div class="mb-3 d-flex flex-wrap justify-content-between">
                        <a class="fs-sm" href="#">Forgot password?</a>
                    </div>
                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
                </form>
                <div  id="signup" class="needs-validation tab-pane fade container" autocomplete="off" novalidate="" id="signin-tab">
                    <form action="{{ route('member.register.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">First name</label>
                            <input class="form-control" type="text" id="firstname" name="firstname" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Last name</label>
                            <input class="form-control" type="text" id="lastname" name="lastname" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" type="email" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input class="form-control" type="password" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input class="form-control" type="password" id="confirmpassword" name="confirmpassword" required>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
                    </form>
                </div>

            </div>


        </div>
    </div>
</div>