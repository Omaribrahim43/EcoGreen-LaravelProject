@extends('admin.layouts.master')
@section('content')
<x-guest-layout>
    <div class="max-w-7xl mx-auto mt-8">
        @include('frontend.contact.sections.contactFormArea')
    </div>
</x-guest-layout>
@endsection
