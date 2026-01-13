function shipCategoryChange() {
    var shipCategory = document.getElementById("shipCategory").value;

    if (shipCategory == null) return;

    else if (shipCategory == "civilian") {
        var shipType = ['Fuel Tankers', 'Civilian Transport Vessels', 'Cargo Freighters'];
    }
    else if (shipCategory == "military") {
        var shipType = ['Fighters', 'Corvettes', 'Frigates', 'Destroyers', 'Cruisers', 'Carriers'];
    }
    else return;

    var select = document.getElementById("shipType");
    select.innerHTML = null;

    shipType.forEach(function (type) {
        var option = document.createElement('option');
        option.value = type.toLowerCase().replace(/ /g, '_');
        option.innerHTML = type;
        select.appendChild(option);
    });
}