{{-- <x-mail::message>
# Introduction {{ $name }}

The body of your message.
{{ $message }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}

@component('mail::message')
    # Contact from {{ $name }}

    {{ $message }}

    @component('mail::button', ['url' => 'http://127.0.0.1:8000/about'])
        Visit us
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
