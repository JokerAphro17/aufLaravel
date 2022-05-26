$("document").ready(function () {
    $("#delete").click(function (e) {
        e.preventDefault();
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
                    url: "/delete/24",
                    type: "GET",
                    data: {
                        _token: "{{ csrf_ token() }}",
                    },
                    success: function (data) {
                        swal("Succçès! l'abonné a été supprimer!", {
                            icon: "success",
                        });
                    },
                    error: function (data) {
                        console.log(data);
                    },
                });
            } else {
                swal("l'abonné n'a pas été supprimer!");
            }
        });
    });
});
