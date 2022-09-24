<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Sales Staff</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
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
                    <h2>Add New Sales Staff</h2>
                </div>
                <div class="content-block-body">

                    <div class="content-forms">

                        <form action="/savenewstaff" method="post">
                            {{csrf_field()}}
                            <div class="form-input-group">
                                <label>Full Name</label>
                                <input type="text" name="full_name" required placeholder="Full Name">
                            </div>
                            <div class="form-input-group">
                                <label>Email</label>
                                <input type="email" name="email" required placeholder="Email">
                            </div>
                            <div class="form-input-group">
                                <label>Telephone</label>
                                <input type="text" name="telephone" required placeholder="Telephone">
                            </div>
                            <div class="form-input-group">
                                <label>Joined Date</label>
                                <input type="text" name="joined_date" id="datepicker" required placeholder="Joined Date">
                            </div>
                            <div class="form-input-group">
                                <label>Current Route</label>
                                @foreach ($route_data as $route )
                                    <select name="current_route" id="">
                                        <option value="{{$route->sales_route}}">{{$route->sales_route}}</option>
                                    </select>
                                @endforeach

                            </div>
                            <div class="form-input-group">
                                <label>Comments</label>

                                <textarea name="comments" id="" cols="30" rows="10" required></textarea>
                            </div>
                            <button type="submit">Save Staff</button>
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
