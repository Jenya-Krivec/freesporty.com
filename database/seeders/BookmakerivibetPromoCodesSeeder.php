<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"ivibet offers players a variety of promotions that can significantly boost your winnings. One of the attractive features of the platform is its system of promo codes and bonuses, which allows not only new but also regular players to receive additional benefits."}',
             'value_es' => '{"0":"ivibet ofrece a los jugadores una variedad de promociones que pueden aumentar significativamente sus ganancias. Una de las características atractivas de la plataforma es su sistema de códigos promocionales y bonos, que permite tanto a los nuevos como a los jugadores habituales obtener beneficios adicionales."}',
             'value_fr' => '{"0":"ivibet propose aux joueurs une variété de promotions qui peuvent considérablement augmenter vos gains. L’un des aspects attrayants de la plateforme est son système de codes promo et de bonus, qui permet non seulement aux nouveaux joueurs mais aussi aux joueurs réguliers de bénéficier d’avantages supplémentaires."}',
             'value_pt' => '{"0":"ivibet oferece aos jogadores uma variedade de promoções que podem aumentar significativamente seus ganhos. Uma das características atraentes da plataforma é o sistema de códigos promocionais e bônus, que permite não só aos novos jogadores, mas também aos regulares, receber benefícios adicionais."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a detailed look at how to use the promo code :promocode during registration to get a welcome bonus of +100%, what bonuses are available for already registered users, and also explore the current ivibet promotions."}',
             'value_es' => '{"0":"En esta reseña, analizaremos detalladamente cómo utilizar el código promocional :promocode durante el registro para obtener un bono de bienvenida del +100%, qué bonos están disponibles para los usuarios ya registrados, y también revisaremos las promociones actuales de ivibet."}',
             'value_fr' => '{"0":"Dans cet examen, nous examinerons en détail comment utiliser le code promo :promocode lors de l’inscription pour obtenir un bonus de bienvenue de +100 %, quels bonus sont disponibles pour les utilisateurs déjà inscrits, et nous passerons également en revue les promotions actuelles d’ivibet."}',
             'value_pt' => '{"0":"Nesta análise, vamos detalhar como usar o código promocional :promocode durante o registro para obter um bônus de boas-vindas de +100%, quais bônus estão disponíveis para os usuários já cadastrados, e também vamos explorar as promoções atuais do ivibet."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the ivibet promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de ivibet?"}',
                'value_fr' => '{"0":"Comment profiter du code promo ivibet ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da ivibet?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"Registration on ivibet takes little time. After going to the official website, click the SIGN UP button at the top, then you need to fill out a standard three-step registration form."}',
                'value_es' => '{"0":"El registro en ivibet toma poco tiempo. Después de ingresar al sitio web oficial, haga clic en el botón SIGN UP en la parte superior, luego debe completar un formulario de registro estándar en tres pasos."}',
                'value_fr' => '{"0":"L’inscription sur ivibet prend peu de temps. Après être allé sur le site officiel, cliquez sur le bouton SIGN UP en haut, puis vous devez remplir un formulaire d’inscription standard en trois étapes."}',
                'value_pt' => '{"0":"O registro na ivibet leva pouco tempo. Após acessar o site oficial, clique no botão SIGN UP no topo, depois você precisa preencher um formulário padrão de registro em três etapas."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"1. First, choose where you will use the bonus funds — for sports betting or in the casino. Then select your country, enter your email, and create a password according to the recommendations. At this stage, enter our promo code :promocode. Now you can proceed to the second step."}',
                'value_es' => '{"0":"1. Primero, elija dónde utilizará los fondos del bono — para apuestas deportivas o en el casino. Luego seleccione su país, ingrese su correo electrónico y cree una contraseña según las recomendaciones. En esta etapa, ingrese nuestro código promocional :promocode. Ahora puede pasar al segundo paso."}',
                'value_fr' => '{"0":"1. Tout d’abord, choisissez où vous utiliserez les fonds du bonus — pour les paris sportifs ou au casino. Ensuite, sélectionnez votre pays, saisissez votre e-mail et créez un mot de passe selon les recommandations. À cette étape, indiquez notre code promo :promocode. Vous pouvez maintenant passer à la deuxième étape."}',
                'value_pt' => '{"0":"1. Primeiro, escolha onde você usará os fundos do bônus — para apostas esportivas ou no cassino. Em seguida, selecione seu país, insira seu e-mail e crie uma senha conforme as recomendações. Nesta etapa, insira nosso código promocional :promocode. Agora você pode passar para o segundo passo."}',
                'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"2. In the second step, you will need to select the currency, provide your first and last name, gender, and date of birth. After that, you can move on to the final step."}',
                'value_es' => '{"0":"2. En el segundo paso, deberá seleccionar la moneda, proporcionar su nombre y apellido, género y fecha de nacimiento. Después de eso, puede pasar al último paso."}',
                'value_fr' => '{"0":"2. À la deuxième étape, vous devrez choisir la devise, indiquer votre prénom et nom, votre sexe et votre date de naissance. Après cela, vous pouvez passer à la dernière étape."}',
                'value_pt' => '{"0":"2. No segundo passo, você deverá escolher a moeda, informar seu nome e sobrenome, gênero e data de nascimento. Depois disso, você pode passar para a última etapa."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"3. In the third step, provide your address, postal code, city of residence, and phone number. Click Register."}',
                'value_es' => '{"0":"3. En el tercer paso, proporcione su dirección, código postal, ciudad de residencia y número de teléfono. Haga clic en Registrarse."}',
                'value_fr' => '{"0":"3. À la troisième étape, indiquez votre adresse, code postal, ville de résidence et numéro de téléphone. Cliquez sur S’inscrire."}',
                'value_pt' => '{"0":"3. No terceiro passo, informe seu endereço, código postal, cidade de residência e número de telefone. Clique em Registrar."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"One of the most popular ways to start betting and claim a welcome bonus is by using a promo code during registration. MelBet allows you to activate a special code that increases your first deposit bonus up to 130% instead of the standard 100%."}',
                'value_es' => '{"0":"Una de las formas más populares de comenzar a jugar y obtener un bono de bienvenida es utilizando un código promocional al registrarse. MelBet permite activar un código especial que aumenta el bono del primer depósito hasta un 130% en lugar del 100% estándar."}',
                'value_fr' => '{"0":"L’une des façons les plus populaires de commencer à jouer et de recevoir un bonus de bienvenue est d’utiliser un code promo lors de l’inscription. MelBet vous permet d’activer un code spécial qui augmente le montant du premier dépôt jusqu’à 130 %, au lieu du 100 % standard."}',
                'value_pt' => '{"0":"Uma das maneiras mais populares de começar a jogar e receber um bônus de boas-vindas é usando um código promocional no momento do registro. A MelBet permite que você ative um código especial que aumenta o valor do primeiro depósito para até 130%, em vez dos 100% padrão."}',
                'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"After completing the registration, you need to verify your account via email or SMS. Only after verification will the user be able to fully use the bonuses and place bets. After making a deposit, the increased welcome bonus will be automatically credited thanks to our promo code."}',
                'value_es' => '{"0":"Después de completar el registro, debe verificar su cuenta por correo electrónico o SMS. Solo después de la verificación el usuario podrá utilizar completamente los bonos y realizar apuestas. Tras realizar un depósito, el bono de bienvenida aumentado se acreditará automáticamente gracias a nuestro código promocional."}',
                'value_fr' => '{"0":"Après avoir terminé l’inscription, vous devez confirmer votre compte par e-mail ou SMS. Ce n’est qu’après la vérification que l’utilisateur pourra pleinement utiliser les bonus et placer des paris. Après le dépôt, le bonus de bienvenue augmenté sera automatiquement crédité grâce à notre code promo."}',
                'value_pt' => '{"0":"Após concluir o registro, é necessário confirmar a conta via e-mail ou SMS. Somente após a verificação o usuário poderá utilizar plenamente os bônus e fazer apostas. Após o depósito, o bônus de boas-vindas aumentado será creditado automaticamente graças ao nosso código promocional."}',
                'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"With the promo code :promocode, you can claim a generous welcome bonus on your first deposit. This promo code allows you to boost the initial bonus up to 100%."}',
                'value_es' => '{"0":"Con el código promocional :promocode, puedes recibir un generoso bono de bienvenida en tu primer depósito. Este código te permite aumentar el bono inicial hasta el 100%."}',
                'value_fr' => '{"0":"Avec le code promo :promocode, vous pouvez obtenir un généreux bonus de bienvenue sur votre premier dépôt. Ce code vous permet d’augmenter le bonus initial jusqu’à 100 %."}',
                'value_pt' => '{"0":"Com o código promocional :promocode, você pode receber um bônus generoso no seu primeiro depósito. Este código permite aumentar o bônus inicial até 100%."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"Also, please note that during registration it is necessary to provide accurate information to avoid problems with identity verification in the future."}',
                'value_es' => '{"0":"También tenga en cuenta que durante el registro es necesario proporcionar datos verídicos para evitar problemas con la verificación de identidad en el futuro."}',
                'value_fr' => '{"0":"Veuillez également noter qu’il est nécessaire de fournir des informations exactes lors de l’inscription afin d’éviter des problèmes de vérification d’identité à l’avenir."}',
                'value_pt' => '{"0":"Também observe que é necessário fornecer dados verdadeiros durante o registro para evitar problemas futuros com a verificação de identidade."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at ivibet?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en ivibet?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur ivibet ?"}',
                'value_pt' => '{"0":"E se você já for registrado na ivibet?"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"ivibet values its regular customers and regularly offers them bonuses that go beyond just welcome offers. Registered players have access to bonuses on reload deposits, cashback, themed promotions related to major sporting events, as well as special offers for active casino players."}',
             'value_es' => '{"0":"ivibet valora a sus clientes habituales y les ofrece regularmente bonos que van más allá de las ofertas de bienvenida. Los jugadores registrados tienen acceso a bonos por recargas, reembolsos, promociones temáticas relacionadas con grandes eventos deportivos, así como ofertas especiales para jugadores activos de casino."}',
             'value_fr' => '{"0":"ivibet valorise ses clients réguliers et leur propose régulièrement des bonus qui ne se limitent pas aux offres de bienvenue. Les joueurs enregistrés ont accès à des bonus sur les dépôts de recharge, au cashback, à des promotions thématiques liées aux grands événements sportifs, ainsi qu’à des offres spéciales pour les joueurs actifs de casino."}',
             'value_pt' => '{"0":"ivibet valoriza seus clientes regulares e oferece regularmente bônus que vão além das ofertas de boas-vindas. Jogadores registrados têm acesso a bônus em depósitos de recarga, cashback, promoções temáticas relacionadas a grandes eventos esportivos, bem como ofertas especiais para jogadores ativos de cassino."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"All available promotions can be viewed on the Promotions page, and bonuses can be activated through the personal account."}',
             'value_es' => '{"0":"Todas las promociones disponibles se pueden ver en la página de Promociones, y los bonos se pueden activar a través de la cuenta personal."}',
             'value_fr' => '{"0":"Toutes les promotions disponibles peuvent être consultées sur la page Promotions, et les bonus peuvent être activés via le compte personnel."}',
             'value_pt' => '{"0":"Todas as promoções disponíveis podem ser vistas na página de Promoções, e os bônus podem ser ativados através da conta pessoal."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 16
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 17
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, ivibet does not offer classic no deposit bonuses. However, there are special promotions and a loyalty system for active players. These allow you to receive cashback, free spins, which can significantly improve your winnings or compensate part of your losses."}',
             'value_es' => '{"0":"En este momento, ivibet no ofrece bonos clásicos sin depósito. Sin embargo, existen promociones especiales y un sistema de lealtad para jugadores activos. Estos permiten recibir cashback, giros gratis, lo que puede mejorar significativamente tus ganancias o compensar parte de tus pérdidas."}',
             'value_fr' => '{"0":"À l\'heure actuelle, ivibet ne propose pas de bonus classiques sans dépôt. Cependant, il existe des promotions spéciales et un système de fidélité pour les joueurs actifs. Ceux-ci permettent de recevoir du cashback, des tours gratuits, ce qui peut considérablement améliorer vos gains ou compenser une partie de vos pertes."}',
             'value_pt' => '{"0":"No momento, ivibet não oferece bônus clássicos sem depósito. No entanto, existem promoções especiais e um sistema de fidelidade para jogadores ativos. Eles permitem receber cashback, giros grátis, que podem melhorar significativamente seus ganhos ou compensar parte de suas perdas."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 18
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"VIP Program Casino"}',
                'value_es' => '{"0":"Programa VIP de Casino"}',
                'value_fr' => '{"0":"Programme Vip De ivibet"}',
                'value_pt' => '{"0":"Programa VIP Casino"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 19
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"This promotion is designed specifically for ivibet casino players. It allows you to accumulate bonus points for every casino bet, which can later be exchanged for real money or additional free spins."}',
             'value_es' => '{"0":"Esta promoción está diseñada específicamente para los jugadores de casino de ivibet. Permite acumular puntos de bonificación por cada apuesta en el casino, que luego se pueden canjear por dinero real o giros gratis adicionales."}',
             'value_fr' => '{"0":"Cette promotion est spécialement conçue pour les joueurs de casino ivibet. Elle permet d\'accumuler des points bonus pour chaque mise au casino, qui peuvent ensuite être échangés contre de l\'argent réel ou des tours gratuits supplémentaires."}',
             'value_pt' => '{"0":"Esta promoção é feita especificamente para jogadores de cassino ivibet. Permite acumular pontos de bônus por cada aposta no cassino, que podem ser trocados posteriormente por dinheiro real ou rodadas grátis adicionais."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 20
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The VIP program has several levels — Bronze, Silver, Gold, Platinum — and as players advance through the levels, they receive increased bonuses and exclusive offers. Accumulated bonus points can be redeemed for real money or free spins in the casino."}',
             'value_es' => '{"0":"El programa VIP tiene varios niveles — Bronce, Plata, Oro, Platino — y a medida que los jugadores avanzan en los niveles, reciben mayores bonificaciones y ofertas exclusivas. Los puntos de bonificación acumulados pueden canjearse por dinero real o giros gratis en el casino."}',
             'value_fr' => '{"0":"Le programme VIP comprend plusieurs niveaux — Bronze, Argent, Or, Platine — et à mesure que les joueurs montent de niveau, ils reçoivent des bonus accrus et des offres exclusives. Les points bonus accumulés peuvent être échangés contre de l\'argent réel ou des tours gratuits au casino."}',
             'value_pt' => '{"0":"O programa VIP possui vários níveis — Bronze, Prata, Ouro, Platina — e conforme os jogadores avançam nos níveis, recebem bônus maiores e ofertas exclusivas. Os pontos de bônus acumulados podem ser trocados por dinheiro real ou rodadas grátis no cassino."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 21
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Bonus points are valid for up to 30 days, after which unused points expire."}',
             'value_es' => '{"0":"Los puntos de bonificación tienen una validez de hasta 30 días, tras los cuales los puntos no utilizados expiran."}',
             'value_fr' => '{"0":"Les points bonus sont valables jusqu\'à 30 jours, après quoi les points non utilisés expirent."}',
             'value_pt' => '{"0":"Os pontos de bônus têm validade de até 30 dias, após os quais os pontos não utilizados expiram."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 22
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 23
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Fortune Wheel Bonus"}',
                'value_es' => '{"0":"Bono de Ruleta de la suerte"}',
                'value_fr' => '{"0":"Bonus Roue de la Fortune"}',
                'value_pt' => '{"0":"Bónus Roda da Fortuna"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 24
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"This is an entertaining bonus promotion that gives players a chance to win bonus funds, free spins, cashback, or enhanced odds on sports events."}',
             'value_es' => '{"0":"Esta es una promoción de bonificación divertida que ofrece a los jugadores la oportunidad de ganar fondos de bonificación, giros gratis, cashback o cuotas mejoradas en eventos deportivos."}',
             'value_fr' => '{"0":"Il s\'agit d\'une promotion bonus divertissante qui donne aux joueurs la chance de gagner des fonds bonus, des tours gratuits, du cashback ou des cotes augmentées sur des événements sportifs."}',
             'value_pt' => '{"0":"Esta é uma promoção bônus divertida que oferece aos jogadores a chance de ganhar fundos bônus, rodadas grátis, cashback ou odds aumentadas em eventos esportivos."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 25
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The Fortune Wheel activates after making a deposit or active gameplay on the site."}',
             'value_es' => '{"0":"La Rueda de la Fortuna se activa después de realizar un depósito o de jugar activamente en el sitio."}',
             'value_fr' => '{"0":"La Roue de la Fortune s\'active après avoir effectué un dépôt ou joué activement sur le site."}',
             'value_pt' => '{"0":"A Roda da Fortuna é ativada após o depósito ou jogo ativo no site."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 26
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Bonuses received through the Fortune Wheel require wagering according to the established rules before they can be withdrawn. To do this, you need to place bets totaling 30 times the bonus amount on events with a minimum odds of 1.50."}',
             'value_es' => '{"0":"Los bonos obtenidos a través de la Rueda de la Fortuna requieren apuestas según las reglas establecidas antes de poder retirarlos. Para ello, debes realizar apuestas por un valor total de 30 veces el monto del bono en eventos con una cuota mínima de 1.50."}',
             'value_fr' => '{"0":"Les bonus obtenus via la Roue de la Fortune nécessitent un pari selon les règles établies avant de pouvoir être retirés. Pour cela, vous devez miser un montant total égal à 30 fois le bonus sur des événements avec une cote minimale de 1,50."}',
             'value_pt' => '{"0":"Os bônus recebidos pela Roda da Fortuna exigem apostas de acordo com as regras estabelecidas antes de poderem ser sacados. Para isso, é necessário apostar um valor total de 30 vezes o bônus em eventos com odds mínimas de 1,50."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 27
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 28
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Friday Reload"}',
                'value_es' => '{"0":"VIERNES DE RECARGAS"}',
                'value_fr' => '{"0":"Bonus Du Vendredi"}',
                'value_pt' => '{"0":"RECARGA DE SEXTA-FEIRA"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 29
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Friday Reload is a regular bonus offer for those who want to increase their deposit before the weekend. Under the promotion, every Friday users can receive a bonus on their repeat deposit."}',
             'value_es' => '{"0":"VIERNES DE RECARGAS es una oferta de bono regular para quienes desean aumentar su depósito antes del fin de semana. Según la promoción, cada viernes los usuarios pueden recibir un bono en su depósito repetido."}',
             'value_fr' => '{"0":"Bonus Du Vendredi est une offre de bonus régulière pour ceux qui souhaitent augmenter leur dépôt avant le week-end. Selon la promotion, chaque vendredi, les utilisateurs peuvent recevoir un bonus sur leur dépôt répété."}',
             'value_pt' => '{"0":"RECARGA DE SEXTA-FEIRA é uma oferta de bônus regular para quem quer aumentar seu depósito antes do fim de semana. Segundo a promoção, toda sexta-feira os usuários podem receber um bônus no depósito repetido."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 30
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"To qualify, you need to top up your account with a minimum of 10 euros, and you will receive an additional 50% bonus."}',
             'value_es' => '{"0":"Para calificar, debes recargar tu cuenta con un mínimo de 10 euros y recibirás un bono adicional del 50%."}',
             'value_fr' => '{"0":"Pour en bénéficier, vous devez recharger votre compte avec un minimum de 10 euros et vous recevrez un bonus supplémentaire de 50 %."}',
             'value_pt' => '{"0":"Para se qualificar, é necessário recarregar sua conta com no mínimo 10 euros, e você receberá um bônus adicional de 50%."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 31
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"To withdraw the funds, wagering requirements must be met. You need to place bets totaling 30 times the bonus amount on events with minimum odds of 1.50."}',
             'value_es' => '{"0":"Para retirar los fondos, debes cumplir con los requisitos de apuesta. Necesitas realizar apuestas por un valor total de 30 veces el monto del bono en eventos con cuotas mínimas de 1.50."}',
             'value_fr' => '{"0":"Pour retirer les fonds, il faut remplir les conditions de mise. Vous devez parier un montant total égal à 30 fois le bonus sur des événements avec une cote minimale de 1,50."}',
             'value_pt' => '{"0":"Para sacar os fundos, é preciso cumprir os requisitos de aposta. Você precisa fazer apostas no valor total de 30 vezes o valor do bônus em eventos com odds mínimas de 1,50."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 32
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 32
            ]
        );
    }
}
