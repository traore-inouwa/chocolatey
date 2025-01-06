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

<h1>Modifier une commande</h1>

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
            

            <form action="/update_comd/gerant" method="POST" class="form-group">

                @csrf

                <input type="text" name="id" style="display:none;" value="{{$nouvel_comds->id}}">

                <div class="mb-3">
                    

                    <select id="Numero_table" class="form-select"   size="10" aria-label="size 10 select example" name="num_tab" value="{{$nouvel_comds->num_tab}}" required>
                      <option selected>Numéro table</option>
                      <option value="1">Table 1</option>
                      <option value="2">Table 2</option>
                      <option value="3">Table 3</option>
                      <option value="4">Table 4</option>
                      <option value="5">Table 5</option>
                      <option value="6">Table 6</option>
                      <option value="7">Table 7</option>
                      <option value="8">Table 8</option>
                      <option value="9">Table 9</option>
                      <option value="10">Table 10</option>
                    </select>
                    
                  </div>

                  

                  <div class="mb-3">
                    <label for="Nom_du_personnel" class="form-label">Nom du personnel</label>
                    <input type="text" class="form-control" id="Nom_du_personnel" name="name_personnel"  value="{{$nouvel_comds->name_personnel}}" required>
                    
                  </div>

                  <div class="mb-3">
                    <label for="Date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="Date" name="date"  value="{{$nouvel_comds->date}}" required>
                    
                  </div>

                  <div class="mb-3">
                    <label for="Montant" class="form-label">Montant</label>
                    <input type="text" class="form-control" id="Montant" name="montant" value="{{$nouvel_comds->montant}}" required>
                    
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