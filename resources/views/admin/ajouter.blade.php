<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

  </head>
  <body>


    
    @include('admin.header')
    @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

           
            <br>
            <br>
            
            <div class="row col-md-12 mt-2">
<h1>Ajouter un nouveau personnel</h1>
            </div>

            @if(session('status'))
                <div class="alert alert-succes">
                    {{session('status')}}
                </div>
            @endif

            <ul>
                @foreach ($errors ->all() as $errors)
                <li class="alert alert-danger">{{$errors}}</li>
                @endforeach
            </ul>
            

            <form action="/ajouter/personnels" method="POST" class="form-group">

                @csrf
                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="Name"  name="name" required>
                    
                  </div>

                  <div class="mb-3">
                    <label for="Firstame" class="form-label">Firstame</label>
                    <input type="text" class="form-control" id="Firstame" name="firstname" required>
                    
                  </div>


                  <div class="mb-3">
                    <label for="Email" class="form-label">Email </label>
                    <input type="email" class="form-control" id="Email" name="email" required>
                    
                  </div>

                  <div class="mb-3">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="Phone" name="phone" required>
                    
                  </div>

                  
                
                <button type="submit" class="btn btn-info">Save</button>

                <br>
<br>
                <a href="/personnels" class="btn btn-danger">comeback</a>
              </form>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>