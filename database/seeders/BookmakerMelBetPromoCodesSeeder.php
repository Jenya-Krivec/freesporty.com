<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet is a bookmaker that actively develops its bonus policy, focusing both on new users and existing players. The company offers a flexible incentive system that includes classic welcome bonuses and promotions for loyal customers."}',
             'value_es' => '{"0":"MelBet es una casa de apuestas que desarrolla activamente su política de bonificaciones, centrada tanto en los nuevos usuarios como en los jugadores ya registrados. La empresa ofrece un sistema de incentivos flexible que incluye bonos de bienvenida clásicos y promociones para clientes habituales."}',
             'value_fr' => '{"0":"MelBet est un bookmaker qui développe activement sa politique de bonus, en s’adressant à la fois aux nouveaux utilisateurs et aux joueurs déjà inscrits. L’entreprise propose un système de récompenses flexible, comprenant des bonus de bienvenue classiques et des promotions pour les joueurs réguliers."}',
             'value_pt' => '{"0":"A MelBet é uma casa de apostas que desenvolve ativamente sua política de bônus, com foco tanto em novos usuários quanto em jogadores já registrados. A empresa oferece um sistema de recompensas flexível, que inclui bônus de boas-vindas clássicos e promoções para clientes fiéis."}',
             'order' => 1,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a detailed look at how to properly activate a MelBet promo code, what bonuses are available to new players, which promotions are offered to regular users, and evaluate the most popular loyalty programs."}',
             'value_es' => '{"0":"En esta reseña, analizaremos en detalle cómo activar correctamente un código promocional de MelBet, qué bonos pueden obtener los nuevos jugadores, qué promociones están disponibles para los usuarios habituales y evaluaremos los programas de fidelidad más populares."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons en détail comment activer correctement un code promo MelBet, quels bonus sont disponibles pour les nouveaux joueurs, quelles offres sont proposées aux clients réguliers, et nous évaluerons les programmes de fidélité les plus populaires."}',
             'value_pt' => '{"0":"Nesta análise, veremos em detalhes como ativar corretamente um código promocional da MelBet, quais bônus estão disponíveis para novos jogadores, quais promoções são oferecidas aos usuários regulares e avaliaremos os programas de fidelidade mais populares."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the MelBet promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de MelBet?"}',
                'value_fr' => '{"0":"Comment profiter du code promo MelBet ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da MelBet?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"One of the most popular ways to start betting and claim a welcome bonus is by using a promo code during registration. MelBet allows you to activate a special code that increases your first deposit bonus up to 130% instead of the standard 100%."}',
             'value_es' => '{"0":"Una de las formas más populares de comenzar a jugar y obtener un bono de bienvenida es utilizando un código promocional al registrarse. MelBet permite activar un código especial que aumenta el bono del primer depósito hasta un 130% en lugar del 100% estándar."}',
             'value_fr' => '{"0":"L’une des façons les plus populaires de commencer à jouer et de recevoir un bonus de bienvenue est d’utiliser un code promo lors de l’inscription. MelBet vous permet d’activer un code spécial qui augmente le montant du premier dépôt jusqu’à 130 %, au lieu du 100 % standard."}',
             'value_pt' => '{"0":"Uma das maneiras mais populares de começar a jogar e receber um bônus de boas-vindas é usando um código promocional no momento do registro. A MelBet permite que você ative um código especial que aumenta o valor do primeiro depósito para até 130%, em vez dos 100% padrão."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"With the promo code :promocode, you can claim a generous welcome bonus on your first deposit. This promo code allows you to boost the initial bonus up to 130%."}',
             'value_es' => '{"0":"Con el código promocional :promocode, puedes recibir un generoso bono de bienvenida en tu primer depósito. Este código te permite aumentar el bono inicial hasta el 130%."}',
             'value_fr' => '{"0":"Avec le code promo :promocode, vous pouvez obtenir un généreux bonus de bienvenue sur votre premier dépôt. Ce code vous permet d’augmenter le bonus initial jusqu’à 130 %."}',
             'value_pt' => '{"0":"Com o código promocional :promocode, você pode receber um bônus generoso no seu primeiro depósito. Este código permite aumentar o bônus inicial até 130%."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"To use the :promocode, visit the official MelBet website or open the mobile app. Click the «Registration» button in the top right corner, and a registration form will appear. You can choose one of the following registration methods: one-click, by phone number, by email, or via social networks. Select your preferred method and enter the promo code :promocode in the appropriate field."}',
             'value_es' => '{"0":"Para utilizar el :promocode, entra al sitio web oficial de MelBet o abre la aplicación móvil. Haz clic en el botón «Registro» en la esquina superior derecha y aparecerá un formulario. Puedes elegir entre los siguientes métodos de registro: con un clic, por número de teléfono, por correo electrónico o mediante redes sociales. Selecciona el método que prefieras e introduce el código promocional :promocode en el campo correspondiente."}',
             'value_fr' => '{"0":"Pour utiliser le :promocode, rendez-vous sur le site officiel de MelBet ou ouvrez l’application mobile. Cliquez sur le bouton « Inscription » en haut à droite. Un formulaire s’affichera, vous permettant de choisir un mode d’inscription : en un clic, par téléphone, par email ou via les réseaux sociaux. Choisissez votre méthode et entrez le code promo :promocode dans le champ approprié."}',
             'value_pt' => '{"0":"Para usar o :promocode, acesse o site oficial da MelBet ou abra o aplicativo móvel. Clique no botão «Registro» no canto superior direito da tela. Um formulário aparecerá com várias opções de registro: com um clique, por número de telefone, por e-mail ou por redes sociais. Escolha o método desejado e insira o código promocional :promocode no campo apropriado."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Next, confirm your registration. Then make a deposit of any amount. The minimum deposit starts at just 1 EUR. Keep in mind: the larger your first deposit, the bigger your welcome bonus will be."}',
             'value_es' => '{"0":"Luego, confirma tu registro. Después, realiza un depósito por cualquier cantidad. El depósito mínimo es de solo 1 euro. Ten en cuenta que cuanto mayor sea el importe del primer depósito, mayor será el bono que recibirás."}',
             'value_fr' => '{"0":"Ensuite, confirmez votre inscription. Effectuez ensuite un dépôt de n’importe quel montant. Le dépôt minimum est de 1 euro seulement. Notez que plus le montant de votre premier dépôt est élevé, plus le bonus de bienvenue sera important."}',
             'value_pt' => '{"0":"Em seguida, confirme o registro. Depois, faça um depósito de qualquer valor. O valor mínimo é de apenas 1 euro. Lembre-se: quanto maior o valor do seu primeiro depósito, maior será o bônus recebido."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Before entering the promo code, make sure you select your bonus category: «Sports Bonus» or «Casino Bonus». This determines where you can use the bonus funds."}',
             'value_es' => '{"0":"Antes de ingresar el código, asegúrate de haber seleccionado la categoría de bono: «Bono deportivo» o «Bono de casino». Esto determinará dónde podrás usar los fondos del bono."}',
             'value_fr' => '{"0":"Avant de saisir le code promo, assurez-vous de sélectionner la catégorie de bonus souhaitée : « Bonus Sport » ou « Bonus Casino ». Cela déterminera où vous pourrez utiliser vos fonds bonus."}',
             'value_pt' => '{"0":"Antes de inserir o código promocional, certifique-se de selecionar a categoria de bônus: «Bônus de esportes» ou «Bônus de cassino». Isso definirá onde você poderá usar os fundos do bônus."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"That’s it! Your welcome bonus will be automatically credited to your bonus account."}',
             'value_es' => '{"0":"¡Eso es todo! El bono de bienvenida se acreditará automáticamente en tu cuenta de bono."}',
             'value_fr' => '{"0":"Et voilà ! Le bonus de bienvenue sera automatiquement crédité sur votre compte bonus."}',
             'value_pt' => '{"0":"Pronto! O bônus de boas-vindas será creditado automaticamente na sua conta de bônus."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at MelBet?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en MelBet?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur MelBet ?"}',
                'value_pt' => '{"0":"E se você já for registrado na MelBet?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Many bookmakers focus on attracting new players, but MelBet stands out among competitors with its loyalty to existing customers. A range of long-term and themed promotions is available for registered users, such as the Bonus for a Series of Losses. If a player loses 20 bets in a row, MelBet compensates part of the losses. The bonus amount can reach up to €500, depending on the size of each individual bet."}',
             'value_es' => '{"0":"Muchos operadores de apuestas se centran en atraer a nuevos jugadores, pero MelBet se destaca entre sus competidores por su lealtad hacia los clientes habituales. Los usuarios registrados tienen acceso a una serie de promociones duraderas y temáticas, como el Bono por serie de pérdidas. Si un jugador pierde 20 apuestas consecutivas, MelBet compensa una parte de las pérdidas. El monto del bono puede alcanzar los 500 euros, según el valor de cada apuesta individual."}',
             'value_fr' => '{"0":"De nombreux bookmakers se concentrent sur les nouveaux joueurs, mais MelBet se distingue par sa fidélité envers ses clients existants. Les utilisateurs enregistrés peuvent bénéficier de plusieurs promotions durables et thématiques, comme le bonus pour une série de pertes. Si un joueur perd 20 paris consécutifs, MelBet rembourse une partie des pertes. Le montant du bonus peut atteindre 500 €, selon le montant de chaque pari individuel."}',
             'value_pt' => '{"0":"Muitas casas de apostas concentram-se em atrair novos jogadores, mas a MelBet destaca-se dos concorrentes pela sua lealdade aos clientes já registados. Para os utilizadores existentes, há uma variedade de promoções temáticas e de longa duração, como o Bónus por série de apostas perdidas. Se um jogador perder 20 apostas consecutivas, a MelBet compensa parte das perdas. O valor do bónus pode chegar até 500 euros, dependendo do montante de cada aposta individual."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"In addition, users who actively place sports bets regularly receive personal promo codes via email or in their account. These bonuses give players extra value and rewards."}',
             'value_es' => '{"0":"Además, los usuarios que apuestan activamente en deportes reciben regularmente códigos promocionales personalizados por correo electrónico o directamente en su perfil. Estos bonos permiten obtener beneficios adicionales."}',
             'value_fr' => '{"0":"De plus, les utilisateurs qui parient activement sur le sport reçoivent régulièrement des codes promotionnels personnalisés par e-mail ou directement dans leur profil. Ces bonus offrent des avantages supplémentaires aux joueurs fidèles."}',
             'value_pt' => '{"0":"Além disso, os utilizadores que apostam ativamente em desporto recebem regularmente códigos promocionais personalizados por e-mail ou diretamente na sua conta. Esses bónus permitem obter vantagens adicionais."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
             'value_en' => '{"0":"Are there any no deposit bonuses?"}',
             'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
             'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
             'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"As with most bookmakers, MelBet does not offer no deposit bonuses on a regular basis. However, there are occasional rewards, such as birthday gifts. MelBet gives free spins or bonus funds to active players without requiring a deposit."}',
             'value_es' => '{"0":"Al igual que la mayoría de las casas de apuestas, MelBet no ofrece bonos sin depósito de forma permanente. Sin embargo, existen recompensas ocasionales, como regalos de cumpleaños. MelBet ofrece giros gratis o fondos de bonificación a los jugadores activos sin necesidad de realizar un depósito."}',
             'value_fr' => '{"0":"Comme dans la plupart des bookmakers, MelBet ne propose pas de bonus sans dépôt de manière régulière. Cependant, il existe des récompenses ponctuelles, comme les cadeaux d’anniversaire. MelBet offre des free spins ou des fonds bonus aux joueurs actifs, sans dépôt requis."}',
             'value_pt' => '{"0":"Como na maioria das casas de apostas, a MelBet não oferece bônus sem depósito de forma contínua. No entanto, existem recompensas ocasionais, como presentes de aniversário. A MelBet oferece rodadas grátis ou fundos de bônus a jogadores ativos sem necessidade de depósito."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"There are also prize giveaways through quizzes or social media. MelBet often raffles free spins or free bets via Telegram."}',
             'value_es' => '{"0":"También hay premios a través de concursos o redes sociales. MelBet suele sortear giros gratis o apuestas gratuitas en Telegram."}',
             'value_fr' => '{"0":"Il y a également des prix à gagner via des quiz ou sur les réseaux sociaux. MelBet organise souvent des tirages de free spins ou de paris gratuits sur Telegram."}',
             'value_pt' => '{"0":"Também há prêmios através de quizzes ou nas redes sociais. A MelBet frequentemente sorteia rodadas grátis ou apostas gratuitas no Telegram."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Go For Longer"}',
                'value_es' => '{"0":"No pare"}',
                'value_fr' => '{"0":"Vous pourrez jouer plus longtemps"}',
                'value_pt' => '{"0":"Vá mais além"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"This is one of the most profitable promotions for fans of accumulator bets. The more events you include in your accumulator, the bigger the bonus added to your winnings. To receive the bonus, you need to place a bet on at least 7 events in a single accumulator, with each event having odds of at least 1.7. The more events you add, the higher the bonus — it can range from 5% to 50%."}',
             'value_es' => '{"0":"Esta es una de las promociones más rentables para los aficionados a las apuestas combinadas. Cuantos más eventos incluyas en tu combinada, mayor será el bono que se añadirá a tus ganancias. Para obtener el bono, debes realizar una apuesta con al menos 7 eventos, y cada evento debe tener una cuota mínima de 1.7. Cuantos más eventos tenga tu combinada, mayor será el bono — puede ir desde el 5% hasta el 50%."}',
             'value_fr' => '{"0":"C’est l’une des promotions les plus avantageuses pour les amateurs de paris combinés. Plus vous ajoutez d’événements à votre combiné, plus le bonus ajouté à vos gains sera élevé. Pour bénéficier de ce bonus, vous devez placer un pari combiné sur au moins 7 événements, avec une cote minimale de 1.7 pour chaque événement. Plus vous ajoutez d’événements, plus le bonus sera important — il peut aller de 5 % à 50 %."}',
             'value_pt' => '{"0":"Esta é uma das promoções mais lucrativas para os fãs de apostas múltiplas. Quanto mais eventos incluir no seu múltiplo, maior será o bônus adicionado aos seus ganhos. Para receber o bônus, é necessário fazer uma aposta com pelo menos 7 eventos, e cada evento deve ter uma odd mínima de 1.7. Quanto maior o número de seleções, maior será o bônus — variando entre 5% e 50%."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"For example, if a player bets €10 on an accumulator with 9 events, and all of them win, the system will add an extra 20–30% bonus to the regular payout."}',
             'value_es' => '{"0":"Por ejemplo, si un jugador apuesta 10 euros a una combinada de 9 eventos y todos resultan ganadores, el sistema añadirá automáticamente un bono adicional del 20–30% a las ganancias normales."}',
             'value_fr' => '{"0":"Par exemple, si un joueur mise 10 € sur un combiné de 9 événements et que tous les paris sont gagnants, le système ajoutera automatiquement un bonus de 20 à 30 % aux gains standard."}',
             'value_pt' => '{"0":"Por exemplo, se um jogador apostar 10 euros num múltiplo com 9 eventos e todos forem vencedores, o sistema adicionará automaticamente um bônus extra de 20–30% aos ganhos normais."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
             'value_en' => '{"0":"img-3.webp"}',
             'value_es' => '{"0":"img-3.webp"}',
             'value_fr' => '{"0":"img-3.webp"}',
             'value_pt' => '{"0":"img-3.webp"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Royal Monday"}',
                'value_es' => '{"0":"Lunes de Reyes"}',
                'value_fr' => '{"0":"Royal Monday"}',
                'value_pt' => '{"0":"Segunda-feira Régia"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The Royal Monday promotion gives you the chance to start the week with a nice bonus. This is a weekly offer that allows you to receive a 50% bonus on your first deposit made on Monday."}',
             'value_es' => '{"0":"La promoción Lunes de Reyes te da la oportunidad de comenzar la semana con un buen bono. Es una oferta semanal que te permite recibir un 50% de bono en tu primer depósito realizado el lunes."}',
             'value_fr' => '{"0":"La promotion Royal Monday vous permet de commencer la semaine avec un bonus agréable. Il s\'agit d\'une offre hebdomadaire qui vous donne droit à un bonus de 50 % sur votre premier dépôt effectué le lundi."}',
             'value_pt' => '{"0":"A promoção Segunda-feira Régia oferece a oportunidade de começar a semana com um ótimo bônus. Trata-se de uma oferta semanal que concede um bônus de 50% no primeiro depósito feito na segunda-feira."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"To qualify, you need to deposit at least €10 and wager the bonus on accumulator bets with a minimum of 3 events, each having odds of at least 1.4."}',
             'value_es' => '{"0":"Para participar, debes depositar un mínimo de 10€ y apostar el bono en combinadas con al menos 3 eventos, donde cada uno tenga una cuota mínima de 1.4."}',
             'value_fr' => '{"0":"Pour en bénéficier, vous devez effectuer un dépôt d’au moins 10 € et miser le bonus sur des paris combinés avec au moins 3 événements, chacun ayant une cote minimale de 1,4."}',
             'value_pt' => '{"0":"Para participar, é necessário depositar pelo menos 10€ e apostar o bônus em acumuladores com no mínimo 3 eventos, cada um com odd mínima de 1.4."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Royal Monday is a great way to kick off the new week with an extra boost!"}',
             'value_es' => '{"0":"¡Lunes de Reyes es una excelente manera de comenzar la semana con un impulso adicional!"}',
             'value_fr' => '{"0":"Royal Monday, c’est une excellente façon de bien commencer la semaine avec un bonus supplémentaire !"}',
             'value_pt' => '{"0":"Segunda-feira Régia é uma excelente forma de começar a semana com um impulso extra!"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
             'value_en' => '{"0":"img-4.webp"}',
             'value_es' => '{"0":"img-4.webp"}',
             'value_fr' => '{"0":"img-4.webp"}',
             'value_pt' => '{"0":"img-4.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 26
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"TOTO"}',
                'value_es' => '{"0":"TOTO"}',
                'value_fr' => '{"0":"TOTO"}',
                'value_pt' => '{"0":"TOTO"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 27
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"TOTO is a classic form of betting where, instead of fixed odds, players compete for a shared prize pool. MelBet offers several TOTO options on a daily basis."}',
             'value_es' => '{"0":"TOTO es una forma clásica de apostar en la que, en lugar de cuotas fijas, los jugadores compiten por un bote común. MelBet ofrece varias opciones de TOTO a diario."}',
             'value_fr' => '{"0":"Le TOTO est une forme classique de pari où, au lieu de cotes fixes, les joueurs se disputent un pot commun. MelBet propose plusieurs options de TOTO chaque jour."}',
             'value_pt' => '{"0":"O TOTO é uma forma clássica de apostas, onde em vez de odds fixas, os jogadores competem por um prêmio acumulado comum. A MelBet oferece várias opções de TOTO diariamente."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 28
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"You can place bets on Football, Hockey, or combine selections from different sports."}',
             'value_es' => '{"0":"Puedes hacer apuestas en Fútbol, Hockey o combinar diferentes deportes en una sola jugada."}',
             'value_fr' => '{"0":"Vous pouvez parier sur le football, le hockey ou faire des combinaisons entre plusieurs sports."}',
             'value_pt' => '{"0":"Pode apostar em Futebol, Hóquei ou criar combinações entre diferentes desportos."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 29
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The prize pool is formed from players’ contributions — the more participants, the higher the total sum. The jackpot can exceed €1,000, and even correctly predicting 10–12 results can lead to a significant payout."}',
             'value_es' => '{"0":"El fondo de premios se forma con los aportes de los jugadores — cuanto más participantes haya, mayor será el premio total. El jackpot puede superar los 1.000 euros, y con 10–12 aciertos ya se pueden obtener ganancias importantes."}',
             'value_fr' => '{"0":"Le fonds de gains est constitué des mises des joueurs — plus il y a de participants, plus la cagnotte est élevée. Le jackpot peut dépasser 1 000 €, et même 10 à 12 bons pronostics peuvent rapporter un gain conséquent."}',
             'value_pt' => '{"0":"O prémio total é formado com os aportes dos jogadores — quanto mais participantes, maior o valor acumulado. O jackpot pode ultrapassar os 1.000 euros, e mesmo com 10–12 palpites corretos, é possível obter um bom lucro."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 30
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
             'value_en' => '{"0":"img-5.webp"}',
             'value_es' => '{"0":"img-5.webp"}',
             'value_fr' => '{"0":"img-5.webp"}',
             'value_pt' => '{"0":"img-5.webp"}',
             'order' => 30
            ]
        );
    }
}
