<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="../../views/style/style-busca.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>+Conectividade</title>
</head>


<body>

    @includeIf('header')


    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div id="pesquisa-bolsa" align="center">
                    <div class="card custom-card shadow p-2 mb-5 bg-white rounded h-100" style="margin-top:20px;max-width: 25rem; border-color: #0094d9;">
                        <div class="card-body text-dark ">
                            <h5 class="card-title">Pesquise aqui sua situação do Auxilio Emergencial!</h5>
                            <hr />
                            <div class="form-group">
                                <input type="text" class="buscaInput btn-lg" id="nis-beneficiario" placeholder="CPF ou NIS do Beneficiário!"/>
                                <input type="text" class="buscaInput btn-lg" id="nis-responsavel" placeholder="CPF ou NIS do Responsável!"/>
                                <button id="btn-consultar" class="btn btn-lg" value="submit">Consultar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="resultado-auxilio" align="center">
                    <div id="auxilio-info" class="card text-dark shadow p-3 mb-5 bg-white rounded" style="max-width: 25rem;margin-top:20px;border-color:#0094d9;">

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="divLoader" style="display: none;">
        <div class="loader"></div>
    </div>
    
    @include('footer')

</body>

<script src="../../scripts/script.js"></script>

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
        if ($('#nis-beneficiario') != '' || $('#nis-responsavel').val() != '') {
            return true
        } else {
            alert('Informe o NIS do responsavel ou do beneficiario.')
        }
    }

    function submit() {
        if (validar()) {
            nisBeneficiario = $('#nis-beneficiario').val()
            nisResponsavel = $('#nis-responsavel').val()
            auxilioCpfNisAjax(nisBeneficiario, nisResponsavel)
        }
    }

    $('#btn-consultar').click(() => {
        submit()
    })
</script>

</html>