<x-head_ixioxi />

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">

        <div class="nk-main ">

            <div class="nk-wrap ">
                <x-nav_ixioxi />
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Liste des membres</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Vous etes au total {{count($users)}} dans votre équipe.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->


                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->

                                @if (session('sendLinkRegister'))
                                    <div class="alert alert-success" role="alert">
                                        {!! session('sendLinkRegister') !!}
                                    </div>
                                @endif
                                

                                @if (session('updateAccess'))
                                    <div class="alert alert-success" role="alert">
                                        {!! session('updateAccess') !!}
                                    </div>
                                @endif

                                @if (session('notModifyAccess'))
                                    <div class="alert alert-danger" role="alert">
                                        {!! session('notModifyAccess') !!}
                                    </div>
                                @endif

                                @if (session('notSendLinkRegister'))
                                <div class="alert alert-danger" role="alert">
                                    {!! session('notSendLinkRegister') !!}
                                </div>
                            @endif


                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">

                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">

                                                        <div class="nk-tb-col"><span class="sub-text">Utilisateur</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb"><span
                                                                class="sub-text">Nom</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span
                                                                class="sub-text">Email</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span
                                                                class="sub-text">Profil</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Date
                                                                d'inscription</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span
                                                                class="sub-text">Status</span></div>
                                                        <div
                                                            class="nk-tb-col tb-col-md {{ hasProfile(Auth::user()->id) ? 'disable' : '' }}">
                                                            <span class="sub-text">Accès</span></div>
                                                    </div>
                                                    {{-- <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick
                                                                    View</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View
                                                                    Details</span></a></li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-repeat"></em><span>Transaction</span></a>
                                                        </li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-activity-round"></em><span>Activities</span></a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-shield-star"></em><span>Reset
                                                                    Pass</span></a></li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-shield-off"></em><span>Reset
                                                                    2FA</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend
                                                                    User</span></a></li>
                                                    </ul> --}}

                                                    @foreach ($users as $user)
                                                    <div class="nk-tb-item">

                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-primary">
                                                                    <span>{{$user->name[0] }}</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead">{{$user->name }} <span
                                                                            class="dot dot-success d-md-none ms-1"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="nk-tb-col tb-col-mb"><span
                                                                class="tb-amount">{{$user->email }}</span></div>

                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>{{hasRole($user->id)}}</span>
                                                        </div>

                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>{{$user->created_at }}</span>
                                                        </div>

                                                        <div class="nk-tb-col tb-col-md ">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>

                                                        <div
                                                            class="nk-tb-col nk-tb-col-tools {{ hasProfile(Auth::user()->id) ? 'disable' : '' }}">
                                                            <ul class="nk-tb-actions gx-1 justify-content-start">
                                                                <li>
                                                                    <a href="{{URL::signedRoute('update.access', ['id' => $user->id]) }}"
                                                                        class="btn btn-trigger btn-icon"
                                                                        data-bs-toggle="tooltip" title="">
                                                                        <em class="icon ni ni-activity-round"></em>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                    @foreach ($pendings as $pending)
                                                    <div class="nk-tb-item">

                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-primary">
                                                                    <span>I</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead">En cours <span
                                                                            class="dot dot-success d-md-none ms-1"></span></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="nk-tb-col tb-col-mb"><span
                                                                class="tb-amount">{{$pending->email }}</span></div>

                                                        <div class="nk-tb-col tb-col-md"><span>En cours</span></div>

                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>En cours</span>
                                                        </div>

                                                        <div class="nk-tb-col tb-col-md ">
                                                            <span class="tb-status text-warning">En cours</span>
                                                        </div>

                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1 justify-content-start">
                                                                <li>
                                                                    <a href="{{URL::signedRoute('update.access.before', ['email' => $pending->email]) }}"
                                                                        class="btn btn-trigger btn-icon"
                                                                        data-bs-toggle="tooltip">
                                                                        <em class="icon ni ni-activity-round"></em>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>




                                <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct"
                                    data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true"
                                    data-simplebar>

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
                                                            <input id="email" name="email" type="email"
                                                                class="form-control form-control-lg" required>
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
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="crm" id="fv-com-sms">
                                                            <label class="custom-control-label"
                                                                for="fv-com-sms">CRM</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="cachet_express" id="fv-com-phone">
                                                            <label class="custom-control-label"
                                                                for="fv-com-phone">Cachet</label>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                                <div class="col-12">
                                                    <button type="submit" style="width: 100%;"
                                                        class="btn btn-primary justify-content-center">
                                                        {{-- <em class="icon ni ni-plus"></em> --}}
                                                        <span>Envoyer</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- .nk-block -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <x-foot_ixioxi />
            </div>

        </div>
    </div>

    <x-footer_ixioxi />