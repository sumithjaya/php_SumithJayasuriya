<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Sales Route</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
     <div class="app-container">
        <div class="app-side-bar">
            @include('sidebar.index')
        </div>
        <div class="app_content">
            <div class="content-block">
                <div class="content-block-header">
                    <h2>Add New Sales Route</h2>
                </div>
                <div class="content-block-body">

                    <div class="content-forms">

                        <form action="/savenewroute" method="post">
                            {{csrf_field()}}
                            <div class="form-input-group">
                                <label>Route Name</label>
                                <input type="text" name="route_name" placeholder="Route Name" required>
                            </div>

                            <button type="submit" class="main-button">Save Route</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
     </div>
</body>
</html>
