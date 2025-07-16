<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet offers welcome bonuses, regular promotions for loyal customers, and attractive deals for live casino enthusiasts."}',
             'value_es' => '{"0":"4rabet ofrece bonos de bienvenida, promociones regulares para clientes habituales y ofertas atractivas para los amantes del casino en vivo."}',
             'value_fr' => '{"0":"4rabet propose des bonus de bienvenue, des promotions régulières pour les clients fidèles et des offres avantageuses pour les amateurs de casino en direct."}',
             'value_pt' => '{"0":"A 4rabet oferece bônus de boas-vindas, promoções regulares para clientes fiéis e ofertas vantajosas para os fãs de cassino ao vivo."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"A promo code allows you to increase your starting capital right at the registration stage, and we’ve prepared an exclusive promo code for you: :promocode. In this review, we’ll cover all the key aspects of 4rabet’s bonus program and explain how to claim an enhanced welcome bonus from 4rabet."}',
             'value_es' => '{"0":"Un código promocional te permite aumentar tu capital inicial desde el momento del registro, y hemos preparado un código exclusivo para ti: :promocode. En esta reseña, te contaremos todos los aspectos clave del programa de bonificaciones de 4rabet y cómo obtener un bono de bienvenida mejorado."}',
             'value_fr' => '{"0":"Un code promo vous permet d’augmenter votre capital de départ dès l’inscription, et nous avons préparé un code exclusif pour vous : :promocode. Dans cet article, nous vous présenterons tous les aspects clés du programme de bonus de 4rabet et comment obtenir un bonus de bienvenue majoré."}',
             'value_pt' => '{"0":"Um código promocional permite aumentar seu capital inicial já no momento do cadastro, e preparamos um código exclusivo para você: :promocode. Neste artigo, explicaremos todos os aspectos importantes do programa de bônus da 4rabet e como obter um bônus de boas-vindas ampliado."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the 4rabet promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de 4rabet?"}',
                'value_fr' => '{"0":"Comment profiter du code promo 4rabet ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da 4rabet?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The promo code :promocode for 4rabet can be used directly during the account creation process."}',
             'value_es' => '{"0":"El código promocional :promocode para 4rabet se puede usar directamente durante el proceso de creación de la cuenta."}',
             'value_fr' => '{"0":"Le code promo :promocode pour 4rabet peut être utilisé directement lors de la création du compte."}',
             'value_pt' => '{"0":"O código promocional :promocode da 4rabet pode ser usado diretamente durante a criação da conta."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"You can register using your email, phone number, or with one click via social media. Each registration method includes a dedicated «Promo Code» field where you need to enter the code :promocode."}',
             'value_es' => '{"0":"Puedes registrarte usando tu correo electrónico, número de teléfono o con un solo clic a través de redes sociales. Cada opción de registro incluye un campo específico llamado «Código Promocional», donde debes introducir el código :promocode."}',
             'value_fr' => '{"0":"Vous pouvez vous inscrire via votre e-mail, votre numéro de téléphone ou en un clic via les réseaux sociaux. Chaque méthode d\'inscription contient un champ dédié « Code promo » où vous devez entrer le code :promocode."}',
             'value_pt' => '{"0":"Você pode se registrar usando seu e-mail, número de telefone ou com um clique pelas redes sociais. Cada método de registro possui um campo específico «Código Promocional» onde você deve inserir o código :promocode."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The registration takes no more than two minutes. After verifying your phone or email, you will be redirected to your profile, where the enhanced welcome bonus is automatically activated."}',
             'value_es' => '{"0":"El proceso de registro no toma más de dos minutos. Después de verificar tu teléfono o correo electrónico, ingresarás a tu perfil, donde el bono de bienvenida aumentado se activará automáticamente."}',
             'value_fr' => '{"0":"L\'inscription prend moins de deux minutes. Après la vérification de votre téléphone ou e-mail, vous accéderez à votre profil, où le bonus de bienvenue amélioré sera activé automatiquement."}',
             'value_pt' => '{"0":"O registro leva no máximo dois minutos. Após a verificação do telefone ou e-mail, você será direcionado ao seu perfil, onde o bônus de boas-vindas ampliado será ativado automaticamente."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at 4rabet?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en 4rabet?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur 4rabet ?"}',
                'value_pt' => '{"0":"E se você já for registrado na 4rabet?"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet supports regular players through a variety of ongoing promotions. In particular, users can participate in daily and weekly missions, cashback campaigns, and receive deposit bonuses on specific days of the week."}',
             'value_es' => '{"0":"4rabet apoya a los jugadores habituales con una variedad de promociones regulares. En particular, los usuarios pueden participar en misiones diarias y semanales, promociones con reembolsos y recibir bonos por depósitos en días específicos de la semana."}',
             'value_fr' => '{"0":"4rabet soutient ses joueurs réguliers à travers une série d’offres promotionnelles permanentes. Les utilisateurs peuvent notamment participer à des missions quotidiennes et hebdomadaires, bénéficier de promotions avec cashback, ainsi que de bonus de dépôt certains jours de la semaine."}',
             'value_pt' => '{"0":"A 4rabet oferece suporte aos jogadores frequentes por meio de uma série de promoções regulares. Os usuários podem participar de missões diárias e semanais, campanhas de cashback e receber bônus de depósito em dias específicos da semana."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"All offers are published in the dedicated «Promotions» section on the website, where you can find details about eligibility, duration, and other terms."}',
             'value_es' => '{"0":"Todas las ofertas se publican en la sección especial de «Promociones» del sitio web, donde se puede consultar información sobre las condiciones, duración y demás detalles."}',
             'value_fr' => '{"0":"Toutes les offres sont publiées dans la section dédiée « Promotions » du site, où vous trouverez les conditions d’éligibilité, la durée de validité et d’autres détails."}',
             'value_pt' => '{"0":"Todas as promoções estão disponíveis na seção «Promoções» do site, onde você pode encontrar informações sobre os requisitos, validade e outros detalhes."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"At the time of writing, no no-deposit bonuses are offered. However, the bookmaker occasionally runs temporary promotions with free bets that do not require a deposit. To avoid missing out, it’s recommended to enable push notifications and follow 4rabet’s official social media pages."}',
             'value_es' => '{"0":"Al momento de redactar este análisis, no se ofrecen bonos sin depósito. Sin embargo, la casa de apuestas ocasionalmente lanza promociones temporales con apuestas gratis sin necesidad de hacer un depósito. Para no perdértelas, se recomienda activar las notificaciones push y seguir las páginas oficiales de 4rabet en redes sociales."}',
             'value_fr' => '{"0":"Au moment de la rédaction de cet article, aucun bonus sans dépôt n’est proposé. Toutefois, le bookmaker organise parfois des promotions temporaires avec des paris gratuits sans exigence de dépôt. Pour ne rien manquer, il est conseillé d’activer les notifications push et de suivre les pages officielles de 4rabet sur les réseaux sociaux."}',
             'value_pt' => '{"0":"No momento da redação deste artigo, não há bônus sem depósito disponíveis. No entanto, a casa de apostas ocasionalmente realiza promoções temporárias com apostas grátis que não exigem depósito. Para não perder essas ofertas, é recomendável ativar as notificações push e seguir as páginas oficiais da 4rabet nas redes sociais."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"4rabet Casino Welcome Offer"}',
                'value_es' => '{"0":"Oferta de bienvenida del casino 4rabet"}',
                'value_fr' => '{"0":"Offre de bienvenue du casino 4rabet"}',
                'value_pt' => '{"0":"Oferta de boas-vindas do cassino 4rabet"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"For players planning to play online casino games, 4rabet offers a special welcome bonus on the first deposit. The bonus typically doubles or even triples the deposit amount. In some cases, it also includes free spins for specific slot games."}',
             'value_es' => '{"0":"Para los jugadores que planean jugar en el casino en línea, 4rabet ofrece un bono de bienvenida especial en el primer depósito. Este bono suele duplicar o incluso triplicar la cantidad depositada. En algunos casos, también se incluyen giros gratis para determinadas tragamonedas."}',
             'value_fr' => '{"0":"Pour les joueurs souhaitant jouer au casino en ligne, 4rabet propose un bonus de bienvenue spécial sur le premier dépôt. Ce bonus permet généralement de doubler, voire tripler, le montant déposé. Dans certains cas, il inclut également des tours gratuits sur des machines à sous spécifiques."}',
             'value_pt' => '{"0":"Para os jogadores que pretendem jogar no cassino online, a 4rabet oferece um bônus de boas-vindas especial no primeiro depósito. Esse bônus geralmente dobra ou até triplica o valor depositado. Em algumas versões, também inclui rodadas grátis para slots específicos."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To activate this bonus, you need to:"}',
             'value_es' => '{"0":"Para activar este bono, debes:"}',
             'value_fr' => '{"0":"Pour activer ce bonus, vous devez :"}',
             'value_pt' => '{"0":"Para ativar esse bônus, você precisa:"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"1. Register on the platform."}',
             'value_es' => '{"0":"1. Regístrate en la plataforma."}',
             'value_fr' => '{"0":"1. Inscrivez-vous sur la plateforme."}',
             'value_pt' => '{"0":"1. Registre-se na plataforma."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"2. Enter the promo code :promocode."}',
             'value_es' => '{"0":"2. Introduce el código promocional :promocode."}',
             'value_fr' => '{"0":"2. Saisissez le code promo :promocode."}',
             'value_pt' => '{"0":"2. Insira o código promocional :promocode."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 18
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"3. Select the bonus type: «Casino Bonus»."}',
             'value_es' => '{"0":"3. Selecciona el tipo de bono: «Bono de Casino»."}',
             'value_fr' => '{"0":"3. Choisissez le type de bonus : « Bonus Casino »."}',
             'value_pt' => '{"0":"3. Selecione o tipo de bônus: «Bônus de Cassino»."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 19
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4. Make a deposit."}',
             'value_es' => '{"0":"4. Realiza un depósito."}',
             'value_fr' => '{"0":"4. Effectuez un dépôt."}',
             'value_pt' => '{"0":"4. Faça um depósito."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 20
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"After that, the bonus funds are credited to a separate balance and can be used in games. The wagering requirement is fixed, usually x35. You must also complete the wagering within 14 days."}',
             'value_es' => '{"0":"Después de eso, los fondos del bono se acreditan en un saldo separado y pueden utilizarse en los juegos. El requisito de apuesta es fijo, normalmente x35. También debes cumplir con el rollover en un plazo de 14 días."}',
             'value_fr' => '{"0":"Ensuite, les fonds bonus sont crédités sur un solde séparé et peuvent être utilisés dans les jeux. Le wagering est fixe, généralement x35. Vous devez également le remplir dans un délai de 14 jours."}',
             'value_pt' => '{"0":"Após isso, os fundos de bônus são creditados em um saldo separado e podem ser usados nos jogos. O requisito de aposta é fixo, geralmente x35. Você também deve cumpri-lo dentro de 14 dias."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 21
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 22
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Daily and Weekly Missions"}',
                'value_es' => '{"0":"Misiones Diarias y Semanales"}',
                'value_fr' => '{"0":"Missions Quotidiennes et Hebdomadaires"}',
                'value_pt' => '{"0":"Missões Diárias e Semanais"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 23
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"This is a set of tasks that, once completed, grant the player guaranteed bonuses: cashback, free bets, or free spins. Examples of missions:"}',
             'value_es' => '{"0":"Se trata de un conjunto de tareas que, al completarlas, otorgan al jugador bonos garantizados: reembolsos, apuestas gratis o giros gratis. Ejemplos de misiones:"}',
             'value_fr' => '{"0":"Il s’agit d’un ensemble de missions qui, une fois accomplies, offrent au joueur des bonus garantis : cashback, paris gratuits ou tours gratuits. Exemples de missions :"}',
             'value_pt' => '{"0":"É um conjunto de tarefas que, ao serem concluídas, garantem ao jogador bônus certos: cashback, apostas grátis ou rodadas grátis. Exemplos de missões:"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 24
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'list_v2',
             'value_en' => '{"0":"Place 3 sports bets within a day",
                             "1":"Win 5 times in a row on slots",
                             "2":"Play 10 rounds in the live casino",
                             "3":"Make 3 deposits within a week"}',
             'value_es' => '{"0":"Realizar 3 apuestas deportivas en un día",
                             "1":"Ganar 5 veces seguidas en tragamonedas",
                             "2":"Jugar 10 rondas en el casino en vivo",
                             "3":"Hacer 3 depósitos en una semana"}',
             'value_fr' => '{"0":"Placer 3 paris sportifs en une journée",
                             "1":"Gagner 5 fois d’affilée sur les machines à sous",
                             "2":"Jouer 10 manches dans le casino en direct",
                             "3":"Effectuer 3 dépôts en une semaine"}',
             'value_pt' => '{"0":"Fazer 3 apostas esportivas em um dia",
                             "1":"Vencer 5 vezes seguidas nos slots",
                             "2":"Jogar 10 rodadas no cassino ao vivo",
                             "3":"Fazer 3 depósitos em uma semana"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 25
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"All missions have clear terms and time limits. Tasks are updated regularly, and their completion is automatically tracked in the user’s profile."}',
             'value_es' => '{"0":"Todas las misiones tienen condiciones claras y límites de tiempo. Las tareas se actualizan regularmente y su cumplimiento se rastrea automáticamente en el perfil del usuario."}',
             'value_fr' => '{"0":"Toutes les missions ont des conditions claires et des limites de temps. Les tâches sont mises à jour régulièrement et leur accomplissement est suivi automatiquement dans le profil de l’utilisateur."}',
             'value_pt' => '{"0":"Todas as missões têm condições claras e limites de tempo. As tarefas são atualizadas regularmente e seu cumprimento é monitorado automaticamente no perfil do usuário."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 26
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 26
            ]
        );
    }
}
