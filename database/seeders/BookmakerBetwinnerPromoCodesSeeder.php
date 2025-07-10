<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Regular Promotions and Bonuses"}',
                'value_es' => '{"0":"Promociones y Bonos Regulares"}',
                'value_fr' => '{"0":"Promotions et Bonus Réguliers"}',
                'value_pt' => '{"0":"Promoções e Bônus Regulares"}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner has long gained recognition among players thanks to its flexibility, wide range of sporting events, extensive selection of casino games, and a large number of diverse bonuses and promotions."}',
             'value_es' => '{"0":"BetWinner ha ganado reconocimiento entre los jugadores desde hace tiempo gracias a su flexibilidad, la variedad de eventos deportivos, su amplia selección de juegos de azar y la gran cantidad de bonificaciones y promociones disponibles."}',
             'value_fr' => '{"0":"BetWinner a depuis longtemps gagné la reconnaissance des joueurs grâce à sa flexibilité, la diversité des événements sportifs, son large choix de jeux de casino, ainsi que le grand nombre de bonus et promotions variés."}',
             'value_pt' => '{"0":"A BetWinner há muito tempo conquistou o reconhecimento dos jogadores graças à sua flexibilidade, à variedade de eventos esportivos, à ampla seleção de jogos de azar e à grande quantidade de bônus e promoções disponíveis."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Promo codes play a special role, as they allow you to increase your deposit without any extra cost. That’s why in this review, we’ll take a close look at how to correctly activate our exclusive promo code :promocode, what promotions are available for regular players, and whether you can expect a no-deposit gift."}',
             'value_es' => '{"0":"Los códigos promocionales juegan un papel especial, ya que te permiten aumentar tu depósito sin costes adicionales. Por eso, en esta reseña analizaremos en detalle cómo activar correctamente nuestro código promocional exclusivo :promocode, qué promociones están disponibles para los jugadores habituales y si es posible recibir un regalo sin depósito."}',
             'value_fr' => '{"0":"Les codes promo jouent un rôle particulier, car ils permettent d’augmenter votre dépôt sans frais supplémentaires. C’est pourquoi, dans cet article, nous examinerons en détail comment activer correctement notre code promo exclusif :promocode, quelles offres attendent les joueurs réguliers et s’il est possible de recevoir un bonus sans dépôt."}',
             'value_pt' => '{"0":"Os códigos promocionais desempenham um papel especial, pois permitem aumentar o seu depósito sem custos adicionais. Por isso, neste artigo, vamos analisar em detalhe como ativar corretamente o nosso código promocional exclusivo :promocode, quais promoções estão disponíveis para jogadores regulares e se é possível receber um bónus sem depósito."}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Instant Registration"}',
                'value_es' => '{"0":"Registro Instantáneo"}',
                'value_fr' => '{"0":"Inscription Instantanée"}',
                'value_pt' => '{"0":"Registro Instantâneo"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Registration on BetWinner doesn’t take much time. You don’t need to fill out dozens of fields or go through multi-step verification before you start playing. It’s enough to choose one of the available methods — you can register by phone number, email, or in just one click. During the registration process, you have the opportunity to enter our promo code :promocode in the designated field to receive an increased welcome bonus from BetWinner."}',
             'value_es' => '{"0":"Registrarse en BetWinner no lleva mucho tiempo. No es necesario completar decenas de campos ni pasar por una verificación en varios pasos antes de comenzar a jugar. Solo tienes que elegir uno de los métodos disponibles: puedes registrarte por número de teléfono, correo electrónico o con un solo clic. Durante el proceso de registro, tendrás la oportunidad de ingresar nuestro código promocional :promocode en el campo correspondiente para recibir un bono de bienvenida mejorado de BetWinner."}',
             'value_fr' => '{"0":"L\'inscription sur BetWinner ne prend pas beaucoup de temps. Il n’est pas nécessaire de remplir des dizaines de champs ni de passer par une vérification complexe avant de commencer à jouer. Il suffit de choisir l’une des méthodes proposées — vous pouvez vous inscrire par numéro de téléphone, par e-mail ou en un seul clic. Lors de l’inscription, vous avez la possibilité de saisir notre code promo :promocode dans le champ prévu à cet effet afin de recevoir un bonus de bienvenue augmenté de la part de BetWinner."}',
             'value_pt' => '{"0":"O registo na BetWinner não demora muito. Não é necessário preencher dezenas de campos ou passar por um processo de verificação em vários passos antes de começar a jogar. Basta escolher um dos métodos disponíveis — pode registar-se por número de telefone, e-mail ou com apenas um clique. Durante o registo, terá a oportunidade de inserir o nosso código promocional :promocode no campo indicado para receber um bónus de boas-vindas aumentado da BetWinner."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"For example, the standard offer includes a 100% bonus on your first deposit, from €1 to €100. But if you use our promo code :promocode, the bonus amount can increase up to €130."}',
             'value_es' => '{"0":"Por ejemplo, la oferta estándar incluye un bono del 100% sobre tu primer depósito, desde 1 hasta 100 euros. Pero si utilizas nuestro código promocional :promocode, el bono puede aumentar hasta 130 euros."}',
             'value_fr' => '{"0":"Par exemple, l’offre standard prévoit un bonus de 100 % sur le premier dépôt, allant de 1 à 100 euros. Mais en utilisant notre code promo :promocode, le montant du bonus peut atteindre jusqu’à 130 euros."}',
             'value_pt' => '{"0":"Por exemplo, a oferta padrão inclui um bónus de 100% no primeiro depósito, entre 1 e 100 euros. Mas se utilizar o nosso código promocional :promocode, o valor do bónus pode aumentar até 130 euros."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Once your account is created and the deposit is made, the bonus funds will be credited automatically. You can choose how to use your bonus — either in the casino or for sports betting."}',
             'value_es' => '{"0":"Una vez creado el perfil y realizado el depósito, los fondos del bono se acreditarán automáticamente. Puedes decidir si deseas utilizar tu bono en el casino o en las apuestas deportivas."}',
             'value_fr' => '{"0":"Une fois votre compte créé et le dépôt effectué, les fonds du bonus seront crédités automatiquement. Vous pouvez choisir d’utiliser votre bonus dans le casino ou pour les paris sportifs."}',
             'value_pt' => '{"0":"Assim que a conta for criada e o depósito realizado, os fundos do bónus serão creditados automaticamente. Pode escolher se deseja usar o bónus no casino ou em apostas desportivas."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at BetWinner?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en BetWinner?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur BetWinner ?"}',
                'value_pt' => '{"0":"E se você já for registrado na BetWinner?"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"While most betting platforms offer promo codes only for new customers, BetWinner also provides bonuses on subsequent deposits. There are also cashback programs available, and even the chance to receive personalized rewards."}',
             'value_es' => '{"0":"Aunque la mayoría de las plataformas de apuestas ofrecen códigos promocionales solo para nuevos clientes, BetWinner también otorga bonificaciones en depósitos posteriores. Además, existen programas de reembolso y la posibilidad de recibir regalos personalizados."}',
             'value_fr' => '{"0":"Alors que la plupart des plateformes de paris proposent un code promo uniquement pour les nouveaux clients, BetWinner offre également des bonus sur les dépôts suivants. Il est aussi possible de participer à des programmes de cashback et même de recevoir des récompenses personnalisées."}',
             'value_pt' => '{"0":"Embora a maioria das plataformas de apostas ofereça códigos promocionais apenas para novos clientes, a BetWinner também concede bónus em depósitos subsequentes. Existem ainda programas de cashback e a possibilidade de receber ofertas personalizadas."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Many of these offers are seasonal and are updated on a monthly basis. For example, on Fridays you can get a 100% bonus on your next deposit, and throughout the week there are opportunities to recover part of your lost funds."}',
             'value_es' => '{"0":"Muchas de estas ofertas son de carácter estacional y se actualizan mensualmente. Por ejemplo, los viernes puedes obtener un bono del 100% en tu siguiente depósito, y durante la semana puedes recuperar parte del dinero perdido."}',
             'value_fr' => '{"0":"Bon nombre de ces offres sont saisonnières et sont renouvelées chaque mois. Par exemple, le vendredi, vous pouvez recevoir un bonus de 100 % sur un nouveau dépôt, et durant la semaine, vous avez la possibilité de récupérer une partie de vos pertes."}',
             'value_pt' => '{"0":"Muitas destas promoções têm caráter sazonal e são atualizadas mensalmente. Por exemplo, às sextas-feiras é possível receber um bónus de 100% no próximo depósito, e ao longo da semana é possível recuperar parte das perdas."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, once a certain level of activity is reached, customers gain access to personalized promotions, free bets, and boosted odds on selected events. This gives regular players a real opportunity to significantly increase their winnings."}',
             'value_es' => '{"0":"Además, al alcanzar cierto nivel de actividad, los usuarios obtienen acceso a promociones personalizadas, apuestas gratuitas y cuotas mejoradas en eventos seleccionados. Esto permite a los jugadores habituales aumentar significativamente sus ganancias."}',
             'value_fr' => '{"0":"En atteignant un certain niveau d’activité, les clients ont également accès à des promotions personnalisées, à des paris gratuits et à des cotes boostées sur des événements sélectionnés. Cela permet aux joueurs réguliers d’augmenter considérablement leurs gains."}',
             'value_pt' => '{"0":"Além disso, ao atingir um certo nível de atividade, os clientes ganham acesso a promoções personalizadas, apostas grátis e odds aumentadas em eventos selecionados. Isso permite aos jogadores regulares aumentar significativamente os seus ganhos."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The question of no-deposit bonuses is one that interests many players. In the case of BetWinner, such offers do appear, but they are not available on a permanent basis. That’s why it’s worth keeping an eye on our updates so you don’t miss a valuable opportunity."}',
             'value_es' => '{"0":"La cuestión de los bonos sin depósito interesa a muchos jugadores. En el caso de BetWinner, este tipo de ofertas aparecen, pero no están disponibles de forma permanente. Por eso, conviene seguir las actualizaciones de nuestra reseña para no perder ninguna oportunidad interesante."}',
             'value_fr' => '{"0":"La question des bonus sans dépôt intéresse de nombreux joueurs. Chez BetWinner, de telles offres existent, mais elles ne sont pas permanentes. Il est donc recommandé de suivre les mises à jour de notre revue pour ne pas manquer une offre avantageuse."}',
             'value_pt' => '{"0":"A questão dos bónus sem depósito interessa a muitos jogadores. No caso da BetWinner, estas ofertas aparecem ocasionalmente, mas não estão disponíveis de forma contínua. Por isso, é importante acompanhar as atualizações da nossa análise para não perder nenhuma oportunidade vantajosa."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"There are also occasional promotions that do not require a deposit but may involve fulfilling certain conditions. These might include participating in prediction contests or activating a special promo code received via email. It\'s important to note that such bonuses are often tied to specific slots or events and have a limited validity period."}',
             'value_es' => '{"0":"También existen promociones ocasionales que no requieren un depósito, pero sí el cumplimiento de ciertas condiciones. Estas pueden incluir la participación en concursos de pronósticos o la activación de un código promocional especial recibido por correo electrónico. Cabe destacar que estos bonos suelen estar vinculados a tragamonedas o eventos específicos y tienen un periodo de validez limitado."}',
             'value_fr' => '{"0":"Il existe également des promotions ponctuelles qui ne nécessitent pas de dépôt, mais qui demandent de remplir certaines conditions. Cela peut inclure la participation à des concours de pronostics ou l’activation d’un code promo spécial reçu par email. Il convient de noter que ces bonus sont souvent liés à des machines à sous ou à des événements spécifiques, et qu’ils ont une durée de validité limitée."}',
             'value_pt' => '{"0":"Também existem promoções pontuais que não exigem depósito, mas requerem o cumprimento de certas condições. Por exemplo, participar em concursos de previsões ou ativar um código promocional especial recebido por e-mail. Vale destacar que esses bónus estão frequentemente associados a slots ou eventos específicos e têm um prazo de validade limitado."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Betwinner Casino Welcome Offer"}',
                'value_es' => '{"0":"Oferta de bienvenida del casino Betwinner"}',
                'value_fr' => '{"0":"Offre de bienvenue du casino Betwinner"}',
                'value_pt' => '{"0":"Oferta de boas-vindas do cassino Betwinner"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In addition to the classic welcome bonus for sports betting, BetWinner also offers a welcome package for players who prefer online casino games. This is one of the most generous offers on the market, as it includes bonuses not just on the first, but on four consecutive deposits. The total reward can reach up to €1500, and as an extra gift, users receive 150 free spins on popular slots."}',
             'value_es' => '{"0":"Además del clásico bono de bienvenida para apuestas deportivas, BetWinner también ofrece un bono de bienvenida para los jugadores que prefieren los juegos de casino online. Se trata de una de las ofertas más generosas del mercado, ya que incluye bonificaciones no solo en el primer depósito, sino en los cuatro primeros depósitos consecutivos. La recompensa total puede alcanzar los 1500 euros, y como regalo adicional, el usuario recibe 150 giros gratis en tragamonedas populares."}',
             'value_fr' => '{"0":"En plus du bonus de bienvenue classique pour les paris sportifs, BetWinner propose également une offre de bienvenue destinée aux joueurs qui préfèrent les jeux de casino en ligne. Il s’agit de l’une des offres les plus généreuses du marché, car elle couvre non seulement le premier, mais aussi les quatre premiers dépôts consécutifs. Le montant total de la récompense peut atteindre 1500 €, et en cadeau supplémentaire, l’utilisateur reçoit 150 tours gratuits sur des machines à sous populaires."}',
             'value_pt' => '{"0":"Além do clássico bónus de boas-vindas para apostas desportivas, a BetWinner também oferece um bónus de boas-vindas para os jogadores que preferem jogos de casino online. Esta é uma das ofertas mais generosas do mercado, pois inclui bónus não apenas no primeiro, mas nos quatro primeiros depósitos consecutivos. O valor total da recompensa pode chegar até 1500 euros, e como presente adicional, o utilizador recebe 150 rodadas grátis em slots populares."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The bonuses are credited gradually, corresponding to each new deposit. The bonus amount varies — you get 100% on your first deposit, while the third and fourth deposits come with a 25% bonus."}',
             'value_es' => '{"0":"Los bonos se acreditan de forma progresiva, según cada nuevo depósito realizado. El importe del bono varía: en el primer depósito se recibe un 100%, mientras que en el tercero y cuarto se obtiene un 25%."}',
             'value_fr' => '{"0":"Les bonus sont crédités progressivement, à chaque nouveau dépôt. Le pourcentage du bonus varie — vous recevez 100 % sur le premier dépôt, et 25 % sur les troisième et quatrième dépôts."}',
             'value_pt' => '{"0":"Os bónus são creditados de forma progressiva, de acordo com cada novo depósito realizado. O valor do bónus varia — recebe 100% no primeiro depósito, enquanto no terceiro e quarto depósitos recebe 25%."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"It’s important to note that to withdraw winnings from the bonus funds, wagering requirements must be met. Nevertheless, this offer is a perfect starting point for those who are new to BetWinner."}',
             'value_es' => '{"0":"Cabe destacar que para retirar las ganancias obtenidas con los fondos del bono es necesario cumplir con los requisitos de apuesta. Aun así, esta promoción representa un excelente punto de partida para quienes aún no conocen BetWinner."}',
             'value_fr' => '{"0":"Il convient de noter que pour pouvoir retirer les gains obtenus avec les fonds du bonus, les conditions de mise doivent être respectées. Malgré cela, cette offre constitue une excellente introduction pour les nouveaux joueurs sur BetWinner."}',
             'value_pt' => '{"0":"É importante notar que para levantar os ganhos obtidos com os fundos do bónus é necessário cumprir os requisitos de apostas. Ainda assim, esta oferta é uma excelente forma de começar para quem ainda não conhece a BetWinner."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Big Match"}',
                'value_es' => '{"0":"El Gran Partido"}',
                'value_fr' => '{"0":"Grand match"}',
                'value_pt' => '{"0":"Grande Jogo"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner has developed a special promotion that will appeal to players who enjoy betting on the key football matches of the week."}',
             'value_es' => '{"0":"BetWinner ha creado una promoción especial pensada para los jugadores que disfrutan apostando en los partidos de fútbol más importantes de la semana."}',
             'value_fr' => '{"0":"BetWinner a mis en place une promotion spéciale destinée aux joueurs qui aiment parier sur les grands matchs de football de la semaine."}',
             'value_pt' => '{"0":"A BetWinner criou uma promoção especial voltada para os jogadores que gostam de apostar nos principais jogos de futebol da semana."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 23
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The idea is that BetWinner selects one of the main matches — it could be a Champions League game, a national cup final, or a Europa League match — and creates unique bonus conditions around it. You’re invited to place a bet at specific odds, and if the bet wins, you can receive free bets or an enhanced payout. Even if your bet doesn’t win, you may still receive a small bonus."}',
             'value_es' => '{"0":"La promoción consiste en que BetWinner selecciona uno de los encuentros destacados — puede ser un partido de la Liga de Campeones, una final de copa nacional o un encuentro de la Europa League — y ofrece condiciones de bonificación exclusivas para ese evento. Se te invita a realizar una apuesta con una cuota específica y, si aciertas, puedes ganar apuestas gratuitas o un pago mejorado. Incluso si tu apuesta no resulta ganadora, es posible que recibas un pequeño bono."}',
             'value_fr' => '{"0":"Le principe est simple : BetWinner sélectionne l’une des rencontres majeures — cela peut être un match de Ligue des Champions, une finale de coupe nationale ou un match de Ligue Europa — et propose des conditions de bonus uniques autour de cet événement. Vous êtes invité à placer un pari avec une cote définie et, en cas de succès, vous pouvez recevoir des paris gratuits ou des gains augmentés. Même si votre pari n’est pas gagnant, vous pourrez tout de même obtenir un petit bonus."}',
             'value_pt' => '{"0":"A campanha funciona da seguinte forma: a BetWinner seleciona uma das partidas mais importantes — pode ser um jogo da Liga dos Campeões, uma final de taça nacional ou uma partida da Liga Europa — e oferece condições de bónus únicas para esse evento. Será convidado a fazer uma aposta com uma odd específica e, se vencer, poderá receber apostas grátis ou um pagamento aumentado. Mesmo que a aposta não seja vencedora, ainda assim poderá receber um pequeno bónus."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 24
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"This offer not only makes watching the match more exciting, but also adds extra enjoyment to betting — even when the final result isn’t in your favor."}',
             'value_es' => '{"0":"Esta oferta no solo hace que ver el partido sea más emocionante, sino que también añade diversión a las apuestas, incluso si el resultado final no es el esperado."}',
             'value_fr' => '{"0":"Cette offre rend non seulement le visionnage du match plus palpitant, mais elle apporte aussi plus de plaisir aux paris, même si le résultat final n’est pas favorable."}',
             'value_pt' => '{"0":"Esta promoção não só torna o jogo mais emocionante de assistir, como também acrescenta mais prazer à experiência de apostar — mesmo que o resultado final não seja o desejado."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 25
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-3.webp"}',
             'value_es' => '{"0":"img-3.webp"}',
             'value_fr' => '{"0":"img-3.webp"}',
             'value_pt' => '{"0":"img-3.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 26
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Nil-Nil Draw"}',
                'value_es' => '{"0":"Empate a cero"}',
                'value_fr' => '{"0":"Match nul 0-0"}',
                'value_pt' => '{"0":"Empate a zero"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 27
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Sometimes, football matches you have high hopes for end without a single goal. For such cases, BetWinner offers the «Nil-Nil Draw» promotion. If you placed a bet on the exact score or the match result and the game ends 0:0, you’ll receive compensation for your stake."}',
             'value_es' => '{"0":"A veces, los partidos de fútbol en los que depositas grandes esperanzas terminan sin un solo gol. Para estas situaciones, BetWinner ofrece la promoción «Empate a cero». Si hiciste una apuesta al marcador exacto o al resultado del partido, y el encuentro finaliza 0:0, recibirás una compensación por tu apuesta."}',
             'value_fr' => '{"0":"Parfois, les matchs de football sur lesquels on fonde de grands espoirs se terminent sans le moindre but. Pour ces cas-là, BetWinner propose la promotion «Match nul 0-0». Si vous avez parié sur le score exact ou le résultat du match, et que la rencontre se termine sur un score de 0:0, vous recevrez un remboursement de votre mise."}',
             'value_pt' => '{"0":"Às vezes, os jogos de futebol em que depositamos grandes expectativas terminam sem um único golo. Para essas situações, a BetWinner oferece a promoção «Empate a zero». Se fizer uma aposta no resultado exato ou no vencedor da partida e o jogo terminar 0:0, receberá uma compensação pela sua aposta."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 28
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The refund is usually issued in the form of a free bet equivalent to the original stake. However, it’s important to carefully read the terms, as the promotion only applies to selected matches. You can find the full list of eligible games on the BetWinner website in the promotion rules section."}',
             'value_es' => '{"0":"El reembolso suele hacerse en forma de apuesta gratuita equivalente al importe apostado. No obstante, es importante leer detenidamente los términos y condiciones, ya que la promoción solo se aplica a partidos seleccionados. La lista completa de eventos válidos está disponible en el sitio web de BetWinner, en la sección de reglas de la promoción."}',
             'value_fr' => '{"0":"Le remboursement est généralement accordé sous forme de pari gratuit équivalent au montant de la mise. Il est toutefois essentiel de bien lire les conditions, car cette promotion ne s’applique qu’à certains matchs prédéfinis. Vous pouvez consulter la liste complète des matchs concernés sur le site de BetWinner, dans la section dédiée aux règles de la promotion."}',
             'value_pt' => '{"0":"O reembolso é normalmente concedido sob a forma de uma aposta grátis no valor equivalente à aposta original. No entanto, é importante ler atentamente os termos, pois a promoção só se aplica a jogos específicos. A lista completa pode ser consultada no site da BetWinner, na secção das regras da promoção."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 29
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-4.webp"}',
             'value_es' => '{"0":"img-4.webp"}',
             'value_fr' => '{"0":"img-4.webp"}',
             'value_pt' => '{"0":"img-4.webp"}',
             'order' => 29
            ]
        );
    }
}
