<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('dashboard')) kt-menu__item--open kt-menu__item--here @endif"  >
	<a href="{{ url('dashboard') }}" class="kt-menu__link">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('Dashboard') }}</span>
	</a>
</li>
<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('users/type/user') || Request::is('users/create')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true" >
	<a href="{{ url('users/type/user') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('User Management') }}</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu ">
		<span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item @if(Request::is('users/type/user')) kt-menu__item--open kt-menu__item--here @endif"  aria-haspopup="true">
				<a  href="{{ url('users/type/user') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('User List') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('users/create')) kt-menu__item--open kt-menu__item--here @endif"  aria-haspopup="true">
				<a  href="{{ url('users/create') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Add New') }}</span>
				</a>
			</li>
		</ul>
	</div>
</li>

<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('projects') || Request::is('projects/create')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
	<a href="{{ url('projects') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('Projects') }}</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu ">
		<span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item @if(Request::is('projects')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('projects') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Projects') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('projects/create')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('projects/create') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Add New') }}</span>
				</a>
			</li>
		</ul>
	</div>
</li>

<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('packages') || Request::is('packages/create')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
	<a href="{{ url('packages') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('Packages') }}</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu ">
		<span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item @if(Request::is('packages')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('packages') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Packages') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('packages/create')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('packages/create') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Add New') }}</span>
				</a>
			</li>
		</ul>
	</div>
</li>

<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('offline_payment/create') || Request::is('members/payment_history')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
	<a href="{{ url('offline_payment/create') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('Payments') }}</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu ">
		<span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item @if(Request::is('offline_payment/create')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('offline_payment/create') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Offline Payment') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('members/payment_history')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('members/payment_history') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Payment History') }}</span>
				</a>
			</li>
		</ul>
	</div>
</li>

<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('languages') || Request::is('languages/create')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
	<a href="{{ url('languages') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('Languages') }}</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu ">
		<span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item @if(Request::is('languages')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('languages') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('All Language') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('languages/create')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('languages/create') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Add New') }}</span>
				</a>
			</li>
		</ul>
	</div>
</li>

<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('features') || Request::is('faqs') || Request::is('administration/theme_option')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
	<a href="{{ url('features') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 002.25 2.25h13.5A2.25 2.25 0 0021 18V8.25m-18 0V6a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6zM7.5 6h.008v.008H7.5V6zm2.25 0h.008v.008H9.75V6z" />
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('Website Settings') }}</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu ">
		<span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item @if(Request::is('features')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('features') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Software Features') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('faqs')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('faqs') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Knowledge Base') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('administration/theme_option')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('administration/theme_option') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Theme Options') }}</span>
				</a>
			</li>
		</ul>
	</div>
</li>

<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('administration/general_settings') || Request::is('email_templates') || Request::is('administration/currency_rates') || Request::is('administration/backup_database')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
	<a href="{{ url('administration/general_settings') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('Administration') }}</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu ">
		<span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item @if(Request::is('administration/general_settings')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('administration/general_settings') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('General Settings') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('email_templates')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('email_templates') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Email Template') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('administration/currency_rates')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('administration/currency_rates') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Exchange Rates') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('administration/backup_database')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('administration/backup_database') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Database Backup') }}</span>
				</a>
			</li>
		</ul>
	</div>
</li>

<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('administration/general_settings') || Request::is('email_templates') || Request::is('administration/currency_rates') || Request::is('administration/backup_database')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
	<a href="{{ url('system-update') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<i class="fa-brands fa-ubuntu fa-fw"></i>
		</span>
		<span class="kt-menu__link-text">{{ _lang('System Update') }}</span>
	</a>
</li>