<table class="table">
    <thead>
        <tr>
            {{ $head }}
        </tr>
    </thead>
    <tbody>
        {{ $body }}
        @if ((string)$body == '')
            <tr>
                <td colspan="100" class="empty"><small>No data found.</small></td>
            </tr>
        @endif
    </tbody>
</table>