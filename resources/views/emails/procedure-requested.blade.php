@component('mail::message')


New Request submitted to website.

@component('mail::button', ['url' => 'https://medtouriran.com/en/myadmin/requests/'.$req->id])
view
@endcomponent

@component('mail::table')
| Name          | phone         | Message  |
| ------------- |:-------------:| --------:|
| {{$req->first_name}} | {{$req->phone}}      | {{$req->message}}      |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
