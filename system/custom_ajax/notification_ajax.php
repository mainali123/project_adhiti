<script>
    function toast_notification(type, title, message) {
        $(document).ready(function () {
            toastr.options = {
                'closeButton': true,
                'debug': false,
                'newestOnTop': true,
                'progressBar': false,
                'positionClass': 'toast-top-right',
                'preventDuplicates': false,
                'showDuration': '1000',
                'hideDuration': '1000',
                'timeOut': '5000',
                'extendedTimeOut': '1000',
                'showEasing': 'swing',
                'hideEasing': 'linear',
                'showMethod': 'fadeIn',
                'hideMethod': 'fadeOut',
            }
        });

        if (type === "success") {
            toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
            toastr.success(message, title);
        } else if (type === "info") {
            toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
            toastr.info(message, title);
        } else if (type === "warning") {
            toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
            toastr.warning(message, title);
        } else if (type === "error") {
            toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
            toastr.error(message, title);
        }
    }


</script>