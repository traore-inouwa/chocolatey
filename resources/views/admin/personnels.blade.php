<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

  </head>
  <body>


    
    @include('admin.header')
    @include('admin.sidebar')

      <div class="page-content">
        <h1>Tous le personnels</h1>
        <div class="page-header">
          <div class="container-fluid">

           
            <br>
            <br>

            <div class="row col-md-12 mt-2">

              @if(session('status'))
              <div class="alert alert-succes">
                  {{session('status')}}
              </div>
              @endif

                <table class="table">
                    <thead>
                        <tr>

                            <th>#</th>
                            <th>Name</th>
                            <th>Firstname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        
                        </tr>
        
                    
                  
                  </thead>

                     
                    <tbody>
                      
                  @foreach ($personnels as $personnels)
    

                      <tr>
                        <td>{{$personnels->id}}</td>
                        <td>{{$personnels->name}}</td>
                        <td>{{$personnels->firstname}}</td>
                        <td>{{$personnels->email}}</td>
                        <td>{{$personnels->phone}}</td>
                        <td>
                          <a href="/update_personnels/{{$personnels->id}}" class="btn btn-primary">Update</a>

                          <a href="/delete_personnels/{{$personnels->id}}" class="btn btn-info">Delete</a>
                        </td>
                      </tr>

                      @endforeach
                    </tbody>
                 </table>
            </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>