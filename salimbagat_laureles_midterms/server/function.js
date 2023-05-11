$(function() {
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if (month < 10)
        month = '0' + month.toString();
    if (day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;
    $('#date').attr('max', maxDate);

});
$(document).ready(function() {
    $('#date').change(function() {
        var dob = new Date($(this).val());
        var today = new Date();
        var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
        $('#ageget').val(age);
    });
});

function formatDate(date) {
    var parts = date.split("-");
    return parts[1] + "/" + parts[2] + "/" + parts[0];
}
$(document).ready(function() {
    $('#adddataModal').on('hidden.bs.modal', function(e) {
        $('#ADform')[0].reset();
    });
});

$(function() {
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if (month < 10)
        month = '0' + month.toString();
    if (day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;
    $('.bdate').attr('max', maxDate);

});
$(document).ready(function() {
    $('.bdate').change(function() {
        var dob = new Date($(this).val());
        var today = new Date();
        var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
        $('.ageget').val(age);
    });
});

function formatDate(date) {
    var parts = date.split("-");
    return parts[1] + "/" + parts[2] + "/" + parts[0];
}

$(function() {
    var dtToday1 = new Date();

    var month1 = dtToday1.getMonth() + 1;
    var day1 = dtToday1.getDate();
    var year1 = dtToday1.getFullYear();

    if (month1 < 10)
        month1 = '0' + month1.toString();
    if (day1 < 10)
        day1 = '0' + day1.toString();

    var maxDate1 = year1 + '-' + month1 + '-' + day1;
    $('#ADbdate').attr('max', maxDate1);

});
$(document).ready(function() {
    $('#ADbdate').change(function() {
        var dob1 = new Date($(this).val());
        var today1 = new Date();
        var age1 = Math.floor((today1 - dob1) / (365.25 * 24 * 60 * 60 * 1000));
        $('#ADageget').val(age1);
    });
});

function formatDate1(date) {
    var parts1 = date.split("-");
    return parts1[1] + "/" + parts1[2] + "/" + parts1[0];
}

$('.updadeBtn').on('click', function() {
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function() {
        return $(this).text();
    }).get();

    $('.update_id').val(data[0]);
    $('.uname').val(data[1]);
    $('.pw').val(data[2]);
    $('.fname').val(data[3]);
    $('.lname').val(data[4]);
    $('.mname').val(data[5]);
    $('.addr').val(data[6]);
    $('.gender').val(data[7]);
    $('.ageget').val(data[8]);
    $('.bdate').val(data[9]);
    $('.email').val(data[10]);
    $('.roleType').val(data[11]);
});

$('.deleteBtn').on('click', function() {
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function() {
        return $(this).text();
    }).get();
    $('.delete_id').val(data[0]);
});

const passwordInput = document.querySelector(".addpw")
const eye = document.querySelector(".addeye")
const closebtn = document.querySelector(".addclose");
eye.addEventListener("click", function() {
    this.classList.toggle("fa-eye-slash")
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
    passwordInput.setAttribute("type", type)
})
closebtn.addEventListener("click", function() {
    if (eye.classList.contains("fa-eye-slash") == true) {
        eye.setAttribute("class", "fa-solid fa-eye addeye")
        passwordInput.setAttribute("type", "password")
    }
})

const passwordInput1 = document.querySelector(".updatepw")
const eye1 = document.querySelector(".update-eye")
const closebtn1 = document.querySelector(".closeUD");
eye1.addEventListener("click", function() {
    this.classList.toggle("fa-eye-slash")
    const type = passwordInput1.getAttribute("type") === "password" ? "text" : "password"
    passwordInput1.setAttribute("type", type)
})
closebtn1.addEventListener("click", function() {
    if (eye1.classList.contains("fa-eye-slash") == true) {
        eye1.setAttribute("class", "fa-solid fa-eye update-eye")
        passwordInput1.setAttribute("type", "password")
    }
})



$(document).ready(function() {
    $('#DTsid').DataTable({
        pageLength: 0,
        lengthMenu: [ [10, 11, -1], [10, 11, "All"] ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records"
        }
    });
});
