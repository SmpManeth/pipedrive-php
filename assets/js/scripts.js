
  $(function() {
    var url = 'edit-status.php';
    $('ul[id^="sort"]').sortable({
       connectWith: ".sortable",
       receive: function(e, ui) {
          var status_id = $(ui.item).parent(".sortable").data("status-id");
          var task_id = $(ui.item).data("task-id");
          $.ajax({
             url: url + '?status_id=' + status_id + '&task_id=' + task_id,
             success: function (url) {
				location.reload();
            
           }
          });
          
       }

    }).disableSelection();
 });
 
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}



function validateAddDealForm(){
    var contactPerson = document.forms["add-deal-form"]["Contact_person_Name"].value;
    var PhoneNo = document.forms["add-deal-form"]["Phone_No"].value;
    var Value = document.forms["add-deal-form"]["Value_No"].value;
    var EmailAddress = document.forms["add-deal-form"]["Email_Address"].value;
    var error_flag = false;

    //first name
    if (/^[a-zA-Z]+$/.test(contactPerson)){
        document.getElementById('Contact_person_Name_error').style.color = "";
    }else {
       
       document.getElementById('Contact_person_Name_error').innerHTML=' * Contact Person must have alphabet characters only';
       error_flag = true;
    }

         //mobile no
         if (/^[0]{1}[0-9]{9}$/.test(PhoneNo)){
            document.getElementById('Phone_No_error').style.color = "";
        }
        else{
            document.getElementById('Phone_No_error').innerHTML=' * You did not enter numbers only. Please enter only numbers';
            error_flag = true;
        }

         //value
               if (/^[0-9]+$/.test(Value)){
                document.getElementById('Value_error').style.color = "";
            }
            else{
                document.getElementById('Value_error').innerHTML=' * Only Numeric Characters';
                error_flag = true;
            }

                //   email
                  if (/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(EmailAddress)){
                      document.getElementById('Email_Address_error').style.color = "";
                  }else {
                      document.getElementById('Email_Address_error').innerHTML=' * Please Enter Correct Email Address';
                      error_flag = true;
                  }

    if (error_flag){
        return false;
    }else{
        return true;
    }
}

function reset_form()
{
 if ( confirm("Are you sure that you want to reset this form?") )
   {
  window.document.contact.reset();
   }
  
   else
   {
    window.document.contact.cname.focus();
   }
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


// function closeWindow() {
//     if (confirm("Close window?")){
//         close();
//     }
// }

$(document).ready(function () {
    var max_fields = 10; //maximum input boxes allowed
    var wrapper = $(".input_fields_wrap"); //Fields wrapper
    var add_button = $(".add_field_button"); //Add button ID

    var x = 0; //initlal text box count
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="phone_extra" style="width: 150px;" class="input-field">&nbsp;<select class="input-field" name="phone_category_extra" id="" style="width: 120px; height: 27px; padding: 0px;">option class="" value="Pipeline_One">Work</option><option class="" value="Work">Work</option><option class="" value="Home">Home</option><option class="" value="Mobile">Mobile</option><option class="" value="Others">Others</option></select><button class="remove_field" style="margin-top:2px; margin-bottom:2px" ; type="button"><i class="fas fa-trash-alt" aria-hidden="true"></i></button><div class="input-group-append"></div></div>');    
		    }
        });

    $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
        e.preventDefault();
        $(this).parent('div').remove(); x--;
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
            $(wrapper).append('<div><input type="text" name="email_extra" style="width: 275px;" class="input-field"><button class="remove_field" style="margin-top:2px; margin-bottom:2px;" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button><div class="input-group-append"></div></div> ');
        }
    });

    $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
        e.preventDefault();
        $(this).parent('div').remove(); x--;
    })
});
<<<<<<< HEAD


  $(function() {
    var url = 'edit-status.php';
    $('ul[id^="sort"]').sortable({
       connectWith: ".sortable",
       receive: function(e, ui) {
          var status_id = $(ui.item).parent(".sortable").data("status-id");
          var task_id = $(ui.item).data("task-id");
          $.ajax({
             url: url + '?status_id=' + status_id + '&task_id=' + task_id,
             success: function (url) {
				location.reload();
            
           }
          });
          
       }

    }).disableSelection();
 });
=======


>>>>>>> a1af4a2c0c2ff11ac899dcace99db0cc9eea8f68
   


	
	

		 
