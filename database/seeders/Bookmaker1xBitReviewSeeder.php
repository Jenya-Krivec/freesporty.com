<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1xBitReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 1
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
             'value_en' => '{"0":"1xBit Review"}',
             'value_es' => '{"0":"Reseña de 1xBit"}',
             'value_fr' => '{"0":"Avis sur 1xBit"}',
             'value_pt' => '{"0":"Análise da 1xBit"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 2
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit is a unique bookmaker in its own right, specializing in cryptocurrency sports betting and casino games. The bookmaker was launched in 2016 and has been actively growing since then, offering players a combination of sports betting, live casino, and other gambling entertainment."}',
             'value_es' => '{"0":"1xBit es una casa de apuestas única en su tipo, especializada en apuestas deportivas y juegos de casino con criptomonedas. La plataforma apareció en 2016 y desde entonces se ha desarrollado activamente, ofreciendo a los jugadores una combinación de apuestas deportivas, casino en vivo y otros tipos de entretenimiento."}',
             'value_fr' => '{"0":"1xBit est un bookmaker véritablement unique en son genre, spécialisé dans les paris sportifs et les jeux de casino en cryptomonnaies. La plateforme a été lancée en 2016 et connaît depuis une croissance continue, offrant aux joueurs un mélange de paris sportifs, de casino en direct et d\'autres jeux de hasard."}',
             'value_pt' => '{"0":"A 1xBit é uma casa de apostas verdadeiramente única, especializada em apostas desportivas e jogos de casino com criptomoedas. A plataforma surgiu em 2016 e tem crescido de forma consistente desde então, oferecendo aos jogadores uma combinação de apostas desportivas, casino ao vivo e outras formas de entretenimento."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 3
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"What sets 1xBit apart is its full focus on user anonymity, operating exclusively with cryptocurrencies and completely avoiding traditional fiat currencies. This is what makes it truly unique — 1xBit ensures complete privacy. Let’s take a closer look at what this bookmaker has to offer."}',
             'value_es' => '{"0":"Lo que distingue a 1xBit es su total enfoque en el anonimato del usuario, operando exclusivamente con criptomonedas y sin utilizar monedas tradicionales. Esa es su verdadera singularidad: 1xBit garantiza una total privacidad. Veamos más de cerca esta casa de apuestas."}',
             'value_fr' => '{"0":"La particularité de 1xBit réside dans son orientation totale vers l’anonymat des utilisateurs, avec un fonctionnement exclusivement basé sur les cryptomonnaies et sans recours aux devises traditionnelles. C’est ce qui fait son originalité : 1xBit garantit une confidentialité totale. Découvrons plus en détail ce bookmaker."}',
             'value_pt' => '{"0":"O que torna a 1xBit diferente é o seu foco total no anonimato dos utilizadores, operando exclusivamente com criptomoedas e sem qualquer envolvimento com moedas tradicionais. Essa é a sua verdadeira singularidade — a 1xBit garante total privacidade. Vamos conhecer esta casa de apostas mais de perto."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 4
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 5
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 6
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting section at 1xBit covers over 40 sports. Here, you’ll have the opportunity to place bets on popular sports like football, basketball, and tennis, as well as on less common ones such as floorball, table tennis, and Gaelic football. Esports are also well represented, with regular betting lines on Dota 2, CS:GO, League of Legends, and Valorant."}',
             'value_es' => '{"0":"La sección de apuestas deportivas en 1xBit cubre más de 40 deportes. Aquí tendrás la oportunidad de apostar en deportes populares como fútbol, baloncesto y tenis, así como en disciplinas menos comunes como floorball, tenis de mesa o fútbol gaélico. Los deportes electrónicos también están bien representados, con líneas regulares para Dota 2, CS:GO, League of Legends y Valorant."}',
             'value_fr' => '{"0":"La section des paris sportifs de 1xBit couvre plus de 40 disciplines. Vous pourrez parier sur des sports populaires comme le football, le basketball et le tennis, mais aussi sur le floorball, le tennis de table ou encore le football gaélique. Les sports électroniques sont également bien représentés, avec des lignes régulières sur Dota 2, CS:GO, League of Legends et Valorant."}',
             'value_pt' => '{"0":"A seção de apostas desportivas da 1xBit abrange mais de 40 modalidades. Aqui, você pode apostar em desportos populares como futebol, basquetebol e ténis, bem como em floorball, ténis de mesa ou futebol gaélico. Os esportes eletrônicos também estão bem representados, com linhas regulares para Dota 2, CS:GO, League of Legends e Valorant."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 7
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The platform offers all the standard markets: match result, handicap, total, and correct score. Additionally, top matches feature combined betting options and individual player event markets."}',
             'value_es' => '{"0":"La plataforma ofrece todos los mercados estándar: resultado del partido, hándicap, total, marcador exacto. Además, para los partidos más importantes hay disponibles apuestas combinadas y apuestas a eventos individuales."}',
             'value_fr' => '{"0":"La plateforme propose tous les types de paris classiques : résultat du match, handicap, total, score exact. Pour les matchs majeurs, des options de paris combinés et des marchés sur des événements individuels sont aussi disponibles."}',
             'value_pt' => '{"0":"A plataforma oferece todos os mercados padrão: resultado da partida, handicap, total, resultado exato. Nos jogos principais, também estão disponíveis opções combinadas e apostas em eventos individuais."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 8
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The interface is intuitive, with options to customize how events are displayed and a quick search function for teams or leagues. For active bettors, the «Multi-Live» feature allows you to follow several events simultaneously."}',
             'value_es' => '{"0":"La interfaz es intuitiva, con opciones para personalizar la visualización de los eventos y una función de búsqueda rápida por equipos o ligas. Para los jugadores activos, está disponible la función «Multi-Live», que permite seguir varios eventos al mismo tiempo."}',
             'value_fr' => '{"0":"L’interface est intuitive, avec la possibilité de personnaliser l’affichage des événements et d’utiliser une recherche rapide par équipe ou championnat. Pour les parieurs actifs, la fonction « Multi-Live » permet de suivre plusieurs événements en même temps."}',
             'value_pt' => '{"0":"A interface é intuitiva, com possibilidade de personalizar a exibição dos eventos e usar a pesquisa rápida por equipas ou ligas. Para os apostadores mais ativos, está disponível a função «Multi-Live», que permite acompanhar vários eventos ao mesmo tempo."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 9
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 10
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 11
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit offers some of the highest odds among cryptocurrency bookmakers, especially for top-tier sporting events. For example, in major English Premier League matches, the bookmaker may offer 1.70 for the favorite to win, 4.00–4.30 for a draw, and up to 6.00 or even higher for the underdog. In evenly matched games, odds on each team can reach 2.60."}',
             'value_es' => '{"0":"1xBit ofrece algunas de las cuotas más altas entre las casas de apuestas que operan con criptomonedas, especialmente en los eventos deportivos de primer nivel. Por ejemplo, en los principales partidos de la Premier League inglesa, la casa puede ofrecer 1.70 por la victoria del favorito, entre 4.00 y 4.30 por el empate, y hasta 6.00 o más por la victoria del no favorito. En encuentros equilibrados, las cuotas por cada equipo pueden alcanzar 2.60."}',
             'value_fr' => '{"0":"1xBit propose parmi les meilleures cotes parmi les bookmakers spécialisés en cryptomonnaies, notamment pour les grands événements sportifs. Par exemple, pour un match majeur de Premier League anglaise, le bookmaker peut offrir une cote de 1.70 pour la victoire du favori, entre 4.00 et 4.30 pour un match nul, et jusqu’à 6.00, voire plus, pour la victoire de l’outsider. Dans les rencontres équilibrées, les cotes pour chaque équipe peuvent atteindre 2.60."}',
             'value_pt' => '{"0":"A 1xBit oferece algumas das odds mais altas entre os sites de apostas que operam com criptomoedas, especialmente em grandes eventos desportivos. Por exemplo, em jogos importantes da Premier League inglesa, o site pode oferecer 1.70 para a vitória do favorito, entre 4.00 e 4.30 para o empate, e até 6.00 ou mais para a vitória do azarão. Em confrontos equilibrados, as odds para cada equipa podem chegar a 2.60."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 12
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Tennis odds are also generally strong. For example, in an ATP match between evenly matched players, the odds for each to win can be around 1.90."}',
             'value_es' => '{"0":"En el tenis, las cuotas también suelen ser altas. En un partido ATP entre jugadores de nivel similar, la cuota por la victoria puede rondar los 1.90."}',
             'value_fr' => '{"0":"Les cotes pour le tennis sont également élevées en moyenne. Par exemple, pour un match ATP entre deux joueurs de niveau similaire, la cote pour chaque joueur peut être d’environ 1.90."}',
             'value_pt' => '{"0":"No ténis, as odds também costumam ser altas. Num jogo ATP entre jogadores de nível semelhante, a odd para a vitória pode rondar os 1.90."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 13
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Overall, both top-level and lesser-known matches feature competitive odds, giving players a solid chance to win decent amounts."}',
             'value_es' => '{"0":"En general, tanto en partidos importantes como en los menos populares, las cuotas son elevadas, lo que ofrece a los apostadores buenas oportunidades de ganar sumas interesantes."}',
             'value_fr' => '{"0":"Dans l’ensemble, les cotes sont compétitives, aussi bien pour les matchs très médiatisés que pour ceux moins connus, offrant ainsi de réelles opportunités de gains pour les parieurs."}',
             'value_pt' => '{"0":"No geral, tanto em partidas de destaque como em jogos menos populares, as odds são bastante competitivas, oferecendo aos apostadores boas oportunidades para ganhar valores interessantes."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 14
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 15
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"For typical matches in European football leagues, more than 1,000 betting options are available. You can place bets on corners, yellow cards, fouls, as well as individual player statistics. Combined betting options are also available."}',
             'value_es' => '{"0":"En los partidos típicos de las ligas europeas de fútbol, hay disponibles más de 1.000 opciones de apuesta. Puedes apostar a córners, tarjetas amarillas, faltas, así como a estadísticas individuales de los jugadores. También están disponibles opciones de apuestas combinadas."}',
             'value_fr' => '{"0":"Pour les matchs classiques des championnats de football européens, plus de 1 000 options de paris sont disponibles. Vous pouvez parier sur les corners, les cartons jaunes, les fautes, ainsi que sur les statistiques individuelles des joueurs. Des options de paris combinés sont également proposées."}',
             'value_pt' => '{"0":"Para jogos típicos dos campeonatos europeus de futebol, estão disponíveis mais de 1.000 opções de apostas. É possível apostar em cantos, cartões amarelos, faltas, bem como em estatísticas individuais dos jogadores. Também há opções de apostas combinadas."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 16
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"An interesting feature is the support for special bets, such as wagers on coaching decisions or whether a penalty will be awarded during regular time. In esports, players can bet on rounds, first blood, and other key events."}',
             'value_es' => '{"0":"Una característica interesante es la posibilidad de realizar apuestas especiales, como predicciones sobre decisiones del entrenador o si se concederá un penalti durante el tiempo reglamentario. En los eSports, se puede apostar a rondas, primera sangre y otros eventos clave."}',
             'value_fr' => '{"0":"Il est également intéressant de noter la prise en charge des paris spéciaux, tels que les décisions des entraîneurs ou l’attribution d’un penalty pendant le temps réglementaire. Dans l’eSport, il est possible de parier sur les manches, le first blood et d’autres événements clés."}',
             'value_pt' => '{"0":"Um destaque interessante é a possibilidade de apostas especiais, como previsões sobre decisões dos treinadores ou se haverá marcação de pênalti no tempo regulamentar. Nos eSports, os apostadores podem apostar em rondas, first blood e outros eventos-chave."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 17
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo"}',
                'value_fr' => '{"0":"Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 18
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Every day, hundreds of matches are available in live format, including football, tennis, basketball, hockey, volleyball, table tennis, as well as esports. Match visualization is supported by real-time graphics showing attacks, ball possession, and dangerous moments."}',
             'value_es' => '{"0":"Cada día se ofrecen cientos de partidos en formato en vivo, incluyendo fútbol, tenis, baloncesto, hockey, voleibol, tenis de mesa y deportes electrónicos. La visualización de los partidos está acompañada de gráficos en tiempo real que muestran ataques, posesión del balón y jugadas peligrosas."}',
             'value_fr' => '{"0":"Chaque jour, des centaines de matchs sont disponibles en direct, y compris en football, tennis, basketball, hockey, volley-ball, tennis de table et e-sport. La visualisation des matchs est accompagnée de graphiques en temps réel montrant les attaques, la possession de balle et les actions dangereuses."}',
             'value_pt' => '{"0":"Todos os dias são oferecidas centenas de partidas em formato ao vivo, incluindo futebol, ténis, basquetebol, hóquei, voleibol, ténis de mesa e também eSports. A visualização dos jogos é acompanhada por gráficos em tempo real que mostram ataques, posse de bola e momentos perigosos."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 19
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"A notable advantage is the “single-page” live betting interface, eliminating the need to switch between tabs. There are also options for quick betting and auto-accepting odds changes."}',
             'value_es' => '{"0":"Una ventaja destacada es la interfaz de apuestas en vivo en una sola página, que evita cambiar entre pestañas. También hay opciones para apuestas rápidas y aceptación automática de cambios en las cuotas."}',
             'value_fr' => '{"0":"Un avantage notable est l’interface de paris en direct sur une seule page, sans avoir à changer d’onglet. Des options de pari rapide et d’acceptation automatique des changements de cotes sont également disponibles."}',
             'value_pt' => '{"0":"Um destaque é o sistema de apostas ao vivo em página única, sem necessidade de alternar entre abas. Também estão disponíveis as opções de aposta rápida e aceitação automática de alterações nas odds."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 20
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 21
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The 1xBit platform supports live streaming for a large number of sporting events. To access the streams, all you need to do is register. The quality of the broadcasts varies, but in most cases at least HD resolution is available. You can place bets while watching the matches, which is especially convenient in live mode."}',
             'value_es' => '{"0":"La plataforma 1xBit ofrece transmisiones en vivo para una gran cantidad de eventos deportivos. Para acceder a los streamings, solo necesitas registrarte. La calidad de las transmisiones varía, pero en la mayoría de los casos está disponible al menos en resolución HD. Puedes apostar mientras ves los partidos, lo cual es especialmente conveniente en el modo en vivo."}',
             'value_fr' => '{"0":"La plateforme 1xBit prend en charge la diffusion en direct pour un grand nombre d’événements sportifs. Pour accéder aux streams, il suffit de s’inscrire. La qualité des diffusions varie, mais dans la plupart des cas, une résolution HD est disponible au minimum. Il est possible de placer des paris en regardant les matchs, ce qui est particulièrement pratique en mode live."}',
             'value_pt' => '{"0":"A plataforma 1xBit oferece transmissões ao vivo para uma grande variedade de eventos desportivos. Para ter acesso aos streams, basta fazer o registo. A qualidade das transmissões varia, mas na maioria dos casos está disponível pelo menos em HD. É possível apostar enquanto assiste aos jogos, o que é especialmente prático no modo ao vivo."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 22
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"In esports, streams are usually integrated via Twitch or other official event channels."}',
             'value_es' => '{"0":"En los eSports, las transmisiones suelen integrarse a través de Twitch u otros canales oficiales del evento."}',
             'value_fr' => '{"0":"Dans l’eSport, les diffusions sont généralement intégrées via Twitch ou d’autres chaînes officielles des événements."}',
             'value_pt' => '{"0":"No caso dos eSports, os streams são geralmente integrados via Twitch ou outros canais oficiais dos eventos."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 23
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 24
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit has a fully developed casino section. It features slots, table games, card games, and a live casino with real dealers. There\'s also a «1xGames» section — proprietary games available exclusively on this platform."}',
             'value_es' => '{"0":"1xBit cuenta con una sección de casino completa. Incluye tragamonedas, juegos de mesa, juegos de cartas y un casino en vivo con crupieres reales. También hay una sección llamada «1xGames», con juegos exclusivos disponibles solo en esta plataforma."}',
             'value_fr' => '{"0":"1xBit dispose d’une section de casino complète. Elle propose des machines à sous, des jeux de table, des jeux de cartes et un casino en direct avec de vrais croupiers. Il existe également une section «1xGames» — des jeux exclusifs disponibles uniquement sur cette plateforme."}',
             'value_pt' => '{"0":"A 1xBit possui uma secção de casino totalmente desenvolvida. Inclui slots, jogos de mesa, jogos de cartas e um casino ao vivo com crupiês reais. Há também uma secção «1xGames» — jogos exclusivos disponíveis apenas nesta plataforma."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 25
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Players can use their cryptocurrency balances to participate in any games without the need for conversion."}',
             'value_es' => '{"0":"Los jugadores pueden utilizar sus saldos en criptomonedas para jugar en cualquiera de las opciones sin necesidad de conversión."}',
             'value_fr' => '{"0":"Les joueurs peuvent utiliser leurs soldes en cryptomonnaies pour participer à tous les jeux sans avoir besoin de conversion."}',
             'value_pt' => '{"0":"Os jogadores podem usar os seus saldos em criptomoedas para participar em qualquer jogo sem necessidade de conversão."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 26
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 27
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit does not require personal information during registration — this is one of its main differences from most betting platforms. Access is granted by creating a wallet, which is generated instantly upon registration. The account is not linked to an email or phone number, although these can be added for security."}',
             'value_es' => '{"0":"1xBit no solicita información personal durante el registro, lo que lo diferencia de la mayoría de las plataformas de apuestas. El acceso se realiza mediante la creación de una cartera, que se genera automáticamente al registrarse. La cuenta no está vinculada a un correo electrónico ni a un número de teléfono, aunque se pueden añadir para mayor seguridad."}',
             'value_fr' => '{"0":"1xBit ne demande pas de données personnelles lors de l’inscription — c’est l’une des principales différences avec la plupart des plateformes de paris. L’accès se fait via la création d’un portefeuille, généré automatiquement à l’enregistrement. Le compte n’est pas lié à une adresse e-mail ou à un numéro de téléphone, bien que ces informations puissent être ajoutées pour plus de sécurité."}',
             'value_pt' => '{"0":"A 1xBit não solicita dados pessoais durante o registo — esta é uma das principais diferenças em relação à maioria das plataformas de apostas. O acesso é feito através da criação de uma carteira, que é gerada automaticamente no momento do registo. A conta não está associada a um e-mail ou número de telefone, embora esses dados possam ser adicionados para maior segurança."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 28
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The site uses SSL encryption and supports two-factor authentication. There is also an option to back up the wallet. However, due to the platform\'s anonymity, recovering access to an account may be difficult if access is lost."}',
             'value_es' => '{"0":"El sitio utiliza cifrado SSL y admite la autenticación en dos pasos. También existe la opción de hacer una copia de seguridad de la cartera. No obstante, debido al anonimato, recuperar el acceso en caso de pérdida puede ser complicado."}',
             'value_fr' => '{"0":"Le site utilise le chiffrement SSL et prend en charge l’authentification à deux facteurs. Il est également possible de créer une sauvegarde du portefeuille. Cependant, en raison de l’anonymat, il peut être difficile de récupérer l’accès au compte en cas de perte."}',
             'value_pt' => '{"0":"O site utiliza encriptação SSL e suporta autenticação de dois fatores. Existe também a opção de criar uma cópia de segurança da carteira. No entanto, devido ao anonimato, recuperar o acesso à conta em caso de perda pode ser difícil."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 29
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 30
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The platform operates entirely with cryptocurrencies. Over 40 options are available, including Bitcoin, Ethereum, Litecoin, Dogecoin, Tether, Tron, Monero, Dash, Zcash, Ripple, and others. All transactions are free of charge on the 1xBit side, and processing speed depends solely on blockchain network load."}',
             'value_es' => '{"0":"La plataforma funciona exclusivamente con criptomonedas. Hay más de 40 opciones disponibles, incluyendo Bitcoin, Ethereum, Litecoin, Dogecoin, Tether, Tron, Monero, Dash, Zcash, Ripple y otras. Todas las transacciones se realizan sin comisión por parte de 1xBit, y la velocidad de procesamiento depende únicamente de la carga en la red blockchain."}',
             'value_fr' => '{"0":"La plateforme fonctionne entièrement avec des cryptomonnaies. Plus de 40 options sont disponibles, y compris Bitcoin, Ethereum, Litecoin, Dogecoin, Tether, Tron, Monero, Dash, Zcash, Ripple, et d\'autres. Toutes les transactions sont sans frais du côté de 1xBit, et la vitesse de traitement dépend uniquement de la charge du réseau blockchain."}',
             'value_pt' => '{"0":"A plataforma opera exclusivamente com criptomoedas. Estão disponíveis mais de 40 opções, incluindo Bitcoin, Ethereum, Litecoin, Dogecoin, Tether, Tron, Monero, Dash, Zcash, Ripple e outras. Todas as transações são isentas de taxa por parte da 1xBit, e a velocidade de processamento depende apenas da carga da rede blockchain."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 31
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The minimum withdrawal amount varies for each cryptocurrency but is generally equivalent to $10. Withdrawals are usually processed automatically within 15 to 60 minutes."}',
             'value_es' => '{"0":"La cantidad mínima de retiro varía según la criptomoneda, pero en la mayoría de los casos equivale a $10. Los retiros suelen procesarse automáticamente en un plazo de 15 a 60 minutos."}',
             'value_fr' => '{"0":"Le montant minimum de retrait varie selon la cryptomonnaie, mais il est généralement équivalent à 10$. Les retraits sont généralement traités automatiquement en 15 à 60 minutes."}',
             'value_pt' => '{"0":"O valor mínimo de levantamento varia conforme a criptomoeda, mas geralmente equivale a $10. Os levantamentos são normalmente processados automaticamente em 15 a 60 minutos."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 32
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 33
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 34
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Customer support is available 24/7 via live chat and email."}',
             'value_es' => '{"0":"El servicio de atención al cliente está disponible 24/7 a través del chat en vivo y por correo electrónico."}',
             'value_fr' => '{"0":"Le service client est disponible 24h/24 et 7j/7 via le chat en ligne et par e-mail."}',
             'value_pt' => '{"0":"O suporte ao cliente está disponível 24 horas por dia, 7 dias por semana, através do chat ao vivo e por e-mail."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 35
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 36
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full anonymity",
                                 "1":"Support for most cryptocurrencies",
                                 "2":"High odds",
                                 "3":"Live betting",
                                 "4":"Match streaming",
                                 "5":"Withdrawals without fees"},
                             "1":
                                {"0":"Inability to recover account without private key",
                                 "1":"No mobile app in App Store/Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Anonimato total",
                                 "1":"Soporte para la mayoría de criptomonedas",
                                 "2":"Altas cuotas",
                                 "3":"Apuestas en vivo",
                                 "4":"Transmisión de partidos",
                                 "5":"Retiros sin comisiones"},
                             "1":
                                {"0":"Imposibilidad de recuperar la cuenta sin clave privada",
                                 "1":"No hay aplicación móvil en App Store/Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Anonymat complet",
                                 "1":"Prise en charge de la plupart des cryptomonnaies",
                                 "2":"Cotes élevées",
                                 "3":"Paris en direct",
                                 "4":"Diffusion des matchs",
                                 "5":"Retraits sans frais"},
                             "1":
                                {"0":"Impossibilité de récupérer le compte sans clé privée",
                                 "1":"Pas d’application mobile sur l’App Store/Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Anonimato total",
                                 "1":"Suporte para a maioria das criptomoedas",
                                 "2":"Odds altas",
                                 "3":"Apostas ao vivo",
                                 "4":"Transmissão de partidas",
                                 "5":"Levantamentos sem taxas"},
                             "1":
                                {"0":"Impossibilidade de recuperar a conta sem a chave privada",
                                 "1":"Sem aplicativo móvel na App Store/Google Play"}
                             }',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 37
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"1xBit FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1xBit"}',
                'value_fr' => '{"0":"FAQ de 1xBit"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1xBit"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 38
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Is verification required on 1xBit?"}',
             'value_es' => '{"0":"¿Es necesaria la verificación en 1xBit?"}',
             'value_fr' => '{"0":"La vérification est-elle obligatoire sur 1xBit ?"}',
             'value_pt' => '{"0":"É necessário fazer verificação na 1xBit?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 39
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"No, verification is not required since the platform does not collect personal data."}',
             'value_es' => '{"0":"No, la verificación no es necesaria ya que la plataforma no recopila datos personales."}',
             'value_fr' => '{"0":"Non, la vérification n’est pas nécessaire car la plateforme ne collecte pas de données personnelles."}',
             'value_pt' => '{"0":"Não, a verificação não é necessária porque a plataforma não recolhe dados pessoais."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 40
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Can I deposit funds in dollars or euros?"}',
             'value_es' => '{"0":"¿Puedo depositar fondos en dólares o euros?"}',
             'value_fr' => '{"0":"Puis-je déposer des fonds en dollars ou en euros ?"}',
             'value_pt' => '{"0":"Posso depositar fundos em dólares ou euros?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 41
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"No, 1xBit operates exclusively with cryptocurrencies."}',
             'value_es' => '{"0":"No, 1xBit funciona exclusivamente con criptomonedas."}',
             'value_fr' => '{"0":"Non, 1xBit fonctionne uniquement avec des cryptomonnaies."}',
             'value_pt' => '{"0":"Não, a 1xBit opera exclusivamente com criptomoedas."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 42
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"How fast are withdrawals processed?"}',
             'value_es' => '{"0":"¿Con qué rapidez se procesan los retiros?"}',
             'value_fr' => '{"0":"À quelle vitesse les retraits sont-ils traités ?"}',
             'value_pt' => '{"0":"Quão rápido são processados os levantamentos?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 43
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Most transactions are processed within 15 to 60 minutes, depending on the blockchain."}',
             'value_es' => '{"0":"La mayoría de las transacciones se procesan en un plazo de 15 a 60 minutos, dependiendo de la blockchain."}',
             'value_fr' => '{"0":"La plupart des transactions sont traitées en 15 à 60 minutes, selon la blockchain."}',
             'value_pt' => '{"0":"A maioria das transações é processada entre 15 e 60 minutos, dependendo da blockchain."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 44
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Can I change the cryptocurrency after registration?"}',
             'value_es' => '{"0":"¿Se puede cambiar la criptomoneda después del registro?"}',
             'value_fr' => '{"0":"Peut-on changer de cryptomonnaie après l’inscription ?"}',
             'value_pt' => '{"0":"Posso mudar a criptomoeda após o registo?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 45
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform allows the use of a multi-currency wallet."}',
             'value_es' => '{"0":"Sí, la plataforma permite usar una billetera multimoneda."}',
             'value_fr' => '{"0":"Oui, la plateforme permet d’utiliser un portefeuille multi-devises."}',
             'value_pt' => '{"0":"Sim, a plataforma permite o uso de uma carteira multi-moedas."}',
             'order' => 45
            ]
        );
    }
}
