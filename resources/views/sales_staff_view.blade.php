<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Sales Staff</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

</head>

<body>
    <div class="app-container">
        <div class="app-side-bar">
            @include('sidebar.index')
        </div>
        <div class="app_content">
            <div class="content-block">
                <div class="content-block-header">
                    <h2>Sales Staff</h2>
                </div>
                <div class="content-block-body">
                    <div class="content-controllers">
                        <a href="{{ url('/addnewstaff') }}" class="add-button main-button">Add New</a>
                    </div>
                    <div class="content-tables">

                        <table class="data-table">
                            <thead class="table-header">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Current Route</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                @if (!empty($staff_data))

                                    @foreach ($staff_data as $staff)
                                        <tr>
                                            <td>{{ $staff->id }}</td>
                                            <td>{{ $staff->full_name }}</td>
                                            <td>{{ $staff->email }}</td>
                                            <td>{{ $staff->telephone }}</td>
                                            <td>{{ $staff->current_route }}</td>
                                            <td><a href="{{ url('/viewstaff/' . $staff->id) }}">View</a></td>
                                            <td><a href="{{ url('/editstaff/' . $staff->id) }}">Edit</a></td>
                                            <td><a href="{{ url('/deletestaff/' . $staff->id) }}">Delete</a></td>
                                        </tr>
                                    @endforeach

                                @endif
                            </tbody>
                        </table>

                    </div>

                </div>
                <div id="dialog-message1" title="Download complete" style="display: none">
                    <p>
                        <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
                        Your files have downloaded successfully into the My Downloads folder. 1
                    </p>
                    <p>
                        Currently using <b>36% of your storage space</b>.
                    </p>
                </div>
                <div id="dialog-message2" title="Download complete" style="display: none">
                    <p>
                        <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
                        Your files have downloaded successfully into the My Downloads folder. 2
                    </p>
                    <p>
                        Currently using <b>36% of your storage space</b>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>

</script>

</html>
