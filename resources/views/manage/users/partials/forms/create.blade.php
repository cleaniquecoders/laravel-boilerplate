@include('components.forms.input', [
	'input_label' => 'Name',
])
@include('components.forms.input', [
	'input_label' => 'E-mail',
	'name' => 'email',
	'type' => 'email'
])
@include('components.forms.input', [
	'input_label' => 'Password',
	'type' => 'password'
])
@include('components.forms.input', [
	'input_label' => 'Password Confirmation',
	'type' => 'password'
])
@include('components.forms.select-multiple', [
	'input_label' => 'Role',
	'options' => roles()->where('guard_name', 'web')->pluck('name', 'id'),
])