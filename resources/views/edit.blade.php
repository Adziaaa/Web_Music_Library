<x-app-layout>


<body>
    <div class="container">
        <div class="logo">
            <img src="https://img.icons8.com/quill/100/228BE6/galaxy.png" alt="Home" />
            <h1><a href="/main">Atari800</a></h1>
        </div>
        <div class="profile-menu">
            <img src="{{ asset('images/profile.png') }}" alt="Profile" onclick="toggleDropdown()">
            <div class="dropdown-menu" id="dropdownMenu">
                <a href="/profilepage">Profile</a>
                <a href="/settings">Settings</a>
            </div>
        </div>
    </div>

    <div class="scheduler">
        <h3 class="title_alarm">Update Alarm</h3>
        <div class="form_alarm">
            <form action="/update/{{ $crud->name }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input value="{{ $crud->name }}" type="text" name="name" class="form-control" placeholder="Name"
                    required>
                <input value="{{ $crud->title }}" type="text" name="title" class="form-control"
                    placeholder="Title" required>
                <input value="{{ $crud->duration }}" type="text" name="duration" class="form-control"
                    placeholder="Duration" required>
                <input value="{{ $crud->genre }}" type="text" name="genre" class="form-control"
                    placeholder="Genre" required>






                <button type="submit" class="alarm_button">Submit</button>
            </form>
        </div>
    </div>

    <x-footer />

</body>

</x-app-layout>
