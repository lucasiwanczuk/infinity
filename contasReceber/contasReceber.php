<div class="col-12 py-3">
    <div class="card shadow mb-2">

        <div class="card-header justify-content-between d-sm-flex mb-4">
            <div class="d-flex">
                <h5 class="m-0 font-weight-bold text-primary p-1 mt-1 m-1">Contas a Receber</h5>
            </div>
            <div class="d-flex">
                <button type="button" class="btn btn-primary aling-items-right" data-toggle="modal" data-target=".bd-example-modal-lg">Adicionar</button>
            </div>
        </div>
        <div class="form shadow">
            <form action="processReceita.php" method="post">
                <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="card">
                                <h4 class="modal-header">Adicionar Receita</h4>
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
                                            <option value="Investimentos">Investimentos</option>
                                            <option value="Salário">Salário</option>
                                            <option value="Salário Extra">Salário Extra</option>
                                            <option value="Vale Alimentação">Vale Alimentação</option>
                                            <option value="Locação Imóvel">Locação Imóvel</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="form-control" for="inputGroupSelect03">Destino</label>
                                        </div>
                                        <select class="custom-select" name="destino" id="inputGroupSelect03">
                                            <option value="" disabled selected>Escolha o Destino</option>
                                            <option value="Lucas/Gisele">Lucas/Gisele</option>
                                            <option value="Elisabeth">Elisabeth</option>
                                            <option value="Konfeita">Konfeita</option>
                                            <option value="Corretora">Corretora</option>
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
            <?php
            // Conectar ao banco de dados (substitua com suas configurações)
            $host = "177.126.159.93";
            $port = "5432";
            $dbname = "zabbix";
            $user = "zabbix";
            $password = "zabbix";

            // Tenta criar uma conexão PDO
            try {
                $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
                // Configura o PDO para lançar exceções em caso de erros
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Conexão falhou: " . $e->getMessage());
            }

            // Consulta para recuperar os dados das despesas
            $query = "SELECT * FROM transacoes WHERE tipo LIKE '%Receita%' ORDER BY data DESC;";
            $result = $conn->query($query);

            if ($result) {
                echo '<div class="display">
            <table class="table table-striped table-bordered style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Data</th>
                        <th scope="col">Grupo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Destino</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>';

                foreach ($result as $row) {
                    echo '<tr>';
                    echo '<th scope="row">' . $row['id'] . '</th>';
                    echo '<td>' . $row['data'] . '</td>';
                    echo '<td>' . $row['grupo'] . '</td>';
                    echo '<td>' . $row['categoria'] . '</td>';
                    echo '<td>' . $row['destino'] . '</td>';
                    echo '<td>R$ ' . $row['valor'] . '</td>';
                    echo '</tr>';
                }

                echo '</tbody>
        </table>
    </div>';
            } else {
                echo "Erro ao recuperar os dados do banco de dados.";
            }

            // ... (fechar a conexão ao banco de dados)
            $conn = null;
            ?>
        </div>
    </div>
</div>