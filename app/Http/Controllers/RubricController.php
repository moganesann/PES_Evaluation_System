<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rubrics;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RubricController extends Controller
{
    public function svview()//Supervisor View
    {
        return view('ManageRubrics.Sv.ViewRubrics');// called from views
    }

    public function stdview()//Student View
    {
        return view('ManageRubrics.Std.StdViewRubrics');// called from views
    }

    public function cordview()//Coordinator View
    {
        return view('ManageRubrics.Cord.CordViewRubrics');// called from views
    }
    
    public function cordpsm11()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM1 -1')
         ->where('crs_id', "=", "BCC3012")
         ->get();
        return view('ManageRubrics.Cord.cpsm1rub' , ['rubrics' => $data]);// called from views
    }

    public function cordpsm12()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM1 -1')
         ->orwhere('rubrictype', '=', 'PSM1 -2')
         ->where('crs_id', "=", "BCC3012")
         ->get();
        return view('ManageRubrics.Cord.cpsm1rub2', ['rubrics' => $data]);// called from views
    }

    public function cordpsm13()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM1 -1')
         ->orwhere('rubrictype', '=', 'PSM1 -2')
         ->orwhere('rubrictype', '=', 'PSM1 -3')
         ->where('crs_id', "=", "BCC3012")
         ->get();
        return view('ManageRubrics.Cord.cpsm1rub3', ['rubrics' => $data]);// called from views
    }
    
    public function cordpsm21()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM2 -1')
         ->where('crs_id', "=", "BCC3024")
         ->get();
        return view('ManageRubrics.Cord.cpsm2rub', ['rubrics' => $data]);// called from views
    }

    public function cordpsm22()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM2 -1')
         ->orwhere('rubrictype', '=', 'PSM2 -2')
         ->where('crs_id', "=", "BCC3024")
         ->get();
        return view('ManageRubrics.Cord.cpsm2rub2', ['rubrics' => $data]);// called from views
    }

    public function cordpsm23()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM2 -1')
         ->orwhere('rubrictype', '=', 'PSM2 -2')
         ->orwhere('rubrictype', '=', 'PSM2 -3')
         ->where('crs_id', "=", "BCC3024")
         ->get();
        return view('ManageRubrics.Cord.cpsm2rub3', ['rubrics' => $data]);// called from views
    }

    public function cordpta11()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PTA -1')
         ->where('crs_id', "=", "DCC3024")
         ->get();
        return view('ManageRubrics.Cord.cptarub', ['rubrics' => $data]);// called from views
    }

    public function cordpta12()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PTA -1')
         ->orwhere('rubrictype', '=', 'PTA -2')
         ->where('crs_id', "=", "DCC3024")
         ->get();
        return view('ManageRubrics.Cord.cptarub2', ['rubrics' => $data]);// called from views
    }

    public function cordpta13()
    {
        $data = DB::table('rubrics')
        ->select('*')
        ->where('rubrictype', '=', 'PTA -1')
        ->orwhere('rubrictype', '=', 'PTA -2')
        ->orwhere('rubrictype', '=', 'PTA -3')
        ->where('crs_id', "=", "DCC3024")
        ->get();
        return view('ManageRubrics.Cord.cptarub3', ['rubrics' => $data]);// called from views
    }

    public function stdpsm11()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM1 -1')
         ->where('crs_id', "=", "BCC3012")
         ->get();
        return view('ManageRubrics.Std.stdpsm1rub', ['rubrics' => $data]);// called from views
    }

    public function stdpsm12()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM1 -1')
         ->orwhere('rubrictype', '=', 'PSM1 -2')
         ->where('crs_id', "=", "BCC3012")
         ->get();
        return view('ManageRubrics.Std.stdpsm1rub2', ['rubrics' => $data]);// called from views
    }

    public function stdpsm13()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM1 -1')
         ->orwhere('rubrictype', '=', 'PSM1 -2')
         ->orwhere('rubrictype', '=', 'PSM1 -3')
         ->where('crs_id', "=", "BCC3012")
         ->get();
        return view('ManageRubrics.Std.stdpsm1rub3', ['rubrics' => $data]);// called from views
    }
    
    public function stdpsm21()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM2 -1')
         ->where('crs_id', "=", "BCC3024")
         ->get();
        return view('ManageRubrics.Std.stdpsm2rub', ['rubrics' => $data]);// called from views
    }

    public function stdpsm22()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM1 -1')
         ->orwhere('rubrictype', '=', 'PSM1 -2')
         ->where('crs_id', "=", "BCC3024")
         ->get();
        return view('ManageRubrics.Std.stdpsm2rub2', ['rubrics' => $data]);// called from views
    }

    public function stdpsm23()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM1 -1')
         ->orwhere('rubrictype', '=', 'PSM1 -2')
         ->orwhere('rubrictype', '=', 'PSM1 -3')
         ->where('crs_id', "=", "BCC3024")
         ->get();
        return view('ManageRubrics.Std.stdpsm2rub3', ['rubrics' => $data]);// called from views
    }

    public function stdpta11()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PTA -1')
         ->where('crs_id', "=", "DCC3024")
         ->get();
        return view('ManageRubrics.Std.stdptarub', ['rubrics' => $data]);// called from views
    }

    public function stdpta12()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PTA -1')
         ->orwhere('rubrictype', '=', 'PTA -2')
         ->where('crs_id', "=", "DCC3024")
         ->get();
        return view('ManageRubrics.Std.stdptarub2', ['rubrics' => $data]);// called from views
    }

    public function stdpta13()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PTA -1')
         ->orwhere('rubrictype', '=', 'PTA -2')
         ->ORwhere('rubrictype', '=', 'PTA -3')
         ->where('crs_id', "=", "DCC3024")
         ->get();
        return view('ManageRubrics.Std.stdptarub3', ['rubrics' => $data]);// called from views
    }

    public function spsm11()
    {
        $data = DB::table('rubrics')
        ->select('*')
        ->where('rubrictype', '=', 'PSM1 -1')
        ->where('crs_id', "=", "BCC3012")
        ->get();
        return view('ManageRubrics.Sv.spsm1rub', ['rubrics' => $data]);// called from views
    }

    public function spsm12()
    {
        $data = DB::table('rubrics')
        ->select('*')
        ->where('rubrictype', '=', 'PSM1 -1')
        ->orwhere('rubrictype', '=', 'PSM1 -2')
        ->where('crs_id', "=", "BCC3012")
        ->get();
        return view('ManageRubrics.Sv.spsm1rub2', ['rubrics' => $data]);// called from views
    }

    public function spsm13()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM1 -1')
         ->orwhere('rubrictype', '=', 'PSM1 -2')
         ->orwhere('rubrictype', '=', 'PSM1 -3')
         ->where('crs_id', "=", "BCC3012")
         ->get();
        return view('ManageRubrics.Sv.spsm1rub3', ['rubrics' => $data]);// called from views
    }
    
    public function spsm21()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM2 -1')
         ->where('crs_id', "=", "BCC3024")
         ->get();
        return view('ManageRubrics.Sv.spsm2rub', ['rubrics' => $data]);// called from views
    }

    public function spsm22()
    {
        $data = DB::table('rubrics')
        ->select('*')
        ->where('rubrictype', '=', 'PSM2 -1')
        ->orwhere('rubrictype', '=', 'PSM2 -2')
        ->where('crs_id', "=", "BCC3024")
        ->get();
        return view('ManageRubrics.Sv.spsm2rub2', ['rubrics' => $data]);// called from views
    }

    public function spsm23()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PSM2 -1')
         ->orwhere('rubrictype', '=', 'PSM2 -2')
         ->orwhere('rubrictype', '=', 'PSM2 -3')
         ->where('crs_id', "=", "BCC3024")
         ->get();
        return view('ManageRubrics.Sv.spsm2rub3', ['rubrics' => $data]);// called from views
    }

    public function spta11()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PTA -1')
         ->where('crs_id', "=", "DCC3024")
         ->get();
        return view('ManageRubrics.Sv.sptarub', ['rubrics' => $data]);// called from views
    }

    public function spta12()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PTA -1')
         ->orwhere('rubrictype', '=', 'PTA -2')
         ->where('crs_id', "=", "DCC3024")
         ->get();
        return view('ManageRubrics.Sv.sptarub2', ['rubrics' => $data]);// called from views
    }

    public function spta13()
    {
        $data = DB::table('rubrics')
         ->select('*')
         ->where('rubrictype', '=', 'PTA -1')
         ->orwhere('rubrictype', '=', 'PTA -2')
         ->orwhere('rubrictype', '=', 'PTA -3')
         ->where('crs_id', "=", "DCC3024")
         ->get();
        return view('ManageRubrics.Sv.sptarub3', ['rubrics' => $data]);// called from views
    }

    public function addrubrics()
    {
        $rubricid = DB::table('rubrics')
            ->count() + 9;

        if ($rubricid >= 12) {
            $rubricid = "" . $rubricid;
        } else {
            $rubricid = "" . $rubricid;
        }


        return view('ManageRubrics.Cord.addrub', ['rubricid' => $rubricid]);// called from views
    }

    public function store()
    {
        $rub = new  rubrics();
        $rub->rubricid = request('rubricid');
        $rub->crs_id = request('crs_id');
        $rub->rubrictype = request('rubrictype');
        $rub->co  = request('co');
        $rub->criteria  = request('criteria');
        $rub->mark5 = request('mark5');
        $rub->mark4 = request('mark4');
        $rub->mark3 = request('mark3');
        $rub->mark2 = request('mark2');
        $rub->mark1 = request('mark1');
        $rub->mark0 = request('mark0');
        $rub->weight  = request('weight');
        $rub->score  = request('score');
        error_log($rub);

        $rub->save();


        return redirect('/cviewrubrichome');
    }

    public function deleterub($id)
    {
        error_log('Stock Destroying...');
        error_log($id);
        $data = DB::table('rubrics')->select('*')->where('rubricid', '=', $id);
        //$data = comp::find($id);
        $data->delete();
        return redirect('/cviewrubrichome');
    }

    public function show($rubricid)
    {
        $data = DB::table('rubrics')->select('*')->where('rubricid', '=', $rubricid)->get();

        return view('ManageRubrics.Cord.updaterub', ['rubrics' => $data]);
    }

    public function update()
    {
        error_log("updating..");
        $rubricid = request('rubricid');
        $crs_id = request('crs_id');
        $rubrictype = request('rubrictype');
        $co  = request('co');
        $criteria  = request('criteria');
        $mark5 = request('mark5');
        $mark4 = request('mark4');
        $mark3 = request('mark3');
        $mark2 = request('mark2');
        $mark1 = request('mark1');
        $mark0 = request('mark0');
        $weight  = request('weight');
        $score  = request('score');

        rubrics:: where('rubricid', $rubricid)->update(['rubricid' => $rubricid, 'crs_id' => $crs_id, 'rubrictype' => $rubrictype, 'co' => $co,'criteria' => $criteria, 'mark5' => $mark5, 'mark4' => $mark4, 'mark3' => $mark3,'mark2' => $mark2, 'mark1' => $mark1, 'mark0' => $mark0, 'weight' => $weight, 'score' => $score]);
        return redirect('/cviewrubrichome');
    }
   


}
