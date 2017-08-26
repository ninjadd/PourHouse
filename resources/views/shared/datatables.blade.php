<link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet">
<script src="{{ asset('js/dataTables.bootstrap.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.table').DataTable({
            "order": [[ 0, "desc" ]]
        });
    } );
</script>