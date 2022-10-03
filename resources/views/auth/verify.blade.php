
<x-head_ixioxi />

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="/" class="logo-link">
                                <img class="logo-dark logo-img logo-img-lg" src="{{asset('demo/images/logo-ixioxi.png')}}" srcset="{{asset('demo/images/logo-ixioxi.png 2x')}}" alt="logo-dark">
                            </a>
                        </div>

                        


                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('Un nouveau lien de vérification a été envoyé à votre adresse email.') }}
                                    </div>
                                @endif
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title"><strong>Faites vérifier votre email</strong></h5>
                                        <div class="nk-block-des">
                                            <p>Avant de poursuivre, veuillez vérifier si vous avez reçu un lien de vérification dans votre courrier électronique. Si vous n'avez pas reçu l'email,</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <form method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Envoyer une autre demande</button>
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
