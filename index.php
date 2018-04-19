<?php
require_once "model/Inscricao.php";
require_once "dao/InscricaoDao.php";
require_once "banco/ConnectionFactory.php";

if (isset($_POST['submit'])) {
  $inscricao = new Inscricao();
  // SET Identificação
  $inscricao->setNome($_POST['nome']);
  $inscricao->setDataNascimento($_POST['dataNascimento']);
  $inscricao->setRg($_POST['rg']);
  $inscricao->setCpf($_POST['cpf']);
  $inscricao->setProfissao($_POST['profissao']);
  // SET Endereço
  $inscricao->setEndereco($_POST['endereco']);
  $inscricao->setEndNumero($_POST['endNumero']);
  $inscricao->setComplemento($_POST['complemento']);
  $inscricao->setBairro($_POST['bairro']);
  $inscricao->setCidade($_POST['cidade']);
  $inscricao->setUf($_POST['uf']);
  $inscricao->setCep($_POST['cep']);
  // SET Constato
  $inscricao->setTelefone($_POST['telefone']);
  $inscricao->setOutroTelefone($_POST['outroTelefone']);
  $inscricao->setEmail($_POST['email']);

  // TODO: Change the charset do banco para UTF8 na ConnectionFactory
  if ($pdo = ConnectionFactory::getConnection()) {
    $dao = new InscricaoDao($pdo);
    $dao->add($inscricao);
    // Closes the connection
    $pdo = null;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <title>Seminário Águas Urbanas</title>
</head>
<body>
<main class="container">
  <div class="row">
    <div class="col-sm-12">
      <!-- TITULO -->
      <div class="siteTitle text-center">
        <h1>Seminário Águas Urbanas</h1>
        <p class="titleFooter">05 e 06 de maio de 2018.<br>Auditório de Santo Antonio do Pinhal, SP.</p>
      </div>

      <!--TEXTO-->
      <div class="textoDescricao">
        <p>O seminário promove uma reflexão sobre as águas na cidade no meio urbano, buscando subsidiar o Projeto de qualificação da faixa de proteção ambiental na margem do Rio da Prata, referente ao trecho da área central de Santo Antônio do Pinhal.</p>

        <p>O foco é o Rio da Prata e a intervenção será nas suas margens. Busca-se uma qualidade da água do Rio da Prata para uso de recreação atraindo as pessoas para o seu leito. Nessas condições, desenvolver um paisagismo ambientalmente correto utilizando-se de um deck de madeira, para transformar uma área atualmente ociosa, em um calçadão elevado. Esse deck de madeira dará acesso às lojas e escritórios ao longo do Rio da Prata.</p>

        <p>Um empreendimento desse porte deverá ser feito por etapas. O primeiro um trecho terá 60m composto de um deck de madeira que interligará as Avenidas Ministro Nelson Hungria e Governador Carvalho Pinto, assim como com as lojas desse trecho. O deck promoverá a circulação de pedestres na área do centro e em consequência o movimento no comercio. </p>

        <p>Regras claras e projeto bem detalhado, deverá atrair investidores para assumir contratos de concessão do tipo PPP – Participação Público e Privado, ou BTS – Built to Suit cada vez mais presentes em empreendimentos públicos. com demanda suficiente para gerir negócios imobiliários de interesses Públicos e Privados.</p>

        <p>Esses aspectos devem ser colocados e debatidos neste Seminário, previsto para ser realizado no auditório do Município de SAPinhal nos dia 05 e 06 de Maio de 2018.</p>
      </div><!--/.textoDescricao-->

      <!-- PROGRAMAÇÃO -->
      <div class="programacao">
        <h2 class="text-center programacaoTitle">Programação do Seminário Águas Urbanas</h2>
        <ul class="ulProgramacao">
          <li>
            <strong>Local:</strong> Auditório CEI – Centro Integrado de Educação – Santo Antonio do Pinhal – SP
          </li>
          <li>
            <strong>Organização:</strong> Associação DrC – Doutores de Cidade
          </li>
          <li>
            <strong>Apoio:</strong> PMSAP - Prefeitura Municipal de Santo Antonio do Pinhal <br>
            Acasap – Associação Comercial e Agricola de Santo Antonio do Pinhal
          </li>
        </ul>
        <table class="table table-bordered tabelaProgramacao">
          <tr class="text-center font-weight-bold bg-dark text-white">
            <td>Data</td>
            <td>Atividade</td>
            <td>Participantes</td>
          </tr>

          <!-- 05/05/2018 -->
          <tr>
            <td class="table-secondary font-weight-bold" colspan="3">05/05/2018</td>
          </tr>
          <tr>
            <td>09h00</td>
            <td>Abertura do Seminário com a apresentação do programa, dos apoiadores, patrocinadores e parceiros</td>
            <td>DrC, Convidados (autoridades, patrocinadores, apoios, palestrantes, debatedores, coordenadores de cursos) e presidentes de associações profissionais (Acasap, PMSAP, Aguas da Mantiqueira e Pro Pinhal)</td>
          </tr>
          <tr>
            <td>10h00</td>
            <!-- <td>Projeto paisagístico em área de APP</td> -->
            <td>Caminho do Rosário</td>
            <td>Palestrante: Eng. Agrônomo Jair Pinheiro</td>
          </tr>
          <tr>
            <td>11h00</td>
            <td>Muros de contenção em orlas de rios</td>
            <td>Palestrante: Eng. Roberto M. Watanabe</td>
          </tr>
          <tr>
            <td>12h00</td>
            <td>Debate:  obras de paisagismo em margens de rios</td>
            <td>Debatedores: Eng. Eduardo Dolomiti, Arq.Urb. Tadeu Sales</td>
          </tr>
          <tr>
            <td class="text-center" colspan="3"> <strong> --- --- Intervalo --- --- </strong> </td>
          </tr>
          <tr>
            <td>14h00</td>
            <td>Poluição Difusa</td>
            <td>Palestrante:Eng. Plínio Tomaz</td>
          </tr>
          <tr>
            <td>15h00</td>
            <td>Recursos hídricos</td>
            <td>Palestrante: José Roberto Menna de Deus (Águas da Mantiqueira)</td>
          </tr>
          <tr>
            <td>16h00</td>
            <td>Debate: caminho das águas urbanas</td>
            <td>Debatedores: Arq.Urb. Paulo André Cunha Ribeiro, Arq.Urb. Ingrid Schnoor</td>
          </tr>

          <!-- 06/05/2018 -->
          <tr>
            <td class="table-secondary font-weight-bold" colspan="3">06/05/2018</td>
          </tr>
          <tr>
            <td>09h00</td>
            <td>Parque Ecológico do Tietê - SP</td>
            <td>Palestrante :Arq.Urb. Edison Aparecido Candido</td>
          </tr>
          <tr>
            <td>10h00</td>
            <td>Arco Tietê e Ligação Leste-Oeste de SP</td>
            <td>Palestrante: Arq.Urb. Anne Marie Sumner</td>
          </tr>
          <tr>
            <td>11h00</td>
            <td>Debate: Projetos de grande impacto paisagistico</td>
            <td>Debatedores: Eng. Agron. Alexandre Gonçalves da Silva, Arq.Urb. Marilia Richieri</td>
          </tr>
          <tr>
            <td class="text-center" colspan="3"> <strong> --- --- Intervalo --- --- </strong> </td>
          </tr>
          <tr>
            <td>14h00</td>
            <td>Investimento privado em área pública</td>
            <td>Palestrante: Arq.Urb. Mario Yoshinaga</td>
          </tr>
          <tr>
            <td>15h00</td>
            <td>Comunicação visual em áreas de uso publico</td>
            <td>Palestrante: Arq.Urb.Ivo Sakamoto</td>
          </tr>
          <tr>
            <td>16h00</td>
            <td>Debate: Uso e ocupação de áreas públicas</td>
            <td>Debatedores: Arq.Urb. Junior Martins, Fabiana C. M. Alves</td>
          </tr>
          <!-- TODO: Colocar as outras linha da tabela e as Notas -->
        </table>
      </div><!--/.programacao-->

      <!-- <hr> -->
      <!-- FORMULARIO -->
      <h2 class="text-center formTitle">Formulário de Inscrição</h2>
      <form class="ficha-inscricao" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
          <legend>Identificação:</legend>
          <div class="form-group">
            <label class="required">Nome completo:</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
          </div>
          <div class="form-group">
            <label class="required">Data de nascimento:</label>
            <input type="text" class="form-control" name="dataNascimento" placeholder="dia/mês/ano (dd/mm/aaaa) " required>
          </div>
          <div class="form-group">
            <label class="required">RG / Org. Emissor / UF (Documento de Identidade):</label>
            <input type="text" class="form-control" name="rg" placeholder="RG / Órgão Emissor / UF " required>
          </div>
          <div class="form-group">
            <label class="required">CPF:</label>
            <input type="text" class="form-control" name="cpf" placeholder="Número de CPF" required>
          </div>
          <div class="form-group">
            <label class="required">Profissão / Área de Atuação:</label>
            <input type="text" class="form-control" name="profissao" placeholder="Profissão e área de atuação" required>
          </div>
        </fieldset>
        <!-- <hr> -->
        <fieldset>
          <legend>Endereço:</legend>
          <div class="form-group">
            <label class="required">Endereço/Logradouro:</label>
            <input type="text" class="form-control" name="endereco" placeholder="Logradouro (rua, avenida, travessa, entre outros)" required>
          </div>
          <div class="form-group">
            <label class="required">Número:</label>
            <input type="text" class="form-control" name="endNumero" placeholder="Número" required>
          </div>
          <div class="form-group">
            <label>Complemento:</label>
            <input type="text" class="form-control" name="complemento" placeholder="Complemento (opicional)">
          </div>
          <div class="form-group">
            <label>Bairro:</label>
            <input type="text" class="form-control" name="bairro" placeholder="Bairro (opicional)">
          </div>
          <div class="form-group">
            <label class="required">Cidade:</label>
            <input type="text" class="form-control" name="cidade" placeholder="Cidade" required>
          </div>
          <div class="form-group">
            <label class="required">UF:</label>
            <input type="text" class="form-control" name="uf" placeholder="Unidade Federativa - UF" required>
          </div>
          <div class="form-group">
            <label class="required">CEP:</label>
            <input type="text" class="form-control" name="cep" placeholder="CEP" required>
          </div>
        </fieldset>
        <!-- <hr> -->
        <fieldset>
          <legend>Contato:</legend>
          <div class="form-group">
            <label class="required">Telefone / Celular:</label>
            <input type="text" class="form-control" name="telefone" placeholder="Telefone (DDD) XXXXX-XXXX" required>
          </div>
          <div class="form-group">
            <label>Outro telefone:</label>
            <input type="text" class="form-control" name="outroTelefone" placeholder="Outro telefone (opicional)">
          </div>
          <div class="form-group">
            <label class="required">E-mail:</label>
            <input type="text" class="form-control" name="email" placeholder="E-mail (correio eletrônico)" required>
          </div>
        </fieldset>
        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Enviar Ficha de Inscrição">
      </form>
    </div><!--col-sm-12-->
  </div><!--row-->
</main>
<footer class="text-center py-5">
  <div class="container">
    Codificado por <a href="https://codepen.io/pedrofrohmut/full/WdpXLE?editors=1010">Pedro Frohmut</a>
  </div>
</footer>
</body>
</html>
