@component('admin::layouts.app')
<table class="table table-sm">
  <tbody>
  <tr>
      <td class="font-weight-bold">User Type</td>
      <td>{{ $info->user_type }}</td>
    </tr>
    <tr>
      <td class="font-weight-bold">Internet ID/ Salary ID/Student ID:</td>
      <td>{{ $info->identity_no }}</td>
    </tr>
    <tr>
      <td class="font-weight-bold">Name</td>
      <td>{{ $info->name }}
      </td>
    </tr>
    <tr>
      <td class="font-weight-bold">Designation</td>
      <td>{{ $info->designation }}</td>
    </tr>
    <tr>
      <td class="font-weight-bold">Department</td>
      <td>{{ $info->department }}
      </td>
    </tr>
    <tr>
      <td class="font-weight-bold">Email</td>
      <td><a href="mailto:{{ $info->email }}">{{ $info->email }}</a></td>
    </tr>
    <tr>
      <td class="font-weight-bold">Mobile No.</td>
      <td>{{ $info->mobile_no }}
      </td>
    </tr>
    <tr>
      <td class="font-weight-bold">Building No.</td>
      <td>{{ $info->building_no }}</td>
    </tr>
    <tr>
      <td class="font-weight-bold">Room/Flat No.</td>
      <td>{{ $info->room_flat_no }}</td>
    </tr>
    <tr>
      <td class="font-weight-bold">Status</td>
          @if($info->status == '0') <td class="badge badge-pill badge-warning">Pending</td>
          @elseif($info->status == '1') <td class="badge badge-pill badge-success">Accepted</td>
          @elseif($info->status == '2') <td class="badge badge-pill badge-danger">Deleted</td>
          @endif
    </tr>
    <tr>
      <td class="font-weight-bold">Action</td>
      <td>
            <a href="{{ route('requests.approve',$info->id) }}" class="btn btn-warning btn-sm">Approve</a>
            <a href="{{ route('requests.cancel',$info->id) }}" class="btn btn-danger btn-sm" id="delete">Cancel</a>
      </td>
    </tr>
  </tbody>
</table>
@endcomponent