function venue() {
    const form = document.getElementById('newvenue');
    const error_vname = document.getElementById('error_vname');
    const error_location = document.getElementById('error_location');
    const error_capacity = document.getElementById('error_capacity');

    form.addEventListener('submit', (e) => {

        error_vname.innerHTML = "";
        error_location.innerHTML = "";
        error_capacity.innerHTML = "";

        let vname = document.getElementById('venue_name').value;
        let location = document.getElementById('location').value;
        let capacity = document.getElementById('capacity').value;

        if (vname === '' || vname == null) {
            e.preventDefault();
            error_vname.innerHTML = "Venue name should not be null";
        } 
        if (location === '' || location == null) {
            e.preventDefault();
            error_location.innerHTML = "Location should not be null";
        } 
        if (capacity === '' || capacity == null) {
            e.preventDefault();
            error_capacity.innerHTML = "Capacity should not be null";
        } 
    });
}
