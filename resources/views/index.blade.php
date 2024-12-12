<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/index1.css') }}">

    <body>
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
        <script>
            $(document).ready(function() {
                $.ajax({
                    url: '/check-desk-notifications', // URL trasy
                    method: 'GET',
                    success: function(response) {
                        console.log(response.message); // Displaying success message in console
                        console.log(response.posts); // Displaying success posts? in console
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });
        </script>


        <div class="scheduler text-white">
            <div class="al">
                <h3 class="title_alarm">PlaylistsWorld - place where you can add your favourite playlists</h3>
                <a href="/create1"><button id="addalarmbtn" class="alarm_button">Add New Playlist</button></a>
            </div>
            <table class="table_alarm">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name </th>
                        <th>Title</th>
                        <th>Duration</th>
                        <th>Genre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($crud as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->duration }}</td>
                            <td>{{ $item->genre }}</td>

                            <td>
                                <form action="/edit/{{ $item->id }}" method="get">
                                    <button class="alarm_button" type="submit">Update</button>
                                </form>
                            </td>
                            <td>
                                <form action="/delete/{{ $item->id }}" method="post">
                                    <button class="alarm_button" onclick="return confirm('Are you sure?');"
                                        type="submit">Delete</button>
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                    @endforeach





                </tbody>
            </table>


        </div>
        <x-footer />

        <script src="{{ asset('js/support.js') }}"></script>


    </body>

</x-app-layout>
