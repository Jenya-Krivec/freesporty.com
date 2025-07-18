<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
             'value_en' => '{"0":"MOSTBET Review"}',
             'value_es' => '{"0":"Reseña de MOSTBET"}',
             'value_fr' => '{"0":"Avis sur MOSTBET"}',
             'value_pt' => '{"0":"Análise da MOSTBET"}',
             'order' => 1
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET is an international betting company that has been actively developing in the gambling market since 2009. Over more than a decade, the platform has gained popularity in more than 90 countries, with over one million active users each month."}',
             'value_es' => '{"0":"MOSTBET es una casa de apuestas internacional que ha estado creciendo activamente en el mercado desde 2009. A lo largo de más de una década, la plataforma ha ganado popularidad en más de 90 países y cuenta con más de un millón de usuarios activos mensuales."}',
             'value_fr' => '{"0":"MOSTBET est une société de paris internationale qui se développe activement sur le marché depuis 2009. En plus de dix ans, la plateforme a gagné en popularité dans plus de 90 pays et compte plus d’un million d’utilisateurs actifs chaque mois."}',
             'value_pt' => '{"0":"A MOSTBET é uma empresa de apostas internacional que tem se desenvolvido ativamente no mercado desde 2009. Ao longo de mais de uma década, a plataforma conquistou popularidade em mais de 90 países e conta com mais de um milhão de usuários ativos por mês."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The MOSTBET website is available in over 30 languages, including English, German, Spanish, Turkish, and many others. It supports a wide range of currencies, cryptocurrencies, and payment systems, so you won’t face any difficulties in that regard."}',
             'value_es' => '{"0":"El sitio web de MOSTBET está disponible en más de 30 idiomas, incluidos el inglés, alemán, español, turco y muchos más. Ofrece soporte para una amplia gama de monedas, criptomonedas y sistemas de pago, por lo que no tendrás problemas en ese sentido."}',
             'value_fr' => '{"0":"Le site MOSTBET est disponible en plus de 30 langues, dont l’anglais, l’allemand, l’espagnol, le turc et bien d’autres. Il prend en charge de nombreuses devises, cryptomonnaies et systèmes de paiement, vous n’aurez donc aucun problème à ce niveau."}',
             'value_pt' => '{"0":"O site da MOSTBET está disponível em mais de 30 idiomas, incluindo inglês, alemão, espanhol, turco e muitos outros. Oferece suporte a várias moedas, criptomoedas e sistemas de pagamento, então você não terá dificuldades nesse aspecto."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"We recommend exploring MOSTBET in more detail in our full review."}',
             'value_es' => '{"0":"Te recomendamos consultar nuestro análisis completo para conocer todos los detalles sobre MOSTBET."}',
             'value_fr' => '{"0":"Nous vous invitons à consulter notre revue détaillée de MOSTBET."}',
             'value_pt' => '{"0":"Recomendamos conferir nossa análise completa para saber mais sobre a MOSTBET."}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"One of the main focuses of MOSTBET is sports betting. The bookmaker offers a wide selection of sports to bet on. You can place bets on over 35 sports categories, including classic disciplines like football, tennis, basketball, hockey, volleyball, and boxing, as well as less popular sports such as rugby, futsal, snooker, beach volleyball, and even political events or TV show outcomes."}',
             'value_es' => '{"0":"Uno de los principales enfoques de MOSTBET es las apuestas deportivas. El operador ofrece una amplia gama de deportes en los que puedes apostar. Puedes realizar apuestas en más de 35 categorías deportivas, que incluyen disciplinas clásicas como el fútbol, tenis, baloncesto, hockey, voleibol y boxeo, así como deportes menos populares como rugby, fútbol sala, snooker, voleibol de playa e incluso eventos políticos o resultados de programas de televisión."}',
             'value_fr' => '{"0":"L’un des principaux domaines d’activité de MOSTBET est les paris sportifs. Le bookmaker propose un large éventail de disciplines sportives sur lesquelles parier. Vous pouvez parier sur plus de 35 catégories sportives, y compris les disciplines classiques comme le football, le tennis, le basket-ball, le hockey, le volley-ball, la boxe, mais aussi sur des sports moins populaires comme le rugby, le futsal, le snooker, le beach-volley, ainsi que sur des événements politiques ou des émissions télévisées."}',
             'value_pt' => '{"0":"Um dos principais focos da MOSTBET é nas apostas esportivas. A casa de apostas oferece uma ampla variedade de esportes para apostar. Você pode fazer apostas em mais de 35 categorias esportivas, incluindo esportes clássicos como futebol, tênis, basquete, hóquei, vôlei e boxe, além de modalidades menos populares como rúgbi, futsal, sinuca, vôlei de praia e até mesmo eventos políticos ou resultados de programas de TV."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Special attention is given to football. Users can bet on national leagues from all over the world — from the English Premier League to Indonesia’s fourth division tournaments. You can place bets on the exact score, combined outcomes, number of corners, yellow cards, or offsides."}',
             'value_es' => '{"0":"Se presta especial atención al fútbol. Los usuarios pueden apostar en ligas nacionales de todo el mundo, desde la Premier League inglesa hasta torneos de cuarta división en Indonesia. Puedes apostar al marcador exacto, a combinaciones de resultados, número de saques de esquina, tarjetas amarillas u offsides."}',
             'value_fr' => '{"0":"Une attention particulière est accordée au football. Les utilisateurs peuvent parier sur les championnats nationaux du monde entier — de la Premier League anglaise jusqu’aux tournois de quatrième division en Indonésie. Il est possible de parier sur le score exact, des paris combinés, le nombre de corners, de cartons jaunes ou de hors-jeu."}',
             'value_pt' => '{"0":"O futebol recebe atenção especial. Os usuários podem apostar em campeonatos nacionais de todo o mundo — desde a Premier League inglesa até torneios da quarta divisão da Indonésia. É possível apostar no placar exato, em apostas combinadas, número de escanteios, cartões amarelos ou impedimentos."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Besides football, tennis is well covered (ATP, WTA, ITF), along with basketball (NBA, EuroLeague, South American leagues), hockey (NHL, KHL, European championships), and less common sports like table tennis, water polo, and darts. MMA, UFC, and boxing also receive significant attention."}',
             'value_es' => '{"0":"Además del fútbol, el tenis está bien representado (ATP, WTA, ITF), así como el baloncesto (NBA, Euroliga, ligas sudamericanas), el hockey (NHL, KHL, campeonatos europeos) y deportes menos comunes como el tenis de mesa, el waterpolo y los dardos. También se presta mucha atención a las apuestas en MMA, UFC y boxeo."}',
             'value_fr' => '{"0":"En dehors du football, le tennis est bien représenté (ATP, WTA, ITF), tout comme le basket-ball (NBA, EuroLeague, ligues sud-américaines), le hockey (NHL, KHL, championnats européens), et des sports moins courants comme le tennis de table, le water-polo ou les fléchettes. Les paris sur le MMA, l’UFC et la boxe sont également très présents."}',
             'value_pt' => '{"0":"Além do futebol, o tênis é bem representado (ATP, WTA, ITF), assim como o basquete (NBA, EuroLeague, ligas sul-americanas), o hóquei (NHL, KHL, campeonatos europeus), e esportes menos populares como tênis de mesa, polo aquático e dardos. As apostas em MMA, UFC e boxe também têm grande destaque."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The table below shows the main sports available for betting:"}',
             'value_es' => '{"0":"En la siguiente tabla se presentan los principales deportes disponibles para apostar:"}',
             'value_fr' => '{"0":"Le tableau ci-dessous présente les principaux sports disponibles pour les paris :"}',
             'value_pt' => '{"0":"A tabela abaixo mostra os principais esportes disponíveis para apostas:"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"High Ratios"}',
                'value_es' => '{"0":"Altas cuotas"}',
                'value_fr' => '{"0":"Cotes élevées"}',
                'value_pt' => '{"0":"Altas probabilidades"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET offers competitive odds, especially on major markets. For example, in a Champions League match, the odds for the favorite to win may be around 1.95, while the underdog can be priced at 4.00 or higher."}',
             'value_es' => '{"0":"MOSTBET ofrece cuotas competitivas, especialmente en los mercados principales. Por ejemplo, en un partido de la Liga de Campeones, la cuota para la victoria del favorito puede ser de 1.95, mientras que la del equipo no favorito puede superar los 4.00."}',
             'value_fr' => '{"0":"MOSTBET propose des cotes compétitives, notamment sur les marchés principaux. Par exemple, pour un match de Ligue des champions, la cote pour la victoire du favori peut être de 1.95, tandis que celle de l’outsider peut atteindre 4.00 ou plus."}',
             'value_pt' => '{"0":"A MOSTBET oferece odds competitivas, especialmente nos principais mercados. Por exemplo, em uma partida da Liga dos Campeões, a odd para a vitória do favorito pode ser de 1.95, enquanto a do azarão pode ultrapassar 4.00."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"In the live segment, odds are updated instantly in response to events on the field. The speed of changes is on par with industry leaders. MOSTBET also allows users to quickly repeat a bet or adjust the stake — a crucial feature for live betting."}',
             'value_es' => '{"0":"En el segmento en vivo, las cuotas se actualizan al instante según lo que ocurra en el campo. La velocidad con la que cambian las cuotas está al nivel de los líderes del sector. MOSTBET también permite repetir rápidamente una apuesta o modificar el importe, lo cual es clave en las apuestas en vivo."}',
             'value_fr' => '{"0":"Dans le segment en direct, les cotes sont mises à jour instantanément en fonction des événements du match. La vitesse de mise à jour est comparable à celle des leaders du marché. MOSTBET permet également de répéter rapidement un pari ou de modifier la mise, ce qui est essentiel pour les paris en direct."}',
             'value_pt' => '{"0":"No segmento ao vivo, as odds são atualizadas instantaneamente conforme os acontecimentos do jogo. A velocidade dessas atualizações está no mesmo nível dos líderes da indústria. A MOSTBET também permite repetir rapidamente uma aposta ou ajustar o valor — algo essencial nas apostas ao vivo."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Wide Lines"}',
                'value_es' => '{"0":"Amplias líneas"}',
                'value_fr' => '{"0":"Lignes étendues"}',
                'value_pt' => '{"0":"Linhas amplas"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"This is one of MOSTBET’s strongest advantages. For popular matches, the number of available betting options exceeds 1,000. In football, you can bet not only on totals but also on the number of players who will receive cards, the exact time of the first goal, and more. Combined bets are also available, allowing for higher potential winnings if successful."}',
             'value_es' => '{"0":"Esta es una de las mayores fortalezas de MOSTBET. En los partidos más populares, el número de mercados disponibles supera los 1.000. En el fútbol, no solo se puede apostar a los totales, sino también a cuántos jugadores recibirán tarjetas, el minuto exacto del primer gol, y mucho más. También existen apuestas combinadas, que aumentan el posible beneficio en caso de acierto."}',
             'value_fr' => '{"0":"C’est l’un des points forts de MOSTBET. Pour les matchs les plus populaires, le nombre d’options de paris dépasse les 1 000. En football, il est possible de parier non seulement sur les totaux, mais aussi sur le nombre de joueurs qui recevront un carton, l’heure exacte du premier but, etc. Les paris combinés sont également disponibles, augmentant les gains potentiels en cas de succès."}',
             'value_pt' => '{"0":"Essa é uma das maiores vantagens da MOSTBET. Em partidas populares, o número de mercados disponíveis ultrapassa 1.000. No futebol, é possível apostar não apenas em totais, mas também no número de jogadores que receberão cartões, o minuto exato do primeiro gol, entre outros. Também estão disponíveis apostas combinadas, que aumentam os ganhos potenciais em caso de acerto."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"In basketball, MOSTBET offers bets on each quarter, individual player points, fouls, and three-pointers. For tennis events, you can place bets on the winner of a specific game, the number of break points, and more. In esports, it’s possible to bet not only on the winner of the map but also on the number of rounds, first blood, total kills, and many other options."}',
             'value_es' => '{"0":"En baloncesto, MOSTBET permite apostar por cada cuarto, puntos individuales de los jugadores, faltas y triples. En tenis, es posible apostar al ganador de un juego, número de break points, entre otros. En los esports, puedes apostar no solo al ganador del mapa, sino también al número de rondas, first blood, total de asesinatos y muchas más opciones."}',
             'value_fr' => '{"0":"En basket-ball, MOSTBET propose des paris sur chaque quart-temps, les points individuels des joueurs, les fautes, les tirs à trois points. Pour le tennis, vous pouvez parier sur le vainqueur d’un jeu, le nombre de balles de break, et plus encore. Dans l’e-sport, il est possible de parier non seulement sur le vainqueur d’une carte, mais aussi sur le nombre de manches, le first blood, les kills totaux, etc."}',
             'value_pt' => '{"0":"No basquete, a MOSTBET oferece apostas por quarto, pontos individuais de jogadores, faltas e arremessos de três pontos. No tênis, é possível apostar no vencedor de um game, número de break points, entre outros. Nos eSports, é possível apostar não apenas no vencedor do mapa, mas também no número de rounds, first blood, total de abates e muito mais."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Even the most demanding bettor will find plenty of opportunities to place diverse and strategic wagers."}',
             'value_es' => '{"0":"Incluso el apostador más exigente podrá encontrar eventos atractivos para realizar sus apuestas."}',
             'value_fr' => '{"0":"Même les parieurs les plus exigeants trouveront une large gamme d’options adaptées à leur style."}',
             'value_pt' => '{"0":"Mesmo o apostador mais exigente encontrará eventos adequados ao seu perfil para apostar."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo"}',
                'value_fr' => '{"0":"Paris en Direct"}',
                'value_pt' => '{"0":"Apostas ao Vivo"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The live section interface is user-friendly, with real-time odds updates and graphical information for each event. For most matches, infographics are available with live data such as ball possession, number of attacks, dangerous chances, and shots on target."}',
             'value_es' => '{"0":"La sección en vivo tiene una interfaz cómoda, con actualizaciones de cuotas en tiempo real e información gráfica para cada evento. En la mayoría de los partidos, se puede acceder a infografías con datos actualizados como la posesión del balón, número de ataques, ocasiones peligrosas y tiros a puerta."}',
             'value_fr' => '{"0":"L’interface de la section en direct est conviviale, avec une mise à jour instantanée des cotes et des informations graphiques pour chaque événement. Pour la plupart des matchs, une infographie est disponible avec des données en temps réel telles que la possession de balle, le nombre d’attaques, les occasions dangereuses et les tirs cadrés."}',
             'value_pt' => '{"0":"A interface da seção ao vivo é prática, com atualização instantânea das odds e gráficos informativos para cada evento. Na maioria das partidas, estão disponíveis infográficos com dados em tempo real, como posse de bola, número de ataques, chances perigosas e finalizações no alvo."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"During a game, you can use partial or full cash out, allowing you to lock in profits or reduce risks before the event ends."}',
             'value_es' => '{"0":"Durante el juego, se puede utilizar el cash out parcial o total, lo que permite asegurar ganancias o reducir riesgos antes de que finalice el evento."}',
             'value_fr' => '{"0":"Pendant le match, il est possible d’utiliser le cash out partiel ou total, ce qui permet de sécuriser un gain ou de limiter les pertes avant la fin de l’événement."}',
             'value_pt' => '{"0":"Durante o jogo, é possível utilizar o cash out parcial ou total, permitindo garantir lucros ou minimizar riscos antes do fim do evento."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The number of live betting options sometimes even exceeds pre-match markets, especially for high-profile events. For example, during a Champions League football match, up to 500 live markets may be available."}',
             'value_es' => '{"0":"El número de mercados disponibles en vivo a veces incluso supera los del prematch, especialmente en eventos populares. Por ejemplo, en un partido de la Liga de Campeones, puede haber hasta 500 mercados activos en tiempo real."}',
             'value_fr' => '{"0":"Le nombre d’options de paris en direct dépasse parfois celui du pré-match, notamment lors des grandes affiches. Par exemple, lors d’un match de Ligue des champions, jusqu’à 500 événements en direct peuvent être disponibles."}',
             'value_pt' => '{"0":"A quantidade de mercados ao vivo às vezes até supera os do pré-jogo, especialmente em eventos populares. Por exemplo, em uma partida da Liga dos Campeões, podem estar disponíveis até 500 mercados ao vivo."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming"}',
                'value_es' => '{"0":"Transmisión en Vivo"}',
                'value_fr' => '{"0":"Diffusion en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Unfortunately, live video streams on MOSTBET are currently available only to a limited extent. In most cases, users are offered a graphical visualization with infographics showing ball position, dangerous moments, and more."}',
             'value_es' => '{"0":"Lamentablemente, las transmisiones en vivo por video en MOSTBET están actualmente disponibles de forma limitada. En la mayoría de los casos, se ofrece a los usuarios una visualización gráfica con infografías que muestran la posición del balón, jugadas peligrosas y más."}',
             'value_fr' => '{"0":"Malheureusement, les retransmissions vidéo en direct sur MOSTBET sont actuellement disponibles de manière limitée. Dans la plupart des cas, les utilisateurs ont accès à une visualisation graphique avec des infographies montrant la position du ballon, les actions dangereuses, etc."}',
             'value_pt' => '{"0":"Infelizmente, as transmissões de vídeo ao vivo na MOSTBET estão atualmente disponíveis de forma limitada. Na maioria dos casos, os usuários têm acesso a uma visualização gráfica com infográficos que mostram a posição da bola, momentos perigosos, entre outros."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Access to live video is limited to certain regions and a small number of events, usually provided through partner broadcasts. However, the live match graphics allow users to follow the game\'s progress — it\'s possible to see which team is attacking, how many chances have been created, and the key moments of the match."}',
             'value_es' => '{"0":"El acceso al video en directo está restringido a determinadas regiones y a un número reducido de eventos, generalmente mediante transmisiones asociadas. Aun así, los gráficos en vivo permiten seguir el desarrollo del partido, ver qué equipo ataca, cuántas ocasiones se han generado y cuáles han sido las acciones clave."}',
             'value_fr' => '{"0":"L’accès aux vidéos en direct est réservé à certaines régions et à un nombre limité d’événements, généralement via des diffusions partenaires. Cependant, les animations graphiques en direct permettent de suivre le déroulement du match — on peut voir quelle équipe attaque, combien d’occasions ont été créées, et les moments clés du match."}',
             'value_pt' => '{"0":"O acesso ao vídeo ao vivo está disponível apenas em determinadas regiões e para um número limitado de eventos, geralmente por meio de transmissões parceiras. Ainda assim, os gráficos ao vivo permitem acompanhar o andamento do jogo — é possível ver qual time está atacando, quantas chances foram criadas e quais foram os momentos-chave."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Games"}',
                'value_es' => '{"0":"Juegos"}',
                'value_fr' => '{"0":"Jeux"}',
                'value_pt' => '{"0":"Jogos"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 27
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET offers an online casino featuring thousands of games from leading providers such as NetEnt, Microgaming, Pragmatic Play, and Evolution Gaming. The live casino section includes roulette, poker, blackjack, baccarat, and wheel of fortune games. All games are available with live dealers in HD quality. Slot games are also available."}',
             'value_es' => '{"0":"MOSTBET ofrece un casino en línea con miles de juegos de los principales proveedores como NetEnt, Microgaming, Pragmatic Play y Evolution Gaming. La sección de casino en vivo incluye ruleta, póker, blackjack, bacará y ruedas de la fortuna. Todos los juegos están disponibles con crupieres en vivo y en calidad HD. También se puede jugar en máquinas tragamonedas."}',
             'value_fr' => '{"0":"MOSTBET propose un casino en ligne avec des milliers de jeux fournis par les leaders du secteur comme NetEnt, Microgaming, Pragmatic Play et Evolution Gaming. La section casino en direct inclut la roulette, le poker, le blackjack, le baccarat et les roues de la fortune. Les jeux sont disponibles avec des croupiers en direct en qualité HD. Des machines à sous sont également accessibles."}',
             'value_pt' => '{"0":"A MOSTBET oferece um cassino online com milhares de jogos dos principais provedores como NetEnt, Microgaming, Pragmatic Play e Evolution Gaming. A seção de cassino ao vivo inclui roleta, pôquer, blackjack, bacará e rodas da fortuna. Todos os jogos estão disponíveis com crupiês ao vivo em qualidade HD. Também há caça-níqueis disponíveis."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 28
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"There is also a separate section for fast games like Aviator, Mines, Dice, and JetX, which have become extremely popular among younger audiences in recent years."}',
             'value_es' => '{"0":"Además, hay una sección dedicada a los juegos rápidos como Aviator, Mines, Dice y JetX, que en los últimos años se han vuelto muy populares entre el público joven."}',
             'value_fr' => '{"0":"Il existe aussi une section dédiée aux jeux rapides tels que Aviator, Mines, Dice et JetX, qui sont devenus extrêmement populaires auprès des jeunes ces dernières années."}',
             'value_pt' => '{"0":"Além disso, há uma seção separada para jogos rápidos como Aviator, Mines, Dice e JetX, que se tornaram extremamente populares entre os jovens nos últimos anos."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 29
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Security"}',
                'value_es' => '{"0":"Seguridad"}',
                'value_fr' => '{"0":"Sécurité"}',
                'value_pt' => '{"0":"Segurança"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 30
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Security at MOSTBET is based on standard tools: SSL encryption, two-factor authentication via email or SMS, and IP restrictions."}',
             'value_es' => '{"0":"La seguridad en MOSTBET se basa en herramientas estándar: cifrado SSL, autenticación de dos factores por correo electrónico o SMS, y restricciones por IP."}',
             'value_fr' => '{"0":"La sécurité chez MOSTBET repose sur des outils standards : chiffrement SSL, authentification à deux facteurs par e-mail ou SMS, et restrictions IP."}',
             'value_pt' => '{"0":"A segurança na MOSTBET baseia-se em ferramentas padrão: criptografia SSL, autenticação de dois fatores via e-mail ou SMS e restrições de IP."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 31
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To prevent fraud, mandatory KYC verification is applied: users must confirm their identity by submitting documents such as a passport or ID card. This process can sometimes take 48–72 hours, but in most cases, it is completed quickly."}',
             'value_es' => '{"0":"Para prevenir fraudes, se aplica una verificación KYC obligatoria: el usuario debe confirmar su identidad enviando documentos como pasaporte o tarjeta de identificación. Este proceso puede tardar entre 48 y 72 horas, aunque en la mayoría de los casos se completa rápidamente."}',
             'value_fr' => '{"0":"Pour prévenir la fraude, une vérification KYC obligatoire est exigée : l’utilisateur doit confirmer son identité en envoyant des documents, tels qu’un passeport ou une carte d’identité. Cette procédure peut prendre 48 à 72 heures, mais elle est généralement traitée rapidement."}',
             'value_pt' => '{"0":"Para prevenir fraudes, é aplicada uma verificação KYC obrigatória: o usuário deve confirmar sua identidade enviando documentos como passaporte ou carteira de identidade. Esse processo pode levar de 48 a 72 horas, mas na maioria dos casos é concluído rapidamente."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 32
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Deposit and Withdrawal"}',
                'value_es' => '{"0":"Depósito y Retiro"}',
                'value_fr' => '{"0":"Dépôt et Retrait"}',
                'value_pt' => '{"0":"Depósito e Retirada"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 33
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET supports dozens of methods for financial transactions. Among the most popular are bank cards (Visa, Mastercard), cryptocurrencies (Bitcoin, Litecoin, USDT), local payment services (QIWI, Piastrix, AstroPay), and e-wallets such as ecoPayz."}',
             'value_es' => '{"0":"MOSTBET admite docenas de métodos para realizar transacciones financieras. Entre los más populares se encuentran tarjetas bancarias (Visa, Mastercard), criptomonedas (Bitcoin, Litecoin, USDT), servicios de pago locales (QIWI, Piastrix, AstroPay) y monederos electrónicos como ecoPayz."}',
             'value_fr' => '{"0":"MOSTBET prend en charge des dizaines de méthodes pour les transactions financières. Les plus populaires incluent les cartes bancaires (Visa, Mastercard), les cryptomonnaies (Bitcoin, Litecoin, USDT), les services de paiement locaux (QIWI, Piastrix, AstroPay), ainsi que les portefeuilles électroniques comme ecoPayz."}',
             'value_pt' => '{"0":"A MOSTBET oferece dezenas de métodos para transações financeiras. Entre os mais populares estão cartões bancários (Visa, Mastercard), criptomoedas (Bitcoin, Litecoin, USDT), serviços de pagamento locais (QIWI, Piastrix, AstroPay) e carteiras eletrônicas como ecoPayz."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 34
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit amount is 1 USD or equivalent. Withdrawals start from 5 USD, and on average, processing takes from 15 minutes to 24 hours. Delays are rare, but for large sums, the platform may request additional verification, which can increase waiting times."}',
             'value_es' => '{"0":"El depósito mínimo es de 1 USD o su equivalente. Los retiros están disponibles a partir de 5 USD, y en promedio el proceso tarda entre 15 minutos y 24 horas. Las demoras son poco frecuentes, aunque en el caso de montos elevados la plataforma puede solicitar verificación adicional, lo que aumenta el tiempo de espera."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 1 USD ou l’équivalent. Les retraits sont possibles à partir de 5 USD, et le traitement prend généralement entre 15 minutes et 24 heures. Les retards sont rares, mais pour les montants importants, une vérification supplémentaire peut être demandée, ce qui allonge le délai."}',
             'value_pt' => '{"0":"O valor mínimo de depósito é de 1 USD ou equivalente. Saques a partir de 5 USD estão disponíveis, com tempo médio de processamento entre 15 minutos e 24 horas. Atrasos são raros, mas para quantias elevadas, a plataforma pode solicitar verificação adicional, o que pode aumentar o tempo de espera."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 35
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"A major advantage of MOSTBET is the absence of fees from the bookmaker\'s side. All transactions are carried out through encrypted channels, ensuring a high level of security."}',
             'value_es' => '{"0":"Una ventaja de MOSTBET es que no cobra comisión por parte del operador. Todas las transacciones se realizan a través de canales encriptados, lo que garantiza un alto nivel de seguridad."}',
             'value_fr' => '{"0":"L’un des avantages de MOSTBET est l’absence de frais de la part du bookmaker. Toutes les transactions sont effectuées via des canaux cryptés, garantissant un haut niveau de sécurité."}',
             'value_pt' => '{"0":"Uma vantagem da MOSTBET é que não há cobrança de taxas por parte da casa de apostas. Todas as transações são realizadas por canais criptografados, garantindo um alto nível de segurança."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 36
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 37
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Customer Support"}',
                'value_es' => '{"0":"Atención al Cliente"}',
                'value_fr' => '{"0":"Service Client"}',
                'value_pt' => '{"0":"Suporte ao Cliente"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 38
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Customer support at MOSTBET is available 24/7 via live chat, email, Telegram, and other messengers. The live chat is very fast, with responses typically provided within 30–60 seconds, while email replies are usually delivered within 1–3 hours."}',
             'value_es' => '{"0":"La atención al cliente en MOSTBET está disponible las 24 horas del día a través de chat en vivo, correo electrónico, Telegram y otros mensajeros. El chat responde muy rápido, con tiempos de espera de entre 30 y 60 segundos, y las respuestas por correo electrónico suelen llegar en un plazo de 1 a 3 horas."}',
             'value_fr' => '{"0":"Le support client chez MOSTBET est disponible 24h/24 via le chat en direct, l’e-mail, Telegram et d’autres messageries. Le chat est très réactif, avec des réponses fournies en 30 à 60 secondes, tandis que les réponses par e-mail arrivent généralement sous 1 à 3 heures."}',
             'value_pt' => '{"0":"O suporte ao cliente da MOSTBET está disponível 24 horas por dia via chat ao vivo, e-mail, Telegram e outros mensageiros. O chat é muito rápido, com respostas geralmente em 30 a 60 segundos, enquanto as respostas por e-mail costumam chegar dentro de 1 a 3 horas."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 39
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 40
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Huge selection of sports events",
                                 "1":"Fast deposits and withdrawals",
                                 "2":"Cryptocurrency support",
                                 "3":"Convenient mobile app for Android and iOS",
                                 "4":"24/7 support via chat and messengers"},
                             "1":
                                {"0":"Limited live video streams",
                                 "1":"Not all popular e-wallets are available (Skrill, Neteller)"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de eventos deportivos",
                                 "1":"Depósitos y retiros rápidos",
                                 "2":"Soporte para criptomonedas",
                                 "3":"Aplicación móvil conveniente para Android e iOS",
                                 "4":"Soporte 24/7 en chat y mensajería"},
                             "1":
                                {"0":"Transmisiones en vivo limitadas",
                                 "1":"No todos los monederos electrónicos populares están disponibles (Skrill, Neteller)"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d’événements sportifs",
                                 "1":"Dépôts et retraits rapides",
                                 "2":"Support des cryptomonnaies",
                                 "3":"Application mobile pratique pour Android et iOS",
                                 "4":"Support 24h/24 via chat et messageries"},
                             "1":
                                {"0":"Diffusions vidéo en direct limitées",
                                 "1":"Tous les portefeuilles électroniques populaires ne sont pas disponibles (Skrill, Neteller)"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de eventos esportivos",
                                 "1":"Depósitos e saques rápidos",
                                 "2":"Suporte a criptomoedas",
                                 "3":"Aplicativo móvel conveniente para Android e iOS",
                                 "4":"Suporte 24/7 via chat e mensageiros"},
                             "1":
                                {"0":"Transmissões de vídeo ao vivo limitadas",
                                 "1":"Nem todas as carteiras eletrônicas populares estão disponíveis (Skrill, Neteller)"}
                             }',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 41
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"MOSTBET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MOSTBET"}',
                'value_fr' => '{"0":"FAQ de MOSTBET"}',
                'value_pt' => '{"0":"Perguntas frequentes do MOSTBET"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 42
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"How long does withdrawal take?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro?"}',
             'value_fr' => '{"0":"Combien de temps prend un retrait ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para sacar?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 43
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"From 15 minutes up to 1–3 days, depending on the payment method and amount."}',
             'value_es' => '{"0":"De 15 minutos hasta 1–3 días, dependiendo del método de pago y la cantidad."}',
             'value_fr' => '{"0":"De 15 minutes à 1–3 jours, selon le mode de paiement et le montant."}',
             'value_pt' => '{"0":"De 15 minutos até 1–3 dias, dependendo do método de pagamento e do valor."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 44
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 45
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Yes, available for Android and iOS."}',
             'value_es' => '{"0":"Sí, disponible para Android e iOS."}',
             'value_fr' => '{"0":"Oui, disponible pour Android et iOS."}',
             'value_pt' => '{"0":"Sim, disponível para Android e iOS."}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 46
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"Is it safe to play?"}',
             'value_es' => '{"0":"¿Es seguro jugar?"}',
             'value_fr' => '{"0":"Est-il sûr de jouer ?"}',
             'value_pt' => '{"0":"É seguro jogar?"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 47
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Yes, SSL, encryption, and verification are used."}',
             'value_es' => '{"0":"Sí, se utilizan SSL, cifrado y verificación."}',
             'value_fr' => '{"0":"Oui, SSL, cryptage et vérification sont utilisés."}',
             'value_pt' => '{"0":"Sim, são usados SSL, criptografia e verificação."}',
             'order' => 47
            ]
        );
    }
}
