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
<h1>Modifier personnel</h1>
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
            

            <form action="/update_personnels/personnels" method="POST" class="form-group">

                @csrf

                <input type="text" name="id" style="display:none;" value="{{$personnels->id}}">
                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="Name"  name="name"  value="{{$personnels->name}}" required>
                    
                  </div>

                  <div class="mb-3">
                    <label for="Firstame" class="form-label">Firstame</label>
                    <input type="text" class="form-control" id="Firstame" name="firstname"   value="{{$personnels->firstname}}" required>
                    
                  </div>


                  <div class="mb-3">
                    <label for="Email" class="form-label">Email </label>
                    <input type="email" class="form-control" id="Email" name="email"  value="{{$personnels->email}}" required>
                    
                  </div>

                  <div class="mb-3">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="Phone" name="phone"  value="{{$personnels->phone}}" required>
                    
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