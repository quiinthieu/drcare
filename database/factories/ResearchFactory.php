<?php

namespace Database\Factories;

use App\Models\Research;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ResearchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Research::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         $id =  $this->faker->numberBetween(1,30);
        return [
            'thumbnail' => 'storage/drcare/research/' . $id++ . '.png',
      
            'title' => $this->faker->randomElement(['SMILE MAKEOVER','ROOT CANALS TREATMENT
            ','GUM TREATMENTS']),
            'subtitle' => $this->faker->realText(60),
            'author' => $this->faker->firstName . ' ' . $this->faker->lastName ,
            'content' => json_encode($this->faker->randomElement(['smile makeover takes into consideration your facial appearance, skin tone, hair color, teeth (color, width, length, shape and tooth display), gum tissue and lips to develop your ideal smile. Smile makeovers are performed for many reasons and customized according to your unique considerations.

            What is it that you like or dislike about your smile or your teeth? Some aspects of your smile that your cosmetic dentist will review with you and that could be improved with a smile makeover include the following:
            
            Tooth Color: Silver or amalgam dental fillings can be replaced with natural, tooth-colored composite restorations, while teeth whitening can improve the color of stained or dulled teeth. Tooth color and shading are important considerations during the evaluation of and preparation for various procedures, including porcelain veneers, crowns, bridges, composite bonding and dental implants. When considering the color of your teeth, keep in mind that dark or discolored teeth may suggest an aged mouth. A well-shaped smile comprised of bright, white teeth lends to a youthful appearance. The shade your dentist selects for teeth whitening and veneers is carefully evaluated with special consideration given to the tone and color of your face and hair. Cosmetic dentists are skilled at finding the right balance between providing you with a brighter, whiter smile and maintaining a natural tooth color.
            
            Alignment and Spacing: Teeth that are crooked, overlapping or have gaps between them can be straightened and aligned when necessary through orthodontics or Invisalign and improved with veneers.
            
            Missing Teeth: One or more missing teeth can negatively affect the appearance of your smile – as well as affect your bite and increase your risk for tooth decay – making replacement an integral part of oral health and facial esthetics. Missing teeth can be replaced by dental implants, bridges or partial dentures.
            
            Harmony and Balance: Uneven, chipped and cracked teeth can be cosmetically bonded for an improved appearance, and a gummy smile can be re-contoured to help improve the overall look of the smile.
            
            Fuller Lips, Smile and Cheeks: An unshapely or aging face can be improved or rejuvenated with certain procedures in the smile makeover category, including orthodontics and/or oral maxillofacial surgery.
            
            A cosmetic dentist will work closely with you to develop a treatment plan designed to achieve exactly what you want from your makeover. This treatment plan may consist of many cosmetic and functionally restorative procedures, potentially including teeth whitening, composite bonding, veneers, dental crowns, orthodontics (braces), oral maxillofacial surgery and gummy smile reduction.','Root Canal Treatment (known as “Endodontic Treatment”) involves the treatment of disease or injury to the dental pulp or ‘nerve in the tooth’. This nerve is located in the very center of the tooth in a small narrow ‘canal space’ which extends from the crown to the tip of the root – the area inside the center of each tooth that contains nerves and blood vessels that help nourish the tooth. If the nerve is injured or diseased then it can die and this often leads to sensitivity, toothache or a dental abscess. It can also lead to the tooth actually discolouring.
            If you need an endodontic re-treatment, it means that the previous root canal treatment failed or that symptoms persist. This may happen shortly after the original treatment or even years later. Endodontic re-treatment involves the removal of existing root filling material, re-cleaning and disinfecting the root canals and placing a new root filling.

            In some cases a root treatment or re-treatment can be performed in one visit, but more visits may be necessary in trickier cases or where there is a more severe infection.

            Finally, if endodontic treatment or re-treatment cannot be successfully carried out on a particular tooth, or if the tooth is too structurally compromised to be successfully or predictably restored, then it may be better to remove the tooth and restore it with a dental implant and crown.

            At 32 smiles multispeciality dental clinic, we have the technology to help us with carrying out our Root Canal Treatment using latest rotary systems. We use the latest rotary endodontic systems along with high power magnification and led lighting for optimum visual access and maximum success rates.','More teeth are lost because of gum problems than because of tooth decay, so it is important to take care of your gums. Most adults have some degree of gum disease. Usually it progresses slowly and can be stopped from getting worse. Some people are genetically predisposed to developing gum problems.
            When you don’t brush your teeth for a while, you will notice a yellowish sticky paste that accumulates on them. This material looks like food debris, but it’s actually a film of bacteria which forms on the surface of the teeth and gums every day.

            Many of these bacteria are harmless. But others happily munch away at the same food you’re eating and then excrete toxins and enzymes – using the grooves where your tooth meets the gum as a toilet of sorts. Bacteria thrive in the plaque environment and multiply until they account for nearly 100% of the mass of the plaque. This is why it’s important to remove it.
            When your body notices the toxins, it mounts a defense against them by creating lots of new little blood vessels in the area to fight of the infection. The new blood vessels make the gums look red and swollen. But the bacteria attack the blood vessels, which then become fragile and bleed easily.

            This first stage of gum disease is called gingivitis, and it can be easily reversed. But gum disease is painless, and many people are unaware that they have it (most adults do have some degree of gum disease). As it progresses, the bone which anchors the teeth in the jaw is lost, making the teeth loose. If this is not treated, the teeth may eventually fall out or have to be taken out because of pain.
'])),
            'published_at' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'status' => $this->faker->numberBetween(0,1)
        ];
    }
}
