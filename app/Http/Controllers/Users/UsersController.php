<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use rndediiv2\SmartDevTable\Facades\SmartDevTable;
use rndediiv2\CustomHelper\Facades\CustomHelper;
use Validator;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDefaultUserProfile(Request $request)
    {
        $arrAllowed = ['IT'];
        if(!in_array(Auth::user()->group, $arrAllowed))
        {
            return redirect('/console/dashboard');
            exit();
        }
        $sqlUserProfile = "SELECT id, name as 'NAME', email as 'EMAIL' FROM users";
        SmartDevTable::keys(['id']);
        SmartDevTable::hiddens(['id']);
        SmartDevTable::columns([
            'name', 'email'
        ]);
        SmartDevTable::orderBy(2);
        SmartDevTable::sortBy("ASC");
        SmartDevTable::width([
            'name' => '35%',
            'email' => '45%',
        ]);
        SmartDevTable::showSearch(TRUE);
        SmartDevTable::showChk(TRUE);
        SmartDevTable::single(FALSE);
        SmartDevTable::search([
            ['name','Name'],
            ['email','Email']
        ]);
        SmartDevTable::menu([
            'New User' => [
                'GET', url('console/users-new'), '0', 'home', 'fa fa-file'
            ],
            'Update Profile' => [
                'GET', url('console/users-edit'), '1', 'fa fa-file-o'
            ],
        ]);
        SmartDevTable::iconCustoms(array(
            'panel-top-close' => 'pe-7s-close-circle'
        ));
        SmartDevTable::action(url('console/users'));
        SmartDevTable::postMethod(TRUE);
        SmartDevTable::tbTarget('listUserProfile');
        SmartDevTable::expandRow(FALSE);
        SmartDevTable::title("User Profile");

        $smartTable = SmartDevTable::generate($sqlUserProfile,$request);

        if($request->input('data-post'))
        {
            return $smartTable;
        }
        else
        {
            $data = [
                'smartTable' => $smartTable,
                'title' => 'NPCT1 Console - List Users Website'
            ];
            return view('components.paging.uPagination', $data);
        }
    }

    public function getNewUsers()
    {
        $arrAllowed = ['IT'];
        if(!in_array(Auth::user()->group, $arrAllowed))
        {
            return redirect('/console/dashboard');
            exit();
        }
        $arrData['action'] = url('/console/users-add');
        $arrData['title'] = 'NPCT1 - Create New User';
        $arrData['group'] = [
            '' => 'Group',
            'COM' => 'Commercial',
            'FIN' => 'Finance',
            'ENG' => 'Engineering',
            'HR' => 'Human Resources',
            'HSSE' => 'HSSE',
            'IT' => 'Information Technology',
            'OP' => 'Operation',
            'PNC' => 'Planning & Control',
            'PR' => 'Procurement'
        ];
        $arrData['role'] = [
            '' => 'Role',
            '0' => 'Root',
            '1' => 'Master',
            '2' => 'Child'
        ];
        return view('components.users.uNewUser', $arrData);
    }

    public function setNewUserWithNotifEmail(Request $request)
    {
        $arrAllowed = ['IT'];
        if(!in_array(Auth::user()->group, $arrAllowed))
        {
            return redirect('/console/dashboard');
            exit();
        }
        $validatorUser = Validator::make($request->all(), [
            'nameUser' => 'required',
            'emailUser' => 'required',
            'groupUser' => 'required',
            'roleUser' => 'required'
        ], [
            'nameUser.required' => 'Name is required',
            'emailUser.required' => 'Email is required',
            'groupUser.required' => 'Group is required',
            'roleUser.required' => 'Role is required'
        ]);
        if($validatorUser->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorUser->errors()
             ]);
        }
        else
        {
            try
            {
                $strRandom = str_random(8);
                $Users['name'] = $request->nameUser;
                $Users['email'] = $request->emailUser;
                $Users['group'] = $request->groupUser;
                $Users['roles'] = $request->roleUser;
                $Users['password'] = Hash::make($strRandom);
                $objUsers = User::create($Users);
                if($objUsers)
                {
                    $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
                    $beautymail->send('components.emails.uWelcomeMail', [
                        'objUsers' => $objUsers,
                        'planTextCredential' => $strRandom
                    ], function($message) use ($objUsers)
                    {
                        $message->from('notification@npct1.co.id')
                                ->to(trim($objUsers->email), trim($objUsers->name))
                                ->subject('NPCT1 User Website Registration');
                    });
                    return response()->json([
                        'message' => 'New user successfully added',
                        'redirect' => [
                            'statement' => true,
                            'url' =>  url('/console/users')
                        ],
                        'status'=> 200,
                        'collection' => []
                    ]);
                }
                else
                {
                    return response()->json(['error'=> [ 'message' => ['Create new user fail. Please try again' ]] , 'status'=> 400]);
                }
            }
            catch (Exception $e){
                return response()->json(['error'=> $e, 'status'=> 400]);
            }
        }
    }

    public function getChangePasswordFromModal(Request $request)
    {
        $arrData['action'] = url('from-modal/callback-change-passwd');
        return view('components.users.uChangePasswd', $arrData);
    }

    public function setCallBackChangePasswordFromModal(Request $request)
    {
        $validatorChgPasswd = Validator::make($request->all(), [
            'oldPassword' => 'required|min:8',
            'newPassword' => 'required|min:8',
            'confirmNewPassword' => 'required|min:8'
        ], [
            'oldPassword.required' => 'Old Password is required',
            'newPassword.required' => 'New Passowrd is required',
            'confirmNewPassword.required' => 'Confirm New Password is required'
        ]);
        if($validatorChgPasswd->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorChgPasswd->errors()
             ]);
        }
        else
        {
            try
            {
                $currentPassword = Auth::User()->password;
                if(Hash::check($request->oldPassword, $currentPassword))
                {
                   $user_id = Auth::User()->id;
                   $objUsers = User::find($user_id);
                   $objUsers->password = Hash::make($request->newPassword);
                   $objUsers->save();
                   return response()->json([
                       'message' => 'Change password succesfully. <br>Please logout and login again',
                       'redirect' => [
                           'statement' => true,
                           'url' =>  url('/')
                       ],
                       'status'=> 200,
                       'collection' => []
                    ]);
                }
                else
                {
                    return response()->json(['error'=> [ 'message' => ['Please enter correct current password' ]] , 'status'=> 400]);
                }
            }
            catch (Exception $e){
                return response()->json(['error'=> [ 'message' =>  $e ] , 'status'=> 400]);
            }
        }
    }
}
