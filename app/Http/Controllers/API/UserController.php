<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Web\GetListUserAction;
use Symfony\Component\HttpFoundation\Response as ResponseCode;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:api")->except('lists');
        $this->middleware("adminAuth")->except('lists');
    }

    public function index()
    {
        $users = User::paginate(10);
        return $this->sendSuccess(
            ['data' => $users],
            __('messages.get_success', ['objName' => transChoiceHp('messages.users', 10)])
        );
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return $this->sendSuccessWithoutMessage(
            ['data' => $user]
        );
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($request->has('is_admin') && $request->is_admin == 1) {
            $user->is_admin = 1;
        }
        $user->save();
        return $this->sendSuccess(
            ['data' => $user],
            __('messages.create_success', ['objName' => transChoiceHp('messages.users')]),
            ResponseCode::HTTP_CREATED
        );
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|unique:users,name,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => ($request->password != '' ? 'min:6' : ''),
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->has('password') && !empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

        if ($request->has('is_admin') && $request->is_admin == 1) {
            $user->is_admin = 1;
        } else {
            $user->is_admin = 0;
        }

        $user->save();

        return $this->sendSuccess(
            ['data' => $user],
            __('messages.update_success', ['objName' => transChoiceHp('messages.users')]),
        );
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return $this->sendSuccess(
            [],
            __('messages.delete_success', ['objName' => transChoiceHp('messages.users')]),
        );
    }

    public function profile()
    {
        return response()->json(['data' => auth()->user()], 200);
    }

    public function updateProfile(Request $request)
    {
        $user = auth("api")->user();

        $this->validate($request, [
            'name' => 'required|unique:users,name,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => ($request->password != '' ? 'min:6' : ''),
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->has('password') && !empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return response()->json(
            ['data' => $user, 'message' => 'Profile updated successfully'],
            200
        );
    }

    public function lists(Request $request) {
        $requestData = $request->all();
        $users = resolve(GetListUserAction::class)->run($requestData);
        return $this->sendSuccessWithoutMessage(['data' => $users]);
    }
}
