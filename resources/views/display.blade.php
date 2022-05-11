<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <a href="contact">
  <button style="position:absolute; right: 180px;" type="button" class="btn btn-info">add</button>
  </a>
      
      <table  class="table">
          <thead>
              <tr>
                  <th>name</th>
                  <th>email</th>
                  <th>phone</th>
                  <th>msg</th>
                  
              </tr>
          </thead>
          <tbody>
              @foreach($project as $shah)
              <tr>
                 
                  <td>{{$shah->name}}</td>
                  <td>{{$shah->email}}</td>
                  <td>{{$shah->phone}}</td>
                  <td>{{$shah->msg}}</td>
                  <td><a href="{{url('/project/delete/')}}/{{$shah->id}}"><button type="button" class="btn btn-success">delete</button> </a></td>
                  <td><a href="{{url('/project/edit/')}}/{{$shah->id}}"><button type="button" class="btn btn-primary">edit</button></a></td>
              </tr>
              @endforeach
          </tbody>
          

      </table>

      
   
  </body>
</html>