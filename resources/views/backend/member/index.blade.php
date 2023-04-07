@extends('backend.layouts.app')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">會員管理</h1>

            <div class="card mb-4">
                <div class="card-header">
                    會員管理
                </div>

                <div class="card-body">
                    <button class="btn btn-info" onclick="add_row()">
                        <i class="fa-regular fa-square-plus"></i> 新增
                    </button>
                    <br><br>
                    <table id="table" class="hover" style="width: 100%">
                        <thead>
                            <tr>
                                <th>名稱</th>
                                <th>昵稱</th>
                                <th>E-mail</th>
                                <th style="width: 10%">編輯</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->nick_name }}</td>
                                <td>
                                    <button class="btn btn-warning" onclick="edit_row({{ $value->id }})">
                                        <i class="fa-solid fa-pen-to-square"></i> 編輯
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
<script>
    $(function(){
        $('#table').DataTable({

            "language": {
                "url": "/admin/datatables/zh-HANT.json"
            }
        })
    })

    const add_row = () => {
        location.href = "/backend/member/create"
    }

    const edit_row = (id) => {
        location.href = "/backend/member/" + id + "/edit"
    }
</script>
@endsection
