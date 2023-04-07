@extends('backend.layouts.app')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">會員管理</h1>

            <div class="card mb-4">
                <div class="card-header">
                    會員管理 - 新增
                </div>

                <div class="card-body">
                    <x:form::form method="POST" :action="route('member.store')" >
                        <x:form::input name="name" label="姓名" />
                        <x:form::input name="nick_name" label="昵稱" />
                        <x:form::input type="email" name="email" label="E-mail" />
                        <x:form::input type="password" name="password" label="密碼"  />
                        <div class="text-center">
                            <x:form::button.link class="btn-secondary" href="/backend/user">取消</x:form::button.link>
                            <x:form::button.submit id="submit">確認存檔</x:form::button.submit>
                        </div>
                    </x:form::form>
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
                if($.trim($('input[name=password]').val()) == ''){
                    error_msg.push('密碼一定要填寫')
                }

                if(error_msg.length > 0){
                    alert(error_msg.join("\n"))
                    return false;
                }
            })
        })
    </script>
@endsection
