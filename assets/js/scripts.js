/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

const deal_box = document.querySelectorAll(".deals-box");
const all_deal_stage_cols = document.querySelectorAll(".deal-stage-col");
let draggable_deal_box = null;

deal_box.forEach((dealbox) => {
    dealbox.addEventListener("dragstart", dragStart);
    dealbox.addEventListener("dragend", dragEnd);
});

function dragStart() {
    draggable_deal_box = this;
    console.log("Draggins Started");
}
function dragEnd() {
    draggable_deal_box = null;
    console.log("Dragging Endded");
}

all_deal_stage_cols.forEach((stage) => {
    stage.addEventListener("dragover", dragOver);
    stage.addEventListener("dragenter", dragEnter);
    stage.addEventListener("dragleave", dragLeave);
    stage.addEventListener("drop", dragDrop);
});

function dragOver(e) {
    e.preventDefault();
    // console.log("Dragging Over");
}
function dragEnter() {
    this.style.border = "2px solid #2924241f";

    console.log("Dragg Entered");
}
function dragLeave() {
    this.style.border = "none";
    console.log("Dragg Leaved");
}
function dragDrop() {
    this.style.border = "none";
    this.appendChild(draggable_deal_box);
    console.log("Dragg Drop");
}


/* modal */
const btns = document.querySelectorAll("[data-target-modal]");
const close_modals = document.querySelectorAll(".close-modal");
const overlay = document.getElementById("overlay");

btns.forEach((btn) => {
    btn.addEventListener("click", () => {
        document.querySelector(btn.dataset.targetModal).classList.add("active");
        overlay.classList.add("active");
    });
});

close_modals.forEach((btn) => {
    btn.addEventListener("click", () => {
        const modal = btn.closest(".modal");
        modal.classList.remove("active");
        overlay.classList.remove("active");
    });
});

window.onclick = (event) => {
    if (event.target == overlay) {
        const modals = document.querySelectorAll(".modal");
        modals.forEach((modal) => modal.classList.remove("active"));
        overlay.classList.remove("active");
    }
};


$(document).ready(function () {
    var max_fields = 10; //maximum input boxes allowed
    var wrapper = $(".input_fields_wrap"); //Fields wrapper
    var add_button = $(".add_field_button"); //Add button ID

    var x = 0; //initlal text box count
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="phone" class="input-field"><div class="input-group-append"><button class="btn btn-outline-danger remove_field" type="button">Remove</button></div></div>');

        }
    });

    $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
        e.preventDefault();
        $(this).parent('div').parent('div').remove(); x--;
    })
});
$(document).ready(function () {
    var max_fields = 10; //maximum input boxes allowed
    var wrapper = $(".input_wrap"); //Fields wrapper
    var add_button = $(".add_f_button"); //Add button ID

    var x = 0; //initlal text box count
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="email" class="input-field"><div class="input-group-append"><button class="btn btn-outline-danger remove_field" type="button">Remove</button></div></div>');

        }
    });

    $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
        e.preventDefault();
        $(this).parent('div').parent('div').remove(); x--;
    })
});


