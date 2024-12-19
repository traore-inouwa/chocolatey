<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Book;

use App\Models\Reservation;
use FFI;
use App\Models\Order;
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

}
