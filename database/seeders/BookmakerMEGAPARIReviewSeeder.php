<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"MEGAPARI Review"}',
             'value_es' => '{"0":"Reseña de MEGAPARI"}',
             'value_fr' => '{"0":"Avis sur MEGAPARI"}',
             'value_pt' => '{"0":"Análise da MEGAPARI"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI is an online bookmaker operating under a Curaçao license. The company was founded in 2019."}',
             'value_es' => '{"0":"MEGAPARI es una casa de apuestas en línea que opera bajo una licencia de Curazao. La empresa fue fundada en 2019."}',
             'value_fr' => '{"0":"MEGAPARI est un bookmaker en ligne opérant sous licence de Curaçao. La société a été fondée en 2019."}',
             'value_pt' => '{"0":"A MEGAPARI é uma casa de apostas online que opera sob licença de Curaçao. A empresa foi fundada em 2019."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The platform is available in over 60 languages and supports more than 100 payment methods, including cryptocurrencies. In addition to the website, MEGAPARI also offers user-friendly mobile apps for iOS and Android. The company provides match visualizations, automated odds analysis, and real-time customer support."}',
             'value_es' => '{"0":"La plataforma está disponible en más de 60 idiomas y admite más de 100 métodos de pago, incluidas criptomonedas. Además del sitio web, MEGAPARI también ofrece aplicaciones móviles prácticas para iOS y Android. La empresa proporciona visualizaciones de partidos, análisis automatizado de cuotas y soporte al cliente en tiempo real."}',
             'value_fr' => '{"0":"La plateforme est disponible en plus de 60 langues et prend en charge plus de 100 méthodes de paiement, y compris les cryptomonnaies. En plus du site web, MEGAPARI propose également des applications mobiles pratiques pour iOS et Android. L’entreprise offre des visualisations de matchs, une analyse automatisée des cotes et une assistance client en temps réel."}',
             'value_pt' => '{"0":"A plataforma está disponível em mais de 60 idiomas e oferece suporte a mais de 100 métodos de pagamento, incluindo criptomoedas. Além do site, a MEGAPARI também disponibiliza aplicativos móveis práticos para iOS e Android. A empresa oferece visualizações de partidas, análise automatizada de odds e suporte ao cliente em tempo real."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting section at MEGAPARI offers over 1,000 events daily in pre-match mode, and even more in live mode. Football, basketball, tennis, and hockey have the highest number of available markets — for example, matches in the English Premier League feature over 1,500 betting options. At the same time, attention is not limited to top-tier events: you’ll also find regional U19 matches in Finland or friendly games in Africa."}',
             'value_es' => '{"0":"La sección de apuestas deportivas en MEGAPARI ofrece diariamente más de 1.000 eventos en modo pre-partido y aún más en modo en vivo. El fútbol, el baloncesto, el tenis y el hockey son los deportes con mayor número de mercados disponibles — por ejemplo, los partidos de la Premier League inglesa tienen más de 1.500 opciones de apuesta. Sin embargo, la atención no se limita solo a los eventos de alto perfil: también puedes encontrar partidos regionales sub-19 en Finlandia o amistosos en África."}',
             'value_fr' => '{"0":"La section des paris sportifs de MEGAPARI propose en moyenne plus de 1 000 événements par jour en pré-match, et encore plus en direct. Le football, le basketball, le tennis et le hockey offrent le plus grand nombre d’événements — par exemple, un match de Premier League anglaise peut comporter plus de 1 500 options de pari. Cependant, l’attention ne se limite pas aux événements de haut niveau : vous pouvez également trouver des matchs régionaux U19 en Finlande ou des rencontres amicales en Afrique."}',
             'value_pt' => '{"0":"A seção de apostas esportivas da MEGAPARI oferece, em média, mais de 1.000 eventos por dia no modo pré-jogo, e ainda mais no modo ao vivo. Futebol, basquete, tênis e hóquei são os esportes com maior número de eventos disponíveis — por exemplo, partidas da Premier League inglesa contam com mais de 1.500 opções de apostas. Ao mesmo tempo, a atenção não se limita apenas aos grandes eventos: você também encontrará partidas regionais sub-19 na Finlândia ou amistosos na África."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In addition to traditional sports, MEGAPARI offers betting on esports, virtual sports, political events, beauty contests, music shows, TV shows, Nobel Prizes, and even cryptocurrency rates. Each event comes with numerous betting options — from standard handicaps and totals to advanced markets like exact score and player statistics. You can also place combination bets. Here are the main sports available on the site:"}',
             'value_es' => '{"0":"Además de los deportes tradicionales, MEGAPARI ofrece apuestas en deportes electrónicos, deportes virtuales, eventos políticos, concursos de belleza, programas musicales, programas de televisión, premios Nobel e incluso tasas de criptomonedas. Cada evento cuenta con numerosas opciones de apuesta, desde hándicaps y totales estándar hasta mercados avanzados como el marcador exacto o las estadísticas de jugadores. También puedes hacer apuestas combinadas. A continuación, los principales deportes disponibles en el sitio:"}',
             'value_fr' => '{"0":"Outre les disciplines traditionnelles, MEGAPARI propose des paris sur les sports électroniques, les sports virtuels, les événements politiques, les concours de beauté, les émissions musicales, les programmes télévisés, les prix Nobel et même les taux des cryptomonnaies. Chaque événement dispose de nombreuses options de pari, allant des handicaps et totaux classiques aux marchés avancés comme le score exact ou les statistiques des joueurs. Il est également possible de placer des paris combinés. Voici les principaux sports disponibles sur la plateforme :"}',
             'value_pt' => '{"0":"Além das modalidades tradicionais, a MEGAPARI oferece apostas em eSports, esportes virtuais, eventos políticos, concursos de beleza, programas musicais, programas de TV, Prêmios Nobel e até mesmo taxas de criptomoedas. Cada evento inclui inúmeras opções de apostas, desde handicaps e totais padrão até mercados avançados como placar exato e estatísticas de jogadores. Também é possível fazer apostas combinadas. Confira abaixo os principais esportes disponíveis no site:"}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI offers some of the highest odds among international bookmakers, especially for popular sports and top leagues."}',
             'value_es' => '{"0":"MEGAPARI ofrece algunas de las cuotas más altas entre las casas de apuestas internacionales, especialmente en deportes populares y ligas de primer nivel."}',
             'value_fr' => '{"0":"MEGAPARI propose certaines des meilleures cotes parmi les bookmakers internationaux, notamment sur les sports populaires et les ligues majeures."}',
             'value_pt' => '{"0":"A MEGAPARI oferece algumas das maiores odds entre as casas de apostas internacionais, especialmente para esportes populares e principais ligas."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In English Premier League matches, for example, in the Manchester City vs Liverpool match, the odds for a City win are 2.45, a draw is priced at 3.80, and a Liverpool win is offered at 2.75."}',
             'value_es' => '{"0":"En los partidos de la Premier League inglesa, por ejemplo, en el encuentro Manchester City vs Liverpool, la victoria del City se paga a 2.45, el empate a 3.80 y la victoria del Liverpool a 2.75."}',
             'value_fr' => '{"0":"Dans les matchs de Premier League anglaise, par exemple le match Manchester City – Liverpool, la cote pour une victoire de City est de 2,45, le match nul est à 3,80 et une victoire de Liverpool à 2,75."}',
             'value_pt' => '{"0":"Em partidas da Premier League inglesa, por exemplo, no jogo Manchester City vs Liverpool, a odd para vitória do City é de 2.45, o empate está em 3.80 e a vitória do Liverpool em 2.75."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In ATP tennis matches, odds on favorites usually range from 1.90 to 1.95, whereas other bookmakers typically offer around 1.80–1.87."}',
             'value_es' => '{"0":"En los torneos ATP de tenis, las cuotas para los favoritos suelen estar entre 1.90 y 1.95, mientras que en otras casas rondan los 1.80–1.87."}',
             'value_fr' => '{"0":"Pour les matchs de tennis ATP, les cotes sur les favoris sont généralement de 1,90 à 1,95, tandis que chez d\'autres bookmakers elles tournent autour de 1,80–1,87."}',
             'value_pt' => '{"0":"Nos torneios de tênis ATP, as odds para os favoritos geralmente variam entre 1.90 e 1.95, enquanto em outras casas giram em torno de 1.80–1.87."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI also provides strong live betting odds. For instance, if the favorite is trailing 0:1 in the 60th minute, the odds for their comeback victory can reach 4.50, while the market average is usually between 4.10 and 4.20."}',
             'value_es' => '{"0":"MEGAPARI también destaca en apuestas en vivo. Por ejemplo, si el favorito pierde 0:1 en el minuto 60, su victoria puede pagarse a 4.50, mientras que la media del mercado es de 4.10–4.20."}',
             'value_fr' => '{"0":"En paris en direct, MEGAPARI propose également des cotes compétitives. Par exemple, si le favori perd 0-1 à la 60e minute, la cote pour sa victoire peut atteindre 4,50, contre une moyenne de 4,10–4,20 sur le marché."}',
             'value_pt' => '{"0":"Nas apostas ao vivo, a MEGAPARI também se destaca com boas cotações. Por exemplo, se o favorito está perdendo por 0:1 aos 60 minutos, a odd para sua virada pode chegar a 4.50, enquanto a média do mercado fica entre 4.10 e 4.20."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Betting on MEGAPARI is especially profitable in disciplines like NBA basketball, Grand Slam tennis, boxing, and UFC, where the bookmaker consistently offers some of the highest odds available."}',
             'value_es' => '{"0":"Es especialmente ventajoso apostar en MEGAPARI en disciplinas como baloncesto NBA, torneos Grand Slam de tenis, boxeo y UFC, donde el operador ofrece algunas de las mejores cuotas del mercado."}',
             'value_fr' => '{"0":"Parier sur MEGAPARI est particulièrement avantageux pour la NBA, les tournois du Grand Chelem en tennis, la boxe et l’UFC, où les cotes proposées sont parmi les plus élevées du secteur."}',
             'value_pt' => '{"0":"É especialmente vantajoso apostar na MEGAPARI em esportes como basquete da NBA, tênis Grand Slam, boxe e UFC, onde o site oferece algumas das odds mais altas do mercado."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In top football matches, the number of available betting options exceeds 1,600. These include not only standard bets on the outcome, total goals, or handicap, but also bets on periods, goals in specific halves, number of goals, yellow cards, and shots on target."}',
             'value_es' => '{"0":"En los partidos de fútbol más destacados, el número de mercados disponibles supera los 1.600. No solo se puede apostar al resultado, total de goles o hándicap, sino también a períodos, goles por tiempo, número de goles, tarjetas amarillas y disparos a puerta."}',
             'value_fr' => '{"0":"Dans les grands matchs de football, le nombre d’options de paris disponibles dépasse 1 600. Il ne s’agit pas seulement des paris classiques sur le résultat, le total ou le handicap, mais aussi des paris sur les périodes, les buts par mi-temps, le nombre de buts, les cartons jaunes ou les tirs cadrés."}',
             'value_pt' => '{"0":"Em partidas de futebol de alto nível, o número de mercados disponíveis ultrapassa 1.600. Não se trata apenas de apostas padrão em resultado, total de gols ou handicap, mas também em períodos, gols por tempo, número de gols, cartões amarelos e chutes a gol."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, players can bet on games, sets, number of aces, or the winner of the first serve. In basketball, there are markets for individual quarters or the exact number of three-pointers. MEGAPARI also allows users to create custom combinations of bets using the «Bet Constructor» feature."}',
             'value_es' => '{"0":"En tenis, se puede apostar a juegos, sets, cantidad de aces o al ganador del primer servicio. En baloncesto, hay mercados para cuartos individuales o el número exacto de triples. MEGAPARI también permite crear combinaciones personalizadas de apuestas mediante la función «Constructor de apuestas»."}',
             'value_fr' => '{"0":"Au tennis, les joueurs peuvent parier sur les jeux, les sets, le nombre d’aces ou le vainqueur du premier service. En basket-ball, des paris sont disponibles sur les quarts-temps ou le nombre exact de tirs à trois points. MEGAPARI permet également de créer des combinaisons personnalisées de paris grâce à la fonctionnalité «Constructeur de paris»."}',
             'value_pt' => '{"0":"No tênis, os apostadores podem apostar em games, sets, número de aces ou no vencedor do primeiro saque. No basquete, há opções para cada quarto ou para o número exato de arremessos de três pontos. A MEGAPARI também permite criar combinações personalizadas de apostas com a funcionalidade «Construtor de Apostas»."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo"}',
                'value_fr' => '{"0":"Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The live platform interface is user-friendly and easy to navigate. All events are grouped by sport, time, and popularity. Each match features detailed graphical data with animations showing attacks, ball possession, and zones of action. Real-time statistics are available, providing information on shots, offsides, fouls, and corners."}',
             'value_es' => '{"0":"La interfaz de la plataforma en vivo es intuitiva y fácil de navegar. Todos los eventos están agrupados por deporte, horario y popularidad. Cada partido cuenta con información gráfica detallada, incluyendo animaciones de ataques, posesión del balón y zonas de acción. También hay estadísticas en tiempo real con datos sobre tiros, fueras de juego, faltas y saques de esquina."}',
             'value_fr' => '{"0":"L’interface de la plateforme live est conviviale et facile à naviguer. Tous les événements sont classés par sport, heure et popularité. Chaque match est accompagné de données graphiques détaillées avec des animations montrant les attaques, la possession du ballon et les zones d’action. Des statistiques en temps réel sont également disponibles, avec des informations sur les tirs, les hors-jeu, les fautes et les corners."}',
             'value_pt' => '{"0":"A interface da plataforma ao vivo é prática e fácil de navegar. Todos os eventos são agrupados por modalidade, horário e popularidade. Cada partida apresenta dados gráficos detalhados com animações de ataques, posse de bola e zonas de ação. Estatísticas em tempo real também estão disponíveis, com informações sobre chutes, impedimentos, faltas e escanteios."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Odds are updated almost instantly, and bets are accepted without delays. In most cases, you can place bets on the same markets after the match starts as in the pre-match stage. Additionally, MEGAPARI allows you to open multiple matches simultaneously in multi-window mode."}',
             'value_es' => '{"0":"Las cuotas se actualizan casi al instante y las apuestas se aceptan sin demoras. En la mayoría de los casos, puedes apostar en los mismos mercados después de que el partido comience, igual que en pre-partido. Además, MEGAPARI permite abrir varios partidos al mismo tiempo en modo de múltiples ventanas."}',
             'value_fr' => '{"0":"Les cotes sont mises à jour presque instantanément et les paris sont acceptés sans délai. Dans la plupart des cas, vous pouvez parier sur les mêmes marchés qu’en pré-match, même après le coup d’envoi. De plus, MEGAPARI permet d’ouvrir plusieurs matchs simultanément en mode multi-fenêtre."}',
             'value_pt' => '{"0":"As odds são atualizadas quase instantaneamente e as apostas são aceitas sem atrasos. Na maioria dos casos, você poderá apostar nos mesmos mercados do pré-jogo mesmo após o início da partida. Além disso, a MEGAPARI permite abrir várias partidas ao mesmo tempo no modo multi-janelas."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"You can watch matches directly on the website after logging into your account, provided your balance is positive. The streaming catalog includes football matches (including lower-tier leagues), ATP/ITF tennis tournaments, basketball leagues, hockey, table tennis, and eSports. The platform delivers stable video quality, with adjustable resolution ranging from 240p to HD."}',
             'value_es' => '{"0":"Puedes ver los partidos directamente en el sitio web después de iniciar sesión en tu cuenta, siempre que tengas saldo positivo. El catálogo de transmisiones incluye partidos de fútbol (incluyendo ligas menores), torneos de tenis ATP/ITF, ligas de baloncesto, hockey, tenis de mesa y eSports. La plataforma ofrece una calidad de video estable, con resolución ajustable desde 240p hasta HD."}',
             'value_fr' => '{"0":"Vous pouvez regarder les matchs directement sur le site après vous être connecté à votre compte, à condition que votre solde soit positif. Le catalogue de diffusions comprend des matchs de football (y compris les ligues inférieures), des tournois de tennis ATP/ITF, des ligues de basketball, du hockey, du tennis de table et des eSports. La plateforme assure une qualité vidéo stable, avec des paramètres allant de 240p à HD."}',
             'value_pt' => '{"0":"Você pode assistir às partidas diretamente no site após fazer login na sua conta, desde que tenha saldo positivo. O catálogo de transmissões inclui jogos de futebol (inclusive de ligas menores), torneios de tênis ATP/ITF, ligas de basquete, hóquei, tênis de mesa e eSports. A plataforma oferece qualidade de vídeo estável, com ajuste de resolução de 240p até HD."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"A particularly useful feature is the ability to watch the live stream alongside live betting — you can place the video window next to the betting markets. For events without video coverage, graphical match information is available."}',
             'value_es' => '{"0":"Una función especialmente útil es la posibilidad de ver la transmisión en paralelo con las apuestas en vivo, colocando la ventana de video junto a los mercados de apuestas. Para eventos sin transmisión de video, hay información gráfica disponible."}',
             'value_fr' => '{"0":"Une fonctionnalité particulièrement utile permet de regarder la diffusion en direct tout en pariant en direct, en plaçant la fenêtre vidéo à côté des marchés de paris. Pour les événements sans vidéo, des données graphiques sont disponibles."}',
             'value_pt' => '{"0":"Um recurso especialmente útil é a possibilidade de assistir à transmissão ao vivo paralelamente às apostas ao vivo — você pode posicionar a janela de vídeo ao lado dos mercados de apostas. Para eventos sem transmissão de vídeo, há informações gráficas disponíveis."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Like most bookmakers, MEGAPARI features a fully functional online casino. This section includes both classic slots and live dealer games."}',
             'value_es' => '{"0":"Al igual que la mayoría de las casas de apuestas, MEGAPARI cuenta con un casino online completo. Esta sección incluye tanto tragamonedas clásicas como juegos en vivo con crupieres reales."}',
             'value_fr' => '{"0":"Comme la plupart des bookmakers, MEGAPARI propose un casino en ligne complet. Cette section comprend à la fois des machines à sous classiques et des jeux en direct avec croupiers."}',
             'value_pt' => '{"0":"Assim como a maioria das casas de apostas, a MEGAPARI possui um cassino online completo. Esta seção inclui slots clássicos e jogos ao vivo com crupiês reais."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino, you’ll find roulette, blackjack, baccarat, sic bo, and andar bahar. The games have a responsive interface, making them accessible on smartphones, tablets, and PCs. Additionally, there’s a section with crash games, TV games, and instant lotteries."}',
             'value_es' => '{"0":"En el casino en vivo encontrarás ruleta, blackjack, bacará, sic bo y andar bahar. Los juegos tienen una interfaz adaptable, compatible con teléfonos móviles, tabletas y PC. Además, hay una sección con juegos crash, juegos de TV y loterías instantáneas."}',
             'value_fr' => '{"0":"Le casino en direct offre la roulette, le blackjack, le baccarat, le sic bo et l\'andar bahar. Les jeux disposent d\'une interface réactive, adaptée aux smartphones, tablettes et ordinateurs. Il existe également une section avec des jeux crash, des jeux TV et des loteries instantanées."}',
             'value_pt' => '{"0":"No cassino ao vivo estão disponíveis roleta, blackjack, bacará, sic bo e andar bahar. Os jogos têm uma interface responsiva, compatível com smartphones, tablets e PCs. Há também uma seção com jogos crash, jogos de TV e loterias instantâneas."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 27
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 28
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI uses SSL encryption for all transactions and the transfer of personal data. User verification is mandatory upon the first large withdrawal or when account details are changed. All transactions are stored in encrypted form, and the website undergoes regular security audits."}',
             'value_es' => '{"0":"MEGAPARI utiliza cifrado SSL para todas las transacciones y la transferencia de datos personales. La verificación del usuario es obligatoria en el primer retiro grande o al cambiar los datos de la cuenta. Todas las transacciones se almacenan en forma cifrada, y el sitio se somete a auditorías de seguridad periódicas."}',
             'value_fr' => '{"0":"MEGAPARI utilise le cryptage SSL pour toutes les transactions et le transfert de données personnelles. La vérification de l\'utilisateur est obligatoire lors du premier retrait important ou en cas de modification des informations du compte. Toutes les transactions sont stockées sous forme cryptée, et le site fait l\'objet d\'audits de sécurité réguliers."}',
             'value_pt' => '{"0":"A MEGAPARI utiliza criptografia SSL para todas as transações e transferência de dados pessoais. A verificação do usuário é obrigatória no primeiro grande saque ou ao alterar os dados da conta. Todas as transações são armazenadas de forma criptografada e o site passa por auditorias de segurança regulares."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 29
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The company supports responsible gambling policies: within the user profile, it’s possible to activate daily, weekly, and monthly spending limits, enable self-exclusion, or restrict access to specific games."}',
             'value_es' => '{"0":"La empresa apoya políticas de juego responsable: en el perfil del usuario se pueden activar límites de gasto diarios, semanales y mensuales, aplicar la autoexclusión o restringir el acceso a ciertos juegos."}',
             'value_fr' => '{"0":"La société soutient une politique de jeu responsable : dans le profil utilisateur, il est possible d’activer des limites de dépenses quotidiennes, hebdomadaires et mensuelles, de s’auto-exclure ou de restreindre l’accès à certains jeux."}',
             'value_pt' => '{"0":"A empresa apoia políticas de jogo responsável: no perfil do usuário, é possível ativar limites diários, semanais e mensais de gastos, ativar a autoexclusão ou restringir o acesso a determinados jogos."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 30
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 31
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI offers over 100 payment systems. The platform supports Visa and MasterCard bank cards, e-wallets such as Skrill, Neteller, Jeton, ecoPayz, as well as payment systems like Piastrix and Perfect Money. Cryptocurrencies are also accepted, including Bitcoin, Ethereum, Litecoin, USDT, and Dogecoin."}',
             'value_es' => '{"0":"MEGAPARI ofrece más de 100 sistemas de pago. La plataforma admite tarjetas bancarias Visa y MasterCard, monederos electrónicos como Skrill, Neteller, Jeton, ecoPayz, así como sistemas de pago como Piastrix y Perfect Money. También se aceptan criptomonedas, incluyendo Bitcoin, Ethereum, Litecoin, USDT y Dogecoin."}',
             'value_fr' => '{"0":"MEGAPARI propose plus de 100 systèmes de paiement. La plateforme prend en charge les cartes bancaires Visa et MasterCard, les portefeuilles électroniques tels que Skrill, Neteller, Jeton, ecoPayz, ainsi que les systèmes de paiement comme Piastrix et Perfect Money. Les cryptomonnaies sont également acceptées, notamment Bitcoin, Ethereum, Litecoin, USDT et Dogecoin."}',
             'value_pt' => '{"0":"A MEGAPARI oferece mais de 100 sistemas de pagamento. A plataforma suporta cartões bancários Visa e MasterCard, carteiras eletrônicas como Skrill, Neteller, Jeton, ecoPayz, bem como sistemas de pagamento como Piastrix e Perfect Money. Também é possível usar criptomoedas, incluindo Bitcoin, Ethereum, Litecoin, USDT e Dogecoin."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 32
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals usually take between 15 minutes and 2 hours for most methods, though bank transfers can take up to 48 hours. The minimum withdrawal amount starts from €1.5. Here is a list of the main payment methods available on the site:"}',
             'value_es' => '{"0":"Los retiros generalmente tardan entre 15 minutos y 2 horas para la mayoría de los métodos, aunque las transferencias bancarias pueden demorar hasta 48 horas. El monto mínimo de retiro comienza desde €1,5. Aquí está la lista de los principales métodos de pago disponibles en el sitio:"}',
             'value_fr' => '{"0":"Les retraits prennent généralement entre 15 minutes et 2 heures pour la plupart des méthodes, mais les virements bancaires peuvent prendre jusqu\'à 48 heures. Le montant minimum de retrait commence à partir de 1,5€. Voici la liste des principaux moyens de paiement disponibles sur le site:"}',
             'value_pt' => '{"0":"As retiradas geralmente levam entre 15 minutos e 2 horas para a maioria dos métodos, embora transferências bancárias possam demorar até 48 horas. O valor mínimo de saque é a partir de €1,5. Aqui está a lista dos principais métodos de pagamento disponíveis no site:"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 33
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 34
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 35
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI\'s customer support operates 24/7 via live chat, email, and phone."}',
             'value_es' => '{"0":"El servicio de atención al cliente de MEGAPARI funciona las 24 horas del día a través de chat en vivo, correo electrónico y teléfono."}',
             'value_fr' => '{"0":"Le service client de MEGAPARI est disponible 24h/24 et 7j/7 via chat en direct, e-mail et téléphone."}',
             'value_pt' => '{"0":"O suporte ao cliente da MEGAPARI funciona 24 horas por dia, 7 dias por semana, via chat ao vivo, e-mail e telefone."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 36
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 37
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Large number of events",
                                 "1":"High odds",
                                 "2":"Wide range of payment methods",
                                 "3":"Live streaming",
                                 "4":"Live match graphics",
                                 "5":"Instant withdrawals"},
                             "1":
                                {"0":"Some countries have access restrictions"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran cantidad de eventos",
                                 "1":"Cuotas altas",
                                 "2":"Amplia variedad de métodos de pago",
                                 "3":"Transmisión en vivo",
                                 "4":"Gráficos en vivo de los partidos",
                                 "5":"Retiros instantáneos"},
                             "1":
                                {"0":"Algunos países tienen restricciones de acceso"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Grand nombre d’événements",
                                 "1":"Cotes élevées",
                                 "2":"Large choix de méthodes de paiement",
                                 "3":"Diffusion en direct",
                                 "4":"Graphiques en direct des matchs",
                                 "5":"Retraits instantanés"},
                             "1":
                                {"0":"Certains pays sont soumis à des restrictions d’accès"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande número de eventos",
                                 "1":"Odds elevadas",
                                 "2":"Ampla variedade de métodos de pagamento",
                                 "3":"Transmissão ao vivo",
                                 "4":"Gráficos ao vivo das partidas",
                                 "5":"Levantamentos instantâneos"},
                             "1":
                                {"0":"Alguns países têm restrições de acesso"}
                             }',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 38
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"MEGAPARI FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MEGAPARI"}',
                'value_fr' => '{"0":"FAQ de MEGAPARI"}',
                'value_pt' => '{"0":"Perguntas frequentes do MEGAPARI"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 39
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"What is the bonus for new players?"}',
             'value_es' => '{"0":"¿Cuál es el bono para nuevos jugadores?"}',
             'value_fr' => '{"0":"Quel est le bonus pour les nouveaux joueurs ?"}',
             'value_pt' => '{"0":"Qual é o bônus para novos jogadores?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 40
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"New players are offered a 100% first deposit bonus up to €100 and free spins for the casino. You can find out how to claim them in our dedicated section."}',
             'value_es' => '{"0":"Se ofrece un bono del 100% en el primer depósito hasta €100 y tiradas gratis para el casino. Puedes consultar cómo obtenerlos en nuestra sección especial."}',
             'value_fr' => '{"0":"Un bonus de 100 % sur le premier dépôt jusqu’à 100 € ainsi que des free spins pour le casino sont offerts aux nouveaux joueurs. Vous pouvez découvrir comment les obtenir dans notre section dédiée."}',
             'value_pt' => '{"0":"Os novos jogadores recebem um bônus de 100% no primeiro depósito até €100 e rodadas grátis para o cassino. Você pode ver como obtê-los na nossa seção especial."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 41
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Can I play without identity verification?"}',
             'value_es' => '{"0":"¿Puedo jugar sin verificación de identidad?"}',
             'value_fr' => '{"0":"Puis-je jouer sans vérification d’identité ?"}',
             'value_pt' => '{"0":"Posso jogar sem verificação de identidade?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 42
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Yes, you can play without verification, but if you want to withdraw a large amount, you will need to verify your identity. This involves providing a passport or other documents that confirm your identity."}',
             'value_es' => '{"0":"Sí, puedes jugar sin verificación, pero si deseas retirar una gran cantidad de dinero, deberás verificar tu identidad proporcionando tu pasaporte u otros documentos que confirmen tu identidad."}',
             'value_fr' => '{"0":"Oui, il est possible de jouer sans vérification, mais si vous souhaitez retirer une grosse somme d’argent, une vérification sera nécessaire. Vous devrez alors fournir un passeport ou d’autres documents prouvant votre identité."}',
             'value_pt' => '{"0":"Sim, é possível jogar sem verificação, mas se quiser retirar uma quantia elevada, será necessário verificar a identidade fornecendo o passaporte ou outros documentos que comprovem quem você é."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 43
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Can I place bets from my phone?"}',
             'value_es' => '{"0":"¿Puedo hacer apuestas desde mi teléfono?"}',
             'value_fr' => '{"0":"Puis-je placer des paris depuis mon téléphone ?"}',
             'value_pt' => '{"0":"Posso fazer apostas pelo telefone?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 44
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Yes, you can either download the mobile app or use the mobile version of the website."}',
             'value_es' => '{"0":"Sí, puedes descargar la aplicación móvil o usar la versión móvil del sitio web."}',
             'value_fr' => '{"0":"Oui, vous pouvez télécharger l’application mobile ou utiliser la version mobile du site."}',
             'value_pt' => '{"0":"Sim, você pode baixar o aplicativo móvel ou usar a versão móvel do site."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 45
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum bet amount?"}',
             'value_es' => '{"0":"¿Cuál es la cantidad mínima para apostar?"}',
             'value_fr' => '{"0":"Quel est le montant minimum de mise ?"}',
             'value_pt' => '{"0":"Qual é o valor mínimo para apostar?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 46
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet amount is €0.20."}',
             'value_es' => '{"0":"La cantidad mínima para apostar es €0,20."}',
             'value_fr' => '{"0":"Le montant minimum de mise est de 0,20 €."}',
             'value_pt' => '{"0":"O valor mínimo para apostar é €0,20."}',
             'order' => 46
            ]
        );
    }
}
