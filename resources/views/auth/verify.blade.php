
<x-head_ixioxi />

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-dark logo-img logo-img-lg" src="{{asset('demo/images/logo-ixioxi.png')}}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                        </div>

                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title"><strong>Reset password</strong></h5>
                                        <div class="nk-block-des">
                                            <p>Before proceeding, please check your email for a verification link. If you did not receive the email,</p>
                                        </div>
                                    </div>
                                </div>
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Send Another Request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<x-footer_ixioxi />   
