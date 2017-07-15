<table border="1">
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Parent_id</th>
    </tr>
    @foreach($categories as $key => $item)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->parent_id }}</td>
    </tr>
    @endforeach
</table>