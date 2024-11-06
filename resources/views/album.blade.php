<style>
    .popular {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-top: 20px;
    }

    .popular {
        flex-wrap: wrap;
    }

    .wave {
        height: 150px;
        width: 150px;
    }

    .image-container {
        text-align: center;
        margin: 5px;
        display: inline-block;
    }

    .image-container img {
        display: block;
        margin: 0 auto;
    }

    .image-container p {
        font-size: 15px;
        display: inline-block;
        margin: 0;
    }

    .button {
        width: 70px;
        height: 70px;
        cursor: pointer;
        user-select: none;
        background-color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        color: white;
    }

    .button:hover {
        background-color: blue;
    }

    .gallery {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        padding: 10px;
        flex-grow: 1;
    }

    .gallery div img {

        transition: transform 0.5s;
    }

    .gallery::-webkit-scrollbar {
        height: 10px;
    }

    .gallery::-webkit-scrollbar-thumb {
        display: none;
    }

    .gallery::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .gallery-wrap {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 20px;
    }

    #backBtn,
    #nextBtn {
        width: 50px;
        cursor: pointer;
        border-radius: 17px;
        background-color: rgb(248, 248, 252);
    }

    #backBtn:hover,
    #nextBtn:hover {
        background-color: #050505;
    }

    .gallery div button:hover {
        cursor: pointer;
        transform: scale(1.1);
    }

    body,
    html {
        margin: 0;
        padding: 0;
        width: 100%;
        overflow-x: hidden;
        font-family: 'Ubuntu', sans-serif;
        background-color: #171718;
        color: white;
    }

    body,
    html {
        margin: 0;
        padding: 0;
        width: 100%;
        overflow-x: hidden;
        font-family: 'Ubuntu', sans-serif;
        background-color: #171718;
        color: white;
    }

    .container {
        display: flex;
        padding: 15px;
        background-color: black;
        align-items: center;
        justify-content: space-between;
        height: 60px;
    }

    .search {
        flex-grow: 1;
        display: flex;
        justify-content: center;
    }

    input[type="text"] {
        width: 40%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .logo {
        display: flex;
        align-items: center;
    }

    .logo img {
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }
</style>




<div class="popular">
    <div class="gallery">
        @foreach ($popularalbum as $item)
            <div class="image-container">
                <a>
                    <img class="wave" src="data:image/jpeg;base64,{{ base64_encode($item->photo) }}">
                </a>
                <p>{{ $item->name }}</p> <br>
                <p>{{ $item->title }}</p>
            </div>
        @endforeach
    </div>
    <div class="gallery-wrap">
        <button id="backBtn">⬅️</button>
    </div>
    <div class="gallery-wrap">
        <button id="nextBtn">➡️</button>
    </div>
</div>




<script>
    let scrollContainer = document.querySelector(".gallery");
    let backBtn = document.getElementById("backBtn");
    let nextBtn = document.getElementById("nextBtn");

    scrollContainer.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer.scrollLeft += evt.deltaY;
        scrollContainer.style.scrollBehavior = "auto";
    });

    nextBtn.addEventListener("click", () => {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft += 200;
    });

    backBtn.addEventListener("click", () => {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft -= 200;
    });
</script>
