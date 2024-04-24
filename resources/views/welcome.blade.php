<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembretes</title>
    <!-- Link para o arquivo CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Link para o Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
</head>

<body>
    <!-- Container principal -->
    <div class="cont">
        <!-- Wrapper para adicionar evento -->
        <div class="add-event-wrapper">
            <!-- Cabeçalho do wrapper -->
            <div class="add-event-header">
                <div class="title">Lembretes</div>
                <i class="fas fa-times close"></i>
            </div>
            <!-- Corpo do wrapper -->
            <div class="add-event-body">
                <!-- Campo para o título -->
                <h1 class="enunciado">Título:</h1>
                <div class="add-event-input">
                    <div class="ef_traz"></div>
                    <input type="text" placeholder="Título que será salvo no lembrete" class="event-name" />
                </div>
                <!-- Campo para a descrição -->
                <h1 class="enunciado">Descrição:</h1>
                <div class="add-event-input">
                    <div class="ef_traz"></div>
                    <input type="text" placeholder="Descrição que será salvo no lembrete" class="event-descricao" />
                </div>
                <!-- Campos para o horário -->
                <h1 class="enunciado">Horário:</h1>
                <div class="cont_time">
                    <!-- Início -->
                    <div class="add-event-input time">
                        <div class="ef_traz"></div>
                        <input type="text" placeholder="00:00" class="event-time-from" />
                    </div>
                    <!-- Fim -->
                    <div class="add-event-input time">
                        <div class="ef_traz"></div>
                        <input type="text" placeholder="00:00" class="event-time-to" />
                    </div>
                </div>
                <!-- Adicionar cor e contato -->
                <h1 class="enunciado">Adicionar:</h1>
                <div class="cont_times">
                    <!-- Selecionar cor -->
                    <div class="add-event-input input-cor">
                        <div class="ef_traz bt_cor"></div>
                        <div class="cor_escolhida bt_cor"></div>
                        <input type="button" class="bt_cor" onclick="openModal()" />
                    </div>
                    <!-- Adicionar contato -->
                    <div class="add-event-input input-cont">
                        <div class="cont-user-geral">
                            <div class="cont_conteiner">
                                <div class="ef_traz bt_cont"></div>
                                <input type="button" class="bt_conts" id="bt_conts" value="+" />
                            </div>
                            <div class="selected-users-container" id="selectedUsersContainer"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Rodapé do wrapper -->
            <div class="add-event-footer">
                <button class="add-event-btn">Adicionar Lembrete</button>
                <div class="ef_traz-btn"></div>
            </div>
        </div>

        <!-- Modal para seleção de cor -->
        <div id="modal" class="modal" >
            <div class="modal-content">
                <h2>Selecione uma cor</h2>
                <ul class="color-list">
                    <!-- Opções de cores -->
                    <!-- Adicionei comentários para cada cor -->
                    <li class="color-option" onclick="changeColor('#f74949', 'Red')"><span
                            style="background-color: #f74949;"></span><span>Vermelho</span></li>
                    <li class="color-option" onclick="changeColor('#FF5733', 'Orange')"><span
                            style="background-color: #FF5733;"></span><span>Laranja</span></li>
                    <li class="color-option" onclick="changeColor('#C70039', 'Dark Red')"><span
                            style="background-color: #C70039;"></span><span>Vermelho Escuro</span></li>
                    <li class="color-option" onclick="changeColor('#900C3F', 'Maroon')"><span
                            style="background-color: #900C3F;"></span><span>Marrom</span></li>
                    <li class="color-option" onclick="changeColor('#581845', 'Purple')"><span
                            style="background-color: #581845;"></span><span>Roxo</span></li>
                    <li class="color-option" onclick="changeColor('#1C2833', 'Charcoal')"><span
                            style="background-color: #1C2833;"></span><span>Carvão</span></li>
                    <li class="color-option" onclick="changeColor('#17202A', 'Jet Black')"><span
                            style="background-color: #17202A;"></span><span>Preto</span></li>
                    <li class="color-option" onclick="changeColor('#F4D03F', 'Yellow')"><span
                            style="background-color: #f4d03f;"></span><span>Amarelo</span></li>
                    <li class="color-option" onclick="changeColor('#2ECC71', 'Emerald')"><span
                            style="background-color: #2ECC71;"></span><span>Esmeralda</span></li>
                    <li class="color-option" onclick="changeColor('#3498DB', 'Peter River')"><span
                            style="background-color: #3498DB;"></span><span>Azul</span></li>
                    <li class="color-option" onclick="changeColor('#9B59B6', 'Amethyst')"><span
                            style="background-color: #9B59B6;"></span><span>Amethyst</span></li>
                    <li class="color-option" onclick="changeColor('#E74C3C', 'Alizarin')"><span
                            style="background-color: #E74C3C;"></span><span>Alizarin</span></li>
                </ul>
            </div>
        </div>

        <!-- Modal para pesquisa de pessoa -->
        <div id="modal_pes-pessoa" class="modal mod-pess">
            <div class="modal-content mod-pess-cont">
                <div class="mod-pess-cont-header">
                    <input type="text" id="searchInput" class="mod-pess-input" placeholder="Pesquisar pessoa..." autocomplete="on">
                    <span class="close-modal mod-pess-close">&times;</span>
                </div>
                <div id="pessoasContainer" class="mod-pess-card"></div>
                <div id="selectedUsersContainer" class="mod-pess-user-cont">
                    <strong class="mod-pess-strong">Selecionados:</strong>
                    <ul id="selectedUsersList" class="mod-pess-list"></ul>
                </div>
                
            </div>
        </div>
    </div>


    <!-- Container principal para o calendário -->
    <div class="container">
        <!-- Lado esquerdo: calendário -->
        <div class="left">
            <div class="calendar">
                <!-- Cabeçalho do mês -->
                <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                     <div class="date">dezembro 2015</div><!-- não tem nada com essa div no css -->
                    <i class="fas fa-angle-right next"></i>
                </div>
                <!-- Dias da semana -->
                <div class="weekdays">
                    <div class="semana_dia">Dom</div>
                    <div class="semana_dia">Seg</div>
                    <div class="semana_dia">Ter</div>
                    <div class="semana_dia">Qua</div>
                    <div class="semana_dia">Qui</div>
                    <div class="semana_dia">Sex</div>
                    <div class="semana_dia">Sáb</div>
                </div>
                <!-- Dias do mês -->
                <div class="days"></div>
                <!-- Navegação e botão para ir para hoje -->
                <div class="goto-today">
                    <div class="goto">
                        <input type="text" placeholder="mm/yyyy" class="date-input" />
                        <button class="goto-btn">Go</button>
                    </div>
                    <button class="today-btn">Hoje</button>
                </div>
            </div>
        </div>
        <!-- Lado direito: eventos e adicionar evento -->
        <div class="right">
            <div class="today-date">
                <div class="event-day">Seg</div>
                <div class="event-date">12 de dezembro de 2022</div>
            </div>
            <div class="events"></div>
            <button class="add-event">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>

    <!-- Script JS -->
    <script src="/js/script.js"></script>
</body>

</html>