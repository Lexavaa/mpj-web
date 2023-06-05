<script>
    $('#myTable').DataTable({
        lengthMenu: [5, 10, 25, 50, 75, 100],
        pageLength: 15,
        ordering: true,
        order: [
            [0, 'asc']
        ],
        searching: true,
        info: true,
        paging: true,
        pagingType: 'full_numbers',
        language: {
            search: 'Search:',
            lengthMenu: 'Show _MENU_ entries per page',
            info: 'Showing _START_ to _END_ of _TOTAL_ entries',
            paginate: {
                first: 'First',
                last: 'Last',
                next: 'Next',
                previous: 'Previous'
            }
        }
    });
</script>
