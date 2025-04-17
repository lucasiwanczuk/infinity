<div class="col-12 py-3">
    <div class="card shadow mb-2">

        <div class="card-header justify-content-between d-sm-flex mb-4">
            <div class="d-flex">
                <h5 class="m-0 font-weight-bold text-primary p-1 mt-1 m-1">Contas a Pagar</h5>
            </div>
            <div class="d-flex">
                <button type="button" class="btn btn-primary aling-items-right" data-toggle="modal" data-target=".bd-example-modal-lg">Adicionar</button>
            </div>
        </div>
        <div class="form shadow">
            <form action="process.php" method="post">
                <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="card">
                                <h4 class="modal-header">Adicionar Despesa</h4>
                                <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputData">Data</label>
                                        </div>
                                        <input type="date" class="form-control" id="inputData" name="data" value="<?php echo date('Y-m-d'); ?>" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="form-control" for="inputGroupSelect01">Grupo</label>
                                        </div>
                                        <select class="custom-select" name="grupo" id="inputGroupSelect01">
                                            <option value="" disabled selected>Escolha o Grupo</option>
                                            <option value="Fixa">Fixa</option>
                                            <option value="Variavel">Variavel</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="form-control" for="inputGroupSelect02">Categoria</label>
                                        </div>
                                        <select class="custom-select" name="categoria" id="inputGroupSelect02">
                                            <option value="" disabled selected>Escolha a Categoria</option>
                                            <option value="Aluguel">Aluguel</option>
                                            <option value="Cartão de crédito">Cartão de crédito</option>
                                            <option value="Crediario">Crediario</option>
                                            <option value="Internet">Internet</option>
                                            <option value="Farmácia">Farmácia</option>
                                            <option value="Energia">Energia</option>
                                            <option value="Emprestimo">Empréstimo</option>
                                            <option value="Mercado">Mercado</option>
                                            <option value="Pet">Pet</option>
                                            <option value="Terapia">Terapia</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="form-control" for="inputGroupSelect03">Destino</label>
                                        </div>
                                        <select class="custom-select" name="destino" id="inputGroupSelect03">
                                            <option value="" disabled selected>Escolha o Destino</option>
                                            <option value="ASUN">ASUN</option>
                                            <option value="DIA %">DIA %</option>
                                            <option value="Farmácia">Farmácia</option>
                                            <option value="Voa">Voa</option>
                                            <option value="BOB Marley">BOB Marley</option>
                                            <option value="Nubank">Nubank</option>
                                            <option value="PicPay">PicPay</option>
                                            <option value="Voa">Voa</option>
                                            <option value="RGE">RGE</option>
                                            <option value="Dani">Dani</option>
                                            <option value="Salete">Salete</option>
                                            <option value="Estela">Estela</option>
                                            <option value="Lebes">Lebes</option>
                                            <option value="Nubank">Pecuária</option>
                                        </select>
                                    </div>
                                    <div class="div mb-1">
                                        <div class="input-group mb-3 mx-auto col-md-4 offset-md-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-number p-2" id="inputSelecValor">R$</span>
                                            </div>
                                            <input type="number" class="form-control py-3 col-mb-2" name="valor" id="inputSelecValor" aria-label="Quantia">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Adicionar</button>
                                        <button type="button" class="btn btn-secondary btn-lg btn-block" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body table">
            <?php include '../tableContasPagar.php'; ?>
        </div>
    </div>
</div>