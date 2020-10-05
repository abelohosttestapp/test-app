<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="https://abelohost.com/wp-content/uploads/2015/10/Offshore-Hosting.png">
            </a>
        </div>
        @if (Auth::check())
        <p class="navbar-text navbar-right">
            {{Auth::user()->name}}&nbsp;{{Auth::user()->email}}
        </p>
        @endif
    </div><!-- /.container-fluid -->
</nav>