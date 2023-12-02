<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->where('role', 'user')->paginate(5);
        return view('admin.pages.user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:30', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => ['required', 'min:8', 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //all data that comes from user are stored in request
        $input = $request->all();



        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = 'images/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        // dd($request->role);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'image' => $profileImage,
            'password' => Hash::make($request->password) // Hash the password

        ]);

        return redirect()->route('user.index')
            ->with('success', 'User created successfully.');
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
        $user = User::findOrFail($id);
        return view('admin.pages.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'max:30', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => 'required|email|unique:users,email,' . $user->id,   //   'role' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role' => 'required',
        ]);
        //all data that comes from user are stored in request
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = 'images/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        $user->update($input);

        return redirect()->route('user.index')
            ->with('success', 'User Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('user.index')
            ->with('success', 'User deleted successfully');
    }

    public function adminProfile()
    {
        $admin = User::where('role', 'admin')->first();
        return view('admin.pages.profile', compact('admin'));
    }



    public function adminProfileEdit(Request $request)
    {
        $admin = User::where('role', 'admin')->first();

        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255|min:3',
            'email' => 'nullable|string|email|max:255|unique:users,email,' . $admin->id,
            'password' => 'nullable|string|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role' => 'nullable|in:admin,user',
            'phone' => 'nullable|string',
            'country' => 'nullable|string',
            'street_address' => 'nullable|string',
            'post_code' => 'nullable|numeric',
            'city' => 'nullable|string',
            'google_id' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'admin/';
            $profileImage = 'admin/' ."adminIMG" . "." . "jpg";
            $image->move($destinationPath, $profileImage);

            $admin->image = $profileImage;
            $admin->save();
            return redirect()->route('adminProfile', compact('admin'))->with('success', 'Admin Image has been updated');
        }
        if($request->name || $request->email || $request->phone || $request->country)
        {
            if ($request->name) {
                $admin->name = $request->name;
            }
            if ($request->email) {
                $admin->email = $request->email;
            }
            if ($request->phone) {
                $admin->phone = $request->phone;
            }
            if ($request->country) {
                $admin->country = $request->country;
            }
            $admin->save();
            return redirect()->route('adminProfile', compact('admin'))->with('success', 'Admin Details has been updated');
        }

    }
    public function adminPasswordUpdate(Request $request)
    {
        $admin = User::where('role', 'admin')->first();

        $validatedData = $request->validate([
            'old_password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6|different:old_password',
            'confirm_password' => 'required|string|min:6|same:new_password',
        ]);

        if (Hash::check($request->old_password, $admin->password)) {
            $admin->password = Hash::make($request->new_password);
            $admin->save();
            return redirect()->route('adminProfile')->with('success', 'Admin Password has been updated');
        } else {
            return redirect()->route('adminProfile')->with('error', 'Incorrect old password');
        }
    }

}
