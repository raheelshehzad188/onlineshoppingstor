<div style="width: 100%; display:block;">
<h2>{{ trans('labels.EcommercePasswordRecovery') }}</h2>
<p>
	<strong>{{ trans('labels.Hi') }} {{ $existUser[0]->customers_firstname }} {{ $existUser[0]->customers_lastname }}!</strong><br>
	{{ trans('labels.recoverPasswordEmailText') }}<br>
	{{ trans('labels.Yourpasswordis') }} <strong>{{ $existUser[0]->customers_password }}</strong><br><br>
	<strong>{{ trans('labels.Sincerely') }},</strong><br>
	{{ trans('labels.regardsForThanks') }}
</p>
</div>