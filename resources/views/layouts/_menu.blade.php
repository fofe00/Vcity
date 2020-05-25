{{--<div class="ui secondary container menu">
    <a class="item active">Home</a>
    <div class="ui dropdown item">
        Comptes
        <i class="dropdown icon"></i>
        <div class="menu">
            <a class="item" href="{{route('water')}}"><i class="shower icon"></i> EAU</a>
            <a class="item" href="{{ route('ligth') }}"><i class="bolt icon"></i> Electricité</a>
            <a class="item"><i class="settings icon"></i> Account Settings</a>
        </div>
    </div>
    <div class="right menu">
        <a class="ui item">
            Logout
        </a>
    </div>
</div>--}}

<div class="ui secondary pointing menu">
    <a class="item active">
        Home
    </a>
    <div class="ui dropdown item">
        Comptes
        <i class="dropdown icon"></i>
        <div class="menu">
            <a class="item" href="{{route('water')}}"><i class="shower icon"></i> EAU</a>
            <a class="item" href="{{ route('ligth') }}"><i class="bolt icon"></i> Electricité</a>
            <a class="item"><i class="settings icon"></i> Account Settings</a>
        </div>
    </div>
    <div class="right menu">
        <a class="item">
            <i class="settings icon"></i> Settings
        </a>
        <a class="ui item" href="{{ route('tlogout') }}">
            Logout
        </a>
    </div>
</div>
