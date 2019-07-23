<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Pelatihan;
use App\Pelatihan2;
use Hash;

class PelatihanController extends Controller
{
    public function indexpelatihan()
    {
        return view('admin.pelatihan');
    }

    public function addpelatihan()
    {
        return view('admin.pelatihan.add');
    }

    public function savepelatihan(Request $r)
    {
        $n = new Pelatihan;
         if (Input::hasFile('gambar')) {
      $files = Input::file('gambar');
      foreach($files as $gambar) {
        $gambar2 = date("YmdHis").uniqid()."."
        .$gambar->getClientOriginalExtension();
        $gambar->move(storage_path('images'), $gambar2);
        Pelatihan::create([
            'judul' => $r->input('judul'),
            'keterangan' => $r->input('keterangan'),
            'gambar' => $gambar2,
          ]);
    }  
    }
        return redirect(url('admin/pelatihan'));
    }

    public function deletepelatihan($id)
    {
        $gambar = Pelatihan::find($id);
        $gambar->delete();
        return redirect(url('admin/pelatihan'));
    }

    public function indexpelatihan2()
    {
        return view('admin.pelatihan2');
    }

    public function savepelatihan2(Request $r)
    {
        $n = new Pelatihan2;
      $n->judul = $r->input('judul');
      $n->keterangan = $r->input('keterangan');
      if(Input::hasFile('gambar')){
            $gambar = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('gambar')->getClientOriginalExtension();
            Input::file('gambar')->move(storage_path('images'),$gambar);
            $n->gambar = $gambar;
        }
        $n->save();
        return redirect(url('admin/pelatihan2'));
    }
    public function deletepelatihan2($id)
    {
        $pelatihan2 = Pelatihan2::find($id);
        $pelatihan2->delete();
        return redirect(url('admin/pelatihan2'));
    }

}



/*gambar judul keternaga*/