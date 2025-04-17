<div class="col-12 py-3">
    <div class="card shadow mb-2">
        <div class="card-header d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="m-0 font-weight-bold text-primary">Contas a Receber</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Adicionar</button>
            <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="card">
                            <h4 class="modal-header">Adicionar Receita</h4>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect03">Origem</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option value="" disabled selected>Escolha a Origem</option>
                                        <option value="1">Mercado</option>
                                        <option value="2">Nubank</option>
                                        <option value="3">Lucas</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect02">Grupo</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option value="" disabled selected>Escolha o Grupo</option>
                                        <option value="1">Fixa</option>
                                        <option value="2">Variavel</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect02">Categoria</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option value="" disabled selected>Escolha a Categoria</option>
                                        <option value="1">Energia</option>
                                        <option value="2">Alimentação</option>
                                        <option value="3">Aluguel</option>
                                    </select>
                                </div>
                                <div class="container">
                                    <div class="input-group mb-3 mx-auto col-md-4 offset-md-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">R$</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Quantia">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Adicionar</button>
                                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>