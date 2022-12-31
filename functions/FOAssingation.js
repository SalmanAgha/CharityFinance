
function tblcases() {


    $("#datatable").DataTable({
        "ajax": "api/TblCasesPanel.php",
        "columns": [
            { "data": "Empty" },
            { "data": "CaseID" },
            { "data": "DOC" },
            { "data": "casetype" },
            { "data": "caseDescription" },
            { "data": "Name" },
            { "data": "Fathersname" },
            { "data": "cnic" },
            { "data": "contact" },
            { "data": "email" },
            { "data": "status" }

        ],
    });

}


$(document).ready(function () {


    tblcases();

    $(document).on("click", ".edit-modal", function () {


        $("#id1").val($(this).attr("id"));
        $("#date1").val($(this).data("date"));
        $("#casetype1").val($(this).data("casetype"));
        $("#casedesc1").val($(this).data("casedesc"));
        $("#name1").val($(this).data("name"));
        $("#fathername1").val($(this).data("fathername"));
        $("#cnic1").val($(this).data("cnic"));
        $("#contact1").val($(this).data("contact"));
        $("#email1").val($(this).data("email"));
        $("#status1").val($(this).data("status"));

    });



});


function Addrole() {

    var rolename = $("#rolename").val();




    if (rolename == "") {

        $("#1v").css("display", "block");
        $("#1v").text("Invalid rolename.");
        $("#rolename").css("border-color", "red");
        $("#rolename").focus();


    }
    else {


        Swal.fire({
            title: "Are you sure?",
            text: "You want to add New role!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes!"
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "api/Addrole.php",
                    method: "POST",
                    data: {

                        rolename: rolename

                    },
                    dataType: "JSON",
                    success: function (data) {
                        var result = data.result;
                        if (result == "Inserted") {
                            Swal.fire({
                                title: "role Added Successfully!",
                                type: "success",
                                timer: 4000,
                                showConfirmButton: true,
                            })


                            $("#btncancel").trigger("click");
                            $("#datatable").DataTable().destroy();
                            tblrole();
                        }
                        else {
                            Swal.fire({
                                title: "Opps! Some Error Occured!",
                                type: "error",
                                text: "Please login first",
                                timer: 4000,
                                showConfirmButton: true,
                            }).then(function () {
                                window.location.href = "index.php";
                            });
                        }
                        return data;
                    }
                });

            }
        })

    }
}




function Updaterole() {

    var id = $("#id2").val();
    var rolename1 = $("#rolename1").val().toUpperCase();

    if (rolename1 == "") {

        $("#1v1").css("display", "block");
        $("#1v1").text("Invalid rolename.");
        $("#rolename1").css("border-color", "red");
        $("#rolename1").focus();


    }
    else {

        $.ajax({
            url: "api/DuplicateRole.php",
            method: "POST",
            data: {
                rolename1: rolename1
            },
            dataType: "JSON",
            success: function (data) {

                if (data.result == "Role Already Exist") {

                    $("#1v1").css("display", "block");
                    $("#1v1").text("Role Already Exist.");
                    $("#rolename1").css("border-color", "red");
                    $("#rolename1").focus();
                    $("#Update").css("border-color", "red");
                }
                else if (data.result == "Role Does not Exist") {

                    Swal.fire({
                        title: "Are you sure?",
                        text: "You want to update this role!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes!"
                    }).then((result) => {
                        if (result.value) {
                            $.ajax({
                                url: "api/Updaterole.php",
                                method: "POST",
                                data: {
                                    id: id,
                                    rolename1: rolename1
                                },
                                dataType: "JSON",
                                success: function (data) {
                                    var result = data.result;
                                    if (result == "Done") {
                                        Swal.fire({
                                            title: "role Updated Successfully!",
                                            type: "success",
                                            timer: 4000,
                                            showConfirmButton: true,
                                        })

                                        $("#btncancel1").trigger("click");
                                        $("#datatable").DataTable().destroy();
                                        tblrole();

                                    }
                                    else {
                                        Swal.fire({
                                            title: "Opps! Some Error Occured!",
                                            type: "error",
                                            text: "Please login first",
                                            timer: 4000,
                                            showConfirmButton: true,
                                        }).then(function () {
                                            window.location.href = "Home.php";
                                        });
                                    }
                                    return data;
                                }
                            });
                        }
                    })

                } else {
                    Swal.fire({
                        title: "Opps! Some Error Occured!",
                        type: "error",
                        text: "Please login first",
                        timer: 4000,
                        showConfirmButton: true,
                    }).then(function () {
                        window.location.href = "Home.php";
                    });
                }



            }
        });

    }
}