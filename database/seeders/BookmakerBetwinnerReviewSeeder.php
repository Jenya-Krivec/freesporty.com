<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
             'value_en' => '{"0":"BetWinner Review"}',
             'value_es' => '{"0":"Reseña de BetWinner"}',
             'value_fr' => '{"0":"Avis sur BetWinner"}',
             'value_pt' => '{"0":"Análise da BetWinner"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner is a multifunctional platform for players where you can place bets on a wide range of events, including live betting, watch live streams, and play in the casino. The site supports cryptocurrencies and numerous popular payment systems. BetWinner targets an international audience, including countries from the CIS, Asia, Africa, and Latin America, so the site is available in multiple languages. In this review, we will explore the key features of this platform."}',
             'value_es' => '{"0":"BetWinner es una plataforma multifuncional para jugadores donde puedes apostar en una gran cantidad de eventos, incluidos los eventos en vivo, ver transmisiones en directo y jugar en el casino. El sitio admite criptomonedas y numerosos sistemas de pago populares. BetWinner está orientado a una audiencia internacional, incluidos países de la CEI, Asia, África y América Latina, por lo que el sitio está disponible en varios idiomas. En esta reseña analizaremos las características clave de esta plataforma."}',
             'value_fr' => '{"0":"BetWinner est une plateforme multifonctionnelle pour les joueurs, où vous pouvez parier sur un grand nombre d\'événements, y compris en direct, regarder des retransmissions en direct et jouer au casino. Le site prend en charge les cryptomonnaies et de nombreux systèmes de paiement populaires. BetWinner s’adresse à un public international, notamment des pays de la CEI, d’Asie, d’Afrique et d’Amérique latine, et propose donc le site en plusieurs langues. Dans cet article, nous allons examiner les principales fonctionnalités de cette plateforme."}',
             'value_pt' => '{"0":"BetWinner é uma plataforma multifuncional para jogadores, onde você pode apostar em uma grande variedade de eventos, incluindo apostas ao vivo, assistir transmissões em direto e jogar no cassino. O site aceita criptomoedas e diversos sistemas de pagamento populares. A BetWinner é voltada para um público internacional, incluindo países da CEI, Ásia, África e América Latina, e por isso está disponível em vários idiomas. Nesta análise, vamos explorar os principais recursos desta plataforma."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"One of BetWinner’s strongest features is the large volume and variety of sporting events available for betting. Every day, the platform offers over 1,000 pre-match events — from top-level matches in the Champions League or NBA to games from leagues in South America, Africa, and Southeast Asia. The bookmaker covers more than 40 sports, including not only football, tennis, and basketball, but also rugby, golf, table tennis, MMA, hurling, and even chess. Additionally, there are sections for betting on politics, weather, show business, and other unconventional events."}',
             'value_es' => '{"0":"Una de las mayores fortalezas de BetWinner es el gran volumen y la variedad de eventos deportivos disponibles para apostar. Cada día, la plataforma ofrece más de 1.000 eventos en prematch, desde partidos de alto nivel en la Liga de Campeones o la NBA hasta encuentros de ligas de Sudamérica, África y el Sudeste Asiático. La casa de apuestas cubre más de 40 deportes, incluyendo no solo fútbol, tenis y baloncesto, sino también rugby, golf, tenis de mesa, MMA, hurling e incluso ajedrez. Además, hay secciones para apostar en política, clima, entretenimiento y otros eventos poco comunes."}',
             'value_fr' => '{"0":"L’un des plus grands atouts de BetWinner est le volume et la diversité des événements sportifs disponibles pour les paris. Chaque jour, la plateforme propose plus de 1 000 événements en pré-match — allant des matchs de haut niveau de la Ligue des champions ou de la NBA aux rencontres de ligues en Amérique du Sud, en Afrique et en Asie du Sud-Est. Le bookmaker couvre plus de 40 sports, notamment le football, le tennis, le basketball, mais aussi le rugby, le golf, le tennis de table, le MMA, le hurling et même les échecs. Il existe également des sections dédiées aux paris sur la politique, la météo, le divertissement et d\'autres événements inhabituels."}',
             'value_pt' => '{"0":"Uma das maiores vantagens da BetWinner é o grande volume e a variedade de eventos esportivos disponíveis para apostas. Diariamente, a plataforma oferece mais de 1.000 eventos em pré-jogo — desde partidas de alto nível da Liga dos Campeões ou da NBA até jogos de ligas da América do Sul, África e Sudeste Asiático. A casa de apostas cobre mais de 40 esportes, incluindo não apenas futebol, tênis e basquete, mas também rúgbi, golfe, tênis de mesa, MMA, hurling e até xadrez. Além disso, existem seções para apostas em política, clima, entretenimento e outros eventos não convencionais."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Below, we present a table with the main sports available for betting:"}',
             'value_es' => '{"0":"A continuación, presentamos una tabla con los principales deportes en los que se puede apostar:"}',
             'value_fr' => '{"0":"Ci-dessous, nous présentons un tableau des principaux sports sur lesquels il est possible de parier :"}',
             'value_pt' => '{"0":"Abaixo, apresentamos uma tabela com os principais esportes disponíveis para apostar:"}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"One of the main factors that attracts players to BetWinner is the decent odds on sports. For example, in the match between Manchester City and Liverpool, the odds are 2.10 for a Manchester City win, 3.40 for a draw, and 3.30 for a Liverpool win."}',
             'value_es' => '{"0":"Uno de los principales factores que atrae a los jugadores a BetWinner son las buenas cuotas en los deportes. Por ejemplo, en el partido entre Manchester City y Liverpool, la cuota por la victoria del Manchester City es de 2.10, por el empate es de 3.40 y por la victoria del Liverpool es de 3.30."}',
             'value_fr' => '{"0":"L’un des principaux facteurs qui attirent les joueurs chez BetWinner est la qualité des cotes proposées sur les événements sportifs. Par exemple, pour le match Manchester City – Liverpool, la cote pour une victoire de Manchester City est de 2.10, pour un match nul de 3.40, et pour une victoire de Liverpool de 3.30."}',
             'value_pt' => '{"0":"Um dos principais fatores que atraem os jogadores ao BetWinner são as boas odds nos esportes. Por exemplo, no jogo entre Manchester City e Liverpool, a odd para vitória do Manchester City é 2.10, para empate é 3.40 e para vitória do Liverpool é 3.30."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner offers attractive odds, although they are not significantly different from those offered by other bookmakers."}',
             'value_es' => '{"0":"BetWinner ofrece cuotas atractivas, aunque no se diferencian demasiado de las de otras casas de apuestas."}',
             'value_fr' => '{"0":"BetWinner propose des cotes intéressantes, mais elles ne diffèrent pas beaucoup de celles des autres bookmakers."}',
             'value_pt' => '{"0":"A BetWinner oferece odds atrativas, embora não se destaquem muito em relação às de outras casas de apostas."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner not only offers a wide range of sporting events to bet on, but also provides a very broad selection of different types of bets for each individual event. For example, you can bet on the exact score of the match, the number of corner kicks or offsides, or on which player will score first. There are also options for combined bets, totals, and much more. So every player can find the type of bet that suits them best."}',
             'value_es' => '{"0":"BetWinner no solo ofrece una gran cantidad de eventos deportivos para apostar, sino que también proporciona una amplia variedad de tipos de apuestas para cada evento individual. Por ejemplo, se puede apostar al resultado exacto del partido, al número de tiros de esquina o fueras de juego, o al jugador que marcará el primer gol. También hay opciones de apuestas combinadas, totales y mucho más. Así, cada usuario puede encontrar las apuestas que más le gusten."}',
             'value_fr' => '{"0":"BetWinner ne propose pas seulement un large éventail d’événements sportifs sur lesquels parier, mais offre également un grand choix de types de paris pour chaque événement. Par exemple, il est possible de parier sur le score exact du match, sur le nombre de corners ou de hors-jeu, ou encore sur le joueur qui marquera en premier. Il existe aussi des options de paris combinés, de totaux, et bien plus encore. Ainsi, chacun peut trouver le type de pari qui lui convient le mieux."}',
             'value_pt' => '{"0":"A BetWinner não oferece apenas muitos eventos esportivos para apostar, mas também uma ampla variedade de tipos de apostas para cada evento individual. Por exemplo, é possível apostar no placar exato da partida, no número de escanteios ou impedimentos, ou em qual jogador marcará o primeiro gol. Também existem apostas combinadas, totais e muito mais. Assim, cada apostador pode encontrar as opções que mais combinam com seu estilo."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Іспанська: Apuestas en Vivo"}',
                'value_fr' => '{"0":"Французька: Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The BetWinner live betting section is a convenient and fast service with real-time odds updates. The platform allows you to follow several matches simultaneously, offers detailed infographics, live statistics, and one-click betting."}',
             'value_es' => '{"0":"La sección de apuestas en vivo de BetWinner es un servicio cómodo y rápido con actualizaciones instantáneas de las cuotas. La plataforma permite seguir varios partidos al mismo tiempo, ofrece infografías detalladas, estadísticas en vivo y apuestas con un solo clic."}',
             'value_fr' => '{"0":"La section des paris en direct de BetWinner est un service pratique et rapide, avec une mise à jour instantanée des cotes. La plateforme permet de suivre plusieurs matchs en même temps, propose des infographies détaillées, des statistiques en direct, et des paris en un seul clic."}',
             'value_pt' => '{"0":"A seção de apostas ao vivo da BetWinner é um serviço prático e rápido, com atualização instantânea das odds. A plataforma permite acompanhar várias partidas ao mesmo tempo, oferece infográficos detalhados, estatísticas ao vivo e apostas com um clique."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Almost all the markets available in pre-match are also accessible in the live section, which is a significant advantage. This enables users to react quickly to changes in the game and place bets under the most favorable conditions."}',
             'value_es' => '{"0":"Casi todos los mercados disponibles en el prematch también están accesibles en la sección en vivo, lo cual es una gran ventaja. Esto permite reaccionar rápidamente a los cambios en el juego y realizar apuestas en condiciones muy favorables."}',
             'value_fr' => '{"0":"Presque tous les marchés disponibles en pré-match le sont également en direct, ce qui constitue un avantage majeur. Cela permet de réagir rapidement aux changements dans le jeu et de placer des paris dans les conditions les plus avantageuses."}',
             'value_pt' => '{"0":"Quase todos os mercados disponíveis no pré-jogo também estão acessíveis nas apostas ao vivo, o que é uma grande vantagem. Isso permite reagir rapidamente às mudanças no jogo e fazer apostas nas condições mais favoráveis."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner provides access to live streams for a wide range of sporting events, including football, tennis, basketball, hockey, and esports. To watch the video, you need to have a positive balance or have placed a bet on the respective event."}',
             'value_es' => '{"0":"BetWinner ofrece acceso a transmisiones en vivo de una amplia gama de eventos deportivos: fútbol, tenis, baloncesto, hockey y deportes electrónicos. Para ver el video, es necesario tener un saldo positivo o haber realizado una apuesta en el evento correspondiente."}',
             'value_fr' => '{"0":"BetWinner propose un accès aux retransmissions en direct pour un large éventail d’événements sportifs : football, tennis, basketball, hockey et e-sport. Pour visionner les vidéos, il est nécessaire d’avoir un solde positif ou d’avoir placé un pari sur l’événement concerné."}',
             'value_pt' => '{"0":"A BetWinner oferece acesso a transmissões ao vivo de uma ampla variedade de eventos esportivos: futebol, tênis, basquete, hóquei e eSports. Para assistir ao vídeo, é necessário ter saldo positivo ou ter feito uma aposta no evento correspondente."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The stream quality is stable with minimal delay, allowing you to stay in sync with the match dynamics. The video is accompanied by live statistics, significantly enhancing the information available and making live betting more convenient."}',
             'value_es' => '{"0":"La calidad de las transmisiones es estable y con un retraso mínimo, lo que permite seguir la dinámica del partido en tiempo real. El video está acompañado de estadísticas en vivo, lo que mejora notablemente la experiencia y facilita las apuestas en directo."}',
             'value_fr' => '{"0":"La qualité des flux est stable, avec un léger décalage, ce qui permet de rester au plus près de l’action. Les vidéos sont accompagnées de statistiques en direct, ce qui améliore considérablement l’information disponible et facilite les paris en direct."}',
             'value_pt' => '{"0":"A qualidade da transmissão é estável, com um pequeno atraso, permitindo acompanhar o ritmo do jogo. O vídeo é acompanhado por estatísticas ao vivo, o que aumenta significativamente a informação disponível e torna as apostas ao vivo mais práticas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The casino section of BetWinner is a whole world of entertainment. With over 100 providers, including Evolution Gaming, NetEnt, Microgaming, and Pragmatic Play, it offers a vast selection of slots, live dealer games, lotteries, and virtual sports."}',
             'value_es' => '{"0":"La sección de casino de BetWinner es un verdadero mundo de entretenimiento. Con más de 100 proveedores, entre ellos Evolution Gaming, NetEnt, Microgaming y Pragmatic Play, ofrece una amplia selección de tragamonedas, juegos en vivo con crupieres reales, loterías y deportes virtuales."}',
             'value_fr' => '{"0":"La section casino de BetWinner est un véritable univers de divertissement. Avec plus de 100 fournisseurs, dont Evolution Gaming, NetEnt, Microgaming et Pragmatic Play, elle propose un large choix de machines à sous, de jeux avec croupiers en direct, de loteries et de sports virtuels."}',
             'value_pt' => '{"0":"A seção de cassino da BetWinner é um verdadeiro mundo de entretenimento. Com mais de 100 provedores, incluindo Evolution Gaming, NetEnt, Microgaming e Pragmatic Play, oferece uma grande variedade de slots, jogos ao vivo com dealers reais, loterias e esportes virtuais."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Games are available in demo mode, allowing users to test them without the risk of making a wrong bet. Regular tournaments and bonuses add extra appeal for loyal players."}',
             'value_es' => '{"0":"Los juegos están disponibles en modo demo, lo que permite probarlos sin riesgo de hacer una apuesta equivocada. Los torneos y bonos regulares aumentan el atractivo para los jugadores habituales."}',
             'value_fr' => '{"0":"Les jeux sont disponibles en mode démo, ce qui permet de les tester sans risque de mise erronée. Des tournois réguliers et des bonus viennent renforcer l’intérêt pour les joueurs réguliers."}',
             'value_pt' => '{"0":"Os jogos estão disponíveis no modo demo, permitindo que os usuários testem sem o risco de fazer uma aposta errada. Torneios e bônus regulares aumentam o interesse para os jogadores frequentes."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 23
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 24
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner holds a Curacao license, which ensures a basic level of regulation and player protection. The platform uses SSL encryption to secure data, a fraud detection system, and multi-factor authentication."}',
             'value_es' => '{"0":"BetWinner cuenta con una licencia de Curazao, lo que garantiza un nivel básico de regulación y protección para los jugadores. La plataforma utiliza cifrado SSL para proteger los datos, un sistema de detección de fraude y autenticación multifactor."}',
             'value_fr' => '{"0":"BetWinner détient une licence de Curaçao, ce qui garantit un niveau de régulation de base et une protection des joueurs. La plateforme utilise le cryptage SSL pour sécuriser les données, un système de détection de fraude et une authentification multifactorielle."}',
             'value_pt' => '{"0":"A BetWinner possui uma licença de Curaçao, o que garante um nível básico de regulamentação e proteção aos jogadores. A plataforma utiliza criptografia SSL para proteger os dados, um sistema de detecção de fraudes e autenticação multifatorial."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 25
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The verification process is mandatory for withdrawing large amounts, which enhances security and minimizes the risk of fraud."}',
             'value_es' => '{"0":"El proceso de verificación es obligatorio para retirar grandes cantidades de dinero, lo que aumenta la seguridad y reduce el riesgo de fraude."}',
             'value_fr' => '{"0":"La procédure de vérification est obligatoire pour les retraits de grosses sommes, ce qui renforce la sécurité et réduit les risques de fraude."}',
             'value_pt' => '{"0":"O processo de verificação é obrigatório para saques de grandes valores, o que aumenta a segurança e minimiza o risco de fraudes."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 26
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 27
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner supports over 100 payment methods, including Visa and Mastercard bank cards, e-wallets (Skrill, Neteller, QIWI), cryptocurrencies (Bitcoin, Ethereum, USDT, Dogecoin, and others), as well as local payment systems."}',
             'value_es' => '{"0":"BetWinner admite más de 100 métodos de pago, incluidas tarjetas bancarias Visa y Mastercard, monederos electrónicos (Skrill, Neteller, QIWI), criptomonedas (Bitcoin, Ethereum, USDT, Dogecoin, entre otras) y sistemas de pago locales."}',
             'value_fr' => '{"0":"BetWinner prend en charge plus de 100 méthodes de paiement : cartes bancaires Visa et Mastercard, portefeuilles électroniques (Skrill, Neteller, QIWI), cryptomonnaies (Bitcoin, Ethereum, USDT, Dogecoin, etc.), ainsi que des systèmes de paiement locaux."}',
             'value_pt' => '{"0":"A BetWinner oferece suporte a mais de 100 métodos de pagamento: cartões bancários Visa e Mastercard, carteiras eletrônicas (Skrill, Neteller, QIWI), criptomoedas (Bitcoin, Ethereum, USDT, Dogecoin, entre outras) e sistemas de pagamento locais."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 28
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit starts from €1 or the equivalent in another currency, and withdrawals are processed on average within 15 minutes to 24 hours, depending on the selected method. The platform does not charge fees for most transactions."}',
             'value_es' => '{"0":"El depósito mínimo comienza desde 1 euro o su equivalente en otra moneda, y los retiros se procesan en un promedio de entre 15 minutos y 24 horas, según el método elegido. La plataforma no cobra comisiones por la mayoría de las transacciones."}',
             'value_fr' => '{"0":"Le dépôt minimum commence à partir de 1 euro ou l’équivalent dans une autre devise, et les retraits sont traités en moyenne entre 15 minutes et 24 heures, selon la méthode choisie. La plateforme ne facture pas de frais pour la plupart des transactions."}',
             'value_pt' => '{"0":"O depósito mínimo começa a partir de 1 euro ou o equivalente em outra moeda, e os saques são processados, em média, entre 15 minutos e 24 horas, dependendo do método escolhido. A plataforma não cobra taxas para a maioria das transações."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 29
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Below are some of the popular payment systems you can use on the site:"}',
             'value_es' => '{"0":"A continuación, se muestran algunos de los métodos de pago populares disponibles en el sitio:"}',
             'value_fr' => '{"0":"Voici quelques-uns des moyens de paiement les plus populaires disponibles sur le site :"}',
             'value_pt' => '{"0":"Abaixo estão alguns dos métodos de pagamento populares disponíveis no site:"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 30
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 31
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 32
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The BetWinner support team is available 24/7. You can contact them via live chat, email, or phone."}',
             'value_es' => '{"0":"El equipo de soporte de BetWinner está disponible las 24 horas del día, los 7 días de la semana. Puedes contactarlos a través del chat en vivo, correo electrónico o por teléfono."}',
             'value_fr' => '{"0":"L’équipe d’assistance de BetWinner est disponible 24h/24 et 7j/7. Vous pouvez les contacter via le chat en direct, par e-mail ou par téléphone."}',
             'value_pt' => '{"0":"A equipe de suporte da BetWinner está disponível 24 horas por dia, 7 dias por semana. Você pode entrar em contato através do chat ao vivo, e-mail ou telefone."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 33
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 34
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide variety of sports events",
                                 "1":"Decent odds on sports",
                                 "2":"Live service with live streams",
                                 "3":"Large selection of payment methods, including cryptocurrencies",
                                 "4":"Casino section with top providers",
                                 "5":"Mobile apps and user-friendly responsive website"},
                             "1":
                                {"0":"Curacao license — limited legal protection",
                                 "1":"Verification process may take time"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de eventos deportivos",
                                 "1":"Cuotas decentes en deportes",
                                 "2":"Servicio en vivo con transmisiones en directo",
                                 "3":"Gran selección de métodos de pago, incluyendo criptomonedas",
                                 "4":"Sección de casino con proveedores destacados",
                                 "5":"Aplicaciones móviles y sitio web adaptable y fácil de usar"},
                             "1":
                                {"0":"Licencia de Curazao — protección legal limitada",
                                 "1":"El proceso de verificación puede tardar"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large variété d’événements sportifs",
                                 "1":"Cotes intéressantes sur le sport",
                                 "2":"Service en direct avec retransmissions en direct",
                                 "3":"Large choix de méthodes de paiement, y compris les cryptomonnaies",
                                 "4":"Section casino avec des fournisseurs de premier plan",
                                 "5":"Applications mobiles et site web réactif et convivial"},
                             "1":
                                {"0":"Licence de Curaçao — protection juridique limitée",
                                 "1":"La procédure de vérification peut prendre du temps"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de eventos esportivos",
                                 "1":"Odds decentes nos esportes",
                                 "2":"Serviço ao vivo com transmissões ao vivo",
                                 "3":"Grande seleção de métodos de pagamento, incluindo criptomoedas",
                                 "4":"Seção de cassino com provedores de ponta",
                                 "5":"Aplicativos móveis e site responsivo e fácil de usar"},
                             "1":
                                {"0":"Licença de Curaçao — proteção legal limitada",
                                 "1":"O processo de verificação pode levar algum tempo"}
                             }',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 35
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"BetWinner FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de BetWinner"}',
                'value_fr' => '{"0":"FAQ de BetWinner"}',
                'value_pt' => '{"0":"Perguntas frequentes do BetWinner"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 36
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Is verification required?"}',
             'value_es' => '{"0":"¿Es necesaria la verificación?"}',
             'value_fr' => '{"0":"La vérification est-elle nécessaire ?"}',
             'value_pt' => '{"0":"A verificação é necessária?"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 37
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, it is mandatory for withdrawing large amounts."}',
             'value_es' => '{"0":"Sí, es obligatoria para retirar grandes sumas."}',
             'value_fr' => '{"0":"Oui, elle est obligatoire pour retirer des sommes importantes."}',
             'value_pt' => '{"0":"Sim, é obrigatória para retirar grandes quantias."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 38
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 39
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, there is an app for Android, and for iOS you can use it only through the mobile browser."}',
             'value_es' => '{"0":"Sí, hay una aplicación para Android, y para iOS solo se puede usar a través del navegador móvil."}',
             'value_fr' => '{"0":"Oui, il y a une application pour Android, et pour iOS, elle est accessible uniquement via le navigateur mobile."}',
             'value_pt' => '{"0":"Sim, há um aplicativo para Android, e para iOS só é possível usar pelo navegador móvel."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 40
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"How fast are withdrawals processed?"}',
             'value_es' => '{"0":"¿Con qué rapidez se procesan los retiros?"}',
             'value_fr' => '{"0":"À quelle vitesse les retraits sont-ils traités ?"}',
             'value_pt' => '{"0":"Quão rápido são processados os saques?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 41
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"From a few minutes up to 24 hours, depending on the method and the amount."}',
             'value_es' => '{"0":"Desde unos minutos hasta 24 horas, dependiendo del método y del monto."}',
             'value_fr' => '{"0":"De quelques minutes à 24 heures, selon la méthode et le montant."}',
             'value_pt' => '{"0":"De alguns minutos até 24 horas, dependendo do método e do valor."}',
             'order' => 41
            ]
        );
    }
}
