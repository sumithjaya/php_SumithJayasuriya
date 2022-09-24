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
                    <h2>View Sales Staff Details</h2>
                </div>
                <div class="content-block-body">

                    <div class="content-view">

                            <div class="view-input-group">
                                <label>ID:</label>

                                <span>{{ $staff_data['id'] }}</span>
                            </div>
                            <div class="view-input-group">
                                <label>Full Name:</label>

                                <span>{{ $staff_data['full_name'] }}</span>
                            </div>
                            <div class="view-input-group">
                                <label>Email:</label>

                                <span>{{ $staff_data['email'] }}</span>
                            </div>
                            <div class="view-input-group">
                                <label>Telephone:</label>

                                <span>{{ $staff_data['telephone'] }}</span>
                            </div>
                            <div class="view-input-group">
                                <label>Joined Date:</label>

                                <span>{{ $staff_data['joined_date'] }}</span>
                            </div>
                            <div class="view-input-group">
                                <label>Current Route:</label>

                                <span>{{ $staff_data['current_route'] }}</span>
                            </div>
                            <div class="view-input-group">
                                <label>Comments:</label>

                                <span>{{ $staff_data['comments'] }}</span>
                            </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
    $(function() {
        $("#datepicker").datepicker();
    });
</script>

</html>
