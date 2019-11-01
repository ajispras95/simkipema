<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\di_dalam_kampus;

class didalamkampusController extends Controller
{

    public function show()
    {
        $data =  di_dalam_kampus::all();
        return view('/Mahasiswa/didalamkampus', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $di_dalam_kampus = new di_dalam_kampus();
        $di_dalam_kampus->nama_kegiatan = $request->nama_kegiatan;
        $di_dalam_kampus->program_kerja_divisi = $request->program_kerja_divisi;
        $di_dalam_kampus->predikat = $request->predikat;
        $di_dalam_kampus->waktu_pelaksanaan = $request->waktu_pelaksanaan;
        $di_dalam_kampus->tempat = $request->tempat;
        $di_dalam_kampus->tingkat = $request->tingkat;
        $di_dalam_kampus->scan_bukti = $request->scan_bukti;
        $di_dalam_kampus->save();

        return redirect('/Mahasiswa/didalamkampus')  ;
        return redirect('/didalamkampusK')  ;
    }

    public function index()
    {
        $di_dalam_kampus = DB::table('di_dalam_kampus')->get();
        return view('didalamkampus',['data'=> $di_dalam_kampus]);
    }

    public function create()
   {
       return view('/didalamkampus');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       DB::table('di_dalam_kampus')->insert([

       'nama_kegiatan' => $request->nama_kegiatan,
       'program_kerja_divisi' => $request->program_kerja_divisi,
       'predikat' => $request->predikat,
       'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
       'tempat' => $request->tempat,
       'skala_kegiatan' => $request->skala_kegiatan,
       'tingkat' => $request->tingkat,
       'scan_bukti' => $request->scan_bukti
       ]);

       return redirect('/didalamkampus')->with('alert-success','Berhasil Menambahkan Data!');
   }
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('di_dalam_kampus')->where('didalamkampus_id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/didalamkampus');
        return redirect('/didalamkampusK');
    }

    public function getCreateEventForm(Request $request){
        $userLogin = Auth::user();
        return view('di_dalam_kampus',['event'=>$request,'userLogin' => $userLogin]);
    }

    public function createEvent(Request $request){
        $user_id = Auth::user()->id;

        $di_dalam_kampus = $request->file('proposal');
        $time = Carbon::now()->format('dmyHis-');
        // $nama_proposal = $time.$proposal->getClientOriginalName();
        // $proposal->move('upload/proposal',$nama_proposal);

        $poster = $request->file('poster');
        $time = Carbon::now()->format('dmyHis-');
        $nama_poster = $time.'.'.$poster->getClientOriginalName();
        $poster->move('upload/poster',$nama_poster);

        $startDate = date('Y-m-d',strtotime($request->start));
        $endDate = date('Y-m-d',strtotime($request->end));

        $event = new Event;
        $event->name = $request->name;
        $event->email = $request->email;
        $event->category = $request->category;
        $event->address = $request->location;
        $event->phone = $request->telp;
        if($request->availableInWhatsApp == 'true'){
            $event->isWhatsApp = true;
        }else{
            $event->isWhatsApp = false;
        }
        $event->audience = $request->audience;
        $event->total_audience = $request->total;
        $event->start_date = $startDate;
        $event->end_date = $endDate;
        $event->budget = $request->budget;
        $event->revenue = 0;
        $event->description = $request->note;
        // $event->proposal_name = $nama_proposal;
        $event->poster_name = $nama_poster;
        $event->user_id = $user_id;
        $event->validation_status = 'Pending';
        $event->save();

        return redirect('/eo/event/me')  ;
    }

    public function deleteEvent($id){
        $event = Event::find($id);
        $sponsoredEvent = SponsoredEvent::where('event_id',$event->id)->get();

        if($sponsoredEvent->count() > 0){
            Alert::error('This event has been sponsored. You cannot delete this event', 'Denied');
        }else{
            $event->delete();
            Alert::success('Event success deleted', 'Success');
        }
        return back();
    }

    public function updateEvent(Request $request, $id){
        $data = $request->all();
        $event = Event::find($id);

        $startDate = date('Y-m-d',strtotime($data['start_date']));
        $endDate = date('Y-m-d',strtotime($data['end_date']));

        $event->name = $data['name'];
        $event->email = $data['email'];
        $event->category = $data['category'];
        $event->address = $data['address'];
        $event->phone = $data['phone'];
        if($request->availableInWhatsApp == 'true'){
            $event->isWhatsApp = true;
        }else{
            $event->isWhatsApp = false;
        }
        $event->audience = $data['audience'];
        $event->total_audience = $data['total_audience'];
        $event->start_date = $startDate;
        $event->end_date = $endDate;
        $event->budget = $data['budget'];
        $event->description = $data['description'];
        $event->save();

        $sponsoredEvent = SponsoredEvent::where('event_id', $event->id)->get();

        foreach($sponsoredEvent as $list){
            $list->event_start_date = $startDate;
            $list->save();
        }

        Alert::success('Data success updated','Success');
        return back();
    }

}
