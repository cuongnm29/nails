<section class="beauty-spa-booking-section home-2 section-padding">
    <div class="container">
        <div class="row">

            <div class="section-heading-subcrible text-center">
                <h2 class="section-title">Get All Special Offers!</h2>
                <div class="section-des">Sign up for our newsletter and get all the latest tips and tricks to polish
                    your nails at a good rate!</div>
                <form action="{{ route('subscribe.submit') }}" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf
                    <div class="jet-subscribe-form__input-group">
                        <div class="jet-subscribe-form__fields {{ $errors->has('email') ? 'has-error' : '' }}">
                            <input class="jet-subscribe-form__input" type="email" name="email" placeholder="e-mail">
                            @if($errors->has('email'))
                            <em class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </em>
                            @endif
                        </div>
                        <div class="jet-subscribe-form__submit elementor-button elementor-size-md">
                            <button class="jet-subscribe-form__submit-text" type="submit"> Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>