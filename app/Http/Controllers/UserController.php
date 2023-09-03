<?php

namespace App\Http\Controllers;

use App\Models\User;
use PDF;
use Illuminate\Support\Str;
use App\Exports\UsersExport;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //dd($request->all());
        $searchValue = $request->input('search');
        $length = $request->input('length');

        $query = User::query()->select('id','name','email','created_at')
                                ->where('is_deleted','=',false)
                                ->orderBy('id','desc');

        if($searchValue){
            $query->where(function($query) use ($searchValue){
                $query->where('name','like','%'.$searchValue.'%')
                        ->orWhere(function($statement) use ($searchValue){
                            $statement->Where('email','like','%'.$searchValue.'%')
                            ->where('is_deleted','=',false);
                        });
            });
        }

        return response()->json([
            'status'=>true,
            'users'=>$query->paginate($length)
        ]);
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
        $data = $request->only(['name','email','password']);
        $validator = Validator::make($data,[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8'
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'errors'=>$validator->errors()
            ],422);
        }
        /* $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']); */
        if(User::create($data)){
            return ['status'=>true];
        }
        return ['status'=>false];
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
        //dd($id);
        $user = User::query()->where('id','=',$id)->first();
        if($user){
            $user->is_deleted = true;
            if($user->save()){
                return ['status'=>true];
            }
            return ['status'=>false];
        }
        return ['status'=>false];
    }

    public function exportUsers(Request $request){
            $searchValue = $request->input('search');
            //$length = $request->input('length');

            $query = User::query()->select('id','name','email','created_at')
                                    ->where('is_deleted','=',false)
                                    ->orderBy('id','desc');
            $export = new UsersExport([
                $query->get()
            ]);
            if(!is_null($searchValue)){
                $export = new UsersExport([
                    $query->where(function($query) use ($searchValue){
                        $query->where('name','like','%'.$searchValue.'%')
                            ->orWhere(function($statement) use ($searchValue){
                                $statement->Where('email','like','%'.$searchValue.'%')
                                ->where('is_deleted','=',false);
                        });
                    })->get()
                ]);
            }

            return Excel::download($export, 'users.xlsx');
    }
    public function exportPdf(){
        $html = "<h1>Hello</h1>";
        Pdf::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');
    }

    

    //See After : Clean Code
    public function index2(Request $request){
      
        $length = $request->input('length');
        $searchValue = $request->input('search');
        return User::query()
            ->select('id','name','perc','agency')
            ->where('is_deleted','=', false)
            ->when($searchValue ?? null, function ($query) use ($searchValue) {
                $query->where('name', 'like', "%$searchValue%")
                    ->orWhere(function($statement) use ($searchValue) {
                        $statement->where('agency','like', "%$searchValue%")
                        ->where('is_deleted','=', false);
                    });
            })->orderBy('id','desc')
            ->paginate($length);
    
    }

    public function getPostPdf(){
        $employee = User::all();
        $pdf = PDF::loadView('posts.show', compact('employee'))
                            ->setPaper('a4', 'portrait')
                            ->setWarnings(false);
        //return $pdf->stream();
        // Lancement du téléchargement du fichier PDF
        return $pdf->download(Str::slug('bebi').".pdf");
    }

    public function previewBillPdf(){

        $invoiceItems = [
            ['item' => 'Website Design', 'amount' => 50.50],
            ['item' => 'Hosting (3 months)', 'amount' => 80.50],
            ['item' => 'Domain (1 year)', 'amount' => 10.50]
        ];
        $invoiceData = [
            'invoice_id' => 123,
            'transaction_id' => 1234567,
            'payment_method' => 'Paypal',
            'creation_date' => date('M d, Y'),
            'total_amount' => 141.50
        ];

        $pdf = PDF::loadView('posts.bill',compact('invoiceItems','invoiceData'))
                            ->setPaper('a4','portrait')
                            ->setWarnings(false);

        return $pdf->stream();
        
    }
    public function previewBulletin(){


        $pdf = PDF::loadView('pdf.bulletin')
                            ->setPaper('a4','portrait')
                            ->setWarnings(false);

        return $pdf->stream();
        
    }
    public function previewPdf(){

        $employee = User::all();

        $pdf = PDF::loadView('posts.show',compact('employee'))
                            ->setPaper('a4','portrait')
                            ->setWarnings(false);

        return $pdf->stream();
        
    }
}
