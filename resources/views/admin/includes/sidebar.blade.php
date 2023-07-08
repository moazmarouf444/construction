<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="" class="media-left"><img src="{{URL::to('admin/assets/uploads/avatars/'.auth()->guard('admin')->user()->avatar)}}" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">{{auth()->guard('admin')->user()->name}}</span>
                        <div class="text-size-mini text-muted">
                            <i class=" icon-briefcase3 text-size-small"></i>
                        </div>
                    </div>
                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="{{route('admin.logout')}}"><i class="icon-switch2"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                        <li {{Request::is('admin/dashboard') ? 'class=active' :''}}>
                            <a href="{{route('admin.dashboard.index')}}"><i class="fa fa-search" aria-hidden="true"></i> <span>الرئيسية</span></a>
                        </li>
                </ul>
            </div>

            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li {{Request::is('admin/common-questions') ? 'class=active' :''}}>
                        <a href="{{route('admin.questions.index')}}"><i class="fa fa-question" aria-hidden="true"></i> <span>الاسئله الشائعه</span></a>
                    </li>
                </ul>
            </div>

            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li {{Request::is('admin/introductions/edit') ? 'class=active' :''}}>
                        <a href="{{route('admin.introductions.edit')}}"><i class="fa fa-columns" aria-hidden="true"></i> <span>المقدمه</span></a>
                    </li>
                </ul>
            </div>

            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li {{Request::is('admin/facts') ? 'class=active' :''}}>
                        <a href="{{route('admin.facts.index')}}"><i class="fa fa-list" aria-hidden="true"></i> <span>حقائق الشركه</span></a>
                    </li>
                </ul>
            </div>

            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li {{Request::is('admin/new-company') ? 'class=active' :''}}>
                        <a href="{{route('admin.new.company.index')}}"><i class="fa fa-eject" aria-hidden="true"></i> <span>جديد الشركه</span></a>
                    </li>
                </ul>
            </div>


            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li {{Request::is('admin/settings') ? 'class=active' :''}}>
                        <a href="{{route('admin.settings.index')}}"><i class="fa fa-cogs" aria-hidden="true"></i> <span>الاعدادات</span></a>
                    </li>
                </ul>
            </div>

            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li {{Request::is('admin/reports') ? 'class=active' :''}}>
                        <a href="{{route('admin.reports.index')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span>التقارير</span></a>
                    </li>
                </ul>
            </div>
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li {{Request::is('admin/contacts') ? 'class=active' :''}}>
                        <a href="{{route('admin.contacts.index')}}"><i class="icon-bubbles4" aria-hidden="true"></i> <span>الرسائل</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar
