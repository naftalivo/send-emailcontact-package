@component('mail::message')
# Introduction

Hi {{ $name }}
<br>
You sent your message {{ $message }} to us.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
