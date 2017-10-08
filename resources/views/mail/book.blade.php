@component('mail::message')
    @component('mail::panel')
        ## Hello there some one from {{ config('app.name') }} has contacted you.

        This is someone who wants to book with you.

        Below is all the information they sent via the contact form.

        Name: {{ $message->name }}

        Email: {{ $message->email }}

        Phone: {{ $message->phone }}

        Message: {{ $message->message }}

        Thanks {{ config('app.name') }} Web Administrator
    @endcomponent
@endcomponent
