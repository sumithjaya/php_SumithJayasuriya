<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Sales Routes</title>
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
                    <h2>Sales Routes</h2>
                </div>
                <div class="content-block-body">
                    <div class="content-controllers">
                       <a href="{{url('/addnewroute')}}" class="add-button">Add New</a>
                    </div>
                    <div class="content-tables">

                        <table  class="data-table">
                            <thead class="table-header">
                                <th>ID</th>
                                <th>Route</th>

                                <th></th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                @if(!empty($route_data))

                                    @foreach ($route_data as $route )
                                        <tr>
                                            <td>{{$route->id}}</td>
                                            <td>{{$route->sales_route}}</td>
                                            <td><a href="{{url('/editroute/'.$route->id)}}">Edit</a></td>
                                            <td><a href="{{url('/deletroute/'.$route->id)}}">Delete</a></td>
                                        </tr>
                                    @endforeach

                                @endif
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
     </div>
</body>
</html>
