@component('mail::message')
# Hello, 

You registered an account on Barangay Residents & Document Issuance System, before being able to use your account you need to verify that this is your email address by clicking the button down below.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Kind Regards,<br>
{{ config('app.name') }}
@endcomponent
