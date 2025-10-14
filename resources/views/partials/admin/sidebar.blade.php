<!-- Left Sidebar Start -->
<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('users/images/thron-and-balloons-icon.webp') }}" alt="" height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{ asset('users/images/thron-and-balloons-icon.webp') }}" alt="" height="20">
                                </span>
                </a>
                <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('users/images/thron-and-balloons-icon.webp') }}" alt="" height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{ asset('users/images/thron-and-balloons-icon.webp') }}" alt="" height="20">
                                </span>
                </a>
            </div>

            <ul id="sidebar-menu">

                <li class="menu-title">Menu</li>

                <li>
                    <a href="#sidebarDashboards" data-bs-toggle="collapse">
                                    <span class="nav-icon">
                                        <iconify-icon icon="tabler:assembly"></iconify-icon>
                                    </span>
                        <span class="sidebar-text"> Dashboard </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="nav-second-level">
                            <li>
                                <a href="index.html" class="tp-link">CRM</a>
                            </li>
                            <li>
                                <a href="analytics.html" class="tp-link">Analytics</a>
                            </li>
                            <li>
                                <a href="ecommerce.html" class="tp-link">eCommerce</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Pages</li>

                <li class="{{ request()->routeIs('users.*') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="tp-link">
                        <span class="nav-icon">
                            <iconify-icon icon="tabler:users"></iconify-icon>
                        </span>
                        <span class="sidebar-text">Users</span>
                    </a>
                </li>


                <li>
                    <a href="{{ route('admin.blogs.index') }}" class="tp-link">
        <span class="nav-icon">
            <iconify-icon icon="tabler:files"></iconify-icon>
        </span>
                        <span class="sidebar-text">Blogs</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.languages.index') }}" class="tp-link">
        <span class="nav-icon">
            <iconify-icon icon="tabler:language"></iconify-icon>
        </span>
                        <span class="sidebar-text">Languages</span>
                    </a>
                </li>



                <li>
                    <a href="apps-calendar.html" class="tp-link">
                                    <span class="nav-icon">
                                        <iconify-icon icon="tabler:calendar"></iconify-icon>
                                    </span>
                        <span class="sidebar-text"> Calendar </span>
                    </a>
                </li>

{{--                <li>--}}
{{--                    <a href="apps-chat.html" class="tp-link">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:brand-hipchat"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Chat </span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="email.html" class="tp-link">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:mail"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Email </span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="app-integrations.html" class="tp-link">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:code"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Integrations </span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="app-notes.html" class="tp-link">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:brand-bumble"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Notes </span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="app-file-manager.html" class="tp-link">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:folder"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> File Manager </span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="menu-title mt-2">Pages</li>--}}

{{--                <li>--}}
{{--                    <a href="#sidebarAuth" data-bs-toggle="collapse">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:lock"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Authentication </span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="sidebarAuth">--}}
{{--                        <ul class="nav-second-level">--}}
{{--                            <li>--}}
{{--                                <a href="auth-login.html" class="tp-link"><i class="ti ti-point"></i>Log In</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="auth-register.html" class="tp-link"><i class="ti ti-point"></i>Register</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="auth-recoverpw.html" class="tp-link"><i class="ti ti-point"></i>Recover Password</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="auth-lock-screen.html" class="tp-link"><i class="ti ti-point"></i>Lock Screen</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="auth-confirm-mail.html" class="tp-link"><i class="ti ti-point"></i>Confirm Mail</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="email-verification.html" class="tp-link"><i class="ti ti-point"></i>Email Verification</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="auth-logout.html" class="tp-link"><i class="ti ti-point"></i>Logout</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="#sidebarError" data-bs-toggle="collapse">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:server"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Error Pages </span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="sidebarError">--}}
{{--                        <ul class="nav-second-level">--}}
{{--                            <li>--}}
{{--                                <a href="error-404.html" class="tp-link"><i class="ti ti-point"></i>Error 404</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="error-500.html" class="tp-link"><i class="ti ti-point"></i>Error 500</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="error-503.html" class="tp-link"><i class="ti ti-point"></i>Error 503</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="error-429.html" class="tp-link"><i class="ti ti-point"></i>Error 429</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="offline-page.html" class="tp-link"><i class="ti ti-point"></i>Offline Page</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="#sidebarExpages" data-bs-toggle="collapse">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:files"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Utility </span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="sidebarExpages">--}}
{{--                        <ul class="nav-second-level">--}}
{{--                            <li>--}}
{{--                                <a href="pages-starter.html" class="tp-link"><i class="ti ti-point"></i>Starter</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="pages-profile.html" class="tp-link"><i class="ti ti-point"></i>Profile</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="pages-pricing.html" class="tp-link"><i class="ti ti-point"></i>Pricing</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="pages-timeline.html" class="tp-link"><i class="ti ti-point"></i>Timeline</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="pages-invoice.html" class="tp-link"><i class="ti ti-point"></i>Invoice</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="pages-faqs.html" class="tp-link"><i class="ti ti-point"></i>FAQs</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="pages-gallery.html" class="tp-link"><i class="ti ti-point"></i>Gallery</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="pages-maintenance.html" class="tp-link"><i class="ti ti-point"></i>Maintenance</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="pages-coming-soon.html" class="tp-link"><i class="ti ti-point"></i>Coming Soon</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="menu-title mt-2">General</li>--}}

{{--                <li>--}}
{{--                    <a href="#sidebarBaseui" data-bs-toggle="collapse">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:contrast-2"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Components </span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="sidebarBaseui">--}}
{{--                        <ul class="nav-second-level">--}}
{{--                            <li>--}}
{{--                                <a href="ui-accordions.html" class="tp-link"><i class="ti ti-point"></i>Accordions</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-alerts.html" class="tp-link"><i class="ti ti-point"></i>Alerts</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-badges.html" class="tp-link"><i class="ti ti-point"></i>Badges</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-breadcrumb.html" class="tp-link"><i class="ti ti-point"></i>Breadcrumb</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-buttons.html" class="tp-link"><i class="ti ti-point"></i>Buttons</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-cards.html" class="tp-link"><i class="ti ti-point"></i>Cards</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-collapse.html" class="tp-link"><i class="ti ti-point"></i>Collapse</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-dropdowns.html" class="tp-link"><i class="ti ti-point"></i>Dropdowns</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-video.html" class="tp-link"><i class="ti ti-point"></i>Embed Video</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-grid.html" class="tp-link"><i class="ti ti-point"></i>Grid</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-images.html" class="tp-link"><i class="ti ti-point"></i>Images</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-list.html" class="tp-link"><i class="ti ti-point"></i>List Group</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-modals.html" class="tp-link"><i class="ti ti-point"></i>Modals</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-placeholders.html" class="tp-link"><i class="ti ti-point"></i>Placeholders</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-pagination.html" class="tp-link"><i class="ti ti-point"></i>Pagination</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-popovers.html" class="tp-link"><i class="ti ti-point"></i>Popovers</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-progress.html" class="tp-link"><i class="ti ti-point"></i>Progress</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-scrollspy.html" class="tp-link"><i class="ti ti-point"></i>Scrollspy</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-spinners.html" class="tp-link"><i class="ti ti-point"></i>Spinners</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-tabs.html" class="tp-link"><i class="ti ti-point"></i>Tabs</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-tooltips.html" class="tp-link"><i class="ti ti-point"></i>Tooltips</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="ui-typography.html" class="tp-link"><i class="ti ti-point"></i>Typography</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="#sidebarWidgetsui" data-bs-toggle="collapse">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:cell"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Widgets </span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="sidebarWidgetsui">--}}
{{--                        <ul class="nav-second-level">--}}
{{--                            <li>--}}
{{--                                <a href='widget-card.html' class="tp-link">Widget Card</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='widget-chart.html' class='tp-link'>Widget Chart</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="#sidebarAdvancedUI" data-bs-toggle="collapse">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:brand-snowflake"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Extended UI </span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="sidebarAdvancedUI">--}}
{{--                        <ul class="nav-second-level">--}}
{{--                            <li>--}}
{{--                                <a href="extended-carousel.html" class="tp-link"><i class="ti ti-point"></i>Carousel</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="extended-notifications.html" class="tp-link"><i class="ti ti-point"></i>Notifications</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="extended-offcanvas.html" class="tp-link"><i class="ti ti-point"></i>Offcanvas</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="extended-range-slider.html" class="tp-link"><i class="ti ti-point"></i>Range Slider</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="#sidebarIcons" data-bs-toggle="collapse">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:brand-beats"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Icons </span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="sidebarIcons">--}}
{{--                        <ul class="nav-second-level">--}}
{{--                            <li>--}}
{{--                                <a href="icons-feather.html" class="tp-link"><i class="ti ti-point"></i>Feather Icons</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="icons-mdi.html" class="tp-link"><i class="ti ti-point"></i>Material Icons</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="#sidebarForms" data-bs-toggle="collapse">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:transform"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Forms </span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="sidebarForms">--}}
{{--                        <ul class="nav-second-level">--}}
{{--                            <li>--}}
{{--                                <a href="forms-elements.html" class="tp-link"><i class="ti ti-point"></i>General Elements</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="forms-validation.html" class="tp-link"><i class="ti ti-point"></i>Validation</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="forms-quilljs.html" class="tp-link"><i class="ti ti-point"></i>Quilljs Editor</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="forms-pickers.html" class="tp-link"><i class="ti ti-point"></i>Picker</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="#sidebarTables" data-bs-toggle="collapse">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:table"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Tables </span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="sidebarTables">--}}
{{--                        <ul class="nav-second-level">--}}
{{--                            <li>--}}
{{--                                <a href="tables-basic.html" class="tp-link"><i class="ti ti-point"></i>Basic Tables</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="tables-datatables.html" class="tp-link"><i class="ti ti-point"></i>Data Tables</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="#sidebarCharts" data-bs-toggle="collapse">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:chart-donut-2"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Apex Charts </span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="sidebarCharts">--}}
{{--                        <ul class="nav-second-level">--}}
{{--                            <li>--}}
{{--                                <a href='charts-area.html' class="tp-link"><i class="ti ti-point"></i>Area</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-bar.html' class="tp-link"><i class="ti ti-point"></i>Bar</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-boxplot.html' class="tp-link"><i class="ti ti-point"></i>Boxplot</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-bubble.html' class="tp-link"><i class="ti ti-point"></i>Bubble</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-candlestick.html' class="tp-link"><i class="ti ti-point"></i>Candlestick</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-column.html' class="tp-link"><i class="ti ti-point"></i>Column</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-funnel.html' class="tp-link"><i class="ti ti-point"></i>Funnel</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-heatmap.html' class="tp-link"><i class="ti ti-point"></i>Heatmap</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-line.html' class="tp-link"><i class="ti ti-point"></i>Line</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-mixed.html' class="tp-link"><i class="ti ti-point"></i>Mixed</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-pie.html' class="tp-link"><i class="ti ti-point"></i>Pie</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-polararea.html' class="tp-link"><i class="ti ti-point"></i>Polar</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-radar.html' class="tp-link"><i class="ti ti-point"></i>Radar</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-radialbar.html' class="tp-link"><i class="ti ti-point"></i>Radialbar</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-rangearea.html' class="tp-link"><i class="ti ti-point"></i>Range Area</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-scatter.html' class="tp-link"><i class="ti ti-point"></i>Scatter</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-timeline.html' class="tp-link"><i class="ti ti-point"></i>Timeline</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href='charts-treemap.html' class="tp-link"><i class="ti ti-point"></i>Treemap</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="#sidebarMaps" data-bs-toggle="collapse">--}}
{{--                                    <span class="nav-icon">--}}
{{--                                        <iconify-icon icon="tabler:map-pin"></iconify-icon>--}}
{{--                                    </span>--}}
{{--                        <span class="sidebar-text"> Maps </span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="sidebarMaps">--}}
{{--                        <ul class="nav-second-level">--}}
{{--                            <li>--}}
{{--                                <a href="maps-google.html" class="tp-link"><i class="ti ti-point"></i>Google Maps</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="maps-vector.html" class="tp-link"><i class="ti ti-point"></i>Vector Maps</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->
