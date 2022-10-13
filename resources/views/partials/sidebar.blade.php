<nav class="id=" style=" width: 250px;
position: fixed;
top: 0;
left: 0;
height: 100vh;
z-index: 999;
background: #ae6ff1;
color: #fff;
transition: all 0.3s;">
    <div class="sidebar-header" class="text-light">
        <h3>Sidebar</h3>
    </div>

    <ul class="text-light">
        <p>Teams</p>
        @if (auth()->check())
            @foreach($teamsWithNews as $teamNews)
            <li>
                <a class="text-light" href="/news/teams/{{$teamNews->id}}">{{ $teamNews->name }} </a>
            </li>
            @endforeach
        @endif
    </ul>

</nav>