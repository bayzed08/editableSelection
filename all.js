$(document).ready(function() {
    $('#country').editableSelect();
    fetch_data();
});
$('#sample_form').on('submit', function(event) {
    event.preventDefault();
    if ($('#name').val() == '') {
        alert("EnterName First");

    } else if ($('#country').val() == '') {
        alert("Enter Country Name");

    } else {
        $.ajax({
            url: "./action/insert.php",
            method: "POST",
            data: $(this).serialize(),
            success: function(data) {
                // alert(data);
                $("#sample_form")[0].reset();
                fetch_data();
            }
        });
    }
});

function fetch_data() {
    $.ajax({
        url: "fetch.php",
        method: "POST",
        success: function(data) {
            $('tbody').html(data);
        }
    })
}

function deleteData(id) {
    var idd = id;
    var text = "Are you sure you want to delete this?";
    if (confirm(text) == true) {
        $.ajax({
            url: "./action/delete.php",
            method: "POST",
            data: {
                idd: idd
            },
            success: function(data) {
                alert(data);
                fetch_data();
            }
        });
    }

}