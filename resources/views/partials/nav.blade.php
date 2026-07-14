<nav class="main-nav">
    <button class="menu-toggle" id="menuToggle" aria-label="Open menu">
        <span></span>
        <span></span>
        <span></span>
    </button>
<ul class="nav-menu" id="navMenu">
    <li><a href="{{ route('home') }}"
       class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
      <i data-lucide="house"></i>
            Home
        </a>
    </li>
    <li><a href="{{ route('aboutme') }}"
           class="nav-link {{ request()->routeIs('aboutme') ? 'active' : '' }}">
            <i data-lucide="circle-user"></i>
            About Me
        </a>
    </li>
    <li>
        <a href="{{ route('blog.index') }}"
           class="nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }}">
            <i data-lucide="book"></i>
            Blog
        </a>
    </li>
    <li><a href="http://linkedin.com/in/andy-purvis">
            <i data-lucide="earth"></i>
            LinkedIn
        </a>
    </li>
    <li><a href="{{asset('resume.pdf')}}">
            <i data-lucide="sticky-note"></i>
            Resume
        </a>
    </li>
</ul>
</nav>
