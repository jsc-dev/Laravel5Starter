<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">               
                <i class="glyphicon glyphicon-home"></i>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    @if(Auth::user())
                    @include('user_menu')
                    @else
                    <li>
                        <a href="{{ URL::to('users/login') }}">
                            <i class="glyphicon glyphicon-log-in"></i> {{ trans('users.login') }}
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
