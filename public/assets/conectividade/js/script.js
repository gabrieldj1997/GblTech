function bolsaMunicipioAjax(estado, codigoIbge, anoMes, pagina = 1) {
	anoMes = anoMes.split('/')
	ano = anoMes[1]
	mes = anoMes[0]
	anoMes = ano.toString() + mes.toString();
	if (estado == null || estado == undefined) {
		console.log('Log: bolsaMunicipio; param: estado')
		return
	}
	if (codigoIbge == null || codigoIbge == undefined) {
		console.log('Log: bolsaMunicipio; param: codigoIbge')
		return
	}
	if (anoMes == null || anoMes == undefined) {
		console.log('Log: bolsaMunicipio; param: anoMes')
		return
	}

	$.ajax({
		url: "/conectividade/api/v1/bolsa/municipio",
		type: "get",
		data: {
			codigoIbge: codigoIbge,
			mesAno: anoMes,
			pagina: pagina
		},
		success: function (response) {
			debugger
			try {
				if (response[0] != null) {
					$('#info-state span').html('')
					anoMes = response[0].dataReferencia.split('-')
					$('#info-state').css({ 'display': 'block' });

					var nomeMunicipio = response[0].municipio.nomeIBGE

					var ano = anoMes[0];
					var mes = anoMes[1];

					var valorBolsa = response[0].valor;
					var beneficiariosBolsa = response[0].quantidadeBeneficiados;

					$('#info-state-title').html(`<h2>${estado} ${mes}/${ano}</h2></br><h5>(${nomeMunicipio})</h5>`)
					$('#info-state-bolsa').html(`<hr/><h3>BOLSA FAMÍLIA</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: <strong>${beneficiariosBolsa}</strong></li><li>Total de dinheiro usado: <strong>$${valorBolsa}</strong></li></ul>`);

					if (!(ano <= 2020 & mes < 4)) {
						auxilioMunicipioAjax(estado, codigoIbge, anoMes, pagina)
					} else {
						$('#info-state-auxilio').hide()
					}
				} else {
					$('#info-state-title').html(`<h2>${estado} ${mes}/${ano}</h2></br><h5>(${nomeMunicipio})</h5>`)
					$('#info-state-bolsa').html('<hr/><h3>BOLSA FAMÍLIA</h3><p>Sem resultado</p>')
				}
			} catch (exception) {
				console.log(exception)
				console.log(response)
			}
		},
		error: function (xhr) {
			alert('Erro, contate o adm');
		}
	});
}

function auxilioMunicipioAjax(estado, codigoIbge, anoMes, pagina = 1) {
	anoMes = anoMes[0].toString() + anoMes[1]
	$.ajax({
		url: "/conectividade/public/api/consulta/auxilio/municipio",
		type: "get",
		data: {
			codigoIbge: codigoIbge,
			mesAno: anoMes,
			pagina: pagina
		},
		success: function (response) {
			try {
				response = JSON.parse(response)
				if (response[0] != null) {
					anoMes = response[0].dataReferencia.split('-')
					$('#info-state').css({ 'display': 'block' });

					var nomeMunicipio = response[0].municipio.nomeIBGE

					var ano = anoMes[0];
					var mes = anoMes[1];

					var valorAuxilio = response[0].valor;
					var beneficiariosAuxilio = response[0].quantidadeBeneficiados;

					$('#info-state-title').html(`<h2>${estado} ${mes}/${ano}</h2></br><h5>(${nomeMunicipio})</h5>`)
					$('#info-state-auxilio').html(`<hr/><h3>AUXILIO EMERGENCIAL</h3><ul style="text-align:left;"><li>Quantidade de Benificiários: <strong>${beneficiariosAuxilio}</strong></li><li>Total de dinheiro usado: <strong>$${valorAuxilio}</strong></li></ul>`);
				} else {
					$('#info-state-auxilio').html('<h3>AUXILIO EMERGENCIAL</h3><p>Sem resultado</p>')
				}
			} catch (exception) {
				console.log(exception)
				console.log(response)
			}
		},
		error: function (xhr) {
			alert('Erro, contate o adm');
		}
	});
}

function bolsaCpfNisAjax(anoMesCompetencia, anoMesReferencia, codigo, pagina = 1) {
	console.log(anoMesCompetencia, anoMesReferencia, codigo, pagina)
	showLoader()
	$.ajax({
		url: "/conectividade/public/api/consulta/bolsa/cpf-nis",
		type: "get",
		data: {
			anoMesCompetencia: anoMesCompetencia,
			anoMesReferencia: anoMesReferencia,
			codigo: codigo,
			pagina: pagina
		},
		success: function (response) {
			try {
				console.log(response)
				response = JSON.parse(response)
				if (response[0] != null) {

					var valorBolsa = response[0].valor;
					var quantidadeDependentes = response[0].quantidadeDependentes;
					var nomeTitular = response[0].titularBolsaFamilia.nome;
					var cpf = response[0].titularBolsaFamilia.cpfFormatado
					var nis = response[0].titularBolsaFamilia.nis
					var data = response[0].dataMesCompetencia.split('-')
					data = data[2] + "/" + data[1] + "/" + data[0]

					$('#resultado-bolsa').show()

					$('#bolsa-info').html('')
					$('#bolsa-info').html(`<h2>${nomeTitular}</h2></br><ul style="text-align:left;"><li>CPF: ${cpf}</li><li>NIS: ${nis}</li><li>Data: ${data}</li><li>valor: ${valorBolsa}</li><li>Quantidade dependentes: ${quantidadeDependentes}</li>`)

					hideLoader()
				} else {
					hideLoader()
					$('#resultado-bolsa').show()
					$('#bolsa-info').html(`<h2>Sem dados</h2>`)
				}
			} catch (exception) {
				console.log(exception)
				console.log(response)
			}
		},
		error: function (xhr) {
			hideLoader()
			alert('Erro, contate o adm');
		}
	})
}

function auxilioCpfNisAjax(codigoBenifeciario, codigoResponsavelFamiliar, pagina = 1) {
	showLoader()
	$.ajax({
		url: "/conectividade/public/api/consulta/auxilio/cpf-nis",
		type: "get",
		data: {
			codigoBenifeciario: codigoBenifeciario,
			codigoResponsavelFamiliar: codigoResponsavelFamiliar,
			pagina: pagina
		},
		success: function (response) {
			try {
				arrayResponse = JSON.parse(response)
				if (arrayResponse[0] != null) {
					console.log(arrayResponse)
					var html = ''

					arrayResponse.forEach(element => {
						html += '<div class="aux-result-card">'
						html += '<h3>Responsavel</h3>'
						html += `<div class="aux-nome-resp">${element.responsavelAuxilioEmergencial.nome}</div>`
						html += `<div class="aux-cpf-resp">${element.responsavelAuxilioEmergencial.cpfFormatado}</div>`
						html += `<div class="aux-nis-resp">${element.responsavelAuxilioEmergencial.nis}</div>`
						html += '</br>'
						html += '<h3>Beneficiario</h3>'
						html += `<div class="aux-nome-ben">${element.beneficiario.nome}</div>`
						html += `<div class="aux-cpf-ben">${element.beneficiario.cpfFormatado}</div>`
						html += `<div class="aux-nis-ben">${element.beneficiario.nis}</div>`
						html += '</br>'
						html += `<ul>`
						html += `<li>Mes Disponibilização: ${element.mesDisponibilizacao}</li>`
						html += `<li>Situacão Aux. Emer.: ${(element.situacaoAuxilioEmergencial != '' ? element.situacaoAuxilioEmergencial : "-------------")}</li>`
						html += `<li>Enquadramento: ${element.enquadramentoAuxilioEmergencial}</li>`
						html += `<li>valor: $${element.valor}</li>`
						html += `<li>Nº Parcela: ${element.numeroParcela}`
						html += `</ul>`
						html += '</div>'
					});
					$('#resultado-auxilio').show()
					$('#auxilio-info').html(html)
					hideLoader()
				} else {
					hideLoader()
					$('#resultado-auxilio').show()
					$('#auxilio-info').html(`<h3>Sem dados</h3>`)
				}
			} catch (excepetion) {
				hideLoader()
				$('#resultado-auxilio').show()
				$('#auxilio-info').html(`<h3>Sem dados</h3>`)
				console.log(response)
			}
		},
		error: function (xhr) {
			hideLoader()
			alert('Erro, contate o adm');
		}
	});
}

function atualizarData() {
	if ($('#datepicker').val() == '') {
		let anoMes = new Date().toLocaleDateString()
		anoMes = anoMes.split('/')
		ano = anoMes[2]
		mes = anoMes[1] - 2
		mes = mes.toString().length > 1 ? mes : '0' + mes.toString();
		anoMes = mes + '/' + ano
		$('#datepicker').val(anoMes)
	}
}

function atualizarMapa(siglaEstado) {
	$('.mapActive').removeClass('mapActive')
	$(`[cod-state="${siglaEstado}"]`).find('path').addClass('mapActive')
}

function habilitarMapa() {
	$('.divLoader').hide()
	$('map a').removeAttr('disable')
	$('.state .label_icon_state').css({ 'fill': '#66ccff' });
	$('.state .shape').css({ 'fill': '#0094d9' });
}

function desabilitarMapa() {
	$('.divLoader').show()
	$('map a').attr('disable', true)
	$('.state .label_icon_state').css({ 'fill': '#666' });
	$('.state .shape').css({ 'fill': '#ddd' });
}

function hideLoader() {
	$('.divLoader').hide()
}

function showLoader() {
	$('.divLoader').show()
}