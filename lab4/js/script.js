let basicInfo = document.getElementById("basicInfo");
let peopleNumber = document.getElementById("people");
function updateRows(personCookie) {
    let lastRow = basicInfo.lastChild;
    lastRow.querySelector("input[name='fname[]']").value = personCookie[0];
    lastRow.querySelector("input[name='lname[]']").value = personCookie[1];
    lastRow.querySelector("input[name='address[]']").value = personCookie[2];
}

function addInfoRows() {
    let numberOfPeople = basicInfo.childElementCount;
    let personCookie = getPersonCookies(numberOfPeople);
    basicInfo.appendChild(addRowFromTemplate());
    if (personCookie.length > 0) {
        updateRows(personCookie);
    }
}
function getCookieNumberOfPeople(){
    let allCookies = document.cookie.split(';');
    for(let i = 0; i < allCookies.length; i++){
        let cookie = allCookies[i].split('=');
        if(cookie[0].trim().includes("people")){
            return cookie[1];
        }
    }
    return 0;
}

function loadFromCookies(){
    document.getElementById("people").value = getCookieNumberOfPeople();
    console.log("people number: " + getCookieNumberOfPeople());
    setInfoRows();

}

function setInfoRows() {
    let childDiff = peopleNumber.value - basicInfo.childElementCount
    // console.log(peopleNumber.value, " - ", basicInfo.childElementCount, " = ", childDiff);
    if(childDiff > 0){
        for(let i = 0; i < childDiff; i++){
            addInfoRows();
        }
    }
    else if(childDiff < 0){
        for(let i = 0; i < Math.abs(childDiff); i++){
            removeInfoRow();
        }
    }
}


function getPersonCookies(personNumber){
    let personDetailsArray = [];
    let allCookies = document.cookie.split(';');
    console.log(allCookies);
    let cookieName = "person" + personNumber;
    for(let i = 0; i < allCookies.length; i++){
        let cookie = allCookies[i].split('=');
        if(cookie[0].trim().includes(cookieName)){
            personDetailsArray.push(cookie[1]);
        }
    }
    return personDetailsArray;
}

function addRowFromTemplate(){
    let row =
        "<div>" +
        "<label>First name <input type='text' name='fname[]' required>" +  "</label>" +
        "<label>Last name <input type='text' name='lname[]' required></label>" +
        "<label>Address <input type='text' id='address' name='address[]' required></label>" +
        "</div>";
    const template = document.createElement("template");
    const result = template.content.children
    template.innerHTML = row;
    if(result.length === 1){
        return result[0];
    }
    return result;
}
function removeInfoRow(){
    basicInfo.removeChild(basicInfo.lastChild)
}

window.onload = loadFromCookies;
peopleNumber.addEventListener("change", setInfoRows);