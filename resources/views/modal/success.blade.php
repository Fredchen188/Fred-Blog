@if (session('success'))
    <div class="am-modal am-modal-alert" tabindex="-1" id="my-success">
        <div class="am-modal-dialog">
            <div class="am-modal-hd">搞定~</div>
            <div class="am-modal-bd">
                <li class="alert-success">{{session('success')}}</li>
            </div>
        </div>
    </div>
    <script>
        //成功的Modal
        $(function(){
            $('#my-success').modal();
            setTimeout(function(){
                $('#my-success').modal('close');
            },2000)
        })
    </script>
@endif