
let form = document.getElementById("validationform");
    form.onsubmit = validate;

//function of validation for form info
function validate() {
    let valid = true;
    //clear all the errs
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }
    //Check needs item
    let toppings = document.getElementsByName("toppings[]");

    let rent = document.getElementById("rent").checked;
    let gas = document.getElementById("gas").checked;
    let clothing = document.getElementById("clothing").checked;
    let ID = document.getElementById("id").checked;

    let toppingCount = 0;
    for (let i = 0; i < toppings.length; i++) {
        if (toppings[i].checked) {
            toppingCount++;
        }
    }

    if (toppingCount === 0) {
        let errToppings = document.getElementById("errToppings");
        errToppings.style.visibility = "visible";
        errToppings.innerHTML = "\u26A0 Please select at least one item"
        valid = false;
    }
    //check for name
    let name = document.getElementById("name").value;
    if (name === "") {
        let errName = document.getElementById("errName");
        errName.style.visibility = "visible";
        errName.innerHTML = "\u26A0 Field is required";//adding the alarm sign
        valid = false;
    }

    //check for email
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let n = email.includes(".");
    let errEmail = document.getElementById("errEmail");
    //let x = email.includes(" ");
    let m = email.includes("@");

    if (email === "" && phone === "") {

        errEmail.style.visibility = "visible";
        errEmail.innerHTML = "\u26A0 Please provide either an email address or phone number(Email preferred) ";
        valid = false;

    }else if(phone){
        errEmail.style.visibility = "hidden";
    }
    else if(email) {
        if (!n || !m) {
            errEmail.style.visibility = "visible";
            errEmail.innerHTML = "\u26A0 Invalid email format";
            valid = false;
        }
    }

    let otherInfo = document.getElementById("otherInfo").value;
    let errOthers = document.getElementById("errothers");
    let others = document.getElementById("other");
    if(others.checked === true) {
        if (otherInfo === "") {
            errOthers.style.visibility = "visible";
            errOthers.innerHTML = "\u26A0 Please provide request item ";
            valid = false;
        } else {
            errOthers.style.visibility = "hidden";

        }

    }
    let address = document.getElementById("address").value;
    //let notresident = document.getElementById("notresident");
    let erraddress = document.getElementById("errAddress");
    let notR = document.getElementById("notresident");
    if(notR.checked === false) {
        if (address === "") {
            erraddress.style.visibility = "visible";
            erraddress.innerHTML = "\u26A0 Field is required";//adding the alarm sign
            valid = false;
        }
        else {
            erraddress.style.visibility = "hidden";
        }
    }
    let zipCode = document.getElementById("zip-text").value;
    let errorZip = document.getElementById("errZip");

    let notresident = document.getElementById("notresident");
    errorZip.style.visibility = "hidden";
    if (zipCode === "" && notresident.checked === false) {
        errorZip.style.visibility = "visible";
        errorZip.innerHTML = " \u26A0 Zip Code is required ";

        valid = false;
    } else{
        errorZip.style.visibility = "hidden";
    }

    return valid;
}



//showing necessary documents when visiting outreach kent
let utility = document.getElementById("utility").onclick = showUti;
let utilityInfo = document.getElementById("utilityInfo");

function showUti() {
    if (utility.checked === true) {
        utilityInfo.classList.add("d-none");
    } else {
        utilityInfo.classList.remove("d-none");
    }
}
//showing necessary documents when visiting outreach kent for rent
let rent = document.getElementById("rent").onclick = showRent;
let rentInfo = document.getElementById("rentInfo");

function showRent() {
    if (rent.checked === true) {

        rentInfo.classList.add("d-none");
    } else {
        rentInfo.classList.remove("d-none");
    }
}
//showing necessary documents when visiting outreach kent for gas
let gas = document.getElementById("gas").onclick = showGas;
let gasInfo = document.getElementById("gasInfo");

function showGas() {
    if (gas.checked === true) {

        gasInfo.classList.add("d-none");
    } else {

        gasInfo.classList.remove("d-none");

    }
}
//showing necessary documents when visiting outreach kent clothing
let clothing = document.getElementById("clothing").onclick = showClo;
let clothingInfo = document.getElementById("clothingInfo");

function showClo() {
    if (clothing.checked === true) {
        clothingInfo.classList.add("d-none");
    } else {
        clothingInfo.classList.remove("d-none");
    }
}
//showing necessary documents when visiting outreach kent for id
let id = document.getElementById("id").onclick = showId;
let idInfo = document.getElementById("idInfo");

function showId() {
    if (id.checked === true) {

        idInfo.classList.add("d-none");
    } else {

        idInfo.classList.remove("d-none");
    }
}
//showing necessary documents when visiting outreach kent for food
let food = document.getElementById("food").onclick = showFo;
let foodInfo = document.getElementById("foodInfo");

function showFo() {
    if (food.checked === true) {

        foodInfo.classList.add("d-none");
    } else {

        foodInfo.classList.remove("d-none");
    }
}
//showing necessary documents when visiting outreach kent for others
let others = document.getElementById("other").onclick = showOther;
let otherInfo = document.getElementById("otherInfo");


function showOther() {
    if (others.checked === true) {
        otherInfo.classList.add("d-none");
    } else {
        otherInfo.classList.remove("d-none");
    }
}

//hiding the address section if not permanent resident
document.getElementById("notresident").onclick = hideAdd;
function hideAdd() {
    let notresident = document.getElementById("notresident");
    let hideAdd = document.getElementById("address-section");
    let hideZip = document.getElementById("zip");
    if (notresident.checked === true) {
        hideAdd.classList.add("d-none");
        hideZip.classList.add("d-none");
    }
    else {
        hideAdd.classList.remove("d-none");
        hideZip.classList.remove("d-none");
    }
}

///////////////////////////////////////////////////////////////

document.getElementById("zip-btn").onclick = main;


    function main() {
        let zipCode = document.getElementById("zip-text").value;
        let errorZip = document.getElementById("errZip");
        let call = document.getElementById("call");
        errorZip.style.visibility = "hidden";
        if (zipCode === "") {
            errorZip.style.visibility = "visible";
            errorZip.innerHTML = " \u26A0 Zip Code is required ";
            call.style.visibility = "hidden";

        }

        else if (zipCode === "98030" || zipCode == "98031" || zipCode === "98032" || zipCode === "98042" || zipCode === "98058") {
            errorZip.style.visibility = "hidden";
            let message = document.getElementById("time");
            let currentTime = document.getElementById("hour");
            message.innerHTML = "<h2>Please proceed filling the form to submit your request !</h2>";
            currentTime.innerHTML = "";
            let btnhide = document.getElementById("zip-btn");
            btnhide.style.visibility = "hidden";
            let ziptext = document.getElementById("zip-text");
            ziptext.style.visibility = "hidden";
            call.style.visibility = "hidden";
        }
        else  {
            hideForm();
            let message = document.getElementById("time");
            message.innerHTML="<h3>We are sorry we don't serve entered zip code for now</h3>" +
                "<h3>You can try bellow options</h3>" + "<a href=\"http://Kentmethodist.com/assistance\">Kentmethodist</a><br>" +
                " <a  href=\"https//www.211.org/\">211</a><br> ";
            let message2 = document.getElementById("hour");
            let date = new Date();
            message2.innerHTML= "<br>Today's Date" + date;


            let btnhide = document.getElementById("zip-btn");
            btnhide.style.visibility = "hidden";
            let ziptext = document.getElementById("zip-text");
            ziptext.style.visibility = "hidden";
            call.style.visibility = "hidden";

        }
    }

        function hideForm(){
            let form = document.getElementById("validationform");
            form.style.visibility = "hidden";
        }


        //   // OUT OF HOURS //   //

        let out = document.getElementById("call").onclick = outOfHours;

        let call = document.getElementById("call");
        call.style.visibility = "";
        function outOfHours() {
            let form = document.getElementById("validationform");
           // form.style.visibility = "hidden";

            let date = new Date();
            let hour = date.getHours();
            let minutes = date.getMinutes();


            var sign = "PM";
            if (hour < 12) {
                sign = "AM";
            } else {
                sign = "PM";
            }
            let weekday = new Array(7);
            weekday[0] = "Sunday";
            weekday[1] = "Monday";
            weekday[2] = "Tuesday";
            weekday[3] = "Wednesday";
            weekday[4] = "Thursday";
            weekday[5] = "Friday";
            weekday[6] = "Saturday";
            let today = weekday[date.getDay()];

            if ((today === weekday[5] || today === weekday[6]) && (hour > 13 || hour < 16)) {

                form.style.visibility = "visible";

            } else if (today == weekday[0] && (hour > 1 || hour < 12))//|| hour <= 12)
            {
                form.style.visibility = "visible";
            } else {
                form.style.visibility = "visible";

                let currentDate = document.getElementById("time");
                let currentTime = document.getElementById("hour");
                let call = document.getElementById("call");
                form.style.visibility = "hidden";

                currentTime.innerHTML = "Time: &nbsp&nbsp" + hour + ":" + minutes + ":"  + sign;
                currentDate.innerHTML = "Today:  &nbsp&nbsp" + today;
                call.innerHTML = "Please Visit During Official Hours ! <br>" + "<br><h5><p> for this test demo, I have changed office hours as that the form will be visible <br> only on " +
                    "FRIDAY, SATURDAY and SUNDAY at OFFICIAL HOURS other than these times, form will be invisible <br>" +
                    "We will place this link to (Apply) nav so when someone click outside hours then will see this exam information<p><h5>";
                call.style.visibility = "visible";
                currentDate.style.visibility = "visible";
                currentTime.style.visibility = "visible";

                let zipbtn = document.getElementById("zip-btn");
                zipbtn.style.visibility = "hidden";
                let ziptext = document.getElementById("zip-text");
                ziptext.style.visibility = "hidden";
            }
        }


//////////////////////////////
