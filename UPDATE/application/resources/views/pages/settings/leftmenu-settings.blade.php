<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar settings-menu">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" id="settings-scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav" id="settings-sidebar-nav">
            <ul id="sidebarnav">


                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent1') !!}

                <!--main-->
                <li class="sidenav-menu-item {{ $page['settingsmenu_main'] ?? '' }}">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-main">
                        <span class="hide-menu">{{ cleanLang(__('lang.main_settings')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/general" id="settings-menu-main-general"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/company" id="settings-menu-main-company"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.company_details')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/currency" id="settings-menu-main-currency"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.currency')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/theme" id="settings-menu-main-theme"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.theme')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/logos" id="settings-menu-main-logo"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.company_logo')) }}</a>
                        </li>
                        <!--[MULTITENANCY]-->
                        @if(config('system.settings_type') == 'standalone')
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/modules" id="settings-menu-main-modules"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.modules')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/cronjobs" id="settings-menu-main-cronjobs"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.cronjob_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/system/clearcache"
                                id="settings-menu-main-cronjobs"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.clear_cache')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/errorlogs"
                                id="settings-menu-main-errorlogs"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.error_logs')) }}</a>
                        </li>
                        @endif
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.general') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent2') !!}

                <!--billing-->
                <!--[MULTITENANCY]-->
                @if(config('system.settings_type') == 'saas')
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-billing">
                        <span class="hide-menu">{{ cleanLang(__('lang.billing')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0);" data-url="/settings/account/myaccount"
                                id="settings-menu-billing-account"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.my_account')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/account/packages"
                                id="settings-menu-billing-packages"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.packages')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/account/payments"
                                id="settings-menu-billing-payments"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.payments')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/account/notices"
                                id="settings-menu-billing-notices"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.notices')) }}</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.billing') !!}
                    </ul>
                </li>
                @endif

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent3') !!}

                <!--Email-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-email">
                        <span class="hide-menu">{{ cleanLang(__('lang.email')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @if(config('system.settings_type') == 'standalone')
                        <!--general-->
                        <li><a href="javascript:void(0);" data-url="/settings/email/general"
                                id="settings-menu-email-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <!--smtp-->
                        <li><a href="javascript:void(0);" data-url="/settings/email/smtp" id="settings-menu-email-smtp"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.smtp_settings')) }}</a>
                        </li>
                        @endif
                        @if(config('system.settings_type') == 'saas')
                        <li><a href="javascript:void(0);" data-url="/settings/account/email"
                                id="settings-menu-email-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.email_settings')) }}</a>
                        </li>
                        @endif
                        <!--templates-->
                        <li><a href="javascript:void(0);" data-url="/settings/email/templates"
                                id="settings-menu-email-templates"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.email_templates')) }}</a>
                        </li>
                        <!--email queue-->
                        <li><a href="javascript:void(0);" data-url="/settings/email/queue"
                                id="settings-menu-email-queue"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.email_queue')) }}</a>
                        </li>
                        <!--email log-->
                        <li><a href="javascript:void(0);" data-url="/settings/email/log" id="settings-menu-email-log"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.email_log')) }}</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.email') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent4') !!}

                <!--clients-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-clients">
                        <span class="hide-menu">{{ cleanLang(__('lang.clients')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0);" data-url="/settings/clients"
                                id="settings-menu-clients-general"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-client" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=client&source=ext">{{ cleanLang(__('lang.categories')) }}
                            </a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/customfields/clients"
                                id="settings-menu-clients-forms"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.custom_form_fields')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/webmail/templates?filter_type=clients"
                                id="settings-menu-clients-email-templates"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.email_templates')) }}</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.clients') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent5') !!}

                <!--projects-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-projects">
                        <span class="hide-menu">{{ cleanLang(__('lang.projects')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/projects/general"
                                id="settings-menu-projects-general"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <!--project-->
                        <li>
                            <a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-project" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=project&source=ext">{{ cleanLang(__('lang.categories')) }}
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/projects/staff"
                                id="settings-menu-projects-staff-permissions"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.team_permissions')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/projects/client"
                                id="settings-menu-client-permissions"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.client_permissions')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/customfields/projects"
                                id="settings-menu-projects-forms"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.custom_form_fields')) }}</a>
                        </li>
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-projects-automation" href="javascript:void(0);"
                                data-url="/settings/projects/automation">@lang('lang.automation')
                            </a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.projects') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent6') !!}

                <!--tasks-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-tasks">
                        <span class="hide-menu">{{ cleanLang(__('lang.tasks')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/tasks" id="settings-menu-tasks-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/tasks/statuses"
                                id="settings-menu-tasks-stages"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.statuses')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/tasks/priorities"
                                id="settings-menu-tasks-priorities"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.priorities')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/customfields/tasks"
                                id="settings-menu-tasks-forms"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.custom_form_fields')) }}</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.tasks') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent7') !!}

                <!--leads-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-leads">
                        <span class="hide-menu">{{ cleanLang(__('lang.leads')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/leads/general"
                                id="settings-menu-leads-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-lead" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=lead&source=ext">{{ cleanLang(__('lang.categories')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/leads/statuses"
                                id="settings-menu-leads-stages"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.lead_stages')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/sources" id="settings-menu-leads-sources"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.lead_sources')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/customfields/leads"
                                id="settings-menu-leads-forms"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.custom_form_fields')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/webforms"
                                id="settings-menu-leads-webforms"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.web_forms')) }}</a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/webmail/templates?filter_type=leads"
                                id="settings-menu-leads-email-templates"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.email_templates')) }}</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.leads') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent8') !!}

                <!--milestone-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-milestones">
                        <span class="hide-menu">{{ cleanLang(__('lang.milestones')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/milestones/settings"
                                id="settings-menu-milestones-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/milestones/default"
                                id="settings-menu-milestones-categories"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.default_milestones')) }}</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.milestones') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent9') !!}

                <!--invoices-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-invoices">
                        <span class="hide-menu">{{ cleanLang(__('lang.invoices')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/invoices"
                                id="settings-menu-billing-invoice"
                                class="js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-invoice" href="app/settings/invoices"
                                data-url="/categories?filter_category_type=invoice&source=ext">{{ cleanLang(__('lang.categories')) }}
                            </a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.invoices') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent10') !!}

                <!--estimates-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-estimates">
                        <span class="hide-menu">{{ cleanLang(__('lang.estimates')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/estimates"
                                id="settings-menu-billing-estimate"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-estimate" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=estimate&source=ext">{{ cleanLang(__('lang.categories')) }}
                            </a>
                        </li>
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-estimates-automation" href="javascript:void(0);"
                                data-url="/settings/estimates/automation">@lang('lang.automation')
                            </a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.estimates') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent11') !!}

                <!--proposals-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-proposals">
                        <span class="hide-menu">{{ cleanLang(__('lang.proposals')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/proposals"
                                id="settings-menu-billing-proposal"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-proposal" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=proposal&source=ext">{{ cleanLang(__('lang.categories')) }}
                            </a></li>
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-estimates-automation" href="javascript:void(0);"
                                data-url="/settings/proposals/automation">@lang('lang.automation')
                            </a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.proposals') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent12') !!}

                <!--contracts-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-contracts">
                        <span class="hide-menu">{{ cleanLang(__('lang.contracts')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/contracts"
                                id="settings-menu-billing-contract"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-contract" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=contract&source=ext">{{ cleanLang(__('lang.categories')) }}
                            </a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.contracts') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent13') !!}

                <!--products-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-items">
                        <span class="hide-menu">{{ cleanLang(__('lang.products')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url hidden"
                                id="settings-menu-categories-item" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=item&source=ext">{{ cleanLang(__('lang.categories')) }}
                            </a>
                        </li>
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent14') !!}

                <!--expenses-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-expenses">
                        <span class="hide-menu">{{ cleanLang(__('lang.expenses')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/expenses"
                                id="settings-menu-billing-expense"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li><a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-expense" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=expense&source=ext">{{ cleanLang(__('lang.categories')) }}
                            </a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.expenses') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent15') !!}

                <!--subscriptions-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-subscriptions">
                        <span class="hide-menu">{{ cleanLang(__('lang.subscriptions')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/subscriptions"
                                id="settings-menu-billing-subscription"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.subscriptions') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent16') !!}

                <!--taxes-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-tax">
                        <span class="hide-menu">{{ cleanLang(__('lang.tax')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/taxrates"
                                id="settings-menu-billing-subscription"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.tax_rates')) }}</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.tax') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent17') !!}

                <!--tags-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-tags">
                        <span class="hide-menu">{{ cleanLang(__('lang.tags')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/tags" id="settings-menu-tags-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/tags?source=ext" id="settings-menu-tags-view"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.view_tags')) }}</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.tags') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent18') !!}

                <!--files-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-files">
                        <span class="hide-menu">{{ cleanLang(__('lang.files')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/files/general"
                                id="settings-menu-files-general"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">@lang('lang.general_settings')</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/files/folders"
                                id="settings-menu-files-folders"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">@lang('lang.folders')</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/files/defaultfolders"
                                id="settings-menu-files-defaultfolders"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">@lang('lang.default_folders')</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.files') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent19') !!}

                <!--payment gateways-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-payment-methods">
                        <span class="hide-menu">{{ cleanLang(__('lang.payment_methods')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <!--paypal-->
                        <li><a href="javascript:void(0);" data-url="/settings/paypal"
                                id="settings-menu-payment-methods-paypal"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">Paypal</a>
                        </li>
                        <!--stripe-->
                        <li><a href="javascript:void(0);" data-url="/settings/stripe"
                                id="settings-menu-payment-methods-stripe"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">Stripe</a>
                        </li>
                        <!--razorpay-->
                        <li><a href="javascript:void(0);" data-url="/settings/razorpay"
                                id="settings-menu-payment-methods-stripe"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">Razorpay</a>
                        </li>
                        <!--mollie-->
                        <li><a href="javascript:void(0);" data-url="/settings/mollie"
                                id="settings-menu-payment-methods-mollie"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">Mollie</a>
                        </li>
                        <!--tap-->
                        <li><a href="javascript:void(0);" data-url="/settings/tap"
                                id="settings-menu-payment-methods-tap"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">Tap</a>
                        </li>
                        <!--paystack-->
                        <li><a href="javascript:void(0);" data-url="/settings/paystack"
                                id="settings-menu-payment-methods-paystack"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">Paystack</a>
                        </li>
                        <!--bank-->
                        <li><a href="javascript:void(0);" data-url="/settings/bank"
                                id="settings-menu-payment-methods-bank"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.bank')) }}</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.payment_methods') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent20') !!}

                <!--roles-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-roles">
                        <span class="hide-menu">{{ cleanLang(__('lang.user_roles')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0);" data-url="/settings/roles" id="settings-menu-roles-general"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.roles') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent21') !!}

                <!--tickets-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-tickets">
                        <span class="hide-menu">{{ cleanLang(__('lang.tickets')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/tickets"
                                id="settings-menu-tickets-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-tickets-departments" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=ticket&source=ext">{{ cleanLang(__('lang.departments')) }}
                            </a>

                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/tickets/statuses"
                                id="settings-menu-tickets-stages"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.statuses')) }}</a>
                        </li>
                        <li>
                            <a class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url"
                                id="settings-menu-categories-client" href="javascript:void(0);"
                                data-url="/categories?filter_category_type=canned&source=ext">{{ cleanLang(__('lang.canned_categories')) }}
                            </a>
                        </li>
                        <li><a href="javascript:void(0);" data-url="/settings/customfields/tickets"
                                id="settings-menu-tickets-forms"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.custom_form_fields')) }}</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.tickets') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent22') !!}

                <!--knowledgeebase-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-knowledgebase">
                        <span class="hide-menu">{{ cleanLang(__('lang.knowledgebase')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/knowledgebase/settings"
                                id="settings-menu-knowledgebase-settings"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.general_settings')) }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-url="/settings/knowledgebase/default"
                                id="settings-menu-knowledgebase-categories"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.categories')) }}</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.knowledgebase') !!}
                    </ul>
                </li>


                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent23') !!}


                <!--Other-->
                <li class="sidenav-menu-item">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"
                        id="settings-menu-other">
                        <span class="hide-menu">{{ cleanLang(__('lang.other')) }}
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse" id="settings-menu-other">
                        @if(config('system.settings_type') == 'standalone')
                        <!--update-->
                        <li><a href="javascript:void(0);" data-url="/settings/updates" id="settings-menu-other-updates"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">{{ cleanLang(__('lang.updates')) }}</a>
                        </li>
                        @endif
                        <!--reCaptcha-->
                        <li><a href="javascript:void(0);" data-url="/settings/recaptcha"
                                id="settings-menu-other-recaptch"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">reCAPTCHA</a>
                        </li>
                        <!--tweak-->
                        <li><a href="javascript:void(0);" data-url="/settings/tweak" id="settings-menu-other-tweak"
                                class="settings-menu-link js-ajax-ux-request js-submenu-ajax js-dynamic-settings-url">@lang('lang.tweak')</a>
                        </li>
                        <!--[MODULES] - dynamic menu-->
                        {!! config('modules.menus.settings.other') !!}
                    </ul>
                </li>

                <!--[MODULES] - dynamic menu-->
                {!! config('modules.menus.settings.parent24') !!}

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>