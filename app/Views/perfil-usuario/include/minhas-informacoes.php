<?php
$data['link_css'] = "assets/css/perfil.css";
?>
<style>
    /* aqui vai meu conteudo de style */
</style>

<div class="container">
    <h1 class="titulo-perfil">Minhas informações</h1>
    <form id="userProfileForm">

        <div class="mb-2 p-2 my-2">
            <label for="userPassword" class="form-label " value="Nome completo do usuário"><b>Nome</b></label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-2 p-2 my-2">
            <label for="cpf" class="form-label "><b>CPF</b></label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-2 p-2 my-2">
            <label for="endereço" class="form-label "><b>Endereço</b></label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-2 p-2 my-2">
            <label for="endereço" class="form-label" id="telefone" name="telefone_01"><b>Número de Telefone 1</b></label>
            <input type="text" class="form-control">
        </div>

        <div class="mb-2 p-2 my-2">
            <label for="endereço" class="form-label" id="telefone" name="telefone_02"><b>Número de Telefone 2</b></label>
            <input for="floatingInputDisabled" type="text" class="form-control">
        </div>

        <div class="mb-2 p-2 my-2">
            <label for="endereço" class="form-label" id="celular" name="celular"><b>Celular</b></label>
            <input type="text" class="form-control">
        </div>



        <div class="container mt-3 button-informacoes">
            <button type="button" class="btn input-rosa" id="">Atualizar</button>
        </div>
    </form>
</div>