<!DOCTYPE html>
<html>
  <head> 
    @include('gerant.css')

  </head>
  <body>


    
    @include('gerant.header')
    @include('gerant.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

<h1>Ajouter une réservation</h1>

<br>
<br>
            @if (session('status'))
                <div class="alert alert-success">
                    {{(session('status'))}}
                </div>
           
          
            @endif

            <ul>
                @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{$error}}</li>
                @endforeach
            </ul>
            

            <form action="/ajouter_reserver/gerant" method="POST" class="form-group">

                @csrf

                <div class="mb-3">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="Phone" name="phone" required>
                    
                  </div>

                  <div class="mb-3">
                    <label for="Guest" class="form-label">Guest</label>
                    <input type="text" class="form-control" id="Guest" name="guest" required>
                    
                  </div>

                  <div class="mb-3">
                    <label for="Date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="Date" name="date" required>
                    
                  </div>

                  <div class="mb-3">
                    <label for="Time" class="form-label">Time</label>
                    <input type="time" class="form-control" id="Time" name="time" required>
                    
                  </div>
                

                
                  
                
                <button type="submit" class="btn btn-info">Save</button>

               

                
              </form>


          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('gerant.js')
  </body>
</html>