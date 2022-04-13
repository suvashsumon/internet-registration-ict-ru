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
                    <a href="" class="btn btn-warning btn-sm">Approve</a>
                    <a href="{{ route("requests.getInformation", $item->id) }}" class="btn btn-primary btn-sm">View</a>
                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endcomponent