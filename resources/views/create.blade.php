<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">

    <body>
        <div class="scheduler">
            <h3 class="title-alarm"><b>Add New Playlist</b></h3>
            <div class="form_alarm">
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="number" name="duration" placeholder="Duration" required>
                    <input type="text" name="genre" placeholder="Genre" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

        <x-footer />

        <audio src="" id="notificationSound"></audio>
        <script src="{{ asset('js/support.js') }}"></script>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </body>

</x-app-layout>
