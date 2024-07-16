<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\LaporanController;
use App\Http\Controllers\admin\PelangganController;
use App\Http\Controllers\admin\PengaturanController;
use App\Http\Controllers\admin\PenginapanadmController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\RekeningController;
use App\Http\Controllers\admin\RoomadmController;
use App\Http\Controllers\admin\TransaksiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\user\AlamatController;
use App\Http\Controllers\user\CheckoutController;
use App\Http\Controllers\user\KeranjangController;
use App\Http\Controllers\user\OrderController;
use App\Http\Controllers\user\ProdukController;
use App\Http\Controllers\user\WelcomeController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenginapanController;
use App\Http\Controllers\SewaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/',[WelcomeController::class, 'index'])->name('home');
Route::get('/home',[WelcomeController::class, 'index'])->name('home2');
Route::get('/produk',[ProdukController::class, 'index'])->name('user.produk');
Route::get('/produk/cari',[ProdukController::class, 'cari'])->name('user.produk.cari');
Route::get('/kategori/{id}',[KategoriController::class, 'produkByKategori'])->name('user.kategori');
Route::get('/produk/{id}',[ProdukController::class, 'detail'])->name('user.produk.detail');
Route::get('refresh-captcha',[LoginController::class,'refreshCaptcha']);

Route::group(['middleware' => ['auth','checkRole:admin,pemilik']],function(){
    Route::get('/admin','DashboardController@index')->name('admin.dashboard');
    Route::put('/identity/{id}',[PengaturanController::class, 'identity']);
    Route::prefix('/pengaturan')->group(function () {
        Route::get('/alamat',[PengaturanController::class, 'aturalamat'])->name('admin.pengaturan.alamat');
        Route::get('/ubahalamat/{id}',[PengaturanController::class, 'ubahalamat'])->name('admin.pengaturan.ubahalamat');
        Route::get('/alamat/getcity/{id}',[PengaturanController::class, 'getCity'])->name('admin.pengaturan.getCity');
        Route::post('/simpanalamat',[PengaturanController::class, 'simpanalamat'])->name('admin.pengaturan.simpanalamat');
        Route::post('/updatealamat/{id}',[PengaturanController::class, 'updatealamat'])->name('admin.pengaturan.updatealamat');
    });

    #kelola data room
    Route::get('/admin/Room',[RoomadmController::class,'index'])->name('admin.room');
    Route::get('/admin/tambah',[RoomadmController::class,'create'])->name('admin.room.create');
    Route::post('/admin/room/store',[RoomadmController::class,'store'])->name('admin.room.store');
    Route::post('/admin/room/update/{id}',[RoomadmController::class, 'update'])->name('admin.room.update');
    Route::get('/admin/room/edit/{id}',[RoomadmController::class,'edit'])->name('admin.room.edit');
    Route::get('/admin/room/delete/{id}',[RoomadmController::class,'delete'])->name('admin.room.delete');

    #keloladatapenginapanadm
    // Route::get('/admin/penginapan',[PenginapanadmController::class,'index'])->name('admin.penginapan');
    // Route::get('/admin/transaksi/{id}', [PenginapanadmController::class, 'end'])->name('admin.transaksi.selesai');
    // Route::put('/admin/transaksi/{id}/reject', [PenginapanadmController::class, 'reject'])->name('admin.transaksi.reject');
    // Route::put('/admin/{id}/destroy',[PenginapanadmController::class, 'delete'])->name('admin.penginapan.delete');
    // Route::put('/admin/{id}/confirmation',[PenginapanadmController::class, 'confirmation'])->name('transaksi.confirmation');


    #kategoriadm
    Route::get('/admin/categories',[CategoriesController::class, 'index'])->name('admin.categories');
    Route::get('/admin/categories/tambah',[CategoriesController::class, 'tambah'])->name('admin.categories.tambah');
    Route::post('/admin/categories/store',[CategoriesController::class, 'store'])->name('admin.categories.store');
    Route::post('/admin/categories/update/{id}',[CategoriesController::class, 'update'])->name('admin.categories.update');
    Route::get('/admin/categories/edit/{id}',[CategoriesController::class, 'edit'])->name('admin.categories.edit');
    Route::get('/admin/categories/delete/{id}',[CategoriesController::class, 'delete'])->name('admin.categories.delete');

    #produkadm
    Route::get('/admin/product',[ProductController::class, 'index'])->name('admin.product');
    Route::get('/admin/product/tambah',[ProductController::class, 'tambah'])->name('admin.product.tambah');
    Route::post('/admin/product/store',[ProductController::class, 'store'])->name('admin.product.store');
    Route::get('/admin/product/edit/{id}',[ProductController::class, 'edit'])->name('admin.product.edit');
    Route::get('/admin/product/delete/{id}',[ProductController::class, 'delete'])->name('admin.product.delete');
    Route::post('/admin/product/update/{id}',[ProductController::class, 'update'])->name('admin.product.update');

    #traksaksiadm
    Route::get('/admin/transaksi',[TransaksiController::class, 'index'])->name('admin.transaksi');
    Route::get('/admin/transaksi/perludicek',[TransaksiController::class, 'perludicek'])->name('admin.transaksi.perludicek');
    Route::get('/admin/transaksi/perludikirim',[TransaksiController::class, 'perludikirim'])->name('admin.transaksi.perludikirim');
    Route::get('/admin/transaksi/dikirim',[TransaksiController::class, 'dikirim'])->name('admin.transaksi.dikirim');
    Route::get('/admin/transaksi/detail/{id}',[TransaksiController::class, 'detail'])->name('admin.transaksi.detail');
    Route::get('/admin/transaksi/konfirmasi/{id}',[TransaksiController::class, 'konfirmasi'])->name('admin.transaksi.konfirmasi');
    Route::post('/admin/transaksi/inputresi/{id}',[TransaksiController::class, 'inputresi'])->name('admin.transaksi.inputresi');
    Route::get('/admin/transaksi/selesai',[TransaksiController::class, 'selesai'])->name('admin.transaksi.selesai');
    Route::get('/admin/transaksi/dibatalkan',[TransaksiController::class, 'dibatalkan'])->name('admin.transaksi.dibatalkan');
    Route::get('/admin/transaksi/invoice/{id}',[TransaksiController::class, 'invoice'])->name('admin.transaksi.invoice');

    #laporan
    Route::get('/admin/pelanggan',[PelangganController::class, 'index'])->name('admin.pelanggan');
    Route::get('/admin/customer',[PelangganController::class, 'customer'])->name('admin.customer');
    Route::get('/admin/laporan', [LaporanController::class, 'index']);
    Route::get('/admin/laporanProduk',[LaporanController::class,'produk'])->name('admin.laporanproduk');

    Route::get('/administrator', [AdminController::class, 'index']);
    Route::get('/administrator/create', [AdminController::class, 'create']);
    Route::post('/administrator/store', [AdminController::class, 'store']);
    Route::get('/administrator/{id}/edit', [AdminController::class, 'show']);
    Route::put('/administrator/{id}', [AdminController::class, 'update']);
    Route::delete('/administrator/{id}', [AdminController::class, 'destroy']);

    #rekening
    Route::get('/admin/rekening',[RekeningController::class, 'index'])->name('admin.rekening');
    Route::get('/admin/rekening/edit/{id}',[RekeningController::class, 'edit'])->name('admin.rekening.edit');
    Route::post('/admin/rekening/store',[RekeningController::class, 'store'])->name('admin.rekening.store');
    Route::get('/admin/rekening/delete/{id}',[RekeningController::class, 'delete'])->name('admin.rekening.delete');
    Route::post('/admin/rekening/update/{id}',[RekeningController::class, 'update'])->name('admin.rekening.update');
});


Route::group(['middleware' => ['auth','checkRole:customer']],function(){

    #keranjang
    Route::post('/keranjang/simpan',[KeranjangController::class, 'simpan'])->name('user.keranjang.simpan');
    Route::get('/keranjang',[KeranjangController::class, 'index'])->name('user.keranjang');
    Route::post('/keranjang/update',[KeranjangController::class, 'update'])->name('user.keranjang.update');
    Route::get('/keranjang/delete/{id}',[KeranjangController::class, 'delete'])->name('user.keranjang.delete');

    #alamat
    Route::get('/alamat',[AlamatController::class, 'index'])->name('user.alamat');
    Route::get('/getcity/{id}',[AlamatController::class, 'getCity'])->name('user.alamat.getCity');
    Route::post('/alamat/simpan',[AlamatController::class, 'simpan'])->name('user.alamat.simpan');
    Route::post('/alamat/update/{id}',[AlamatController::class, 'update'])->name('user.alamat.update');
    Route::get('/alamat/ubah/{id}',[AlamatController::class, 'ubah'])->name('user.alamat.ubah');

    Route::get('/checkout',[CheckoutController::class, 'index'])->name('user.checkout');

    #order
    Route::post('/order/simpan',[OrderController::class, 'simpan'])->name('user.order.simpan');
    Route::get('/order/sukses',[OrderController::class, 'sukses'])->name('user.order.sukses');
    Route::get('/order',[OrderController::class, 'index'])->name('user.order');
    Route::get('/order/detail/{id}',[OrderController::class, 'detail'])->name('user.order.detail');
    Route::get('/order/pesananditerima/{id}',[OrderController::class, 'pesananditerima'])->name('user.order.pesananditerima');
    Route::get('/order/pesanandibatalkan/{id}',[OrderController::class, 'pesanandibatalkan'])->name('user.order.pesanandibatalkan');
    Route::get('/order/pembayaran/{id}',[OrderController::class, 'pembayaran'])->name('user.order.pembayaran');
    Route::post('/order/kirimbukti/{id}',[OrderController::class, 'kirimbukti'])->name('user.order.kirimbukti');

});







Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store')
;
Route::get('admin/contact', [ContactController::class, 'tables'])->name('contact');
Route::get('admin/contact/{id}', [ContactController::class, 'show'])->name('contact.show');

Route::view('/index', 'index');