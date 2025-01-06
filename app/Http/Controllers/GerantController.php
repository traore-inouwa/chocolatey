<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Facture;
use App\Models\Book;
use App\Models\Order;
use App\Models\Reservation;
use App\Models\Paiement;
use App\Models\Nouvel_comd;
use FFI;

use Illuminate\Http\Request;

class GerantController extends Controller
{
   public function reserver()

   {
      
    $reservations = Reservation::all();
    $book = Book::all();

    return view('gerant.reserver', compact('book','reservations'));
   }

   public function ajouter_reserver()
   {
    return view('gerant.ajouter_reserver');
   }

   public function ajouter_reserver_gerant(Request $request)
   {
         $reservation = new Reservation();
         $reservation->phone = $request->phone;
         $reservation->guest = $request->guest;
         $reservation->date = $request->date;
         $reservation->time = $request->time;

         $reservation->save();
         return redirect('/ajouter_reserver')->with('status','reservation ajoutée avec succes');

    
   }

   public function update_reserver_book($id)
   {
      $book = Book::find($id);
      return view('gerant.update_reservBook', compact('book'));

   }

   public function update_reservation($id)
   {
      $reservations = Reservation::find($id);
      return view('gerant.update_reservation', compact('reservations'));
   }

   public function update_reservation_gerant(Request $request)
   {
         $reservation = Reservation::find($request->id);
         $reservation->phone = $request->phone;
         $reservation->guest = $request->guest;
         $reservation->date = $request->date;
         $reservation->time = $request->time;

         $reservation->update();

         return redirect('reserver')->with('status','reservation modifiée avec succes');

   }

   public function update_reserverBook_gerant(Request $request)
   {
         $book = Book::find($request->id);
         $book->phone = $request->phone;
         $book->guest = $request->guest;
         $book->date = $request->date;
         $book->time = $request->time;

         $book->update();

         return redirect('/reserver')->with('status','reservation modifiée avec succes');

   }


   public function delete_reserver_book($id)
   {
      $book = Book::find($id);
      $book->delete();

      return redirect('/reserver')->with('status','reservation supprimée avec succes');



   }

   public function delete_reservation($id)
   {
      $reservation = Reservation::find($id);
      $reservation->delete();

      return redirect('/reserver')->with('status','reservation supprimée avec succes');




   }

   
   public function commandes()
   {
       $data= Order::all();

       return view('gerant.commandes',compact('data'));
   }

   public function on_the_way_cm($id)
   {
       $data = Order::find($id);

       $data->delivery_status = "On the way";

       $data->save();

       return redirect()->back();
   }

   public function delivered_cm($id)
   {
       $data = Order::find($id);

       $data->delivery_status = "Delivered";

       $data->save();

       return redirect()->back();
   }

   public function canceled_cm($id)
   {
       $data = Order::find($id);

       $data->delivery_status = "Canceled";

       $data->save();

       return redirect()->back();
   }


   public function voir_commandes()
   {
      $nouvel_comds = Nouvel_comd::all();

      return view('gerant.voir_comm',compact('nouvel_comds'));
   }


   public function ajouter_commandes()
   {
      return view('gerant.ajouter_comm');
   }


   public function ajouter_commandes_gerant(Request $request)
   {

      $nouvel_comd = new Nouvel_comd();
      $nouvel_comd->num_tab = $request->num_tab;
      $nouvel_comd->name_personnel = $request->name_personnel;
      $nouvel_comd->date = $request->date;
      $nouvel_comd->montant = $request->montant;

      $nouvel_comd->save();

      return redirect('/ajouter_commandes')->with('status','commande ajoutée avec succes');
   }


   public function update_comd($id)
   {
   
      $nouvel_comds = Nouvel_comd::find($id);

      return view('gerant.update_comd', compact('nouvel_comds'));
   }

   public function update_comd_gerant(Request $request)
   {
      $nouvel_comd = Nouvel_comd::find($request->id);
      $nouvel_comd->num_tab = $request->num_tab;
      $nouvel_comd->name_personnel = $request->name_personnel;
      $nouvel_comd->date = $request->date;
      $nouvel_comd->montant = $request->montant;

      $nouvel_comd->update();

      return redirect('/voir_commandes')->with('status','commande modifiée avec succes');

   }

   public function delete_comd($id)
   {
      $nouvel_comd = Nouvel_comd::find($id);
      $nouvel_comd->delete();

      return redirect('/voir_commandes')->with('status','commande supprimée avec succes');

   }

   public function paiement()
   {
      return view('gerant.paiement');
   }

   public function ajouter_paiement_gerant(Request $request)
   {
      $paiement = new Paiement();
      $paiement->num_tab = $request->num_tab;
      $paiement->date = $request->date;
      $paiement->montant = $request->montant;
      $paiement->meth_paie = $request->meth_paie;
      $paiement->stat_paie = $request->stat_paie;

      $paiement->save();

      return redirect('/paiement')->with('status','paiement ajoutée avec succes');
   }

   public function facture()
   {
      $paiements = Paiement::all();

      return view('gerant.facture', compact('paiements'));
   }

   public function update_paie($id)
   {
      $paiements = Paiement::find($id);

      return view('gerant.update_paie', compact('paiements'));

      
   
   }

   public function update_paie_gerant(Request $request)
   {
      $paiement = Paiement::find($request->id);
      $paiement->num_tab = $request->num_tab;
      $paiement->date = $request->date;
      $paiement->montant = $request->montant;
      $paiement->meth_paie = $request->meth_paie;
      $paiement->stat_paie = $request->stat_paie;

      $paiement->update();

      return redirect('/facture')->with('status','paiement modifié avec succes');
   }

   public function delete_paie($id)
   {
      $paiement = Paiement::find($id);
      $paiement->delete();
      return redirect('/facture')->with('status','paiement supprimé avec succes');
   }

   public function download_paie($id)
   {

      $paiement = Paiement::where('id', $id)->first();

      $pdf = Pdf::loadView('pdf.my_invoice', compact('paiement'))->setPaper('a4')->setOption([
         'tempDir' => public_path(),
         'chroot' =>  public_path(),
      ]);
      return $pdf->download('invoice.pdf');
   }

}
