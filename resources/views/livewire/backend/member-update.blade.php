<div>
    <x:form::form method="PUT" :action="route('member.update', $data->id)" :bind="$data">
        <x:form::input name="name" label="姓名" />
        <x:form::input name="nick_name" label="昵稱" />
        <x:form::input type="email" name="email" label="E-mail" />
        <x:form::input type="password" name="password" label="密碼" value="" />
        <div class="text-center">
            <x:form::button.link class="btn-secondary" href="/backend/user">取消</x:form::button.link>
            <x:form::button.submit id="submit">確認存檔</x:form::button.submit>
        </div>
    </x:form::form>
</div>
