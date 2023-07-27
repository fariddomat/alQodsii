
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('moderator.home') }}"><i class="icon-speedometer"></i> لوحة التحكم
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('moderator.projects.index') }}"><i class="icon-home "></i>
                     @lang('site.projects')</a>
                </li>

                <li class="nav-title">
                    الأدوات
                </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('moderator.setting.changePassword') }}"><i class="icon-lock "></i>
                    تغيير كلمة السر</a>
               </li>
                <li class="nav-item nav-dropdown">
                </li>
            </ul>
        </nav>
    </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="{{ route('home') }}"
        target="_blank">@lang('site.home')!</a>
    <div class="navigation-background"></div>
