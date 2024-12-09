<!-- resources/views/components/footer.blade.php -->
<div class="bottom bg-black p-6 w-full">
    <div class="bottom-section ">
        <h4 class="text-lg font-semibold">Company</h4>
        <ul class="list-none mt-2">
            <li><a href="#" class="text-blue-500 hover:underline">About us</a></li>
            <li><a href="#" class="text-blue-500 hover:underline">Privacy policy</a></li>
            <li><a href="{{ route('websiteRegulations') }}" class="text-blue-500 hover:underline">View Website Regulations</a></li>
        </ul>
    </div>
    <div class="bottom-section ">
        <h4 class="text-lg font-semibold">Help</h4>
        <ul class="list-none mt-2">
            <li><a href="#" class="text-blue-500 hover:underline">Q&A</a></li>
            <li><a href="#" class="text-blue-500 hover:underline">Sign up</a></li>
        </ul>
    </div>
    <div class="bottom-section ">
        <h4 class="text-lg font-semibold">Contact us</h4>
        <ul class="list-none mt-2">
            <li>Alsion 2, 6400 Sønderborg</li>
            <li>Telephone: 6550 1160</li>
        </ul>
    </div>
</div>

<div class="end bg-green text-white w-full h-100%">
    <footer>
        <marquee style="width:100%">
            <p style="font-size:17px;  padding-bottom:20px;" class="m-10">©2024 Made by Group 7 | All Rights Reserved</p>
        </marquee>
    </footer>
</div>

{{-- <div class="end bg-black text-white py-4">
    <footer>
        <marquee>
            <p>©2024 Made by Group 7 | All Rights Reserved</p>
        </marquee>
    </footer>
</div> --}}