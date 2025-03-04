<nav class="header__navigation">
    <ul>
        <li><a class="header__navigation-main-link" href="/">Home</a></li>
        <li><a class="header__navigation-main-link" href="/category/all">All</a></li>
        
        @foreach ($tree as $node)
            @if ($node['children']->isNotEmpty())
                <li>
                    <div class="header__submenu-title">
                        <a class="header__navigation-main-link" href="/category/{{ $node->alias }}">{{ $node->title }}</a>
                    
                        <div class="header__submenu">
                            @include('components.submenu', ['tree' => $node['children']])
                        </div>
                    </div>
                </li>
            @else
                <li><a class="header__navigation-main-link" href="/category/{{ $node->alias }}">{{ $node->title }}</a></li>
            @endif
        @endforeach
    </ul>
</nav>