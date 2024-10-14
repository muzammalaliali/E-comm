<h1>alll students data</h1>
@foreach ($students as $data )
<h3>{{ $data->id }}|
    {{ $data->name }}|
    {{ $data->email }}|
    {{ $data->age }}|
    {{ $data->city_name }}|
</h3>

@endforeach

