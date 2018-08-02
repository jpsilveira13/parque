<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="{{url('css/app.css')}}" rel="stylesheet" type="text/css">

</head>
<body>

<style>
    *{
        font-family: 'Roboto', sans-serif!important;
        color: #000;
    }
</style>

<div class="container py-3">
    <div class="row">
        <div class="mx-auto col-sm-6">
            <!-- form user info -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Informação barraqueiro</h4>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nome</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">CPF</label>
                            <div class="col-lg-9">
                                <input  class="form-control" type="text" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Telefone</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="email@gmail.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Cidade</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Valor Pago</label>
                            <div class="col-lg-9">
                                <input class="form-control dinheiro" type="tel"  value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Valor a Receber</label>
                            <div class="col-lg-9">
                                <input class="form-control dinheiro" type="tel" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Valor Total</label>
                            <div class="col-lg-9">
                                <input class="form-control dinheiro" type="tel" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Data Próximo Pagamento</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancelar">
                                <input type="button" class="btn btn-primary" value="Salvar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form user info -->
        </div>
    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery.maskMoney.min.js')}}"></script>
<script src="{{asset('js/site.js')}}"></script>
</body>
</html>
