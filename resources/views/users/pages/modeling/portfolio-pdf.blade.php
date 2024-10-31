<style>
    body,
    html {
        margin: 0;
        padding: 0;
        /* background-color: #DAD7B1; */
    }
    td {
        vertical-align: middle;
        text-align: center;
        width: 100%;
        height: 99.4%;
    }
    img {
        max-width: 100%;
        max-height: 99.4%;
        object-fit: contain;
    }
</style>
<table>
    @foreach ($images as $image)
    <tr>
        <td>
            <img src="{{ public_path($image) }}" alt="Image">
        </td>
    </tr>
    @endforeach
</table>