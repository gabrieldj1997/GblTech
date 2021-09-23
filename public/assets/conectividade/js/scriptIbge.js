function montarSelectEstados() {
    $.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados').done(data => {
        let htmlEstados = '<option>Selecione o Estado</option>';
        data.forEach(e => {
            htmlEstados += `<option value="${e.sigla}">${e.nome}</option>`
        });
        $('#selEstados').html(htmlEstados)
    })
}

function retornarCapital(estadoSigla){
    $.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoSigla}/regioes-intermediarias`).done(data =>{
        
        nomeMunicipio = data[0].nome == "Distrito Federal" ? "Brasília" : data[0].nome

        id = $(`#selMunicipio option[name="${nomeMunicipio}"]`).val()
        $('#selMunicipio').val(id)
        if (vericacao()) {
            estado = $('#selEstados').val()
            codigoIbge = $('#selMunicipio').val()
            anoMes = $('#datepicker').val()
            pagina = $('#valPagina')
            bolsaMunicipioAjax(estado, codigoIbge, anoMes)
          }
    })
}

function montarSelectMunicipios(sigla){
    $.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${sigla}/municipios`).done(data => {
        let htmlMunicipios = '<option>Selecione o Municipio</option>';
        data.forEach(e => {
            htmlMunicipios += `<option value="${e.id}" name="${e.nome}">${e.nome}</option>`
        });
        $('#selMunicipio').html(htmlMunicipios)
        retornarCapital(sigla)
    })
}

function capitalAjax(estadoSigla) {
	var result;
	$.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoSigla}/regioes-imediatas`).done(data => { result = data[0] })
	return result
}