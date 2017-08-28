<!-- Nav -->
<div class="navbar-fixed">
    <nav class= "blue-grey darken-4">
        <div class="nav-wrapper container">
            <a  href="https://www.nodestudio.com.br" class="brand-logo center">
                <img class="img-logo" src="https://www.nodestudio.com.br/img/logo.png">
            </a>


            <ul class="left hide-on-med-and-down">
                <li>
                    <a href="https://www.nodestudio.com.br/home" class="waves-effect waves-light light"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>

                <li>
                    <a href="https://www.nodestudio.com.br/blog" class="waves-effect waves-light light"><i class="fa fa-rss" aria-hidden="true"></i> Blog</a>
                </li>



            </ul>


            <ul class="right hide-on-med-and-down">
                @if (Auth::check())
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>



                <li>
                    <div class="chip">
                        <img class="circle responsive " width="35" src="https://www.nodestudio.com.br/uploads/default.png">
                        Admin
                    </div>
                </li>
                <li>

                    <a class='dropdown-button' data-beloworigin="true" href='#' data-activates='dropdown1'><i class="material-icons">keyboard_arrow_down</i></a>

                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="">Painel </a></li>
                        <li><a href="">Editar perfil </a></li>
                        <li><a href="{{route('logout')}}">Sair </a></li>
                    </ul>
                </li>
                @else
                    <a href="https://www.nodestudio.com.br/login" class="waves-effect waves-light btn light-blue accent-2">Login</a>

            </ul>
            @endif


            <ul id="slide-out" class="side-nav">
                @if (Auth::check())
                    <li><div class="user-view">
                            <div class="background">
                                <img src="{{URL::asset('images/blue_background.jpg')}}">
                            </div>
                            <a href="#!user"><img class="circle" src="{{URL::asset('images/user.png')}}"></a>
                            <a href="#!name"><span class="white-text name">Admin</span></a>
                        </div></li>
                    <li><a href="#" id="toggle-search"><i class="material-icons">search</i></a></li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li>
                                <a class="collapsible-header">Account<i class="mdi-navigation-arrow-drop-down material-icons">account_circle</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="#!"><i class="material-icons">settings</i>Settings</a></li>
                                        <li><a href="{{route('logout')}}"><i class="material-icons">exit_to_app</i>Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#!">First Sidebar Link</a></li>
                    <li><a href="#!">Second Sidebar Link</a></li>
                @else
                @endif
            </ul>






            <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        </div>
    </nav>
</div>


