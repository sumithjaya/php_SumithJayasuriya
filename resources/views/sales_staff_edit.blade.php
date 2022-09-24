<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Sales Staff</title>
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
            <a href="{{ url('/') }}" class="add-button main-button">Back To List</a>
            <div class="content-block">
                <div class="content-block-header">
                    <h2>Edit Sales Staff</h2>
                </div>

                <div class="content-block-body">

                    <div class="content-forms">

                        <form action="/updatesalesstaff" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="staff_id" value="{{ $staff_data['id'] }}">
                            <div class="form-input-group">
                                <label>Full Name</label>
                                <input type="text" name="full_name" value="{{ $staff_data['full_name'] }}">
                            </div>
                            <div class="form-input-group">
                                <label>Email</label>
                                <input type="text" name="email" value="{{ $staff_data['email'] }}">
                            </div>
                            <div class="form-input-group">
                                <label>Telephone</label>
                                <input type="text" name="telephone" value="{{ $staff_data['telephone'] }}">
                            </div>
                            <div class="form-input-group">
                                <label>Joined Date</label>
                                <input type="text"  id="datepicker" name="joined_date" value="{{ $staff_data['joined_date'] }}">
                            </div>
                            <div class="form-input-group">
                                <label>Current Route</label>
                                @foreach ($route_data as $route )
                                <select name="current_route" id="">
                                    @if ($route->sales_route ==$staff_data['current_route']   )
                                    <option value="{{$route->sales_route}}" selected>{{$route->sales_route}} </option>
                                    @else
                                    <option value="{{$route->sales_route}}">{{$route->sales_route}}</option>
                                    @endif

                                </select>
                            @endforeach
                            </div>
                            <div class="form-input-group">
                                <label>Comments</label>
                                <input type="text" name="comments" value="{{ $staff_data['comments'] }}">
                            </div>
                            <button type="submit" class="main-button">Update Staff</button>
                        </form>

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
  $( function() {
      $( "#datepicker" ).datepicker({
        dateFormat: "yy-mm-dd"
      });
    } );
</script>

</html>
