@include('layouts.header')
@include('layouts.infouser')
@include('layouts.menufooterbuttons')
@include('layouts.menutopnavigation')

		<!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Ficha de Funcionário</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Funcionário</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Settings 1</a>
                                            <a class="dropdown-item" href="#">Settings 2</a>
                                        </div>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form class="form-label-left input_mask" action="{{route('storefuncionario') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="col-md-12 col-sm-12  form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"  name="nome" placeholder="Introduza o Nome..." >
                                        <span class="fa  fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-12 col-sm-12  form-group has-feedback">
                                        <input type="email" class="form-control has-feedback-left"  name="email" placeholder="Introduza o Email...">
                                        <span class="fa fa-envelope-o form-control-feedback left" aria-hidden="true" ></span>
                                    </div>
                                    <div class="col-md-12 col-sm-12  form-group has-feedback">
                                        <input type="number" class="form-control has-feedback-left"  name="idade" placeholder="Introduza a Idade...">
                                        <span class="fa fa-birthday-cake form-control-feedback left" aria-hidden="true" ></span>
                                    </div>
                                    <div class="col-md-12 col-sm-12  form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"  name="morada" placeholder="Introduza a Morada..." >
                                        <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-12 col-sm-12  form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"  name="cidade" placeholder="Introduza a Cidade..." >
                                        <span class="fa fa-building-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-12 col-sm-12  form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"  name="pais" placeholder="Introduza o País..." >
                                        <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-12 col-sm-12  form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"  name="dataempregoinicio" placeholder="Data de Entrada..." data-inputmask="'mask': '9999/99/99'" >
                                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true" ></span>
                                    </div>
                                   <div class="col-md-12 col-sm-12  form-group has-feedback">
                                        <input type="number" class="form-control has-feedback-left" id="inputSuccess2" name="primeiropreco" placeholder="Introduza o valor salarial...">
                                        <span class="fa fa-eur form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-12 col-sm-12  form-group has-feedback">                                       
                                        <select class="form-control has-feedback-left" tabindex="-1" name="idprofissao">
                                        <option>--Selecione--</option>
                                        @foreach($profissoes as $profissao)
                                        <option value="{{$profissao->idprofissao}}">{{$profissao->nomeprofissao}}</option>    
                                        @endforeach 
                                        </select>
                                        <span class="fa fa-suitcase form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-12 col-sm-12  form-group has-feedback">                                       
                                        <select class="form-control has-feedback-left" tabindex="-1" name="iddepartamento">
                                        <option>--Selecione--</option>
                                        @foreach($departamentos as $departamento)
                                        <option value="{{$departamento->iddepartamento}}">{{$departamento->nomedepartamento}}</option>    
                                        @endforeach 
                                        </select>
                                        <span class="fa fa-suitcase form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-12 col-sm-12  form-group has-feedback">                                      
                                        <button type="submit"  class="btn btn-success">Adicionar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('layouts.footer')

</body>
</html>