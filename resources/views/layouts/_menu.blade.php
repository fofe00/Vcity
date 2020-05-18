<div class="ui left fixed vertical menu">
    <div class="item ">
        <img class="ui mini circular centered image" src="{{ asset('img/1.png') }}">

    </div>
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
    <div class="item ">
        <a class="ui button primary" href="">Log-out</a>
    </div>
</div>