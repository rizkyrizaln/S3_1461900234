<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        $buku = \App\Models\Buku::leftjoin('rak_buku', 'buku.id', '=', 'rak_buku.id_buku')
        ->leftjoin('jenis_buku', 'jenis_buku.id', '=', 'rak_buku.id_jenis_buku')
        ->select(
            array(
                'jenis_buku.*',
                'buku.*',
                \App\Models\Buku::raw('buku.id AS id_buku'),

              )
        )
        ->get();

        return view('index_0234', ['buku' => $buku]);
    }

    public function add()
    {
        return view('add_0234');
    }

    public function tambah(Request $request)
    {
        
        $buku = \App\Models\Buku::insert([
            'judul' => $request->nama_b,
            'tahun_terbit' => $request->alamat_b,
        ]);
        $id = DB::getPdo()->lastInsertId();
        DB::table('rak_buku')->insert([
            'id_buku' => $id,
            'id_jenis_buku' => 1,
        ]);
        
        return redirect('');
    }

    public function edit($id)
    {
        $buku = \App\Models\Buku::leftjoin('rak_buku', 'buku.id', '=', 'rak_buku.id_buku')
        ->leftjoin('jenis_buku', 'jenis_buku.id', '=', 'rak_buku.id_jenis_buku')
        ->select(
            array(
                'jenis_buku.*',
                'buku.*',
                \App\Models\Buku::raw('buku.id AS id_buku'),

              )
        )
        ->where('id_buku', $id)
        ->get();
        return view('edit_0234', ['buku' => $buku]);
    }

    public function update(Request $request)
    {
        Db::table('buku')->where('id', $request->id)->update([
            'judul' => $request->nama_b,
            'tahun_terbit' => $request->alamat_b,
        ]);
        return redirect('');
    }

    public function del($id)
    {
        DB::table('rak_buku')->where('id_buku', $id)->delete();
        \App\Models\Buku::where('id', $id)->delete();

        return redirect('');
    }
}
