<div class="table">
    <div id="loading-{{ $id }}" class="loading">
        <p>Loading...</p>
    </div>

    <table id="table-{{ $id }}" class="display">
        <thead>
            <tr>
                {{ $head }}
            </tr>
        </thead>
        <tbody>
            {{ $body }}
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            var loadingId = '#loading-{{ $id }}';
            var tableId = '#table-{{ $id }}';
            var perPage = parseInt("{{ $perPage }}");

            $(loadingId).show();
            $(tableId).hide();

            setTimeout(function() {
                if ($.fn.DataTable.isDataTable(tableId)) {
                    $(tableId).DataTable().destroy();
                }

                var table = new DataTable(tableId, {
                    language: {
                        searchPlaceholder: "Search here",
                        lengthMenu: '_MENU_',
                        zeroRecords: 'No result found'
                    },
                    layout: {
                        bottomEnd: {
                            paging: {
                                type: 'simple_numbers',
                                boundaryNumbers: false,
                                buttons: 5
                            }
                        }
                    },
                    info: false,
                    pageLength: perPage,
                    lengthChange: "{{ $lengthChange }}"
                });

                $(loadingId).hide();
                $(tableId).show();
            }, 500);
        }); 
    </script>
</div>
