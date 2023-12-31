<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div><!--c-sidebar-brand-->

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.dashboard')"
                :active="activeClass(Route::is('admin.dashboard'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Dashboard')" />
        </li>

        <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-user"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Academics')" />

                <ul class="c-sidebar-nav-dropdown-items">
                       <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.subject.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Subject')"
                                :active="activeClass(Route::is('admin.subject.index.*'), 'c-active')" />
                        </li>
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.class.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Classes')"
                                :active="activeClass(Route::is('admin.class.index.*'), 'c-active')" />
                        </li>

                     <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.section.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Sections')"
                                :active="activeClass(Route::is('admin.section.index.*'), 'c-active')" />
                        </li>
                </ul> 
        </li> 

         <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-user"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Transport')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.picup.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Picup Point')"
                                :active="activeClass(Route::is('admin.picup.index.*'), 'c-active')" />
                        </li>

                      <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.route.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Route')"
                                :active="activeClass(Route::is('admin.route.index.*'), 'c-active')" />
                        </li>
                       <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.vehicle.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Vehicle')"
                                :active="activeClass(Route::is('admin.vehicle.index.*'), 'c-active')" />
                        </li>
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.vehicle.route.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Assign Vehicle')"
                                :active="activeClass(Route::is('admin.vehicle.route.index.*'), 'c-active')" />
                        </li>

                     <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.route.picup.point')"
                                class="c-sidebar-nav-link"
                                :text="__('Route Picup Point assign')"
                                :active="activeClass(Route::is('admin.route.picup.point.*'), 'c-active')" />
                        </li>
                </ul> 
        </li>  


        <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-user"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Hostel')" />

                <ul class="c-sidebar-nav-dropdown-items">
                       <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.hostel.room.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Hostel Room')"
                                :active="activeClass(Route::is('admin.hostel.room.index.*'), 'c-active')" />
                        </li>
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.room.type.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Room Type')"
                                :active="activeClass(Route::is('admin.room.type.index.*'), 'c-active')" />
                        </li>

                     <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.hostel.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Hostel')"
                                :active="activeClass(Route::is('admin.hostel.index.*'), 'c-active')" />
                        </li>
                </ul> 
        </li> 

        <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-user"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Expense')" />

                <ul class="c-sidebar-nav-dropdown-items">
                       <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.expense.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Expense')"
                                :active="activeClass(Route::is('admin.expense.index.*'), 'c-active')" />
                        </li>
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.search.expense')"
                                class="c-sidebar-nav-link"
                                :text="__('Search Expense')"
                                :active="activeClass(Route::is('admin.search.expense.*'), 'c-active')" />
                        </li>

                     <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.expensecategory.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Expense Category')"
                                :active="activeClass(Route::is('admin.expensecategory.index.*'), 'c-active')" />
                        </li>
                </ul> 
        </li>
          <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-user"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Student Info')" />

                <ul class="c-sidebar-nav-dropdown-items">
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.student.create')"
                                class="c-sidebar-nav-link"
                                :text="__('Student create')"
                                :active="activeClass(Route::is('admin.student.create.*'), 'c-active')" />
                        </li>
                       <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.studentCategory.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Student Category')"
                                :active="activeClass(Route::is('admin.studentCategory.index.*'), 'c-active')" />
                        </li>
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.student-house.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Student House')"
                                :active="activeClass(Route::is('admin.student-house.index.*'), 'c-active')" />
                        </li>

                     <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.disable-reason.index')"
                                class="c-sidebar-nav-link"
                                :text="__('disabled Reason')"
                                :active="activeClass(Route::is('admin.disable-reason.index.*'), 'c-active')" />
                        </li>
                </ul> 
        </li>               

        @if (
            $logged_in_user->hasAllAccess() ||
            (
                $logged_in_user->can('admin.access.user.list') ||
                $logged_in_user->can('admin.access.user.deactivate') ||
                $logged_in_user->can('admin.access.user.reactivate') ||
                $logged_in_user->can('admin.access.user.clear-session') ||
                $logged_in_user->can('admin.access.user.impersonate') ||
                $logged_in_user->can('admin.access.user.change-password')
            )
        )
            <li class="c-sidebar-nav-title">@lang('System')</li>

            <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-user"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Access')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    @if (
                        $logged_in_user->hasAllAccess() ||
                        (
                            $logged_in_user->can('admin.access.user.list') ||
                            $logged_in_user->can('admin.access.user.deactivate') ||
                            $logged_in_user->can('admin.access.user.reactivate') ||
                            $logged_in_user->can('admin.access.user.clear-session') ||
                            $logged_in_user->can('admin.access.user.impersonate') ||
                            $logged_in_user->can('admin.access.user.change-password')
                        )
                    )
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.user.index')"
                                class="c-sidebar-nav-link"
                                :text="__('User Management')"
                                :active="activeClass(Route::is('admin.auth.user.*'), 'c-active')" />
                        </li>
                    @endif

                    @if ($logged_in_user->hasAllAccess())
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.role.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Role Management')"
                                :active="activeClass(Route::is('admin.auth.role.*'), 'c-active')" />
                        </li>
                    @endif
                </ul>
            </li>
        @endif

        @if ($logged_in_user->hasAllAccess())
            <li class="c-sidebar-nav-dropdown">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-list"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Logs')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('log-viewer::dashboard')"
                            class="c-sidebar-nav-link"
                            :text="__('Dashboard')" />
                    </li>
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('log-viewer::logs.list')"
                            class="c-sidebar-nav-link"
                            :text="__('Logs')" />
                    </li>
                </ul>
            </li>
        @endif
    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
