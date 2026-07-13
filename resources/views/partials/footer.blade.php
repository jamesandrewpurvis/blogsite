<footer class="sticky-footer">
    <div class="left-footer">
        <p>Andy Purvis</p>
        <span class="footer-tag">Programming, Accounting, Blogging</span>
        <span class="footer-line"></span>
        <p class="closing-tag">Building & Learning...</p>
    </div>
    <div class="middle-footer">
        <p>Quick Links</p>
        <ul>
            <li><a href="{{ route('home') }}"
                   class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <li><a href="{{ route('aboutme') }}"
                   class="nav-link {{ request()->routeIs('aboutme') ? 'active' : '' }}">About me</a>
            <li><a href="{{ route('blog') }}"
                   class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
            <li><a class="#">Resume</a></li>
            <li><a class="#">LinkedIn</a></li>
        </ul>
    </div>
    <div class="right-footer">
        <p>Social Media</p>
        <p>linkedin.com/in/andy_purvis</p>
        <p>andy@andypurvis.com</p>
        <p>United States</p>
    </div>
    <div class="copyright-line">
        <p>&copy;2026 Andy Purvis. All Rights Reserved</p>
    </div>
</footer>
