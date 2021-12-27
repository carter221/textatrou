$(document).ready(function () {
    $("#Quiz").on("click", function () {
        $(".copycat").clone().addClass("lol").appendTo($("#afficherQuestion"));
    });


    $("#inputAns").select(function () {
        var text = "";
        if (window.getSelection()) {
            text = window.getSelection();
        } else if (document.selection && document.selection.type != "Control") {
            text = document.selection.text;
        }

        // $("mark").css({ background: "yellow", "font-weight": "bold" });
    });

    $("input[type=text]").each(function () {
        var storedValue = $(this).attr("value");
        $(this).data("value", {
            datavalue: storedValue,
        });
        $(this).focus(function () {
            if ($(this).val() == storedValue) {
                $(this).val("");
            }
        });
    });

    function getdata() {
        var name = document.getElementById("name");

        if (name) {
            $.ajax({
                type: "post",
                url: "getdata.php",
                data: {
                    name: name,
                },
                success: function (response) {
                    $("#res").html(response);
                },
            });
        } else {
            $("#res").html("Entrez le nom de l'utilisateur");
        }
    }
});
