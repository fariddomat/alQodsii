
    <div class="sidebar">

        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="icon-speedometer"></i> لوحة التحكم
                    </a>
                </li>

               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.categories.index') }}"><i class="icon-info "></i>
                    @lang('site.categories')</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.projects.index') }}"><i class="icon-plus "></i>
                    @lang('site.projects')</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.setting.logs') }}"><i class="icon-magnifier "></i>
                    سجل العمليات</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.promoters.index') }}"><i class="icon-user "></i>
                    الوسطاء</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.setting.contact') }}"><i class="icon-plus "></i>
                    الرسائل</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.setting.social') }}"><i class="icon-plus "></i>
                    مواقع التواصل</a>
               </li>

                <li class="nav-title">
                    الأدوات
                </li>

               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.setting.changePassword') }}"><i class="icon-plus "></i>
                    تغيير كلمة السر</a>
               </li>
                <li class="nav-item nav-dropdown">

                </li>

            </ul>

        </nav>
    </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="{{ route('home') }}"
        target="_blank">@lang('site.home')!</a>
    <div class="navigation-background"></div>
