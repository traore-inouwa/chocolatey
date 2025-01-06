<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{asset('admin/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">Gérant</h1>
         
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
              
        <ul class="list-unstyled">
          <li class="active"><a href="{{url('home')}}"> <i class="icon-home"></i>Home </a></li>

              <li>
                <a href="{{url('commandes')}}"> <i class="icon-logout"></i>Commandes du home
              </a>
              </li>


              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-logout"></i>Commendes serveurs </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">

                  
                  <li> <a href="{{url('ajouter_commandes')}}">Ajouter Commandes</a></li>
                  
                  <li> <a href="{{url('voir_commandes')}}"> Voir Commandes </a> </li>
                 
                </ul>
              </li>


              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Reservations </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              
                  
                  <li> <a href="{{url('ajouter_reserver')}}"> Ajouter reservation</a> </li>
                  
                 
                  <li> <a href="{{url('reserver')}}"> Voir Reservations </a> </li>
               
                 
                 

                </ul>
              </li>


              
              


             

              


              <li>
                <a href="{{url('paiement')}}"> <i class="icon-logout"></i>Paiement
              </a>

              </li>


              <li>
                <a href="{{url('facture')}}"> <i class="icon-padnote"></i>Facture
              </a>

              </li>


              

             

              

              </li>


        </ul>
   
    </nav>
    <!-- Sidebar Navigation end-->