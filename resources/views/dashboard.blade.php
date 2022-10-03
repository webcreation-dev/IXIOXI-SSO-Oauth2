<x-head_ixioxi />

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">



        <div class="nk-main ">

            <div class="nk-wrap ">
                <x-nav_ixioxi />
                <div class="nk-content ">
                    <div class="container">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">

                                {{-- @if (session('notCreateNow'))
                                    <div class="alert alert-info" role="alert">
                                        {!! session('notCreateNow') !!}
                                    </div>
                                @endif --}}
                                

                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">

                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">
                                                Nos Applications</h3>
                                        </div><!-- .nk-block-head-content -->

                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">

                                    @if (hasRole(Auth::user()->id) != 'Professionnel')
                                        <div
                                            class="col-xxl-3 col-lg-4 col-sm-6 {{ hasCrm(Auth::user()->id) ? '' : 'disable'}}">
                                            <div class="card card-bordered product-card">
                                                <div class="product-thumb hover-overlay ripple">
                                                    <a href="http://127.0.0.1:8080/">
                                                        <img class="card-img-top img-fluid"
                                                            src="{{asset('demo/images/test7.jpg')}}" alt="">
                                                    </a>
                                                    {{-- <ul class="product-badges">
                                                        <li><span class="badge bg-danger">BNT</span></li>
                                                    </ul> --}}
                                                </div>
                                                <div class="card-inner text-center">
                                                    <ul class="product-tags">
                                                        <li><a href="http://127.0.0.1:8080/">Suivez votre équipe commercial
                                                                depuis notre plateforme</a></li>
                                                    </ul>
                                                    <h5 class="product-title"><a
                                                            href="http://127.0.0.1:8080/">CRM</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                        <div
                                            class="col-xxl-3 col-lg-4 col-sm-6 {{ hasCachet(Auth::user()->id) ? '' : 'disable'}}">
                                            <div class="card card-bordered product-card">
                                                <div class="product-thumb hover-overlay ripple">
                                                    <a href="http://127.0.0.1:8081/sso/login">
                                                        <img class="card-img-top"
                                                            src="{{asset('demo/images/test3.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="card-inner text-center">
                                                    <ul class="product-tags">
                                                        <li><a href="http://127.0.0.1:8081/sso/login">Accéder à SmartContact</a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="product-title"><a href="#">SMART CONTACT</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-xxl-3 col-lg-4 col-sm-6 disable">
                                            <div class="card card-bordered product-card">
                                                <div class="product-thumb hover-overlay ripple">
                                                    <a href="#">
                                                        <img class="card-img-top"
                                                            src="{{asset('demo/images/test6.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="card-inner text-center ">
                                                    <ul class="product-tags">
                                                        <li><a href="#">Commandez vos cachets pré-encrés en express</a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="product-title"><a href="#">Easy Control</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-4 col-sm-6 disable">
                                            <div class="card card-bordered product-card">
                                                <div class="product-thumb hover-overlay ripple">
                                                    <a href="#">
                                                        <img class="card-img-top"
                                                            src="{{asset('demo/images/test5.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="card-inner text-center">
                                                    <ul class="product-tags">
                                                        <li><a href="#">Commandez vos cachets pré-encrés en express</a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="product-title"><a href="#">Print Jobs</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-4 col-sm-6 disable">
                                            <div class="card card-bordered product-card">
                                                <div class="product-thumb hover-overlay ripple">
                                                    <a href="#">
                                                        <img class="card-img-top"
                                                            src="{{asset('demo/images/test6.jpg')}}" alt="">
                                                    </a>

                                                </div>
                                                <div class="card-inner text-center">
                                                    <ul class="product-tags">
                                                        <li><a href="#">Commandez vos cachets pré-encrés en express</a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="product-title"><a href="#">WeShop</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-4 col-sm-6 disable">
                                            <div class="card card-bordered product-card">
                                                <div class="product-thumb hover-overlay ripple">
                                                    <a href="#">
                                                        <img class="card-img-top"
                                                            src="{{asset('demo/images/test7.jpg')}}" alt="">
                                                    </a>
                                                    <ul class="product-badges">
                                                        <li><span class="badge bg-danger">Hot</span></li>
                                                    </ul>

                                                </div>
                                                <div class="card-inner text-center">
                                                    <ul class="product-tags">
                                                        <li><a href="#">Commandez vos cachets pré-encrés en express</a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="product-title"><a href="#">Gestion de Stock</a></h5>
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>
                                </div><!-- .nk-block -->

                            </div>
                        </div>
                    </div>
                </div>
                <x-foot_ixioxi />
            </div>

        </div>
    </div>


    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any"
        data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
        
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Nouvel Utilisateur</h5>
                <div class="nk-block-des">
                    <p>Envoyer un lien d'inscription</p>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        
        <div class="nk-block">

            <form method="POST" action="{{ route('send.mail') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label" for="product-title">Email</label>
                            <div class="form-control-wrap">
                                <input id="email" name="email" type="email" class="form-control form-control-lg"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="nk-block-head-content">
                        <div class="nk-block-des">
                            <p>Ajouter des accès aux applications pour cet utilisateur</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="crm" id="fv-com-sms">
                                <label class="custom-control-label" for="fv-com-sms">CRM</label>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="cachet_express"
                                    id="fv-com-phone">
                                <label class="custom-control-label" for="fv-com-phone">Cachet</label>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-12">
                        <button type="submit" style="width: 100%;" class="btn btn-primary justify-content-center">
                            {{-- <em class="icon ni ni-plus"></em> --}}
                            <span>Envoyer</span></button>
                    </div>
                </div>
            </form>
        </div><!-- .nk-block -->
    </div>



    <x-footer_ixioxi />