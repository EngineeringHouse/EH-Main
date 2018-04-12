@extends('layouts.app')

@section('page_head')

    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>

@endsection

@section('body')

    <div class="ninety-width" uk-scrollspy="target: div.uk-card; cls:uk-animation-slide-bottom-medium; delay: 250;">

        <h2 class="white-text">This week on floor</h2>
        <hr/>

        @foreach($week as $day => $events)

            <div>
                <h4 class="white-text text-center">{{ $day }}</h4>

                @if(sizeof($events) == 0)
                    <p class="white-text">No Events</p>
                @endif
                @foreach($events as $event)
                    <div class="uk-card uk-margin uk-card-default uk-card-body">
                        <h3 class="uk-card-title">{{ $event["name"] }}</h3>
                        <p>{{ $event["desc"] }}</p>
                    </div>
                @endforeach

                <hr class="uk-divider-icon" />
            </div>

        @endforeach

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
