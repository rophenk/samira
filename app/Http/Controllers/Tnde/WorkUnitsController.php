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

        $dirjen_psp = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Jenderal Prasarana dan Sarana Pertanian']);
        $dirjen_psp->makeChildOf($menteri);

        $dirjen_tp = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Jenderal Tanaman Pangan']);
        $dirjen_tp->makeChildOf($menteri);

        $dirjen_horti = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Jenderal Hortikultura']);
        $dirjen_horti->makeChildOf($menteri);

        $dirjen_perkebunan = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Jenderal Perkebunan']);
        $dirjen_perkebunan->makeChildOf($menteri);

        $dirjen_pkh = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Direktorat Jenderal Peternakan dan Kesehatan Hewan']);
        $dirjen_pkh->makeChildOf($menteri);

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

        $pkln = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Pusat Kerjasama Luar Negeri']);
        $pkln->makeChildOf($setjen);

        $ppvtpp = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Pusat Perlindungan Varietas Tanaman dan Perizinan Pertanian']);
        $ppvtpp->makeChildOf($setjen);

        $pusdatin = WorkUnit::create(['uuid' => Uuid::uuid4(), 'name' => 'Pusat Data dan Sistem Informasi Pertanian']);
        $pusdatin->makeChildOf($setjen);

        /*$root = WorkUnit::where('parent_id', '=', NULL)->first();
        $child1 = $root->children()->create(['uuid' => Uuid::uuid4(), 'name' => 'Staff Ahli']);*/
        
        $satker = WorkUnit::where('parent_id', '=', NULL)->first()->getDescendantsAndSelf()->toHierarchy();
        
        return $satker;
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
