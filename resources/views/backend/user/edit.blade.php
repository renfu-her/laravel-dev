@extends('backend.layouts.app')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">管理員名單</h1>

            <div class="card mb-4">
                <div class="card-header">
                    管理員名單 - 更新
                </div>

                <div class="card-body">
                    @livewire('backend.user-update', ['id' => $id])
                </div>


            </div>
        </div>
    </main>
@endsection

@section('js')
    <script>
        $(function() {

            $('#submit').on('click', function(){
                let error_msg = []

                if($.trim($('input[name=name]').val()) == ''){
                    error_msg.push('姓名一定要填寫')
                }
                if($.trim($('input[name=email]').val()) == ''){
                    error_msg.push('E-mail 一定要填寫')
                }

                if(error_msg.length > 0){
                    alert(error_msg.join("\n"))
                    return false;
                }
            })
        })
    </script>
@endsection
