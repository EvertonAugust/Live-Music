<div class="modal fade" id="modalbanda" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <!--Cadastro-->

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="modal-body-banda p-5 img d-flex color-1 text-center d-flex align-items-center">
                        <div class="text w-100">
                            <span class="icon-2 ion-ios-beer"></span>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="modal-body-banda p-5 img d-flex align-items-center color-2">
                        <div class="text w-100 py-0 py-md-5">
                            <h3 class="mb-4">Cadastre-se</h3>
                            <form action="#" class="signup-form">

                                <div class="form-group mb-3">
                                    <label class="label" for="email">Nome da banda/solista</label>
                                    <input type="text" class="form-control" placeholder="Digite o nome da banda/solista">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">E-mail</label>
                                    <input type="text" class="form-control" placeholder="Digite seu e-mail de contato">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Quantidade de integrantes</label>
                                    <input type="number" class="form-control" placeholder="Digite a quantidade de integrantes">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="estilo-musical" class="label">Estilo Musical</label><br>
                                    <select style="font-size:15px ;background-color:transparent ;border:0;font-weight:bold ;color:white;" name="estilo-musical" id="estilo-musical">
                                        <option class="select-cadastro" value="mpb">MPB</option>
                                        <option class="select-cadastro" value="sertanejo">Sertanejo</option>
                                        <option class="select-cadastro" value="rock">Rock</option>
                                        <option class="select-cadastro" value="samba">Samba</option>
                                    </select>

                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Cep</label>
                                    <input type="text" onkeypress="$(this).mask('00.000-000')" class="form-control" placeholder="Digite seu Cep">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Rua</label>
                                    <input type="text" class="form-control" placeholder="Digite o nome da sua rua">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Número</label>
                                    <input type="number" class="form-control" placeholder="Digite o número do seu endereço">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Bairro</label>
                                    <input type="text" class="form-control" placeholder="Digite o nome do seu bairro">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Complemento</label>
                                    <input type="text" class="form-control" placeholder="Digite o complemento">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Cidade</label>
                                    <input type="text" class="form-control" placeholder="Digite o seu município">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="estilo-musical" class="label">Estado</label><br>
                                    <select style="font-size:15px ;background-color:transparent ;border:0;font-weight:bold ;color:white;" name="estado" id="estado">
                                        <option class="select-cadastro" value="AC">Acre</option>
                                        <option class="select-cadastro" value="AL">Alagoas</option>
                                        <option class="select-cadastro" value="AP">Amapá</option>
                                        <option class="select-cadastro" value="AM">Amazonas</option>
                                        <option class="select-cadastro" value="BA">Bahia</option>
                                        <option class="select-cadastro" value="CE">Ceará</option>
                                        <option class="select-cadastro" value="DF">Distrito Federal</option>
                                        <option class="select-cadastro" value="ES">Espírito Santo</option>
                                        <option class="select-cadastro" value="GO">Goiás</option>
                                        <option class="select-cadastro" value="MA">Maranhão</option>
                                        <option class="select-cadastro" value="MT">Mato Grosso</option>
                                        <option class="select-cadastro" value="MS">Mato Grosso do Sul</option>
                                        <option class="select-cadastro" value="MG">Minas Gerais</option>
                                        <option class="select-cadastro" value="PA">Pará</option>
                                        <option class="select-cadastro" value="PB">Paraíba</option>
                                        <option class="select-cadastro" value="PR">Paraná</option>
                                        <option class="select-cadastro" value="PE">Pernambuco</option>
                                        <option class="select-cadastro" value="PI">Piauí</option>
                                        <option class="select-cadastro" value="RJ">Rio de Janeiro</option>
                                        <option class="select-cadastro" value="RN">Rio Grande do Norte</option>
                                        <option class="select-cadastro" value="RS">Rio Grande do Sul</option>
                                        <option class="select-cadastro" value="RO">Rondônia</option>
                                        <option class="select-cadastro" value="RR">Roraima</option>
                                        <option class="select-cadastro" value="SC">Santa Catarina</option>
                                        <option class="select-cadastro" value="SP">São Paulo</option>
                                        <option class="select-cadastro" value="SE">Sergipe</option>
                                        <option class="select-cadastro" value="TO">Tocantins</option>
                                        <option class="select-cadastro" value="EX">Estrangeiro</option>
                                    </select>

                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="form-check w-100 text-left">
                                        <label class="custom-control fill-checkbox">
                                            <input type="checkbox" class="fill-control-input">
                                            <span class="fill-control-indicator"></span>
                                            <span class="fill-control-description">Eu aceito</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Cadastrar</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>