<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
             'value_en' => '{"0":"20BET Review"}',
             'value_es' => '{"0":"Reseña de 20BET"}',
             'value_fr' => '{"0":"Avis sur 20BET"}',
             'value_pt' => '{"0":"Análise da 20BET"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET is an international betting platform that has been actively growing in the market since its launch in 2020. The company operates under a Curaçao license, allowing it to offer betting services in many countries around the world. The site supports multiple languages, making it convenient for players from different regions."}',
             'value_es' => '{"0":"20BET es una plataforma de apuestas internacional que ha crecido activamente en el mercado desde su lanzamiento en 2020. La empresa opera bajo una licencia de Curazao, lo que le permite ofrecer servicios de apuestas en muchos países del mundo. El sitio admite varios idiomas, lo que lo hace cómodo para jugadores de diferentes regiones."}',
             'value_fr' => '{"0":"20BET est une plateforme de paris internationale qui se développe activement sur le marché depuis sa création en 2020. L\'entreprise opère sous licence de Curaçao, ce qui lui permet de proposer ses services dans de nombreux pays à travers le monde. Le site prend en charge plusieurs langues, ce qui le rend pratique pour les joueurs de différentes régions."}',
             'value_pt' => '{"0":"A 20BET é uma plataforma internacional de apostas que tem crescido ativamente no mercado desde o seu lançamento em 2020. A empresa opera sob licença de Curaçau, o que lhe permite oferecer serviços de apostas em diversos países ao redor do mundo. O site está disponível em vários idiomas, tornando-o conveniente para jogadores de diferentes regiões."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker offers a robust sports section with a wide variety of betting options, as well as a large online casino section. 20BET also provides welcome bonuses, cashback offers, and tournaments for its users. Let’s take a closer look at the platform’s key features in our review."}',
             'value_es' => '{"0":"La casa de apuestas ofrece una potente sección deportiva con una gran variedad de opciones de apuestas, así como una amplia sección de casino en línea. 20BET también ofrece bonos de bienvenida, reembolsos y torneos. A continuación, analizamos en detalle sus principales características."}',
             'value_fr' => '{"0":"Le bookmaker propose une section sportive solide avec un grand nombre d’options de paris, ainsi qu’une vaste section de casino en ligne. 20BET offre également des bonus de bienvenue, des cashbacks et des tournois. Examinons de plus près les caractéristiques principales de la plateforme dans notre revue."}',
             'value_pt' => '{"0":"A casa de apostas oferece uma seção esportiva robusta com uma grande variedade de opções de apostas, além de uma ampla seção de cassino online. A 20BET também oferece bônus de boas-vindas, cashback e torneios. Vamos analisar mais de perto os principais recursos da plataforma nesta análise."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET offers more than 35 sports, including popular disciplines like football, tennis, basketball, and hockey, as well as less common ones such as cricket, snooker, floorball, and water polo."}',
             'value_es' => '{"0":"20BET ofrece más de 35 deportes, incluyendo disciplinas populares como el fútbol, el tenis, el baloncesto y el hockey, así como otras menos comunes como el críquet, el snooker, el floorball y el waterpolo."}',
             'value_fr' => '{"0":"20BET propose plus de 35 sports, incluant des disciplines populaires comme le football, le tennis, le basketball et le hockey, ainsi que des sports moins répandus tels que le cricket, le snooker, le floorball et le water-polo."}',
             'value_pt' => '{"0":"A 20BET oferece mais de 35 modalidades esportivas, incluindo disciplinas populares como futebol, tênis, basquete e hóquei, bem como outras menos comuns como críquete, sinuca, floorball e polo aquático."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker also provides betting options on a wide range of esports tournaments, including CS:GO, Dota 2, League of Legends, and Valorant."}',
             'value_es' => '{"0":"El operador también permite apostar en una amplia variedad de torneos de deportes electrónicos, incluyendo CS:GO, Dota 2, League of Legends y Valorant."}',
             'value_fr' => '{"0":"Le bookmaker permet également de parier sur un grand nombre de tournois d’esport, notamment CS:GO, Dota 2, League of Legends et Valorant."}',
             'value_pt' => '{"0":"A casa de apostas também disponibiliza apostas em uma grande variedade de torneios de eSports, como CS:GO, Dota 2, League of Legends e Valorant."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Users can place bets both in pre-match and live modes. The bookmaker pays special attention to national leagues. Even in lower divisions, there are numerous betting options available for each event."}',
             'value_es' => '{"0":"Los usuarios pueden realizar apuestas tanto en modalidad prepartido como en vivo. La casa de apuestas presta especial atención a las ligas nacionales. Incluso en las divisiones inferiores, se ofrecen numerosas opciones de apuesta para cada evento."}',
             'value_fr' => '{"0":"Les utilisateurs peuvent placer des paris en pré-match comme en direct. Le site accorde une attention particulière aux ligues nationales. Même dans les divisions inférieures, un large éventail d’options de paris est proposé pour chaque événement."}',
             'value_pt' => '{"0":"Os usuários podem apostar tanto no modo pré-jogo quanto ao vivo. A 20BET dá atenção especial às ligas nacionais. Mesmo nas divisões inferiores, há uma grande quantidade de opções de apostas para cada evento."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Here are some of the most popular sports featured on the site that you can bet on:"}',
             'value_es' => '{"0":"A continuación se enumeran algunos de los deportes más populares disponibles en el sitio:"}',
             'value_fr' => '{"0":"Voici quelques-uns des sports les plus populaires disponibles sur la plateforme :"}',
             'value_pt' => '{"0":"A seguir, alguns dos esportes mais populares disponíveis no site para apostas:"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET offers attractive odds, which is one of the platform\'s main advantages. Odds on popular events, especially football matches in the English Premier League, La Liga, and Serie A, are often higher than those offered by other bookmakers. For example, the odds for a favourite to win a Premier League match can range from 1.80 to 1.90."}',
             'value_es' => '{"0":"20BET ofrece cuotas atractivas, lo que representa una de las principales ventajas de la plataforma. Las cuotas en eventos populares, especialmente en partidos de fútbol de la Premier League inglesa, La Liga y la Serie A, suelen ser más altas que las de otros operadores. Por ejemplo, la cuota para la victoria del favorito en un partido de la Premier puede estar entre 1.80 y 1.90."}',
             'value_fr' => '{"0":"20BET propose des cotes attractives, ce qui constitue l’un des principaux atouts de la plateforme. Les cotes sur les événements populaires, notamment les matchs de football de la Premier League anglaise, de la Liga et de la Serie A, sont souvent supérieures à celles proposées par d’autres bookmakers. Par exemple, la cote pour la victoire d’un favori en Premier League peut se situer entre 1.80 et 1.90."}',
             'value_pt' => '{"0":"A 20BET oferece odds atrativas, sendo este um dos principais pontos fortes da plataforma. As odds em eventos populares, especialmente em partidas de futebol da Premier League inglesa, La Liga e Serie A, muitas vezes superam as oferecidas por outras casas de apostas. Por exemplo, a odd para a vitória do favorito em um jogo da Premier League pode variar entre 1.80 e 1.90."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, 20BET provides competitive odds for major ATP and WTA tournaments, where even bets on underdogs can reach 3.00 or more."}',
             'value_es' => '{"0":"En tenis, 20BET ofrece cuotas competitivas para los principales torneos ATP y WTA, donde incluso las apuestas a los no favoritos pueden alcanzar cuotas de 3.00 o más."}',
             'value_fr' => '{"0":"Pour le tennis, 20BET propose des cotes avantageuses sur les grands tournois ATP et WTA, où même les mises sur les outsiders peuvent atteindre 3.00 ou plus."}',
             'value_pt' => '{"0":"No tênis, a 20BET oferece odds competitivas para os principais torneios da ATP e WTA, onde até mesmo apostas em azarões podem atingir cotações de 3.00 ou mais."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"On the site, odds are updated quickly, which is particularly important for live betting. For instance, if an unexpected event occurs during a football match—such as a red card or a goal—the odds for upcoming events are instantly adjusted, allowing users to react promptly and choose the best betting options."}',
             'value_es' => '{"0":"En el sitio, las cuotas se actualizan rápidamente, lo cual es especialmente importante para las apuestas en vivo. Por ejemplo, si ocurre un evento inesperado durante un partido de fútbol, como una expulsión o un gol, las cuotas se ajustan al instante, lo que permite reaccionar a tiempo y elegir las mejores opciones de apuesta."}',
             'value_fr' => '{"0":"Les cotes sur le site sont mises à jour rapidement, ce qui est particulièrement important pour les paris en direct. Par exemple, en cas d’événement imprévu pendant un match de football — comme un carton rouge ou un but — les cotes sont immédiatement ajustées, permettant aux utilisateurs de réagir rapidement et de choisir les meilleures options de pari."}',
             'value_pt' => '{"0":"As odds no site são atualizadas rapidamente, o que é especialmente importante para apostas ao vivo. Por exemplo, se ocorre um evento inesperado durante uma partida de futebol — como uma expulsão ou um gol — as odds são imediatamente ajustadas, permitindo que os usuários reajam rapidamente e escolham as melhores opções de aposta."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"One of 20BET\'s strongest aspects is the large number of betting options available for each event. For popular football matches, the bookmaker offers over 1000 different betting markets. You can place bets on the exact score, fouls, shots on target, and more. There is also the possibility to make combined bets, such as win + total goals."}',
             'value_es' => '{"0":"Uno de los puntos más fuertes de 20BET es la gran cantidad de opciones de apuestas para cada evento. En los partidos de fútbol populares, el operador ofrece más de 1000 mercados de apuestas. Puedes apostar al resultado exacto, faltas, tiros a puerta, entre otros. También es posible realizar apuestas combinadas, por ejemplo, victoria + total de goles."}',
             'value_fr' => '{"0":"L’un des plus grands atouts de 20BET est le grand nombre d’options de paris disponibles pour chaque événement. Pour les matchs de football populaires, le bookmaker propose plus de 1000 marchés différents. Vous pouvez parier sur le score exact, les fautes, les tirs cadrés, etc. Il est également possible de faire des paris combinés, comme victoire + total de buts."}',
             'value_pt' => '{"0":"Um dos pontos mais fortes da 20BET é a grande variedade de opções de apostas para cada evento. Em partidas de futebol populares, a casa de apostas oferece mais de 1000 mercados diferentes. É possível apostar no placar exato, faltas, chutes a gol e muito mais. Também é possível fazer apostas combinadas, como vitória + total de gols."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In addition to standard bets, 20BET also offers complex types of wagers — including combo bets, Asian handicaps, bets on yellow cards, offsides, and corners."}',
             'value_es' => '{"0":"Además de las apuestas estándar, 20BET ofrece tipos de apuestas complejas, como apuestas combinadas, hándicaps asiáticos, apuestas a tarjetas amarillas, fueras de juego y saques de esquina."}',
             'value_fr' => '{"0":"En plus des paris standards, 20BET propose des types de paris plus complexes — comme les paris combinés, les handicaps asiatiques, les paris sur les cartons jaunes, les hors-jeu et les corners."}',
             'value_pt' => '{"0":"Além das apostas padrão, a 20BET oferece tipos de apostas mais complexos — como apostas combinadas, handicaps asiáticos, apostas em cartões amarelos, impedimentos e escanteios."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo"}',
                'value_fr' => '{"0":"Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The live betting section at 20BET allows users to comfortably place real-time bets. The interface is highly user-friendly, with events grouped by sport, filter options available, and a separate tab for favorite matches. Odds are updated almost instantly. One-click quick bets are also supported."}',
             'value_es' => '{"0":"La sección de apuestas en vivo de 20BET permite realizar apuestas en tiempo real de forma cómoda. La interfaz es muy intuitiva, con los eventos agrupados por deporte, opciones de filtrado y una pestaña separada para los partidos favoritos. Las cuotas se actualizan casi al instante. También están disponibles las apuestas rápidas con un solo clic."}',
             'value_fr' => '{"0":"La section des paris en direct chez 20BET permet de parier en temps réel de manière confortable. L’interface est très conviviale, avec des événements classés par sport, des options de filtrage, et un onglet séparé pour les matchs favoris. Les cotes sont mises à jour presque instantanément. Les paris rapides en un clic sont également disponibles."}',
             'value_pt' => '{"0":"A seção de apostas ao vivo da 20BET permite fazer apostas em tempo real de forma confortável. A interface é extremamente intuitiva, com os eventos agrupados por modalidade, filtros disponíveis e uma aba separada para partidas favoritas. As odds são atualizadas quase instantaneamente. Também há suporte para apostas rápidas com um clique."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 20
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In the live section, 20BET usually offers over 500 events for betting each day. There is event visualization showing attacks, ball possession, and player statistics — helping you stay informed about what’s happening in the match."}',
             'value_es' => '{"0":"En la sección en vivo, 20BET suele ofrecer más de 500 eventos diarios para apostar. Hay visualización de los partidos con datos como ataques, posesión del balón y estadísticas de los jugadores, lo que te mantiene informado sobre lo que ocurre en el encuentro."}',
             'value_fr' => '{"0":"Dans la section en direct, 20BET propose généralement plus de 500 événements par jour. Une visualisation des événements est disponible, montrant les attaques, la possession de balle et les statistiques des joueurs, ce qui vous permet de rester informé sur le déroulement du match."}',
             'value_pt' => '{"0":"Na seção ao vivo, a 20BET normalmente oferece mais de 500 eventos por dia. Há visualizações das partidas com informações sobre ataques, posse de bola e estatísticas dos jogadores, permitindo que você acompanhe tudo o que acontece no jogo."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 21
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET is gradually introducing a live streaming feature, but at the time of this review, it is available only for selected events. Most commonly, the bookmaker streams tennis matches, esports competitions, and certain lower-league football games. The video plays in stable quality and is accessible even with an average internet connection."}',
             'value_es' => '{"0":"20BET está implementando gradualmente la función de transmisión en vivo, aunque al momento de esta reseña, solo está disponible para algunos eventos. Generalmente, la casa transmite partidos de tenis, competiciones de eSports y algunos encuentros de ligas de fútbol menores. El video se reproduce con calidad estable y es accesible incluso con una conexión a internet media."}',
             'value_fr' => '{"0":"20BET déploie progressivement la fonctionnalité de diffusion en direct, mais au moment de cette analyse, elle n’est disponible que pour certains événements. Le plus souvent, le bookmaker diffuse des matchs de tennis, des compétitions d’e-sport et certains matchs de football de ligues inférieures. La vidéo est de qualité stable, même avec une connexion Internet moyenne."}',
             'value_pt' => '{"0":"A 20BET está a implementar gradualmente a função de transmissão ao vivo, mas no momento desta análise, ela está disponível apenas para alguns eventos. Normalmente, a casa transmite partidas de ténis, competições de eSports e alguns jogos de ligas inferiores de futebol. O vídeo é reproduzido com qualidade estável, mesmo com uma conexão de internet mediana."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"To watch live streams, you need an active account and a positive balance. If a stream is unavailable, you can always use the match infographics instead."}',
             'value_es' => '{"0":"Para ver las transmisiones en vivo, necesitas tener una cuenta activa y saldo positivo. Si no hay transmisión disponible, siempre puedes utilizar la infografía del partido."}',
             'value_fr' => '{"0":"Pour regarder les diffusions en direct, vous devez avoir un compte actif et un solde positif. Si la diffusion n’est pas disponible, vous pouvez toujours utiliser l’infographie du match sélectionné."}',
             'value_pt' => '{"0":"Para assistir às transmissões ao vivo, é necessário ter uma conta ativa e saldo positivo. Se a transmissão não estiver disponível, você sempre pode utilizar a infografia da partida selecionada."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The casino section at 20BET features thousands of games from over 60 providers, including industry giants like NetEnt, Microgaming, Play’n GO, and Pragmatic Play. The collection includes classic slots, poker, roulette, and blackjack."}',
             'value_es' => '{"0":"La sección de casino en 20BET incluye miles de juegos de más de 60 proveedores, incluidos gigantes como NetEnt, Microgaming, Play’n GO y Pragmatic Play. La colección abarca tragamonedas clásicas, póker, ruleta y blackjack."}',
             'value_fr' => '{"0":"La section casino de 20BET propose des milliers de jeux provenant de plus de 60 fournisseurs, dont des leaders comme NetEnt, Microgaming, Play’n GO et Pragmatic Play. La collection comprend des machines à sous classiques, du poker, de la roulette et du blackjack."}',
             'value_pt' => '{"0":"A seção de cassino da 20BET inclui milhares de jogos de mais de 60 provedores, incluindo gigantes como NetEnt, Microgaming, Play’n GO e Pragmatic Play. A coleção abrange slots clássicos, pôquer, roleta e blackjack."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 26
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino, players can join real dealer tables 24/7. Fast games, TV lotteries, and Aviator are also available. Notably, a demo mode is offered for many games, allowing you to explore them for free before playing with real money."}',
             'value_es' => '{"0":"En el casino en vivo, los jugadores pueden unirse a mesas con crupieres reales las 24 horas del día. También están disponibles juegos rápidos, loterías de TV y Aviator. Cabe destacar la disponibilidad del modo demo en muchos juegos, lo que permite probarlos gratuitamente."}',
             'value_fr' => '{"0":"Dans le live casino, les joueurs peuvent rejoindre des tables avec croupiers en direct 24h/24. Des jeux rapides, des loteries TV et Aviator sont également disponibles. À noter : un mode démo est proposé pour de nombreux jeux, ce qui permet de les tester gratuitement."}',
             'value_pt' => '{"0":"No cassino ao vivo, os jogadores podem participar de mesas com crupiês reais 24 horas por dia. Também estão disponíveis jogos rápidos, loterias de TV e Aviator. Vale destacar que muitos jogos oferecem modo demo, permitindo experimentá-los gratuitamente."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 28
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
                'order' => 27
            ],
            ['key' => '20bet',
                'bookmaker_id' => 12,
                'component' => 'p',
                'value_en' => '{"0":"20BET uses modern SSL encryption technology to protect your personal and financial data. You also have the option to enable two-factor authentication, which increases protection against unauthorized access to your account."}',
                'value_es' => '{"0":"20BET utiliza tecnología moderna de cifrado SSL para proteger tus datos personales y financieros. También tienes la opción de activar la autenticación de dos factores, lo que aumenta la protección contra accesos no autorizados a tu cuenta."}',
                'value_fr' => '{"0":"20BET utilise une technologie moderne de cryptage SSL pour protéger vos données personnelles et financières. Vous avez également la possibilité d’activer l’authentification à deux facteurs, ce qui renforce la sécurité de votre compte contre les accès non autorisés."}',
                'value_pt' => '{"0":"A 20BET utiliza tecnologia moderna de criptografia SSL para proteger seus dados pessoais e financeiros. Você também tem a opção de ativar a autenticação em dois fatores, o que aumenta a segurança contra acessos não autorizados à sua conta."}',
                'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 28
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 29
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET supports over 50 payment methods, including Visa and Mastercard bank cards, e-wallets such as Skrill and Neteller, and cryptocurrencies like Bitcoin, Ethereum, and Litecoin. The minimum deposit is from €10, and the minimum withdrawal is from €20."}',
             'value_es' => '{"0":"20BET admite más de 50 métodos de pago, incluidas tarjetas bancarias Visa y Mastercard, monederos electrónicos como Skrill y Neteller, y criptomonedas como Bitcoin, Ethereum y Litecoin. El depósito mínimo es desde 10€, y el retiro mínimo es desde 20€."}',
             'value_fr' => '{"0":"20BET prend en charge plus de 50 méthodes de paiement, notamment les cartes bancaires Visa et Mastercard, les portefeuilles électroniques comme Skrill et Neteller, ainsi que les cryptomonnaies telles que Bitcoin, Ethereum et Litecoin. Le dépôt minimum est de 10€, et le retrait minimum est de 20€."}',
             'value_pt' => '{"0":"A 20BET oferece suporte a mais de 50 métodos de pagamento, incluindo cartões bancários Visa e Mastercard, carteiras eletrônicas como Skrill e Neteller, e criptomoedas como Bitcoin, Ethereum e Litecoin. O depósito mínimo é a partir de €10 e o saque mínimo é a partir de €20."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 30
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals can take from 1 to 24 hours, depending on the method and amount. 20BET does not charge any fees. Verification is required before the first withdrawal of large amounts and usually takes up to 48 hours."}',
             'value_es' => '{"0":"Los retiros pueden tardar entre 1 y 24 horas, dependiendo del método y del importe. 20BET no cobra comisiones. La verificación es obligatoria antes del primer retiro de grandes cantidades y suele tardar hasta 48 horas."}',
             'value_fr' => '{"0":"Les retraits peuvent prendre entre 1 et 24 heures, selon la méthode et le montant. 20BET ne facture aucun frais. La vérification est obligatoire avant le premier retrait de montants importants et prend généralement jusqu’à 48 heures."}',
             'value_pt' => '{"0":"Os saques podem levar de 1 a 24 horas, dependendo do método e do valor. A 20BET não cobra comissões. A verificação é obrigatória antes do primeiro saque de valores elevados e geralmente leva até 48 horas."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 31
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Here is a list of the main payment systems available on the site:"}',
             'value_es' => '{"0":"Aquí tienes una lista de los principales sistemas de pago disponibles en el sitio:"}',
             'value_fr' => '{"0":"Voici la liste des principaux systèmes de paiement disponibles sur le site :"}',
             'value_pt' => '{"0":"Aqui está uma lista dos principais sistemas de pagamento disponíveis no site:"}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 32
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 33
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 34
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET customer support operates 24/7. You can contact them via online chat, email, Telegram bot, or WhatsApp."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 20BET funciona las 24 horas del día, los 7 días de la semana. Puedes contactarlos mediante chat en línea, correo electrónico, bot de Telegram o WhatsApp."}',
             'value_fr' => '{"0":"Le service client de 20BET est disponible 24h/24 et 7j/7. Vous pouvez les contacter via le chat en ligne, par e-mail, via le bot Telegram ou WhatsApp."}',
             'value_pt' => '{"0":"O suporte ao cliente da 20BET funciona 24 horas por dia, 7 dias por semana. Você pode entrar em contato pelo chat online, e-mail, bot do Telegram ou WhatsApp."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 35
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 36
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"High odds",
                                 "1":"Wide range of betting events",
                                 "2":"Casino with live games",
                                 "3":"Cryptocurrency support",
                                 "4":"Commission-free withdrawals"},
                             "1":
                                {"0":"No live video streaming",
                                 "1":"Mandatory verification for large withdrawals"}
                             }',
             'value_es' => '{"0":
                                {"0":"Altos coeficientes",
                                 "1":"Gran cantidad de eventos para apostar",
                                 "2":"Casino con juegos en vivo",
                                 "3":"Soporte de criptomonedas",
                                 "4":"Retiros sin comisiones"},
                             "1":
                                {"0":"No hay transmisión de video en vivo",
                                 "1":"Verificación obligatoria para retiros grandes"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Cotes élevées",
                                 "1":"Grand nombre d\'événements de paris",
                                 "2":"Casino avec jeux en direct",
                                 "3":"Support des cryptomonnaies",
                                 "4":"Retraits sans commissions"},
                             "1":
                                {"0":"Pas de diffusion vidéo en direct",
                                 "1":"Vérification obligatoire pour les gros retraits"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Altas odds",
                                 "1":"Grande variedade de eventos para apostas",
                                 "2":"Cassino com jogos ao vivo",
                                 "3":"Suporte a criptomoedas",
                                 "4":"Saques sem taxas"},
                             "1":
                                {"0":"Sem transmissão de vídeo ao vivo",
                                 "1":"Verificação obrigatória para grandes saques"}
                             }',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 37
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"20BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 20BET"}',
                'value_fr' => '{"0":"FAQ de 20BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 20BET"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 38
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Can I play without verification?"}',
             'value_es' => '{"0":"¿Se puede jugar sin verificación?"}',
             'value_fr' => '{"0":"Puis-je jouer sans vérification ?"}',
             'value_pt' => '{"0":"Posso jogar sem verificação?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 39
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Yes, but to withdraw large amounts you will need to complete the verification process."}',
             'value_es' => '{"0":"Sí, pero para retirar grandes sumas deberá completar el proceso de verificación."}',
             'value_fr' => '{"0":"Oui, mais pour retirer des montants importants, vous devrez passer par le processus de vérification."}',
             'value_pt' => '{"0":"Sim, mas para sacar grandes quantias será necessário passar pelo processo de verificação."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 40
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"How fast are winnings paid out?"}',
             'value_es' => '{"0":"¿Qué tan rápido se reciben las ganancias?"}',
             'value_fr' => '{"0":"À quelle vitesse les gains sont-ils versés ?"}',
             'value_pt' => '{"0":"Com que rapidez os ganhos são pagos?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 41
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In most cases — within 1–2 hours, depending on the payment system."}',
             'value_es' => '{"0":"En la mayoría de los casos — dentro de 1–2 horas, dependiendo del sistema de pago."}',
             'value_fr' => '{"0":"Dans la plupart des cas — en 1 à 2 heures, selon le système de paiement."}',
             'value_pt' => '{"0":"Na maioria dos casos — dentro de 1 a 2 horas, dependendo do sistema de pagamento."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 42
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 43
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the official Android app is available for download on the website. For iOS, there is a possibility to install a web app."}',
             'value_es' => '{"0":"Sí, la aplicación oficial para Android está disponible para descargar desde el sitio web. Para iOS, existe la posibilidad de instalar una aplicación web."}',
             'value_fr' => '{"0":"Oui, l’application officielle Android est disponible en téléchargement sur le site. Pour iOS, il est possible d’installer une application web."}',
             'value_pt' => '{"0":"Sim, o aplicativo oficial para Android está disponível para download no site. Para iOS, há a possibilidade de instalar um aplicativo web."}',
             'order' => 43
            ]
        );
    }
}
