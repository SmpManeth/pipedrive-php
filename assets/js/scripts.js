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
function dragEnter(){
    console.log("Dragg Entered");
}
function dragLeave(){
    console.log("Dragg Leaved");
}
function dragDrop() {
    this.appendChild(draggable_deal_box);
    console.log("Dragg Drop");
}
