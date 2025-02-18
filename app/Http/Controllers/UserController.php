<?php

namespace App\Http\Controllers;

use App\Helpers\Function;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\Groups;
use Illuminate\Support\Facades\DB;
// use DB;

class UserController extends Controller
{
    private $users;
    const _PER_PAGE = 3;
    public function __construct()
    {
        $this->users = new Users();
    }
    public function index(Request $request)
    {
        $title = 'Danh sách người dùng';
        // $this->users->learnQueryBuiler();
        $filter = [];
        if (!empty($request->status)) {
            $status = $request->status;
            if ($status == "active") {
                $status = 1;
            } else {
                $status = 0;
            }
            $filter[] = ['users.status', '=', $status];
        }

        if (!empty($request->group_id)) {
            $groupId = $request->group_id;

            $filter[] = ['users.group_id', '=', $$groupId];
        }
        if (!empty($request->keywords)) {
            $keywords = $request->keywords;
        }
        $sortType = $request->input('sort-by');
        $allowSort = ['asc', 'desc'];
        $sortBy = $request->input('sort-type');
        if (!empty($sortType) && in_array($sortType, $allowSort)) {
            if ($sortType == "desc") {
                $sortType = 'asc';
            } else {
                $sortType = 'desc';
            }
        } else {
            $sortType = 'asc';
        }
        $sortArr = [
            'sortBy' => $sortBy,
            'sortType' => $sortType
        ];

        $userList = $this->users->getAllUser($filter, $sortBy, self::_PER_PAGE);
        return view('client.users.lists', compact('title', 'userList', 'sortType'));
    }
    public function add()
    {
        function getAllGroups()
        {
            $groups = new Groups;
            return $groups->getAll();
        }
        $title = 'Thêm người dùng';
        $allGroups = getAllGroups();
        return view('client.users.add', compact('title', 'allGroups'));
    }
    public function postAdd(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'group_id' => ['required', 'integer', function ($attribute, $value, $fail) {
                if ($value == 0) {
                    $fail('Bắt buộc phải chọn nhóm');
                }
            }],
            'status' => 'required|integer'
        ], [
            'fullname.required' => 'Họ và tên bắt buộc phải nhập',
            'fullname.min' => 'Họ và tên phải từ :min trở lên',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Email không đúng định dạng của email',
            'email.unique' => 'Email đã tồn tại trong hệ thống',
            'group_id.required' => 'Nhóm không được để trống',
            'group_id.integer' => 'Nhóm không hợp lệ',
            'status.required' => 'Trạng thái không được để trống',
            'status.integer' => 'Trạng thái không hợp lệ'
        ]);
        $dataInsert = [
            'fullname' => $request->fullname,
            'email' => $request->email,
            'group_id' => $request->group_id,
            'status' => $request->status,
            'create_at' => date('Y-m-d H:i:s')
        ];
        $this->users->addUser($dataInsert);
        return redirect()->route('users.index')->with('msg', 'thêm người dùng thành công');
    }
    public function getEdit(Request $request, $id = 0)
    {
        $title = 'cập nhật người dùng';
        if (!empty($id)) {
            $userDetial = $this->users->getDetial($id);
            // dd($userDetial);
            if (!empty($userDetial[0])) {
                $request->session()->put('id', $id);
                $userDetial = $userDetial[0];
            } else {
                return redirect()->route('users.index')->with('msg', 'Người dùng không tồn tại');
            }
        } else {
            return redirect()->route('users.index')->with('msg', 'Liên kết không tồn tại');
        }
        return view('client.users.edit', compact('title', 'userDetial'));
    }
    public function postEdit(Request $request)
    {
        $id = session('id');
        if (!empty($id)) {
            return back()->with('msg', 'Id không tồn tại');
        }
        $request->validate([
            'fullname' => 'required|min:5',
            'email' => 'required|email|unique.users,email' . $id
        ], [
            'fullname.required' => 'Họ và tên bắt buộc phải nhập',
            'fullname.min' => 'Họ và tên phải từ :min trở lên',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Email không đúng định dạng của email',
            //  'email.unique' => 'Email đã tồn tại trong hệ thống'
        ]);
        $dataUpdate = [
            $request->fullname,
            $request->email,
            date('Y-m-d H:i:s')
        ];

        $this->users->updateUser($dataUpdate, $id);
        return back()->with('msg', 'cập nhật người dùng');
    }
    public function delete($id = 0)
    {
        if (!empty($id)) {
            $userDetial = $this->users->getDetial($id);
            if (!empty($userDetial[0])) {
                $deleteStatus =  $this->users->deleteUser($id);
                if ($deleteStatus) {
                    $msg = 'Xóa người dùng thành công';
                } else {
                    $msg = 'Bạn không thể xóa người dùng';
                }
            } else {
                $msg = 'Người dùng không tồn tại';
            }
        } else {
            $msg = 'Liên kết không tồn tại';
        }
        return redirect()->route('users.index')->with('msg', $msg);
    }
}
