<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/conectividade/css/style-busca.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>+Conectividade</title>
</head>

<body>

@include('conectividade.layout.structure.header')

    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div id="pesquisa-bolsa" align="center">
                    <div class="card custom-card shadow p-2 mb-5 bg-white rounded h-100" style="margin-top:20px;max-width: 25rem; border-color: #0094d9;">
                        <div class="card-body text-dark ">
                            <h5 class="card-title">Pesquise aqui sua situação do Bolsa Família!</h5>
                            <hr />
                            <div class="form-group">
                                <input type="text" class="buscaInput btn-lg" id="cpf-nis-bolsa" placeholder="Digite seu CPF ou NIS!"/>
                                <input type="text" class="buscaInput btn-lg " name="datepicker" id="datepicker" placeholder="Mês Competência" />
                                <button id="btn-consultar" class="btn btn-lg" value="submit">Consultar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="resultado-bolsa" align="center">
                    <div class="card text-dark shadow p-3 mb-5 bg-white rounded" style="max-width: 25rem;margin-top:20px;border-color:#0094d9;">
                        <div id="bolsa-info">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divLoader" style="display: none;">
        <div class="loader"></div>
    </div>

    @include('conectividade.layout.structure.footer')

</body>

<script src="{{ asset('assets/conectividade/js/script.js') }}"></script>

<script>
    $("#datepicker").datepicker({
        format: "mm/yyyy",
        startView: "months",
        minViewMode: "months",
        startDate: new Date('2013-01-20'),
        endDate: new Date('2021-08-1')
    });

    $("#datepicker").change(event => {
        $('.datepicker').hide()
    })


    function validar() {
        if ($('#cpf-bolsa') != '') {
            if ($('#datepicker').val() != '') {
                return true
            } else {
                alert('Informe uma data.')
            }
        } else {
            alert('Informe o seu CPF.')
        }
    }

    function submit() {
        if (validar()) {
            cpfNis = $('#cpf-nis-bolsa').val()
            data = $('#datepicker').val()
            data = data.split('/')
            data = data[1].toString() + data[0].toString()
            bolsaCpfNisAjax(data, data, cpfNis)
        }
    }

    $('#btn-consultar').click(() => {
        submit()
    })
</script>

</html>