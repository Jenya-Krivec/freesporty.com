<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 1
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h2',
                'value_en' => '{"0":"4rabet Review"}',
                'value_es' => '{"0":"Reseña de 4rabet"}',
                'value_fr' => '{"0":"Avis sur 4rabet"}',
                'value_pt' => '{"0":"Análise da 4rabet"}',
                'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet is a company that actively operates in the South Asian markets, especially in India. The brand is managed by Umbrella Development B.V. and holds a Curaçao license, which allows it to operate in most countries."}',
             'value_es' => '{"0":"4rabet es una empresa que opera activamente en los mercados del sur de Asia, especialmente en la India. La marca está gestionada por Umbrella Development B.V. y posee una licencia de Curazao, lo que le permite operar en la mayoría de los países."}',
             'value_fr' => '{"0":"4rabet est une entreprise qui opère activement sur les marchés d\'Asie du Sud, en particulier en Inde. La marque est gérée par Umbrella Development B.V. et détient une licence du Curaçao, ce qui lui permet d\'opérer dans la plupart des pays."}',
             'value_pt' => '{"0":"A 4rabet é uma empresa que atua ativamente nos mercados do sul da Ásia, especialmente na Índia. A marca é administrada pela Umbrella Development B.V. e possui uma licença de Curaçao, o que permite operar na maioria dos países."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet has its own mobile app, optimized for Android and iOS, allowing you to access all site features from anywhere. The website supports multiple languages, including English and Hindi, as well as several Indian dialects. The overall interface design is simple and straightforward, focused on quick access to key functions."}',
             'value_es' => '{"0":"4rabet tiene su propia aplicación móvil, optimizada para Android e iOS, lo que te permite acceder a todas las funciones del sitio desde cualquier lugar. El sitio web admite varios idiomas, incluidos el inglés y el hindi, así como varios dialectos indios. El diseño general de la interfaz es simple y directo, enfocado en el acceso rápido a las funciones principales."}',
             'value_fr' => '{"0":"4rabet dispose de sa propre application mobile, optimisée pour Android et iOS, vous permettant d’accéder à toutes les fonctionnalités du site depuis n’importe où. Le site prend en charge plusieurs langues, dont l’anglais et l’hindi, ainsi que plusieurs dialectes indiens. L’interface générale est simple et directe, conçue pour un accès rapide aux fonctions principales."}',
             'value_pt' => '{"0":"A 4rabet possui seu próprio aplicativo móvel, otimizado para Android e iOS, permitindo que você acesse todas as funções do site de qualquer lugar. O site oferece suporte a vários idiomas, incluindo inglês e hindi, bem como diversos dialetos indianos. O design geral da interface é simples e direto, focado no acesso rápido às funções principais."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"At 4rabet, you will have the opportunity to place bets on over 25 sports. Among the most popular are football, cricket, tennis, basketball, hockey, baseball, volleyball, boxing, UFC, table tennis, rugby, and Formula 1."}',
             'value_es' => '{"0":"En 4rabet tendrás la oportunidad de apostar en más de 25 deportes. Entre los más populares se encuentran el fútbol, críquet, tenis, baloncesto, hockey, béisbol, voleibol, boxeo, UFC, tenis de mesa, rugby y Fórmula 1."}',
             'value_fr' => '{"0":"Sur 4rabet, vous aurez la possibilité de parier sur plus de 25 disciplines sportives. Parmi les plus populaires figurent le football, le cricket, le tennis, le basket-ball, le hockey, le baseball, le volley-ball, la boxe, l’UFC, le tennis de table, le rugby et la Formule 1."}',
             'value_pt' => '{"0":"Na 4rabet, você terá a oportunidade de apostar em mais de 25 esportes. Entre os mais populares estão futebol, críquete, tênis, basquete, hóquei, beisebol, voleibol, boxe, UFC, tênis de mesa, rúgbi e Fórmula 1."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker pays the most attention to cricket. Users have access to matches from all major tournaments — IPL, BPL, PSL, The Hundred — as well as dozens of regional championships in India. The platform offers a wide range of betting markets, detailed statistics, and even special bonuses for these events."}',
             'value_es' => '{"0":"El operador presta especial atención al críquet. Los usuarios tienen acceso a los partidos de todos los principales torneos — IPL, BPL, PSL, The Hundred — así como a decenas de campeonatos regionales de la India. La plataforma ofrece una gran variedad de mercados de apuestas, estadísticas detalladas e incluso bonos especiales para estos eventos."}',
             'value_fr' => '{"0":"Le bookmaker accorde une attention particulière au cricket. Les utilisateurs peuvent parier sur tous les principaux tournois — IPL, BPL, PSL, The Hundred — ainsi que sur des dizaines de championnats régionaux en Inde. La plateforme propose un large éventail d\'événements, des statistiques détaillées et même des bonus spéciaux pour ces matchs."}',
             'value_pt' => '{"0":"O operador dá especial atenção ao críquete. Os usuários têm acesso aos jogos de todos os principais torneios — IPL, BPL, PSL, The Hundred — além de dezenas de campeonatos regionais da Índia. A plataforma oferece uma ampla variedade de mercados de apostas, estatísticas detalhadas e até bônus especiais para esses eventos."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"In terms of football, all key European leagues are covered — the English Premier League, La Liga, Serie A, Bundesliga — as well as international competitions like the Champions League, Europa League, and Copa América. Matches from lower divisions, such as regional leagues in Brazil and Argentina, are also available. For each event, the platform provides standard betting markets: match result, handicaps, totals, correct score, and player performance bets."}',
             'value_es' => '{"0":"En cuanto al fútbol, están presentes todas las principales ligas europeas — la Premier League inglesa, La Liga, la Serie A, la Bundesliga — así como competiciones internacionales como la Liga de Campeones, la Liga Europa y la Copa América. También hay partidos de ligas inferiores, como torneos regionales en Brasil y Argentina. Para cada evento, la plataforma proporciona mercados estándar: resultado, hándicaps, totales, marcador exacto y apuestas sobre el rendimiento de jugadores."}',
             'value_fr' => '{"0":"Concernant le football, toutes les grandes ligues européennes sont couvertes — Premier League anglaise, La Liga, Serie A, Bundesliga — ainsi que des compétitions internationales comme la Ligue des champions, la Ligue Europa et la Copa América. Des matchs de divisions inférieures, notamment des tournois régionaux au Brésil et en Argentine, sont également disponibles. Pour chaque événement, la plateforme offre des marchés standards : résultat du match, handicaps, totaux, score exact et paris sur les performances individuelles des joueurs."}',
             'value_pt' => '{"0":"No futebol, todas as principais ligas europeias estão representadas — Premier League inglesa, La Liga, Serie A, Bundesliga — bem como competições internacionais como a Liga dos Campeões, Liga Europa e Copa América. Também estão disponíveis partidas de ligas inferiores, como torneios regionais no Brasil e na Argentina. Para cada evento, a plataforma oferece mercados padrão: resultado da partida, handicaps, totais, placar exato e apostas em estatísticas individuais de jogadores."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Esports are also available on 4rabet, although this category is not the main focus. The platform covers tournaments for CS:GO, Dota 2, League of Legends, Valorant, and King of Glory."}',
             'value_es' => '{"0":"Los eSports también están disponibles en 4rabet, aunque no son el enfoque principal. Se cubren torneos de CS:GO, Dota 2, League of Legends, Valorant y King of Glory."}',
             'value_fr' => '{"0":"Les sports électroniques sont également présents sur 4rabet, même s’ils ne constituent pas une priorité. Des tournois de CS:GO, Dota 2, League of Legends, Valorant et King of Glory sont disponibles."}',
             'value_pt' => '{"0":"Os eSports também estão presentes na 4rabet, embora não sejam o foco principal. Estão disponíveis torneios de CS:GO, Dota 2, League of Legends, Valorant e King of Glory."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The odds at 4rabet meet the general industry standards. For example, in English Premier League matches, the odds on the match result are usually around 1.95."}',
             'value_es' => '{"0":"Las cuotas en 4rabet se ajustan a los estándares generales de la industria. Por ejemplo, en los partidos de la Premier League inglesa, las cuotas para el resultado del partido suelen rondar el 1.95."}',
             'value_fr' => '{"0":"Les cotes chez 4rabet correspondent aux normes générales de l’industrie. Par exemple, pour les matchs de Premier League anglaise, les cotes sur le résultat sont généralement autour de 1.95."}',
             'value_pt' => '{"0":"As odds na 4rabet estão de acordo com os padrões gerais da indústria. Por exemplo, em partidas da Premier League inglesa, as odds para o resultado costumam ficar em torno de 1.95."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"In live mode, the odds are updated with a slight delay. Bet settlement occurs after the official confirmation of the results, which may take up to 3 minutes in live format and 5–10 minutes in pre-match, depending on the market."}',
             'value_es' => '{"0":"En el modo en vivo, las cuotas se actualizan con un pequeño retraso. La liquidación de las apuestas se realiza tras la confirmación oficial de los resultados, lo cual puede tardar hasta 3 minutos en directo y entre 5 y 10 minutos en pre-partido, según el mercado."}',
             'value_fr' => '{"0":"En mode live, les cotes sont mises à jour avec un léger décalage. Le règlement des paris intervient après la confirmation officielle des résultats, ce qui peut prendre jusqu’à 3 minutes en direct et entre 5 et 10 minutes en pré-match, selon le marché."}',
             'value_pt' => '{"0":"No modo ao vivo, as odds são atualizadas com um pequeno atraso. A liquidação das apostas ocorre após a confirmação oficial dos resultados, o que pode levar até 3 minutos em apostas ao vivo e entre 5 e 10 minutos em pré-jogo, dependendo do mercado."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Overall, 4rabet does not offer exceptionally high odds, but it also does not present clearly unprofitable conditions."}',
             'value_es' => '{"0":"En general, 4rabet no ofrece cuotas excepcionalmente altas, pero tampoco condiciones claramente desfavorables."}',
             'value_fr' => '{"0":"Dans l’ensemble, 4rabet ne propose pas de cotes exceptionnellement élevées, mais n’impose pas non plus de conditions désavantageuses."}',
             'value_pt' => '{"0":"No geral, a 4rabet não oferece odds extremamente altas, mas também não apresenta condições claramente desfavoráveis."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The events available for betting vary depending on the sport and the level of the tournament. For example, in Champions League matches, more than 200 markets are available. You can bet on correct score, handicap, total goals, number of corners, number of yellow cards, and offsides. There are also options to bet on individual player performances, such as number of goals or shots. Combined bets are also available."}',
             'value_es' => '{"0":"Los eventos disponibles para apostar varían según el deporte y el nivel del torneo. Por ejemplo, en los partidos de la Liga de Campeones hay más de 200 mercados disponibles. Se puede apostar al marcador exacto, hándicap, total de goles, número de saques de esquina, tarjetas amarillas y fueras de juego. También es posible apostar a logros individuales de los jugadores, como número de goles o disparos. Las apuestas combinadas también están disponibles."}',
             'value_fr' => '{"0":"Les événements disponibles pour les paris varient selon le sport et le niveau du tournoi. Par exemple, pour les matchs de Ligue des champions, plus de 200 marchés sont disponibles. Vous pouvez parier sur le score exact, le handicap, le total de buts, le nombre de corners, de cartons jaunes et de hors-jeu. Il est également possible de parier sur les performances individuelles des joueurs, comme le nombre de buts ou de tirs. Des paris combinés sont également proposés."}',
             'value_pt' => '{"0":"Os eventos disponíveis para apostas variam conforme o esporte e o nível do torneio. Por exemplo, em partidas da Liga dos Campeões, estão disponíveis mais de 200 mercados. É possível apostar no placar exato, handicap, total de gols, número de escanteios, cartões amarelos e impedimentos. Também há apostas em desempenho individual de jogadores, como número de gols ou chutes. As apostas combinadas também estão disponíveis."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"In less popular matches, the number of available options is significantly lower. In tennis and basketball, usually only basic bet types are offered: winner, handicap, and total points. Extended combined bets and bets on individual sets or quarters are not available."}',
             'value_es' => '{"0":"En los partidos menos populares, la cantidad de opciones es considerablemente menor. En tenis y baloncesto, normalmente solo se ofrecen las opciones básicas: ganador, hándicap y total de puntos. No hay apuestas combinadas ampliadas ni mercados por sets o cuartos específicos."}',
             'value_fr' => '{"0":"Dans les matchs moins populaires, le nombre d’options est nettement plus limité. En tennis et en basket-ball, seuls les types de paris de base sont généralement proposés : vainqueur, handicap et total de points. Les paris combinés étendus ou sur les sets/quarts spécifiques ne sont pas disponibles."}',
             'value_pt' => '{"0":"Em partidas menos populares, o número de opções é significativamente menor. No tênis e no basquete, geralmente são oferecidos apenas os tipos básicos: vencedor, handicap e total de pontos. Não há apostas combinadas ampliadas nem opções por sets ou quartos."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 18
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Cricket is an exception. Here, you can place bets on each over, run totals, top player, number of sixes, and first wicket loss."}',
             'value_es' => '{"0":"En el caso del críquet, la situación es diferente. Aquí se puede apostar en cada over, totales de carreras, mejor jugador, número de sixes y primera pérdida de wicket."}',
             'value_fr' => '{"0":"Pour le cricket, la situation est différente. Il est possible de parier sur chaque over, les totaux de runs, le meilleur joueur, le nombre de sixes et la première perte de wicket."}',
             'value_pt' => '{"0":"No críquete, a situação é diferente. É possível apostar em cada over, totais de corridas, melhor jogador, número de sixes e primeira queda de wicket."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 19
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo"}',
                'value_fr' => '{"0":"Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 20
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The live section interface is simple, with a minimalist design. Events are sorted by sport and tournament. Each event is accompanied by text-based statistics displaying the number of attacks, possession, shots, and corners."}',
             'value_es' => '{"0":"La interfaz de la sección en vivo es sencilla, con un diseño minimalista. Los eventos se ordenan por deporte y torneo. Cada evento está acompañado de estadísticas en formato de texto que muestran el número de ataques, posesión, disparos y saques de esquina."}',
             'value_fr' => '{"0":"L’interface de la section en direct est simple, avec un design minimaliste. Les événements sont classés par sport et par tournoi. Chaque événement est accompagné de statistiques textuelles indiquant le nombre d’attaques, la possession, les tirs et les corners."}',
             'value_pt' => '{"0":"A interface da seção ao vivo é simples, com um design minimalista. Os eventos são organizados por esporte e torneio. Cada evento é acompanhado por estatísticas em texto que mostram o número de ataques, posse de bola, chutes e escanteios."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 21
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"A player can place a bet in just a few clicks. You simply select the event and enter the amount. Bet processing takes up to 3 seconds. In live mode, the main markets are available, while combined bets are almost entirely absent."}',
             'value_es' => '{"0":"El jugador puede hacer una apuesta en solo unos clics. Solo necesita seleccionar el evento e ingresar la cantidad. El procesamiento de la apuesta tarda hasta 3 segundos. En el modo en vivo están disponibles los mercados principales, mientras que las apuestas combinadas prácticamente no existen."}',
             'value_fr' => '{"0":"Le joueur peut placer un pari en seulement quelques clics. Il suffit de sélectionner l’événement et de saisir le montant. Le traitement du pari prend jusqu’à 3 secondes. En mode live, seuls les marchés principaux sont disponibles, tandis que les paris combinés sont pratiquement absents."}',
             'value_pt' => '{"0":"O jogador pode fazer uma aposta em apenas alguns cliques. Basta selecionar o evento e inserir o valor. O processamento da aposta leva até 3 segundos. No modo ao vivo, os mercados principais estão disponíveis, enquanto as apostas combinadas estão praticamente ausentes."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 22
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 23
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The website does not offer live video streaming of events in real time. This is a significant drawback, especially for players who are used to watching matches while placing bets. The only alternative is a visual representation of key events (goal, foul, substitution). There is currently no information about the implementation of streaming services."}',
             'value_es' => '{"0":"El sitio web no ofrece transmisión en vivo de eventos en tiempo real. Esta es una desventaja importante, especialmente para los jugadores que están acostumbrados a ver los partidos mientras apuestan. La única alternativa es una visualización de los eventos clave (gol, falta, sustitución). Por ahora, no hay información sobre la implementación de servicios de streaming."}',
             'value_fr' => '{"0":"Le site ne propose pas de diffusion vidéo en direct des événements en temps réel. C’est un inconvénient majeur, en particulier pour les joueurs habitués à regarder les matchs tout en pariant. La seule alternative est une visualisation des événements clés (but, faute, remplacement). Il n’y a actuellement aucune information sur la mise en place de services de streaming."}',
             'value_pt' => '{"0":"O site não oferece transmissão de vídeo ao vivo dos eventos em tempo real. Esta é uma desvantagem significativa, especialmente para os jogadores acostumados a assistir às partidas enquanto apostam. A única alternativa é uma visualização dos principais eventos (gol, falta, substituição). No momento, não há informações sobre a implementação de serviços de streaming."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 24
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 25
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The casino section at 4rabet offers one of the strongest selections among bookmakers. It features slots, roulette, card games, and a live casino with real dealers. The total number of games exceeds 2,000."}',
             'value_es' => '{"0":"La sección de casino de 4rabet ofrece una de las propuestas más potentes entre las casas de apuestas. Incluye tragamonedas, ruleta, juegos de cartas y casino en vivo con crupieres reales. El número total de juegos supera los 2.000."}',
             'value_fr' => '{"0":"La section casino de 4rabet propose l’une des offres les plus complètes parmi les bookmakers. On y trouve des machines à sous, de la roulette, des jeux de cartes, ainsi qu’un casino en direct avec de vrais croupiers. Le nombre total de jeux dépasse 2 000."}',
             'value_pt' => '{"0":"A seção de cassino da 4rabet oferece uma das seleções mais robustas entre as casas de apostas. Inclui slots, roleta, jogos de cartas e cassino ao vivo com dealers reais. O número total de jogos ultrapassa 2.000."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 26
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino, you can play baccarat, blackjack, and roulette. For the Indian market, Teen Patti, Andar Bahar, and Lucky 7 are also available."}',
             'value_es' => '{"0":"En el casino en vivo puedes jugar a bacará, blackjack y ruleta. Para el mercado indio también están disponibles Teen Patti, Andar Bahar y Lucky 7."}',
             'value_fr' => '{"0":"Dans le live casino, vous pouvez jouer au baccarat, au blackjack et à la roulette. Pour le marché indien, Teen Patti, Andar Bahar et Lucky 7 sont également disponibles."}',
             'value_pt' => '{"0":"No cassino ao vivo, você pode jogar bacará, blackjack e roleta. Para o mercado indiano, também estão disponíveis Teen Patti, Andar Bahar e Lucky 7."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 27
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 28
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet operates under a Curaçao license. Identity verification is only required upon request from the administration or when attempting to withdraw large amounts of funds."}',
             'value_es' => '{"0":"4rabet opera bajo una licencia de Curazao. La verificación de identidad solo es necesaria si lo solicita la administración o al intentar retirar grandes sumas de dinero."}',
             'value_fr' => '{"0":"4rabet fonctionne sous une licence du Curaçao. La vérification d’identité n’est requise que sur demande de l’administration ou lors d’un retrait de montants importants."}',
             'value_pt' => '{"0":"A 4rabet opera sob uma licença de Curaçao. A verificação de identidade só é exigida mediante solicitação da administração ou ao tentar sacar grandes quantias de dinheiro."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 29
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 30
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker offers dozens of payment methods. You can use popular bank cards such as Visa and Mastercard, as well as cryptocurrencies like Bitcoin, Ethereum, and Tether. Services like UPI, PhonePe, IMPS, and GPay are also supported."}',
             'value_es' => '{"0":"El corredor ofrece decenas de métodos de pago. Puedes utilizar tarjetas bancarias populares como Visa y Mastercard, así como criptomonedas como Bitcoin, Ethereum y Tether. También se admiten servicios como UPI, PhonePe, IMPS y GPay."}',
             'value_fr' => '{"0":"Le bookmaker propose des dizaines de méthodes de paiement. Vous pouvez utiliser des cartes bancaires populaires comme Visa et Mastercard, ainsi que des cryptomonnaies telles que Bitcoin, Ethereum et Tether. Des services comme UPI, PhonePe, IMPS et GPay sont également pris en charge."}',
             'value_pt' => '{"0":"A casa de apostas oferece dezenas de métodos de pagamento. É possível usar cartões bancários populares como Visa e Mastercard, além de criptomoedas como Bitcoin, Ethereum e Tether. Também são aceitos serviços como UPI, PhonePe, IMPS e GPay."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 31
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is $1, and the minimum withdrawal is $5. All transactions are commission-free on the bookmaker’s side. Withdrawals can take from 15 minutes to 48 hours, depending on the payment system’s workload and the amount requested."}',
             'value_es' => '{"0":"El depósito mínimo es de $1 y el retiro mínimo es de $5. Todas las operaciones se realizan sin comisión por parte del corredor. Los retiros pueden tardar entre 15 minutos y 48 horas, según la carga del sistema de pagos y el monto solicitado."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 1 $ et le retrait minimum est de 5 $. Toutes les opérations sont sans commission de la part du bookmaker. Les retraits peuvent prendre entre 15 minutes et 48 heures, en fonction de la charge du système de paiement et du montant."}',
             'value_pt' => '{"0":"O depósito mínimo é de US$ 1 e o saque mínimo é de US$ 5. Todas as transações são isentas de comissão por parte da casa de apostas. Os saques podem levar de 15 minutos a 48 horas, dependendo da carga do sistema de pagamento e do valor solicitado."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 32
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 33
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 34
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Customer support is available 24/7 and can be reached via live chat, email, and a Telegram bot."}',
             'value_es' => '{"0":"El servicio de atención al cliente está disponible las 24 horas y se puede contactar a través del chat en vivo, correo electrónico y un bot de Telegram."}',
             'value_fr' => '{"0":"Le service client est disponible 24h/24 et peut être contacté via le chat en direct, l’e-mail et un bot Telegram."}',
             'value_pt' => '{"0":"O suporte ao cliente está disponível 24 horas por dia e pode ser acessado via chat ao vivo, e-mail e bot do Telegram."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 44
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 45
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events",
                                 "1":"Large live casino",
                                 "2":"Cryptocurrency support",
                                 "3":"Low minimum deposit and withdrawal amounts"},
                             "1":
                                {"0":"No live video streaming"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia selección de eventos deportivos",
                                 "1":"Gran casino en vivo",
                                 "2":"Soporte de criptomonedas",
                                 "3":"Montos mínimos bajos para depósitos y retiros"},
                             "1":
                                {"0":"No hay transmisiones de video en vivo"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d’événements sportifs",
                                 "1":"Grand casino en direct",
                                 "2":"Support des cryptomonnaies",
                                 "3":"Montants minimums faibles pour les dépôts et les retraits"},
                             "1":
                                {"0":"Pas de diffusion vidéo en direct"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla seleção de eventos esportivos",
                                 "1":"Grande cassino ao vivo",
                                 "2":"Suporte a criptomoedas",
                                 "3":"Baixos valores mínimos para depósitos e saques"},
                             "1":
                                {"0":"Ausência de transmissões de vídeo ao vivo"}
                             }',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 46
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"4rabet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 4rabet"}',
                'value_fr' => '{"0":"FAQ de 4rabet"}',
                'value_pt' => '{"0":"Perguntas frequentes do 4rabet"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 47
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Is verification mandatory?"}',
             'value_es' => '{"0":"¿Es obligatorio pasar la verificación?"}',
             'value_fr' => '{"0":"La vérification est-elle obligatoire ?"}',
             'value_pt' => '{"0":"A verificação é obrigatória?"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 48
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"No, but it may be requested when withdrawing large amounts or in case of suspected rule violations."}',
             'value_es' => '{"0":"No, pero puede ser solicitada al retirar grandes sumas o en caso de sospecha de violación de las reglas."}',
             'value_fr' => '{"0":"Non, mais elle peut être demandée lors du retrait de grosses sommes ou en cas de suspicion de violation des règles."}',
             'value_pt' => '{"0":"Não, mas pode ser solicitada ao sacar grandes quantias ou em caso de suspeita de violação das regras."}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 49
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit on the platform?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo en la plataforma?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum sur la plateforme ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo na plataforma?"}',
             'order' => 49
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 50
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is $1."}',
             'value_es' => '{"0":"El depósito mínimo es de $1."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 1 $."}',
             'value_pt' => '{"0":"O depósito mínimo é de US$ 1."}',
             'order' => 50
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 51
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"How long does withdrawal take?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro?"}',
             'value_fr' => '{"0":"Combien de temps prend le retrait ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para sacar?"}',
             'order' => 51
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 52
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals take from a few minutes up to 48 hours, depending on the method and amount."}',
             'value_es' => '{"0":"Los retiros tardan desde unos minutos hasta 48 horas, dependiendo del método y la cantidad."}',
             'value_fr' => '{"0":"Les retraits prennent de quelques minutes à 48 heures, selon la méthode et le montant."}',
             'value_pt' => '{"0":"Os saques levam de alguns minutos até 48 horas, dependendo do método e do valor."}',
             'order' => 52
            ]
        );
    }
}
