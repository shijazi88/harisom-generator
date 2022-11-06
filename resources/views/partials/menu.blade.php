<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/audit-logs*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('packages_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/packages*") ? "c-show" : "" }} {{ request()->is("admin/package-periods*") ? "c-show" : "" }} {{ request()->is("admin/questions*") ? "c-show" : "" }} {{ request()->is("admin/answers*") ? "c-show" : "" }} {{ request()->is("admin/services*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-address-card c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.packagesManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('package_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.packages.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/packages") || request()->is("admin/packages/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.package.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('package_period_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.package-periods.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/package-periods") || request()->is("admin/package-periods/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-calendar-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.packagePeriod.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('question_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.questions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/questions") || request()->is("admin/questions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-question c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.question.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('answer_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.answers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/answers") || request()->is("admin/answers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-question-circle c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.answer.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('service_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.services.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/services") || request()->is("admin/services/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-american-sign-language-interpreting c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.service.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('workers_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/car-models*") ? "c-show" : "" }} {{ request()->is("admin/workers*") ? "c-show" : "" }} {{ request()->is("admin/vehicles*") ? "c-show" : "" }} {{ request()->is("admin/worker-addresses*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-user-md c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.workersManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('car_model_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.car-models.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/car-models") || request()->is("admin/car-models/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-car c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.carModel.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('worker_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.workers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/workers") || request()->is("admin/workers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-male c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.worker.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('vehicle_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.vehicles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/vehicles") || request()->is("admin/vehicles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-car c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.vehicle.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('worker_address_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.worker-addresses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/worker-addresses") || request()->is("admin/worker-addresses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-atlas c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.workerAddress.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('customer_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/customers*") ? "c-show" : "" }} {{ request()->is("admin/customer-wallets*") ? "c-show" : "" }} {{ request()->is("admin/customer-addresses*") ? "c-show" : "" }} {{ request()->is("admin/subscriptions*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-user-check c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.customerManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('customer_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.customers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/customers") || request()->is("admin/customers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-check c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.customer.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('customer_wallet_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.customer-wallets.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/customer-wallets") || request()->is("admin/customer-wallets/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-money-bill-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.customerWallet.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('customer_address_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.customer-addresses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/customer-addresses") || request()->is("admin/customer-addresses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-atlas c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.customerAddress.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('subscription_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.subscriptions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/subscriptions") || request()->is("admin/subscriptions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-hand-holding-usd c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.subscription.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('coupon_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.coupons.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/coupons") || request()->is("admin/coupons/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-address-card c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.coupon.title') }}
                </a>
            </li>
        @endcan
        @can('sms_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.smss.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/smss") || request()->is("admin/smss/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-comments c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.sms.title') }}
                </a>
            </li>
        @endcan
        @can('user_alert_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.user-alerts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-bell c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userAlert.title') }}
                </a>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>