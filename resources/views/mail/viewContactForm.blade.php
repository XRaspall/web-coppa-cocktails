@component('mail::message')
    ## New message from Coppa Cocktails website ##

    First name: {{ $request->name }}

    Last name: {{ $request->surnames }}

    Company Name: {{ $request->company }}

    Country/Region: {{ $request->country }}

    Mobile phone number: {{ $request->phone }}

    Email: {{ $request->email }}

    Message:
    {{ $request->message }}

    Thanks,
    Coppa Cocktails
@endcomponent
