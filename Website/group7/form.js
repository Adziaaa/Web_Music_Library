{
document.getElementById('musicForm').addEventListener('submit', function(event) 
{
    //https://developer.mozilla.org/en-US/docs/Web/API/Event/preventDefault
    // Prevent form submission
    event.preventDefault();

    // Get the values of the input fields
    const artistName = document.getElementById('artistName').value.trim();
    const year = document.getElementById('year').value.trim();
    const artist = document.getElementById('artists').value;
    const comment = document.getElementById('comment').value.trim();
    const trackName = document.getElementById('trackName').value.trim();
    const musicType = document.querySelector('input[name="musicType"]:checked');

    // Checking if any field is empty 
    if (!artistName || !year || artist === "" || !musicType || !comment || !trackName) {
        alert('Please fill in the field.');
    } else {
        // If there si no empty field then you can submit the form
        this.submit();
    }
});




}