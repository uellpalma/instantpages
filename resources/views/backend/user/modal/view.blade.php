<div class="card panel-default">
<div class="card-body">
    @php $date_format = get_option('date_format','Y-m-d'); @endphp
	
    <table class="table table-bordered">
		<tr><td colspan="2" class="text-center"><img class="thumb-xl rounded" src="{{ $user->profile_picture != "" ? asset('public/uploads/profile/'.$user->profile_picture) : asset('public/images/avatar.png') }}"></td></tr>
		<tr><td>{{ _lang('Business Name') }}</td><td>{{ $user->company->business_name }}</td></tr>
		<tr><td>{{ _lang('Admin Name') }}</td><td>{{ $user->name }}</td></tr>
		<tr><td>{{ _lang('Admin Email') }}</td><td>{{ $user->email }}</td></tr>
		<tr><td>{{ _lang('Status') }}</td><td>{!! $user->company->status == 1 ? clean(status(_lang('Active'), 'success')) : clean(status(_lang('In-Active'), 'danger')) !!}</td></tr>
		@if($user->user_type == 'user')
			@if($user->company->package->type == 'free')
			<tr><td>{{ _lang('Package') }}</td><td>{!! status($user->company->package->package_name, 'success') !!}</td></tr>	
			<tr><td>{{ _lang('Package Valid To') }}</td><td>{{ _lang('Forever') }}</td></tr>	
			@else
			<tr><td>{{ _lang('Package') }}</td><td>{{ $user->company->package->package_name }}({{ ucwords($user->company->package_type) }})</td></tr>	
			<tr><td>{{ _lang('Package Valid To') }}</td><td>{{ date($date_format, strtotime($user->company->valid_to)) }}</td></tr>	
			@endif
	        <tr>
	        	<td>{{ _lang('Membersip Type') }}</td><td>{!! $user->company->membership_type == 'trial' ? clean(status(ucwords($user->company->membership_type), 'danger')) : clean(status(ucwords($user->company->membership_type), 'success')) !!}</td>
	        </tr>
		@endif
    </table>

    @if($user->user_type == 'user')
	    <table class="table table-striped">
	    	<tr>
	    		<td colspan="2" class="text-center"><b>{{ _lang('Package Details') }}</b></td>
	    	</tr>
	    	<tr>
	    		<td><b>{{ _lang('Feature') }}</b></td>
	    		<td class="text-center"><b>{{ _lang('Avaialble Limit') }}</b></td>
	    	</tr>
	    	<tr>
	    		<td>{{ _lang('Websites Limit') }}</td>
	    		<td class="text-center">{{ $user->company->websites_limit }}</td>
	    	</tr>
	    	<tr>
	    		<td>{{ _lang('Recurring Transaction') }}</td>
	    		<td class="text-center">{{ ucwords($user->company->recurring_transaction) }}</td>
	    	</tr>
	    	<tr>
	    		<td>{{ _lang('Online Payment') }}</td>
	    		<td class="text-center">{{ ucwords($user->company->online_payment) }}</td>
	    	</tr>
	    </table>
    @endif
</div>
</div>
