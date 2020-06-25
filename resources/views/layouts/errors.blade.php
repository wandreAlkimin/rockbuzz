<div class="container">
    <div  id="msg">
        @if(Session::has('msg'))

            <script type="text/javascript" async>
                M.toast({html: '{{Session::get('msg')}}', classes: '#42a5f5 blue lighten-1 toast', inDuration:'700'});
            </script>

        @endif
        @if(Session::has('msgErro'))

            <script type="text/javascript" async>
                M.toast({html: '{{Session::get('msgErro')}}', classes: '#ef5350 red lighten-1 toast', inDuration:'700'});
            </script>
        @endif
    </div>

    @if(isset($errors) && count($errors) > 0)

        @foreach($errors->all() as $erro)
            <script type="text/javascript" async>
                M.toast({html: '{{$erro}}', classes: '#ef5350 red lighten-1 toast', inDuration:'700'});
            </script>
        @endforeach
    @endif

    @if (session('resent'))
        <script type="text/javascript" async>
            M.toast({html: 'Um novo link de verificação foi enviado para o seu endereço de e-mail.', classes: '#42a5f5 blue lighten-1 toast', inDuration:'700'});
        </script>
    @endif

</div>
