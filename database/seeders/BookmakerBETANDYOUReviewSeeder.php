<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
             'value_en' => '{"0":"BETANDYOU Review"}',
             'value_es' => '{"0":"Reseña de BETANDYOU"}',
             'value_fr' => '{"0":"Avis sur BETANDYOU"}',
             'value_pt' => '{"0":"Análise da BETANDYOU"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU is an international bookmaker that began operating in 2007. The company is licensed in Curaçao. BetAndYou targets a wide range of countries, including the CIS region, Eastern Europe, and Latin America."}',
             'value_es' => '{"0":"BETANDYOU es una casa de apuestas internacional que comenzó a operar en 2007. La empresa cuenta con una licencia de Curazao. BetAndYou está orientada a una amplia gama de países, incluidos los de la región de la CEI, Europa del Este y América Latina."}',
             'value_fr' => '{"0":"BETANDYOU est un bookmaker international qui a commencé ses activités en 2007. La société est titulaire d\'une licence délivrée au Curaçao. BetAndYou cible un large éventail de pays, notamment la région de la CEI, l\'Europe de l\'Est et l\'Amérique latine."}',
             'value_pt' => '{"0":"A BETANDYOU é uma casa de apostas internacional que começou a operar em 2007. A empresa possui licença de Curaçau. A BetAndYou é voltada para uma ampla gama de países, incluindo as regiões da CEI, Europa Oriental e América Latina."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"One of BETANDYOU\'s features is support for multiple currencies. You can choose from over 100 currencies when creating your account, including US dollars, euros, and cryptocurrencies."}',
             'value_es' => '{"0":"Una característica destacada de BETANDYOU es el soporte para múltiples monedas. Puedes elegir entre más de 100 monedas al crear tu cuenta, incluidos el dólar estadounidense, el euro y las criptomonedas."}',
             'value_fr' => '{"0":"L\'une des particularités de BETANDYOU est le support de nombreuses devises. Vous pouvez choisir parmi plus de 100 devises lors de la création de votre compte, y compris le dollar américain, l’euro et les cryptomonnaies."}',
             'value_pt' => '{"0":"Um dos destaques da BETANDYOU é o suporte para várias moedas. Você pode escolher entre mais de 100 moedas ao criar sua conta, incluindo dólar americano, euro e criptomoedas."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"On the BETANDYOU website, you can place bets on a huge number of events and participate in bonus programs. So let\'s take a closer look at the site\'s features in our review."}',
             'value_es' => '{"0":"En el sitio web de BETANDYOU puedes apostar en una enorme cantidad de eventos y participar en programas de bonificación. Así que te invitamos a conocer más detalles en nuestro análisis."}',
             'value_fr' => '{"0":"Sur le site BETANDYOU, vous pouvez parier sur un très grand nombre d’événements et participer à des programmes de bonus. Découvrons donc plus en détail les fonctionnalités du site dans notre revue."}',
             'value_pt' => '{"0":"No site da BETANDYOU, você pode apostar em uma enorme quantidade de eventos e participar de programas de bônus. Por isso, convidamos você a conhecer melhor os recursos da plataforma em nossa análise."}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The site features more than 40 sports. So fans of sports betting will find events to suit any taste. It offers both popular sports like football, basketball, and hockey, as well as more exotic ones such as kabaddi or roller hockey."}',
             'value_es' => '{"0":"En el sitio se ofrecen más de 40 deportes. Así que los aficionados a las apuestas deportivas encontrarán eventos para todos los gustos. Aquí se incluyen deportes populares como el fútbol, el baloncesto y el hockey, así como otros más exóticos como el kabaddi o el hockey sobre patines."}',
             'value_fr' => '{"0":"Le site propose plus de 40 sports. Les amateurs de paris sportifs y trouveront donc des événements pour tous les goûts. On y trouve des sports populaires comme le football, le basketball ou le hockey, ainsi que des disciplines plus exotiques comme le kabaddi ou le roller hockey."}',
             'value_pt' => '{"0":"O site oferece mais de 40 modalidades esportivas. Portanto, os fãs de apostas esportivas encontrarão eventos para todos os gostos. Estão disponíveis tanto esportes populares, como futebol, basquete e hóquei, quanto opções mais exóticas, como kabaddi ou hóquei sobre patins."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Special attention is given to top football leagues, including the English Premier League and the UEFA Champions League, as well as the NBA, ATP, and WTA. At the same time, matches from lower divisions are also available — for example, leagues from Indonesia or Morocco."}',
             'value_es' => '{"0":"Se presta especial atención a las principales ligas de fútbol, como la Premier League inglesa y la Liga de Campeones de la UEFA, así como a la NBA, la ATP y la WTA. Al mismo tiempo, también están disponibles partidos de divisiones inferiores, como los campeonatos de Indonesia o Marruecos."}',
             'value_fr' => '{"0":"Une attention particulière est accordée aux grandes compétitions de football, telles que la Premier League anglaise et la Ligue des champions de l’UEFA, ainsi qu’à la NBA, à l’ATP et à la WTA. Mais des matchs de divisions inférieures sont aussi proposés, comme ceux des championnats d’Indonésie ou du Maroc."}',
             'value_pt' => '{"0":"As maiores atenções são dedicadas às principais ligas de futebol, como a Premier League inglesa e a Liga dos Campeões da UEFA, além da NBA, ATP e WTA. Mas também há partidas de divisões inferiores, como os campeonatos da Indonésia ou do Marrocos."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Players can place bets both before the start of the event and during the game. The website is quite user-friendly: all events are clearly sorted, there\'s a tournament search, and filtering by country or match start time. It’s also worth noting the option to place combined bets."}',
             'value_es' => '{"0":"Los jugadores pueden apostar tanto antes del comienzo del evento como en vivo. El sitio es bastante cómodo de usar: todos los eventos están claramente organizados, hay búsqueda por torneos y filtros por país o por hora de inicio del partido. También vale la pena destacar la posibilidad de hacer apuestas combinadas."}',
             'value_fr' => '{"0":"Les joueurs peuvent parier avant le début de l’événement ou en direct. Le site est assez pratique : tous les événements sont bien triés, il existe une recherche par tournoi et un filtrage par pays ou par heure de début. À noter également la possibilité de faire des paris combinés."}',
             'value_pt' => '{"0":"Os usuários podem fazer apostas antes do início das partidas ou ao vivo. O site é bastante fácil de usar: todos os eventos estão organizados de forma clara, há uma busca por torneio e filtros por país ou horário de início da partida. Também vale destacar a possibilidade de fazer apostas combinadas."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"For the most popular football matches, the odds often reach 1.95–1.97 when betting on one team to win. Tennis odds are also high — for evenly matched opponents, odds are often around 1.88, which is quite solid for two-outcome events. In basketball and hockey, the odds typically range between 1.85 and 1.90."}',
             'value_es' => '{"0":"En los partidos de fútbol más populares, las cuotas suelen alcanzar entre 1.95 y 1.97 en caso de apostar por la victoria de uno de los equipos. En el tenis, las cuotas también son altas: en enfrentamientos equilibrados, suelen rondar el 1.88, lo que es bastante bueno para eventos con dos posibles resultados. En baloncesto y hockey, las cuotas oscilan entre 1.85 y 1.90."}',
             'value_fr' => '{"0":"Pour les matchs de football les plus populaires, les cotes atteignent souvent 1.95 à 1.97 lorsqu’on parie sur la victoire d’une équipe. Les cotes au tennis sont également élevées : pour des adversaires de niveau équivalent, elles tournent souvent autour de 1.88, ce qui est très correct pour un événement à deux issues. En basketball et en hockey, les cotes varient généralement entre 1.85 et 1.90."}',
             'value_pt' => '{"0":"Nos jogos de futebol mais populares, as odds frequentemente chegam a 1.95–1.97 quando se aposta na vitória de uma das equipas. No ténis, as odds também são altas — para confrontos equilibrados, os valores rondam os 1.88, o que é muito bom para eventos com dois resultados possíveis. No basquetebol e hóquei, as odds variam entre 1.85 e 1.90."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, BETANDYOU offers boosted odds on selected events as part of daily promotions. These offers are marked with special icons and allow players to get odds above market level, even without using bonuses."}',
             'value_es' => '{"0":"Además, BETANDYOU ofrece cuotas mejoradas en determinados eventos como parte de sus promociones diarias. Estas ofertas están marcadas con símbolos especiales y permiten al jugador obtener cuotas por encima del promedio del mercado, incluso sin usar bonos."}',
             'value_fr' => '{"0":"De plus, BETANDYOU propose des cotes boostées sur certains événements dans le cadre de promotions quotidiennes. Ces offres sont signalées par des icônes spéciales et permettent aux joueurs d’obtenir des cotes supérieures au marché, même sans recourir à des bonus."}',
             'value_pt' => '{"0":"Além disso, a BETANDYOU oferece odds aumentadas para eventos selecionados como parte de promoções diárias. Essas ofertas são identificadas com ícones especiais e permitem ao jogador obter odds acima do mercado, mesmo sem usar bônus."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU offers a wide range of betting options for each event. For a standard football match, over 1,200 betting markets are available. These include bets on correct score, handicap, totals, individual player stats, number of yellow cards, corner kicks, and even whether there will be a penalty or a red card."}',
             'value_es' => '{"0":"BETANDYOU ofrece una amplia variedad de opciones de apuesta para cada evento. En un partido de fútbol estándar, hay más de 1.200 mercados de apuesta disponibles. Entre ellos se incluyen apuestas al marcador exacto, hándicaps, totales, estadísticas individuales de jugadores, número de tarjetas amarillas, saques de esquina e incluso si habrá penaltis o expulsiones."}',
             'value_fr' => '{"0":"BETANDYOU propose un vaste choix d’options de paris pour chaque événement. Pour un match de football classique, plus de 1 200 marchés de paris sont disponibles. Parmi eux : score exact, handicap, totaux, statistiques individuelles des joueurs, nombre de cartons jaunes, corners, ou encore s’il y aura un penalty ou une expulsion."}',
             'value_pt' => '{"0":"A BETANDYOU oferece uma grande variedade de opções de apostas para cada evento. Num jogo de futebol padrão, estão disponíveis mais de 1.200 mercados de apostas. Entre eles estão apostas no resultado exato, handicap, totais, estatísticas individuais dos jogadores, número de cartões amarelos, cantos e até se haverá penálti ou expulsão."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Basketball and tennis also feature a large number of additional betting markets. For example, you can bet on the winner of each set, total points, handicaps, or tie-breaks. This means you can find the most profitable bet even when standard options don’t look appealing."}',
             'value_es' => '{"0":"En baloncesto y tenis también hay una gran cantidad de mercados adicionales. Por ejemplo, se puede apostar al ganador de cada set, número total de puntos, hándicaps o tie-breaks. Así, podrás encontrar la apuesta más rentable incluso cuando las opciones básicas no resulten atractivas."}',
             'value_fr' => '{"0":"Le basketball et le tennis offrent également de nombreux paris supplémentaires. Par exemple, vous pouvez parier sur le vainqueur de chaque set, le nombre total de points, les handicaps ou les tie-breaks. Vous pouvez ainsi trouver la mise la plus avantageuse même lorsque les options classiques ne vous conviennent pas."}',
             'value_pt' => '{"0":"No basquetebol e no ténis também há uma vasta oferta de apostas adicionais. Por exemplo, é possível apostar no vencedor de cada set, no total de pontos, nos handicaps ou nos tie-breaks. Assim, mesmo que as opções básicas não sejam atrativas, é possível encontrar apostas mais vantajosas."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo"}',
                'value_fr' => '{"0":"Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The «Live» section offers hundreds of matches daily across football, tennis, basketball, volleyball, esports, and other disciplines. Players can monitor real-time odds updates and place bets based on the course of the game."}',
             'value_es' => '{"0":"La sección «En vivo» ofrece cientos de partidos cada día en fútbol, tenis, baloncesto, voleibol, deportes electrónicos y otras disciplinas. Los usuarios pueden seguir la evolución de las cuotas en tiempo real y apostar según el desarrollo del partido."}',
             'value_fr' => '{"0":"La section « Live » propose chaque jour des centaines de matchs de football, tennis, basketball, volley-ball, e-sport et d\'autres disciplines. Les joueurs peuvent suivre les cotes en temps réel et placer leurs paris en fonction du déroulement du match."}',
             'value_pt' => '{"0":"A seção «Ao Vivo» disponibiliza centenas de partidas por dia em futebol, tênis, basquete, voleibol, eSports e outras modalidades. Os jogadores podem acompanhar as variações das odds em tempo real e apostar conforme o desenrolar dos jogos."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The website features graphical match tracking. So even without a video stream, players can see what’s happening on the field — who has possession, whether there were dangerous moments, or who received a card. This function is especially useful for in-play betting, where decisions must be made quickly."}',
             'value_es' => '{"0":"El sitio web dispone de una transmisión gráfica de los partidos. Así, incluso sin retransmisión en vídeo, el jugador puede ver qué está ocurriendo en el campo: quién tiene la posesión, si hubo ocasiones peligrosas o quién recibió una tarjeta. Esta función es especialmente útil para las apuestas en vivo, cuando hay que tomar decisiones rápidas."}',
             'value_fr' => '{"0":"Le site intègre une animation graphique des matchs. Même sans diffusion vidéo, le joueur voit ce qui se passe sur le terrain — qui a la possession, s’il y a eu des actions dangereuses ou des cartons. Cette fonctionnalité est particulièrement utile pour les paris en direct, où les décisions doivent être prises rapidement."}',
             'value_pt' => '{"0":"O site oferece uma transmissão gráfica dos eventos. Mesmo sem vídeo, o jogador pode ver o que está acontecendo em campo — quem tem a posse da bola, se houve lances perigosos ou quem recebeu um cartão. Essa função é especialmente útil para apostas ao vivo, onde as decisões precisam ser rápidas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 20
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Although video live streams are not available on the site, BETANDYOU offers infographics and statistics to help you follow the events and adjust your betting decisions in time."}',
             'value_es' => '{"0":"Aunque no hay retransmisiones en vídeo en el sitio, BETANDYOU ofrece infografías y estadísticas para que puedas seguir los eventos y ajustar tus decisiones de apuesta a tiempo."}',
             'value_fr' => '{"0":"Bien que les retransmissions vidéo ne soient pas disponibles sur le site, BETANDYOU propose des infographies et des statistiques pour vous permettre de suivre les événements et d’ajuster vos décisions de pari en temps réel."}',
             'value_pt' => '{"0":"Embora o site não ofereça transmissões ao vivo em vídeo, a BETANDYOU disponibiliza infográficos e estatísticas para que você acompanhe os eventos e ajuste suas decisões de aposta em tempo hábil."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 22
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 23
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"In addition to sports betting, BETANDYOU features a large casino section with over 7,000 slots from more than 100 providers, including Novomatic, NetEnt, Pragmatic Play, and Microgaming."}',
             'value_es' => '{"0":"Además de las apuestas deportivas, BETANDYOU ofrece una amplia sección de casino con más de 7.000 tragamonedas de más de 100 proveedores, como Novomatic, NetEnt, Pragmatic Play y Microgaming."}',
             'value_fr' => '{"0":"En plus des paris sportifs, BETANDYOU propose une vaste section casino avec plus de 7 000 machines à sous issues de plus de 100 fournisseurs, dont Novomatic, NetEnt, Pragmatic Play et Microgaming."}',
             'value_pt' => '{"0":"Além das apostas esportivas, a BETANDYOU conta com uma ampla seção de cassino com mais de 7.000 slots de mais de 100 provedores, como Novomatic, NetEnt, Pragmatic Play e Microgaming."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 24
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino, you can play with real dealers in roulette, blackjack, baccarat, and poker. All games are streamed live, so the player sees a real person on the screen in real time. Virtual sports, TV lotteries, and crash games are also available."}',
             'value_es' => '{"0":"En el casino en vivo, puedes jugar con crupieres reales a la ruleta, blackjack, baccarat y póker. Todos los juegos se transmiten en vivo, por lo que el jugador ve a una persona real en la pantalla en tiempo real. También están disponibles deportes virtuales, loterías de TV y juegos crash."}',
             'value_fr' => '{"0":"Dans le casino en direct, vous pouvez jouer avec de vrais croupiers à la roulette, au blackjack, au baccara et au poker. Tous les jeux sont diffusés en streaming, ce qui permet au joueur de voir une vraie personne à l’écran en temps réel. Les sports virtuels, les loteries TV et les crash games sont également disponibles."}',
             'value_pt' => '{"0":"No cassino ao vivo, você pode jogar com crupiês reais em roleta, blackjack, bacará e pôquer. Todos os jogos são transmitidos ao vivo, permitindo que o jogador veja uma pessoa real na tela em tempo real. Também estão disponíveis esportes virtuais, loterias de TV e crash games."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 25
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 26
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU uses standard SSL encryption to protect players\' personal and financial data. When creating an account, you need to provide personal information, but verification is required only for large withdrawals."}',
             'value_es' => '{"0":"BETANDYOU utiliza el cifrado SSL estándar para proteger los datos personales y financieros de los jugadores. Al crear una cuenta, se deben proporcionar datos personales, pero la verificación solo es necesaria para retiros grandes."}',
             'value_fr' => '{"0":"BETANDYOU utilise le chiffrement SSL standard pour protéger les données personnelles et financières des joueurs. Lors de la création d’un compte, des informations personnelles sont requises, mais la vérification n’est exigée qu’en cas de retrait important."}',
             'value_pt' => '{"0":"A BETANDYOU utiliza criptografia SSL padrão para proteger os dados pessoais e financeiros dos jogadores. Ao criar uma conta, é necessário fornecer informações pessoais, mas a verificação só é exigida para saques de grandes valores."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 27
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The company strictly adheres to a responsible gaming policy. In the personal account settings, you can enable self-exclusion and set deposit limits."}',
             'value_es' => '{"0":"La empresa cumple estrictamente con la política de juego responsable. En la cuenta personal, se puede activar la autoexclusión y establecer límites de depósito."}',
             'value_fr' => '{"0":"L’entreprise respecte strictement la politique de jeu responsable. Dans l’espace personnel, vous pouvez activer l’auto-exclusion et définir des limites de dépôt."}',
             'value_pt' => '{"0":"A empresa segue rigorosamente a política de jogo responsável. Na conta pessoal, é possível ativar o autoexclusão e definir limites de depósito."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 28
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 29
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To top up your balance, more than 100 payment methods are available. The bookmaker offers financial transactions via Visa and Mastercard bank cards, Skrill, Neteller, ecoPayz, Jeton, Payeer systems, and cryptocurrencies such as Bitcoin, Ethereum, Litecoin, Dogecoin, and Tether."}',
             'value_es' => '{"0":"Para recargar tu saldo, hay disponibles más de 100 métodos de pago. La casa de apuestas ofrece operaciones financieras mediante tarjetas bancarias Visa y Mastercard, sistemas como Skrill, Neteller, ecoPayz, Jeton, Payeer y criptomonedas como Bitcoin, Ethereum, Litecoin, Dogecoin y Tether."}',
             'value_fr' => '{"0":"Pour recharger votre solde, plus de 100 méthodes de paiement sont disponibles. Le bookmaker propose des transactions financières par cartes bancaires Visa et Mastercard, ainsi que via Skrill, Neteller, ecoPayz, Jeton, Payeer et des cryptomonnaies comme Bitcoin, Ethereum, Litecoin, Dogecoin et Tether."}',
             'value_pt' => '{"0":"Para recarregar seu saldo, mais de 100 métodos de pagamento estão disponíveis. A casa de apostas oferece transações financeiras via cartões bancários Visa e Mastercard, sistemas como Skrill, Neteller, ecoPayz, Jeton, Payeer e criptomoedas como Bitcoin, Ethereum, Litecoin, Dogecoin e Tether."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 30
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Funds are credited instantly. Withdrawals may take from 15 minutes up to 24 hours depending on the chosen method and amount. The minimum deposit is from 1 euro or the equivalent in another currency. BETANDYOU does not charge fees for transactions, but payment systems may have their own commissions."}',
             'value_es' => '{"0":"Los fondos se acreditan al instante. Los retiros pueden tardar entre 15 minutos y 24 horas, dependiendo del método elegido y la cantidad. El depósito mínimo es de 1 euro o su equivalente en otra moneda. BETANDYOU no cobra comisiones por las transacciones, aunque los sistemas de pago pueden aplicar las suyas propias."}',
             'value_fr' => '{"0":"Les fonds sont crédités instantanément. Les retraits peuvent prendre de 15 minutes à 24 heures selon la méthode choisie et le montant. Le dépôt minimum est de 1 euro ou l’équivalent dans une autre devise. BETANDYOU ne prélève pas de frais sur les opérations, mais les systèmes de paiement peuvent appliquer leurs propres commissions."}',
             'value_pt' => '{"0":"Os fundos são creditados instantaneamente. Os saques podem levar de 15 minutos a 24 horas, dependendo do método escolhido e do valor. O depósito mínimo é de 1 euro ou equivalente em outra moeda. A BETANDYOU não cobra taxas pelas transações, mas os sistemas de pagamento podem aplicar suas próprias comissões."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 31
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Here is a list of the main popular payment systems you can use to deposit or withdraw funds:"}',
             'value_es' => '{"0":"Aquí tienes una lista de los principales sistemas de pago populares con los que puedes depositar o retirar fondos:"}',
             'value_fr' => '{"0":"Voici une liste des principaux systèmes de paiement populaires que vous pouvez utiliser pour déposer ou retirer des fonds :"}',
             'value_pt' => '{"0":"Aqui está uma lista dos principais sistemas de pagamento populares que você pode usar para depositar ou sacar fundos:"}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 32
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 33
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 34
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The support service operates 24/7 and is available in several languages, including English and Spanish. You can contact them via online chat or email."}',
             'value_es' => '{"0":"El servicio de atención al cliente funciona las 24 horas y está disponible en varios idiomas, incluidos inglés y español. Puedes contactarlos mediante chat en línea o correo electrónico."}',
             'value_fr' => '{"0":"Le service client est disponible 24h/24 et 7j/7, en plusieurs langues, dont l’anglais et l’espagnol. Vous pouvez les contacter via le chat en ligne ou par e-mail."}',
             'value_pt' => '{"0":"O serviço de suporte funciona 24 horas por dia e está disponível em vários idiomas, incluindo inglês e espanhol. Você pode entrar em contato pelo chat online ou e-mail."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 35
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 36
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Large number of events",
                                 "1":"High odds",
                                 "2":"Bonus program",
                                 "3":"Fast payouts",
                                 "4":"24/7 support",
                                 "5":"Mobile apps"},
                             "1":
                                {"0":"No video streaming",
                                 "1":"No phone support"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran cantidad de eventos",
                                 "1":"Cuotas altas",
                                 "2":"Programa de bonificaciones",
                                 "3":"Pagos rápidos",
                                 "4":"Soporte 24/7",
                                 "5":"Aplicaciones móviles"},
                             "1":
                                {"0":"No hay transmisión de video",
                                 "1":"No hay soporte telefónico"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Grand nombre d’événements",
                                 "1":"Cotes élevées",
                                 "2":"Programme de bonus",
                                 "3":"Paiements rapides",
                                 "4":"Support 24h/24 et 7j/7",
                                 "5":"Applications mobiles"},
                             "1":
                                {"0":"Pas de diffusion vidéo",
                                 "1":"Pas de support téléphonique"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande quantidade de eventos",
                                 "1":"Odds altas",
                                 "2":"Programa de bônus",
                                 "3":"Pagamentos rápidos",
                                 "4":"Suporte 24/7",
                                 "5":"Aplicativos móveis"},
                             "1":
                                {"0":"Sem transmissão de vídeo",
                                 "1":"Sem suporte telefônico"}
                             }',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 37
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"BETANDYOU FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de BETANDYOU"}',
                'value_fr' => '{"0":"FAQ de BETANDYOU"}',
                'value_pt' => '{"0":"Perguntas frequentes do BETANDYOU"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 38
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Are live match broadcasts available?"}',
             'value_es' => '{"0":"¿Hay transmisiones en vivo de los partidos?"}',
             'value_fr' => '{"0":"Y a-t-il des retransmissions en direct des matchs ?"}',
             'value_pt' => '{"0":"Existem transmissões ao vivo das partidas?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 39
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"No, broadcasts are not available on the site or in the app. Only live casino games are available in real time."}',
             'value_es' => '{"0":"No, no hay transmisiones en el sitio ni en la aplicación. Solo los juegos de casino en vivo están disponibles en tiempo real."}',
             'value_fr' => '{"0":"Non, il n’y a pas de retransmissions sur le site ni dans l’application. Seuls les jeux de casino en direct sont disponibles en temps réel."}',
             'value_pt' => '{"0":"Não, as transmissões não estão disponíveis no site nem no aplicativo. Apenas os jogos de cassino ao vivo estão disponíveis em tempo real."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 40
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"How long does verification take?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda la verificación?"}',
             'value_fr' => '{"0":"Combien de temps prend la vérification ?"}',
             'value_pt' => '{"0":"Quanto tempo leva a verificação?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 41
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Usually up to 15 minutes, but it can take several hours or even days depending on the document review."}',
             'value_es' => '{"0":"Normalmente hasta 15 minutos, pero puede tardar varias horas o incluso días, dependiendo de la revisión de los documentos."}',
             'value_fr' => '{"0":"Habituellement jusqu’à 15 minutes, mais cela peut durer plusieurs heures voire plusieurs jours selon le contrôle des documents."}',
             'value_pt' => '{"0":"Normalmente até 15 minutos, mas pode levar várias horas ou até dias, dependendo da análise dos documentos."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 42
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Is phone support available?"}',
             'value_es' => '{"0":"¿Hay soporte telefónico disponible?"}',
             'value_fr' => '{"0":"Le support téléphonique est-il disponible ?"}',
             'value_pt' => '{"0":"O suporte por telefone está disponível?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 43
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"No, only chat support on the website or email is available; phone calls are not supported."}',
             'value_es' => '{"0":"No, solo está disponible el chat de soporte en el sitio web o el correo electrónico; no se aceptan llamadas telefónicas."}',
             'value_fr' => '{"0":"Non, seul le chat de support sur le site ou l’e-mail sont disponibles ; les appels téléphoniques ne sont pas pris en charge."}',
             'value_pt' => '{"0":"Não, apenas o chat de suporte no site ou e-mail estão disponíveis; chamadas telefônicas não são aceitas."}',
             'order' => 43
            ]
        );
    }
}
