
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.home') }}"><i class="icon-speedometer"></i> لوحة التحكم
                    </a>
                </li>

               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.categories.index') }}"><i class="icon-layers "></i>
                    @lang('site.categories')</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.projects.index') }}"><i class="icon-home "></i>
                    @lang('site.projects')</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.setting.logs') }}"><i class="icon-magnifier "></i>
                    سجل العمليات</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.promoters.index') }}"><i class="icon-people "></i>
                    الوسطاء</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.setting.contact') }}"><i class="fa fa-comments-o  "></i>
                    الرسائل</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.setting.social') }}"><i class="icon-share "></i>
                    مواقع التواصل</a>
               </li>

               <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.setting.cover') }}"><i class="icon-camera "></i>
                 الصور</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.setting.settingsText') }}"><i class="icon-info "></i>
                 معلومات الموقع</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.about.create') }}"><i class="icon-info "></i>
                 اعدادات المحتوى</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.setting.chart') }}"><i class="icon-info "></i>
                 الاسهم</a>
            </li>
                <li class="nav-title">
                    الأدوات
                </li>

               <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.setting.changePassword') }}"><i class="icon-lock "></i>
                    تغيير كلمة السر</a>
               </li>
                <li class="nav-item nav-dropdown">
                </li>
            </ul>
        </nav>
    </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="{{ route('home') }}"
        target="_blank">@lang('site.home')!</a>
    <div class="navigation-background"></div>
