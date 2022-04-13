@component('admin::layouts.app')
<table id="table_id" class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>User Type</th>
            <th>Indetity No</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->user_type }}</td>
            <td>{{ $item->identity_no }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->mobile_no }}</td>
            <td>
                <a href="{{ route('requests.approve',$item->id) }}" class="btn btn-warning btn-sm">Approve</a>
                <a href="" class="btn btn-primary btn-sm">View</a>
                <a href="{{ route('requests.cancel',$item->id) }}" class="btn btn-danger btn-sm" id="delete">Cancel</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endcomponent
