import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


$(document).ready(function () {
    $('.show-alert-delete-box').click(function (event) {
        var form = $(this).closest("form");
        //var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: "Sei sicuro di voler cancellare questo elemento?",
            text: "Se lo cancelli lo perderai.",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel", "Yes!"],
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });
});

