<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\RekeningRequest;
use App\Rekening;
use App\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;
use Symfony\Component\Console\Input\Input;

class WelcomeController extends Controller
{
    public function index()
    {
        //menampilkan data produk dihalamam utama user dengan limit 10 data
        //untuk di carousel
        $data = array(
            'produks' => DB::table('products')->limit(10)->get(),
            'lokasi' => DB::table('alamat_toko')->where('id', 1)->first()
        );
        return view('user.display1', $data);
    }

    // public function grooming($id)
    // {
    //     $room = User::get();
    //    return view('grooming',compact('room'));
    // }

    public function kirimPesan()
{
    // Siapkan pesan untuk WhatsApp
    $pesanWhatsApp = "Halo%20Admin%2C%0A%0ASaya%20ingin%20boking%20penginapan%20hewan%20.%20Berikut%20rincian%20yang%20diperlukan%3A%0A%0AInformasi%20Pemilik%3A%0ANama%3A%20%0AAlamat%3A%20%0ANomor%20Telepon%3A%20%0A%0AInformasi%20Hewan%20Peliharaan%3A%0AJenis%20Hewan%3A%20%0ATanggal%20Masuk%3A%20%0ATanggal%20Keluar%3A%20%0ATerima%20kasih%20atas%20bantuannya%21%0A%0ASalam%2C%20";

    // Buat tautan WhatsApp
    $waLink = "https://wa.me/62895421041898?text={$pesanWhatsApp}" ;

    // Redirect ke tautan WhatsApp
    return view('booking',compact('waLink'));
}
public function seed()
{
    // Siapkan pesan untuk WhatsApp
    $pesanWhatsApp = "halo%2CAdmin%0A%0ASaya%20Ingin%20Booking%20Jasa%20Grooming%20%0A%0AFomulir%20Data%20Diri%20Dan%20hewan%20%3A%0ANama%20Lengkap%20%3A%20%0AAlamat%20%3A%20%0ANo%20HandPhone%20%3A%20%0AJenis%20Peliharaan%20%3A%20%0ANama%20Hewan%20Peliharaan%20%3A%20%0AJenis%20Grooming%20%3A%20%0ACatatan%20Tambahan%20%3A%20%0A%0A%0ASalam%2C%0A";

    // Buat tautan WhatsApp
    $waLink = "https://wa.me/62895421041898?text={$pesanWhatsApp}" ;

    // Redirect ke tautan WhatsApp
    return view('grooming',compact('waLink'));
}

    public Function grooming()
    {
        return view('grooming');
    }
}
