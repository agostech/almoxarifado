<div class="col-md-6">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value="" required>
</div>

<div class="col-md-6">
    <label for="data_nasc" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" id="data_nasc" name="data_nasc" value="" required>
</div>

<div class="col-md-4">
    <label for="sexo" class="form-label">Sexo</label>
    <select id="sexo" name="sexo" class="form-select" required>
        <option value=""></option>
        <option value="m" @if(isset($funcionario->sexo)) @selected($funcionario->sexo == 'm') @endif>Masculino</option>
        <option value="f" @if(isset($funcionario->sexo)) @selected($funcionario->sexo == 'f') @endif>Feminino</option>
        <option value="o" @if(isset($funcionario->sexo)) @selected($funcionario->sexo == 'o') @endif>Outros</option>
    </select>
</div>

<div class="col-md-4">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf" minlength="11" maxlength="11" value="" required>
</div>

<div class="col-md-4">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="" required>
</div>

<div class="col-md-4">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="telefone" name="telefone" value="" required>
</div>

<div class="col-md-4">
    <label for="departamento_id" class="form-label">Departamentos</label>
    <select id="departamento_id" name="departamento_id" class="form-select" value="" required>
        <option value="">--</option>
        <option value="">Recursos Humanos</option>
        <option value="">Outros</option>
    </select>
</div>

<div class="col-md-4">
    <label for="salario" class="form-label">Salário</label>
    <input type="text" class="form-control" id="salario" name="salario" value="" required>
</div>

<div class="col-md-6">
    <label for="data_contratacao" class="form-label">Data de Contratação</label>
    <input type="date" class="form-control" id="data_contratacao" name="data_contratacao" value="" required>
</div>

<div class="col-md-6">
    <label for="data_desligamento" class="form-label">Data de Desligamento</label>
    <input type="date" class="form-control" id="data_desligamento" name="data_desligamento" value="">
</div>

<div class="col-2">
    @if(isset($funcionario->foto))
    <img src="" alt="" class="img-thumbnail">
    @else
    <img src="/images/sombra_funcionario.jpg" alt="" class="img-thumbnail">
    @endif
</div>

<div class="col-10">
    <label for="foto" class="form-label">Foto</label>
    <input type="file" class="form-control" id="foto" name="foto">
</div>
