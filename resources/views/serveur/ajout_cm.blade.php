<!DOCTYPE html>
<html>
  <head> 
    @include('serveur.css')

  </head>
  <body>


   
    @include('serveur.header')
    @include('serveur.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

<h1>Ajouter une commande</h1>

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
            

            <form action="/ajout_cm/serveur" method="POST" class="form-group">

                @csrf

                <div class="mb-3">
                    

                    <select id="Numero_table" class="form-select"   size="10" aria-label="size 10 select example" name="num_tab" required>
                      <option selected>Numéro table</option>
                      <option value="Table 1">Table 1</option>
                      <option value="Table 2">Table 2</option>
                      <option value="Table 3">Table 3</option>
                      <option value="Table 4">Table 4</option>
                      <option value="Table 5">Table 5</option>
                      <option value="Table 6">Table 6</option>
                      <option value="Table 7">Table 7</option>
                      <option value="Table 8">Table 8</option>
                      <option value="Table 9">Table 9</option>
                      <option value="Table 10">Table 10</option>
                    </select>
                    
                  </div>

                  

                  <div class="mb-3">
                    <label for="Nom_du_personnel" class="form-label">Nom du personnel</label>
                    <input type="text" class="form-control" id="Nom_du_personnel" name="name_personnel" required>
                    
                  </div>

                  <div class="mb-3">
                    <label for="Nourriture" class="form-label">Nourriture</label>
                    <input type="text" class="form-control" id="Nourriture" name="nourriture" required>
                    
                  </div>

                  <div class="mb-3">
                    <label for="Date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="Date" name="date" required>
                    
                  </div>

                 
                

                
                  
                
                <button type="submit" class="btn btn-info">Save</button>

               

                
              </form>


          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('serveur.js')
  </body>
</html>