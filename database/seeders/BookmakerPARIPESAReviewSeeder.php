<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
             'value_en' => '{"0":"PARIPESA Review"}',
             'value_es' => '{"0":"Reseña de PARIPESA"}',
             'value_fr' => '{"0":"Avis sur PARIPESA"}',
             'value_pt' => '{"0":"Análise da PARIPESA"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA has been operating since 2019 under a Curaçao license and is legally registered through Optim Development B.V. in Cyprus. The site targets an international audience, supports over 50 languages, and is accessible in dozens of countries across Asia, Africa, Europe, and Latin America. The company also holds separate local licenses in Nigeria, Kenya, Zambia, and Tanzania. Between 2023 and 2025, the website design, mobile apps, and user account features were updated. The main target audience includes users looking for access to a wide range of sports betting options and games, with the ability to use both traditional payment methods and cryptocurrencies."}',
             'value_es' => '{"0":"PARIPESA opera desde 2019 con una licencia de Curazao y está registrada legalmente a través de la empresa Optim Development B.V. en Chipre. El sitio está orientado a una audiencia internacional, admite más de 50 idiomas y está disponible en decenas de países de Asia, África, Europa y América Latina. La empresa también posee licencias locales en Nigeria, Kenia, Zambia y Tanzania. Entre 2023 y 2025, se renovaron el diseño del sitio web, las aplicaciones móviles y las funciones de la cuenta personal. El público objetivo principal son los usuarios que buscan acceso a una amplia oferta de apuestas deportivas y juegos, con la posibilidad de utilizar tanto métodos de pago tradicionales como criptomonedas."}',
             'value_fr' => '{"0":"PARIPESA est en activité depuis 2019 sous licence de Curaçao et est légalement enregistrée via la société Optim Development B.V. à Chypre. Le site vise un public international, prend en charge plus de 50 langues et est disponible dans des dizaines de pays en Asie, en Afrique, en Europe et en Amérique latine. L’entreprise détient également des licences locales distinctes au Nigeria, au Kenya, en Zambie et en Tanzanie. Entre 2023 et 2025, le design du site, les applications mobiles et les fonctionnalités du compte utilisateur ont été mis à jour. Le public cible principal est constitué d’utilisateurs recherchant un large éventail d’options de paris sportifs et de jeux, avec la possibilité d’utiliser à la fois des moyens de paiement classiques et des cryptomonnaies."}',
             'value_pt' => '{"0":"A PARIPESA opera desde 2019 com uma licença de Curaçao e está legalmente registrada através da empresa Optim Development B.V., no Chipre. O site é direcionado a um público internacional, suporta mais de 50 idiomas e está disponível em dezenas de países da Ásia, África, Europa e América Latina. A empresa também possui licenças locais separadas na Nigéria, Quênia, Zâmbia e Tanzânia. Entre 2023 e 2025, o design do site, os aplicativos móveis e as funcionalidades da conta de usuário foram atualizados. O público-alvo principal são os usuários que procuram acesso a uma ampla variedade de apostas esportivas e jogos, com a possibilidade de utilizar tanto métodos de pagamento tradicionais quanto criptomoedas."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting section features over 40 different sports. Among them are football, basketball, tennis, hockey, baseball, boxing, motorsports, rugby, table tennis, cricket, and more. Less common disciplines are also available, including snooker, handball, water polo, and netball. Each day, more than a thousand events are published for both pre-match and live betting."}',
             'value_es' => '{"0":"La sección de apuestas deportivas incluye más de 40 deportes diferentes. Entre ellos se encuentran el fútbol, el baloncesto, el tenis, el hockey, el béisbol, el boxeo, los deportes de motor, el rugby, el tenis de mesa, el críquet y muchos más. También se ofrecen disciplinas menos comunes como el snooker, el balonmano, el waterpolo y el netball. Cada día se publican más de mil eventos para apostar en formato pre-partido y en vivo."}',
             'value_fr' => '{"0":"La section paris sportifs propose plus de 40 disciplines différentes. Parmi elles : le football, le basketball, le tennis, le hockey, le baseball, la boxe, les sports mécaniques, le rugby, le tennis de table, le cricket, entre autres. Des disciplines moins courantes sont également disponibles, telles que le snooker, le handball, le water-polo et le netball. Chaque jour, plus de mille événements sont proposés en pré-match et en direct."}',
             'value_pt' => '{"0":"A seção de apostas esportivas oferece mais de 40 modalidades diferentes. Entre elas estão futebol, basquete, tênis, hóquei, beisebol, boxe, esportes a motor, rúgbi, tênis de mesa, críquete e outros. Também há esportes menos comuns como sinuca, handebol, polo aquático e netbol. Diariamente, são publicados mais de mil eventos para apostas em pré-jogo e ao vivo."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Football offers the broadest selection of events. PARIPESA covers both international tournaments and national leagues, including lower divisions. Regional championships, which are often not available on other betting platforms, are also included."}',
             'value_es' => '{"0":"El fútbol ofrece la mayor variedad de eventos. En PARIPESA se presentan tanto torneos internacionales como ligas nacionales, incluidas divisiones inferiores. También se cubren campeonatos regionales que no siempre están disponibles en otras casas de apuestas."}',
             'value_fr' => '{"0":"Le football reste le sport le plus représenté. PARIPESA couvre à la fois les tournois internationaux et les championnats nationaux, y compris les divisions inférieures. Des compétitions régionales rarement proposées par d’autres opérateurs sont également disponibles."}',
             'value_pt' => '{"0":"O futebol é o esporte com maior variedade de eventos. A PARIPESA cobre tanto torneios internacionais quanto ligas nacionais, incluindo divisões inferiores. Campeonatos regionais, que muitas vezes não estão disponíveis em outras casas de apostas, também são incluídos."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"This means users always have access to a large pool of matches to choose from. Below is an overview of the main sports offered on the site:"}',
             'value_es' => '{"0":"Esto permite a los usuarios elegir siempre entre una gran cantidad de partidos. A continuación, presentamos los principales deportes disponibles en esta plataforma:"}',
             'value_fr' => '{"0":"Les utilisateurs peuvent donc choisir parmi un large éventail de matchs. Voici ci-dessous les principaux sports proposés sur la plateforme :"}',
             'value_pt' => '{"0":"Assim, os usuários sempre têm acesso a uma ampla seleção de partidas. Abaixo, apresentamos as principais modalidades esportivas disponíveis nesta plataforma:"}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The odds on PARIPESA are generally on par with those offered by other bookmakers. For example, in football matches such as the Champions League or major European leagues, odds on the main outcome usually range from 1.80 to 3.50. For totals or handicaps, the odds typically fall within the 1.85–1.95 range, allowing players to achieve solid returns."}',
             'value_es' => '{"0":"Las cuotas en PARIPESA son, en promedio, similares a las que ofrecen otras casas de apuestas. Por ejemplo, en partidos de fútbol de la Liga de Campeones o de las principales ligas europeas, las cuotas en el resultado principal suelen variar entre 1.80 y 3.50. Para apuestas en totales o hándicaps, las cuotas suelen estar entre 1.85 y 1.95, lo que permite a los jugadores obtener buenas ganancias."}',
             'value_fr' => '{"0":"Les cotes sur PARIPESA sont en moyenne équivalentes à celles proposées par d’autres bookmakers. Par exemple, dans les matchs de football de la Ligue des champions ou des grands championnats européens, les cotes sur le résultat principal varient généralement entre 1.80 et 3.50. Pour les paris sur les totaux ou les handicaps, les cotes se situent souvent entre 1.85 et 1.95, ce qui permet aux joueurs d’obtenir de bons gains."}',
             'value_pt' => '{"0":"As odds na PARIPESA são, em média, semelhantes às oferecidas por outras casas de apostas. Por exemplo, em partidas de futebol da Liga dos Campeões ou dos principais campeonatos europeus, as odds para o resultado principal geralmente variam entre 1.80 e 3.50. Para apostas em totais ou handicaps, os valores costumam ficar entre 1.85 e 1.95, permitindo bons retornos para os apostadores."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In basketball, such as NBA or European leagues, odds for a team to win usually range from 1.90 to 2.10. For less popular sports events or lower divisions, the odds can be higher — for example, between 2.50 and 4.00."}',
             'value_es' => '{"0":"En baloncesto, como en la NBA o en ligas europeas, las cuotas por la victoria de un equipo suelen situarse entre 1.90 y 2.10. En eventos deportivos menos populares o divisiones inferiores, las cuotas pueden ser más altas, por ejemplo, entre 2.50 y 4.00."}',
             'value_fr' => '{"0":"En basketball, notamment en NBA ou dans les ligues européennes, les cotes pour une victoire d’équipe sont généralement autour de 1.90 à 2.10. Pour des événements sportifs moins populaires ou dans les divisions inférieures, les cotes peuvent être plus élevées — entre 2.50 et 4.00, par exemple."}',
             'value_pt' => '{"0":"No basquete, como na NBA ou nas ligas europeias, as odds para a vitória de uma equipe geralmente ficam entre 1.90 e 2.10. Em eventos esportivos menos populares ou em divisões inferiores, os valores podem ser mais altos — por exemplo, entre 2.50 e 4.00."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA is also notable for its fast odds updates in live mode, which allows users to bet based on the real-time dynamics of a match. This is especially important in football and basketball, where the situation can change very quickly. As a result, players can adjust their bets according to how the events unfold."}',
             'value_es' => '{"0":"PARIPESA también se destaca por su rápida actualización de cuotas en el modo en vivo, lo que permite apostar teniendo en cuenta la dinámica actual del partido. Esto es especialmente importante en fútbol y baloncesto, donde los eventos pueden cambiar rápidamente. Así, los jugadores pueden ajustar sus apuestas en función del desarrollo del juego."}',
             'value_fr' => '{"0":"PARIPESA se distingue également par la rapidité de mise à jour de ses cotes en direct, ce qui permet aux utilisateurs de parier en fonction de la dynamique en temps réel du match. Cela est particulièrement important dans le football et le basketball, où la situation peut évoluer très rapidement. Les joueurs peuvent donc ajuster leurs mises en fonction du déroulement du jeu."}',
             'value_pt' => '{"0":"A PARIPESA também se destaca pela atualização rápida das odds no modo ao vivo, o que permite apostar levando em conta a dinâmica atual da partida. Isso é especialmente importante no futebol e no basquete, onde os eventos podem mudar rapidamente. Assim, os jogadores podem ajustar suas apostas de acordo com o andamento do jogo."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"For popular events, PARIPESA offers a wide range of betting options. For example, football matches can feature up to 1,000 different betting markets. Players can place bets on handicaps, totals, number of goals, number of corners, yellow cards, correct score, and individual team or player statistics."}',
             'value_es' => '{"0":"En los eventos populares, PARIPESA ofrece una gran variedad de opciones de apuesta. Por ejemplo, los partidos de fútbol pueden incluir hasta 1.000 mercados distintos. Los jugadores pueden apostar en hándicaps, totales, número de goles, saques de esquina, tarjetas amarillas, marcador exacto y estadísticas individuales de equipos o jugadores."}',
             'value_fr' => '{"0":"Pour les événements populaires, PARIPESA propose un large éventail d’options de paris. Par exemple, un match de football peut comporter jusqu’à 1 000 types de paris différents. Les joueurs peuvent parier sur les handicaps, les totaux, le nombre de buts, les corners, les cartons jaunes, le score exact, ou encore les statistiques individuelles des équipes ou des joueurs."}',
             'value_pt' => '{"0":"Em eventos populares, a PARIPESA oferece uma ampla variedade de opções de apostas. Por exemplo, uma partida de futebol pode ter até 1.000 mercados diferentes. Os usuários podem apostar em handicaps, totais, número de gols, escanteios, cartões amarelos, placar exato e estatísticas individuais de equipes ou jogadores."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, bets are available on the number of points, games, or sets."}',
             'value_es' => '{"0":"En tenis, se pueden hacer apuestas sobre el número de puntos, juegos o sets."}',
             'value_fr' => '{"0":"En tennis, les paris portent sur le nombre de points, de jeux ou de sets."}',
             'value_pt' => '{"0":"No tênis, é possível apostar no número de pontos, games ou sets."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The platform also allows for combination bets. A bet builder is available, enabling users to create custom combo bets within a single match — significantly expanding the range of betting opportunities."}',
             'value_es' => '{"0":"También existe la posibilidad de realizar apuestas combinadas. La plataforma incluye un creador de apuestas que permite construir combinaciones personalizadas dentro de un solo partido, lo que amplía considerablemente las opciones para los usuarios."}',
             'value_fr' => '{"0":"Il est également possible de placer des paris combinés. La plateforme propose un constructeur de paris, permettant de créer des combinaisons personnalisées sur une seule rencontre, ce qui élargit considérablement les possibilités de jeu."}',
             'value_pt' => '{"0":"Também há a possibilidade de fazer apostas combinadas. A plataforma disponibiliza um criador de apostas que permite montar combinações personalizadas dentro de um único jogo, ampliando significativamente as opções para os apostadores."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo"}',
                'value_fr' => '{"0":"Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In live mode, the platform offers betting on several hundred events daily. Odds are updated quickly, which is important during fast-changing situations, especially in football."}',
             'value_es' => '{"0":"En el modo en vivo, la plataforma ofrece apuestas en varios cientos de eventos cada día. Las cuotas se actualizan rápidamente, lo cual es fundamental cuando los acontecimientos cambian con rapidez, como en el fútbol."}',
             'value_fr' => '{"0":"En mode live, la plateforme propose des paris sur plusieurs centaines d’événements chaque jour. Les cotes sont mises à jour rapidement, ce qui est essentiel lors de situations changeantes, notamment dans le football."}',
             'value_pt' => '{"0":"No modo ao vivo, a plataforma oferece apostas em várias centenas de eventos diariamente. As odds são atualizadas rapidamente, o que é essencial em esportes com alta dinâmica, como o futebol."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Players can follow the course of matches through graphical representation with real-time statistics in a dedicated section. It includes data such as shots, ball possession, dangerous attacks, cards, and substitutions."}',
             'value_es' => '{"0":"Los jugadores pueden seguir el desarrollo de los partidos mediante gráficos con estadísticas en tiempo real en una sección dedicada. Allí se muestra información sobre disparos, posesión del balón, ataques peligrosos, tarjetas y sustituciones."}',
             'value_fr' => '{"0":"Les joueurs peuvent suivre le déroulement des matchs via une interface graphique avec des statistiques en temps réel dans une section dédiée. On y trouve des données sur les tirs, la possession de balle, les attaques dangereuses, les cartons et les remplacements."}',
             'value_pt' => '{"0":"Os usuários podem acompanhar o andamento das partidas por meio de gráficos com estatísticas em tempo real em uma seção dedicada. Estão disponíveis dados como finalizações, posse de bola, ataques perigosos, cartões e substituições."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"A partial or full cash-out function is available, allowing users to close their bets early. The platform also supports multi-window mode, enabling simultaneous viewing of several live events."}',
             'value_es' => '{"0":"Está disponible la función de cash-out total o parcial, que permite cerrar una apuesta antes de que finalice. La plataforma también admite el modo de múltiples ventanas para ver varios eventos en vivo al mismo tiempo."}',
             'value_fr' => '{"0":"Une fonction de cash-out partiel ou total est disponible, permettant de clôturer un pari avant la fin du match. La plateforme prend également en charge le mode multi-fenêtres pour suivre plusieurs événements en direct simultanément."}',
             'value_pt' => '{"0":"A função de cash-out parcial ou total está disponível, permitindo encerrar apostas antecipadamente. A plataforma também oferece suporte ao modo de múltiplas janelas para visualizar vários eventos ao vivo ao mesmo tempo."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Live video streams on PARIPESA are not available for all matches. Most often, esports events are streamed, and occasionally football, cricket, or tennis matches."}',
             'value_es' => '{"0":"Las transmisiones en vivo por vídeo en PARIPESA no están disponibles para todos los partidos. Con mayor frecuencia se transmiten eventos de deportes electrónicos, y en ocasiones partidos de fútbol, críquet o tenis."}',
             'value_fr' => '{"0":"Les retransmissions vidéo en direct sur PARIPESA ne sont pas disponibles pour tous les matchs. Le plus souvent, ce sont les compétitions d’e-sport qui sont diffusées, et parfois des matchs de football, de cricket ou de tennis."}',
             'value_pt' => '{"0":"As transmissões de vídeo ao vivo na PARIPESA não estão disponíveis para todas as partidas. Com mais frequência, são transmitidos eventos de eSports e, ocasionalmente, partidas de futebol, críquete ou tênis."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, instead of video, users are offered graphical representations with animated events and supporting statistics. This allows users to follow the action even with a weak internet connection; however, it should be noted that this is not a full substitute for watching a match in real time."}',
             'value_es' => '{"0":"En la mayoría de los casos, en lugar de vídeo se ofrece información gráfica con eventos animados y estadísticas asociadas. Esto permite seguir el juego incluso con una conexión a internet débil; sin embargo, hay que decir que esta opción no reemplaza la experiencia de ver el partido en directo."}',
             'value_fr' => '{"0":"Dans la majorité des cas, une animation graphique accompagnée de statistiques en temps réel est proposée à la place de la vidéo. Cela permet de suivre l’évolution du match même avec une connexion Internet faible ; néanmoins, cela ne remplace pas la diffusion en direct complète d’un événement."}',
             'value_pt' => '{"0":"Na maioria dos casos, em vez do vídeo, é oferecida uma visualização gráfica com eventos animados e estatísticas complementares. Isso permite acompanhar o jogo mesmo com uma conexão de internet fraca; no entanto, vale ressaltar que essa solução não substitui a experiência de assistir a uma partida ao vivo."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"As of now, full support for live streaming is available only for a limited number of events."}',
             'value_es' => '{"0":"Actualmente, la compatibilidad total con retransmisiones en vivo solo está disponible para una parte limitada de los eventos."}',
             'value_fr' => '{"0":"À l’heure actuelle, la diffusion vidéo en direct n’est pleinement prise en charge que pour une partie des événements."}',
             'value_pt' => '{"0":"Atualmente, o suporte completo para transmissões ao vivo está disponível apenas para uma parte dos eventos."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 26
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In addition to sports betting, PARIPESA provides access to a casino section. It features over 8,000 games, including slots, card games, roulette, baccarat, live casino with real dealers, various TV games, crash games, and table game simulators."}',
             'value_es' => '{"0":"Además de las apuestas deportivas, PARIPESA ofrece acceso a una sección de casino. Cuenta con más de 8.000 juegos, entre ellos tragamonedas, juegos de cartas, ruleta, baccarat, casino en vivo con crupieres reales, diversos juegos de TV, juegos crash y simuladores de juegos de mesa."}',
             'value_fr' => '{"0":"En plus des paris sportifs, PARIPESA propose un accès à une section casino. On y trouve plus de 8 000 jeux, dont des machines à sous, des jeux de cartes, de la roulette, du baccara, un live casino avec de vrais croupiers, des jeux télévisés, des jeux crash et des simulateurs de jeux de table."}',
             'value_pt' => '{"0":"Além das apostas esportivas, a PARIPESA oferece acesso à seção de cassino. São mais de 8.000 jogos disponíveis, incluindo slots, jogos de cartas, roleta, bacará, cassino ao vivo com crupiês reais, diversos jogos de TV, jogos crash e simuladores de jogos de mesa."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 27
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The games are provided by well-known developers such as Pragmatic Play, BGaming, NetEnt, and Evolution."}',
             'value_es' => '{"0":"Los juegos provienen de proveedores reconocidos como Pragmatic Play, BGaming, NetEnt y Evolution."}',
             'value_fr' => '{"0":"Les jeux sont fournis par des éditeurs réputés tels que Pragmatic Play, BGaming, NetEnt et Evolution."}',
             'value_pt' => '{"0":"Os jogos são fornecidos por desenvolvedores renomados como Pragmatic Play, BGaming, NetEnt e Evolution."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 28
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Special emphasis is placed on live games, which are streamed in real time. For new users, a demo mode is available, allowing them to explore the gameplay without spending money."}',
             'value_es' => '{"0":"Se da especial importancia a los juegos en vivo, que se transmiten en tiempo real. Para los nuevos usuarios, hay disponible un modo demo que permite familiarizarse con el juego sin gastar dinero."}',
             'value_fr' => '{"0":"Une attention particulière est accordée aux jeux en direct, diffusés en temps réel. Un mode démo est également disponible pour les nouveaux utilisateurs, leur permettant de découvrir le gameplay sans dépenser d\'argent."}',
             'value_pt' => '{"0":"Há um foco especial nos jogos ao vivo, que são transmitidos em tempo real. Para novos usuários, existe um modo demo que permite conhecer a jogabilidade sem gastar dinheiro."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 29
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 30
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA operates under a Curaçao license. The platform uses SSL encryption to protect user data, implements anti-money laundering policies, and requires mandatory verification when withdrawing funds for the first time or after reaching a certain amount in winnings."}',
             'value_es' => '{"0":"PARIPESA opera bajo una licencia de Curazao. La plataforma utiliza encriptación SSL para proteger los datos de los usuarios, aplica políticas contra el lavado de dinero y exige verificación obligatoria al realizar el primer retiro o al alcanzar una cierta cantidad de ganancias."}',
             'value_fr' => '{"0":"PARIPESA fonctionne sous licence de Curaçao. La plateforme utilise le chiffrement SSL pour protéger les données des utilisateurs, applique des politiques de lutte contre le blanchiment d\'argent et impose une vérification obligatoire lors du premier retrait ou après avoir atteint un certain montant de gains."}',
             'value_pt' => '{"0":"A PARIPESA opera sob uma licença de Curaçao. A plataforma utiliza criptografia SSL para proteger os dados dos usuários, aplica políticas contra lavagem de dinheiro e exige verificação obrigatória no primeiro saque ou após atingir um determinado valor em ganhos."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 31
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"For dedicated players, responsible gaming tools are available, including deposit limits, self-exclusion, and the option to temporarily block the account."}',
             'value_es' => '{"0":"Para los jugadores habituales, hay disponibles herramientas de control del juego: límites de depósito, autoexclusión y la posibilidad de bloquear temporalmente la cuenta."}',
             'value_fr' => '{"0":"Des outils de contrôle du jeu sont disponibles pour les joueurs réguliers : définition de limites de dépôt, possibilité d\'auto-exclusion ou de blocage temporaire du compte."}',
             'value_pt' => '{"0":"Para jogadores frequentes, estão disponíveis ferramentas de controle de jogo: definição de limites de depósito, opção de autoexclusão e bloqueio temporário da conta."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 32
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 33
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Players can fund their accounts using bank cards, e-wallets, and cryptocurrencies. The minimum deposit depends on the country and payment method, but typically starts from €1. Withdrawals are also available starting from €1. The maximum amount per transaction is up to €10,000, though it may vary depending on the chosen withdrawal method."}',
             'value_es' => '{"0":"Los jugadores pueden recargar su cuenta mediante tarjetas bancarias, monederos electrónicos y criptomonedas. El depósito mínimo depende del país y del método elegido, pero generalmente parte desde 1€. Las retiradas también están disponibles desde 1€. El importe máximo por transacción puede alcanzar los 10.000€, aunque esto varía según el método de retirada."}',
             'value_fr' => '{"0":"Les joueurs peuvent recharger leur compte via cartes bancaires, portefeuilles électroniques et cryptomonnaies. Le dépôt minimum dépend du pays et du mode de paiement choisi, mais commence généralement à partir de 1€. Les retraits sont également possibles dès 1€. Le montant maximal par transaction peut aller jusqu’à 10000€, selon la méthode de retrait utilisée."}',
             'value_pt' => '{"0":"Os jogadores podem recarregar a conta por meio de cartões bancários, carteiras eletrônicas e criptomoedas. O depósito mínimo depende do país e do método escolhido, mas normalmente começa a partir de €1. Os saques também estão disponíveis a partir de €1. O valor máximo por transação pode chegar a €10.000, dependendo do método de retirada."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 34
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Transaction speed ranges from a few minutes to several hours for electronic methods, and up to a few days for bank transfers."}',
             'value_es' => '{"0":"La velocidad de las operaciones va desde unos pocos minutos hasta varias horas en métodos electrónicos, y hasta varios días en transferencias bancarias."}',
             'value_fr' => '{"0":"La rapidité des transactions varie de quelques minutes à plusieurs heures pour les méthodes électroniques, et jusqu’à quelques jours pour les virements bancaires."}',
             'value_pt' => '{"0":"A velocidade das operações varia de alguns minutos a várias horas nos métodos eletrônicos, e até alguns dias nas transferências bancárias."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 35
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The platform supports over 20 cryptocurrencies, including popular ones like Bitcoin, Ethereum, Dogecoin, and Litecoin."}',
             'value_es' => '{"0":"La plataforma admite más de 20 criptomonedas, incluidas algunas populares como Bitcoin, Ethereum, Dogecoin y Litecoin."}',
             'value_fr' => '{"0":"La plateforme prend en charge plus de 20 cryptomonnaies, y compris des options populaires telles que Bitcoin, Ethereum, Dogecoin et Litecoin."}',
             'value_pt' => '{"0":"A plataforma oferece suporte a mais de 20 criptomoedas, incluindo opções populares como Bitcoin, Ethereum, Dogecoin e Litecoin."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 36
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 37
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 38
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Customer support is available 24/7. You can contact them via live chat, email, or phone."}',
             'value_es' => '{"0":"El servicio de atención al cliente está disponible las 24 horas. Puedes contactarlo por chat en vivo, correo electrónico o teléfono."}',
             'value_fr' => '{"0":"Le service client est disponible 24h/24 et 7j/7. Vous pouvez le contacter par chat en direct, e-mail ou téléphone."}',
             'value_pt' => '{"0":"O suporte ao cliente está disponível 24 horas por dia. Você pode entrar em contato via chat ao vivo, e-mail ou telefone."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 39
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 40
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"PARIPESA FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de PARIPESA"}',
                'value_fr' => '{"0":"FAQ de PARIPESA"}',
                'value_pt' => '{"0":"Perguntas frequentes do PARIPESA"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 41
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Can I bet with cryptocurrency?"}',
             'value_es' => '{"0":"¿Puedo apostar con criptomonedas?"}',
             'value_fr' => '{"0":"Peut-on parier avec des cryptomonnaies ?"}',
             'value_pt' => '{"0":"Posso fazer apostas com criptomoedas?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 42
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, many cryptocurrencies are supported."}',
             'value_es' => '{"0":"Sí, se admiten muchas criptomonedas."}',
             'value_fr' => '{"0":"Oui, de nombreuses cryptomonnaies sont prises en charge."}',
             'value_pt' => '{"0":"Sim, várias criptomoedas são suportadas."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 43
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Minimum bets/deposits?"}',
             'value_es' => '{"0":"¿Apuestas/depositos mínimos?"}',
             'value_fr' => '{"0":"Mises/dépôts minimums ?"}',
             'value_pt' => '{"0":"Apostas/depositos mínimos?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 44
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet is from €0.3, and the minimum deposit is from €1."}',
             'value_es' => '{"0":"La apuesta mínima es desde €0.3 y el depósito mínimo desde €1."}',
             'value_fr' => '{"0":"La mise minimum est à partir de 0,3 €, et le dépôt minimum à partir de 1 €."}',
             'value_pt' => '{"0":"A aposta mínima é a partir de €0,3, e o depósito mínimo a partir de €1."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 45
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Is live video available?"}',
             'value_es' => '{"0":"¿Está disponible el video en vivo?"}',
             'value_fr' => '{"0":"La vidéo en direct est-elle disponible ?"}',
             'value_pt' => '{"0":"O vídeo ao vivo está disponível?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 46
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, for football, cricket, and esports matches."}',
             'value_es' => '{"0":"Sí, en partidos de fútbol, críquet y esports."}',
             'value_fr' => '{"0":"Oui, pour les matchs de football, cricket et esports."}',
             'value_pt' => '{"0":"Sim, em partidas de futebol, críquete e esports."}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 47
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Payout speed?"}',
             'value_es' => '{"0":"¿Velocidad de pagos?"}',
             'value_fr' => '{"0":"Délai de paiement ?"}',
             'value_pt' => '{"0":"Velocidade de pagamentos?"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 48
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Usually up to 15 minutes for electronic methods and 3–7 days for bank cards."}',
             'value_es' => '{"0":"Generalmente hasta 15 minutos para métodos electrónicos y de 3 a 7 días para tarjetas bancarias."}',
             'value_fr' => '{"0":"Généralement jusqu’à 15 minutes pour les méthodes électroniques et de 3 à 7 jours pour les cartes bancaires."}',
             'value_pt' => '{"0":"Geralmente até 15 minutos para métodos eletrônicos e de 3 a 7 dias para cartões bancários."}',
             'order' => 48
            ]
        );
    }
}
