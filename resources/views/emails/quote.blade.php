@component('mail::message')
# Potential Project Quote 🥳

{{ $data['message'] }}

@php
    $url = $data['email'].'?subject=Re:';
    $url .= '✅Response to your Quote Request on Cremir.org';
    $url .= '&body=Hello '.$data['name'].', '
@endphp
@component('mail::button', ['url' => 'mailto:'.$url, 'color' => 'success'])
Reply to {{ $data['name'] }}
@endcomponent

@component('mail::panel')
### Name : {{ $data['name'] }}
### Mobile Contact : {{ $data['phone'] }}
### Email Address : {{ $data['email'] }}
### Project Type: {{ $data['service'] }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
