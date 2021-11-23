const countryAPI = "https://www.randyconnolly.com/funwebdev/3rd/api/travel/countries.php";

document.addEventListener("DOMContentLoaded", () => {

    if (!JSON.parse(localStorage.getItem('countries'))) {
        fetch(countryAPI + "?iso=ALL")
            .then((response) => response.json())
            .then((countries) => {
                localStorage.setItem('countries', JSON.stringify(countries));

                generateList(countries);
            });
    }
    else {
        const countries = JSON.parse(localStorage.getItem('countries'));

        generateList(countries);
    }

});

function generateList(countries) {

    const countryListSection = document.querySelector(".countryList");
    countryListSection.innerHTML = "";

    let alphabeticallySortedCountries = countries.sort(function (a, b) {
        if (a.name < b.name) {
            return -1;
        }
        if (a.name > b.name) {
            return 1;
        }
        return 0;
    });

    alphabeticallySortedCountries.forEach((country) => {
        countryName = document.createElement("a");
        countryName.href = "single-country.php?iso=" + country.iso;
        countryName.innerHTML = country.name;
        countryName.className = "row s1";
        countryName.id = country.iso;
        countryListSection.append(countryName);
    });

}
