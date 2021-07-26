@extends('site.desafio.layouts.app')
@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('css/login.css') }}" media="screen,projection" />
@stop



@section('content')
<form action="{{route('analyze.form.store',$challenge->id)}}" method="POST">
@csrf
<div class="row">
    <div class="col s12">
        <div id="input-fields" class="card card-tabs">
            <div class="card-content">
                <div class="card-title">
                    <div class="row">
                        <div class="col s12 m6 l10">
                            <h4 class="card-title">Formulário Final</h4>
                            Responda às perguntas abaixo para avaliação da rotina:

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12">
        <div id="input-fields" class="card card-tabs">
            <div class="card-content">
                <div class="card-title">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h4 class="card-title ">
                                Você possui um Ritual do Bom Dia bem estabelecido?
                            </h4>
                            <select name="ritualBomDia">
                                <option value="S">SIM</option>
                                <option value="N">NÃO</option>
                            </select>
                        </div>
                    
                        <div class="col s12 m6 l6">
                            <h4 class="card-title ">
                                Quais critérios você cumpre do Ritual do Bom Dia:
                            </h4>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="ritual_luz" />
                                    <span>Só expõe à luz durante/após o ritual.</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="ritual_ruido" />
                                    <span>Só expõe aos ruídos durante/após o ritual.</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="ritual_estimulo" />
                                    <span>Só expõe aos estímulos durante/após o ritual.</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="ritual_retira" />
                                    <span>Só retira do ambiente após ritual.n</span>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h4 class="card-title ">
                                O seu Bebê está passando por Salto de Desenvolvimento?
                            </h4>
                            <select name="salto">
                                <option value="S">SIM</option>
                                <option value="N">NÃO</option>
                                <option value="NS">NÃO SEI</option>
                            </select>
                        </div>
                    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12">
        <div id="input-fields" class="card card-tabs">
            <div class="card-content">
                <div class="card-title">
                    <div class="row">
                        <h4 class="card-title ">
                            ROTINA ALIMENTAR
                        </h4>
                        <div class="col s12 m6 l6">

                            Qual dessas opções mais se encaixa com a rotina alimentar do seu bebê?
                            <select name="rotinaAlimentar">
                                <option value="1">Aleitamento Materno Exclusivo</option>
                                <option value="2">Uso exclusivo de Fórmulas Infantis</option>
                                <option value="3">Aleitamento Materno + Uso de Fórmulas Infantis</option>
                                <option value="4">Introdução Alimentar + Aleitamento Materno.</option>
                                <option value="5">Introdução Alimentar + Uso de Fórmulas Infantis</option>
                                <option value="6">Introdução Alimentar + Aleitamento Materno + Uso de Fórmulas Infantis</option>
                            </select>
                        </div>
                        <div class="col s12 m6 l6">
                            Possui alguma dificuldade com Rotina Alimentar? <select name="dificuldadeRotinaAlimentar">
                                <option value="S">SIM</option>
                                <option value="N">NÃO</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col s12 m6 l6">

                            Qual o ganho de peso do bebê em gramas, nos ultimos 30 dias?
                            <select name="ganhoPeso">
                                <option value="N">NÃO SEI</option>
                                <option value="100">Por volta de 100 gramas</option>
                                <option value="200">Por volta de 200 gramas</option>
                                <option value="300">Por volta de 300 gramas</option>
                                <option value="400">Por volta de 400 gramas</option>
                                <option value="500">Por volta de 500 gramas</option>
                                <option value="600">Por volta de 600 gramas</option>
                                <option value="700">Por volta de 700 gramas</option>
                                <option value="800">Por volta de 800 gramas</option>
                                <option value="900">Por volta de 900 gramas</option>
                                <option value="1000">Por volta de 1000 gramas</option>
                                <option value="1100">Por volta de 1100 gramas</option>
                                <option value="1200">Por volta de 1200 gramas</option>
                                <option value="1300">Por volta de 1300 gramas</option>
                                <option value="1400">Por volta de 1400 gramas</option>
                                <option value="1500">Por volta de 1500 gramas</option>
                                <option value="1600">Mais de 1500 gramas</option>
                            </select>
                        </div>
                        <div class="col s12 m6 l6">
                            Obstáculos da rotina alimentar:
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="obstaculos_colica" />
                                    <span>Cólicas</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="obstaculos_refluxo" />
                                    <span>Refluxo</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="obstaculos_gases" />
                                    <span>Gases</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="obstaculos_APLV" />
                                    <span>APLV</span>
                                </label>
                            </p>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
    <div class="col s12">
        <div id="input-fields" class="card card-tabs">
            <div class="card-content">
                <div class="card-title">
                    <div class="row">
                        <h4 class="card-title ">
                            ROTINA DE SONECAS
                        </h4>
                        <div class="col s12 m6 l6">

                            Como está o gasto energético do seu bebê no tempo acordado?
                            <select name="gastoEnergia">
                                <option value="Adequado">Adequado</option>
                                <option value="Inadequado">Inadequado</option>
                                <option value="Nao_sabe">Não Sei</option>
                            </select>
                        </div>
                        <div class="col s12 m6 l6">
                            Você consegue perceber os sinais emitidos?
                            <select name="sinaisSono">
                                <option value="S">SIM</option>
                                <option value="N">NÃO</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col s12 m6 l6">
                            Você lembrou de “desacelerar" após perceber os sinais de sono?
                            <select name="desacelera">
                                <option value="S">SIM</option>
                                <option value="N">NÃO</option>
                            </select>
                        </div>
                        <div class="col s12 m6 l6">
                            É um ritual de sonecas tranquilo ou há choro envolvido?
                            <select name="ritualSonecasChoro">
                                <option value="Sem">Sem choro</option>
                                <option value="Com">Com choro</option>
                                <option value="Eventualmente">Eventualmente com choro</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col s12 m6 l6">
                            Como está seu ambiente de sonecas? Luzes?
                            <select name="soneca_luzes">
                                <option value="T">Totalmente escuro</option>
                                <option value="P">Parcialmente escuro (Quando as barreiras não vedam 100%)</option>
                                <option value="C">Ambiente claro</option>
                            </select>
                        </div>
                        <div class="col s12 m6 l6">
                            Como está seu ambiente de sonecas? Ruídos?
                            <select name="soneca_ruidos">
                                <option value="S">Silencioso (com ou sem a ajuda de música ou ruído branco)</option>
                                <option value="P">Parcialmente silencioso (quando não é capaz de isolar 100%)</option>
                                <option value="C">Com ruídos</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col s12 m6 l6">
                            Como está seu ambiente de sonecas? Temperatura?
                            <select name="soneca_temperatura" class="">
                                <option value="A">Adequada (variável, mas aproximadamente 24ºC)</option>
                                <option value="C">Calor</option>
                                <option value="F">Frio</option>
                                <option value="N">Não sei</option>
                            </select>
                        </div>
                        <div class="col s12 m6 l6">
                            Onde dorme? (Pode ser mais de uma opção)
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="soneca_acordado_berco" />
                                    <span>Levado acordado ao berço</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="soneca_dorme_colo_berco" />
                                    <span>Adormece no colo e é levado ao berço</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="soneca_dorme_colo" />
                                    <span>Adormece e dorme toda a soneca no colo</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="soneca_cama_compartilhada" />
                                    <span>Cama compartilhada
                                    </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="soneca_carrinho" />
                                    <span>Carrinho/Bebê conforto
                                    </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="soneca_rede" />
                                    <span>Rede
                                    </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="soneca_outro" />
                                    <span>Outro
                                    </span>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col s12 m6 l6">
                            O local das sonecas te incomoda?
                            <select name="soneca_local_incomoda">
                                <option value="S">SIM</option>
                                <option value="N">NÃO</option>

                            </select>
                        </div>
                        <br>
                        <div class="col s12 m6 l6">
                            Possui mais alguma associação? (Pode ser mais de uma opção)
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="associacao_soneca_ruido_branco" />
                                    <span>Ruído branco</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="associacao_soneca_naninha" />
                                    <span>Naninha</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="associacao_soneca_chupeta" />
                                    <span>Chupeta</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="associacao_soneca_chupar_dedo" />
                                    <span>Chupar dedo
                                    </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="associacao_soneca_mamar" />
                                    <span>Mamar para dormir
                                    </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="associacao_soneca_outro" />
                                    <span>Outro
                                    </span>
                                </label>
                            </p>
                        </div>
                        <div class="row">

                            <div class="col s12 m6 l6">
                                Acha que essa duração tem sido suficiente pra ele?
                                <select name="soneca_suficiente">
                                    <option value="S">SIM</option>
                                    <option value="N">NÃO</option>

                                </select>
                            </div>
                            <br>
                            <div class="col s12 m6 l6">
                                Como seu bebê costuma acordar das sonecas?
                                <select name="soneca_acorda" class="">
                                    <option value="A">Sempre alegre e disposto</option>
                                    <option value="ES">Eventualmente acorda ainda com sono</option>
                                    <option value="FS">Frequentemente acorda ainda com sono</option>
                                </select>
                            </div>
                        </div>
                        <br>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12">
        <div id="input-fields" class="card card-tabs">
            <div class="card-content">
                <div class="card-title">
                    <div class="row">
                        <h4 class="card-title ">
                            RITUAL NOTURNO
                        </h4>

                        <div class="col s12 m6 l6">
                            Você faz um ritual para o sono noturno?
                            <select name="ritaualNoturno">
                                <option value="S">SIM</option>
                                <option value="N">NÃO</option>
                            </select>
                        </div>
                        <div class="col s12 m6 l6">
                            Como está seu ambiente do sono noturno? Luzes?
                            <select name="sn_luzes" class="">
                                <option value="E">Totalmente escuro</option>
                                <option value="P">Parcialmente escuro (Quando as barreiras não vedam 100%)</option>
                                <option value="C">Ambiente claros</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">


                        <div class="col s12 m6 l6">
                            Como está seu ambiente do sono noturno? Ruídos?
                            <select name="sn_ruidos" class="">
                                <option value="S">Silencioso (com ou sem a ajuda de música ou ruído branco)</option>
                                <option value="P">Parcialmente silencioso (quando não é capaz de isolar 100%)</option>
                                <option value="C">Com ruídos</option>
                            </select>
                        </div>

                        <div class="col s12 m6 l6">
                            Como está seu ambiente do sono noturno? Temperatura?
                            <select name="sn_temperatura" class="">
                                <option value="A">Adequada (variável, mas aproximadamente 24ºC)</option>
                                <option value="C">Calor</option>
                                <option value="F">Frio</option>
                                <option value="N">Não sei</option>
                            </select>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                    <div class="col s12 m6 l6">
                            Possui mais alguma associação no sono soturno? (Pode ser mais de uma opção)
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="associacao_noturno_ruido_branco" />
                                    <span>Ruído branco</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="associacao_noturno_naninha" />
                                    <span>Naninha</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="associacao_noturno_chupeta" />
                                    <span>Chupeta</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="associacao_noturno_chupar_dedo" />
                                    <span>Chupar dedo
                                    </span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="associacao_noturno_mamar" />
                                    <span>Mamar para dormir
                                    </span>
                                </label>
                            </p>

                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="associacao_noturno_outro" />
                                    <span>Outro
                                    </span>
                                </label>
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="col s12">
        <div id="input-fields" class="card card-tabs">
            <div class="card-content">
                <div class="card-title">
                    <div class="row">
                        <h4 class="card-title ">
                            CONCLUSÃO
                        </h4>

                        <div class="col s12 m6 l6">
                        Quais as possíveis causas para os despertares do seu bebê?
                        <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="conclusao_imaturidade" />
                                    <span>Imaturidade</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="conclusao_fome" />
                                    <span>Fome</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="conclusao_dor" />
                                    <span>Dor</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="conclusao_salto" />
                                    <span>Salto de Desenvolvimento</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="conclusao_angustia" />
                                    <span>Angústia da separação</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="conclusao_telas" />
                                    <span>Telas</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" value="S" name="conclusao_estresse" />
                                    <span>Estresse excessivo da mãe</span>
                                </label>
                            </p>
                            
                        </div>
                        
                    </div>
                    <br>
                    


                </div>
            </div>
        </div>
    </div>
    <div class="col s12">
    <div id="input-fields" class="card card-tabs">
            <div class="card-content">
                <div class="card-title">
        <button class="btn" type="submit">Enviar</button>
                </div>
            </div>
    </div>
</div>
</form>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('select').formSelect();
    });
</script>
@endsection