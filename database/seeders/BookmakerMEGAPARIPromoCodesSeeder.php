<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI is a modern international bookmaker that offers not only a wide range of sports betting and gambling options but also an attractive bonus program. Thanks to regular promotions, promo codes, and special offers, you can always count on increased winnings."}',
             'value_es' => '{"0":"MEGAPARI es una casa de apuestas internacional moderna que ofrece no solo una amplia variedad de apuestas deportivas y juegos de azar, sino también un programa de bonos atractivo. Gracias a promociones regulares, códigos promocionales y ofertas especiales, siempre puedes contar con ganancias aumentadas."}',
             'value_fr' => '{"0":"MEGAPARI est un bookmaker international moderne qui propose non seulement un large choix de paris sportifs et de jeux d’argent, mais aussi un programme de bonus attractif. Grâce à des promotions régulières, des codes promo et des offres spéciales, vous pouvez toujours compter sur des gains accrus."}',
             'value_pt' => '{"0":"MEGAPARI é uma casa de apostas internacional moderna que oferece não apenas uma ampla variedade de apostas esportivas e jogos de azar, mas também um programa de bônus atraente. Graças a promoções regulares, códigos promocionais e ofertas especiais, você sempre pode contar com ganhos aumentados."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will cover all the main bonus offers from MEGAPARI, including our exclusive promo code: :promocode, as well as ongoing and temporary promotions that help boost your winnings and make betting more profitable."}',
             'value_es' => '{"0":"En esta reseña, revisaremos todas las principales ofertas de bonos de MEGAPARI, incluyendo nuestro código promocional exclusivo: :promocode, así como promociones permanentes y temporales que ayudan a aumentar tus ganancias y hacer que las apuestas sean más rentables."}',
             'value_fr' => '{"0":"Dans cet avis, nous examinerons toutes les principales offres de bonus de MEGAPARI, y compris notre code promo exclusif : :promocode, ainsi que les promotions permanentes et temporaires qui vous aideront à augmenter vos gains et à rendre les paris plus avantageux."}',
             'value_pt' => '{"0":"Nesta análise, cobriremos todas as principais ofertas de bônus da MEGAPARI, incluindo nosso código promocional exclusivo: :promocode, bem como promoções contínuas e temporárias que ajudam a aumentar seus ganhos e tornar as apostas mais lucrativas."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the MEGAPARI promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de MEGAPARI?"}',
                'value_fr' => '{"0":"Comment profiter du code promo MEGAPARI ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da MEGAPARI?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
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
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"You can register at MEGAPARI through the website or mobile app. To use our promo code :promocode when creating an account, enter the valid promo code in the designated field during registration. This will activate a special enhanced bonus that you can use for sports betting or casino games."}',
             'value_es' => '{"0":"Puedes registrarte en MEGAPARI a través del sitio web o la aplicación móvil. Para usar nuestro código promocional :promocode al crear una cuenta, debes ingresar el código válido en el campo correspondiente durante el registro. Esto activará un bono especial mejorado que podrás usar en apuestas deportivas o en el casino."}',
             'value_fr' => '{"0":"Vous pouvez vous inscrire sur MEGAPARI via le site web ou l’application mobile. Pour utiliser notre code promo :promocode lors de la création de votre compte, saisissez le code promo valide dans le champ prévu à cet effet lors de l’inscription. Cela activera un bonus spécial amélioré que vous pourrez utiliser pour les paris sportifs ou au casino."}',
             'value_pt' => '{"0":"Você pode se registrar na MEGAPARI pelo site ou pelo aplicativo móvel. Para usar nosso código promocional :promocode ao criar uma conta, insira o código válido no campo correspondente durante o registro. Isso ativará um bônus especial melhorado que você poderá usar para apostas esportivas ou jogos de cassino."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"So, let’s take a closer look at the registration process on the website:"}',
             'value_es' => '{"0":"Así que, veamos más en detalle el proceso de registro en el sitio web:"}',
             'value_fr' => '{"0":"Examinons donc de plus près le processus d’inscription sur le site :"}',
             'value_pt' => '{"0":"Então, vamos analisar mais detalhadamente o processo de registro no site:"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the website and click the Register button in the top right corner. The registration form will appear."}',
             'value_es' => '{"0":"1. Abre el sitio web y haz clic en el botón Registrarse en la esquina superior derecha. Aparecerá el formulario de registro."}',
             'value_fr' => '{"0":"1. Ouvrez le site et cliquez sur le bouton S’inscrire en haut à droite. Le formulaire d’inscription apparaîtra."}',
             'value_pt' => '{"0":"1. Abra o site e clique no botão Registrar no canto superior direito. O formulário de registro aparecerá."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"2. Choose a convenient registration method — by phone, email, or via social networks."}',
             'value_es' => '{"0":"2. Elige un método de registro conveniente: por teléfono, correo electrónico o a través de redes sociales."}',
             'value_fr' => '{"0":"2. Choisissez une méthode d’inscription pratique — par téléphone, e-mail ou via les réseaux sociaux."}',
             'value_pt' => '{"0":"2. Escolha um método de registro conveniente — por telefone, e-mail ou através das redes sociais."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"3. Select how you want to use the bonus funds: in the casino, for sports betting, or you can receive free bets."}',
             'value_es' => '{"0":"3. Selecciona cómo deseas usar los fondos del bono: en el casino, para apuestas deportivas o puedes recibir apuestas gratuitas."}',
             'value_fr' => '{"0":"3. Sélectionnez comment vous souhaitez utiliser les fonds bonus : au casino, pour les paris sportifs, ou vous pouvez recevoir des paris gratuits."}',
             'value_pt' => '{"0":"3. Selecione como deseja usar os fundos do bônus: no cassino, para apostas esportivas, ou você pode receber apostas grátis."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"4. Choose the currency, enter your phone number, email, and create a password."}',
             'value_es' => '{"0":"4. Elige la moneda, ingresa tu número de teléfono, correo electrónico y crea una contraseña."}',
             'value_fr' => '{"0":"4. Choisissez la devise, saisissez votre numéro de téléphone, e-mail et créez un mot de passe."}',
             'value_pt' => '{"0":"4. Escolha a moeda, insira seu número de telefone, e-mail e crie uma senha."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"5. Enter the promo code :promocode in the promo code field."}',
             'value_es' => '{"0":"5. Introduce el código promocional :promocode en el campo correspondiente."}',
             'value_fr' => '{"0":"5. Saisissez le code promo :promocode dans le champ prévu à cet effet."}',
             'value_pt' => '{"0":"5. Insira o código promocional :promocode no campo indicado."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"6. Confirm your registration."}',
             'value_es' => '{"0":"6. Confirma tu registro."}',
             'value_fr' => '{"0":"6. Confirmez votre inscription."}',
             'value_pt' => '{"0":"6. Confirme seu registro."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"7. Make your first deposit and receive an enhanced welcome bonus."}',
             'value_es' => '{"0":"7. Realiza tu primer depósito y recibe un bono de bienvenida mejorado."}',
             'value_fr' => '{"0":"7. Effectuez votre premier dépôt et recevez un bonus de bienvenue amélioré."}',
             'value_pt' => '{"0":"7. Faça seu primeiro depósito e receba um bônus de boas-vindas aprimorado."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at MEGAPARI?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en MEGAPARI?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur MEGAPARI ?"}',
                'value_pt' => '{"0":"E se você já for registrado na MEGAPARI?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI cares not only about new players but also about regular users, regularly offering them interesting bonuses and promotions. Registered users can receive cashback, reload bonuses, and participate in tournaments and lotteries with prize pools."}',
             'value_es' => '{"0":"MEGAPARI se preocupa no solo por los nuevos jugadores, sino también por los usuarios habituales, ofreciéndoles regularmente bonos y promociones interesantes. Los usuarios registrados pueden recibir reembolsos, bonos por recargas y participar en torneos y loterías con premios."}',
             'value_fr' => '{"0":"MEGAPARI prend soin non seulement des nouveaux joueurs, mais aussi des joueurs réguliers, en leur proposant régulièrement des bonus et promotions intéressants. Les utilisateurs enregistrés peuvent bénéficier de cashback, de bonus de rechargement et participer à des tournois et loteries avec des cagnottes."}',
             'value_pt' => '{"0":"A MEGAPARI se preocupa não apenas com os novos jogadores, mas também com os usuários regulares, oferecendo regularmente bônus e promoções interessantes. Usuários registrados podem receber cashback, bônus de recarga e participar de torneios e loterias com prêmios."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"At the time of this review, MEGAPARI does not offer no-deposit bonuses. However, temporary promotions may occasionally appear, and regular users can receive free bets or free spins without making a deposit."}',
             'value_es' => '{"0":"En el momento de esta reseña, MEGAPARI no ofrece bonos sin depósito. Sin embargo, ocasionalmente pueden aparecer promociones temporales, y los usuarios habituales pueden recibir apuestas gratuitas o tiradas gratis sin realizar un depósito."}',
             'value_fr' => '{"0":"Au moment de cette revue, MEGAPARI ne propose pas de bonus sans dépôt. Cependant, des promotions temporaires peuvent parfois apparaître, et les utilisateurs réguliers peuvent recevoir des paris gratuits ou des tours gratuits sans dépôt."}',
             'value_pt' => '{"0":"No momento desta análise, a MEGAPARI não oferece bônus sem depósito. No entanto, promoções temporárias podem aparecer ocasionalmente, e usuários regulares podem receber apostas grátis ou rodadas grátis sem fazer um depósito."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"It is recommended to regularly check the promotions section on the official website or subscribe to the newsletter to avoid missing such offers."}',
             'value_es' => '{"0":"Se recomienda revisar regularmente la sección de promociones en el sitio web oficial o suscribirse al boletín para no perder estas ofertas."}',
             'value_fr' => '{"0":"Il est conseillé de vérifier régulièrement la section promotions sur le site officiel ou de s’abonner à la newsletter pour ne pas manquer ces offres."}',
             'value_pt' => '{"0":"Recomenda-se verificar regularmente a seção de promoções no site oficial ou assinar a newsletter para não perder essas ofertas."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Your birthday with MEGAPARI!"}',
                'value_es' => '{"0":"¡Su cumpleaños con MEGAPARI!"}',
                'value_fr' => '{"0":"Votre anniversaire avec MEGAPARI !"}',
                'value_pt' => '{"0":"O seu aniversário com a MEGAPARI!"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI gives pleasant surprises to players on their birthday. Your profile must be verified to qualify. On this special day, you can receive a deposit bonus of up to 100% of the amount deposited, additional free spins in the casino, or risk-free bets. Bonus funds do not need to be wagered."}',
             'value_es' => '{"0":"MEGAPARI ofrece sorpresas agradables a los jugadores en su cumpleaños. Es necesario que tu perfil esté verificado. En este día especial, puedes recibir un bono de depósito de hasta el 100% del monto depositado, giros gratis adicionales en el casino o apuestas sin riesgo. No es necesario apostar los fondos del bono."}',
             'value_fr' => '{"0":"MEGAPARI réserve de belles surprises aux joueurs pour leur anniversaire. Votre profil doit être vérifié pour en bénéficier. Ce jour spécial, vous pouvez recevoir un bonus de dépôt pouvant aller jusqu’à 100 % du montant déposé, des tours gratuits supplémentaires au casino ou des paris sans risque. Il n’est pas nécessaire de miser les fonds du bonus."}',
             'value_pt' => '{"0":"A MEGAPARI oferece surpresas agradáveis aos jogadores no dia do seu aniversário. Seu perfil deve estar verificado para se qualificar. Neste dia especial, você pode receber um bônus de depósito de até 100% do valor depositado, rodadas grátis adicionais no cassino ou apostas sem risco. Não é necessário apostar os fundos do bônus."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Mega Booster"}',
                'value_es' => '{"0":"Mega Booster"}',
                'value_fr' => '{"0":"Mega Booster"}',
                'value_pt' => '{"0":"Mega Booster"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Mega Booster is a promotion aimed at increasing winnings on certain sports events or events of the day. During the promotion, odds on selected matches are increased by up to 15%."}',
             'value_es' => '{"0":"Mega Booster es una promoción destinada a aumentar las ganancias en ciertos eventos deportivos o eventos del día. Durante la promoción, las cuotas en los partidos seleccionados aumentan hasta un 15%."}',
             'value_fr' => '{"0":"Mega Booster est une promotion visant à augmenter les gains sur certains événements sportifs ou événements du jour. Pendant la promotion, les cotes sur les matchs sélectionnés sont augmentées jusqu’à 15 %."}',
             'value_pt' => '{"0":"Mega Booster é uma promoção destinada a aumentar os ganhos em determinados eventos esportivos ou eventos do dia. Durante a promoção, as odds em partidas selecionadas são aumentadas em até 15%."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Players can earn additional profits if their predictions are correct. This offer is usually limited by time and the number of events, so it is worth keeping an eye on updates and choosing the best moments to place bets."}',
             'value_es' => '{"0":"Los jugadores pueden obtener beneficios adicionales si sus pronósticos son correctos. Esta oferta suele estar limitada en tiempo y en número de eventos, por lo que vale la pena estar atento a las actualizaciones y elegir los mejores momentos para apostar."}',
             'value_fr' => '{"0":"Les joueurs peuvent obtenir des profits supplémentaires si leurs pronostics sont corrects. Cette offre est généralement limitée dans le temps et le nombre d’événements, il est donc conseillé de suivre les mises à jour et de choisir les meilleurs moments pour parier."}',
             'value_pt' => '{"0":"Os jogadores podem obter lucros adicionais se suas previsões estiverem corretas. Esta oferta geralmente é limitada no tempo e no número de eventos, por isso vale a pena ficar atento às atualizações e escolher os melhores momentos para apostar."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator of the Day"}',
                'value_es' => '{"0":"Combinada del día"}',
                'value_fr' => '{"0":"Pari Combiné du Jour"}',
                'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 27
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The «Accumulator of the Day» promotion encourages players to place accumulator bets with multiple events. Every day, MEGAPARI offers a special set of matches on which you can create an accumulator with enhanced odds. This way, you can get increased odds on accumulators with at least three events and receive an additional bonus for a winning combination."}',
             'value_es' => '{"0":"La promoción «Combinada del día» anima a los jugadores a realizar apuestas acumuladas con varios eventos. Cada día, MEGAPARI ofrece un conjunto especial de partidos en los que puedes crear una acumuladora con cuotas mejoradas. De esta manera, puedes obtener cuotas aumentadas en acumuladores con un mínimo de tres eventos y recibir un bono adicional en caso de combinación ganadora."}',
             'value_fr' => '{"0":"La promotion « Pari Combiné du Jour » encourage les joueurs à placer des paris combinés avec plusieurs événements. Chaque jour, MEGAPARI propose une sélection spéciale de matchs sur lesquels vous pouvez créer un combiné avec des cotes augmentées. Ainsi, vous pouvez obtenir des cotes rehaussées sur des combinés d’au moins trois événements et recevoir un bonus supplémentaire en cas de combinaison gagnante."}',
             'value_pt' => '{"0":"A promoção «Acumulador do Dia» incentiva os jogadores a fazer apostas acumuladas com vários eventos. Todos os dias, a MEGAPARI oferece um conjunto especial de partidas nas quais você pode criar um acumulador com odds aumentadas. Assim, você pode obter odds aumentadas em acumuladores com pelo menos três eventos e receber um bônus adicional para combinações vencedoras."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 28
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"For example, within the promotion, you may receive an extra bonus of +10% to the total odds."}',
             'value_es' => '{"0":"Por ejemplo, dentro de la promoción, puedes recibir un bono extra del +10% sobre las cuotas totales."}',
             'value_fr' => '{"0":"Par exemple, dans le cadre de la promotion, vous pouvez recevoir un bonus supplémentaire de +10 % sur les cotes totales."}',
             'value_pt' => '{"0":"Por exemplo, dentro da promoção, você pode receber um bônus extra de +10% sobre as odds totais."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 29
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 29
            ]
        );
    }
}
