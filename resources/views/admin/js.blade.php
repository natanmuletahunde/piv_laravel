<script type="text/javascript">

    function confirmation(ev){
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);

        Swal({
            title: "Are you sure to Delete this?",
            text: "This delete will be paramanent",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                window.location.href = urlToRedirect;
            } else {
                Swal("Cancelled", "Your category is safe :)", "error");
            }
        });
    }
</script>