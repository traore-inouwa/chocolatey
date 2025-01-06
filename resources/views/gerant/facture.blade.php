<!DOCTYPE html>
<html>
  <head> 
    @include('gerant.css')

    <style>

        table
        {
            border:1px solid skyblue;
            margin: auto;
            width: 1000px;
            margin-top: 100px;

        }

        th 
        {
          background-color: skyblue;
          padding: 20px;
          text-align: center;
          color: white;
          font-size: 18px;
        }

        td
        {
           padding: 10px;
           text-align: center;
           color: white;
           font-weight: bold;
        }
    </style>
  </head>
  <body>


    
    @include('gerant.header')
    @include('gerant.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
<br>
<h1>Voir les paiements</h1>




            @if (session('status'))
                <div class="alert alert-success">
                    {{(session('status'))}}
                </div>
           
          
            @endif
            
            <table>

                <tr>

                    <th>#</th>
                    <th>Numéro table</th>
                    <th>Date</th>
                    <th>Montant</th>
                    <th>Méthode de paiement</th>
                    <th>Statut de paiement</th>
                    <th>Actions</th>
                </tr>

@php
    $ide = 1;
@endphp
                @foreach ($paiements as $paiement)

                <tr>
                    <td>{{$ide}}</td>
                    <td>{{$paiement->num_tab}}</td>
                    <td>{{$paiement->date}}</td>
                    <td>{{$paiement->montant}}</td>
                    <td>{{$paiement->meth_paie}}</td>
                    <td>{{$paiement->stat_paie}}</td>

                    <td>
                      <a href="/update_paie/{{$paiement->id}}" class="btn btn-info">Update</a>
                      <a href="/delete_paie/{{$paiement->id}}" class="btn btn-danger">Delete</a>
                      <a href="/download_paie/{{$paiement->id}}" class="btn btn-warning">Download</a>
                    </td>
                </tr>

                @php
                    $ide +=1;
                @endphp

                @endforeach

                
               
            </table>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('gerant.js')
  </body>
</html>