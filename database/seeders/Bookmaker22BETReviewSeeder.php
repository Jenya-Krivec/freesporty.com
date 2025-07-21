<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
             'value_en' => '{"0":"22BET Review"}',
             'value_es' => '{"0":"Reseña de 22BET"}',
             'value_fr' => '{"0":"Avis sur 22BET"}',
             'value_pt' => '{"0":"Análise da 22BET"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET is an international betting company that has been operating since 2017. Since then, the bookmaker has shown steady growth and popularity among players worldwide, particularly in Eastern Europe, South Asia, Latin America, and Africa. The company is owned by TechSolutions Group N.V. and operates under a Curaçao license."}',
             'value_es' => '{"0":"22BET es una casa de apuestas internacional que opera desde 2017. Desde entonces, el operador ha mostrado un crecimiento constante y una creciente popularidad entre los jugadores de todo el mundo, especialmente en Europa del Este, Asia del Sur, América Latina y África. La empresa pertenece a TechSolutions Group N.V. y opera bajo una licencia de Curazao."}',
             'value_fr' => '{"0":"22BET est un bookmaker international qui opère depuis 2017. Depuis sa création, le site connaît une croissance constante et gagne en popularité auprès des joueurs du monde entier, notamment en Europe de l\'Est, en Asie du Sud, en Amérique latine et en Afrique. L\'entreprise appartient à TechSolutions Group N.V. et opère sous licence de Curaçao."}',
             'value_pt' => '{"0":"A 22BET é uma casa de apostas internacional que opera desde 2017. Desde então, tem demonstrado um crescimento constante e ganhado popularidade entre os jogadores de todo o mundo, especialmente na Europa Oriental, Sul da Ásia, América Latina e África. A empresa pertence à TechSolutions Group N.V. e opera sob licença de Curaçau."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET is trusted by millions of users thanks to its wide selection of sports events, generous bonus programs, flexible payment system, and user-friendly mobile interface. The platform is available in over 50 languages, making it accessible to almost every player regardless of their location."}',
             'value_es' => '{"0":"22BET cuenta con la confianza de millones de usuarios gracias a su amplia oferta de eventos deportivos, programas de bonificación atractivos, un sistema de pagos flexible y una interfaz móvil cómoda. La plataforma está disponible en más de 50 idiomas, lo que la hace accesible para casi cualquier usuario, sin importar su ubicación."}',
             'value_fr' => '{"0":"22BET bénéficie de la confiance de millions d’utilisateurs grâce à son large choix d’événements sportifs, ses programmes de bonus attractifs, son système de paiement flexible et son interface mobile conviviale. La plateforme est disponible en plus de 50 langues, ce qui la rend accessible à presque tous les joueurs, peu importe leur localisation."}',
             'value_pt' => '{"0":"A 22BET é confiada por milhões de utilizadores graças à sua ampla seleção de eventos desportivos, programas de bónus generosos, sistema de pagamentos flexível e interface móvel intuitiva. A plataforma está disponível em mais de 50 idiomas, tornando-se acessível a praticamente qualquer jogador, independentemente da sua localização."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The sports section of 22BET is one of the largest areas of the platform, covering both popular and lesser-known disciplines. Every day, more than a thousand events are available, and in total, over 40 sports categories can be found. These include football, basketball, hockey, tennis, baseball, American football, boxing, motorsports, cricket, snooker, darts, handball, water polo, table tennis, and more."}',
             'value_es' => '{"0":"La sección deportiva de 22BET es una de las más grandes de la plataforma, que abarca tanto disciplinas populares como secundarias. Cada día se ofrecen más de mil eventos, y en total se pueden encontrar más de 40 categorías deportivas. Entre ellas se incluyen: fútbol, baloncesto, hockey, tenis, béisbol, fútbol americano, boxeo, deportes de motor, críquet, snooker, dardos, balonmano, waterpolo, tenis de mesa, entre otras."}',
             'value_fr' => '{"0":"La section sportive de 22BET est l’une des plus vastes de la plateforme, couvrant à la fois les disciplines populaires et secondaires. Chaque jour, plus de mille événements sont proposés, avec au total plus de 40 catégories sportives disponibles. Parmi elles : football, basketball, hockey, tennis, baseball, football américain, boxe, sports mécaniques, cricket, snooker, fléchettes, handball, water-polo, tennis de table, et bien d\'autres."}',
             'value_pt' => '{"0":"A seção de esportes da 22BET é uma das maiores da plataforma, cobrindo tanto disciplinas populares quanto secundárias. Diariamente, estão disponíveis mais de mil eventos, e no total é possível encontrar mais de 40 categorias esportivas. Entre elas estão: futebol, basquete, hóquei, tênis, beisebol, futebol americano, boxe, automobilismo, críquete, sinuca, dardos, handebol, polo aquático, tênis de mesa, entre outras."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Particular attention is paid to national and regional leagues. For example, in the football section, you can find matches from Turkey’s third division or the Ethiopian championship."}',
             'value_es' => '{"0":"Se presta especial atención a las ligas nacionales y regionales. Por ejemplo, en la sección de fútbol es posible encontrar partidos de la tercera división de Turquía o del campeonato de Etiopía."}',
             'value_fr' => '{"0":"Une attention particulière est accordée aux ligues nationales et régionales. Par exemple, dans la section football, on peut trouver des matchs de la troisième division turque ou du championnat d’Éthiopie."}',
             'value_pt' => '{"0":"A casa dá atenção especial às ligas nacionais e regionais. Por exemplo, na seção de futebol, é possível encontrar partidas da terceira divisão da Turquia ou do campeonato da Etiópia."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The platform also features a wide esports section, offering dozens of disciplines — from major tournaments in CS:GO, Dota 2, Valorant, and League of Legends to lesser-known games such as Arena of Valor and Mobile Legends."}',
             'value_es' => '{"0":"La plataforma también cuenta con una amplia sección de deportes electrónicos, que incluye decenas de disciplinas: desde grandes torneos de CS:GO, Dota 2, Valorant y League of Legends hasta juegos menos conocidos como Arena of Valor o Mobile Legends."}',
             'value_fr' => '{"0":"La plateforme propose également une large section e-sport, avec des dizaines de disciplines : des grands tournois de CS:GO, Dota 2, Valorant et League of Legends aux jeux moins connus comme Arena of Valor ou Mobile Legends."}',
             'value_pt' => '{"0":"A plataforma também conta com uma ampla seção de eSports, incluindo dezenas de disciplinas — desde grandes torneios de CS:GO, Dota 2, Valorant e League of Legends até jogos menos conhecidos como Arena of Valor e Mobile Legends."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"One of the key factors that makes 22BET attractive to professional bettors is its odds policy. For the most popular markets — such as top football leagues, tennis tournaments, the NBA, and the NHL — the bookmaker offers odds that exceed those of competitors by up to 0.15 points, which can make a significant difference when betting thousands of dollars."}',
             'value_es' => '{"0":"Uno de los factores clave que hace que 22BET sea atractivo para los apostadores profesionales es su política de cuotas. En los mercados más populares, como las principales ligas de fútbol, los torneos de tenis, la NBA y la NHL, la casa de apuestas ofrece cuotas que superan a las de la competencia por hasta 0.15 puntos, lo que puede marcar una gran diferencia cuando se apuesta con miles de dólares."}',
             'value_fr' => '{"0":"L’un des principaux atouts qui rend 22BET attractif pour les parieurs professionnels est sa politique de cotes. Pour les marchés les plus populaires — comme les grandes ligues de football, les tournois de tennis, la NBA et la NHL — le bookmaker propose des cotes supérieures à celles de ses concurrents, allant jusqu’à 0,15 point de plus, ce qui peut faire une réelle différence lorsqu’on mise des milliers de dollars."}',
             'value_pt' => '{"0":"Um dos principais fatores que torna a 22BET atraente para apostadores profissionais é a sua política de odds. Para os mercados mais populares — como as principais ligas de futebol, torneios de tênis, NBA e NHL — a casa oferece odds que superam as dos concorrentes em até 0,15 pontos, o que pode fazer uma grande diferença quando se aposta valores de milhares de dólares."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"For lower-profile matches, the odds may be slightly lower. Overall, 22BET provides competitive odds that, when used wisely, can significantly increase your potential winnings."}',
             'value_es' => '{"0":"En los partidos de menor perfil, las cuotas pueden ser un poco más bajas. En general, 22BET ofrece cuotas competitivas que, si se aprovechan correctamente, pueden aumentar significativamente sus ganancias."}',
             'value_fr' => '{"0":"Pour les matchs moins en vue, les cotes peuvent être légèrement inférieures. Globalement, 22BET propose des cotes compétitives qui, bien utilisées, peuvent considérablement augmenter vos gains potentiels."}',
             'value_pt' => '{"0":"Em partidas de menor relevância, as odds podem ser um pouco mais baixas. No geral, a 22BET oferece cotações competitivas que, quando utilizadas estrategicamente, podem aumentar significativamente seus lucros."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET offers up to 1,300 betting options for popular football matches. These include standard markets like totals and handicaps, as well as individual player statistics (shots, assists, fouls), corners, and cards. There are also combo bets such as «win + both teams to score»."}',
             'value_es' => '{"0":"22BET ofrece hasta 1.300 opciones de apuesta en los partidos de fútbol más populares. Hay mercados estándar como totales y hándicaps, así como estadísticas individuales de jugadores (disparos, asistencias, faltas), córners y tarjetas. También se pueden hacer apuestas combinadas como «victoria + ambos marcan»."}',
             'value_fr' => '{"0":"22BET propose jusqu’à 1 300 options de pari sur les matchs de football populaires. Vous y trouverez des marchés classiques comme les totaux et les handicaps, mais aussi des statistiques individuelles des joueurs (tirs, passes décisives, fautes), les corners et les cartons. Des paris combinés sont également disponibles, comme «victoire + les deux équipes marquent»."}',
             'value_pt' => '{"0":"A 22BET oferece até 1.300 opções de apostas para partidas populares de futebol. Há mercados padrão como totais e handicaps, além de estatísticas individuais dos jogadores (chutes, assistências, faltas), escanteios e cartões. Também é possível fazer apostas combinadas, como «vitória + ambas as equipes marcam»."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Thousands of live events are available on the platform every week. Each event features an interactive panel displaying the event timeline, odds changes, and real-time match updates."}',
             'value_es' => '{"0":"Cada semana, miles de eventos en vivo están disponibles en la plataforma. Para cada uno, hay un panel interactivo que muestra la cronología del partido, cambios en las cuotas y actualizaciones en tiempo real."}',
             'value_fr' => '{"0":"Des milliers d’événements en direct sont disponibles chaque semaine sur la plateforme. Chaque événement dispose d’un panneau interactif affichant la chronologie, les variations de cotes et les mises à jour du match en temps réel."}',
             'value_pt' => '{"0":"Milhares de eventos ao vivo estão disponíveis na plataforma todas as semanas. Cada evento conta com um painel interativo que exibe a linha do tempo da partida, alterações nas odds e atualizações em tempo real."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Odds are updated almost instantly. During high-impact moments — such as penalties or goals — the system quickly blocks betting, and once the event is confirmed, you can place bets again at the updated odds."}',
             'value_es' => '{"0":"Las cuotas se actualizan prácticamente sin retraso. En momentos de alta tensión, como penaltis o goles, el sistema bloquea temporalmente las apuestas, y tras confirmarse el evento, se puede apostar nuevamente con las nuevas cuotas."}',
             'value_fr' => '{"0":"Les cotes sont actualisées presque instantanément. Lors de moments critiques, comme un penalty ou un but, le système bloque temporairement les paris ; une fois l’action confirmée, vous pouvez parier à nouveau avec les nouvelles cotes."}',
             'value_pt' => '{"0":"As odds são atualizadas quase instantaneamente. Durante momentos decisivos — como pênaltis ou gols — o sistema bloqueia temporariamente as apostas, e após a confirmação do evento, você pode apostar novamente com as novas odds."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The «one-click bet» feature allows you to instantly place a wager without confirmation. Full cashout is also available, letting you close your bet before the event ends."}',
             'value_es' => '{"0":"Está disponible la función de «apuesta con un clic», que permite hacer una apuesta instantáneamente sin confirmación. También se ofrece la opción de cashout completo, lo que permite cerrar una apuesta antes de que finalice el evento."}',
             'value_fr' => '{"0":"La fonction «pari en un clic» permet de placer une mise immédiatement sans confirmation. Le cashout intégral est également disponible, vous permettant de clôturer un pari avant la fin du match."}',
             'value_pt' => '{"0":"Está disponível o recurso de «aposta com um clique», que permite fazer uma aposta imediatamente sem confirmação. O cashout total também está disponível, permitindo encerrar a aposta antes do fim do evento."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Іспанська: Apuestas en Vivo"}',
                'value_fr' => '{"0":"Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Thousands of live events are available on the platform every week. Each comes with an interactive panel that includes a timeline of events, odds changes, and real-time match status updates."}',
             'value_es' => '{"0":"Cada semana hay miles de eventos en vivo disponibles en la plataforma. Cada uno cuenta con un panel interactivo que incluye una cronología de eventos, cambios en las cuotas y actualizaciones en tiempo real del estado del partido."}',
             'value_fr' => '{"0":"Des milliers d’événements en direct sont disponibles chaque semaine sur la plateforme. Chacun est accompagné d’un panneau interactif incluant la chronologie des événements, les variations des cotes et les mises à jour en temps réel du statut du match."}',
             'value_pt' => '{"0":"Milhares de eventos ao vivo estão disponíveis na plataforma todas as semanas. Cada um possui um painel interativo com linha do tempo, alterações nas odds e atualizações em tempo real do status da partida."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Odds are updated almost instantly. During high-intensity moments—like a penalty or goal—the system temporarily blocks betting, and once the event is confirmed, you can place bets again at updated odds."}',
             'value_es' => '{"0":"Las cuotas se actualizan casi sin retraso. En momentos de alta intensidad, como un penalti o un gol, el sistema bloquea temporalmente las apuestas, y tras confirmarse el evento, se puede apostar nuevamente con cuotas actualizadas."}',
             'value_fr' => '{"0":"Les cotes sont mises à jour presque instantanément. Lors de moments à forte intensité, comme un penalty ou un but, le système bloque temporairement les paris, puis les réactive avec les nouvelles cotes une fois l’événement confirmé."}',
             'value_pt' => '{"0":"As odds são atualizadas praticamente sem atraso. Durante momentos de alta intensidade — como um pênalti ou um gol — o sistema bloqueia temporariamente as apostas, e após a confirmação do evento, é possível apostar novamente com odds atualizadas."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The «one-click bet» feature allows users to place a wager instantly without confirmation. A full cashout option is also available, enabling users to close their bets before the event ends."}',
             'value_es' => '{"0":"La función de «apuesta con un clic» permite realizar apuestas al instante sin necesidad de confirmación. También se ofrece la opción de cobro total (cashout), lo que permite cerrar la apuesta antes de que finalice el evento."}',
             'value_fr' => '{"0":"La fonction de « pari en un clic » permet de placer une mise instantanément sans confirmation. Une option de cashout complet est également disponible, permettant de clôturer le pari avant la fin de l’événement."}',
             'value_pt' => '{"0":"Está disponível a função de «aposta com um clique», que permite fazer apostas instantaneamente sem confirmação. Também há a opção de cashout completo, permitindo encerrar a aposta antes do fim do evento."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Unlike some other top-tier bookmakers, 22BET currently does not offer a full live video streaming service for major sports events. This is certainly a drawback."}',
             'value_es' => '{"0":"A diferencia de otras casas de apuestas de primer nivel, 22BET actualmente no ofrece un servicio completo de transmisión en vivo para los principales eventos deportivos. Esto, sin duda, es una desventaja."}',
             'value_fr' => '{"0":"Contrairement à certains autres bookmakers de premier plan, 22BET ne propose actuellement pas de véritable service de streaming vidéo en direct pour les grands événements sportifs. C’est sans aucun doute un inconvénient."}',
             'value_pt' => '{"0":"Ao contrário de algumas outras casas de apostas de topo, a 22BET atualmente não oferece um serviço completo de streaming ao vivo para os principais eventos esportivos. Isso é, sem dúvida, uma desvantagem."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"However, the bookmaker provides a detailed event timeline and constantly updated statistics. For esports, embedded streams via Twitch are available. Live streaming is mostly accessible for Dota 2, CS:GO, FIFA, and NBA 2K."}',
             'value_es' => '{"0":"Sin embargo, el operador ofrece una cronología detallada de los eventos y estadísticas que se actualizan constantemente. Para los eSports, hay transmisiones integradas a través de Twitch. Las retransmisiones en vivo están disponibles principalmente para Dota 2, CS:GO, FIFA y NBA 2K."}',
             'value_fr' => '{"0":"Cependant, le bookmaker offre une chronologie détaillée des événements ainsi que des statistiques constamment mises à jour. Pour l’e-sport, des flux intégrés via Twitch sont disponibles. Le streaming en direct est principalement accessible pour Dota 2, CS:GO, FIFA et NBA 2K."}',
             'value_pt' => '{"0":"No entanto, a casa de apostas fornece uma linha do tempo detalhada dos eventos e estatísticas constantemente atualizadas. Para eSports, há transmissões incorporadas via Twitch. As transmissões ao vivo estão disponíveis principalmente para Dota 2, CS:GO, FIFA e NBA 2K."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The casino at 22BET is a full-fledged gaming complex. It features over 3,000 slots from more than 100 providers, including NetEnt, Microgaming, Play’n GO, Pragmatic Play, Playson, Betsoft, and many others. Games are available both in demo mode and for real money."}',
             'value_es' => '{"0":"El casino de 22BET es un complejo de juego completo. Cuenta con más de 3,000 tragamonedas de más de 100 proveedores, entre ellos NetEnt, Microgaming, Play’n GO, Pragmatic Play, Playson, Betsoft y muchos más. Los juegos están disponibles tanto en modo demo como por dinero real."}',
             'value_fr' => '{"0":"Le casino de 22BET est un complexe de jeu à part entière. Il propose plus de 3 000 machines à sous de plus de 100 fournisseurs, notamment NetEnt, Microgaming, Play’n GO, Pragmatic Play, Playson, Betsoft et bien d’autres. Les jeux sont disponibles en mode démo ou en argent réel."}',
             'value_pt' => '{"0":"O cassino da 22BET é um complexo de jogos completo. Oferece mais de 3.000 slots de mais de 100 provedores, incluindo NetEnt, Microgaming, Play’n GO, Pragmatic Play, Playson, Betsoft e muitos outros. Os jogos estão disponíveis tanto no modo demo quanto com dinheiro real."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 27
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The live casino section offers hundreds of tables with live dealers—baccarat, roulette, blackjack, sic bo, Monopoly, Andar Bahar, Teen Patti. The virtual sports category also stands out, with football simulations, motorcycle racing, and tennis matches."}',
             'value_es' => '{"0":"La sección de casino en vivo ofrece cientos de mesas con crupieres en vivo: bacará, ruleta, blackjack, sic bo, Monopoly, Andar Bahar, Teen Patti. También destaca la categoría de deportes virtuales, con simulaciones de fútbol, carreras de motos y partidos de tenis."}',
             'value_fr' => '{"0":"La section casino en direct comprend des centaines de tables avec croupiers en direct — baccarat, roulette, blackjack, sic bo, Monopoly, Andar Bahar, Teen Patti. La catégorie des sports virtuels mérite également d’être mentionnée, avec des simulations de football, des courses de motos et des matchs de tennis."}',
             'value_pt' => '{"0":"A seção de cassino ao vivo inclui centenas de mesas com dealers ao vivo — bacará, roleta, blackjack, sic bo, Monopoly, Andar Bahar, Teen Patti. Também se destaca a categoria de esportes virtuais, com simulações de futebol, corridas de motos e partidas de tênis."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 28
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The casino interface runs smoothly on both desktop and mobile versions. Navigation is enhanced with filters by genre, provider, and popularity."}',
             'value_es' => '{"0":"La interfaz del casino funciona sin problemas tanto en la versión de escritorio como en la móvil. Se puede navegar mediante filtros por género, proveedor y popularidad."}',
             'value_fr' => '{"0":"L’interface du casino fonctionne de manière fluide sur les versions bureau et mobile. La navigation est facilitée par des filtres par genre, fournisseur et popularité."}',
             'value_pt' => '{"0":"A interface do cassino funciona suavemente tanto na versão desktop quanto na versão móvel. A navegação é facilitada com filtros por gênero, provedor e popularidade."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 29
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 30
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET implements a comprehensive system for user data protection, taking into account modern privacy standards and transaction security. SSL encryption is used to safeguard personal data and financial operations, preventing third-party interception—especially when using public networks. All payments are processed through secure payment gateways certified with PCI DSS."}',
             'value_es' => '{"0":"22BET implementa un sistema integral de protección de datos del usuario, cumpliendo con los estándares modernos de privacidad y seguridad de transacciones. Para proteger los datos personales y las operaciones financieras se utiliza cifrado SSL, lo que previene la interceptación por terceros, especialmente en redes públicas. Todos los pagos se realizan a través de pasarelas de pago seguras certificadas con PCI DSS."}',
             'value_fr' => '{"0":"22BET met en place un système complet de protection des données utilisateurs, conforme aux normes actuelles de confidentialité et de sécurité des transactions. Un cryptage SSL est utilisé pour sécuriser les données personnelles et les opérations financières, empêchant leur interception par des tiers, notamment sur les réseaux publics. Tous les paiements sont traités via des passerelles sécurisées certifiées PCI DSS."}',
             'value_pt' => '{"0":"A 22BET implementa um sistema abrangente de proteção de dados dos usuários, em conformidade com os padrões modernos de privacidade e segurança de transações. A criptografia SSL é utilizada para proteger dados pessoais e operações financeiras, evitando a interceptação por terceiros, especialmente em redes públicas. Todos os pagamentos são processados por gateways seguros certificados com PCI DSS."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 31
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker requires account verification when requesting large withdrawals. To complete verification, users must provide passport information."}',
             'value_es' => '{"0":"La casa de apuestas requiere verificación de cuenta para retiros de grandes cantidades. Para completar la verificación, se debe proporcionar una copia del pasaporte."}',
             'value_fr' => '{"0":"Le bookmaker exige une vérification du compte pour les demandes de retrait de montants élevés. Pour cela, il est nécessaire de fournir des informations passeport."}',
             'value_pt' => '{"0":"A casa de apostas exige verificação da conta ao solicitar grandes retiradas. Para concluir a verificação, é necessário fornecer dados do passaporte."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 32
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"There are also responsible gambling tools: users can set deposit limits, session durations, or activate self-exclusion."}',
             'value_es' => '{"0":"También existen herramientas de juego responsable: el usuario puede establecer límites de depósito, duración de sesiones o activar la autoexclusión."}',
             'value_fr' => '{"0":"Des outils de jeu responsable sont également disponibles : l’utilisateur peut fixer des limites de dépôt, de durée de session ou activer l’auto-exclusion."}',
             'value_pt' => '{"0":"Também estão disponíveis ferramentas de jogo responsável: o usuário pode definir limites de depósito, duração das sessões ou ativar a autoexclusão."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 33
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 34
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET supports over 100 payment methods. Deposits are processed instantly, while withdrawals take between 15 minutes and 24 hours depending on the amount. In some cases, where additional verification is required, withdrawal may take up to 72 hours."}',
             'value_es' => '{"0":"22BET admite más de 100 métodos de pago. Los depósitos se acreditan de forma instantánea y los retiros se procesan entre 15 minutos y 24 horas, dependiendo del monto. En algunos casos, si se requiere verificación adicional, el retiro puede tardar hasta 72 horas."}',
             'value_fr' => '{"0":"22BET prend en charge plus de 100 méthodes de paiement. Les dépôts sont crédités instantanément, tandis que les retraits sont traités en 15 minutes à 24 heures selon le montant. Dans certains cas nécessitant une vérification supplémentaire, le délai peut aller jusqu’à 72 heures."}',
             'value_pt' => '{"0":"A 22BET oferece suporte a mais de 100 métodos de pagamento. Os depósitos são processados instantaneamente, e os saques levam de 15 minutos a 24 horas, dependendo do valor. Em alguns casos, quando é necessária verificação adicional, o saque pode levar até 72 horas."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 35
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit and withdrawal amount is €1.5. The platform does not charge any commission, although some payment systems may apply a small fee."}',
             'value_es' => '{"0":"El depósito y retiro mínimo es de €1,5. La plataforma no cobra comisión, aunque algunos sistemas de pago pueden aplicar una pequeña tarifa."}',
             'value_fr' => '{"0":"Le dépôt et le retrait minimum sont fixés à 1,5 €. Aucune commission n’est prélevée par la plateforme, bien que certains prestataires de paiement puissent facturer des frais mineurs."}',
             'value_pt' => '{"0":"O valor mínimo para depósito e saque é de €1,5. A plataforma não cobra nenhuma taxa, mas alguns sistemas de pagamento podem aplicar uma pequena comissão."}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 37
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The site offers both card-based payment systems and cryptocurrencies. In our review, we provide a list of the most popular payment methods:"}',
             'value_es' => '{"0":"El sitio ofrece sistemas de pago con tarjeta y criptomonedas. En nuestra reseña presentamos una lista de los métodos de pago más populares:"}',
             'value_fr' => '{"0":"Le site propose des paiements par carte et en cryptomonnaie. Dans notre revue, nous présentons une liste des méthodes de paiement les plus populaires :"}',
             'value_pt' => '{"0":"O site oferece tanto métodos de pagamento com cartão quanto criptomoedas. Em nossa análise, fornecemos uma lista dos métodos de pagamento mais populares:"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 38
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 39
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 40
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET\'s customer support operates 24/7 and is available via live chat, phone, and email."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 22BET funciona las 24 horas, los 7 días de la semana, y está disponible a través de chat en vivo, teléfono y correo electrónico."}',
             'value_fr' => '{"0":"Le service client de 22BET est disponible 24h/24 et 7j/7 via chat en direct, téléphone et e-mail."}',
             'value_pt' => '{"0":"O suporte ao cliente da 22BET funciona 24 horas por dia, 7 dias por semana, disponível por chat ao vivo, telefone e e-mail."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 41
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 42
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events and bets",
                                 "1":"High odds on top matches",
                                 "2":"Over 100 payment methods",
                                 "3":"Robust gaming section",
                                 "4":"Fast cashout",
                                 "5":"User-friendly navigation"},
                             "1":
                                {"0":"No live streaming"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de eventos deportivos y apuestas",
                                 "1":"Cuotas altas en los partidos más importantes",
                                 "2":"Más de 100 métodos de pago",
                                 "3":"Sección de juegos potente",
                                 "4":"Retiro rápido",
                                 "5":"Navegación cómoda"},
                             "1":
                                {"0":"Sin transmisión en vivo"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d\'événements sportifs et de paris",
                                 "1":"Cotes élevées sur les matchs majeurs",
                                 "2":"Plus de 100 méthodes de paiement",
                                 "3":"Section de jeux performante",
                                 "4":"Retrait rapide",
                                 "5":"Navigation pratique"},
                             "1":
                                {"0":"Pas de diffusion en direct"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de eventos esportivos e apostas",
                                 "1":"Odds altas nos principais jogos",
                                 "2":"Mais de 100 métodos de pagamento",
                                 "3":"Seção de jogos robusta",
                                 "4":"Saque rápido",
                                 "5":"Navegação conveniente"},
                             "1":
                                {"0":"Sem transmissão ao vivo"}
                             }',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 43
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"22BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 22BET"}',
                'value_fr' => '{"0":"FAQ de 22BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 22BET"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 44
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 45
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 22BET has mobile apps for Android and iOS. There is also a convenient mobile version of the website."}',
             'value_es' => '{"0":"Sí, 22BET tiene aplicaciones móviles para Android y iOS. También cuenta con una versión móvil conveniente del sitio web."}',
             'value_fr' => '{"0":"Oui, 22BET dispose d’applications mobiles pour Android et iOS. Il existe également une version mobile pratique du site web."}',
             'value_pt' => '{"0":"Sim, a 22BET possui aplicativos móveis para Android e iOS. Também há uma versão móvel prática do site."}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 46
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo?"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 47
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is €1.5 or the equivalent."}',
             'value_es' => '{"0":"El depósito mínimo es de €1.5 o su equivalente."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 1,5 € ou l’équivalent."}',
             'value_pt' => '{"0":"O depósito mínimo é de €1,5 ou equivalente."}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 48
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Is verification required?"}',
             'value_es' => '{"0":"¿Es necesario pasar por verificación?"}',
             'value_fr' => '{"0":"Faut-il passer par une vérification ?"}',
             'value_pt' => '{"0":"É necessário passar por verificação?"}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 49
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The platform does not require mandatory verification during registration. However, in cases of suspected violations or when requesting large withdrawals, the security service may request documents."}',
             'value_es' => '{"0":"La plataforma no exige verificación obligatoria durante el registro. Pero en caso de sospechas de infracciones o al solicitar grandes retiros, el servicio de seguridad puede solicitar documentos."}',
             'value_fr' => '{"0":"La plateforme ne demande pas de vérification obligatoire lors de l’inscription. Cependant, en cas de suspicion de violation ou de demande de gros retraits, le service de sécurité peut demander des documents."}',
             'value_pt' => '{"0":"A plataforma não exige verificação obrigatória durante o cadastro. Porém, em caso de suspeita de violação ou solicitação de grandes saques, o serviço de segurança pode solicitar documentos."}',
             'order' => 49
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 50
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Can you bet on esports?"}',
             'value_es' => '{"0":"¿Se puede apostar en esports?"}',
             'value_fr' => '{"0":"Peut-on parier sur les esports ?"}',
             'value_pt' => '{"0":"É possível apostar em esports?"}',
             'order' => 50
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 51
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 22BET has a full esports section with a large number of events and betting markets."}',
             'value_es' => '{"0":"Sí, 22BET cuenta con una sección completa de esports con una gran cantidad de eventos y mercados de apuestas."}',
             'value_fr' => '{"0":"Oui, 22BET dispose d’une section esports complète avec un grand nombre d’événements et de marchés de paris."}',
             'value_pt' => '{"0":"Sim, a 22BET possui uma seção completa de esports com muitos eventos e mercados de apostas."}',
             'order' => 51
            ]
        );
    }
}
