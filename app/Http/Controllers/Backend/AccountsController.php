<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\RolesRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;

class AccountsController extends Controller
{
	private $account;

	public function __construct(Role $account)
	{
		$this->account=$account;
	}

	public function index(Request $request)
    {
    	   
    	$accounts = $this->account->paginate(5);
    	return view('backend.account.index',["accounts"=>$accounts]);

    }

    public function create()
    {
        return view('backend.account.register');
    } 

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        
       $account = Role::findOrFail($id);

        return view('backend.accounts.edit', compact('account'));
    }


    public function store(RolesRequest $request)
    {
        //
        $this->account->create($request->all());
        
        return redirect()->route('backend.account.index');
    }

    public function update(RolesRequest $request, $id)
    {
        $account = Role::findOrFail($id);

        $account->update($request->all());

        return redirect()->route('backend.account.index');
    }

    public function destroy($id)
    {
    	$account = Role::findOrFail($id);

        $account->delete();

        return redirect()->route('backend.account.index');
    }
}
