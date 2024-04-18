let basicInfo = document.getElementById("basicInfo");
let peopleNumber = document.getElementById("people");
peopleNumber.addEventListener("change", function() {
            var value = peopleNumber.value;
            basicInfo.innerHTML = "";
            for (var i = 1; i <= value; i++) {
                basicInfo.innerHTML += "<div>" +
                    "<label>Name: <input type='text' name='fname[]' required></label>" +
                    "<label>Last name: <input type='text' name='lname[]' required></label>" +
                    "<input type='text' id='address' name='address[]' required></label>" +
                    "</div>";
    }
});