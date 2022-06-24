<div class="card">
    <div class="card-body">
        <table id="data-table" class="table table-hover" style="width:100%">
            <thead>
                {{$thead}}
            </thead>
            <tbody>
                {{$tbody}}
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function () {
    $('#data-table').DataTable();
});
</script>