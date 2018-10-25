@section('top')
<div>
    <h1>Hello, Elbow</h1>
    </div>
@endsection
@section('content')
<div>
    <h2>you got a new contact message!</h2>
    <div style="border:1px solid gray; padding:12px;">
        <h3>Interested in:</h3>
        <p>{{ $data->message }}</p>
        <h3>Email:</h3>
        @if($data->address)
            <p>{{ $data->address }}</p>
        @else
            <p>{{ $data->email_address }}</p>
        @endif
        @if ($data->name)
            <p>Name: {{ $data->name }}</p>
        @endif
    </div>
    <h2>Write them back!</h2>
</div>
@endsection