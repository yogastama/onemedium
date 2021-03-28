<nav class="navigation-bottom">
    <div class="row">
        <div class="col-3 text-center py-2 {{ isset($menu) && $menu == 'home' ? 'child-active':'' }} ">
            <a href="{{ route('home') }}" class="link-nav-bottom">
                <i class="icon-home"></i>
                <div class="child-nav-name">Home</div>
            </a>
        </div>
        <div class="col-3 text-center py-2 {{ isset($menu) && $menu == 'my_social_media' ? 'child-active':'' }} ">
            <a href="{{ route('my_social_media') }}" class="link-nav-bottom">
                <i class="icon-globe"></i>
                <div class="child-nav-name">My Social Media</div>
            </a>
        </div>
        <div class="col-3 text-center py-2 {{ isset($menu) && $menu == 'publishing' ? 'child-active':'' }} ">
            <a href="" class="link-nav-bottom">
                <i class="icon-rocket"></i>
                <div class="child-nav-name">Publishing</div>
            </a>
        </div>
        <div class="col-3 text-center py-2 {{ isset($menu) && $menu == 'account' ? 'child-active':'' }} ">
            <a href="{{ route('account') }}" class="link-nav-bottom">
                <i class="icon-user"></i>
                <div class="child-nav-name">Account</div>
            </a>
        </div>
    </div>
</nav>