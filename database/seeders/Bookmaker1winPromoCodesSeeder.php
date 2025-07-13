<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
                'order' => 1
            ],
            ['key' => '1win',
                'bookmaker_id' => 4,
                'component' => 'h2',
                'value_en' => '{"0":"Regular Promotions and Bonuses"}',
                'value_es' => '{"0":"Promociones y Bonos Regulares"}',
                'value_fr' => '{"0":"Promotions et Bonus Réguliers"}',
                'value_pt' => '{"0":"Promoções e Bônus Regulares"}',
                'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Bookmakers constantly offer various loyalty programs, promotions, free spins, cashback, and bonuses — and 1win is no exception. It is one of the largest platforms with a diverse bonus system. In this review, we’ll take a closer look at how to activate a promo code and what types of bonuses are available. We’ll also share our exclusive promo code that will give you extra value."}',
             'value_es' => '{"0":"Los operadores de apuestas ofrecen constantemente programas de fidelidad, promociones, giros gratis, reembolsos y bonificaciones, y 1win no es la excepción. Es una de las plataformas más grandes con un sistema de bonificaciones variado. En esta reseña, analizaremos en detalle cómo activar un código promocional y qué tipos de bonificaciones existen. También compartiremos nuestro código promocional exclusivo con el que podrás obtener beneficios adicionales."}',
             'value_fr' => '{"0":"Les bookmakers proposent en permanence des programmes de fidélité, des promotions, des free spins, des cashback et des bonus, et 1win ne fait pas exception. C’est l’une des plus grandes plateformes avec un système de bonus varié. Dans cette revue, nous examinerons en détail comment activer un code promo et quels types de bonus sont disponibles. Nous vous fournirons également notre code promotionnel exclusif, qui vous offrira des avantages supplémentaires."}',
             'value_pt' => '{"0":"As casas de apostas estão sempre a oferecer programas de fidelidade, promoções, rodadas grátis, cashback e bónus — e a 1win não é exceção. É uma das maiores plataformas, com um sistema de bónus bastante diversificado. Nesta análise, vamos explicar em detalhe como ativar um código promocional e que tipos de bónus estão disponíveis. Também vamos partilhar o nosso código promocional exclusivo para que possa obter benefícios adicionais."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Instant Registration"}',
                'value_es' => '{"0":"Registro Instantáneo"}',
                'value_fr' => '{"0":"Inscription Instantanée"}',
                'value_pt' => '{"0":"Registro Instantâneo"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"New players can activate our promo code :promocode during registration and receive an increased bonus of up to 500% on their first deposit. This is a great offer, so we highly recommend taking advantage of it. And it\'s easy — just register and enter the promo code :promocode."}',
             'value_es' => '{"0":"Los nuevos jugadores pueden activar nuestro código promocional :promocode durante el registro y obtener un bono aumentado de hasta el 500% sobre su primer depósito. Es una excelente oferta, por lo que recomendamos aprovecharla. Y no es complicado: solo tienes que registrarte e ingresar el código :promocode."}',
             'value_fr' => '{"0":"Les nouveaux joueurs peuvent activer notre code promo :promocode lors de l\'inscription et recevoir un bonus augmenté allant jusqu\'à 500 % sur leur premier dépôt. C’est une excellente offre, alors nous vous conseillons vivement d’en profiter. Et c’est très simple — il suffit de s’inscrire et de saisir le code :promocode."}',
             'value_pt' => '{"0":"Novos jogadores podem ativar o nosso código promocional :promocode durante o registo e receber um bónus aumentado de até 500% no primeiro depósito. É uma ótima oferta, por isso recomendamos aproveitá-la. E é fácil — basta registar-se e inserir o código :promocode."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The registration process is as follows:"}',
             'value_es' => '{"0":"El proceso de registro es el siguiente:"}',
             'value_fr' => '{"0":"Voici comment se déroule le processus d\'inscription :"}',
             'value_pt' => '{"0":"O processo de registo é o seguinte:"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the 1win website."}',
             'value_es' => '{"0":"1. Ve al sitio web de 1win."}',
             'value_fr' => '{"0":"1. Allez sur le site web de 1win."}',
             'value_pt' => '{"0":"1. Acesse o site da 1win."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"2. In the top right corner, find and click the «Registration» button."}',
             'value_es' => '{"0":"2. En la esquina superior derecha, encuentra y haz clic en el botón «Registro»."}',
             'value_fr' => '{"0":"2. En haut à droite, trouvez et cliquez sur le bouton «Inscription»."}',
             'value_pt' => '{"0":"2. No canto superior direito, encontre e clique no botão «Registar»."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"3. In the new window, select, for example, Quick Registration and fill in the required fields. Choose your currency, enter your phone number and email, and create a password. At this stage, you must also enter our promo code :promocode."}',
             'value_es' => '{"0":"3. En la nueva ventana, selecciona, por ejemplo, Registro rápido y completa los campos requeridos. Elige la moneda, introduce tu número de teléfono y correo electrónico, y crea una contraseña. En este paso también debes ingresar nuestro código promocional :promocode."}',
             'value_fr' => '{"0":"3. Dans la nouvelle fenêtre, choisissez par exemple l’Inscription rapide et remplissez les champs requis. Sélectionnez votre devise, entrez votre numéro de téléphone et votre adresse e-mail, puis créez un mot de passe. C’est également à cette étape qu’il faut entrer notre code promo :promocode."}',
             'value_pt' => '{"0":"3. Na nova janela, selecione, por exemplo, o Registo rápido e preencha os campos. Escolha a moeda, introduza o seu número de telefone e e-mail, e crie uma palavra-passe. É também neste passo que deve inserir o nosso código promocional :promocode."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"4. Click the «Register» button."}',
             'value_es' => '{"0":"4. Haz clic en el botón «Registrarse»."}',
             'value_fr' => '{"0":"4. Cliquez sur le bouton «S\'inscrire»."}',
             'value_pt' => '{"0":"4. Clique no botão «Registar-se»."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 10
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
                'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"After successfully creating an account, the bonus is automatically credited to your personal account. The bonus funds can be used for sports betting or casino games."}',
             'value_es' => '{"0":"Después de crear una cuenta con éxito, el bono se acredita automáticamente en tu cuenta personal. Los fondos del bono pueden usarse para apuestas deportivas o juegos de casino."}',
             'value_fr' => '{"0":"Après avoir créé votre compte avec succès, le bonus est automatiquement crédité sur votre espace personnel. Les fonds bonus peuvent être utilisés pour les paris sportifs ou les jeux de casino."}',
             'value_pt' => '{"0":"Após criar a conta com sucesso, o bónus é automaticamente creditado na sua conta pessoal. Os fundos do bónus podem ser utilizados em apostas desportivas ou jogos de casino."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Please note that in order to withdraw the funds, you must first meet the wagering requirements. You need to place bets totaling five times the bonus amount. Bets can be single or accumulator (multi) bets with odds of no less than 3.00. The bonus must be wagered within 14 days from the moment it is credited."}',
             'value_es' => '{"0":"de apuesta. Debes realizar apuestas por un valor cinco veces superior al monto del bono. Las apuestas pueden ser simples o combinadas, con una cuota mínima de 3.00. El bono debe apostarse dentro de los 14 días posteriores a su acreditación."}',
             'value_fr' => '{"0":"Veuillez noter que pour pouvoir retirer les fonds, vous devez d\'abord remplir les conditions de mise. Il faut effectuer des paris pour un montant équivalent à cinq fois le montant du bonus. Les paris peuvent être simples ou combinés, avec une cote minimale de 3.00. Le bonus doit être misé dans un délai de 14 jours après son attribution."}',
             'value_pt' => '{"0":"Importa referir que, para levantar os fundos, é necessário cumprir os requisitos de aposta. Deve fazer apostas no valor de cinco vezes o montante do bónus. As apostas podem ser simples ou múltiplas, com uma odd mínima de 3.00. O bónus deve ser apostado no prazo de 14 dias após o seu crédito."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at 1win?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en 1win?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur 1win ?"}',
                'value_pt' => '{"0":"E se você já for registrado na 1win?"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win doesn’t limit itself to welcome bonuses for new players. Regular users can also count on attractive rewards."}',
             'value_es' => '{"0":"1win no se limita solo a los bonos de bienvenida para nuevos jugadores. Los usuarios habituales también pueden contar con recompensas atractivas."}',
             'value_fr' => '{"0":"1win ne se limite pas aux bonus de bienvenue pour les nouveaux joueurs. Les utilisateurs réguliers peuvent également bénéficier d’avantages intéressants."}',
             'value_pt' => '{"0":"A 1win não se limita apenas aos bónus de boas-vindas para novos jogadores. Os utilizadores frequentes também podem contar com ótimas recompensas."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"These include weekly cashback in the casino section — from 10% to 30% of lost funds are returned to the account. There are also boosted odds on top sports events, bonuses for accumulator bets, and participation in betting marathons."}',
             'value_es' => '{"0":"Incluye reembolsos semanales en la sección de casino: del 10% al 30% de las pérdidas se devuelven a la cuenta. También hay cuotas mejoradas en los principales eventos deportivos, bonificaciones para apuestas combinadas y participación en maratones de apuestas."}',
             'value_fr' => '{"0":"Cela inclut des cashback hebdomadaires dans la section casino — de 10 % à 30 % des pertes sont remboursées sur le compte. Il y a aussi des cotes boostées sur les grands événements sportifs, des bonus sur les paris combinés et la participation à des marathons de paris."}',
             'value_pt' => '{"0":"Inclui cashback semanal na secção de casino — entre 10% e 30% do valor perdido é devolvido à conta. Há também odds aumentadas nos principais eventos desportivos, bónus para apostas múltiplas e participação em maratonas de apostas."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, there is a loyalty system where regular players can unlock VIP levels that offer extra benefits, such as personalized promo codes."}',
             'value_es' => '{"0":"Además, existe un sistema de fidelidad en el que los jugadores habituales pueden desbloquear niveles VIP con beneficios adicionales, como códigos promocionales personalizados."}',
             'value_fr' => '{"0":"De plus, un système de fidélité permet aux clients réguliers de débloquer des niveaux VIP, offrant des privilèges supplémentaires tels que des codes promo personnalisés."}',
             'value_pt' => '{"0":"Além disso, existe um sistema de fidelidade onde os jogadores regulares podem desbloquear níveis VIP que oferecem benefícios extra, como códigos promocionais personalizados."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win does not offer no-deposit bonuses on a regular basis, but such promotions do appear from time to time. 1win often provides the following types of no-deposit bonuses:"}',
             'value_es' => '{"0":"1win no ofrece bonos sin depósito de forma regular, pero estas promociones aparecen de vez en cuando. 1win suele ofrecer los siguientes tipos de bonos sin depósito:"}',
             'value_fr' => '{"0":"1win ne propose pas de bonus sans dépôt de manière régulière, mais de telles promotions apparaissent de temps en temps. 1win propose souvent les types de bonus sans dépôt suivants :"}',
             'value_pt' => '{"0":"A 1win não oferece bónus sem depósito de forma regular, mas essas promoções surgem de vez em quando. A 1win costuma oferecer os seguintes tipos de bónus sem depósito:"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'list_v2',
             'value_en' => '{"0":"Gift free spins",
                             "1":"Bonus for account verification",
                             "2":"Exclusive promo codes from partners",
                             "3":"Promotions for inactive accounts"}',
             'value_es' => '{"0":"Giros gratis de regalo",
                             "1":"Bono por verificación de cuenta",
                             "2":"Códigos promocionales exclusivos de socios",
                             "3":"Promociones para cuentas inactivas"}',
             'value_fr' => '{"0":"Free spins offerts",
                             "1":"Bonus pour la vérification du compte",
                             "2":"Codes promo exclusifs de partenaires",
                             "3":"Promotions pour comptes inactifs"}',
             'value_pt' => '{"0":"Rodadas grátis de oferta",
                             "1":"Bónus por verificação de conta",
                             "2":"Códigos promocionais exclusivos de parceiros",
                             "3":"Promoções para contas inativas"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To receive such bonuses, it is important to carefully follow your email, push notifications, 1win’s official social media channels, or our bonus and promo code review."}',
             'value_es' => '{"0":"Para recibir estos bonos, es importante prestar atención al correo electrónico, las notificaciones push, las redes sociales oficiales de 1win o a nuestra reseña de bonos y códigos promocionales."}',
             'value_fr' => '{"0":"Pour recevoir ces bonus, il est important de suivre attentivement vos e-mails, les notifications push, les réseaux sociaux officiels de 1win ou notre revue des bonus et codes promo."}',
             'value_pt' => '{"0":"Para receber esses bónus, é importante acompanhar cuidadosamente o e-mail, as notificações push, as redes sociais oficiais da 1win ou a nossa análise de bónus e códigos promocionais."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 21
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
             'value_en' => '{"0":"Bonus on a multiple bet"}',
             'value_es' => '{"0":"Bono por apuesta combinada"}',
             'value_fr' => '{"0":"Bonus sur un pari combiné"}',
             'value_pt' => '{"0":"Bônus em aposta múltipla"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"If you enjoy combining your bets into accumulator wagers on multiple events at once, this promotion is just for you. To take advantage of it, you need to meet certain conditions. Specifically, you must create an accumulator with at least three events. It’s important to note that the more events you include, the bigger the bonus to your winnings. For example:"}',
             'value_es' => '{"0":"Si te gusta combinar tus apuestas en una apuesta combinada con varios eventos a la vez, esta promoción es perfecta para ti. Para aprovecharla, necesitas cumplir ciertas condiciones. En concreto, debes formar una apuesta combinada con al menos tres eventos. Cabe destacar que, cuantos más eventos incluyas, mayor será el bono sobre tus ganancias. Por ejemplo:"}',
             'value_fr' => '{"0":"Si vous aimez combiner vos paris en un pari combiné sur plusieurs événements à la fois, cette promotion est faite pour vous. Pour en profiter, vous devez remplir certaines conditions. Vous devez notamment composer un pari combiné avec au moins trois événements. Il convient de noter que plus vous ajoutez d’événements, plus le bonus sur vos gains sera élevé. Par exemple :"}',
             'value_pt' => '{"0":"Se gosta de combinar as suas apostas em acumuladores com vários eventos ao mesmo tempo, esta promoção é ideal para si. Para usufruir dela, é necessário cumprir certos requisitos. Especificamente, deve criar um acumulador com pelo menos três eventos. É importante notar que quanto mais eventos incluir, maior será o bónus sobre os seus ganhos. Por exemplo:"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'list_v2',
             'value_en' => '{"0":"With 3 events, the bonus is +5% to your potential winnings",
                             "1":"With 5 events — +15%",
                             "2":"With 10 or more events — the bonus can reach up to +50%"}',
             'value_es' => '{"0":"Con 3 eventos, el bono es del +5% sobre las ganancias potenciales",
                             "1":"Con 5 eventos — +15%",
                             "2":"Con 10 o más eventos — el bono puede alcanzar hasta el +50%"}',
             'value_fr' => '{"0":"Avec 3 événements, le bonus est de +5 % sur les gains potentiels",
                             "1":"Avec 5 événements — +15 %",
                             "2":"Avec 10 événements ou plus — le bonus peut atteindre +50 %"}',
             'value_pt' => '{"0":"Com 3 eventos, o bónus é de +5% sobre os ganhos potenciais",
                             "1":"Com 5 eventos — +15%",
                             "2":"Com 10 ou mais eventos — o bónus pode chegar até +50%"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Each event must have odds of 1.30 or higher, and the bet must be a winning one. In this case, the additional percentage is automatically added to the winnings amount."}',
             'value_es' => '{"0":"Cada evento debe tener una cuota de 1.30 o más, y la apuesta debe ser ganadora. En este caso, el porcentaje adicional se añade automáticamente al monto de las ganancias."}',
             'value_fr' => '{"0":"Chaque événement doit avoir une cote de 1,30 ou plus, et le pari doit être gagnant. Dans ce cas, le pourcentage supplémentaire est automatiquement ajouté au montant des gains."}',
             'value_pt' => '{"0":"Cada evento deve ter uma odd de 1,30 ou superior, e a aposta deve ser vencedora. Neste caso, a percentagem adicional é automaticamente adicionada ao valor dos ganhos."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 26
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Casino Cashback"}',
                'value_es' => '{"0":"Reembolso de Casino"}',
                'value_fr' => '{"0":"Cashback de Casino"}',
                'value_pt' => '{"0":"Cashback de Cassino"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 27
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Sometimes your bet in the casino doesn’t win. But don’t worry too much, because 1win offers cashback for such cases. This way, you will have the chance to get back part of your lost funds and try your luck again."}',
             'value_es' => '{"0":"A veces tu apuesta en el casino no gana. Pero no te preocupes demasiado, porque 1win ofrece cashback para esos casos. Así, tendrás la oportunidad de recuperar parte de tus pérdidas y probar suerte de nuevo."}',
             'value_fr' => '{"0":"Parfois, votre pari au casino ne passe pas. Mais ne vous inquiétez pas trop, car 1win propose un cashback dans ce genre de cas. Ainsi, vous aurez la possibilité de récupérer une partie de vos pertes et de tenter votre chance à nouveau."}',
             'value_pt' => '{"0":"Às vezes, a sua aposta no casino não é vencedora. Mas não se preocupe demasiado, pois a 1win oferece cashback para esses casos. Assim, terá a oportunidade de recuperar parte das suas perdas e tentar a sorte novamente."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 28
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Cashback of up to 30% can be received every Monday. It is automatically credited to your main balance. It is also worth noting that there are no wagering requirements for the cashback. That means you can withdraw the cashback immediately or use it for further bets."}',
             'value_es' => '{"0":"El cashback puede ser de hasta un 30% y se recibe cada lunes. Se acredita automáticamente en el saldo principal. También es importante destacar que el cashback no tiene requisitos de apuesta, por lo que puedes retirarlo inmediatamente o usarlo para seguir apostando."}',
             'value_fr' => '{"0":"Un cashback pouvant atteindre 30 % est crédité chaque lundi. Il est automatiquement ajouté au solde principal. Il est également important de noter qu’il n’y a pas d’exigences de mise pour ce cashback. Vous pouvez donc le retirer immédiatement ou l’utiliser pour parier."}',
             'value_pt' => '{"0":"O cashback pode ser de até 30% e é creditado todas as segundas-feiras. É automaticamente adicionado ao saldo principal. Também vale a pena destacar que não há requisitos de aposta para o cashback. Ou seja, pode levantar o cashback imediatamente ou usá-lo para apostar."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 29
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 30
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Welcome Bonus"}',
                'value_es' => '{"0":"Bono de bienvenida"}',
                'value_fr' => '{"0":"Bonus de bienvenue"}',
                'value_pt' => '{"0":"Bônus de boas-vindas"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 31
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The welcome bonus from 1win is designed for new players. The key advantage is that the bonus is divided into 4 stages. This allows you to gradually get familiar with the platform, avoid risking a large amount at once, increase your deposit step by step, and still receive bonuses. So, for the first deposit, you can get +200% of the deposit amount; for the second deposit — +150%; for the third — +100%; and for the fourth deposit — +50%."}',
             'value_es' => '{"0":"El bono de bienvenida de 1win está dirigido a nuevos jugadores. La ventaja principal es que el bono se divide en 4 etapas. Esto permite familiarizarse gradualmente con la plataforma, no arriesgar una gran cantidad de inmediato, aumentar el depósito paso a paso y aún así recibir bonos. Por el primer depósito, puedes obtener un +200% del monto depositado; por el segundo depósito — +150%; por el tercero — +100%; y por el cuarto depósito — +50%."}',
             'value_fr' => '{"0":"Le bonus de bienvenue de 1win est destiné aux nouveaux joueurs. L’avantage principal est que le bonus est réparti en 4 étapes. Cela permet de se familiariser progressivement avec la plateforme, de ne pas risquer une grosse somme d’un coup, d’augmenter le dépôt étape par étape et de recevoir des bonus. Ainsi, pour le premier dépôt, vous pouvez obtenir +200 % du montant déposé ; pour le deuxième dépôt — +150 % ; pour le troisième — +100 % ; et pour le quatrième dépôt — +50 %."}',
             'value_pt' => '{"0":"O bónus de boas-vindas da 1win é direcionado a novos jogadores. A principal vantagem é que o bónus é dividido em 4 etapas. Isto permite familiarizar-se gradualmente com a plataforma, evitar arriscar uma grande quantia de uma só vez, aumentar o depósito passo a passo e ainda receber bónus. Assim, pelo primeiro depósito, pode receber +200% do valor depositado; pelo segundo depósito — +150%; pelo terceiro — +100%; e pelo quarto depósito — +50%."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 32
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The total maximum bonus amount can reach up to 1000 USD (or the equivalent in another currency). Bonuses are credited to a separate bonus account and are activated after the first deposit. It is also important to note that to withdraw funds, the bonus must be wagered."}',
             'value_es' => '{"0":"El monto máximo total del bono puede alcanzar hasta 1000 USD (o su equivalente en otra moneda). Los bonos se acreditan en una cuenta de bonificación separada y se activan después del primer depósito. También es importante señalar que para retirar fondos, el bono debe ser apostado."}',
             'value_fr' => '{"0":"Le montant total maximal du bonus peut atteindre 1000 USD (ou l’équivalent dans une autre devise). Les bonus sont crédités sur un compte bonus séparé et s’activent après le premier dépôt. Il est également important de noter que pour retirer les fonds, il faut miser le bonus."}',
             'value_pt' => '{"0":"O valor máximo total do bónus pode chegar até 1000 USD (ou o equivalente noutra moeda). Os bónus são creditados numa conta de bónus separada e ativados após o primeiro depósito. Também é importante notar que, para levantar fundos, o bónus deve ser apostado."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 33
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 33
            ]
        );
    }
}
