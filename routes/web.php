<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLoginMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminlteController;
use App\Http\Controllers\BenihController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BibitmusimanController;
use App\Http\Controllers\BibittahunanController;
use App\Http\Controllers\BuahController;
use App\Http\Controllers\KonsultanController;
use App\Http\Controllers\OutingclassController;
use App\Http\Controllers\PeternakanController;
use App\Http\Controllers\PerikananController;
use App\Http\Controllers\SaprodiController;
use App\Http\Controllers\SayuranController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\KatalogsatuController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\TentangkitaController;
use App\Http\Controllers\UserController;
use App\Models\Order_pelatihan;
use App\Models\pelatihan;
use App\Models\Order_konsultan;
use App\Models\konsultan;
use App\Models\Order_outingclass;
use App\Models\outingclass;
use App\Models\Order_buah;
use App\Models\buah;
use App\Models\Order_sayuran;
use App\Models\sayuran;
use App\Models\Order_tanamanpangan;
use App\Models\tanaman;
use App\Models\Order_peternakan;
use App\Models\peternakan;
use App\Models\Order_perikanan;
use App\Models\perikanan;
use App\Models\Order_benih;
use App\Models\benih;
use App\Models\Order_bibitmusiman;
use App\Models\bibitmusiman;
use App\Models\Order_bibittahunan;
use App\Models\bibittahunan;

//dashboardadmin
Route::get('/dashboardadmin', 'App\Http\Controllers\AdminlteController@index')->name('adminlte.index')->middleware('login_auth');

//LoginAdmin
Route::get('/loginadmin', 'App\Http\Controllers\AdminController@index')->name('login.index');
Route::post('/logout', 'App\Http\Controllers\AdminController@logout')->name('login.logout');
Route::post('/loginadmin', 'App\Http\Controllers\AdminController@authenticate')->name('login.authenticate');

//TambahAdmin
Route::get('/tambahadmin/admin','App\Http\Controllers\AdminController@index1')->name('Admin.index')->middleware('login_auth');
Route::get('/buatadmin/admin','App\Http\Controllers\AdminController@create')->name('admin.create')->middleware('login_auth');
Route::post('/admin', 'App\Http\Controllers\AdminController@store')->name('admin.store')->middleware('login_auth');
Route::delete('/admin/{admin}', 'App\Http\Controllers\AdminController@destroy')->name('admin.destroy')->middleware('login_auth');

//Konsultan
Route::get('/datakonsultan','App\Http\Controllers\KonsultanController@index')->name('konsultan.index')->middleware('login_auth');
Route::get('/tambahkonsultan','App\Http\Controllers\KonsultanController@create')->name('konsultan.create')->middleware('login_auth');
Route::post('/konsultan', 'App\Http\Controllers\KonsultanController@store')->name('konsultan.store')->middleware('login_auth');
Route::delete('/konsultan/{konsultan}', 'App\Http\Controllers\KonsultanController@destroy')->name('konsultan.destroy')->middleware('login_auth');
Route::get('/konsultan/{konsultan}/edit', 'App\Http\Controllers\KonsultanController@edit')->name('konsultan.edit')->middleware('login_auth');
Route::get('/{konsultan}/pemesanankonsultan', 'App\Http\Controllers\KonsultanController@pemesanan')->name('konsultann.pemesanan');
Route::put('/konsultan/{konsultan}', 'App\Http\Controllers\KonsultanController@update')->name('konsultan.update')->middleware('login_auth');

//Pelatihan
Route::get('/datapelatihan','App\Http\Controllers\PelatihanController@index')->name('pelatihan.index')->middleware('login_auth');
Route::get('/tambahpelatihan','App\Http\Controllers\PelatihanController@create')->name('pelatihan.create')->middleware('login_auth');
Route::post('/pelatihan', 'App\Http\Controllers\PelatihanController@store')->name('pelatihan.store')->middleware('login_auth');
Route::delete('/pelatihan/{pelatihan}', 'App\Http\Controllers\PelatihanController@destroy')->name('pelatihan.destroy')->middleware('login_auth');
Route::get('/pelatihan/{pelatihan}/edit', 'App\Http\Controllers\PelatihanController@edit')->name('pelatihan.edit')->middleware('login_auth');
Route::get('/{pelatihan}/pemesananpelatihan', 'App\Http\Controllers\PelatihanController@pemesanan')->name('pelatihann.pemesanan');
Route::put('/pelatihan/{pelatihan}', 'App\Http\Controllers\PelatihanController@update')->name('pelatihan.update')->middleware('login_auth');

//Buah
Route::get('/buah','App\Http\Controllers\BuahController@index')->name('buah.index')->middleware('login_auth');
Route::get('/tambahbuah','App\Http\Controllers\BuahController@create')->name('buah.create')->middleware('login_auth');
Route::post('/buah', 'App\Http\Controllers\BuahController@store')->name('buah.store')->middleware('login_auth');
Route::delete('/buah/{buah}', 'App\Http\Controllers\BuahController@destroy')->name('buah.destroy')->middleware('login_auth');
Route::get('/buah/{buah}/edit', 'App\Http\Controllers\BuahController@edit')->name('buah.edit')->middleware('login_auth');
Route::get('/{buah}/pemesananbuah', 'App\Http\Controllers\BuahController@pemesanan')->name('buah.pemesanan');
Route::put('/buah/{buah}', 'App\Http\Controllers\BuahController@update')->name('buah.update')->middleware('login_auth');

//Sayuran
Route::get('/sayuran','App\Http\Controllers\SayuranController@index')->name('sayuran.index')->middleware('login_auth');
Route::get('/tambahsayuran','App\Http\Controllers\SayuranController@create')->name('sayuran.create')->middleware('login_auth');
Route::post('/sayuran', 'App\Http\Controllers\SayuranController@store')->name('sayuran.store')->middleware('login_auth');
Route::delete('/sayuran/{sayuran}', 'App\Http\Controllers\SayuranController@destroy')->name('sayuran.destroy')->middleware('login_auth');
Route::get('/sayuran/{sayuran}/edit', 'App\Http\Controllers\SayuranController@edit')->name('sayuran.edit')->middleware('login_auth');
Route::get('/{sayuran}/pemesanansayuran', 'App\Http\Controllers\SayuranController@pemesanan')->name('sayuran.pemesanan');
Route::put('/sayuran/{sayuran}', 'App\Http\Controllers\SayuranController@update')->name('sayuran.update')->middleware('login_auth');

//TanamanPangan
Route::get('/tanamanpangan','App\Http\Controllers\TanamanController@index')->name('tanaman.index')->middleware('login_auth');
Route::get('/tambahtanamanpangan','App\Http\Controllers\TanamanController@create')->name('tanaman.create')->middleware('login_auth');
Route::post('/tanaman', 'App\Http\Controllers\TanamanController@store')->name('tanaman.store')->middleware('login_auth');
Route::delete('/tanaman/{tanaman}', 'App\Http\Controllers\TanamanController@destroy')->name('tanaman.destroy')->middleware('login_auth');
Route::get('/tanaman/{tanaman}/edit', 'App\Http\Controllers\TanamanController@edit')->name('tanaman.edit')->middleware('login_auth');
Route::get('/{tanaman}/pemesanantanamanpangan', 'App\Http\Controllers\TanamanController@pemesanan')->name('tanaman.pemesanan');
Route::put('/tanaman/{tanaman}', 'App\Http\Controllers\TanamanController@update')->name('tanaman.update')->middleware('login_auth');

//Peternakan
Route::get('/peternakan','App\Http\Controllers\PeternakanController@index')->name('peternakan.index')->middleware('login_auth');
Route::get('/tambahpeternakan','App\Http\Controllers\PeternakanController@create')->name('peternakan.create')->middleware('login_auth');
Route::post('/peternakan', 'App\Http\Controllers\PeternakanController@store')->name('peternakan.store')->middleware('login_auth');
Route::delete('/peternakan/{peternakan}', 'App\Http\Controllers\PeternakanController@destroy')->name('peternakan.destroy')->middleware('login_auth');
Route::get('/peternakan/{peternakan}/edit', 'App\Http\Controllers\PeternakanController@edit')->name('peternakan.edit')->middleware('login_auth');
Route::get('/{peternakan}/pemesananpeternakan', 'App\Http\Controllers\PeternakanController@pemesanan')->name('peternakan.pemesanan');
Route::put('/peternakan/{peternakan}', 'App\Http\Controllers\PeternakanController@update')->name('peternakan.update')->middleware('login_auth');

//Perikanan
Route::get('/perikanan','App\Http\Controllers\PerikananController@index')->name('perikanan.index')->middleware('login_auth');
Route::get('/tambahperikanan','App\Http\Controllers\PerikananController@create')->name('perikanan.create')->middleware('login_auth');
Route::post('/perikanan', 'App\Http\Controllers\PerikananController@store')->name('perikanan.store')->middleware('login_auth');
Route::delete('/perikanan/{perikanan}', 'App\Http\Controllers\PerikananController@destroy')->name('perikanan.destroy')->middleware('login_auth');
Route::get('/perikanan/{perikanan}/edit', 'App\Http\Controllers\PerikananController@edit')->name('perikanan.edit')->middleware('login_auth');
Route::get('/{perikanan}/pemesananperikanan', 'App\Http\Controllers\PerikananController@pemesanan')->name('perikanan.pemesanan');
Route::put('/perikanan/{perikanan}', 'App\Http\Controllers\PerikananController@update')->name('perikanan.update')->middleware('login_auth');

//Saprodi
//Route::get('/saprodi','App\Http\Controllers\SaprodiController@index')->name('saprodi.index')->middleware('login_auth');
//Route::get('/tambahsaprodi','App\Http\Controllers\SaprodiController@create')->name('saprodi.create')->middleware('login_auth');
//Route::post('/saprodi', 'App\Http\Controllers\SaprodiController@store')->name('saprodi.store')->middleware('login_auth');
//Route::delete('/saprodi/{saprodi}', 'App\Http\Controllers\SaprodiController@destroy')->name('saprodi.destroy')->middleware('login_auth');
//Route::get('/saprodi/{saprodi}/edit', 'App\Http\Controllers\SaprodiController@edit')->name('saprodi.edit')->middleware('login_auth');
//Route::put('/saprodi/{saprodi}', 'App\Http\Controllers\SaprodiController@update')->name('saprodi.update')->middleware('login_auth');

//Benih
Route::get('/benih','App\Http\Controllers\BenihController@index')->name('benih.index')->middleware('login_auth');
Route::get('/tambahbenih','App\Http\Controllers\BenihController@create')->name('benih.create')->middleware('login_auth');
Route::post('/benih', 'App\Http\Controllers\BenihController@store')->name('benih.store')->middleware('login_auth');
Route::delete('/benih/{benih}', 'App\Http\Controllers\BenihController@destroy')->name('benih.destroy')->middleware('login_auth');
Route::get('/benih/{benih}/edit', 'App\Http\Controllers\BenihController@edit')->name('benih.edit')->middleware('login_auth');
Route::get('/{benih}/pemesananbenih', 'App\Http\Controllers\BenihController@pemesanan')->name('benih.pemesanan');
Route::put('/benih/{benih}', 'App\Http\Controllers\BenihController@update')->name('benih.update')->middleware('login_auth');

//Bibitmusiman
Route::get('/bibitmusiman','App\Http\Controllers\BibitmusimanController@index')->name('bibitmusiman.index')->middleware('login_auth');
Route::get('/tambahbibitmusiman','App\Http\Controllers\BibitmusimanController@create')->name('bibitmusiman.create')->middleware('login_auth');
Route::post('/bibitmusiman', 'App\Http\Controllers\BibitmusimanController@store')->name('bibitmusiman.store')->middleware('login_auth');
Route::delete('/bibitmusiman/{bibitmusiman}', 'App\Http\Controllers\BibitmusimanController@destroy')->name('bibitmusiman.destroy')->middleware('login_auth');
Route::get('/bibitmusiman/{bibitmusiman}/edit', 'App\Http\Controllers\BibitmusimanController@edit')->name('bibitmusiman.edit')->middleware('login_auth');
Route::get('/{bibitmusiman}/pemesananbibitmusiman', 'App\Http\Controllers\BibitmusimanController@pemesanan')->name('bibitmusiman.pemesanan');
Route::put('/bibitmusiman/{bibitmusiman}', 'App\Http\Controllers\BibitmusimanController@update')->name('bibitmusiman.update')->middleware('login_auth');

//Bibitmusiman
Route::get('/bibittahunan','App\Http\Controllers\BibittahunanController@index')->name('bibittahunan.index')->middleware('login_auth');
Route::get('/tambahbibittahunan','App\Http\Controllers\BibittahunanController@create')->name('bibittahunan.create')->middleware('login_auth');
Route::post('/bibittahunan', 'App\Http\Controllers\BibittahunanController@store')->name('bibittahunan.store')->middleware('login_auth');
Route::delete('/bibittahunan/{bibittahunan}', 'App\Http\Controllers\BibittahunanController@destroy')->name('bibittahunan.destroy')->middleware('login_auth');
Route::get('/bibittahunan/{bibittahunan}/edit', 'App\Http\Controllers\BibittahunanController@edit')->name('bibittahunan.edit')->middleware('login_auth');
Route::get('/{bibittahunan}/pemesananbibittahunan', 'App\Http\Controllers\BibittahunanController@pemesanan')->name('bibittahunan.pemesanan');
Route::put('/bibittahunan/{bibittahunan}', 'App\Http\Controllers\BibittahunanController@update')->name('bibittahunan.update')->middleware('login_auth');

//Pupuk
Route::get('/pupuk','App\Http\Controllers\PupukController@index')->name('pupuk.index')->middleware('login_auth');
Route::get('/tambahpupuk','App\Http\Controllers\PupukController@create')->name('pupuk.create')->middleware('login_auth');
Route::post('/pupuk', 'App\Http\Controllers\PupukController@store')->name('pupuk.store')->middleware('login_auth');
Route::delete('/pupuk/{pupuk}', 'App\Http\Controllers\PupukController@destroy')->name('pupuk.destroy')->middleware('login_auth');
Route::get('/pupuk/{pupuk}/edit', 'App\Http\Controllers\PupukController@edit')->name('pupuk.edit')->middleware('login_auth');
Route::put('/pupuk/{pupuk}', 'App\Http\Controllers\PupukController@update')->name('pupuk.update')->middleware('login_auth');


//User
Route::get('/', 'App\Http\Controllers\UserController@index')->name('user.index');
Route::get('/katalogbuah', 'App\Http\Controllers\BuahController@index1')->name('katalog.index');
Route::get('/search/katalogbuah', 'App\Http\Controllers\BuahController@search');

Route::get('/katalogsayuran', 'App\Http\Controllers\SayuranController@index1')->name('katalog.index1');
Route::get('/search/katalogsayuran', 'App\Http\Controllers\SayuranController@search');
Route::get('/katalogtanamanpangan', 'App\Http\Controllers\TanamanController@index1')->name('katalog.index2');
Route::get('/search/katalogtanamanpangan', 'App\Http\Controllers\TanamanController@search');
Route::get('/katalogpeternakan', 'App\Http\Controllers\PeternakanController@index1')->name('katalog1.index');
Route::get('/search/katalogpeternakan', 'App\Http\Controllers\PeternakanController@search');
Route::get('/katalogperikanan', 'App\Http\Controllers\PerikananController@index1')->name('katalog1.index1');
Route::get('/search/katalogperikanan', 'App\Http\Controllers\PerikananController@search');
//Route::get('/katalogsaprodi', 'App\Http\Controllers\SaprodiController@index1')->name('katalog1.index2');
//Route::get('/search/katalogsaprodi', 'App\Http\Controllers\SaprodiController@search');
Route::get('/katalogbenih', 'App\Http\Controllers\BenihController@index1')->name('katalog1.index3');
Route::get('/search/katalogbenih', 'App\Http\Controllers\BenihController@search');
Route::get('/katalogbibitmusiman', 'App\Http\Controllers\BibitmusimanController@index1')->name('katalog1.index4');
Route::get('/search/katalogbibitmusiman', 'App\Http\Controllers\BibitmusimanController@search');
Route::get('/katalogbibittahunan', 'App\Http\Controllers\BibittahunanController@index1')->name('katalog1.index5');
Route::get('/search/katalogbibittahunan', 'App\Http\Controllers\BibittahunanController@search');
Route::get('/konsultan', 'App\Http\Controllers\KonsultanController@index1')->name('konsultann.index');
Route::get('/pelatihan', 'App\Http\Controllers\PelatihanController@index1')->name('pelatihann.index');
Route::get('/outingclass', 'App\Http\Controllers\OutingclassController@index')->name('outing.index');
Route::get('/tentang kita', 'App\Http\Controllers\TentangkitaController@index')->name('tentang.index');

//WhatsappPelatihan
Route::post('{pelatihan}/pelatihan', function($pelatihan){
$name=$_POST['name'];
$nohp=$_POST['nohp'];
$alamat=$_POST['alamat'];

$order = New Order_pelatihan();
$order->name = $_POST['name'];
$order->nohp = $_POST['nohp'];
$order->alamat = $_POST['alamat'];
$order->pelatihan = $pelatihan;
$order->save();
$datapelatihan = pelatihan::find($pelatihan);

return redirect('https://api.whatsapp.com/send?phone=6285786489000/&text=Halo%20admin%20P4S%20Hanggawana%2C%20saya%20ingin%20melakukan%20pemesanan%20sebagai%20berikut%20%3A%0A%0ANama%20%3A%20'.$name.'%0ANo%20Hp%20%3A%20'.$nohp.'%0AAlamat%20%3A%20'.$alamat.'%0APelatihan%20yang%20di%20ikuti%20%3A%20'.$datapelatihan->name.'%0A%0ATerima%20Kasih.');

});

//WhatsappKonsultan
Route::post('{konsultan}/konsultan', function($konsultan){
    $name=$_POST['name'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];

    $order = New Order_konsultan();
    $order->name = $_POST['name'];
    $order->nohp = $_POST['nohp'];
    $order->alamat = $_POST['alamat'];
    $order->konsultan = $konsultan;
    $order->save();
    $datakonsultan = konsultan::find($konsultan);

    return redirect('https://api.whatsapp.com/send?phone=6285786489000/&text=Halo%20admin%20P4S%20Hanggawana%2C%20saya%20ingin%20melakukan%20pemesanan%20sebagai%20berikut%20%3A%0A%0ANama%20%3A%20'.$name.'%0ANo%20Hp%20%3A%20'.$nohp.'%0AAlamat%20%3A%20'.$alamat.'%0AKonsultan%20yang%20di%20ikuti%20%3A%20'.$datakonsultan->name.'%0A%0ATerima%20Kasih.');

});

//WhatsappOutingclass
Route::post('/outingclass', function(){
    $name=$_POST['name'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $outingclass=$_POST['outingclass'];

    $order = New Order_outingclass();
    $order->name = $_POST['name'];
    $order->nohp = $_POST['nohp'];
    $order->alamat = $_POST['alamat'];
    $order->outingclass = $_POST['outingclass'];
    $order->save();
    
    return redirect('https://api.whatsapp.com/send?phone=6285786489000/&text=Halo%20admin%20P4S%20Hanggawana%2C%20saya%20ingin%20melakukan%20pemesanan%20sebagai%20berikut%20%3A%0A%0ANama%20%3A%20'.$name.'%0ANo%20Hp%20%3A%20'.$nohp.'%0AAlamat%20%3A%20'.$alamat.'%0APaket%20Yang%20Di%20Pilih%20%3A'.$outingclass.'%0A%0ATerima%20Kasih.');

});

//WhatsappBuah
Route::post('{buah}/buah', function($buah){
    $name=$_POST['name'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $jumlahbuah=$_POST['jumlahbuah'];

    $order = New Order_buah();
    $order->name = $_POST['name'];
    $order->nohp = $_POST['nohp'];
    $order->alamat = $_POST['alamat'];
    $order->jumlahbuah = $_POST['jumlahbuah'];
    $order->namabuah= $buah;
    $order->save();
    $databuah = buah::find($buah);
    
    return redirect('https://api.whatsapp.com/send?phone=6285786489000/&text=Halo%20admin%20P4S%20Hanggawana%2C%20saya%20ingin%20melakukan%20pemesanan%20sebagai%20berikut%20%3A%0A%0ANama%20%3A%20'.$name.'%0ANo%20Hp%20%3A%20'.$nohp.'%0AAlamat%20%3A%20'.$alamat.'%0ANama%20Buah%20Yang%20Dibeli%20%3A%20'.$databuah->name.'%0AJumlah%20Buah%20Yang%20Dibeli%20%3A%20'.$jumlahbuah.'%0A%0ATerima%20Kasih.');

});

//WhatsappSayuran
Route::post('{sayuran}/sayuran', function($sayuran){
    $name=$_POST['name'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $jumlahsayuran=$_POST['jumlahsayuran'];

    $order = New Order_sayuran();
    $order->name = $_POST['name'];
    $order->nohp = $_POST['nohp'];
    $order->alamat = $_POST['alamat'];
    $order->jumlahsayuran = $_POST['jumlahsayuran'];
    $order->namasayuran= $sayuran;
    $order->save();
    $datasayuran = sayuran::find($sayuran);
    
    return redirect('https://api.whatsapp.com/send?phone=6285786489000/&text=Halo%20admin%20P4S%20Hanggawana%2C%20saya%20ingin%20melakukan%20pemesanan%20sebagai%20berikut%20%3A%0A%0ANama%20%3A%20'.$name.'%0ANo%20Hp%20%3A%20'.$nohp.'%0AAlamat%20%3A%20'.$alamat.'%0ANama%20Sayuran%20Yang%20Dibeli%20%3A%20'.$datasayuran->name.'%0AJumlah%20Sayuran%20Yang%20Dibeli%20%3A%20'.$jumlahsayuran.'%0A%0ATerima%20Kasih.');

});

//WhatsappTanamanPangan
Route::post('{tanaman}/tanaman', function($tanaman){
    $name=$_POST['name'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $jumlahtanaman=$_POST['jumlahtanaman'];

    $order = New Order_tanamanpangan();
    $order->name = $_POST['name'];
    $order->nohp = $_POST['nohp'];
    $order->alamat = $_POST['alamat'];
    $order->jumlahtanaman = $_POST['jumlahtanaman'];
    $order->namatanaman= $tanaman;
    $order->save();
    $datatanaman = tanaman::find($tanaman);
    
    return redirect('https://api.whatsapp.com/send?phone=6285786489000/&text=Halo%20admin%20P4S%20Hanggawana%2C%20saya%20ingin%20melakukan%20pemesanan%20sebagai%20berikut%20%3A%0A%0ANama%20%3A%20'.$name.'%0ANo%20Hp%20%3A%20'.$nohp.'%0AAlamat%20%3A%20'.$alamat.'%0ANama%20Tanaman%20Pangan%20Yang%20Dibeli%20%3A%20'.$datatanaman->name.'%0AJumlah%20Tanaman%20Pangan%20Yang%20Dibeli%20%3A%20'.$jumlahtanaman.'%0A%0ATerima%20Kasih.');

});

//WhatsappPeternakan
Route::post('{peternakan}/peternakan', function($peternakan){
    $name=$_POST['name'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $jumlahpeternakan=$_POST['jumlahpeternakan'];

    $order = New Order_peternakan();
    $order->name = $_POST['name'];
    $order->nohp = $_POST['nohp'];
    $order->alamat = $_POST['alamat'];
    $order->jumlahpeternakan = $_POST['jumlahpeternakan'];
    $order->namapeternakan= $peternakan;
    $order->save();
    $datapeternakan = peternakan::find($peternakan);
    
    return redirect('https://api.whatsapp.com/send?phone=6285786489000/&text=Halo%20admin%20P4S%20Hanggawana%2C%20saya%20ingin%20melakukan%20pemesanan%20sebagai%20berikut%20%3A%0A%0ANama%20%3A%20'.$name.'%0ANo%20Hp%20%3A%20'.$nohp.'%0AAlamat%20%3A%20'.$alamat.'%0ANama%20Peternakan%20Yang%20Dibeli%20%3A%20'.$datapeternakan->name.'%0AJumlah%20Peternakan%20Yang%20Dibeli%20%3A%20'.$jumlahpeternakan.'%0A%0ATerima%20Kasih.');

});

//WhatsappPerikanan
Route::post('{perikanan}/perikanan', function($perikanan){
    $name=$_POST['name'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $jumlahperikanan=$_POST['jumlahperikanan'];

    $order = New Order_perikanan();
    $order->name = $_POST['name'];
    $order->nohp = $_POST['nohp'];
    $order->alamat = $_POST['alamat'];
    $order->jumlahperikanan = $_POST['jumlahperikanan'];
    $order->namaperikanan= $perikanan;
    $order->save();
    $dataperikanan = perikanan::find($perikanan);
    
    return redirect('https://api.whatsapp.com/send?phone=6285786489000/&text=Halo%20admin%20P4S%20Hanggawana%2C%20saya%20ingin%20melakukan%20pemesanan%20sebagai%20berikut%20%3A%0A%0ANama%20%3A%20'.$name.'%0ANo%20Hp%20%3A%20'.$nohp.'%0AAlamat%20%3A%20'.$alamat.'%0ANama%20Perikanan%20Yang%20Dibeli%20%3A%20'.$dataperikanan->name.'%0AJumlah%20Perikanan%20Yang%20Dibeli%20%3A%20'.$jumlahperikanan.'%0A%0ATerima%20Kasih.');

});

//WhatsappBenih
Route::post('{benih}/benih', function($benih){
    $name=$_POST['name'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $jumlahbenih=$_POST['jumlahbenih'];

    $order = New Order_benih();
    $order->name = $_POST['name'];
    $order->nohp = $_POST['nohp'];
    $order->alamat = $_POST['alamat'];
    $order->jumlahbenih = $_POST['jumlahbenih'];
    $order->namabenih= $benih;
    $order->save();
    $databenih = benih::find($benih);
    
    return redirect('https://api.whatsapp.com/send?phone=6285786489000/&text=Halo%20admin%20P4S%20Hanggawana%2C%20saya%20ingin%20melakukan%20pemesanan%20sebagai%20berikut%20%3A%0A%0ANama%20%3A%20'.$name.'%0ANo%20Hp%20%3A%20'.$nohp.'%0AAlamat%20%3A%20'.$alamat.'%0ANama%20Benih%20Yang%20Dibeli%20%3A%20'.$databenih->name.'%0AJumlah%20Benih%20Yang%20Dibeli%20%3A%20'.$jumlahbenih.'%0A%0ATerima%20Kasih.');

});

//WhatsappBibitmusiman
Route::post('{bibitmusiman}/bibitmusiman', function($bibitmusiman){
    $name=$_POST['name'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $jumlahbibitmusiman=$_POST['jumlahbibitmusiman'];

    $order = New Order_bibitmusiman();
    $order->name = $_POST['name'];
    $order->nohp = $_POST['nohp'];
    $order->alamat = $_POST['alamat'];
    $order->jumlahbibitmusiman = $_POST['jumlahbibitmusiman'];
    $order->namabibitmusiman= $bibitmusiman;
    $order->save();
    $databibitmusiman = bibitmusiman::find($bibitmusiman);
    
    return redirect('https://api.whatsapp.com/send?phone=6285786489000/&text=Halo%20admin%20P4S%20Hanggawana%2C%20saya%20ingin%20melakukan%20pemesanan%20sebagai%20berikut%20%3A%0A%0ANama%20%3A%20'.$name.'%0ANo%20Hp%20%3A%20'.$nohp.'%0AAlamat%20%3A%20'.$alamat.'%0ANama%20Bibitmusiman%20Yang%20Dibeli%20%3A%20'.$databibitmusiman->name.'%0AJumlah%20Bibitmusiman%20Yang%20Dibeli%20%3A%20'.$jumlahbibitmusiman.'%0A%0ATerima%20Kasih.');

});

//WhatsappBibittahunan
Route::post('{bibittahunan}/bibittahunan', function($bibittahunan){
    $name=$_POST['name'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $jumlahbibittahunan=$_POST['jumlahbibittahunan'];

    $order = New Order_bibittahunan();
    $order->name = $_POST['name'];
    $order->nohp = $_POST['nohp'];
    $order->alamat = $_POST['alamat'];
    $order->jumlahbibittahunan = $_POST['jumlahbibittahunan'];
    $order->namabibittahunan= $bibittahunan;
    $order->save();
    $databibittahunan = bibittahunan::find($bibittahunan);
    
    return redirect('https://api.whatsapp.com/send?phone=6285786489000/&text=Halo%20admin%20P4S%20Hanggawana%2C%20saya%20ingin%20melakukan%20pemesanan%20sebagai%20berikut%20%3A%0A%0ANama%20%3A%20'.$name.'%0ANo%20Hp%20%3A%20'.$nohp.'%0AAlamat%20%3A%20'.$alamat.'%0ANama%20Bibittahunan%20Yang%20Dibeli%20%3A%20'.$databibittahunan->name.'%0AJumlah%20Bibittahunan%20Yang%20Dibeli%20%3A%20'.$jumlahbibittahunan.'%0A%0ATerima%20Kasih.');

});

