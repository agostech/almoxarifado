<div class="col-md-6">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value="" required>
</div>

<div class="col-md-6">
    <label for="estoque" class="form-label">Estoque (QTD)</label>
    <input type="integer" class="form-control" id="estoque" name="estoque" value="" required>
</div>

<div class="col-md-4">
    <label for="data_reg" class="form-label">Data de Registro</label>
    <input type="date" class="form-control" id="data_reg" name="data_reg" value="" required>
</div>

<div class="col-md-4">
    <label for="sexo" class="form-label">Tamanho</label>
    <select id="sexo" name="sexo" class="form-select" required>
        <option value="">--</option>
        <option value="">M</option>
        <option value="">P</option>
    </select>
</div>

<div class="col-md-4">
    <label for="departamento_id" class="form-label">Categoria</label>
    <select id="departamento_id" name="departamento_id" class="form-select" value="" required>
        <option value="">--</option>
        <option value="">Fardamento</option>
        <option value="">Ferramenta</option>
    </select>
</div>

<div class="col-2">
    @if(isset($produto->foto))
    <img src="" alt="" class="img-thumbnail">
    @else
    <img src="/images/sombra_funcionario.jpg" alt="" class="img-thumbnail">
    @endif
</div>

<div class="col-10">
    <label for="foto" class="form-label">Foto</label>
    <input type="file" class="form-control" id="foto" name="foto">
</div>
