<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET is a modern international bookmaker platform that attracts players not only with a large number of betting options but also with a lucrative bonus policy. Here you will find welcome bonuses, regular promotions, cashback, and special loyalty programs. We recommend taking advantage of the welcome offer to get 100% on your deposit + 120 free spins. To do this, simply use our promo code: :promocode."}',
             'value_es' => '{"0":"20BET es una plataforma internacional de apuestas moderna que atrae a los jugadores no solo con una gran cantidad de opciones de apuestas, sino también con una política de bonos atractiva. Aquí encontrarás bonos de bienvenida, promociones regulares, reembolsos y programas especiales de lealtad. Recomendamos aprovechar la oferta de bienvenida para obtener un 100% en tu depósito + 120 giros gratis. Para hacerlo, simplemente usa nuestro código promocional: :promocode."}',
             'value_fr' => '{"0":"20BET est une plateforme de paris internationale moderne qui attire les joueurs non seulement par un grand nombre d’options de paris, mais aussi par une politique de bonus avantageuse. Vous y trouverez des bonus de bienvenue, des promotions régulières, des cashback et des programmes de fidélité spéciaux. Nous vous recommandons de profiter de l’offre de bienvenue pour obtenir 100 % sur votre dépôt + 120 tours gratuits. Pour cela, il suffit d’utiliser notre code promo : :promocode."}',
             'value_pt' => '{"0":"20BET é uma plataforma internacional moderna de apostas que atrai jogadores não apenas com uma grande variedade de opções de apostas, mas também com uma política de bônus vantajosa. Aqui você encontrará bônus de boas-vindas, promoções regulares, cashback e programas especiais de fidelidade. Recomendamos aproveitar a oferta de boas-vindas para receber 100% no seu depósito + 120 rodadas grátis. Para isso, basta usar nosso código promocional: :promocode."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a detailed look at the bonuses offered by 20BET, how to use them, the conditions you should know, and of course, how to use the promo code :promocode."}',
             'value_es' => '{"0":"En esta reseña, analizaremos en detalle los bonos que ofrece 20BET, cómo utilizarlos, las condiciones que debes conocer y, por supuesto, cómo usar el código promocional :promocode."}',
             'value_fr' => '{"0":"Dans cet avis, nous examinerons en détail les bonus offerts par 20BET, comment les utiliser, les conditions à connaître, et bien sûr comment utiliser le code promo :promocode."}',
             'value_pt' => '{"0":"Nesta análise, vamos detalhar os bônus oferecidos pela 20BET, como usá-los, as condições que você deve conhecer e, claro, como usar o código promocional :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the 20BET promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de 20BET?"}',
                'value_fr' => '{"0":"Comment profiter du code promo 20BET ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da 20BET?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Registration on 20BET takes little time. After going to the official website, click the SIGN UP button at the top, then you need to fill out a standard three-step registration form."}',
             'value_es' => '{"0":"El registro en 20BET toma poco tiempo. Después de ingresar al sitio web oficial, haga clic en el botón SIGN UP en la parte superior, luego debe completar un formulario de registro estándar en tres pasos."}',
             'value_fr' => '{"0":"L’inscription sur 20BET prend peu de temps. Après être allé sur le site officiel, cliquez sur le bouton SIGN UP en haut, puis vous devez remplir un formulaire d’inscription standard en trois étapes."}',
             'value_pt' => '{"0":"O registro na 20BET leva pouco tempo. Após acessar o site oficial, clique no botão SIGN UP no topo, depois você precisa preencher um formulário padrão de registro em três etapas."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"1. First, choose where you will use the bonus funds — for sports betting or in the casino. Then select your country, enter your email, and create a password according to the recommendations. At this stage, enter our promo code :promocode. Now you can proceed to the second step."}',
             'value_es' => '{"0":"1. Primero, elija dónde utilizará los fondos del bono — para apuestas deportivas o en el casino. Luego seleccione su país, ingrese su correo electrónico y cree una contraseña según las recomendaciones. En esta etapa, ingrese nuestro código promocional :promocode. Ahora puede pasar al segundo paso."}',
             'value_fr' => '{"0":"1. Tout d’abord, choisissez où vous utiliserez les fonds du bonus — pour les paris sportifs ou au casino. Ensuite, sélectionnez votre pays, saisissez votre e-mail et créez un mot de passe selon les recommandations. À cette étape, indiquez notre code promo :promocode. Vous pouvez maintenant passer à la deuxième étape."}',
             'value_pt' => '{"0":"1. Primeiro, escolha onde você usará os fundos do bônus — para apostas esportivas ou no cassino. Em seguida, selecione seu país, insira seu e-mail e crie uma senha conforme as recomendações. Nesta etapa, insira nosso código promocional :promocode. Agora você pode passar para o segundo passo."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"2. In the second step, you will need to select the currency, provide your first and last name, gender, and date of birth. After that, you can move on to the final step."}',
             'value_es' => '{"0":"2. En el segundo paso, deberá seleccionar la moneda, proporcionar su nombre y apellido, género y fecha de nacimiento. Después de eso, puede pasar al último paso."}',
             'value_fr' => '{"0":"2. À la deuxième étape, vous devrez choisir la devise, indiquer votre prénom et nom, votre sexe et votre date de naissance. Après cela, vous pouvez passer à la dernière étape."}',
             'value_pt' => '{"0":"2. No segundo passo, você deverá escolher a moeda, informar seu nome e sobrenome, gênero e data de nascimento. Depois disso, você pode passar para a última etapa."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"3. In the third step, provide your address, postal code, city of residence, and phone number. Click Register."}',
             'value_es' => '{"0":"3. En el tercer paso, proporcione su dirección, código postal, ciudad de residencia y número de teléfono. Haga clic en Registrarse."}',
             'value_fr' => '{"0":"3. À la troisième étape, indiquez votre adresse, code postal, ville de résidence et numéro de téléphone. Cliquez sur S’inscrire."}',
             'value_pt' => '{"0":"3. No terceiro passo, informe seu endereço, código postal, cidade de residência e número de telefone. Clique em Registrar."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"After completing the registration, you need to verify your account via email or SMS. Only after verification will the user be able to fully use the bonuses and place bets. After making a deposit, the increased welcome bonus will be automatically credited thanks to our promo code."}',
             'value_es' => '{"0":"Después de completar el registro, debe verificar su cuenta por correo electrónico o SMS. Solo después de la verificación el usuario podrá utilizar completamente los bonos y realizar apuestas. Tras realizar un depósito, el bono de bienvenida aumentado se acreditará automáticamente gracias a nuestro código promocional."}',
             'value_fr' => '{"0":"Après avoir terminé l’inscription, vous devez confirmer votre compte par e-mail ou SMS. Ce n’est qu’après la vérification que l’utilisateur pourra pleinement utiliser les bonus et placer des paris. Après le dépôt, le bonus de bienvenue augmenté sera automatiquement crédité grâce à notre code promo."}',
             'value_pt' => '{"0":"Após concluir o registro, é necessário confirmar a conta via e-mail ou SMS. Somente após a verificação o usuário poderá utilizar plenamente os bônus e fazer apostas. Após o depósito, o bônus de boas-vindas aumentado será creditado automaticamente graças ao nosso código promocional."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Also, please note that during registration it is necessary to provide accurate information to avoid problems with identity verification in the future."}',
             'value_es' => '{"0":"También tenga en cuenta que durante el registro es necesario proporcionar datos verídicos para evitar problemas con la verificación de identidad en el futuro."}',
             'value_fr' => '{"0":"Veuillez également noter qu’il est nécessaire de fournir des informations exactes lors de l’inscription afin d’éviter des problèmes de vérification d’identité à l’avenir."}',
             'value_pt' => '{"0":"Também observe que é necessário fornecer dados verdadeiros durante o registro para evitar problemas futuros com a verificação de identidade."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at 20BET?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en 20BET?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur 20BET ?"}',
                'value_pt' => '{"0":"E se você já for registrado na 20BET?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET regularly rewards loyal customers with various promotions and bonuses. After the initial welcome package, new players can expect cashbacks, reload bonuses, as well as participation in special tournaments and raffles."}',
             'value_es' => '{"0":"20BET regularmente recompensa a sus clientes habituales con diversas promociones y bonos. Después del paquete de bienvenida inicial, los nuevos jugadores pueden esperar reembolsos, bonos por recargas, así como participar en torneos y sorteos especiales."}',
             'value_fr' => '{"0":"20BET récompense régulièrement ses clients fidèles avec diverses promotions et bonus. Après le pack de bienvenue initial, les nouveaux joueurs peuvent s’attendre à des cashbacks, des bonus de recharge, ainsi qu’à la participation à des tournois et tirages spéciaux."}',
             'value_pt' => '{"0":"A 20BET recompensa regularmente os clientes fiéis com várias promoções e bónus. Após o pacote de boas-vindas inicial, os novos jogadores podem contar com cashbacks, bónus de recarga, bem como participação em torneios e sorteios especiais."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"For active players, individual offers are available, such as personal promo codes sent via email or available in the personal account. The bookmaker also runs promotions dedicated to specific sporting events, allowing players to increase their winnings or receive additional bonuses."}',
             'value_es' => '{"0":"Para los jugadores activos, hay ofertas individuales disponibles, como códigos promocionales personales enviados por correo electrónico o disponibles en la cuenta personal. Además, el operador organiza promociones dedicadas a eventos deportivos específicos, lo que permite aumentar las ganancias o recibir bonos adicionales."}',
             'value_fr' => '{"0":"Pour les joueurs actifs, des offres individuelles sont disponibles, telles que des codes promo personnels envoyés par e-mail ou disponibles dans le compte personnel. Le bookmaker organise également des promotions dédiées à certains événements sportifs, permettant d’augmenter les gains ou d’obtenir des bonus supplémentaires."}',
             'value_pt' => '{"0":"Para jogadores ativos, estão disponíveis ofertas individuais, como códigos promocionais pessoais enviados por e-mail ou disponíveis na conta pessoal. O bookmaker também realiza promoções dedicadas a eventos esportivos específicos, permitindo aumentar os ganhos ou receber bónus adicionais."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"At the time of this review, 20BET does not offer classic no deposit bonuses. However, occasionally you can receive small free spins or free bets as part of promotions or tournaments that do not require depositing your own funds. Therefore, it is worth following updates in our reviews or the official 20BET page to not miss out on profitable offers."}',
             'value_es' => '{"0":"Al momento de esta reseña, 20BET no ofrece bonos clásicos sin depósito. Sin embargo, ocasionalmente puedes obtener pequeños giros gratis o apuestas gratuitas dentro de promociones o torneos que no requieren depositar tus propios fondos. Por lo tanto, vale la pena seguir las actualizaciones de nuestras reseñas o la página oficial de 20BET para no perder ofertas beneficiosas."}',
             'value_fr' => '{"0":"Au moment de cette revue, 20BET n’offre pas de bonus sans dépôt classiques. Cependant, il est parfois possible d’obtenir de petits tours gratuits ou des paris gratuits dans le cadre de promotions ou de tournois ne nécessitant pas de déposer vos propres fonds. Il est donc conseillé de suivre les mises à jour de nos revues ou la page officielle de 20BET pour ne pas manquer les offres avantageuses."}',
             'value_pt' => '{"0":"No momento desta avaliação, a 20BET não oferece bónus clássicos sem depósito. No entanto, ocasionalmente, pode receber pequenos rodadas grátis ou apostas gratuitas em promoções ou torneios que não exigem o depósito dos seus próprios fundos. Portanto, vale a pena acompanhar as atualizações das nossas análises ou a página oficial da 20BET para não perder ofertas vantajosas."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Forecasts"}',
                'value_es' => '{"0":"Pronósticos"}',
                'value_fr' => '{"0":"Pronostics"}',
                'value_pt' => '{"0":"Previsões"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"This is a unique promotion from 20BET focused on predicting the outcomes of sporting events. Players can participate in forecast contests where correct predictions are rewarded with bonuses in the form of free bets or additional funds credited to their account."}',
             'value_es' => '{"0":"Esta es una promoción única de 20BET enfocada en predecir los resultados de eventos deportivos. Los jugadores pueden participar en concursos de pronósticos donde las respuestas correctas son recompensadas con bonos en forma de apuestas gratuitas o fondos adicionales en su cuenta."}',
             'value_fr' => '{"0":"C’est une promotion unique de 20BET axée sur la prévision des résultats des événements sportifs. Les joueurs peuvent participer à des concours de pronostics où les bonnes réponses sont récompensées par des bonus sous forme de paris gratuits ou de fonds supplémentaires crédités sur leur compte."}',
             'value_pt' => '{"0":"Esta é uma promoção única da 20BET focada em prever os resultados de eventos esportivos. Os jogadores podem participar de concursos de previsões, onde as respostas corretas são recompensadas com bônus na forma de apostas grátis ou fundos adicionais creditados em suas contas."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Saturday reload bonus"}',
                'value_es' => '{"0":"Bono de recarga del sábado"}',
                'value_fr' => '{"0":"Bonus de dépôt du samedi"}',
                'value_pt' => '{"0":"Bónus de recarga ao sábado"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 20
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"To activate this bonus, you simply need to make a deposit of at least €10 on Saturday. Upon making the deposit, the player will receive an additional 50% of the deposit amount credited to their account."}',
             'value_es' => '{"0":"Para activar este bono, simplemente debe realizar un depósito de al menos 10€ el sábado. Al hacer el depósito, el jugador recibirá un 50% adicional del importe depositado en su cuenta."}',
             'value_fr' => '{"0":"Pour activer ce bonus, il suffit de déposer au moins 10€ un samedi. Lors du dépôt, le joueur reçoit un bonus supplémentaire de 50% du montant déposé sur son compte."}',
             'value_pt' => '{"0":"Para ativar este bônus, basta fazer um depósito mínimo de €10 no sábado. Ao efetuar o depósito, o jogador receberá 50% adicionais do valor depositado na sua conta."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 21
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Please note that in order to withdraw the funds, wagering requirements must be met. Casino players must wager 40x the bonus amount. Sports bettors must place bets on at least three events, each with odds of no less than 1.50."}',
             'value_es' => '{"0":"Tenga en cuenta que, para poder retirar los fondos, se deben cumplir los requisitos de apuesta. Los jugadores de casino deben apostar 40 veces el valor del bono. Los apostadores deportivos deben realizar apuestas en al menos tres eventos, cada uno con una cuota mínima de 1.50."}',
             'value_fr' => '{"0":"Veuillez noter que pour retirer les fonds, les conditions de mise doivent être remplies. Les joueurs de casino doivent miser 40 fois le montant du bonus. Les parieurs sportifs doivent placer des paris sur au moins trois événements, chacun ayant une cote minimale de 1.50."}',
             'value_pt' => '{"0":"Observe que, para sacar os fundos, é necessário cumprir os requisitos de apostas. Jogadores de cassino devem apostar 40 vezes o valor do bônus. Já os apostadores esportivos precisam fazer apostas em pelo menos três eventos, cada um com odds mínimas de 1.50."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Casino VIP Program"}',
                'value_es' => '{"0":"Programa Vip De 20BET"}',
                'value_fr' => '{"0":"Programme Vip De 20BET"}',
                'value_pt' => '{"0":"Programa Vip Da 20BET"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The Casino VIP Program is a loyalty scheme for casino players at 20BET. It allows players to earn points for every casino bet, which can later be exchanged for cash, free spins, or other rewards."}',
             'value_es' => '{"0":"El Programa VIP de Casino es un sistema de fidelidad para los jugadores de casino en 20BET. Los jugadores acumulan puntos por cada apuesta en el casino, que luego pueden canjear por dinero, giros gratis u otras recompensas."}',
             'value_fr' => '{"0":"Le Programme VIP Casino est un programme de fidélité destiné aux joueurs de casino sur 20BET. Il permet de gagner des points pour chaque mise au casino, échangeables ensuite contre de l’argent, des free spins ou d’autres récompenses."}',
             'value_pt' => '{"0":"O Programa VIP de Cassino é um sistema de fidelidade para os jogadores do cassino na 20BET. Os jogadores acumulam pontos por cada aposta feita no cassino, que podem ser trocados por dinheiro, rodadas grátis ou outras recompensas."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The VIP program includes several levels — the more actively a user plays, the higher their level and the better the benefits: higher cashback rates, exclusive bonuses, and invitations to special tournaments."}',
             'value_es' => '{"0":"El programa VIP incluye varios niveles: cuanto más activo sea el jugador, mayor será su nivel y mejores serán los beneficios, como reembolsos más altos, bonos exclusivos y acceso a torneos especiales."}',
             'value_fr' => '{"0":"Le programme VIP comporte plusieurs niveaux : plus le joueur est actif, plus son niveau est élevé, avec de meilleurs avantages tels que des cashback plus importants, des bonus exclusifs et des invitations à des tournois spéciaux."}',
             'value_pt' => '{"0":"O programa VIP possui vários níveis — quanto mais ativo o jogador, maior o seu nível e melhores os benefícios: maiores percentuais de cashback, bônus exclusivos e convites para torneios especiais."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 26
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 26
            ]
        );
    }
}
