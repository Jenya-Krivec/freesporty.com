<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"888starz Review"}',
             'value_es' => '{"0":"Reseña de 888starz"}',
             'value_fr' => '{"0":"Avis sur 888starz"}',
             'value_pt' => '{"0":"Análise da 888starz"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz is an international platform for sports betting and online entertainment, founded in 2020 in Cyprus. The company actively operates in the markets of Asia, Europe, and the CIS. The bookmaker is licensed by both the Curaçao authority and the Kahnawake Gaming Commission."}',
             'value_es' => '{"0":"888starz es una plataforma internacional de apuestas deportivas y entretenimiento en línea, fundada en 2020 en Chipre. La empresa opera activamente en los mercados de Asia, Europa y la CEI. La casa de apuestas cuenta con licencias internacionales de Curaçao y la Comisión de Juegos de Kahnawake."}',
             'value_fr' => '{"0":"888starz est une plateforme internationale de paris sportifs et de divertissement en ligne, fondée en 2020 à Chypre. L’entreprise est active sur les marchés d’Asie, d’Europe et de la CEI. Le bookmaker est licencié par Curaçao et la Commission des jeux de Kahnawake."}',
             'value_pt' => '{"0":"888starz é uma plataforma internacional de apostas esportivas e entretenimento online, fundada em 2020 em Chipre. A empresa atua ativamente nos mercados da Ásia, Europa e CEI. A casa de apostas opera sob licença internacional de Curaçao e da Comissão de Jogos de Kahnawake."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The website supports dozens of languages and focuses on multifunctionality, combining sports betting, games, a crypto exchange, esports, and live casino."}',
             'value_es' => '{"0":"El sitio web ofrece soporte en decenas de idiomas y se enfoca en la multifuncionalidad, combinando apuestas deportivas, juegos, intercambio de criptomonedas, deportes electrónicos y casino en vivo."}',
             'value_fr' => '{"0":"Le site propose des dizaines de langues et met l’accent sur la multifonctionnalité, en combinant paris sportifs, jeux, bourse de cryptomonnaies, esports et casino en direct."}',
             'value_pt' => '{"0":"O site oferece suporte em dezenas de idiomas e foca na multifuncionalidade, combinando apostas esportivas, jogos, bolsa de criptomoedas, eSports e cassino ao vivo."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz offers a large sports section covering over 40 sports. Here you can place bets on popular sports such as football, basketball, and tennis, as well as on less popular sports like cricket, darts, or snooker."}',
             'value_es' => '{"0":"888starz ofrece una amplia sección deportiva que cubre más de 40 deportes. Aquí puedes hacer apuestas en deportes populares como fútbol, baloncesto y tenis, así como en deportes menos populares como cricket, dardos o snooker."}',
             'value_fr' => '{"0":"888starz propose une grande section sportive couvrant plus de 40 sports. Vous pouvez y parier sur des sports populaires tels que le football, le basketball et le tennis, ainsi que sur des sports moins populaires comme le cricket, les fléchettes ou le snooker."}',
             'value_pt' => '{"0":"888starz oferece uma grande seção esportiva cobrindo mais de 40 esportes. Aqui você pode apostar em esportes populares como futebol, basquete e tênis, bem como em esportes menos populares, como críquete, dardos ou sinuca."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting interface is designed in a classic layout with a navigation panel on the left, where sorting is done by sport and country. Available events with main markets are displayed in the middle section. There is an option to add a match to favorites and view brief analytics."}',
             'value_es' => '{"0":"La interfaz de apuestas deportivas está diseñada con un esquema clásico, con un panel de navegación a la izquierda, donde la clasificación se realiza por deporte y país. En la parte central se muestran los eventos disponibles con los mercados principales. Existe la opción de agregar un partido a favoritos y ver análisis breves."}',
             'value_fr' => '{"0":"L’interface des paris sportifs est conçue selon un schéma classique avec un panneau de navigation à gauche, où le tri s’effectue par sport et pays. Les événements disponibles avec les principaux marchés sont affichés dans la partie centrale. Il est possible d’ajouter un match aux favoris et de consulter une brève analyse."}',
             'value_pt' => '{"0":"A interface de apostas esportivas é projetada em um layout clássico com um painel de navegação à esquerda, onde a classificação é feita por esporte e país. Os eventos disponíveis com os principais mercados são exibidos na seção central. Existe a opção de adicionar uma partida aos favoritos e visualizar análises rápidas."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, it is worth noting the presence of separate tabs containing events related to politics, weather, and financial markets, on which you can also place bets."}',
             'value_es' => '{"0":"Además, vale la pena destacar la presencia de pestañas separadas que contienen eventos de política, clima y mercados financieros, en los que también puedes apostar."}',
             'value_fr' => '{"0":"De plus, il convient de noter la présence d’onglets séparés regroupant des événements politiques, météorologiques et financiers, sur lesquels vous pouvez également parier."}',
             'value_pt' => '{"0":"Além disso, vale destacar a presença de abas separadas contendo eventos de política, clima e mercados financeiros, nos quais você também pode apostar."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Below, we have compiled the main sports available for betting on 888starz:"}',
             'value_es' => '{"0":"A continuación, hemos recopilado los principales deportes en los que puedes jugar en 888starz:"}',
             'value_fr' => '{"0":"Ci-dessous, nous avons rassemblé les principaux sports sur lesquels vous pouvez jouer sur 888starz :"}',
             'value_pt' => '{"0":"A seguir, reunimos os principais esportes nos quais você pode apostar no 888starz:"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker 888starz offers decent odds for bets, which often exceed the average market levels, especially in top football championships and disciplines. High odds are observed for the main results of matches in the English Premier League, La Liga, the Champions League, the NBA, as well as in top tennis tournaments of the Grand Slam series."}',
             'value_es' => '{"0":"La casa de apuestas 888starz ofrece buenas cuotas para las apuestas, que a menudo superan los niveles promedio del mercado, especialmente en los principales campeonatos de fútbol y disciplinas. Se observan cuotas altas para los resultados principales de los partidos de la Premier League inglesa, La Liga, la Liga de Campeones, la NBA, así como en los principales torneos de tenis de la serie Grand Slam."}',
             'value_fr' => '{"0":"Le bookmaker 888starz propose des cotes intéressantes pour les paris, qui dépassent souvent les niveaux moyens du marché, notamment dans les principaux championnats de football et disciplines. Des cotes élevées sont observées pour les résultats principaux des matchs de la Premier League anglaise, de La Liga, de la Ligue des Champions, de la NBA, ainsi que dans les tournois de tennis du Grand Chelem."}',
             'value_pt' => '{"0":"A casa de apostas 888starz oferece boas odds para apostas, que frequentemente superam os níveis médios do mercado, especialmente nos principais campeonatos de futebol e disciplinas. Odds altas são observadas para os resultados principais dos jogos da Premier League inglesa, La Liga, Liga dos Campeões, NBA, bem como nos principais torneios de tênis da série Grand Slam."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For example, in a Champions League match between Real Madrid and Bayern Munich, the odds for a Real Madrid win were 2.45, while most competitors offered odds ranging from 2.30 to 2.35. For a Bayern Munich win, 888starz offered 2.85 compared to the average market level of 2.70. Similarly, in NBA matches, the odds for the favorite’s win rarely drop below 1.50, whereas in other bookmakers they often stand at 1.45 or even 1.40."}',
             'value_es' => '{"0":"Por ejemplo, en un partido de la Liga de Campeones entre el Real Madrid y el Bayern de Múnich, la cuota para la victoria del Real Madrid fue de 2.45, mientras que la mayoría de los competidores ofrecían cuotas entre 2.30 y 2.35. Para la victoria del Bayern, 888starz ofreció 2.85 en comparación con el nivel promedio del mercado de 2.70. De manera similar, en los partidos de la NBA, las cuotas para la victoria del favorito rara vez bajan de 1.50, mientras que en otras casas suelen ser 1.45 o incluso 1.40."}',
             'value_fr' => '{"0":"Par exemple, lors d’un match de la Ligue des Champions entre le Real Madrid et le Bayern Munich, la cote pour la victoire du Real Madrid était de 2,45, tandis que la plupart des concurrents proposaient des cotes comprises entre 2,30 et 2,35. Pour la victoire du Bayern, 888starz offrait 2,85 contre un niveau moyen du marché à 2,70. De même, lors des matchs NBA, la cote pour la victoire du favori descend rarement en dessous de 1,50, alors que chez d’autres bookmakers elle est souvent à 1,45 voire 1,40."}',
             'value_pt' => '{"0":"Por exemplo, em uma partida da Liga dos Campeões entre Real Madrid e Bayern de Munique, as odds para a vitória do Real Madrid eram de 2,45, enquanto a maioria dos concorrentes oferecia odds entre 2,30 e 2,35. Para a vitória do Bayern, a 888starz ofereceu 2,85 em comparação com o nível médio do mercado de 2,70. De forma semelhante, nas partidas da NBA, as odds para a vitória do favorito raramente caem abaixo de 1,50, enquanto em outras casas elas geralmente são 1,45 ou até 1,40."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Overall, 888starz frequently offers boosted odds, which is especially noticeable during major sporting events."}',
             'value_es' => '{"0":"En general, 888starz ofrece frecuentemente cuotas mejoradas, lo cual es especialmente notable durante grandes eventos deportivos."}',
             'value_fr' => '{"0":"Dans l’ensemble, 888starz propose fréquemment des cotes améliorées, ce qui est particulièrement visible lors des grands événements sportifs."}',
             'value_pt' => '{"0":"No geral, a 888starz frequentemente oferece odds aumentadas, o que é especialmente notável durante grandes eventos esportivos."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"A strong point of 888starz is the large number of events available for betting. For example, a typical English Premier League football match can have over 1,000 betting options. The bookmaker offers standard types of bets that are basic and most popular among players. You can bet on the victory of one of the teams or a draw, on the number of goals, corners, yellow cards, and place bets on individual player statistics."}',
             'value_es' => '{"0":"Una fortaleza de 888starz es la gran cantidad de eventos disponibles para apostar. Por ejemplo, un partido típico de la Premier League inglesa puede tener más de 1,000 opciones de apuestas. La casa de apuestas ofrece tipos de apuestas estándar que son básicas y las más populares entre los jugadores. Puedes apostar por la victoria de uno de los equipos o por un empate, por la cantidad de goles, tiros de esquina, tarjetas amarillas, y realizar apuestas en estadísticas individuales de jugadores."}',
             'value_fr' => '{"0":"Un point fort de 888starz est le grand nombre d’événements disponibles pour parier. Par exemple, un match typique de Premier League anglaise peut proposer plus de 1 000 options de paris. Le bookmaker offre des types de paris standard qui sont basiques et les plus populaires parmi les joueurs. Vous pouvez parier sur la victoire de l’une des équipes ou sur un match nul, sur le nombre de buts, de corners, de cartons jaunes, et placer des paris sur les statistiques individuelles des joueurs."}',
             'value_pt' => '{"0":"Um ponto forte da 888starz é a grande quantidade de eventos disponíveis para apostar. Por exemplo, uma partida típica da Premier League inglesa pode ter mais de 1.000 opções de apostas. A casa de apostas oferece tipos de apostas padrão que são básicas e as mais populares entre os jogadores. Você pode apostar na vitória de uma das equipes ou no empate, na quantidade de gols, escanteios, cartões amarelos, e fazer apostas nas estatísticas individuais dos jogadores."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, a mid-level match offers from 40 to 70 betting options, including game handicaps, exact set scores, tiebreaks, and more."}',
             'value_es' => '{"0":"En tenis, un partido de nivel medio ofrece entre 40 y 70 opciones de apuestas, incluyendo hándicaps por juegos, marcador exacto por sets, desempates, entre otros."}',
             'value_fr' => '{"0":"Au tennis, un match de niveau moyen propose entre 40 et 70 options de paris, incluant les handicaps par jeu, les scores exacts par set, les tie-breaks, etc."}',
             'value_pt' => '{"0":"No tênis, uma partida de nível médio oferece entre 40 e 70 opções de apostas, incluindo handicaps por games, placar exato por sets, tie-breaks, entre outros."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In basketball, bets are offered on each quarter, individual player totals, and statistics such as fouls and rebounds."}',
             'value_es' => '{"0":"En baloncesto, se ofrecen apuestas para cada cuarto, totales individuales de jugadores y estadísticas como faltas y rebotes."}',
             'value_fr' => '{"0":"Au basket-ball, des paris sont proposés pour chaque quart-temps, les totaux individuels des joueurs, ainsi que les statistiques de fautes et de rebonds."}',
             'value_pt' => '{"0":"No basquete, são oferecidas apostas para cada quarto, totais individuais dos jogadores e estatísticas como faltas e rebotes."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 19
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Іспанська: Apuestas en Vivo"}',
                'value_fr' => '{"0":"Французька: Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The live section at 888starz is well optimized, even with a large number of players, and operates without freezing. The interface allows quick switching between matches and tracking odds changes in real time."}',
             'value_es' => '{"0":"La sección en vivo de 888starz está bien optimizada, incluso con una gran cantidad de jugadores, y funciona sin congelamientos. La interfaz permite cambiar rápidamente entre partidos y seguir los cambios de cuotas en tiempo real."}',
             'value_fr' => '{"0":"La section live de 888starz est bien optimisée, même avec un grand nombre de joueurs, et fonctionne sans ralentissements. L’interface permet de passer rapidement d’un match à un autre et de suivre les variations des cotes en temps réel."}',
             'value_pt' => '{"0":"A seção ao vivo da 888starz é bem otimizada, mesmo com um grande número de jogadores, e funciona sem travamentos. A interface permite alternar rapidamente entre partidas e acompanhar as mudanças nas odds em tempo real."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"You can also use the graphical visualization tool of the current game. Many events are accompanied by statistical indicators such as ball possession, shots, cards, and timeline. Even in esports matches, extended statistics are available."}',
             'value_es' => '{"0":"También puedes utilizar la herramienta de visualización gráfica del juego actual. Muchos eventos cuentan con indicadores estadísticos como posesión del balón, tiros, tarjetas y línea de tiempo. Incluso en partidos de esports hay estadísticas extendidas disponibles."}',
             'value_fr' => '{"0":"Vous pouvez également utiliser l’outil de visualisation graphique du jeu en cours. De nombreux événements sont accompagnés d’indicateurs statistiques tels que la possession de balle, les tirs, les cartons et la timeline. Même dans les matchs d’esport, des statistiques étendues sont disponibles."}',
             'value_pt' => '{"0":"Você também pode usar a ferramenta de visualização gráfica do jogo atual. Muitos eventos são acompanhados por indicadores estatísticos como posse de bola, chutes, cartões e linha do tempo. Mesmo nas partidas de esports, estatísticas detalhadas estão disponíveis."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The odds update speed is high, allowing you to react promptly to changes in the game situation."}',
             'value_es' => '{"0":"La velocidad de actualización de cuotas es alta, lo que te permite reaccionar a tiempo a los cambios en el desarrollo del juego."}',
             'value_fr' => '{"0":"La vitesse de mise à jour des cotes est élevée, ce qui vous permet de réagir rapidement aux changements de situation dans le jeu."}',
             'value_pt' => '{"0":"A velocidade de atualização das odds é alta, permitindo que você reaja rapidamente às mudanças no andamento do jogo."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, live events often feature «BetBuilder» offers, which allow you to create combined bets within a single event."}',
             'value_es' => '{"0":"Además, los eventos en vivo suelen tener ofertas de «BetBuilder», que te permiten crear apuestas combinadas dentro de un solo evento."}',
             'value_fr' => '{"0":"De plus, les événements live proposent souvent des options «BetBuilder», qui permettent de créer des paris combinés au sein d’un même événement."}',
             'value_pt' => '{"0":"Além disso, os eventos ao vivo frequentemente oferecem a opção «BetBuilder», que permite criar apostas combinadas dentro de um único evento."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz supports live streaming for a wide range of sporting events, including football, table tennis, volleyball, esports, and other disciplines. To access the streams, you need to be logged into your account and have a positive balance or place a bet on the event."}',
             'value_es' => '{"0":"888starz ofrece transmisiones en vivo para una gran variedad de eventos deportivos, incluyendo fútbol, tenis de mesa, voleibol, deportes electrónicos y otros. Para acceder a las transmisiones, debes iniciar sesión en tu cuenta y tener saldo positivo o haber apostado en el evento."}',
             'value_fr' => '{"0":"888starz propose des retransmissions en direct pour un grand nombre d’événements sportifs, notamment le football, le tennis de table, le volley-ball, l’esport et bien d’autres disciplines. Pour accéder aux flux en direct, vous devez être connecté à votre compte et disposer d’un solde positif ou avoir placé un pari sur l’événement."}',
             'value_pt' => '{"0":"A 888starz oferece transmissões ao vivo para uma ampla variedade de eventos esportivos, incluindo futebol, tênis de mesa, voleibol, e esportes eletrônicos. Para assistir às transmissões, é necessário estar logado na sua conta e ter saldo positivo ou ter feito uma aposta no evento."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 26
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The video quality ranges from SD to HD depending on the event. A notable advantage is the availability of esports streams. You can watch tournaments for popular games such as CS:GO, Dota 2, and League of Legends."}',
             'value_es' => '{"0":"La calidad de la imagen varía entre SD y HD, dependiendo del evento. Una ventaja destacada son las transmisiones de deportes electrónicos, donde puedes ver torneos de juegos populares como CS:GO, Dota 2 y League of Legends."}',
             'value_fr' => '{"0":"La qualité de l’image varie de la SD à la HD selon l’événement. Un avantage particulier est la diffusion en direct des compétitions d’esport, avec la possibilité de regarder des tournois de jeux populaires comme CS:GO, Dota 2 et League of Legends."}',
             'value_pt' => '{"0":"A qualidade do vídeo varia de SD a HD, dependendo do evento. Um diferencial importante são as transmissões de eSports, que incluem torneios de jogos populares como CS:GO, Dota 2 e League of Legends."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 27
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 28
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In addition to sports betting, 888starz offers a fully developed casino section with thousands of slots and live dealer games. The platform features over 100 providers, including Pragmatic Play, Evolution, NetEnt, Playson, and EGT."}',
             'value_es' => '{"0":"Además de las apuestas deportivas, 888starz cuenta con una sección de casino completa con miles de tragamonedas y juegos con crupieres en vivo. Hay más de 100 proveedores disponibles, como Pragmatic Play, Evolution, NetEnt, Playson y EGT."}',
             'value_fr' => '{"0":"En plus des paris sportifs, 888starz propose une section casino complète avec des milliers de machines à sous et des jeux avec croupiers en direct. Plus de 100 fournisseurs sont disponibles, dont Pragmatic Play, Evolution, NetEnt, Playson et EGT."}',
             'value_pt' => '{"0":"Além das apostas esportivas, a 888starz oferece uma seção de cassino completa com milhares de slots e jogos com crupiês ao vivo. A plataforma conta com mais de 100 provedores, incluindo Pragmatic Play, Evolution, NetEnt, Playson e EGT."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 29
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The live casino includes classic tables such as roulette, blackjack, and baccarat. There are also sections dedicated to tournaments, bonus draws, and crypto games. This means that 888starz users can even play slots using cryptocurrency."}',
             'value_es' => '{"0":"En el casino en vivo encontrarás mesas clásicas como ruleta, blackjack y bacará. También hay secciones con torneos, sorteos de bonos y juegos con criptomonedas. Así que los usuarios de 888starz pueden jugar en las tragamonedas incluso con criptomonedas."}',
             'value_fr' => '{"0":"Le casino en direct propose des tables classiques comme la roulette, le blackjack et le baccara. Il existe également des sections consacrées aux tournois, aux tirages bonus et aux jeux en cryptomonnaies. Ainsi, les utilisateurs de 888starz peuvent même jouer aux machines à sous avec des cryptos."}',
             'value_pt' => '{"0":"No cassino ao vivo, estão disponíveis mesas clássicas como roleta, blackjack e bacará. Há também seções com torneios, sorteios de bônus e jogos com criptomoedas. Ou seja, os jogadores da 888starz podem até jogar slots usando criptomoedas."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 30
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 31
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz uses SSL encryption, two-factor authentication, and a multi-level transaction verification system. The company complies with international AML/KYC standards, which require users to verify their identity before withdrawing large amounts."}',
             'value_es' => '{"0":"888starz utiliza cifrado SSL, autenticación de dos factores y un sistema multinivel de verificación de transacciones. La empresa cumple con los estándares internacionales de AML/KYC, lo que exige a los jugadores verificar su identidad para retirar sumas importantes."}',
             'value_fr' => '{"0":"888starz utilise un chiffrement SSL, l’authentification à deux facteurs et un système de vérification des transactions à plusieurs niveaux. L’entreprise respecte les normes internationales AML/KYC, ce qui impose aux utilisateurs de vérifier leur identité pour les retraits importants."}',
             'value_pt' => '{"0":"A 888starz utiliza criptografia SSL, autenticação de dois fatores e um sistema de verificação de transações em múltiplos níveis. A empresa segue os padrões internacionais de AML/KYC, exigindo que os usuários passem por verificação de identidade para saques de grandes valores."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 32
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, the platform includes a «Responsible Gaming» section with tools for self-exclusion, deposit limits, betting limits, and session time restrictions."}',
             'value_es' => '{"0":"Además, la plataforma cuenta con una sección de «Juego Responsable», donde se pueden activar herramientas de autoexclusión, límites de depósito, límites de apuestas y duración de las sesiones."}',
             'value_fr' => '{"0":"La plateforme dispose également d’une section «Jeu Responsable», proposant des outils d’auto-exclusion, de limitation des dépôts, des mises et de la durée des sessions de jeu."}',
             'value_pt' => '{"0":"Além disso, a plataforma possui uma seção de «Jogo Responsável», com ferramentas de autoexclusão, limites de depósito, limites de apostas e controle de tempo de jogo."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 33
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 34
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker supports over 100 payment methods, including popular bank cards like Visa and Mastercard, e-wallets such as Skrill, Jeton, and Perfect Money. You can also use cryptocurrencies like Bitcoin, USDT, Ethereum, Litecoin, and Dogecoin."}',
             'value_es' => '{"0":"La casa de apuestas admite más de 100 métodos de pago, entre ellos tarjetas bancarias populares como Visa y Mastercard, monederos electrónicos como Skrill, Jeton y Perfect Money. También se pueden utilizar criptomonedas como Bitcoin, USDT, Ethereum, Litecoin y Dogecoin."}',
             'value_fr' => '{"0":"Le bookmaker prend en charge plus de 100 méthodes de paiement, notamment les cartes bancaires populaires comme Visa et Mastercard, les portefeuilles électroniques tels que Skrill, Jeton et Perfect Money. Il est également possible d’utiliser des cryptomonnaies comme Bitcoin, USDT, Ethereum, Litecoin et Dogecoin."}',
             'value_pt' => '{"0":"A casa de apostas oferece suporte para mais de 100 métodos de pagamento, incluindo cartões bancários populares como Visa e Mastercard, carteiras eletrónicas como Skrill, Jeton e Perfect Money. Também é possível utilizar criptomoedas como Bitcoin, USDT, Ethereum, Litecoin e Dogecoin."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 35
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit starts from €1. Withdrawals are usually processed within 15 minutes to a few hours, depending on the method and amount. The bookmaker does not charge a withdrawal fee, although fees may apply from the payment provider."}',
             'value_es' => '{"0":"El depósito mínimo es de €1. Las retiradas suelen procesarse entre 15 minutos y algunas horas, según el método y la cantidad. El operador no cobra comisiones, aunque podrían aplicarse cargos del proveedor de pagos."}',
             'value_fr' => '{"0":"Le dépôt minimum est à partir de 1 €. Les retraits sont généralement traités entre 15 minutes et quelques heures, selon la méthode et le montant. Aucun frais n’est facturé par le bookmaker, mais des frais peuvent être appliqués par le prestataire de paiement."}',
             'value_pt' => '{"0":"O depósito mínimo é de €1. Os levantamentos geralmente são processados entre 15 minutos e algumas horas, dependendo do método e do valor. A casa de apostas não cobra comissões, mas taxas do provedor de pagamento podem ser aplicadas."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 36
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Below is a list of the main payment methods available on the website:"}',
             'value_es' => '{"0":"A continuación, presentamos los principales métodos de pago disponibles en el sitio:"}',
             'value_fr' => '{"0":"Voici ci-dessous les principales méthodes de paiement disponibles sur le site :"}',
             'value_pt' => '{"0":"Abaixo estão listados os principais métodos de pagamento disponíveis no site:"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 37
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 38
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 39
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Customer support is available 24/7 via live chat, email, and Telegram."}',
             'value_es' => '{"0":"El servicio de atención al cliente está disponible las 24 horas a través de chat en vivo, correo electrónico y Telegram."}',
             'value_fr' => '{"0":"Le service client est disponible 24h/24 via le chat en direct, l’e-mail et Telegram."}',
             'value_pt' => '{"0":"O suporte ao cliente está disponível 24 horas por dia via chat ao vivo, e-mail e Telegram."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 40
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 41
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of events and sports",
                                 "1":"High odds",
                                 "2":"User-friendly interface",
                                 "3":"24/7 support"},
                             "1":
                                {"0":"Limited live streams"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de eventos y deportes",
                                 "1":"Cuotas altas",
                                 "2":"Interfaz fácil de usar",
                                 "3":"Atención al cliente 24/7"},
                             "1":
                                {"0":"Transmisiones en vivo limitadas"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d’événements et de sports",
                                 "1":"Cotes élevées",
                                 "2":"Interface conviviale",
                                 "3":"Assistance 24h/24 et 7j/7"},
                             "1":
                                {"0":"Diffusions en direct limitées"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de eventos e esportes",
                                 "1":"Cotações altas",
                                 "2":"Interface amigável",
                                 "3":"Suporte 24/7"},
                             "1":
                                {"0":"Transmissões ao vivo limitadas"}
                             }',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 42
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"888starz FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 888starz"}',
                'value_fr' => '{"0":"FAQ de 888starz"}',
                'value_pt' => '{"0":"Perguntas frequentes do 888starz"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 43
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Is verification required?"}',
             'value_es' => '{"0":"¿Se requiere verificación?"}',
             'value_fr' => '{"0":"La vérification est-elle nécessaire ?"}',
             'value_pt' => '{"0":"É necessária verificação?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 44
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, verification is mandatory for withdrawals. You need to provide documents that confirm your identity."}',
             'value_es' => '{"0":"Sí, la verificación es obligatoria para retirar fondos. Debes proporcionar documentos que acrediten tu identidad."}',
             'value_fr' => '{"0":"Oui, la vérification est obligatoire pour les retraits. Vous devez fournir des documents prouvant votre identité."}',
             'value_pt' => '{"0":"Sim, a verificação é obrigatória para saques. É necessário fornecer documentos que comprovem sua identidade."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 45
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Are cryptocurrencies supported?"}',
             'value_es' => '{"0":"¿Se admiten criptomonedas?"}',
             'value_fr' => '{"0":"Les cryptomonnaies sont-elles prises en charge ?"}',
             'value_pt' => '{"0":"As criptomoedas são suportadas?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 46
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, you can use dozens of cryptocurrencies, including Bitcoin, Ethereum, and Tether."}',
             'value_es' => '{"0":"Sí, puedes usar decenas de criptomonedas, incluidas Bitcoin, Ethereum y Tether."}',
             'value_fr' => '{"0":"Oui, vous pouvez utiliser des dizaines de cryptomonnaies, y compris le Bitcoin, l’Ethereum et le Tether."}',
             'value_pt' => '{"0":"Sim, é possível usar dezenas de criptomoedas, incluindo Bitcoin, Ethereum e Tether."}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 47
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Can I watch live streams for free?"}',
             'value_es' => '{"0":"¿Puedo ver transmisiones en vivo gratis?"}',
             'value_fr' => '{"0":"Puis-je regarder les retransmissions en direct gratuitement ?"}',
             'value_pt' => '{"0":"Posso assistir transmissões ao vivo de graça?"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 48
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, if you are logged in and have a positive balance or have placed a bet on the match."}',
             'value_es' => '{"0":"Sí, si has iniciado sesión y tienes saldo positivo o has hecho una apuesta en el partido."}',
             'value_fr' => '{"0":"Oui, si vous êtes connecté et que vous avez un solde positif ou que vous avez parié sur le match."}',
             'value_pt' => '{"0":"Sim, se você estiver logado e tiver saldo positivo ou tiver feito uma aposta na partida."}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 49
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit amount?"}',
             'value_es' => '{"0":"¿Cuál es el monto mínimo de depósito?"}',
             'value_fr' => '{"0":"Quel est le montant minimum du dépôt ?"}',
             'value_pt' => '{"0":"Qual é o valor mínimo de depósito?"}',
             'order' => 49
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 50
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit starts from €1."}',
             'value_es' => '{"0":"El depósito mínimo es a partir de €1."}',
             'value_fr' => '{"0":"Le dépôt minimum commence à partir de 1 €."}',
             'value_pt' => '{"0":"O depósito mínimo é a partir de €1."}',
             'order' => 50
            ]
        );
    }
}
