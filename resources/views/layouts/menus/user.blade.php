@php $permissions = permission_list(); @endphp

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


@if( has_feature('websites_limit') )
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
@endif