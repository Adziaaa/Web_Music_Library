// function toggleDropdown() {
//     var menu = document.getElementById("dropdownMenu");
//     menu.style.display = menu.style.display === "block" ? "none" : "block";
// }

// window.onclick = function(event) {
//     if (!event.target.matches('.profile-menu img')) {
//         var dropdowns = document.getElementsByClassName("dropdown-menu");
//         for (var i = 0; i < dropdowns.length; i++) {
//             var openDropdown = dropdowns[i];
//             if (openDropdown.style.display === "block") {
//                 openDropdown.style.display = "none";
//             }
//         }
//     }
// };

function toggleDropdown(id) {
    var content = document.getElementById(id);
    content.style.display = content.style.display === "block" ? "none" : "block";
}