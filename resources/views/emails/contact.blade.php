@component('mail::message')
# {{ !is_null($data['subject']) ? $data['subject'] : 'Greetings' }}

{{ $data['message'] }}

@php
    $url = $data['email'].'?subject=Re:';
    $url .= !is_null($data['subject']) ? $data['subject'] : '✅Response to your Query on Cremir.org';
    $url .= '&body=Hello '.$data['name'].', '
@endphp
@component('mail::button', ['url' => 'mailto:'.$url, 'color' => 'success'])
Reply to {{ $data['name'] }}
@endcomponent

@component('mail::panel')
### Name : {{ $data['name'] }}
### Mobile Contact : {{ $data['phone'] }}
### Email Address : {{ $data['email'] }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
