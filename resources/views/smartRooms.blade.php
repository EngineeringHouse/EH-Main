@extends('layouts.app')

@section('page_head')

    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>

@endsection

@section('body')

    <div class="ninety-width">

        <smartroom-component></smartroom-component>

    </div>

@endsection

@section('scripts')
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('161ccb0b7e8071fb8505', {
            cluster: 'us2',
            encrypted: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            alert(data.message);
        });
    </script>
@endsection