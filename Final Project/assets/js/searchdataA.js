function searchEventA(event) {
    event.preventDefault(); // Prevent form submission
    let skeyword = document.getElementById("keyword").value;
    let sdate = document.getElementById("date").value;
    let sevent_type = document.getElementById("type").value;

    let searchElement = {
        'keyword': skeyword,
        'date': sdate,
        'type': sevent_type
    };

    let data = JSON.stringify(searchElement);

    let result = document.getElementById("display_event");

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/searchController.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('searchElement=' + data);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let events = JSON.parse(this.responseText);

            let out = `
            <tr>
            <th>EVENT NAME</th>
            <th>EVENT DATE</th>
            <th>EVENT TIME</th>
            <th>EVENT PLACE</th>
            <th>EVENT TYPE</th>
            <th>AMOUNT</th>
            <th>ACTION</th>
              </tr>`;

            for (let event of events) {
                out += `
                <tr>
                    <td>${event.event_name}</td>
                    <td>${event.event_date}</td>
                    <td>${event.event_time}</td>
                    <td>${event.event_place}</td>
                    <td>${event.event_type}</td>
                    <td>${event.amount}</td>
                    <td>
                        <a href="reportAnalysis.php?name=${event.event_name}"> See Audit </a>
                    </td>
                </tr>
                `;
            }

            result.innerHTML = out;
        }
    };
}

