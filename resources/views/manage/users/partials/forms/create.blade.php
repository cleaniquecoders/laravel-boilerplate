@include('components.forms.hidden', [
	'id' => 'id',
	'name' => 'id',
	'value' => ''
])

@include('components.forms.input', [
	'label' => 'Name',
])
@include('components.forms.input', [
	'label' => 'E-mail',
	'name' => 'email',
	'type' => 'email'
])
@include('components.forms.input', [
	'label' => 'Password',
	'type' => 'password'
])
@include('components.forms.input', [
	'label' => 'Password Confirmation',
	'type' => 'password'
])
@include('components.forms.select-multiple', [
	'label' => 'Role',
	'name' => 'roles',
	'options' => roles()->where('guard_name', 'web')->pluck('name', 'id'),
])