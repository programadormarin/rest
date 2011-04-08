$(document).ready(function(){
	$("#cadastro").submit(function () {
		var nome = $("#nome").val();
		$.ajax({
			type: "POST",
			url: "http://localhost/rest/application/rest/cadastrar.php",
			data: "nome=" + nome,
			success: function(){
				$("#cadastrado").hide().html('<font color="green">Autor Cadastrado com sucesso!</font>');
				$("#cadastrado").fadeIn(1000).delay(1000).fadeOut(1000);
				lista();
				$("#nome").val("");
			},
			error: function() {
				$("#cadastrado").hide().html('<font color="red">Não foi possível cadastrar o autor!</font>');
				$("#cadastrado").fadeIn(1000).delay(1000).fadeOut(1000);
			}
		});
	});
	lista();
	$("#animation-1 li a").hover( function(){
		$(this).animate({ textIndent: "30px" }, 500 );},function(){
			$(this).animate({ textIndent: "0px" }, 500 );
	    });
});
function lista () {
	$.ajax({
		url: "http://localhost/rest/application/rest/listar.php",
		success: function (data) {
			var tabela = "";
			$("#autor").html('<tr bgcolor="#fafafa">' + 
				'<th><strong>ID</strong></th>' +
				'<th><strong>NOME</strong></th>' +
				'<th><strong>EXCLUIR</strong></th>' +
				'</tr>');
			for (var i = 0; i < data.length; i++) {
				tabela = "<tr id='linha"+i+"'><td>" + data[i].id + "</td><td>" + data[i].nome + "</td>" +
				'<td><a id="link'+i+'" href="#" onclick="javascript:excluir(' + data[i].id + ')">X</a></td></tr>';
				$("#link"+i+"").hover( function(){
					$(this).animate({ textIndent: "30px" }, 500 );},function(){
						$(this).animate({ textIndent: "0px" }, 500 );
				    });
				$("#autor").fadeIn(3000).append(tabela);
			}
		}
	});
}

function exclui(id) {
	var id = id;
	$.ajax({
		type: "POST",
		url: "http://localhost/rest/application/rest/excluir.php",
		data: "id=" + id,
		success: function(){
			lista();
		}
	});
}