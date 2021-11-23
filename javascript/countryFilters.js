
document.addEventListener("DOMContentLoaded", () => {

    clearFilterSelection();

    document.querySelector("#filter_search").addEventListener("input", (e) => {
        orderListByInput(e);
    });

    document.querySelector("#filter_imgavail").addEventListener("click", (e) => {
        orderListByImgavail();
    });

    document.querySelector("#filter_continent").addEventListener("input", (e) => {
        orderListByContinent(e);
    });

    document.querySelector("#filterHamburgerBtn").addEventListener("click", (e) => {
        var filters = document.querySelector('.filters');
        var instance = M.Sidenav.getInstance(filters);
        instance.open();
    });

});

function orderListByInput(filterEvent) {

    const countries = JSON.parse(localStorage.getItem('countries'));

    let filteredCountries = [];

    for (let country of countries) {
        if (country.name.toUpperCase().startsWith(filterEvent.target.value.toUpperCase())) {
            filteredCountries.push(country);
        }
    }

    document.querySelectorAll(".filterCheckbox").forEach((box) => {
        box.checked = false;
        console.log(box);
    });

    generateList(filteredCountries);
}

function orderListByImgavail() {

    const countries = JSON.parse(localStorage.getItem('countries'));

    let filteredCountries = new Set();

    getImages().forEach((image) => {
        filteredCountries.add(countries.find(country => country.iso == image.location.iso));
    });

    clearFilterSelection();

    generateList(Array.from(filteredCountries));
}

function orderListByContinent(filterEvent) {

    const countries = JSON.parse(localStorage.getItem('countries'));

    let filteredCountries = [];

    let checkboxes = document.querySelectorAll(".filterCheckbox");

    if (checkboxes[0].checked) {
        addContinentCountries(countries, "AF").forEach((country) => {
            filteredCountries.push(country);
        });
    }
    if (checkboxes[1].checked) {
        addContinentCountries(countries, "AN").forEach((country) => {
            filteredCountries.push(country);
        });
    }
    if (checkboxes[2].checked) {
        addContinentCountries(countries, "AS").forEach((country) => {
            filteredCountries.push(country);
        });
    }
    if (checkboxes[3].checked) {
        addContinentCountries(countries, "EU").forEach((country) => {
            filteredCountries.push(country);
        });
    }
    if (checkboxes[4].checked) {
        addContinentCountries(countries, "NA").forEach((country) => {
            filteredCountries.push(country);
        });
    }
    if (checkboxes[5].checked) {
        addContinentCountries(countries, "OC").forEach((country) => {
            filteredCountries.push(country);
        });
    }
    if (checkboxes[6].checked) {
        addContinentCountries(countries, "SA").forEach((country) => {
            filteredCountries.push(country);
        });
    }

    let CheckboxEnabled = false;
    checkboxes.forEach((box) => {
        if (box.checked) {
            CheckboxEnabled = true;
        }
    });
    if (!CheckboxEnabled) {
        filteredCountries = countries;
    }

    document.querySelector("#filter_search").value = "";

    generateList(filteredCountries);
}

function addContinentCountries(countries, continent) {

    let filteredCountries = [];

    countries.forEach((country) => {
        if (country.continent == continent) {
            filteredCountries.push(country);
        }
    });

    return filteredCountries;
}

function clearFilterSelection() {

    document.querySelectorAll(".filterCheckbox").forEach((box) => {
        box.checked = false;
        console.log(box);
    });

    document.querySelector("#filter_search").value = "";

}