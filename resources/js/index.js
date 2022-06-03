// $("document").ready(function () {
//     $(".delete").click(function (e) {
//         e.preventDefault();
//         swal({
//             title: "Etes-vous sûr?",
//             text:
//                 "Vous allez supprimer definitivement l'abonné! de id: " +
//                 $(".delete").val(),
//             icon: "warning",
//             buttons: true,
//             dangerMode: true,
//         }).then((willDelete) => {
//             if (willDelete) {
//                 // delete with ajax
//                 $.ajax({
//                     url: "/delete/" + $("#id").val(),
//                     type: "GET",
//                     data: {
//                         _token: $("input[name='_token']").val(),
//                     },
//                     success: function (data) {
//                         swal("Succçès! l'abonné a été supprimer!", {
//                             icon: "success",
//                         });
//                         // detele row
//                         $("#26").remove();
//                     },
//                     error: function (data) {
//                         console.log(data);
//                     },
//                 });
//             } else {
//                 swal("l'abonné n'a pas été supprimer!");
//             }
//         });
//     });
// });
function delet(id) {
    swal({
        title: "Etes-vous sûr?",
        text: "Vous allez supprimer definitivement l'abonné!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            // delete with ajax
            $.ajax({
                url: "/delete/" + id,
                type: "GET",
                data: {
                    _token: $("input[name='_token']").val(),
                },
                success: function (data) {
                    swal("Succès! l'abonné a été supprimer!", {
                        icon: "success",
                    });
                    // detele row
                    $("#" + id).remove();
                },
                error: function (data) {
                    console.log(data);
                },
            });
        } else {
            swal("l'abonné n'a pas été supprimer!");
        }
    });
}
let btn = document.getElementsByClassName("delete");

for (let i = 0; i < btn.length; i++) {
    btn[i].addEventListener("click", function (e) {
        e.preventDefault();
        delet(this.value);
    });
}
