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