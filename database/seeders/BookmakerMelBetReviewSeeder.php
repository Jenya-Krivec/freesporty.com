<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
             'value_en' => '{"0":"MelBet Review"}',
             'value_es' => '{"0":"Reseña de MelBet"}',
             'value_fr' => '{"0":"Avis sur MelBet"}',
             'value_pt' => '{"0":"Análise da MelBet"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet is an international bookmaker company established in 2012. Over more than a decade of operation, the platform has proven itself as a reliable service for sports betting and gambling. MelBet is owned by Pelican Entertainment B.V. and operates under an international license issued by the Curaçao regulator. The company is actively expanding its presence in Europe, Asia, Africa, and the CIS, offering a wide range of payment methods, a functional website with a mobile version, and dedicated apps."}',
             'value_es' => '{"0":"MelBet es una casa de apuestas internacional fundada en 2012. Con más de una década de experiencia, la plataforma se ha consolidado como un servicio fiable para apuestas deportivas y juegos de azar. MelBet pertenece a Pelican Entertainment B.V. y opera bajo una licencia internacional emitida por el regulador de Curazao. La compañía continúa expandiéndose en Europa, Asia, África y la CEI, ofreciendo múltiples métodos de pago, un sitio web funcional con versión móvil y aplicaciones."}',
             'value_fr' => '{"0":"MelBet est une société de paris internationale fondée en 2012. Depuis plus de dix ans, la plateforme s\'est imposée comme un service fiable pour les paris sportifs et les jeux d\'argent. MelBet appartient à Pelican Entertainment B.V. et fonctionne sous une licence internationale délivrée par l\'autorité de régulation de Curaçao. L\'entreprise développe activement sa présence en Europe, en Asie, en Afrique et dans la CEI, proposant de nombreux moyens de paiement, un site web fonctionnel avec version mobile et des applications."}',
             'value_pt' => '{"0":"MelBet é uma casa de apostas internacional fundada em 2012. Ao longo de mais de uma década de operação, a plataforma se consolidou como um serviço confiável para apostas esportivas e jogos de azar. A MelBet pertence à Pelican Entertainment B.V. e opera sob uma licença internacional emitida pelo regulador de Curaçao. A empresa está expandindo sua presença na Europa, Ásia, África e na CEI, oferecendo diversos métodos de pagamento, um site funcional com versão móvel e aplicativos dedicados."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet offers players not only a large number of sports events to bet on but also access to casino games and live games. In this review, we will take a detailed look at the platform’s key features to help you evaluate its advantages and disadvantages."}',
             'value_es' => '{"0":"MelBet ofrece a los jugadores no solo una gran cantidad de eventos deportivos para apostar, sino también juegos de casino y juegos en vivo. En esta reseña analizaremos en detalle las principales características de la plataforma para ayudarte a evaluar sus ventajas y desventajas."}',
             'value_fr' => '{"0":"MelBet propose aux joueurs non seulement un large choix d’événements sportifs sur lesquels parier, mais aussi des jeux de casino et des jeux en direct. Dans cette analyse, nous examinerons en détail les principales caractéristiques de la plateforme afin de vous aider à évaluer ses avantages et ses inconvénients."}',
             'value_pt' => '{"0":"A MelBet oferece aos jogadores não apenas uma grande variedade de eventos esportivos para apostar, mas também jogos de cassino e jogos ao vivo. Nesta análise, vamos explorar em detalhe as principais funcionalidades da plataforma para te ajudar a avaliar suas vantagens e desvantagens."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet offers a wide range of sports events you can bet on. The platform features over 40 types of sports, including popular ones such as football, tennis, basketball, hockey, golf, water polo, darts, and rugby."}',
             'value_es' => '{"0":"MelBet ofrece una gran variedad de eventos deportivos en los que puedes apostar. Hay más de 40 disciplinas disponibles, incluidas las más populares como fútbol, tenis, baloncesto, hockey, golf, waterpolo, dardos y rugby."}',
             'value_fr' => '{"0":"MelBet propose un grand nombre d\'événements sportifs sur lesquels vous pouvez parier. Plus de 40 disciplines sont disponibles, dont les plus populaires comme le football, le tennis, le basket-ball, le hockey, le golf, le water-polo, les fléchettes et le rugby."}',
             'value_pt' => '{"0":"A MelBet oferece uma grande variedade de eventos esportivos nos quais você pode apostar. Estão disponíveis mais de 40 modalidades, incluindo as mais populares como futebol, tênis, basquete, hóquei, golfe, polo aquático, dardos e rúgbi."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Special attention is given to esports, which has its own dedicated section on the website for user convenience. Here, you can place bets on top games such as CS:GO, Dota 2, League of Legends, Valorant, Starcraft 2, and others. The platform covers both major international tournaments and smaller local competitions, with live updates to the betting line."}',
             'value_es' => '{"0":"MelBet presta especial atención a los esports, que cuentan con una sección separada en el sitio web para mayor comodidad del usuario. Allí podrás apostar en juegos populares como CS:GO, Dota 2, League of Legends, Valorant, Starcraft 2, entre otros. La plataforma cubre tanto torneos internacionales de gran escala como competiciones locales, con actualizaciones en tiempo real."}',
             'value_fr' => '{"0":"MelBet accorde une attention particulière aux esports, qui disposent d\'une section dédiée sur le site pour plus de commodité. Vous pouvez y parier sur des jeux populaires comme CS:GO, Dota 2, League of Legends, Valorant, Starcraft 2, etc. La plateforme couvre à la fois les grands tournois internationaux et les compétitions locales, avec une mise à jour en temps réel de la ligne de pari."}',
             'value_pt' => '{"0":"A plataforma dá atenção especial aos esports, que possuem uma seção dedicada no site para facilitar a navegação. Lá, é possível apostar em jogos populares como CS:GO, Dota 2, League of Legends, Valorant, Starcraft 2, entre outros. A cobertura inclui tanto grandes torneios internacionais quanto competições locais, com atualizações em tempo real nas linhas de apostas."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Every day, players are offered around a thousand pre-match events and hundreds of live events, ensuring there’s always something exciting to wager on. Below, we’ve included a table showcasing the main sports you can bet on."}',
             'value_es' => '{"0":"Cada día se ofrecen alrededor de mil eventos en la sección prematch y cientos en vivo, por lo que cada apostador podrá encontrar opciones atractivas. A continuación, se muestra una tabla con los principales deportes disponibles para apostar."}',
             'value_fr' => '{"0":"Chaque jour, les joueurs peuvent choisir parmi environ mille événements en prématch et des centaines en direct, ce qui garantit une offre variée pour tous les profils. Vous trouverez ci-dessous un tableau présentant les principaux sports disponibles pour les paris."}',
             'value_pt' => '{"0":"Todos os dias, os jogadores têm acesso a cerca de mil eventos pré-jogo e centenas ao vivo, garantindo opções interessantes para todos os perfis. Abaixo, apresentamos uma tabela com os principais esportes disponíveis para apostas."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"One of MelBet’s key advantages is its high odds, which allow players to achieve greater potential returns compared to competitors. Especially attractive odds are offered for top football leagues (Premier League, La Liga, Serie A), hockey (NHL, KHL), tennis (ATP, WTA), and basketball (NBA, EuroLeague)."}',
             'value_es' => '{"0":"Una de las principales ventajas de MelBet son sus cuotas altas, que permiten a los jugadores obtener un mayor beneficio potencial en comparación con otras casas de apuestas. Las cuotas más atractivas se encuentran en las principales ligas de fútbol (Premier League, LaLiga, Serie A), hockey (NHL, KHL), tenis (ATP, WTA) y baloncesto (NBA, Euroliga)."}',
             'value_fr' => '{"0":"L’un des principaux atouts de MelBet réside dans ses cotes élevées, qui permettent aux joueurs d’obtenir des gains potentiels plus importants que chez ses concurrents. Les cotes les plus avantageuses sont proposées pour les grandes ligues de football (Premier League, La Liga, Serie A), de hockey (NHL, KHL), de tennis (ATP, WTA) et de basket-ball (NBA, EuroLigue)."}',
             'value_pt' => '{"0":"Uma das principais vantagens da MelBet são as suas altas odds, que permitem aos apostadores obter um retorno potencial maior em comparação com outras casas. As odds mais vantajosas são oferecidas nas principais ligas de futebol (Premier League, La Liga, Serie A), hóquei (NHL, KHL), tênis (ATP, WTA) e basquete (NBA, EuroLiga)."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet also features a «Best Odds» tool that helps users analyze the betting market on the site and select bets with the most profitable potential outcomes."}',
             'value_es' => '{"0":"MelBet también ofrece una función llamada «Mejores Cuotas», que permite analizar el mercado de apuestas en el sitio y elegir aquellas apuestas con el resultado más rentable posible."}',
             'value_fr' => '{"0":"MelBet dispose également d’une fonctionnalité appelée « Meilleures Cotes », qui permet d’analyser le marché des paris sur le site et de choisir les options les plus avantageuses."}',
             'value_pt' => '{"0":"A MelBet também possui uma funcionalidade chamada «Melhores Cotas», que permite analisar o mercado de apostas no site e escolher as apostas com o resultado mais lucrativo possível."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"It’s worth noting that players have access to both classic bets such as match result, totals, and correct score, as well as more specific betting types like the number of yellow cards, offsides, shots on target, or goalkeeper saves."}',
             'value_es' => '{"0":"Cabe destacar que los jugadores tienen acceso tanto a apuestas clásicas como resultado del partido, totales o marcador exacto, como a tipos de apuestas más específicas, como número de tarjetas amarillas, fueras de juego, tiros a puerta o paradas del portero."}',
             'value_fr' => '{"0":"Il convient de noter que les joueurs ont accès aussi bien aux paris classiques tels que le résultat du match, les totaux ou le score exact, qu’à des types de paris plus spécifiques comme le nombre de cartons jaunes, les hors-jeu, les tirs cadrés ou les arrêts du gardien."}',
             'value_pt' => '{"0":"Vale destacar que os apostadores têm acesso tanto às apostas clássicas — como resultado da partida, totais e placar exato — quanto a tipos mais específicos, como número de cartões amarelos, impedimentos, chutes ao gol ou defesas do goleiro."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet actively supports the Asian market, offering a full range of Asian handicaps and totals. Special attention is given to markets like first/last goal, both teams to score, and half-time/full-time."}',
             'value_es' => '{"0":"MelBet apoya activamente el mercado asiático, ofreciendo una gama completa de hándicaps y totales asiáticos. Se presta especial atención a mercados como primer/último gol, ambos equipos marcan y mitad/partido."}',
             'value_fr' => '{"0":"MelBet soutient activement le marché asiatique, en proposant une large gamme de handicaps et totaux asiatiques. Une attention particulière est accordée aux marchés premier/dernier but, les deux équipes marquent et mi-temps/fin de match."}',
             'value_pt' => '{"0":"A MelBet apoia ativamente o mercado asiático, oferecendo uma linha completa de handicaps e totais asiáticos. Há atenção especial para mercados como primeiro/último gol, ambas as equipes marcam e intervalo/final."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"In live mode, the number of available markets is slightly smaller, but you will still find plenty of options to suit your preferences."}',
             'value_es' => '{"0":"En el modo en vivo, el número de mercados disponibles es algo menor, pero aún así encontrarás muchas opciones interesantes."}',
             'value_fr' => '{"0":"En mode en direct, le nombre de marchés est un peu réduit, mais vous trouverez tout de même de nombreuses options intéressantes."}',
             'value_pt' => '{"0":"No modo ao vivo, o número de eventos e mercados disponíveis é um pouco menor, mas ainda assim é possível encontrar boas oportunidades."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Іспанська: Apuestas en Vivo"}',
                'value_fr' => '{"0":"Французька: Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The Live section interface allows users to follow multiple events simultaneously, switch between sports, and view graphical match trackers and statistics."}',
             'value_es' => '{"0":"La interfaz de la sección en vivo permite seguir varios eventos al mismo tiempo, cambiar entre deportes y ver animaciones gráficas junto con estadísticas en tiempo real."}',
             'value_fr' => '{"0":"L’interface de la section Live permet de suivre plusieurs événements en même temps, de basculer entre les sports, et d’afficher des visualisations graphiques et des statistiques."}',
             'value_pt' => '{"0":"A interface da seção ao vivo permite acompanhar vários eventos ao mesmo tempo, alternar entre esportes e visualizar animações gráficas e estatísticas em tempo real."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"On this part of the site, you can track odds changes in real time and spot hot events with elevated odds. Thanks to minimal delay, users can react to game developments almost instantly."}',
             'value_es' => '{"0":"En esta parte del sitio puedes seguir la evolución de las cuotas y detectar eventos destacados con cuotas elevadas. Gracias al mínimo retraso, los usuarios pueden reaccionar a los cambios del juego casi al instante."}',
             'value_fr' => '{"0":"Dans cette section du site, vous pouvez suivre en temps réel les fluctuations des cotes et identifier les événements chauds où les cotes sont élevées. Grâce à une latence minimale, les utilisateurs peuvent réagir rapidement aux évolutions du match."}',
             'value_pt' => '{"0":"Nesta parte do site, você pode monitorar as mudanças nas odds ao vivo e identificar eventos quentes com odds elevadas. Graças à baixa latência, os usuários podem reagir às mudanças no jogo quase instantaneamente."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"An additional advantage is the Cash Out feature, which allows you to fully or partially settle a bet before the event ends."}',
             'value_es' => '{"0":"Una ventaja adicional es la función de Cash Out, que te permite cerrar una apuesta de forma total o parcial antes de que termine el evento."}',
             'value_fr' => '{"0":"Un autre avantage est la présence de la fonction Cash Out, qui permet de clôturer un pari, totalement ou partiellement, avant la fin de l\'événement."}',
             'value_pt' => '{"0":"Um benefício extra é a função Cash Out, que permite encerrar a aposta total ou parcialmente antes do fim do evento."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet supports live streaming of most popular matches in HD quality. To watch the stream, you simply need to have an active account and a positive balance. The video is available both on the desktop version of the site and in the mobile app."}',
             'value_es' => '{"0":"MelBet ofrece transmisión en vivo en calidad HD de la mayoría de los partidos populares. Para ver una transmisión, solo necesitas tener una cuenta activa y saldo positivo. El video está disponible tanto en la versión de escritorio como en la aplicación móvil."}',
             'value_fr' => '{"0":"MelBet propose la diffusion en direct en HD de la plupart des matchs populaires. Pour accéder aux flux vidéo, il suffit d’avoir un compte actif et un solde positif. Les vidéos sont disponibles sur la version de bureau du site ainsi que dans l’application mobile."}',
             'value_pt' => '{"0":"A MelBet oferece transmissões ao vivo em qualidade HD da maioria dos jogos populares. Para assistir, basta ter uma conta ativa e saldo positivo. Os vídeos estão disponíveis tanto na versão desktop quanto no aplicativo móvel."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Live streaming is especially useful for in-play betting, as it allows you to see the match in real time and make more informed bets. MelBet broadcasts events from football, tennis, basketball, table tennis, esports, baseball, and many other sports."}',
             'value_es' => '{"0":"La transmisión en vivo es especialmente útil para las apuestas en directo, ya que te permite seguir el desarrollo del juego en tiempo real y tomar decisiones informadas. MelBet transmite eventos de fútbol, tenis, baloncesto, tenis de mesa, deportes electrónicos, béisbol y muchos otros deportes."}',
             'value_fr' => '{"0":"Le streaming en direct est particulièrement utile pour les paris en direct, car il permet de suivre le match en temps réel et de prendre des décisions éclairées. MelBet diffuse des événements de football, tennis, basket-ball, tennis de table, e-sport, baseball et bien d’autres disciplines."}',
             'value_pt' => '{"0":"A transmissão ao vivo é especialmente útil para apostas ao vivo, pois permite acompanhar os jogos em tempo real e tomar decisões mais bem fundamentadas. A MelBet transmite eventos de futebol, tênis, basquete, tênis de mesa, eSports, beisebol e muitos outros esportes."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"If the live stream is unavailable, you can always rely on real-time updated statistics to follow the game."}',
             'value_es' => '{"0":"Si no hay transmisión disponible, siempre puedes consultar estadísticas en tiempo real para seguir el partido."}',
             'value_fr' => '{"0":"Si aucune diffusion n’est disponible, vous pouvez toujours consulter les statistiques mises à jour en temps réel."}',
             'value_pt' => '{"0":"Se a transmissão não estiver disponível, você pode sempre acompanhar o jogo por meio de estatísticas atualizadas em tempo real."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 26
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet also offers a comprehensive gaming section, which includes:"}',
             'value_es' => '{"0":"MelBet también ofrece una sección de juegos completa, que incluye:"}',
             'value_fr' => '{"0":"MelBet propose également une section de jeux complète, qui comprend :"}',
             'value_pt' => '{"0":"A MelBet também oferece uma seção de jogos completa, que inclui:"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 27
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list_v2',
             'value_en' => '{"0":"Casino with thousands of slots from top providers (NetEnt, Pragmatic Play, Play’n GO)",
                             "1":"Live casino with real dealers, available 24/7",
                             "2":"1xGames — unique games developed exclusively for MelBet",
                             "3":"TV games such as lotteries and wheels of fortune",
                             "4":"Virtual sports"}',
             'value_es' => '{"0":"Casino con miles de tragamonedas de los principales proveedores (NetEnt, Pragmatic Play, Play’n GO)",
                             "1":"Casino en vivo con crupieres reales, disponible las 24 horas",
                             "2":"1xGames — juegos únicos desarrollados exclusivamente para MelBet",
                             "3":"Juegos de TV como loterías y ruedas de la fortuna",
                             "4":"Deportes virtuales"}',
             'value_fr' => '{"0":"Casino avec des milliers de machines à sous de fournisseurs renommés (NetEnt, Pragmatic Play, Play’n GO)",
                             "1":"Casino en direct avec de vrais croupiers, disponible 24h/24",
                             "2":"1xGames — des jeux uniques développés exclusivement pour MelBet",
                             "3":"Jeux TV comme les loteries et les roues de la fortune",
                             "4":"Sports virtuels"}',
             'value_pt' => '{"0":"Cassino com milhares de slots dos principais provedores (NetEnt, Pragmatic Play, Play’n GO)",
                             "1":"Cassino ao vivo com crupiês reais, disponível 24 horas por dia",
                             "2":"1xGames — jogos únicos desenvolvidos exclusivamente para a MelBet",
                             "3":"Jogos de TV como loterias e rodas da fortuna",
                             "4":"Esportes virtuais"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 28
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"All games run smoothly and support demo mode for familiarization."}',
             'value_es' => '{"0":"Todos los juegos funcionan sin interrupciones y ofrecen modo demo para probarlos."}',
             'value_fr' => '{"0":"Tous les jeux fonctionnent sans problème et proposent un mode démo pour s’y familiariser."}',
             'value_pt' => '{"0":"Todos os jogos funcionam sem falhas e oferecem modo de demonstração para experimentação."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 29
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 30
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet pays close attention to the security of its users. All data is encrypted using SSL technology, and the platform complies with PCI DSS requirements to protect payment information. Additionally, two-factor authentication and IP address monitoring are used to safeguard accounts."}',
             'value_es' => '{"0":"MelBet presta especial atención a la seguridad de sus usuarios. Todos los datos están cifrados mediante tecnología SSL, y la plataforma cumple con los requisitos de PCI DSS para proteger la información de pago. Además, se utiliza autenticación en dos pasos y control de direcciones IP para proteger las cuentas."}',
             'value_fr' => '{"0":"MelBet accorde une grande importance à la sécurité de ses utilisateurs. Toutes les données sont chiffrées via la technologie SSL et la plateforme est conforme aux exigences PCI DSS pour la protection des informations de paiement. En outre, l’authentification à deux facteurs et la surveillance des adresses IP sont utilisées pour sécuriser les comptes."}',
             'value_pt' => '{"0":"A MelBet dá grande atenção à segurança dos seus usuários. Todos os dados são criptografados com tecnologia SSL, e a plataforma está em conformidade com os requisitos do PCI DSS para proteger as informações de pagamento. Além disso, utiliza-se autenticação em dois fatores e monitoramento de endereços IP para proteger as contas."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 31
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker holds a Curaçao license, which is a clear indicator that your funds are protected."}',
             'value_es' => '{"0":"La casa de apuestas cuenta con una licencia de Curazao, lo que garantiza la protección de tus fondos."}',
             'value_fr' => '{"0":"Le bookmaker détient une licence de Curaçao, ce qui garantit la protection de vos fonds."}',
             'value_pt' => '{"0":"A casa de apostas possui uma licença de Curaçao, o que comprova a segurança dos seus fundos."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 32
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 33
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"More than 50 payment methods are available on the MelBet website, including:"}',
             'value_es' => '{"0":"Hay más de 50 métodos de pago disponibles en el sitio web de MelBet, incluyendo:"}',
             'value_fr' => '{"0":"Plus de 50 méthodes de paiement sont disponibles sur le site de MelBet, notamment :"}',
             'value_pt' => '{"0":"Mais de 50 métodos de pagamento estão disponíveis no site da MelBet, incluindo:"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 34
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 35
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"You can find more detailed information about available currencies and payment methods at the top of our review."}',
             'value_es' => '{"0":"Puedes consultar información más detallada sobre las monedas disponibles y los métodos de pago en la parte superior de nuestra reseña."}',
             'value_fr' => '{"0":"Vous pouvez consulter des informations plus détaillées sur les devises disponibles et les méthodes de paiement en haut de notre revue."}',
             'value_pt' => '{"0":"Você pode encontrar informações mais detalhadas sobre as moedas disponíveis e os métodos de pagamento no topo da nossa análise."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 36
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"It’s also worth noting that the minimum deposit is from €1, and withdrawals are available from €1.5. In most cases, requests are processed automatically, allowing you to receive funds within a few hours. No fees are usually charged."}',
             'value_es' => '{"0":"También cabe destacar que el depósito mínimo es de 1€ y los retiros están disponibles a partir de 1,5€. En la mayoría de los casos, las solicitudes se procesan automáticamente, lo que permite recibir los fondos en pocas horas. Normalmente no se cobran comisiones."}',
             'value_fr' => '{"0":"Il convient également de noter que le dépôt minimum est de 1€ et que les retraits sont possibles à partir de 1,5€. Dans la plupart des cas, les demandes sont traitées automatiquement, ce qui permet de recevoir les fonds en quelques heures. Aucune commission n’est généralement appliquée."}',
             'value_pt' => '{"0":"Também vale mencionar que o depósito mínimo é a partir de €1 e os saques estão disponíveis a partir de €1,5. Na maioria dos casos, os pedidos são processados automaticamente, permitindo o recebimento dos fundos em poucas horas. Geralmente não há cobrança de taxas."}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 37
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 38
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet\'s customer support is available 24/7 and can be reached via live chat, Telegram bot, email, or phone."}',
             'value_es' => '{"0":"El servicio de atención al cliente de MelBet está disponible las 24 horas y se puede contactar por chat en vivo, bot de Telegram, correo electrónico o teléfono."}',
             'value_fr' => '{"0":"Le service client de MelBet est disponible 24h/24 et peut être contacté via le chat en direct, le bot Telegram, l’e-mail ou le téléphone."}',
             'value_pt' => '{"0":"O suporte ao cliente da MelBet está disponível 24 horas por dia e pode ser acessado por chat ao vivo, bot do Telegram, e-mail ou telefone."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 39
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 40
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of betting events",
                                 "1":"High odds",
                                 "2":"Live section with streaming",
                                 "3":"Cryptocurrency support",
                                 "4":"User-friendly mobile app",
                                 "5":"Fast verification and payouts"},
                             "1":
                                {"0":"Website interface may seem overloaded for new users",
                                 "1":"Occasional delays in customer support responses"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de eventos para apostar",
                                 "1":"Cuotas altas",
                                 "2":"Sección en vivo con transmisiones",
                                 "3":"Soporte para criptomonedas",
                                 "4":"Aplicación móvil fácil de usar",
                                 "5":"Verificación y pagos rápidos"},
                             "1":
                                {"0":"La interfaz del sitio puede parecer sobrecargada para los nuevos usuarios",
                                 "1":"A veces hay demoras en las respuestas del soporte técnico"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d’événements de paris",
                                 "1":"Cotes élevées",
                                 "2":"Section en direct avec streaming",
                                 "3":"Prise en charge des cryptomonnaies",
                                 "4":"Application mobile conviviale",
                                 "5":"Vérification et paiements rapides"},
                             "1":
                                {"0":"L’interface du site peut paraître surchargée pour les nouveaux joueurs",
                                 "1":"Réponses du service client parfois lentes"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de eventos para apostas",
                                 "1":"Odds elevadas",
                                 "2":"Seção ao vivo com transmissões",
                                 "3":"Suporte a criptomoedas",
                                 "4":"Aplicativo móvel intuitivo",
                                 "5":"Verificação e pagamentos rápidos"},
                             "1":
                                {"0":"A interface do site pode parecer confusa para novos usuários",
                                 "1":"Possíveis atrasos ocasionais no atendimento ao cliente"}
                             }',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 41
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"MelBet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MelBet"}',
                'value_fr' => '{"0":"FAQ de MelBet"}',
                'value_pt' => '{"0":"Perguntas frequentes do MelBet"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 42
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"How quickly can I withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda en procesarse un retiro?"}',
             'value_fr' => '{"0":"Combien de temps faut-il pour retirer des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para sacar os fundos?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 43
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"On average, withdrawals take from 15 minutes to 2 hours, depending on the chosen method."}',
             'value_es' => '{"0":"En promedio, los retiros tardan entre 15 minutos y 2 horas, dependiendo del método elegido."}',
             'value_fr' => '{"0":"En moyenne, les retraits prennent entre 15 minutes et 2 heures, selon la méthode choisie."}',
             'value_pt' => '{"0":"Em média, os saques levam de 15 minutos a 2 horas, dependendo do método escolhido."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 44
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Is there an app for Android or iOS?"}',
             'value_es' => '{"0":"¿Hay una aplicación para Android o iOS?"}',
             'value_fr' => '{"0":"Y a-t-il une application pour Android ou iOS ?"}',
             'value_pt' => '{"0":"Existe um aplicativo para Android ou iOS?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 45
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the apps are available on the official website."}',
             'value_es' => '{"0":"Sí, las aplicaciones están disponibles en el sitio web oficial."}',
             'value_fr' => '{"0":"Oui, les applications sont disponibles sur le site officiel."}',
             'value_pt' => '{"0":"Sim, os aplicativos estão disponíveis no site oficial."}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 46
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Is verification required?"}',
             'value_es' => '{"0":"¿Es necesario pasar por verificación?"}',
             'value_fr' => '{"0":"La vérification est-elle obligatoire ?"}',
             'value_pt' => '{"0":"É necessário passar por verificação?"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
                'order' => 47
            ],
            ['key' => 'melbet',
                'bookmaker_id' => 2,
                'component' => 'p',
                'value_en' => '{"0":"Yes, verification is mandatory for withdrawing large amounts. It involves submitting documents and can take up to 48 hours."}',
                'value_es' => '{"0":"Sí, la verificación es obligatoria para retirar grandes sumas. Se realiza enviando documentos y puede tardar hasta 48 horas."}',
                'value_fr' => '{"0":"Oui, la vérification est obligatoire pour les retraits de grosses sommes. Elle se fait en envoyant des documents et peut prendre jusqu’à 48 heures."}',
                'value_pt' => '{"0":"Sim, a verificação é obrigatória para saques de grandes valores. Ela é feita enviando documentos e pode levar até 48 horas."}',
                'order' => 47
            ]
        );
    }
}
