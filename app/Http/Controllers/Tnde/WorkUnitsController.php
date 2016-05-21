<?php

namespace App\Http\Controllers\Tnde;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use App\WorkUnit;
use DB;

class WorkUnitsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        //$root = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Menteri Pertanian']); 
        // Directly with a relation
        $menteri = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Menteri Pertanian']);

        $staff_ahli = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Staff Ahli']);
        $staff_ahli->makeChildOf($menteri);

            $sa_lingkungan = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Staff Ahli Bidang Lingkungan']);
            $sa_lingkungan->makeChildOf($staff_ahli);

            $sa_investani = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Staff Ahli Bidang Investasi Pertanian']);
            $sa_investani->makeChildOf($staff_ahli);

            $sa_phi = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Staff Ahli Bidang Perdagangan dan Hubungan Internasional']);
            $sa_phi->makeChildOf($staff_ahli);

            $sa_inotek = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Staff Ahli Bidang Inovasi dan Teknologi']);
            $sa_inotek->makeChildOf($staff_ahli);

            $sa_infra = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Staff Ahli Bidang Infrastruktur Pertanian']);
            $sa_infra->makeChildOf($staff_ahli);

        $irjen = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Inspektorat Jenderal']);
        $irjen->makeChildOf($menteri);

        $setjen = new WorkUnit(['uuid' => Uuid::uuid4(), 'name' => 'Sekretariat Jenderal']);
        $setjen->save();

        $setjen->makeSiblingOf($irjen);

            $biro_perencanaan = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Biro Perencanaan']);
            $biro_perencanaan->makeChildOf($setjen);

            $biro_ok = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Biro Organisasi dan Kepegawaian']);
            $biro_ok->makeChildOf($setjen);

            $biro_hip = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Biro Hukum dan Informasi Publik']);
            $biro_hip->makeChildOf($setjen);

            $biro_kp = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Biro Keuangan dan Perlengkapan']);
            $biro_kp->makeChildOf($setjen);

            $biro_humas = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Biro Umum dan Hubungan Masyarakat']);
            $biro_humas->makeChildOf($setjen);

                $humas = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Bagian Hubungan Masyarakat']);
                $humas->makeChildOf($biro_humas);

                    $humas_sub_apu = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sub Bagian Analisis Pendapat Umum']);
                    $humas_sub_apu->makeChildOf($humas);

                    $humas_sub_kpme = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sub Bagian Komunikasi dan Pemberitaan Media Elektronik']);
                    $humas_sub_kpme->makeChildOf($humas);

                    $humas_sub_kpmc = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sub Bagian Komunikasi dan Pemberitaan Media Cetak']);
                    $humas_sub_kpmc->makeChildOf($humas);

                $humas_pip = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Bagian Pengelolaan Informasi Publik']);
                $humas_pip->makeChildOf($biro_humas);

                    $humas_sub_pim = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sub Bagian Pelayanan Informasi dan Multi Media']);
                    $humas_sub_pim->makeChildOf($humas_pip);

                    $humas_sub_pdp = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sub Bagian Pameran dan Peragaan']);
                    $humas_sub_pdp->makeChildOf($humas_pip);

                    $humas_sub_tubiro = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sub Bagian Tata Usaha Biro']);
                    $humas_sub_tubiro->makeChildOf($humas_pip);

                $humas_phal = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Bagian Protokol dan Hubungan Antar Lembaga']);
                $humas_phal->makeChildOf($biro_humas);

                    $humas_sub_promen = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sub Bagian Protokol Menteri']);
                    $humas_sub_promen->makeChildOf($humas_phal);

                    $humas_sub_prokemen = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sub Bagian Protokol Kementerian']);
                    $humas_sub_prokemen->makeChildOf($humas_phal);

                    $humas_sub_hal = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sub Bagian Hubungan Antar Lembaga']);
                    $humas_sub_hal->makeChildOf($humas_phal);

            $pkln = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Pusat Kerjasama Luar Negeri']);
            $pkln->makeChildOf($setjen);

            $ppvtpp = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Pusat Perlindungan Varietas Tanaman dan Perizinan Pertanian']);
            $ppvtpp->makeChildOf($setjen);

            $pusdatin = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Pusat Data dan Sistem Informasi Pertanian']);
            $pusdatin->makeChildOf($setjen);

        $dirjen_psp = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Jenderal Prasarana dan Sarana Pertanian']);
        $dirjen_psp->makeChildOf($menteri);

            $psp_setjen = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sekretariat Ditjen Prasarana dan Sarana Pertanian']);
            $psp_setjen->makeChildOf($dirjen_psp);

            $psp_lahan = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Perluasan dan Perlindungan Lahan']);
            $psp_lahan->makeChildOf($dirjen_psp);

            $psp_irigasi = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Irigasi Pertanian']);
            $psp_irigasi->makeChildOf($dirjen_psp);

            $psp_pembiayaan = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Pembiayaan Pertanian']);
            $psp_pembiayaan->makeChildOf($dirjen_psp);

            $psp_pupuk = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Pupuk dan Pestisida']);
            $psp_pupuk->makeChildOf($dirjen_psp);

            $psp_alsintan = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Alat dan Mesin Pertanian']);
            $psp_alsintan->makeChildOf($dirjen_psp);

        $dirjen_tp = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Jenderal Tanaman Pangan']);
        $dirjen_tp->makeChildOf($menteri);

            $tp_setjen = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sekretariat Ditjen Tanaman Pangan']);
            $tp_setjen->makeChildOf($dirjen_tp);

            $tp_benih = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Perbenihan Tanaman Pangan']);
            $tp_benih->makeChildOf($dirjen_tp);

            $tp_serealia = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Budidaya Serealia']);
            $tp_serealia->makeChildOf($dirjen_tp);

            $tp_kacang = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Budidaya Aneka Kacang dan Umbi']);
            $tp_kacang->makeChildOf($dirjen_tp);

            $tp_lindung = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Perlindungan Tanaman Pangan']);
            $tp_lindung->makeChildOf($dirjen_tp);

            $tp_pasca = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Pascapanen Tanaman Pangan']);
            $tp_pasca->makeChildOf($dirjen_tp);

        $dirjen_horti = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Hortikultura']);
        $dirjen_horti->makeChildOf($menteri);

            $horti_ditjen = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sekretariat Ditjen Hortikultura']);
            $horti_ditjen->makeChildOf($dirjen_horti);

            $horti_benih = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Perbenihan Hortikultura']);
            $horti_benih->makeChildOf($dirjen_horti);

            $horti_budipasca = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Budidaya dan Pascapanen Buah']);
            $horti_budipasca->makeChildOf($dirjen_horti);

            $horti_pascasayur = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Budidaya dan Pascapanen Sayuran dan Tanaman Obat']);
            $horti_pascasayur->makeChildOf($dirjen_horti);

            $horti_flori = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Budidaya dan Pascapanen Florikultura']);
            $horti_flori->makeChildOf($dirjen_horti);

            $horti_lindung = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Perlindungan Hortikultura']);
            $horti_lindung->makeChildOf($dirjen_horti);

        $dirjen_perkebunan = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Jenderal Perkebunan']);
        $dirjen_perkebunan->makeChildOf($menteri);

            $kebun_setjen = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sekretariat Ditjen Perkebunan']);
            $kebun_setjen->makeChildOf($dirjen_perkebunan);

            $kebun_setjen = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sekretariat Ditjen Perkebunan']);
            $kebun_setjen->makeChildOf($dirjen_perkebunan);

            $kebun_benih = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Perbenihan Perkebunan']);
            $kebun_benih->makeChildOf($dirjen_perkebunan);

            $kebun_semusim = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Tanaman Semusim dan Rempah']);
            $kebun_semusim->makeChildOf($dirjen_perkebunan);

            $kebun_tahunan = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Tanaman Tahunan dan Penyegar']);
            $kebun_tahunan->makeChildOf($dirjen_perkebunan);

            $kebun_lindung = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Perlindungan Perkebunan']);
            $kebun_lindung->makeChildOf($dirjen_perkebunan);

            $kebun_olah = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Pengolahan dan Pemasaran Hasil Perkebunan']);
            $kebun_olah->makeChildOf($dirjen_perkebunan);

            $kebun_bbp2tp_medan = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Besar Perbenihan dan Proteksi Tanaman Perkebunan (BBPPTP) Medan']);
            $kebun_bbp2tp_medan->makeChildOf($dirjen_perkebunan);

            $kebun_bbp2tp_ambon = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Besar Perbenihan dan Proteksi Tanaman Perkebunan (BBPPTP) Ambon']);
            $kebun_bbp2tp_ambon->makeChildOf($dirjen_perkebunan);

            $kebun_bbp2tp_surabaya = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Besar Perbenihan dan Proteksi Tanaman Perkebunan (BBPPTP) Surabaya']);
            $kebun_bbp2tp_surabaya->makeChildOf($dirjen_perkebunan);

            $kebun_bptp_pontianak = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Proteksi Tanaman Perkebunan (BPTP) Pontianak']);
            $kebun_bptp_pontianak->makeChildOf($dirjen_perkebunan);

        $dirjen_pkh = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Jenderal Peternakan dan Kesehatan Hewan']);
        $dirjen_pkh->makeChildOf($menteri);

            $pkh_setjen = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Sekretariat Ditjen Peternakan dan Kesehatan Hewan']);
            $pkh_setjen->makeChildOf($dirjen_pkh);

            $pkh_bitpro = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Pembibitan dan Produksi Ternak']);
            $pkh_bitpro->makeChildOf($dirjen_pkh);

            $pkh_pakan = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Pakan']);
            $pkh_pakan->makeChildOf($dirjen_pkh);

            $pkh_keswan = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Kesehatan Hewan']);
            $pkh_keswan->makeChildOf($dirjen_pkh);

            $pkh_kesmavet = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Kesehatan Masyarakat Veteriner']);
            $pkh_kesmavet->makeChildOf($dirjen_pkh);

            $pkh_pvf = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Pusat Veteriner Farma Surabaya']);
            $pkh_pvf->makeChildOf($dirjen_pkh);

            $pkh_bptuhpt_indrapuri = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Pembibitan Ternak Unggul dan Hijauan Pakan Ternak Indrapuri']);
            $pkh_bptuhpt_indrapuri->makeChildOf($dirjen_pkh);

            $pkh_bptuhpt_siborong = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Pembibitan Ternak Unggul dan Hijauan Pakan Ternak Siborong Borong']);
            $pkh_bptuhpt_siborong->makeChildOf($dirjen_pkh);

            $pkh_bptuhpt_padang = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Pembibitan Ternak Unggul dan Hijauan Pakan Ternak Padang Mangatas']);
            $pkh_bptuhpt_padang->makeChildOf($dirjen_pkh);

            $pkh_bptuhpt_sembawa = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Pembibitan Ternak Unggul dan Hijauan Pakan Ternak Sembawa']);
            $pkh_bptuhpt_sembawa->makeChildOf($dirjen_pkh);

            $pkh_bet = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Embrio Ternak Cipelang Bogor']);
            $pkh_bet->makeChildOf($dirjen_pkh);

            $pkh_bbptuhpt_baturraden = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Besar Pembibitan Ternak Unggul dan Hijauan Pakan Ternak Baturraden']);
            $pkh_bbptuhpt_baturraden->makeChildOf($dirjen_pkh);

            $pkh_bptuhpt_pelaihari = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Pembibitan Ternak Unggul dan Hijauan Pakan Ternak Pelaihari']);
            $pkh_bptuhpt_pelaihari->makeChildOf($dirjen_pkh);

            $pkh_bv_medan = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Veteriner Medan']);
            $pkh_bv_medan->makeChildOf($dirjen_pkh);

            $pkh_bv_bandarlampung = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Veteriner Bandar Lampung']);
            $pkh_bv_bandarlampung->makeChildOf($dirjen_pkh);

            $pkh_bbv_wates = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Besar Veteriner Wates']);
            $pkh_bbv_wates->makeChildOf($dirjen_pkh);

            $pkh_bv_banjarbaru = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Veteriner Banjarbaru']);
            $pkh_bv_banjarbaru->makeChildOf($dirjen_pkh);

            $pkh_bbv_denpasar = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Besar Veteriner Denpasar']);
            $pkh_bbv_denpasar->makeChildOf($dirjen_pkh);

            $pkh_bbv_maros = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Besar Veteriner Maros']);
            $pkh_bbv_maros->makeChildOf($dirjen_pkh);

            $pkh_bv_subang = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Veteriner Subang']);
            $pkh_bv_subang->makeChildOf($dirjen_pkh);

            $pkh_bbpmsoh = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Besar Pengujian Mutu dan Sertifikasi Obat Hewan Gunung Sindur']);
            $pkh_bbpmsoh->makeChildOf($dirjen_pkh);

            $pkh_bpmsph = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Pengujian Mutu dan Sertifikasi Produk Hewan Bogor']);
            $pkh_bpmsph->makeChildOf($dirjen_pkh);

            $pkh_bib = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Inseminasi Buatan Lembang']);
            $pkh_bib->makeChildOf($dirjen_pkh);

            $pkh_bbib = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Besar Inseminasi Buatan Singosari']);
            $pkh_bbib->makeChildOf($dirjen_pkh);

            $pkh_bpmsp = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Pengujian Mutu dan Sertifikasi Pakan Bekasi']);
            $pkh_bpmsp->makeChildOf($dirjen_pkh);

            $pkh_bptuhpt_denpasar = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Balai Pembibitan Ternak Unggul dan Hijauan Pakan Ternak Denpasar']);
            $pkh_bptuhpt_denpasar->makeChildOf($dirjen_pkh);
        
        $satker = WorkUnit::where('parent_id', '=', NULL)->first()->getDescendantsAndSelf()->toHierarchy();
        
        return $satker;
    }

    public function select()
    {
        $root = WorkUnit::where('parent_id', '=', NULL)->first();
        $satker = WorkUnit::where('parent_id', '=', NULL)->first()->getDescendantsAndSelf()->toHierarchy();
        $satkerSelect = DB::table('workUnits')
                        ->select('id', 'name')
                        ->get();
        return $satkerSelect;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user       = $request->user();
        $root = WorkUnit::where('parent_id', '=', NULL)->first();
        $satker = WorkUnit::where('parent_id', '=', NULL)->first()->getDescendantsAndSelf()->toHierarchy();
        /*$this->layout->content = View::make('satker.index', ['satker' => $satker]);*/

        return view('tnde.workunit-list', ['user' => $user, 'satker' => $satker]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
