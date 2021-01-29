@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => '9yards.ae'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
