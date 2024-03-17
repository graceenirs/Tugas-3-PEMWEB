document.getElementById('biodataForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var form = event.target;
    var formData = new FormData(form);

    axios.post('t3_225150400111053.php', formData)
    .then(function(response) {
        document.getElementById('response').innerHTML = response.data;
    })
    .catch(function(error) {
        console.error('Error:', error);
    });
});
