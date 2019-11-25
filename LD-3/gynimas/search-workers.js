const submit = document.querySelector('#submit');
const title = document.querySelector('#job_title');
const salary = document.querySelector('#salary');

submit.addEventListener('click', search);

function search() {
    if (title.value == "") {
        alert("Pareigos laukelis turi buti uzpildytas");
        return;
    }

    let api_url = "http://tinklai.files/LD-3/gynimas/workers-api.php" + "?title=" + title.value + "&salary=" + salary.value;
    fetch(api_url).then(response => {
        return response.json()
    }).then(data => {
        let table = "<table class='table' id='table'>" +
            "<tr><td>Id</td><td>Vardas</td><td>Pavarde</td><td>Pareigos</td><td>Atlyginimas</td></tr>";
        for (i in data) {
            table += "<tr><td>" + data[i].Tabelio_nr + "</td><td>" + data[i].Vardas + "</td><td>" + data[i].Pavarde + "</td><td>" + data[i].Pareigos + "</td><td>" + data[i].Atlyginimas + "</td></tr>"
        }

        table += "</table>"
        document.getElementById('messages_table').innerHTML = table;
    }).catch(error => {
        console.log(error)
    })
}